
CREATE TABLE Adresse(
  id_adresse int(11) PRIMARY KEY,
  ville VARCHAR(255),
  adrese VARCHAR(255),
  cp int(5),
  pays VARCHAR(255)
);

CREATE TABLE Utilisateur(
  id_utilisateur INT(11) PRIMARY KEY AUTO_INCREMENT,
  mail VARCHAR(255) UNIQUE,
  /*mdp BINARY(20),*/
  nom VARCHAR(255),
  prenom VARCHAR(255),
  tel int(10),
  FOREIGN KEY(id_adresse) REFERENCES Adresse(id_adresse)
);
/*
CREATE TABLE Etablissement(
  id_etablissement int(11) PRIMARY KEY,
  id_proprio int(11),
  id_adresse int(11),
  nom VARCHAR(255),
  mail_contact VARCHAR(255),
  tel_contact INT(10),
  FOREIGN KEY (id_proprio) REFERENCES Utilisateur(id_utilisateur),
  FOREIGN KEY (id_adresse) REFERENCES Adresse(id_adresse)
);
*/

CREATE TABLE Evenement(
  id_evenement INT(11) PRIMARY KEY,
  /*id_etablissement INT(11),*/
  id_organisateur INT(11),
  id_adresse INT(11) DEFAULT NULL,
  nom VARCHAR(255),
  date_deb DATE,
  date_fin DATE,
  /*FOREIGN KEY (id_etablissement) REFERENCES Etablissement(id_etablissement),*/
  FOREIGN KEY (id_organisateur) REFERENCES Utilisateur(id_utilisateur),
  FOREIGN KEY (id_adresse) REFERENCES Adresse(id_adresse)
);

CREATE TABLE Trajet(
  id_trajet INT(11) PRIMARY KEY,
  id_sam INT(11),
  h_depart INT(4) CHECK (h_depart BETWEEN 0000 AND 2400),
  nb_place INT(2),
  code_modif INT(4),
  id_event INT(11),
  FOREIGN KEY (id_event) REFERENCES Evenement(id_evenement),
  FOREIGN KEY (id_sam) REFERENCES Utilisateur(id_utilisateur)
);

CREATE TABLE InscritTrajet(
  id_inscrit INT(11),
  id_trajet INT(11),
  FOREIGN KEY (id_inscrit) REFERENCES Utilisateur(id_utilisateur),
  FOREIGN KEY (id_trajet) REFERENCES Trajet(id_trajet)
);

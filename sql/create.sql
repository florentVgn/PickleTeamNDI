
CREATE TABLE Adresse(
  id_adresse int(11) PRIMARY KEY AUTO_INCREMENT,
  ville VARCHAR(255),
  adrese VARCHAR(255),
  cp int(5)
);

CREATE TABLE Utilisateur(
  id_utilisateur INT(11) PRIMARY KEY AUTO_INCREMENT,
  mail VARCHAR(255) UNIQUE,
  nom VARCHAR(255),
  prenom VARCHAR(255),
  tel int(10)
);

CREATE TABLE Evenement(
  id_evenement INT(11) PRIMARY KEY AUTO_INCREMENT,
  id_adresse INT(11) DEFAULT NULL,
  nom VARCHAR(255),
  date_deb DATE,
  code_modif VARCHAR (5),
  FOREIGN KEY (id_adresse) REFERENCES Adresse(id_adresse)
);

CREATE TABLE Trajet(
  id_trajet INT(11) PRIMARY KEY AUTO_INCREMENT,
  id_sam INT(11),
  h_depart TIME,
  nb_place INT(2),
  code_modif VARCHAR (5),
  id_event INT(11),
  FOREIGN KEY (id_event) REFERENCES Evenement(id_evenement),
  FOREIGN KEY (id_sam) REFERENCES Utilisateur(id_utilisateur)
);

CREATE TABLE InscritTrajet(
  id_inscrit_trajet INT(11) PRIMARY KEY AUTO_INCREMENT,
  id_inscrit INT(11),
  id_trajet INT(11),
  FOREIGN KEY (id_inscrit) REFERENCES Utilisateur(id_utilisateur),
  FOREIGN KEY (id_trajet) REFERENCES Trajet(id_trajet)
);

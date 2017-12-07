INSERT INTO Adresse(ville,adrese,cp,pays) VALUES ('Valence','16 rue Truc',26000,'France');
INSERT INTO Utilisateur(mail,mdp,nom,prenom,id_adresse) VALUES ('chantharath.jeremie@gmail.com','test','chantharath','jeremie',0);
INSERT INTO Utilisateur(mail,mdp,nom,prenom,id_adresse) VALUES ('truc.jeremie@gmail.com','test','truc','jeremie',0);
INSERT INTO Utilisateur(mail,mdp,nom,prenom,id_adresse) VALUES ('chose.jeremie@gmail.com','test','chose','jeremie',0);
INSERT INTO Etablissement(id_proprio,id_adresse,nom,mail_contact,tel_contact) VALUES (1,0,'truc','chantharath.jeremie@gmail.com', 0600000000);
INSERT INTO Evenement(id_etablissement,id_organisateur,id_adresse,nom,date_deb,date_fin) VALUES (0,1,0,'chose',now(),NULL) ;
INSERT INTO Trajet(id_sam,h_depart,nb_place) VALUES (1,10,2);
INSERT INTO InscritTrajet (id_inscrit,id_trajet) VALUES (1,0);


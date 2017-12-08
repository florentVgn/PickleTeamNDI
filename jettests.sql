INSERT INTO Adresse(ville,adrese,cp,pays) VALUES ('Valence','16 rue Truc',26000,'France');
INSERT INTO Utilisateur(mail,nom,prenom,tel) VALUES ('chantharath.jeremie@gmail.com','chantharath','jeremie',0600000000);
INSERT INTO Utilisateur(mail,mdp,nom,prenom,tel) VALUES ('truc.jeremie@gmail.com','truc','jeremie',0600000000);
INSERT INTO Utilisateur(mail,mdp,nom,prenom,tel) VALUES ('chose.jeremie@gmail.com','chose','jeremie',0600000000);
INSERT INTO Evenement(id_organisateur,id_adresse,nom,date_deb,date_fin) VALUES (1,0,'chose',now(),NULL) ;
INSERT INTO Trajet(id_sam,h_depart,nb_place) VALUES (1,10,2);
INSERT INTO InscritTrajet (id_inscrit,id_trajet) VALUES (1,0);


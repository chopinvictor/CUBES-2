<?php

# Connexion à la BDD
function getDb(){ 
    $db = new PDO('mysql:host=localhost;dbname=cube2;charset=utf8','root'); # PDO permet de faire des requêtes à la BDD dans le PHP.
    return $db;
}

# Affiche toutes les données issues du capteur
function getAllEntrySEN(){   
    $db = getDb(); # appel à la fonction qui permet la connexion à la BDD
    $r = $db->query("SELECT * FROM meteo WHERE meteo.referencement = 'SEN'"); #reqûete vers BDD afin de sélectionner toutes les données de la table météo qui ont comme referencement SEN (=données maison)
    return $r->fetchAll(); # on retourne un tableau contenant tous les résultats récupérés lors de la requête à la BDD
}

# Affiche toutes les données issues de l'API
function getAllEntryOPM(){   
    $db = getDb();
    $r = $db->query("SELECT * FROM meteo WHERE meteo.referencement = 'OPM'");
    return $r->fetchAll();
}

# Affiche la dernière entrée issue du capteur
function getLastEntrySEN(){   
    $db = getDb();  # appel à la fonction qui permet la connexion à la BDD
    $r = $db->query("SELECT * FROM meteo WHERE meteo.referencement = 'SEN' ORDER BY id_meteo DESC LIMIT 1;"); #requête vers la BDD afin de sélectionner toutes les données de la table météo qui ont le referencement SEN et que l'on classe par ordre décroissant afin d'otenir la dernière donnée collectée
    return $r->fetch(); #retourne l'objet récupéré lors de la requête à la BDD
}

# Affiche la dernière entrée issue de l'API
function getLastEntryOPM(){   
    $db = getDb();
    $r = $db->query("SELECT * FROM meteo WHERE meteo.referencement = 'OPM' ORDER BY id_meteo DESC LIMIT 1;");
    return $r->fetch();
}
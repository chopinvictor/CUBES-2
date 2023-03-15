<?php

function getDb(){
    $db = new PDO('mysql:host=localhost;dbname=cube2;charset=utf8','root');
    return $db;
}

function getAllEntrySEN(){   // Affiche toutes les données issues du capteur
    $db = getDb();
    $r = $db->query("SELECT * FROM meteo WHERE meteo.referencement = 'SEN'");
    return $r->fetchAll();
}

function getAllEntryOPM(){   // Affiche toutes les données issues de l'API
    $db = getDb();
    $r = $db->query("SELECT * FROM meteo WHERE meteo.referencement = 'OPM'");
    return $r->fetchAll();
}


function getLastEntrySEN(){   // Affiche la dernière entrée issue du capteur
    $db = getDb();
    $r = $db->query("SELECT * FROM meteo WHERE meteo.referencement = 'SEN' ORDER BY id_meteo DESC LIMIT 1;");
    return $r->fetch();
}

function getLastEntryOPM(){   // Affiche la dernière entrée issue de l'API
    $db = getDb();
    $r = $db->query("SELECT * FROM meteo WHERE meteo.referencement = 'OPM' ORDER BY id_meteo DESC LIMIT 1;");
    return $r->fetch();
}
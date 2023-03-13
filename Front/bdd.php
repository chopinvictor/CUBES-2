<?php

function getDb(){
    $db = new PDO('mysql:host=localhost;dbname=cube2;charset=utf8','juliette', 'Quinou123');
    return $db;
}

function readAllData(){   // Affiche toutes les données
    $db = getDb();
    $r = $db->query("SELECT * FROM meteo");
    return $r->fetchAll();
}   
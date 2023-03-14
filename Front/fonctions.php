<?php

 function htmlListData($data){
    $html = '';

    foreach($data as $d){
        $idEntree = $d['id_meteo'];
        $html.='
        <div class="li">
        <div class="hoverindex">
            <a class="h5" <h5>'.$d['id_meteo'].'</h5></a>
            <section>
                <div>
                    <p>'.$d['temperature'].'</p>
                </div>
                <div>
                    <p>'.$d['pression'].'</p>
                </div>
                <div>
                    <p>'.$d['humidite'].'</p>
                </div>
                <div>
                    <p>'.$d['date_heure'].'</p>
                </div>';
            }
 return $html;
}

function getLastTemperature(){
    $db = getDb();
    $r = $db->query("SELECT temperature FROM meteo WHERE referencement = 'opm' ORDER BY date_heure DESC LIMIT 1;");
    return $r->fetchColumn();
}

function getLastHumidite(){
    $db = getDb();
    $r = $db->query("SELECT humidite FROM meteo WHERE referencement = 'opm' ORDER BY date_heure DESC LIMIT 1;");
    return $r->fetchColumn();
}

function getLastPression(){
    $db = getDb();
    $r = $db->query("SELECT pression FROM meteo WHERE referencement = 'opm' ORDER BY date_heure DESC LIMIT 1;");
    return $r->fetchColumn();
}

function getLastHeure(){
    $db = getDb();
    $r = $db->query("SELECT date_heure FROM meteo WHERE referencement = 'opm' ORDER BY date_heure DESC LIMIT 1;");
    return $r->fetchColumn();
}

function getLastTemperatureMaison(){
    $db = getDb();
    $r = $db->query("SELECT temperature FROM meteo WHERE referencement = 'sen' ORDER BY date_heure DESC LIMIT 1;");
    return $r->fetchColumn();
}

function getLastHumiditeMaison(){
    $db = getDb();
    $r = $db->query("SELECT humidite FROM meteo WHERE referencement = 'sen' ORDER BY date_heure DESC LIMIT 1;");
    return $r->fetchColumn();
}

function getLastPressionMaison(){
    $db = getDb();
    $r = $db->query("SELECT pression FROM meteo WHERE referencement = 'sen' ORDER BY date_heure DESC LIMIT 1;");
    return $r->fetchColumn();
}

function getLastHeureMaison(){
    $db = getDb();
    $r = $db->query("SELECT date_heure FROM meteo WHERE referencement = 'opm' ORDER BY date_heure DESC LIMIT 1;");
    return $r->fetchColumn();
}


//Toutes les requetes qui vont récuperer les 3 dernière donnée en excluant la dernière de openweathermap
function getLastTemperature3(){
    $db = getDb();
    $r = $db->query("SELECT temperature FROM meteo WHERE referencement = 'opm' ORDER BY date_heure DESC LIMIT 1, 3;");
    return $r->fetchColumn();
}

function getLastHumidite3(){
    $db = getDb();
    $r = $db->query("SELECT humidite FROM meteo WHERE referencement = 'opm' ORDER BY date_heure DESC LIMIT 1, 3;");
    return $r->fetchColumn();
}

function getLastPression3(){
    $db = getDb();
    $r = $db->query("SELECT pression FROM meteo WHERE referencement = 'opm' ORDER BY date_heure DESC LIMIT 1, 3;");
    return $r->fetchColumn();
}

function getLastHeure3(){
    $db = getDb();
    $r = $db->query("SELECT date_heure FROM meteo WHERE referencement = 'opm' ORDER BY date_heure DESC LIMIT 1, 3;");
    return $r->fetchColumn();
}


//Toutes les requetes qui vont récuperer les 3 dernière donnée en excluant la dernière de Maison
function getLastTemperatureMaison3(){
    $db = getDb();
    $r = $db->query("SELECT temperature FROM meteo WHERE referencement = 'sen' ORDER BY date_heure DESC LIMIT 1, 3;");
    return $r->fetchColumn();
}

function getLastHumiditeMaison3(){
    $db = getDb();
    $r = $db->query("SELECT humidite FROM meteo WHERE referencement = 'sen' ORDER BY date_heure DESC LIMIT 1, 3;");
    return $r->fetchColumn();
}

function getLastPressionMaison3(){
    $db = getDb();
    $r = $db->query("SELECT pression FROM meteo WHERE referencement = 'sen' ORDER BY date_heure DESC LIMIT 1, 3;");
    return $r->fetchColumn();
}

function getLastHeureMaison3(){
    $db = getDb();
    $r = $db->query("SELECT date_heure FROM meteo WHERE referencement = 'sen' ORDER BY date_heure DESC LIMIT 1, 3;");
    return $r->fetchColumn();
}

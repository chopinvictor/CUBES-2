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

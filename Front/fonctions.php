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
<?php

 function htmlListData($data){
    $html = '';

    foreach($data as $d){
        
        $html.='    
        <tr>
                <td>'.$d['date_heure'].'</td>
                <td>'.$d['temperature'].' °C</td>
                <td>'.$d['humidite'].' %</td>
                <td>'.$d['pression'].' hPa</td>
        </tr>';
            }
 return $html;
}
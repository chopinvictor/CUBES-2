<link rel="stylesheet" href="header.css" />

<?php
    $lastEntryOPM = getLastEntryOPM();
    $description = "Chargement...";

    switch ($lastEntryOPM['description'])
    {
        case 'clear sky':
            $description = "Ensoleillé";
            break;
        case 'few clouds':
            $description = "Quelques nuages";
            break;
        case 'shattered clouds':
        case 'broken clouds':
            $description = "Nuageux";
            break;
        case 'light rain':
        case 'shower rain':
            $description = "Pluvieux";
            break;
        case 'rain':
            $description = "Averses";
            break;
        case 'thunderstorm':
            $description = "Orageux";
            break;
        case 'snow':
            $description = "Neige";
            break;
        case 'mist':
            $description = "Brouillard";
            break;
        default:
            $description = "Erreur de chargement";
            break;                              
    }
    
    $iconCode = $lastEntryOPM['ico'];
    $iconUrl = 'assets/'.$iconCode.'@2x.png';
?>


<div class="header">
    <div class="inner-header flex">
        <h1>Ma Station Météo</h1>
        <div id="actu">
            <p><?php echo $description ?></p>
            <img src="<?php echo $iconUrl ?>" />
        </div>
    </div>
</div>

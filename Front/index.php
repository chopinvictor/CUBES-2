<?php
require_once('bdd.php'); #appelle le contenu du fichier concerné et provoque une erreur bloquante s'il est indisponible
require_once('fonctions.php');
$lastEntrySEN = getLastEntrySEN(); #récupère les dernières données du capteur dans le fichier bdd
$lastEntryOPM = getLastEntryOPM(); #récupère les dernières données de l'API dans le fichier bdd
//var_dump($lastEntry);
?>

<!DOCTYPE html>
<html lang="fr" style="max-width: 100%;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Bienvenue sur Ma Station Météo</title>
    <link rel="stylesheet" href="index.css" />
</head>
<body>
    <header>
        <?php 
           require_once('header.php'); 
        ?>
    </header>

    <div id="mainFrame">
        <section class="section">
            <h3>Pau<p>Données récupérées à <?php echo (substr($lastEntryOPM['date_heure'], 11, 5))?></p></h3> <!--ne renvoie pas toute la string, commence au 11ème caractère et ne sélectionne que 5 caractères-->
                <div class="Data">
                    <div>Température :<span><?php echo $lastEntryOPM['temperature'] ?><span class="unit"> °C</span></span></div><!--renvoie la dernière donnée de temp-->
                    <div>Humidité :<span><?php echo $lastEntryOPM['humidite'] ?><span class="unit"> %</span></span></div>
                    <div>Pression :<span><?php echo $lastEntryOPM['pression'] ?><span class="unit"> hPa</span></span></div>
                    <div><a href="histOPM.php">Historique</a></div> <!-- lien vers l'historique de OPM>
                </div>
        </section>
        <section class="section">
            <h3>Maison<p>Données récupérées à <?php echo (substr($lastEntrySEN['date_heure'], 11, 5))?></p></h3>
                <div class="Data">
                    <div>Température :<span><?php echo $lastEntrySEN['temperature'] ?><span class="unit"> °C</span></span></div>
                    <div>Humidité :<span><?php echo $lastEntrySEN['humidite'] ?><span class="unit"> %</span></span></div>
                    <div>Pression :<span><?php echo $lastEntrySEN['pression'] ?><span class="unit"> hPa</span></span></div>
                    <div><a href="histSEN.php">Historique</a></div>
        </section>
        <!-- <div id="leftNav">

        </div> -->
    </div> 
</body>
</html>
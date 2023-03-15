<?php
require_once('bdd.php');
require_once('fonctions.php');
$lastEntrySEN = getLastEntrySEN();
$lastEntryOPM = getLastEntryOPM();
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
            <h3>Pau<p>Données récupérées à <?php echo (substr($lastEntryOPM['date_heure'], 11, 5))?></p></h3>
                <div class="Data">
                    <div>Température :<span><?php echo $lastEntryOPM['temperature'] ?><span class="unit"> °C</span></span></div>
                    <div>Humidité :<span><?php echo $lastEntryOPM['humidite'] ?><span class="unit"> %</span></span></div>
                    <div>Pression :<span><?php echo $lastEntryOPM['pression'] ?><span class="unit"> hPa</span></span></div>
                    <div><a href="histOPM.php">Historique</a></div>
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




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../js/index.js"></script>   
</body>
</html>
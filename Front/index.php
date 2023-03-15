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
            <group>
                <img src="assets/city.png"></img>
                <h3>Pau
                    <p>Données récupérées à 
                        <?php echo (substr($lastEntryOPM['date_heure'], 11, 5))?>
                    </p>
                </h3>
            </group>
                <div class="Data">
                    <div>
                       <subgroup>
                            <img src="assets/thermometer.png">Température :</img>
                        </subgroup>
                        <span><?php echo $lastEntryOPM['temperature'] ?>
                            <span class="unit">
                                °C
                            </span>
                        </span>
                    </div>
                    <div>
                       <subgroup>
                            <img src="assets/drop.png">Humidité :</img>
                        </subgroup>
                        <span><?php echo $lastEntryOPM['humidite'] ?>
                            <span class="unit">
                                %
                            </span>
                        </span>
                    </div>
                    <div>
                       <subgroup>
                       <img src="assets/barometer.png">Pression :</img>
                        </subgroup>
                        <span><?php echo $lastEntryOPM['pression'] ?>
                            <span class="unit">
                                °C
                            </span>
                        </span>
                    </div>
                    <div>
                        <a href="histOPM.php">Historique</a>
                    </div>
                </div>
        </section>
        <section class="section">
            <group>
                <img src="assets/house.png"></img>
                <h3>Maison
                    <p>Données récupérées à 
                        <?php echo (substr($lastEntrySEN['date_heure'], 11, 5))?>
                    </p>
                </h3>
            </group>
            <div class="Data">
                <div>
                       <subgroup>
                            <img src="assets/thermometer.png">Température :</img>
                        </subgroup>
                        <span><?php echo $lastEntrySEN['temperature'] ?>
                            <span class="unit">
                                °C
                            </span>
                        </span>
                    </div>
                    <div>
                       <subgroup>
                            <img src="assets/drop.png">Humidité :</img>
                        </subgroup>
                        <span><?php echo $lastEntrySEN['humidite'] ?>
                            <span class="unit">
                                %
                            </span>
                        </span>
                    </div>
                    <div>
                       <subgroup>
                       <img src="assets/barometer.png">Pression :</img>
                        </subgroup>
                        <span><?php echo $lastEntrySEN['pression'] ?>
                            <span class="unit">
                                °C
                            </span>
                        </span>
                    </div>
                    <div>
                        <a href="histSEN.php">Historique</a>
                    </div>
        </section>
    </div>
</body>
</html>
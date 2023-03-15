<?php
require_once('bdd.php');
require_once('fonctions.php');
$data = getAllEntryOPM();
?>

<!DOCTYPE html>
<html lang="fr" style="max-width: 100%;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Historique de l'API</title>
    <link rel="stylesheet" href="hist.css" />
</head>
<body>
    <header>
        <?php 
           require_once('header.php');
        ?>
    </header>
    
    <section class="section">
        <div id="top">
            <a class="bouton" href="index.php">Retour</a>
            <a id="histBouton" class="bouton" href="histSEN.php">Historique du capteur</a>
        </div>
        <div class="Data">
            <table class="dataContent">
  <caption>Récapitulatif des données récupérées de l'API</caption>
  <thead>
    <tr>
      <th scope="col" width="25%">Date et Heure</th>
      <th scope="col" width="25%">Température</th>
      <th scope="col" width="25%">Humidité</th>
      <th scope="col" width="25%">Pression</th>
    </tr>
  </thead>
  <tbody>
    <?php echo htmlListData($data); ?>
  </tbody>
</table>

                </ul>
</div>
    </section>

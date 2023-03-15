<?php
require_once('bdd.php'); #appelle le contenu du fichier concerné et provoque une erreur bloquante s'il est indisponible
require_once('fonctions.php');
$data = getAllEntrySEN(); #récupère toutes les données du capteur dans le fichier bdd
?>

<!DOCTYPE html>
<html lang="fr" style="max-width: 100%;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Historique du capteur</title>
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
            <a id="histBouton" class="bouton" href="histOPM.php">Historique de l'API</a>
        </div>
        <div class="Data">
            <table class="dataContent">
  <caption>Récapitulatif des données récupérées à partir du capteur</caption>
  <thead>
    <tr>
      <th scope="col" width="20%">Date et Heure</th>
      <th scope="col" width="20%">Température</th>
      <th scope="col" width="20%">Humidité</th>
      <th scope="col" width="20%">Pression</th>
    </tr>
  </thead>
  <tbody>
    <?php echo htmlListData($data); ?> <!--appel à la fonction présente dans le fichier fonctions.php>
  </tbody>
</table>

                </ul>
</div>
    </section>

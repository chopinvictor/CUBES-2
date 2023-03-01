
<!DOCTYPE html>
<html lang="fr" style="max-width: 100%;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Bienvenue sur CESI.météo</title>
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="header.css" />
    <link rel="stylesheet" href="nav.css" />
</head>
<body>
    <header>
        <?php 
           require_once('header.php');
        ?>
    </header>

    <div id="mainFrame">
        <?php 
           require_once('nav.php');
        ?>
        <section class="section">
            <h3>Ma Ville</h3>
        </section>
        <section class="section">
            <h3>Mon Domicile</h3>
        </section>
        <div id="leftNav">

        </div>
    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../js/index.js"></script>   
</body>
</html>
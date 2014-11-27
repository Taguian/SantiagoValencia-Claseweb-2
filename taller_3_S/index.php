<?php include_once('includes/database.php') ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Food Finder</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=false"
              type="text/javascript"></script>
    </head>
    <body onload="initialize()">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <header>
        <h1>Where should I fucking go?</h1>
    </header>
    <div class="row">
        <h3 id="texto">Drop here the places you wanna fucking see</h3>
        <section id="imagebox">
            <img id="Parada" src="img/Parada.png">
            <img id="Interes" src="img/Interes.png">
            <img id="Restaurante" src="img/Restaurante.png">
        </section>
    </div>
    <section id="dropbox">
        <canvas id="displayP" height="240"></canvas>
    </section>
    <div>
        <div id="map_canvas" style="height:658px"></div>
    </div>
    <div id="map" style="width: 1000px; height: 1000px;"></div>
    <?php 
    /* Prueba de mapa con puntos asignados manualmente
    <div class="mapa">
        <script type="text/javascript" src="js/mapa.js"></script>
    </div>
    */
    ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    </body>
</html>

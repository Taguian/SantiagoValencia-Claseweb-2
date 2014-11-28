<!DOCTYPE html>
<?php session_start(); ?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
  <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <header>
      <figure>
        <a href="perfil.php"><img src="images/logototal.png"/></a>
      </figure>
     </header>
    <nav>
      <ul>
        <li><div><a href="perfilshirts.php">Shirts</a></div></li>
        <li><div><a href="perfilpants.php">Pants</a></div></li>
        <li><div><a href="perfilcoats.php">Coats</a></div></li>
        <li><div><img src="images/carrito.png"></div></li>
       </ul>
    </nav>
    <?php
      include_once("includes/database.php"); 
      $queryProductos="SELECT tallerdos.productos.id AS idP,tallerdos.productos.nombre AS nombreP, tallerdos.productos.precio AS precioP, tallerdos.productos.compras as comprasP, tallerdos.productos.imagen as imagenP FROM tallerdos.productos WHERE tallerdos.productos.categoria = 3";
      $resultP = mysqli_query($con,$queryProductos);
      while ($rowP=mysqli_fetch_array($resultP)) {
        # code...
        echo "<article>";
          echo "<div>";
            echo "<h2>".$rowP["nombreP"]."</h2>";
            echo "<h3>".$rowP["precioP"]."</h3>";
            echo "<div>";
              echo"<a href='includes/addtocart.php?idP=".$rowP["idP"]."'><h4>add to cart</h4></a>";
            echo "</div>";
          echo "</div>";
          echo "<figure>";
            echo "<img src=".$rowP["imagenP"].">";
          echo "</figure>";
        echo "</article>";
      }
     ?>
    <div>
      <!--Registro -->
    </div>
  </body>
</html>

<!DOCTYPE html>
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
        <img src="images/logototal.png"/>
      </figure>
     </header>
    <nav>
      <ul>
        <li><div><a href="#">Shirts</a></div></li>
        <li><div><a href="#">Pants</a></div></li>
        <li><div><a href="#">Coats</a></div></li>
        <li><div><img src="images/carrito.png"></div></li>
       </ul>
    </nav>
    <div>
      <!--Registro -->
      <h2>Registrate</h2>
      <form action="includes/registrarUsuario.php" method="POST">
        <label></label><input type="text" value="usuario" name="nombre"/>
        </br>
        <label></label><input type="text" value="correo" name="correo"/>
        </br>
        <label></label><input type="password" name="pw"/>
        </br>
        <label></label><input type="password" name="confirmarPw"/>
        </br>
        <input type="submit" value="Registrarse">
        </br>
        <h3>Ya eres un usuario? Haz <a href="login.php"/>LOG IN</a></h3>
      </form>
    </div>
  </body>
</html>

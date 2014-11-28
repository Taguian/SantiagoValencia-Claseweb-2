
<?php session_start(); ?>
  <?php
   /*Codigo sacado de ejercicios realizados para la clase*/
   $correo =$_POST["correo"];
   $pw =$_POST["pw"];
   include_once("database.php");
   $validar="SELECT tallerdos.usuarios.nombre AS nombreUsuario FROM tallerdos.usuarios WHERE tallerdos.usuarios.correo='$correo' AND tallerdos.usuarios.contrasena='$pw'";
   $usuarioValido = mysqli_query($con,$validar);
    if(mysqli_num_rows($usuarioValido) < 1)
    {
        echo "<h1>No se pudo verificar, revise que sus datos hayan sido intriducidos correctamente</h1>";
        echo"<meta http-equiv='refresh' content='0.5;url=/Taller_2_S/login.php'>";/*sistema para volver a la pantalla de inicio, proporcionado por Sebastian Vasquez*/
    }
    else{
      while ($row= mysqli_fetch_array($usuarioValido)) {
        $_SESSION["username"] = $row["nombreUsuario"];
        echo"<meta http-equiv='refresh' content='0.5;url=/Taller_2_S/perfil.php'>";/*sistema para volver a la pantalla de inicio, proporcionado por Sebastian Vasquez*/
      }
    }
  ?>

<?php session_start(); 
/*Codigo sacado de ejercicios realizados para la clase*/
?>
    <?php
    $nombre=$_POST["nombre"];
    $correo =$_POST["correo"];
    $pw =$_POST["pw"];
    $confirmacion=$_POST["confirmarPw"];
    include_once("database.php");

    if($pw==$confirmacion){
        $registrar="INSERT INTO tallerdos.usuarios (`id`, `correo`, `nombre`, `contrasena`) VALUES ('','$correo','$nombre','$pw')";
        $comunicacion= mysqli_query($con,$registrar);
       echo"<meta http-equiv='refresh' content='0.5;url=/Taller_2_S/index.php'>";/*sistema para volver a la pantalla de inicio, proporcionado por Sebastian Vasquez*/
   }else{
    echo"<h2>Introduzca correctamente sus datos en los campos, revise que las contraseñas coincidan</h2>";
    echo"<meta http-equiv='refresh' content='0.5;url=/Taller_2_S/index.php'>";/*sistema para volver a la pantalla de inicio, proporcionado por Sebastian Vasquez*/
}
if($comunicacion == false)
{
  echo "<h4>Error: ".mysqli_error($con)."</h4>";
} 
?>

<?php session_start(); 
	/*El funcionamiento del carrito de compras fue proporcionado por el estudiante Kammil Carranza quien idea una
	manera de manejar una base de datos la cual llena para realizar la compra y luego vacea una vez se concreta la compra
	*/
?>
<?php
include_once("database.php");
if(isset($_GET["idP"])){ 
	$idAlmacenado= $_GET["idP"];
	$sqlValidacion= "SELECT tallerdos.carrito.idproducto FROM tallerdos.carrito WHERE tallerdos.carrito.idproducto='".$idAlmacenado."' AND tallerdos.carrito.idusuario='".$_SESSION["username"]."'";
	$resValidacion=mysqli_query($con,$sqlValidacion);
	if(mysqli_num_rows($resValidacion)<1){
		/*con el query de arriba y este if, Kammil se asegura de no adicionar al carrito una compra que ya este registrado, evitando asi duplicados...sin embargo pienso en la dinamica en 
		en la que el cliente planee comprar dos unidades de un mimso producto, para solucionar esto agregaria una opcion de cantidad a la pagina y registraria la cantidad de veces necesaria en el carrito 
		con un for.
		*/
		$sql="INSERT INTO `carrito`(`id`, `idusuario`, `idproducto`) VALUES ('','".$_SESSION["username"]."','$idAlmacenado'))";
		$comunicacion=mysqli_query($con,$sql);
	}
	echo"<meta http-equiv='refresh' content='0.5;url=/Taller_2_S/perfil.php'>";
}
?>

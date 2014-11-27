<?php
include_once('includes/database.php');
/*Por obra de Zatanas llegan los datos aqui a traves de su mensajero Jason, porque Freddy kruger estaba ocupado*/
$marcador = $_POST['marcador'];
$result="";
$tmp=[];
$query = "SELECT * FROM tallertres.lugares WHERE lugares.clase = '".$marcador"'";
$resultado = mysqli_query($con,$query);

while ($row = mysqli_fetch_array($resultado)){
	$temp['id'] = $row['id'];
	$temp['latit'] = $row['latitud'];
	$temp['longi']=$row['longitud'];
	$temp['nomb']=$row['nombre'];
	array_push($tmp, $temp);
}
$result["temps"] = $tmp;

echo json_encode($result);
?>
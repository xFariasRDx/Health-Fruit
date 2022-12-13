<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$ciudad=$_POST['ciudad'];
$destino=$_POST['destino'];
$salida=$_POST['salida'];
$llegada=$_POST['llegada'];
$frutas=$_POST['frutas'];
$cantidad=$_POST['cantidad'];


$sql="INSERT INTO paquete VALUES('$id','$ciudad','$destino','$salida','$llegada','$frutas','$cantidad')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>
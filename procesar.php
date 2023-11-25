<?php
/*CREDENCIALES PARA INGRESAR A LA BASE DE DATOS*/
$username = "root";
$password = "";
$servername = "localhost";
$dbName = "base1";

/*CONEXION A LA BASE DE DATOS*/

$conn = new mysqli($servername,$username,$password,$dbName);

if($conn->connect_error){
    die("Fallo la conexion");
}

$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];

$sql = "INSERT INTO personas (nombre, apellido) VALUES('$nombre','$apellido')";
//$sql = "INSERT INTO personas (nombre, apellido) VALUES(juan,perez)";
//var_dump($sql);
if ($conn->query($sql) === TRUE){
    echo "YA SE GUARDARON DATOS";
}else{
    echo "error:". $sql."<br>". $conn->error;
}
?>
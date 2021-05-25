<?php
$servername = "localhost";
$username = "php";
$password = "1234";
$dbname = "pruebas";
$cod = $_POST['cod'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO productos (cod, descripcion, precio, stock)
VALUES ('$cod', '$descripcion', '$precio', '$stock')";

if ($conn->query($sql) === TRUE) {
  echo "Nuevo producto insertado";
} else {
  echo "Error al intentar insertar un nuevo producto: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

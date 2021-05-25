<?php
$servername = "localhost";
$username = "php";
$password = "1234";
$dbname = "pruebas";
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$dni = $_POST['dni'];
$email = $_POST['email'];
$fechadenacimiento = $_POST['fechadenacimiento'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO clientes (nombre, apellidos, dni, email, fechadenacimiento)
VALUES ('$nombre', '$apellidos', '$dni', '$email', '$fechadenacimiento')";

if ($conn->query($sql) === TRUE) {
  echo "Nuevo cliente insertado";
} else {
  echo "Error al intentar insertar un nuevo cliente: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

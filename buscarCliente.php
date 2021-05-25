<?php
$servername = "localhost";
$username = "php";
$password = "1234";
$dbname = "pruebas";

$textoabuscar = $_POST['bus'];
$opcion = $_POST['listadeopciones'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$sql = "SELECT nombre, apellidos, dni, email, fechadenacimiento FROM clientes where ";
if ($opcion == '1') {
  $sql = $sql. "nombre like '%$textoabuscar%' ";
}elseif ($opcion == '2') {
    $sql = $sql. "apellidos like '%$textoabuscar%' ";
}elseif ($opcion == '3') {
    $sql = $sql. "dni like '%$textoabuscar%' ";
}elseif ($opcion == "4") {
    $sql = $sql. "email like '%$textoabuscar%' ";
}



$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "nombre: " . $row["nombre"]. " - apellidos: " . $row["apellidos"]. " dni: " . $row["dni"]. " email: " . $row["email"]. " fechadenacimiento: " . $row["fechadenacimiento"]. "<br>";
  }
} else {
  echo "0 results";
}



$conn->close();

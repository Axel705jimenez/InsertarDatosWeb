<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BD";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Selección de los datos de la tabla
$sql = "SELECT * FROM datos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Mostrar los datos en una tabla
  echo "<table><tr><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>CURP</th><th>Numero de Seguro Social</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["nombre"]. "</td><td>" . $row["apellido_paterno"]. "</td><td>" . $row["apellido_materno"]. "</td><td>" . $row["curp"]. "</td><td>" . $row["numero_seguro_social"]. "</td></tr>";
  }
  echo "</table>";
} else {
  echo "No se han encontrado datos.";
}

$conn->close();
?>

</body>
</html>

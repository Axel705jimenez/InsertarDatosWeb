<!DOCTYPE html>
<html>
<head>
<title>Insertar
</title>

<body>
<form action="Mostrar.php" method="get">
<?php
$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$base_de_datos = "BD";

$conexion = mysqli_connect($servidor, $usuario, $contraseña, $base_de_datos);

if (mysqli_connect_errno()) {
  echo "Error al conectar con la base de datos: " . mysqli_connect_error();
  exit();
}

$nombre = $_GET['nombre'];
$apellido_paterno = $_GET['APaterno'];
$apellido_materno = $_GET['AMaterno'];
$curp = $_GET['CURP'];
$numero_seguro_social = $_GET['NumeroSeguroSocial'];

$query = "INSERT INTO datos (nombre, apellido_paterno, apellido_materno, curp, numero_seguro_social) VALUES ('$nombre', '$apellido_paterno', '$apellido_materno', '$curp', '$numero_seguro_social')";

if (mysqli_query($conexion, $query)) {
  mysqli_close($conexion);
  echo "<script>window.location.replace('Mostrar.php')</script>";
} else {
  echo "Error al guardar los datos: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>

</from>
</body>
</html>
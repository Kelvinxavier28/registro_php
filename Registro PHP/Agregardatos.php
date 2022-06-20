<?php
$conec = new mysqli("localhost", "root", "", "sistem_fares");
if ($conec->connect_errno) {
    die("Conexion fallida: " . $conec->connect_errno);
}
$codigo = $_POST["codigo"];
$nombre = $_POST["nombre"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$Sexo = $_POST["Sexo"];
$Observaciones = $_POST["Observaciones"];
$sql = "INSERT INTO registro (codigo, nombre, direccion, telefono, Sexo, Observaciones) VALUES ('$codigo', '$nombre', '$direccion', '$telefono', '$Sexo', '$Observaciones')";
if ($conec->query($sql) === TRUE) {
    echo "Registro agregado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conec->error;
}
$conec->close();
?>

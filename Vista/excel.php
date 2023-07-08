<?php
require_once '../MODELO/conexion.php';

$query = "SELECT id_incidente, categoria, prioridad, estado, descripcion, c_usuario, telefono FROM u_incidentes";
$resultado = mysqli_query($conexion, $query);
if (!$resultado) {
    die('Error al ejecutar la consulta: ' . mysqli_error($conexion));
}

$tempFile = tempnam(sys_get_temp_dir(), 'csv');

$file = fopen($tempFile, 'w');

fputcsv($file, ['id_incidente', 'categoria', 'prioridad', 'estado', 'descripcion', 'c_usuario', 'telefono']);

while ($row = mysqli_fetch_assoc($resultado)) {
    fputcsv($file, $row);
}

fclose($file);

header('Content-Type: application/csv');
header('Content-Disposition: attachment; filename="datos_incidentes.csv"');
header('Content-Length: ' . filesize($tempFile));

readfile($tempFile);

unlink($tempFile);

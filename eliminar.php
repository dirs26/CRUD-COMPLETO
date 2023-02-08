<?php

//conexion - dsn
$dsn="pgsql:host=localhost;dbname=postgres";
$conn=new PDO($dsn, "postgres", "curso");
var_dump($conn);
// prepare
$sql = 'CALL public.sp_delete_productos(?)';
$stmt = $conn->prepare($sql);

$nombre = $_POST['nombre'];
// bindParameter
$stmt->bindParam(1, $nombre);
//execute
$stmt->execute();
//mostrar
echo ("<p>registro insertado</p>");
header('location:eliminar.html');
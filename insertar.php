<?php

//conexion - dsn
$dsn="pgsql:host=localhost;dbname=postgres";
$conn=new PDO($dsn, "postgres", "curso");
var_dump($conn);
// prepare
$sql = 'CALL public.sp_add_productos(?, ?)';
$stmt = $conn->prepare($sql);

$nombre = $_POST['nombre'];
$unidades =$_POST['unidades'];
// bindParameter
$stmt->bindParam(1, $nombre);
$stmt->bindParam(2, $unidades);
//execute
$stmt->execute();
//mostrar
echo ("<p>registro insertado</p>");
header('location:insertar.html');
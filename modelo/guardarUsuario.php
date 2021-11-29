<?php
error_reporting(E_ALL);
require_once "conexion.php";
$obj = json_decode(file_get_contents("php://input"));
// Esto encripta la contraseña
$obj->pass = md5($obj->pass);
$stmt = $db->prepare("INSERT INTO registro_cliente (Nombre,Apellidos,Correo,Contraseña) VALUES (?,?,?,?)");
// El ssss es porque todos son tipo string si alguno fuera entero iria una I en el lugar de la S que corresponde
$stmt->bind_param('ssss',$obj->Nombre,$obj->Apellidos,$obj->Correo,$obj->pass);
$stmt->execute();
$stmt->close();
?>
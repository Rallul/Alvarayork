<?php
error_reporting(E_ALL);
require_once "conexion.php";
$obj = json_decode(file_get_contents("php://input"));
$stmt = $db->prepare("UPDATE registro_cliente SET Nombre = ?, Apellidos = ?, Correo = ?, Contraseña = ? WHERE Id_Cliente = ?");
$stmt->bind_param('ssssi',$obj->Nombre,$obj->Apellidos,$obj->Correo,$obj->pass,$obj->Id_Cliente);
$stmt->execute();
$stmt->close();
?>
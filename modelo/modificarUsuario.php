<?php
error_reporting(E_ALL);
require_once "conexion.php";
$obj = json_decode(file_get_contents("php://input"));
$stmt = $db->prepare("UPDATE usuario SET nombre = ?, rol = ? WHERE usuario = ?");
$stmt->bind_param('sss',$obj->nombre,$obj->rol,$obj->usuario);
$stmt->execute();
$stmt->close();
?>
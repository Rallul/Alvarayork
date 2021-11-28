<?php
error_reporting(E_ALL);
require_once "conexion.php";
$obj = json_decode(file_get_contents("php://input"));
$obj->pass = md5($obj->pass);
$stmt = $db->prepare("INSERT INTO usuario (usuario,nombre,rol,contraseña) VALUES (?,?,?,?)");
$stmt->bind_param('ssss',$obj->usuario,$obj->nombre,$obj->rol,$obj->pass);
$stmt->execute();
$stmt->close();
?>
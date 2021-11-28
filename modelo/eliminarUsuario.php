<?php
error_reporting(E_ALL);
require_once "conexion.php";
$obj = json_decode(file_get_contents("php://input"));
echo $obj->usuario;
$stmt = $db->prepare("DELETE FROM registro_cliente WHERE Id_Cliente = ?");
$stmt->bind_param('s',$obj->usuario);
$stmt->execute();
$stmt->close();
?>
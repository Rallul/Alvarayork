<?php
error_reporting(E_ALL);
require_once "conexion.php";
$stmt = $db->prepare("SELECT Id_Cliente, Nombre, Apellidos, Correo FROM registro_cliente LIMIT 10");
$stmt->bind_result($Id_Cliente,$Nombre,$Apellidos,$Correo);
$stmt->execute();
$arr = array();
while($stmt->fetch()){
    $arr[] = array('Id_Cliente' => $Id_Cliente,
       'Nombre' => $Nombre,
       'Apellidos' => $Apellidos,
    'Correo' => $Correo);
}
$stmt->close();
echo json_encode($arr);

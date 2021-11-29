<?php
error_reporting(E_ALL);
require_once "conexion.php";
$obj = json_decode(file_get_contents("php://input"));
$stmt = $db->prepare("SELECT Nombre, Apellidos, Correo FROM registro_cliente WHERE Nombre like CONCAT ('%', ?, '%') OR Apellidos like CONCAT ('%', ?, '%')OR Correo like CONCAT ('%', ?, '%')");
$stmt->bind_param('sss',$obj->texto,$obj->texto,$obj->texto);
$stmt->bind_result($Nombre,$Apellidos,$Correo);
$stmt->execute();
$arr = array();
while($stmt->fetch()){
    $arr[] = array('Nombre' => $Nombre,
       'Apellidos' => $Apellidos,
       'Correo' => $Correo);
}
$stmt->close();
echo json_encode($arr);
?>
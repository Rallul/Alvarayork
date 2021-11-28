<?php
error_reporting(E_ALL);
require_once "conexion.php";
$obj = json_decode(file_get_contents("php://input"));
$stmt = $db->prepare("SELECT usuario, nombre, rol FROM usuario WHERE usuario like CONCAT ('%', ?, '%') OR nombre like CONCAT ('%', ?, '%') OR rol like CONCAT ('%', ?, '%')");
$stmt->bind_param('sss',$obj->texto,$obj->texto,$obj->texto);
$stmt->bind_result($usuario,$nombre,$rol);
$stmt->execute();
$arr = array();
while($stmt->fetch()){
    $arr[] = array('usuario' => $usuario,
       'nombre' => $nombre,
       'rol' => $rol);
}
$stmt->close();
echo json_encode($arr);
?>
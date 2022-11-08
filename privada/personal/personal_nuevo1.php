<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$fecha_inicio = $_POST["fecha_inicio"];
$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$ci = $_POST["ci"];

//$db->debug=true;

$smarty = new Smarty;

 $reg = array();
 $reg["id_Herreria"] = 1;
 $reg["fecha_Inicio"]= $fecha_inicio;
 $reg["Nombres"] = $nombres;
 $reg["Apellidos"] = $apellidos;
 $reg["Correo"] = $correo;
 $reg["Direccion"] = $direccion;
 $reg["Telefono"] = $telefono;
  $reg["Ci"] = $ci;
 $reg["fec_insercion"] = date("Y-m-d H:i:s");
 $reg["fec_modificacion"] = date("Y-m-d H:i:s");
 $reg["estado"] = '1';
 $reg["usuario"] = $_SESSION["sesion_id_usuario"];
 $rs1 = $db->AutoExecute("personal",$reg,"INSERT");

 if ($rs1){
 	header("Location: personal.php");
 	exit();
 }else{
 	$smarty->assign("mensaje", "ERROR: Los datos no se insertaron!!!!!!!!");
 	$smarty->assign("direc_css", $direc_css);
 	$smarty->assign("personal_nuevo1.tpl");
 }
 ?>
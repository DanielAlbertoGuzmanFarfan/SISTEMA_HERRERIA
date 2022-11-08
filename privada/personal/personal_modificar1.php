<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_Personal = $_REQUEST["id_Personal"];
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
 $reg["fecha_Inicio"]= $fecha_inicio;
 $reg["Nombres"] = $nombres;
 $reg["Apellidos"] = $apellidos;
 $reg["Correo"] = $correo;
 $reg["Direccion"] = $direccion;
 $reg["Telefono"] = $telefono;
 $reg["Ci"] = $ci;
 $reg["usuario"] = $_SESSION["sesion_id_usuario"];
 $rs1 = $db->AutoExecute("personal", $reg, "UPDATE", "id_Personal='".$id_Personal."'");

 if ($rs1){
 	header("Location: personal.php");
 	exit();
 }else{
 	$smarty->assign("mensaje", "ERROR: Los datos no se modificaron!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->assign("id_Personal", $id_Personal);
	$smarty->display("personal_modificar1.tpl");
 }
 ?>
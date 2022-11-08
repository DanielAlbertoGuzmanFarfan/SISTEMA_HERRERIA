<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_Personal= $_POST["id_Personal"];
$hora_entrada= $_POST["hora_entrada"];
$hora_salida= $_POST["hora_salida"];

//$db->debug=true;

$smarty = new Smarty;

$reg = array();
$reg["id_Personal"] = $id_Personal;
$reg["Hora_Entrada"] = $hora_entrada;
$reg["Hora_Salida"] = $hora_salida;
$reg["fec_insercion"] = date("Y-m-d H:i:s");
$reg["fec_modificacion"] = date("Y-m-d H:i:s");
$reg["estado"] = '1';
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("horarios", $reg, "INSERT");

if ($rs1) {
	header("Location: horarios.php");
	exit();
} else{
	$smarty->assign("mensaje", "ERROR: Los datos no se insertaron!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("horario_nuevo1.tpl");

}
?>
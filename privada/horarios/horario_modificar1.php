<?php 
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$__id_Personal = $_REQUEST["id_Personal"];
$__id_Horario = $_REQUEST["id_Horario"];
$__hora_entrada = $_POST["hora_entrada"];
$__hora_salida = $_POST["hora_salida"];

$db->debug=true;
$smarty = new Smarty;

$reg = array();
$reg["id_Personal"] = $__id_Personal;
$reg["Hora_Entrada"] = $__hora_entrada;
$reg["Hora_Salida"] = $__hora_salida;
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("horarios", $reg, "UPDATE", "id_Horario='".$__id_Horario."'");

if ($rs1) {
	header("Location: horarios.php");
	exit();
} else {
	$smarty->assign("mensaje", "ERROR: Los datos no se modificaron!!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->assign("id_Horario", $__id_Horario);
	$smarty->display("horario_modificar1.tpl");
}
?>

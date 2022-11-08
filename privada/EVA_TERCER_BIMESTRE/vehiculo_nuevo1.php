<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_cliente1= $_POST["id_cliente1"];
$nro_placa= $_POST["nro_placa"];
$modelo= $_POST["modelo"];


$db->debug=true;

$smarty = new Smarty;

$reg = array();
$reg["id_cliente1"] = $id_cliente1;
$reg["nro_placa"] = $nro_placa;
$reg["modelo"] = $modelo;
$rs1 = $db->AutoExecute("vehiculos", $reg, "INSERT");

if ($rs1) {
	header("Location: vehiculos.php");
	exit();
} else{
	$smarty->assign("mensaje", "ERROR: Los datos no se insertaron!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("vehiculo_nuevo1.tpl");

}
?>
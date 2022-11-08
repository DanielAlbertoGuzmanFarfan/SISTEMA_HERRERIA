<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_Cliente = $_POST["id_Cliente"];
$monto_total = $_POST["monto_total"];
$fecha_venta = $_POST["fecha_venta"];

$db->debug=true;

$smarty = new Smarty;

$reg = array();
$reg["id_Cliente"] = $id_Cliente;
$reg["id_Herreria"] ='1';
$reg["Monto_Total"] = $monto_total;
$reg["fecha_Venta"] = $fecha_venta;
$reg["fec_insercion"] = date("Y-m-d H:i:s");
$reg["fec_modificacion"] = date("Y-m-d H:i:s");
$reg["estado"] = '1';
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("ventas", $reg, "INSERT");

if ($rs1) {
	header("Location: ventas.php");
	exit();
} else{
	$smarty->assign("mensaje", "ERROR: Los datos no se insertaron!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("venta_nuevo1.tpl");

}
?>
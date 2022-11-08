<?php 
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$__id_Cliente = $_REQUEST["id_Cliente"];
$__id_Venta = $_REQUEST["id_Venta"];
$__monto_total = $_POST["monto_total"];
$__fecha_venta = $_POST["fecha_venta"];

$hash=password_hash($_clave, PASSWORD_DEFAULT);

//$db->debug=true;
$smarty = new Smarty;

$reg = array();
$reg["id_Cliente"] = $id_Cliente;
$reg["Monto_Total"] = $__monto_total;
$reg["fecha_Venta"] = $__fecha_venta;
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("ventas", $reg, "UPDATE", "id_Venta='".$__id_Venta."'");

if ($rs1) {
	header("Location: ventas.php");
	exit();
} else {
	$smarty->assign("mensaje", "ERROR: Los datos no se modificaron!!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->assign("id_Venta", $__id_Venta);
	$smarty->display("venta_modificar1.tpl");
}
?>

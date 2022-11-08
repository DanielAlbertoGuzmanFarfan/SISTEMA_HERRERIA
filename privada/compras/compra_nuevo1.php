<?php 
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$__id_Proveedor = $_REQUEST["id_Proveedor"];
$__id_Compra = $_REQUEST["id_Compra"];
$__monto_compra = $_POST["monto_compra"];
$__fecha_compra = $_POST["fecha_compra"];

//$db->debug=true;
$smarty = new Smarty;

$reg = array();
$reg["id_Proveedor"] = $__id_Proveedor;
$reg["Monto_Compra"] = $__monto_compra;
$reg["fecha_Compra"] = $__fecha_compra;

$reg["fec_insercion"] = date("Y-m-d H:i:s");
$reg["estado"] = '1';
$reg["usuario"] = $_SESSION["sesion_id_usuario"];


$rs1 = $db->AutoExecute("compras", $reg, "INSERT");

if ($rs1) {
	header("Location: compras.php");
	exit();
} else {
	$smarty->assign("mensaje", "ERROR: Los datos no se modificaron!!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->assign("id_Proveedor", $__id_Proveedor);
	$smarty->display("compra_nuevo1.tpl");
}
?>

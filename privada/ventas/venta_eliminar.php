<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_Venta = $_REQUEST["id_Venta"];

$smarty = new Smarty;
//$db->debug=true;

$sql = $db->Prepare("SELECT *
                     FROM detalles_ventas
                     WHERE id_Venta = ?
                     AND estado <> '0'
                     ");
$rs = $db->GetAll($sql, array($id_Venta));

if(!$rs){
	$reg = array();
	$reg ["estado"] = '0';
	$reg ["usuario"] = $_SESSION["sesion_id_usuario"];
	$rs1 = $db->AutoExecute("ventas", $reg, "UPDATE", "id_Venta='".$id_Venta."'");
	header("Location:ventas.php");
	exit();
}else {
	$smarty->assign("mensaje", "ERROR: Los datos no se eliminaron!!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("venta_eliminar.tpl");
}
?>
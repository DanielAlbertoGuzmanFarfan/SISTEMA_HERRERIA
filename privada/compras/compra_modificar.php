<?php 
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$__id_Compra = $_REQUEST["id_Compra"];
$__id_Proveedor = $_REQUEST["id_Proveedor"];

$smarty = new Smarty;

//$db->debug=true;

$sql = $db->Prepare("SELECT *
 					FROM compras
 					WHERE id_Compra = ?
 					");
$rs = $db->GetAll($sql, array($__id_Compra));

$sql2 = $db->Prepare("SELECT *
 					FROM proveedores
 					WHERE id_Proveedor = ?
 					AND estado <> '0'
 					");
$rs2 = $db->GetAll($sql2, array($__id_Proveedor));

$sql3 = $db->Prepare("SELECT *
 					FROM proveedores
 					WHERE id_Proveedor <> ?
 					AND estado <> '0'
 					");
$rs3 = $db->GetAll($sql3, array($__id_Proveedor));

$smarty->assign("compra", $rs);
$smarty->assign("proveedor", $rs2);
$smarty->assign("proveedores", $rs3);
$smarty->assign("direc_css", $direc_css);
$smarty->display("compra_modificar.tpl");
?>
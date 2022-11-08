<?php 
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$__id_Venta = $_REQUEST["id_Venta"];
$__id_Cliente = $_REQUEST["id_Cliente"];

$smarty = new Smarty;

//$db->debug=true;

$sql = $db->Prepare("SELECT *
 					FROM ventas
 					WHERE id_Venta = ?
 					");
$rs = $db->GetAll($sql, array($__id_Venta));

$sql2 = $db->Prepare("SELECT *
 					FROM clientes
 					WHERE id_Cliente = ?
 					AND estado <> '0'
 					");
$rs2 = $db->GetAll($sql2, array($__id_Cliente));

$sql3 = $db->Prepare("SELECT *
 					FROM clientes
 					WHERE id_Cliente <> ?
 					AND estado <> '0'
 					");
$rs3 = $db->GetAll($sql3, array($__id_Cliente));

$smarty->assign("venta", $rs);
$smarty->assign("cliente", $rs2);
$smarty->assign("clientes", $rs3);
$smarty->assign("direc_css", $direc_css);
$smarty->display("venta_modificar.tpl");
?>
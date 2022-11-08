<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$id_Proveedor = $_REQUEST["id_Proveedor"];

$smarty = new Smarty;

$sql = $db->Prepare("SELECT *
	                 FROM proveedores 
	                 WHERE id_Proveedor = ? 
	                 ");
$rs = $db->GetAll($sql, array($id_Proveedor));
$smarty->assign("persona", $rs);

$smarty->assign("direc_css", $direc_css);
$smarty->display("proveedor_modificar.tpl");
?>

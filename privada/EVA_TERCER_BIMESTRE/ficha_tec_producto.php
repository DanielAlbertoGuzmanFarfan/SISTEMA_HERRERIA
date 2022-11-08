<?php 
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

$sql = $db->Prepare("SELECT *
					FROM proveedores1 pro1
					ORDER BY pro1.id_proveedor1 DESC
					");
$rs = $db->GetAll($sql);

$smarty->assign("proveedores1", $rs);

$smarty->assign("direc_css", $direc_css);
$smarty->display("ficha_tec_producto.tpl");
?>
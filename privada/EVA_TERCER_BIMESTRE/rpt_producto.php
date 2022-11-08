<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;


$sql5 = $db->Prepare("SELECT *
					FROM proveedores1 pro
					ORDER BY pro.id_proveedor1 DESC
					");
$rs5 = $db->GetAll($sql5);

//$db->debug = true;
$smarty->assign("proveedores1", $rs5);
$smarty->assign("direc_css", $direc_css);
$smarty->display("rpt_producto.tpl");
?>
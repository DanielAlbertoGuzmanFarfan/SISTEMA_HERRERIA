<?php 
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

$sql = $db->Prepare("SELECT *
					FROM clientes cl
					WHERE cl.estado <> '0'
					ORDER BY cl.id_Cliente DESC
					");
$rs = $db->GetAll($sql);

$smarty->assign("clientes", $rs);

$smarty->assign("direc_css", $direc_css);
$smarty->display("venta_nuevo.tpl");
?>
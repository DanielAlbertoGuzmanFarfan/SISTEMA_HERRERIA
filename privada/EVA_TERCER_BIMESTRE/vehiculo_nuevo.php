<?php 
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

$sql = $db->Prepare("SELECT *
					FROM clientes1 cl1
					ORDER BY cl1.id_cliente1 DESC
					");
$rs = $db->GetAll($sql);

$smarty->assign("clientes1", $rs);

$smarty->assign("direc_css", $direc_css);
$smarty->display("vehiculo_nuevo.tpl");
?>
<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;


$sql5 = $db->Prepare("SELECT *
					FROM clientes cl
					WHERE cl.estado <> '0'
					ORDER BY cl.id_Cliente DESC
					");
$rs5 = $db->GetAll($sql5);

$db->debug = true;
$smarty->assign("clientes", $rs5);
$smarty->assign("direc_css", $direc_css);
$smarty->display("rpt_ventas_clientes.tpl");
?>
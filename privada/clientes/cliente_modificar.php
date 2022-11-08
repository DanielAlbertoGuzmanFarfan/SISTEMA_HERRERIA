<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$id_Cliente = $_REQUEST["id_Cliente"];

$smarty = new Smarty;

$sql = $db->Prepare("SELECT *
	                 FROM clientes 
	                 WHERE id_Cliente = ? 
	                 ");
$rs = $db->GetAll($sql, array($id_Cliente));
$smarty->assign("persona", $rs);

$smarty->assign("direc_css", $direc_css);
$smarty->display("cliente_modificar.tpl");
?>

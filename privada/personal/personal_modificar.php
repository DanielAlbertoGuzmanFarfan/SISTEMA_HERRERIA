<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$id_Personal = $_REQUEST["id_Personal"];

$smarty = new Smarty;

$sql = $db->Prepare("SELECT *
	                 FROM personal 
	                 WHERE id_Personal = ? 
	                 ");
$rs = $db->GetAll($sql, array($id_Personal));
$smarty->assign("persona", $rs);

$smarty->assign("direc_css", $direc_css);
$smarty->display("personal_modificar.tpl");
?>

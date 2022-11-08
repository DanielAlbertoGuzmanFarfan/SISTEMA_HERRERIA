<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;
//$db->debug=true;

$sql3 = $db->Prepare("SELECT *
	                 FROM herreria
	                 WHERE id_Herreria = 1
	                 ");
$rs = $db->GetAll($sql);
$smarty->assign("herreria",$rs);

$smarty->assign("direc_css",$direc_css);
$smarty->display("herreria.tpl");

 ?>
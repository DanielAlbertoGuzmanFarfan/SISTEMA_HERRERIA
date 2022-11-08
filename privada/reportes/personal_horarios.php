<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

//$direc_css ="../css/colores.css";
$smarty= new  Smarty;
//$db->debug=true;

$sql = $db->Prepare("SELECT *
	                   FROM personal pe, horarios ho
	                   WHERE pe.id_Personal =ho.id_Personal 
	                   AND pe.estado <> '0'
	                   AND ho.estado <> '0'
	                   ORDER BY (ho.id_Personal) DESC
	                  
	                   ");
$rs=$db->GetAll($sql);

$smarty->assign("personal_horarios",$rs);
$smarty->assign("direc_css",$direc_css);
$smarty->display("personal_horarios.tpl");
?>
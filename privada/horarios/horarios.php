<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

//$direc_css ="../css/colores.css";
$smarty= new  Smarty;
//$db->debug=true;
$sql = $db->Prepare("SELECT *
                       FROM horarios ho, personal ps 
                       WHERE ho.id_Personal=ps.id_Personal
                       AND ho.estado <>'0'
                       AND ps.estado <>'0'               
                       ORDER BY ho.id_Horario DESC
                     
                       ");
$rs=$db->GetAll($sql);


$smarty->assign("horarios",$rs);
$smarty->assign("direc_css",$direc_css);
$smarty->display("horarios.tpl");
?>
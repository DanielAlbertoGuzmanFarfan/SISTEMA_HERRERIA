<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

//$direc_css ="../css/colores.css";
$smarty= new  Smarty;
//$db->debug=true;
$sql = $db->Prepare("SELECT *
                       FROM materias ma, carreras ca 
                       WHERE ma.id_carrera=ca.id_carrera              
                       
                     
                       ");
$rs=$db->GetAll($sql);
$sql1 = $db->Prepare("SELECT *
                       FROM carreras ca 
                       WHERE ca.id_carrera  >0            
                     
                     
                       ");
$rs1=$db->GetAll($sql1);

$smarty->assign("mat",$rs);
$smarty->assign("mate",$rs1);
$smarty->assign("direc_css",$direc_css);
$smarty->display("materias.tpl");
?>
<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

//$direc_css ="../css/colores.css";
$smarty= new  Smarty;
//$db->debug=true;
$sql = $db->Prepare("SELECT *
                       FROM vehiculos veh, clientes1 cl1 
                       WHERE veh.id_cliente1=cl1.id_cliente1             
                       
                     
                       ");
$rs=$db->GetAll($sql);
$sql1 = $db->Prepare("SELECT *
                       FROM clientes1 cl1  
                       WHERE cl1.id_cliente1   > 0            
                     
                     
                       ");
$rs1=$db->GetAll($sql1);

$smarty->assign("cli1",$rs);
$smarty->assign("cli2",$rs1);
$smarty->assign("direc_css",$direc_css);
$smarty->display("vehiculos.tpl");
?>
<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

//$direc_css ="../css/colores.css";
$smarty= new  Smarty;
//$db->debug=true;
$sql = $db->Prepare("SELECT *
                       FROM ventas v, clientes cl 
                       WHERE v.id_Cliente=cl.id_Cliente
                       AND v.estado <>'0'
                       AND cl.estado <>'0'               
                       ORDER BY v.id_Venta DESC
                     
                       ");
$rs=$db->GetAll($sql);


$smarty->assign("ventas",$rs);
$smarty->assign("direc_css",$direc_css);
$smarty->display("ventas.tpl");
?>
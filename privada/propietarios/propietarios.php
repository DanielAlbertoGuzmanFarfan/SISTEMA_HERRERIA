<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../paginacion.inc.php");

$smarty = new Smarty;
//$db->debug=true;
contarRegistros($db, "propietarios");

paginacion("propietarios.php?",$smarty);

$sql3 = $db->Prepare("SELECT *
	                 FROM Propietarios
	                 WHERE estado <> '0'
                     AND id_Propietario > '0'
                     ORDER BY id_Propietario DESC
                     LIMIT ? OFFSET ?
	                 ");
$smarty->assign("Propietarios", $db->GetAll($sql3, array($nElem, $regIni)));

$smarty->assign("direc_css",$direc_css);
$smarty->display("propietarios.tpl");

 ?>
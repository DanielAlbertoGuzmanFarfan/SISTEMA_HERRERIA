<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../paginacion.inc.php");

$smarty = new Smarty;
//$db->debug=true;
contarRegistros($db, "trabajos");

paginacion("trabajos.php?",$smarty);

$sql3 = $db->Prepare("SELECT *
                     FROM trabajos
                     WHERE estado <> 0
                     AND id_Trabajo > 0
                     ORDER BY id_Trabajo DESC
                     LIMIT ? OFFSET ?
                     ");
$smarty->assign("trabajos", $db->GetAll($sql3, array($nElem, $regIni)));

$smarty->assign("direc_css",$direc_css);
$smarty->display("trabajos.tpl");
 ?>
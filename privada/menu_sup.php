<?php 

session_start();

require_once("../smarty/libs/Smarty.class.php");
require_once("../conexion.php");
$smarty = new Smarty;

if (isset($_SESSION['sesion_id_usuario'])) {

	$sesion = array("id_usuario" =>$_SESSION["sesion_id_usuario"],
	                "usuario1" =>$_SESSION["sesion_usuario1"],
	                "id_rol" =>$_SESSION["sesion_id_rol"],
	                "rol" =>$_SESSION["sesion_rol"], 
	                 );
	$login = "NO";
}else{
	$sesion = array ("id_usuario" =>"----",
                     "usuario1" =>"----",
                     "id_rol" =>"----",
                     "rol" =>"----",
                 );
	$login = "SI";
}

   $sql1 = $db->Prepare("SELECT *
   	                     FROM herreria
   	                     WHERE id_Herreria = 1
   	                     AND estado <> 0
   	                     ");
   $rs1 =$db->GetAll($sql1);
   $nombre = $rs1[0]["Nombre"];
   $logo = $rs1[0]["logo"];
   $smarty->assign("nombre",$nombre);
   $smarty->assign("logo",$logo);

$smarty->assign("sesion",$sesion);
$smarty->assign("login",$login);
$smarty->assign("direc_css",$direc_css);
$smarty->display("menu_sup.tpl");
?>


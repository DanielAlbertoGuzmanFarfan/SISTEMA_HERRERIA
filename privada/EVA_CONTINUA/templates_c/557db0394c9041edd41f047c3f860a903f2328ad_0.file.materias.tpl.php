<?php
/* Smarty version 3.1.36, created on 2022-09-29 19:17:33
  from 'C:\wamp64\www\sistema_herreria\privada\EVA_CONTINUA\templates\materias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6335ef4d151238_57733630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '557db0394c9041edd41f047c3f860a903f2328ad' => 
    array (
      0 => 'C:\\wamp64\\www\\sistema_herreria\\privada\\EVA_CONTINUA\\templates\\materias.tpl',
      1 => 1664405590,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6335ef4d151238_57733630 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<head>
  
  <link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
  <?php echo '<script'; ?>
 type="text/javascript" src="../../ajax.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="js/buscar_carreras.js"><?php echo '</script'; ?>
>

</head>
<body>
  <div class="titulo_listado">
  <h1>
    MATERIAS
  </h1>
  </div>
  <div class="titulo_nuevo">
    <form name="FormNuevo" method="post" action="materia_nuevo.php">
      <a href="javascript:document.FormNuevo.submit();">
        NUEVO
      </a>
    </form>
  </div>
  
  <center>
    <form action="#" method="post" name="formu">
      <table border="1" class="listado">
        <tr>
          <th>
            <b>CARRERA</b><br />
          <select name="id_carrera" onchange="buscar_carrera()">
            <option value="">---seleccione---</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mate']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_carrera'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['carrera'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            </th>
          <th>
            <b>MATERIA</b><br />
            <input type="text" name="materia" value="" size="10" onkeyup="buscar_carrera()">
          </th>
          <th>
            <b>ALIAS</b><br />
            <input type="text" name="alias" value="" size="10" onkeyup="buscar_carrera()">
          </th>
        </tr>
      </table>
    </form>
  </center>

  <center>
    <div id="materias1">
    <table class="listado">
      <tr>
        <th>NRO</th><th>CARRERA</th><th>MATERIA</th><th>ALIAS</th><th>NIVEL</th>
        <th><img src="../../imagenes/modificar.jpg"  width="9%"></th><th><img src="../../imagenes/borrar.jpg"  width="9%"></th>
      </tr>
       <?php $_smarty_tpl->_assignInScope('b', '1');?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mat']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>

      <tr>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['r']->value['carrera'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['r']->value['materia'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['r']->value['alias'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['r']->value['nivel'];?>
</td>
        <td align="center">
          <form name="formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_materia'];?>
" method="post" action="venta_modificar.php">
            <input type="hidden" name="id_materia" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_materia'];?>
">
            <input type="hidden" name="id_carrera" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_carrera'];?>
">
            <a href="javascript:document.formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_materia'];?>
.submit();" title="modificar usuario">
              MODIFICAR
            </a>            
          </form>         
        </td>
        <td align="center">
          <form name="formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_materia'];?>
" method="post" action="venta_eliminar.php">
            <a href="javascript:document.formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_materia'];?>
.submit();" title="eliminar carrera"
            onclick='javascript:return(confirm("desea realmente eliminar las carreras:::<?php echo $_smarty_tpl->tpl_vars['r']->value['id_materia'];?>
..?"));'>ELIMINAR          
            </a>            
          </form>       
        </td>
        <?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1)));?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </tr>
    </table>

    <table>
      <tr align="center">
        <td>
          <?php if (!empty($_smarty_tpl->tpl_vars['urlback']->value)) {?>
          <a onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['urlback']->value;?>
'" style="font-family: Verdana;font-size: 9px;cursor: pointer";>&laquo;Anterior</a>
          <?php }?>
          <?php if (!empty($_smarty_tpl->tpl_vars['paginas']->value)) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paginas']->value, 'pag');
$_smarty_tpl->tpl_vars['pag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pag']->value) {
$_smarty_tpl->tpl_vars['pag']->do_else = false;
?>
              <?php if ($_smarty_tpl->tpl_vars['pag']->value['npag'] == $_smarty_tpl->tpl_vars['pagina']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['pagina']->value != '1') {?>|<?php }?> <b style="color:#FB992F;font-size:  12px;"><?php echo $_smarty_tpl->tpl_vars['pag']->value['npag'];?>
</b>
              <?php } else { ?>
               | <a onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['pag']->value['pagV'];?>
'" style="cursor: pointer;"><?php echo $_smarty_tpl->tpl_vars['pag']->value['npag'];?>
</a>
              <?php }?>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['numpaginas']->value > $_smarty_tpl->tpl_vars['numbotones']->value && !empty($_smarty_tpl->tpl_vars['urlnext']->value) && $_smarty_tpl->tpl_vars['pagina']->value < $_smarty_tpl->tpl_vars['numpaginas']->value) {?>
              | <a onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['urlnext']->value;?>
'" style="font-family: Verdana;font-size: 9px;cursor: pointer">
              Siguiente&raquo;</a>
              <?php }?> 
        </td>
      </tr>
    </table>
    </div>
  </center> 
  </body>
</html><?php }
}

<?php
/* Smarty version 3.1.36, created on 2022-10-13 20:30:31
  from 'C:\wamp64\www\sistema_herreria\privada\EVA_TERCER_BIMESTRE\templates\vehiculos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_63487567360b32_67423570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45654fd626093c1a807df657d28e4c59fee13a9c' => 
    array (
      0 => 'C:\\wamp64\\www\\sistema_herreria\\privada\\EVA_TERCER_BIMESTRE\\templates\\vehiculos.tpl',
      1 => 1665693026,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63487567360b32_67423570 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<head>
  
  <link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
  <?php echo '<script'; ?>
 type="text/javascript" src="../../ajax.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="js/buscar_clientes.js"><?php echo '</script'; ?>
>

</head>
<body>
  <div class="titulo_listado">
  <h1>
    VEHICULOS
  </h1>
  </div>
  <div class="titulo_nuevo">
    <form name="FormNuevo" method="post" action="vehiculo_nuevo.php">
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
            <b>CLIENTE</b><br />
          <select name="id_cliente1" onchange="buscar_cliente()">
            <option value="">---seleccione---</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cli2']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];
echo $_smarty_tpl->tpl_vars['r']->value['apellidos'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            </th>
          <th>
            <b>PLACA</b><br />
            <input type="text" name="nro_placa" value="" size="10" onkeyup="buscar_cliente()">
          </th>
          <th>
            <b>MODELO</b><br />
            <input type="text" name="modelo" value="" size="10" onkeyup="buscar_cliente()">
          </th>
        </tr>
      </table>
    </form>
  </center>

  <center>
    <div id="vehiculos1">
    <table class="listado">
      <tr>
        <th>NRO</th><th>CLIENTE</th><th>PLACA</th><th>MODELO</th>
      </tr>
       <?php $_smarty_tpl->_assignInScope('b', '1');?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cli1']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>

      <tr>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
-<?php echo $_smarty_tpl->tpl_vars['r']->value['apellidos'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['r']->value['nro_placa'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['r']->value['modelo'];?>
</td>
        
        <?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1)));?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </tr>
    </table>

    
    </div>
  </center> 
  </body>
</html><?php }
}

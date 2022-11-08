<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
              var ventanaCalendario = false
              function imprimir() {
                   if(confirm(' Desea Imprimir ?')){
               window.print();
            } 
 }
 
</script>
</head>
<body style='cursor:pointer;cursor:hand' onclick='imprimir();'>

<table width="100%" border="0">
 <tr>
        <td><img src="../../imagenes/{$logo}" width="70%" alt=""></td>
        <td aling="center"  width="80%"  ><h1>PRODUCTOS PROVEEDORES</h1> </td>
 </tr>
</table>
 <br>
 <center>
  <table border="1" cellpadding="0">
   <tr>
   <th>NRO</th><th>NOMBRE</th><th>DESCRIPCION</th><th>MODELO</th><th>MARCA</th><th>INDUSTRIA</th>
   </tr>
   {assign var='b' value='1'}
   {foreach item=r from=$productos_proveedores1}
   <tr>
    <td aling="center">{$b}</td>
    
    <td>{$r.nombre}</td>
    <td>{$r.descripcion}</td>
    <td>{$r.modelo}</td>
    <td>{$r.marca}</td>
    <td>{$r.industria_origen}</td>
    {assign var='b' value="`$b+1`"}
    {/foreach}
   </tr>
  </table>
  <br>
  <br>
  <b>Fecha:</b>{$fecha}
 </center>
</body>
</html>
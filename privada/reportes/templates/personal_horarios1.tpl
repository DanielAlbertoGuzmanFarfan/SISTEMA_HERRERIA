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
        <td aling="center"  width="80%"  ><h1>PERSONAL HORARIOS</h1> </td>
 </tr>
</table>
 <br>
 <center>
  <table border="1" cellpadding="0">
   <tr>
   <th>NRO</th><th>PERSONAL</th><th>HORARIOS</th>
   </tr>
   {assign var='b' value='1'}
   {foreach item=r from=$personal_horarios}
   <tr>
    <td aling="center">{$b}</td>
    <td>{$r.Nombres}{$r.Apellidos}</td>
    <td><i>{$r.Hora_Entrada} / {$r.Hora_Salida}</i></td>
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
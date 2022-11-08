<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript">
        var ventanaCalendario=false
        function imprimir(){
            if (confirm('Desea Imprimir ?')){
                window.print();
            }
        }
    </script>
</head>
<body  style='cursor:pointer;cursor:hand' onclick="imprimir();">
    <table width="100%" border="0">
        <tr>
            <td><img src="../../imagenes/{$logo}" width="70%" >
            </td>
            <td align="center" width="80%">
            <h1>FICHA TECNICA DE PERSONA</h1>
        </td>
        </tr>
    </table>
    <br>
    <center>
        <table border="1" cellspacing="0">
            <tr>
                <td>
                    <table border="0">
                      {foreach item=r from=$persona}
                      <tr>
                          <th align="rigth">CI</th><th>:</th>
                          <td><input type="text" name="ci" value="{$r.ci}" disabled=""> </td>
                      </tr> 
                      <tr>
                          <th align="rigth">Nombres</th><th>:</th>
                          <td><input type="text" name="nombres" value="{$r.nombres}" disabled=""> </td>
                      </tr>
                      <tr>
                          <th align="rigth">Apellido Paterno</th><th>:</th>
                          <td><input type="text" name="ap" value="{$r.ap}" disabled=""> </td>
                      </tr> 
                      <tr>
                          <th align="rigth">Apellido Materno</th><th>:</th>
                          <td><input type="text" name="am" value="{$r.am}" disabled=""> </td>
                      </tr>
                      <tr>
                          <th align="rigth">Direccion</th><th>:</th>
                          <td><input type="text" name="direccion" value="{$r.direccion}" disabled=""> </td>
                      </tr> 
                      <tr>
                          <th align="rigth">Telefono</th><th>:</th>
                          <td><input type="text" name="telefono" value="{$r.telef}" disabled=""> </td>
                      </tr> 
                      
                      {/foreach}  
        </table>
    </td>
    </tr>
    </table>
    </center>
</body>
</html>

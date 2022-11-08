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
            <h1>FICHA TECNICA DE PRODUCTO</h1>
        </td>
        </tr>
    </table>
    <br>
    <center>
        <table border="1" cellspacing="0">
            <tr>
                <td>
                    <table border="0">
                      {foreach item=r from=$productos}
                      <tr>
                          <th align="rigth">Nombre</th><th>:</th>
                          <td><input type="text" name="nombre" value="{$r.nombre}" disabled=""> </td>
                      </tr>
                      <tr>
                          <th align="rigth">Descripcion</th><th>:</th>
                          <td><input type="text" name="descripcion" value="{$r.descripcion}" disabled=""> </td>
                      </tr> 
                      <tr>
                          <th align="rigth">Modelo</th><th>:</th>
                          <td><input type="text" name="modelo" value="{$r.modelo}" disabled=""> </td>
                      </tr>
                      <tr>
                          <th align="rigth">Marca</th><th>:</th>
                          <td><input type="text" name="marca" value="{$r.marca}" disabled=""> </td>
                      </tr> 
                      <tr>
                          <th align="rigth">Industria Origen</th><th>:</th>
                          <td><input type="text" name="Industria_origen" value="{$r.industria_origen}" disabled=""> </td>
                      </tr> 
                      
                      {/foreach}  
        </table>
    </td>
    </tr>
    </table>
    </center>
</body>
</html>

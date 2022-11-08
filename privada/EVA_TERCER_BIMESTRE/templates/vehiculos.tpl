<!DOCTYPE html>
<head>
  
  <link rel="stylesheet" href="../{$direc_css}" type="text/css">
  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
  <script type="text/javascript" src="../../ajax.js"></script>
  <script type="text/javascript" src="js/buscar_clientes.js"></script>

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
            {foreach item=r from=$cli2}
            <option value="{$r.nombre}">{$r.nombre}{$r.apellidos}</option>
            {/foreach}
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
       {assign var="b"  value='1'}
      {foreach  item=r from=$cli1}

      <tr>
        <td align="center">{$b}</td>
        <td>{$r.nombre}-{$r.apellidos}</td>
        <td>{$r.nro_placa}</td>
        <td>{$r.modelo}</td>
        
        {assign var="b" value="`$b+1`"}
        {/foreach}
      </tr>
    </table>

    
    </div>
  </center> 
  </body>
</html>
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
  				<select name="id_vehiculo">
		  	    <option value="">---seleccione---</option>
		        {foreach item=r from=$vehiculos}
		        <option value="{$r.id_vehiculo}">{$r.nombre}-{$r.apellidos}</option>
		        {/foreach}
		        </select>
		        </th>
  				<th>
  					<b>PLACA</b><br />
  					<input type="text" name="nro_placa" value="" size="10" onkeyup="buscar_vehiculo()">
  				</th>
  				<th>
  					<b>MODELO</b><br />
  					<input type="text" name="modelo" value="" size="10" onkeyup="buscar_vehiculo()">
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
  			<th><img src="../../imagenes/modificar.jpg"  width="9%"></th><th><img src="../../imagenes/borrar.jpg"  width="9%"></th>
  		</tr>
  		 {assign var="b"  value='1'}
      {foreach  item=r from=$vehiculos}

      <tr>
        <td align="center">{$b}</td>
        <td>{$r.nombre}</td>
        <td>{$r.nro_placa}</td>
        <td>{$r.modelo}</td>
        <td align="center">
          <form name="formModif{$r.id_vehiculo}" method="post" action="venta_modificar.php">
            <input type="hidden" name="id_vehiculo" value="{$r.id_vehiculo}">
            <input type="hidden" name="id_cliente1" value="{$r.id_cliente1}">
            <a href="javascript:document.formModif{$r.id_vehiculo}.submit();" title="modificar usuario">
              MODIFICAR
            </a>            
          </form>         
        </td>
        <td align="center">
          <form name="formElimi{$r.id_materia}" method="post" action="venta_eliminar.php">
            <a href="javascript:document.formElimi{$r.id_materia}.submit();" title="eliminar carrera"
            onclick='javascript:return(confirm("desea realmente eliminar las carreras:::{$r.id_materia}..?"));'>ELIMINAR          
            </a>            
          </form>       
        </td>
        {assign var="b" value="`$b+1`"}
        {/foreach}
  		</tr>
  	</table>

  	<table>
  		<tr align="center">
  			<td>
  				{if !empty($urlback)}
  				<a onclick="location.href='{$urlback}'" style="font-family: Verdana;font-size: 9px;cursor: pointer";>&laquo;Anterior</a>
  				{/if}
  				{if !empty($paginas)}
  				  {foreach from=$paginas item=pag}
  				    {if $pag.npag == $pagina}
  				      {if $pagina neq '1'}|{/if} <b style="color:#FB992F;font-size:  12px;">{$pag.npag}</b>
  				    {else}
  				     | <a onclick="location.href='{$pag.pagV}'" style="cursor: pointer;">{$pag.npag}</a>
  				    {/if}
  				    {/foreach}
  				    {/if}
  				    {if $numpaginas gt $numbotones and !empty($urlnext) and $pagina lt $numpaginas}
  				    | <a onclick="location.href='{$urlnext}'" style="font-family: Verdana;font-size: 9px;cursor: pointer">
  				    Siguiente&raquo;</a>
  				    {/if}	
  			</td>
  		</tr>
  	</table>
  	</div>
  </center>	
  </body>
</html>
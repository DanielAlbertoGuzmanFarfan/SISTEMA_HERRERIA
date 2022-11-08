<!DOCTYPE html>
<head>
	
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>

</head>
<body>
  <div class="titulo_listado">
	<h1>
		CLIENTES
	</h1>
  </div>
  <div class="titulo_nuevo">
  	<form name="FormNuevo" method="post" action="cliente_nuevo.php">
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
  					<b>Paterno</b><br />
  					<input type="text" name="paterno" value="" size="10" onkeyup="buscar_personas()">
  				</th>
  				<th>
  					<b>Materno</b><br />
  					<input type="text" name="materno" value="" size="10" onkeyup="buscar_personas()">
  				</th>
  				<th>
  					<b>Nombres</b><br />
  					<input type="text" name="nombres" value="" size="10" onkeyup="buscar_personas()">
  				</th>
  				<th>
  					<b>C.I</b><br />
  					<input type="text" name="ci" value="" size="10" onkeyup="buscar_personas()">
  				</th>
  			</tr>
  		</table>
  	</form>
  </center>

  <center>
  	<div id="personas1">
  	<table class="listado">
  		<tr>
  			<th>NRO</th><th>NOMBRES</th><th>APELLIDOS</th><th>TELEFONO</th><th>CI</th><th>CORREO</th><th>NIT</th>
  			<th><img src="../../imagenes/modificar.jpg" width="9%"></th><th><img src="../../imagenes/borrar.jpg" width="9%"></th>
  		</tr>
  		{assign var= "b" value="0"}
  		{assign var= "total" value="`$pagina-1`"}
  		{assign var= "a" value="`$numreg*$total`"}
  		{assign var= "b" value="`$b+1+$a`"}
  		{foreach item=r  from=$clientes}
  		<tr>
  			<td align="center">{$b}</td>
  			
  			<td>{$r.Nombres}</td>
  			<td align="center">{$r.Apellidos}</td>
  			<td align="center">{$r.Telefono}</td>
  			<td>{$r.Ci}</td>
  			<td>{$r.Correo}</td>
  			<td>{$r.Nit}</td>
  			<td align="center">
  				<form name="FormModif{$r.id_Cliente}" method="post" action="cliente_modificar.php">
  					<input type="hidden" name="id_Cliente" value="{$r.id_Cliente}">
  					<a href="javascript:document.FormModif{$r.id_Cliente}.submit();" title="modificar cliente Sistema">
  						Modificar>>
  					</a>
  				</form>
  			</td>
  			<td align="center">
  				<form name="FormElimi{$r.id_Cliente}" method="post" action="cliente_eliminar.php">
  					<input type="hidden" name="id_Cliente" value="{$r.id_Cliente}">
  					<a href="javascript:document.FormElimi{$r.id_Cliente}.submit();" title="Eliminar cliente Sistema" onclick="'cliente_eliminar.php'">
  						Eliminar>>
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
  				<a onclick="location.href='{$urlback}'" style="font-family: Verdana;font-size: 9px;cursor: pointer";>&laquo;
  				Anterior</a>
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
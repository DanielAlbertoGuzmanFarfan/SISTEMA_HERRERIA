<!DOCTYPE html>
<head>
	
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>

</head>
<body>
  <div class="titulo_listado">
	<h1>
		PERSONAL
	</h1>
  </div>
  <div class="titulo_nuevo">
  	<form name="FormNuevo" method="post" action="personal_nuevo.php">
  		<a href="javascript:document.FormNuevo.submit();">
  			NUEVO
  		</a>
  	</form>
  </div>
  <center>
  	<table class="listado">
  		<tr>
  			<th>NRO</th><th>FECHA INICIO</th><th>NOMBRES</th><th>APELLIDOS</th><th>CORREO</th><th>DIRECCION</th><th>TELEFONO</th><th>CI</th>
  			<th><img src="../../imagenes/modificar.jpg" width="9%"></th><th><img src="../../imagenes/borrar.jpg" width="9%"></th>
  		</tr>
  		{assign var= "b" value="0"}
  		{assign var= "total" value="`$pagina-1`"}
  		{assign var= "a" value="`$numreg*$total`"}
  		{assign var= "b" value="`$b+1+$a`"}
  		{foreach item=r  from=$personal}
  		<tr>
  			<td align="center">{$b}</td>
  			
  			<td align="center">{$r.fecha_Inicio}</td>
  			<td align="center">{$r.Nombres}</td>
  			<td align="center">{$r.Apellidos}</td>
  			<td align="center">{$r.Correo}</td>
  			<td align="center">{$r.Direccion}</td>
  			<td align="center">{$r.Telefono}</td>
  			<td align="center">{$r.Ci}</td>
  			
  			<td align="center">
  				<form name="FormModif{$r.id_Personal}" method="post" action="personal_modificar.php">
  					<input type="hidden" name="id_Personal" value="{$r.id_Personal}">
  					<a href="javascript:document.FormModif{$r.id_Personal}.submit();" title="modificar personal Sistema">
  						MODIFICAR
  					</a>
  				</form>
  			</td>
  			<td align="center">
  				<form name="FormElimi{$r.id_Personal}" method="post" action="personal_eliminar.php">
  					<input type="hidden" name="id_Personal" value="{$r.id_Personal}">
  					<a href="javascript:document.FormElimi{$r.id_Personal}.submit();" title="Eliminar personal Sistema" onclick="'personal_eliminar.php'">
  						ELIMINAR
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
  </center>	
  </body>
</html>
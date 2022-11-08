<!DOCTYPE html>
<head>
	
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>

</head>
<body>
  <div class="titulo_listado">
	<h1>
		TRABAJOS
	</h1>
  </div>
  <div class="titulo_nuevo">
  	<form name="FormNuevo" method="post" action="trabajo_nuevo.php">
  		<a href="javascript:document.FormNuevo.submit();">
  			NUEVO
  		</a>
  	</form>
  </div>
  <center>
  	<table class="listado">
  		<tr>
  			<th>NRO</th><th>TRABAJO</th><th>FOTO</th><th>PRECIO</th><th>CANTIDAD</th><th>DESCRIPCION</th>
  			<th><img src="../../imagenes/modificar.jpg" width="9%"></th><th><img src="../../imagenes/borrar.jpg" width="9%"></th>
  		</tr>
  		{assign var= "b" value="0"}
  		{assign var= "total" value="`$pagina-1`"}
  		{assign var= "a" value="`$numreg*$total`"}
  		{assign var= "b" value="`$b+1+$a`"}
  		{foreach item=r  from=$trabajos}
  		<tr>
  			<td align="center">{$b}</td>
  			
  			<td>{$r.Trabajo}</td>
  			<td align="center">{$r.Foto}</td>
  			<td align="center">{$r.precio}</td>
  			<td>{$r.Cantidad}</td>
  			<td>{$r.Descripcion}</td>
  			<td align="center">
  				<form name="FormModif{$r.id_Trabajo}" method="post" action="trabajo_modificar.php">
  					<input type="hidden" name="id_Trabajo" value="{$r.id_Trabajo}">
  					<a href="javascript:document.FormModif{$r.id_Trabajo}.submit();" title="modificar trabajo Sistema">
  						Modificar>>
  					</a>
  				</form>
  			</td>
  			<td align="center">
  				<form name="FormElimi{$r.id_Trabajo}" method="post" action="trabajo_eliminar.php">
  					<input type="hidden" name="id_Trabajo" value="{$r.id_Trabajo}">
  					<a href="javascript:document.FormElimi{$r.id_Trabajo}.submit();" title="Eliminar trabajo Sistema" onclick="'trabajo_eliminar.php'">
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
  </center>	
  </body>
</html>
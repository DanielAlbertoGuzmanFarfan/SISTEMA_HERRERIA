<!DOCTYPE html>

<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css" >
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
</head>
<body>
	<table width="100%" border="0">
		<tr>
			<td width="33%">
			<table border="0">
				<tr>
		
				</tr>
			</table> 		
			</td>
			<td align="center" width="33%">
				<h1>COMPRAS</h1>
			</td>
			<td align="right" width="33%">
				<form name="formuNuevo" method="post" action="compra_nuevo.php">
					<a href="javascript:document.formuNuevo.submit()">
						NUEVO
					</a>
				</form>
			</td>
		</tr>	
	</table>
	<center>
		<table class="listado">
			<tr>
				<th>NRO</th><th>NOMBRES</th><th>MONTO COMPRA</th><th>FECHA COMPRA</th>
				<th> <img src="../../imagenes/modificar.jpg" width="9%"></th>
				<th><img src="../../imagenes/borrar.jpg" width="9%"></th>
			</tr>

			{assign var="b"  value='1'}
			{foreach  item=r from=$compras}

			<tr>
				<td align="center">{$b}</td>
				<td>{$r.Nombre }</td>
				<td>{$r.Monto_Compra}</td>
				<td>{$r.fecha_Compra}</td>
				<td align="center">
					<form name="formModif{$r.id_Compra}" method="post" action="compra_modificar.php">
						<input type="hidden" name="id_Compra" value="{$r.id_Compra}">
						<input type="hidden" name="id_Proveedor" value="{$r.id_Proveedor}">
						<a href="javascript:document.formModif{$r.id_Compra}.submit();" title="modificar usuario">
							MODIFICAR
						</a>						
					</form>					
				</td>
				<td align="center">
					<form name="formElimi{$r.id_Compra}" method="post" action="compra_eliminar.php">
						<input type="hidden" name="id_Compra" value="{$r.id_Compra}">
						<a href="javascript:document.formElimi{$r.id_Compra}.submit();" title="eliminar compras"

						onclick='javascript:return(confirm("desea realmente eliminar la compra con el monto:::{$r.Monto_Compra}..?"));'>ELIMINAR				
						</a>						
					</form>				
				</td>
				{assign var="b" value="`$b+1`"}
				{/foreach}
			</tr>
		</table>
	</center>
</body>
</html>
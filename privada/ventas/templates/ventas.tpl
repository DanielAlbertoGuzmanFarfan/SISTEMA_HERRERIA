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
				<h1>VENTAS</h1>
			</td>
			<td align="right" width="33%">
				<form name="formuNuevo" method="post" action="venta_nuevo.php">
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
				<th>NRO</th><th>NOMBRES</th><th>MONTO TOTAL</th><th>FECHA VENTA</th>
				<th> <img src="../../imagenes/modificar.jpg" width="9%"></th>
				<th><img src="../../imagenes/borrar.jpg" width="9%"></th>
			</tr>

			{assign var="b"  value='1'}
			{foreach  item=r from=$ventas}

			<tr>
				<td align="center">{$b}</td>
				<td>{$r.Apellidos }  {$r.Nombres }</td>
				<td>{$r.Monto_Total}</td>
				<td>{$r.fecha_Venta}</td>
				<td align="center">
					<form name="formModif{$r.id_Venta}" method="post" action="venta_modificar.php">
						<input type="hidden" name="id_Venta" value="{$r.id_Venta}">
						<input type="hidden" name="id_Cliente" value="{$r.id_Cliente}">
						<a href="javascript:document.formModif{$r.id_Venta}.submit();" title="modificar usuario">
							MODIFICAR
						</a>						
					</form>					
				</td>
				<td align="center">
					<form name="formElimi{$r.id_Venta}" method="post" action="venta_eliminar.php">
						<a href="javascript:document.formElimi{$r.id_Venta}.submit();" title="eliminar ventas"
						onclick='javascript:return(confirm("desea realmente eliminar las ventas:::{$r.id_Venta}..?"));'>ELIMINAR					
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
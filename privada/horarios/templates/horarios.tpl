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
				<h1>HORARIOS</h1>
			</td>
			<td align="right" width="33%">
				<form name="formuNuevo" method="post" action="horario_nuevo.php">
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
				<th>NRO</th><th>NOMBRES</th><th>HORA ENTRADA</th><th>HORA SALIDA</th>
				<th> <img src="../../imagenes/modificar.jpg" width="9%"></th>
				<th><img src="../../imagenes/borrar.jpg" width="9%"></th>
			</tr>

			{assign var="b"  value='1'}
			{foreach  item=r from=$horarios}

			<tr>
				<td align="center">{$b}</td>
				<td>{$r.Nombres }</td>
				<td>{$r.Hora_Entrada}</td>
				<td>{$r.Hora_Salida}</td>
				<td align="center">
					<form name="formModif{$r.id_Horario}" method="post" action="horario_modificar.php">
						<input type="hidden" name="id_Horario" value="{$r.id_Horario}">
						<input type="hidden" name="id_Personal" value="{$r.id_Personal}">
						<a href="javascript:document.formModif{$r.id_Horario}.submit();" title="modificar usuario">
							MODIFICAR
						</a>						
					</form>					
				</td>
				<td align="center">
					<form name="formElimi{$r.id_Horario}" method="post" action="compra_eliminar.php">
						<a href="javascript:document.formElimi{$r.id_Horario}.submit();" title="eliminar horarios"
						onclick='javascript:return(confirm("desea realmente eliminar las horarios:::{$r.id_Horario}..?"));'>ELIMINAR				
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
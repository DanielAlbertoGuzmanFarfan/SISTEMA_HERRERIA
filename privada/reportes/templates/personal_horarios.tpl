<!DOCTYPE html>

<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css" >
	<script type="text/javascript">
		var ventanaCalendario=false
		function imprimir(){
			ventanaCalendario =window.open("personal_horarios1.php" , "calendario","width=600, height-550,left-100,top-100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")
		}
	</script>
	
</head>
<body>
	<table width="100%" border="0">
		<tr>
			<td align="center"><h1>PERSONAL_HORARIOS</h1></td>
		</tr>
	</table>
	<br>
	<center>
		<table class="listado">
			<tr>
				<th>NRO</th><th>PERSONAL</th><th>HORARIOS</th>
			</tr>
				{assign var="b" value="1"}
	            {foreach item=r from=$personal_horarios}
	            <tr>
	            	<td align="center">{$b}</td>
				    <td>{$r.Nombres}{$r.Apellidos}</td>
				    <td>{$r.Hora_Entrada} / {$r.Hora_Salida}</td>
				   {assign var="b" value="`$b+1`"}
				    
	            </tr>
	            {/foreach}
		</table>
		<br><br>
		<h2>
			<input type="radio" name="seleccionar" onclick="javascript:imprimir()">Imprimir
		</h2>
	</center>
</body>
</html>
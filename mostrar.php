<?php
include("class/conexion.php");

$registros=mysql_query("select * from comentario");

while($reg=mysql_fetch_array($registros))
{
?>
	<div id="mostrar">
<?php	
	echo $reg['carrera'].'<br>';
	echo $reg['comentario'].'<br>';
	?>
	</div>
<?php	
}

?>
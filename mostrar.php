<?php
include("class/conexion.php");

$registros=mysql_query("select * from comentario order by id desc");

while($reg=mysql_fetch_array($registros))
{

?>
	<div id="mostrar">
<?php
	?>	
	<div id="carrera">
	<?php

	echo $reg['carrera'].'<br>';
	?>
	</div>
	<?php
	
	echo $reg['comentario'].'<br>';
	?>
	</div>
<?php
}	


?>
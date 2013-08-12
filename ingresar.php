<?php
include("class/conexion.php");
if( isset($_POST['comentario']) && !empty($_POST['comentario']) &&
	isset($_POST['carrera']) && !empty($_POST['carrera'])) 
{	
$coment=$_POST['comentario'];
$carrera=$_POST['carrera'];
mysql_query("insert into comentario(id,carrera,comentario) values ('null','$carrera','$coment')");
}
else{
}
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
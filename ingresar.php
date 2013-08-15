<?php
include("class/conexion.php");
if(isset($_POST['carrera']) && !empty($_POST['carrera']) &&
	isset($_POST['coment']) && !empty($_POST['coment']))
{
$carrera=$_POST['carrera'];
$coment=$_POST['coment'];
$contcom=strlen($coment);
		
mysql_query("insert into comentario(id,carrera,comentario) values ('null','$carrera','$coment')");
}
else
{
?>
	<script>
	alert('LLena todos los campos');
	</script>
<?php	
}

include("mostrar.php");

?>



        
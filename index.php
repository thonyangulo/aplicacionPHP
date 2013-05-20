<!doctype html>
<?php 
if(isset($_GET['error'])){
$pract1=$_GET['pract1'];
$pract2=$_GET['pract2'];
$pract3=$_GET['pract3'];
$pract4=$_GET['pract4'];
$pract5=$_GET['pract5'];
$pract6=$_GET['examen'];

}

?>
<html>
	<head>
		<title>Silabus :: Calcula tu nota</title>
	</head>
	<body>
		<h1 style="color:blue">Desarrollo de Sistemas III</h1>
		<form action="promedio.php" method="POST">
		Pr&aacute;ctica 1: <input type="text" name="prac1" value="<?php if(isset($_GET['error'])){ echo "$pract1"; } ?>"/><br />
		Pr&aacute;ctica 2: <input type="text" name="prac2" value="<?php if(isset($_GET['error'])){ echo "$pract2"; } ?>"/><br />
		Pr&aacute;ctica 3: <input type="text" name="prac3" value="<?php if(isset($_GET['error'])){ echo "$pract3"; } ?>"/><br />
		Pr&aacute;ctica 4: <input type="text" name="prac4" value="<?php if(isset($_GET['error'])){ echo "$pract4"; } ?>"/><br />
		Pr&aacute;ctica 5: <input type="text" name="prac5" value="<?php if(isset($_GET['error'])){ echo "$pract5"; } ?>"/><br />
		Examen Final:<input type="text" name="examen" value="<?php if(isset($_GET['error'])){ echo "$pract6"; } ?>"/><br />
		<input type="submit" value="Calcular Promedio"/>
		</form>
		<?php if(isset($_GET['error'])){ ?>
		<p>Error: <em style="color:red">Ingrese valores v&aacute;lidos</p>
		<?php } ?>
	</body>
</html>

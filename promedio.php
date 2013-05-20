<?php
include 'funciones.php';
#1 Ingresar datos:
$practicas=array($_POST['prac1'],$_POST['prac2'],$_POST['prac3'],$_POST['prac4'],$_POST['prac5']);
$examenFinal=$_POST['examen'];
$pract1=$_POST['prac1'];
$pract2=$_POST['prac2'];
$pract3=$_POST['prac3'];
$pract4=$_POST['prac4'];
$pract5=$_POST['prac5'];
$examen=$_POST['examen'];
#2 Validar datos:
$es_valido=validarDatos($practicas,$examenFinal);
	if(!$es_valido){
	header("Location: index.php?error=1&pract1=$pract1&pract2=$pract2&pract3=$pract3&pract4=$pract4&pract5=$pract5&examen=$examen");
	exit();
	}else{
	$practicas=array(round($_POST['prac1']),round($_POST['prac2']),round($_POST['prac3']),round($_POST['prac4']),round($_POST['prac5']));
	$examenFinal=round($_POST['examen']);
	}
#3 Obtener menor nota:
$menor=getMenor($practicas);

#4 Eliminar menor nota de las practicas:
$practicas=eliminarMenorNota($practicas);

#5 Calcular Evaluacion Permanente:
$promedio_permanente=round(calcularEvaluacionPermanente($practicas),2);

#6 Calcular Promedio Final:
$promedioFinal=round(calcularNotaFinal($promedio_permanente,$examenFinal));
?>
<html>
	<head>
		<title>Silabus :: Calcula tu nota</title>
	</head>
	<body>
		<h1 style="color:blue">Promedios</h1>
		<h2>Promedio Evaluaci&oacute;n Permanente -> 70%</h2>
			<p><?php echo "$promedio_permanente"; ?></p>		
		<h2>Examen Final -> 30%</h2>
			<p><?php echo "$examenFinal"; ?></p>
		<h2 style="color:red">Promedio Final ->100%</h2>
			<p><?php echo "$promedioFinal"; ?></p>
		<h3>Pr&aacute;ctica eliminada</h3>
			<p><?php echo "$menor"; ?></p>
	</body>
</html>
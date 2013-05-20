<?php

function validarDatos($practicas,$examenFinal){
	if($examenFinal==''){
	$examenFinal=0;
	}
	if(!is_numeric($examenFinal) || $examenFinal>20 || $examenFinal<0){
	return false;
	}
	for($i=0;$i<5;$i++){
		if($practicas[$i]==''){
		$practicas[$i]=0;
		}	
	}
	foreach($practicas as $num){	
	if(!is_numeric($num) || $num>20 || $num<0)
	return false;
	}		
	return true;
}
function eliminarMenorNota($practicas){
	$menor=21;
	
	for($i=0;$i<4;$i++){
		if($menor>$practicas[$i]){
		$menor=$practicas[$i];
		$indice=$i;		
		}
	}	
	unset($practicas[$indice]);	
	return $practicas;
}
function calcularEvaluacionPermanente($practicas){
	$prom1=0;
	foreach($practicas as $num){
	$prom1=$prom1+$num;
	}
	$prom1=$prom1/4;
	return $prom1;
}
function calcularNotaFinal($promedio_permanente,$examenFinal){
	$promFinal=$promedio_permanente*0.7+$examenFinal*0.3;
	return $promFinal;
}
function getMenor($practicas){
	$menor=21;
	
	for($i=0;$i<4;$i++){
		if($menor>$practicas[$i]){
		$menor=$practicas[$i];			
		}
	}
	return $menor;
}

?>
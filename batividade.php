<?php
	$base=$_POST["ibase"];
	$altura=$_POST["ialtura"];
	$figura=$_POST["figeo"];

	if(strcasecmp($_POST["figeo"], "quadrado") == 0){
		$re = $altura*$altura;
		echo "Resultado : ".$re."<br/>";
	}
	else if (strcasecmp($_POST["figeo"], "retangulo") == 0){
		$re = $altura*$base;
		echo "Resultado : ".$re."<br/>";
	}
	else if (strcasecmp($_POST["figeo"], "circulo") == 0){
		$re = 3.14*($base*$base);
		echo "Resultado : ".$re."<br/>";
	}
?>
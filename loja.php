<?php

	function av (){
		$comp=$_POST["icomp"];
		$a = 0;
		$a = $comp/10;$comp = $comp-$a;
		echo "Valor a vista: $comp";
	}
	function tr (){
		$comp=$_POST["icomp"];
		$a = 0;
		$a = $comp * 0.04;$comp = $comp+$a;
		echo "Valor com prazo de 30 dias: $comp";
	}
	function trr (){
		$comp=$_POST["icomp"];
		$a = 0;
		$a = $comp * 0.0938;$comp = $comp+$a;
		echo "Valor com prazo de 60 dias: $comp";
	}

	$pag=$_POST["ipag"];

	if($pag == 1){
		av();
	}
	else if ($pag == 2){
		tr();
	}
	else if($pag == 3){
		trr();
	}
?>
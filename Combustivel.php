<?php
	$eta=$_POST["ieta"];
	$gas=$_POST["igas"];

	if($eta < $gas)echo "Etanol é mais barato.";
	else if ($gas < $eta)echo "Gasolina e mais barato.";
	else echo "Os dois estão do mesmo valor.";
?>
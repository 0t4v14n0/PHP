<?php
	$intee=$_POST["iint"];
	$loop = 0;
	$a = $intee;
	$b = $intee;

	do{
		$a--;
		$b=$b*$a;
		if ($a == 1){
			$loop = 0;
		}
		else $loop = 1;
	}while($loop != 0);

	echo "Resultado : ".$b.".";

?>
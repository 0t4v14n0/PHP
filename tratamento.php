<?php
	$fra=$_POST["ifra"];$ppala=$_POST["i1pala"];$spala=$_POST["i2pala"];
	$tms=strlen($fra);$tm=strlen($ppala);$t=strlen($spala);
	$quant = 0;$pala=1;$quanti = 0;$cont = 0;

	for ($i=0; $i <= $tms; $i++) { 
		$letra = substr($fra, $i, 1);
		if(($letra == 'a') or ($letra == 'A') or ($letra == 'e') or ($letra == 'E') or ($letra == 'i') or ($letra == 'I') or ($letra == 'o') or ($letra == 'O') or ($letra == 'u') or ($letra == 'U')){
			$quanti++;$cont++;
			echo "$letra";
		}
		else if($letra == ' '){
			$arr[$pala-1] = $cont;
			$pala++;
		}
		else{
			$cont++;
			echo "$letra";
		}
	}

	echo "<br/> Quantidade de palavras = $pala <br/>";
	echo "Quantidade de vogais = $quanti <br/>";

	for ($i=0; $i <= $pala-2; $i++) {
		if(substr($fra, 0, $arr[$i]) == substr($ppala, 0, $tm)){
			$lee = substr($fra, 0, $arr[$i]);
			echo "$lee $spala";
		}
	}
	echo "<br/>";

	for ($i=0; $i <= $tms; $i++) { 
		$letra = substr($fra, $i, 1);
		if (($letra == 'a') or ($letra == 'A')){echo "A";}
		else if (($letra == 'e') or ($letra == 'E')){echo "E";}
		else if (($letra == 'i') or ($letra == 'I')){echo "I";}
		else if (($letra == 'o') or ($letra == 'O')){echo "O";}
		else if (($letra == 'u') or ($letra == 'U')){echo "U";}
		else{echo "$letra";}
	}

	echo "<br/>";

	for ($i=0; $i <= $t; $i++) { 
		$letra = substr($spala, $i, 1);
		echo "$letra<br/>";
	}


	for ($i=0; $i <= $tms; $i++) { 
		$letra = substr($fra, $i, 1);
		if(($letra == 'a') or ($letra == 'A') or ($letra == 'e') or ($letra == 'E') or ($letra == 'i') or ($letra == 'I') or ($letra == 'o') or ($letra == 'O') or ($letra == 'u') or ($letra == 'U')){
			echo "<span style='color:red;'>" . $letra . "<span/>";
		}
		else{
			echo "<span style='color:black;'>" . $letra . "<span/>" ;
		}
	}

	echo "<br/>";

	for ($i=$tm; $i >= 0; $i--) { 
		$letra = substr($ppala, $i, 1);
		echo "$letra";
	}
?>
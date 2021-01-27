<?php
	$nome =$_POST["inome"];  $ar   = 0;
	$snome=$_POST["isnome"]; $cont = 0;
	$email=$_POST["iemail"]; $qce  =strlen($email);

	teste($cont,$qce,$email,$ar);

	$letra = substr($email, $qce-1, 1);
	if((strcasecmp ('@', $letra) == 0) or ($cont > 0) or ($ar > 1)){
		include_once('index.html');
	}
	else{
		$txt = fopen("arq.txt", "a");
		$write = fwrite($txt, "\r\n");
		$write = fwrite($txt, "Nome : $nome $snome E-mail : $email");
		fclose($txt);
	}

	function teste(&$cont,$qce,$email,&$ar){
		for ($i=0; $i <= $qce; $i++) {
			$a = substr($email, $i, 1);
			if($a == ' ')$cont++;
			else if ((substr_compare('@', $a, 1) == 0)) $ar++;
		}
	}
?>

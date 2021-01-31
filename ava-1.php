<?php
	$gera =$_POST["igera"];$cont = 1;$str = 0;$gpct=0;$loca = 0;

	limpa();

	for($i = 1;$i <= $gera; $i++){
		gerador($cont);
		$cont++;
	}

	$arquivo = fopen("arq.txt", "r");
	while (!feof($arquivo)){
		$linha = fgets($arquivo);
		$str   = strlen($linha);
		tratamento($linha,$str,$gpct,$loca);
	}
	fclose($arquivo);

	echo "<br>";

	echo "Carros locados $loca <br>";
	echo "Quantidade de combustivel gasto no toral : $gpct";

	function limpa (){
		unlink('arq.txt');
	}

	function gerador ($cont){
		$ale = rand(1,4);
		$km  = rand(0,500);
		$txt = fopen("arq.txt", "a");
		if ($cont>1) {
			$write = fwrite($txt, "\r\n");
		}
		$write = fwrite($txt, "$ale;$km");
		fclose($txt);
	}

	function tratamento($linha,$str,&$gpct,&$loca){
			$tveic = substr($linha, 0, 1);
			$kms = substr($linha, 2, $str);
			if($kms > 0){$loca++;}
			if(strcasecmp ('1', $tveic) == 0){
				$gpc= intval($kms) / 8;
				echo("Veiculo luxo tipo A gastou de combustivel: $gpc");
			}
			else if(strcasecmp ('2', $tveic) == 0){
				$gpc= intval($kms) / 10;
				echo("Veiculo luxo tipo B gastou de combustivel: $gpc");
			}
			else if(strcasecmp ('3', $tveic) == 0){
				$gpc= intval($kms) / 15;
				echo("Veiculo economico tipo A gastou de combustivel: $gpc");
			}
			else if(strcasecmp ('4', $tveic) == 0){
				$gpc= intval($kms) / 18;
				echo("Veiculo economico tipo B gastou de combustivel: $gpc");
			}
			echo "<br>";
			$gpct = $gpct + $gpc;
	}
?>
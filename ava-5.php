<?php
	$contm=0; $contf=0; $contc=0;$contmf=0;$im = 0;
	$arquivo = fopen("dados.txt", "r");
	while (!feof($arquivo)){
		$linha = fgets($arquivo);
		tratamento($linha,$contm,$contf,$contc,$contmf,$im,$nome);
	}
	fclose($arquivo);

	echo "Clientes homens :$contm <br> Clientes mulheres $contf <br>";
	echo "Clientes casados:$contc <br> Clientes com mais de 1 filho: $contmf <br>";
	echo "Cliente mais velho: $nome";

	function tratamento($linha,&$contm,&$contf,&$contc,&$contmf,&$im,&$nome){

		$arrd = explode(",", $linha);

		for($i = 0; $i<=5; $i++){
			if($arrd[$i] == "M"){
				$contm++;
			}
			if($arrd[$i] == "F"){
				$contf++;
			}
			if (strcmp($arrd[$i], 'casado') == 0){
				$contc++;
			}
			if($i == 4){
				if ($arrd[$i] > 1){
					$contmf++;
				}
			}
			if($im < $arrd[1]){
				$im = $arrd[1];
				$nome = $arrd[0];
			}
		}


	}
?>
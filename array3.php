<?php

	function most($vet){//b) Exiba o array gerado
	print('<table border = 2 bordercolor = black><tr><th colspan = 30>Valores do Array</th></tr><tr>');
		for($o = 0;$o <= 29;$o++){
			echo "<td>$vet[$o]</td>";
		}
	print ('</tr></table>');
	}

	function ordd($vet){//c) Exiba o array gerado ordenado
			for($i = 0; $i < count($vet); $i++){
    			for($j = 0; $j < count($vet) - 1; $j++){
       				if($vet[$j] > $vet[$j + 1]){
         			$aux = $vet[$j];
         			$vet[$j] = $vet[$j + 1];
         			$vet[$j + 1] = $aux;
        			}
    			}
    		}

			print('<table border = 2 bordercolor = black><tr><th colspan = 30>Array Ordenado</th></tr><tr>');
				for($o = 0;$o <= 29;$o++){
					echo "<td>$vet[$o]</td>";
				}
			print ('</tr></table>');
	}

	function arpar($vet,&$veti,&$cont){//d) Exiba um array apenas com os números pares gerados 
		$cont=0;
			print('<table border = 2 bordercolor = black><tr><th colspan = 30>Numeros Pares</th></tr><tr>');
				for($o = 0;$o <= 29;$o++){
					if($vet[$o] % 2 == 0){
						echo "<td>$vet[$o]</td>";
					}
					else{
						$veti[$cont] = $vet[$o];
						$cont++;
					}
				}
			print ('</tr></table>');
			return $veti;
	}

	function arparo($vet){//e) Exiba um array apenas com os números pares gerados e ordenados 
			for($i = 0; $i < count($vet); $i++){
    			for($j = 0; $j < count($vet) - 1; $j++){
       				if($vet[$j] > $vet[$j + 1]){
         				$aux = $vet[$j];
         				$vet[$j] = $vet[$j + 1];
         				$vet[$j + 1] = $aux;
        			}
    			}
    		}

			print('<table border = 2 bordercolor = black><tr><th colspan = 30>Numeros Pares Ordenados</th></tr><tr>');
				for($o = 0;$o <= 29;$o++){
					if($vet[$o] % 2 == 0){
						echo "<td>$vet[$o]</td>";
					}
				}
			print ('</tr></table>');
	}

	function arinpa($veti,$cont){//f) Exiba um array apenas com os números ímpares gerados 
			print('<table border = 2 bordercolor = black><tr><th colspan = 30>Numeros Impar</th></tr><tr>');
			for ($a=0; $a <= $cont-1; $a++) {
				echo "<td>$veti[$a]</td>";
			}
			print ('</tr></table>');
	}

	function arinpao($veti,$cont){//g) Exiba um array apenas com os números ímpares gerados e ordenados 

			for($i = 0; $i < count($veti); $i++){
    			for($j = 0; $j < count($veti) - 1; $j++){
       				if($veti[$j] > $veti[$j + 1]){
         				$aux = $veti[$j];
         				$veti[$j] = $veti[$j + 1];
         				$veti[$j + 1] = $aux;
        			}
    			}
    		}
			print('<table border = 2 bordercolor = black><tr><th colspan = 30>Numeros Impar Ordenados</th></tr><tr>');
			for ($a=0; $a <= $cont-1; $a++) {
				echo "<td>$veti[$a]</td>";
			}
			print ('</tr></table>');
	}

	for ($i = 0;$i <= 29;$i++){//a) Gere um array com trinta elementos preenchidos de forma aleatória com números inteiros  entre 10 e 99. 
		$vet[$i] = rand(10, 99);
	}

	$cont = 0;
	$veti;

	most($vet);
	ordd($vet);
	arpar($vet,$veti,$cont);
	arparo($vet);
	arinpa($veti,$cont);
	arinpao($veti,$cont);

?>
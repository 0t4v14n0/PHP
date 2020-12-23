<?php
	print('<table border = 2 bordercolor = black><tr><th colspan = 10>Não ordenado</th></tr><tr>');
		for($o = 0;$o <= 5;$o++){
			$vet[$o] = rand(1, 100);
			echo "<td>$vet[$o]</td>";
		}
	print ('</tr></table>');

	for($i = 0; $i < count($vet); $i++){
    	for($j = 0; $j < count($vet) - 1; $j++){
       		if($vet[$j] > $vet[$j + 1]){
         		$aux = $vet[$j];
         		$vet[$j] = $vet[$j + 1];
         		$vet[$j + 1] = $aux;
        	}
    	}
    }

	print('<table border = 2 bordercolor = black><tr><th colspan = 10>Ordenada</th></tr><tr>');
		for($o = 0;$o <= 5;$o++){
			echo "<td>$vet[$o]</td>";
		}
	print ('</tr></table>');
?>
<?php
	$jogos=$_POST["ijogos"];

	for($i = 1;$i <= $jogos;$i++){
	print('<table border = 2 bordercolor = black><tr><th colspan = 10>Mega-Sena</th></tr><tr>');
		for($o = 0;$o <= 5;$o++){
			$vet[$o] = rand(1, 60);
			echo "<td>$vet[$o]</td>";
		}
		echo "<br/>";
	 print ('</tr></table>');

	}
?>
<?php	
	$str = 0;
	$arquivo = fopen("texto.txt", "r");
	while (!feof($arquivo)){
		echo "<br>";
		$linha = fgets($arquivo);
		$str   = strlen($linha);
		resc($linha,$str);
	}
	fclose($arquivo);

	function resc($linha,$str){
		$txt = fopen("textocrip.txt", "a");
		for($i = 0;$i <= $str; $i++){
		$letra = substr($linha, $i, 1);
			if ($letra == 'a') {
				$write = fwrite($txt, '1');
				echo "$letra";
			}
			else if ($letra == 'e') {
				$write = fwrite($txt, '2');
				echo "$letra";
			}
			else if ($letra == 'i') {
				$write = fwrite($txt, '3');
				echo "$letra";
			}
			else if ($letra == 'o') {
				$write = fwrite($txt, '4');
				echo "$letra";
			}
			else if ($letra == 'u') {
				$write = fwrite($txt, '5');
				echo "$letra";
			}
			else{
				$write = fwrite($txt, "$letra");
				echo "$letra";
			}
		}
		fclose($txt);
	}
?>
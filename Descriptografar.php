<?php	
	$str = 0;
	$arquivo = fopen("textocrip.txt", "r");
	while (!feof($arquivo)){
		echo "<br>";
		$linha = fgets($arquivo);
		$str   = strlen($linha);
		resc($linha,$str);
	}
	fclose($arquivo);

	function resc($linha,$str){
		$txt = fopen("textodesc.txt", "a");
		for($i = 0;$i <= $str; $i++){
		$letra = substr($linha, $i, 1);
			if ($letra == '1') {
				$write = fwrite($txt, 'a');
				echo "$letra";
			}
			else if ($letra == '2') {
				$write = fwrite($txt, 'e');
				echo "$letra";
			}
			else if ($letra == '3') {
				$write = fwrite($txt, 'i');
				echo "$letra";
			}
			else if ($letra == '4') {
				$write = fwrite($txt, 'o');
				echo "$letra";
			}
			else if ($letra == '5') {
				$write = fwrite($txt, 'u');
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
<?php
	$segu = 0;$resu = 0;

	for($i = 0; $i <= 19; $i++){
		$ale = rand(1,200);
		$arr[$i] = $ale;
		if($arr[$i] % 2 == 0){
			$segu = $segu + $arr[$i];
		}
	}

	$resu = $segu/20;
	echo "$resu <br>";

	for($i = 0; $i < count($arr); $i++){
    	for($j = 0; $j < count($arr) - 1; $j++){
     		if($arr[$j] > $arr[$j + 1]){
         		$aux = $arr[$j];
         		$arr[$j] = $arr[$j + 1];
         		$arr[$j + 1] = $aux;
        	}
    	}
   	}

   	for($i = 0; $i <= 19; $i++){
   		echo "$arr[$i] <br>";
	}
?>
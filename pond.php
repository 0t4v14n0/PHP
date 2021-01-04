<?php

	function calc($vet){
		$a = 0;$b=1;$c=0;
		for ($i=0; $i < 9; $i++) { 
			if($vet[$i] % 2 == 0){
				$veti[$i] = 2;
			}
			else{
				$veti[$i] = 3;
			}
		}
		for ($i=0; $i < 9; $i++) { 
			$a=$vet[$i]*$veti[$i];
			$b=$b+$veti[$i];
		}
		echo "$a<br>";
		echo "$b<br>";
		$c=($a*10)/$b;
		echo "$c";
	}

	for($o = 0;$o <= 9;$o++){
		$vet[$o] = rand(1, 100);
	}

	calc($vet);
	
?>
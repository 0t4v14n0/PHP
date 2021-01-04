<?php
	function pote($base,$expo){
		$i = 1;$a = 1;
  		do{
   			$a = $base * $a;
   			$i++;
  		}while($i<=$expo);
  		echo "$a";
	}

	$base=$_POST["ibase"];
	$expo=$_POST["iexpo"];

	pote($base,$expo);

?>
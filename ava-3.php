<?php
	$pbo =$_POST["ipbo"];$sbo =$_POST["isbo"];

	tratamento($pbo,$sbo);

	function tratamento($pbo,$sbo){
		$a[0] = $pbo;$a[1] = $sbo;

		for ($i=0; $i <= 1; $i++){
			if(($a[$i] >= 410) && ($a[$i] <= 450)){
				echo "Bola de futebol oficial <br>";
			}
			else if(($a[$i] >= 185) && ($a[$i] <= 240)){
				echo "Bola de volei oficial <br>";
			}
			else if (($a[$i] >= 800) && ($a[$i] <= 1200)){				
				echo "Bola de boliche oficial <br>";
			}
			else if (($a[$i] >= 450) && ($a[$i] <= 600)){				
				echo "Bola de basquete oficial <br>";
			}
			else if (($a[$i] >= 5) && ($a[$i] <= 15)){				
				echo "Bola de gude oficial <br>";
			}
		} 
	}
?>

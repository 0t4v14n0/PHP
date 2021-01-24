<?php
	$login = $_POST["ilogi"];
	$senha = $_POST["isenh"];

	if (($login == 'GP1') && ($senha == 123456)){
		echo "Salve";
	}
	else{
		echo("<script> alert('login ou senha  incorreto');</script>");
		include('index.html');
	}
?>
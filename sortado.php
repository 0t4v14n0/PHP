<?php
	$a = 0;
	$parray = ["Acre (AC)","Alagoas (AL)","Amapá (AP)","Amazonas (AM)","Bahia (BA)","Ceará (CE)","Distrito Federal (DF)","Espírito Santo (ES)","Goiás (GO)","Maranhão (MA)","Mato Grosso (MT)","Mato Grosso do Sul (MS)","Minas Gerais (MG)","Pará (PA)","Paraíba (PB)","Paraná (PR)","Pernambuco (PE)","Piauí (PI)","Rio de Janeiro (RJ)","Rio Grande do Norte (RN)","Rio Grande do Sul (RS)","Rondônia (RO)","Roraima (RR)","Santa Catarina (SC)","São Paulo (SP)","Sergipe (SE)","Tocantins (TO)"];

	function esta($parray){
		$a = rand(0, 26);
		echo "$parray[$a]";
	}

	esta($parray);
?>
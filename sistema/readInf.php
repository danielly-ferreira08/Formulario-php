<?php 
$recNomeArq = $_GET['id'];

$acessarDiret = file("cadastro/$recNomeArq");

foreach ($acessarDiret as $value) {
	echo $value. "<br>"; 
}

 ?>
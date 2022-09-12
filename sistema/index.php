<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> cadastro</title>
	<h2> Cadastrar funcionário</h2>
</head>
<body>
	<form method="post" action="cadast.php">
    <p>Nome: <input type="text" name="nome"> </p>
    <p>id <input type="number" name="id"></p>
    <p>cargo <input type="name" name="cargo"></p>
    <p>salário <input type="number" name="salario"></p>
   <p> Quant.Dependentes <input type="number" name="quantDepend"></p>
    <p><button type="submit" name="sub"> cadastrar </button></p>
	</form>

	<?php
<!--validar form

gravar infos do formulario no arquivo
usar o scandir (ver documentação) para listar os nomes de arquivos criados 
criar automaticamente links que possam levar ao arquivo readinfo.php de modo link passe via get
 -->

<?php 
extract($_POST);

$dados = "ID: $id\r\nNome: $nome\r\ncargo: $cargo\r\nsalario: $salario\r\nquantDepend: $quantDepend ";

$arquivNome = "$id.txt";

$arq = fopen("cadastro/$arquivNome", 'w+');
fwrite($arq, $dados);
fclose($arq);

$receberArq = scandir("cadastro");

$remover = array(".","..");

$retirar = array_diff($receberArq,$remover);

foreach($retirar as $value) {
    echo "<a href='readInf.php?id=$value'> $value </a> <br>";

}

 ?>
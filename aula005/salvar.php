<?php
$nome = $_POST["nome"];
$cidade = $_POST["cidade"];
$numero = $_POST["numero"];
$telefone = $_POST["telefone"];
$rg = $_POST["rg"];
$estado = $_POST["estado"];
$bairro = $_POST["bairro"];

echo "$nome - $cidade - $numero - $telefone - $rg - $estado - $bairro";

$arquivo = fopen("clientes.txt","a");

fwrite($arquivo, $nome ."\t");
fwrite($arquivo, $cidade . "\t");
fwrite($arquivo, $numero . "\t");
fwrite($arquivo, $telefone . "\t");
fwrite($arquivo, $rg . "\t");
fwrite($arquivo, $estado . "\t");
fwrite($arquivo, $bairro . "\n");

fclose($arquivo);

header("location:cadastro.php")
?>
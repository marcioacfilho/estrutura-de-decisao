<?php
$nome = $_POST['nome'];
$cidade = $_POST['cidade'];
$telefone = $_POST['telefone'];
$estado = $_POST['estado'];
$email = $_POST['email'];

$arquivo = fopen("clientes.csv","a");

fwrite($arquivo, $nome . ",");
fwrite($arquivo, $cidade . ",");
fwrite($arquivo, $estado . ",");
fwrite($arquivo, $telefone . ",");
fwrite($arquivo, $email . "\n");

fclose($arquivo);


header("location:index.php?mensagem=salvo");

?>
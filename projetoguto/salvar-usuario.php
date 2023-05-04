<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

// conexão com banco de dados
$servidor_bd = "127.0.0.1";
$usuario_bd = "root";
$senha_bd = "";
$banco_de_dados = "delivery_jogos_novo";

$conexao = mysqli_connect($servidor_bd, $usuario_bd, $senha_bd, $banco_de_dados);

// sql de inserção
$sql_inserir_usuario = "insert into usuario (nome, email, senha) values ('$nome' , '$email' , '$senha')";

// executar o sql no BD
$um_usuario = mysqli_query($conexao, $sql_inserir_usuario);

// fechar a conexão
mysqli_close($conexao);

header("location:novo-usuario.php?msg=sucesso");

?>



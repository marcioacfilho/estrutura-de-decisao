<?php

#### ESTRUTURA DE DECISÃO
$usuario = 'admin';
$senha = 123;
 
if($usuario == 'admin' && $senha == 321){
    echo "Acesso liberado";
}else{
    echo "Usuário ou senha inválido";
}
 
echo "<br>";
#### ESTRUTURA DE REPETIÇÃO & ARRAY
 
$produtos = ['👟','👠','🎮','🌭','🐴','👽']; # Array
echo $produtos[0];
echo $produtos[5];
echo count($produtos);
echo "<br>";
$i = 0;
while( $i < count($produtos)){
    echo $produtos[$i];
    $i++; // $i = $i + 1
}

#### operação entre arquivos
/*
conseguir trocar informações entre arquivos.
*** Entre arquivos diferentes
*** Com o mesmo arquivo
 
*/
?>

<form action="recebe.php" method="post">
    Usuário:<input name="usuario"><br>
    Senha:<input name="senha" type="password"><br>
    Endereço:<input name="endereco"><br>
    Número:<input name="numero"><br>

    <button type="submit">Enviar</button>
</form>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
</head>

<body>
    <h1>Cadastro de Cliente</h1>
    <form method="post" action="salvar-cliente.php">
        Nome:<input name="nome"><br><br>
        E-mail:<input type="email" name="email"><br><br>
        Telefone:<input type="tel" name="telefone"><br><br>
        Rua:<input name="rua"><br><br>
        Numero:<input name="numero"><br><br>
        Complemento:<input name="complemento"><br><br>
        Cidade:<input name="cidade"><br><br>
        Estado:<select name="estado">
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>

        </select><br><br>

        Data de nascimento:<input type="date" name="datadenasimento"><br><br>
        CPF:<input name="cpf"><br><br>
        RG:<input name="rg"><br><br>
        Whatsapp:<input type="tel" name="whatsapp"><br><br>
        Fuma:<input type="radio" name="fuma" value="Sim">Sim <input type="radio" name="fuma" value="Não">Não<br><br>
        Bebida(álcool):<input type="radio" name="álcool" value="Sim">Sim <input type="radio" name="álcool" value="Não">Não<br><br>
        <button type="submit">Salvar cadastro</button>
    </form>
</body>

</html>
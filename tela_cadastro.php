<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <header>
        <h1>Cadastro</h1>
    </header>
    <form action="" method="post">
        Nome: <input type="text" name="nome" placeholder="Seu nome completo">
        CPF: <input type="text" name="cpf" placeholder="000.000.000-00">
        Data de Nascimento: <input type="date" name="data">
        <br>
        <br>
        CEP: <input type="text" name="cep" placeholder="12345-000">
        Estado: <select name="estados-brasil" id="selecao-estados"></select>
        Cidade: <input type="text" name="cidade" placeholder="Sua cidade">
        Rua: <input type="text" name="rua" placeholder="Ex: Rua das castanheiras">
        </select>
        <br>
        <br>
        <input type="submit" value="Cadastrar" name="btn_cadastrar">
    </form>
    <script>
        function msg(msg) {
            console.log(msg);
        }
    </script>
    <script src="js/carregar_estados"></script>
</body>
</html>
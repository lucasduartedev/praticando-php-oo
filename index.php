<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando PHP OO</title>
</head>
<body>
    <h1>Praticando OO</h1>
    <?php
        require_once('Pessoa.php');
        require_once('Endereco.php');

        $pessoas[0] = new Pessoa('Thiago Silva', '123.123.123-45', '21/05/1996');
        $enderecos[0] = new Endereco('12345-987', 'Distrito Fereral', 'Asa Sul', 'Alto da  Colina', '1AB95', 'APTO 205');

        # print($pessoas[0]->getNome());
        $pessoas[0]->apresentarDados();
        $pessoas[0]->setEndereco($enderecos[0]);
        $pessoas[0]->getEndereco()->enderecoCompleto();

    ?>
</body>
</html>
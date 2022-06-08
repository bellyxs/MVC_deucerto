<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionário</title>
    <style>
        label,
        input {
            display: block;
        }
    </style>
</head>

<body>
    <form action="/funcionario/save" method="post">
        <fieldset>
            <legend>Cadastro de Funcionário</legend>
            <input type="hidden" name="id" value="<?= $model->id ?>">

            <label for="nome">Nome:</label>
            <input name="nome" id="nome" type="text" value="<?= $model->nome ?>"/>

            <label for="rg">RG:</label>
            <input name="rg" id="rg" type="text" value="<?= $model->rg ?>"/>         

            <label for="data_nascimento">Data Nascimento:</label>
            <input name="data_nascimento" id="data_nascimento" type="date" value="<?= $model->data_nasc ?>"/>

            <label for="email">E-mail:</label>
            <input name="email" id="email" type="email" value="<?= $model->email ?>"/>

            <label for="telefone">Telefone:</label>
            <input name="telefone" id="telefone" type="number" value="<?= $model->telefone ?>"/>

            <button type="submit">Enviar</button>

        </fieldset>
    </form>
</body>

</html>
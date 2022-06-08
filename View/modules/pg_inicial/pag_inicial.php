<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
    <style>
        label,
        input {
            display: block;
        }
    </style>
</head>

<body>

    <form action="categoria/form" method="post">
        <button type="submit">Categorias de Produtos</button>
    
    </form>
    <br>


    <form action="/funcionario/form" method="post">
        
            <button type="submit">Cadastro Funcionario</button>
           
    </form>
    <br>
  

    <form action="/pessoa/form" method="post">
        
            <button type="submit">Cadastro Pessoa</button>
        
    </form>

    <br>
   

    <form action="/produto/form" method="post">
        
            <button type="submit">Cadastro Produto</button>
        
    </form>

    <hr>
    <a href="/categoria">Lista de Categoria</a><br>
    <a href="/funcionario">Lista de Funcionario</a><br>
    <a href="/produto">Lista de Produto</a><br>
    <a href="/pessoa">Lista de Pessoa</a><br>
</body>

            
</html>
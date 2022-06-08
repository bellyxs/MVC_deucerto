<?php

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


include 'Controller/PessoaController.php';
include 'Controller/ProdutoController.php';
include 'Controller/FuncionarioController.php';
include 'Controller/CategProdutoController.php';

switch ($uri_parse) {
        //PESSOA
    case '/pessoa':
        PessoaController::index();
        break;

    case '/pessoa/form':
        PessoaController::form();
        break;

    case '/pessoa/save':
        PessoaController::save();
        break;

    case '/pessoa/delete':
        PessoaController::delete();
        break;


        //PRODUTO
    case '/produto':
        ProdutoController::index();
        break;

    case '/produto/form':
        ProdutoController::form();
        break;

    case '/produto/save':
        ProdutoController::save();
        break;

    case '/produto/delete':
        ProdutoController::delete();
        break;



        //FUNCIONARIO
    case '/funcionario':
        FuncionarioController::index();
        break;

    case '/funcionario/form':
        FuncionarioController::form();
        break;

    case '/funcionario/save':
        FuncionarioController::save();
        break;

    case '/funcionario/delete':
        FuncionarioController::delete();
        break;

        //CATEGORIA

    case '/categoria':
        CategProdutoController::index();
        break;

    case '/categoria/form':
        CategProdutoController::form();
        break;

    case '/categoria/save':
        CategProdutoController::save();
        break;

    case '/categoria/delete':
        CategProdutoController::delete();
        break;

    default:
        include 'View/modules/pg_inicial/pag_inicial.php';
        break;
}

<?php

class CategProdutoController
{
public static function index()
    {
        include 'Model/CategProdutoModel.php';
        
        $model = new CategProdutoModel();
        $model->getAllRows();
        
        include 'View/modules/Categorias/CategProdutoLista.php';
    }


    public static function form()
    {
        include 'Model/CategProdutoModel.php';
        $model = new CategProdutoModel;
        if(isset($_GET['id']))
            $model = $model->getById($_GET['id']);

        include 'View/modules/Categorias/CategProdutoCadastro.php';
    }


    public static function save()
    {
        include 'Model/CategProdutoModel.php';

        $categoria = new CategProdutoModel();
        $categoria->id = $_POST['id'];
        $categoria->nome = $_POST['nome'];
        $categoria->descricao = $_POST['descricao'];

        $categoria->save();

        header("Location: /categoria"); 
    }

    public static function delete()
    {
        include 'Model/CategProdutoModel.php';

        $model = new CategProdutoModel();

        $model->delete( (int) $_GET['id']);

        header("Location: /categoria");
    }

}
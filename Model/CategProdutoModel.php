<?php

class CategProdutoModel
{
    public $id, $nome, $descricao;
    public $rows;  

    public function save()
    {
        include 'DAO/CategProdutoDAO.php'; 
        $dao = new CategProdutoDAO(); 

    
        if(empty($this->id))
        {   
            $dao->insert($this);
        } else {
            $dao->update($this); 
        }        
    }
    public function getAllRows()
    {
        include 'DAO/CategProdutoDAO.php';
        
        $dao = new CategProdutoDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        include 'DAO/CategProdutoDAO.php';

        $dao = new CategProdutoDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new CategProdutoModel();

    }

    public function delete(int $id)
    {
        include 'DAO/CategProdutoDAO.php';

        $dao = new CategProdutoDAO();

        $dao->delete($id);
    }
    
} 
<?php
require_once "app/models/Product.php";

class ProdutoController
{
    public function index()
    {
        $produtos = Produto::all();
        require "app/views/produtos/index.php";
    }

    public function create()
    {
        $nome = $_POST['nome'] ?? null;
        $preco = $_POST['preco'] ?? null;

        $produtos = Produto::addProduto($nome, $preco);
        require "app/views/produtos/edit.php";
    }

    public function edit()
    {
        $id = $_GET['id'] ?? null;
        $produto = Produto::find($id);
        if ($produto) {
            require "app/views/produtos/edit.php";
        } else {
            echo "Produto não encontrado.";
        }
    }

    public function delete()
    {
        $id = $_GET['id'] ?? null;
        echo "Simulando exclusão do produto ID: $id";
    }

    public function store()
    {
        $nome = $_POST['nome'] ?? 'Produto sem nome';
        $preco = $_POST['preco'] ?? 0;

        echo "Simulando inserção: $nome - R$ $preco <br>";
        echo "<a href='index.php?controller=produto&action=index'>Voltar para lista</a>";
    }
}

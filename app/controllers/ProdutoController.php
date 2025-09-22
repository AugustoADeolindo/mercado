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
        require "app/views/produtos/create.php";
    }

    public function store()
    {
        $nome = $_POST['nome'] ?? null;
        $preco = $_POST['preco'] ?? null;

        Produto::addProduto($nome, $preco);
        echo "Inserção: $nome - R$ $preco <br>";
        echo "<a href='index.php?controller=produto&action=index'>Voltar para lista</a>";
    }

    public function edit()
    {
        $id = $_POST['id'] ?? null;
        $newNome = $_POST['nome'] ?? null;
        $newPreco = $_POST['preco'] ?? null;

        Produto::edit($id, $newNome, $newPreco);
    }

    public function delete()
    {
        $id = $_GET['id'] ?? null;
        echo "Excluindo o produto ID: $id";

        Produto::deleteItem($id);
    }
}

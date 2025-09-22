<h1>Editar Produto</h1>
<form method="POST" action="index.php?controller=produto&action=edit&id=<?= $produto['id'] ?>">
    Nome: <input type="text" name="nome" value="<?= $produto['nome'] ?>"><br>
    Preço: <input type="number" step="0.01" name="preco" value="<?= $produto['preco'] ?>"><br>
    <button type="submit">Atualizar</button>
</form>
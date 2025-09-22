<h1>Lista de Produtos</h1>
<a href="index.php?ProdutoController=produto&action=create">Adicionar Produto</a>

<ul>
    <?php foreach ($produtos as $p): ?>
        <li>
            <?= $p["nome"] ?> - R$ <?= $p["preco"] ?>
            [<a href="index.php?controller=produto&action=edit&id=<?= $p['id'] ?>">Editar</a>]
            [<a href="index.php?controller=produto&action=delete&id=<?= $p['id'] ?>">Excluir</a>]
        </li>
    <?php endforeach; ?>
</ul>
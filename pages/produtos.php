<?php
require_once '../scripts/conexao.php';

$db = getDbConnection();

$stmt = $db->query("SELECT * FROM produtos");
$produtos = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="../index.php">Voltar</a>
    <div class="produtos-container">
        <?php foreach ($produtos as $produto): ?>
            <div class="produto-card">
                <h2><?= $produto['nome'] ?></h2>
                <p>R$ <?= number_format($produto['preco'], 2, ',', '.') ?></p>
                <div>
                    <a href="../scripts/edit.php?id=<?= $produto['id'] ?>" class="button">Editar</a>
                    <a href="../scripts/delete.php?id=<?= $produto['id'] ?>" class="button">Deletar</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>
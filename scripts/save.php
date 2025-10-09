<?php
require_once '../scripts/conexao.php';

$pdo = getDbConnection();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aviso de Cadastro</title>
    <link rel="stylesheet" href="../styles/save.css">
    <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">
</head>

<body>
    <div class="message-box">
        <?php
        try {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nome = $_POST["nome"];
                $preco = (float)$_POST["preco"];
                $categoria = (int)$_POST["categoria"];

                $query = "INSERT INTO produtos (
                    nome, preco, id_categoria 
                ) VALUES (
                    :nome, :preco, :categoria
                )";

                $stmt = $pdo->prepare($query);

                $stmt->bindParam(':nome', $nome);
                $stmt->bindParam(':preco', $preco);
                $stmt->bindParam(':categoria', $categoria);
                if ($stmt->execute()) {
                    echo '<div class="success">📚 Produto cadastrado com sucesso!</div>';
                } else {
                    echo '<div class="error">❌ Erro ao cadastrar o livro.</div>';
                }

                echo '<a href="../pages/produtos.php">Ver Produtos</a>';
            }
        } catch (PDOException $e) {
            echo '<div class="error">❌ Erro ao conectar ao banco de dados: ' . $e->getMessage() . '</div>';
        }

        ?>
    </div>
</body>

</html>
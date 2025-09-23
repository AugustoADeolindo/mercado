<?php
class Produto
{
    private static $produtos = [
        ["id" => 1, "nome" => "Arroz", "preco" => 25],
        ["id" => 2, "nome" => "Feijão", "preco" => 12],
        ["id" => 3, "nome" => "Macarrão", "preco" => 8],
    ];

    public static function all()
    {
        return self::$produtos;
    }

    public static function edit($id, $newNome, $newPreco)
    {
        foreach (self::$produtos as $chave => $produto) {
            if ($produto['id'] == $id) {
                self::$produtos[$chave] = ["id" => $id, "nome" => $newNome, "preco" => $newPreco];
                echo "Produto Atualizado!";
                break;
            } else {
                echo "Produto não encontrado";
            }
        }
    }

    public static function addProduto($pdo, $nome, $preco)
    {
        $sql = "INSERT INTO produtos (nome,preco) VALUES (?,?)";

        try {
            $statement = $pdo->prepare($sql);
            $statement->execute([$nome, $preco]);

            echo "Produto '{$nome}' inserido com sucesso!";
        } catch (PDOException $e) {
            die("Erro ao cadastrar o produto: " . $e->getMessage());
        }
    }

    public static function deleteItem($id)
    {
        foreach (self::$produtos as $chave => $produto) {
            if ($produto['id'] == $id) {
                unset(self::$produto[$chave]);
                break;
            }
        }

        self::$produtos = array_values(self::$produtos);
    }
}

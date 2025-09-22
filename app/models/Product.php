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

    // public static function find($id)
    // {
    //     foreach (self::$produtos as $produto) {
    //         if ($produto["id"] == $id) {
    //             return $produto;
    //         }
    //     }
    //     return null;
    // }

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

    public static function addProduto($nome, $preco)
    {
        self::$produtos[] = [
            "id" => (count(self::$produtos) + 1),
            "nome" => $nome,
            "preco" => $preco
        ];
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

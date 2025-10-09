<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/imask"></script>
    <title>Liva</title>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon">
</head>

<body>
    <section id="home">
        <header>
            <div class="header-container">
                <div id="logotipo-container">
                    <img class="logotipo" src="./assets/logotipo.png" alt="">
                </div>
                <div class="options-container">
                    <a href="#form">Cadastrar Itens</a>
                    <a href="./pages/produtos.php">Ver Produtos</a>
                </div>
            </div>
        </header>
        <div class="content">
            <div class="content-infos">
                <h1>Adicione <span>produtos</span> ao estoque</h1>
                <a href="#form">Cadastrar</a>
                <a href="./pages/produtos.php">Ver Produtos</a>
            </div>
        </div>
    </section>
    <section id="form">
        <div class="form-container">
            <h1>Cadastro de Produtos </h1>
            <div class="geral-form">
                <form action="./scripts/save.php" method="post" autocomplete="off">
                    <div class="top-form">
                        <div class="left-form">
                            <div class="item">
                                <label for="nome">Nome do Produto</label>
                                <input type="text" required name="nome" id="titulo">
                            </div>
                            <div class="item">
                                <label for="preco">Preço</label>
                                <input type="number" required name="preco" id="preco">
                            </div>
                            <!-- automatizar futuramente esse campo para puxar todas as categorias do banco de dados. -->
                            <div class="item">
                                <label for="categoria">Categoria</label>
                                <select name="categoria" id="categoria">
                                    <option value="1">Eletrônicos</option>
                                    <option value="2">Roupas</option>
                                    <option value="3">Alimentos</option>
                                    <option value="4">Móveis</option>
                                    <option value="5">Brinquedos</option>
                                    <option value="6">Decoração</option>
                                    <option value="7">Utensílios</option>
                                    <option value="8">Ferramentas</option>
                                    <option value="9">Jardinagem</option>
                                    <option value="10">Esporte</option>
                                    <option value="11">Outros</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Cadastrar" class="buttonForm">
                </form>
            </div>
        </div>
    </section>
    <footer>
        <p>&copy; 2025 Liva. Todos os direitos reservados</p>
    </footer>
</body>

</html>
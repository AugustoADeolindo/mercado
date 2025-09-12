# Hiper Market - Sistema de Carrinho de Compras em PHP (CLI)

> Projeto de console (CLI) desenvolvido como exercício prático para estudo e aplicação dos conceitos fundamentais de **Programação Orientada a Objetos (POO)** com **PHP**.

## 🎯 Objetivo do Projeto

O objetivo principal deste projeto é simular, de forma simplificada, um sistema de ponto de venda de um mercado. Através dele, é possível cadastrar clientes, visualizar produtos e realizar compras, tudo via linha de comando. O foco não está na complexidade do sistema, mas sim na correta aplicação dos pilares da POO, como encapsulamento, abstração e separação de responsabilidades.

## ✨ Funcionalidades

  * **👤 Gestão de Clientes**:
      * Cadastrar novos clientes (Nome e CPF).
      * Listar todos os clientes já cadastrados.
  * **🛍️ Simulação de Compra**:
      * Exibir um catálogo de produtos pré-definido.
      * Iniciar um carrinho de compras para um cliente específico.
      * Adicionar produtos e quantidades variadas ao carrinho.
      * Calcular e exibir o valor total da compra ao finalizar.

## 🛠️ Tecnologias Utilizadas

  * **PHP 8.x**

## 🚀 Como Executar

1.  **Pré-requisitos**:

      * Certifique-se de ter o [PHP](https://www.php.net/downloads.php) instalado em seu sistema.

2.  **Clone o repositório**:

    ```bash
    git clone https://github.com/AugustoADeolindo/mercado.git
    ```

3.  **Navegue até a pasta do projeto**:

    ```bash
    cd seu-repositorio
    ```

4.  **Execute o sistema**:

      * O script principal que inicia a aplicação é o `main.php` (ou o nome que você deu ao arquivo final).

    <!-- end list -->

    ```bash
    php main.php
    ```

    Após executar o comando, o menu interativo será exibido no seu terminal.

## 📂 Estrutura do Projeto

O código foi estruturado de forma a separar as responsabilidades em classes distintas, seguindo os princípios da POO:

  * `Product.php`: Funciona como um catálogo, contendo a lista estática de produtos disponíveis.
  * `Costumer.php`: Representa a entidade "Cliente" e também gerencia a lista de clientes cadastrados.
  * `ShoppingCart.php`: Gerencia o estado de um carrinho de compras de uma sessão, permitindo adicionar itens e calcular o total.
  * `main.php`: Ponto de entrada da aplicação, responsável por exibir o menu, capturar a entrada do usuário e orquestrar as ações entre as diferentes classes.

## 🌱 Próximos Passos (Melhorias Futuras)

Este projeto é um ponto de partida. Os próximos passos para evoluí-lo e praticar conceitos mais avançados incluem:

  * [ ] Refatorar a classe `Product` para que ela represente um único produto.
  * [ ] Fazer os métodos retornarem dados (`return`) em vez de imprimir diretamente (`echo`).
  * [ ] Utilizar objetos (`Product`) como parâmetros de métodos em vez de `arrays`.
  * [ ] Implementar validação para as entradas do usuário.
  * [ ] Adicionar persistência de dados (salvando clientes em um arquivo JSON, por exemplo).

-----

Feito para praticar e consolidar conceitos de POO em PHP\!

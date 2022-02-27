<?php
    require_once("../auth/conectar.php");
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Automóveis</title>
    <link rel="stylesheet" href="../statics/css/style.css">
    <link rel="stylesheet" href="../statics/css/menu.css">
    <link rel="stylesheet" href="../statics/css/tabelas.css">
    <link rel="stylesheet" href="../statics/css/form.css">

<body>
    <header>
        <div class="logo">
            <h1>Automóveis e Acessórios</h1>
        </div>
        <nav aria-label="">
            <div class="toggle">
                <span></span>
            </div>
            <ul>
                <li><a href="home.php">Início</a></li>
                <li><a href="automoveis.php">Automóveis</a></li>
                <li><a href="acessorio.php">Acessórios</a></li>
                <li><a href="cliente.php">Clientes</a></li>
                <li><a href="produtos.php">Produtos</a></li>
                <li><a href="vendas.php">Vendas</a></li>
                <li><a href="sair.php">Sair</a></li>

            </ul>

        </nav>
    </header>

    <div class="container-principal">
        
        <div id="id01" class="modal">

            <form action="inserir_acessorio.php" method="POST">
                            <h1>Cadastrar um novo acessório</h1>

                <div class="container">
                    <div class="bloco">
                        <label class="label" for="nome">Nome</label>
                        <input type="text" placeholder="Nome do acessório" name="nome" required>

                    </div>

                    <div class="bloco">

                        <label class="label" for="estado">Estado</label>
                        <select name="estado" id="estado">
                            <option value="vazio">Selecione um estado</option>
                            <option value="novo">Novo</option>
                            <option value="usado">Usado</option>
                        </select>
                    </div>

                    <div class="bloco">

                        <label class="label" for="preco">Preço do acessório</label>
                        <input type="number" name="preco" id="preco" placeholder="Preços da peça">
                    </div>

                    <div class="bloco">

                        <label class="label" for="tipo">Tipo</label>
                        <input type="number" name="tipo" id="tipo" placeholder="Tipo">
                    </div>

                    <div class="controlo">
                        <input type="submit" value="Cadastrar">
                        <input type="reset" value="Limpar">
                    </div>

                </div>
            </form>
        </div>
        <script>

        </script>

        <script src="../statics/js/form.js"></script>
        <script src="../statics/js/jquery-3.6.0.min.js"></script>
        <script src="../statics/js/app.js"></script>
</body>

</html>
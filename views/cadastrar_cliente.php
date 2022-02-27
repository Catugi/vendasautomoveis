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

            <form action="inserir_estudante.php" method="POST">
                <h1>Cadastrar um novo cliente</h1>
                <div class="container">
                    <div class="bloco">
                        <label class="label" for="nome">Nome</label>
                        <input type="text" placeholder="Nome do cliente" name="nome" required>

                    </div>

                    <div class="bloco">

                        <label class="label" for="morada">Morada</label>
                        <input type="text" name="morada" id="morada" placeholder="Morada do Cliente">

                    </div>

                    <div class="bloco">

                        <label class="label" for="sexo">Sexo do Cliente</label>
                        <select name="sexo" id="sexo">
                            <option value="vazio">Selecione o gênero</option>
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                        </select>
                    </div>

                    <div class="bloco">

                        <label class="label" for="bilhete">Bilhete de Identidade</label>
                        <input type="text" name="bilhete" id="bilhete" placeholder="Bilhete de Ideintidade">
                    </div>

                    <div class="bloco">

                        <label class="label" for="telefone">Telefone do cliente</label>
                        <input type="text" name="bilhete" id="bilhete" placeholder="Telefone do cliente">
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
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

            <form action="inserir_venda.php" method="POST">
                <h1>Efectuar uma nova venda</h1>
                <div class="container">
                    <div class="bloco">

                        <label class="label" for="produto">Produto</label>
                        <select name="produto" id="produto">
                            <option value="vazio">Selecione um produto</option>
                            <?php
                     $query = "SELECT * FROM produto ";
                     $result = $conexao->query($query);
                     while($row = $result->fetch_assoc()) { ?>
                            <option value="<?php echo $row['nome']; ?>">
                                <?php echo $row['nome'] ?>
                            </option>
                            <?php
                    } ?>
                        </select>
                    </div>

                    <div class="bloco">

                        <label class="label" for="cliente">Cliente</label>
                        <select name="cliente" id="cliente">
                            <option value="vazio">Selecione um cliente</option>
                            <?php
                     $query = "SELECT * FROM cliente ";
                     $result = $conexao->query($query);
                     while($row = $result->fetch_assoc()) { ?>
                            <option value="<?php echo "".$row['nome']; ?>">
                                <?php echo "".$row['nome']; ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="bloco">

                        <label class="label" for="modo_pagamento">Estado do automóvel</label>
                        <select name="modo_pagamento" id="modo_pagamento">
                            <option value="vazio">Selecione o modo pagamento</option>
                            <option value="cash">Em dinheiro</option>
                            <option value="cartao">Cartão</option>
                            <option value="iban">Transferência por IBAN</option>
                            <option value="visa">Visa</option>
                        </select>
                    </div>
                    <div class="bloco">
                        <label for="quantidade">Quantidade da compra</label>
                        <input type="number" name="quantidade" id="quantidade" placeholder="Quantidade da compra">
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
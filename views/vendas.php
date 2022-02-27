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
    <link rel="stylesheet" href="../statics/css/form.css">
    <link rel="stylesheet" href="../statics/css/tabelas.css">

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
        <div class="cabecalio">

            <nav class="nav-sub" aria-label="">

                <ul>
                    <li><a href="Automóveis.php">Todos</a></li>
                    <li><a href="Automóveis_comum.php">Comuns</a></li>
                    <li><a href="Automóveis_ajudante.php">Ajudantes</a></li>
                    <li><a href="Automóveis_especial.php">Especias</a></li>
    
                     <a href="cadastrar_venda.php">
                        <li><button style="width:auto;">Adicionar Novo</button></li>
                    </a>
                </ul>

            </nav>
        </div>
        <div class="corpo">
             <form action="apagar_venda.php" method="POST">

            <div class="container">
                <table>
                    <thead>
                        <tr>
                            <th scope="coll" id="titulo" colspan="10">Lista de Vendas Eefctuadas</th>
                        </tr>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Produto</th>
                            <th scope="col">Modelo de pagamento</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Apagar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Incia -->
                        <!-- Este código seleciona todos os dados que estão na tabela funcionario e 
                        popula em uma tabela onde se listam todos os clientes cadastrados -->
                    <?php
                     $query = "SELECT * FROM vendas";
                     $result = $conexao->query($query);
                     while($row = $result->fetch_assoc()) { ?>

                        <tr>
                            <td>
                                <input type="text" name="idfunc" id="idfunc" size="2" readonly
                                    value="<?php echo $row['id_venda'] ?>">
                            </td>
                            <td>
                                <?php echo $row['cliente'];?>
                            </td>
                            <td>
                                <?php echo $row['produto'];?>
                            </td>
                            <td>
                                <?php echo $row['modelo_pagamento'];?>
                            </td>
                            <td>
                                <?php echo $row['quantidade']?>
                            </td>
                            <td class="botao"> 
                                <input id="apagar" type="submit" value="Apagar">
                            </td>
                
                    
                        </tr>
                    <?php } ?>
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
            </div>
        </form>

        </div>
    </div>
    
    <script>

    </script>

    <script src="../statics/js/form.js"></script>
    <script src="../statics/js/jquery-3.6.0.min.js"></script>
    <script src="../statics/js/app.js"></script>
</body>

</html>


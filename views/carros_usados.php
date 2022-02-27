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
        <div class="cabecalio">

            <nav class="nav-sub" aria-label="">

                <ul>
                    <li><a href="carros_novos.php">Novos</a></li>
                    <li><a href="automoveis.php">Todos</a></li>

                </ul>

            </nav>
        </div>
        <div class="corpo">
            <form action="apagar_estudante.php" method="POST">

                <div class="container">
                    <table>
                        <thead>
                            <tr>
                                <th scope="coll" id="titulo" colspan="10">Lista de Automóveis</th>
                            </tr>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Sobrenome</th>
                                <th scope="col">Bilhete</th>
                                <th scope="col">Ano e Curso</th>
                                <th scope="col">Tipo de Aluno</th>
                                <th scope="col">Curso</th>
                                <th scope="col">Estipêndio</th>
                                <th scope="col">Apagar</th>
                                <th scope="col">Editar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Incia -->
                            <!-- Este código seleciona todos os dados que estão na tabela funcionario e 
                        popula em uma tabela onde se listam todos os clientes cadastrados -->
                            <?php
                     $query = "SELECT * FROM estudante ";
                     $result = $conexao->query($query);
                     while($row = $result->fetch_assoc()) { ?>

                            <tr>
                                <td>
                                    <input type="text" name="idfunc" id="idfunc" size="2" readonly
                                        value="<?php echo $row['id_estudante'] ?>">
                                </td>
                                <td>
                                    <?php echo $row['nome_estudante'];?>
                                </td>
                                <td>
                                    <?php echo $row['sobrenome'];?>
                                </td>
                                <td>
                                    <?php echo $row['b_identidade'];?>
                                </td>
                                <td>
                                    <?php echo $row['ano_curso']?>
                                </td>
                                <td>
                                    <?php echo $row['grupo'];?>
                                </td>
                                <td>
                                    <?php echo $row['curso'];?>
                                </td>
                                <td>
                                    <?php echo $row['valo__a_pagar'];?>
                                </td>
                                <td class="botao"> <input id="apagar" type="submit" value="Apagar"></td>
            </form>

            <form action="editar_estudante.php" method="post">
                <input type="number" name="ideditar" id="" value="<?php $row['id_estudante']; ?>"
                    style="display: none;">
                <td class="botao"><input type="submit" name="editar" id="editar" value="Editar"></td>
            </form>
            </tr>
            <?php } ?>
            </tbody>
            <tfoot>
            </tfoot>
            </table>
        </div>
    </div>
    </div>
    <div id="id01" class="modal">

        <form class="modal-content animate" action="inserir_estudante.php" method="POST">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close"
                    title="Fechar o formulário">&times;</span>
            </div>

            <div class="container">
                <div class="bloco">
                    <label class="label" for="nome">Nome</label>
                    <input type="text" placeholder="Nome do Estudante" name="nome" required>
                </div>

                <div class="bloco">

                    <label class="label" for="sobrenome">Sobrenome</label>
                    <input type="text" placeholder="Sobrenome" name="sobrenome" required>
                </div>

                <div class="bloco">

                    <label class="label" for="bilhete">Bilhet de Identidade</label>
                    <input type="text" name="bilhete" id="bilhete">
                </div>

                <div class="bloco">

                    <label class="label" for="anocuros">Ano de Curso</label>
                    <input type="text" name="anocurso" id="anocuros">
                </div>

                <div class="bloco">

                    <label class="label" for="recebeapoip">Recebe apoio financeiro</label>
                    <input type="checkbox" name="recebeapoip" id="recebeapoip">
                </div>
                <div class="bloco">

                    <label class="label" for="estaemprojecto">Está em um projeto</label>
                    <input type="checkbox" name="estaemprojecto" id="estaemprojecto">
                </div>


                <div class="bloco">

                    <label class="label" for="nomedoprojecto">Nome do Projecto</label>
                    <input type="text" name="nomedoprojecto" id="nomedoprojecto">
                </div>
                <hr>
                <br>
                <div class="bloco">

                    <label class="label" for="tipoaluno">Tipo de aluno</label>
                    <div class="sub-bloco">

                        <label for="especial">Especial</label>
                        <input type="checkbox" checked="false" onclick="checkuncheckEspecial(); hideEspecial();"
                            name="especial" id="especial">

                        <label for="assistente">Assistente</label>
                        <input type="checkbox" checked="false" onclick="checkuncheckAssistente(); hideAssistente();"
                            name="assistente" id="assistente">
                    </div>
                </div>

                <div class="bloco opcional" id="curso">

                    <label class="label" for="curso">Curso</label>
                    <select name="curso" id="curso">
                        <option value="vazio">------------</option>
                        <?php
                     $query = "SELECT nome, departamento FROM curso";
                     $result = $conexao->query($query);
                     while($row = $result->fetch_assoc()) { ?>
                        <option value="<?php echo $row['nome'];?>">
                            <?php echo $row['nome'].' - '.$row['departamento'];?>
                        </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="bloco opcional" id="anos-assistente">

                    <label class="label" for="anosassistente">Anos de Assistente</label>
                    <input type="number" name="anosassistente" id="anosassistente">
                </div>

                <div class="bloco opcional" id="dis_ensinadas">

                    <label class="label" for="disciplinasensinadas">Disciplinas que ensinou</label>
                    <input type="text" name="disciplinasensinadas" id="disciplinasensinadas">
                </div>

                <div class="bloco opcional" id="anos_rep">

                    <label class="label" for="anorepetido">Anos que repetiu</label>
                    <input type="text" name="anorepetido" id="anorepetido">
                </div>
                <div class="bloco opcional" id="dis_repetida">

                    <label class="label" for="disciplinarepetida">Disciplinas que repetiu</label>
                    <select name="disciplinarepetida" id="disciplinarepetida">
                        <option value="vazio">------------</option>
                        <?php
                     $query = "SELECT nome, ano, semestre FROM disciplina";
                     $result = $conexao->query($query);
                     while($row = $result->fetch_assoc()) { ?>
                        <option value="<?php echo $row['nome'];?>">
                            <?php echo $row['nome'].' '.$row['ano'].' ano '.$row['semestre'].' semestre';?>
                        </option>
                        <?php } ?>
                    </select>
                </div>


                <div class="bloco opcional">
                    <button type="submit">Cadastrar</button>
                    <button type="reset" class="cancelbtn">Limpar</button>
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
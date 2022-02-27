<?php
    $modelo = $_POST['modelo'];
    $tipo =$_POST['tipo'];
    $categoria = $_POST['categoria'];
    $estado =$_POST['estado'];
    $anodefabrico = $_POST['anofabrico'];
    $preco = $_POST['preco'];

    require_once("../auth/conectar.php");
    $query = "INSERT INTO automovel (id_automvel, modelo, tipo, categoria, estado, anodefabrico, preco) VALUES(NULL, '$modelo', '$tipo', '$categoria', '$estado', '$anodefabrico', $preco)";
    $conexao->query($query);
    if(mysqli_affected_rows($conexao) > 0 )
    {
        $query = "INSERT INTO produto (id_produto, nome, tipo) VALUES(NULL, '$modelo', 'Automóvel')";
        $conexao->query($query);
        if (mysqli_affected_rows($conexao)>0) {
            header("Location: automoveis.php");

        }else {
            echo "Erro ao inserir o produto";
        }
    }
    else{

        ?>
    <script>alert("Cadastro não salvo")</script>
<?php
    header("Location: automoveis.php");
    $conexao->close();
}
?>

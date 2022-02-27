<?php
    $nome = $_POST['nome'];
    $preco =$_POST['preco'];
    $estado = $_POST['estado'];
    $tipo = "tipo";


    require_once("../auth/conectar.php");
    $query = "INSERT INTO acessorio (id_acessorio, nome, preco, estado) VALUES(NULL, '$nome', $preco, '$estado')";
    $conexao->query($query);
    if(mysqli_affected_rows($conexao) > 0 )
    {
        $query = "INSERT INTO produto (id_produto, nome, tipo) VALUES(NULL, '$nome', '$tipo')";
        $conexao->query($query);
        if (mysqli_affected_rows($conexao)>0) {
            header("Location: acessorio.php");

        }else {
            echo "Erro ao inserir o produto";
        }
    }
    else{

    header("Location: acessorio.php");
    $conexao->close();
}
?>

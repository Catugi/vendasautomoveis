<?php
    require_once("../auth/conectar.php");
    $id = $_POST['idfunc'];
    $query = "DELETE FROM vendas WHERE id_venda=$id";
    $result = $conexao->query($query);
    if(mysqli_affected_rows($conexao) > 0 )
    {
        header("Location: vendas.php");
    }
    else{

    header("Location: vendas.php");
    $conexao->close();
}
?>
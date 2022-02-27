<?php
    require_once("../auth/conectar.php");
    $id = $_POST['idfunc'];
    $query = "DELETE FROM cliente WHERE id_cliente=$id";
    $result = $conexao->query($query);
    if(mysqli_affected_rows($conexao) > 0 )
    {
        header("Location: cliente.php");
    }
    else{

    header("Location: cliente.php");
    $conexao->close();
}
?>
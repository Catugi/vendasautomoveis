<?php
    require_once("../auth/conectar.php");
    $id = $_POST['idfunc'];
    $query = "DELETE FROM acessoerio WHERE id_acessorio=$id";
    $result = $conexao->query($query);
    if(mysqli_affected_rows($conexao) > 0 )
    {
        header("Location: acessorio.php");
    }
    else{

    header("Location: acessorio.php");
    $conexao->close();
}
?>
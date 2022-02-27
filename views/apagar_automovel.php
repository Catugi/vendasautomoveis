<?php
    require_once("../auth/conectar.php");
    $id = $_POST['idfunc'];
    $query = "DELETE FROM automovel WHERE id_automvel=$id";
    $result = $conexao->query($query);
    if(mysqli_affected_rows($conexao) > 0 )
    {
        header("Location: estudantes.php");
    }
    else{

    header("Location: estudantes.php");
    $conexao->close();
}
?>
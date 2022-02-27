<?php
    $cliente = $_POST['cliente'];
    $produto =$_POST['produto'];
    $modelo_pagamento = $_POST['modo_pagamento'];
    $quantidade = $_POST['quantidade'];


    require_once("../auth/conectar.php");
    $query = "INSERT INTO vendas (id_venda, cliente, produto, modelo_pagamento, quantidade) VALUES(NULL, '$cliente', '$produto', '$modelo_pagamento', $quantidade)";
    $conexao->query($query);
    if(mysqli_affected_rows($conexao) > 0 )
    {

        header("Location: vendas.php");

    }
    else{

    header("Location: vendas.php");
    $conexao->close();
}
?>

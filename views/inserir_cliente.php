<?php
    require_once("../auth/conectar.php");

    $grupo = NULL;
    $ano_assistente = 0;
    $disc_assistente = NULL;

    $nome_projeto = NULL;
    $ano_repetido = NULL;
    $disciplina_repetida = NULL;
    $valo__a_pagar = 50.0;
    $recebeapoio = "Não";
/**==================== */
    $e_especial = $_POST['especial'];
    $e_assistente = $_POST['assistente'];
    $recebe_apoio = $_POST['recebeapoip'];
    $esta_em_projeto = $_POST['estaemprojecto'];
    /*======================================= */
    if ($e_especial == 'on') {
        $grupo = 'Especial';
        $ano_repetido = $_POST['anorepetido'];
        $disciplina_repetida = $_POST['disciplinarepetida'];
        $valo__a_pagar = $valo__a_pagar*2;

    }elseif ($e_assistente=='on') {
        $valo__a_pagar = $valo__a_pagar*3;
        $grupo = 'Assistente';
        $ano_assistente = $_POST['anosassistente'];
        $disc_assistente = $_POST['disciplinasensinadas'];

    }else {
        $grupo = 'Comum';
        $valo__a_pagar = $valo__a_pagar*2;
    }
    if ($esta_em_projeto == 'on') {
        $nome_projeto = $_POST['nomedoprojecto'];
    }

    if ($recebe_apoio == 'on') {
        $recebeapoio = 'Sim';
    }
    $nome_estudante = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $b_identidade = $_POST['bilhete'];
    $ano_curso = $_POST['anocurso'];
    $curso = $_POST['curso'];
    $query = "INSERT INTO estudante (id_estudante, nome_estudante, sobrenome, b_identidade, ano_curso, curso, grupo, valo__a_pagar, nome_projeto, ano_assistente, disc_assistente, ano_repetido, disciplina_repetida, recebeapoio) VALUES(NULL, '$nome_estudante', '$sobrenome', '$b_identidade', '$ano_curso', '$curso', '$grupo', $valo__a_pagar, '$nome_projeto', '$ano_assistente', '$disc_assistente', '$ano_repetido', '$disciplina_repetida', '$recebeapoio')";

    $conexao->query($query);
    if(mysqli_affected_rows($conexao) > 0 )
    {
        header("Location: Automóveis.php");
    }
    else{
?>
    <script>alert("Cadastro não salvo")</script>
<?php
    header("Location: Automóveis.php");
    $conexao->close();
}
?>
<?php

include "conexao_banco.php";


$idioma_da_aplicacao = $_POST['idioma_da_aplicacao'];
$data_da_aplicacao = $_POST['data_da_aplicacao'];
$hora_da_aplicacao = $_POST['hora_da_aplicacao'];
$duracao_da_aplicacao = $_POST['duracao_da_aplicacao'];
$numero_de_vagas = $_POST['numero_de_vagas'];
$turma_da_aplicacao = $_POST['turma_da_aplicacao'];
$valor_da_aplicacao = $_POST['valor_da_aplicacao'];
$data_inicio_inscricao = $_POST['data_inicio_inscricao'];
$data_fim_inscricao = $_POST['data_fim_inscricao'];
$local_da_aplicacao = $_POST['local_da_aplicacao'];



$script_inserir_aplicacao_sql =
    "INSERT INTO `tabela_aplicacaos_cadastradas`(`idioma_da_aplicacao`, `data_da_aplicacao`,
       `hora_da_aplicacao`, `duracao_da_aplicacao`, `numero_de_vagas`, `turma_da_aplicacao`,
       `valor_da_aplicacao`, `data_inicio_inscricao`, `data_fim_inscricao`, `local_da_aplicacao`)
     VALUES ('$idioma_da_aplicacao','$data_da_aplicacao','$hora_da_aplicacao','$duracao_da_aplicacao',
             $numero_de_vagas,'$turma_da_aplicacao',$valor_da_aplicacao,'$data_inicio_inscricao','$data_fim_inscricao',
             '$local_da_aplicacao')";

$inserir_sql = mysqli_query($conexao, $script_inserir_aplicacao_sql);

echo $script_inserir_aplicacao_sql;
?>

<div>
    <h2>Prova Adicionada</h2>
    <a href="index.php">Voltar</a>
</div>
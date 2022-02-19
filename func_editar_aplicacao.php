<?php

include "conexao_banco.php";

$id_da_aplicacao = $_POST['id_da_aplicacao'];
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


$script_sql_aplicacao = "UPDATE `tabela_aplicacaos_cadastradas` SET `idioma_da_aplicacao`='$idioma_da_aplicacao',
                                           `data_da_aplicacao`='$data_da_aplicacao',`hora_da_aplicacao`='$hora_da_aplicacao',
                                           `duracao_da_aplicacao`='$duracao_da_aplicacao',`numero_de_vagas`=$numero_de_vagas,
                                           `turma_da_aplicacao`='$turma_da_aplicacao',`valor_da_aplicacao`=$valor_da_aplicacao,
                                           `data_inicio_inscricao`='$data_inicio_inscricao',
                                           `data_fim_inscricao`='$data_fim_inscricao',`local_da_aplicacao`='$local_da_aplicacao' 
                        WHERE `id_da_aplicacao`=$id_da_aplicacao";
echo $script_sql_aplicacao;
$editar_applicacao = mysqli_query($conexao, $script_sql_aplicacao);
?>
<<!doctype html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edicão</title>
</head>
<body>

<h2>Editada com sucesso</h2>
<br>
<a href="tela_lista_aplicacoes.php">Voltar para lista de aplicações</a>
</body>
</html>

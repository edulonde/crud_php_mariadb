<!doctype html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylesheets/listagem_aplicacaos_style.css">
    <title>SGP-lista de aplicacaos cadastradas</title>
</head>

<body>
<header>
    <h1>Sistema Gerenciamento de aplicacaos </h1>
</header>

<div>
    <h2>Lista de aplicacaos Cadastradas</h2>
    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Idioma</th>
            <th>Data</th>
            <th>Hora</th>
            <th>Duração</th>
            <th>Vagas</th>
            <th>Turma</th>
            <th>Valor</th>
            <th>Início</th>
            <th>Fim</th>
            <th>Local</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>


        <?php
        include "conexao_banco.php";
        $sql = "SELECT * FROM `tabela_aplicacaos_cadastradas` ";
        $busca = mysqli_query($conexao, $sql);

        while ($array = mysqli_fetch_array($busca)){
        $id_da_aplicacao = $array['id_da_aplicacao'];
        $idioma_da_aplicacao = $array['idioma_da_aplicacao'];
        $data_da_aplicacao = $array['data_da_aplicacao'];
        $hora_da_aplicacao = $array['hora_da_aplicacao'];
        $duracao_da_aplicacao = $array['duracao_da_aplicacao'];
        $numero_de_vagas = $array['numero_de_vagas'];
        $turma_da_aplicacao = $array['turma_da_aplicacao'];
        $valor_da_aplicacao = $array['valor_da_aplicacao'];
        $data_inicio_inscricao = $array['data_inicio_inscricao'];
        $data_fim_inscricao = $array['data_fim_inscricao'];
        $local_da_aplicacao = $array['local_da_aplicacao'];

        //funções para trasnformar data
        $f_data_da_aplicacao = date("d-m-Y", strtotime($data_da_aplicacao));
        $f_data_inicio_inscricao = date("d-m-Y", strtotime($data_inicio_inscricao));
        $f_data_fim_inscricao = date("d-m-Y", strtotime($data_fim_inscricao));

        ?>
        <tr>
            <td><?php echo $id_da_aplicacao ?></td>
            <td><?php echo $idioma_da_aplicacao ?></td>
            <td><?php echo $f_data_da_aplicacao ?></td>
            <td><?php echo $hora_da_aplicacao ?></td>
            <td><?php echo $duracao_da_aplicacao ?></td>
            <td><?php echo $numero_de_vagas ?></td>
            <td><?php echo $turma_da_aplicacao ?></td>
            <td><?php echo $valor_da_aplicacao ?></td>
            <td><?php echo $f_data_inicio_inscricao ?></td>
            <td><?php echo $f_data_fim_inscricao ?></td>
            <td><?php echo $local_da_aplicacao ?></td>
            <td class="editar"><a href="tela_edicao_aplicacao.php?id_da_aplicacao=<?php echo $id_da_aplicacao ?>">Editar</a></td>
            <td class="excluir"><a href="func_excluir_prova.php?id_da_aplicacao=<?php echo $id_da_aplicacao ?>">Excluir</a></td>
            <?php } ?>
        </tr>
        </tbody>
    </table>

</div>

<div>
    <h2>____</h2>
    <a href="index.php">Voltar</a>
</div>

</body>
</html>

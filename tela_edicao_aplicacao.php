<?php
include "conexao_banco.php";
$id_da_aplicacao = $_GET['id_da_aplicacao'];
?>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylesheets/index_style.css">
    <title>SGP</title>
</head>
<body>
<header>
    <h1>Sistema Gerenciamento de Aplicações </h1>
</header>
</body>
<h2>Tela de Edição de Aplicaçoess</h2>
<div class="cadastro">
    <form method="post" action="func_editar_aplicacao.php?id_da_aplicacao"> <!-- observar o método POST -->
        <?php
        $sql = "SELECT * FROM `tabela_aplicacaos_cadastradas` WHERE id_da_aplicacao = $id_da_aplicacao";
        $busca = mysqli_query($conexao, $sql);
        while ($array = mysqli_fetch_array($busca)) {
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
            ?>
            <p>
                <label for="id_da_aplicacao">Id:</label>
                <input type="text" name="id_da_aplicacao" value="<?php echo $id_da_aplicacao ?>">
            </p>
            <p>
                <label for="idioma_da_aplicacao">Idioma:</label>
                <input type="text" name="idioma_da_aplicacao" value="<?php echo $idioma_da_aplicacao ?>">
            </p>
            <p>
                <label for="data_da_aplicacao">Data:</label>
                <input type="date" id="data_da_aplicacao" name="data_da_aplicacao" value="<?php echo $data_da_aplicacao ?>">
            </p>
            <p>
                <label for="hora_da_aplicacao">Hora:</label>
                <input type="time" id="hora_da_aplicacao" name="hora_da_aplicacao" value="<?php echo $hora_da_aplicacao ?>">
            </p>
            <p>
                <label for="duracao_da_aplicacao">Duração</label>
                <input type="text" id="duracao_da_aplicacao" name="duracao_da_aplicacao" value="<?php echo $duracao_da_aplicacao ?>">
            </p>
            <p>
                <label for="numero_de_vagas">Vagas:</label>
                <input type="number" id="numero_de_vagas" name="numero_de_vagas" value="<?php echo $numero_de_vagas ?>">
            </p>
            <p>
                <label for="turma_da_aplicacao">Turma:</label>
                <input type="text" id="turma_da_aplicacao" name="turma_da_aplicacao"
                       value="<?php echo $turma_da_aplicacao ?>">
            </p>
            <p>
                <label for="valor_da_aplicacao"> Valor:</label>
                <input type="number" id="valor_da_aplicacao" name="valor_da_aplicacao" value="<?php echo $valor_da_aplicacao ?>">
            </p>
            <fieldset>
                <legend>Inscrições</legend>
                <p>
                    <label for="data_inicio_inscricao"> Início: </label>
                    <input type="date" id="data_inicio_inscricao" name="data_inicio_inscricao"
                           value="<?php echo $data_inicio_inscricao ?>">
                </p>
                <p>
                    <label for="data_fim_inscricao"> Fim: </label>
                    <input type="date" id="data_fim_inscricao" name="data_fim_inscricao"
                           value="<?php echo $data_fim_inscricao ?>">
                </p>
            </fieldset>
            <p>
                <label for="local_da_aplicacao">Local:</label>
                <input type="text" id="local_da_aplicacao" name="local_da_aplicacao" value="<?php echo $local_da_aplicacao?>">
            </p>

            <button type="submit">Editar Aplicação</button>
        <?php } ?>
    </form>
</div>

<div>
    <h2>___</h2>
    <a href="index.php">Voltar</a>
</div>
</html>


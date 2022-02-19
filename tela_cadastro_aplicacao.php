<html lang="pt-Br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylesheets/index_style.css">
    <title>SGP</title>
</head>

<body>
<header>
    <h1>Sistema Gerenciamento de Aplicação de Provas </h1>
</header>

</body>
<h2>Tela de Cadastro de Aplicações</h2>
<div class="cadastro">
    <form method="post" action="func_inserir_aplicacao.php"> <!-- observar o método POST -->
        <p>
            <label for="idioma_da_aplicacao">Idioma:</label>
            <select type="text" name="idioma_da_aplicacao">
                <?php
                include "conexao_banco.php";
                $sql = "SELECT * FROM tabela_linguagem";
                $buscar = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($buscar)){
                    $id_linguagem = $array['id_linguagem'];
                    $idioma_da_aplicacao = $array['idioma_da_aplicacao'];
                    $nivel_da_aplicacao = $array['nivel_da_aplicacao'];
                    $prof_da_aplicacao = $array['prof_da_aplicacao'];
                ?>

                <option value="<?php echo $idioma_da_aplicacao ?>"><?php echo $idioma_da_aplicacao ?></option>
                <?php
                }
                ?>
            </select>
            <span class="hint"> Qual será o idioma da aplicacao?</span>
        </p>
        <p>
            <label for="data_da_aplicacao">Data:</label>
            <input type="date" id="data_da_aplicacao" name="data_da_aplicacao">
            <span class="hint"> Qual será o dia da aplicacao?</span>
        </p>
        <p>
            <label for="hora_da_aplicacao">Hora:</label>
            <input type="time" id="hora_da_aplicacao" name="hora_da_aplicacao">
            <span class="hint"> Qual será a hora da aplicacao?</span>
        </p>
        <p>
            <label for="duracao_da_aplicacao">Duração</label>
            <select id="duracao_da_aplicacao" name="duracao_da_aplicacao">
                <option value="1 hora">1 hora</option>
                <option value="2 hora">2 horas</option>
                <option value="3 hora">3 horas</option>
                <option value="4 hora">4 horas</option>
            </select>

            <span class="hint"> Qual será a duração da aplicacao?</span>
        </p>
        <p>
            <label for="numero_de_vagas">Vagas:</label>
            <input type="number" id="numero_de_vagas" name="numero_de_vagas">
            <span class="hint"> Qual quantidade de vagas?</span>
        </p>
        <p>
            <label for="turma_da_aplicacao">Turma:</label>
            <input type="text" id="turma_da_aplicacao" name="turma_da_aplicacao">
            <span class="hint"> Qual será a turma de aplicação? </span>
        </p>
        <p>
            <label for="valor_da_aplicacao"> Valor:</label>
            <input type="number" id="valor_da_aplicacao" name="valor_da_aplicacao">
            <span class="hint">Qual será o valor da aplicacao?</span>
        </p>
        <fieldset>
            <legend>Inscrições</legend>
            <p>
                <label for="data_inicio_inscricao"> Início: </label>
                <input type="date" id="data_inicio_inscricao" name="data_inicio_inscricao">
                <span class="hint">Qual será a data/hora de início das inscrições?</span>
            </p>
            <p>
                <label for="data_fim_inscricao"> Fim: </label>
                <input type="date" id="data_fim_inscricao" name="data_fim_inscricao">
                <span class="hint">Qual será a data/hora de término das inscrições?</span>
            </p>

        </fieldset>
        <p>
            <label for="local_da_aplicacao">Local:</label>
            <input type="text" id="local_da_aplicacao" name="local_da_aplicacao">
            <span class="hint">Qual local de aplicacao?</span>
        </p>

        <button type="submit">Inserir aplicacao</button>
    </form>

</div>
<div>
    <h2>___</h2>
    <a href="index.php">Voltar</a>
</div>
</html>

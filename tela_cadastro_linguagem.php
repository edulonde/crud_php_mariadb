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
<h2>Tela de Cadastro de Linguagens</h2>
<div class="cadastro">
    <form method="post" action="func_inserir_linguagem.php"> <!-- observar o método POST -->
        <p>
            <label for="idioma_da_aplicacao">Idioma:</label>
            <input type="text" name="idioma_da_aplicacao" autofocus> <!--autofocus-->
            <span class="hint"> Qual será o idioma da aplicacao?</span>
        </p>
        <p>
            <label for="nivel_da_aplicacao">Nível:</label>
            <select  id="nivel_da_aplicacao" name="nivel_da_aplicacao">
                <option value="Iniciante">Iniciante</option>
                <option value="intermediário">intermediário</option>
                <option value="Avançado">Avançado</option>
            </select>
            <span class="hint"> Qual será o nível da aplicacao?</span>
        </p>

        <p>
            <label for="prof_da_aplicacao">Professor:</label>
            <input type="text" id="prof_da_aplicacao" name="prof_da_aplicacao">
            <span class="hint">Qual professor responsável?</span>
        </p>

        <button type="submit">Inserir Linguagem</button>
    </form>

</div>
<div>
    <h2>___</h2>
    <a href="index.php">Voltar</a>
</div>
</html>

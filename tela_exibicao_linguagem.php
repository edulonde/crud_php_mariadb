<!doctype html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylesheets/listagem_aplicacaos_style.css">
    <title>SGP-lista de Linguagens Cadastradas</title>
</head>

<body>
<header>
    <h1>Sistema Gerenciamento de Aplicaçoes </h1>
</header>

<div>
    <h2>Lista de Linguagens Cadastradas</h2>
    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Idioma</th>
            <th>Nível</th>
            <th>Professor</th>
        </tr>
        </thead>
        <tbody>

        <?php
        include "conexao_banco.php";
        $sql = "SELECT * FROM `tabela_linguagem` ";
        $busca = mysqli_query($conexao, $sql);

        while ($array = mysqli_fetch_array($busca)){
        $id_linguagem = $array['id_linguagem'];
        $idioma_da_aplicacao = $array['idioma_da_aplicacao'];
        $nivel_da_aplicacao = $array['nivel_da_aplicacao'];
        $prof_da_aplicacao = $array['prof_da_aplicacao'];

        ?>
        <tr>
            <td><?php echo $id_linguagem ?></td>
            <td><?php echo $idioma_da_aplicacao ?></td>
            <td><?php echo $nivel_da_aplicacao ?></td>
            <td><?php echo $prof_da_aplicacao ?></td>

            <td class="excluir"><a
                        href="func_excluir_linguagem.php?id_linguagem=<?php echo $id_linguagem ?>">Excluir</a></td>
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

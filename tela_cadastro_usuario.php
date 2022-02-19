<html lang="pt-Br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylesheets/index_style.css">
    <link rel="stylesheet" href="stylesheets/listagem_provas_style.css">
    <title>SGP</title>
</head>

<body>
<header>
    <h1>Sistema Gerenciamento de Provas </h1>
</header>

<h2>Tela Cadastro Usuário</h2>

<div>
    <form action="func_inserir_usuario.php" method="post">
        <div>
            <label for="">Nome:</label>
            <input type="text" name="nome_usuario" placeholder="nome completo">
        </div> <!--nome, email e senha-->
        <div>
            <label for="">Senha:</label>
            <input type="password" name="senha_usuario" placeholder="*****">
        </div>
        <div>
            <label for="">Senha:</label>
            <input type="password" name="senha_usuario_conf" placeholder="*****">
        </div>
        <button type="submit">Cadastrar</button>
    </form>

</div>


<div>
    <h2>___</h2>
    <a href="index.php">Voltar</a>
</div>

</body>

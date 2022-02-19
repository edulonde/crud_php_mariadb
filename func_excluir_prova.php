<?php
include "conexao_banco.php";
$id_da_aplicacao = $_GET['id_da_aplicacao'];


$script_deletar_aplicacao = "DELETE FROM `tabela_aplicacaos_cadastradas` 
                                WHERE id_da_aplicacao = $id_da_aplicacao";

$script_deletar_aplicacao = mysqli_query($conexao,$script_deletar_aplicacao);
?>

<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exclusão</title>
</head>
<body>
<h2>Excluído com sucesso</h2>
<br>

<a href="tela_lista_aplicacoes.php">Voltar</a>
</body>
</html>


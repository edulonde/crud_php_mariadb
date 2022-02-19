<?php


include "conexao_banco.php";


$idioma_da_aplicacao = $_POST['idioma_da_aplicacao'];
$nivel_da_aplicacao = $_POST['nivel_da_aplicacao'];
$prof_da_aplicacao = $_POST['prof_da_aplicacao'];


$sql = "INSERT INTO `tabela_linguagem`(`idioma_da_aplicacao`, `nivel_da_aplicacao`, `prof_da_aplicacao`) 
VALUES ('$idioma_da_aplicacao','$nivel_da_aplicacao','$prof_da_aplicacao')";

$inserir_sql = mysqli_query($conexao, $sql);
?>
<div>
    <h2>Linguagem adicionada!</h2>
    <a href="index.php">Voltar</a>
</div>

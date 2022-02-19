<?php
include "conexao_banco.php";

$sql = "SELECT * FROM `tabela_aplicacaos_cadastradas` WHERE id_da_aplicacao = 3";

$busca = mysqli_query($conexao, $sql);

echo $sql;

while ($array = mysqli_fetch_array($busca)){
    $data_da_aplicacao = $array['data_da_aplicacao'];
    $hora_da_aplicacao = $array['hora_da_aplicacao'];
    $data_inicio_inscricao = $array['data_inicio_inscricao'];
    $data_fim_inscricao = $array['data_fim_inscricao'];
}

?>

<!doctype html>
<html lang="pt-Br">
<body>
<ul>
    <li> <?php echo $data_da_aplicacao;?></li>
    <li> <?php echo $hora_da_aplicacao;?></li>
    <li> <?php echo $data_inicio_inscricao;?></li>
    <li> <?php echo $data_fim_inscricao;?></li>
</body>

<?php
$f_data_da_aplicacao = date("d-m-Y", strtotime($data_da_aplicacao));
$f_data_inicio_inscricao = date("d-m-Y", strtotime($data_inicio_inscricao));
$f_data_fim_inscricao = date("d-m-Y", strtotime($data_fim_inscricao));
echo "Data Formatada da Aplicação: ".$f_data_da_aplicacao."_____".$f_data_inicio_inscricao."____".$f_data_fim_inscricao;

?>

</ul>
</html>
<?php

$nome = $_POST['nome'];
$tel = $_POST['telefone'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$numero = $_POST['numero'];
$comp = $_POST['comp'];

$refeicao = $_POST['calculo'];

if ($refeicao == 1) {
    $nomeRefeicao = "Macarrão ao molho branco";
    $preco = 25;
} elseif ($refeicao == 2) {
    $nomeRefeicao = "Macarrão ao molho bolonhesa";
    $preco = 25;
} elseif ($refeicao == 3) {
    $nomeRefeicao = "Macarrão ao molho pesto";
    $preco = 25;
} elseif ($refeicao == 4) {
    $nomeRefeicao = "Nhoque";
    $preco = 30;
} elseif ($refeicao == 5) {
    $nomeRefeicao = "Lasanha";
    $preco = 35;
}

$taxaEntrega = 5;

$total = $preco + $taxaEntrega;


header("Location: view_saida.php?nome=$nome&tel=$tel&rua=$rua&bairro=$bairro&numero=$numero&comp=$comp&refeicao=$nomeRefeicao&preco=$preco&taxa=$taxaEntrega&total=$total");
?>

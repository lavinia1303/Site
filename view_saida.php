<?php

$nome = $_GET['nome'];
$telefone = $_GET['tel'];
$rua = $_GET['rua'];
$bairro = $_GET['bairro'];
$numero = $_GET['numero'];
$comp = $_GET['comp'];

$nomeRefeicao = $_GET['refeicao'];

$preco = $_GET['preco'];
$taxaEntrega = $_GET['taxa'];
$total = $_GET['total'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery</title>
</head>
<body style="background-color: #f74343; 
             display: flex; 
             flex-direction: column; 
             align-items: center; 
             justify-content: center; 
             min-height: 100vh; 
             margin: 0; 
             padding: 20px; 
             box-sizing: border-box;">
    <header>
        <h1 style="background-color: #ffda5fff; font-family: Franklin Gothic; color: #f74343; text-align: center">Parabéns! Seu pedido foi realizado.</h1>
    </header>

    <h3 style="font-family: Franklin Gothic; color: #ffda5fff; text-align: center">A cozinha já está preparando seu pedido</h3>
    <br><br>

    <form action="logicaController.php" method="post"
          style="background-color: #ffda5fff;
                 padding: 30px;
                 border-radius: 12px;
                 max-width: 400px;
                 width: 100%;
                 box-sizing: border-box;">

    <h3 style="font-family: Franklin Gothic;">Confira suas informações</h3>
    <div style="background-color: #fff4f4ff; padding: 10px 15px; border-radius: 8px; margin-bottom: 10px; font-family: Franklin Gothic;">
        <p style="margin: 0;"><b>Nome: </b><?php echo $nome; ?></p>
    </div>

    <div style="background-color: #fff4f4ff; padding: 10px 15px; border-radius: 8px; margin-bottom: 10px; font-family: Franklin Gothic;">
        <p style="margin: 0;"><b>Telefone: </b><?php echo $telefone; ?></p>
    </div>

    <div style="background-color: #fff4f4ff; padding: 10px 15px; border-radius: 8px; margin-bottom: 10px; font-family: Franklin Gothic;">
        <p style="margin: 0;"><b>Endereço: </b><?php echo $rua; ?>, <?php echo $numero; ?> - <?php echo $bairro; ?></p>
    </div>

    <div style="background-color: #fff4f4ff; padding: 10px 15px; border-radius: 8px; margin-bottom: 10px; font-family: Franklin Gothic;">
        <p style="margin: 0;"><b>Complemento: </b><?php echo $comp; ?></p>
    </div>

    <div style="background-color: #fff4f4ff; padding: 10px 15px; border-radius: 8px; margin-bottom: 15px; font-family: Franklin Gothic;">
        <p style="margin: 0;"><b>Refeição: </b><?php echo $nomeRefeicao; ?></p>
    </div>

    <h3 style="font-family: Franklin Gothic;"><b>Pagamento</b></h3>
    <div style="background-color: #fff4f4ff; padding: 15px; border-radius: 8px; margin-bottom: 15px; font-family: Franklin Gothic;">
        <p style="margin: 0 0 8px 0;"><b>Preço da refeição: </b>R$ <?php echo $preco; ?>,00</p>
        <p style="margin: 0 0 8px 0;"><b>Taxa de entrega:</b> R$ <?php echo $taxaEntrega; ?>,00</p>
        <p style="margin: 0; font-size: 1.1em; color: #f74343;"><b>Total do pedido: </b>R$ <?php echo $total; ?>,00</p>
    </div>

    <h3 style="font-family: Franklin Gothic;">Fique atento ao tempo de entrega!</h3>
    <div style="background-color: #f74343; color: #ffffff; padding: 12px; border-radius: 8px; text-align: center; font-family: Franklin Gothic; font-weight: bold;">
        <p style="margin: 0;">45 minutos</p>
    </div>
</form>
</body>
<footer>
     <img src="https://png.pngtree.com/png-clipart/20250524/original/pngtree-delicious-italian-spaghetti-pasta-dish-garnished-with-fresh-basil-and-cherry-png-image_21068304.png" style="width: 100px; height: 100px;" alt="Macarrao">
     <img src="https://png.pngtree.com/png-vector/20240914/ourmid/pngtree-a-plate-of-lasagna-png-image_12857286.png" style="width: 100px; height: 100px;" alt="">
     <img src="https://png.pngtree.com/png-clipart/20250208/original/pngtree-pasta-photo-png-image_19403390.png" style="width: 100px; height: 100px;" alt="">
     <img src="https://static.vecteezy.com/system/resources/previews/054/604/243/non_2x/a-plate-of-gnocchi-with-tomato-sauce-and-basil-free-png.png" style="width: 100px; height: 100px;" alt="">
</footer>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zappi Sistemas de Delivery</title>
</head>
<body style="background-color: #f74343">
    <header style="background-color: #ffda5fff; color: #f74343; font-family: Franklin Gothic">
        <h1 style="text-align: center">Zappi</h1>
    </header>
   
    <main style="text-align: center; padding: 20px;">

        <form action="logicaController.php" method="post"
              style="display: inline-block;
                     text-align: left;
                     background-color: #ffda5fff;
                     padding: 30px;
                     border-radius: 12px;
                     max-width: 400px;
                     width: 100%;">
           
            <h2 style="font-family: Franklin Gothic; color: #f74343; margin-top: 0; text-align: center">Usuario</h2>
           
            <label for="nome" style="font-family: Franklin Gothic; font-weight: bold;">Nome Completo</label>
            <br>
            <input type="text" id="nome" name="nome" required placeholder='Digite seu nome completo...' style="width: 100%; padding: 8px; margin-top: 5px; box-sizing: border-box;">
            <br><br>
            <label for="tel" style="font-family: Franklin Gothic; font-weight: bold;">Telefone</label>
            <br>
            <input type="text" id="tel" name="tel" required placeholder='Digite seu telefone...' style="width: 100%; padding: 8px; margin-top: 5px; box-sizing: border-box;">
           

            <h2 style="font-family: Franklin Gothic; color: #f74343; text-align: center">Endereço</h2>

            <label for="rua" style="font-family: Franklin Gothic; font-weight: bold;">Rua</label>
            <br>
            <input type="text" id="rua" name="rua" required placeholder='Digite sua rua...' style="width: 100%; padding: 8px; margin-top: 5px; box-sizing: border-box;">
            <br><br>
            <label for="bairro" style="font-family: Franklin Gothic; font-weight: bold;">Bairro</label>
            <br>
            <input type="text" id="bairro" name="bairro" required placeholder='Digite seu bairro...' style="width: 100%; padding: 8px; margin-top: 5px; box-sizing: border-box;">
            <br><br>
            <label for="numero" style="font-family: Franklin Gothic; font-weight: bold;">Numero</label>
            <br>
            <input type="number" id="numero" name="numero" required placeholder='Digite o numero de sua casa...' style="width: 100%; padding: 8px; margin-top: 5px; box-sizing: border-box;">
            <br><br>
            <label for="comp" style="font-family: Franklin Gothic; font-weight: bold;">Complemento (opcional)</label>
            <br>
            <input type="text" id="comp" name="comp" placeholder='Digite um complemento...' style="width: 100%; padding: 8px; margin-top: 5px; box-sizing: border-box;">
            <br><br>

            <select style="width: 100%; padding: 8px; margin-top: 5px; box-sizing: border-box;" name="calculo" id="calculo">
                <option value="" selected disabled>Selecionar... </option>
                <option value="1">Macarrão ao molho branco</option>
                <option value="2">Macarrão ao molho bolanhesa</option>
                <option value="3">Macarrão ao molho pesto</option>
                <option value="4">Nhoque</option>
                <option value="5">Lasanha</option>
            </select>
            <br><br>
            <button type="submit" style="background-color: #f74343; color: white; border: none; padding: 12px 20px; font-family: Franklin Gothic; font-size: 16px; font-weight: bold; border-radius: 6px; cursor: pointer; width: 100%;">Enviar Pedido</button>
           
        </form>
    </main>
</body>
<footer>
    <div style="text-align: center">
        <img src="https://png.pngtree.com/png-clipart/20250524/original/pngtree-delicious-italian-spaghetti-pasta-dish-garnished-with-fresh-basil-and-cherry-png-image_21068304.png" style="width: 100px; height: 100px;" alt="Macarrao">
        <img src="https://png.pngtree.com/png-vector/20240914/ourmid/pngtree-a-plate-of-lasagna-png-image_12857286.png" style="width: 100px; height: 100px;" alt="">
        <img src="https://png.pngtree.com/png-clipart/20250208/original/pngtree-pasta-photo-png-image_19403390.png" style="width: 100px; height: 100px;" alt="">
        <img src="https://static.vecteezy.com/system/resources/previews/054/604/243/non_2x/a-plate-of-gnocchi-with-tomato-sauce-and-basil-free-png.png" style="width: 100px; height: 100px;" alt="">
     </div>
</footer>
</html>

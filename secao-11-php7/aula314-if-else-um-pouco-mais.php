<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>PHP7</title>
</head>

<body>

    <?php
        // Variáveis
        $usuarioPossuiCartaoLoja = true;
        $valorCompra = 600;

        $valorFrete;
        $recebeuDescontoFrete;


        // Lógica
        if ($usuarioPossuiCartaoLoja) {
            
            if($valorCompra >= 200 && $valorCompra < 400) {
                $valorFrete = 40;
                $recebeuDescontoFrete = true;
            }
            else if($valorCompra >= 400 && $valorCompra < 600) {
                $valorFrete = 20;
                $recebeuDescontoFrete = true;
            }
            else if($valorCompra >= 600) {
                $valorFrete = 0;
                $recebeuDescontoFrete = true;
            }
            else {
                $valorFrete = 50;
                $recebeuDescontoFrete = true;
            }
            
        }
        else if($valorCompra >= 200) {
            $valorFrete = 50;
            $recebeuDescontoFrete = true;
        }
        else {
            $valorFrete = 60;
            $recebeuDescontoFrete = false;
        }
    ?>

    <main>
        <h1>Detalhes do pedido</h1>

        <p>Possui cartão da loja?: <?= $usuarioPossuiCartaoLoja ? 'Sim' : 'Não'; ?></p>

        <div>Valor da compra: <?= $valorCompra ?></div>

        <div>Recebeu desconto no frete?: <?= $recebeuDescontoFrete ? 'Sim' : 'Não'; ?></div>

        <div>Valor do frete: <?= $valorFrete ?></div>
    </main>

</body>

</html>
<?php
function mensagem($texto){
    echo "mensagem:<h1>".$texto."</h1>";
}

function mensagemFormal($saudacao,$mensagem,$fulano){
    echo "<br>{$mensagem} , {$saudacao} {$fulano}";
}

function mensagemPadrao(){
    echo "<br>Boa Tarde, pessoal!";
    mensagemFormal('Sr.','Meu nome é','Batman');
}
//$valorDoDesconto = calculaDesconto15($valorProduto);

function calculaDesconto($preco,$desconto){
    $desconto =$preco - ($preco * $desconto);
    return $desconto;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    mensagem('Boa tarde');
    mensagem('Aula sobre PHP');
    mensagemFormal('Sr.','Boa tarde','Wayne');
    mensagemPadrao();
    $valorProduto = 100;
    $valorComDesconto = calculaDesconto($valorProduto,0.35);
    mensagem($valorComDesconto);
    ?>
</body>
</html>


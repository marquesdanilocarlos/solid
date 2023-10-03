<?php

use App\Cart;

require_once __DIR__ . "/vendor/autoload.php";

$carrinho1 = new Cart();
var_dump($carrinho1->getItems());
echo "<br/>";
echo "Valor total: {$carrinho1->getTotalValue()}";

/*$carrinho1->addItem('Bicicleta', 750.10);
$carrinho1->addItem('Geladeira', 1950.15);
$carrinho1->addItem('Tapete', 350.20);*/

echo "<br/>";
var_dump($carrinho1->getItems());
echo "<br/>";
echo "Valor total recalculado: {$carrinho1->getTotalValue()}";
echo "<br/>";
echo "Status: {$carrinho1->getStatus()}";
echo "<br/>";

$carrinho1->addItem('Geladeira', 1950.15);

if ($carrinho1->confirmOrder()) {
    echo "Pedido realizado com sucesso!";
} else {
    echo "O carrinho não possui itens!";
}
echo "<br/>";
echo "Status: {$carrinho1->getStatus()}";

<?php

use App\Cart;
use App\Order;
use App\Product;

require_once __DIR__ . "/vendor/autoload.php";

$tv = new Product("Televisão", 999.90);
$freezer = new Product("Geladeira", 1999.90);
$table = new Product("Mesa", 469.90);

$cart = new Cart();
$order = new Order($cart);

echo "<h3>Pedido Iniciado</h3>";
var_dump($order);

$order->getCart()->addProduct($tv);
$order->getCart()->addProduct($freezer);
$order->getCart()->addProduct($table);

echo "<h3>Pedido Com Itens</h3>";
var_dump($order);
echo "<h4>Itens do pedido</h4>";
foreach ($order->getCart()->getProducts() as $product){
    echo "{$product->getDescription()} - {$product->getValue()} <br/>";
}


echo "<h3>Carrinho válido</h3>";
echo $order->getCart()->validateCart();

echo "<h3>Status do pedido</h3>";
$status = $order->getStatus();
echo $status->value;

$order->confirm();

echo "<h3>Pedido Confirmado</h3>";
var_dump($order);
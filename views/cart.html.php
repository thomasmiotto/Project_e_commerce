<?php
include_once __DIR__ . '/header.html.php';

use App\Models\Product;

$products = Product::getProductsByIds($_SESSION['cart']);
?>

<section id="cart" class="box flex-grow">
    <h1>Mon Panier</h1>
    <div id="list-cart">
        <?php foreach($products as $product): ?>
            <?php include __DIR__ . "/product_in_cart.html.php"; ?>
        <?php endforeach; ?>
        <button class="redButton"> Commander</button>

    </div>
</section>
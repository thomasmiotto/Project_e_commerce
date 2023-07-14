<?php
include_once __DIR__ . '/header.html.php';
?>
<section id="cart" class="box flex-grow">
    <h1>Mon Panier</h1>
    <div id="list-cart">
        <?php include __DIR__ . "/product_in_cart.html.php"; ?>
        <?php include __DIR__ . "/product_in_cart.html.php"; ?>
        <?php include __DIR__ . "/product_in_cart.html.php"; ?>
        <?php include __DIR__ . "/product_in_cart.html.php"; ?>
        <button class="redButton"> Commander</button>

    </div>
</section>
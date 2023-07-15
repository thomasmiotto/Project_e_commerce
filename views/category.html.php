<?php
include_once __DIR__ . '/header.html.php';

use Controllers\ProductController;

$idCat = intval(htmlspecialchars($_GET["category"]));
$products = ProductController::listProducts($idCat);
var_dump($products);

?>


<section id="cards_list">
    <h1>Nom de la catégorie</h1>
    <div class="container">
        <?php foreach ($products as $p) : ?>
            <a href="/details?<?= $p->id ?> ">
                <div class="card">
                    <img src="../Assets/uploaded/<?= $p->image ?>" alt="No image">
                    <h2><?= $p->name ?></h2>
                    <p><?= $p->price ?> €</p>
                </div>
            </a>
        <?php endforeach; ?>
        <div class="card">
            <img src="../Assets/casque.jpg" alt="item">
            <h2>NOM DE L'ARTICLE</h2>
            <p>€€€</p>
        </div>
        <div class="card">
            <img src="../Assets/casque.jpg" alt="item">
            <h2>NOM DE L'ARTICLE</h2>
            <p>€€€</p>
        </div>
        <div class="card">
            <img src="../Assets/casque.jpg" alt="item">
            <h2>NOM DE L'ARTICLE</h2>
            <p>€€€</p>
        </div>
        <div class="card">
            <img src="../Assets/casque.jpg" alt="item">
            <h2>NOM DE L'ARTICLE</h2>
            <p>€€€</p>
        </div>

    </div>

</section>
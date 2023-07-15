<?php
include_once __DIR__ . '/header.html.php';

use Controllers\ProductController;
use Models\Models;

$idCat = intval(htmlspecialchars($_GET["category"]));
$products = ProductController::listProducts($idCat);
$category = Models::findCategory($idCat);
?>


<section id="cards_list" class="flex-grow flex-col">
    <div class="my-16 mx-auto text-2xl w-full">
        <h1><?= $category->name ?></h1>
    </div>
    <div class="container">
        <?php foreach ($products as $p) : ?>
            <a href="/details?product=<?= $p->id ?> ">
                <div class="card">
                    <img src="../Assets/uploaded/<?= $p->image ?>" alt="No image">
                    <h2><?= $p->name ?></h2>
                    <p><?= $p->price ?> €</p>
                </div>
            </a>
        <?php endforeach; ?>
    </div>

</section>
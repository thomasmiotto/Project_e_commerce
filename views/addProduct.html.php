<?php

use App\Controllers\ProductController;

include_once __DIR__ . '/header.html.php';
?>
<section class="box my-8 flex-grow">
    <?php if ($_SESSION['role'] == 'admin') : ?>
        <form action="/addproductform" method="post" class="form" enctype="multipart/form-data">
            <label for="name">Name</label>
            <input type="text" name="name" required>

            <label for="price">Price</label>
            <input type="text" name="price" required>

            <label for="Description">Description</label>
            <input type="text" name="description" required>

            <label for="tva_id">TVA</label>
            <select name="tva_id" required>
                <option value="1">2.1%</option>
                <option value="2">5.5%</option>
                <option value="3">8.5%</option>
                <option value="4">10%</option>
                <option value="5">20%</option>
            </select>

            <label for="category">Category</label>
            <select name="category" required>
                <?php foreach (ProductController::listCategories() as $c) : ?>
                    <option value="<?= $c->id ?>"><?= $c->name ?></option>
                <?php endforeach; ?>
            </select>

            <label for="stock">Stock</label>
            <input type="number" name="stock" required>

            <label for="image">Image</label>
            <input type="file" name="productImage" accept="image/*">

            <input type="submit" value="Add product" class="bg-red-600 text-white">
        </form>
        <form action="/addcategoryform" method="post" class="form">

            <label for="category">Category</label>
            <input type="text" name="category" required>

            <input type="submit" value="Add category" class="bg-red-600 text-white">
        </form>
    <?php else : ?>
        <h1 class="my-12 font-xl "> Permission denied.</h1>
    <?php endif; ?>

</section>
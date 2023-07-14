<?php
include_once __DIR__ . '/header.html.php';
?>
<section class="box my-8">
    <form action="/addproductform" method="post" class="form">
        <label for="name">Name</label>
        <input type="text" name="name" required>

        <label for="price">Price</label>
        <input type="number" name="price" required>

        <label for="Description">Description</label>
        <input type="text" name="description" required>

        <label for="tva">TVA</label>
        <input type="number" name="tva" required>

        <label for="stock">Stock</label>
        <input type="number" name="stock" required>

        <label for="image">Image</label>
        <input type="text" name="image">

        <input type="submit" value="Add product" class="bg-red-600 text-white">
    </form>
</section>
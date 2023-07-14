<?php
include_once __DIR__ . '/header.html.php';
?>
<section class="box my-8 flex-grow">
    <form action="/addProduct" class="form">
        <input type="submit" value="Add Product" class="bg-red-600 text-white">
    </form>
    <form action="/deleteProduct" class="form">
        <input type="submit" value="Delete Product" class="bg-red-600 text-white">
    </form>
    <form action="/modifyProduct" class="form">
        <input type="submit" value="Modify Product" class="bg-red-600 text-white">
    </form>
</section>
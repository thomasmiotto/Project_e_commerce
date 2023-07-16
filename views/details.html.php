<?php
use App\Models\Product;

include_once __DIR__ . '/header.html.php';
$idProd = intval(htmlspecialchars($_GET["product"]));
$product = Product::getProduct($idProd);
?>

<div class="flex flex-col md:flex-row justify-evenly flex-grow">
    <div class="h-[600px] w-[400px] bg-cover bg-center md:m-20 m-10 rounded-lg shadow-2xl" style="background-image: url(/public/assets/uploaded/<?= $product->image ?>)">
    </div>
    <div class="flex flex-col w-full md:w-1/2 mt-16 p-4">
        <div class="flex flex-col w-full p-4">
            <h1 class="mt-12 text-bold text-xl text-center"><?= $product->name ?> </h1>
            <h3 class="mt-4 text-l text-center"><?= $product->price ?> </h3>

            <form class="form" action="/addcart" method="post">
                <input type="hidden" name="product_id" value="<?php echo $product->id; ?>">
                <input type="submit" value="Add to cart">
            </form>
        </div>
        <div class="flex flex-col w-full border-2 mt-8 shadow-xl rounded-lg mx-auto p-8 text-lg">
            <p class="m-8 text-xl text-center"><?= $product->description ?> </p>
        </div>
    </div>
</div>
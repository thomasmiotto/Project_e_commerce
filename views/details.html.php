<?php
include_once __DIR__ . '/header.html.php';
?>
<div class="flex flex-col md:flex-row justify-evenly detailsPageContainer flex-grow">
    <img src="https://picsum.photos/400/600" alt="Product image" class="md:m-20 m-10 rounded-lg shadow-2xl productImage">
    <div class="flex flex-col w-full md:w-1/2 mt-16 p-4 detailsPageRightContainer">
        <div class="flex flex-col w-full p-4 productTextContainer">
            <h1 class="mt-12 text-bold text-xl text-center ProductName">Name of the article</h1>
            <h3 class="mt-4 text-l text-center productPrice">Price</h3>
        </div>
        <div class="flex flex-col w-full border-2 mt-8 shadow-xl rounded-lg mx-auto p-8 text-lg productDescriptionContainer">
            <p class="m-8 text-xl text-center productDescription">Description</p>
        </div>
    </div>
</div>
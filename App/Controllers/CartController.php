<?php

namespace App\Controllers;

use App\Models\Product;

class CartController
{
    static function addProductToCart()
    {
        if (
            !empty($_POST['product_id'])
        ) {
            if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                array_push($_SESSION['cart'], $_POST['product_id']);
            } else {
                $_SESSION['cart'] = [$_POST['product_id']];
            }
        }

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}

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

    static function removeProductFromCart()
    {
        if (
            !empty($_POST['product_id'])
        ) {
            if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                $product_id = $_POST['product_id'];
                $new_cart = array_filter($_SESSION['cart'], function ($id) use ($product_id) {
                    return $id != $product_id;
                });
                $_SESSION['cart'] = $new_cart;
            } else {
                $_SESSION['cart'] = [];
            }
        }

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}

<?php

namespace Controllers;

class StaticController
{
    static function showHome()
    {
        include __DIR__ . '/../../views/home.html.php';
    }

    static function showContact()
    {
        include __DIR__ . '/../../views/contact.html.php';
    }
    static function showCart()
    {
        include __DIR__ . '/../../views/cart.html.php';
    }
    static function showLogin()
    {
        include __DIR__ . '/../../views/login.html.php';
    }
    static function showSignUp()
    {
        include __DIR__ . '/../../views/signin.html.php';
    }
    static function showAddProduct()
    {
        include __DIR__ . '/../../views/addProduct.html.php';
    }
    static function showProfile()
    {
        include __DIR__ . '/../../views/profile.html.php';
    }
    static function showAdmin()
    {
        include __DIR__ . '/../../views/admin.html.php';
    }
    static function showCategory()
    {
        include __DIR__ . '/../../views/category.html.php';
    }
}

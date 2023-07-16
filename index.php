<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/functions.php';

session_start();

use App\Controllers\AuthController;
use App\Controllers\StaticController;
use App\Controllers\ProductController;
use App\Controllers\CartController;

$route = '/';

if (isset($_SERVER['PATH_INFO'])) {
    $route = $_SERVER['PATH_INFO'];

} else if (isset($_SERVER['REDIRECT_URL'])) {
    $route = $_SERVER['REDIRECT_URL'];
}

try {
    switch ($route) {
        case '/':
            StaticController::showHome();
            break;

        case '/home':
            StaticController::showHome();
            break;

        case '/contact':
            StaticController::showContact();
            break;

        case '/cart':
            StaticController::showCart();
            break;

        case '/login':
            StaticController::showLogin();
            break;

        case '/profile':
            StaticController::showProfile();
            break;

        case '/signup':
            StaticController::showSignUp();
            break;

        case '/addproduct':
            StaticController::showAddProduct();
            break;

        case '/admin':
            StaticController::showAdmin();
            break;

        case '/loginform':
            AuthController::login();
            break;

        case '/signupform':
            AuthController::signUp();
            break;

        case '/logout':
            AuthController::logout();
            break;

        case '/addproductform':
            ProductController::addProduct();
            break;
        case '/addcategoryform':
            ProductController::addCategory();
            break;

        case '/category':
            StaticController::showCategory();
            break;

        case '/details':
            StaticController::showDetails();
            break;

        case '/modifyprofile':
            StaticController::showModifyProfile();
            break;

        case '/modifyprofileform':
            AuthController::modifyUser();
            break;

        case '/addcart':
            CartController::addProductToCart();
            break;

        case '/removecart':
            CartController::removeProductFromCart();
            break;

        default:
            //error
    }
} catch (Exception $e) {
    //Error function
}

include_once __DIR__ . '/views/footer.html.php';

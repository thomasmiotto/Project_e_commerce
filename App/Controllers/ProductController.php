<?php

namespace App\Controllers;

use App\Models\Product;
use App\Models\Category;

class ProductController
{
    static function addProduct()
    {
        if ($_SESSION['role'] == 'admin') {
            if (
                empty($_POST['name'])
                || empty($_POST['price'])
                || empty($_POST['description'])
                || empty($_POST['tva_id'])
                || empty($_POST['stock'])

                || !str_starts_with($_FILES['productImage']['type'], 'image/')
                || $_FILES['productImage']['error'] !== 0
                || $_FILES['productImage']['size'] > 5_000_000

            ) {
                redirect('/addproduct');
            }

            $image = uploader($_FILES['productImage'], __DIR__ . '/../../public/assets/uploaded');

            Product::createProduct(
                htmlspecialchars($_POST['name']),
                (float)$_POST['price'],
                htmlspecialchars($_POST['description']),
                (int)$_POST['tva_id'],
                (int)$_POST['stock'],
                $image
            );

            redirect('/profile');
        } else {
            redirect('/home');
        }
    }

    static function addCategory()
    {
        if ($_SESSION['role'] == 'admin') {
            if (empty($_POST['category'])) {
                redirect('/addproduct');
            }
            Category::createCategory(
                htmlspecialchars($_POST['category'])
            );

            redirect('/profile');
        } else {
            redirect('/home');
        }
    }

    static function listCategories()
    {
        return Category::getCategories();
    }

    static function listProducts(int $id)
    {
        return Product::getProductsByCategory($id);
    }
}

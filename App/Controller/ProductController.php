<?php

namespace Controllers;

use Models\Models;

class ProductController
{

    static function addProduct()
    {
        if ($_SESSION['role'] == 'admin') {
            if (
                empty($_POST['name'])
                || empty($_POST['price'])
                || empty($_POST['description'])
                || empty($_POST['tva'])
                || empty($_POST['stock'])

                || !str_starts_with($_FILES['productImage']['type'], 'image/')
                || $_FILES['productImage']['error'] !== 0
                || $_FILES['productImage']['size'] > 5_000_000

            ) {
                redirect('/addproduct');
            }

            $image = uploader($_FILES['productImage'], __DIR__ . '/../../Assets/uploaded');

            Models::createProduct(
                htmlspecialchars($_POST['name']),
                (float)$_POST['price'],
                htmlspecialchars($_POST['description']),
                (int)$_POST['tva'],
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
            Models::createCategory(
                htmlspecialchars($_POST['category'])
            );

            redirect('/profile');
        } else {
            redirect('/home');
        }
    }
    static function listCategories()
    {
        return Models::getCategories();
    }
    static function listProducts(int $id)
    {
        return Models::getProductsByCategory($id);
    }
}

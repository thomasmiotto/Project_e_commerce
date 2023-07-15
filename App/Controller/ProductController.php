<?php

namespace Controllers;

use Models\Models;

class ProductController
{
    static function addProduct()
    {
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
            var_dump($_FILES);
            die;
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

        redirect('/home');
    }
}

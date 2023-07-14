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
        ) {
            redirect('/addproduct');
        }

        Models::createProduct(
            htmlspecialchars($_POST['name']),
            (float)$_POST['price'],
            htmlspecialchars($_POST['description']),
            (int)$_POST['tva'],
            (int)$_POST['stock'],
            htmlspecialchars($_POST['image'])
        );

        redirect('/home');
    }
}

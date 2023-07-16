<?php

namespace App\Models;

use PDO;
use App\Models\BaseModel;

class Product
{
    static function createProduct(string $name, float $price, string $description, int $tva_id, int $stock, ?string $image)
    {
        $db = BaseModel::DBconnect();
        $db->prepare("INSERT INTO product VALUE(NULL,?, ?, ?, ?, ?, ?)")
            ->execute([$name, $price, $description, $tva_id, $stock, $image]);
    }

    static function getProduct(int $id)
    {
        $db = BaseModel::DBconnect();
        $call = $db->prepare("SELECT * FROM product WHERE id = ?");
        $call->execute([$id]);
        return $call->fetch(PDO::FETCH_OBJ);
    }

    static function getProductsByCategory(int $id)
    {
        $db = BaseModel::DBconnect();
        $call = $db->prepare("SELECT product.* FROM product INNER JOIN category_product 
        ON product.id = category_product.product_id INNER JOIN category 
        ON category.id = category_product.category_id WHERE category.id = ?");
        $call->execute([$id]);
        return $call->fetchall(PDO::FETCH_OBJ);
    }

    static function deleteProduct($id)
    {
        $db = BaseModel::DBconnect();
        $db->prepare("DELETE FROM product WHERE id = ?")->execute([$id]);
        redirect('/home');
    }

    static function updateProduct(string $name, float $price, string $description, int $tva_id, int $stock, ?string $image, $id)
    {
        $db = BaseModel::DBconnect();
        $db->prepare("UPDATE product SET `name` = ?, price=?, `description` =?, tva_id=?, stock= ?, `image`= ?   WHERE id = ?")
            ->execute([$name, $price, $description, $tva_id, $stock, $image, $id]);
        redirect('/home');
    }
}

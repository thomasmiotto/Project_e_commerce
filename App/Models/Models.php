<?php

namespace Models;

use PDO;
use App\Config;
use BaseModels\BaseModels;

class Models
{
    static function findUser(string $email)
    {
        $db = BaseModels::DBconnect();
        $call = $db->prepare("SELECT user.*, role.role FROM user INNER JOIN `role` ON role.id = user.role_id WHERE user.email = ?");
        $call->execute([$email]);
        return $call->fetch(PDO::FETCH_OBJ);
    }

    static function newUser(string $name, string $email, string $password, string $pseudo)
    {
        $db = BaseModels::DBconnect();
        $db->prepare("INSERT INTO user VALUE(NULL,1, ?, ?, ?, ?)")
            ->execute([$name, $email, $password, $pseudo]);
    }

    static function deleteUser($id)
    {
        $db = BaseModels::DBconnect();
        $db->prepare("DELETE FROM user WHERE id = ?")->execute([$id]);
        unset($_SESSION['user']);
        redirect('/home');
    }
    static function updateUser(string $name, string $email, string $password, string $pseudo, int $id)
    {
        $db = BaseModels::DBconnect();
        $db->prepare("UPDATE user SET `name` = ?, email=?, password =?, pseudo=?  WHERE id = ?")->execute([$name, $email, $password, $pseudo, $id]);
        redirect('/profile');
    }
    static function createProduct(string $name, float $price, string $description, int $tva_id, int $stock, ?string $image)
    {
        $db = BaseModels::DBconnect();
        $db->prepare("INSERT INTO product VALUE(NULL,?, ?, ?, ?, ?, ?)")
            ->execute([$name, $price, $description, $tva_id, $stock, $image]);
    }
    static function getProduct(int $id)
    {
        $db = BaseModels::DBconnect();
        $call = $db->prepare("SELECT * FROM product WHERE id = ?");
        $call->execute([$id]);
        return $call->fetch(PDO::FETCH_OBJ);
    }
    static function getProductsByCategory(int $id)
    {
        $db = BaseModels::DBconnect();
        $call = $db->prepare("SELECT product.* FROM product INNER JOIN category_product 
        ON product.id = category_product.product_id INNER JOIN category 
        ON category.id = category_product.category_id WHERE category.id = ?");
        $call->execute([$id]);
        return $call->fetchall(PDO::FETCH_OBJ);
    }
    static function deleteProduct($id)
    {
        $db = BaseModels::DBconnect();
        $db->prepare("DELETE FROM product WHERE id = ?")->execute([$id]);
        redirect('/home');
    }
    static function updateProduct(string $name, float $price, string $description, int $tva_id, int $stock, ?string $image, $id)
    {
        $db = BaseModels::DBconnect();
        $db->prepare("UPDATE product SET `name` = ?, price=?, `description` =?, tva_id=?, stock= ?, `image`= ?   WHERE id = ?")
            ->execute([$name, $price, $description, $tva_id, $stock, $image, $id]);
        redirect('/home');
    }
    static function createCategory(string $name)
    {
        $db = BaseModels::DBconnect();
        $db->prepare("INSERT INTO category VALUE(NULL,?)")
            ->execute([$name]);
    }
    static function getCategories()
    {
        $db = BaseModels::DBconnect();
        $call = $db->query("SELECT * from category");
        return $call->fetchAll(PDO::FETCH_OBJ);
    }
}

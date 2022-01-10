<?php

include("core/Database.php");

class ProductsService {

    //Lista todos los productos
    static function getProducts(){

        $pdo = Database::getPDO();
        
        $result = $pdo->query("SELECT * FROM products");

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    //Obtiene un producto por id
    static function getProduct($id){
        $pdo = Database::getPDO();
        
        $result = $pdo->query("SELECT * FROM products WHERE id_product = $id");

        return $result->fetch(PDO::FETCH_ASSOC);
    }

    //Crea un nuevo producto
    static function createProduct($product){
        $pdo = Database::getPDO();
        
        $query = $pdo->prepare("INSERT INTO products (name, description, image, purchase_price, sale_price, stock) VALUES (:name, :description, :image, :purchase_price, :sale_price, :stock)");
        
        $result = $query->execute($product);

        if($result){
            return [
                "id" => $pdo->lastInsertId()
            ];
        }

        return false;
    }

    //Edita un producto
    static function editProduct($id, $product){
        $pdo = Database::getPDO();
        
        $row = [];

        $sql = "UPDATE products SET ";

        if(isset($product["name"])){
            $sql .= "name = :name,";
            $row["name"] = $product["name"];
        }

        if(isset($product["description"])){
            $sql .= "description = :description,";
            $row["description"] = $product["description"];
        }

        if(isset($product["purchase_price"])){
            $sql .= "purchase_price = :purchase_price,";
            $row["purchase_price"] = $product["purchase_price"];
        }

        if(isset($product["sale_price"])){
            $sql .= "sale_price = :sale_price,";
            $row["sale_price"] = $product["sale_price"];
        }

        if(isset($product["stock"])){
            $sql .= "stock = :stock,";
            $row["stock"] = $product["stock"];
        }

        if(isset($product["image"])){
            $sql .= "image = :image,";
            $row["image"] = $product["image"];
        }

        $sql = rtrim($sql, ',');
        $sql .= " WHERE id_product = :id_product";

        $row["id_product"] = $id;
        $query = $pdo->prepare($sql);

        return $query->execute($row);
    }

    //Delete product
    static function deleteProduct($id){
        $pdo = Database::getPDO();
        
        $pdo->query("DELETE FROM products WHERE id_product = $id");
    }
}

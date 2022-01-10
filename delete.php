<?php

if(!$user){
    header("Location: ?page=products"); 
}

if(isset($_GET['id']) && (int)$_GET['id'] > 0){
    
    $id = (int)$_GET['id'];

    $product = ProductsService::getProduct($id);

    if (!$product) {
        header("Location: ?page=products"); 
    }

    ProductsService::deleteProduct($id);

    if (isset($product["image"]) && $product["image"] != null) {
        //Elimina el archivo
        if(file_exists($product["image"])){
            unlink($product["image"]);
        }
    }

    header("Location: ?page=products"); 
}
?>

   

    
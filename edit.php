<?php

if (!$user) {
    header("Location: ?page=products");
    die();
}

if (isset($_GET['id']) && (int)$_GET['id'] > 0) {

    $id = (int)$_GET['id'];

    $product = ProductsService::getProduct($id);

    if (!$product) {
        header("Location: ?page=products");
        die();
    }
} else {
    header("Location: ?page=products");
    die();
}

if (isset($_POST['edit'])) {

    $row = [
        "name" => $_POST['name'],
        "description" => $_POST['description'],
        "purchase_price" => $_POST['purchase_price'],
        "sale_price" => $_POST['sale_price'],
        "stock" => $_POST['stock']
    ];

    if (isset($_FILES["image"]) && $_FILES["image"]["size"] > 0) {
        $can_upload = false;
        //Elimina la imagen anterior
        if (isset($product["image"]) && $product["image"] != null) {
            //Ruta donde se va a guardar el archivo
            if (file_exists($product["image"])) {
                if (unlink($product["image"])) {
                    $can_upload = true;
                }
            } else {
                $can_upload = true;
            }
        }else {
            $can_upload = true;
        }

        if ($can_upload) {
            $filename = "uploads/" . time() . "." . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

            if (!move_uploaded_file($_FILES['image']['tmp_name'], $filename)) {
                //Si no se puede guardar el archivo queda null 
                $filename = null;
            }

            $row["image"] = $filename;
        }
    }

    $result = ProductsService::editProduct($product["id_product"], $row);

    header("Location: ?page=products");
    die();
}

?>
<h2 class="text-center">Editar producto</h2>
<div class="card mt-4">
    <div class="card-body">
        <form action="?page=edit&id=<?= $product['id_product']?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" required id="name" name="name" value="<?= $product['name'] ?>" class="form-control">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea name="description" id="description" class="form-control" cols="15" rows="5"><?= $product['description'] ?></textarea>
            </div>
            <div class="mb-3">
                <label for="purchase_price" class="form-label">Precio compra</label>
                <input type="number" required id="purchase_price" name="purchase_price" value="<?= $product['purchase_price'] ?>" class="form-control">
            </div>
            <div class="mb-3">
                <label for="sale_price" class="form-label">Precio venta</label>
                <input type="number" required id="sale_price" name="sale_price" value="<?= $product['sale_price'] ?>" class="form-control">
            </div>

            <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" required id="stock" name="stock" value="<?= $product['stock'] ?>" class="form-control">
            </div>
            <div class="mb-3">
                <img style="width: 20%; margin:auto;" src="<?= $product['image'] ?>">
            </div>
            <div class="mb-3">
                <input type="file" name="image" />
            </div>
            <button type="submit" class="btn btn-primary colorMorado" name="edit">Guardar</button>
            <a class="btn btn-primary colorMorado" href="?page=products" role="button">Cancelar</a>
        </form>
    </div>
</div>
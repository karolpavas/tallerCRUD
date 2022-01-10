<?php

if (!$user) {
    header("Location: ?page=products");
    die();
}

if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $purchase_price = $_POST["purchase_price"];
    $sale_price = $_POST["sale_price"];
    $stock = $_POST["stock"];

    $image = $_FILES["image"];

    //Ruta donde se va a guardar el archivo
    $filename = "uploads/" . time() . "_" . str_replace(' ', '_', $name) . "." . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

    if (!move_uploaded_file($_FILES['image']['tmp_name'], $filename)) {
        //Si no se peude guardar el archivo queda null 
        $filename = null;
    }

    $result = ProductsService::createProduct([
        "name" => $name,
        "description" => $description,
        "image" => $filename,
        "purchase_price" => $purchase_price,
        "sale_price" => $sale_price,
        "stock" => $stock
    ]);

    header("Location: ?page=products");
}

?>
<h2 class="text-center">Crear producto</h2>
<div class="card mt-4">
    <div class="card-body">
        <form action="?page=create" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" required id="name" name="name" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea name="description" id="description" class="form-control" cols="15" rows="5"></textarea>
            </div>
            <div class="mb-3">
                <label for="purchase_price" class="form-label">Precio compra</label>
                <input type="number" required id="purchase_price" name="purchase_price" class="form-control">
            </div>
            <div class="mb-3">
                <label for="sale_price" class="form-label">Precio venta</label>
                <input type="number" required id="sale_price" name="sale_price" class="form-control" >
            </div>

            <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" required id="stock" name="stock" class="form-control">
            </div>

            <div class="mb-3">
                <input type="file" name="image" />
            </div>
            <button type="submit" class="btn btn-primary colorMorado" name="create">Guardar</button>
            <a class="btn btn-primary colorMorado" href="?page=products" role="button">Cancelar</a>
        </form>
    </div>
</div>

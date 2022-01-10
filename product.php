<?php


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
?>

<div class="row align-items-center">
    <div class="col">
        <img style="width: 100%;" src="<?= $product["image"]; ?>" alt="">
    </div>
    <div class="col text-center">
        <h3> <?= $product["name"]; ?> </h3>
        <p> <?= $product["description"]; ?> </p>
        <span class="badge  text-white m-4 price colorMorado">$<?= $product["sale_price"]; ?></span>
        <?php if ($user) : ?>
            <div>
                <a class="btn btn-outline-primary" href="?page=edit&id=<?= $product["id_product"]; ?>" role="button">Editar</a>
                <a class="btn btn-outline-danger" onclick='deleteProduct(<?= json_encode($product); ?>)' role="button">Eliminar</a>
        </div>
         <?php endif ?>
    </div>
</div>
<script src="scripts.js"></script>

<?php

$products = ProductsService::getProducts();

?>

<div class="container">
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="1000">
                    <img src="./media/1.jpg" alt="..." class="d-block"> 
                </div>
                <div class="carousel-item" data-bs-interval="1000">
                    <img src="./media/2.jpg" alt="..." class="d-block"> 
                </div>
                <div class="carousel-item" data-bs-interval="1000">
                    <img src="./media/3.jpg" alt="..." class="d-block"> 
                </div>
                <div class="carousel-item" data-bs-interval="1000">
                    <img src="./media/4.jpg" alt="..." class="d-block"> 
                </div>
                <div class="carousel-item" data-bs-interval="1000">
                    <img src="./media/5.png" alt="..." class="d-block"> 
                </div>
            </div>
        </div>    
    </div>  
<h2 class="text-center">Productos</h2>
<div class="container pt-3">
    
    <div class="d-flex justify-content-end mb-4">
        <?php if ($user) : ?>
            <a class="btn btn-primary colorMorado" href="?page=create" role="button">Crear productos</a>
        <?php endif ?>
                
    </div>

    <?php if ($products) : ?>
        <div class="table-responsive">
        <table class="table table-bordered align-middle">
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Nombre</th>
                <th class="text-center">Precio venta</th>
                <th class="text-center" width="15%">Imagen</th>
                <?php if ($user) : ?>
                    <th class="text-center">Acciones</th>
                <?php endif ?>
            </tr>
            <?php foreach ($products as $key => $product) : ?>
                <tr>
                    <th class="text-center"><?= $product["id_product"]; ?></th>
                    <th class="text-center"><a href="?page=product&id=<?= $product["id_product"]; ?>"><?= $product["name"]; ?></a></th>
                    <th class="text-center">$<?= $product["sale_price"]; ?></th>
                    <th>
                        <img style="width: 100%;" src="<?= $product["image"]; ?>" alt="">
                    </th>
                    <?php if ($user) : ?>
                        <th>
                            <div class="actions">
                                <a class="btn btn-outline-primary" href="?page=edit&id=<?= $product["id_product"]; ?>" role="button">Editar</a>
                                <a class="btn btn-outline-danger" onclick='deleteProduct(<?= json_encode($product); ?>)' role="button">Eliminar</a>
                             </div>
                        </th>
                    <?php endif ?>
                </tr>
            <?php endforeach; ?>
        </table>
        </div>

    <?php else : ?>
        <div>
            <p>No se encontraron productos.</p>
        </div>
    <?php endif ?>

</div>
<script src="scripts.js"></script>
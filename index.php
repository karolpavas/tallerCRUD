<?php

include("services/Authentication.php");
include("services/ProductsService.php");

session_start();

$user = Authentication::getSession();
//$products = ProductsService::getProducts();

$page = "products";

$pages = [
    "products",
    "create",
    "edit",
    "delete",
    "login",
    "register",
    "logout",
    "product"
];

if (isset($_GET['page']) && $_GET['page'] != "") {
    if (in_array($_GET['page'], $pages)) {
        $page = $_GET['page'];
    } else {
        $page = "products";
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light colorMorado">
            <div class="container-fluid">
                <a class="navbar-brand" href="?page=products">Inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <?php if ($user) : ?>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    PRODUCTOS
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="?page=create">Crear productos</a></li>
                                </ul>
                            </li>
                        <?php endif ?>
                    </ul>
                    <div class="d-flex d-grid gap-2 d-md-block">
                        <?php if ($user) : ?>
                            <a class="btn btn-light " href="?page=logout" role="button">Salir</a>
                        <?php else : ?>
                            <a class="btn btn-light " href="?page=login" role="button">Entrar</a>
                            <a class="btn btn-light" href="?page=register" role="button">Registrarse</a>
                        <?php endif ?>
                    </div>

                </div>
            </div>
        </nav>
    </header>

    <div class="container text-center p-3 mb-0">
        <h1> <img src="huella.png" alt="" width="55" height="60" class="d-inline-block align-text-center">SASHA MARKER<img src="huella.png" alt="" width="55" height="60" class="d-inline-block align-text-center"></h1>
    </div>

    

    <div class="container p-4">
        <?php
        switch ($page) {
            case "products":
                include("products.php");
                break;
            case "create":
                include("create.php");
                break;
            case "edit":
                include("edit.php");
                break;
            case "delete":
                include("delete.php");
                break;
            case "login":
                include("login.php");
                break;
            case "register":
                include("register.php");
                break;
            case "logout":
                include("logout.php");
                break;
            case "product":
                include("product.php");
                break;
            default:
                include("products.php");
                break;
        }
        ?>
    </div>

    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top ">
            <p class="col-md-4 mb-0 text-muted">© 2022 Sasha Marker</p>

            <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>

            <ul class="nav col-md-4 justify-content-end">
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">contact@sasha-marker.com</a></li>
            </ul>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>
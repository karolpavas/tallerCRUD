<?php

if ($user) {
    header("Location: ?page=products");
    die();
}

$message = null;

if (isset($_POST['register'])) {

    $user = [
        "name" => $_POST['name'],
        "email" => $_POST['email'],
        "password" => $_POST['password']
    ];

    //Login
    $result = Authentication::register($user);


    if ($result) {
        header("Location: ?page=login");
        die();
    }

    $message = "El correo ya está en uso.";
}

?>

<div class="row"> 
    <div class="col"> 
    <div class="card">
    <div class="card-body">
        <form action="?page=register" method="post">
            <h2>Registro</h2>

            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input required type="text" id="name" name="name" class="form-control" >
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Correo</label>
                <input required type="text" id="email" name="email" class="form-control" >
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input required type="password" id="password" name="password" class="form-control" >
            </div>

            <?php if ($message) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= $message ?>
                </div>
            <?php endif ?>

            <button type="submit" class="btn btn-primary colorMorado" name="register">Registrarse</button>
        </form>
    </div>
</div>
    </div>
    <div class="col d-flex justify-content-center"> 
        <img src="register.png">
    </div>
</div>




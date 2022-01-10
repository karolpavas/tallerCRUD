<?php
if ($user) {
    header("Location: ?page=products");
    die();
}

$message = null;
$email = null;

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    //Login
    $result = Authentication::login($email, $password);

    if ($result) {
        header("Location: ?page=products");
        die();
    }

    $message = "Correo o contraseña invalida";
}

?>

<div class="row"> 
    <div class="col">
    <div class="card">
    <div class="card-body">
        <form action="?page=login" method="post">
            <h2>Iniciar sesión</h2>

            <div class="mb-3">
                <label for="email" class="form-label">Correo</label>
                <input required type="text" id="email" name="email" value="<?= $email ?>" class="form-control" >
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

            <button type="submit" class="btn btn-primary colorMorado" name="login">Entrar</button>
        </form>
    </div>
</div>
    </div>
    <div class="col d-flex justify-content-center"> 
        <img src="login.png">
    </div>
</div>


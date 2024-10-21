<?php
ob_start();
session_start();
require_once(__DIR__ . '/includes/init.php');
// Se o usuário já estiver logado, redireciona para o dashboard
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("Location: " . URL_PATH . $_SESSION['link_name']);
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br" class="link-html" dir="ltr">

<head>
    <title>Password protected - 66biolinks demo</title>
    <base href="http://localhost/poptag.app/biolink/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://66biolinks.com/demo/uploads/main/7c3a5cfe6fbc4faf0fce9f82295eda60.png" rel="icon" />

    <link href="../vendor/font-awesome/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../vendor/bootstrap/5.3.3/css/bootstrap.min.css?v=5.3.1" id="css_theme_style" rel="stylesheet" media="screen,print">
    <link href="assets/css/link-custom.css?v=1.0.0" rel="stylesheet" media="screen,print">
    <link href="assets/css/animate.min.css?v=1.0.0" rel="stylesheet" media="screen,print">

    <?php //require_once(__DIR__ . '/includes/link-custom.php'); ?>

</head>

<body class="link-body">
    <div class="container animate__animated animate__fadeIn">
        <div class="row justify-content-center mt-5 mt-lg-8">
            <div class="col-md-6 py-6">

                <div class="mb-4 text-center">
                    <h1 class="h3">Protegido por senha</h1>
                    <span class="text-muted">
                        Você deve inserir a senha correta para continuar.<br>
                        Sua senha será lembrada por 30 dias.
                    </span>
                </div>

                <form action="includes/process-login.php" method="post" role="form">

                    <input type="hidden" name="token" value="22cb11c52dec5ba41efab2ae7f5d883d" />
                    <input type="hidden" name="type" value="password" />

                    <div class="form-group" data-password-toggle-view data-password-toggle-view-show="Show" data-password-toggle-view-hide="Hide">
                        <label for="password">Senha</label>
                        <input type="password" id="password" name="password" value="" class="form-control " required="required" />
                    </div>

                    <button type="submit" name="submit" class="btn btn-block btn-primary mt-4">Entrar</button>
                    
                </form>

            </div>
        </div>
    </div>
</body>

<script src="../vendor/jquery/3.7.1/jquery-3.7.1.min.js?v=3.7.1"></script>
<script src="../vendor/popperjs/2.11.8/dist/umd/popper.min.js?v=2.11.8"></script>
<script src="../vendor/bootstrap/5.3.3/js/bootstrap.min.js?v=5.3.3"></script>

<script src="assets/js/custom.js?v=1.0.0"></script>

<script src="../vendor/font-awesome/js/fontawesome.min.js?v=1.0.0"></script>
<script src="../vendor/font-awesome/js/fontawesome-solid.min.js?v=1.0.0"></script>
<script src="../vendor/font-awesome/js/fontawesome-brands.min.js?v=1.0.0"></script>

</html>
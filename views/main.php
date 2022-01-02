<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT_PATH; ?>assets/css/bulma.css">
    <title>Strawboard</title>
</head>

<body>
    <nav class="navbar is-primary" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="https://bulma.io">
                Strawboard
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-end">
                <a class="navbar-item" href="<?php echo ROOT_URL; ?>/home">
                    Home
                </a>
                <a class="navbar-item" href="<?php echo ROOT_URL; ?>/shares">
                    Shares
                </a>
                <?php if (isset($_SESSION['is_logged_in'])): ?>
                    <a class="navbar-item" href="<?php echo ROOT_URL; ?>">
                        Welcome <?= $_SESSION['user_data']['name'] ?>
                    </a>
                    <a class="navbar-item" href="<?php echo ROOT_URL; ?>/users/logout">
                        Logout
                    </a>
                <?php else: ?>
                    <a class="navbar-item" href="<?php echo ROOT_URL; ?>/users/login">
                        Login
                    </a>
                    <a class="navbar-item" href="<?php echo ROOT_URL; ?>/users/register">
                        Register
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <div class="container px-5 py-2">
        <div class="row">
            <?php Messages::display(); ?>
            <?php require($view); ?>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Kos Tarka</title>
    <link rel="stylesheet" href="<?= base_url('css/login.css'); ?>">
</head>
<body>
    <div class="login-container">
        <div class="logo">
            <img src="<?= base_url('images/logo.png'); ?>" alt="Kos Tarka Logo">
        </div>
        <h1>KOS TARKA</h1>
        <?= view('Myth\Auth\Views\_message_block') ?>
        <form action="<?= url_to('login') ?>" method="post">
            <div class="form-group">
                <label for="email">Email Or Username</label>
                <input type="text" name="login" id="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" required>
            </div>
            <?php if ($config->activeResetter): ?>
            <div class="forgot-password">
                <a href="<?= site_url('auth/forgot-password'); ?>">Lupa Password?</a>
            </div>
            <?php endif; ?>
            <button type="submit" class="btn-login">Login</button>
        </form>
        <h4>Apakah Anda belum memiliki Akun?</h4>
        <a href="<?=base_url('register')?>" type="submit" class="btn-regis">Registration</a>
    </div>
</body>
</html>
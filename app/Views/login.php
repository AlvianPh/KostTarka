<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Kos Tarka</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
</head>
<body>
    <div class="login-container">
        <div class="logo">
            <img src="<?= base_url('images/home-icon.png'); ?>" alt="Kos Tarka Logo">
        </div>
        <h1>KOS TARKA</h1>
        <form action="<?= site_url('auth/login'); ?>" method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" required>
            </div>
            <div class="forgot-password">
                <a href="<?= site_url('auth/forgot-password'); ?>">Lupa Password?</a>
            </div>
            <button type="submit" class="btn-login">Login</button>
        </form>
    </div>
</body>
</html>
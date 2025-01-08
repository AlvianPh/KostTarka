<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" integrity="sha384-dyB9MsOuB6BxD1G3AcoF9P5nnE9ZBKHZBItzjgmx2RBfYYR3IVP4pHQF0ebhktHb" crossorigin="anonymous">
    <title> </title>
    <style>
        .navbar-custom {
            background-color: #f9f9f9;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
        .navbar-custom .nav-link {
            color: black;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        .navbar-custom .nav-link:hover {
            color: #dfe6e9;
        }
        .navbar-custom .navbar-brand img {
            max-height: 40px;
        }
        .navbar-custom .dropdown-menu {
            background-color: white;
        }
        .navbar-custom .dropdown-item:hover {
            background-color: #007BFF;
            color: white;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
        <!-- Navbar Brand -->
        <a class="navbar-brand me-4" href="<?=base_url('/')?>">
            <img src="<?= base_url('images/logo.png'); ?>" alt="Logo">
        </a>
        <!-- Navbar Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('/dashboard_pemilik')?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('/manajemen_kamar')?>">Manajemen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('/konfirmasi_pembayaran')?>">Pembayaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('/laporan')?>">Laporan</a>
                </li>
                <!-- User Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-user fa-lg"></i> <!-- Ikon Akun -->
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?=base_url('/akun_pemilik')?>">Pengaturan Akun</a></li>
                        <li><a class="dropdown-item" href="<?=base_url('/logout')?>">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
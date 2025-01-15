<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/lightbox2@2.11.1/dist/css/lightbox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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


        .footer-icon {
            transition: transform 0.3s ease, color 0.3s ease;
            font-size: 1.5rem; /* Ukuran ikon yang lebih besar */
        }

        footer {
            width: 100%;
        }
        .footer-logo img {
            max-width: 150px;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.5);
            padding-top: 20px;
        }

        .footer-logo {
            margin-bottom: 20px; /* Margin bawah untuk logo */
        }

        .social-icons {
            margin-top: 10px; /* Margin atas untuk ikon sosial media */
        }

        .footer-bottom p {
            margin: 10px; 
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
                    <a class="nav-link" href="<?=base_url('/dashboard_penghuni')?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('/list-kamar')?>">List Kamar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('pembayaran')?>">Pembayaran</a>
                </li>
                <!-- User Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-user fa-lg"></i> <!-- Ikon Akun -->
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?=base_url('/akun_penghuni')?>">Pengaturan Akun</a></li>
                        <li><a class="dropdown-item" href="<?=base_url('/logout')?>">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
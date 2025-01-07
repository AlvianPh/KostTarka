<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title> </title>
</head>
<body>
<nav class="sb-topnav navbar navbar-expand navbar-light bg-light">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="<?=base_url('/')?>"><img src="<?= base_url('images/logo.png'); ?>" alt="" width="120px" height="30px"></a>
    <!-- Sidebar Toggle-->
    
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav mb-2 mb-lg-0 me-5">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?=base_url('/dashboard_pemilik')?>">Home</a>
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

        <li class="nav-item">
          <a class="nav-link" href="<?=base_url('/akun_pemilik')?>">Akun</a>
        </li>
      </ul>
</nav>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Kamar</title>
    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('css/manajemen_kamar.css') ?>">
    <!-- Font Awesome for Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="logo">
            <h1>TARKA</h1>
        </div>
        <nav>
            <ul>
                <li><a href="<?= base_url('/') ?>">Home</a></li>
                <li><a href="#" class="active">Manajemen</a></li>
                <li><a href="<?= base_url('/pembayaran') ?>">Pembayaran</a></li>
                <li><a href="<?= base_url('/laporan') ?>">Laporan</a></li>
            </ul>
        </nav>
        <div class="profile">
            <i class="fas fa-user-circle fa-2x"></i>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <h2>Manajemen Kamar</h2>
        <div class="room-container">
            <!-- Card Kamar A1 -->
            <div class="room-card">
                <img src="https://via.placeholder.com/150" alt="Kamar A1">
                <p>Kamar A1</p>
                <button class="btn">Detail</button>
            </div>

            <!-- Card Kamar A2 -->
            <div class="room-card">
                <img src="https://via.placeholder.com/150" alt="Kamar A2">
                <p>Kamar A2</p>
                <button class="btn">Detail</button>
            </div>

            <!-- Card Tambah Kamar -->
            <div class="room-card add-room">
                <div class="add-icon">
                    <i class="fas fa-plus fa-3x"></i>
                </div>
                <p>Tambah Kamar</p>
                <button class="btn">Tambah</button>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 TARKA. All Rights Reserved.</p>
    </footer>
</body>
</html>

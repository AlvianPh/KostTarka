<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/penghuni_kos.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>List Kamar</title>
</head>

<body>
    <header class="header">
        <div class="logo">
            <img src="<?= base_url('images/logo.png'); ?>" alt="Kost Tarka Logo">
        </div>
        <nav>
            <ul>
                <li><a href="<?= base_url('/') ?>">Home</a></li>
                <li><a href="<?= base_url('penghuni-kos') ?>" class="active">List Kamar</a></li>
                <li><a href="#">Pembayaran</a></li>
                <li><a href="#">
                        <i class="fas fa-user-circle" style="font-size: 24px; color: white;"></i>
                    </a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>Kamar yang Tersedia</h2>
        <div class="room-list">
            <div class="room-card">
                <img src="<?= base_url('images/room1.jpg') ?>" alt="Kamar A1">
                <div class="room-info">
                    <h3>Kamar: A1</h3>
                    <p>Harga: Rp. 900,000 / Bulan</p>
                    <p>Status: Tersedia</p>
                    <div class="room-actions">
                        <button class="btn-detail">DETAIL</button>
                        <button class="btn-book">MASUK KAMAR</button>
                    </div>
                </div>
            </div>

            <div class="room-card">
                <img src="<?= base_url('images/room1.jpg') ?>" alt="Kamar B2">
                <div class="room-info">
                    <h3>Kamar: B2</h3>
                    <p>Harga: Rp. 1,200,000 / Bulan</p>
                    <p>Status: Tersedia</p>
                    <div class="room-actions">
                        <button class="btn-detail">DETAIL</button>
                        <button class="btn-book">MASUK KAMAR</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer-container">
            <div class="footer-logo">
                <img src="<?= base_url('images/logo.png'); ?>" alt="Kost Tarka Logo">
                <p>Simplify Your Property with Tarka</p>
            </div>
            <div class="footer-links">
                <a href="#" target="_blank" class="footer-icon">
                    <i class="fab fa-whatsapp"></i> WhatsApp
                </a>
                <a href="https://www.instagram.com/phew.zzz/?hl=en" target="_blank" class="footer-icon">
                    <i class="fab fa-instagram"></i> Instagram
                </a>
                <a href="https://github.com/AlvianPh/KostTarka.git" target="_blank" class="footer-icon">
                    <i class="fab fa-github"></i> GitHub
                </a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Kost Tarka. All Rights Reserved.</p>
        </div>
    </footer>

</body>

</html>
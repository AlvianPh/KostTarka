<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran - Tarka</title>
    <link rel="stylesheet" href="<?= base_url('css/pembayaran.css'); ?>">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <img src="<?= base_url('images/home-icon.png'); ?>" alt="Tarka Logo">
            <span>TARKA</span>
        </div>
        <ul class="nav-links">
            <li><a href="<?= site_url('/'); ?>">Home</a></li>
            <li><a href="<?= site_url('kamar'); ?>">List Kamar</a></li>
            <li><a href="<?= site_url('pembayaran'); ?>" class="active">Pembayaran</a></li>
            <li><a href="<?= site_url('profile'); ?>"><img src="<?= base_url('images/user-icon.png'); ?>" alt="Profile"></a></li>
        </ul>
    </nav>

    <!-- Form Container -->
    <div class="form-container">
        <h2>Pembayaran</h2>
        <form action="<?= site_url('pembayaran/submit'); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nomor_kamar">Nomer Kamar</label>
                <input type="text" name="nomor_kamar" id="nomor_kamar" required>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <div class="date-range">
                    <input type="date" name="tanggal_awal" id="tanggal_awal" required>
                    <span>-</span>
                    <input type="date" name="tanggal_akhir" id="tanggal_akhir" required>
                </div>
            </div>
            <div class="form-group">
                <label for="metode_pembayaran">Metode Pembayaran</label>
                <input type="text" name="metode_pembayaran" id="metode_pembayaran" required>
            </div>
            <div class="form-group">
                <label for="jumlah_pembayaran">Jumlah Pembayaran</label>
                <input type="number" name="jumlah_pembayaran" id="jumlah_pembayaran" required>
            </div>
            <div class="form-group">
                <label for="bukti_pembayaran">Bukti</label>
                <input type="file" name="bukti_pembayaran" id="bukti_pembayaran" required>
            </div>
            <button type="submit" class="btn-submit">Submit</button>
        </form>
    </div>
</body>
</html>

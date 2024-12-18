<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kamar</title>
    <link rel="stylesheet" href="<?= base_url('css/deskripsi_kamar.css'); ?>">
</head>
<body>
    <header>
        <div class="logo">
            <h2>TARKA</h2>
        </div>
        <nav>
            <ul>
                <li><a href="<?= base_url(); ?>">Home</a></li>
                <li><a href="<?= base_url('list-kamar'); ?>" class="active">List Kamar</a></li>
                <li><a href="<?= base_url('pembayaran'); ?>">Pembayaran</a></li>
            </ul>
        </nav>
        <div class="profile">
            <a href="<?= base_url('profil'); ?>">&#x1F464;</a>
        </div>
    </header>

    <main>
        <h1>Detail Kamar</h1>
        <section class="gambar-kamar">
            <a href="<?= base_url('isi-data-kamar'); ?>">
                <img src="<?= base_url('images/kamar1.jpg'); ?>" alt="Kamar 1">
            </a>
            <a href="<?= base_url('isi-data-kamar'); ?>">
                <img src="<?= base_url('images/kamar2.jpg'); ?>" alt="Kamar 2">
            </a>
            <a href="<?= base_url('isi-data-kamar'); ?>">
                <img src="<?= base_url('images/kamar3.jpg'); ?>" alt="Kamar 3">
            </a>
        </section>

        <div class="pagination">
            <span class="dot"></span>
            <span class="dot active"></span>
            <span class="dot"></span>
        </div>

        <section class="deskripsi-kamar">
            <h2>Deskripsi Kamar</h2>
            <div class="box-deskripsi">
                <ol>
                    <li>AC</li>
                    <li>Ukuran 4X4</li>
                    <li>Free Wi-Fi</li>
                    <li>Free Listrik</li>
                    <li>Free Sampah</li>
            </div>
        </section>
    </main>
</body>
</html>

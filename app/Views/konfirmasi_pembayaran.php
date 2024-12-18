<!-- File: konfirmasi_penghuni_baru.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Penghuni</title>
    <link rel="stylesheet" href="konfirmasi_pembayaran.css">
</head>
<body>
    <!-- Header Navigasi -->
    <header>
        <div class="header-left">
            <h1><img src="logo.png" alt="TARKA" class="logo"></h1>
        </div>
        <nav>
            <a href="#">Home</a>
            <a href="#">Manajemen</a>
            <a href="#">Pembayaran</a>
            <a href="#">Laporan</a>
        </nav>
    </header>

    <!-- Form Konfirmasi -->
    <div class="form-container">
        <h1>Konfirmasi</h1>
        <!-- Dropdown Kamar -->
        <div class="dropdown-container">
            <select name="kamar" id="kamar">
                <option value="1">Kamar 1</option>
                <option value="2">Kamar 2</option>
                <option value="3">Kamar 3</option>
                <option value="4">Kamar 4</option>
            </select>
        </div>
        <!-- Daftar Penghuni -->
        <div class="checkbox-container">
            <div class="row">
                <label><input type="checkbox"> Penghuni 1</label>
                <label><input type="checkbox"> Penghuni 4</label>
                <label><input type="checkbox"> Penghuni 7</label>
            </div>
            <div class="row">
                <label><input type="checkbox"> Penghuni 2</label>
                <label><input type="checkbox"> Penghuni 5</label>
                <label><input type="checkbox"> Penghuni 8</label>
            </div>
            <div class="row">
                <label><input type="checkbox"> Penghuni 3</label>
                <label><input type="checkbox"> Penghuni 6</label>
                <label><input type="checkbox" checked> Penghuni 9</label>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 TARKA</p>
    </footer>
</body>
</html>

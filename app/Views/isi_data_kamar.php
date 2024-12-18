<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Manajemen Kamar</title>
    <link rel="stylesheet" href="isi_data_kamar.css" />
  </head>
  <body>
    <!-- Header Navigasi -->
    <header>
      <div>
        <h1><img src="logo.png" alt="TARKA" class="logo" /> </h1>
      </div>
      <nav>
        <a href="#">Home</a>
        <a href="#">Manajemen</a>
        <a href="#">Pembayaran</a>
        <a href="#">Laporan</a>
      </nav>
    </header>

    <!-- Form Manajemen Kamar -->
    <div class="form-container">
      <h1>Manajemen Kamar</h1>
      <form>
        <input type="text" placeholder="No. Kamar" required />
        <input type="number" placeholder="Harga" required />
        <div class="status">
          <label>
            <input type="radio" name="status" value="kosong" required /> Kosong
          </label>
          <label>
            <input type="radio" name="status" value="berpenghuni" /> Berpenghuni
          </label>
        </div>
        <input type="text" placeholder="Fasilitas" required />
        <input type="text" placeholder="Deskripsi Singkat" required />
        <button type="button" class="btn-pilih">Pilih</button>
        <button type="submit" class="btn-submit">Submit</button>
      </form>
    </div>

    <!-- Footer -->
    <footer class="footer">
      <p>&copy; 2024 TARKA</p>
    </footer>
  </body>
</html>

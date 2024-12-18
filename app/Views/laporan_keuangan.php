<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laporan Keuangan</title>
    <link rel="stylesheet" href="css/laporan_keuangan.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
  </head>
  <body>
    <header class="header">
      <div class="logo">
        <img src="image/logo 1.png" alt="Kost Tarka Logo" />
      </div>
      <nav>
        <ul>
          <li><a href="<?= base_url('/') ?>">Home</a></li>
          <li><a href="<?= base_url('penghuni-kos') ?>">List Kamar</a></li>
          <li><a href="#">Pembayaran</a></li>
          <li>
            <a href="#">
              <i
                class="fas fa-user-circle"
                style="font-size: 24px; color: #007bff"
              ></i>
            </a>
          </li>
        </ul>
      </nav>
    </header>

    <div class="riwayat">
      <h2>Riwayat Pembayaran</h2>
      <form>
        <table>
          <tr>
            <td><label for="tanggal-awal">Tanggal Awal</label></td>
            <td>
              <input
                type="date"
                id="tanggal-awal"
                name="tanggal-awal"
                required
              />
            </td>
          </tr>
          <tr>
            <td><label for="tanggal-akhir">Tanggal Akhir</label></td>
            <td>
              <input
                type="date"
                id="tanggal-akhir"
                name="tanggal-akhir"
                required
              />
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="button-container">
                <button type="submit">Tampilkan</button>
              </div>
            </td>
          </tr>
        </table>
      </form>
    </div>

    <div class="container">
      <div class="card">
        <span>Kamar 1A<br />21/01/2024</span>
        <span>Nama Penghuni</span>
        <span>Lunas <br /><img src="icon.png" alt="Image" /></span>
      </div>
      <div class="card">
        <span>Kamar 1A<br />21/01/2024</span>
        <span>Nama Penghuni</span>
        <span>Lunas <br /><img src="icon.png" alt="Image" /></span>
      </div>
      <div class="card">
        <span>Kamar 1A<br />21/01/2024</span>
        <span>Nama Penghuni</span>
        <span>Lunas <br /><img src="icon.png" alt="Image" /></span>
      </div>
      <div class="card">
        <span>Kamar 1A<br />21/01/2024</span>
        <span>Nama Penghuni</span>
        <span>Lunas <br /><img src="icon.png" alt="Image" /></span>
      </div>
    </div>
  </body>
</html>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Laporan Keuangan</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>

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
              required />
          </td>
        </tr>
        <tr>
          <td><label for="tanggal-akhir">Tanggal Akhir</label></td>
          <td>
            <input
              type="date"
              id="tanggal-akhir"
              name="tanggal-akhir"
              required />
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
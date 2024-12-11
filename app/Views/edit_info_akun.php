<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="css/style_edit.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  </head>
  <body>
    <header class="header">
      <div class="logo">
      <img src="image/logo 1.png" alt="Kost Tarka Logo">
      </div>
      <nav>
          <ul>
              <li><a href="<?= base_url('/') ?>">Home</a></li>
              <li><a href="<?= base_url('penghuni-kos') ?>">List Kamar</a></li>
              <li><a href="#">Pembayaran</a></li>
              <li><a href="#">
                      <i class="fas fa-user-circle" style="font-size: 24px; color: white;"></i>
              </a></li>
          </ul>
      </nav>
    </header>

    <div class="form-container">
      <h1>Informasi Akun</h1>
      <form>
        <table>
          <tr>
            <td><label for="full-name">Nama Lengkap</label></td>
            <td colspan="2"><input type="text" id="full-name" name="full-name" required /></td>
          </tr>
          <tr>
            <td><label for="email">Email</label></td>
            <td colspan="2"><input type="email" id="email" name="email" required /></td>
          </tr>
          <tr>
            <td><label for="phone">No. Telepon</label></td>
            <td colspan="2"><input type="tel" id="phone" name="phone" required /></td>
          </tr>
          <tr>
            <td><label for="password">Password</label></td>
            <td colspan="2"><input type="password" id="password" name="password" required /></td>
          </tr>
          <tr>
            <td><label for="confirm-password">Konfirmasi Password</label></td>
            <td colspan="2"><input type="password" id="confirm-password" name="confirm-password" required
            /></td>
          </tr>
          <tr>
            <td></td>
            <td><button type="submit" href="#">Submit</button></td>
            <td></td>
          </tr>
      </form>
    </div>
  </body>
</html>

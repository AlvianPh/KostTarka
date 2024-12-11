<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="<?= base_url('css/registrasi.css'); ?>" />
  </head>
  <body>
    <div class="form-container">
      <h1>Form Registrasi</h1>
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
            <td><label>Tipe Akun</label></td>
            <td><label style="display: flex; align-items: center"
              ><input type="radio" name="account-type" value="pemilik" required/>
              <span style="margin-left: 5px">Pemilik</span></label></td>
            <td><label style="display: flex; align-items: center"
              ><input type="radio" name="account-type" value="penghuni" />
              <span style="margin-left: 5px">Penghuni</span></label
            ></td>
          </tr>
          <tr>
            <td></td>
            <td><button type="submit" href="">Sign Up</button></td>
            <td></td>
          </tr>
      </form>
    </div>
  </body>
</html>

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
      <?= view('Myth\Auth\Views\_message_block') ?>
      <form action="<?= url_to('register') ?>" method="post">
        <table>
          <tr>
            <td><label for="nama">Nama Lengkap</label></td>
            <td colspan="2"><input type="text" id="nama" name="nama" required class=" <?php if (session('errors.nama')) : ?>is-invalid<?php endif ?>" id="exampleInputnama"
              value="<?= old('nama') ?>"/></td>
          </tr>
          <tr>
            <td><label for="username">Username</label></td>
            <td colspan="2"><input type="text" id="username" name="username" required class=" <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" id="exampleInputusername"
              value="<?= old('username') ?>"/></td>
          </tr>
          <tr>
            <td><label for="email">Email</label></td>
            <td colspan="2"><input type="email" id="email" name="email" required class="<?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" id="exampleInputEmail"
                 value="<?= old('email') ?>"/></td>
          </tr>
          <tr>
            <td><label for="no_telpon">No. Telepon</label></td>
            <td colspan="2"><input type="text" id="no_telpon" name="no_telpon" required class="<?php if (session('errors.no_telpon')) : ?>is-invalid<?php endif ?>" id="exampleInputno_telpon"
                 value="<?= old('no_telpon') ?>"/></td>
          </tr>
          <tr>
            <td><label for="password">Password</label></td>
            <td colspan="2"><input type="password" id="password" name="password" required class="<?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"
                id="exampleInputPassword"  autocomplete="off"/></td>
          </tr>
          <tr>
            <td><label for="pass_confirm">Konfirmasi Password</label></td>
            <td colspan="2"><input type="password" id="pass_confirm" name="pass_confirm" required class="<?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>"
                                            id="exampleRepeatPassword"  autocomplete="off"
            /></td>
          </tr>
          <tr>
            <td><label>Tipe Akun</label></td>
            <td><label style="display: flex; align-items: center"
              ><input type="radio" name="role" value="pemilik" required/>
              <span style="margin-left: 5px">Pemilik</span></label></td>
            <td><label style="display: flex; align-items: center"
              ><input type="radio" name="role" value="penghuni" />
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
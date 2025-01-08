<?php
if (session()->getFlashdata('message')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('message'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;
            </span>
        </button>
    </div>;
<?php endif;
?>

<div class="container mt-5">
    <h1><?= $title; ?></h1>

    <form action="<?= base_url('save'); ?>" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nama_kamar">Nama Kamar</label>
            <input type="text" class="form-control" id="nama_kamar" name="nama_kamar" value="<?= old('nama_kamar'); ?>" required>
            <div class="invalid-feedback">
                <?= validation_show_error('nama_kamar') ?>
            </div>
        </div>

        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" value="<?= old('harga'); ?>" required>
            <div class="invalid-feedback">
                <?= validation_show_error('harga') ?>
            </div>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="">Pilih Status</option>
                <option value="1" <?= old('status') == '1' ? 'selected' : ''; ?>>Aktif</option>
                <option value="0" <?= old('status') == '0' ? 'selected' : ''; ?>>Tidak Aktif</option>
            </select>
            <div class="invalid-feedback">
                <?= validation_show_error('status') ?>
            </div>
        </div>

        <div class="form-group">
            <label for="token">Token</label>
            <input type="text" class="form-control" id="token" name="token" value="<?= old('token'); ?>" required>
            <div class="invalid-feedback">
                <?= validation_show_error('token') ?>
            </div>
        </div>

        <div class="form-group">
            <label for="foto_kamar">Foto Kamar</label>
            <input type="file" class="form-control" id="foto_kamar" name="foto_kamar" required>
            <div class="invalid-feedback">
                <?= validation_show_error('foto_kamar') ?>
            </div>
        </div>

        <div class="form-group">
            <label for="fasilitas">Fasilitas Kamar</label>
            <textarea class="form-control" id="fasilitas" name="fasilitas" rows="3" required><?= old('fasilitas'); ?></textarea>
            <div class="invalid-feedback">
                <?= validation_show_error('fasilitas') ?>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?= base_url('manajemen_kamar'); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
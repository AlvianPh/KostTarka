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
    <h1>Edit Kamar</h1>
    <form action="<?= base_url('update/' . $kamar['id_kamar']); ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="form-group">
            <label for="nama_kamar">Nama Kamar</label>
            <input type="text" class="form-control" id="nama_kamar" name="nama_kamar" value="<?= old('nama_kamar', $kamar['nama_kamar']); ?>" required>
            <div class="invalid-feedback">
                <?= validation_show_error('nama_kamar') ?>
            </div>
        </div>

        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" value="<?= old('harga', $kamar['harga']); ?>" required>
            <div class="invalid-feedback">
                <?= validation_show_error('harga') ?>
            </div>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="">Pilih Status</option>
                <option value="1" <?= old('status', $kamar['status']) == '1' ? 'selected' : ''; ?>>Aktif</option>
                <option value="0" <?= old('status', $kamar['status']) == '0' ? 'selected' : ''; ?>>Tidak Aktif</option>
            </select>
            <div class="invalid-feedback">
                <?= validation_show_error('status') ?>
            </div>
        </div>

        <div class="form-group">
            <label for="token">Token</label>
            <input type="text" class="form-control" id="token" name="token" value="<?= old('token', $kamar['token']); ?>" required>
            <div class="invalid-feedback">
                <?= validation_show_error('token') ?>
            </div>
        </div>

        <div class="form-group">
            <label for="foto_kamar">Foto Kamar</label>
            <input type="file" class="form-control" id="foto_kamar" name="foto_kamar">
            <small class="form-text text-muted">Kosongkan jika tidak ingin mengubah foto.</small>
            <div class="invalid-feedback">
                <?= validation_show_error('foto_kamar') ?>
            </div>
            <?php if (!empty($kamar['foto_kamar'])) : ?>
                <img src="<?= base_url('public/images/uploads/' . $kamar['foto_kamar']); ?>" alt="Foto Kamar" class="img-thumbnail mt-2" style="width: 150px; height: 180px" >
            <?php endif; ?>
        </div>

        <div class="form-group">
            <label for="fasilitas">Fasilitas Kamar</label>
            <textarea class="form-control" id="fasilitas" name="fasilitas" rows="3" required><?= old('fasilitas', $kamar['fasilitas']); ?></textarea>
            <div class="invalid-feedback">
                <?= validation_show_error('fasilitas') ?>
            </div>
        </div>

        <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda yakin ingin mengubah data kamar ini?')">Update</button>
        <a href="<?= base_url('manajemen_kamar'); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
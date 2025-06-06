  <!-- Notifikasi -->
  <?php if (session()->getFlashdata('success')): ?>
    <div id="flash-success" class="alert alert-success mt-4 text-center" role="alert">
        <?= session()->getFlashdata('success'); ?>
    </div>
<?php endif; ?>

<?php if (session()->getFlashdata('error')): ?>
    <div id="flash-error" class="alert alert-danger mt-4 text-center" role="alert">
        <?= session()->getFlashdata('error'); ?>
    </div>
<?php endif; ?>

<!-- Tambahkan JavaScript -->
<script>
    // Menghilangkan notifikasi setelah 5 detik
    setTimeout(() => {
        const flashSuccess = document.getElementById('flash-success');
        const flashError = document.getElementById('flash-error');
        
        if (flashSuccess) {
            flashSuccess.style.transition = "opacity 0.5s ease";
            flashSuccess.style.opacity = "0";
            setTimeout(() => flashSuccess.remove(), 500); // Menghapus elemen setelah transisi selesai
        }
        
        if (flashError) {
            flashError.style.transition = "opacity 0.5s ease";
            flashError.style.opacity = "0";
            setTimeout(() => flashError.remove(), 500); // Menghapus elemen setelah transisi selesai
        }
    }, 5000); // 5 detik
</script>



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
                <option value="1" <?= old('status') == '1' ? 'selected' : ''; ?>>Berpenghuni</option>
                <option value="0" <?= old('status') == '0' ? 'selected' : ''; ?>>Tidak Berpenghuni</option>
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
<?php if (session()->getFlashdata('message')): ?>
    <div class="alert alert-success text-center">
        <?= session()->getFlashdata('message'); ?>
    </div>
<?php endif; ?>
<?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger text-center">
        <?= session()->getFlashdata('error'); ?>
    </div>
<?php endif; ?>


<div class="container mt-5 mb-5">
    <h2 class="text-center">Masuk Kamar <?= htmlspecialchars($kamar['nama_kamar']); ?></h2>

    <!-- Gambar Kamar -->
    <div class="text-center mt-4">
        <img src="<?= base_url('public/images/uploads/' . $kamar['foto_kamar']); ?>" class="img-fluid rounded" alt="Foto Kamar <?= htmlspecialchars($kamar['nama_kamar']); ?>" style="max-width: 600px;">
    </div>

    <!-- Form Token -->
    <form action="<?= base_url('masuk_kamar/' . $kamar['id_kamar']); ?>" method="post" class="mt-4">
        <div class="mb-3">
            <label for="token" class="form-label">Token</label>
            <input type="text" name="token" id="token" class="form-control" placeholder="Masukkan Token" required>
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
    

<?php if (session()->getFlashdata('message')): ?>
    <div class="alert alert-success text-center">
        <?= session()->getFlashdata('message'); ?>
    </div>
<?php endif; ?>

<div class="container mt-5 mb-5">
    <h2 class="text-center">Detail Kamar: <?= htmlspecialchars($kamar['nama_kamar']); ?></h2>

    <!-- Gambar Kamar -->
    <div class="text-center mt-4">
        <img src="<?= base_url('public/images/uploads/' . $kamar['foto_kamar']); ?>" 
             class="img-fluid rounded" 
             alt="Foto Kamar <?= htmlspecialchars($kamar['nama_kamar']); ?>" 
             style="max-width: 600px;">
    </div>

    <!-- Informasi Kamar -->
    <div class="mt-4">
        <h5>Informasi Kamar</h5>
        <table class="table table-bordered">
            <tr>
                <th>Nama Kamar</th>
                <td><?= htmlspecialchars($kamar['nama_kamar']); ?></td>
            </tr>
            <tr>
                <th>Status</th>
                <td>
                    <?php if ($kamar['status'] == 1): ?>
                        <span class="badge bg-success">Terpakai</span>
                    <?php else: ?>
                        <span class="badge bg-danger">Tersedia</span>
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <th>Penghuni</th>
                <td><?= isset($kamar['penghuni']) ? htmlspecialchars($kamar['penghuni']) : 'Belum Ada'; ?></td>
            </tr>
            <tr>
                <th>Harga per Bulan</th>
                <td><?= number_format($kamar['harga'], 0, ',', '.'); ?> IDR</td>
            </tr>
            <tr>
                <th>Fasilitas</th>
                <td><?= htmlspecialchars($kamar['fasilitas']); ?></td>
            </tr>
        </table>
    </div>

    <!-- Tombol Aksi -->
    <div class="d-flex justify-content-end">
        <a href="<?= base_url('/list-kamar'); ?>" class="btn btn-secondary me-2">Kembali</a>
        <?php if ($kamar['status'] == 0): ?>
            <a href="<?= base_url('masuk-kamar/' . $kamar['id_kamar']); ?>" class="btn btn-primary">Masuk Kamar</a>
        <?php endif; ?>
    </div>
</div>

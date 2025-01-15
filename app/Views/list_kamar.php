<?php if (session()->getFlashdata('message')): ?>
    <div class="alert alert-success text-center">
        <?= session()->getFlashdata('message'); ?>
    </div>
<?php endif; ?>


<div class="container mt-5 mb-4">
    <h2 class="text-center mb-4">Daftar Kamar</h2>

    <!-- Tabel Daftar Kamar -->
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white text-center">
            <h5>Informasi Kamar</h5>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kamar</th>
                        <th>Status</th>
                        <th>Penghuni</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($kamarList)): ?>
                        <?php $no = 1; foreach ($kamarList as $kamar): ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $kamar['nama_kamar']; ?></td>
                                <td>
                                    <?php if ($kamar['status_kamar'] === '1'): ?>
                                        <span class="badge bg-success">Terpakai</span> 
                                    <?php else: ?>
                                        <span class="badge bg-danger">Tersedia</span> 
                                    <?php endif; ?>
                                </td>
                                <td><?= isset($kamar['nama']) ? $kamar['nama'] : 'Tidak ada'; ?></td>
                                <td>
                                    <a href="<?= base_url('detail-kamar/' . $kamar['id_kamar']); ?>" class="btn btn-primary btn-sm">Detail</a>
                                    <?php if ($kamar['status_kamar'] === '0'): ?>
                                        <a href="<?= base_url('masuk-kamar/' . $kamar['id_kamar']); ?>" class="btn btn-success btn-sm">Masuk ke Kamar</a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" class="text-center text-muted">Tidak ada data kamar yang tersedia.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

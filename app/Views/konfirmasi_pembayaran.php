<div class="container mt-5">
    <!-- Header -->
    <h1 class="text-center">Konfirmasi Pembayaran</h1>

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


    <!-- Transaksi yang menunggu konfirmasi -->
    <h3 class="mt-5">Transaksi Menunggu Konfirmasi</h3>
    <div class="table-responsive mt-3">
        <table class="table table-bordered align-middle text-center">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Kamar</th>
                    <th>Nama Penghuni Kos</th>
                    <th>Total Biaya</th>
                    <th>Status</th>
                    <th>Foto Bukti</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($bukti_pending) > 0): ?>
                    <?php $no = 1; foreach ($bukti_pending as $b): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $b['id_bukti']; ?></td>
                            <td><?= $b['nama_penghuni'] ?? 'Tidak Diketahui'; ?></td>
                            <td>Rp <?= number_format($b['jumlah'], 0, ',', '.'); ?></td>
                            <td><span class="badge bg-warning">Menunggu Persetujuan</span></td>
                            <td>
                                <?php if (!empty($b['foto_bukti'])): ?>
                                    <a href="<?= base_url('bukti_pembayaran/' . $b['foto_bukti']); ?>" data-lightbox="bukti_pembayaran_<?= $b['id_bukti']; ?>" data-title="Foto Bukti Pembayaran">
                                        <img src="<?= base_url('bukti_pembayaran/' . $b['foto_bukti']); ?>" alt="Foto Bukti" width="100" style="cursor: pointer;">
                                    </a>
                                <?php else: ?>
                                    <span class="text-muted">Tidak ada foto</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="<?= base_url('konfirmasi_pembayaran/setujui/' . $b['id_bukti']); ?>" class="btn btn-sm btn-success" onclick="return confirm('Setujui pembayaran ini?')">Setujui</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7" class="text-center">Tidak ada data.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

</div>

<div class="container mt-5">
    <h2 class="text-center mb-4">Dashboard Pemilik Kos</h2>

    <!-- Bagian Statistik -->
    <div class="row justify-content-center text-center">
        <!-- Daftar Penghuni -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-primary">
                <div class="card-header bg-primary text-white">
                    <h5>Daftar Penghuni</h5>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled text-start">
                        <?php if (!empty($totalPenghuni)): ?>
                            <?php foreach ($totalPenghuni as $key => $p): ?>
                                <li><?= ($key + 1) . '. ' . htmlspecialchars($p['nama']); ?></li>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <li class="text-muted">Belum ada penghuni</li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Daftar Kamar Terpakai -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-primary">
                <div class="card-header bg-primary text-white">
                    <h5>Daftar Kamar Terpakai</h5>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled text-start">
                        <?php if (!empty($kamarTerpakai)): ?>
                            <?php foreach ($kamarTerpakai as $key => $k): ?>
                                <li><?= ($key + 1) . '. ' . htmlspecialchars($k['nama_kamar']); ?></li>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <li class="text-muted">Tidak ada kamar yang terpakai</li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Penghasilan Per Tahun -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-primary">
                <div class="card-header bg-primary text-white">
                    <h5>Penghasilan Per Tahun</h5>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled text-start">
                        <li>Total Penghasilan: <strong>Rp <?= number_format($penghasilanTahun, 0, ',', '.'); ?></strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Bagian Notifikasi -->
    <div class="mt-5">
    <h3 class="text-center mb-3">Notifikasi</h3>
    <div class="card shadow-sm border-primary">
        <div class="card-body bg-primary text-white" style="height: 150px;">
            <?php if ($notifikasiPembayaran > 0): ?>
                <p class="mb-0">Anda memiliki <strong><?= $notifikasiPembayaran; ?></strong> pembayaran yang belum dikonfirmasi!</p>
                <a href="<?= base_url('konfirmasi_pembayaran'); ?>" class="btn btn-light mt-3">Lihat Detail</a>
            <?php else: ?>
                <p class="mb-0">Tidak ada pembayaran yang perlu dikonfirmasi.</p>
            <?php endif; ?>
        </div>
    </div>
</div>
</div>


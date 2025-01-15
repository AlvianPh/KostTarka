<div class="container mt-5 mb-4">
    <h2 class="text-center mb-4">Dashboard Penghuni Kos</h2>

    <!-- Informasi Kamar -->
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-primary text-white">
            <h5>Informasi Kamar Anda</h5>
        </div>
        <div class="card-body">
            <p><strong>Nama Kamar:</strong> <?= isset($kamar['nama_kamar']) ? $kamar['nama_kamar'] : 'Tidak tersedia'; ?></p>
            <p><strong>Status Kamar:</strong> <?= isset($kamar['status']) ? ucfirst($kamar['status']) : 'Tidak tersedia'; ?></p>
            <p><strong>Tanggal Masuk:</strong> <?= isset($kamar['tanggal_masuk']) ? date('d/m/Y', strtotime($kamar['tanggal_masuk'])) : 'Tidak tersedia'; ?></p>
        </div>
    </div>

    <!-- Status Pembayaran -->
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-primary text-white">
            <h5>Status Pembayaran</h5>
        </div>
        <div class="card-body">
            <?php if (!empty($pembayaran)): ?>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Pembayaran</th>
                            <th>Jumlah</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach ($pembayaran as $item): ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= date('d/m/Y', strtotime($item['tanggal'])); ?></td>
                                <td>Rp <?= number_format($item['jumlah'], 0, ',', '.'); ?></td>
                                <td><?= ucfirst($item['status']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p class="text-muted">Belum ada riwayat pembayaran.</p>
            <?php endif; ?>
        </div>
    </div>

    <!-- Notifikasi -->
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5>Notifikasi</h5>
        </div>
        <div class="card-body">
            <?php if (!empty($notifikasi)): ?>
                <ul class="list-unstyled">
                    <?php foreach ($notifikasi as $notif): ?>
                        <li>• <?= $notif['pesan']; ?> (<?= date('d/m/Y', strtotime($notif['tanggal'])); ?>)</li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p class="text-muted">Tidak ada notifikasi baru.</p>
            <?php endif; ?>
        </div>
    </div>
</div>

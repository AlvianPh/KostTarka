<div class="container mt-5">
    <h1 class="text-center">Riwayat Pembayaran</h1>

    <!-- Form Filter -->
    <div class="card p-4 mt-4">
        <form action="<?= base_url('laporan_keuangan/cetakPdf'); ?>" method="post">
            <div class="row">
                <div class="col-md-5">
                    <label for="awal" class="form-label">Tanggal Awal</label>
                    <input type="date" id="awal" name="awal" class="form-control" required>
                </div>
                <div class="col-md-5">
                    <label for="akhir" class="form-label">Tanggal Akhir</label>
                    <input type="date" id="akhir" name="akhir" class="form-control" required>
                </div>
                <div class="col-md-2 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary w-100">Cetak PDF</button>
                </div>
            </div>
        </form>
    </div>


    <!-- Riwayat transaksi yang sudah dikonfirmasi -->
    <div class="mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white text-center">
                Laporan Pembayaran
            </div>
            <div class="card-body">
                <table class="table table-bordered text-center">

            <thead class="table table-bordered text-center">
                <tr>
                    <th>No</th>
                    <th>Nama Kamar</th>
                    <th>Nama Penghuni Kos</th>
                    <th>Total Biaya</th>
                    <th>Status</th>
                    <th>Foto Bukti</th>
                    <th>Tanggal Konfirmasi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($bukti_riwayat) > 0): ?>
                    <?php $no = 1; foreach ($bukti_riwayat as $b): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $b['id_bukti']; ?></td>
                            <td><?= $b['nama_penghuni'] ?? 'Tidak Diketahui'; ?></td>
                            <td>Rp <?= number_format($b['jumlah'], 0, ',', '.'); ?></td>
                            <td><span class="badge bg-success">Telah Disetujui</span></td>
                            <td>
                                <?php if (!empty($b['foto_bukti'])): ?>
                                    <a href="<?= base_url('bukti_pembayaran/' . $b['foto_bukti']); ?>" data-lightbox="bukti_pembayaran_<?= $b['id_bukti']; ?>" data-title="Foto Bukti Pembayaran">
                                        <img src="<?= base_url('bukti_pembayaran/' . $b['foto_bukti']); ?>" alt="Foto Bukti" width="100" style="cursor: pointer;">
                                    </a>
                                <?php else: ?>
                                    <span class="text-muted">Tidak ada foto</span>
                                <?php endif; ?>
                            </td>
                            <td><?= date('d-m-Y', strtotime($b['tanggal'])); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7" class="text-center">Belum ada transaksi yang dikonfirmasi.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    </div>
</div>
</div>
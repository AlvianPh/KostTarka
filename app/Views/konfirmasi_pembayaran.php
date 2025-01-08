<div class="container mt-5">
    <!-- Header -->
    <h1 class="text-center">Konfirmasi Pembayaran</h1>

    <!-- Notifikasi -->
    <div class="alert alert-success mt-4 text-center" role="alert">
        Data telah disetujui!
    </div>

    <!-- Tabel -->
    <div class="table-responsive mt-4">
        <table class="table table-bordered align-middle text-center">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Kode Pembayaran</th>
                    <th>Nama Distributor</th>
                    <th>Total Biaya</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>PRF000001</td>
                    <td>PT. Sumber Waras</td>
                    <td>Rp 112.500</td>
                    <td>
                        <div>
                            <span class="badge bg-success">Telah Disetujui</span>
                        </div>
                        <div class="mt-2">
                            <a href="#" class="btn btn-sm btn-primary">Detail</a>
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin membatalkan?')">Batal</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>PRF000002</td>
                    <td>PT. Sumber Waras</td>
                    <td>Rp 52.000</td>
                    <td>
                        <div>
                            <span class="badge bg-warning">Menunggu Persetujuan</span>
                        </div>
                        <div class="mt-2">
                            <button class="btn btn-sm btn-success" onclick="return confirm('Setujui pembayaran ini?')">Setujui</button>
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin membatalkan?')">Batal</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
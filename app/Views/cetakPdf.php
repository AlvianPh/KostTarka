<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Keuangan</title>

    <style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
    </style>

</head>
<body>
    <h1>Laporan Keuangan</h1>
    <p>Periode: <?= $awal; ?> s/d <?= $akhir; ?></p>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Penghuni</th>
                <th>Nominal Bayar</th>
                <th>Tanggal</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($dataLaporan) && is_array($dataLaporan)): ?>
                <?php $i = 1; foreach ($dataLaporan as $laporan): ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $laporan['nama_penghuni']; ?></td>
                        <td>Rp. <?= number_format($laporan['jumlah'], 0, ',', '.'); ?></td>
                        <td><?= $laporan['tanggal']; ?></td>
                        <td>Telah Disetujui</td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" style="text-align: center;">Tidak ada data</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <h3>Total Jumlah: <?= number_format($totalJumlah, 0, ',', '.'); ?></h3>
</body>
</html>

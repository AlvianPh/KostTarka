<?= $this->include('layouts/header'); ?>

<h2>Statistik</h2>
<div class="stats">
    <div class="box">
        <h3>Daftar Penghuni</h3>
        <ul>
            <?php foreach ($penghuni as $item): ?>
                <li><?= $item ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="box">
        <h3>Daftar Kamar Terpakai</h3>
        <ul>
            <?php foreach ($kamar as $item): ?>
                <li><?= $item ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="box">
        <h3>Penghasilan Per Tahun</h3>
        <ul>
            <?php foreach ($penghasilan as $item): ?>
                <li><?= $item ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<div class="notifications">
    <h3>Notifikasi</h3>
    <ul>
        <?php foreach ($notifikasi as $notif): ?>
            <li><?= $notif ?></li>
        <?php endforeach; ?>
    </ul>
</div>

<?= $this->include('layouts/footer'); ?>
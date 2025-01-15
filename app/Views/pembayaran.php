<?php if (session()->has('errors')): ?>
    <div class="alert alert-danger">
        <ul>
            <?php foreach (session('errors') as $error): ?>
                <li><?= esc($error); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<div class="container mt-5 mb-5">
    <div class="card shadow-lg" style="max-width: 500px; margin: 0 auto; background-color: #007bff; color: #fff; border-radius: 10px;">
        <div class="card-body">
            <h3 class="text-center mb-4" style="font-weight: bold;">Pembayaran</h3>

            <form action="<?= base_url('pembayaran/prosesPembayaran'); ?>" method="POST" enctype="multipart/form-data">  

                <!-- id Kamar -->
                <div class="mb-3">
                    <label for="nomer_kamar" class="form-label" style="font-weight: bold;">Nomer Kamar</label>
                    <select name="nomer_kamar" id="nomer_kamar" class="form-control" required>
                        <option value="">-- Pilih Nomer Kamar --</option>
                        <?php foreach ($daftarKamar as $kamar): ?>
                            <option value="<?= esc($kamar['id_kamar']); ?>"><?= esc($kamar['nama_kamar']); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- Harga Kamar -->
                <div class="mb-3">
                    <label for="harga" class="form-label" style="font-weight: bold;">Harga Kamar</label>
                    <input type="text" id="harga" class="form-control" readonly>
                </div>

                <!-- Nama Penghuni -->
                <div class="mb-3">
                    <label for="nama" class="form-label" style="font-weight: bold;">Nama Penghuni</label>
                    <input type="text" name="nama_penghuni" id="nama" class="form-control" placeholder="Nama Penghuni" required>
                </div>

                <!-- Jumlah Pembayaran -->
                <div class="mb-3">
                    <label for="jumlah" class="form-label" style="font-weight: bold;">Jumlah Pembayaran</label>
                    <input type="number" name="jumlah" id="jumlah" class="form-control" placeholder="Jumlah Pembayaran" required>
                </div>

                <!-- Bukti Foto -->
                <div class="mb-3">
                    <label for="foto_bukti" class="form-label" style="font-weight: bold;">Bukti Foto</label>
                    <input type="file" name="foto_bukti" id="foto_bukti" class="form-control" required>
                </div>

                <!-- Submit Button -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-light text-primary fw-bold">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById('nomer_kamar').addEventListener('change', function () {
        const idKamar = this.value;
        console.log(idKamar)
        const hargaField = document.getElementById('harga');

        if (idKamar) {
            fetch('<?= base_url('pembayaran/getHarga'); ?>', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',
                },
                body: JSON.stringify({ id_kamar: idKamar }), // Pastikan format data sesuai
            })
            .then(response => response.json())
            .then(data => {
                console.log(data);
                hargaField.value = data.harga ? `Rp${new Intl.NumberFormat('id-ID').format(data.harga)}` : 'Harga tidak tersedia';
            })
            .catch(error => {
                console.error('Error fetching harga:', error);
                hargaField.value = 'Error fetching harga';
            });
        } else {
            hargaField.value = '';
        }
    });
</script>


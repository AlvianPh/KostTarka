<style>
        .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-img-top {
            border-bottom: 1px solid #ddd;
            max-height: 250px;
            object-fit: cover;
        }

        .add-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border: 1px dashed #007bff;
            border-radius: 8px;
            height: 270px;
            text-align: center;
        }

        .add-card i {
            font-size: 3rem;
            color: #007bff;
        }
    </style>

    <div class="container mt-3">
        <?php if (session()->getFlashdata('message')): ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('message') ?>
            </div>
        <?php endif; ?>

        <h1 class="text-center mb-5">Manajemen Kamar</h1>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            foreach ($dataKamar as $rosw) :
                $fasilitas = explode(',', $row['fasilitas']);
            ?>
                <div class="col">
                    <div class="card">
                        <img src="<?= base_url('public/images/uploads/' . $row['foto_kamar']) ?>" class="card-img-top" alt="Foto Kamar">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?= $row['nama_kamar'] ?></h5>
                            <p class="card-text">Token: <?= $row['token'] ?></p>
                            <a href="<?= base_url('/edit_kamar') ?>/<?= $row['id_kamar'] ?>" class="btn btn-primary me-2">Edit</a>
                            <a href="<?= base_url('/delete') ?>/<?= $row['id_kamar'] ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kamar ini?')">Hapus</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <!-- Add new room card -->
            <div class="col">
                <div class="add-card">
                    <i class="fas fa-plus"></i>
                    <p>Tambah Kamar</p>
                    <a href="<?= base_url('/tambah_kamar') ?>" class="btn btn-primary">Tambah Kamar</a>
                </div>
            </div>
        </div>
    </div>
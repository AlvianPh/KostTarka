<div class="d-flex vh-100 align-items-center justify-content-center">
        <div class="card text-white bg-primary shadow-lg" style="border-radius: 20px; max-width: 400px;">
            <div class="card-body p-4">
                <h2 class="text-center mb-4 fw-bold">Informasi Akun</h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-primary text-white">
                        <strong>Nama Lengkap:</strong> <span class="d-block"><?= esc(user()->nama); ?></span>
                    </li>
                    <li class="list-group-item bg-primary text-white">
                        <strong>Email:</strong> <span class="d-block"><?= esc(user()->username); ?></span>
                    </li>
                    <li class="list-group-item bg-primary text-white">
                        <strong>No. Telepon:</strong> <span class="d-block"><?= esc(user()->no_telpon); ?></span>
                    </li>
                </ul>
                <div class="d-flex justify-content-center gap-3 mt-4">
                    <a href="<?= base_url('ubah-password'); ?>" class="btn btn-light btn-lg px-4">Ubah Password</a>
                    <a href="<?= base_url('logout'); ?>" class="btn btn-light btn-lg px-4">Log Out</a>
                </div>
            </div>
        </div>
    </div>
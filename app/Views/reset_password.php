<div class="d-flex flex-column min-vh-100">
    <?= view('layouts/headerPassword') ?>
    <div class="flex-grow-1">
        <h1 class="text-center">Reset Password</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php if (session()->getFlashdata('success')): ?>
                    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
                <?php elseif (session()->getFlashdata('error')): ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
                <?php endif; ?>
                <form action="<?= base_url('reset-password') ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Reset Password</button>
                </form>
            </div>
        </div>
    </div>
    <?= view('layouts/footer') ?>
</div>
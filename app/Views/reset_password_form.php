<div class="d-flex flex-column min-vh-100">
    <?= view('layouts/headerPassword') ?>
    <div class="flex-grow-1">
        <h1 class="text-center">Reset Password</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- Pesan Error -->
                <?php if (session()->getFlashdata('error')): ?>
                    <div class="alert alert-danger">
                        <?= session()->getFlashdata('error'); ?>
                    </div>
                <?php endif; ?>

                <form method="post" action="/reset-password/process">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label for="password">Password Baru</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Ulangi Password Baru</label>
                        <input type="password" name="confirm_password" class="form-control" id="confirm_password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
                </form>
            </div>
        </div>
    </div>
    <?= view('layouts/footer') ?>
</div>
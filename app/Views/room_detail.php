<?= $this->include('layouts/headerPenghuni') ?>

<div class="container mt-5">
    <h1 class="text-center mb-4">Detail Kamar</h1>
    <div id="roomCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php foreach ($images as $index => $image): ?>
                <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                    <img src="<?= $image ?>" class="d-block w-100 slider" alt="Room Image">
                </div>
            <?php endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#roomCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#roomCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <h2 class="mb-3">Deskripsi Kamar</h2>
    <ul class="list-group">
        <?php foreach ($descriptions as $description): ?>
            <li class="list-group-item"> <?= esc($description) ?> </li>
        <?php endforeach; ?>
    </ul>
</div>

<?= $this->include('layouts/footerPenghuni') ?>
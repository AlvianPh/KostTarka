<h1 class="text-center">Manajemen Kamar</h1>

    <p class="card-text"> </p>
    <p>Tambah Kamar</p>
    <a class="btn" href="<?=base_url('/tambah_kamar')?>">Tambah</a>
            

<div class="container-fluid d-flex justify-content-around mt-5" >

                <?php
                $no = 1;
                foreach ($dataKamar as $row) :
                    $fasilitas = explode(',', $row['fasilitas']);   
                ?>
                


<div class="card" style="width: 18rem;">
  <img src="<?= base_url($row['foto_kamar']) ?>" class="card-img-top" alt=>
  <div class="card-body">
    <h5 class="card-title"><?= $row['nama_kamar'] ?></h5>
    <h5 class="card-title"><?= $row['harga'] ?></h5>
    <!--Penghuni kos <h5 class="card-title //$row['status']==1 ? 'Berpenghuni':'Kosong' ?></h5> -->
    <h5 class="card-title"><?= $row['token'] ?></h5>


    <?php foreach($fasilitas as $fasilitasItem):?>
        <li class="card-title"><?= htmlspecialchars($fasilitasItem); ?></li>
    <?php endforeach?>

    <p class="card-text"> </p>
    <a href="#" class="btn btn-primary">Edit Kamar</a>

    
  </div>
</div>

<?php endforeach; ?>

</div>

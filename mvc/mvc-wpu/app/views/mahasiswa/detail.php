<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
        <h6 class="card-subtitle mb-2 text-body-secondary"><?= $data['mhs']['email']; ?></h6>
        <p class="card-text"><?= $data['mhs']['jurusan']; ?></p>
        <!-- <a href="#" class="card-link">Card link</a> -->
        <a href="<?= BASE_URL; ?>/mahasiswa" class="card-link">kembali</a>
    </div>
</div>
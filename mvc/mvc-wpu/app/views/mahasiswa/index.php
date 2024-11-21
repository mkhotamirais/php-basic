<!-- Button trigger modal -->
<?php Flasher::flash(); ?>

<button type="button" class="tombolTambahData btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
    Tambah data mahasiswa
</button>

<div class="mt-3">
    <form action="<?= BASE_URL; ?>/mahasiswa/cari" method="post">
        <div class="input-group mb-3">
            <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Cari mahasiswa" autocomplete="off">
            <button class="btn btn-primary" type="submit" id="button-cari">Cari</button>
        </div>
    </form>
</div>

<h1>daftar mahasiswa</h1>
<div>
    <?php foreach ($data['mhs'] as $mhs) : ?>
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?= $mhs['nama']; ?>
                <div>
                    <a href="<?= BASE_URL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge text-bg-primary">
                        detail
                    </a>
                    <a href="<?= BASE_URL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="tampilModalUbah badge text-bg-warning" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>" data-baseurl="<?= BASE_URL; ?>">
                        ubah
                    </a>
                    <a href="<?= BASE_URL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge text-bg-danger" onclick="return confirm('yakin?');">
                        del
                    </a>
                </div>
            </li>
        </ul>
    <?php endforeach; ?>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="<?= BASE_URL; ?>/mahasiswa/tambah" method="post" data-baseurl="<?= BASE_URL; ?>">
                <input type="hidden" name="id" id="id">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="nama">
                    </div>
                    <div class="mb-3">
                        <label for="nrp" class="form-label">Nrp</label>
                        <input type="number" name="nrp" class="form-control" id="nrp" placeholder="nrp">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="email">
                    </div>
                    <select class="form-select form-select-md mb-3" id="jurusan" name="jurusan">
                        <option selected>Jurusan</option>
                        <option value="si">si</option>
                        <option value="ti">ti</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
            </form>

        </div>
    </div>
</div>
<?php

include "is-login.php";
include "is-operator-mahasiswa.php";

$title = "Ubah Mahasiswa";
require "layout/header.php";

if (isset($_POST["ubah"])) {
    if (update_mahasiswa($_POST) > 0) {
        echo "<script>
            alert('Data mahasiswa berhasil diubah');
            document.location.href = 'mahasiswa.php';
        </script>";
    } else {
        echo "<script>
            alert('Data mahasiswa gagal diubah');
        </script>";
    }
}

$id_mahasiswa = (int)$_GET['id_mahasiswa'];

$mahasiswa = select("SELECT * FROM mahasiswa WHERE id_mahasiswa = $id_mahasiswa")[0];

?>


<h1><?= $title; ?> <?= $mahasiswa["nama"]; ?></h1>
<form action="" method="post" enctype="multipart/form-data">

    <input type="hidden" id="id_mahasiswa" name="id_mahasiswa" value="<?= $mahasiswa["id_mahasiswa"]; ?>">
    <input type="hidden" id="foto_lama" name="foto_lama" value="<?= $mahasiswa["foto"]; ?>">

    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="nama mahasiswa" required value="<?= $mahasiswa["nama"]; ?>">
    </div>

    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label for="prodi" class="form-label">Prodi</label>
                <select name="prodi" id="prodi" class="form-select">
                    <option value="Teknik Informatika" <?= $mahasiswa["prodi"] == "Teknik Informatika" ? "selected" : ""; ?>>Teknik Informatika</option>
                    <option value="Teknik Komputer" <?= $mahasiswa["prodi"] == "Teknik Komputer" ? "selected" : ""; ?>>Teknik Komputer</option>
                    <option value="Teknik Elektro" <?= $mahasiswa["prodi"] == "Teknik Elektro" ? "selected" : ""; ?>>Teknik Elektro</option>
                </select>
            </div>
        </div>
        <div class="col">
            <div class="mb-3">
                <label for="jk" class="form-label">Jenis Kelamin</label>
                <select name="jk" id="jk" class="form-select">
                    <option value="Laki-laki" <?= $mahasiswa["jk"] == "Laki-laki" ? "selected" : ""; ?>>Laki-laki</option>
                    <option value="Perempuan" <?= $mahasiswa["jk"] == "Perempuan" ? "selected" : ""; ?>>Perempuan</option>
                </select>
            </div>
        </div>
    </div>

    <div class="mb-3">
        <label for="telepon" class="form-label">Telepon</label>
        <input type="number" class="form-control" id="telepon" name="telepon" placeholder="telepon mahasiswa" required value="<?= $mahasiswa["telepon"]; ?>">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="email mahasiswa" required value="<?= $mahasiswa["email"]; ?>">
    </div>

    <div class="mb-3">
        <label for="foto" class="form-label">Foto</label>
        <input type="file" class="form-control" id="foto" name="foto" onchange="previewImg()">
        <div class="mt-3">
            <img src="assets/img/<?= $mahasiswa["foto"]; ?>" alt="foto mahasiswa" class="img-thumbnail img-preview" width="100" height="100">
        </div>
    </div>

    <button type="submit" name="ubah" class="btn btn-primary">Ubah</button>
</form>

<script>
    function previewImg() {
        const foto = document.querySelector('#foto');
        const imgPreview = document.querySelector('.img-preview');
        const fileFoto = new FileReader();
        fileFoto.readAsDataURL(foto.files[0]);

        fileFoto.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</script>


<?php require "layout/footer.php"; ?>
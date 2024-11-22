<?php

include "is-login.php";
include "is-operator-mahasiswa.php";

$title = "Tambah Mahasiswa";
require "layout/header.php";

if (isset($_POST["tambah"])) {
    if (create_mahasiswa($_POST) > 0) {
        echo "<script>
            alert('Data mahasiswa berhasil ditambah');
            document.location.href = 'mahasiswa.php';
        </script>";
    } else {
        echo "<script>
            alert('Data mahasiswa gagal ditambah');
        </script>";
    }
}

?>


<h1><?= $title; ?></h1>
<form action="" method="post" enctype="multipart/form-data">

    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="nama mahasiswa" required>
    </div>

    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label for="prodi" class="form-label">Prodi</label>
                <select name="prodi" id="prodi" class="form-select">
                    <option value="">Pilih Prodi</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Teknik Komputer">Teknik Komputer</option>
                    <option value="Teknik Elektro">Teknik Elektro</option>
                </select>
            </div>
        </div>
        <div class="col">
            <div class="mb-3">
                <label for="jk" class="form-label">Jenis Kelamin</label>
                <select name="jk" id="jk" class="form-select">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
        </div>
    </div>

    <div class="mb-3">
        <label for="telepon" class="form-label">Telepon</label>
        <input type="number" class="form-control" id="telepon" name="telepon" placeholder="telepon mahasiswa" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="email mahasiswa" required>
    </div>

    <div class="mb-3">
        <label for="foto" class="form-label">Foto</label>
        <input type="file" class="form-control" id="foto" name="foto" onchange="previewImg()">

        <div class="mt-3">
            <img src="https://raw.githubusercontent.com/phosphor-icons/core/main/assets/regular/image.svg" alt="" class="img-thumbnail img-preview" width="100" height="100">
        </div>
    </div>

    <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
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
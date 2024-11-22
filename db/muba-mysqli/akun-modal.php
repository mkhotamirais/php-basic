<?php

require "is-login.php";

$title = "CRUD Modal";
require "layout/header.php";

$data_akun = select("SELECT * FROM akun");
$level = $_SESSION['level'];
if ($level == 2) {
    $data_akun = select("SELECT * FROM akun WHERE level = 2");
}
if ($level == 3) {
    $data_akun = select("SELECT * FROM akun WHERE level = 3");
}

if (isset($_POST["tambah"])) {
    if (create_akun($_POST) > 0) {
        echo "<script>
            alert('Data akun berhasil ditambah');
            document.location.href = 'akun-modal.php';
        </script>";
    } else {
        echo "<script>
            alert('Data akun gagal ditambah');
        </script>";
    }
}

if (isset($_POST["ubah"])) {
    if (update_akun($_POST) > 0) {
        echo "<script>
            alert('Data akun berhasil diubah');
            document.location.href = 'akun-modal.php';
        </script>";
    } else {
        echo "<script>
            alert('Data akun gagal diubah');
        </script>";
    }
}

?>

<h1><?= $title; ?></h1>
<hr />

<?php if ($_SESSION['level'] == 1): ?>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambah">
        Tambah
    </button>
<?php endif; ?>

<table class="table table-striped mt-3 display" id="example">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($data_akun as $akun) : ?>
            <tr>
                <th scope="row"><?= $no++; ?></th>
                <td><?= $akun['nama']; ?></td>
                <td><?= $akun['username']; ?></td>
                <td><?= $akun['email']; ?></td>
                <td>encrypted</td>
                <td>
                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modalUbah<?= $akun['id_akun']; ?>">
                        Ubah
                    </button>
                    <?php if ($level == 1) : ?>
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus<?= $akun['id_akun']; ?>">
                            Hapus
                        </button>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<!-- modal tambah -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h1 class="modal-title fs-5" id="modalTambahLabel">Tambah Akun</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required minlength="3">
                    </div>
                    <div class="mb-3">
                        <label for="level" class="form-label">Level</label>
                        <select name="level" id="level" class="form-select">
                            <option value="">Pilih level</option>
                            <option value="1">Admin</option>
                            <option value="2">Operator Barang</option>
                            <option value="3">Operator Mahasiswa</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php foreach ($data_akun as $akun) : ?>
    <!-- modal hapus -->
    <div class="modal fade" id="modalHapus<?= $akun['id_akun']; ?>" tabindex="-1" aria-labelledby="modalHapusLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h1 class="modal-title fs-5" id="modalHapusLabel">Hapus Akun</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post">
                    <div class="modal-body">
                        <p>Hapus <b><?= $akun['nama']; ?></b>, Apakah anda yakin?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <a href="akun-hapus.php?id_akun=<?= $akun['id_akun']; ?>" name="hapus" class="btn btn-danger">Hapus</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- modal ubah -->
    <div class="modal fade" id="modalUbah<?= $akun['id_akun']; ?>" tabindex="-1" aria-labelledby="modalUbahLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h1 class="modal-title fs-5" id="modalUbahLabel">Ubah Akun</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post">
                    <input type="hidden" id="id_akun" name="id_akun" value="<?= $akun['id_akun']; ?>">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required value="<?= $akun['nama']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required value="<?= $akun['username']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required value="<?= $akun['email']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" minlength="3">
                            <div id="emailHelp" class="form-text">input new password or leave it empty.</div>
                        </div>
                        <?php if ($level == 1) : ?>
                            <div class="mb-3">
                                <label for="level" class="form-label">Level</label>
                                <select name="level" id="level" class="form-select">
                                    <option value="1" <?= $akun['level'] == 1 ? "selected" : ""; ?>>Admin</option>
                                    <option value="2" <?= $akun['level'] == 2 ? "selected" : ""; ?>>Operator Barang</option>
                                    <option value="3" <?= $akun['level'] == 3 ? "selected" : ""; ?>>Operator Mahasiswa</option>
                                </select>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" name="ubah" class="btn btn-primary">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach ?>


<?php require "layout/footer.php"; ?>
<?php

function select($query)
{
    global $db;
    $result = mysqli_query($db, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function create_barang($data)
{
    global $db;

    $nama = strip_tags($data["nama"]);
    $jumlah = strip_tags($data["jumlah"]);
    $harga = strip_tags($data["harga"]);

    $query = "INSERT INTO barang VALUES (null, '$nama', '$jumlah', '$harga', CURRENT_TIMESTAMP())";

    return mysqli_query($db, $query);
}

function update_barang($data)
{
    global $db;

    $id_barang = strip_tags($data["id_barang"]);
    $nama = strip_tags($data["nama"]);
    $jumlah = strip_tags($data["jumlah"]);
    $harga = strip_tags($data['harga']);

    $query = "UPDATE barang SET nama = '$nama', jumlah = '$jumlah', harga = '$harga' WHERE id_barang = $id_barang";

    return mysqli_query($db, $query);
}

function delete_barang($id)
{
    global $db;

    $query = "DELETE FROM barang WHERE id_barang = $id";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function create_mahasiswa($data)
{
    global $db;

    $nama = strip_tags($data['nama']);
    $prodi = strip_tags($data['prodi']);
    $jk = strip_tags($data['jk']);
    $telepon = strip_tags($data['telepon']);
    $email = strip_tags($data["email"]);
    $foto = upload_file();

    if (!$foto) {
        return false;
    }

    $query = "INSERT INTO mahasiswa VALUES (null, '$nama', '$prodi', '$jk', '$telepon', '$email', '$foto')";

    return mysqli_query($db, $query);
}

function delete_mahasiswa($id)
{
    global $db;

    $mahasiswa = select("SELECT * FROM mahasiswa WHERE id_mahasiswa = $id")[0];
    unlink("assets/img/" . $mahasiswa["foto"]);

    $query = "DELETE FROM mahasiswa WHERE id_mahasiswa = $id";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function update_mahasiswa($data)
{
    global $db;

    $nama = strip_tags($data['nama']);
    $prodi = strip_tags($data['prodi']);
    $jk = strip_tags($data['jk']);
    $telepon = strip_tags($data['telepon']);
    $email = strip_tags($data["email"]);
    $foto_lama = strip_tags($data["foto_lama"]);
    // $foto = upload_file();
    $id = strip_tags($data["id_mahasiswa"]);

    if ($_FILES["foto"]["error"] === 4) {
        $foto = $foto_lama;
    } else {
        unlink("assets/img/$foto_lama");
        $foto = upload_file();
    }

    $query = "UPDATE mahasiswa SET nama = '$nama', prodi = '$prodi', jk = '$jk', telepon = '$telepon', email = '$email', foto = '$foto' WHERE id_mahasiswa = $id";

    return mysqli_query($db, $query);
}

function upload_file()
{
    global $db;

    $nama_file = $_FILES["foto"]["name"];
    $ukuran_file = $_FILES["foto"]["size"];
    $error = $_FILES["foto"]["error"];
    $tmp_file = $_FILES["foto"]["tmp_name"];

    $ekstensi_file_valid = ["jpg", "jpeg", "png"];
    $ekstensi_file = explode(".", $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));

    if ($error === 4) {
        echo "<script>
            alert('Pilih gambar terlebih dahulu');
            // document.location.href = 'tambah-mahasiswa.php';
        </script>";
        return false;
    }

    if (!in_array($ekstensi_file, $ekstensi_file_valid)) {
        echo "<script>
            alert('Yang anda upload bukan gambar');
            // document.location.href = 'tambah-mahasiswa.php';
        </script>";
        return false;
    }

    if ($ukuran_file > 1000000) {
        echo "<script>
            alert('Ukuran gambar terlalu besar');
            // document.location.href = 'tambah-mahasiswa.php';
        </script>";
        return false;
    }

    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;

    move_uploaded_file($tmp_file, "assets/img/$nama_file_baru");

    return $nama_file_baru;
}

function create_akun($data)
{
    global $db;

    $nama = strip_tags($data['nama']);
    $username = strip_tags($data['username']);
    $email = strip_tags($data['email']);
    $password = strip_tags($data['password']);
    $level = strip_tags($data["level"]);

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO akun VALUES (null, '$nama', '$username', '$email', '$password', '$level')";

    return mysqli_query($db, $query);
}

function delete_akun($id)
{
    global $db;

    $query = "DELETE FROM akun WHERE id_akun = $id";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function update_akun($data)
{
    global $db;

    $nama = strip_tags($data['nama']);
    $username = strip_tags($data['username']);
    $email = strip_tags($data['email']);
    $password = strip_tags($data['password']);
    $level = strip_tags($data["level"]);
    $id = strip_tags($data["id_akun"]);

    // jika password tidak diubah gunakan password lama
    if (empty($password)) {
        $query = "UPDATE akun SET nama = '$nama', username = '$username', email = '$email', level = '$level' WHERE id_akun = $id";
    } else {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $query = "UPDATE akun SET nama = '$nama', username = '$username', email = '$email', password = '$password', level = '$level' WHERE id_akun = $id";
    }
    return mysqli_query($db, $query);
}

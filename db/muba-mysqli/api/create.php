<?php

header("Content-Type: application/json");

require "../config/app.php";

$nama = $_POST["nama"];
$jumlah = $_POST["jumlah"];
$harga = $_POST["harga"];

if ($nama == null) {
    echo json_encode(["pesan" => "Nama barang tidak boleh kosong"]);
    exit;
}

$query = "INSERT INTO barang VALUES (null,'$nama', '$jumlah', '$harga', CURRENT_TIMESTAMP)";
mysqli_query($db, $query);

if ($query) {
    echo json_encode(["pesan" => "Data berhasil ditambah"]);
} else {
    echo json_encode(["pesan" => "Data gagal ditambah"]);
}

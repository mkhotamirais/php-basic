<?php

header("Content-Type: application/json; charset=UTF-8");
// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Methods: GET");
// header("Access-Control-Max-Age: 3600");
// header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require "../config/app.php";

$query = select("SELECT * FROM barang ORDER BY id_barang DESC");

echo json_encode(["data_barang" => $query]);

<?php

require_once "app/init.php";

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 5);

$cetakProduk = new CetakInfoProduk();

$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();

echo "<br><br>";


// Autran penamaan namespace: Vendor\Namespace\SubNamespace;

// new App\Service\User();
// echo "<br>";
// new App\Produk\User();
// echo "<br>";

use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;

new ProdukUser();
echo "<br>";
new ServiceUser();
echo "<br>";

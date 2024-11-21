<?php

// require_once 'app/produk/Produk.php';
// require_once 'app/produk/Komik.php';
// require_once 'app/produk/Game.php';
// require_once 'app/produk/InfoProduk.php';
// require_once 'app/produk/CetakInfoProduk.php';

// require_once 'app/produk/User.php';
// require_once 'app/service/User.php';

spl_autoload_register(function ($class) {
    $class = explode("\\", $class);
    $class = end($class);
    require_once __DIR__ . "/produk/$class.php";
});

spl_autoload_register(function ($class) {
    $class = explode("\\", $class);
    $class = end($class);
    require_once __DIR__ . "/service/$class.php";
});

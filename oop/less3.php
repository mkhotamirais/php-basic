<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Less3</title>
</head>

<body>
    <h1>PHP OOP Less3</h1>

    <h2>Abstact class</h2>
    <ul>
        <li>Tidak dapat diinstansiasi dan sebagai interface kelas lain yang jadi turunannya</li>
        <li>Memiliki minimal 1 method abstrak, sehingga kelas turunannya dipaksa untuk menggunakan method kelas abstrak</li>
        <li>Boleh memiliki property / method regular (public, protected, private) / static method (static)</li>
        <li>Alasan penggunaan: representasi ide / konsep dasar, Composition over inheritance. Salah satu cara penerapan konsep Polimorphism. Sentralisasi logic. Mempermudah pengerjaan tim</li>
        <li>Misalnya ada kelas Hewan, Kucing, dan Anjing maka Hewan adalah kelas abstraknya. Contoh lain Buah, Apel dan Jeruk maka Buah</li>
    </ul>
    <?php
    // KELAS ABSTRAK
    abstract class Hewan
    {
        protected $nama, $warna;
        public function __construct($nama, $warna)
        {
            $this->nama = $nama;
            $this->warna = $warna;
        }
        // METHOD ABSTRAK
        abstract public function call_hewan();
    }

    class Kucing extends Hewan
    {
        public function __construct($nama, $warna)
        {
            $this->nama = $nama;
        }
        public function call_hewan()
        {
            echo "Meong Meong";
        }
    }

    ?>

</body>

</html>
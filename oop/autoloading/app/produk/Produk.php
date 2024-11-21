<?php

abstract class Produk
{
    protected $judul, $penulis, $penerbit, $harga;

    protected $diskon;

    public function __construct($judul = "", $penulis = "", $penerbit = "", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function setJudul($judul)
    {
        // kamu bisa lakukan validasi di sini
        $this->judul = $judul;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }

    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }

    public function getHarga()
    {
        return $this->harga - $this->diskon / 100 * $this->harga;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    abstract function getInfo();
    abstract function getInfoProduk();
}

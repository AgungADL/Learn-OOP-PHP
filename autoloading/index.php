<?php

require_once 'App/init.php';

$produk1 = new Komik("Muck", "Agung", "Cihuy", 30000, 7);
$produk2 = new Game("Haikyu", "Sakamoto", "Hyundai", 40000, 2);

$cetakProduk = new cetakInfoProduk;
echo $cetakProduk->tambahProduk($produk1);
echo $cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

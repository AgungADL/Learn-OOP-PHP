<?php

// Jualan produk
// Komik
// Game

class Produk {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk;
// $produk1->judul = 'Naruto';

// var_dump($produk1);

// $produk2 = new Produk;
// $produk2->judul = "Muck";
// $produk2->tambahKomentar = "CIhuuyyy";

// var_dump($produk2);

$produk3 = new Produk;
$produk3->judul = "Muck";
$produk3->penulis = "Agung";
$produk3->penerbit = "Cihuy";
$produk3->harga = 30000;

$produk4 = new Produk;
$produk4->judul = "Haikyu";
$produk4->penulis = "Sakamoto";
$produk4->penerbit = "Hyundai";
$produk4->harga = 45000;

echo "Komik : " . $produk4->getLabel();
echo "<br>";
echo "Game : " . $produk3->getLabel();

?>

<!-- <?= "Game : $produk3->judul, $produk3->penulis" ?> -->
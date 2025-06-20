<?php

// Jualan produk
// Komik
// Game

class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga;

    public function __construct( $judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

class cetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (RP. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Muck", "Agung", "Cihuy", 30000);
$produk2 = new Produk("Haikyu", "Sakamoto", "Hyundai", 45000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();

$infoProduk = new cetakInfoProduk();
echo "<br>";
echo "Komik : " . $infoProduk->cetak($produk1);

?>

<!-- <?= "Game : $produk3->judul, $produk3->penulis" ?> -->
<?php

// Jualan produk
// Komik
// Game

class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $jmlJam;

    public function __construct( $judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0, $jmlJam = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->jmlJam = $jmlJam;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
}

class Komik extends Produk {
    public function getInfoProduk() {
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} halaman.";
        return $str;
    }
}

class Game extends Produk {
    public function getInfoProduk() {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->jmlJam} jam.";
        return $str;
    }
}

class cetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (RP. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Komik("Muck", "Agung", "Cihuy", 30000, 7, 0);
$produk2 = new Game("Haikyu", "Sakamoto", "Hyundai", 45000, 0, 2);

// Komik : Muck | Agung, Cihuy (RP. 30000) - 100 halaman
// Game  : Haikyu | Sakamoto, Hyundai (RP. 45000) - 50 jam

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

?>

<!-- <?= "Game : $produk3->judul, $produk3->penulis" ?> -->
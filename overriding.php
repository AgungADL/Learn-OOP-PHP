<?php

// Jualan produk
// Komik
// Game

class Produk
{
    public $judul,
    $penulis,
    $penerbit,
    $harga;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
}

class Komik extends Produk
{
    public $jmlHalaman;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0)
    {

        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;

    }

    public function getInfoProduk()
    {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} halaman.";
        return $str;
    }
}

class Game extends Produk
{
    public $jmlJam;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlJam = 0)
    {

        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlJam = $jmlJam;

    }

    public function getInfoProduk()
    {
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->jmlJam} jam.";
        return $str;
    }
}

class cetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (RP. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Komik("Muck", "Agung", "Cihuy", 30000, 7);
$produk2 = new Game("Haikyu", "Sakamoto", "Hyundai", 45000, 2);

// Komik : Muck | Agung, Cihuy (RP. 30000) - 100 halaman
// Game  : Haikyu | Sakamoto, Hyundai (RP. 45000) - 50 jam

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

?>

<!-- <?= "Game : $produk3->judul, $produk3->penulis" ?> -->
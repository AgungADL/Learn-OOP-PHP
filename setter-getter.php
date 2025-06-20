<?php

// Jualan produk
// Komik
// Game

class Produk
{
    private $judul,
    $penulis,
    $penerbit,
    $harga,
    $diskon = 0;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul( $judul ) {
        if ( !is_string($judul) ) {
            throw new Exception("Judul harus string");
        }
        $this->judul = $judul;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function setPenulis( $penulis ) {
        $this->penulis = $penulis;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function setPenerbit( $penerbit ) {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit() {
        return $this->penerbit;
    }

    public function setDiskon( $diskon ) {
        $this->diskon = $diskon;
    }

    public function getDiskon() {
        return $this->diskon;
    }

    public function setHarga( $harga ) {
        $this->harga = $harga;
    }

    public function getHarga() {
        return $this->harga - ( $this->harga * $this->diskon / 100 );
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
$produk2 = new Game("Haikyu", "Sakamoto", "Hyundai", 40000, 2);

// Komik : Muck | Agung, Cihuy (RP. 30000) - 100 halaman
// Game  : Haikyu | Sakamoto, Hyundai (RP. 45000) - 50 jam

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";

$produk2->setJudul("JudulBaru");
echo $produk2->getJudul();
echo "<br>";

$produk1->setHarga(5000);
$produk1->setDiskon(50);
echo $produk1->getHarga();
?>

<!-- <?= "Game : $produk3->judul, $produk3->penulis" ?> -->
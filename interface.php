<?php

interface infoProduk {
    public function getInfoProduk();
}

abstract class Produk
{
    protected $judul,
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

    abstract public function getInfo();
}

class Komik extends Produk implements infoProduk
{
    public $jmlHalaman;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0)
    {

        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;

    }

    public function getInfoProduk()
    {
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} halaman.";
        return $str;
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
}

class Game extends Produk implements infoProduk
{
    public $jmlJam;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlJam = 0)
    {

        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlJam = $jmlJam;

    }

    public function getInfoProduk()
    {
        $str = "Game : " . $this->getInfo() . " ~ {$this->jmlJam} jam.";
        return $str;
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
}

class cetakInfoProduk
{
    public $daftarProduk = [];

    public function tambahProduk( Produk $produk ) {
        $this->daftarProduk[] = $produk;
    }

    public function cetak()
    {
        $str = "Daftar Produk : <br>";

        foreach( $this->daftarProduk as $p ) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }

        return $str;
    }
}

$produk1 = new Komik("Muck", "Agung", "Cihuy", 30000, 7);
$produk2 = new Game("Haikyu", "Sakamoto", "Hyundai", 40000, 2);

$cetakProduk = new cetakInfoProduk;
echo $cetakProduk->tambahProduk($produk1);
echo $cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

?>
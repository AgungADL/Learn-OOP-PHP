<?php

// Jualan produk
// Komik
// Game

class Produk {
    public $jenis,
           $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $jmlJam;

    public function __construct( $jenis = "Jenis", $judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0, $jmlJam = 0){
        $this->jenis = $jenis;
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

    public function getInfoLengkap() {
        $str = "{$this->jenis} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        
        if ($this->jenis == "Komik" || $this->jenis == "komik") {
            $str .= " - {$this->jmlHalaman} Halaman.";
        } else if ($this->jenis == "Game" || $this->jenis == "game") {
            $str .= " - {$this->jmlJam} Jam.";
        }

        return $str;
    }
}

class cetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "$produk->jenis : {$produk->judul} | {$produk->getLabel()} (RP. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("komik", "Muck", "Agung", "Cihuy", 30000, 7, 0);
$produk2 = new Produk("Game", "Haikyu", "Sakamoto", "Hyundai", 45000, 0, 2);

// Komik : Muck | Agung, Cihuy (RP. 30000) - 100 halaman
// Game  : Haikyu | Sakamoto, Hyundai (RP. 45000) - 50 jam

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();

?>

<!-- <?= "Game : $produk3->judul, $produk3->penulis" ?> -->
<?php

class Game extends Produk implements InfoProduk
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
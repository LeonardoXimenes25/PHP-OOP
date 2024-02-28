<!-- 
    constructor method 

-->

<?php 

class Produk {
    public $judul, 
           $penulis, 
           $penerbit, 
           $harga;

    public function __construct($judul, $penulis, $penerbit, $harga) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}


// komik
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonem Jump", 1000);

// Games
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Company", 2000);

echo "Komik :" . $produk1->getLabel();
echo "<br>";
echo "Games : " . $produk2->getLabel();




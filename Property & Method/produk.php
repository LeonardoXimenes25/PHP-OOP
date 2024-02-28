<!-- 
    Property
    1. Merepresentasikan data/keadaan dari sebuah object
    2. Variabel yang ada di dalam object (member variable)
    3. Sama seperti variable di dalam PHP, ditambah dengan visibility di depanya

    Method
    1. Merepresentasikan perilaku dari sebuah object
    2. Function yang ada di dalam object
    3. Sama seperti function di dalam PHP, ditambah dengan visibility di depanya

    ilustrasi Mobil
    Property
    1. warna, 2. Merek, 3. Warna 4. KecepatanMaksimal, 5. Jumlah Penumpang

    Method
    1.Tambahkecepatan 2. Kurangikecepatan 3. Ganti transmisi 4. Belok kiri 5. Belok kanan

 -->

<?php 

class Produk {
    public $judul = 'judul', 
           $penulis = 'penulis', 
           $penerbit = 'penerbit', 
           $harga = 0;

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}


// komik
$produk = new Produk();
$produk->judul = 'Naruto';
$produk->penulis = 'Masashi Kishimoto';
$produk->penerbit = 'Shonem Jump';
$produk->harga = 10000;

// Games
$produk2 = new Produk();
$produk2->judul = "Uncharted";
$produk2->penulis = "Neil Druckmann";
$produk2->penerbit = "Sony Company";
$produk2->harga = 1000;

echo "Komik : " .$produk->getLabel();
echo "<br>";
echo "Games: " . $produk2->getLabel();


<?php 

class produk {
	public $judul = "judul",
		   $penulis = "penulis",
		   $penerbit = "penerbit",
		   $harga = 0;

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
} 

$produk3 = new produk();
$produk3->judul = "One Piece";
$produk3->penulis = "Ariz";
$produk3->penerbit = "Sony Computer";
$produk3->harga = 150000;

$produk4 = new produk();
$produk4->judul = "Naruto";
$produk4->penulis = "Angga";
$produk4->penerbit = "Shogakugan";
$produk4->harga = 37000;

echo "komik : " . $produk3->getLabel();
echo "<br>";
echo "game : " . $produk4->getLabel();
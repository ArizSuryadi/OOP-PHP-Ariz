<?php 

class produk {
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;

	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}
} 


$produk1 = new produk("One Piece", "Ariz","Sony Computer", 150000);
$produk2 = new produk("Naruto", "Angga", "Shogakugan", 37000);
$produk3 = new produk("Dragon Ball");
echo "komik : " . $produk1->getLabel();
echo "<br>";
echo "game : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);
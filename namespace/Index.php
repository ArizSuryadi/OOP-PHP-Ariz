<?php  

require_once 'App/init.php';

// $produk1 = new komik("One Piece", "Ariz","Sony Computer", 150000, 100);
// $produk2 = new game("Naruto", "Angga", "Shogakugan", 37000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk( $produk1 );
// $cetakProduk->tambahProduk( $produk2 );
// echo $cetakProduk->cetak();

// echo "<hr";

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();
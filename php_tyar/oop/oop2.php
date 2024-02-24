<?php
//buat class
class BangunDatar{

    //buat property/attribut
    public $Persegi = "Menghitung Luas Persegi";
    public $Lingkaran = "Menghitung Luas Persegi Panjang";
    public $Segitiga = "Menghitung Luas Lingkaran";
    public $PersegiPanjang = "Menghitung Luas segitiga";

    // buat method / function
public function persegi(){
    $sisi = 8; 
    $luas = $sisi * $sisi;
    echo "<h3>Menghitung Luas Persegi</h3>";
    echo "Rumus : sisi x sisi <br>";
    echo "sisi : $sisi <br>";
    echo "Luasnya : $luas <br>"; 
}

public function persegiPanjang(){
    $panjang = 5;
    $lebar = 4;
    $luas = $panjang * $lebar;
    echo "<h3>Menghitung Luas Persegi Panjang</h3>";
    echo "Rumus : panjang x lebar <br>";
    echo "Panjang : $panjang <br>";
    echo "Lebar : $lebar <br>";
    echo "Luasnya : $luas <br>";
}

public function Lingkaran(){
    $jariJari = 15;
    $luas = 3.14 * $jariJari * $jariJari;
    echo "<h3>Menghitung Luas Lingkaran</h3>";
    echo "Rumus : π x Jari-jari x Jari-jari <br>";
    echo "Jari-jari : $jariJari <br>";
    echo "π : 3,14 <br>";
    echo "Luas : $luas <br>";
}

public function segitiga(){
    $alas = 6;
    $tinggi = 9;
    $luas = 0.5 * $alas * $tinggi;
    $jariJari = 15;
    echo "<h3>Menghitung Luas segitiga</h3>";
    echo "Rumus : 1/2 x Alas x Tinggi <br>";
    echo "Alas : $alas <br>";
    echo "Tinggi : $tinggi <br>";
    echo "Luas : $luas <br>";
}
}

//object
$cetak = new BangunDatar();

echo $cetak->persegi();
echo "<br><hr>";
echo $cetak->persegiPanjang();
echo "<br><hr>";
echo $cetak->lingkaran();
echo "<br><hr>";
echo $cetak->segitiga();
?>

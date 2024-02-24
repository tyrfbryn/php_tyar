<?php
//buat class
class Manusia{

    //buat property/attribut
    public $nama = "Bintang";
    public $nama2 = "Reza";

    //buat method / function
    public function makan(){
        echo " $this->nama Suka makan Ayam";
    }
    public function minum(){
        echo " $this->nama2 Suka minum powerF";
    }
}

//buat object
$cetak = new Manusia();

echo $cetak->makan();
echo "<br>";
echo $cetak->minum();
?>
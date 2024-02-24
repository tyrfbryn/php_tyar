<?php

class contoh{
    public function __construct(){
        echo "Assalammualaikum Ukhti <br>";
    }

    public function perkenalan(){
        echo "Nama saya Fakhri <br>";
    }

    public function __destrucT(){
        echo "Hallo tan";
    }
}

$cetak = new contoh();

echo $cetak->perkenalan();
?>
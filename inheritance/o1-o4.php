<?php

class LaptopBaru {
    public static $pemilik;
    public static $merk;
    public static $ukuran_layar;

    public static function hidupkan_laptop()
    {
        echo "Hidupkan Laptop"; //static method => membuat method method bisa dipanggil oleh 
        // method yang berada di class yang sama tanpa perlu istansiasi class
    }

    public function matikan_laptop() 
    {
        self::hidupkan_laptop(); 
        // self:: => kata kunci untuk memanggil property atau method static
    }
}

$laptop_nur = new LaptopBaru;

// ERROR LINE !
// $laptop_nur->$pemilik = "Nur Rizky";
// $laptop_nur->$merk = "Acer";
// $laptop_nur->$ukuran_layar = "15.4inc";
// echo $laptop_nur->$pemilik;
// echo $laptop_nur->$merk;
// echo "dengan merk <b>$laptop_nur->merk</b>";
// ERROR LINE !

echo LaptopBaru::$pemilik = "NUr";
echo "<br>";
echo LaptopBaru::$merk = "Acer";
echo "<br>";
echo LaptopBaru::$ukuran_layar = "!5.2";

echo $laptop_nur->matikan_laptop();


<?php

// class yang tidak  bisa di instansiasi (tidak bisa dibuat menjadi objek) dan berperan sebagai 'kerangka dasar' bagi class turunannya
abstract class Komputer {
    abstract public function lihat_spec();
    public static function hidupkan_komputer()
    {
        echo "Hidupkan komputer";    
    }
}

class Laptop extends Komputer {
    // harus ada method = abstract method
    public function lihat_spec() 
    {
        return "Lihat spec Laptop";
    }

    public function beli_laptop() {
        return "Beli Laptop";
    }
}


$laptop_baru = new Laptop();

echo $laptop_baru->lihat_spec();
echo "<br>";
echo $laptop_baru->beli_laptop();
echo Komputer::hidupkan_komputer();
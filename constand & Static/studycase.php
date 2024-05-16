<?php 

interface Makanan {
    public function detailMenu();
    public function detailHarga(); 
}
class Risol implements Makanan  {
    public static $nama = "Risol";
    public static $harga = 20000;

    public function __construct($nama) {
        self::$nama = $nama;
    }
    public function detailMenu() 
    {
        echo "Makanan ini Namanya : " . self::$nama;
    }
    public function detailHarga() 
    {
        echo "Makanan ini : " . self::$nama . " Harganya : " . self::$harga;
    }
}

$risol = new Risol('Risol');
echo "<br>";
$risol->detailMenu();
echo "<br>";
$risol->detailHarga();
?>
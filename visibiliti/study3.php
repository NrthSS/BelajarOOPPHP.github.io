<?php

// class Laptop {
//     public $pemilik = "andi";
//     public $merk = "Lenovo";

//     public function __construct() {
//         echo "ini berasal dari Constuctor Laptop";
//         echo "<br>";
//     }

//     public function getLaptop() {
//         return "Hidupkan Laptop $this->merk punya $this->pemilik";
//     }

//     public function __destruct() {
//         echo "ini berasal dari destruct";
//     }
// }

// $pc1 = new Laptop();
// echo $pc1->getLaptop();
// echo "<br>";



// INI ADALAH LATIHAN KE 2



// class computer {
//     private $jenis_processor = "intel core i7-9834";

//     public function tampilkan_processor() {
//         echo $this->jenis_processor;
//     }
//     public function tampilkan_kedua() {
//         echo $this->jenis_processor = "intel core i9-984";
//     }
// }

// $computer_baru = new computer;
// echo $computer_baru->tampilkan_processor();

// echo "<br>";

// $computer2 = new computer;
// echo $computer2->tampilkan_kedua();



class Laptop {
    protected $pemilik = "anto";

    public function akses_pemilik()
    {
        return $this->pemilik;
    }

    public function akses_pemilik2()
    {
        return $this->pemilik;
    }
    
    protected function hidupkanLaptop()
    {
        return "Hidupkan laptop";
    }

    public function gethidupkanLaptop()
    {
        return $this->hidupkanLaptop();
    }
}

$laptopBaru = new Laptop;
echo $laptopBaru->akses_pemilik();
echo "<br>";
echo $laptopBaru->akses_pemilik2();


echo "<br>";
echo $laptopBaru->gethidupkanLaptop();
echo "<br>";
echo $laptopBaru->gethidupkanLaptop();

?>
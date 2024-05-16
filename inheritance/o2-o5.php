<?php

// Encapsulasi

class Komputer {
    private $merk = "acer";

    public function get_merk()
    {
        return $this->merk;
    }
}

$komputer = new Komputer;

echo $komputer->get_merk();
// echo $komputer->merk; //bakal Errror karena memanggil property yang bersifat private


// KEDUA

//eckapsulasi protected dan inheritens

class Computer {
    
    protected $merk = 'Acer';

    public function get_merk() 
    {
        return $this->merk;
    }

}

class Laptop extends Computer{

    public function nama_merk()
    {
        return parent::get_merk();
    }
}

$computer = new Computer;
$laptop = new Laptop;

echo "<br>";    
echo $laptop->nama_merk();

echo "<br>";
// echo $computer->get_merk(); //ini bisa kalau function nama_merk menggunakan Parent
echo $laptop->get_merk(); //ini bisa juga kalau memakai objeK Laptop
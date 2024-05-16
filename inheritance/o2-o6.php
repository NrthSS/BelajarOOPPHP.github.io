<?php

class Komputer {

    public $merk;

    public function processor()
    {
        echo "I9 - 9836HX";    
    }

    public  function get_merk()
    {
        return $this->merk;    
    }
}

class Laptop extends Komputer{
    
    public function get_processor()
    {
        return $this->processor();    
    } 
}

$komputer = new Komputer;
$laptop = new Laptop;

$komputer->merk = "Acer";
$laptop->merk = "Lenovo";

echo $komputer->merk;
echo "<br>";
echo $komputer->processor();
echo "<br>";
echo $laptop->merk;
echo "<br>";
echo $laptop->get_processor();
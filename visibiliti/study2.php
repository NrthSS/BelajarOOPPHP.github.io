<?php

class Grup {
    private $ayah = "g";
    public $ibu = "s";

    public function setNama() {
        $this->ayah;
        $this->ibu;
    }
 

    private function private(){
        $this->ibu;
    }

    public function getDisplayInfo(){
        echo "ayah: ". $this->ayah;
        echo "<br>";
        echo "ibu: " . $grup->private();
    }

}
$grup = new Grup();
$grup->getDisplayInfo();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


class Animal {
    public $nama;
    public $umur;
    public $jenisHidup;

    public function setNama($nama){
        $this->nama=$nama;
    }
    public function setJenisHidup($jenisHidup){
        $this->jenisHidup=$jenisHidup;
    }
    public function getCetak(){
        echo "Nama Animal : ". $this->nama;
        echo "<br>";
        echo "jenis hidup : ". $this->jenisHidup;
        echo "<br> ========================= <br>";
    }
}

$jerapah = new Animal();
$jerapah->setNama("Jerapah Afrika");
$jerapah->setJenisHidup("darat");
$jerapah->getCetak();

$burung = new Animal();
$burung->setNama("Burung Garuda");
$burung->setJenisHidup("Udara");
$burung->getCetak();


?>
</body>
</html>


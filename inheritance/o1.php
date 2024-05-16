<?php

class Siswa {
    public $nama;
    protected $nis;

    public function __construct($nama, $nis) 
    {
        $this->nama = $nama;
        $this->nis = $nis;
    }

    public function getNis() 
    {
        return $this->nis;
    }
}

$siswa = new Siswa('Udin', '1230945');

echo $siswa->nama;
echo "<br>";
echo $siswa->getNis();
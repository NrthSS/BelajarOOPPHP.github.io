<?php


class Kelas {
    public $nama;
    public $rombel;
    protected $nis;

    public function set_ambil()
    {
        $this->nama = $_GET;
        $this->rombel = $_GET;
        $this->nis = $_GET;
    }

    public function get_identitas() 
    {
        return "Nama Siswa : " . "<br>" . @$this->nama['nama'] . "." . "<br>" . "Rombel : " . "<br>" . @$this->rombel['rombel'] . "." . "<br>".  "Nis : " . "<br>" . @$this->nis['nis'] . "-";    
    }
}

class Rayon extends Kelas {
    public function set_pickup() 
    {
        parent::set_ambil();
        $this->rayon = $_GET;
    }

    public function get_pic() 
    {
        return parent::get_identitas() . "<br>" . "Rayon : " . "<br>" . @$this->rayon['rayon'];
    }
}



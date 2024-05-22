<?php 

class Rental {
    public  $diskon;
    private $sportBike,
            $touringBike,
            $dirtBike,
            $caferacer;
    protected $ppn;
    private $listmember = 'nur, ciyat, fikri, udin, cahyo' ;

    function __construct()
    {
        $this->ppn = 10000;
    }

    public function setHarga($jenis1, $jenis2, $jenis3, $jenis4)
    {
        $this->sportBike = $jenis1 ;
        $this->touringBike = $jenis2 ;
        $this->dirtBike = $jenis3 ;
        $this->caferacer = $jenis4 ;
    }

    public function getHarga()
    {
        $data["sportbike"] = $this->sportBike;
        $data["touringbike"] = $this->touringBike;
        $data["dirtbike"] = $this->dirtBike;
        $data["caferacer"] = $this->caferacer;
        return $data;
    }

    public function setMember()
    {
        in_array($this->$pengguna, $this->listmember);
            if ($this->pengguna === $this->listmember) {
                $this->diskon = 0.05;
                echo "Dia sebagai member mendapat diskon";
            }else {
                $this->diskon = 0;
                echo "Hanya Pengguna Tidak Mendapat Diskon";
            }
            return $this->diskon;
    }
}

class pros extends Rental {
    public function hargaRental()
    {
        $dataHarga = $this->getHarga();
        $hargaRental = $dataHarga[$this->jenis] * $this->waktu;
        $hargaPPN = $hargaRental * $this->ppn - $this->setMember();
        $hargaAkhir = $hargaRental + $hargaPPN;
        return $hargaAkhir;
    }

    public function cetak() 
    {
        echo "<center>";
        echo "Dia " .  $this->pengguna  . "Sebagai" . $this->setMember() . "<br>";
        echo "Jenis Motor Yang disewa " . $this->jenis . "<br>";
        echo "besar biaya yang harus dibayar" . $this->hargaRental();
        echo "</center>";
    }
}

?>
<?php 

class Rental {
    public  $pengguna,
            $diskon,
            $harga,
            $waktu;
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
        $this->dirtBike = $jenis4 ;
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
}

class pros extends Rental {
    public function hargaRental()
    {
        $dataHarga = $this->getHarga();
        $hargaRental = dataHarga * $this->waktu;
        $hargaPPN = $hargaRental * $this->ppn;
        $hargaAkhir = $hargaRental + $hargaPPN;
    }

    public function cetak() 
    {
        echo "<center>";
        echo "<p>". $this->nama ."</p>" . $this->getMember();
        echo "Jenis Motor Yang disewa" . $this->jenis;
        echo "Harga rental perhari" . $this->setHarga();
        echo "besar biaya yang harus dibayar" . number_format($this->hargaAkhir(), 0, '', '.');
        echo "</center>";
    }
}

?>
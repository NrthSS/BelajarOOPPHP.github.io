<?php

class Barang {
    private
            $namaBarang,
            $harga = 1000;
           

    public function set_harga($namaBarang, $harga = 1000000)
    {
        $this->namaBarang = $namaBarang;
        $this->harga = $harga;
    }

    public function get_harga() 
    {
        echo "nama barang ini adalah : " . $this->namaBarang  ."<br>". "Harganya : " . $this->harga;    
    }
}

$barang = new Barang;

$barang->set_harga('Buku');
echo $barang->get_harga();
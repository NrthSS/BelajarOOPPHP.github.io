<?php

class Office {
    private $meetingRoom; // Properti private yang mewakili ruangan pertemuan
    private $storageRoom; // Properti private yang mewakili ruangan penyimpanan
    
    public function __construct() {
        // Pada saat kantor dibuat, ruangan akan tercipta dengan beberapa dokumen dan barang-barang
        $this->meetingRoom = "Meeting minutes, projector"; // Ruangan pertemuan memiliki beberapa dokumen dan perangkat
        $this->storageRoom = "Confidential files, valuable equipment"; // Ruangan penyimpanan memiliki berkas rahasia dan barang berharga
    }
    
    // Getter untuk mendapatkan barang-barang di ruangan pertemuan
    public function getMeetingRoomItems() {
        return $this->meetingRoom;
    }
    
    // Getter untuk mendapatkan barang-barang di ruangan penyimpanan
    public function getStorageRoomItems() {
        return $this->storageRoom;
    }
}

// Membuat sebuah kantor
$office = new Office();

// Mengakses dan mencetak barang-barang di ruangan pertemuan
echo "Barang-barang di ruangan pertemuan:<br>";
echo $office->getMeetingRoomItems() . "<br>";

// Mengakses dan mencetak barang-barang di ruangan penyimpanan (akan menimbulkan kesalahan karena properti private)
echo "<br>Barang-barang di ruangan penyimpanan:<br>";
echo $office->storageRoom; // Ini akan menimbulkan error karena properti storageRoom bersifat private

 ?>


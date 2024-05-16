<?php 

include "proses.php";

if (isset($_POST['rental'])) {

$cetak = new pros();
$cetak->setHarga(100000, 20000, 80000, 90000);
$cetak->setHarga();
$cetak->jenis = $_POST['jenis'];
$cetak->nama = $_POST['nama'];
$cetak->hargaRental();

$cetak->cetak();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor</title>
    <!-- Link Ke Css -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Rental Motor</h1>

        <form action="" method="POST">
            <table cellspacing="0">
                <tr>
                    <th>
                        <label for="pengguna">Nama Pelanggan </label>
                    </th>
                    <td>
                        <p> : </p><input type="text" name="pengguna" id="pengguna" placeholder="Masukan Nama">
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="">Lama Waktu Rental(Perhari) </label>
                    </th>
                    <td>
                    <p> : </p><input type="number" name="waktu" id="waktu" placeholder="Isi Oleh angka">
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="">Jenis Motor</label>
                    </th>
                    <td>
                        <p> : </p>
                        <select name="jenis" id="jenis">
                            <option disable selected> --- Pilih Jenis Motor ---</option>
                            <option value="sportbike">Sport Bike</option>
                            <option value="touringbike">Touring Bike</option>
                            <option value="dirtbike">Dirt Bike</option>
                            <option value="caferacer">Cafe Racer</option>
                        </select>
                    </td>
                </tr>
            </table>
            <button type="submit" name="rental" id="rental">Rental</button>
        </form>
</div>

</body>
</html>
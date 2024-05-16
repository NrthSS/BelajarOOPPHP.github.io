
<?php 

    include "proses.php";

    $proses = new Beli();
    $proses->setHarga(15420, 16130, 18310, 16510);

?> 

<?php if (isset($_POST['beli']) && !empty($_POST['jumlah']) && !empty($_POST['jenis']))  : ?>
    <p>
        <?php $proses->jenis = $_POST['jenis']; ?> 
        <?php $proses->jumlah = $_POST['jumlah']; ?> 
        <?php $proses->hargaBeli(); ?>

        <?php $proses->cetak(); ?> 
    </p>
<?php endif; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahan Bakar</title>
    <!-- Link Css  -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        
        <h1>Bahan Bakar</h1>

            <form action="" method="POST">
                <label for="jumlah">Masukan Jumlah Liter</label>
                <br>
                <input type="text" name="jumlah" id="jumlah">
                <br>
                <br>
                <label for="jenis">Pilih Tipe Bahan bakar</label>
                <br>
                <select name="jenis" id="jenis">
                    <option disable selected > ---Pilih Shell---- </option>
                    <option value="SSuper">Shell Super</option>
                    <option value="SVpower">Shell VPower</option>
                    <option value="SVpowerDiesel">Shell Vpower Diesel</option>
                    <option value="SVpowerNitro">Shell VPower NItro</option>
                </select>
                <br>
                <br>
                <button type="submit" name="beli">Beli</button>
            </form>
    </div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Beda</title>
    <!-- Link untuk menyambungkan ke CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container-all">
    <!-- Container untuk Bagian Form -->
    <div class="container-form">
        <!-- Form -->
        <form action="" method="GET">
            <!-- container Untuk bagian label & Input -->
            <div class="container-input">
                <!-- class untuk mengatur style input -->
                <div class="content">
                    <label for="nama">Masukan Nama :</label>
                    <input type="text" name="nama" id="nama" placeholder="Masukan Nama">
                </div>
                <div class="content">
                    <label for="rombel">Masukan Rombel :</label>
                    <input type="text" name="rombel" id="rombel" placeholder="Rombel">
                </div>
                <div class="content">
                    <label for="nis">Nis :</label>
                    <input type="number" name="nis" id="nis" placeholder="Nis">
                </div>  
                <div class="content">
                    <label for="rayon">Rayon</label>
                    <input type="text" name="rayon" id="rayon" placeholder="Rayon">
                </div> 
            </div>
            <button type="submit">Click Here</button>
        </form>
    </div>
    <!-- Container untuk OUTPUT dari PHP -->
    <div class="container-php">
        <?php
        
        require "proses.php";

        $kelas = new Kelas;
        $rayon = new Rayon;

        while ($input = fgets(STDINS)) {
             $rayon->set_pickup($input);
            }
            
        // $rayon->set_pickup();
        echo $rayon->get_pic();

        ?>
    </div>
</div>

</body>
</html>

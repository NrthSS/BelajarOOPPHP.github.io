<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    
</head>
<body>   

<!-- Container page ke 1 -->
<div class="container-page-one">

    <!-- Bagian Judul halaman -->
    <h1> - Masukan Data Siswa - </h1>

    <!-- Divisi Label dan Input -->
    
        <form action="" method="POST">

            <div class="input-data">
                <div class="c-1">
                    <label for="nama" >Nama :</label>
                    <input type="text" name="nama" id="nama" placeholder="Nama ">
                </div>
                <div class="c-1">
                    <label for="nis">Nis :</label>
                    <input type="number" name="nis" id="nis" placeholder="Nis">
                </div>
                <div class="c-1">
                    <label for="rayon">Rayon :</label>
                    <input type="text" name="rayon" id="rayon" placeholder="Rayon">
                </div>
            </div>
    

            <!-- Button untuk Tambah,  Cetak, dan hapus -->
            <div class="container-button-p1">
                <button type="submit" class="but on1"><i class="fa-solid fa-user-plus"></i>Tambah</button>
                <button type="submit" class="but on2" name="after" id="after" ><i class="fa-solid fa-user-minus"></i>Cetak</button>
                <button type="submit" class="but on3" name="after" id="after"><i class="fa-solid fa-trash"></i>Hapus</button>
            </div>

            
            
        </form>
</div>

</body>
</html>

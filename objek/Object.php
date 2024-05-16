<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php



class Siswa {
    public $nama;

    public function  __construct($nama) {
        return $this->nama = $nama;
    }
    public function getNama(){
        return $this->nama;
    }

}


$laptop1 = new Siswa("anto");
$laptop2 = new Siswa("udin");
$laptop3 = new Siswa("Rahkha");

echo "laptop 1 milik : ". "<b>" .  $laptop1->getNama() . "</b>";
echo "<br>";
echo "laptop 2 Milik : ". "<b>" . $laptop2->getNama() . "</b>";
echo "<br>"; 
echo "laptop 3 Milik : ". "<b>" . $laptop3->getNama() . "</b>";

?>
</body>
</html>




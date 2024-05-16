<?php 

interface Hewan {
    public function suara();
    public function makanan();
}
class MakhlukHidup {
    public function intro() 
    {
        return "termasuk makhluk hidup";
    }
}

class Harimau extends MakhlukHidup implements Hewan {
    public function suara() 
    {
        return "roar";
    }
    public function makanan() 
    {
        return "Daging";
    }
}

$harimau = new Harimau;

echo $harimau->intro();
echo "<br>";
echo $harimau->suara();
echo "<br>";
echo $harimau->makanan();

?>
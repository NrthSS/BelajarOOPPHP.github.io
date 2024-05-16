<?php 

class Web {
    const NAMA_WEB = "myweb.com";
    const OWNER = "BOMBOCLAT";
    const MY_SCHOOL = 'wikrama';

    public function getSchool()
    {
        return self::MY_SCHOOL;
    }
}

$new = new Web();
$b = new Web();
// dari Objek WEB
echo $new->NAMA_WEB = "vintu.com";
echo "<br>";
echo Web::NAMA_WEB;
echo "<br>";
echo Web::OWNER;

// Dari Object B
echo "<br>";
echo $b->getSchool();


?>
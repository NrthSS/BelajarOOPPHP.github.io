<?php 

// class Web {
//     public static $title = 'my Page';

//     public function changeTitle() 
//     {
//         self::$title = 'My Page2';
//         return self::$title;
//     }

//     public function changeTitle2() 
//     {
//         return self::$title;
//     }
// }
// class YourWeb extends Web {
//     public function changeTitle()
//     {
//         self::$title = 'Your Page';
//         return self::$title;
//     }

// }

// echo Web::$title;
// echo "<br>";

// $result = new Web();
// echo $result->changeTitle() . "<br>";
// echo $result->changeTitle2() . "<br>";
// $result2 = new YourWeb();
// echo $result2->changeTitle() . "<br>";
// echo $result2->changeTitle2();



class Web {
    protected static $title = "First Page";

    public static function getTitlePage()
    {
        echo "Nama halaman ini adalah " . self::$title;
    }
}
class OtherClass extends Web {
    public function __construct()
    {
        Web::getTitlePage();
    }
    public function getTitle()
    {
        return Web::$title;
    }
}

$otherClass = new OtherClass();
echo "<br>";
echo $otherClass->getTitle();
?>
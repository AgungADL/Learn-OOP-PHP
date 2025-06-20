<?php 

// class contohStatic {
//     public static $angka = 1;

//     public static function sayHello() {
//         return "Hallo " . self::$angka++ . " Kali.";
//     }
// }

// echo contohStatic::$angka;
// echo "<br>";
// echo contohStatic::sayHello();
// echo "<hr>";
// echo contohStatic::sayHello();


class contoh {
    public static $angka = 1;

    public function sayHello() {
        return "Hallo " . self::$angka++ . " kali. <br>";
    }
}

$obj = new contoh;
echo $obj->sayHello();
echo $obj->sayHello();
echo $obj->sayHello();

echo "<hr>";

$obj2 = new contoh;
echo $obj2->sayHello();
echo $obj2->sayHello();
echo $obj2->sayHello();

?>
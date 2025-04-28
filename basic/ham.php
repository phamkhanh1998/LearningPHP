<?php

    $a = 10;

    if(isset($a)) {
        echo "Biến a tồn tại <br>";
    }
    else {
        echo "Biến a không tồn tại <br>";
    }

    function ham() {
        echo "Hello World <br>";
    }

    ham();

    function myName($name) {
        echo "Hello $name <br>";
    }

    myName("Khanh");

    function phepcong(int $a, int $b) {
        $tong = $a + $b;
        return $tong;
    }

    echo phepcong(10,5);

?>
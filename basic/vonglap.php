<?php

    for($i = 0; $i < 10; $i++) {
        echo "Number: " . "$i<br>";
    }

    $i = 1;

    while($i < 10) {
        echo "Number: " . "$i<br>";
        $i++;
    }

    $a = 1;
    do {
        echo "Number: " . "$a<br>";
        $a++;
    }while($a < 10);

    $ten = array("java", "python", "php");

    foreach($ten as $value) {
        echo "$value<br>";
    }

    echo $ten[2];

?>
<?php

    $program = array("Java", "Python", "PHP", "C#");

    echo $program[1] . "<br>";

    for($i = 0; $i < count($program); $i++) {
        echo $program[$i] . "<br>";
    }

    $info = array("Khanh" => 1998, "Thuy" => 2000, "Thu" => 1989);

    echo $info['Khanh'] . "<br>";

    $myArr = array("Khánh", "Nguyên", "Châu");

    $chuoi = implode("---", $myArr);

    var_dump($myArr);


?>
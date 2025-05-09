<?php

    echo readfile("file.txt");

    echo "<br>";

    $myfile = fopen("file.txt","r") or die ("Error"); // open file
    echo fread($myfile, filesize("file.txt")); // read file
    fclose($myfile); // close file

    echo "<br>";

    $createFile = fopen("newfile.txt", "w");

    echo "<br>";

?>
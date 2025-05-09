<?php
    if(isset($_POST['btn'])){
        echo $_POST['name'];
    }
?>

<form action="batsukien.php" method="post">
    Name: <input type="text" name="name">
    <input type="submit" value="Send" name="btn">
</form>
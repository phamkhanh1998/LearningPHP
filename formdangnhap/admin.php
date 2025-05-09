<?php
    session_start();

    if(!isset($_SESSION['email'])) {
        header('location:login.php');
    }
?>

<h1>This is admin page</h1>

<a href="logout.php">
    <button type="submit" name="dangxuat">Logout</button>
</a>
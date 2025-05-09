<ul>
    <li><a href="index.php?page_layout=homepage">Homepage</a></li>
    <li><a href="index.php?page_layout=products">Products</a></li>
    <li><a href="index.php?page_layout=contact">Contact</a></li>
    <li><a href="index.php?page_layout=cart">Cart</a></li>
</ul>

<?php
    if(isset($_GET['page_layout'])) {
        switch($_GET['page_layout']) {
            case 'homepage';
            include "homepage.php";
            break;

            case 'products';
            include "products.php";
            break;

            case 'contact';
            include "contact.php";
            break;

            case 'cart';
            include "cart.php";
            break;
        }
    }
?>
<?php

session_start();

$connect = mysqli_connect("localhost", "shop_adm", "1234", "shop");

if(isset($_POST['add'])) {

    if(isset($_POST['cart'])) {

        $product_array_id = array_colum($_SESSION['cart']), 'product_id'
        if(!in_array($_GET['id'], $product_array_id)) {

            $count = count
        } 
    }
}


?>
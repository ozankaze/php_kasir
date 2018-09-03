<?php 

require_once "core/init.php";

$id = $_GET['id'];

if( isset($_GET['id']) ) {
    global $link;
    
    $query = "DELETE FROM `barang` WHERE `id` = $id";

    if( mysqli_query($link, $query) ) 
    {
        header("Location: barang.php");
    }
}

// var_dump($query);die();

<?php 

require_once "core/init.php";

$id = $_GET['id'];

if( isset($_GET['id']) ) {
    global $link;
    
    $query = "DELETE FROM `kategori_barang` WHERE `id` = $id";

    if( mysqli_query($link, $query) ) 
    {
        header("Location: kategori.php");
    }
}

// var_dump($query);die();

<?php


function create_kategori( $kategori ) 
{
    global $link;

    $kategori = mysqli_real_escape_string($link, $kategori);

    $result = "INSERT INTO `kategori_barang` (`nama_kategori`) VALUES ( '$kategori' )";

    // var_dump($result);

    if( mysqli_query($link, $result) ) 
    {
        header("Location: kategori.php");
    }
}

function kategori_edit( $kategori, $id )
{
    global $link;

    $kategori = mysqli_real_escape_string($link, $kategori);

    $result = "UPDATE `kategori_barang` SET `nama_kategori` = " . " '".$_POST['nama_kategori']."' " . " WHERE id='$id' ";

    // var_dump($result);die();

    if( mysqli_query($link, $result) ) 
    {
        header("Location: kategori.php");
    }
}
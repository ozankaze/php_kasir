<?php


function create_barang( $nama_barang, $stok, $modal, $untung, $id_kategori )
{
    global $link;

    $nama_barang = mysqli_real_escape_string($link, $nama_barang);
    $stok = mysqli_real_escape_string($link, $stok);
    $modal = mysqli_real_escape_string($link, $modal);
    $untung = mysqli_real_escape_string($link, $untung);
    $id_kategori = mysqli_real_escape_string($link, $id_kategori);

    $result = "INSERT INTO `barang` (`nama_barang`, `stok`, `modal`, `untung`, `id_kategori`) VALUES ( '$nama_barang', '$stok', '$modal', '$untung', '$id_kategori' )";

    // var_dump($result);die();

    if( mysqli_query($link, $result) ) 
    {
        header("Location: barang.php");
    }
}

function update_stok( $stok, $id )
{
    global $link;

    $stok = mysqli_real_escape_string($stok);

    $result = "UPDATE `barang` SET `stok` = '$_POST[stok]' WHERE `id` = '$id'";

    // var_dump($result);die();

    if( mysqli_query($link, $result) ) 
    {
        header("Location: barang.php");
    }

}

function update_barang($nama_barang, $stok, $modal, $untung, $id_kategori, $id)
{
    global $link;

    $nama_barang = mysqli_real_escape_string($link, $nama_barang);
    $stok = mysqli_real_escape_string($link, $stok);
    $modal = mysqli_real_escape_string($link, $modal);
    $untung = mysqli_real_escape_string($link, $untung);
    $id_kategori = mysqli_real_escape_string($link, $id_kategori);

    $result = "UPDATE `barang`  SET `nama_barang` = '$_POST[nama_barang]',
                                    `stok` = '$_POST[stok]',
                                    `modal` = '$_POST[modal]',
                                    `untung` = '$_POST[untung]',
                                    `id_kategori` = '$_POST[id_kategori]' WHERE `id` = '$id'";

    // var_dump($result);die();

    if( mysqli_query($link, $result) ) 
    {
        header("Location: barang.php");
    }
}

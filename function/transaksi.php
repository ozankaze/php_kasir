<?php

function create_transaksi( $nmKategori, $kdTransaksi, $idBarang, $hjualBarang, $tBarang )
{

    global $link;

    $nmKategori = mysqli_real_escape_string($link, $nmKategori);
    $kdTransaksi = mysqli_real_escape_string($link, $kdTransaksi);
    $idBarang = mysqli_real_escape_string($link, $idBarang);
    $hjualBarang = mysqli_real_escape_string($link, $hjualBarang);
    $tBarang = mysqli_real_escape_string($link, $tBarang); 

    $query = "INSERT INTO `transaksi` (`tanggal`, `kode_transaksi`, `id_barang`, `harga_jual_perbarang`, `total_barang`) VALUES ('$nmKategori', '$kdTransaksi', '$idBarang', '$hjualBarang', '$tBarang')";

    // var_dump($query);die();

    if( mysqli_query($link, $query) )
    {
        header("Location: transaksi.php");
    }

}
<?php

require_once "core/init.php";
require_once "view/header.php";

$query = "SELECT * FROM `transaksi`";
$result = mysqli_query($link, $query);

// var_dump($result);die();

?>

<button><a href="transaksi_create.php">Create</a></button><br>
<br>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Kode Transaksi</th>
        <th scope="col">Id Barang</th>
        <th scope="col">Harga Jual Barang</th>
        <th scope="col">Total Barang</th>
        <th scope="col">Total Semua Harga</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <?php while( $row = mysqli_fetch_assoc($result) ) : ?> 
      <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['tanggal'] ?></td>
        <td><?php echo $row['kode_transaksi'] ?></td>
        <td><?php echo $row['id_barang'] ?></td>
        <td><?php echo $row['harga_jual_perbarang'] ?></td>
        <td><?php echo $row['total_barang'] ?></td>
        <td><?php echo $row['harga_jual_perbarang'] * $row['total_barang'] ?></td>
        <td>
            <button><a href="kategori_edit.php?id=<?php echo $row['id'] ?>">Edit</a></button>
            <button><a href="kategori_delete.php?id=<?php echo $row['id'] ?>">Delete</a></button>
        </td>
      </tr>
    </tbody>
    <?php endwhile ?>
</table> 







<?php require_once "view/footer.php"; ?>
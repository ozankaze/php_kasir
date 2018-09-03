<?php

require_once "core/init.php";
require_once "view/header.php";

$query = "SELECT * FROM `barang`";
$result = mysqli_query($link, $query);

// var_dump($result);die();

?>

<button><a href="barang_create.php">Create</a></button><br>
<br>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Stok</th>
        <th scope="col">Harga</th>
        <th scope="col">Update Stok</th>
      </tr>
    </thead>
    <tbody>
    <?php while( $row = mysqli_fetch_assoc($result) ) : ?> 
      <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['nama_barang'] ?></td>
        <td><?php echo $row['stok'] ?></td>
        <td><?php echo $row['modal'] + $row['untung'] ?></td>
        <td>
            <button><a href="barang_update_stok.php?id=<?php echo $row['id'] ?>">Update Stok</a></button>
            <button><a href="barang_edit.php?id=<?php echo $row['id'] ?>">Edit</a></button>
            <button><a href="barang_delete.php?id=<?php echo $row['id'] ?>">Delete</a></button>
        </td>
      </tr>
    </tbody>
    <?php endwhile ?>
</table> 







<?php require_once "view/footer.php"; ?>
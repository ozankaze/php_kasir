<?php

require_once "core/init.php";
require_once "view/header.php";

$query = "SELECT * FROM `kategori_barang`";
$result = mysqli_query($link, $query);

// var_dump($result);die();

?>

<button><a href="kategori_create.php">Create</a></button><br>
<br>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nama Barang</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <?php while( $row = mysqli_fetch_assoc($result) ) : ?> 
      <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['nama_kategori'] ?></td>
        <td>
            <button><a href="kategori_edit.php?id=<?php echo $row['id'] ?>">Edit</a></button>
            <button><a href="kategori_delete.php?id=<?php echo $row['id'] ?>">Delete</a></button>
        </td>
      </tr>
    </tbody>
    <?php endwhile ?>
</table> 







<?php require_once "view/footer.php"; ?>
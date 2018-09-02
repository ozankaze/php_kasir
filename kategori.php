<?php

require_once "core/init.php";
require_once "view/header.php";

$query = "SELECT * FROM `kategori_barang`";
$result = mysqli_query($link, $query);

// var_dump($result);die();

?>

<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nama Barang</th>
      </tr>
    </thead>
    <tbody>
    <?php while( $row = mysqli_fetch_assoc($result) ) : ?> 
      <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['nama_kategori'] ?></td>
      </tr>
    </tbody>
    <?php endwhile ?>
</table> 







<?php require_once "view/footer.php"; ?>
<?php

require_once "core/init.php";
require_once "view/header.php";

$id = $_GET['id'];

$query = "SELECT * FROM `barang` WHERE `id`= '$id'";
$result = mysqli_query($link, $query);

if( isset($_POST['submit']) ) {
    // echo 'aww';
    $stok = $_POST['stok'];

    // var_dump($stok);die();
    
    update_stok( $stok, $id );
}

?>

<form method="POST">

    <div class="form-group">
        <label for="stok">Stok</label>
        <?php while( $row = mysqli_fetch_assoc($result) ) : ?> 
            <input name="stok" type="text" class="form-control" id="stok" value="<?= $row['stok'] ?>">
        <?php endwhile ?>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>



<?php require_once "view/footer.php"; ?>
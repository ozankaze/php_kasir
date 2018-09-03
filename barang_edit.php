<?php

require_once "core/init.php";
require_once "view/header.php";

$query_barang = "SELECT * FROM `kategori_barang`";
$result_barang = mysqli_query($link, $query_barang);

$id = $_GET['id'];

$query = "SELECT * FROM `barang` WHERE `id`= '$id'";
$result = mysqli_query($link, $query);

if( isset($_POST['submit']) ) {
    // echo 'aww';
    $nama_barang = $_POST['nama_barang'];
    $stok = $_POST['stok'];
    $modal = $_POST['modal'];
    $untung = $_POST['untung'];
    $id_kategori = $_POST['id_kategori'];

    // var_dump($id_kategori);die();
    
    update_barang($nama_barang, $stok, $modal, $untung, $id_kategori, $id);

    // var_dump($stok);die();
    
}

?>

<form method="POST">
    <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
        <div class="form-group">
            <label for="nama barang">Nama Barang</label>
            <input name="nama_barang" type="text" class="form-control" id="nama barang" 
            value="<?php echo $row['nama_barang'] ?>">
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <input name="stok" type="text" class="form-control" id="stok" value="<?php echo $row['stok'] ?>">
        </div>
        <div class="form-group">
            <label for="modal">Modal</label>
            <input name="modal" type="text" class="form-control" id="modal" value="<?php echo $row['modal'] ?>">
        </div>
        <div class="form-group">
            <label for="untung">Untung</label>
            <input name="untung" type="text" class="form-control" id="untung" value="<?php echo $row['untung'] ?>">
        </div>
        <div class="form-group">
            <label for="judul">Nama Kategori</label> <br>
            <select name="id_kategori" id="" class="custom-select col-4">
                <?php while( $row = mysqli_fetch_assoc($result_barang) ) : ?>
                    <option value="<?php echo $row['id'] ?>">
                            <?php echo $row['nama_kategori'] ?>
                    </option>
                <?php endwhile ?>    
            </select>
            
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    <?php endwhile ?>   
</form>



<?php require_once "view/footer.php"; ?>
<?php

require_once "core/init.php";
require_once "view/header.php";

$query = "SELECT * FROM `kategori_barang`";
$result = mysqli_query($link, $query);

if( isset($_POST['submit']) ) {
    // echo 'aww';
    $nama_barang = $_POST['nama_barang'];
    $stok = $_POST['stok'];
    $modal = $_POST['modal'];
    $untung = $_POST['untung'];
    $id_kategori = $_POST['id_kategori'];

    // var_dump($id_kategori);die();
    
    create_barang($nama_barang, $stok, $modal, $untung, $id_kategori);
}

?>

<form method="POST">
    <div class="form-group">
        <label for="nama barang">Nama Barang</label>
        <input name="nama_barang" type="text" class="form-control" id="nama barang" placeholder="nama barang">
    </div>
    <div class="form-group">
        <label for="stok">Stok</label>
        <input name="stok" type="text" class="form-control" id="stok" placeholder="stok">
    </div>
    <div class="form-group">
        <label for="modal">Modal</label>
        <input name="modal" type="text" class="form-control" id="modal" placeholder="modal">
    </div>
    <div class="form-group">
        <label for="untung">Untung</label>
        <input name="untung" type="text" class="form-control" id="untung" placeholder="untung">
    </div>
    <div class="form-group">
        <label for="judul">Nama Kategori</label> <br>
        <select name="id_kategori" id="" class="custom-select col-4">
            <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
                <option value="<?php echo $row['id'] ?>">
                        <?php echo $row['nama_kategori'] ?>
                </option>
            <?php endwhile ?>    
        </select>
        
    </div>

    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>



<?php require_once "view/footer.php"; ?>
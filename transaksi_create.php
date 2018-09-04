<?php

require_once "core/init.php";
require_once "view/header.php";

$query_barang = "SELECT * FROM `barang`";
$result_barang = mysqli_query($link, $query_barang);

if( isset($_POST['submit']) ) {
    // echo 'aww';
    $nmKategori = $_POST['tanggal'];
    $kdTransaksi = $_POST['kode_transaksi'];
    $idBarang = $_POST['id_barang'];
    $hjualBarang = $_POST['harga_jual_perbarang'];
    $tBarang = $_POST['total_barang'];
    // $tSemuaHarga = $_POST['total_semua_harga'];

    // var_dump($kategori);die();
    
    create_transaksi( $nmKategori, $kdTransaksi, $idBarang, $hjualBarang, $tBarang );
}

?>

<form method="POST">
    <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <input name="tanggal" type="date" class="form-control" id="tanggal" placeholder="tanggal">
    </div>

    <div class="form-group">
        <label for="kode transaksi">Kode Transaksi</label>
        <input name="kode_transaksi" type="text" value="<?php echo rand(1, 10000) . "TAMVAN" ; ?>" class="form-control" id="kode transaksi" placeholder="kode transaksi">
    </div>

    <div class="form-group">
        <label for="judul">Nama Kategori</label> <br>
        <select name="id_barang" id="" class="custom-select col-4">
            <?php while( $row = mysqli_fetch_assoc($result_barang) ) : ?>
                <option value="<?php echo $row['id'] ?>">
                        <?php echo $row['id'] ?>
                </option>
            <?php endwhile ?>    
        </select>
        
    </div>

    <div class="form-group">
        <label for="harga barang">Harga Jual Barang</label>
        <input name="harga_jual_perbarang" type="text" class="form-control" id="harga barang" placeholder="harga barang">
    </div>

    <div class="form-group">
        <label for="total barang">Total Barang</label>
        <input name="total_barang" type="text" class="form-control" id="total barang" placeholder="total barang">
    </div>

    <!-- <div class="form-group">
        <label for="total semua harga">Total Semua Harga</label>
        <input name="total_semua_harga" type="text" class="form-control" id="total semua harga" placeholder="total semua harga">
    </div> -->

    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>



<?php require_once "view/footer.php"; ?>
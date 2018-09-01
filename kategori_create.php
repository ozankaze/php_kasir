<?php

require_once "core/init.php";
require_once "view/header.php";

if( isset($_POST['submit']) ) {
    // echo 'aww';
    $kategori = $_POST['nama_kategori'];
    // var_dump($kategori);die();
    
    $result = create_kategori($kategori);
}

?>

<form method="POST">
    <div class="form-group">
        <label for="judul">Nama Kategori</label>
        <input name="nama_kategori" type="text" class="form-control" id="judul" placeholder="Judul">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>



<?php require_once "view/footer.php"; ?>
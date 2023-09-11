<h3 class="mt-4">Tambah galeri</h3>
<hr>
<form method="POST" action="" enctype="multipart/form-data" >
    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <label class="small mb-1">Judul</label>
            <input name="txt_judul" type=" text" class="form-control" placeholder="Masukkan Judul">
        </div>
    </div>

    <div class="form-group">
        <label class="small mb-1">Gambar</label>
        <input name="txt_gambar" type="file" class="form-control" placeholder="Masukkan Gambar">
    </div>

    <div class="form-group">
        <label class="small mb-1">Tanggal</label>
        <input name="txt_tanggal" type="date" class="form-control" placeholder="Tanggal">
    </div>

    <div class="mt-4 mb-0">
        <div class="d-grid">
            <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-block" >
        </div>
    </div>

    <?php
    if (@$_POST['simpan']){
        $judul = $_POST['txt_judul'];
        $gambar = $_FILES['txt_gambar']['name'];
        $tmp = $_FILES['txt_gambar']['tmp_name'];
        $tanggal = date("Y-m-d");
        $iduser = "1";

        mysqli_query ($k, "INSERT INTO tb_galeri(judul_galeri, gambar, tanggal_gambar) VALUES('$judul',  '$gambar', '$tanggal')");
        copy($tmp, "../img/galeri/$gambar");
        echo "<script>alert('Data Berhasil Disimpan');location='.?page=galeri'</script>";
    }
    ?>
</form>
<h3 class="mt-4">Tambah Berita</h3>
<hr>
<form method="POST" action="" enctype="multipart/form-data" >
    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <label class="small mb-1">Judul</label>
            <input name="txt_judul" type="text" class="form-control" placeholder="Masukkan Judul">
        </div>
    </div>

    <div class="form-group">
        <label class="small mb-1">Gambar</label>
        <input name="txt_gambar" type="file" class="form-control" placeholder="Masukkan Gambar">
    </div>

    <div class="form-group">
        <label class="small mb-1">Konten</label>
        <textarea name="txt_konten" cols="30" rows="10" class="form-control" placeholder="Masukkan konten"></textarea>
    </div>

    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <label class="small mb-1">Tanggal Rilis</label>
            <input name="txt_tgl_rilis"  type="date" class="form-control" placeholder="Masukkan Tanggal Rilis Game">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <label class="small mb-1">Download</label>
            <input name="txt_download"  type="text" class="form-control" placeholder="Masukkan Link Download">
        </div>
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
        $konten = $_POST['txt_konten'];
        $tgl_rilis = $_POST['txt_tgl_rilis'];
        $download = $_POST['txt_download'];
        $iduser = "1";

        mysqli_query ($k, "INSERT INTO tb_portfolio(judul_portfolio,  gambar_portfolio, konten_portfolio, tanggal_rilis, download) VALUES('$judul', '$gambar', '$konten', '$tgl_rilis', '$download')");
        copy($tmp, "../img/portfolio/$gambar");
        echo "<script>alert('Data Berhasil Disimpan');location='.?page=portfolio'</script>";
    }
    ?>
</form>
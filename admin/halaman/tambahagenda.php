<h3 class="mt-4">Tambah Agenda</h3>
<hr>
<form method="POST" action="" >
    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <label class="small mb-1">Judul</label>
            <input name="txt_judul" type="text" class="form-control" placeholder="Masukkan Judul">
        </div>
    </div>

    <div class="form-group">
        <label class="small mb-1">Tanggal</label>
        <input name="txt_tanggal" type="date" class="form-control" placeholder="Tanggal">
    </div>

    <div class="form-group">
        <label class="small mb-1">Konten</label>
        <textarea name="txt_konten" cols="30" rows="10" class="form-control" placeholder="Masukkan konten"></textarea>
    </div>

    <div class="mt-4 mb-0">
        <div class="d-grid">
            <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-block" >
        </div>
    </div>

    <?php
    if (@$_POST['simpan']){
        $judul = $_POST['txt_judul'];
        $tanggal = $_POST ['txt_tanggal'];
        $konten = $_POST['txt_konten'];
        $iduser = "1";
        
        mysqli_query ($k, "INSERT INTO tb_agenda(judul_agenda, tanggal_agenda, konten_agenda) VALUES('$judul', '$tanggal', '$konten')");
        echo "<script>alert('Data Berhasil Disimpan');location='.?page=agenda'</script>";
    }
    ?>
</form>
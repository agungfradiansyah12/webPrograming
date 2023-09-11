<h3 class="mt-4">Tambah galeri</h3>
<hr>
<form method="POST" action="" enctype="multipart/form-data" >
    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <label class="small mb-1">Nama Perusahaan</label>
            <input name="txt_nama_perusahaan" type="text" class="form-control" placeholder="Nama Perusahaan">
        </div>
    </div>

    <div class="form-group">
        <label class="small mb-1">Telepon</label>
        <input name="txt_telepon" type="text" class="form-control" placeholder="Telepon">
    </div>

    <div class="form-group">
        <label class="small mb-1">Alamat Perusahaan</label>
        <input name="txt_alamat" type="text" class="form-control" placeholder="Alamat Perusahaan">
    </div>

    <div class="form-group">
        <label class="small mb-1">Nama Pimpinan</label>
        <input name="txt_nama_pimpinan" type="teks" class="form-control" placeholder="Nama Pimpinan">
    </div>

    <div class="form-group">
        <label class="small mb-1">Logo Perusahaan</label>
        <input name="txt_logo" type="file" class="form-control" placeholder="Logo Perusahaa">
    </div>

    <div class="form-group">
        <label class="small mb-1">Visi</label>
        <input name="txt_visi" type="text" class="form-control" placeholder="Visi">
    </div>

    <div class="form-group">
        <label class="small mb-1">Misi</label>
        <input name="txt_misi" type="text" class="form-control" placeholder="Misi">
    </div>


    <div class="mt-4 mb-0">
        <div class="d-grid">
            <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-block" >
        </div>
    </div>

    <?php
    if (@$_POST['simpan']){
        $nama_perusahaan = $_POST['txt_nama_perusahaan'];
        $telepon = $_POST['txt_telepon'];
        $alamat = $_POST['txt_alamat'];
        $nama_pimpipnan = $_POST['txt_nama_pimpinan'];
        $logo = $_FILES['txt_logo']['name'];
        $tmp = $_FILES['txt_logo']['tmp_name'];
        $visi = $_POST['txt_visi'];
        $misi = $_POST['txt_misi'];

        mysqli_query ($k, "INSERT INTO tb_biodata(nama_perusahaan, telepon, alamat_perusahaan, nama_pimpinan, logo_perusahaan, visi, misi) VALUES('$nama_perusahaan', '$telepon', '$alamat', '$nama_pimpipnan', '$logo', '$visi', '$misi')")or die(mysqli_error($k).mysqli_errno($k));
        copy($tmp, "../img/profil/$logo");
        echo "<script>alert('Data Berhasil Disimpan');location='.?page=profil'</script>";
    }
    ?>
</form>
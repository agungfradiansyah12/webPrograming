<h3 class="mt-4">Tambah galeri</h3>
<hr>
<form method="POST" action="" enctype="multipart/form-data" >
    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <label class="small mb-1">Nama Pegawai</label>
            <input name="txt_nama_pegawai" type="text" class="form-control" placeholder="Nama Pegawai">
        </div>
    </div>

    <div class="form-group">
        <label class="small mb-1">Foto Pegawai</label>
        <input name="txt_foto" type="file" class="form-control" placeholder="Masukkan Foto">
    </div>

    <div class="form-group">
        <label class="small mb-1">Jabatan Pegawai</label>
        <input name="txt_jabatan" type="text" class="form-control" placeholder="Masukkan Jabatan">
    </div>

    <div class="form-group">
    <label class="small mb-1">Tentang Jabatan</label>
        <input name="txt_tentang"  type="text" class="form-control" placeholder="Masukkan Jabatan">
    </div>

        <div class="form-group">
        <label class="small mb-1">Alamat Pegawai</label>
        <input name="txt_alamat" type="text" class="form-control" placeholder="Masukkan Alamat Pegawai">
    </div>

    <div class="form-group">
        <label class="small mb-1">Tanggal Lahir</label>
        <input name="txt_tgl_lhr" type="Date" class="form-control" placeholder="Tanggal">
    </div>

    <div class="form-group">
        <label class="small mb-1">Telepon</label>
        <input name="txt_telepon" type="text" class="form-control" placeholder="Masukkan Telepon Pegawai">
    </div>
    
    <div class="form-group">
        <label class="small mb-1">Email Pegawai</label>
        <input name="txt_email" type="email" class="form-control" placeholder="Masukkan Telepon Pegawai">
    </div>



    <div class="mt-4 mb-0">
        <div class="d-grid">
            <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-block" >
        </div>
    </div>

    <?php
    if (@$_POST['simpan']){
        $nama_pegawai = $_POST['txt_nama_pegawai'];
        $foto = $_FILES['txt_foto']['name'];
        $tmp = $_FILES['txt_foto']['tmp_name'];
        $jabatan = $_POST['txt_jabatan'];
        $tentang = $_POST['txt_tentang'];
        $alamat = $_POST['txt_alamat'];
        $tanggal = date("Y-m-d");
        $telepon = $_POST['txt_telepon'];
        $email = $_POST['txt_email'];
        
        mysqli_query ($k, "INSERT INTO tb_pegawai(nama_pegawai, foto_pegawai, jabatan_pegawai, tentang_jabatan, telp, email_pegawai, alamat_pegawai, tanggal_lahir) VALUES('$nama_pegawai', '$foto', '$jabatan', '$tentang', '$telepon', '$email', '$alamat', '$tanggal')");
        copy($tmp, "../img/foto_pegawai/$foto");
        echo "<script>alert('Data Berhasil Disimpan');location='.?page=pegawai'</script>";
    }
    ?>
</form>
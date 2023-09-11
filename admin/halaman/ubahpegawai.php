<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM tb_pegawai WHERE id_pegawai = '$id'";
    $q = mysqli_query($k, $sql);
    $r = mysqli_fetch_assoc($q);
?>
<h3 class="mt-4">Tambah Pegawai</h3>
<hr>
<form method="POST" action="" enctype="multipart/form-data" >
    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <label class="small mb-1">Nama Pegawai</label>
            <input name="txt_nama_pegawai" value="<?=$r['nama_pegawai']?>" type="text" class="form-control" placeholder="Nama Pegawai">
        </div>
    </div>

    <div class="form-group">
        <label class="small mb-1">Foto Pegawai</label>
        <input name="txt_foto" value="<?=$r['foto_pegawai']?>" type="file" class="form-control" placeholder="Masukkan Foto">
        <img src="../img/foto_pegawai/<?=$r['foto_pegawai']?>" alt="" width="100" height="100">
    </div>

    <div class="form-group">
        <label class="small mb-1">Jabatan Pegawai</label>
        <input name="txt_jabatan" value="<?=$r['jabatan_pegawai']?>" type="text" class="form-control" placeholder="Masukkan Jabatan">
    </div>

    <div class="form-group">
        <label class="small mb-1">Tentang Jabatan</label>
        <input name="txt_tentang" value="<?=$r['tentang_jabatan']?>" type="text" class="form-control" placeholder="Masukkan Jabatan">
    </div>

    <div class="form-group">
        <label class="small mb-1">Telepon</label>
        <input name="txt_telepon" value="<?=$r['telp']?>" type="text" class="form-control" placeholder="Masukkan Telepon Pegawai">
    </div>
    
    <div class="form-group">
        <label class="small mb-1">Email Pegawai</label>
        <input name="txt_email" value="<?=$r['email_pegawai']?>" type="email" class="form-control" placeholder="Masukkan Telepon Pegawai">
    </div>

    <div class="form-group">
        <label class="small mb-1">Alamat Pegawai</label>
        <input name="txt_alamat" value="<?=$r['alamat_pegawai']?>" type="text" class="form-control" placeholder="Masukkan Alamat Pegawai">
    </div>

    <div class="form-group">
        <label class="small mb-1">Tanggal Lahir</label>
        <input name="txt_tgl_lhr" value="<?=$r['tanggal_lahir']?>" type="Date" class="form-control" placeholder="Tanggal">
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
        $telepon = $_POST['txt_telepon'];
        $email = $_POST['txt_email'];
        $alamat = $_POST['txt_alamat'];
        $tanggal = date("Y-m-d");

        if(empty($foto)){
            mysqli_query($k, "UPDATE tb_pegawai SET nama_pegawai='$nama_pegawai', jabatan_pegawai='$jabatan', tentang_jabatan='$tentang', telp='$telepon', email_pegawai='$email', alamat_pegawai='$alamat', tanggal_lahir='$tanggal'  WHERE id_pegawai = '$id'");
        }
        else{
            mysqli_query($k, "UPDATE tb_pegawai SET nama_pegawai='$nama_pegawai', foto_pegawai='$foto', jabatan_pegawai='$jabatan', tentang_jabatan='$tentang', telp='$telepon', email_pegawai='$email', alamat_pegawai='$alamat', tanggal_lahir='$tanggal'  WHERE id_pegawai = '$id'");
            copy($tmp, "../img/foto_pegawai/$foto");
        }
        echo "<script>alert('Data Berhasil Disimpan');location='.?page=pegawai'</script>";
    }
    ?>
</form>
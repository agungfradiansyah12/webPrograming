<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM tb_biodata WHERE id_biodata = '$id'";
    $q = mysqli_query($k, $sql);
    $r = mysqli_fetch_assoc($q);
?>
<h3 class="mt-4">Tambah Data</h3>
<hr>
<form method="POST" action="" enctype="multipart/form-data" >
    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <label class="small mb-1">Nama Perusahaan</label>
            <input name="txt_nama_perusahaan" value="<?=$r['nama_perusahaan']?>" type="text" class="form-control" placeholder="Masukkan Judul">
        </div>
    </div>

    <div class="form-group">
        <label class="small mb-1">Telepon</label>
        <input name="txt_telepon" value="<?=$r['telepon']?>" type="text" class="form-control" placeholder="Masukkan Gambar">
    </div>

    <div class="form-group">
        <label class="small mb-1">Alamat Perusahaan</label>
        <input name="txt_alamat" value="<?=$r['alamat_perusahaan']?>" type="text" class="form-control" placeholder="Tanggal">
    </div>

    <div class="form-group">
        <label class="small mb-1">Nama Pimpinan</label>
        <input name="txt_nama_pimpinan" value="<?=$r['nama_pimpinan']?>" type="teks" class="form-control" placeholder="Tanggal">
    </div>

    <div class="form-group">
        <label class="small mb-1">Logo Perusahaan</label>
        <input name="txt_logo" value="<?=$r['logo_perusahaan']?>" type="file" class="form-control" placeholder="Tanggal">
        <img src="../img/profil/<?=$r['logo_perusahaan']?>" alt="" width="100" height="100"> 
    </div>

    <div class="form-group">
        <label class="small mb-1">Visi</label>
        <input name="txt_visi" value="<?=$r['visi']?>" type="text" class="form-control" placeholder="Tanggal">
    </div>

    <div class="form-group">
        <label class="small mb-1">Misi</label>
        <input name="txt_misi" value="<?=$r['misi']?>" type="text" class="form-control" placeholder="Tanggal">
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

        if(empty($logo)){
            mysqli_query($k, "UPDATE tb_biodata SET nama_perusahaan='$nama_perusahaan', telepon='$telepon', alamat_perusahaan='$alamat', nama_pimpinan='$nama_pimpipnan', visi='$visi', misi='$misi'  WHERE id_biodata = '$id'");
        }
        else{ 
            mysqli_query($k, "UPDATE tb_biodata SET nama_perusahaan='$nama_perusahaan', telepon='$telepon', alamat_perusahaan='$alamat', nama_pimpinan='$nama_pimpipnan', logo_perusahaan='$logo', visi='$visi', misi='$misi'  WHERE id_biodata = '$id'");            
 
            copy($tmp, "../img/profil/$logo");
        }
        echo "<script>alert('Data Berhasil Disimpan');location='.?page=profil'</script>";
    }
    ?>
</form>
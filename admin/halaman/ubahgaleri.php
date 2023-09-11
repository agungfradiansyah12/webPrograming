<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM tb_galeri WHERE id_galeri = '$id'";
    $q = mysqli_query($k, $sql);
    $r = mysqli_fetch_assoc($q);
?>
<h3 class="mt-4">Tambah galeri</h3>
<hr>
<form method="POST" action="" enctype="multipart/form-data">
    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <label class="small mb-1">Judul</label>
            <input name="txt_judul" value="<?=$r['judul_galeri']?>" type="text" class="form-control" placeholder="Masukkan Judul">
        </div>
    </div>

    <div class="form-group">
        <label class="small mb-1">Gambar</label>
        <input name="txt_gambar" value="<?=$r['gambar']?>" type="file" class="form-control" placeholder="Masukkan Gambar">
        <img src="../img/<?=$r['gambar']?>" alt="" width="100" height="100"> 
    </div>

    <div class="form-group">
        <label class="small mb-1">Tanggal</label>
        <input name="txt_tanggal" value="<?=$r['tanggal_gambar']?>" type="date" class="form-control" placeholder="Tanggal">
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

        if(empty($gambar)){
            mysqli_query($k, "UPDATE tb_galeri SET judul_galeri='$judul', tanggal_gambar='$tanggal', id_user='$iduser' WHERE id_galeri = '$id'");
        }
        else{
            mysqli_query($k, "UPDATE tb_galeri SET judul_galeri='$judul', gambar='$gambar', tanggal_gambar='$tanggal', id_user='$iduser' WHERE id_galeri = '$id'");
            copy($tmp, "../img/galeri/$gambar");
        }
        echo "<script>alert('Data Berhasil Disimpan');location='.?page=galeri'</script>";
    }
    ?>
</form>
<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM tb_agenda WHERE id_agenda = '$id'";
    $q = mysqli_query($k, $sql);
    $r = mysqli_fetch_assoc($q);
?>
<h3 class="mt-4">Tambah Agenda</h3>
<hr>
<form method="POST" action="" >
    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <label class="small mb-1">Judul</label>
            <input name="txt_judul" value="<?=$r['judul_agenda']?>" type="text" class="form-control" placeholder="Masukkan Judul">
        </div>
    </div>

    <div class="form-group">
        <label class="small mb-1">Tanggal</label>
        <input name="txt_tanggal" value="<?=$r['tanggal_agenda']?>" type="date" class="form-control" placeholder="Tanggal">
    </div>

    <div class="form-group">
        <label class="small mb-1">Konten</label>
        <textarea name="txt_konten" cols="30" rows="10" class="form-control" placeholder="Masukkan konten"><?=$r['konten_agenda']?></textarea>
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
        $iduser ="1";
        mysqli_query($k, "UPDATE tb_agenda SET judul_agenda='$judul', tanggal_agenda='$tanggal', konten_agenda='$konten', id_user='$iduser' WHERE id_agenda = '$id'");
        echo "<script>alert('Data Berhasil Disimpan');location='.?page=agenda'</script>";
    }
    ?>
</form>
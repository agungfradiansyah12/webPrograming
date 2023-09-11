<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM tb_portfolio WHERE id_portfolio = '$id'";
    $q = mysqli_query($k, $sql);
    $r = mysqli_fetch_assoc($q);
?>
<h3 class="mt-4">Tambah Berita</h3>
<hr>
<form method="POST" action="" enctype="multipart/form-data"  >
    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <label class="small mb-1">Judul</label>
            <input name="txt_judul" value="<?=$r['judul_portfolio']?>" type="text" class="form-control" placeholder="Masukkan Judul">
        </div>
    </div>

    <div class="form-group">
        <label class="small mb-1">Gambar</label>
        <input name="txt_gambar" value="<?=$r['gambar_portfolio']?>" type="file" class="form-control" placeholder="Masukkan Gambar">
        <img src="../img/portfolio/<?=$r['gambar_portfolio']?>" alt="" width="100" height="100">
    </div>

    <div class="form-group">
        <label class="small mb-1">Konten</label>
        <textarea name="txt_konten" cols="30" rows="10" class="form-control" placeholder="Masukkan konten"><?=$r['konten_portfolio']?></textarea>
    </div>

    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <label class="small mb-1">Tanggal Rilis</label>
            <input name="txt_tgl_rilis" value="<?=$r['tanggal_rilis']?>" type="date" class="form-control" placeholder="Masukkan Tanggal Rilis Game">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <label class="small mb-1">Download</label>
            <input name="txt_download" value="<?=$r['download']?>" type="text" class="form-control" placeholder="Masukkan Link Download">
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

        if(empty($gambar)){ 
            mysqli_query($k, "UPDATE tb_portfolio SET  	judul_portfolio='$judul', konten_portfolio='$konten', tanggal_rilis='$tgl_rilis', download='$download', id_user='$iduser' WHERE id_portfolio = '$id'");
        }
        else{
            mysqli_query($k, "UPDATE tb_portfolio SET  	judul_portfolio='$judul', gambar_portfolio='$gambar', konten_portfolio='$konten', tanggal_rilis='$tgl_rilis', download='$download', id_user='$iduser' WHERE id_portfolio = '$id'")or die(mysqli_error($k).mysqli_errno($k));
            copy($tmp, "../img/portfolio/$gambar");
        }
        echo "<script>alert('Data Berhasil Disimpan');location='.?page=portfolio'</script>";
    }
    ?>
</form>
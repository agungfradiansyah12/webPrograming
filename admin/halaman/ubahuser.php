<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM tb_user WHERE id_user = '$id'";
    $q = mysqli_query($k, $sql);
    $r = mysqli_fetch_assoc($q);
?>
<h3 class="mt-4">Tambah User</h3>
<hr>
<form method="POST" action="" >
    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <label class="small mb-1">Nama</label>
            <input name="txt_nama" value="<?=$r['nama_user']?>" type="text" class="form-control" placeholder="Masukkan Nama">
        </div>
    </div>

    <div class="form-group">
        <label class="small mb-1">Telepon</label>
        <input name="txt_telepon" value="<?=$r['telepon_user']?>" type="text" class="form-control" placeholder="Masukkan no Telepon">
    </div>

    <div class="form-group">
        <label class="small mb-1">Alamat</label>
        <input name="txt_alamat" value="<?=$r['alamat_user']?>" type="text" class="form-control" placeholder="Alamat">
    </div>
    
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label class="small mb-1">Username</label>
            <input name="txt_username" value="<?=$r['username']?>" type="text" class="form-control " placeholder="Username">
        </div>
        <div class="col-sm-6">
            <label class="small mb-1">Password</label>
            <input name="txt_password" type="password" class="form-control"  placeholder="Password">
        </div>
    </div>
    <div class="mt-4 mb-0">
        <div class="d-grid">
            <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-block" >
        </div>
    </div>
    <?php
    if (@$_POST['simpan']){
        $nama = $_POST['txt_nama'];
        $telepon = $_POST['txt_telepon'];
        $alamat = $_POST ['txt_alamat'];
        $username = $_POST ['txt_username'];
        $password = $_POST ['txt_password'];
        if (empty($password)){
            mysqli_query($k, "UPDATE tb_user SET nama_user= '$nama', telepon_user='$telepon', alamat_user='$alamat' , username='$username' WHERE id_user = $id")or die(mysqli_error($k).mysqli_errno($k));
        }
        else{
            mysqli_query($k, "UPDATE tb_user SET nama_user= '$nama', telepon_user='$telepon', alamat_user='$alamat' , username='$username', password='$password' WHERE id_user = $id")or die(mysqli_error($k).mysqli_errno($k));
        }
        
        echo "<script>alert('Data Berhasil Disimpan');location='.?page=user'</script>";
    }
    ?>
</form>
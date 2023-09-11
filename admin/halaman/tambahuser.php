<h3 class="mt-4">Tambah User</h3>
<hr>
<form method="POST" action="" >
    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <label class="small mb-1">Nama</label>
            <input name="txt_nama" type="text" class="form-control" placeholder="Masukkan Nama">
        </div>
    </div>

    <div class="form-group">
        <label class="small mb-1">Telepon</label>
        <input name="txt_telepon" type="text" class="form-control" placeholder="Masukkan no Telepon">
    </div>

    <div class="form-group">
        <label class="small mb-1">Alamat</label>
        <input name="txt_alamat" type="text" class="form-control" placeholder="Alamat">
    </div>
    
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label class="small mb-1">Username</label>
            <input name="txt_username" type="text" class="form-control " placeholder="Username">
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
        $password = md5($_POST ['txt_password']);
        mysqli_query ($k, "INSERT INTO tb_user(nama_user, telepon_user, alamat_user, username, password) VALUES('$nama', '$telepon', '$alamat', '$username', '$password')");
        echo "<script>alert('Data Berhasil Disimpan');location='.?page=user'</script>";
    }
    ?>
</form>
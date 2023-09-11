<h3 class="mt-4">Data User</h3>
<hr>
<a href=".?page=tambahuser" class="btn btn-primary ml-3">Tambah Data</a>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-sm" id="dataTable" id="bootstrap-data-table-export"  width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Telepon</th>
                    <th>Username</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Nama</th>
                    <th>Telepon</th>
                    <th>Username</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                $sql = "SELECT * FROM tb_user";
                $q = mysqli_query($k, $sql);
                while($r = mysqli_fetch_assoc($q)){
                ?>
                <tr>
                    <td><?=$r['nama_user']?></td>
                    <td><?=$r['telepon_user']?></td>
                    <td><?=$r['username']?></td>
                    <td><?=$r['alamat_user']?></td>
                    <td>
                    <a href=".?page=ubahuser&id=<?=$r['id_user']?>">Ubah</a>
                        -
                    <a onclick="return confirm('Apakah Anda Yakin Menghapus?')" href=".?page=hapususer&id=<?=$r['id_user']?>">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>


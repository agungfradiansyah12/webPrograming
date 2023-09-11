<h3>Data Team</h3>
<hr>
<a href=".?page=tambahpegawai" class="btn btn-primary  ml-3">Tambah Data</a>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered table-sm " id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Nama Pegawai</th>
                    <th>Foto Pegawai</th>
                    <th>Jabatan</th>
                    <th>Tentang Jabatan</th>
                    <th>telp</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                    <th>Nama Pegawai</th>
                    <th>Foto Pegawai</th>
                    <th>Jabatan</th>
                    <th>Tentang Jabatan</th>
                    <th>telp</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                    $sql = "SELECT * FROM tb_pegawai";
                    $q = mysqli_query($k,$sql);
                    while($r = mysqli_fetch_assoc($q)){
                ?>
                <tr>
                    <td><?=$r['nama_pegawai']?></td>
                    <td>
                    <img src="../img/foto_pegawai/<?=$r['foto_pegawai']?>" alt="" width="40" height="40"> 
                    </td>
                    <td><?=$r['jabatan_pegawai']?></td>
                    <td><?=$r['tentang_jabatan']?></td>
                    <td><?=$r['telp']?></td>
                    <td><?=$r['email_pegawai']?></td>
                    <td><?=$r['alamat_pegawai']?></td>
                    <td>
                    <a href=".?page=ubahpegawai&id=<?=$r['id_pegawai']?>">Ubah</a>
                        -
                    <a onclick="return confirm('Apakah Anda Yakin Menghapus?')" href=".?page=hapuspegawai&id=<?=$r['id_pegawai']?>">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>


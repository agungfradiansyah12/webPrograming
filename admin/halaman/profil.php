<h3>Data Profil</h3>
<hr>
<a href=".?page=tambahprofil" class="btn btn-primary  ml-3">Tambah Data</a>
<div class="card-body">  
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Nama Perusahaan</th>
                    <th>Telepon</th>
                    <th>Alamat Perusahaan</th>
                    <th>Nama Pimpinan</th>
                    <th>Logo Perusahaan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Nama Perusahaan</th>
                    <th>Telepon</th>
                    <th>Alamat Perusahaan</th>
                    <th>Nama Pimpinan</th>
                    <th>Logo Perusahaan</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                $sql = "SELECT * FROM tb_biodata";
                $q = mysqli_query($k, $sql);
                while($r = mysqli_fetch_assoc($q)){
                ?>
                <tr>
                    <td><?=$r['nama_perusahaan']?></td>
                    <td><?=$r['telepon']?></td>
                    <td><?=$r['alamat_perusahaan']?></td>
                    <td><?=$r['nama_pimpinan']?></td>
                    <td>
                       <img src="../img/profil/<?=$r['logo_perusahaan']?>" alt="" width="50" height="50"> 
                    </td>
                    <td>
                    <a href=".?page=ubahprofil&id=<?=$r['id_biodata']?>">Ubah</a>
                        -
                    <a onclick="return confirm('Apakah Anda Yakin Menghapus?')" href=".?page=hapusprofil&id=<?=$r['id_biodata']?>">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
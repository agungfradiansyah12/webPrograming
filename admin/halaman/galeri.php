<h3>Data Galeri</h3>
<hr>
<a href=".?page=tambahgaleri"class="btn btn-primary ml-3">Tambah Data</a>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                $sql = "SELECT * FROM tb_galeri";
                $q = mysqli_query($k, $sql);
                while($r = mysqli_fetch_assoc($q)){
                ?>
                <tr>
                    <td><?=$r['judul_galeri']?></td>
                    <td><?=$r['tanggal_gambar']?></td>
                    <td>
                    <img src="../img/galeri/<?=$r['gambar']?>" alt="" width="100" height="100"> 
                    </td>
                    <td>
                    <a href=".?page=ubahgaleri&id=<?=$r['id_galeri']?>">Ubah</a>
                        -
                    <a onclick="return confirm('Apakah Anda Yakin Menghapus?')" href=".?page=hapusgaleri&id=<?=$r['id_galeri']?>">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>


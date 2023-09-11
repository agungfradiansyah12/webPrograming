<h3>Data Portfolio</h3>
<hr>
<a href=".?page=tambahportfolio"class="btn btn-primary ml-3">Tambah Data</a>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Gambar</th>
                    <th>Tanggal Rilis</th>
                    <th>Konten</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Judul</th>
                    <th>Gambar</th>
                    <th>Tanggal Rilis</th>
                    <th>Konten</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                $sql = "SELECT * FROM tb_portfolio";
                $q = mysqli_query($k, $sql);
                while($r = mysqli_fetch_assoc($q)){
                ?>
                <tr>
                    <td><?=$r['judul_portfolio']?></td>
                    <td>
                       <img src="../img/portfolio/<?=$r['gambar_portfolio']?>" alt="" width="100" height="100"> 
                    </td>
                    <td><?=$r['tanggal_rilis']?></td>
                    <td><?=$r['konten_portfolio']?></td>
                    <td>
                    <a href=".?page=ubahportfolio&id=<?=$r['id_portfolio']?>">Ubah</a>
                        -
                    <a onclick="return confirm('Apakah Anda Yakin Menghapus?')" href=".?page=hapusportfolio&id=<?=$r['id_portfolio']?>">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>




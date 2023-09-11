<h3>Data Agenda</h3>
<hr>
<a href=".?page=tambahagenda" class="btn btn-primary ml-3">Tambah Data</a>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-sm"  id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Konten</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Konten</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                $sql = "SELECT * FROM tb_agenda";
                $q = mysqli_query($k, $sql);
                while($r = mysqli_fetch_assoc($q)){
                ?>
                <tr>
                    <td><?=$r['judul_agenda']?></td>
                    <td><?=$r['tanggal_agenda']?></td>
                    <td><?=$r['konten_agenda']?></td>
                    <td>
                    <a href=".?page=ubahagenda&id=<?=$r['id_agenda']?>">Ubah</a>
                        -
                    <a onclick="return confirm('Apakah Anda Yakin Menghapus?')" href=".?page=hapusagenda&id=<?=$r['id_agenda']?>">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>


<h3>Data Pesan</h3>
<hr>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Nama</th>
                    <th>Pesan</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Email</th>
                    <th>Nama</th>
                    <th>Pesan</th>
                    <th>Tanggal</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                    $sql = "SELECT * FROM tb_pesan";
                    $q = mysqli_query($k,$sql);
                    while($r = mysqli_fetch_assoc($q)){
                ?>
                <tr>
                    <td><?=$r['email']?></td>
                    <td><?=$r['nama']?></td>
                    <td><?=$r['pesan']?></td>
                    <td><?=$r['tanggal']?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>


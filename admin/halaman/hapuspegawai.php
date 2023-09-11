<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM tb_pegawai WHERE id_pegawai = $id";
    $q = mysqli_query($k, $sql);
    echo "<script>alert('Data Berhasil Dihapus');location='.?page=pegawai'</script>";
?>
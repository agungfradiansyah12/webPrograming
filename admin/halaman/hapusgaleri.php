<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM tb_galeri WHERE id_galeri = $id";
    $q = mysqli_query($k, $sql);
    echo "<script>alert('Data Berhasil Dihapus');location='.?page=galeri'</script>";
?>
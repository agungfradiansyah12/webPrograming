<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM tb_biodata WHERE id_biodata = $id";
    $q = mysqli_query($k, $sql);
    echo "<script>alert('Data Berhasil Dihapus');location='.?page=profil'</script>";
?>
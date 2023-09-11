<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM tb_portfolio WHERE id_portfolio = $id";
    $q = mysqli_query($k, $sql);
    echo "<script>alert('Data Berhasil Dihapus');location='.?page=portfolio'</script>";
?>
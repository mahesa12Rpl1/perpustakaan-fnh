<?php
//Proses Delete
if (isset($_GET['delete'])) {
    $id = $_GET['id'];
    $query_delete = mysqli_query($konek,"DELETE FROM anggota where id_anggota = '$id'");
    
    if($query_delete){
        ?>
            <script>
                alert("Data Berhasil Di Delete");
                window.location.href='http://http:localhost/mahesa_17/dashboard.php';
            </script>
        <?php
        // header('refresh:0; URL=http://localhost/perpustakaan-12rpl2/perpustakaan-12rpl2/dashboard.php?page=anggota');
    }
}
////End of proses delete data/////////////////////////////////////////////////////////////////////////
?>
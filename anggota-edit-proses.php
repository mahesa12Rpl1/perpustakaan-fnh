<?php
include('koneksi.php');
if (isset($_GET['save-edit'])) {
    $id            = $_POST['id'];
    $nis            = $_POST['nis'];
    $nama           = $_POST['nama'];
    $jk             = $_POST['jk'];
    $tpt_lahir      = $_POST['tpt_lahir'];
    $tgl_lahir      = $_POST['tgl_lahir'];
    $id_kelas       = $_POST['id_kelas'];
    $id_jurusan     = $_POST['id_jurusan'];
    $tlp            = $_POST['tlp'];
    $alamat         = $_POST['alamat'];

    $query_update = mysqli_query($konek,"UPDATE anggota 
    SET nis         = '$nis',
        nama        = '$nama',     
        jk          = '$jk',    
        tpt_lahir   = '$tpt_lahir',  
        tgl_lahir   = '$tgl_lahir',
        id_kelas    = '$id_kelas',       
        id_jurusan  = '$id_jurusan',     
        tlp         = '$tlp',
        alamat      = '$alamat'
    WHERE id_anggota = '$id'");

    if ($query_update) {
        ?>
        <script>
            alert('Data Berhasil Diupdate')
            window.location.href='dashboard.php?page=anggota';
        </script>
        <?php
    }
}
?>
<?php
//Proses insert data
if (isset($_POST['save'])) {
$nis            = $_POST['nis'];
$nama           = $_POST['nama'];
$jk             = $_POST['jk'];
$tpt_lahir      = $_POST['tpt_lahir'];
$tgl_lahir      = $_POST['tgl_lahir'];
$id_kelas       = $_POST['id_kelas'];
$id_jurusan     = $_POST['id_jurusan'];
$tlp            = $_POST['tlp'];
$alamat         = $_POST['alamat'];

$query_insert = mysqli_query($konek,"INSERT INTO anggota 
VALUES('','$nis','$nama','$jk','$tpt_lahir','$tgl_lahir','$id_kelas','$id_jurusan','$tlp','$alamat')");
    if($query_insert)
    {
        ?>
            <div class="alert alert-success">
                Data Berhasil Disimpan
            </div>
        <?php
        header('refresh:3; URL=http://http:localhost/mahesa_17/dashboard.php');
    }
    else
    {
        ?>
            <div class="alert alert-danger">
                Data GAGAL Disimpan !!!!!!!!!
            </div>
        <?php
    }
}
//// End of proses insert /////////////////////////////////////////////////////////
?>
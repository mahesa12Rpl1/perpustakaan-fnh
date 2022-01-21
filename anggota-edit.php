<?php



if (isset($_GET['edit'])) 
{
    $id = $_GET['id'];
    $query= mysqli_query($konek,"SELECT * FROM anggota WHERE id_anggota = '$id'");

    foreach ($query as $row) 
    {
        ?>
        <div class="container">
            <center><h3>Edit Data Anggota</h3></center>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                <form action="?page=anggota-edit-proses&save-edit" method="post">
                <input type="hidden" name="id" value="<?php echo $row['id_anggota'] ?>">
                <div class="form-group">
                    <input value="<?php echo $row['nis'] ?>" class="form-control" type="text" name="nis" placeholder="Nomor Induk Siswa" required>
                </div>
                <div class="form-group mt-2">
                    <input value="<?php echo $row['nama'] ?>" class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group mt-2">
                    <select class="form-control" name="jk">
                        <option value="<?php echo $row['jk'] ?>"><?php echo $row['jk'] ?></option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="form-group mt-2">
                    <input value="<?php echo $row['tpt_lahir']?>" class="form-control" type="text" name="tpt_lahir" placeholder="tpt Lahir">
                </div>
                <div class="form-group mt-2">
                    <input value="<?php echo $row['tgl_lahir']?>" class="form-control" type="date" name="tgl_lahir">
                </div>
                <div class="form-group mt-2">
                    <select class="form-control" name="id_kelas" required>
                        <option value="<?php echo $row['id_kelas']?>"><?php echo $row['id_kelas']?></option>
                        <?php
                            $query_kelas = mysqli_query($konek,"SELECT * FROM kelas");
                            foreach ($query_kelas as $kelas) {
                                ?>
                                <option value="<?php echo $kelas['id_kelas']?>"><?php echo $kelas['nama_kelas']?></option>
                                <?php
                            }
                        ?>
                        
                    </select>
                </div>
                <div class="form-group mt-2">
                    <select class="form-control" name="id_jurusan" required>
                        <option value="<?php echo $row['id_jurusan']?>"><?php echo $row['id_jurusan']?></option>
                        <?php
                            $query_kelas = mysqli_query($konek,"SELECT * FROM jurusan");
                            foreach ($query_kelas as $kelas) {
                                ?>
                                <option value="<?php echo $kelas['id_jurusan']?>"><?php echo $kelas['nama_jurusan']?></option>
                                <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group mt-2">
                    <input value="<?php echo $row['tlp']?>" class="form-control" type="text" name="tlp" placeholder="Nomor Telepon">
                </div>
                <div class="form-group mt-2">
                    <textarea name="alamat" class="form-control" placeholder="Alamat Lengkap"><?php echo $row['alamat']?></textarea>
                </div>
        </div>
                        <div class="form-group mt-2">
                            <center>
                                <button name="save-edit" class="btn btn-primary mb-3" type="submit">
                                    Save Edit
                                </button>
                            </center>
                        </div>
                    </form>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
        <?php
    }
}
?>
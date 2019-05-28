<?php 

    $id = $_GET['id'];

    $sql = $koneksi->query("select * from tb_siswa where id='$id'");

    $tampil = $sql->fetch_assoc();

    $jenis_kelamin = $tampil['jenis_kelamin'];

    $keterangan = $tampil['keterangan'];

?>

<h2 align="center">Ubah Data Absensi Siswa</h2>
<style>
    h2 {
        text-align: center;
    }

    h4 {
        margin-left: 20px;
    }
    
    .textfield {
        width: 50%;
        height: 40px;
        font-family: arial;
        color: #000;
        border: 1px double #0047b3;
        margin-left: 20px;
    }

    .textfield:hover {
        width: 50%;
        height: 40px;
        font-family: arial;
        color: #000;
        border: 1px double #0047b3;
        background-color: #f2f2f2;
        margin-left: 20px;
    }

    .simpan {
        width: 100px;
        margin-top: 20px;
        margin-left: 20px;
        background-color: #0047b3;
        border: 0;
        border-bottom: 5px solid #0047b3;
        text-decoration: none;
        font-family: arial;
        font-size: 11pt;
        color: #fff;
    }

</style>
                                    <form method="POST">

                                            <h4>NISN</h4>
                                            <input class="textfield" name="nisn" value="<?php echo $tampil['nisn'];?>"/>
                                      
                                            <h4>Nama Siswa</h4>
                                            <input class="textfield" name="nama" value="<?php echo $tampil['nama'];?>"/>

                                            <h4>Kelas</h4>
                                            <input class="textfield" name="kelas" value="<?php echo $tampil['kelas'];?>"/>


                                            <h4>Tanggal</h4>
                                            <input class="textfield" name="tanggal" value="<?php echo $tampil['tanggal'];?>"/>
                                        

                                            <h4>Jenis Kelamin</h4>
                                            <select class="textfield" name="jenis_kelamin">
                                                <option value="Laki-Laki" <?php if ($jenis_kelamin=='Laki-Laki')
                                                {echo "selected";} ?>>Laki-Laki</option>
                                                <option value="Perempuan" <?php if ($jenis_kelamin=='Perempuan')
                                                {echo "selected";} ?>>Perempuan</option>
                                            </select>
                                        

                                            <h4>Keterangan</h4>
                                            <select class="textfield" name="keterangan">
                                                <option value="Hadir" <?php if ($keterangan=='Hadir')
                                                {echo "selected";} ?>>Hadir</option>
                                                <option value="Sakit" <?php if ($keterangan=='Sakit')
                                                {echo "selected";} ?>>Sakit</option>
                                                <option value="Izin" <?php if ($keterangan=='Izin')
                                                {echo "selected";} ?>>Izin</option>
                                                <option value="Alpa" <?php if ($keterangan=='Alpa')
                                                {echo "selected";} ?>>Alpa</option>
                                            </select>
                                            <br>
                                            <input type="submit" name="simpan" value="Simpan" class="simpan">
                                </form>

<?php 
    
    $nisn           = $_POST['nisn'];
    $nama           = $_POST['nama'];
    $kelas          = $_POST['kelas'];
    $tanggal        = $_POST['tanggal'];
    $jenis_kelamin  = $_POST['jenis_kelamin'];
    $keterangan     = $_POST['keterangan'];

    $simpan = $_POST['simpan'];

    if ($simpan) {

        $sql = $koneksi->query("UPDATE tb_siswa SET nisn='$nisn', nama='$nama', kelas='$kelas', tanggal='$tanggal', jenis_kelamin='$jenis_kelamin', keterangan='$keterangan' WHERE id='$id'");

        if ($sql) {
            ?> 
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Diubah");
                    window.location.href="?page=siswa";
                    
                </script>
            <?php    
        }
    }

    ?>
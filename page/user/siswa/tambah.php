<h2 align="center">Absensi Siswa</h2>
<style>
    h4 {
        margin-left: 20px;
        margin-top: 5px;
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
                                            <input class="textfield" name="nisn" required/>

                                            <h4>Nama Siswa</h4>
                                            <input class="textfield" name="nama" required/>

                                            <h4>Kelas</h4>
                                            <input class="textfield" name="kelas" required/>

                                        
                                            <h4>Tanggal</h4>
                                            <input class="textfield" name="tanggal" required/>
                                        
                                        
                                            <h4>Jenis Kelamin</h4>
                                            <select class="textfield" name="jenis_kelamin" required/>
                                                <option>PILIH</option>
                                                <option>Laki-Laki</option>
                                                <option>Perempuan</option>
                                            </select>
                                        
                                        
                                            <h4>Keterangan</h4>
                                            <select class="textfield" name="keterangan" required/>
                                                <option>PILIH</option>
                                                <option>Hadir</option>
                                                <option>Sakit</option>
                                                <option>Izin</option>
                                                <option>Alpa</option>
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
    
    $simpan        = $_POST['simpan'];

    if ($simpan) {

        $sql = $koneksi->query("INSERT INTO tb_siswa(nisn, nama, kelas, tanggal, jenis_kelamin, keterangan)values('$nisn', '$nama', '$kelas', '$tanggal', '$jenis_kelamin', '$keterangan')");

        if ($sql) {
            ?> 
                <script type="text/javascript">
                    
                    alert("Data Berhasil Disimpan");
                    window.location.href="?page=siswa";
                    
                </script>
            <?php    
        }
    }

    ?>
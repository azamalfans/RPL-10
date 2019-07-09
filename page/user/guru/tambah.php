<h2 class="guru">Absensi Guru</h2>
<style>
    .guru {
        text-align: center;
    }

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

    .telepon {
        width: 675px;
        height: 40px;
        font-family: arial;
        color: #000;
        border: 1px double #0047b3;
        margin-left: 1px;
    }

</style>
                                    <form method="POST">

                                            <h4>NIP</h4>
                                            <input class="textfield" name="nip" />

                                            <h4>Nama Guru</h4>
                                            <input class="textfield" name="nama" />
                                            
                                            <h4>Tanggal</h4>
                                            <input class="textfield" name="tanggal" />
                                        
                                            <h4>Jenis Kelamin</h4>
                                            <select class="textfield" name="jenis_kelamin" />
                                                <option>PILIH</option>
                                                <option>Laki-Laki</option>
                                                <option>Perempuan</option>
                                            </select>
                                                                                
                                                                               
                                            <h4>Keterangan</h4>
                                            <select class="textfield" name="keterangan" />
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
    
    $nip           = $_POST['nip'];
    $nama          = $_POST['nama'];
    $tanggal       = $_POST['tanggal'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $keterangan    = $_POST['keterangan'];
    
    $simpan        = $_POST['simpan'];

    if ($simpan) {

        $sql = $koneksi->query("INSERT INTO tb_guru (nip, nama, tanggal, jenis_kelamin, keterangan)values('$nip', '$nama', '$tanggal', '$jenis_kelamin', '$keterangan')");

        if ($sql) {
            ?> 
                <script type="text/javascript">
                    
                    alert("Data Berhasil Disimpan");
                    window.location.href="?page=user";
                    
                </script>
            <?php    
        }
    }

    ?>
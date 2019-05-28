<h2 class="kelas" >Tambah Kelas</h2>
<style>
    .kelas {
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

    .textfield2 {
        width: 50%;
        height: 100px;
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
                                            <h4>Nama Kelas</h4>
                                            <input class="textfield" name="nama" required />
                                        
                                            <h4>Keterangan</h4>
                                            <input class="textfield2" name="keterangan" required />
                                        
                                            <br>
                                            <input type="submit" name="simpan" value="Simpan" class="simpan">

                                </form>

<?php 
    
    $nama_kelas    = $_POST['nama'];
    $keterangan    = $_POST['keterangan'];

    $simpan        = $_POST['simpan'];

    if ($simpan) {

        $sql = $koneksi->query("insert into tb_kelas(nama, keterangan)values('$nama_kelas','$keterangan')");

        if ($sql) {
            ?> 
                <script type="text/javascript">
                    
                    alert("Data Berhasil Disimpan");
                    window.location.href="?page=kelas";
                    
                </script>
            <?php    
        }
    }

    ?>
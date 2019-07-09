<?php 

    $id = $_GET['id'];

    $sql = $koneksi->query("select * from tb_kelas where id='$id'");

    $tampil = $sql->fetch_assoc();

    $keterangan = $tampil['keterangan'];

?>

<h2>Ubah Data Kelas</h2>
<style>
    h2 {
        text-align: center;
    }

    h4 {
        margin-left: 10px;
    }

    .textfield {
        margin-left: 10px;
        width: 50%;
        height: 40px;
        font-family: arial;
        color: #000;
        border: 1px double #0047b3;
    }

    .textfield:hover {
        width: 50%;
        height: 40px;
        font-family: arial;
        color: #000;
        border: 1px double #0047b3;
        background-color: #ccc;
    }

    .simpan {
        width: 100px;
        margin-left: 10px;
        margin-top: 20px;
        background-color: #0047b3;
        border: 0;
        border-bottom: 5px solid #0047b3;
        padding: 10px 20px;
        text-decoration: none;
        font-family: arial;
        font-size: 11pt;
        color: #fff;
    }

</style>

                                    <form method="POST">
                                        
                                            <h4>Nama Kelas</h4>
                                            <input class="textfield" name="nama" value="<?php echo $tampil['nama'];?>"/>
                                        

                                        
                                            <h4>Keterangan</h4>
                                            <input class="textfield" name="keterangan" value="<?php echo $tampil['keterangan'];?>"/>
                                                
                                            <br>
                                            <input type="submit" name="simpan" value="Simpan" class="simpan">
                                </form>
<?php 
    
    $nama          = $_POST['nama'];
    $keterangan    = $_POST['keterangan'];

    $simpan        = $_POST['simpan'];

    if ($simpan) {

    	$sql = $koneksi->query("UPDATE tb_kelas SET nama='$nama', keterangan='$keterangan' WHERE id='$id'");

        if ($sql) {
            ?> 
                <script type="text/javascript">
                    
                    alert("Data Berhasil Diubah");
                    window.location.href="?page=kelas";
                    
                </script>
            <?php    
        }
    }

    ?>
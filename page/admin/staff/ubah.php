<?php 

    $id = $_GET['id'];

    $sql = $koneksi->query("select * from tb_staff where id='$id'");

    $tampil = $sql->fetch_assoc();

?>

<h2>Ubah Staff</h2>
<style>
    h2 {
        text-align: center;
    }

    h4 {
        margin-left: 20px;
        margin-top: 5px;
    }

    .textfield {
        width: 50%;
        margin-left: 20px;
        height: 40px;
        font-family: arial;
        color: #000;
        border: 1px double #0047b3;
    }

    .textfield:hover {
        width: 50%;
        margin-left: 20px;
        height: 40px;
        font-family: arial;
        color: #000;
        border: 1px double #0047b3;
        background-color: #ccc;
    }

    .simpan {
        width: 100px;
        margin-left: 20px;
        margin-top: 20px;
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

                                            <h4>Nama Staff</h4>
                                            <input class="textfield" name="nama_staff" value="<?php echo $tampil['nama_staff'];?>"/>
                                                                               
                                            <h4>Pendidikan Terakhir</h4>
                                            <input class="textfield" name="pendidikan_akhir" value="<?php echo $tampil['pendidikan_akhir'];?>"/>
                                                                               
                                            <h4>Masa Kerja</h4>
                                            <input class="textfield" name="masa_kerja" value="<?php echo $tampil['masa_kerja'];?>"/>

                                            <h4>Mengajar Kelas</h4>
                                            <input class="textfield" name="mengajar_kelas" value="<?php echo $tampil['mengajar_kelas'];?>"/>


                                            <br>                
                                            <input type="submit" name="simpan" value="Simpan" class="simpan">
                                    </form>

<?php 
    
    $nama_staff       = $_POST['nama_staff'];
    $pendidikan_akhir = $_POST['pendidikan_akhir'];
    $masa_kerja       = $_POST['masa_kerja'];
    $mengajar_kelas   = $_POST['mengajar_kelas'];

    $simpan        = $_POST['simpan'];

    if ($simpan) {

    	$sql = $koneksi->query("UPDATE tb_staff SET nama_staff='$nama_staff', pendidikan_akhir='$pendidikan_akhir', masa_kerja='$masa_kerja', mengajar_kelas='$mengajar_kelas' WHERE id='$id'");

        if ($sql) {
            ?> 
                <script type="text/javascript">
                    
                    alert("Data Berhasil Diubah");
                    window.location.href="?page=staff";
                    
                </script>
            <?php    
        }
    }

    ?>
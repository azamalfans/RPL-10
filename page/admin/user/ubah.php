<?php 

    $id = $_GET['id'];

    $sql = $koneksi->query("select * from user where id='$id'");

    $tampil = $sql->fetch_assoc();


?>

<h2>Ubah Data User</h2>
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
                                        
                                            <h4>Nama</h4>
                                            <input class="textfield" name="nama" value="<?php echo $tampil['nama'];?>"/>
                                        
                                            <h4>Username</h4>
                                            <input class="textfield" name="username" value="<?php echo $tampil['username'];?>"/>
                                        
                                            <h4>Password</h4>
                                            <input class="textfield" type="password" name="password" value="<?php echo $tampil['password'];?>"/>
                                        
                                            <br>
                                            <input type="submit" name="simpan" value="Simpan" class="simpan">
                                </form>
<?php 
    
    $nama        = $_POST['nama'];
    $username    = $_POST['username'];
    $password    = $_POST['password'];

    $simpan      = $_POST['simpan'];

    if ($simpan) {

    	$sql = $koneksi->query("UPDATE user SET nama='$nama', username='$username', password='$password' WHERE id='$id'");

        if ($sql) {
            ?> 
                <script type="text/javascript">
                    
                    alert("Data Berhasil Diubah");
                    window.location.href="?page=user";
                    
                </script>
            <?php    
        }
    }

    ?>
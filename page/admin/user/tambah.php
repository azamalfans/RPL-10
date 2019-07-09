<h2>Tambah User</h2>
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
                                            <h4>Nama</h4>
                                            <input class="textfield" name="nama" required />
                                        
                                            <h4>Username</h4>
                                            <input class="textfield" name="username" required />

                                            <h4>Password</h4>
                                            <input class="textfield" type="password" name="password" required />
                                        
                                            <h4>Level</h4>
                                            <select class="textfield" name="level" required />
                                                <option>PILIH</option>
                                                <option>admin</option>
                                                <option>guru</option>
                                            </select>
                                            <br>
                                            <input type="submit" name="simpan" value="Simpan" class="simpan">

                                </form>

<?php 
    
    $nama        = $_POST['nama'];
    $username    = $_POST['username'];
    $password    = $_POST['password'];
    $level       = $_POST['level'];

    $simpan      = $_POST['simpan'];

    if ($simpan) {

        $sql = $koneksi->query("insert into user(nama, username, password, level)values('$nama','$username','$password','$level')");

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
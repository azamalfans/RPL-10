<?php 

    session_start();
    $koneksi = new mysqli("localhost","root","","db_sekolah");

    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['level']==""){
        header("location:beranda.php");
    }
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Sistem Informasi Absensi - SMA Negeri 99</title>
    <!-- MY STYLES-->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet">
    <link href="assets/css/font-awesome.css" rel="stylesheet">
</head>
<body>

<!-- Awal Header -->
<?php 
    include './include/headeruser.php'
?>
<!-- Akhir Header -->

  <nav>
    <div class="width">
      <ul>
          <li>
            <a href="?page=user"><i class="fa fa-desktop fa"></i> Beranda</a>
          </li>

          <li>
            <a href="?page=siswa&aksi=tambah"><i class="fa fa-arrow-circle-o-down fa"></i> Absensi</a>
          </li>

          <li>
            <a href="?page=siswa"><i class="fa fa-group fa"></i> Data Siswa</a>
          </li>

          <li>
            <a href="?page=kelas"><i class="fa fa-bank fa"></i> Data Kelas</a>
          </li>
          
          <li class="login" style="float: right;"><a href="logout.php"><i class="fa fa-sign-out fa"></i> Logout</a></li>
      </ul>
    </div>
  </nav><br>
        <?php 

                        error_reporting(E_ALL ^ (E_NOTICE |E_WARNING));;
                        $page = $_GET['page'];
                        $aksi = $_GET['aksi'];

                        if ($page == "user") {
                             if ($aksi == "") {
                                include "user.php";
                        }
                        }

                            
                        if ($page == "siswa") {
                             if ($aksi == "") {
                                include "page/user/siswa/siswa.php";
                            }elseif ($aksi == "tambah") {
                                include "page/user/siswa/tambah.php";
                            }elseif ($aksi == "ubah") {
                                include "page/user/siswa/ubah.php";
                            }elseif ($aksi == "hapus") {
                                include "page/user/siswa/hapus.php";
                            }

                        }elseif ($page == "guru") {
                            if ($aksi == "") {
                                include "";
                            }elseif ($aksi == "tambah") {
                                include "page/user/guru/tambah.php";
                            }elseif ($aksi == "ubah") {
                                include "";
                            }elseif ($aksi == "hapus") {
                                include "";
                            }  

                        }elseif ($page == "kelas") {
                            if ($aksi == "") { 
                                include "page/user/kelas/kelas.php";   
                            }elseif ($aksi == "tambah") {
                                include "page/user/kelas/tambah.php";
                            }elseif ($aksi == "ubah") {
                                include "page/user/kelas/ubah.php";
                            }elseif ($aksi == "hapus") {
                                include "page/user/kelas/hapus.php";
                            }
                        }
                     ?>

</body>
</html>
 <!--Akhir Footer-->
<?php
	include './include/footer.php'
?>
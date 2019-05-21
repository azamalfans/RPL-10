<?php 
    
    // Memanggil koneksi database
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
    <title>Sistem Informasi Absensi - SD NEGERI 47</title>
    <!-- MY STYLES-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
    <link href="assets/css/font-awesome.css" rel="stylesheet">
</head>
<body>
<!-- Awal Header -->
<?php 
    include './identitas/headeradmin.php'
?>
<!-- Akhir Header -->

<!-- Awal Menu Navigasi -->
    <nav>
    <div class="width">
      <ul>
          <li>
            <a href="?page=admin"><i class="fa fa-desktop fa"></i> Beranda</a>
          </li>

          <li>
            <a href="?page=guru&aksi=tambah"><i class="fa fa-arrow-circle-o-down fa"></i> Absensi</a>
          </li>

          <li>
            <a href="?page=siswa"><i class="fa fa-group fa"></i> Data Siswa</a>
          </li>

          <li>
            <a href="?page=guru"><i class="fa fa-group fa"></i> Data Guru</a>
          </li>

          <li>
            <a href="?page=kelas"><i class="fa fa-bank fa"></i> Data Kelas</a>
          </li>

          <li>
            <a href="?page=user"><i class="fa fa-user fa"></i> Data User</a>
          </li>


          <li class="login" style="float: right;"><a href="logout.php"><i class="fa fa-sign-out fa"></i> Logout</a></li>
      </ul>
    </div>
  </nav><br>
<!-- Akhir Menu Navigasi -->



        <?php 
                        // Memanggil Menu Dengan Dinamis
                        error_reporting(E_ALL ^ (E_NOTICE |E_WARNING));;
                        $page = $_GET['page'];
                        $aksi = $_GET['aksi'];

                        if ($page == "admin") {
                             if ($aksi == "") {
                                include "admin.php";
                        }
                        }

                            
                        if ($page == "siswa") {
                             if ($aksi == "") {
                                include "page/admin/siswa/siswa.php";
                            }elseif ($aksi == "tambah") {
                                include "page/admin/siswa/tambah.php";
                            }elseif ($aksi == "ubah") {
                                include "page/admin/siswa/ubah.php";
                            }elseif ($aksi == "hapus") {
                                include "page/admin/siswa/hapus.php";
                            }

                        }elseif ($page == "guru") {
                            if ($aksi == "") {
                                include "page/admin/guru/guru.php";
                            }elseif ($aksi == "tambah") {
                                include "page/admin/guru/tambah.php";
                            }elseif ($aksi == "ubah") {
                                include "page/admin/guru/ubah.php";
                            }elseif ($aksi == "hapus") {
                                include "page/admin/guru/hapus.php";
                            }

                        }elseif ($page == "kelas") {
                            if ($aksi == "") { 
                                include "page/admin/kelas/kelas.php";   
                            }elseif ($aksi == "tambah") {
                                include "page/admin/kelas/tambah.php";
                            }elseif ($aksi == "ubah") {
                                include "page/admin/kelas/ubah.php";
                            }elseif ($aksi == "hapus") {
                                include "page/admin/kelas/hapus.php";
                            }

                        }elseif ($page == "staff") {
                            if ($aksi == "") { 
                                include "page/admin/staff/staff.php";
                            }elseif ($aksi == "tambah") {
                                include "page/admin/staff/tambah.php";
                            }elseif ($aksi == "ubah") {
                                include "page/admin/staff/ubah.php";
                            }elseif ($aksi == "hapus") {
                                include "page/admin/staff/hapus.php";
                            }  

                        }elseif ($page == "user") {
                            if ($aksi == "") { 
                                include "page/admin/user/user.php";
                            }elseif ($aksi == "tambah") {
                                include "page/admin/user/tambah.php";
                            }elseif ($aksi == "ubah") {
                                include "page/admin/user/ubah.php";
                            }elseif ($aksi == "hapus") {
                                include "page/admin/user/hapus.php";
                            }    
                            
                        }
                     ?>

</body>
</html>
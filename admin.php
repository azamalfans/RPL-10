<?php 
    // Memanggil Koneksi Database 
    session_start();
    $koneksi = new mysqli("localhost","root","","db_sekolah");
?>
<!-- Memanggil CSS -->
<link rel="stylesheet" type="text/css" href="assets/css/custom.css">

<!-- Awal Konten -->
<div id="body" class="width">
    <section id="content">
      <article>
        <h3>Aplikasi Sistem Informasi Absensi SMA Negeri 99</h3>
        <br>
        <img style="width: 50%;
                    margin-left: 130px;
                    margin-top: 50px;" src="image/tutwur.png" alt="Daisy" class="align-center"/>   
      </article>
    </section>
<!-- Akhir Konten -->

<!-- Awal Sidebar / Dashboard -->
<aside class="sidebar">
        <ul>  
               <li>
                    <h4><i class="fa fa-dashboard fa"></i> Dashboard</h4>
                    <ul>
                        <li>
                            <a href="?page=siswa&aksi=tambah" style="text-decoration: none;"><i class="fa fa-user fa"></i> Tambah Siswa</a>
                        </li>

                        <li>
                            <a href="?page=guru&aksi=tambah" style="text-decoration: none;"><i class="fa fa-group fa"></i> Tambah Guru</a>
                        </li>

                        <li>
                            <a href="?page=kelas&aksi=tambah" style="text-decoration: none;"><i class="fa fa-bank fa"></i> Tambah Kelas</a>
                        </li>

                        <li>
                            <a href="?page=user&aksi=tambah" style="text-decoration: none;"><i class="fa fa-group fa"></i> Tambah User</a>
                        </li>
                    </ul>
            </li>
<!-- Akhir Sidebar / Dashboard -->



<!-- Awal Sidebar / Info --> 
        <?php 
            include './include/sidebarinfo.php'
        ?>
<!-- Akhir Sidebar / Info -->



<!-- Awal Footer -->
<div class="clear"></div>
        </div>
<!-- Akhir Footer -->
</div>
</div>
</body>

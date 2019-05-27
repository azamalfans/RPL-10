<?php 
$koneksi = new mysqli("localhost","root","","db_sekolah");
?>


<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SISTEM INFORMASI ABSENSI SMAN 99</title>
<link rel="stylesheet" href="assets/css/custom.css" type="text/css" />
<link rel="stylesheet" href="assets/css/font-awesome.css" type="text/css"/>
<link rel="stylesheet" href="assets/css/tabeldata.css" type="text/css"/>
</head>
<body>
    
  <!-- Awal Header -->
    <?php 
      include './include/header.php'
    ?>
  <!-- Akhir Header -->

  <!-- Awal Menu Navigasi -->
    <?php 
      include './include/menu.php'
    ?>
  <!-- Akhir Menu Navigasi -->

  <!-- Awal Konten -->
    <div id="body" class="width">
    <section id="content">
      <article>
        <h3>Informasi Absensi Siswa</h3><br>
        <h4> <?php $tgl=date('l, d-m-Y'); echo "Hari ini tanggal : $tgl"; ?> </h4>
        <table>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Siswa</th>
                                            <th>Kelas</th>
                                            <th>Tanggal</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php 

                                            $no = 1;

                                            $sql = $koneksi->query("select * from tb_siswa");

                                            while ($data = $sql->fetch_assoc()) {

                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['nama'];?></td>
                                            <td><?php echo $data['kelas'];?></td>
                                            <td><?php echo $data['tanggal'];?></td>
                                            <td><?php echo $data['jenis_kelamin'];?></td>
                                            <td><?php echo $data['keterangan'];?></td>
                                        </tr>


                                        <?php } ?>
                                    </tbody>
                                </table>
      </article>
    </section>
    <!-- Akhir Konten -->

    <!-- Awal Footer -->
    <?php 
      include './include/footer.php'
    ?>
    <!-- Akhir Footer -->
</div>
</body>
</html>
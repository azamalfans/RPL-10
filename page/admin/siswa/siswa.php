<style>
    a{
        text-decoration: none;
    }

    
    .tambah {
        text-decoration: none;
        margin-left: 10px;
    }

    .cetak {
        text-decoration: none;
        margin-left: 10px;
    }
</style>
<h2 align="center">Informasi Data Absensi Siswa</h2>
<a class="tambah" href="?page=siswa&aksi=tambah"><i class="fa fa-edit fa"></i> Tambah</a>
<a class="cetak" href="./laporan/laporan_siswa.php"><i class="fa fa-print fa"></i> Cetak Laporan</a>
<link rel="stylesheet" type="text/css" href="assets/css/tabel.css"/>
<div align="center"><br>
                            <table>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NISN</th>
                                            <th>Nama Siswa</th>
                                            <th>Kelas</th>
                                            <th>Nomor WA OrTu/Wali</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
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
                                            <td><?php echo $data['nisn'];?></td>
                                            <td><?php echo $data['nama'];?></td>
                                            <td><?php echo $data['kelas'];?></td>
                                            <td><?php echo $data['nomorhp'];?></td>
                                            <td><?php echo $data['jenis_kelamin'];?></td>
                                            <td><?php echo $data['keterangan'];?></td>
                                            <td>
                                                <?php
                                                $siswa=urlencode($data['nama']);
                                                $klas=urlencode($data['kelas']);
                                                $attend=urlencode($data['keterangan']);
                                                $useraktif=urlencode($_SESSION['nama']);
                                                ?>
                                                <a href="https://wa.me/62<?php echo $data['nomorhp'];?>?text=Yang%20terhormat%20Bapak%2FIbu%20Orang%20Tua%2FWali%20dari%20%2A<?php echo $siswa?>%2A%20kelas%20%2A<?php echo $klas?>%2A%20bahwa%20yang%20bersangkutan%20telah%20<?php echo $attend?>%20pada%20hari%20ini.%0A%2ASMAN%2099%2A" target="_blank"> Beritahu Ortu</a>
                                                <a href="?page=siswa&aksi=ubah&id=<?php echo $data['id']; ?>" ><i class="fa fa-pencil fa"></i> Ubah</a>
                                                <a onclick="return confirm('Anda Yakin Ingin Menghapus Siswa Ini ?')" href="?page=siswa&aksi=hapus&id=<?php echo $data['id']; ?>" ><i class="fa fa-trash fa" style="margin-left: 10px;"></i> Hapus</a>                                           
                                            </td>
                                        </tr>


                                        <?php } ?>
                                    </tbody>
                                </table>


                              </div>
                     </div>
                 </div>
               </div>
     </div>
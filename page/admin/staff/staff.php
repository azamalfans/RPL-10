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
<h2 align="center">Informasi Data Staff</h2>
<a class="tambah" href="?page=staff&aksi=tambah"><i class="fa fa-edit fa"></i> Tambah Staff</a>
<a class="cetak" href="./laporan/laporan_staff.php"><i class="fa fa-print fa"></i> Cetak Laporan</a>
<link rel="stylesheet" type="text/css" href="assets/css/tabel.css">
<div align="center"><br>
                            <table>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIP</th>
                                            <th>Nama Staff</th>
                                            <th>Pendidikan Terakhir</th>
                                            <th>Masa Kerja</th>
                                            <th>Mengajar Kelas</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php 

                                            $no = 1;

                                            $sql = $koneksi->query("select * from tb_staff");

                                            while ($data = $sql->fetch_assoc()) {

                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['nip'];?></td>
                                            <td><?php echo $data['nama_staff'];?></td>
                                            <td><?php echo $data['pendidikan_akhir'];?></td>
                                            <td><?php echo $data['masa_kerja'];?></td>
                                            <td><?php echo $data['mengajar_kelas'];?></td>
                                            <td>
                                                <a href="?page=staff&aksi=ubah&id=<?php echo $data['id']; ?>"><i class="fa fa-pencil fa"></i> Ubah</a>
                                                <a onclick="return confirm('Anda Yakin Ingin Menghapus Pelajaran Ini ?')" href="?page=staff&aksi=hapus&id=<?php echo $data['id']; ?>"><i class="fa fa-trash fa" style="margin-left: 10px;"></i> Hapus</a>
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
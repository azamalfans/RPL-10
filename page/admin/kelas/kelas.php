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
<h2 align="center">Informasi Data Absensi Kelas</h2>
<a class="tambah" href="?page=kelas&aksi=tambah"><i class="fa fa-edit fa"></i> Tambah Kelas</a>
<a class="cetak" href="./laporan/laporan_kelas.php"><i class="fa fa-print fa"></i> Cetak Laporan</a>
<link rel="stylesheet" type="text/css" href="assets/css/tabel.css">
<div align="center"><br>
                            <table>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kelas</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php 

                                            $no = 1;

                                            $sql = $koneksi->query("select * from tb_kelas");

                                            while ($data = $sql->fetch_assoc()) {

                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['nama'];?></td>
                                            <td><?php echo $data['keterangan'];?></td>
                                            <td>
                                                <a href="?page=kelas&aksi=ubah&id=<?php echo $data['id']; ?>"><i class="fa fa-pencil fa"></i> Ubah</a>
                                                <a onclick="return confirm('Anda Yakin Ingin Menghapus Kelas Ini ?')" href="?page=kelas&aksi=hapus&id=<?php echo $data['id']; ?>"><i class="fa fa-trash fa" style="margin-left: 10px;"></i> Hapus</a>
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
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
<h2 align="center">Informasi Data Absensi Guru</h2>
<a class="tambah" href="?page=guru&aksi=tambah"><i class="fa fa-edit fa"></i> Tambah Guru</a>
<a class="cetak" href="./laporan/laporan_guru.php"><i class="fa fa-print fa"></i> Cetak Laporan</a>
<link rel="stylesheet" type="text/css" href="assets/css/tabel.css">
<div align="center"><br>
                            <table>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIP</th>
                                            <th>Nama Guru</th>
                                            <th>Tanggal</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php 

                                            $no = 1;

                                            $sql = $koneksi->query("select * from tb_guru");

                                            while ($data = $sql->fetch_assoc()) {

                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['nip'];?></td>
                                            <td><?php echo $data['nama'];?></td>
                                            <td><?php echo $data['tanggal'];?></td>
                                            <td><?php echo $data['jenis_kelamin'];?></td>
                                            <td><?php echo $data['keterangan'];?></td>
                                            <td>
                                                <a href="?page=guru&aksi=ubah&id=<?php echo $data['id']; ?>"><i class="fa fa-pencil fa"></i> Ubah</a>
                                                <a onclick="return confirm('Anda Yakin Ingin Menghapus Guru Ini ?')" href="?page=guru&aksi=hapus&id=<?php echo $data['id']; ?>"><i class="fa fa-trash fa" style="margin-left: 10px;"></i> Hapus</a>
                                            </td>
                                        </tr>


                                        <?php } ?>
                                    </tbody>
                                </table>
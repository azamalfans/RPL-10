-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jul 2019 pada 10.31
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id` int(11) NOT NULL,
  `nisn` int(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `tanggal` int(50) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `keterangan` enum('Hadir','Sakit','Izin','Alpa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id` int(11) NOT NULL,
  `nip` int(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `keterangan` enum('Hadir','Sakit','Izin','Alpa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`id`, `nip`, `nama`, `tanggal`, `jenis_kelamin`, `keterangan`) VALUES
(2, 123456, 'Nama Guru', '12-3-1998', 'Perempuan', 'Izin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kelas`
--

INSERT INTO `tb_kelas` (`id`, `nama`, `keterangan`) VALUES
(1, '1', 'Kelas Satu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id` int(11) NOT NULL,
  `nisn` int(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `nomorhp` bigint(15) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `keterangan` enum('Hadir','Sakit','Izin','Alpa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id`, `nisn`, `nama`, `kelas`, `nomorhp`, `jenis_kelamin`, `keterangan`) VALUES
(72, 17001, 'Nur Ismi', '1', 0, 'Perempuan', 'Hadir'),
(73, 17002, 'Doni Adi Kusuma', '1', 0, 'Laki-laki', 'Hadir'),
(74, 17003, 'Aina Rihhadatulaisy Abiyyah', '1', 0, 'Perempuan', 'Hadir'),
(75, 17004, 'Amara Febriyanti', '1', 0, 'Perempuan', 'Hadir'),
(76, 17005, 'Deyolla Virgitania', '1', 0, 'Perempuan', 'Hadir'),
(77, 17006, 'Ahmad Fahru Riza', '1', 0, 'Laki-laki', 'Hadir'),
(78, 17007, 'Eva Waty Tampubolon', '1', 0, 'Perempuan', 'Hadir'),
(79, 17008, 'Yusuf Affandi', '1', 0, 'Laki-laki', 'Hadir'),
(80, 17009, 'Fitri Amalia Langgundi', '1', 0, 'Perempuan', 'Hadir'),
(81, 17010, 'Khoerul Umam', '1', 0, 'Laki-laki', 'Hadir'),
(82, 17011, 'Adelia Kurniawati', '1', 0, 'Perempuan', 'Hadir'),
(83, 17012, 'Alsandy Maulana', '1', 0, 'Laki-laki', 'Hadir'),
(84, 17013, 'Saka Oktaviani', '1', 0, 'Perempuan', 'Hadir'),
(85, 17014, 'Hafsah Nur Thoyyibah Istiqomah', '1', 0, 'Perempuan', 'Hadir'),
(86, 17015, 'Juniandito Ananda Putra Nugroho', '1', 0, 'Laki-laki', 'Alpa'),
(87, 17016, 'Arifatul Khasanah', '1', 0, 'Perempuan', 'Hadir'),
(88, 17017, 'Anindya Heranika', '1', 0, 'Perempuan', 'Hadir'),
(89, 17018, 'MUHAMAD BIKI HAMZAH', '1', 0, 'Laki-laki', 'Hadir'),
(90, 17019, 'RIZKY HIJRIYANI', '1', 0, 'Perempuan', 'Hadir'),
(91, 17020, 'NIA ZULIA SAPUTRI', '1', 0, 'Perempuan', 'Hadir'),
(92, 17021, 'DANY PRADANA', '2', 0, 'Laki-laki', 'Hadir'),
(93, 17022, 'DIAN ALYA KORZHAKIN', '2', 0, 'Perempuan', 'Hadir'),
(94, 17023, 'DODDY RIZAL NOVIANTO', '2', 0, 'Laki-laki', 'Hadir'),
(95, 17024, 'AMIRA HEVATASHA', '2', 0, 'Perempuan', 'Hadir'),
(96, 17025, 'MUHAMAD ARDHIANSYAH', '2', 0, 'Laki-laki', 'Hadir'),
(97, 17026, 'BINA ESTHERLY', '2', 0, 'Perempuan', 'Hadir'),
(98, 17027, 'MUHAMMAD RIZAL AL QODRI', '2', 0, 'Laki-laki', 'Hadir'),
(99, 17028, 'GIGIH PAMBUKO', '2', 8996837686, 'Laki-laki', 'Hadir'),
(100, 17029, 'AHMAD FAWAID', '2', 0, 'Laki-laki', 'Hadir'),
(101, 17030, 'MUHAMAD IKHSAN HADI', '2', 0, 'Laki-laki', 'Hadir'),
(102, 17031, 'KIBAR LAKSONO', '2', 0, 'Laki-laki', 'Hadir'),
(103, 17032, 'INDAH SEKAR ARUM', '2', 0, 'Perempuan', 'Hadir'),
(104, 17033, 'AKHMAD IQBAL', '2', 0, 'Laki-laki', 'Alpa'),
(105, 17034, 'MAHENDRA ADHI PRASETIYA', '2', 0, 'Laki-laki', 'Hadir'),
(106, 17035, 'FEBRYAN SURYA SHANTIKA', '2', 0, 'Laki-laki', 'Hadir'),
(107, 17036, 'DANA RAMZA FAKHMA', '2', 0, 'Perempuan', 'Hadir'),
(108, 17037, 'MUKTAZAM HASBI ASHIDIQI', '2', 0, 'Laki-laki', 'Hadir'),
(109, 17038, 'AHMAD FAUZA AULIA', '2', 0, 'Laki-laki', 'Hadir'),
(110, 17039, 'RAFI EL FALIH', '2', 0, 'Laki-laki', 'Hadir'),
(111, 17040, 'JATMIKO AMUNG PRASOJO', '2', 0, 'Laki-laki', 'Hadir'),
(112, 17041, 'TEGUH PAMUNGKAS', '3', 0, 'Laki-laki', 'Hadir'),
(113, 17042, 'FARA AGUSTINE PUTRI PRATIWI', '3', 85713331596, 'Perempuan', 'Hadir'),
(114, 17043, 'ARIZAL BUDI WIBOWO', '3', 82243765071, 'Laki-laki', 'Hadir'),
(115, 17044, 'PUNGGI TRIMAS AGUSTINA', '3', 85290049122, 'Perempuan', 'Hadir'),
(116, 17045, 'MUHAMMAD RAFLI AINUN RIZKI', '3', 81329468858, 'Laki-laki', 'Hadir'),
(117, 17046, 'VERRA CHRISMA INDRIANI', '3', 81357199362, 'Perempuan', 'Hadir'),
(118, 17047, 'M ZAKKI MAHATIR', '3', 85647735645, 'Laki-laki', 'Hadir'),
(119, 17048, 'ARIF HAYATI INDAH LESTARI', '3', 82220688719, 'Perempuan', 'Hadir'),
(120, 17049, 'SIKWI PUSPITA SARI', '3', 82322495795, 'Perempuan', 'Sakit'),
(121, 17050, 'DINDA HUSNAA DHIYAULHAQ', '3', 87821492348, 'Perempuan', 'Izin'),
(122, 17051, 'IBNU AZAM ALFANSURI', '3', 85642993300, 'Laki-laki', 'Hadir'),
(123, 17052, 'AHMAD FAHRUDIN', '3', 82325094020, 'Laki-laki', 'Hadir'),
(124, 17053, 'TEGAR ARIF DANANJAYA', '3', 85700783500, 'Laki-laki', 'Hadir'),
(125, 17054, 'ROZAK ILHAM ADITYA', '3', 82134649399, 'Laki-laki', 'Hadir'),
(126, 17055, 'SULTHAN DAFFA FIRZATULLAH', '3', 8112415137, 'Laki-laki', 'Hadir'),
(127, 17056, 'LIANA EKA CAHYA NINGSIH', '3', 85891962598, 'Perempuan', 'Hadir'),
(128, 17057, 'ROZAKUL BARKHI', '3', 82334673247, 'Laki-laki', 'Hadir'),
(129, 17058, 'FITRAH MUNAWARAH', '3', 0, 'Laki-laki', 'Hadir'),
(130, 17059, 'AR RASYID YUDHA PRADANA', '3', 85713444967, 'Laki-laki', 'Hadir'),
(131, 17060, 'DENY PRATAMA', '3', 82325702443, 'Laki-laki', 'Hadir'),
(132, 17061, 'MUHAMMAD ULIL ALBAB', '4', 8557688810, 'Laki-laki', 'Hadir'),
(133, 17062, 'NUR HILMI INSAN MUHAMMAD', '4', 83826312084, 'Laki-laki', 'Hadir'),
(134, 17063, 'ANGGA ADIANSYA', '4', 89661126514, 'Laki-laki', 'Izin'),
(135, 17064, 'SOFRINA MUIZZUN HAKIM', '4', 85606599496, 'Laki-laki', 'Hadir'),
(136, 17065, 'BONDAN EKA NUGRAHA', '4', 82324383996, 'Laki-laki', 'Hadir'),
(137, 17066, 'FARHAN AIDIL JANUAR', '4', 81903934978, 'Laki-laki', 'Hadir'),
(138, 17067, 'WAHYU DWI KUSUMA', '4', 8976349689, 'Laki-laki', 'Hadir'),
(139, 17068, 'PAHALA BIMA PRAMUDYA', '4', 81802701290, 'Laki-laki', 'Hadir'),
(140, 17069, 'MUHAMMAD MAFTUH IHSAN', '4', 81325145482, 'Laki-laki', 'Hadir'),
(141, 17070, 'Epafraditus Memoriano', '4', 89671098215, 'Laki-laki', 'Hadir'),
(142, 17071, 'DHEA PUTRI MIRADIKNA', '4', 895632628435, 'Perempuan', 'Hadir'),
(143, 17072, 'IQBAL TAUFIQ AKMAL', '4', 88228726486, 'Laki-laki', 'Hadir'),
(144, 17074, 'RANGGADIPA DASAPRILAWHEDI', '4', 82136685472, 'Laki-laki', 'Hadir'),
(145, 17074, 'AHMAD RIZQI KHOIRONI', '4', 0, 'Laki-laki', 'Alpa'),
(146, 17075, 'MUHAMMAD FAISHAL FADHILLAH', '4', 8882549068, 'Laki-laki', 'Hadir'),
(147, 17076, 'ULIL KHAFABI', '4', 85293484023, 'Laki-laki', 'Hadir'),
(148, 17077, 'YAYAN DWI KRISDIANTORO', '4', 83836406899, 'Laki-laki', 'Hadir'),
(149, 17078, 'QOMARIAH NAJMI', '4', 85774765754, 'Perempuan', 'Alpa'),
(150, 17079, 'ROFIQUL ANAM', '4', 81215673112, 'Laki-laki', 'Hadir'),
(151, 17080, 'MUHAMMAD GHIFARI KHANIF ALHUSNA', '4', 85695402509, 'Laki-laki', 'Hadir'),
(152, 17081, 'EKO WAHYU PRASETYO', '4', 82274470340, 'Laki-laki', 'Izin'),
(153, 12345, 'AGUS RIYADI', '1', 85728334774, 'Laki-laki', 'Sakit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Admin', 'admin', 'admin', 'admin'),
(9, 'Santer Pujito', 'sanpuji', 'sanpuji', 'guru'),
(10, 'Sugih Bondo Nyowo', 'sugihbn', 'sugihbn', 'guru'),
(11, 'Guru Baru', 'guru', 'guru', 'guru');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

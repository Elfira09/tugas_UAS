-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Des 2022 pada 14.18
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahsakit_ci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `artikel_id` int(11) NOT NULL,
  `artikel_tanggal` datetime NOT NULL,
  `artikel_judul` varchar(255) NOT NULL,
  `artikel_slug` varchar(255) NOT NULL,
  `artikel_konten` longtext NOT NULL,
  `artikel_sampul` varchar(255) NOT NULL,
  `artikel_author` int(11) NOT NULL,
  `artikel_kategori` int(11) NOT NULL,
  `artikel_status` enum('publish','draft') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`artikel_id`, `artikel_tanggal`, `artikel_judul`, `artikel_slug`, `artikel_konten`, `artikel_sampul`, `artikel_author`, `artikel_kategori`, `artikel_status`) VALUES
(2, '2022-12-02 15:39:27', '5 Tips Menjaga Kesehatan Tubuh', '5-tips-menjaga-kesehatan-tubuh', '<p>Tren kasus positif Covid-19 di Indonesia meningkat hingga 31 persen dalam&nbsp;beberapa&nbsp;pekan terakhir. Epidemiolog singgung kebijakan lepas masker di ruang publik cukup berisiko. Epidemiolog dari Griffith University Australia, Dicky Budiman mengatakan, dari kondisi lonjakan kasus lagi seperti saat ini, seharusnya pemerintah Indonesia tidak boleh lupa kalau kita tidak bisa lepas dari situasi global.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Situasi global yang dimaksud adalah kondisi Covid-19 yang masih berstatus pandemi, sehingga kebijakan-kebijakan yang bisa diterapkan atau perlu dikeluarkan harusnya selaras dengan situasi global dan target terkendalinya kasus infeksi baru Covid-19 sampai pandemi dinyatakan benar-benar berakhir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Menyikapi hal diatas, tentu saja salah satu hal yang dapat kita lakukan untuk menghindari hal tersebut yaitu dengan terus menjaga kesehatan tubuh. Selain keluarga, harta yang paling berharga adalah kesehatan. Bayangkan berapa banyak biaya yang harus kamu keluarkan jika kamu terserang penyakit. Mahal bukan? Maka dari itu, menjaga kesehatan adalah wajib hukumnya untuk terhindar dari berbagai macam penyakit.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Menjalankan pola hidup sehat adalah dasar dari menjaga tubuh tetap fit. Apalagi sampai saat ini dunia masih berjuang melawan virus corona, bahkan para ahli pun masih terus meneliti cara menaklukkan virus ini. Apa yang harus kamu lakukan adalah tetap jalankan pola hidup sehat dan ikuti protokol kesehatan.&nbsp;Berikut 5 cara mudah menjaga kesehatan tubuh:</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p><a name=\"1-makan-makanan-yang-bergizi\"></a>Makan Makanan yang BergiziSejak kecil kita sudah dikenalkan dengan pola makan 4 sehat 5 sempurna. Jadi, pastikan tubuh kamu kamu selalu menerima asupan nutrisi yang seimbang. Kamu bisa konsumsi daging, susu, telur, atau ikan untuk sumber protein, dan karbohidrat dari nasi, kentang, oat, atau roti gandum untuk memberikan kamu energi. Jangan lupa selalu konsumsi buah dan sayur yang mengandung serat prebiotik, vitamin, mineral, serta berbagai antioksidan.</p>\r\n	</li>\r\n	<li>\r\n	<p><a name=\"2-olahraga-rutin\"></a>Olahraga Rutin</p>\r\n\r\n	<p>Selain makan makanan yang bergizi, kamu juga perlu rutin olahraga agar tubuh tetap aktif, sehat, ideal, dan bugar. Olahraga juga dapat mencegah berbagai macam penyakit dan mengurangi stres. Biasakan luangkan waktu setiap harinya selama 20-30 menit untuk menggerakan tubuhmu. Tak perlu yang berat, kamu bisa hanya berjalan kaki atau pilih jenis olahraga lainnya yang kamu sukai.</p>\r\n	</li>\r\n	<li>\r\n	<p><a name=\"3-perbanyak-minum-air-putih\"></a>Perbanyak Minum Air Putih</p>\r\n\r\n	<p>Boba dan kopi-kopi kekinian memang selalu membuat kita tergoda. Tapi, jangan lupa untuk perhatikan asupan air putih juga, karena dengan tercukupinya air dalam tubuh, fungsi organ kita pun akan bekerja secara maksimal. Sesuaikan kebutuhan cairan ini dengan berat tubuh dan intensitas kegiatan kamu. Jika kamu banyak beraktivitas, tentunya kamu perlu mengonsumsi air putih lebih banyak.</p>\r\n	</li>\r\n	<li>\r\n	<p><a name=\"4-kelola-tidur-dengan-baik\"></a>Kelola Tidur dengan Baik</p>\r\n\r\n	<p>Jangan pernah meremehkan tidur, karena manfaatnya sangat besar bagi tubuh kamu. Tidur jadi kunci dari kekebalan tubuh yang kuat, meningkatkan daya ingat, dan bisa menjadi pengendali nafsu makan. Untuk orang dewasa, kamu perlu tidur minimal 8 jam setiap hari. Orang yang tidurnya kurang dari 6 jam setiap malam akan 4 kali lebih mudah mengalami flu, dibandingkan yang tidurnya cukup. Jadi, mulai pertimbangkan kembali pengelolaan tidurmu dengan baik ya.</p>\r\n\r\n	<p>&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p><a name=\"5-mengelola-stres\"></a>Mengelola Stres</p>\r\n\r\n	<p>Empat kegiatan di atas sudah kamu lakukan dengan baik dan rutin, namun kamu masih sering pusing dan banyak pikiran? Hati-hati, stres malah membuatmu mudah terserang penyakit. Stres sudah terbukti dapat mengganggu sistem imun tubuh. Orang yang stres dapat melepas dan mengurangi kemampuan hormon kortisol yang bisa melawan peradangan dan penyakit.</p>\r\n	</li>\r\n</ol>\r\n', 'Berpikir-Positif1.jpg', 1, 2, 'publish'),
(3, '2022-12-02 15:41:27', '9 TIPS MENJAGA KESEHATAN TUBUH ', '9-tips-menjaga-kesehatan-tubuh', '<p>Kesehatan merupakan harta yang tak ternilai harganya. Oleh sebab itu agar tetap sehat orang rela melakukan apa saja. Segala cara yang dilakukan baik yang bernilai medis maupun non medis, dari yang logis hingga yang bernuansa supernatural adalah beragam usaha yang dilakukan oleh banyak orang dari berbagai kalangan untuk senantiasa sehat atau mendapatkan kembali kesehatannya.</p>\r\n\r\n<p>Sering juga cara yang dilakukan menghabiskan banyak biaya dan bahkan juga tak jarang menabrak aneka norma dan logika. Tetapi sebenarnya menjaga diri untuk tetap sehat tidaklah sulit, dan kadangkala juga tidak memerlukan biaya sama sekali. Tetapi tentunya kits butuh ekstra kesabaran dan ketelatenan, karena hanya sedikit orang bisa untuk tetap konsisten menjalani.</p>\r\n\r\n<p>Cara menjaga kesehatan agar tidak mudah sakit pun sering dicari oleh kita yang memiliki kesibukan tinggi. Orang yang aktif rentan untuk terkena berbagai macam penyakit dibandingkan dengan orang yang memiliki sedikit mobilitas. Oleh sebab itu sangat penting bagi kita yang aktif untuk memperhatikan kesehatannya.</p>\r\n\r\n<p>Karena orang yang mempunyai kesibukan tinggi dia akan mudah sekali lelah. Saat tubuh capek ataupun lelah sistem imun akan melemah, dan saat imun melemah itulah berbagai macam penyakit akan bisa masuk ke dalam tubuh. Orang yang sibuk dengan pekerjaannya pun akan kesulitan dalam mengatur pola tidurnya sehingga saat seseorang memiliki jam tidur malam yang sedikit dia akan mudah terkena berbagai macam penyakit akibat kurang tidur. Tidak hanya itu saja orang dengan kesibukan tinggi sering terkena stres dimana stres itu adalah penyebab utama dari berbagai macam penyakit serius.</p>\r\n\r\n<p>Berikut ini ada beberapa cara menjaga kesehatan tubuh atau cara hidup sehat yang dapat kita jadikan rujukan agar tubuh tetap fit dan sehat serta senantiasa bahagia dalam menjalani hidup.</p>\r\n', 'Berpikir-Positif.jpg', 1, 2, 'publish');

-- --------------------------------------------------------

--
-- Struktur dari tabel `halaman`
--

CREATE TABLE `halaman` (
  `halaman_id` int(11) NOT NULL,
  `halaman_judul` varchar(255) NOT NULL,
  `halaman_slug` varchar(255) NOT NULL,
  `halaman_konten` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `halaman`
--

INSERT INTO `halaman` (`halaman_id`, `halaman_judul`, `halaman_slug`, `halaman_konten`) VALUES
(1, 'Kontak Kami', 'kontak-kami', '<p>081384422806</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(255) NOT NULL,
  `kategori_slug` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_nama`, `kategori_slug`) VALUES
(2, 'Tips Sehat', 0),
(3, 'Tips Makan Sehat', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `pengguna_id` int(11) NOT NULL,
  `pengguna_nama` varchar(50) NOT NULL,
  `pengguna_email` varchar(255) NOT NULL,
  `pengguna_username` varchar(50) NOT NULL,
  `pengguna_password` varchar(255) NOT NULL,
  `pengguna_level` enum('admin','penulis') NOT NULL,
  `pengguna_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`pengguna_id`, `pengguna_nama`, `pengguna_email`, `pengguna_username`, `pengguna_password`, `pengguna_level`, `pengguna_status`) VALUES
(1, 'Domek', 'domek@gmail.com', 'admin', '0192023a7bbd73250516f069df18b500', 'admin', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dokter`
--

CREATE TABLE `tbl_dokter` (
  `id_dokter1` int(11) NOT NULL,
  `nama_dokter` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `jenis_dokter` varchar(200) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_dokter`
--

INSERT INTO `tbl_dokter` (`id_dokter1`, `nama_dokter`, `alamat`, `jenis_dokter`, `no_hp`, `foto`) VALUES
(22, 'ASep', 'Cileungsi', 'GIGI', '08138442080', ''),
(23, 'Zidhan', 'Pondok Ungu', 'GIGI', '081384422806', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `id_transaksi_jadwal` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`artikel_id`);

--
-- Indeks untuk tabel `halaman`
--
ALTER TABLE `halaman`
  ADD PRIMARY KEY (`halaman_id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- Indeks untuk tabel `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  ADD PRIMARY KEY (`id_dokter1`);

--
-- Indeks untuk tabel `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`id_transaksi_jadwal`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `artikel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `halaman`
--
ALTER TABLE `halaman`
  MODIFY `halaman_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  MODIFY `id_dokter1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `id_transaksi_jadwal` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

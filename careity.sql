-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 04, 2021 at 03:45 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `careity`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(2000) NOT NULL,
  `gambar` varchar(1000) NOT NULL,
  `tanggal` datetime NOT NULL,
  `jumlah` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `deskripsi`, `gambar`, `tanggal`, `jumlah`) VALUES
(3, 'Peduli korban banjir bandang', 'PT. SI4207, Jakarta Selatan -- Bantuan banjir yang digalang oleh PT. SI4207 mulai Rabu (9/12)  sudah disalurkan di beberapa titik dalam Wilayah Kecamatan Ciganjur dan sekitarnya.\r\n\r\nBantuan itu berupa 475 kg beras, 120 kg minyak goreng, 105 kardus mie instan, 50 kg gula dan 20 papan telur, serta beberapa barang lainnya.\r\n\r\nPenyaluran bantuan dilakukan melalui PT. SI4207 yang  langsung turun ke lokasi banjir, kemudian dibagi rata untuk dayah-dayah yang terdampak banjir. Ini merupakan bantuan tahap pertama dan merupakan wujud kepedulian PT. SI4207 yang disalurkan selama dua hari sejak Rabu,(09/12) hingga  Kamis (10/12).\r\n“Sebagai wujud peduli kemanusiaan, mahasiswa dan pemuda Matangkuli yang saat ini berada di Jakarta Selatan pun ikut peduli dan hadir untuk meringankan beban para masyarakat yang sedang di timpa musibaah banjir,” kata Rifki.\r\n\r\n\"Kami  juga sangat berharap, kegiatan ini dapat menjadi motivasi, inspirasi dan energi tambahan kepada kita para pemuda hebat selaku penggerak kegiatan sosial dan kegiatan berbasi kreativitas lainnya.” tutup direktur PT. SI4207.', 'foto/gambarberita.png', '2021-01-03 23:11:48', 26080);

-- --------------------------------------------------------

--
-- Table structure for table `bukti_pembayaran_donasi`
--

CREATE TABLE `bukti_pembayaran_donasi` (
  `id` int(255) NOT NULL,
  `id_donasi` int(255) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bukti_pembayaran_penggalangan_dana`
--

CREATE TABLE `bukti_pembayaran_penggalangan_dana` (
  `id` int(255) NOT NULL,
  `id_penggalangan_dana` int(255) NOT NULL,
  `gambar` varchar(1000) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bukti_pembayaran_qurban`
--

CREATE TABLE `bukti_pembayaran_qurban` (
  `id` int(255) NOT NULL,
  `id_qurban` int(255) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bukti_pembayaran_zakat`
--

CREATE TABLE `bukti_pembayaran_zakat` (
  `id` int(255) NOT NULL,
  `id_zakat` int(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `jenis_zakat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_donasi`
--

CREATE TABLE `daftar_donasi` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `informasi` varchar(2000) NOT NULL,
  `gambar` varchar(1000) NOT NULL,
  `id_penerima` varchar(255) NOT NULL,
  `dana_terkumpul` int(255) NOT NULL,
  `dana_max` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_donasi`
--

INSERT INTO `daftar_donasi` (`id`, `nama`, `informasi`, `gambar`, `id_penerima`, `dana_terkumpul`, `dana_max`) VALUES
(9, 'Darurat Gunung Meletus. Ayo bantu warga terdampak!', 'Indonesia darurat Gunung Meletus. Semenjak beberapa hari yang lalu sejumlah Gunung di Indonesia mengalami letusan atau erupsi. Di antaranya Gunung Merapi di Yogyakarka, Gunung Semeru di Lumajang serta Gunung Ili Lewotolok di NTT.', 'foto/donasi2.png', '3', 0, 2000000),
(10, 'Bantu Korban Kebakaran Hutan di Australia', 'Kebakaran hutan yang sangat besar telah menyerang Australia. Bencana ini telah membakar area seluas 10 juta hektar di hampir seluruh negara bagian Australia. Luas lahan yang terbakar ini jauh lebih besar dibandingkan kebakaran hutan Amazon yang mencapai 890 ribu hektar', 'foto/donasi3.png', '3', 0, 2000000);

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `id` int(255) NOT NULL,
  `id_donasi` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `total_donasi` int(255) NOT NULL,
  `nama_donatur` varchar(255) NOT NULL,
  `nama_penerima` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donasi`
--

INSERT INTO `donasi` (`id`, `id_donasi`, `id_user`, `total_donasi`, `nama_donatur`, `nama_penerima`, `status`) VALUES
(1, 5, 3, 1000000, 'admin', 'admin', 'diterima'),
(3, 5, 3, 1000, 'admin', 'admin', 'diterima'),
(4, 3, 3, 1000, 'admin', 'admin', 'diterima'),
(5, 8, 5, 26080, 'tmtflx', 'admin', 'diterima');

-- --------------------------------------------------------

--
-- Table structure for table `donasi_post`
--

CREATE TABLE `donasi_post` (
  `id` int(255) NOT NULL,
  `nama_penerima` varchar(255) NOT NULL,
  `tanggal` datetime NOT NULL,
  `judul` varchar(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donasi_post`
--

INSERT INTO `donasi_post` (`id`, `nama_penerima`, `tanggal`, `judul`, `jumlah`, `gambar`) VALUES
(3, 'admin', '2021-01-03 23:11:48', 'Peduli korban banjir bandang', 26080, 'foto/gambarberita.png');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hewan_kurban`
--

CREATE TABLE `hewan_kurban` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `harga_standard` int(255) NOT NULL,
  `harga_medium` int(255) NOT NULL,
  `harga_premium` int(255) NOT NULL,
  `harga_spesial` int(255) NOT NULL,
  `informasi` varchar(2000) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hewan_kurban`
--

INSERT INTO `hewan_kurban` (`id`, `nama`, `jenis`, `harga_standard`, `harga_medium`, `harga_premium`, `harga_spesial`, `informasi`, `gambar`) VALUES
(1, 'Unta', 'unta', 33500000, 34000000, 34500000, 35000000, 'Unta berkualitas terbaik dengan bobot 300 kilogram yang dipastikan memenuhi seluruh kriteria hewan qurban yang layak diqurbankan, telah cukup usianya (usia unta lebih dari lima tahun), dan akan disalurkan untuk penerima manfaat di salah satu wilayah di Afrika atau Timur Tengah.', '/Unta.png'),
(2, 'Sapi', 'sapi', 17500000, 18000000, 18500000, 19000000, 'Sapi berkualitas terbaik dengan bobot 225 kilogram yang dipastikan memenuhi seluruh kriteria hewan qurban yang layak diqurbankan dan telah cukup usianya (usia sapi lebih dari dua tahun). Sapi regular tipe B akan disalurkan untuk penerima manfaat di salah satu wilayah yang berada di 34 provinsi Indonesia atau puluhan negara dunia (selain Palestina, Suriah, dan Yaman).', '/Sapi.png'),
(3, 'Kambing', 'kambing', 2500000, 3000000, 3500000, 4000000, 'Kambing berkualitas terbaik dengan bobot 27-30 kilogram yang dipastikan memenuhi seluruh kriteria hewan qurban yang layak diqurbankan dan telah cukup usianya (usia kambing lebih dari satu tahun). Kambing regular tipe C akan disalurkan untuk penerima manfaat di salah satu wilayah yang berada di 34 provinsi Indonesia atau puluhan negara dunia (selain Palestina, Suriah, dan Yaman).', 'Kambing.png');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `total` int(255) NOT NULL,
  `metode` varchar(255) NOT NULL,
  `tanggal` datetime NOT NULL,
  `catatan` text NOT NULL,
  `namapengirim` varchar(255) NOT NULL,
  `namapenerima` varchar(255) NOT NULL,
  `uniq` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `jenis_bayar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `total`, `metode`, `tanggal`, `catatan`, `namapengirim`, `namapenerima`, `uniq`, `id_user`, `jenis_bayar`) VALUES
(11, 2500000, 'Transfer Bank Mandiri', '2021-01-03 22:43:13', 'Qurban Lunas', 'tmtflx', 'Sukabirus RT01', 98585522, 5, 'qurban'),
(12, 26080, 'Transfer Bank Mandiri', '2021-01-03 22:43:53', 'Donasi Lunas', 'tmtflx', 'admin', 20506336, 5, 'donasi'),
(13, 864831, 'Transfer Bank Mandiri', '2021-01-03 22:44:06', 'Penggalangan Dana Lunas', 'tmtflx', 'admin', 67389359, 5, 'penggalangan_dana'),
(14, 250000, 'Transfer Bank Mandiri', '2021-01-03 22:44:15', 'Zakat Lunas', 'tmtflx', 'admin', 60213418, 5, 'zakat'),
(15, 259675, 'Transfer Bank Mandiri', '2021-01-03 23:54:19', 'Penggalangan Dana Lunas', 'admin', 'admin', 56810311, 3, 'penggalangan_dana');

-- --------------------------------------------------------

--
-- Table structure for table `penggalangan_dana`
--

CREATE TABLE `penggalangan_dana` (
  `id` int(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `informasi` varchar(2000) NOT NULL,
  `dana_max` int(255) NOT NULL,
  `gambar` varchar(1000) NOT NULL,
  `id_pembuat` int(255) NOT NULL,
  `dana_terkumpul` int(255) NOT NULL,
  `jumlah_donatur` int(255) NOT NULL,
  `nama_pembuat` varchar(255) NOT NULL,
  `nama_donatur` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penggalangan_dana`
--

INSERT INTO `penggalangan_dana` (`id`, `judul`, `informasi`, `dana_max`, `gambar`, `id_pembuat`, `dana_terkumpul`, `jumlah_donatur`, `nama_pembuat`, `nama_donatur`) VALUES
(6, 'Donasi Kebakaran Rumah Sheridan', 'Saya ingin menggalang dana untuk sahabat Saya: Sheridan dan keluarganya: korban kebakaran yang terjadi di Komplek Larangan Indah, Ciledug, Tangerang. Saya ingin mengajak teman-teman, baik itu alumni SMP NEGERI 19 JAKARTA maupun alumni SMA NEGERI 70 JAKARTA dan seluruh masyarakat indonesia untuk berdonasi yang rencananya sumbangan ini untuk membangun kembali rumah korban yang ludes terbakar berikut seluruh isinya. Kepedulian teman-teman sangat berarti bagi mereka.', 3000000, 'foto/penggalangandana2.png', 5, 0, 0, 'tmtflx', '');

-- --------------------------------------------------------

--
-- Table structure for table `penggalangan_dana_pembayaran`
--

CREATE TABLE `penggalangan_dana_pembayaran` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `judul` varchar(1000) NOT NULL,
  `total` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `id_penggalangan_dana` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penggalangan_dana_pembayaran`
--

INSERT INTO `penggalangan_dana_pembayaran` (`id`, `status`, `judul`, `total`, `id_user`, `id_penggalangan_dana`) VALUES
(1, 'diterima', 'Donasi Kebakaran Rumah Sheridan di Ciledug, Tangerang', 1000000, 3, 2),
(2, 'diterima', 'Alami Komplikasi Penyakit, Pak Jamaludin Butuh Pertolongan Segera', 1000000, 3, 1),
(10, 'diterima', 'Menginjak Usia Senja, Sel Ganas Terus Menyerangnya', 10000, 3, 3),
(11, 'diterima', 'Alami Komplikasi Penyakit, Pak Jamaludin Butuh Pertolongan Segera', 1000, 3, 1),
(15, 'diterima', 'Alami Komplikasi Penyakit, Pak Jamaludin Butuh Pertolongan Segera', 864831, 5, 1),
(16, 'diterima', 'Menginjak Usia Senja, Sel Ganas Terus Menyerangnya', 259675, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `penggalangan_dana_post`
--

CREATE TABLE `penggalangan_dana_post` (
  `id` int(255) NOT NULL,
  `nama_penerima` varchar(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` datetime NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penggalangan_dana_post`
--

INSERT INTO `penggalangan_dana_post` (`id`, `nama_penerima`, `jumlah`, `judul`, `tanggal`, `gambar`) VALUES
(3, 'admin', 2000000, 'Menginjak Usia Senja, Sel Ganas Terus Menyerangnya', '2021-01-03 23:56:13', 'foto/invoice.png');

-- --------------------------------------------------------

--
-- Table structure for table `qurban`
--

CREATE TABLE `qurban` (
  `id` int(255) NOT NULL,
  `namapengqurban` varchar(2000) NOT NULL,
  `jenishewan` varchar(255) NOT NULL,
  `varian` varchar(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `total` int(11) NOT NULL,
  `informasi` varchar(2000) NOT NULL,
  `daerahdistribusi` varchar(255) NOT NULL,
  `bukti_pembayaran` varchar(255) DEFAULT 'belum',
  `id_user` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qurban`
--

INSERT INTO `qurban` (`id`, `namapengqurban`, `jenishewan`, `varian`, `jumlah`, `total`, `informasi`, `daerahdistribusi`, `bukti_pembayaran`, `id_user`) VALUES
(10, 'tmtflx', 'kambing', 'standard', 1, 2500000, 'Kambing berkualitas terbaik dengan bobot 27-30 kilogram yang dipastikan memenuhi seluruh kriteria hewan qurban yang layak diqurbankan dan telah cukup usianya (usia kambing lebih dari satu tahun). Kambing regular tipe C akan disalurkan untuk penerima manfaat di salah satu wilayah yang berada di 34 provinsi Indonesia atau puluhan negara dunia (selain Palestina, Suriah, dan Yaman).', 'Sukabirus RT01', 'diterima', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT 'klien',
  `saldo` int(255) DEFAULT 100000
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `nohp`, `role`, `saldo`) VALUES
(3, 'admin', 'admin', 'admin@gmail.com', '20930', 'admin', 4212352),
(4, 'awdawd', 'aaa', 'awdawd@awdawd.awd', '6969', 'klien', 99000),
(5, 'tmtflx', '123', 'timothyfelixivano@icloud.com', '081291412462', 'klien', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zakat`
--

CREATE TABLE `zakat` (
  `id` int(255) NOT NULL,
  `jenis_zakat` varchar(255) NOT NULL,
  `nama_muzakki` varchar(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zakat`
--

INSERT INTO `zakat` (`id`, `jenis_zakat`, `nama_muzakki`, `id_user`, `status`, `total`) VALUES
(1, 'penghasilan', 'admin', 3, 'diterima', 1000),
(9, 'penghasilan', 'tmtflx', 5, 'diterima', 250000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bukti_pembayaran_donasi`
--
ALTER TABLE `bukti_pembayaran_donasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bukti_pembayaran_penggalangan_dana`
--
ALTER TABLE `bukti_pembayaran_penggalangan_dana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bukti_pembayaran_qurban`
--
ALTER TABLE `bukti_pembayaran_qurban`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bukti_pembayaran_zakat`
--
ALTER TABLE `bukti_pembayaran_zakat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_donasi`
--
ALTER TABLE `daftar_donasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donasi_post`
--
ALTER TABLE `donasi_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hewan_kurban`
--
ALTER TABLE `hewan_kurban`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penggalangan_dana`
--
ALTER TABLE `penggalangan_dana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penggalangan_dana_pembayaran`
--
ALTER TABLE `penggalangan_dana_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penggalangan_dana_post`
--
ALTER TABLE `penggalangan_dana_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qurban`
--
ALTER TABLE `qurban`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `zakat`
--
ALTER TABLE `zakat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bukti_pembayaran_donasi`
--
ALTER TABLE `bukti_pembayaran_donasi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bukti_pembayaran_penggalangan_dana`
--
ALTER TABLE `bukti_pembayaran_penggalangan_dana`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bukti_pembayaran_qurban`
--
ALTER TABLE `bukti_pembayaran_qurban`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `bukti_pembayaran_zakat`
--
ALTER TABLE `bukti_pembayaran_zakat`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `daftar_donasi`
--
ALTER TABLE `daftar_donasi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `donasi_post`
--
ALTER TABLE `donasi_post`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hewan_kurban`
--
ALTER TABLE `hewan_kurban`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `penggalangan_dana`
--
ALTER TABLE `penggalangan_dana`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `penggalangan_dana_pembayaran`
--
ALTER TABLE `penggalangan_dana_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `penggalangan_dana_post`
--
ALTER TABLE `penggalangan_dana_post`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `qurban`
--
ALTER TABLE `qurban`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `zakat`
--
ALTER TABLE `zakat`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

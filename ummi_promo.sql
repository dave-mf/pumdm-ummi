-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2022 at 06:00 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ummi_promo`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role` varchar(10) NOT NULL,
  `created_by` varchar(128) DEFAULT NULL,
  `created_dt` timestamp NULL DEFAULT current_timestamp(),
  `changed_by` varchar(128) DEFAULT NULL,
  `changed_dt` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `username`, `password`, `role`, `created_by`, `created_dt`, `changed_by`, `changed_dt`) VALUES
(1, 'admin', 'admin', 'admin', 'ADMIN', '2022-05-19 12:55:58', NULL, '2022-05-21 09:09:32');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id` int(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `score` int(10) DEFAULT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `nama_usaha` varchar(100) NOT NULL,
  `deskripsi_produk` text DEFAULT NULL,
  `kontak_order` varchar(150) NOT NULL,
  `sosial_media` varchar(100) DEFAULT NULL,
  `harga` text NOT NULL,
  `foto_produk` varchar(255) DEFAULT NULL,
  `alamat` text NOT NULL,
  `jenis_usaha` varchar(255) NOT NULL,
  `tersedia_juga_di` varchar(255) DEFAULT NULL,
  `lama_usaha` varchar(255) NOT NULL,
  `hubungan_dgn_pemohon` varchar(255) NOT NULL,
  `nama_pemohon` varchar(255) NOT NULL,
  `created_by` varchar(128) DEFAULT NULL,
  `created_dt` timestamp NOT NULL DEFAULT current_timestamp(),
  `changed_by` varchar(128) DEFAULT NULL,
  `changed_dt` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id`, `date`, `score`, `nama_pemilik`, `nama_usaha`, `deskripsi_produk`, `kontak_order`, `sosial_media`, `harga`, `foto_produk`, `alamat`, `jenis_usaha`, `tersedia_juga_di`, `lama_usaha`, `hubungan_dgn_pemohon`, `nama_pemohon`, `created_by`, `created_dt`, `changed_by`, `changed_dt`) VALUES
(1, '2022-06-04 15:55:24', 0, 'Ibu Aisyah', 'Tutut gejrot', 'tutut kecrot bu ai', '085710746760', 'Facebook : Four R', '15.000', '34e3a1f777d5844e19e66084e7c3b5ec.jpg', 'Jl.Raya karang tengah gang pinggir daihan global atau honda masuk aja cari kontrakan ibu haji aan', 'Makanan', '', '1 Tahun', 'Keluarga', 'Silla Prasasti', 'ADMIN', '2022-05-19 13:00:05', NULL, '2022-06-04 15:55:24'),
(25, '2022-05-28 11:11:59', 0, 'Sophia Dewanti', 'Samsprolls', 'Samsprolls merupakan mie Samyang  dengan bentuk baru yg di lapisi dengan rice paper yang mana lebih sehat untuk di makan apalagi di dalamnya terdapat sayur sayuran(timun&wortel) fresh. Untuk setiap pembelian sudah include Chili sauce & cheese sauce. Untuk besar Rolls nya sendiri tergantung harga. Selain bisa di makan langsung samyang Rolls ini bisa di goreng buat kalian pecinta pedas dan kriuk. Makan langsung healthy di goreng di minyak sedikit lebih mantep tergantung selera. ', '085722451011', 'Ig: janjipsmi_ / wa : 085722451011', '13.000( small) 14.000( reguler) 15.000( large) ', '4aae1d8cd8fcc4aca47df90a1091d67a.png', 'JL Siliwangi GG pelita RT 04 RW 05 kec Cikole Kel Cikole kota Sukabumi Jawa barat 43113', 'Makanan', '', '3 mau jalan 4 bulanan', 'Mahasiswa Administrasi Bisnis Semester 2', 'Sophia Dewanti', 'ADMIN', '2022-05-28 11:10:54', NULL, '2022-05-28 11:11:59'),
(26, '2022-06-04 15:55:45', 0, 'Devi Indriani putri ', 'Tdkby.deputrihasya', 'Custom hand bouqey paper flower, artificial flower, money bouqey, choclat Bouqey , hijab bouqey, Snack bouqey, mask bouqey Snack tower, mahar dan hantaran nikah  dll... ', '081573230149', 'Tdkby.deputrihasya ', '45rb+', '932718354df6ffbb07cc4fac2ea8ab1b.jpg', 'Jl Selabintana kec Sukabumi kab Sukabumi Jawa barat ', 'Kerajinan Tangan', 'Via WA  tiktok dan IG ', '1 THN 4 bulan ', 'Keluarga', 'Resti Nurdianti', 'ADMIN', '2022-05-28 11:17:06', NULL, '2022-06-04 15:55:45'),
(27, '2022-05-28 11:23:57', 0, 'Raisya Aminda', 'T-one drink', 'Minuman smoothies boba', '08996298571', '@syarai27', '10ribu rupiah', 'de89803b4227ca310710c51c526d6a5c.jpg', 'Rambay wetan ', 'Minuman', '', '2 Tahun', 'Keluarga', 'Resti nurdianti', 'ADMIN', '2022-05-28 11:23:57', NULL, NULL),
(28, '2022-05-28 11:26:35', 0, 'Ujang Supyani', 'Ujang Toge', 'Perusahaan ini bergerak dalam bisnis pembuatan toge. ', '089507746626', 'Tdk ada hanya nomor wa saja', '8000/kg, 70000/10kg', 'eefd3bdd69255c0e9cdb35e19537cc3d.jpg', 'Jl pramuka 2,dekat stie pgri', 'Bahan Pangan', 'Di Pasar Cibadam', '7 Tahun', 'Keluarga', 'Adzikri Cahya Nuranbiya', 'ADMIN', '2022-05-28 11:26:35', NULL, NULL),
(30, '2022-07-10 03:27:05', 0, 'Ibu ela ', 'G\'Thebag G\'Thebug', 'Paket ayam bakar\r\nAyam geprek\r\nAyam goreng\r\nBalado ikan gabus ', '085863294339', 'Wa (+62 858-6329-4339) ', '12.000-13.000', '24273a0c461f2b69cd45d69605ff3ef1.jpg', 'Jln. Ciaul pasir (SMP 15)', 'Makanan', 'Shopee, Go-Jek, Grab', '1 Tahun', 'Keluarga', 'Fitriani Dewi ', 'ADMIN', '2022-07-10 03:27:05', NULL, NULL),
(31, '2022-07-10 03:30:11', 0, 'Adah Saadah', '-', 'Menjual produk herbal', '088295728621', 'WA dan fb', '25.000-260.000', 'b0e8b6f42a9707e54140ba5ecf3e5f1e.jpg', 'Bantarkaret, cicantayan', 'Produk Herbal', '', '1 Tahun', 'Keluarga', 'Resti Nurdianti', 'ADMIN', '2022-07-10 03:30:11', NULL, NULL),
(32, '2022-07-10 03:33:47', 0, 'Ibu ii rodiah ', 'Rangginang ibu ii', 'Oleh oleh khas sunda ', '081462309970', '', '20.000/pcs', 'e7a3840bd27bec789a23002d90a279c7.png', 'Kp cigadog Rt 02/01, Desa kertajaya, Kecamatan simpenan, Kabupaten Sukabumi', 'Makanan', 'Facebook ', '8 tahun', 'Keluarga', 'Mutiara Shinta Kusmayadi', 'ADMIN', '2022-07-10 03:33:47', NULL, NULL),
(33, '2022-07-10 03:35:54', 0, 'Rina Rismayanti ', 'Aneka gorengan', 'Menjual aneka gorengan seperti gehu pedas, pisang crispy, pisang coklat, risol original, risol pedas dll', '083813914117', '-', '2.000(satuan) - 10.000(1 paket isi 5)', 'e8efb27ef4ae70f2fd6190d5dd95e767.jpg', 'Jln. Ciaul pasir RT.05/RW.08 kec. Cikole kel. Subangjaya', 'Makanan', '', '1 bulan yang lalu', 'Keluarga', 'Dita Rizki Nuranisa', 'ADMIN', '2022-07-10 03:35:54', NULL, NULL),
(34, '2022-07-10 03:38:11', 0, 'Abah ayi ', 'Rumah Aqiqah Abah Ayi', 'Rumah Aqiqah Abah ayi Afdhol sesuai syariat Menyediakan layanan berupa catering prasmanan untuk acara di Rumah Bapak/Ibu. Selain kambing yang sudah dimasak tadi, kami menyediakan aneka makanan lengkap menu catering prasmanan dengan peralatan berupa meja, piring dan kelengkapan lain. Alamat kami di makassar namun tenang saja, alhamdulillah kami sudah membuka cabang di berbagai kota di Indonesia salah satunya sukabumi dengan nama Aqiqah almaidah sukabumi. Lebih detailnya  \"RUMAH AQIQAH Abah Ayi | Afdhol Sesuai Syariah (0811 410 2869 Abah)\" http://www.akikahmakassar.com', '08114102869', '\"Ig : aqiqahmakassar_abahayi - aqiqahalmaidahsukabumi, Fb : Aqiqah makassar abah ayi\"', 'Untuk harganya sangat bervariasi dimulai dari harga 4.650k sampai 1.900 sudah masak', '6cf267671167e7796931ec4b499e0b99.jpg', '\"Jalan ade irma 1 no 5 makassar dan utk di sukabumi itu berlokasi di :\r\nSukabumi Indah Plaza lantai 2 – kota sukabumi, mari berkunjung. \"', 'Makanan', '', 'Sekitar 10 tahunan', 'Keluarga', 'Anita Septiani ', 'ADMIN', '2022-07-10 03:38:11', NULL, NULL),
(35, '2022-07-10 03:41:07', 0, 'Titi Awati', 'Badami Style ', 'Baju daster', '08156141725', '\"Ig. @ateutiti. Fb. Ateutiti\"', '75.000', 'd3059a386cea01d0f324955b584a37f4.jpg', 'Jl merbabu no 09 Rt.03 Rw 10', 'Fashion', 'Market place, fb, wa, ig', '5 tahun', 'Keluarga', 'Asqa Anandya Syaiful', 'ADMIN', '2022-07-10 03:41:07', NULL, NULL),
(36, '2022-07-10 03:43:19', 0, 'Nurfitria', 'Dalbyeol Choice', 'Piyama ', '089636920224', 'DalbyeolChoice', 'Rp 141.000 s/d Rp 220.000', '566745793ea8dc1e268ac771b36e30d1.jpeg', 'Cikembang', 'Fashion', 'Shopee, Instagram', '1 Tahun', 'Keluarga', 'Salsa Diva Ramadhani 2130811002 Adbis A', 'ADMIN', '2022-07-10 03:43:19', NULL, NULL),
(37, '2022-07-10 03:45:21', 0, 'Nadila Dwi Permana', 'Pempek Mas Crush ', 'Pempek adalah makanan khas palembang, yang dibuat dari bahan dasar ikan, tepung terigu dan juga sagu yang berkualitas.', '081298777182', '@Izdiharfood.id ', '10.000', 'efe8b44dfe831df40f37d2e672853b7c.png', 'Jln. Karamat, Gunung Puyuh ', 'Makanan', 'Sistemnya COD ', '2 bulan ', 'Keluarga', 'Alayda Nazwa Gunawan ', 'ADMIN', '2022-07-10 03:45:21', NULL, NULL),
(38, '2022-07-10 03:47:19', 0, 'Hj yusuf firmansyahrudin', 'Soliter Akrilik 89', 'Stok selalu ready , ukuran 1x3 cm isi paket 20pcs custom , model custom, font sesuai keinginan', '089682954758', 'Galeriakrilik89', '24.000/20pcs', 'c6cca4eec601930a5c16bd6995141f7b.jpeg', '\"\r\nJl. Nasional III, Nagrak, Kec. Cisaat, Kabupaten Sukabumi, Jawa Barat 43152\"', 'Kerajinan Tangan', 'Lazada', '3 tahun', 'Keluarga', 'Ai Nurhalimah', 'ADMIN', '2022-07-10 03:47:19', NULL, NULL),
(39, '2022-07-10 03:48:53', 0, 'Yanah', 'Kue lebaran ', 'Kue ini adalah UMKM yang bergerak di bidang minuman.', '081280218626', '-', '30.000 - 45.000', '8874b2ed42daed0c3154ad6b3752c029.jpg', 'Jl. Sampora, Bojong, Kec. Cikembar, Kabupaten Sukabumi, Jawa Barat 43157', 'Makanan', 'Dirumah, siap diantar ', 'Hampir  4 Tahunan', 'Keluarga', 'Karina Dewi M', 'ADMIN', '2022-07-10 03:48:53', NULL, NULL),
(40, '2022-07-10 03:51:13', 0, 'Anisa Rahmawati', 'Cantiksehat.id', 'Produk kesehatan dan kecantikan dari Tiens syariah', '085161819088', 'Cantiksehat.id', 'mulai dari 99.000', '4121cb354c8663f6ff8fd21a78820c64.jpg', 'Jalan Kapling Garuda 2 Baros', 'Produk Kesehatan & Kecantikan', 'Shopee, Lazada, Facebook, Instagram, Whatsapp', '3 tahun', 'Mahasiswa Administrasi Bisnis Semster 4', 'Silla Prasasti', 'ADMIN', '2022-07-10 03:51:13', NULL, NULL),
(41, '2022-07-10 03:53:17', 0, 'Firzha Khatresna Genie Oktaviars', 'Abyan Collection', 'Kedai Abyan', '085559775357', 'Abyan Collection', 'mulai dari 2 ribu', '9917277546716791249b1852931d957d.jpg', 'Kp.cibalung cijalingan RT/04 RW/04  no 22 desa talaga kec Caringin kab sukabumi', 'Makanan', 'hanya whatsapp', '1 tahun lebih', 'Keluarga', 'Silla Prasasti', 'ADMIN', '2022-07-10 03:53:17', NULL, NULL),
(42, '2022-07-10 03:54:47', 0, 'Hj. Enung Nurhayati ', 'Dragon ', 'Sapu injuk ', '085720438575', 'Whatsapp ', '20.000 plus gagang ', 'd3401d100a378ec717a87a6445f40f25.jpeg', 'Kp.Gunung Guruh Girang . rt : 12 , rw : 04', 'Kerajinan Tangan', 'Terima pesanan online lewat whatsapp', '35 tahun ', 'Keluarga', 'Alif Piya Nurul Hasanah ', 'ADMIN', '2022-07-10 03:54:47', NULL, NULL),
(43, '2022-07-10 03:57:22', 0, 'Nabila Salsabila Rahman', 'Nabilaa_boutique', 'Nabilaa_boutique adalah salah satu usaha saya dibidang fashion dimulai sejak 2020 yang memakai sistem rumah jahit, bisa custom model dan ukuran, dan bisa konsultasi desain. ', '085703123027', '\"Instagram :@nabilaa_boutique Tiktok :@nabilaa_boutique\"', 'Dress polos start Rp. 85.000, Dress brokat start RP. 100.000 dan biasanya harga tergantung kesulitan model.', '4e48c5cfe9ec97bfd97b5ee526b19936.jpg', 'Jl. Parahita nugraha, Rt 01/04, kel. Limusnunggal, kec. Cibeureum, kota Sukabumi', 'Fashion', '-', '2020-2022 (2 tahun)', 'Mahasiswa Administrasi Bisnis Semster 4', 'Syifaurrohmah ', 'ADMIN', '2022-07-10 03:57:22', NULL, NULL),
(44, '2022-07-10 03:59:53', 0, 'Sonia Fitrika', 'Sari Rasa', 'Bubur ayam ', '085721163518', 'Tidak ada', '5000-10000', '5bec20bb67e6892105262851b5015979.jpeg', 'Kp.Nagrog Ds.Perbawati Kec.Sukabumi Kab.Sukabumi Rt02/Rw05', 'Makanan', '-', '8 tahun', 'Keluarga', 'Syalva Fauzia Hudaya', 'ADMIN', '2022-07-10 03:59:53', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

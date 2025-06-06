-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 04:00 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tk_islam_asy_syifa`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(20) NOT NULL,
  `nama_berita` varchar(30) NOT NULL,
  `sinopsis` text NOT NULL,
  `isi` text NOT NULL,
  `image` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `nama_berita`, `sinopsis`, `isi`, `image`) VALUES
(4, 'Public Speaking Class', 'Mengembangkan keterampilan public speaking sejak usia dini merupakan investasi berharga bagi masa depan anak-anak...', 'Mengembangkan keterampilan public speaking sejak usia dini merupakan investasi berharga bagi masa depan anak-anak. Pelaksanaan public speaking class khusus untuk anak-anak memberikan mereka kesempatan untuk mengasah kemampuan berbicara di depan umum sejak dini, membangun kepercayaan diri, dan mengembangkan keterampilan komunikasi yang kuat.\r\n\r\nDalam public speaking class for kids, anak-anak akan belajar tentang pentingnya berbicara dengan percaya diri dan dengan menggunakan bahasa yang jelas dan mudah dipahami. Mereka akan diberikan kesempatan untuk mempraktikkan keterampilan mereka melalui presentasi mini dan permainan peran, yang membantu mereka mengatasi kecemasan dan membangun rasa percaya diri. Selain itu, mereka juga akan belajar tentang struktur cerita, penggunaan bahasa tubuh yang tepat, dan teknik-teknik presentasi yang menyenangkan dan interaktif. Dengan mengikuti public speaking class for kids, anak-anak akan menjadi komunikator yang efektif sejak dini, mempersiapkan mereka untuk sukses di masa depan dan membantu mereka menghadapi situasi sosial dengan percaya diri.\r\n\r\nInformasi Lebih Lanjut :\r\n(+62) 819-0806-7675 - WhatsApp', 'fee52dbae6d8ef282529a2609e80b90d.png'),
(5, 'Ikatan Guru Taman Kanak-kanak ', 'Pertemuan Ikatan Guru TK merupakan momen yang berharga bagi para pendidik di tingkat taman kanak-kanak...', 'Pertemuan Ikatan Guru TK merupakan momen yang berharga bagi para pendidik di tingkat taman kanak-kanak. Dalam pelaksanaannya, guru-guru TK berkumpul untuk berbagi pengetahuan, pengalaman, dan inovasi terkait pembelajaran anak usia dini.\r\n\r\nPertemuan Ikatan Guru TK merupakan wadah yang memungkinkan para guru saling bertukar informasi, strategi mengajar, serta memperluas jaringan profesional. Di dalam pertemuan ini, mereka dapat belajar dari praktik terbaik yang telah dilakukan oleh sesama guru, menggali ide-ide baru, dan mendiskusikan tantangan yang dihadapi dalam mengajar anak-anak usia dini. Selain itu, pertemuan ini juga memberikan kesempatan bagi para guru untuk mengikuti pelatihan dan workshop yang diberikan oleh ahli pendidikan. Dengan melibatkan diri dalam pertemuan Ikatan Guru TK, para pendidik dapat terus memperbarui pengetahuan dan keterampilan mereka, meningkatkan kualitas pembelajaran, dan memberikan pengalaman belajar yang lebih baik bagi anak-anak di sekolah mereka.', 'd7821b56baff50840ec0dd65dd11991d.png'),
(6, 'Pendaftaran Peserta Didik Baru', 'Saatnya buah hati Anda menapaki langkah awal menuju pendidikan yang menyenangkan! Pendaftaran peserta didik baru TK dibuka...', 'Saatnya buah hati Anda menapaki langkah awal menuju pendidikan yang menyenangkan! Pendaftaran peserta didik baru jenjang TK telah dibuka, memberikan kesempatan emas bagi anak-anak untuk memulai perjalanan pendidikan yang penuh keceriaan dan pembelajaran yang bermakna.\r\n\r\nDalam pendaftaran peserta didik baru jenjang TK, orang tua dapat memberikan kesempatan terbaik bagi anak-anak mereka untuk mengembangkan potensi mereka secara holistik. Dengan program pendidikan yang dirancang khusus untuk anak usia dini, TK memberikan lingkungan yang aman, kreatif, dan interaktif, di mana anak-anak dapat belajar melalui bermain, bereksplorasi, dan berinteraksi dengan teman sebaya. Pendaftaran ini adalah kesempatan untuk memilih sekolah yang mampu memberikan pendekatan pendidikan yang terintegrasi, membangun dasar kognitif, sosial, dan emosional yang kuat, serta menumbuhkan minat dan bakat anak-anak sejak dini. Segera daftarkan buah hati Anda dan berikan mereka kesempatan untuk mengalami pendidikan yang menginspirasi dan memberikan dasar yang kokoh untuk masa depan mereka!\r\n\r\nInformasi Lebih Lanjut :\r\n(+62) 819-0806-7675 - WhatsApp', '1cf06197d54582b1c644ffbff27325e8.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(35) NOT NULL,
  `number` int(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `number`, `address`, `subject`, `message`) VALUES
('Padil', 8909192, 'Jakarta', 'Pendaftaran TK', 'Pendaftaran Siswa Baru');

-- --------------------------------------------------------

--
-- Table structure for table `data_guru`
--

CREATE TABLE `data_guru` (
  `id` int(11) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `image` varchar(99) DEFAULT NULL,
  `no_telp` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `mapel` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_guru`
--

INSERT INTO `data_guru` (`id`, `nama_guru`, `image`, `no_telp`, `alamat`, `mapel`) VALUES
(6, 'Titin Rosanti', 'f2240dd763e56e531e910b4400728f48.jpg', '08128022310', 'Kebayoran', 'Guru Kelompok A'),
(7, 'Ana Susanti', 'a7e3bebf6effac990a54cdeb954dd970.jpg', '08517483924', 'Veteran', 'Guru Kelompok B'),
(8, 'Dewi Yasmina', '7816d001475d9026699674b4fe533776.jpg', '0812803456', 'Ciputat', 'Guru Pendamping'),
(9, 'Indrayati', 'b05e5a9b8562390708537f979ba29fb0.jpg', '0831391312', 'Pondok Pinang', 'Guru Musik');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `nama_siswa` varchar(50) NOT NULL,
  `id_siswa` int(30) NOT NULL,
  `usia` int(20) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`nama_siswa`, `id_siswa`, `usia`, `alamat`) VALUES
('Dhamar', 6789, 4, 'Kebayoran');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(20) NOT NULL,
  `nama_fasilitas` varchar(35) NOT NULL,
  `jenis_fasilitas` varchar(15) NOT NULL,
  `kapasitas` varchar(15) NOT NULL,
  `image` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`, `jenis_fasilitas`, `kapasitas`, `image`) VALUES
(10, 'Kelas B', 'Indoor', '15 Orang', '0fd2df205cd8a8fccb1064f50853241d.jpg'),
(11, 'Kamar Mandi', 'Indoor', '1 Orang', 'c548bfc7bb8238dd622bc82f9c39934b.jpg'),
(12, 'Taman', 'Outdoor', '15 Orang', '123259811be079761b534381b268d633.jpeg'),
(13, 'Ruang Guru', 'Indoor', '15 Orang', '35e4a90b63db978ac75b904069274287.png'),
(14, 'Kelas A', 'Indoor', '15 Orang', '5aea666b4bfa47229f11d536a62ef853.jpeg'),
(15, 'Lapangan', 'Outdoor', '15 Orang', '5b161685c9cb02bb5ebba06aafb7afa6.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_gambar` int(20) NOT NULL,
  `nama_gambar` varchar(30) NOT NULL,
  `image` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_gambar`, `nama_gambar`, `image`) VALUES
(1, 'Kajian', '0411d179f38e5a9e8e0c88c7597e8cc3.jpeg'),
(5, 'Bernyanyi', '913721be7b3f8afc059211fec93c28ed.png'),
(8, 'Dominos Pizza', '70bd54272fcccc07da0d3a2abe3d576a.png');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `iduser` int(11) NOT NULL,
  `nama_user` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`iduser`, `nama_user`, `email`, `password`, `level`) VALUES
(1, 'Ibu Susan', 'admin@gmail.com', '12345', 1),
(3, 'Ibu Husmalayati', 'kepsek@gmail.com', 'kepsek12345', 2),
(4, 'Ibu Iin', 'guru@gmail.com', 'guru12345', 3),
(5, '', 'guru2@gmail.com', 'guru2', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `data_guru`
--
ALTER TABLE `data_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `number` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=812808091;

--
-- AUTO_INCREMENT for table `data_guru`
--
ALTER TABLE `data_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id_siswa` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45680;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_gambar` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

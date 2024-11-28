-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2024 at 12:30 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `19034_psas`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tgl_posting` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `id_kategori`, `id_user`, `judul`, `isi_berita`, `gambar`, `tgl_posting`) VALUES
(30, 1, 7, 'Teknologi AI Semakin Canggih, Mengubah Tata Kehidupan', 'Dalam beberapa tahun terakhir, kecerdasan buatan (Artificial Intelligence/AI) terus mengalami perkembangan pesat. Teknologi ini kini menjadi bagian dari kehidupan sehari-hari, mulai dari aplikasi ponsel pintar, asisten virtual seperti Siri dan Google Assistant, hingga kendaraan otonom yang sedang diuji coba di berbagai negara.\r\n\r\nSalah satu penerapan terbaru adalah penggunaan AI dalam sektor kesehatan. Dengan algoritma canggih, AI mampu mendeteksi penyakit seperti kanker sejak dini, yang dapat meningkatkan peluang kesembuhan pasien. Selain itu, teknologi ini juga membantu dokter dalam menganalisis data medis dengan lebih cepat dan akurat.\r\n\r\nDi bidang bisnis, AI digunakan untuk meningkatkan efisiensi. Contohnya, chatbot berbasis AI dapat melayani pelanggan selama 24 jam, sementara analitik data membantu perusahaan memahami tren pasar dan perilaku konsumen.\r\n\r\nNamun, perkembangan AI juga menimbulkan kekhawatiran, terutama terkait keamanan data dan potensi penggantian tenaga kerja manusia. Oleh karena itu, para ahli terus mengingatkan pentingnya regulasi yang tepat untuk memastikan teknologi ini digunakan secara bertanggung jawab.\r\n\r\nDengan berbagai inovasi yang terus bermunculan, AI diprediksi akan menjadi salah satu teknologi yang mendominasi masa depan. Siapkah kita menghadapi perubahan besar ini?\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '6217ai.jpg', '2024-11-28 11:00:30'),
(31, 2, 5, 'Peran Teknologi Modern dalam Meningkatkan Kesehatan Global', 'Teknologi modern terus memberikan dampak besar pada dunia kesehatan. Mulai dari alat diagnosis yang lebih canggih hingga aplikasi kesehatan berbasis smartphone, inovasi teknologi telah membantu meningkatkan akses dan kualitas layanan kesehatan di berbagai negara.\r\n\r\nSalah satu inovasi terbaru adalah telemedicine, yang memungkinkan pasien untuk berkonsultasi dengan dokter tanpa harus datang ke rumah sakit. Ini sangat membantu, terutama bagi mereka yang tinggal di daerah terpencil atau memiliki mobilitas terbatas. Dengan hanya menggunakan ponsel, pasien dapat mendapatkan diagnosis awal dan saran pengobatan dengan cepat.\r\n\r\nSelain itu, wearable device seperti smartwatch kini tidak hanya menjadi alat gaya hidup, tetapi juga berfungsi sebagai monitor kesehatan. Perangkat ini dapat melacak detak jantung, pola tidur, hingga kadar oksigen dalam darah, yang sangat berguna untuk mendeteksi masalah kesehatan sejak dini.\r\n\r\nDi sisi lain, teknologi AI (Artificial Intelligence) juga berperan besar. Dalam dunia medis, AI digunakan untuk menganalisis data pasien dan memberikan rekomendasi pengobatan yang lebih akurat. Misalnya, AI mampu membantu dokter mendeteksi penyakit seperti kanker atau diabetes dengan lebih cepat melalui analisis gambar medis.\r\n\r\nNamun, di tengah perkembangan ini, tantangan tetap ada. Keamanan data pasien menjadi isu utama, mengingat meningkatnya risiko kebocoran informasi pribadi. Oleh karena itu, para ahli terus berupaya mengembangkan sistem yang lebih aman untuk melindungi privasi pengguna.\r\n\r\nDengan teknologi yang terus berkembang, masa depan dunia kesehatan diperkirakan akan semakin cerah. Teknologi tidak hanya menyelamatkan nyawa, tetapi juga meningkatkan kualitas hidup manusia di seluruh dunia.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '964939kesehatan.jpg', '2024-11-27 02:49:45'),
(32, 6, 5, 'Teknologi Sport Tech: Mengubah Wajah Dunia Olahraga', 'Olahraga dan teknologi kini menjadi pasangan yang tak terpisahkan. Dalam beberapa tahun terakhir, inovasi teknologi di dunia olahraga (sport tech) telah memberikan dampak besar, baik bagi atlet profesional maupun penggemar olahraga.\r\n\r\nSalah satu teknologi yang paling populer adalah penggunaan perangkat wearable. Atlet kini dapat menggunakan sensor pintar untuk memantau performa mereka secara real-time, seperti detak jantung, kecepatan, jarak tempuh, hingga jumlah kalori yang terbakar. Informasi ini membantu pelatih merancang program latihan yang lebih efektif.\r\n\r\nDi sisi lain, teknologi video dan analisis data juga membawa perubahan besar dalam strategi permainan. Tim-tim olahraga kini menggunakan sistem AI untuk menganalisis pertandingan, mempelajari kekuatan lawan, dan mengevaluasi kelemahan tim sendiri. Bahkan di cabang seperti sepak bola, teknologi VAR (Video Assistant Referee) telah menjadi alat penting untuk memastikan keputusan wasit lebih akurat.\r\n\r\nBagi penggemar olahraga, pengalaman menonton juga menjadi lebih menarik. Teknologi augmented reality (AR) dan virtual reality (VR) memungkinkan penggemar untuk merasakan suasana pertandingan langsung, meskipun berada di rumah. Tidak hanya itu, aplikasi streaming kini memberikan statistik pertandingan secara langsung, sehingga menambah pengalaman interaktif bagi penonton.\r\n\r\nNamun, tantangan tetap ada, terutama dalam memastikan teknologi ini tidak mengurangi esensi dari olahraga itu sendiri. Banyak yang berharap teknologi dapat terus digunakan sebagai alat pendukung untuk meningkatkan kualitas olahraga, tanpa mengurangi nilai sportifitas dan semangat kompetisi.\r\n\r\nDengan inovasi yang terus bermunculan, teknologi dipastikan akan semakin memperkaya dunia olahraga, membawa pengalaman baru baik bagi atlet maupun para penggemar di seluruh dunia.\r\n', '277554games.jpg', '2024-11-27 02:52:06'),
(33, 7, 5, 'Menjelang Pilkada Serentak, Kampanye Damai Jadi Fokus Utama', 'Menjelang Pemilihan Kepala Daerah (Pilkada) serentak pada 27 November 2024, partai politik di seluruh Indonesia, termasuk di Banjarnegara, Jawa Tengah, gencar melaksanakan kegiatan kampanye dengan mengedepankan prinsip damai dan sportif. Salah satu kegiatan yang mencuri perhatian adalah \"Jalan Sehat Perkasa,\" sebuah acara yang diselenggarakan oleh DPC PDI Perjuangan Banjarnegara untuk merangkul masyarakat dan memperkuat solidaritas kader.\r\n\r\nKetua DPC PDI Perjuangan, H. Nuryanto, mengajak masyarakat untuk menjaga TPS dengan baik, memastikan proses pemilihan berlangsung jujur dan adil. Ia juga mengimbau para kader untuk menjalankan masa tenang dengan berpuasa sebagai bentuk doa dan persiapan spiritual menjelang hari pemungutan suara.\r\n\r\nSementara itu, pengawasan terhadap proses kampanye juga menjadi perhatian utama. Beberapa laporan pelanggaran yang sebelumnya masuk telah ditindaklanjuti oleh pihak berwenang, namun dinyatakan tidak ada unsur pelanggaran hukum. Semua pihak diharapkan dapat bekerja sama menjaga kondusivitas selama sisa masa kampanye hingga hari pemilu?.\r\n', '221224politik.jpg', '2024-11-27 02:54:51'),
(34, 8, 5, 'Destinasi Wisata Baru di Jawa Tengah, Pesona Alam Banjarnegara Semakin Terkenal', 'Banjarnegara, Jawa Tengah, semakin menunjukkan potensinya sebagai destinasi wisata unggulan di Indonesia. Dengan keindahan alam yang memikat, pemerintah daerah bekerja sama dengan pelaku industri pariwisata lokal terus mempromosikan tempat-tempat wisata baru yang menawarkan pengalaman unik bagi para pengunjung.\r\n\r\nSalah satu destinasi yang tengah menjadi sorotan adalah Desa Wisata Pandanarum. Desa ini menawarkan perpaduan keindahan alam, budaya tradisional, dan aktivitas ramah lingkungan. Wisatawan dapat menikmati panorama pegunungan, belajar membuat kerajinan khas lokal, hingga mencoba wisata agro seperti memetik buah langsung dari kebun petani setempat.\r\n\r\nSelain itu, Banjarnegara juga terkenal dengan Dieng Plateau yang terus menarik wisatawan lokal maupun mancanegara. Kawasan ini menawarkan pemandangan matahari terbit yang memukau di Bukit Sikunir, Telaga Warna, serta candi-candi kuno yang menjadi peninggalan sejarah Hindu.\r\n\r\nUntuk meningkatkan pengalaman wisatawan, pemerintah setempat juga mulai memperbaiki akses jalan menuju lokasi-lokasi wisata serta menyediakan fasilitas modern tanpa mengurangi kesan alami. Program \"Banjarnegara Go Green\" juga sedang digalakkan untuk menjaga kelestarian alam di tengah maraknya kunjungan wisata.\r\n\r\nDengan berbagai daya tarik ini, Banjarnegara siap menjadi destinasi pilihan bagi para pelancong yang mencari kedamaian dan petualangan di tengah keindahan alam.\r\n', '296936travel.jpg', '2024-11-27 02:56:50');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `keterangan`) VALUES
(1, 'Teknologi', 'berita tentang teknologi'),
(2, 'kesehatan', 'berita tentang kesehatan'),
(6, 'Sport', 'berita tentang sport'),
(7, 'Politik', 'berita tentang politik'),
(8, 'Travel', 'berita tentang traveling');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_berita` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `isi_komentar` tinytext NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_berita`, `nama`, `email`, `isi_komentar`, `date_created`) VALUES
(16, 34, 'fii', 'muhammadnursyafii4@gmail.com', 'widih', '2024-11-27 02:58:37'),
(17, 30, 'chika', 'chika@gmail.com', 'teknologi', '2024-11-28 11:23:50'),
(18, 34, 'ismey', 'isney@gmail.com', 'mantap', '2024-11-28 11:27:18');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(5, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator'),
(7, 'syafii', '202cb962ac59075b964b07152d234b70', 'Administrator'),
(8, 'berita', '81dc9bdb52d04dc20036dbd8313ed055', 'Operator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_berita` (`id_berita`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`),
  ADD CONSTRAINT `berita_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_berita`) REFERENCES `berita` (`id_berita`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

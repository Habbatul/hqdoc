-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2023 at 07:38 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hqdoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(250) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `telepon` varchar(250) NOT NULL,
  `tipe` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `nama`, `email`, `password`, `telepon`, `tipe`) VALUES
(1, 'user', 'user@user.com', 'user123', '083246484956', 'user'),
(2, 'admin', 'admin@admin.com', 'admin123', '087474823423', 'admin'),
(53, 'Donie Yen', 'doni@doni.com', 'doni123', '0873881234', 'user'),
(54, 'Jasmala Yanto', 'hgfghf@fggfhfhg.com', 'jkl123', '09865445', 'user'),
(55, 'yoga', 'yoga@yoga.com', 'yoga123', '081623749684734', 'user'),
(56, 'han', 'han@han.com', 'han123', '081236745', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `keluhan`
--

CREATE TABLE `keluhan` (
  `id` int(50) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL,
  `balasan` text NOT NULL,
  `nama_pengirim` varchar(500) NOT NULL,
  `nama_pembalas` varchar(500) NOT NULL,
  `id_pengirim` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keluhan`
--

INSERT INTO `keluhan` (`id`, `judul`, `deskripsi`, `balasan`, `nama_pengirim`, `nama_pembalas`, `id_pengirim`) VALUES
(1, 'Obat tetes mata yang ampuh dan bagus untuk mata belekan', 'Selamat sore dokter, dok mata saya belekan terus dan rasanya seperti ada yang mengganjal. obat tetes mata yang ampuh dan bagus yang bisa mengatasinya apa ya dokter?', 'Terima kasih atas pertanyaannya.\r\n\r\nMata belekan merupakan suatu kondisi dimana pada mata mengeluarkan kotoran, dimana hal ini bisa saja menjadi hal normal bila terjadi saat bangun tidur. Namun bila belekan dirasakan terus-menerus disertai dengan gejala lain misalnya nyeri, mata mengganjal, mata merah, perih, penglihatan kabur dan sebagainya maka dapat menjadi tanda dari adanya infeksi maupun peradangan pada mata.\r\n\r\nKondisi keluhan mata belekan terus-menerus dapat disebabkan karena berbagai hal seperti konjungtivitis atau peradangan pada konjungtiva yang merupakan selaput yang melapisi kelopak mata dalam. Konjungtivitis dapat disebabkan oleh infeksi bakteri, virus, ataupun alergi. Kemudian bila peradangan terjadi pada bagian mata lebih dalam dapat disebabkan karenakeratitisatau peradangan pada kornea yang disebabkan karena berbagai hal seperti karena infeksi bakteri, penggunaan lensa kontak, trauma, dan sebagainya. Keluhan lain yang dirasakan seperti mata merah, perih, penglihatan menurun, mata mengganjal dan sebagainya. Mata kering juga dapat menyebabkan belekan yang disebabkan misalnya karena penggunaan lensa kontak lama, terlalu lama berada di ruangan ber-AC, menatap layar teralalu lama dan sebagainya.\r\n\r\nUntuk mengatasi mata belekan, perlu diketahui penyebabnya karena penanganan disesuaikan dengan penyebab keluhan. Misalnya bila disebabkan karena infeksi bakteri maka diberikan tetes mata antibiotik seperti chloramphenicol.Namun penggunaannya perlu pengawasan dokter karena penggunaan antibiotik tidak boleh sembarangan. Sedangkan penyebab lain misalnya mata kering dapat diberikan obat tetes mata berisi air mata buatan. Maka dari itu sebaiknya memeriksakan ke dokter agar dapat diketahui penyebab pasti keluhan sehingga dapat diberikan penanganan sesuai.\r\n\r\nTerima kasih, semoga membantu.', 'user', 'admin', 1),
(40, 'Bagaimana cara menghilangkan rasa lemas setelah sakit?', 'Selamat siang dok, saya dan suami baru saya mengalami demam dan kelelahan. Awalnya saya demam, batuk dan pilek. Kemudian membaik, setelah demam sembuh tubuh masih terasa lemas. apa yg bisa kami lakuan untuk menghilangkan rasa lemas setelah sakit dok?', 'Alo,\r\n\r\nApakah selain lemas Anda masih mengalami keluhan lain? Seringkali tubuh masih terasa lemas pada masa pemulihan pasca sakit. Umumnya tubuh akan semakin fit seiring berjalannya waktu. Untuk membantu menunjang pemulihan pasca sakit, Anda dapat melakukan beberapa tips berikut ini:\r\n\r\nIstirahat cukup\r\nMinum cukup air putih 2-3 liter/hari\r\nKonsumsi makanan sehat dan bergizi seimbang\r\nMinum multivitamin bila perlu\r\nHindari stress\r\nHindari asap rokok\r\nJika badan Anda masih terasa lemas setelah 1 minggu pasca sembuh dari sakit, sebaiknya Anda memeriksakan diri ke dokter secara langsung supaya bisa dipastikan kondisinya dan agar Anda bisa diberikan penanganan yang lebih optimal ya.\r\n\r\nSemoga membantu Anda,\r\n\r\nTerimakasih.', 'user', 'admin', 1),
(44, 'Apa saja yg harus dihindari agar trombosit dan leukosit tidak tinggi kembali?', 'Selamat sore dok.. Sebulan lalu saya dirawat akibat leukosit dan trombositnya tinggi. Tapi dokter yang menangani saya tidak memberi tahu apa yg harus saya lakukan dan hindari terutama makanan apa saja yg perlu dihindari pada penderita ini agar leukosit dan trombosit tetap normal.. terima kasih', 'Alo, terimakasih atas pertanyaannya.  Kadar leukosit dan trombosit yang lebih tinggi dari normal bisa terjadi karena banyak faktor, contohnya dehidrasi, infeksi, kekurangan zat besi atau nutrisi tertentu, kelainan autoimun, kanker, habis cidera, stres berat, anemia hemolitik, pasca operasi, pengaruh obat, dan sebagainya.  Kondisi seperti ini bisa jadi berbahaya, bisa juga tidak, tergantung dari penyebabnya. Namun, jika dokter tidak menjelaskan ada hal yang patut Anda waspadai, seringnya hal tersebut berarti kondisi Anda masih tergolong ringan.  Supaya diberi penanganan yang tepat, kami sarankan Anda periksalah kembali ke dokter atau dokter penyakit dalam terdekat. Terkadang, guna mendeteksi penyebab meningkatnya kadar leukosit dan trombosit dalam darah, dokter perlu juga melakukan tes darah, apus darah tepi, tes pembekuan darah, tes agregasi trombosit, atau tes penunjang lainnya. Dari situ, barulah bisa diidentifikasi apa penyebab kondisi Anda, dan ditentukan juga penanganan terbaiknya.  Saat ini, yang sebaiknya Anda lakukan yakni:  Minum lebih banyak, minimal 2 liter sehari Perbanyak istirahat Rutinlah berolahraga Jaga berat badan agar tetap ideal Konsumsi makanan dengan gizi seimbang, utamanya yang mengandung kaya antioksidan seperti sayur, buah, dan biji-bijian utuh --- tidak ada makanan yang secara spesifik dilarang atau diwajibkan untuk dikonsumsi pada orang dengan kondisi seperti Anda Jauhi rokok dan alkohol Semoga membantu ya..', 'Donie Yen', 'admin', 53),
(45, 'Apakah ada beras khusus untuk penderita diabetes?', 'Dokter, ibu saya penderita diabetes. Setahu saya kalau beras putih itu banyak mengandung gula, \r\n\r\n\r\nlalu sebaiknya ibu saya konsumsi beras merah atau hitam ya? atau adakah beras khusus untuk penderita diabetes dok? mohon penjelasannya', 'Terima kasih atas pertanyaannya.  Pada penderita diabetes mengalami peningkatan kadar gula darah sehingga perlu melakukan perubahan gaya hidup sehingga gula darah menjadi terkontrol dan menghindari komplikasi diabetes. Penderita diabetes selain harus melakukan perubahan gaya hidup salah satunya mengatur pola makan. Pada penderita diabetes, sebaiknya memilih makanan yang mengandung indeks glikemik yang lebih rendah. Indeks glikemik merupakan suatu indikator dimana makanan mempengaruhi peningkatan gula darah. Skala indeks glikemik berada pada angka 1–100 dimana semakin tinggi angka akan semakin cepat meningkatkankadar gula darah.  Makanan dengan indeks glikemik tinggi mempunyai kandungankarbohidratyang dicerna cepat oleh tubuh, sehingga gula darah lebih cepat naik. Salah satu makanan yang tergolong indeks glikemik tinggi yaitu nasi putih. Sedangkan beras merah dan beras hitam keduanya mempunyai indeks glikemik yang lebih rendah dibandingkan dengan nasi putih. Pada beras merah, indeks glikemiknya yaitu 50 yang berarti baik dikonsumsi untuk penderita diabetes, pun dengan beras hitam memiliki indeks glikemik yang lebih rendah dari beras merah yaitu 42.3 sehingga baik juga dikonsumsi penderita diabetes. Namun beras hitam lebih sulit didapatkan. Maka bila ingin mengganti nasi dengan kedua beras tersebut dapat dilakukan untuk penderita diabetes, dengandapat menyesuaikan seperti mana yang lebih mudah didapatkan dan sebagainya.  Terima kasih, semoga membantu.', 'Donie Yen', 'admin', 53),
(46, 'Penyebab sakit kepala dari belakang sampai bagian alis', 'Alodokter, dok saya sudah seminggu kebelakang sering merasa sakit kepala dari belakang sampai sakit di bagian kening dan alis dok. itu karena apa ya dokter?', '', 'han', '', 56);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

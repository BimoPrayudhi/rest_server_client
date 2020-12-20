-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2020 at 05:09 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-obat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_obat`
--

CREATE TABLE `tb_obat` (
  `id` int(11) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `jenis_obat` varchar(50) NOT NULL,
  `kegunaan` text NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_obat`
--

INSERT INTO `tb_obat` (`id`, `nama_obat`, `jenis_obat`, `kegunaan`, `stok`, `harga`) VALUES
(0, 'Antasida', 'Obat Bebas', 'Menetralkan Asam lambung', 9, 9000),
(1, 'Paracetamol', 'Antibiotik', 'Mencegah anda sakit', 12, 1000),
(2, 'FG Troches', 'Antibiotik', 'Mengobati radang tenggorokan dengan kandungan fradiomycin dan gramicidin', 15, 2000),
(3, 'Naproxen', 'antiinflamasi nonsteroid', 'mengurangi produksi senyawa penyebab peradangan agar nyeri akibat sakit gigi dapat berkurang', 10, 1500),
(4, 'Vaksin DPT', ' 	Obat resep', ' Mencegah penyakit difteri, pertusis, dan tetanus', 20, 9000),
(5, 'Benzoyl Peroxide', ' Obat bebas', 'Mengobati jerawat', 15, 9000),
(6, 'Ceftaroline Fosamil', 'Sefalosporin', 'Mengobati pneumonia dan infeksi kulit akibat infeksi bakteri', 30, 6000),
(7, 'Famotidine', 'Antagonis H-2 ', 'Mengurangi produksi asam lambung', 41, 5000),
(8, 'Estazolam', 'benzodiazepin', 'Menangani insomnia', 27, 2000),
(9, 'Isoxsuprine', ' Vasodilator', 'Mengobati gejala akibat gangguan aliran darah, seperti penyakit Buerger, insufisiensi pembuluh darah otak, atau penyakit Raynaud', 35, 4000),
(10, 'IVIG', 'Antiserum', ' IVIG digunakan untuk mengobati kekurangan (defisiensi) antibodi, mencegah respon penolakan tubuh terhadap transplantasi sumsum tulang, dan mengobati beberapa jenis penyakit autoimun, termasuk penyakit kawasaki dan sindrom Gullian-Barre.', 35, 3800),
(11, 'Metildopa', ' Antihipertens', 'Menurunkan tekanan darah pada hipertensi', 15, 30000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_obat`
--
ALTER TABLE `tb_obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

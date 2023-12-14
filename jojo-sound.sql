-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2023 at 04:44 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jojo-sound`
--

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(256) DEFAULT NULL,
  `daya_paket` int(11) DEFAULT NULL,
  `spesifikasi` text DEFAULT NULL,
  `hrg_sewa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `daya_paket`, `spesifikasi`, `hrg_sewa`) VALUES
(1, 'Paket 1000 Watt', 1000, '- 2 Unit speaker 15\"\r\n- Mixer 12 channel\r\n- Mic Wireless 2 unit\r\n- Aksesoris (Equalizer, Effect dll)\r\n- Operator', 650000),
(2, 'Paket 2000 Watt', 2000, '- 4 Unit speaker 15\"\r\n- Mixer 12/16 channel\r\n- Mic Wireless 2 unit\r\n- Mic Kabel 2 unit\r\n- Aksesoris (Equalizer, Effect dll)\r\n- Operator', 1100000),
(3, 'Paket 3000 Watt', 3000, '- 4 Unit speaker 15\"\r\n- 2 Unit speaker monitor\r\n- Mixer 16 channel\r\n- Mic Wireless 3 unit\r\n- Mic Kabel 2 unit\r\n- Aksesoris (Equalizer, Effect dll)\r\n- Operator', 1300000),
(4, 'Paket 5000 Watt', 5000, '- 6 Unit speaker 15\"\r\n- 4 Unit speaker monitor\r\n- Mixer 16 channel\r\n- Mic Wireless 4 unit\r\n- Mic Kabel 2 unit\r\n- Aksesoris (Equalizer, Effect dll)\r\n- Operator', 1500000),
(5, 'Paket 6000 Watt', 6000, '- 4 Unit speaker 15\"\r\n- 2 Unit speaker Sub 18\"\r\n- 4 Unit speaker monitor\r\n- Mixer 16 channel\r\n- Mic Wireless 4 unit\r\n- Mic Kabel 2 unit\r\n- Aksesoris (Equalizer, Effect dll)\r\n- Operator', 1700000),
(6, 'Paket 8000 Watt', 8000, '- 4 Unit speaker 15\"\r\n- 4 Unit speaker Sub 18\"\r\n- 4 Unit speaker monitor\r\n- Mixer 16 channel\r\n- Mic Wireless 4 unit\r\n- Mic Kabel 2 unit\r\n- Aksesoris (Equalizer, Effect dll)\r\n- Operator', 2000000);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_paket` int(11) DEFAULT NULL,
  `nama_penyewa` varchar(256) DEFAULT NULL,
  `jenis_acara` varchar(256) DEFAULT NULL,
  `lama_sewa` int(11) DEFAULT NULL,
  `biaya_sewa` int(11) DEFAULT NULL,
  `tgl_pemesanan` date NOT NULL,
  `tmpt_acara` varchar(256) NOT NULL,
  `mulai_acara` date NOT NULL,
  `selesai_acara` date NOT NULL,
  `status` enum('Dibatalkan','Selesai') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_paket`, `nama_penyewa`, `jenis_acara`, `lama_sewa`, `biaya_sewa`, `tgl_pemesanan`, `tmpt_acara`, `mulai_acara`, `selesai_acara`, `status`) VALUES
(1, 3, 'Erwin', 'Acara Komplek', 2, 2600000, '2023-08-10', 'Lap Badminton Sempur', '2023-08-12', '2023-08-13', 'Selesai'),
(2, 3, 'Endang', 'Acara Komplek', 2, 2600000, '2023-08-17', 'Lap Badminton Sempur', '2023-08-19', '2023-08-20', 'Selesai'),
(3, 6, 'Fadhel Sephiroth0', 'Acara cosplay, band, idol dan DJ', 2, 4000000, '2023-08-23', 'Mall Boxies 123 Tajur Bogor', '2023-08-26', '2023-08-27', 'Selesai'),
(4, 4, 'Zahra Aprilia', 'Acara cosplay dan idol', 2, 3000000, '2023-11-10', 'SMA Negeri 7 Bogor', '2023-11-11', '2023-11-12', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'Karyawan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(256) DEFAULT NULL,
  `email` varchar(32) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name`, `email`, `password`, `role_id`) VALUES
(1, 'kirara', 'kirara@gmail.com', '12345678', 1),
(2, 'charlotte', 'charlotte@gmail.com', '12345678', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_paket` (`id_paket`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

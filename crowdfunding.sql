-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2024 at 01:20 PM
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
-- Database: `crowdfunding`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id_chat` int(11) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id_chat`, `pesan`, `waktu`, `id`) VALUES
(1, 'Apa kabar kamu?', '2024-01-02 07:28:43', 8),
(2, 'Hallo', '2024-01-02 08:13:53', 6);

-- --------------------------------------------------------

--
-- Table structure for table `investasi`
--

CREATE TABLE `investasi` (
  `id_investasi` int(11) NOT NULL,
  `tanggal_investasi` date NOT NULL DEFAULT current_timestamp(),
  `id_user` int(11) NOT NULL,
  `id_usaha` int(11) NOT NULL,
  `jumlah_investasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `investasi`
--

INSERT INTO `investasi` (`id_investasi`, `tanggal_investasi`, `id_user`, `id_usaha`, `jumlah_investasi`) VALUES
(1, '2024-01-02', 7, 17, 25000000),
(2, '2024-01-02', 10, 17, 12500000),
(3, '2024-01-02', 10, 18, 30000000);

-- --------------------------------------------------------

--
-- Table structure for table `usaha`
--

CREATE TABLE `usaha` (
  `id_usaha` int(11) NOT NULL,
  `nama_usaha` varchar(255) NOT NULL,
  `tanggal_pembuatan` date NOT NULL DEFAULT current_timestamp(),
  `deskripsi` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `kontak` varchar(255) NOT NULL,
  `foto1` varchar(255) NOT NULL,
  `foto2` varchar(255) NOT NULL,
  `foto3` varchar(255) NOT NULL,
  `proposal` varchar(255) NOT NULL,
  `modal_akhir` int(11) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usaha`
--

INSERT INTO `usaha` (`id_usaha`, `nama_usaha`, `tanggal_pembuatan`, `deskripsi`, `alamat`, `provinsi`, `kota`, `kontak`, `foto1`, `foto2`, `foto3`, `proposal`, `modal_akhir`, `status`, `id_user`) VALUES
(17, 'Usaha Mixue', '2024-01-02', 'asdf', 'jl.nangka', 'Riau', 'Pekanbaru', '', 'momoyo3.jpg', 'b3c7d58f2f9ba8bdbe8d0373ca1256f9.jpeg', '161f99c37e7fb648e4362384a054b8d2.png', 'b91ac6bd943b7cbf5d757ab23e7637bb.jpeg', 50000000, 'Buka', 8),
(18, 'Usaha Properti', '2024-01-02', 'asdfasdf', 'dasdf', 'Riau', 'Pekanbaru', '', 'momoyo3.jpg', '001f1e35ecf61ab984958ef5a1d9347d.png', 'f0c75987189f289d197357168ce6376c.png', '35f6f1e776542d40319cedb3e8e30bf4.png', 30000000, 'Selesai', 8);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'User',
  `gambar` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `date_created` date NOT NULL DEFAULT current_timestamp(),
  `provinsi` varchar(255) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `no_telepon` varchar(255) DEFAULT NULL,
  `foto_ktp` varchar(255) DEFAULT NULL,
  `foto_npwp` varchar(255) DEFAULT NULL,
  `foto_asli` varchar(255) DEFAULT NULL,
  `status_autentikasi` varchar(255) DEFAULT NULL,
  `uang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `role`, `gambar`, `date_created`, `provinsi`, `kota`, `no_telepon`, `foto_ktp`, `foto_npwp`, `foto_asli`, `status_autentikasi`, `uang`) VALUES
(6, 'Raymontea', 'raymontea@gmail.com', '$2y$10$ZLBtCoCPHs6iuXc3sgt0MuqsAcCJMQ1Au/5eRqGjBVIzWeIbRERGu', 'User', 'default.jpg', '2023-11-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(7, 'Charles', 'charles@gmail.com', '$2y$10$5qILi9KFrd8U2K..il5Id.IQXykZaOLE27Z.Kn9u.EWj1vwXr4xmK', 'User', 'default.jpg', '2024-01-01', 'Riau', 'Pekanbaru', '12331', 'c8947c1fb887c416b02ba9c5e5af99d4.jpg', '989bf962d0d74ba162e9d4fb11bfb4b1.JPG', '3e42eb275ce4f1e06c180069dad22b5e.JPG', 'Sudah Autentikasi', 0),
(8, 'Tes', 'tono@gmail.com', '$2y$10$m6kKvUzV57Ea3IsH14H9HOC5TfBft4XvSM6VPUqs1HzHVhenq.jNe', 'User', 'default.jpg', '2024-01-01', 'Riau', 'Pekanbaru', '12331', '18e57243b1afcd2cf24aca9dba7a03de.png', NULL, '167356d1fc2d047e9d2c8e4748c52f44.jpeg', 'Sudah Autentikasi', 0),
(9, 'Tono', 'tono123@gmail.com', '$2y$10$87bB5tebDP34dxP7jTugPOpki6JvbXeghkIXKck3Ju6PwdTt6vAwi', 'User', 'default.jpg', '2024-01-01', 'Riau', 'Pekanbaru', '12345', NULL, 'a848dc92437acf01b98940f0a344bfe2.jpeg', 'c7235626854daad62c0b63f16342c768.png', 'Sudah Autentikasi', 0),
(10, 'Vina Aulya Putri', 'vina22ti@mahasiswa.pcr.ac.id', '$2y$10$3/NVk4oUqq1KJoOowmsdauedlf9NE9iPMooDaefhamJTJQPkMrh4C', 'User', 'default.jpg', '2024-01-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(11, 'Lucky', 'lucky@gmail.com', '$2y$10$fnHDOOnINazbgbbAXkAFJeToSov9yZqr49viE0KjJRjkt9jnumOQW', 'User', 'default.jpg', '2024-01-03', NULL, NULL, NULL, NULL, NULL, NULL, 'Belum Autentikasi', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id_chat`),
  ADD KEY `id_user` (`id`);

--
-- Indexes for table `investasi`
--
ALTER TABLE `investasi`
  ADD PRIMARY KEY (`id_investasi`),
  ADD KEY `id_usaha` (`id_usaha`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `usaha`
--
ALTER TABLE `usaha`
  ADD PRIMARY KEY (`id_usaha`),
  ADD KEY `relasiuserusaha` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `investasi`
--
ALTER TABLE `investasi`
  MODIFY `id_investasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usaha`
--
ALTER TABLE `usaha`
  MODIFY `id_usaha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `investasi`
--
ALTER TABLE `investasi`
  ADD CONSTRAINT `id_usaha` FOREIGN KEY (`id_usaha`) REFERENCES `usaha` (`id_usaha`),
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `usaha`
--
ALTER TABLE `usaha`
  ADD CONSTRAINT `relasiuserusaha` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

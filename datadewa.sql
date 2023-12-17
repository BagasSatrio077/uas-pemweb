-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Des 2023 pada 15.08
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datadewa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabeldewa`
--

CREATE TABLE `tabeldewa` (
  `Nama` varchar(255) DEFAULT NULL,
  `Jenis_Kelamin` varchar(20) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Jumlah_Tiket` int(11) DEFAULT NULL,
  `Jenis_Tiket` varchar(20) DEFAULT NULL,
  `No_Handphone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tabeldewa`
--

INSERT INTO `tabeldewa` (`Nama`, `Jenis_Kelamin`, `Email`, `Jumlah_Tiket`, `Jenis_Tiket`, `No_Handphone`) VALUES
('Bagas Satrio', 'Laki-Laki', 'satriobagas942@gmail.com', 90, 'Regular', '088276430530');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabeluser`
--

CREATE TABLE `tabeluser` (
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tabeluser`
--

INSERT INTO `tabeluser` (`Username`, `Password`) VALUES
('bagas.121140077', '$2y$10$XuInKq.eNUfbd1KoIlmQqOLmHgEDUMIugFWkgOOogJLx83IomPg6W'),
('bagas.121140077', '$2y$10$CTgzPO7AhoU/kL9C1V/tC.bcqO4AULnrgoTFkNS53Bd8qcKvylpIG'),
('demokrasilagu', '$2y$10$7bH6IhkWc4R2zyYuojb2LeRbwyYdasmOPFsbyvamRRYhw.pSccTOW'),
('bagastrading999@gmail.com', '$2y$10$96QGpZNBU3YcWhfyqWDPKOvqXzEn6IaJXBpdxNHRk7xG3EldZtOxO'),
('bagastrading999@gmail.com', '$2y$10$hVzJ0KnZ930qT/6RUrDSI.sRtAdPhJ0sC5D4jPk5aHU2aOHRkVtjK'),
('bagastrading999@gmail.com', '$2y$10$9AdID7l9dPKi21VbCCyod.Yc3UFSJ/Of4QuvsLg3GGde3zE0FJ/mC'),
('demokrasilagu', '$2y$10$wyc6.sJKHgyOyEscUAzdmOaMuKjeHbtcGsnTACYBAWGfYR5/SkEBe'),
('demokrasilagu', '$2y$10$pEZX.rYOaInTrESIEAiULeICekyZfmPghAyuBkblvymVR4gW/4BOa'),
('admin', '$2y$10$HLBbb77bvuPUdpNMlzb.v.ZaIwvTB/cbDC5BsgTaSUMNYW/ncHvmW'),
('budikontol', '$2y$10$41diZ0yK/7SgGYU5jNToiOWwP6Pqj073cA9APPY49rF8oATx2PxFy'),
('budikontol', '$2y$10$NxmvXS/BIrEgGrB8ZxwqG.NiT3Jja2.O0T2bx/knmhTMnNIaAdlkm');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

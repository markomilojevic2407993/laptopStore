-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2023 at 11:53 AM
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
-- Database: `laptop`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `idKorisnika` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`idKorisnika`, `email`, `pass`) VALUES
(1, '123@123', '123'),
(2, 'yu@yu', '123'),
(3, '456@456', '123'),
(4, 'bata@mali', '123'),
(5, 'romanovi@yahoo.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `id` int(11) NOT NULL,
  `marka` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `opis` text NOT NULL,
  `slika` varchar(255) DEFAULT NULL,
  `cena` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`id`, `marka`, `model`, `opis`, `slika`, `cena`) VALUES
(1, 'Acer', 'aspire3', 'Ekran	 Veličina ekrana: 15.6\" Rezolucija ekrana: 1.920 x 1.080 Format rezolucije: Full HD Acer ComfyView™ Procesor	 Klasa procesora: Intel® Core™ i3 Model procesora: i3-1215U Broj jezgara procesora: 6 Broj logičkih jezgara (niti): 8 Radni takt procesora: 3.3 GHz (4.4 GHz) Keš memorija procesora: 10MB Intel® Smart cache Memorija	 Memorija (RAM): 8GB Tip memorije: DDR4 Radni takt memorije: 3.200MHz Hard disk	 Tip skladištenja: SSD Kapacitet: 512GB SSD interfejs: PCIe NVMe Graficka karta	Intel® UHD Graphics for 12th Gen Intel® Processors Operativni sistem	Bez operativnog sistema Opticki uredjaj	Bez optičkog uređaja Mreza	 Wi-Fi: Da Bežični mrežni standardi: IEEE 802.11ac Bluetooth™: Da Bluetooth™ verzija: 5.0 Žična mreža (LAN): 10/100/1.000Mbps (Gigabit ethernet) Slotovi	 HDMI priključci: 1 Ukupno USB priključaka: 3 USB 3.2 Tip-A priključci: 1 USB 2.0 priključci: 2 RJ-45 (LAN): 1 Audio: 1x 3.5mm (izlaz i mikrofon) Kamera	HD 720p Audio	Dual speakers Baterija	3-Cell Fizicke karakteristike	 Dimenzije: 362.9mm x 241.3mm x 19.9mm Masa: 1.78kg Boja: Srebrna (Silver) Slovni raspored tastera: US Garancija	2 godine', 'img/lenovo1.jpg', 40000),
(2, 'Lenovo V15-IGL 15.6\"', 'Celeron N4020/4GB/256SSD', 'Veličina ekrana: 15.6\" Procesor: Intel® Celeron® N4020 Kapacitet memorije: 4GB Veličina hardiska: 256 GB Model Grafičke karte: Intel® UHD Graphics 600', 'img/lenovo2.jpg', 28000),
(3, 'Lenovo V15-IGL 15.6\"', 'Celeron N4020/4GB/256SSD', 'Veličina ekrana: 15.6\" Procesor: Intel® Celeron® N4020 Kapacitet memorije: 4GB Veličina hardiska: 256 GB Model Grafičke karte: Intel® UHD Graphics 600', 'img/lenovo2.jpg', 28000),
(4, 'HP 255 G9 R3-5425u', '8GB 256 FreeDOS, 724M7EA#BED', 'Veličina ekrana: 15,6\" Procesor: AMD Ryzen 3 Kapacitet memorije: 8GB Veličina hardiska: 256 GB Model Grafičke karte: AMD Radeon', 'img/xp1.jpg', 54678),
(5, 'RedmiBook ', '15 i3 8/256', 'Veličina ekrana: 15.6\" Procesor: 11th Generation Intel® Core™ i3-1115G4 Kapacitet memorije: 8GVeličina hardiska: 256 GB', 'img/red1.jpg', 89000),
(6, 'DELL G15 5511', '15.6\" FHD 120Hz 250nits i5-11400H 8GB 512GB SSD GeForce RTX 3050 4GB Backlit sivi 5Y5B', 'Veličina ekrana: 15.6\" Procesor: Intel® Core™ i5  Kapacitet memorije: 8 GB Veličina hardiska: 512 GB Model Grafičke karte: NVIDIA GeForce RTX 3050', 'img/de1.jpg', 150000),
(7, 'Lenovo V15 G3', 'IAP DOS/15.6\"FHD/i3-1215U/8GB/256GB SSD/IntelHD/SRB/crna', 'Veličina ekrana: 15.6\" Procesor: Intel® Core™ i3 Kapacitet memorije: 8 GB Veličina hardiska: 256 GB Model Grafičke karte: Intel® UHD Graphics', 'img/lenovo3.jpg', 34000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`idKorisnika`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `idKorisnika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

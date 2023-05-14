-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Bulan Mei 2023 pada 16.57
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtokosepatu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id` int(11) NOT NULL,
  `kategori_produk` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `kategori_produk`
--

INSERT INTO `kategori_produk` (`id`, `kategori_produk`) VALUES
(11, 'Nike'),
(14, 'Vans'),
(16, 'Adidas'),
(17, 'New Balance'),
(18, 'Eiger');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `nama_pemesan` varchar(45) NOT NULL,
  `tanggal` int(11) NOT NULL,
  `alamat_pemesan` varchar(45) NOT NULL,
  `jumlah_pesanan` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `nama_pemesan`, `tanggal`, `alamat_pemesan`, `jumlah_pesanan`, `produk_id`) VALUES
(5, 'GUs', 2024, 'citapos', 6, 9),
(6, 'lidia', 20023, 'depok', 2, 10),
(8, 'zudi', 2023, 'turki', 2, 10),
(9, 'Azka', 2023, 'depok', 3, 9),
(10, 'Azka', 2023, 'cibinong', 2, 9),
(11, 'Azka', 2023, 'weeww', 2, 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(45) NOT NULL,
  `gambar` blob NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori_produk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama`, `stok`, `harga`, `gambar`, `deskripsi`, `kategori_produk_id`) VALUES
(9, 'Nike Tanjun', 22, 170000, 0x68747470733a2f2f692e746f7034746f702e696f2f705f323638383239307362312e6a7067, 'Sepatu Nike Tanjun adalah sepatu yang menawarkan kenyamanan dan gaya yang sederhana namun modern. Modelnya memiliki desain low-top dengan tampilan minimalis dan ringan.', 11),
(10, 'Nike Jordan', 16, 350000, 0x68747470733a2f2f672e746f7034746f702e696f2f705f323638387376353861312e6a7067, 'Sepatu Nike Jordan Air Jordan 1 Retro High adalah salah satu ikon dalam dunia sepatu basket dan streetwear. Modelnya memiliki desain high-top yang klasik dan berani. ', 11),
(11, 'Vans Classic Slip-On', 23, 900000, 0x68747470733a2f2f632e746f7034746f702e696f2f705f32363838696a653366312e6a7067, 'Sepatu Vans Old Skool adalah salah satu ikon dalam dunia sepatu skate dan streetwear. Modelnya memiliki desain low-top dengan siluet yang klasik dan tahan lama. ', 14),
(12, 'Vans U Authentic', 3, 850000, 0x68747470733a2f2f682e746f7034746f702e696f2f705f323638387576767765312e6a7067, 'Sepatu Vans U Authentic adalah versi klasik dari sepatu skate Vans Authentic. Modelnya memiliki desain low-top yang sederhana dan timeless. ', 14),
(13, 'Adidas Originals ZX 750', 5, 1400000, 0x68747470733a2f2f662e746f7034746f702e696f2f705f323638386439313764312e6a7067, 'Sepatu adidas Originals ZX 750 adalah salah satu ikon dalam dunia sneaker adidas. Modelnya menggabungkan elemen desain retro dengan nuansa modern', 16),
(14, 'Sneakers', 100, 150000, 0x68747470733a2f2f692e746f7034746f702e696f2f705f32363838303470616d312e6a7067, 'Sepatu adidas sneakers adalah sepatu yang dirancang dengan gaya yang sporty dan contemporary. Merek adidas telah menciptakan berbagai model sneakers yang populer dan mengikuti tren mode terkini.', 16),
(15, 'New Balance', 4, 500000, 0x68747470733a2f2f6c2e746f7034746f702e696f2f705f32363838366e70366a312e6a7067, 'Sepatu New Balance menawarkan berbagai model yang cocok untuk berbagai aktivitas dan gaya. Merek ini dikenal dengan desain yang klasik dan fokus pada kenyamanan dan performa.', 17),
(20, 'Eiger', 12, 1250000, 0x68747470733a2f2f662e746f7034746f702e696f2f705f32363838707574306b312e6a7067, '', 18);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pesanan_produk1_idx` (`produk_id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_produk_kategori_produk_idx` (`kategori_produk_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `fk_pesanan_produk1` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `fk_produk_kategori_produk` FOREIGN KEY (`kategori_produk_id`) REFERENCES `kategori_produk` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

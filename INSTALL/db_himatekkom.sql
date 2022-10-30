-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Okt 2022 pada 09.38
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_himatekkom`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(500) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `updated_at`) VALUES
(1, 'admin', 'admin', '2022-10-26 06:38:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni`
--

CREATE TABLE `alumni` (
  `id` int(11) NOT NULL,
  `inew1` varchar(1000) NOT NULL,
  `inew2` varchar(1000) NOT NULL,
  `inew3` varchar(1000) NOT NULL,
  `inew4` varchar(1000) NOT NULL,
  `inew5` varchar(1000) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alumni`
--

INSERT INTO `alumni` (`id`, `inew1`, `inew2`, `inew3`, `inew4`, `inew5`, `updated_at`) VALUES
(1, '606Fadel Ibrohim.png', '8414Hanif Wira Mahadika.png', '901Galuh Wicaksono.png', '285Calvin Andriaan.png', '2560Eka Putri Santoso.png', '2022-10-25 16:24:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner_home`
--

CREATE TABLE `banner_home` (
  `id` int(11) NOT NULL,
  `hbdnew1` varchar(1000) NOT NULL,
  `hbdnew2` varchar(1000) NOT NULL,
  `hbdnew3` varchar(1000) NOT NULL,
  `hbmnew1` varchar(1000) NOT NULL,
  `hbmnew2` varchar(1000) NOT NULL,
  `hbmnew3` varchar(1000) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `banner_home`
--

INSERT INTO `banner_home` (`id`, `hbdnew1`, `hbdnew2`, `hbdnew3`, `hbmnew1`, `hbmnew2`, `hbmnew3`, `updated_at`) VALUES
(1, '5724Banner Web landscape - 1.png', '4701Banner Web landscape - 2.png', '8800Banner Web landscape - 3.png', '1529Banner Web mobile - 1.png', '3152Banner Web mobile - 2.png', '8294Banner Web mobile - 3.png', '2022-10-26 06:30:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cumatekkom`
--

CREATE TABLE `cumatekkom` (
  `id` int(11) NOT NULL,
  `c_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ctitle` varchar(500) NOT NULL,
  `ctext` varchar(1000) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cumatekkom`
--

INSERT INTO `cumatekkom` (`id`, `c_date`, `ctitle`, `ctext`, `updated_at`) VALUES
(1, '2022-10-26 02:17:00', 'Curhat Pagi', '  Bagi yang ingin curhat tentang perkuliahan, kehidupan (emang kalian ada kehidupan ya? :v), curhat tentang doi maybe :) dipersilakan yaa <3', '2022-10-26 02:17:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cumatekkom_text`
--

CREATE TABLE `cumatekkom_text` (
  `id` int(11) NOT NULL,
  `cname` varchar(500) NOT NULL,
  `ccom` varchar(1000) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cumatekkom_text`
--

INSERT INTO `cumatekkom_text` (`id`, `cname`, `ccom`, `updated_at`) VALUES
(1, 'Hiori Zora', 'Aku mencintainya, aku menerima semua kekurangannya, dia imut, kalo ngambek pasti lucu, tetapi sekarang mungkin tidak bisa aku miliki.', '2022-10-26 03:57:40'),
(24, 'Arung', 'weh', '2022-10-26 05:24:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `enew1` varchar(1000) NOT NULL,
  `enew2` varchar(1000) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id`, `enew1`, `enew2`, `updated_at`) VALUES
(1, '3188Fadel Ibrohim.png', '2156Hanif Wira Mahadika.png', '2022-10-26 00:17:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `about_text1` varchar(1000) NOT NULL,
  `about_text2` varchar(1000) NOT NULL,
  `about_text3` varchar(1000) NOT NULL,
  `hvisi_text` varchar(500) NOT NULL,
  `hmisi_text` varchar(500) NOT NULL,
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `home`
--

INSERT INTO `home` (`id`, `about_text1`, `about_text2`, `about_text3`, `hvisi_text`, `hmisi_text`, `updated_on`) VALUES
(1, ' Himpunan Mahasiswa Teknik Komputer merupakan sebuah organisasi serta lembaga otonom yang menjadi wadah bagi Mahasiswa Jurusan Teknik Komputer Universitas Gunadarma dalam kegiatan pengkajian keilmuan beserta aspek lainnya yang pada akhirnya disebut dengan Himatekkom Universitas Gunadarma.', ' Himpunan Mahasiswa Teknik Komputer atau disingkat HIMATEKKOM didirikan di depok pada tanggal 31 Oktober 2017 yang dibentuk dengan berasaskan kekeluargaan, keterbukaan, kejujuran, kebijaksanaan, logis, dan kemusyawarahan.', ' Dibuat dengan suatu tujuan untuk meningkatkan peran serta Mahasiswa sebagai generasi penerus demi terwujudnya Tri Dharma Perguruan Tinggi yang berpegang pada pengabdian Masyarakat Indonesia.', 'Menjadi wadah organisasi mahasiswa D3 Teknik Komputer untuk berkarya secara inovatif, kreatif, dan kompetitif.', ' <li class=\"\">Menyatukan seluruh anggota dalam semangat solidaritas dan tidak membeda-bedakan agama, suku dan ras;</li>\r\n<li class=\"\">Meningkatkan kualitas living skill seluruh anggota;</li>\r\n<li class=\"\">Menciptakan lingkungan belajar seluruh anggota yang  kondusif dan bebas narkoba;</li>\r\n<li class=\"\">Menciptakan ide kreatif yang bersahabat dengan alam dalam  berkarya dan berkompetisi;</li>', '2022-10-24 04:29:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `xfile` varchar(1000) NOT NULL,
  `ufile` varchar(1000) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `logo`
--

INSERT INTO `logo` (`id`, `xfile`, `ufile`, `updated_at`) VALUES
(1, '2227logo Himatekkom.png', '6495logo slider hima.png', '2022-10-24 03:57:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `ppnew1` varchar(1000) NOT NULL,
  `ppnew2` varchar(1000) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profile`
--

INSERT INTO `profile` (`id`, `ppnew1`, `ppnew2`, `updated_at`) VALUES
(1, '1438great.png', '5923cart.png', '2022-10-26 01:37:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profiletext`
--

CREATE TABLE `profiletext` (
  `id` int(11) NOT NULL,
  `pvtitle` varchar(500) NOT NULL,
  `pvsubtitle` varchar(500) NOT NULL,
  `pmtitle` varchar(500) NOT NULL,
  `pvtext` varchar(1000) NOT NULL,
  `pmtext` varchar(1000) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profiletext`
--

INSERT INTO `profiletext` (`id`, `pvtitle`, `pvsubtitle`, `pmtitle`, `pvtext`, `pmtext`, `updated_at`) VALUES
(1, 'Visi', 'Himatekkom The G.R.E.A.T C.A.R.T', 'Misi', ' Mewujudkan Himatekkom menjadi wadah yang baik untuk pengurus dan seluruh warga Himatekkom serta memberikan bimbingan yang bisa membantu anggotanya berkembang', ' <li>Melakukan kegiatan yang dapat mengembangkan skill minat bakat dari anggota Himatekkom</li>\r\n<li>Penyelenggaraan Program Kerja yang menjadi solusi untuk masalah yang bergesekan dengan Teknik komputer</li>\r\n<li>Menjadikan Himatekkom terbuka demi mewadahi aspirasi yang disampaikan oleh Mahasiswa Teknik Komputer</li>\r\n<li>Penyusunan sistem kerja yang mengutamakan profesionalitas dengan evaluasi apresiatif demi hasil yang adaptif kedepannya</li>\r\n<li>Membawa Himatekkom menjadi organisasi yang berlandaskan pada agama maupun pancasila</li>', '2022-10-26 01:31:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `section_title`
--

CREATE TABLE `section_title` (
  `id` int(11) NOT NULL,
  `web_title` varchar(500) NOT NULL,
  `habout_title` varchar(500) NOT NULL,
  `hvisi_title` varchar(500) NOT NULL,
  `hmisi_title` varchar(500) NOT NULL,
  `pprofile_title` varchar(500) NOT NULL,
  `pprofile_text` varchar(1000) NOT NULL,
  `moto_title` varchar(500) NOT NULL,
  `moto_text` varchar(1000) NOT NULL,
  `vimi_title` varchar(500) NOT NULL,
  `vimi_text` varchar(1000) NOT NULL,
  `contact_title` varchar(500) NOT NULL,
  `title_forum` varchar(500) NOT NULL,
  `text_forum` varchar(1000) NOT NULL,
  `alumni_title` varchar(500) NOT NULL,
  `event_title` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `section_title`
--

INSERT INTO `section_title` (`id`, `web_title`, `habout_title`, `hvisi_title`, `hmisi_title`, `pprofile_title`, `pprofile_text`, `moto_title`, `moto_text`, `vimi_title`, `vimi_text`, `contact_title`, `title_forum`, `text_forum`, `alumni_title`, `event_title`) VALUES
(1, 'Himatekkom', 'Tentang Himatekkom', 'Visi', 'Misi', 'Himatekkom 2022/2023', 'Kabinet <span class=\"bg-primary rounded text-white px-2 py-1\">Nawasena</span>', 'OUR MOTTO', '“Make up your mind and fly higher step the bright”', 'Visi & Misi', 'Periode 2022/2023.', 'Hubungi Kami', 'CUMATEKKOM', 'CURHAT SAMA <span class=\"bg-primary rounded text-white px-2 py-2\">HIMATEKKOM</span>', 'Info Alumni', 'Info Event');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siteconfig`
--

CREATE TABLE `siteconfig` (
  `id` int(11) NOT NULL,
  `site_address` varchar(1000) NOT NULL,
  `site_title` varchar(300) NOT NULL,
  `site_about` varchar(1000) NOT NULL,
  `site_footer` varchar(1000) NOT NULL,
  `site_url` varchar(50) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siteconfig`
--

INSERT INTO `siteconfig` (`id`, `site_address`, `site_title`, `site_about`, `site_footer`, `site_url`, `updated_at`) VALUES
(1, 'Depok, Jawa Barat, Indonesia', 'Himatekkom Web - Under Dev', 'nanti di isi', '2022 &#169; - Himpunan Mahasiswa Teknik Komputer. All Rights Reserved', '  https://localhost:8080/himatekkom/', '2022-10-24 03:54:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sitecontact`
--

CREATE TABLE `sitecontact` (
  `id` int(11) NOT NULL,
  `phone` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sitecontact`
--

INSERT INTO `sitecontact` (`id`, `phone`, `email`, `updated_at`) VALUES
(1, '+628xxxxxxxxxx', 'himatekkom20@gmail.com', '2022-10-24 03:55:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `social`
--

CREATE TABLE `social` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `fa` varchar(150) NOT NULL,
  `social_link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `social`
--

INSERT INTO `social` (`id`, `name`, `fa`, `social_link`) VALUES
(1, 'Whatsapp', 'icon-whatsapp text-white', 'https://api.whatsapp.com/send?phone=628xxxxxxxxxx'),
(2, 'Linkedin', 'icon-linkedin text-white', 'https://www.linkedin.com/company/himatekkom-ug/mycompany/'),
(3, 'Instagram', 'icon-instagram text-white', 'https://www.instagram.com/himatekkom.ug/');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `banner_home`
--
ALTER TABLE `banner_home`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cumatekkom`
--
ALTER TABLE `cumatekkom`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cumatekkom_text`
--
ALTER TABLE `cumatekkom_text`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profiletext`
--
ALTER TABLE `profiletext`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `section_title`
--
ALTER TABLE `section_title`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siteconfig`
--
ALTER TABLE `siteconfig`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sitecontact`
--
ALTER TABLE `sitecontact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `banner_home`
--
ALTER TABLE `banner_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `cumatekkom`
--
ALTER TABLE `cumatekkom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `cumatekkom_text`
--
ALTER TABLE `cumatekkom_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `profiletext`
--
ALTER TABLE `profiletext`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `section_title`
--
ALTER TABLE `section_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sitecontact`
--
ALTER TABLE `sitecontact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `social`
--
ALTER TABLE `social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jul 2020 pada 18.44
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alfidaa2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_ortu`
--

CREATE TABLE `detail_ortu` (
  `id_ortu` int(10) UNSIGNED NOT NULL,
  `nama_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penghasilan_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penghasilan_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detail_ortu`
--

INSERT INTO `detail_ortu` (`id_ortu`, `nama_ayah`, `nama_ibu`, `alamat_ayah`, `alamat_ibu`, `telp_ayah`, `telp_ibu`, `pendidikan_ayah`, `pendidikan_ibu`, `penghasilan_ayah`, `penghasilan_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `created_at`, `updated_at`) VALUES
(401, 'IVAN BAMBANG YUDIONO', 'ELIZABETH HOWLETT', 'BEKASI AJA', 'BEKASI DOANG', '1236547899', '98765431112', 'S2', 'S1', 'Rp. 8.500.000', 'Rp. 7.000.000', 'WEB DEVELOPER', 'WEB DESIGNER', '2020-07-26 00:15:52', '2020-07-26 00:15:52'),
(591, 'IVAN BAMBANG YUDIONO', 'TEST', 'BEKASI AJA', 'BEKASI DOANG', '1236547899', '98765431112', 'S2', 'S1', 'Rp. 9.925.000', 'Rp. 7.000.000', 'WEB DEVELOPER', 'WEB DESIGNER', '2020-07-19 09:38:41', '2020-07-19 09:38:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_siswa`
--

CREATE TABLE `detail_siswa` (
  `id_siswa` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED DEFAULT NULL,
  `id_ortu` int(10) UNSIGNED DEFAULT NULL,
  `no_daftar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nisn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat_rumah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kewarganegaraan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asal_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bahasa_rumah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anak_ke` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_saudara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `golongan_darah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detail_siswa`
--

INSERT INTO `detail_siswa` (`id_siswa`, `id_user`, `id_ortu`, `no_daftar`, `nisn`, `nik`, `jenis_kel`, `tempat_lahir`, `tgl_lahir`, `alamat_rumah`, `agama`, `kewarganegaraan`, `asal_sekolah`, `alamat_sekolah`, `bahasa_rumah`, `anak_ke`, `jumlah_saudara`, `golongan_darah`, `jurusan`, `created_at`, `updated_at`) VALUES
(401, 401, 401, '01.002', '2017330029', '2017330029123456', 'L', 'PEJATEN', '2002-07-16', 'BEKASI JAYA NO.12', 'ISLAM', 'WNI', 'AL FIDAA CENDIKIA', 'JL. DAMAI NO.8', 'JAWA BARAT', '2', '3', 'A', '-', '2020-07-26 00:15:38', '2020-07-26 00:15:38'),
(591, 591, 591, '01.001', '2017330000', '2017330029123456', 'L', 'PEJATEN', '2005-07-20', 'BEKASI JAYA NO.12', 'ISLAM', 'WNI', 'AL FIDAA CENDIKIA', 'JL. DAMAI NO.8', 'INDONESIA', '2', '3', 'A', '-', '2020-07-19 09:37:47', '2020-07-19 09:37:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gelombang`
--

CREATE TABLE `gelombang` (
  `id_gelombang` int(10) UNSIGNED NOT NULL,
  `nama_gelombang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_ujian` date NOT NULL,
  `active` int(11) NOT NULL,
  `nilai_lulus` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gelombang`
--

INSERT INTO `gelombang` (`id_gelombang`, `nama_gelombang`, `tgl_ujian`, `active`, `nilai_lulus`, `created_at`, `updated_at`) VALUES
(1, '1', '2020-06-05', 1, 85, NULL, NULL),
(2, '2', '2020-07-22', 0, 88, '2020-06-20 21:17:04', '2020-07-19 11:14:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `item`
--

CREATE TABLE `item` (
  `id_item` int(10) UNSIGNED NOT NULL,
  `id_jenjang` int(10) UNSIGNED NOT NULL,
  `nama_item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `item`
--

INSERT INTO `item` (`id_item`, `id_jenjang`, `nama_item`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 'Formulir Pendaftaran', 250000, NULL, NULL),
(2, 2, 'Formulir Pendaftaran', 250000, NULL, NULL),
(3, 3, 'Formulir Pendaftaran', 200000, NULL, NULL),
(4, 1, 'Sarana', 8350000, NULL, NULL),
(5, 2, 'Sarana', 8700000, NULL, NULL),
(6, 3, 'Sarana', 3300000, NULL, NULL),
(7, 1, 'SPP', 425000, NULL, NULL),
(8, 2, 'SPP', 425000, NULL, NULL),
(9, 3, 'SPP', 330000, NULL, NULL),
(10, 1, 'POMG', 8000, NULL, NULL),
(11, 2, 'POMG', 15000, NULL, NULL),
(12, 3, 'POMG', 15000, NULL, NULL),
(13, 1, 'Buku', 1329000, NULL, NULL),
(14, 2, 'Buku', 1607500, NULL, NULL),
(15, 3, 'Buku', 1464000, NULL, NULL),
(16, 1, 'Seragam Ikhwan', 1121000, NULL, NULL),
(17, 2, 'Seragam Ikhwan', 1738000, NULL, NULL),
(18, 3, 'Seragam Ikhwan', 1655000, NULL, NULL),
(19, 1, 'Seragam Akhwat', 1271000, NULL, NULL),
(20, 2, 'Seragam Akhwat', 1785000, NULL, NULL),
(21, 3, 'Seragam Akhwat', 1700000, NULL, NULL),
(22, 1, 'Kesehatan', 175000, NULL, NULL),
(23, 2, 'Kesehatan', 175000, NULL, NULL),
(24, 3, 'Kesehatan', 175000, NULL, NULL),
(25, 1, 'Program', 1423000, NULL, NULL),
(26, 2, 'Program', 1625500, NULL, NULL),
(27, 3, 'Program', 1625500, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenjang`
--

CREATE TABLE `jenjang` (
  `id_jenjang` int(10) UNSIGNED NOT NULL,
  `nama_jenjang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jenjang`
--

INSERT INTO `jenjang` (`id_jenjang`, `nama_jenjang`, `created_at`, `updated_at`) VALUES
(1, 'SMP', '2020-06-05 14:35:46', '2020-06-05 14:35:46'),
(2, 'SMA', '2020-06-05 14:35:46', '2020-06-05 14:35:46'),
(3, 'SMK', '2020-06-05 14:35:46', '2020-06-05 14:35:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jenjang` int(10) UNSIGNED NOT NULL,
  `nama_jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jenjang`, `nama_jurusan`, `created_at`, `updated_at`) VALUES
(2, 'IPA', '2020-06-05 14:35:46', '2020-06-05 14:35:46'),
(2, 'IPS', '2020-06-05 14:35:46', '2020-06-05 14:35:46'),
(3, 'Multimedia', '2020-06-05 14:35:46', '2020-06-05 14:35:46'),
(3, 'Tata Boga', '2020-06-05 14:35:46', '2020-06-05 14:35:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2010_02_14_084621_create_settings_table', 1),
(2, '2010_02_14_084622_create_gelombangs_table', 1),
(3, '2012_03_15_083556_create_permission_tables', 1),
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2020_02_14_074320_create_detail_ortu_table', 1),
(8, '2020_02_14_084304_create_detail_siswa_table', 1),
(9, '2020_02_14_084335_create_payment_table', 1),
(10, '2020_02_14_084419_create_payment_detail_table', 1),
(11, '2020_02_14_084433_create_jenjang_table', 1),
(12, '2020_02_14_084434_create_item_table', 1),
(13, '2020_03_13_095637_create_jurusan_table', 1),
(14, '2020_05_19_130359_create_nilai_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 386),
(1, 'App\\User', 389),
(1, 'App\\User', 390),
(1, 'App\\User', 391),
(1, 'App\\User', 392),
(1, 'App\\User', 590),
(1, 'App\\User', 591),
(2, 'App\\User', 395),
(3, 'App\\User', 387),
(3, 'App\\User', 396),
(4, 'App\\User', 388),
(4, 'App\\User', 393),
(8, 'App\\User', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(10) UNSIGNED NOT NULL,
  `id_siswa` int(10) UNSIGNED NOT NULL,
  `tkd` int(11) NOT NULL,
  `tpa` int(11) NOT NULL,
  `taq` int(11) NOT NULL,
  `rata` int(11) NOT NULL,
  `seragam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_siswa`, `tkd`, `tpa`, `taq`, `rata`, `seragam`, `created_at`, `updated_at`) VALUES
(3, 2, 90, 82, 78, 83, 'L', '2020-07-19 11:09:44', '2020-07-19 11:09:44'),
(4, 591, 90, 82, 93, 88, 'L', '2020-07-19 11:29:59', '2020-07-19 11:30:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment`
--

CREATE TABLE `payment` (
  `id_payment` int(10) UNSIGNED NOT NULL,
  `id_siswa` int(10) UNSIGNED NOT NULL,
  `id_invoice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `from_rek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_bank_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verified` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `verified_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bukti` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `payment`
--

INSERT INTO `payment` (`id_payment`, `id_siswa`, `id_invoice`, `nama_siswa`, `role_siswa`, `note`, `date`, `from_rek`, `from_name`, `from_bank_name`, `verified`, `verified_by`, `bukti`, `created_at`, `updated_at`) VALUES
(40, 590, '2020-00001', 'Wolverine', 'SMP', 'Formulir Pembayaran Biaya Formulir Pendaftaran Wolverine', '2020-07-19', '90000123xxx99', 'ADE OCTAVIANTO DWIPUTRA', 'Mandiri', 1, 'Superadmin', 'img_1595143306.jpg', '2020-07-19 00:21:46', '2020-07-19 11:08:39'),
(41, 591, '2020-00041', 'Fahmi Test SMP', 'SMP', 'Formulir Pembayaran Biaya Formulir Pendaftaran Fahmi Test SMP', '2020-07-19', '90000123xxx99', 'ADE OCTAVIANTO DWIPUTRA', 'Mandiri', 1, 'Superadmin', 'img_1595170729.jpg', '2020-07-19 07:58:49', '2020-07-19 11:08:07'),
(43, 591, '2020-00042', 'Fahmi Test SMP', 'SMP', 'Transfer Untuk Biaya Sarana Dan Seragam', '2020-07-26', '12333322', 'ADE OCTAVIANTO DWIPUTRA', 'BTN', 1, 'Superadmin', 'img_1595781052.jpg', '2020-07-26 09:30:52', '2020-07-26 09:31:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment_detail`
--

CREATE TABLE `payment_detail` (
  `id_payment_detail` int(10) UNSIGNED NOT NULL,
  `id_payment` int(10) UNSIGNED NOT NULL,
  `id_item` int(11) NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `payment_detail`
--

INSERT INTO `payment_detail` (`id_payment_detail`, `id_payment`, `id_item`, `price`, `created_at`, `updated_at`) VALUES
(43, 40, 1, 250000, '2020-07-19 00:57:49', '2020-07-19 00:57:49'),
(44, 41, 1, 250000, '2020-07-19 08:16:23', '2020-07-19 08:16:23'),
(47, 43, 4, 8350000, '2020-07-26 09:31:12', '2020-07-26 09:31:12'),
(48, 43, 16, 1121000, '2020-07-26 09:31:29', '2020-07-26 09:31:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'SMP', 'web', '2020-06-05 14:35:45', '2020-06-05 14:35:45'),
(2, 'SMA', 'web', '2020-06-05 14:35:45', '2020-06-05 14:35:45'),
(3, 'SMK', 'web', '2020-06-05 14:35:45', '2020-06-05 14:35:45'),
(4, 'Admin SMP', 'web', '2020-06-05 14:35:45', '2020-06-05 14:35:45'),
(5, 'Admin SMA', 'web', '2020-06-05 14:35:45', '2020-06-05 14:35:45'),
(6, 'Admin SMK', 'web', '2020-06-05 14:35:45', '2020-06-05 14:35:45'),
(7, 'Admin Keuangan', 'web', '2020-06-05 14:35:45', '2020-06-05 14:35:45'),
(8, 'Super Admin', 'web', '2020-06-05 14:35:45', '2020-06-05 14:35:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `settings`
--

CREATE TABLE `settings` (
  `id_settings` int(10) UNSIGNED NOT NULL,
  `nama_bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_rek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemilik_rek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp_smp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp_sma` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp_smk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `open` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `settings`
--

INSERT INTO `settings` (`id_settings`, `nama_bank`, `no_rek`, `pemilik_rek`, `cp_smp`, `cp_sma`, `cp_smk`, `alamat_sekolah`, `telp_sekolah`, `created_at`, `updated_at`, `open`) VALUES
(1, 'BNI Syariah', '1050920157', 'Yayasan Islam Al Fidaa', '81318375066', '81314632201', '81314632201', 'Jl. Damai No. 8, Setiamekar Kec. Tambun Sel, Bekasi', '(021) 88350446', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bayar_pendaftaran` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `sudah_cetak` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `is_lulus` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `is_completed` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `dgk` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `no_telp`, `password`, `photo`, `bayar_pendaftaran`, `sudah_cetak`, `is_lulus`, `is_completed`, `role_id`, `dgk`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Superadmin', 'superadmin', '123456', '$2y$10$Y0AGAaB4zZOUFpJkNgb6NORstSMhQqeCkp/MTJG8M.PSigNTJoyLi', 'default.jpg', 1, 1, 0, 0, 8, 0, NULL, '2020-06-05 14:59:01', '2020-06-05 15:08:21'),
(393, 'Fira', 'fira', '0', '$2y$10$lDQnizASeDdDHHodlVMs/eSxsZflgIROf3rIhdETtUsIMbv37O8u2', 'default.jpg', 1, 0, 0, 0, 4, 0, NULL, '2020-07-18 21:29:43', '2020-07-18 21:29:43'),
(395, 'Storm', 'storm@gmail.com', '123456', '$2y$10$.WmHBH5F5c8C.uzuD9nSI.riy7ScQODkRSc6JArbI4XqUWtDaTqym', 'default.jpg', 0, 0, 0, 0, 2, 1, NULL, '2020-07-18 21:30:42', '2020-07-19 00:20:43'),
(396, 'Scott', 'scott@gmail.com', '123456', '$2y$10$/w5MfTmNPRUDilfy.jSNkOTuu8kuJ4GnWUW44XvmF8pRW9lxiS9vW', 'default.jpg', 0, 0, 0, 0, 3, 1, NULL, '2020-07-18 21:30:58', '2020-07-18 21:30:58'),
(398, 'Shakila Safitri', 'siregar.emin@yahoo.co.id', '(+62) 781 8775 055', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
(399, 'Cornelia Riyanti', 'zmaryati@gmail.com', '026 7660 748', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
(400, 'Kemba Kuswoyo', 'qwinarsih@tamba.biz.id', '(+62) 380 6367 5552', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
(402, 'Galak Leo Wibowo', 'rika.yolanda@yahoo.com', '(+62) 324 8841 892', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
(403, 'Jamalia Oktaviani', 'jumari17@pratama.asia', '(+62) 668 0957 7080', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 1, 1, NULL, NULL, NULL),
(404, 'Cinthia Haryanti', 'hari.suryatmi@wastuti.web.id', '0781 2369 1605', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
(408, 'Ifa Yolanda', 'kariman.halim@hutasoit.id', '(+62) 750 6180 927', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
(409, 'Rahmi Wahyuni', 'zulaika.fitriani@widiastuti.id', '(+62) 751 5109 3156', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 3, 1, NULL, NULL, NULL),
(410, 'Ian Hidayanto', 'oirawan@gmail.co.id', '0483 4298 1198', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
(412, 'Carla Kuswandari', 'janet69@maryati.or.id', '0718 6011 2446', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 3, 1, NULL, NULL, NULL),
(413, 'Indra Prasetya', 'ismail16@gmail.com', '0969 2832 3260', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
(414, 'Vanya Safitri', 'maimunah.lazuardi@widodo.tv', '0668 9634 644', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 2, 1, NULL, NULL, NULL),
(415, 'Kunthara Haryanto', 'luis63@yahoo.co.id', '(+62) 945 4874 2068', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
(416, 'Prayogo Mangunsong', 'osihombing@gmail.com', '(+62) 601 6088 410', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
(417, 'Hasna Hasna Mayasari', 'aryani.karman@yahoo.com', '0271 3168 1829', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
(418, 'Niyaga Napitupulu', 'wacana.tasnim@gmail.com', '(+62) 25 6045 411', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
(419, 'Hasna Rahimah', 'marsudi.simbolon@gmail.com', '0659 3243 5189', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
(420, 'Paris Ana Namaga', 'tamba.cengkal@suryono.co.id', '(+62) 865 0936 483', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 3, 1, NULL, NULL, NULL),
(423, 'Dimaz Manullang', 'fujiati.padma@gmail.co.id', '029 2889 964', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 1, 1, NULL, NULL, NULL),
(424, 'Kayun Nainggolan', 'drajat.prasetyo@nuraini.or.id', '(+62) 246 1457 963', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 1, 1, NULL, NULL, NULL),
(425, 'Purwa Budiman', 'malika.tamba@gmail.com', '0607 8633 858', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 3, 1, NULL, NULL, NULL),
(426, 'Amalia Sari Pertiwi', 'hwijaya@gmail.com', '(+62) 885 6684 2102', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
(427, 'Saiful Nashiruddin', 'cutama@yahoo.co.id', '(+62) 311 9919 7820', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
(428, 'Bakti Mandala', 'permata.maman@aryani.net', '0204 2630 586', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
(429, 'Latika Nasyidah', 'adiarja.uyainah@yahoo.com', '(+62) 726 5455 286', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
(430, 'Candra Prasetya', 'ophelia41@samosir.com', '(+62) 329 4921 5210', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
(431, 'Balapati Nashiruddin', 'widiastuti.hartana@mandala.org', '(+62) 29 1993 4316', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
(432, 'Estiono Uwais', 'diah.wijaya@hidayat.ac.id', '(+62) 529 9745 9892', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
(433, 'Mustofa Mustofa', 'hendra.hartati@yahoo.co.id', '(+62) 989 9191 231', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
(434, 'Atmaja Sihotang', 'fagustina@gmail.com', '0229 2243 293', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
(436, 'Unggul Waskita', 'vsetiawan@waluyo.info', '(+62) 841 2404 3695', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 1, 1, NULL, NULL, NULL),
(439, 'Gangsa Galak Widodo', 'puspita.calista@yahoo.com', '0899 2604 3352', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 1, 1, NULL, NULL, NULL),
(440, 'Adikara Januar', 'saragih.farhunnisa@damanik.biz', '(+62) 452 1825 123', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
(441, 'Jarwadi Sitompul', 'kusmawati.salimah@padmasari.net', '0945 1658 620', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
(442, 'Mumpuni Paiman Thamrin', 'padmasari.dono@gmail.com', '0795 5068 690', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
(443, 'Olivia Rahimah', 'ulya92@hakim.biz.id', '(+62) 216 2378 5801', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 2, 1, NULL, NULL, NULL),
(444, 'Nalar Jailani', 'irsad81@salahudin.co', '0523 8963 172', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
(445, 'Candra Sihombing', 'xmandala@gmail.com', '021 7423 8497', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 1, 1, NULL, NULL, NULL),
(446, 'Murti Ikhsan Iswahyudi', 'sakura29@pertiwi.co.id', '0581 1812 1138', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
(448, 'Tirta Jailani', 'janet00@suartini.web.id', '(+62) 840 898 262', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 1, 1, NULL, NULL, NULL),
(450, 'Kenari Waluyo', 'salimah.pradana@yahoo.com', '023 6311 126', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
(451, 'Prayitna Uwais', 'martaka.melani@gmail.co.id', '(+62) 781 7729 9089', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
(452, 'Cawuk Sirait', 'lalita87@aryani.my.id', '0869 6971 013', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
(453, 'Paris Qori Mandasari', 'yrahimah@rahimah.ac.id', '0865 1147 977', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 2, 1, NULL, NULL, NULL),
(454, 'Jessica Utami', 'pranawa.farida@haryanti.ac.id', '0741 2286 6842', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
(455, 'Ridwan Tampubolon', 'sakti.puspita@yahoo.co.id', '0909 5488 779', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 3, 1, NULL, NULL, NULL),
(457, 'Ghani Latupono', 'wisnu45@yahoo.com', '0892 1973 2191', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
(458, 'Olivia Kani Wastuti', 'onasyiah@yahoo.co.id', '(+62) 596 0887 0942', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 1, 1, NULL, NULL, NULL),
(459, 'Gada Suryono', 'amalia.farida@oktaviani.biz', '0441 5527 7135', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
(460, 'Langgeng Gunarto', 'mhalim@gmail.co.id', '(+62) 26 0354 7722', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
(461, 'Talia Rahimah', 'novitasari.banawa@yahoo.co.id', '(+62) 796 3148 483', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 1, 1, NULL, NULL, NULL),
(463, 'Darmanto Firmansyah', 'haryanti.digdaya@yahoo.com', '021 6955 6421', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
(465, 'Padma Haryanti', 'bwaskita@gmail.com', '0413 9477 3974', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
(466, 'Kamila Utami', 'julia.purwanti@hassanah.in', '(+62) 405 3090 2078', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
(467, 'Rika Wahyuni', 'tampubolon.tari@gmail.co.id', '(+62) 425 5671 5601', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
(468, 'Rachel Haryanti', 'rachel09@marpaung.tv', '(+62) 382 7868 016', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 1, 1, NULL, NULL, NULL),
(469, 'Salimah Lestari', 'darimin.mulyani@gmail.co.id', '(+62) 808 631 256', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
(474, 'Fitria Fujiati', 'rini28@agustina.ac.id', '(+62) 909 6412 339', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 3, 1, NULL, NULL, NULL),
(475, 'Vino Utama', 'rthamrin@halim.org', '0344 8157 5799', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
(476, 'Ghaliyati Utami', 'maras.kusumo@yahoo.co.id', '(+62) 643 4607 664', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
(479, 'Harja Prasetyo', 'mangunsong.bagiya@widiastuti.biz', '(+62) 232 5476 4042', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
(480, 'Rachel Nasyidah', 'aryani.elisa@maryadi.biz', '025 6788 055', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
(481, 'Uda Wacana', 'hariyah.alambana@nurdiyanti.biz.id', '(+62) 384 3981 8673', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
(482, 'Viktor Cemani Winarno', 'yulianti.puput@yahoo.com', '(+62) 746 9529 398', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
(483, 'Pia Puspita', 'mala23@utami.in', '0839 9085 122', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 2, 1, NULL, NULL, NULL),
(485, 'Mitra Sinaga', 'hsuartini@yahoo.co.id', '0546 7694 9749', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
(487, 'Adhiarja Suryono', 'ratih35@wahyudin.sch.id', '(+62) 855 101 920', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
(488, 'Jarwa Saefullah', 'elvina81@yahoo.com', '(+62) 946 9398 4878', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 2, 1, NULL, NULL, NULL),
(489, 'Puspa Handayani', 'jpuspita@gmail.com', '(+62) 912 9972 179', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
(490, 'Zaenab Puspita', 'anurdiyanti@napitupulu.name', '(+62) 656 6826 417', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
(492, 'Dalimin Firgantoro', 'kacung72@haryanti.in', '(+62) 27 5416 227', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
(493, 'Satya Megantara', 'dinda39@saragih.co.id', '(+62) 319 0332 6919', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
(495, 'Latika Natalia Mardhiyah', 'mulyani.ade@gmail.com', '(+62) 305 0644 560', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
(497, 'Lasmono Pratama', 'permadi.widya@yahoo.com', '(+62) 27 5750 041', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 2, 1, NULL, NULL, NULL),
(499, 'Yulia Pudjiastuti', 'widodo.eli@purnawati.desa.id', '0722 2832 509', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
(500, 'Harjaya Hidayat', 'opan.marpaung@hassanah.go.id', '0206 2256 127', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 2, 1, NULL, NULL, NULL),
(502, 'Umi Yuniar', 'tmaryati@simanjuntak.or.id', '0979 6597 5153', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
(503, 'Jamal Mansur', 'fuwais@permadi.info', '(+62) 283 3952 0729', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
(504, 'Fitria Laksmiwati', 'bpertiwi@yahoo.com', '0256 1414 6013', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
(505, 'Raihan Tarihoran', 'mutia.winarsih@prasetyo.or.id', '0826 3436 401', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
(506, 'Paramita Oktaviani', 'outami@uwais.sch.id', '(+62) 283 7788 462', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
(508, 'Anita Nasyiah', 'pradipta.caraka@yahoo.co.id', '0561 9924 570', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
(509, 'Hadi Hidayanto', 'prabowo.habibi@santoso.ac.id', '(+62) 27 6489 1795', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 3, 1, NULL, NULL, NULL),
(511, 'Reksa Caturangga Pangestu', 'asmadi06@gmail.com', '0229 6304 5954', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
(513, 'Opung Salahudin', 'hamima06@yahoo.com', '0246 3604 085', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
(516, 'Nadia Oktaviani', 'ylatupono@astuti.info', '(+62) 865 6364 7977', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 2, 1, NULL, NULL, NULL),
(517, 'Gasti Lestari', 'cici.dongoran@yahoo.co.id', '(+62) 610 2692 360', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
(518, 'Jono Simanjuntak', 'epadmasari@prastuti.name', '0786 5795 655', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
(520, 'Nadia Nuraini', 'ridwan.pratiwi@yahoo.co.id', '0801 9553 4449', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
(522, 'Tirtayasa Harimurti Simanjuntak', 'nababan.tomi@gmail.com', '(+62) 911 6642 151', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
(523, 'Vivi Janet Hariyah', 'dinda.prayoga@safitri.desa.id', '0804 9426 346', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 1, 1, NULL, NULL, NULL),
(524, 'Indah Usada', 'budi.prasasta@gmail.co.id', '(+62) 396 7866 198', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 2, 1, NULL, NULL, NULL),
(525, 'Viman Darijan Budiman', 'cengkir02@suryono.my.id', '(+62) 618 1355 9276', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
(526, 'Oni Yuliarti', 'yoga.waskita@narpati.tv', '(+62) 24 4086 9087', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 3, 1, NULL, NULL, NULL),
(529, 'Putri Melani', 'gnashiruddin@wacana.asia', '(+62) 369 8492 9506', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
(530, 'Umay Elon Siregar', 'farida.putri@gmail.com', '0526 4394 7200', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
(532, 'Jelita Rahmawati', 'hasanah.elisa@yahoo.co.id', '(+62) 25 6892 048', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
(534, 'Ade Mutia Padmasari', 'cinta63@gmail.com', '(+62) 699 7003 093', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 1, 1, NULL, NULL, NULL),
(535, 'Saka Mahendra', 'thariyah@gmail.co.id', '(+62) 549 6068 4152', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
(536, 'Jamal Hidayanto', 'ayolanda@uwais.biz.id', '0414 9444 8752', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 1, 1, NULL, NULL, NULL),
(537, 'Tania Vicky Kusmawati', 'anastasia.mardhiyah@nugroho.or.id', '0361 0873 084', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 1, 1, NULL, NULL, NULL),
(538, 'Jarwa Nugroho', 'amalia.novitasari@yahoo.co.id', '(+62) 485 9981 0998', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
(539, 'Adinata Wasita', 'yono.novitasari@yahoo.com', '0586 0822 617', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
(540, 'Wakiman Putra', 'rsitorus@astuti.or.id', '(+62) 916 4928 367', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 2, 1, NULL, NULL, NULL),
(541, 'Embuh Situmorang', 'hariyah.jabal@yahoo.co.id', '(+62) 22 4577 4679', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
(542, 'Rafid Siregar', 'jyuliarti@megantara.org', '(+62) 834 466 848', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
(543, 'Keisha Bella Utami', 'nardi.narpati@yahoo.com', '0853 392 072', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 1, 1, NULL, NULL, NULL),
(546, 'Atmaja Kuswoyo', 'riyanti.wahyu@andriani.ac.id', '0873 3370 9745', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
(547, 'Hani Maryati', 'zelda80@gmail.com', '(+62) 418 5486 5141', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 2, 1, NULL, NULL, NULL),
(551, 'Lanjar Prayoga Hutasoit', 'npranowo@pranowo.or.id', '(+62) 960 5443 4715', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
(552, 'Juli Hastuti', 'laksmiwati.salwa@gmail.com', '(+62) 966 4813 472', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
(554, 'Karsana Siregar', 'carub16@gmail.co.id', '0306 4496 595', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
(555, 'Ella Iriana Yulianti', 'riyanti.eka@gmail.co.id', '0404 0872 990', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
(556, 'Oni Winarsih', 'anasyidah@yahoo.com', '(+62) 428 7243 5993', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 1, 1, NULL, NULL, NULL),
(557, 'Ulya Yuliarti', 'ppalastri@gmail.co.id', '0780 5326 7310', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
(559, 'Bakianto Dartono Maryadi', 'aslijan.namaga@gmail.co.id', '(+62) 384 3397 6522', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
(561, 'Bambang Nainggolan', 'niyaga.suryatmi@marbun.go.id', '(+62) 260 1140 816', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 2, 1, NULL, NULL, NULL),
(562, 'Najwa Novitasari', 'gunawan.bakiadi@gmail.com', '0335 5951 6579', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 2, 1, NULL, NULL, NULL),
(564, 'Leo Halim', 'zsafitri@yahoo.com', '(+62) 810 872 066', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 1, 1, NULL, NULL, NULL),
(565, 'Hana Novitasari', 'adikara19@gmail.com', '0204 9870 3667', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 2, 1, NULL, NULL, NULL),
(566, 'Carub Paiman Sitorus', 'elvina84@sitorus.org', '0903 1269 1578', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
(567, 'Hana Cornelia Handayani', 'vnasyidah@gmail.co.id', '(+62) 702 3357 110', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
(569, 'Respati Rudi Mandala', 'aisyah19@gmail.co.id', '0753 9565 118', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
(570, 'Catur Mansur', 'anggraini.rafid@gmail.co.id', '(+62) 619 1706 6414', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
(571, 'Ajiono Gunarto', 'emandala@winarno.or.id', '(+62) 802 049 217', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
(573, 'Dwi Gilang Prasetya', 'andriani.nabila@yahoo.com', '0467 0958 8096', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
(574, 'Kajen Wibowo', 'siregar.dimas@puspita.biz', '(+62) 427 8320 3111', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
(575, 'Laksana Dodo Dabukke', 'wijayanti.yuliana@tampubolon.biz.id', '0509 4138 759', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 2, 1, NULL, NULL, NULL),
(576, 'Warsita Lazuardi', 'isaragih@yahoo.co.id', '0564 6484 698', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
(577, 'Latif Prayoga', 'kawaya29@wahyudin.biz', '0598 1742 7663', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 2, 1, NULL, NULL, NULL),
(578, 'Kemal Firgantoro', 'cagak.saefullah@mardhiyah.desa.id', '026 2216 466', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
(580, 'Nurul Hassanah', 'ami79@wulandari.web.id', '0874 931 772', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
(582, 'Ganjaran Waskita', 'ani57@budiman.or.id', '0862 5344 9840', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
(583, 'Dwi Gaiman Tarihoran', 'puji.widiastuti@yahoo.com', '0470 4771 4235', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
(585, 'Keisha Winarsih', 'narji.thamrin@marbun.info', '0817 681 769', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
(586, 'Julia Wijayanti', 'aoktaviani@gmail.co.id', '0876 6804 3743', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 3, 1, NULL, NULL, NULL),
(588, 'Mumpuni Endra Damanik', 'malik.astuti@yahoo.com', '(+62) 22 0873 7864', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
(589, 'Zelaya Wirda Astuti', 'usada.natalia@mansur.mil.id', '0801 0567 3464', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
(590, 'Wolverine', 'wolverine@gmail.com', '123456', '$2y$10$/0ZjS8MuvRFacHLUlDoOkeq7EQwgt0p3U/8//aQLF7vk1ieuJHvEC', 'default.jpg', 1, 0, 0, 0, 1, 1, NULL, '2020-07-19 00:21:22', '2020-07-19 00:57:49'),
(591, 'Fahmi Test SMP', 'fahmismp@gmail.com', '123456', '$2y$10$VbuMwNWUpuYIMFrweSUWseladckrNLEj2ssIHgymqtMqYsFzZd8MW', 'img_1595176694.png', 1, 1, 1, 1, 1, 1, NULL, '2020-07-19 07:58:18', '2020-07-26 09:31:29');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_ortu`
--
ALTER TABLE `detail_ortu`
  ADD PRIMARY KEY (`id_ortu`);

--
-- Indeks untuk tabel `detail_siswa`
--
ALTER TABLE `detail_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gelombang`
--
ALTER TABLE `gelombang`
  ADD PRIMARY KEY (`id_gelombang`);

--
-- Indeks untuk tabel `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id_item`);

--
-- Indeks untuk tabel `jenjang`
--
ALTER TABLE `jenjang`
  ADD PRIMARY KEY (`id_jenjang`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id_payment`);

--
-- Indeks untuk tabel `payment_detail`
--
ALTER TABLE `payment_detail`
  ADD PRIMARY KEY (`id_payment_detail`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id_settings`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gelombang`
--
ALTER TABLE `gelombang`
  MODIFY `id_gelombang` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `item`
--
ALTER TABLE `item`
  MODIFY `id_item` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `jenjang`
--
ALTER TABLE `jenjang`
  MODIFY `id_jenjang` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `payment`
--
ALTER TABLE `payment`
  MODIFY `id_payment` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `payment_detail`
--
ALTER TABLE `payment_detail`
  MODIFY `id_payment_detail` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `settings`
--
ALTER TABLE `settings`
  MODIFY `id_settings` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=592;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

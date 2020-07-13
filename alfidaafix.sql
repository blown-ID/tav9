-- --------------------------------------------------------
-- Host:                         192.168.10.10
-- Server version:               10.4.13-MariaDB-1:10.4.13+maria~bionic-log - mariadb.org binary distribution
-- Server OS:                    debian-linux-gnu
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping data for table alfidaafix.detail_ortu: ~0 rows (approximately)
/*!40000 ALTER TABLE `detail_ortu` DISABLE KEYS */;
INSERT INTO `detail_ortu` (`id_ortu`, `nama_ayah`, `nama_ibu`, `alamat_ayah`, `alamat_ibu`, `telp_ayah`, `telp_ibu`, `pendidikan_ayah`, `pendidikan_ibu`, `penghasilan_ayah`, `penghasilan_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `created_at`, `updated_at`) VALUES
	(386, 'IVAN BAMBANG BUDIONO', 'VERONIKA LIANA JOHAN', 'JL NGAGEL JAYA UTARA 132', 'JL NGAGEL JAYA UTARA 132', '082261656766', '082261656768', 'S2', 'S1', 'Rp. 9.850.000', 'Rp. 8.430.000', 'WEB DEVELOPER', 'ANDROID DEVELOPER', '2020-06-05 22:08:04', '2020-06-05 22:08:13');
/*!40000 ALTER TABLE `detail_ortu` ENABLE KEYS */;

-- Dumping data for table alfidaafix.detail_siswa: ~0 rows (approximately)
/*!40000 ALTER TABLE `detail_siswa` DISABLE KEYS */;
INSERT INTO `detail_siswa` (`id_siswa`, `id_user`, `id_ortu`, `no_daftar`, `nisn`, `nik`, `jenis_kel`, `tempat_lahir`, `tgl_lahir`, `alamat_rumah`, `agama`, `kewarganegaraan`, `asal_sekolah`, `alamat_sekolah`, `bahasa_rumah`, `anak_ke`, `jumlah_saudara`, `golongan_darah`, `jurusan`, `created_at`, `updated_at`) VALUES
	(386, 386, 386, '01.001', '8828882888', '1234567890123456', 'L', 'BOGOR', '2003-06-18', 'PERUM. AL FIDAAA CENDIKIA', 'ISLAM', 'WNI', 'SD AL FIDAA CENDIKIA', 'JL. DAMAI', 'INDONESIA', '2', '3', 'A', '-', '2020-06-05 22:07:29', '2020-06-05 22:08:04');
/*!40000 ALTER TABLE `detail_siswa` ENABLE KEYS */;

-- Dumping data for table alfidaafix.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping data for table alfidaafix.gelombang: ~1 rows (approximately)
/*!40000 ALTER TABLE `gelombang` DISABLE KEYS */;
INSERT INTO `gelombang` (`id_gelombang`, `nama_gelombang`, `tgl_ujian`, `active`, `nilai_lulus`, `created_at`, `updated_at`) VALUES
	(1, '1', '2020-06-05', 1, 85, NULL, NULL);
/*!40000 ALTER TABLE `gelombang` ENABLE KEYS */;

-- Dumping data for table alfidaafix.item: ~27 rows (approximately)
/*!40000 ALTER TABLE `item` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `item` ENABLE KEYS */;

-- Dumping data for table alfidaafix.jenjang: ~3 rows (approximately)
/*!40000 ALTER TABLE `jenjang` DISABLE KEYS */;
INSERT INTO `jenjang` (`id_jenjang`, `nama_jenjang`, `created_at`, `updated_at`) VALUES
	(1, 'SMP', '2020-06-05 21:35:46', '2020-06-05 21:35:46'),
	(2, 'SMA', '2020-06-05 21:35:46', '2020-06-05 21:35:46'),
	(3, 'SMK', '2020-06-05 21:35:46', '2020-06-05 21:35:46');
/*!40000 ALTER TABLE `jenjang` ENABLE KEYS */;

-- Dumping data for table alfidaafix.jurusan: ~4 rows (approximately)
/*!40000 ALTER TABLE `jurusan` DISABLE KEYS */;
INSERT INTO `jurusan` (`id_jenjang`, `nama_jurusan`, `created_at`, `updated_at`) VALUES
	(2, 'SMA', '2020-06-05 21:35:46', '2020-06-05 21:35:46'),
	(2, 'SMK', '2020-06-05 21:35:46', '2020-06-05 21:35:46'),
	(3, 'Multimedia', '2020-06-05 21:35:46', '2020-06-05 21:35:46'),
	(3, 'Tata Boga', '2020-06-05 21:35:46', '2020-06-05 21:35:46');
/*!40000 ALTER TABLE `jurusan` ENABLE KEYS */;

-- Dumping data for table alfidaafix.migrations: ~14 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping data for table alfidaafix.model_has_permissions: ~0 rows (approximately)
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;

-- Dumping data for table alfidaafix.model_has_roles: ~1 rows (approximately)
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(1, 'App\\User', 386),
	(3, 'App\\User', 387),
	(8, 'App\\User', 1);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;

-- Dumping data for table alfidaafix.nilai: ~0 rows (approximately)
/*!40000 ALTER TABLE `nilai` DISABLE KEYS */;
/*!40000 ALTER TABLE `nilai` ENABLE KEYS */;

-- Dumping data for table alfidaafix.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping data for table alfidaafix.payment: ~0 rows (approximately)
/*!40000 ALTER TABLE `payment` DISABLE KEYS */;
INSERT INTO `payment` (`id_payment`, `id_siswa`, `id_invoice`, `nama_siswa`, `role_siswa`, `note`, `date`, `from_rek`, `from_name`, `from_bank_name`, `verified_by`, `created_at`, `updated_at`) VALUES
	(1, 386, '2020-00001', 'Ahmad Ziyech', 'SMP', 'Pembayaran Uang Formulir Pendaftaran Ahmad Ziyech', '2020-06-05', '1050920157', 'Yayasan Islam Al Fidaa', 'BNI Syariah', 'Superadmin', '2020-06-05 22:06:41', '2020-06-05 22:06:41'),
	(2, 5, '2020-00002', 'Nabila Betania Nasyiah', 'SMP', 'Pembayaran Uang Formulir Pendaftaran Nabila Betania Nasyiah', '2020-06-05', '1050920157', 'Yayasan Islam Al Fidaa', 'BNI Syariah', 'Superadmin', '2020-06-05 22:52:57', '2020-06-05 22:52:57');
/*!40000 ALTER TABLE `payment` ENABLE KEYS */;

-- Dumping data for table alfidaafix.payment_detail: ~0 rows (approximately)
/*!40000 ALTER TABLE `payment_detail` DISABLE KEYS */;
INSERT INTO `payment_detail` (`id_payment_detail`, `id_payment`, `id_item`, `price`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 250000, '2020-06-05 22:06:41', '2020-06-05 22:06:41'),
	(2, 2, 1, 250000, '2020-06-05 22:52:57', '2020-06-05 22:52:57');
/*!40000 ALTER TABLE `payment_detail` ENABLE KEYS */;

-- Dumping data for table alfidaafix.permissions: ~0 rows (approximately)
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;

-- Dumping data for table alfidaafix.roles: ~8 rows (approximately)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'SMP', 'web', '2020-06-05 21:35:45', '2020-06-05 21:35:45'),
	(2, 'SMA', 'web', '2020-06-05 21:35:45', '2020-06-05 21:35:45'),
	(3, 'SMK', 'web', '2020-06-05 21:35:45', '2020-06-05 21:35:45'),
	(4, 'Admin SMP', 'web', '2020-06-05 21:35:45', '2020-06-05 21:35:45'),
	(5, 'Admin SMA', 'web', '2020-06-05 21:35:45', '2020-06-05 21:35:45'),
	(6, 'Admin SMK', 'web', '2020-06-05 21:35:45', '2020-06-05 21:35:45'),
	(7, 'Admin Keuangan', 'web', '2020-06-05 21:35:45', '2020-06-05 21:35:45'),
	(8, 'Super Admin', 'web', '2020-06-05 21:35:45', '2020-06-05 21:35:45');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Dumping data for table alfidaafix.role_has_permissions: ~0 rows (approximately)
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;

-- Dumping data for table alfidaafix.settings: ~1 rows (approximately)
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` (`id_settings`, `nama_bank`, `no_rek`, `pemilik_rek`, `cp_smp`, `cp_sma`, `cp_smk`, `alamat_sekolah`, `telp_sekolah`, `created_at`, `updated_at`) VALUES
	(1, 'BNI Syariah', '1050920157', 'Yayasan Islam Al Fidaa', '81318375066', '81314632201', '81314632201', 'Jl. Damai No. 8, Setiamekar Kec. Tambun Sel, Bekasi', '(021) 88350446', NULL, NULL);
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;

-- Dumping data for table alfidaafix.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id_user`, `nama`, `email`, `no_telp`, `password`, `photo`, `bayar_pendaftaran`, `sudah_cetak`, `is_lulus`, `is_completed`, `role_id`, `dgk`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Superadmin', 'superadmin', '123456', '$2y$10$Y0AGAaB4zZOUFpJkNgb6NORstSMhQqeCkp/MTJG8M.PSigNTJoyLi', 'default.jpg', 1, 1, 0, 0, 8, 0, NULL, '2020-06-05 21:59:01', '2020-06-05 22:08:21'),
	(2, 'Maida Maryati', 'daryani84@natsir.biz.id', '(+62) 855 8514 0629', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(3, 'Ophelia Citra Puspita', 'respati95@gmail.com', '0662 6224 581', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(4, 'Amelia Halima Mardhiyah', 'ibrani.narpati@lailasari.go.id', '(+62) 534 0836 6376', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(5, 'Nabila Betania Nasyiah', 'ganep70@gmail.co.id', '0639 4420 4698', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 1, 1, NULL, NULL, '2020-06-05 22:52:57'),
	(6, 'Salsabila Pertiwi S.H.', 'zalindra95@gmail.co.id', '0204 2343 5618', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(7, 'Capa Tamba', 'xandriani@maryati.my.id', '0666 7763 880', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(8, 'Sabar Samosir', 'puspasari.gabriella@lazuardi.co', '(+62) 415 3055 3310', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(9, 'Ilyas Ardianto', 'okusmawati@gmail.co.id', '(+62) 277 0622 903', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(10, 'Patricia Farida', 'rahmawati.pangeran@yahoo.com', '(+62) 944 3987 369', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(11, 'Ghani Hakim M.Ak', 'enteng50@yahoo.co.id', '0409 8593 905', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(12, 'Jasmani Daliman Napitupulu', 'ina.wastuti@safitri.id', '(+62) 439 2662 701', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(13, 'Vera Safitri', 'zizi88@anggriawan.name', '0811 942 144', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(14, 'Luwar Ardianto', 'kmarpaung@gmail.com', '0603 4449 1119', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(15, 'Gatra Bakijan Prayoga S.E.I', 'yuni96@yahoo.co.id', '0223 8186 1906', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(16, 'Gawati Ana Prastuti', 'kuswoyo.panji@susanti.go.id', '0720 4119 5980', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(17, 'Artanto Anggabaya Nashiruddin M.Pd', 'pmansur@sinaga.mil.id', '0292 2843 137', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(18, 'Natalia Nadia Suryatmi', 'dimas99@wulandari.or.id', '(+62) 384 2080 228', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(19, 'Mila Laksita', 'latupono.marsito@siregar.tv', '0903 2606 513', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(20, 'Hesti Diah Safitri M.Ak', 'zaenab.putra@latupono.or.id', '(+62) 832 0234 2649', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(21, 'Ibrani Hutasoit', 'vmustofa@yuliarti.ac.id', '0689 9524 8675', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(22, 'Rahayu Andriani S.I.Kom', 'prakosa.hastuti@yahoo.co.id', '(+62) 28 6895 509', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(23, 'Kanda Warji Irawan', 'firmansyah.lanjar@gmail.com', '(+62) 530 1104 2404', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(24, 'Zelda Susanti S.Sos', 'saputra.cinta@gmail.com', '029 0724 1728', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(25, 'Najam Setiawan S.I.Kom', 'dongoran.putri@yahoo.com', '(+62) 474 9742 843', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(26, 'Oman Zulkarnain', 'hariyah.jarwi@gmail.co.id', '(+62) 885 3674 316', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(27, 'Lukita Utama Gunarto S.IP', 'wahyudin.daruna@yahoo.com', '0850 8654 352', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(28, 'Ami Winarsih S.E.', 'halim.ikin@yahoo.com', '0862 6778 7933', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(29, 'Jamalia Mardhiyah S.Pd', 'tpratama@siregar.or.id', '0815 4045 393', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(30, 'Heryanto Galak Nainggolan M.Ak', 'putri.puspasari@winarsih.net', '(+62) 738 2240 778', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(31, 'Teguh Kusumo S.T.', 'purwa.safitri@yahoo.com', '0564 7777 7800', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(32, 'Catur Mansur', 'tina.sihombing@hasanah.info', '(+62) 271 1221 020', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(33, 'Gatot Legawa Thamrin', 'titin93@nuraini.co', '(+62) 396 9065 9346', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(34, 'Cahyadi Sitorus S.H.', 'snababan@yahoo.co.id', '0228 4401 4335', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(35, 'Genta Eva Usada S.Gz', 'hwulandari@mardhiyah.go.id', '0217 2891 5326', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(36, 'Lurhur Simbolon', 'endra87@utami.sch.id', '0687 7148 0039', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(37, 'Sari Puspasari M.TI.', 'pratiwi.daruna@mangunsong.info', '(+62) 514 3312 342', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(38, 'Yusuf Hutasoit', 'ztampubolon@yahoo.com', '(+62) 985 1506 579', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(39, 'Dewi Halimah M.TI.', 'latika.anggraini@gmail.co.id', '0747 6656 077', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(40, 'Mahdi Haryanto', 'simbolon.luwar@gmail.co.id', '(+62) 459 4947 728', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(41, 'Ayu Mardhiyah', 'cahyadi16@gmail.co.id', '0539 1140 4489', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(42, 'Dagel Wibisono', 'thakim@oktaviani.or.id', '(+62) 824 4601 884', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(43, 'Opan Maulana', 'tantri.wastuti@hartati.net', '(+62) 313 6463 406', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(44, 'Sarah Namaga', 'fitriani84@usamah.go.id', '(+62) 557 0301 405', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(45, 'Warsita Pratama', 'sirait.mumpuni@gunawan.biz', '0579 1988 813', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(46, 'Vivi Janet Lailasari', 'handayani.samsul@hassanah.co', '(+62) 566 2214 172', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(47, 'Sabrina Riyanti S.E.I', 'devi98@tarihoran.ac.id', '(+62) 255 8965 154', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(48, 'Karimah Ella Aryani M.Pd', 'cmarpaung@yahoo.co.id', '0744 9788 8037', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(49, 'Jaeman Habibi', 'nugroho.adika@gmail.com', '(+62) 24 7660 558', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(50, 'Kala Hutasoit', 'jaswadi69@yahoo.co.id', '0969 0401 8814', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(51, 'Nurul Dewi Pertiwi S.E.I', 'lanjar.latupono@yahoo.co.id', '(+62) 891 7525 244', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(52, 'Balangga Mandala', 'prakasa.mumpuni@gmail.com', '(+62) 300 6722 743', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(53, 'Makara Lega Gunarto', 'bancar.rahmawati@haryanti.mil.id', '(+62) 353 4778 363', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(54, 'Natalia Sudiati', 'nasyidah.dewi@yahoo.com', '0659 3650 469', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(55, 'Eka Paulin Wijayanti', 'cpermadi@yahoo.co.id', '(+62) 528 2053 470', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(56, 'Farhunnisa Maimunah Prastuti M.Kom.', 'vsiregar@setiawan.ac.id', '0686 5594 7715', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(57, 'Salsabila Handayani', 'nriyanti@gmail.co.id', '0503 9344 077', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(58, 'Bakiman Santoso', 'gara71@gmail.co.id', '(+62) 352 9214 5433', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(59, 'Umar Dongoran S.Kom', 'waluyo.anggraini@yahoo.com', '028 3597 459', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(60, 'Bala Kemba Mandala', 'kala.hasanah@megantara.my.id', '0911 5841 808', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(61, 'Hari Prasasta M.M.', 'tdongoran@novitasari.biz', '0399 2047 317', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(62, 'Victoria Rahimah S.Ked', 'farida.saadat@zulkarnain.co', '0494 5838 4280', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(63, 'Iriana Anggraini S.H.', 'wahyu.tamba@yahoo.co.id', '0906 4132 4387', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(64, 'Diana Dian Puspita', 'lantar.purnawati@yahoo.co.id', '(+62) 885 8489 1258', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(65, 'Titin Vanya Riyanti', 'puspita.rina@hardiansyah.org', '(+62) 945 3144 522', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(66, 'Mahfud Mangunsong', 'latika97@yahoo.com', '(+62) 809 8130 841', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(67, 'Silvia Permata S.I.Kom', 'ajailani@yahoo.co.id', '0688 9957 8797', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(68, 'Lanjar Sabri Prasasta', 'xiswahyudi@gmail.co.id', '0298 9156 540', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(69, 'Ulya Nurul Susanti', 'ubudiyanto@yahoo.co.id', '(+62) 383 9666 725', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(70, 'Zaenab Rahmi Kuswandari', 'ewulandari@mulyani.asia', '0807 106 978', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(71, 'Luthfi Nyana Firgantoro S.Pt', 'gangsar68@yahoo.com', '0558 9313 1766', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(72, 'Martaka Wasita', 'endah18@usamah.id', '022 8048 614', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(73, 'Akarsana Prasetya S.Pt', 'ulva.tamba@gmail.com', '0403 3046 635', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(74, 'Gamblang Lulut Sitompul M.Ak', 'wibowo.hasan@yahoo.com', '0735 7303 4617', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(75, 'Karta Anggriawan', 'marpaung.sabri@yahoo.co.id', '(+62) 923 8487 053', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(76, 'Jatmiko Prabowo', 'ausada@padmasari.in', '0724 3722 284', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(77, 'Among Setiawan', 'muhammad44@gmail.co.id', '0518 6660 5328', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(78, 'Gading Narpati', 'omaulana@gmail.com', '0668 9068 5075', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(79, 'Karen Melani', 'siregar.lintang@purwanti.biz.id', '(+62) 218 8348 4204', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(80, 'Atma Saputra M.Ak', 'nasyidah.eka@gmail.co.id', '(+62) 747 7139 034', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(81, 'Patricia Rahayu', 'hbudiman@yahoo.co.id', '(+62) 998 2399 3076', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(82, 'Imam Lamar Situmorang S.Sos', 'febi43@yahoo.com', '(+62) 522 3450 2614', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(83, 'Baktiadi Baktianto Prabowo M.M.', 'haryanto.parman@yahoo.com', '(+62) 297 4203 609', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(84, 'Cakrabuana Mahendra M.M.', 'bancar.mulyani@yahoo.co.id', '(+62) 321 6951 124', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(85, 'Artanto Prakasa M.Ak', 'respati01@gmail.com', '(+62) 500 3802 764', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(86, 'Winda Nurdiyanti', 'yani.budiman@widiastuti.asia', '0617 9940 8940', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(87, 'Aslijan Harjaya Prasasta', 'puput64@kurniawan.biz.id', '(+62) 20 3031 6983', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(88, 'Alika Paramita Handayani', 'eprasetya@suwarno.in', '(+62) 870 8808 7996', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(89, 'Damar Nardi Prakasa', 'pia.anggraini@gmail.com', '(+62) 665 7430 701', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(90, 'Aurora Faizah Laksmiwati', 'ellis29@nasyidah.name', '(+62) 26 3904 660', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(91, 'Jessica Mandasari', 'nwibowo@suwarno.name', '(+62) 888 119 491', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(92, 'Uchita Talia Permata', 'cprastuti@pradipta.id', '0902 7167 550', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(93, 'Raden Hidayat S.H.', 'slamet07@yahoo.co.id', '(+62) 695 8056 4071', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(94, 'Edison Setiawan', 'mwinarsih@yahoo.co.id', '0292 6398 1507', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(95, 'Wirda Purnawati', 'sihotang.bagas@yahoo.com', '020 2885 996', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(96, 'Zaenab Maida Padmasari', 'kamaria58@yahoo.com', '0915 6223 8328', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(97, 'Raihan Ardianto', 'wsitompul@gmail.co.id', '(+62) 597 4717 8281', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(98, 'Icha Aryani M.M.', 'januar.ami@suwarno.name', '0963 9935 9821', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(99, 'Makara Wardaya Hidayat', 'pranata02@yahoo.com', '0364 0198 3722', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(100, 'Gabriella Safina Wahyuni M.Kom.', 'hmaryati@yahoo.co.id', '(+62) 914 3015 674', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(101, 'Darimin Warji Hidayat', 'lega.simanjuntak@gmail.com', '0752 2405 2856', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(102, 'Karsana Adriansyah', 'laksita.kartika@gmail.com', '027 1974 038', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(103, 'Atma Kuswoyo', 'handayani.budi@laksita.sch.id', '(+62) 777 1761 630', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(104, 'Marwata Rajata', 'kanda84@gmail.com', '026 3420 733', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(105, 'Victoria Wahyuni S.IP', 'cengkal.marbun@gmail.com', '(+62) 828 9326 8931', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(106, 'Raina Purwanti', 'xanana.rahmawati@oktaviani.co.id', '0396 9663 264', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(107, 'Malika Usamah', 'rajasa.abyasa@laksita.web.id', '0347 5007 346', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(108, 'Carla Suartini', 'gunawan.lega@pangestu.my.id', '0479 7304 329', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(109, 'Sakti Salahudin', 'earyani@rahmawati.com', '020 2199 8568', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(110, 'Ade Nainggolan S.I.Kom', 'apertiwi@gmail.co.id', '0336 5626 358', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(111, 'Kasim Maryadi', 'warsa35@yahoo.co.id', '0807 826 001', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(112, 'Wira Gunawan', 'halim.padmi@puspita.go.id', '0390 8496 081', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(113, 'Jagaraga Anggriawan', 'wpadmasari@kuswandari.sch.id', '(+62) 654 6837 260', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(114, 'Gatra Mangunsong', 'teddy14@gmail.com', '0221 9663 326', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(115, 'Ikin Situmorang', 'hidayat.zamira@maryadi.go.id', '(+62) 368 1704 1792', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(116, 'Talia Maryati', 'saragih.anita@marpaung.sch.id', '(+62) 568 8363 484', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(117, 'Almira Salimah Fujiati M.Farm', 'permata.darijan@yahoo.co.id', '0314 9932 1279', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(118, 'Umay Tarihoran', 'zulfa.fujiati@yahoo.com', '0579 2028 502', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(119, 'Rika Maria Kusmawati', 'dongoran.opan@gmail.co.id', '(+62) 507 0339 526', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(120, 'Mahmud Setiawan', 'gunawan.ira@yahoo.co.id', '(+62) 372 4580 841', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(121, 'Kayun Siregar S.Ked', 'sirait.salimah@yahoo.co.id', '(+62) 512 7880 703', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(122, 'Amelia Yuniar S.Kom', 'victoria81@irawan.biz', '0802 0253 626', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(123, 'Raina Mulyani S.T.', 'elma.novitasari@yahoo.co.id', '0985 6243 757', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(124, 'Kemba Saragih S.E.I', 'nugraha08@gmail.com', '0549 4286 658', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(125, 'Dodo Situmorang S.Farm', 'anggabaya.sihombing@tarihoran.web.id', '028 3145 031', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(126, 'Argono Mangunsong', 'karman.yuniar@yahoo.co.id', '0824 8847 304', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(127, 'Harjaya Damar Hardiansyah', 'rini64@wulandari.ac.id', '(+62) 618 3957 8715', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(128, 'Dimas Pranowo', 'violet.sitompul@gmail.co.id', '0931 1136 251', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(129, 'Wirda Puspita S.E.', 'ugunawan@kurniawan.go.id', '0241 7666 7289', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(130, 'Kasiran Hardiansyah', 'gina.usamah@yahoo.co.id', '(+62) 548 3525 863', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(131, 'Chelsea Purwanti', 'prastuti.teguh@suartini.desa.id', '(+62) 298 6834 8842', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(132, 'Agnes Titi Purwanti S.Pt', 'ophelia29@yahoo.co.id', '(+62) 341 9339 453', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(133, 'Bahuraksa Saputra', 'salsabila21@yahoo.co.id', '(+62) 883 2884 7174', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(134, 'Jarwa Firgantoro', 'adhiarja57@thamrin.id', '(+62) 26 0571 932', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(135, 'Hartaka Hasan Firmansyah M.Ak', 'irma19@hassanah.tv', '(+62) 361 4086 911', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(136, 'Purwanto Sitorus', 'yulianti.muni@gmail.co.id', '(+62) 398 1900 1351', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(137, 'Artawan Mangunsong', 'haryanto.yessi@hastuti.sch.id', '0347 0823 098', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(138, 'Ana Andriani M.TI.', 'nugroho.latif@yahoo.com', '(+62) 398 5605 6644', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(139, 'Kunthara Budiman S.Pd', 'putri.lazuardi@gmail.co.id', '(+62) 492 3196 444', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(140, 'Bahuraksa Manullang', 'lalita.adriansyah@gmail.co.id', '0889 387 954', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(141, 'Eja Hakim S.Farm', 'prakasa.kala@nasyidah.org', '(+62) 314 5857 228', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(142, 'Rahayu Halimah S.Ked', 'kasiyah.hasanah@yahoo.co.id', '0798 6915 787', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(143, 'Kalim Utama', 'megantara.gambira@gmail.co.id', '(+62) 842 3363 3132', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(144, 'Lamar Sitorus', 'nasim.pudjiastuti@gmail.co.id', '0462 1934 5656', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(145, 'Padma Chelsea Nurdiyanti S.Pd', 'rajata.cengkal@winarsih.my.id', '0458 8055 288', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(146, 'Kemba Nainggolan', 'grahayu@yahoo.co.id', '(+62) 779 7394 5484', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(147, 'Saka Ramadan', 'kbudiyanto@gmail.com', '0965 5357 1676', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(148, 'Oman Siregar', 'vanya.simbolon@yahoo.com', '(+62) 710 3245 723', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(149, 'Nardi Mandala', 'pudjiastuti.galih@palastri.biz', '(+62) 312 8489 7173', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(150, 'Muhammad Sihotang', 'simon.prasasta@yahoo.co.id', '0920 2483 726', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(151, 'Margana Hardiansyah', 'usyi.sinaga@gmail.co.id', '(+62) 533 0145 968', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(152, 'Raisa Nuraini', 'aisyah71@gmail.co.id', '027 4100 0588', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(153, 'Kartika Permata', 'purwadi.puspasari@maryati.com', '(+62) 597 6770 9726', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(154, 'Samiah Ani Nurdiyanti S.Sos', 'najib.prayoga@gmail.com', '0321 1169 907', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(155, 'Parman Damanik S.E.', 'betania11@wijayanti.com', '0210 5194 0871', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(156, 'Sabrina Uyainah', 'nasyidah.sarah@yahoo.com', '(+62) 809 4066 7190', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(157, 'Carla Tantri Yulianti', 'sitorus.kamila@lazuardi.com', '0493 4480 488', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(158, 'Samiah Nurdiyanti', 'vino54@waskita.tv', '020 4948 782', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(159, 'Ghani Gandewa Lazuardi', 'goktaviani@gmail.co.id', '(+62) 417 8937 602', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(160, 'Laila Olivia Uyainah', 'shasanah@gmail.co.id', '(+62) 670 4008 5794', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(161, 'Carla Maryati M.Kom.', 'maria86@yahoo.com', '(+62) 309 3392 8614', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(162, 'Sabrina Kayla Pertiwi', 'lmandala@gmail.com', '027 7515 9471', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(163, 'Hartaka Hutapea', 'fsihotang@yahoo.com', '(+62) 210 0618 8670', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(164, 'Zulfa Yance Puspita S.E.I', 'shakila.suryatmi@gmail.co.id', '0558 7966 2360', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(165, 'Carla Kani Oktaviani', 'xmaryadi@gmail.co.id', '(+62) 868 8304 737', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(166, 'Aisyah Umi Kuswandari S.Farm', 'asmianto.maryati@rahmawati.or.id', '0790 6430 2193', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(167, 'Leo Malik Kusumo', 'januar.janet@gmail.co.id', '(+62) 985 9852 383', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(168, 'Wardi Ian Salahudin', 'ratna.hartati@narpati.in', '(+62) 813 846 943', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(169, 'Fitria Puspita', 'betania.suryono@yahoo.com', '(+62) 414 0461 508', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(170, 'Dadap Megantara', 'paulin.waskita@yahoo.co.id', '(+62) 339 9578 458', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(171, 'Nugraha Ganjaran Prayoga', 'eli08@gmail.co.id', '0800 823 252', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(172, 'Joko Sihotang', 'sihotang.mursinin@yahoo.co.id', '(+62) 877 218 000', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(173, 'Prayitna Nugroho', 'prabowo.bakiadi@purnawati.id', '(+62) 879 1192 1761', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(174, 'Dariati Lazuardi S.E.', 'anggriawan.tania@purnawati.or.id', '(+62) 869 499 275', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(175, 'Michelle Cindy Pratiwi', 'salahudin.salsabila@simbolon.com', '0689 3323 917', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(176, 'Silvia Kuswandari M.M.', 'baktianto76@yahoo.com', '(+62) 873 2725 4681', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(177, 'Sarah Latika Suryatmi', 'tina42@mustofa.tv', '0318 6451 368', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(178, 'Cornelia Hariyah', 'kyolanda@gmail.co.id', '024 1682 5268', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(179, 'Gina Nilam Wulandari S.Pt', 'hardiansyah.raihan@zulaika.sch.id', '(+62) 241 1352 5032', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(180, 'Tira Shakila Wijayanti S.Ked', 'balapati.wacana@prayoga.mil.id', '(+62) 302 7672 9977', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(181, 'Humaira Jelita Susanti S.T.', 'jaya.napitupulu@maheswara.tv', '(+62) 622 1706 3257', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(182, 'Almira Putri Maryati', 'bancar.halimah@siregar.tv', '0774 2892 351', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(183, 'Rahmi Susanti', 'harjo79@damanik.my.id', '(+62) 914 2412 785', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(184, 'Jarwi Saptono', 'indah10@gmail.co.id', '(+62) 413 4611 6992', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(185, 'Kasim Ramadan', 'nputra@gmail.com', '(+62) 28 8993 8311', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(186, 'Agnes Talia Melani', 'raina46@anggriawan.sch.id', '(+62) 567 8647 789', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(187, 'Anastasia Mandasari', 'uhalim@zulkarnain.id', '0796 6369 5582', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(188, 'Cengkir Makuta Santoso', 'natsir.jaka@oktaviani.biz', '0755 9587 811', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(189, 'Daliman Nyana Sitompul M.Ak', 'cemani.prasetyo@yahoo.co.id', '(+62) 321 4171 750', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(190, 'Cahyo Baktianto Kurniawan M.Farm', 'yani.usamah@gmail.co.id', '(+62) 979 9672 1258', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(191, 'Asmuni Prabowo', 'kala.pudjiastuti@suwarno.id', '(+62) 521 8225 8037', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(192, 'Hardi Banawi Hutasoit S.Pd', 'zelaya03@damanik.com', '(+62) 508 6435 9648', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(193, 'Ghani Napitupulu S.E.I', 'namaga.jaswadi@rajasa.biz', '(+62) 654 0537 362', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(194, 'Maryanto Mustofa', 'samsul10@gmail.co.id', '(+62) 347 4294 353', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(195, 'Gandi Gaiman Prasasta M.Kom.', 'rnurdiyanti@gmail.co.id', '(+62) 900 4478 180', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(196, 'Devi Ulva Namaga', 'jailani.danuja@usada.co', '(+62) 757 3352 4026', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(197, 'Galih Simbolon', 'kamila42@yahoo.com', '0679 3388 130', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(198, 'Samiah Mardhiyah', 'cyuliarti@gmail.co.id', '(+62) 728 6740 1223', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(199, 'Bajragin Mansur S.IP', 'eman.astuti@gmail.com', '(+62) 888 5668 1659', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(200, 'Devi Wijayanti', 'pdongoran@winarsih.in', '(+62) 547 5166 0427', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(201, 'Baktiadi Uwais', 'genta21@gmail.com', '0967 5839 678', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(202, 'Eka Chelsea Mayasari', 'awaluyo@yahoo.com', '0863 5612 962', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(203, 'Among Bahuwirya Nainggolan S.H.', 'gina.yulianti@yahoo.com', '0675 0326 272', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(204, 'Edison Damanik', 'tina70@yahoo.com', '0563 5943 9280', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(205, 'Paulin Padmasari', 'syahrini.wahyuni@puspita.web.id', '(+62) 639 3028 082', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(206, 'Paulin Kartika Kuswandari', 'lagustina@gmail.co.id', '(+62) 424 8315 3918', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(207, 'Prima Budiyanto S.Pt', 'jayeng98@maryati.biz', '028 8328 6261', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(208, 'Darsirah Gandi Kurniawan', 'isantoso@palastri.id', '0217 1306 0959', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(209, 'Anita Wulandari', 'ypuspita@gmail.co.id', '(+62) 23 4155 860', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(210, 'Mustofa Suwarno', 'zardianto@yahoo.com', '0552 1367 5683', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(211, 'Anita Nasyidah', 'nugraha92@maulana.go.id', '(+62) 699 8892 6380', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(212, 'Cindy Paris Laksmiwati', 'maman34@yahoo.com', '(+62) 664 7164 3640', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(213, 'Danuja Jagapati Wasita S.E.', 'permata.zahra@hidayat.ac.id', '0866 8880 2429', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(214, 'Kartika Namaga', 'dalima.yolanda@mardhiyah.desa.id', '(+62) 812 0237 5609', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(215, 'Emin Siregar', 'prastuti.zelaya@uyainah.mil.id', '(+62) 589 6176 2687', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(216, 'Qori Vanya Pertiwi', 'salwa09@yahoo.co.id', '0989 8416 368', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(217, 'Mustofa Adhiarja Nugroho', 'fujiati.zulfa@gmail.com', '(+62) 613 8054 697', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(218, 'Dirja Widodo', 'nasyidah.edi@utami.org', '(+62) 788 0020 7776', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(219, 'Danu Jaga Adriansyah S.Pt', 'pwijayanti@yahoo.com', '0212 6066 3542', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(220, 'Budi Jaiman Mandala', 'usyi34@gmail.com', '(+62) 931 8659 562', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(221, 'Dalimin Lukita Iswahyudi', 'kamila.wahyuni@gmail.com', '0845 073 135', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(222, 'Vanya Hastuti S.Sos', 'natalia.yolanda@putra.my.id', '(+62) 707 4952 7562', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(223, 'Ajeng Irma Riyanti', 'daniswara.mayasari@utami.tv', '(+62) 869 3784 0664', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(224, 'Halima Permata S.Sos', 'ikusumo@prasetyo.mil.id', '(+62) 773 3711 7747', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(225, 'Dimas Hutagalung', 'yolanda.rachel@palastri.ac.id', '(+62) 439 7350 4593', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(226, 'Fitria Nasyiah', 'janet.prayoga@pranowo.or.id', '0219 9383 341', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(227, 'Galar Saragih', 'bancar.mangunsong@siregar.com', '(+62) 22 9785 645', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(228, 'Waluyo Sitorus S.Kom', 'gadang24@wacana.net', '(+62) 447 2876 298', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(229, 'Balangga Sirait', 'puspa.wahyudin@santoso.ac.id', '0601 0703 8235', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(230, 'Zulaikha Wastuti S.Ked', 'ipermadi@putra.biz.id', '0716 3819 221', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(231, 'Puti Suryatmi', 'widya.mayasari@yahoo.com', '(+62) 936 6631 2979', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(232, 'Cakrabirawa Sitorus', 'setiawan.gangsa@saptono.info', '0967 7084 193', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(233, 'Banawa Pratama S.IP', 'latika.putra@permadi.my.id', '0782 9841 421', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(234, 'Galar Najmudin S.Ked', 'prasasta.ratna@andriani.info', '029 7868 9895', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(235, 'Adhiarja Najmudin M.Farm', 'maheswara.halim@yahoo.com', '(+62) 294 7347 604', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(236, 'Anita Wijayanti', 'nurul.nasyiah@yahoo.com', '0910 6553 702', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(237, 'Yuliana Karimah Anggraini S.H.', 'ira59@gmail.co.id', '(+62) 742 0656 4002', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(238, 'Cahyo Halim', 'jprasetya@kuswoyo.co', '0726 6450 391', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(239, 'Asirwanda Wacana S.Farm', 'ganep.hidayat@halimah.desa.id', '0930 6477 590', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(240, 'Karman Cengkir Kuswoyo S.T.', 'wprasetyo@iswahyudi.biz', '(+62) 701 1743 282', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(241, 'Ajimat Uwais S.Pt', 'candrakanta08@yahoo.com', '023 4041 1515', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(242, 'Talia Rahmi Puspita M.Kom.', 'hakim.adikara@rajasa.co', '(+62) 970 6037 440', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(243, 'Balidin Mandala', 'manullang.pangestu@farida.org', '(+62) 850 038 701', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(244, 'Nardi Siregar', 'yuniar.kurnia@gmail.co.id', '0721 1860 7402', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(245, 'Kala Situmorang M.Pd', 'fujiati.uli@gmail.com', '0777 2500 381', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(246, 'Najwa Zulaika', 'gaduh65@yahoo.co.id', '0449 8038 158', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(247, 'Victoria Anita Yulianti S.Sos', 'rwaluyo@yahoo.co.id', '0414 9456 034', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(248, 'Estiono Hardiansyah', 'nfirgantoro@marbun.name', '(+62) 546 5313 4017', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(249, 'Zizi Zizi Kusmawati', 'ymandala@usamah.mil.id', '0259 0134 970', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(250, 'Vivi Siti Pratiwi S.E.I', 'galuh.purwanti@yahoo.com', '0736 3353 813', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(251, 'Eka Raden Maheswara', 'kiandra88@situmorang.info', '(+62) 301 1737 946', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(252, 'Erik Sakti Latupono', 'tpadmasari@gmail.co.id', '(+62) 363 5362 3430', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(253, 'Aurora Malika Maryati S.Pt', 'nadia.prabowo@yahoo.co.id', '(+62) 22 1049 546', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(254, 'Vera Wijayanti', 'kalim40@yahoo.com', '0989 0522 4205', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(255, 'Vero Habibi', 'asaputra@yahoo.co.id', '(+62) 579 7937 767', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(256, 'Jaiman Labuh Maulana', 'saptono.puji@puspasari.desa.id', '(+62) 659 8746 8424', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(257, 'Rina Zamira Agustina M.TI.', 'vmaheswara@gmail.co.id', '(+62) 24 2153 2943', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(258, 'Darmaji Bakda Iswahyudi', 'nugroho.dwi@pradipta.info', '0463 2648 5392', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(259, 'Jaeman Indra Marbun', 'yunita.saragih@prakasa.my.id', '0377 1585 180', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(260, 'Titi Wani Oktaviani', 'fsimanjuntak@yahoo.com', '(+62) 29 8785 569', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(261, 'Zulfa Anggraini', 'pudjiastuti.zulaikha@gmail.com', '0563 8891 681', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(262, 'Padmi Ayu Padmasari S.H.', 'gilda.hutapea@yahoo.com', '0581 6854 9439', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(263, 'Satya Maman Nainggolan', 'rahmi.pudjiastuti@yahoo.com', '(+62) 749 3816 206', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(264, 'Johan Sitompul', 'winarno.lintang@gmail.com', '0540 0110 5523', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(265, 'Reksa Utama S.Kom', 'xadriansyah@gmail.com', '(+62) 455 3795 7400', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(266, 'Baktianto Iswahyudi', 'nasyidah.dimaz@nashiruddin.co.id', '0620 9174 7058', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(267, 'Balidin Marpaung', 'uchita.salahudin@gmail.co.id', '(+62) 402 1792 536', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(268, 'Puti Laksita', 'megantara.umi@laksita.id', '(+62) 933 0318 0466', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(269, 'Nugraha Galak Hutagalung S.Pt', 'hamima57@yulianti.co', '0988 7090 750', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(270, 'Rangga Jaeman Nugroho', 'maryati.kamila@yahoo.co.id', '(+62) 819 4256 030', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(271, 'Ridwan Hutagalung', 'whidayat@yahoo.co.id', '(+62) 747 1637 7517', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(272, 'Zulaikha Wani Purnawati', 'dsudiati@gmail.com', '0625 5700 698', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(273, 'Siska Puspasari', 'ani.usamah@yahoo.com', '(+62) 500 2417 7299', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(274, 'Yuni Astuti', 'belinda76@yahoo.co.id', '(+62) 22 2608 0152', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(275, 'Karya Manullang', 'usyi84@maryati.co.id', '(+62) 834 9038 5258', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(276, 'Balijan Siregar', 'prabu30@yahoo.co.id', '028 6359 3241', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(277, 'Aris Rahmat Hidayanto M.Pd', 'rendy.nasyidah@marbun.net', '0894 156 728', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(278, 'Kairav Dartono Kusumo S.E.', 'zelda.lailasari@haryanti.org', '(+62) 20 7380 5031', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(279, 'Ratih Usada', 'najam.zulaika@suryono.ac.id', '0747 5884 175', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(280, 'Okta Warta Saptono', 'jfarida@gmail.co.id', '0201 4081 509', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(281, 'Michelle Handayani', 'dpertiwi@suryatmi.net', '0953 4058 4702', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(282, 'Saadat Pratama', 'bella.maulana@gmail.co.id', '(+62) 958 8730 1008', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(283, 'Lala Hariyah', 'xhutagalung@gmail.co.id', '020 0045 995', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(284, 'Darijan Kuswoyo', 'danu21@yahoo.com', '0990 8308 489', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(285, 'Uda Mandala', 'prakosa.anggriawan@palastri.co.id', '0845 142 040', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(286, 'Ayu Zulaika', 'nadia87@yahoo.co.id', '0323 1197 9229', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(287, 'Yulia Hartati', 'lhidayanto@wahyudin.sch.id', '(+62) 992 2379 201', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(288, 'Damar Simbolon', 'harja.handayani@yahoo.com', '0827 881 675', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(289, 'Galih Ardianto M.Ak', 'kusmawati.ana@yahoo.co.id', '0283 4100 9517', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(290, 'Lasmanto Utama', 'purwanti.vinsen@hidayanto.co', '0900 2501 2391', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(291, 'Zelda Septi Haryanti', 'gatot48@gmail.com', '(+62) 365 0167 7987', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(292, 'Mutia Puspita M.Farm', 'adinata83@jailani.in', '0694 0079 3881', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(293, 'Ellis Laras Kusmawati M.TI.', 'kamaria.widodo@laksita.desa.id', '0395 4506 9369', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(294, 'Gawati Farida', 'nashiruddin.ganda@gmail.co.id', '(+62) 334 3227 982', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(295, 'Upik Setiawan M.Ak', 'rahayu.jailani@yahoo.co.id', '0225 4535 9385', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(296, 'Eka Nainggolan', 'zpratama@yahoo.com', '(+62) 916 1704 830', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(297, 'Kasusra Winarno M.Kom.', 'cici18@sirait.tv', '021 7202 4712', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(298, 'Umi Nurdiyanti M.Ak', 'damanik.cawisadi@gmail.com', '(+62) 821 1113 1108', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(299, 'Ika Pia Usada S.Ked', 'palastri.rama@anggraini.id', '(+62) 741 5928 302', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(300, 'Talia Yuliarti S.Pt', 'ppangestu@yahoo.co.id', '(+62) 21 3001 9019', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(301, 'Balamantri Damu Januar', 'dpranowo@budiman.org', '0885 9845 084', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(302, 'Syahrini Padmasari', 'maheswara.titin@gmail.co.id', '(+62) 606 9711 8640', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(303, 'Raharja Daruna Santoso', 'betania14@halimah.co', '(+62) 514 4087 7406', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(304, 'Jaswadi Sitorus S.IP', 'eko.megantara@manullang.or.id', '0436 9128 276', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(305, 'Yunita Nilam Sudiati', 'wahyudin.caturangga@gmail.com', '024 5885 271', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(306, 'Jelita Laksmiwati S.IP', 'rahimah.prayogo@novitasari.desa.id', '(+62) 583 8169 133', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(307, 'Fathonah Palastri', 'pudjiastuti.koko@pratiwi.net', '0572 2806 4959', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(308, 'Nadia Aisyah Hassanah S.H.', 'rfarida@yahoo.com', '(+62) 417 2501 912', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(309, 'Endah Usamah', 'qmaryati@maulana.biz.id', '(+62) 645 6799 868', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(310, 'Gilang Prayoga', 'safitri.ellis@safitri.go.id', '0350 0373 7037', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(311, 'Salsabila Padmasari', 'saptono.jagapati@gmail.com', '(+62) 23 6299 729', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(312, 'Tina Rahayu S.H.', 'laksita.aditya@gmail.com', '(+62) 21 1609 818', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(313, 'Raina Riyanti S.IP', 'khutagalung@astuti.or.id', '0323 2717 7101', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(314, 'Harsaya Heru Zulkarnain S.Kom', 'fyulianti@yahoo.com', '(+62) 815 4567 545', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(315, 'Garda Uwais S.Pt', 'vhutasoit@gmail.com', '(+62) 983 3724 681', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(316, 'Sakura Usada S.IP', 'kawaya.puspita@hidayanto.asia', '0333 4184 5550', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(317, 'Prabowo Saiful Mahendra S.Psi', 'purwadi.nasyidah@usada.com', '(+62) 618 7012 486', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(318, 'Ira Rahmi Usada M.TI.', 'mwibowo@yahoo.co.id', '(+62) 513 7145 217', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(319, 'Rini Oktaviani S.Pd', 'estiawan.winarsih@yahoo.com', '0536 6751 598', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(320, 'Intan Wastuti', 'pudjiastuti.hasna@gmail.com', '0815 0976 639', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(321, 'Humaira Azalea Wijayanti', 'rjanuar@prabowo.co.id', '(+62) 207 7248 076', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(322, 'Ika Maria Rahimah', 'bakti51@gmail.com', '0662 9036 0117', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(323, 'Anggabaya Manullang', 'mulya68@yahoo.com', '(+62) 712 8056 1698', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(324, 'Warsita Marbun S.Gz', 'cwibowo@yahoo.co.id', '0479 7989 100', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(325, 'Betania Rahimah', 'mustofa.novi@simbolon.desa.id', '(+62) 349 7360 347', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(326, 'Kamidin Ganep Setiawan', 'bakidin.hassanah@yahoo.com', '(+62) 427 6355 9036', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(327, 'Jefri Najam Situmorang', 'nanggraini@gmail.co.id', '0366 4257 074', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(328, 'Viman Megantara', 'faizah30@waskita.com', '(+62) 238 6171 0981', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(329, 'Cawuk Hutapea S.Pt', 'wijaya.zahra@halimah.my.id', '0664 7505 9773', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(330, 'Tina Nasyidah', 'citra81@wulandari.co.id', '0399 2810 799', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(331, 'Yahya Simbolon', 'suryatmi.kunthara@yahoo.com', '0275 5334 4896', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(332, 'Edison Rajasa', 'zlaksmiwati@firmansyah.info', '0382 4795 3429', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(333, 'Tania Susanti S.H.', 'radika.hakim@gmail.com', '0826 1386 492', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(334, 'Eluh Saputra M.TI.', 'firgantoro.dariati@usamah.info', '(+62) 839 6417 9971', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(335, 'Lukman Jaga Gunarto M.Pd', 'eka.pratama@puspasari.go.id', '0917 5651 4300', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(336, 'Hasan Ivan Gunawan S.H.', 'alika52@yahoo.co.id', '(+62) 634 4703 5220', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(337, 'Ajiman Hadi Mangunsong', 'rahmawati.banawa@gmail.co.id', '0905 3902 310', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(338, 'Elisa Uyainah S.Ked', 'sarah.wijayanti@yahoo.com', '0497 2221 140', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(339, 'Raisa Usada M.TI.', 'aditya.mustofa@yolanda.asia', '0326 5367 1757', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(340, 'Mursinin Baktianto Dongoran', 'padma28@palastri.net', '022 1815 983', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(341, 'Almira Wulan Oktaviani M.Kom.', 'tasnim.rahmawati@hutapea.sch.id', '0506 4018 817', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(342, 'Mutia Zizi Kusmawati S.Gz', 'prayoga.gunawan@gmail.com', '(+62) 596 3907 9724', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(343, 'Aslijan Waskita', 'sari.andriani@gmail.com', '0405 9017 947', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(344, 'Gaman Anggriawan', 'nadriansyah@gmail.com', '0841 3700 8480', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(345, 'Dartono Kambali Mandala', 'dian96@wijaya.desa.id', '0276 4846 927', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(346, 'Jati Wasita', 'nadine.anggraini@gmail.co.id', '0714 5560 306', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(347, 'Jelita Putri Nuraini S.Kom', 'sirait.rosman@waskita.in', '0377 2816 5212', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(348, 'Upik Kanda Siregar S.IP', 'alambana36@marbun.web.id', '(+62) 654 3737 382', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(349, 'Cengkir Mustofa', 'winarsih.natalia@yahoo.com', '0254 4497 541', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(350, 'Malika Rahimah', 'cawuk24@nainggolan.name', '0955 4057 4639', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(351, 'Caturangga Utama', 'utami.ani@hutapea.my.id', '022 5430 0142', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(352, 'Bella Uyainah', 'ratna.sudiati@rajata.biz.id', '0717 8244 792', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(353, 'Karimah Fitria Puspita M.Kom.', 'najmudin.luwes@gmail.com', '(+62) 554 5545 341', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(354, 'Ira Suartini', 'dinda.anggraini@yahoo.co.id', '(+62) 895 0069 6409', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(355, 'Yani Uyainah', 'salsabila.anggriawan@sirait.in', '(+62) 909 6830 312', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(356, 'Slamet Cahyadi Jailani S.E.I', 'nurul29@sinaga.co.id', '0390 4221 487', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(357, 'Kayla Nova Laksmiwati S.Pd', 'cornelia62@yahoo.co.id', '0260 0713 292', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(358, 'Gawati Pertiwi', 'victoria61@hartati.or.id', '0478 4927 877', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(359, 'Ira Zulaikha Purwanti', 'sudiati.nugraha@gmail.co.id', '(+62) 421 9539 9613', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(360, 'Vanya Haryanti', 'nyoman63@aryani.net', '(+62) 642 3333 943', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(361, 'Maman Among Salahudin', 'irma12@wijayanti.mil.id', '0255 3951 115', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(362, 'Jarwadi Dongoran', 'winarno.pia@yahoo.com', '0843 2565 172', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(363, 'Mahdi Marpaung', 'silvia.pradana@yahoo.co.id', '(+62) 635 6564 8338', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(364, 'Radika Mulyono Budiyanto', 'uwastuti@manullang.co.id', '(+62) 26 0937 312', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(365, 'Daru Waskita S.Farm', 'imandasari@sitompul.biz.id', '(+62) 28 8619 604', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(366, 'Cager Damu Utama M.Ak', 'zulaika.hari@pratiwi.co.id', '(+62) 276 1658 093', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(367, 'Elvina Laksita', 'asmuni.safitri@suryono.mil.id', '(+62) 253 8926 128', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(368, 'Queen Susanti', 'paramita.hutagalung@gmail.co.id', '(+62) 862 6857 8742', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(369, 'Hasna Suryatmi', 'umi.saputra@pertiwi.mil.id', '(+62) 699 1945 2487', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(370, 'Jayeng Vega Napitupulu', 'prabowo.langgeng@tarihoran.desa.id', '0852 4306 649', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(371, 'Atma Permadi S.Psi', 'kusuma.padmasari@yahoo.com', '(+62) 820 9099 322', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(372, 'Luthfi Uda Kusumo M.M.', 'kadir.pudjiastuti@pudjiastuti.co', '0699 0390 520', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(373, 'Siti Sudiati', 'kuncara.latupono@yahoo.co.id', '(+62) 357 2594 459', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(374, 'Karsa Dongoran S.Pd', 'latif76@mahendra.co.id', '(+62) 708 3347 984', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(375, 'Belinda Vanesa Zulaika M.Kom.', 'tugiman56@gmail.co.id', '0850 1483 692', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 3, 1, NULL, NULL, NULL),
	(376, 'Intan Puji Susanti', 'ahardiansyah@yahoo.com', '0294 6108 3498', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(377, 'Mila Laksita', 'emong.prastuti@prasasta.org', '(+62) 971 6135 392', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(378, 'Aris Nugroho', 'wijayanti.embuh@sitorus.tv', '(+62) 389 0515 7023', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 3, 1, NULL, NULL, NULL),
	(379, 'Nabila Purnawati', 'astuti.yono@yahoo.com', '0600 8025 9995', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 2, 1, NULL, NULL, NULL),
	(380, 'Yosef Hartaka Latupono S.T.', 'ade63@gmail.com', '0917 1964 9186', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 1, 0, 0, 2, 1, NULL, NULL, NULL),
	(381, 'Luluh Kenzie Napitupulu S.IP', 'samosir.gaduh@marbun.biz.id', '0444 1411 3307', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(382, 'Juli Riyanti', 'asirwanda13@lazuardi.ac.id', '(+62) 759 2696 849', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 1, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(383, 'Aditya Prasetya', 'gabriella.andriani@yahoo.co.id', '(+62) 293 5434 972', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(384, 'Pandu Thamrin S.T.', 'waskita.laila@yahoo.co.id', '(+62) 270 2580 006', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 0, 0, 0, 1, 1, NULL, NULL, NULL),
	(385, 'Luwar Gaman Saefullah', 'wusada@yahoo.co.id', '0605 7051 322', '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq', 'default.jpg', 0, 1, 0, 0, 1, 1, NULL, NULL, NULL),
	(386, 'Ahmad Ziyech', 'ziyech@gmail.com', '123456', '$2y$10$ydrte2Hjpvu4iGa4I6hNsus3BoXBWPPSDKfrWqlMA8vDqExG4yZUC', 'default.jpg', 1, 1, 0, 0, 1, 1, NULL, '2020-06-05 22:01:56', '2020-06-05 22:08:21'),
	(387, 'SMK', 'smk@gmail.com', '123456', '$2y$10$l3Gal/oZCtALpUfiZczC..P3je5.v0i4PwF63MZ8Y4FD6delR9DXu', 'default.jpg', 0, 0, 0, 0, 3, 1, NULL, '2020-06-05 22:05:53', '2020-06-05 22:05:53');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

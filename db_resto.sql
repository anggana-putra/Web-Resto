-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Apr 2022 pada 15.20
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_resto`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ketersediaan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id`, `nama_menu`, `harga`, `deskripsi`, `ketersediaan`, `created_at`, `updated_at`) VALUES
(3, 'Ayam Goreng', 20000, 'Ayam yang digoreng dengan perfect', 1, '2022-02-22 08:10:30', '2022-04-18 06:09:16'),
(4, 'Black Coffe', 10000, 'kopi hitam', 3, '2022-04-17 07:37:17', '2022-04-18 06:10:24'),
(5, 'Matcha Tea', 5000, 'teh hijau dari jepang', 3, '2022-04-17 07:38:30', '2022-04-18 05:37:11'),
(6, 'Thai Tea', 5000, 'teh dari thailand', 5, '2022-04-17 07:39:00', '2022-04-17 07:39:00'),
(7, 'Ayam Sambal Matah', 15000, 'Ayam dengan campuran sambal matah di dalam nya', 5, '2022-04-18 04:40:36', '2022-04-18 04:40:36'),
(8, 'Coffe Late', 10000, 'Coffe dengan late', 4, '2022-04-18 04:44:24', '2022-04-18 04:44:24'),
(9, 'Arabican coffe', 15000, 'kopi dari arab', 3, '2022-04-18 04:45:44', '2022-04-18 06:15:36'),
(10, 'Choco Late', 8000, 'Coklat dengan late didalam nya', 0, '2022-04-18 05:35:56', '2022-04-18 06:09:31'),
(11, 'Choco Drinks', 5000, 'Minuman Coklat', 5, '2022-04-18 05:36:25', '2022-04-18 05:36:25'),
(12, 'Jasmin Tea', 5000, 'Es teh jasmin', 1, '2022-04-18 05:36:59', '2022-04-18 05:40:02');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_02_12_030047_create_transaksi_table', 1),
(6, '2022_02_12_030711_create_menu_table', 1);

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
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pelanggan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `nama_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `nama_pelanggan`, `nama_menu`, `jumlah`, `total_harga`, `nama_pegawai`, `created_at`, `updated_at`) VALUES
(1, 'Ahmad Sundawi', 'Ayam Bakar Goreng', 5, 75000, 'Udin', '2022-02-22 08:11:34', '2022-02-22 08:11:34'),
(2, 'Rahmad', 'Ayam Bakar Goreng', 2, 30000, 'Udin', '2022-02-22 19:08:14', '2022-02-22 19:08:14'),
(3, 'nani', 'Ayam Bakar Goreng', 2, 30000, 'lela', '2022-04-16 01:05:02', '2022-04-16 01:05:02'),
(5, 'budi', 'black coffe', 2, 20000, 'nuryati', '2022-04-17 07:40:28', '2022-04-17 07:40:28'),
(6, 'budi', 'Matcha', 2, 10000, 'nuryati', '2022-04-17 07:41:58', '2022-04-17 07:41:58'),
(7, 'Imam', 'Jasmin Tea', 3, 15000, 'Asep Saepulloh', '2022-04-18 05:40:02', '2022-04-18 05:40:02'),
(8, 'budi', 'Ayam Goreng', 3, 60000, 'nuryati khodijah', '2022-04-18 06:09:16', '2022-04-18 06:09:16'),
(9, 'bangbang', 'Choco Late', 3, 24000, 'nuryati khodijah', '2022-04-18 06:09:31', '2022-04-18 06:09:31'),
(10, 'Anggana Putra', 'Black Coffe', 2, 20000, 'nuryati khodijah', '2022-04-18 06:10:24', '2022-04-18 06:10:24'),
(11, 'banbang santoso', 'Arabican coffe', 2, 30000, 'Asep Saepulloh', '2022-04-18 06:15:36', '2022-04-18 06:15:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('Admin','Manager','Kasir') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', '$2y$10$QjGNCb1nfPiBFZmX82bRN.I7ZtSkAcbwtzK30ZAd0SYEKtPYljpJ2', 'Admin', NULL, NULL, NULL),
(2, 'Anggana Putra', 'angga', '$2y$10$bKLTKUGLkYbUubs5I7aNteYeS2JXz7XBm2kNskbAcD19Xl.DlygVO', 'Manager', NULL, NULL, '2022-04-16 01:01:07'),
(3, 'kasir', 'kasir', '$2y$10$5blcq66hFNsr8pWJwrql0uXC9hxkHzhPbRx8lPAVdim.0HmwifNoS', 'Kasir', NULL, NULL, '2022-04-17 07:03:21'),
(15, 'nuryati khodijah', 'nur', '$2y$10$0F1FPqncXNPqdRN5INe.3et2QP/MLF.t0s0XPpWq1OS8LifAHFKjK', 'Kasir', NULL, '2022-04-17 07:16:29', '2022-04-18 06:08:33'),
(16, 'Asep Saepulloh', 'asep', '$2y$10$jQQarQSnZD3EX5RBw3z1zOAOeuCcrYEjp17wJ/uvKdYKXJ0MQYyPW', 'Kasir', NULL, '2022-04-18 05:38:15', '2022-04-18 06:12:37');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

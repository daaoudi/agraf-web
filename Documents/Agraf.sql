-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 23, 2023 at 01:29 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agraf`
--

-- --------------------------------------------------------

--
-- Table structure for table `charges`
--

CREATE TABLE `charges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mod` double NOT NULL,
  `mp` double NOT NULL,
  `montant_charges_matier` double NOT NULL,
  `montant_credit` double NOT NULL DEFAULT 0,
  `mode_paiement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_charge` date NOT NULL,
  `devi_id` bigint(20) UNSIGNED NOT NULL,
  `matier_id` bigint(20) UNSIGNED NOT NULL,
  `fournisseur_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `charges`
--

INSERT INTO `charges` (`id`, `mod`, `mp`, `montant_charges_matier`, `montant_credit`, `mode_paiement`, `date_charge`, `devi_id`, `matier_id`, `fournisseur_id`, `created_at`, `updated_at`) VALUES
(1, 16466, 1212, 1212, 0, 'crédit', '2023-05-20', 1, 1, 1, '2023-05-19 15:39:02', '2023-05-19 23:55:39'),
(2, 14000, 1400, 150000, 150000, 'crédit', '2023-05-20', 2, 1, 1, NULL, '2023-05-19 23:59:42'),
(3, 10000, 1000, 2500, 2500, 'crédit', '2023-05-12', 2, 1, 1, '2023-05-19 16:42:41', '2023-05-20 00:01:27');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `prenom`, `email`, `telephone`, `created_at`, `updated_at`) VALUES
(1, 'Houston', 'Langosh', 'your.email+fakedata50051@gmail.com', '229-818-7867', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `devis`
--

CREATE TABLE `devis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom_devi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_devi` date NOT NULL,
  `numero_devi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totale` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `devis`
--

INSERT INTO `devis` (`id`, `nom_devi`, `date_devi`, `numero_devi`, `document`, `totale`, `created_at`, `updated_at`) VALUES
(1, 'xxxxxx', '2023-05-20', 'xxxxx', '', 150000, NULL, NULL),
(2, 'COMPAGNIE DES BOISSON GAZEUSES DU NORD -FES (CBGN -2)', '2023-05-21', '36/2023', '1684548368.docx', 80000, '2023-05-19 16:09:29', '2023-05-20 00:06:08');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `fournisseurs`
--

CREATE TABLE `fournisseurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fournisseurs`
--

INSERT INTO `fournisseurs` (`id`, `nom`, `prenom`, `telephone`, `created_at`, `updated_at`) VALUES
(1, 'Belhadi', 'Oussama', '0682914128', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `matiers`
--

CREATE TABLE `matiers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matiere_unite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qte` double NOT NULL,
  `prix` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `matiers`
--

INSERT INTO `matiers` (`id`, `type`, `designation`, `matiere_unite`, `qte`, `prix`, `created_at`, `updated_at`) VALUES
(1, 'Molestiae minima rem eos est fugit eius esse est.', 'Ipsum saepe voluptatem sint consequatur exercitationem.', '2023-05-20 04:07:24', 14, 150000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_03_14_100910_create_clients_table', 1),
(7, '2023_03_14_102010_create_services_table', 1),
(8, '2023_03_14_104421_create_sessions_table', 1),
(9, '2023_03_14_150854_create_fournisseurs_table', 1),
(10, '2023_03_14_150855_create_ouvriers_table', 1),
(11, '2023_04_24_212205_create_devis_table', 1),
(12, '2023_04_24_212206_create_ouvrages_table', 1),
(13, '2023_04_24_221008_create_matiers_table', 1),
(14, '2023_04_24_221009_create_charges_table', 1),
(15, '2023_04_24_221011_create_poste_ouvriers_table', 1),
(16, '2023_05_13_234714_create_reglements_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ouvrages`
--

CREATE TABLE `ouvrages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation_ouvrage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pas encore',
  `prix` double NOT NULL,
  `qte` double NOT NULL,
  `devi_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ouvrages`
--

INSERT INTO `ouvrages` (`id`, `designation_ouvrage`, `unite`, `etat`, `prix`, `qte`, `devi_id`, `created_at`, `updated_at`) VALUES
(1, 'AAAA', 'KG', 'pas encore', 1000, 10, 2, NULL, NULL),
(2, 'ABC', 'KG', 'pas encore', 25000, 21, 2, NULL, NULL),
(3, 'DDD', 'M2', 'pas encore', 150, 75.6, 2, '2023-05-19 18:27:29', '2023-05-19 18:27:29');

-- --------------------------------------------------------

--
-- Table structure for table `ouvriers`
--

CREATE TABLE `ouvriers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ouvriers`
--

INSERT INTO `ouvriers` (`id`, `nom`, `prenom`, `telephone`, `cin`, `created_at`, `updated_at`) VALUES
(1, 'Razzi', 'Ahmed', '0765454433', 'Z2428627', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `poste_ouvriers`
--

CREATE TABLE `poste_ouvriers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `salaire` double NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `poste_ouvrier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ouvrier_id` bigint(20) UNSIGNED NOT NULL,
  `devi_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `ouvrage_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `poste_ouvriers`
--

INSERT INTO `poste_ouvriers` (`id`, `salaire`, `date_debut`, `date_fin`, `poste_ouvrier`, `type`, `ouvrier_id`, `devi_id`, `service_id`, `ouvrage_id`, `created_at`, `updated_at`) VALUES
(1, 21212, '2023-05-26', '2023-05-11', 'Guardian', 'Plambierrr', 1, 2, 1, 1, '2023-05-19 23:02:21', '2023-05-19 23:11:46');

-- --------------------------------------------------------

--
-- Table structure for table `reglements`
--

CREATE TABLE `reglements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `numero_cheque` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mode_paiement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `montant` double NOT NULL,
  `banque` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `date_reglement` date NOT NULL,
  `devi_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reglements`
--

INSERT INTO `reglements` (`id`, `numero_cheque`, `mode_paiement`, `montant`, `banque`, `client_id`, `date_reglement`, `devi_id`, `created_at`, `updated_at`) VALUES
(1, '', 'espece', 1500, 'cih', 1, '2023-05-20', 1, NULL, NULL),
(2, '328444', 'cheque', 139999, 'Voluptate sit nobis enim maxime.', 1, '2023-05-20', 2, '2023-05-19 15:27:59', '2023-05-19 19:51:18'),
(3, '650', 'espece', 12222, 'cih', 1, '2023-10-17', 2, '2023-05-19 16:29:27', '2023-05-19 16:29:27'),
(4, '3255', 'cheque', 139999, 'Voluptate sit nobis enim maxime.', 1, '2023-05-20', 2, '2023-05-19 19:46:49', '2023-05-19 19:46:49');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom_service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `nom_service`, `description`, `image`, `type_service`, `created_at`, `updated_at`) VALUES
(1, 'Térassement', 'XXXXX', '1684544498_tricky.png', 'Mur De Cloture et Cage d\'escalier et Picsine', '2023-05-19 23:01:38', '2023-05-19 23:01:38');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('82Vvklca78bLzJsfxoVn2Rpm7NpBOXzRTcQo8ADD', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiQXgyYThjYk1TQlA5RlRxbGs0OFV4aDdiZnJuRkk1TGhMZ1BadlJGaCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI5OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvY2hhcmdlcyI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1684549525),
('jRc0jtokzvuUamYnamTzVm0Aq12FHuj0YaBV7X10', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTVozSjR0bDd3S2c0dEhWd21kTnpYQmdROVJwcmRqVjdBVVZpNHQ0SiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kZXZpcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1684601585),
('tpThi83O4yad84UJXWXzQCtWwK5P09MPXsp7zWSU', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTWZLaHlGNFlYN2RobE43WHdyTG16MVI1YzFpVWZNTkp2YVVpakpOaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1684600226),
('xPaA9SSHgPcMOQjIlJ9ZOFDe31Ovm2rdsTZbBgsy', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicmpyMGVmdDAzYmVvSHFRMnFVa3RNUHh1em1rajUxRFJaclRqS1N5aSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1684600235);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `telephone`, `is_admin`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '0661577372', 1, '2023-05-19 15:19:55', '$2y$10$69Stz2IGaPuRFM7HvZrQ/O8kv4eW13XPO7WcsCkhQ5V88iJTgxl8u', NULL, NULL, NULL, 'Z9SDlCODRm', NULL, NULL, '2023-05-19 15:19:55', '2023-05-19 15:19:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `charges`
--
ALTER TABLE `charges`
  ADD PRIMARY KEY (`id`),
  ADD KEY `charges_devi_id_foreign` (`devi_id`),
  ADD KEY `charges_matier_id_foreign` (`matier_id`),
  ADD KEY `charges_fournisseur_id_foreign` (`fournisseur_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `devis`
--
ALTER TABLE `devis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fournisseurs`
--
ALTER TABLE `fournisseurs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matiers`
--
ALTER TABLE `matiers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ouvrages`
--
ALTER TABLE `ouvrages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ouvrages_devi_id_foreign` (`devi_id`);

--
-- Indexes for table `ouvriers`
--
ALTER TABLE `ouvriers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `poste_ouvriers`
--
ALTER TABLE `poste_ouvriers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `poste_ouvriers_ouvrier_id_foreign` (`ouvrier_id`),
  ADD KEY `poste_ouvriers_devi_id_foreign` (`devi_id`),
  ADD KEY `poste_ouvriers_service_id_foreign` (`service_id`),
  ADD KEY `poste_ouvriers_ouvrage_id_foreign` (`ouvrage_id`);

--
-- Indexes for table `reglements`
--
ALTER TABLE `reglements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reglements_client_id_foreign` (`client_id`),
  ADD KEY `reglements_devi_id_foreign` (`devi_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `charges`
--
ALTER TABLE `charges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `devis`
--
ALTER TABLE `devis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fournisseurs`
--
ALTER TABLE `fournisseurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `matiers`
--
ALTER TABLE `matiers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ouvrages`
--
ALTER TABLE `ouvrages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ouvriers`
--
ALTER TABLE `ouvriers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `poste_ouvriers`
--
ALTER TABLE `poste_ouvriers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reglements`
--
ALTER TABLE `reglements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `charges`
--
ALTER TABLE `charges`
  ADD CONSTRAINT `charges_devi_id_foreign` FOREIGN KEY (`devi_id`) REFERENCES `devis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `charges_fournisseur_id_foreign` FOREIGN KEY (`fournisseur_id`) REFERENCES `fournisseurs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `charges_matier_id_foreign` FOREIGN KEY (`matier_id`) REFERENCES `matiers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ouvrages`
--
ALTER TABLE `ouvrages`
  ADD CONSTRAINT `ouvrages_devi_id_foreign` FOREIGN KEY (`devi_id`) REFERENCES `devis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `poste_ouvriers`
--
ALTER TABLE `poste_ouvriers`
  ADD CONSTRAINT `poste_ouvriers_devi_id_foreign` FOREIGN KEY (`devi_id`) REFERENCES `devis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `poste_ouvriers_ouvrage_id_foreign` FOREIGN KEY (`ouvrage_id`) REFERENCES `ouvrages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `poste_ouvriers_ouvrier_id_foreign` FOREIGN KEY (`ouvrier_id`) REFERENCES `ouvriers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `poste_ouvriers_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reglements`
--
ALTER TABLE `reglements`
  ADD CONSTRAINT `reglements_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reglements_devi_id_foreign` FOREIGN KEY (`devi_id`) REFERENCES `devis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

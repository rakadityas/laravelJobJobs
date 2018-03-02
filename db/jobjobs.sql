-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2018 at 05:04 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobjobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_types`
--

CREATE TABLE `account_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `AccountTypeName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `account_types`
--

INSERT INTO `account_types` (`id`, `AccountTypeName`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'User', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

CREATE TABLE `bids` (
  `id` int(10) UNSIGNED NOT NULL,
  `ProjectID` int(10) UNSIGNED NOT NULL,
  `WorkerID` int(10) UNSIGNED NOT NULL,
  `DurationVerBidder` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `LangVerBidder` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ExpectedCost` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `BidDesc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(10) UNSIGNED NOT NULL,
  `ProjectID` int(10) UNSIGNED NOT NULL,
  `WorkerID` int(10) UNSIGNED NOT NULL,
  `Price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `headers`
--

CREATE TABLE `headers` (
  `id` int(10) UNSIGNED NOT NULL,
  `PublisherID` int(10) UNSIGNED NOT NULL,
  `PaymentTypeID` int(10) UNSIGNED NOT NULL,
  `TransactionDate` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_100000_create_password_resets_table', 1),
('2018_01_05_031247_create_project_categories_table', 1),
('2018_01_05_031304_create_account_types_table', 1),
('2018_01_05_031316_create_partner_levels_table', 1),
('2018_01_05_031344_create_payment_types_table', 1),
('2014_10_12_000000_create_users_table', 2),
('2018_01_05_031234_create_projects_table', 3),
('2018_01_05_031357_create_bids_table', 4),
('2018_01_05_031418_create_headers_table', 5),
('2018_01_05_031426_create_details_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `partner_levels`
--

CREATE TABLE `partner_levels` (
  `id` int(10) UNSIGNED NOT NULL,
  `LevelName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `partner_levels`
--

INSERT INTO `partner_levels` (`id`, `LevelName`, `created_at`, `updated_at`) VALUES
(1, 'Expert', NULL, NULL),
(2, 'Competent', NULL, NULL),
(3, 'Novice', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_types`
--

CREATE TABLE `payment_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `PaymentTypeName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payment_types`
--

INSERT INTO `payment_types` (`id`, `PaymentTypeName`, `created_at`, `updated_at`) VALUES
(1, 'Cash', NULL, NULL),
(2, 'PayPal', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `ProjectCategoryID` int(10) UNSIGNED NOT NULL,
  `PublisherID` int(10) UNSIGNED NOT NULL,
  `WorkerID` int(10) UNSIGNED NOT NULL,
  `ProjectName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Duration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Scale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Seen` int(11) NOT NULL,
  `ExpectedLocation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ExpectedUsers` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `LastBid` datetime NOT NULL,
  `Budget` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `ProjectCategoryID`, `PublisherID`, `WorkerID`, `ProjectName`, `Duration`, `Scale`, `Description`, `Seen`, `ExpectedLocation`, `ExpectedUsers`, `Status`, `LastBid`, `Budget`, `created_at`, `updated_at`) VALUES
(1, 3, 2, 3, 'C# Project', '3 months', 'Small', 'Hello world', 100, 'North Jakarta', '500/day', 'Process', '2018-01-31 00:00:00', 200000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_categories`
--

CREATE TABLE `project_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `ProjectCategoryName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `project_categories`
--

INSERT INTO `project_categories` (`id`, `ProjectCategoryName`, `created_at`, `updated_at`) VALUES
(1, 'Web Development', NULL, NULL),
(2, 'Network Infrastructure', NULL, NULL),
(3, 'Desktop Application', NULL, NULL),
(4, 'Mobile Development', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `LevelID` int(10) UNSIGNED NOT NULL,
  `AccountTypeID` int(10) UNSIGNED NOT NULL,
  `Username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Seen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `PictURL` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `LevelID`, `AccountTypeID`, `Username`, `password`, `Location`, `Email`, `Phone`, `Gender`, `Address`, `Seen`, `Desc`, `PictURL`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'admin', 'admin', 'Jakarta', 'admin@gmail.com', '0834029238', 'Male', '-', '-', '', '', NULL, NULL, NULL),
(2, 1, 2, 'PT. Kulagi', 'ptpt', 'North Jakarta', 'pt@gmail.com', '08349283948', 'Male', 'Jl.Bonang', '100', 'Hello world', '', NULL, NULL, NULL),
(3, 2, 2, 'Joni', 'joni', 'SOuth Jakarta', 'joni@gmail.com', '0874289283942', 'Male', 'Jl.E', '1000', 'Helloworld', '', NULL, NULL, NULL),
(4, 3, 2, 'PT.Lorem', 'lorem', 'Tangerang', 'lorem@gmail.com', '083854928', 'Female', 'Helloworld', '100', 'Lorem Ipsum', '', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_types`
--
ALTER TABLE `account_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bids`
--
ALTER TABLE `bids`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bids_projectid_foreign` (`ProjectID`),
  ADD KEY `bids_workerid_foreign` (`WorkerID`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `details_projectid_foreign` (`ProjectID`),
  ADD KEY `details_workerid_foreign` (`WorkerID`);

--
-- Indexes for table `headers`
--
ALTER TABLE `headers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `headers_publisherid_foreign` (`PublisherID`),
  ADD KEY `headers_paymenttypeid_foreign` (`PaymentTypeID`);

--
-- Indexes for table `partner_levels`
--
ALTER TABLE `partner_levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `payment_types`
--
ALTER TABLE `payment_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `projects_description_unique` (`Description`),
  ADD KEY `projects_projectcategoryid_foreign` (`ProjectCategoryID`),
  ADD KEY `projects_publisherid_foreign` (`PublisherID`),
  ADD KEY `projects_workerid_foreign` (`WorkerID`);

--
-- Indexes for table `project_categories`
--
ALTER TABLE `project_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`Email`),
  ADD KEY `users_levelid_foreign` (`LevelID`),
  ADD KEY `users_accounttypeid_foreign` (`AccountTypeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_types`
--
ALTER TABLE `account_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bids`
--
ALTER TABLE `bids`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `headers`
--
ALTER TABLE `headers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partner_levels`
--
ALTER TABLE `partner_levels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment_types`
--
ALTER TABLE `payment_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project_categories`
--
ALTER TABLE `project_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bids`
--
ALTER TABLE `bids`
  ADD CONSTRAINT `bids_projectid_foreign` FOREIGN KEY (`ProjectID`) REFERENCES `projects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bids_workerid_foreign` FOREIGN KEY (`WorkerID`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `details`
--
ALTER TABLE `details`
  ADD CONSTRAINT `details_projectid_foreign` FOREIGN KEY (`ProjectID`) REFERENCES `projects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `details_workerid_foreign` FOREIGN KEY (`WorkerID`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `headers`
--
ALTER TABLE `headers`
  ADD CONSTRAINT `headers_paymenttypeid_foreign` FOREIGN KEY (`PaymentTypeID`) REFERENCES `payment_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `headers_publisherid_foreign` FOREIGN KEY (`PublisherID`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_projectcategoryid_foreign` FOREIGN KEY (`ProjectCategoryID`) REFERENCES `project_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `projects_publisherid_foreign` FOREIGN KEY (`PublisherID`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `projects_workerid_foreign` FOREIGN KEY (`WorkerID`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_accounttypeid_foreign` FOREIGN KEY (`AccountTypeID`) REFERENCES `account_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_levelid_foreign` FOREIGN KEY (`LevelID`) REFERENCES `partner_levels` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

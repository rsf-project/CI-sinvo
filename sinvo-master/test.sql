-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2021 at 11:44 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_invoice`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_expense` (IN `expense_id_param ` INT)  NO SQL
delete from tbl_expense where expense_id = expense_id_param$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_invoice_tborder` (IN `order_id_param ` INT)  NO SQL
delete from tbl_order where order_id = order_id_param$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_invoice_tborderitem` (IN `order_item_id_param ` INT)  NO SQL
delete from tbl_order_item where order_item_id =order_item_id_param$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_mtbl_order` (IN `mtbl_id_param ` INT)  NO SQL
delete from mtbl_order where mtbl_id = mtbl_id_param$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_user` (IN `id_user_param ` INT)  NO SQL
delete from tbl_user where id_user=id_user_param$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_expense` (IN `expense_id_param ` INT, IN `expense_nama_param ` VARCHAR(50), IN `expense_keterangan_param ` VARCHAR(50), IN `expense_qty_param ` INT, IN `expense_harga_param ` BIGINT, IN `expense_total_param ` BIGINT, IN `expense_created_at_param ` DATE)  NO SQL
insert into tbl_expense values (expense_id_param,expense_nama_param,
                                    expense_keterangan_param,expense_qty_param,expense_harga_param
                                    ,expense_total_param,expense_created_at_param)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_order` (IN `order_kode_param ` INT, IN `order_nama_param ` VARCHAR(50), IN `order_alamat_param ` VARCHAR(250), IN `order_subtotal_param ` BIGINT, IN `order_diskon_param ` BIGINT, IN `order_great_total_param ` BIGINT, IN `order_date_param ` DATE, IN `order_payment_param ` VARCHAR(50))  NO SQL
insert into tbl_order values (order_kode_param,order_nama_param,
                                  order_alamat_param,order_subtotal_param,order_diskon_param,
                                  order_great_total_param,order_date_param,order_payment_param)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_user` (IN `id_user_param ` INT, IN `user_nama_param ` VARCHAR(50), IN `username_param ` VARCHAR(50), IN `user_password_param ` VARCHAR(50), IN `user_roleid_param ` INT, IN `user_address_param ` VARCHAR(250), IN `user_phone_param ` INT, IN `user_created_at_param ` DATE)  NO SQL
insert into tbl_user values (id_user_param,user_nama_param,
                                 username_param,user_password_param,user_roleid_param,
                                 user_address_param,user_phone_param,user_created_at_param)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_expense` (IN `expense_id_param ` INT, IN `expense_nama_param ` VARCHAR(50), IN `expense_keterangan_param ` VARCHAR(50), IN `expense_qty_param ` INT, IN `expense_harga_param ` BIGINT, IN `expense_total_param ` BIGINT, IN `expense_created_at_param ` DATE)  NO SQL
update tbl_expense set expense_nama = expense_nama_param,
                           expense_keterangan=expense_keterangan_param,expense_qty=expense_qty_param,
                           expense_harga=expense_harga_param,expense_total=expense_total_param,
                           expense_created_at=expense_created_at_param
    where expense_id =expense_id_param$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_invoice_tborder` (IN `order_id_param ` INT, IN `order_kode_param ` INT, IN `order_nama_param ` VARCHAR(50), IN `order_alamat_param ` VARCHAR(250), IN `order_subtotal_param ` BIGINT, IN `order_diskon_param ` BIGINT, IN `order_great_total_param ` BIGINT, IN `order_date_param ` DATE)  NO SQL
update tbl_order set order_kode =order_kode_param, order_nama=order_nama_param, order_alamat=order_alamat_param,
                         order_subtotal=order_subtotal_param,order_diskon=order_diskon_param,
                         order_great_total=order_great_total_param, order_date=order_date_param
    where order_id=order_id_param$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_invoice_tborderitem` (IN `order_item_id_param ` INT, IN `order_id_param ` INT, IN `order_project_param ` VARCHAR(50), IN `order_description_param ` BIGINT, IN `order_item_qty_param ` BIGINT, IN `order_item_price_param ` BIGINT, IN `order_item_subtotal_param ` BIGINT)  NO SQL
update tbl_order_item set order_project=order_project_param,order_description=order_description_param,
                              order_item_qty=order_item_qty_param, order_item_price=order_item_price_param,
                              order_item_subtotal=order_item_subtotal_param
    where order_item_id=order_item_id_param$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_user` (IN `id_user_param ` INT, IN `user_nama_param ` VARCHAR(50), IN `username_param ` VARCHAR(50), IN `user_password_param ` VARCHAR(50), IN `user_roleid_param ` INT, IN `user_address_param ` VARCHAR(250), IN `user_phone_param ` INT, IN `user_created_at_param ` DATE)  NO SQL
update tbl_user set user_nama=user_nama_param,username=username_param,user_password=user_password_param,
                        user_roleid=user_roleid_param,user_address=user_address_param,user_phone=user_phone_param,
                        user_created_at=user_created_at_param where id_user=id_user_param$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `mtbl_order`
--

CREATE TABLE `mtbl_order` (
  `mtbl_id` int(11) NOT NULL,
  `mtbl_project_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mtbl_order`
--

INSERT INTO `mtbl_order` (`mtbl_id`, `mtbl_project_name`) VALUES
(1, 'Kursus Pemrograman Dasar'),
(2, 'Kursus Pemrograman Web'),
(3, 'Kursus Pemrograman Mobile'),
(4, 'Kursus Pemrograman Visual'),
(6, 'Kursus Machine Learning');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_expense`
--

CREATE TABLE `tbl_expense` (
  `expense_id` int(11) NOT NULL,
  `expense_nama` varchar(50) NOT NULL,
  `expense_qty` int(11) NOT NULL,
  `expense_harga` bigint(20) NOT NULL,
  `expense_total` bigint(20) NOT NULL,
  `expense_keterangan` varchar(250) NOT NULL,
  `expense_created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_expense`
--

INSERT INTO `tbl_expense` (`expense_id`, `expense_nama`, `expense_qty`, `expense_harga`, `expense_total`, `expense_keterangan`, `expense_created_at`) VALUES
(1, 'Pajak', 1, 3750000, 3750000, 'pajak bangunan', '2020-11-06'),
(2, 'perawatan', 1, 750000, 750000, 'perawatan kantor', '2020-11-06'),
(4, 'Service', 3, 75000, 225000, 'Install ulang PC ', '2020-11-12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `order_kode` varchar(15) NOT NULL,
  `order_nama` varchar(50) NOT NULL,
  `order_alamat` varchar(150) NOT NULL,
  `order_subtotal` decimal(10,0) NOT NULL,
  `order_diskon` decimal(10,0) NOT NULL,
  `order_great_total` decimal(10,0) NOT NULL,
  `order_date` date NOT NULL,
  `order_payment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `order_kode`, `order_nama`, `order_alamat`, `order_subtotal`, `order_diskon`, `order_great_total`, `order_date`, `order_payment`) VALUES
(1, '0000000001', 'Arya Difo Hasmi', 'Pekanbaru', '2000000', '10', '1800000', '2020-10-16', 'Cash'),
(2, '0000000002', 'Eka Triani', 'Palembang', '2000000', '0', '2000000', '2020-10-19', 'Transfer'),
(3, '0000000003', 'Cindy Steffani', 'Palembang', '2000000', '0', '2000000', '2020-07-19', 'Transfer'),
(4, '0000000004', 'Della Octa Amelia', 'Indralaya', '1500000', '0', '1500000', '2020-09-20', 'Transfer'),
(5, '0000000005', 'Genta Agsal Valendril', 'Prabumulih', '3000000', '10', '2700000', '2020-08-20', 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_item`
--

CREATE TABLE `tbl_order_item` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `order_project` varchar(150) NOT NULL,
  `order_description` varchar(150) NOT NULL,
  `order_item_qty` bigint(20) NOT NULL,
  `order_item_price` bigint(20) NOT NULL,
  `order_item_subtotal` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order_item`
--

INSERT INTO `tbl_order_item` (`order_item_id`, `order_id`, `order_project`, `order_description`, `order_item_qty`, `order_item_price`, `order_item_subtotal`) VALUES
(1, 1, 'Kursus Pemrograman Web', 'javascript', 1, 2000000, 2000000),
(2, 2, 'Kursus Pemrograman Mobile', 'javascript', 1, 2000000, 2000000),
(3, 3, 'Kursus Machine Learning', 'neural network', 1, 2000000, 2000000),
(4, 4, 'Kursus Pemrograman Web', 'HTML', 1, 1500000, 1500000),
(5, 5, 'Kursus Pemrograman Mobile', 'kotlin', 1, 3000000, 3000000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `user_nama` varchar(50) NOT NULL,
  `username` varchar(10) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_roleid` int(11) NOT NULL,
  `user_address` varchar(250) NOT NULL,
  `user_phone` varchar(15) NOT NULL,
  `user_created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `user_nama`, `username`, `user_password`, `user_roleid`, `user_address`, `user_phone`, `user_created_at`) VALUES
(1, 'Muhammad Malian Zikri', 'owner', 'owner', 1, 'Palembang', '08117199210', '2020-10-30'),
(3, 'Della Octa Amelia', 'olaf', 'olaf', 2, 'Indralaya', '082175481492', '2020-10-30'),
(4, 'Cindy Steffani', 'cindy', 'cindy', 2, 'Palembang', '08967798653', '2020-10-30'),
(6, 'Arya Difo Hasmi', 'difo', 'difo', 2, 'Indralaya', '081275226368', '2020-11-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mtbl_order`
--
ALTER TABLE `mtbl_order`
  ADD PRIMARY KEY (`mtbl_id`);

--
-- Indexes for table `tbl_expense`
--
ALTER TABLE `tbl_expense`
  ADD PRIMARY KEY (`expense_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_item`
--
ALTER TABLE `tbl_order_item`
  ADD PRIMARY KEY (`order_item_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2017 at 07:57 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_activegel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `i_customer` int(11) NOT NULL,
  `s_ref_car` varchar(100) NOT NULL,
  `i_title` int(11) NOT NULL,
  `s_firstname` varchar(100) NOT NULL,
  `s_lastname` varchar(100) NOT NULL,
  `s_phone_1` varchar(100) NOT NULL,
  `s_phone_2` varchar(100) NOT NULL,
  `s_email` varchar(100) NOT NULL,
  `s_line` varchar(50) NOT NULL,
  `s_image` varchar(100) NOT NULL,
  `s_address` varchar(200) NOT NULL,
  `i_district` int(11) NOT NULL,
  `i_amphure` int(11) NOT NULL,
  `i_province` int(11) NOT NULL,
  `i_zipcode` int(11) NOT NULL,
  `d_create` datetime NOT NULL,
  `d_update` datetime NOT NULL,
  `s_create_by` varchar(50) NOT NULL,
  `s_update_by` varchar(50) NOT NULL,
  `s_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`i_customer`, `s_ref_car`, `i_title`, `s_firstname`, `s_lastname`, `s_phone_1`, `s_phone_2`, `s_email`, `s_line`, `s_image`, `s_address`, `i_district`, `i_amphure`, `i_province`, `i_zipcode`, `d_create`, `d_update`, `s_create_by`, `s_update_by`, `s_status`) VALUES
(4, '', 1, 'ณัฐดนัย', 'มั่นคง', '(086) 361-9979', '(213) 212-1321', 'natdanaimon@gmail.com', 'nagie', 'default.png', '99/99 ม.3 ', 200403, 139, 11, 20150, '2017-10-30 23:27:10', '2017-10-31 00:33:04', 'admin', 'admin', 'A'),
(5, '', 2, 'ปุญญิสา', 'ทองทิพย์', '(088) 888-8888', '(099) 999-9999', 'test@gmail.com', 'tres', 'default.png', '123123123', 100303, 3, 1, 10530, '2017-12-04 13:54:49', '2017-12-04 13:54:49', 'admin', 'admin', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tb_event`
--

CREATE TABLE `tb_event` (
  `i_event` int(10) NOT NULL,
  `s_img_p1` varchar(100) NOT NULL,
  `s_img_p2` varchar(100) NOT NULL,
  `i_index` int(11) NOT NULL,
  `s_subject_th` text NOT NULL,
  `s_subject_en` text NOT NULL,
  `s_detail_th` text NOT NULL,
  `s_detail_en` text NOT NULL,
  `i_view` int(10) NOT NULL,
  `i_vote` int(10) NOT NULL,
  `d_create` datetime NOT NULL,
  `d_update` datetime NOT NULL,
  `s_create_by` varchar(50) NOT NULL,
  `s_update_by` varchar(50) NOT NULL,
  `s_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_item`
--

CREATE TABLE `tb_item` (
  `i_item` int(11) NOT NULL,
  `s_code` varchar(50) NOT NULL,
  `s_item_th` varchar(100) NOT NULL,
  `s_item_en` varchar(100) NOT NULL,
  `s_image` varchar(100) NOT NULL,
  `d_create` datetime NOT NULL,
  `d_update` datetime NOT NULL,
  `s_create_by` varchar(50) NOT NULL,
  `s_update_by` varchar(50) NOT NULL,
  `s_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_item`
--

INSERT INTO `tb_item` (`i_item`, `s_code`, `s_item_th`, `s_item_en`, `s_image`, `d_create`, `d_update`, `s_create_by`, `s_update_by`, `s_status`) VALUES
(1, 'fasdfdas', 'fasfasf', '', '', '2017-11-05 19:02:27', '2017-11-05 19:02:27', 'admin', 'admin', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mail_config`
--

CREATE TABLE `tb_mail_config` (
  `s_insurance` varchar(100) NOT NULL,
  `s_claimonline` varchar(100) NOT NULL,
  `d_create` datetime NOT NULL,
  `d_update` datetime NOT NULL,
  `s_create_by` varchar(100) NOT NULL,
  `s_update_by` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mail_config`
--

INSERT INTO `tb_mail_config` (`s_insurance`, `s_claimonline`, `d_create`, `d_update`, `s_create_by`, `s_update_by`) VALUES
('natdanaimon@gmail.com', 'natdanaimon@gmail.com', '0000-00-00 00:00:00', '2017-12-10 14:09:56', 'ADM', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_news`
--

CREATE TABLE `tb_news` (
  `i_news` int(10) NOT NULL,
  `s_img_p1` varchar(100) NOT NULL,
  `s_img_p2` varchar(100) NOT NULL,
  `i_index` int(11) NOT NULL,
  `s_subject_th` text NOT NULL,
  `s_subject_en` text NOT NULL,
  `s_detail_th` text NOT NULL,
  `s_detail_en` text NOT NULL,
  `i_view` int(10) NOT NULL,
  `i_vote` int(10) NOT NULL,
  `d_create` datetime NOT NULL,
  `d_update` datetime NOT NULL,
  `s_create_by` varchar(50) NOT NULL,
  `s_update_by` varchar(50) NOT NULL,
  `s_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_news`
--

INSERT INTO `tb_news` (`i_news`, `s_img_p1`, `s_img_p2`, `i_index`, `s_subject_th`, `s_subject_en`, `s_detail_th`, `s_detail_en`, `i_view`, `i_vote`, `d_create`, `d_update`, `s_create_by`, `s_update_by`, `s_status`) VALUES
(2, '201712151056361.png', '201712151056362.png', 1, 'ดหฟกดหฟกด', 'fasdfasf', '<p>ดหกดฟหกด</p>\r\n', '<p>fdsafsdf</p>\r\n', 0, 0, '2017-12-15 10:56:36', '2017-12-15 10:56:36', 'admin', 'admin', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tb_partner_comp`
--

CREATE TABLE `tb_partner_comp` (
  `i_part_comp` int(11) NOT NULL,
  `s_comp_th` varchar(100) NOT NULL,
  `s_comp_en` varchar(100) NOT NULL,
  `s_url` varchar(100) NOT NULL,
  `i_index` int(11) NOT NULL,
  `s_image` varchar(100) NOT NULL,
  `d_create` datetime NOT NULL,
  `d_update` datetime NOT NULL,
  `s_create_by` varchar(50) NOT NULL,
  `s_update_by` varchar(50) NOT NULL,
  `s_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_popup`
--

CREATE TABLE `tb_popup` (
  `s_key` varchar(10) NOT NULL,
  `s_image` varchar(100) NOT NULL,
  `s_url` varchar(100) NOT NULL,
  `d_start` date NOT NULL,
  `d_end` date NOT NULL,
  `d_update` datetime NOT NULL,
  `s_update_by` varchar(100) NOT NULL,
  `s_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_popup`
--

INSERT INTO `tb_popup` (`s_key`, `s_image`, `s_url`, `d_start`, `d_end`, `d_update`, `s_update_by`, `s_status`) VALUES
('POPUP', '201712141830521.png', '#', '2017-11-25', '2017-11-30', '2017-12-14 18:30:52', 'admin', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tb_position`
--

CREATE TABLE `tb_position` (
  `i_position` int(10) NOT NULL,
  `s_detail` varchar(100) NOT NULL,
  `s_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_position`
--

INSERT INTO `tb_position` (`i_position`, `s_detail`, `s_status`) VALUES
(1, 'สไลด์หน้าแรก', 'A'),
(2, 'สไลด์หน้าอยากซ่อมอู่', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `tb_slide`
--

CREATE TABLE `tb_slide` (
  `i_slide` int(10) NOT NULL,
  `i_index` int(11) NOT NULL,
  `i_position` int(11) NOT NULL,
  `s_desc_hl` varchar(150) NOT NULL,
  `s_desc_nm` varchar(150) NOT NULL,
  `s_image` varchar(100) NOT NULL,
  `d_create` datetime NOT NULL,
  `d_update` datetime NOT NULL,
  `s_create_by` varchar(50) NOT NULL,
  `s_update_by` varchar(50) NOT NULL,
  `s_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `s_status` varchar(50) NOT NULL,
  `s_type` varchar(50) NOT NULL,
  `s_detail_th` varchar(100) NOT NULL,
  `s_detail_en` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_status`
--

INSERT INTO `tb_status` (`s_status`, `s_type`, `s_detail_th`, `s_detail_en`) VALUES
('A', 'ACTIVE', 'ใช้งาน', 'Active'),
('C', 'ACTIVE', 'ยกเลิก', 'Cancel');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `i_user` int(11) NOT NULL,
  `s_user` varchar(100) NOT NULL,
  `s_pass` varchar(100) NOT NULL,
  `s_firstname` varchar(100) NOT NULL,
  `s_lastname` varchar(100) NOT NULL,
  `s_email` varchar(100) NOT NULL,
  `s_phone` varchar(100) NOT NULL,
  `s_line` varchar(100) NOT NULL,
  `s_image` varchar(100) NOT NULL,
  `s_type` varchar(10) NOT NULL,
  `d_create` datetime NOT NULL,
  `d_update` datetime NOT NULL,
  `s_create_by` varchar(50) NOT NULL,
  `s_update_by` varchar(50) NOT NULL,
  `s_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`i_user`, `s_user`, `s_pass`, `s_firstname`, `s_lastname`, `s_email`, `s_phone`, `s_line`, `s_image`, `s_type`, `d_create`, `d_update`, `s_create_by`, `s_update_by`, `s_status`) VALUES
(1, 'admin', '1111', 'ณัฐดนัย', 'มั่นคง', 'natdanaimon@gmail.com', '(086) 361-9979', '', '201710280615331.png', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'csm/', 'ADM', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`i_customer`),
  ADD KEY `index_address` (`i_district`,`i_amphure`,`i_province`,`i_zipcode`),
  ADD KEY `index_customer_search` (`s_status`);

--
-- Indexes for table `tb_event`
--
ALTER TABLE `tb_event`
  ADD PRIMARY KEY (`i_event`),
  ADD KEY `index_tb_event` (`i_vote`,`i_view`,`s_status`);

--
-- Indexes for table `tb_item`
--
ALTER TABLE `tb_item`
  ADD PRIMARY KEY (`i_item`),
  ADD KEY `index_item` (`s_status`),
  ADD KEY `index_item_code` (`s_code`);

--
-- Indexes for table `tb_news`
--
ALTER TABLE `tb_news`
  ADD PRIMARY KEY (`i_news`),
  ADD KEY `index_tb_news` (`i_vote`,`i_view`,`s_status`);

--
-- Indexes for table `tb_partner_comp`
--
ALTER TABLE `tb_partner_comp`
  ADD PRIMARY KEY (`i_part_comp`),
  ADD KEY `index_part_comp` (`s_status`);

--
-- Indexes for table `tb_popup`
--
ALTER TABLE `tb_popup`
  ADD PRIMARY KEY (`s_key`);

--
-- Indexes for table `tb_position`
--
ALTER TABLE `tb_position`
  ADD PRIMARY KEY (`i_position`),
  ADD KEY `index_tb_position` (`s_status`);

--
-- Indexes for table `tb_slide`
--
ALTER TABLE `tb_slide`
  ADD PRIMARY KEY (`i_slide`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`s_status`),
  ADD KEY `index_status` (`s_type`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`i_user`),
  ADD KEY `index_user_search` (`s_user`,`s_type`,`s_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `i_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_event`
--
ALTER TABLE `tb_event`
  MODIFY `i_event` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_item`
--
ALTER TABLE `tb_item`
  MODIFY `i_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_news`
--
ALTER TABLE `tb_news`
  MODIFY `i_news` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_partner_comp`
--
ALTER TABLE `tb_partner_comp`
  MODIFY `i_part_comp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_position`
--
ALTER TABLE `tb_position`
  MODIFY `i_position` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_slide`
--
ALTER TABLE `tb_slide`
  MODIFY `i_slide` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `i_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

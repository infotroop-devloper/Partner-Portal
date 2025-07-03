-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2025 at 02:16 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infotroop`
--

-- --------------------------------------------------------

--
-- Table structure for table `masters_customer`
--

CREATE TABLE `masters_customer` (
  `id` int(11) NOT NULL,
  `partner_idfk` int(11) DEFAULT NULL,
  `customer_name` varchar(200) DEFAULT NULL,
  `email_id` varchar(200) DEFAULT NULL,
  `phone_no` varchar(50) DEFAULT NULL,
  `alt_phone_no` varchar(50) DEFAULT NULL,
  `landline` varchar(50) DEFAULT NULL,
  `address1` varchar(500) DEFAULT NULL,
  `address2` varchar(500) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `zipcode` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `otp` varchar(10) DEFAULT NULL,
  `is_verified` int(5) DEFAULT NULL,
  `is_active` int(5) DEFAULT NULL,
  `added_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `masters_customer_product`
--

CREATE TABLE `masters_customer_product` (
  `id` int(11) NOT NULL,
  `customer_idfk` int(11) DEFAULT NULL,
  `product_idfk` int(11) DEFAULT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `model_no` varchar(100) DEFAULT NULL,
  `serial_no` varchar(100) DEFAULT NULL,
  `dop` varchar(100) DEFAULT NULL,
  `under_warranty` int(11) DEFAULT NULL,
  `warranty_sdate` datetime DEFAULT NULL,
  `warranty_edate` datetime DEFAULT NULL,
  `documents` varchar(100) DEFAULT NULL,
  `added_by` datetime DEFAULT NULL,
  `added_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `masters_faqs_info`
--

CREATE TABLE `masters_faqs_info` (
  `id` int(50) NOT NULL,
  `faq_question` varchar(250) DEFAULT NULL,
  `faq_answer` varchar(250) DEFAULT NULL,
  `faq_description` varchar(500) DEFAULT NULL,
  `faq_video_link` varchar(500) DEFAULT NULL,
  `faq_type` varchar(50) DEFAULT NULL COMMENT 'only_video,qna,qna_video,video_desc',
  `is_active` int(5) DEFAULT 0,
  `added_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `masters_partners`
--

CREATE TABLE `masters_partners` (
  `id` int(11) NOT NULL,
  `partner_uniqueid` varchar(100) NOT NULL,
  `country` varchar(50) DEFAULT NULL,
  `primary_business_model` varchar(200) NOT NULL DEFAULT '0',
  `business_type` varchar(200) NOT NULL DEFAULT '0',
  `partner_name` varchar(1000) NOT NULL DEFAULT '0',
  `local_company_name` varchar(250) NOT NULL DEFAULT '0',
  `company_head` varchar(250) NOT NULL DEFAULT '0',
  `website_url` varchar(100) NOT NULL DEFAULT '0',
  `email_id` varchar(50) NOT NULL DEFAULT '0',
  `phone_no` varchar(50) NOT NULL DEFAULT '0',
  `pan` varchar(50) NOT NULL DEFAULT '0',
  `gst` varchar(50) NOT NULL DEFAULT '0',
  `company_address` varchar(500) NOT NULL DEFAULT '0',
  `primary_company_city` varchar(100) NOT NULL DEFAULT '0',
  `primary_company_state` varchar(100) NOT NULL DEFAULT '0',
  `primary_company_country` varchar(100) NOT NULL DEFAULT '0',
  `primary_company_zipcode` varchar(50) NOT NULL DEFAULT '0',
  `is_subsidiary` varchar(5) NOT NULL DEFAULT '0',
  `subsidary_company_name` varchar(250) NOT NULL DEFAULT '0',
  `sub_company_address` varchar(500) NOT NULL DEFAULT '0',
  `sub_city` varchar(50) NOT NULL DEFAULT '0',
  `sub_state` varchar(50) NOT NULL DEFAULT '0',
  `sub_country` varchar(50) NOT NULL DEFAULT '0',
  `sub_zipcode` varchar(50) NOT NULL DEFAULT '0',
  `total_revenue` varchar(100) NOT NULL DEFAULT '0',
  `active_customer` varchar(100) NOT NULL DEFAULT '0',
  `head_count` varchar(100) NOT NULL DEFAULT '0',
  `sales_count` varchar(100) NOT NULL DEFAULT '0',
  `tech_count` varchar(100) NOT NULL DEFAULT '0',
  `salutation` varchar(25) NOT NULL DEFAULT '0',
  `fname` varchar(100) NOT NULL DEFAULT '0',
  `lname` varchar(100) NOT NULL DEFAULT '0',
  `job_title` varchar(100) NOT NULL DEFAULT '0',
  `job_role` varchar(100) NOT NULL DEFAULT '0',
  `contact_email_id` varchar(100) NOT NULL DEFAULT '0',
  `contact_phone_no` varchar(100) NOT NULL DEFAULT '0',
  `contact_mobile_no` varchar(100) NOT NULL DEFAULT '0',
  `contact_address` varchar(100) NOT NULL DEFAULT '0',
  `agree_tnc` varchar(100) NOT NULL DEFAULT '0',
  `last_agree_tnc` varchar(100) NOT NULL DEFAULT '0',
  `status` varchar(50) DEFAULT NULL COMMENT 'New,Pending,Completed,Cancelled,Approved,Declined',
  `added_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masters_partners`
--

INSERT INTO `masters_partners` (`id`, `partner_uniqueid`, `country`, `primary_business_model`, `business_type`, `partner_name`, `local_company_name`, `company_head`, `website_url`, `email_id`, `phone_no`, `pan`, `gst`, `company_address`, `primary_company_city`, `primary_company_state`, `primary_company_country`, `primary_company_zipcode`, `is_subsidiary`, `subsidary_company_name`, `sub_company_address`, `sub_city`, `sub_state`, `sub_country`, `sub_zipcode`, `total_revenue`, `active_customer`, `head_count`, `sales_count`, `tech_count`, `salutation`, `fname`, `lname`, `job_title`, `job_role`, `contact_email_id`, `contact_phone_no`, `contact_mobile_no`, `contact_address`, `agree_tnc`, `last_agree_tnc`, `status`, `added_date`) VALUES
(1, 'ITSP0001', 'India', 'Consumer Partner', 'Proprietorship Firm', 'Dip Computer', 'Dip Computer', 'Dipak Auti', 'https://www.dipcomputer.com', 'dipakdipcomputer@gmail.com', '+91 9011077365', 'ALVPA4107C', '27ALVPA4107C1ZF', 'Sr.23, Parmatma 1, Ambule Niwas, Bhagat Wasti, Hanuman Nagar, Bhosari', 'Pune', 'Maharashtra', 'India', '411039', 'on', '', '', '', '', '', '', '1 Crore', '100', '4', '1', '4', 'Mr.', '', '', 'Propritor', 'Business Development', 'dipakdipcomputer@gmail.com', '+919011077365', '+919011077365', 'Sr.23, Parmatma 1, Ambule Niwas, Bhagat Wasti, Hanuman Nagar, Bhosari, Maharashtra 411039', '', '', 'New', '2025-04-28 02:57:18'),
(2, 'ITSP0002', 'India', 'Solution Provider', 'Private Limited Company (PVT. LTD.)', 'INFOTROOP IT SOLUTIONS PVT LTD', 'INFOTROOP IT SOLUTIONS PVT LTD', 'INFOTROOP IT SOLUTIONS PVT LTD', 'INFOTROOP IT SOLUTIONS PVT LTD', 'nanasaheb.kale@infotroop.co.in', '08975632217', 'AAFCI2228E', '27AAFCI2228E1ZV', '2nd Floor, Shubham Complex, Nashik - Pune Rd, opp. Spine Road, Moshi Pradhikaran, Sector Number 4, Moshi, Pune, Pimpri-Chinchwad, Maharashtra 412105', 'Pune', 'Maharashtra', 'India', '412105', 'on', '', '', '', '', '', '', '1 Cr', '150', '15', '1', '12', 'Mr.', '', '', 'Founder & Director', 'Business Development', 'nanasaheb.kale@infotroop.co.in', '08975632217', '08975632217', '2nd Floor, Shubham Complex, Nashik - Pune Rd, opp. Spine Road, Moshi Pradhikaran, Sector Number 4, M', '', '', 'New', '2025-05-02 12:48:21'),
(3, 'ITSP0003', 'India', 'Solution Provider', 'Private Limited Company (PVT. LTD.)', 'INFOTROOP IT SOLUTIONS PVT LTD', 'INFOTROOP IT SOLUTIONS PVT LTD', 'INFOTROOP IT SOLUTIONS PVT LTD', 'INFOTROOP IT SOLUTIONS PVT LTD', 'nanasaheb.kale@infotroop.co.in', '08975632217', 'AAFCI2228E', '27AAFCI2228E1ZV', '2nd Floor, Shubham Complex, Nashik - Pune Rd, opp. Spine Road, Moshi Pradhikaran, Sector Number 4, Moshi, Pune, Pimpri-Chinchwad, Maharashtra 412105', 'Pune', 'Maharashtra', 'India', '412105', 'on', '', '', '', '', '', '', 'INFOTROOP IT SOLUTIONS PVT LTD', 'INFOTROOP IT SOLUTIONS PVT LTD', 'INFOTROOP IT SOLUTIONS PVT LTD', 'INFOTROOP IT SOLUTIONS PVT LTD', '12', 'Mr.', '', '', 'Founder & Director', 'Business Development', 'nanasaheb.kale@infotroop.co.in', '08975632217', '08975632217', '2nd Floor, Shubham Complex, Nashik - Pune Rd, opp. Spine Road, Moshi Pradhikaran, Sector Number 4, M', '', '', 'New', '2025-05-06 09:19:37'),
(4, 'ITSP0004', 'India', 'Solution Provider', 'Limited Liability Partnership (LLP)', 'INFOTROOP IT SOLUTIONS PVT LTD', 'INFOTROOP IT SOLUTIONS PVT LTD', 'INFOTROOP IT SOLUTIONS PVT LTD', 'INFOTROOP IT SOLUTIONS PVT LTD', 'nanasaheb.kale@infotroop.co.in', '08975632217', 'AAFCI2228E', '27AAFCI2228E1ZV', '2nd Floor, Shubham Complex, Nashik - Pune Rd, opp. Spine Road, Moshi Pradhikaran, Sector Number 4, Moshi, Pune, Pimpri-Chinchwad, Maharashtra 412105', 'Pune', 'Maharashtra', 'India', '412105', 'on', '', '', '', '', '', '', 'INFOTROOP IT SOLUTIONS PVT LTD', 'INFOTROOP IT SOLUTIONS PVT LTD', 'INFOTROOP IT SOLUTIONS PVT LTD', 'INFOTROOP IT SOLUTIONS PVT LTD', '12', 'Mr.', '', '', 'Founder & Director', 'Business Development', 'nanasaheb.kale@infotroop.co.in', '08975632217', '08975632217', '2nd Floor, Shubham Complex, Nashik - Pune Rd, opp. Spine Road, Moshi Pradhikaran, Sector Number 4, M', '', '', 'New', '2025-05-07 01:18:42'),
(5, 'ITSP0005', 'India', 'Solution Provider', 'Private Limited Company (PVT. LTD.)', 'INFOTROOP IT SOLUTIONS PVT LTD', 'INFOTROOP IT SOLUTIONS PVT LTD', 'INFOTROOP IT SOLUTIONS PVT LTD', 'INFOTROOP IT SOLUTIONS PVT LTD', 'nanasaheb.kale@infotroop.co.in', '08975632217', 'AAFCI2228E', '27AAFCI2228E1ZV', '2nd Floor, Shubham Complex, Nashik - Pune Rd, opp. Spine Road, Moshi Pradhikaran, Sector Number 4, Moshi, Pune, Pimpri-Chinchwad, Maharashtra 412105', 'Pune', 'Maharashtra', 'India', '412105', 'on', '', '', '', '', '', '', 'INFOTROOP IT SOLUTIONS PVT LTD', 'INFOTROOP IT SOLUTIONS PVT LTD', 'INFOTROOP IT SOLUTIONS PVT LTD', 'INFOTROOP IT SOLUTIONS PVT LTD', '12', 'Mr.', '', '', 'Founder & Director', 'Business Development', 'nanasaheb.kale@infotroop.co.in', '08975632217', '08975632217', '2nd Floor, Shubham Complex, Nashik - Pune Rd, opp. Spine Road, Moshi Pradhikaran, Sector Number 4, M', '', '', 'New', '2025-05-23 01:51:09'),
(6, 'ITSP0006', 'India', 'Solution Provider', 'Private Limited Company (PVT. LTD.)', 'INFOTROOP IT SOLUTIONS PVT LTD', 'INFOTROOP IT SOLUTIONS PVT LTD', 'INFOTROOP IT SOLUTIONS PVT LTD', 'INFOTROOP IT SOLUTIONS PVT LTD', 'nanasaheb.kale@infotroop.co.in', '08975632217', 'AAFCI2228E', '27AAFCI2228E1ZV', '2nd Floor, Shubham Complex, Nashik - Pune Rd, opp. Spine Road, Moshi Pradhikaran, Sector Number 4, Moshi, Pune, Pimpri-Chinchwad, Maharashtra 412105', 'Pune', 'Maharashtra', 'India', '412105', 'on', '', '', '', '', '', '', 'INFOTROOP IT SOLUTIONS PVT LTD', 'INFOTROOP IT SOLUTIONS PVT LTD', 'INFOTROOP IT SOLUTIONS PVT LTD', 'INFOTROOP IT SOLUTIONS PVT LTD', '12', 'Mr.', '', '', 'Founder & Director', 'Business Development', 'nanasaheb.kale@infotroop.co.in', '08975632217', '08975632217', '2nd Floor, Shubham Complex, Nashik - Pune Rd, opp. Spine Road, Moshi Pradhikaran, Sector Number 4, M', '', '', 'New', '2025-05-24 09:02:18'),
(7, 'ITSP0007', 'India', 'Solution Provider', 'Private Limited Company (PVT. LTD.)', 'INFOTROOP IT SOLUTIONS PVT LTD', 'INFOTROOP IT SOLUTIONS PVT LTD', 'INFOTROOP IT SOLUTIONS PVT LTD', 'INFOTROOP IT SOLUTIONS PVT LTD', 'nanasaheb.kale@infotroop.co.in', '08975632217', 'AAFCI2228E', '27AAFCI2228E1ZV', '2nd Floor, Shubham Complex, Nashik - Pune Rd, opp. Spine Road, Moshi Pradhikaran, Sector Number 4, Moshi, Pune, Pimpri-Chinchwad, Maharashtra 412105', 'Pune', 'Maharashtra', 'India', '412105', 'on', '', '', '', '', '', '', 'INFOTROOP IT SOLUTIONS PVT LTD', 'INFOTROOP IT SOLUTIONS PVT LTD', 'INFOTROOP IT SOLUTIONS PVT LTD', 'INFOTROOP IT SOLUTIONS PVT LTD', '12', 'Mr.', '', '', 'Founder & Director', 'Business Development', 'nanasaheb.kale@infotroop.co.in', '08975632217', '08975632217', '2nd Floor, Shubham Complex, Nashik - Pune Rd, opp. Spine Road, Moshi Pradhikaran, Sector Number 4, M', '', '', 'New', '2025-06-02 02:32:50');

-- --------------------------------------------------------

--
-- Table structure for table `masters_partner_documents`
--

CREATE TABLE `masters_partner_documents` (
  `id` int(25) NOT NULL,
  `partner_idfk` int(25) NOT NULL DEFAULT 0,
  `doc_name` varchar(250) NOT NULL DEFAULT '0',
  `doc_type` varchar(250) NOT NULL DEFAULT '0',
  `added_by` int(50) NOT NULL DEFAULT 0,
  `added_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masters_partner_documents`
--

INSERT INTO `masters_partner_documents` (`id`, `partner_idfk`, `doc_name`, `doc_type`, `added_by`, `added_date`) VALUES
(1, 1, '20250428025718_govt_id_proof.jpg', 'govt_id_proof', 0, '2025-04-28 02:57:18'),
(2, 1, '20250428025718_address_document.jpg', 'address_document', 0, '2025-04-28 02:57:18'),
(3, 1, '', 'business_document', 0, '2025-04-28 02:57:18'),
(4, 1, '20250428025718_gst_certificate.pdf', 'gst_certificate', 0, '2025-04-28 02:57:18'),
(5, 1, '20250428025718_bank_document.jpg', 'bank_document', 0, '2025-04-28 02:57:18'),
(6, 2, '', 'coi_llp', 0, '2025-05-02 12:48:21'),
(7, 2, '', 'pan_company', 0, '2025-05-02 12:48:21'),
(8, 2, '', 'gst_certificate', 0, '2025-05-02 12:48:21'),
(9, 2, '', 'moa_aoa', 0, '2025-05-02 12:48:21'),
(10, 2, '', 'partner_proof', 0, '2025-05-02 12:48:21'),
(11, 2, '', 'address_proof', 0, '2025-05-02 12:48:21'),
(12, 2, '', 'bank_document', 0, '2025-05-02 12:48:21'),
(13, 3, '', 'coi_llp', 0, '2025-05-06 09:19:37'),
(14, 3, '', 'pan_company', 0, '2025-05-06 09:19:37'),
(15, 3, '', 'gst_certificate', 0, '2025-05-06 09:19:37'),
(16, 3, '', 'moa_aoa', 0, '2025-05-06 09:19:37'),
(17, 3, '', 'partner_proof', 0, '2025-05-06 09:19:37'),
(18, 3, '', 'address_proof', 0, '2025-05-06 09:19:37'),
(19, 3, '', 'bank_document', 0, '2025-05-06 09:19:37'),
(20, 4, '', 'coi_llp', 0, '2025-05-07 01:18:42'),
(21, 4, '', 'pan_llp', 0, '2025-05-07 01:18:42'),
(22, 4, '', 'gst_certificate', 0, '2025-05-07 01:18:42'),
(23, 4, '', 'llp_agreement', 0, '2025-05-07 01:18:42'),
(24, 4, '', 'partner_proof', 0, '2025-05-07 01:18:42'),
(25, 4, '', 'address_proof', 0, '2025-05-07 01:18:42'),
(26, 4, '', 'bank_document', 0, '2025-05-07 01:18:42'),
(27, 5, '', 'coi_llp', 0, '2025-05-23 01:51:09'),
(28, 5, '', 'pan_company', 0, '2025-05-23 01:51:09'),
(29, 5, '', 'gst_certificate', 0, '2025-05-23 01:51:09'),
(30, 5, '', 'moa_aoa', 0, '2025-05-23 01:51:09'),
(31, 5, '', 'partner_proof', 0, '2025-05-23 01:51:09'),
(32, 5, '', 'address_proof', 0, '2025-05-23 01:51:09'),
(33, 5, '', 'bank_document', 0, '2025-05-23 01:51:09'),
(34, 6, '', 'coi_llp', 0, '2025-05-24 09:02:18'),
(35, 6, '', 'pan_company', 0, '2025-05-24 09:02:18'),
(36, 6, '', 'gst_certificate', 0, '2025-05-24 09:02:18'),
(37, 6, '', 'moa_aoa', 0, '2025-05-24 09:02:18'),
(38, 6, '', 'partner_proof', 0, '2025-05-24 09:02:18'),
(39, 6, '', 'address_proof', 0, '2025-05-24 09:02:18'),
(40, 6, '', 'bank_document', 0, '2025-05-24 09:02:18'),
(41, 7, '', 'coi_llp', 0, '2025-06-02 02:32:50'),
(42, 7, '', 'pan_company', 0, '2025-06-02 02:32:50'),
(43, 7, '', 'gst_certificate', 0, '2025-06-02 02:32:50'),
(44, 7, '', 'moa_aoa', 0, '2025-06-02 02:32:50'),
(45, 7, '', 'partner_proof', 0, '2025-06-02 02:32:50'),
(46, 7, '', 'address_proof', 0, '2025-06-02 02:32:50'),
(47, 7, '', 'bank_document', 0, '2025-06-02 02:32:50');

-- --------------------------------------------------------

--
-- Table structure for table `masters_partner_plans`
--

CREATE TABLE `masters_partner_plans` (
  `id` int(11) NOT NULL,
  `plan_name` varchar(250) DEFAULT NULL,
  `pricing` float(10,2) DEFAULT NULL,
  `is_active` int(5) DEFAULT 1,
  `added_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masters_partner_plans`
--

INSERT INTO `masters_partner_plans` (`id`, `plan_name`, `pricing`, `is_active`, `added_date`) VALUES
(1, 'Business Consultant', 0.00, 1, '2024-12-29 21:24:00'),
(2, 'Registered Partner', 0.00, 1, '2024-12-29 21:24:00'),
(3, 'Certified Partner', 0.00, 1, '2024-12-29 21:24:00'),
(4, 'Silver Partner', 0.00, 1, '2024-12-29 21:24:00'),
(5, 'Gold Partner', 0.00, 1, '2024-12-29 21:24:00'),
(6, 'Platinum Partner', 0.00, 1, '2024-12-29 21:24:00');

-- --------------------------------------------------------

--
-- Table structure for table `masters_partner_plans_features`
--

CREATE TABLE `masters_partner_plans_features` (
  `id` int(25) NOT NULL,
  `plan_idfk` int(25) NOT NULL DEFAULT 0,
  `plan_param` varchar(200) DEFAULT NULL,
  `plan_description` varchar(200) DEFAULT NULL,
  `is_active` int(5) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `masters_products_lists`
--

CREATE TABLE `masters_products_lists` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL DEFAULT '0',
  `brand_name` varchar(100) NOT NULL DEFAULT '0',
  `model_name` varchar(100) NOT NULL DEFAULT '0',
  `serial_no` varchar(100) NOT NULL DEFAULT '0',
  `product_description` varchar(500) NOT NULL DEFAULT '0',
  `is_active` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masters_products_lists`
--

INSERT INTO `masters_products_lists` (`id`, `product_name`, `brand_name`, `model_name`, `serial_no`, `product_description`, `is_active`) VALUES
(1, 'Laptop', '0', '0', '0', '0', 1),
(2, 'Desktop', '0', '0', '0', '0', 1),
(3, 'Router', '0', '0', '0', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `masters_service_sub_types`
--

CREATE TABLE `masters_service_sub_types` (
  `id` int(11) NOT NULL,
  `service_type` varchar(100) NOT NULL,
  `sub_type` varchar(100) NOT NULL,
  `is_active` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masters_service_sub_types`
--

INSERT INTO `masters_service_sub_types` (`id`, `service_type`, `sub_type`, `is_active`) VALUES
(1, 'Technical Service Partners', 'Onsite Service Providers', 1),
(2, 'Technical Service Partners', 'Remote Support Technicians', 1),
(3, 'Technical Service Partners', 'Specialized Service Technicians', 1),
(4, 'Corporate Training Partners', 'Technical Workforce Trainers', 1),
(5, 'Corporate Training Partners', 'Business Development Trainers', 1),
(6, 'Corporate Training Partners', 'Technology Update Specialists', 1),
(7, 'Hardware Inventory Partners', 'Stock Management Partners', 1),
(8, 'Hardware Inventory Partners', 'Resale Partners', 1),
(9, 'Hardware Inventory Partners', 'Logistics and Supply Chain Partners', 1),
(10, 'Authorized Service Centers', 'FOCO Model Partners', 1),
(11, 'Authorized Service Centers', 'Training Institutes', 1),
(12, 'IT Solution Resellers', 'Hardware Resellers', 1),
(13, 'IT Solution Resellers', 'Software Resellers', 1),
(14, 'IT Solution Resellers', 'Subscription and Licensing Resellers', 1),
(15, 'Network Security Partners', 'Firewall and Antivirus Providers', 1),
(16, 'Network Security Partners', 'Ethical Hacking Consultants', 1),
(17, 'Network Security Partners', 'Data Privacy and Compliance Experts', 1),
(18, 'Cloud Service Partners', 'Cloud Storage Providers', 1),
(19, 'Cloud Service Partners', 'SaaS Integration Experts', 1),
(20, 'Cloud Service Partners', 'Hybrid Cloud Deployment Specialists', 1),
(21, 'Hybrid Deployment Partners', 'Infrastructure Setup Providers', 1),
(22, 'Hybrid Deployment Partners', 'Migration Partners', 1),
(23, 'Hybrid Deployment Partners', 'Support and Maintenance Providers', 1),
(24, 'OEM Warranty and AMC Service Partners', 'Authorized Service Centers', 1),
(25, 'OEM Warranty and AMC Service Partners', 'Third-Party Warranty Providers', 1),
(26, 'OEM Warranty and AMC Service Partners', 'Hardware Health Check Specialists', 1),
(27, 'Skill Development Partners', 'IT Training Institutes', 1),
(28, 'Skill Development Partners', 'Soft Skills Trainers', 1),
(29, 'Skill Development Partners', 'Vocational Training Providers', 1),
(30, 'Software and Tool Providers', 'Productivity Tool Developers', 1),
(31, 'Software and Tool Providers', 'Security Tool Vendors', 1),
(32, 'Software and Tool Providers', 'Development Tool Suppliers', 1),
(33, 'Customer Support and Helpdesk Partners', 'Call Center Support Providers', 1),
(34, 'Customer Support and Helpdesk Partners', 'Ticket Management System Providers', 1),
(35, 'Customer Support and Helpdesk Partners', 'Feedback and Quality Assurance Partners', 1),
(36, 'Digital Marketing and Outreach Partners', 'SEO and Content Marketing Specialists', 1),
(37, 'Digital Marketing and Outreach Partners', 'Social Media Management Firms', 1),
(38, 'Digital Marketing and Outreach Partners', 'Branding and Graphic Design Agencies', 1),
(39, 'B2B and Enterprise Partners', 'Large Enterprise IT Vendors', 1),
(40, 'B2B and Enterprise Partners', 'Small Business IT Consultants', 1),
(41, 'B2B and Enterprise Partners', 'System Integrators', 1),
(42, 'Educational and Training Institutes', 'Technical Colleges', 1),
(43, 'Educational and Training Institutes', 'Professional Certification Bodies', 1),
(44, 'Educational and Training Institutes', 'E-Learning Platforms', 1),
(45, 'Independant IT Professionals & Startups', 'Independent Freelancers & Startups', 1),
(46, 'Independant IT Professionals & Startups', 'Small-Scale IT Shops', 1),
(47, 'Independant IT Professionals & Startups', 'Gig Economy Professionals', 1),
(48, 'Data Center Setup Partners', 'Onsite Data Center Installers', 1),
(49, 'Data Center Setup Partners', 'Managed Data Center Operators', 1),
(50, 'Data Center Setup Partners', 'Cloud and On-Premises Integration Experts', 1);

-- --------------------------------------------------------

--
-- Table structure for table `masters_service_ticket`
--

CREATE TABLE `masters_service_ticket` (
  `id` int(25) NOT NULL,
  `ticket_no` varchar(100) NOT NULL DEFAULT '0',
  `customer_idfk` int(25) NOT NULL DEFAULT 0,
  `partner_idfk` int(25) NOT NULL DEFAULT 0,
  `technician_idfk` int(25) NOT NULL DEFAULT 0,
  `complaint_sdate` datetime NOT NULL,
  `complaint_edate` datetime NOT NULL,
  `hold_sdate` datetime NOT NULL,
  `hold_edate` datetime NOT NULL,
  `total_amount` float(10,2) DEFAULT NULL,
  `cgst_percent` float(10,2) DEFAULT NULL,
  `cgst_amount` float(10,2) DEFAULT NULL,
  `sgst_percent` float(10,2) DEFAULT NULL,
  `sgst_amount` float(10,2) DEFAULT NULL,
  `igst_percent` float(10,2) DEFAULT NULL,
  `igst_amount` float(10,2) DEFAULT NULL,
  `final_amount` float(10,2) DEFAULT NULL,
  `complaint_subject` varchar(200) DEFAULT NULL,
  `complaint_text` varchar(500) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL COMMENT 'New,Pending,Completed,Closed,Hold,Cancelled',
  `added_by` int(25) DEFAULT NULL,
  `added_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `masters_service_ticket_comments`
--

CREATE TABLE `masters_service_ticket_comments` (
  `id` int(25) NOT NULL,
  `ticket_idfk` int(25) NOT NULL DEFAULT 0,
  `user_id` int(25) NOT NULL DEFAULT 0,
  `ticket_comments` text NOT NULL,
  `added_by` int(25) NOT NULL DEFAULT 0,
  `added_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `masters_service_ticket_documents`
--

CREATE TABLE `masters_service_ticket_documents` (
  `id` int(11) NOT NULL,
  `ticket_idfk` int(11) NOT NULL DEFAULT 0,
  `document_name` varchar(100) NOT NULL DEFAULT '0',
  `added_by` int(11) NOT NULL DEFAULT 0,
  `added_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `masters_service_ticket_parts_order`
--

CREATE TABLE `masters_service_ticket_parts_order` (
  `id` int(11) NOT NULL,
  `ticket_idfk` int(25) NOT NULL DEFAULT 0,
  `part_name` varchar(50) NOT NULL DEFAULT '0',
  `part_cost` float(10,2) NOT NULL DEFAULT 0.00,
  `shipping_amount` float(10,2) NOT NULL DEFAULT 0.00,
  `cgst_percent` float(10,2) DEFAULT NULL,
  `cgst_amount` float(10,2) DEFAULT NULL,
  `sgst_percent` float(10,2) DEFAULT NULL,
  `sgst_amount` float(10,2) DEFAULT NULL,
  `igst_percent` float(10,2) DEFAULT NULL,
  `igst_amount` float(10,2) DEFAULT NULL,
  `final_amount` float(10,2) NOT NULL DEFAULT 0.00,
  `added_by` int(11) DEFAULT NULL,
  `added_date` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `masters_service_ticket_technician`
--

CREATE TABLE `masters_service_ticket_technician` (
  `id` int(11) NOT NULL,
  `partner_idfk` int(11) NOT NULL DEFAULT 0,
  `technician_name` varchar(100) NOT NULL DEFAULT '0',
  `technician_address` varchar(500) NOT NULL DEFAULT '0',
  `service_zipcodes` text NOT NULL,
  `phone_no` varchar(50) NOT NULL DEFAULT '',
  `alt_phone_no` varchar(50) NOT NULL DEFAULT '',
  `email_id` varchar(50) NOT NULL DEFAULT '',
  `is_active` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `masters_service_types`
--

CREATE TABLE `masters_service_types` (
  `id` int(11) NOT NULL,
  `service_type` varchar(100) NOT NULL,
  `is_active` int(5) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masters_service_types`
--

INSERT INTO `masters_service_types` (`id`, `service_type`, `is_active`) VALUES
(1, 'Technical Service Partners', 1),
(2, 'Corporate Training Partners', 1),
(3, 'Hardware Inventory Partners', 1),
(4, 'Authorized Service Centers', 1),
(5, 'IT Solution Resellers', 1),
(6, 'Network Security Partners', 1),
(7, 'Cloud Service Partners', 1),
(8, 'Hybrid Deployment Partners', 1),
(9, 'OEM Warranty and AMC Service Partners', 1),
(10, 'Skill Development Partners', 1),
(11, 'Software and Tool Providers', 1),
(12, 'Customer Support and Helpdesk Partners', 1),
(13, 'Digital Marketing and Outreach Partners', 1),
(14, 'B2B and Enterprise Partners', 1),
(15, 'Educational and Training Institutes', 1),
(16, 'Independant IT Professionals & Startups', 1),
(17, 'Data Center Setup Partners', 1);

-- --------------------------------------------------------

--
-- Table structure for table `masters_users`
--

CREATE TABLE `masters_users` (
  `uid` int(25) NOT NULL,
  `firstname` varchar(50) NOT NULL DEFAULT '0',
  `lastname` varchar(50) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0',
  `username` varchar(50) NOT NULL DEFAULT '0',
  `pwd` varchar(500) NOT NULL DEFAULT '0',
  `temp_pwd` varchar(500) NOT NULL DEFAULT '0',
  `phone_no` varchar(50) NOT NULL DEFAULT '0',
  `alt_phone_no` varchar(50) NOT NULL,
  `address1` varchar(250) NOT NULL,
  `address2` varchar(250) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `user_type` int(50) DEFAULT NULL,
  `partner_idfk` int(50) DEFAULT NULL,
  `is_active` int(3) DEFAULT 0,
  `added_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masters_users`
--

INSERT INTO `masters_users` (`uid`, `firstname`, `lastname`, `email`, `username`, `pwd`, `temp_pwd`, `phone_no`, `alt_phone_no`, `address1`, `address2`, `city`, `state`, `country`, `zipcode`, `user_type`, `partner_idfk`, `is_active`, `added_date`) VALUES
(1, 'Yash', 'Karwa', 'yash.karwa@infotroop.co.in', 'yash.karwa@infotroop.co.in', '$2y$10$vNjyQnVhGkxLPvCJGLC65eakn3.Hkhi3cCRxkqF9AGpn7QF8BgkCK', '', '9130274244', '', 'Pune', '', 'Pune', 'Maharashtra', 'India', '415523', 3, 22, 1, '2024-11-22 16:10:26'),
(2, 'YashC', 'KarwaC', 'yash.karwaC@infotroop.co.in', 'yash.karwaC@infotroop.co.in', '$2y$10$vNjyQnVhGkxLPvCJGLC65eakn3.Hkhi3cCRxkqF9AGpn7QF8BgkCK', '', '9130274244', '', 'Pune', '', 'Pune', 'Maharashtra', 'India', '415523', 5, NULL, 1, '2024-11-22 16:10:26'),
(3, 'YashIA', 'KarwaIA', 'yash.karwaIA@infotroop.co.in', 'yash.karwaIA@infotroop.co.in', '$2y$10$vNjyQnVhGkxLPvCJGLC65eakn3.Hkhi3cCRxkqF9AGpn7QF8BgkCK', '', '9130274244', '', 'Pune', '', 'Pune', 'Maharashtra', 'India', '415523', 2, 0, 1, '2024-11-22 16:10:26'),
(4, '', '', 'yashkarwa@gmail.com12', 'yashkarwa@gmail.com12', '$2y$10$pn2ZNb7WWNRrmSIkoRIwv.mGTBtQvZxChItj/p.7G.5n11tmhTqdu', '', '9201920190', '', '', '', '', '', '', '', 3, NULL, 1, '2024-12-28 09:19:01'),
(5, 'qw', 'ew', 'yashkarwa@gmail.com', 'yashkarwa@gmail.com', '$2y$10$ZAp.Bu.pj.lKxbi9W4Jctu1vYCAMrK4boyF92w0joPhJYcxKkoq7i', '', '9201920190', '', '', '', '', '', '', '', 3, NULL, 1, '2024-12-30 04:53:36'),
(6, 'qw', 'ew', 'yashkarwa@gmail.com1', 'yashkarwa@gmail.com1', '', '0a3b8602c37336e619040f1eb51c08de', '9201920190', '', '', '', '', '', '', '', 3, NULL, 1, '2024-12-30 04:53:42'),
(7, '', '', 'nanasaheb.kale@infotroop.co.in', 'nanasaheb.kale@infotroop.co.in', '', 'dff6adfdf2bcedaf27f4bb1bd55e440d', '08975632217', '', '', '', '', '', '', '', 3, 25, 1, '2025-02-20 07:20:47'),
(8, 'InfoTroop', 'Admin', 'admin@infotroop.co.in', 'admin@infotroop.co.in', '$2y$10$tFXq8srJu88PBV4XUgUDKO9PDR9TPkR5Fl2EZx7jhd26NHktf/Q12', '', '8975632217', '', 'Pune', '', 'Pune', 'Maharashtra', 'India', '415523', 2, 0, 1, '2025-04-28 17:10:26');

-- --------------------------------------------------------

--
-- Table structure for table `masters_user_type`
--

CREATE TABLE `masters_user_type` (
  `id` int(11) NOT NULL,
  `type_name` varchar(50) NOT NULL DEFAULT '0',
  `is_active` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masters_user_type`
--

INSERT INTO `masters_user_type` (`id`, `type_name`, `is_active`) VALUES
(1, 'Superadmin', 1),
(2, 'Admin', 1),
(3, 'PartnerAdmin', 1),
(4, 'PartnerUser', 1),
(5, 'Customer', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masters_customer`
--
ALTER TABLE `masters_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masters_customer_product`
--
ALTER TABLE `masters_customer_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masters_faqs_info`
--
ALTER TABLE `masters_faqs_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masters_partners`
--
ALTER TABLE `masters_partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masters_partner_documents`
--
ALTER TABLE `masters_partner_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masters_partner_plans`
--
ALTER TABLE `masters_partner_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masters_partner_plans_features`
--
ALTER TABLE `masters_partner_plans_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masters_products_lists`
--
ALTER TABLE `masters_products_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masters_service_sub_types`
--
ALTER TABLE `masters_service_sub_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masters_service_ticket`
--
ALTER TABLE `masters_service_ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masters_service_ticket_comments`
--
ALTER TABLE `masters_service_ticket_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masters_service_ticket_documents`
--
ALTER TABLE `masters_service_ticket_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masters_service_ticket_parts_order`
--
ALTER TABLE `masters_service_ticket_parts_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masters_service_ticket_technician`
--
ALTER TABLE `masters_service_ticket_technician`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masters_service_types`
--
ALTER TABLE `masters_service_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masters_users`
--
ALTER TABLE `masters_users`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `masters_user_type`
--
ALTER TABLE `masters_user_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `masters_customer`
--
ALTER TABLE `masters_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `masters_customer_product`
--
ALTER TABLE `masters_customer_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `masters_faqs_info`
--
ALTER TABLE `masters_faqs_info`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `masters_partners`
--
ALTER TABLE `masters_partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `masters_partner_documents`
--
ALTER TABLE `masters_partner_documents`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `masters_partner_plans`
--
ALTER TABLE `masters_partner_plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `masters_partner_plans_features`
--
ALTER TABLE `masters_partner_plans_features`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `masters_products_lists`
--
ALTER TABLE `masters_products_lists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `masters_service_sub_types`
--
ALTER TABLE `masters_service_sub_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `masters_service_ticket`
--
ALTER TABLE `masters_service_ticket`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `masters_service_ticket_comments`
--
ALTER TABLE `masters_service_ticket_comments`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `masters_service_ticket_documents`
--
ALTER TABLE `masters_service_ticket_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `masters_service_ticket_parts_order`
--
ALTER TABLE `masters_service_ticket_parts_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `masters_service_ticket_technician`
--
ALTER TABLE `masters_service_ticket_technician`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `masters_service_types`
--
ALTER TABLE `masters_service_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `masters_users`
--
ALTER TABLE `masters_users`
  MODIFY `uid` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `masters_user_type`
--
ALTER TABLE `masters_user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

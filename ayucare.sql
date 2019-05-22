-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2019 at 09:15 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ayucare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `uname` int(11) NOT NULL,
  `upass` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `eligiblity` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `sylabus` varchar(4000) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `active` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `eligiblity`, `description`, `sylabus`, `duration`, `active`) VALUES
(12, 'CCPAT CERTIFICATE COURSE IN PRODUCT MALONE, AESTHETIC & TRICHOLOGY', 'MBBS / BAMS / BHMS / BDS . from registered institute', '7 days hands-on practical session with all required modules\r\nRS 35000/- only', '', '6 months theory with 7 days practical', 1),
(13, ' CCPAT CERTIFICATE COURSE IN PRODUCT MALONE, AESTHETIC & TRICHOLOGY', 'MBBS / BAMS / BHMS / BDS . from registered institute', '', 'Session-1:-  product making \r\n1)	 Introduction of Ayurvedic product making & importance of Ayurvedic product making in daily medical practice.\r\n2)	How to select proper raw materials for product making.\r\n3)	PRODUCTS :\r\na)	Shampoo & Body wash : Herbal Anti hair loss, Antidandruff & various other types of shampoo making with body wash & shower gel making.\r\nb)	Soap & Baby body Butters : All types of herbal soap according to skin types & baby body butters making.\r\nc)	Body lotion & skin creams : Ayurvedic body lotion, various facial creams & moisturizer making. \r\nd)	Beard oil & beard wax : Beard oil for beard growth & beard wax for styling & nourishment of beard.\r\ne)	Lip balm & foot care cream : All types of lip balm for lip softening & foot care cream. \r\nf)	Anti Hair fall hair oils & Anti dandruff oil making.\r\ng)	Hair & face gel : Making of all types of face & hair gel. \r\n\r\n\r\n\r\nSession-2:-  SKIN CARE & COSMETOLOGY \r\n1)	 Introduction of medical cosmetology.\r\n2)	Skin anatomy & physiology, skin examination, analysis & diagnosing an aesthetic problem.\r\n3)	Skin care at clinic & homecare, use of moisturizers & sun-creams. \r\n4)	Skin lesions & skin types with common cosmetic disorders.\r\n5)	Skin peelings : Superficial peels, combination peels, classification of peels, peels characteristics, understanding of different peels, patient evaluation & selection, Indication/Precautions, Advanced peel. \r\n6)	Anti ageing : Overview of ageing process, Biological theories of ageing, causes of ageing, skin change in ageing, photo ageing & their prevention. Prevention of premature ageing, rejuvenation & treatment options (Vampire face lift, face lift with radio frequency & cupping).\r\n7)	Pigmentation : Approach to a patient with pigmentation disorder, classification of pigmentary disorders, biology of melanocyteâ€™s, synthesis of melanin, hyper pigmentation, melasma, PIH & treatment.\r\n8)	Acne Management : Acne vulgaris physiology, Approach to a patient with acne & pimples & their management. Types of acne scars & their management, acne spot management with different medical procedures. \r\n9)	Under-eye dark circles & their management. \r\nSession- 3 :-  HAIR CARE & MEDICAL TRICHOLOGY\r\n1)	Introduction of medical Trichology with hair analysis.\r\n2)	Anatomy & physiology of hair & various medical conditions & diseases of hairs & scalp. \r\n3)	Hair fall Management : Approach to patients with hair fall, patient counseling & hair fall management procedures. \r\n4)	PRP (Platelet Rich Plasma) Therapy : Use of PRP, patient selection, counseling, PRP extraction, PRP procedure, Indication/precautions & after care.\r\n5)	Mesotherapy : Basics of Mesotherapy techniques, Pt selection & indication with meso procedures.   \r\n6)	Dandruff Management : Dandruff causes, types & management. \r\n\r\n\r\nSession- 4:-  AESTHETIC DEVICES, VARIOUS \r\n                        THERaPY   &  LASERS \r\n\r\n1)	Micro Derma Abrasion \r\n2)	Derma rollers & Derma pen \r\n3)	RF (Radio Frequency)\r\n4)	Dermal Threads\r\n5)	Lasers : IPL (Intense Pulsed Light), CO2 & Diode lasers\r\n6)	Introduction of lasers, Types of lasers, side effects & complications, Recommendations, Advanced lasers & their indications, laser hair & tattoo removal, laser safety & their complications, management of complications of lasers. \r\n7)	Light therapy for hair growth\r\n8)	Aroma therapy\r\n9)	Cupping therapy & Hijama. \r\n\r\n\r\n\r\n\r\n Session- 5:-  IMPORTANT CONSIDERATIONS\r\n \r\n1)	How to market your practice.\r\n2)	How to build your cosmetic clients.\r\n3)	Medico-legal aspects of cosmetic dermatology ethics.\r\n4)	How to set up a Medical Cosmetic Clinic. \r\n\r\n Session-  6:-  CERTIFICATE & KIT DISTRIBUTION & \r\n                      GROUP DISCUSSION\r\n\r\nï‚§	After completion of all theory & practical sessions, there will be an examination held over different medical cosmetic procedures (Theory & Practical) of 100 marks each.Theory exam will be conducted online. The practical examination will be conducted batch-wise.  After passing the examination, the students will get the ', ' 6 months theory with 7 days practical', 0),
(14, 'CCPAT CERTIFICATE COURSE IN PRODUCT MALONE, AESTHETIC & TRICHOLOGY', 'MBBS / BAMS / BHMS / BDS . from registered institute', 'Rs. 35,000/- only.', 'Session-1:-  product making <br>\r\n1)	 Introduction of Ayurvedic product making & importance of Ayurvedic product making in daily medical practice.<br>\r\n2)	How to select proper raw materials for product making.<br>\r\n3)	PRODUCTS :<br>\r\na)	Shampoo & Body wash : Herbal Anti hair loss, Antidandruff & various other types of shampoo making with body wash & shower gel making.<br>\r\nb)	Soap & Baby body Butters : All types of herbal soap according to skin types & baby body butters making.<br>\r\nc)	Body lotion & skin creams : Ayurvedic body lotion, various facial creams & moisturizer making. <br>\r\nd)	Beard oil & beard wax : Beard oil for beard growth & beard wax for styling & nourishment of beard.<br>\r\ne)	Lip balm & foot care cream : All types of lip balm for lip softening & foot care cream. <br>\r\n\r\nf)	Anti Hair fall hair oils & Anti dandruff oil making.<br>\r\ng)	Hair & face gel : Making of all types of face & hair gel. <br>\r\n\r\nSession-2:-  SKIN CARE & COSMETOLOGY <br>\r\n1)	 Introduction of medical cosmetology.<br>\r\n2)	Skin anatomy & physiology, skin examination, analysis & diagnosing an aesthetic problem.<br>\r\n3)	Skin care at clinic & homecare, use of moisturizers & sun-creams. <br>\r\n4)	Skin lesions & skin types with common cosmetic disorders.<br>\r\n5)	Skin peelings : Superficial peels, combination peels, classification of peels, peels characteristics, understanding of different peels, patient evaluation & selection, Indication/Precautions, Advanced peel.<br> \r\n6)	Anti ageing : Overview of ageing process, Biological theories of ageing, causes of ageing, skin change in ageing, photo ageing & their prevention. Prevention of premature ageing, rejuvenation & treatment options (Vampire face lift, face lift with radio frequency & cupping).<br>\r\n7)	Pigmentation : Approach to a patient with pigmentation disorder, classification of pigmentary disorders, biology of melanocyteâ€™s, synthesis of melanin, hyper pigmentation, melasma, PIH & treatment.<br>\r\n8)	Acne Management : Acne vulgaris physiology, Approach to a patient with acne & pimples & their management. Types of acne scars & their management, acne spot management with different medical procedures. <br>\r\n9)	Under-eye dark circles & their management. <br>\r\n\r\nSession- 3 :-  HAIR CARE & MEDICAL TRICHOLOGY<br>\r\n1)	Introduction of medical Trichology with hair analysis.<br>\r\n2)	Anatomy & physiology of hair & various medical conditions & diseases of hairs & scalp. <br>\r\n3)	Hair fall Management : Approach to patients with hair fall, patient counseling & hair fall management procedures. <br>\r\n4)	PRP (Platelet Rich Plasma) Therapy : Use of PRP, patient selection, counseling, PRP extraction, PRP procedure, Indication/precautions & after care.<br>\r\n5)	Mesotherapy : Basics of Mesotherapy techniques, Pt selection & indication with meso procedures.   <br>\r\n6)	Dandruff Management : Dandruff causes, types & management. <br>\r\n\r\nSession- 4:-  AESTHETIC DEVICES, VARIOUS \r\n                        THERaPY   &  LASERS <br>\r\n\r\n1)	Micro Derma Abrasion <br>\r\n2)	Derma rollers & Derma pen <br> \r\n3)	RF (Radio Frequency)<br>\r\n4)	Dermal Threads<br>\r\n5)	Lasers : IPL (Intense Pulsed Light), CO2 & Diode lasers<br>\r\n6)	Introduction of lasers, Types of lasers, side effects & complications, Recommendations, Advanced lasers & their indications, laser hair & tattoo removal, laser safety & their complications, management of complications of lasers. <br>\r\n7)	Light therapy for hair growth<br>\r\n8)	Aroma therapy<br>\r\n9)	Cupping therapy & Hijama.<br> \r\n\r\n \r\n Session- 5:-  IMPORTANT CONSIDERATIONS<br>\r\n \r\n1)	How to market your practice.<br>\r\n2)	How to build your cosmetic clients<br.\r\n3)	Medico-legal aspects of cosmetic dermatology ethics.<br>\r\n4)	How to set up a Medical Cosmetic Clinic. <br>\r\n\r\n Session-  6:-  CERTIFICATE & KIT DISTRIBUTION & \r\n                      GROUP DISCUSSION<br>\r\n\r\nï‚§	After completion of all theory & practical sessions, there will be an examination held over different medical cosmetic procedures (Theory & Practical)', ' 6 months theory with 7 days practical', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `imagePath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `post`, `qualification`, `imagePath`) VALUES
(1, 'Dr Rajni Asudani', 'DIrector: <br> Care , Herbel <br> Skin & Hair clinic & AICT<br>Nagput', 'MD(Ayu) , ICLS (Mumbai)', 'server/images/');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `section`, `path`) VALUES
(4, 'beauty', 'server/images/gallery/2018-07-23-22-30-53-489 - Rashmi Mohite.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `text`, `link`, `active`) VALUES
(1, 'NEW BATCH of (CCPAT) Starting from 23rd Feb 2019', 'book.php', '0'),
(5, 'Niotjitogrnbfj', '', '0'),
(6, 'jknfdghb', '', '0'),
(7, 'hfegkek', '', '0'),
(8, 'lnvbkjfkjn', '', '0'),
(9, 'NEW COURSE DETAILS', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `name`, `path`) VALUES
(8, 'beauty', '../images/gallery/e7910f9b4129.jpg'),
(9, 'name1', 'server/images/gallery/3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `query` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `DOB` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `phone`, `query`, `gender`, `DOB`, `state`, `country`, `address`, `course`) VALUES
(9, 'Deepraj Chouhan', 'deeprajchouhan761@gmail.com', '8007125096', '', 'male', '1998-03-07', 'Maharashtra', 'India', 'jhgfvuesdfhguoierhguih', 'CCPATS CERTIFICATE COURSE IN PRODUCT MALONE, AESTHETIC & TRICHOLOGY');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

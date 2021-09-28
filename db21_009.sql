-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 28, 2021 at 11:42 AM
-- Server version: 5.7.33-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db21_009`
--

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE `Category` (
  `CategoryID` varchar(3) CHARACTER SET tis620 NOT NULL,
  `Name` varchar(20) CHARACTER SET tis620 NOT NULL,
  `detail` varchar(20) CHARACTER SET tis620 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Category`
--

INSERT INTO `Category` (`CategoryID`, `Name`, `detail`) VALUES
('01', 'stationery', ''),
('02', 'พัดลมมือถือ', '');

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `CID` varchar(3) CHARACTER SET tis620 NOT NULL,
  `CName` varchar(20) CHARACTER SET tis620 NOT NULL,
  `Address` varchar(20) CHARACTER SET tis620 NOT NULL,
  `Tel` varchar(10) CHARACTER SET tis620 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`CID`, `CName`, `Address`, `Tel`) VALUES
('C01', 'คุณแก้ว', 'กำแพงแสน', '081321654'),
('C02', 'คุณอุดร', 'บางเลน', '0825689865'),
('C03', 'คุณพิพัฒน์', 'ดอนตูม', '087996554'),
('C04', 'คุณนำ้ใส', 'สามพราน', '0855888855');

-- --------------------------------------------------------

--
-- Table structure for table `Delivery`
--

CREATE TABLE `Delivery` (
  `PCID` varchar(5) CHARACTER SET tis620 NOT NULL,
  `status` varchar(10) CHARACTER SET tis620 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Delivery`
--

INSERT INTO `Delivery` (`PCID`, `status`) VALUES
('11005', 'finish'),
('11006', 'finish'),
('11009', 'not yet');

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE `Orders` (
  `OID` int(5) NOT NULL,
  `date` date NOT NULL,
  `StockID` varchar(10) CHARACTER SET tis620 NOT NULL,
  `จำนวนที่สั่ง` int(5) NOT NULL,
  `order_status` varchar(10) CHARACTER SET tis620 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Orders`
--

INSERT INTO `Orders` (`OID`, `date`, `StockID`, `จำนวนที่สั่ง`, `order_status`) VALUES
(1, '2021-07-08', '001GR-B', 500, 'done'),
(2, '2021-07-08', '001B-B', 1000, 'done'),
(3, '2021-07-08', '003GR', 700, 'done'),
(4, '2021-07-08', '004OR', 300, 'done'),
(5, '2021-07-08', '005BL', 1000, 'done'),
(6, '2021-07-09', '001B-B', 600, 'done'),
(7, '2021-07-09', '003GR', 300, 'done'),
(8, '2021-07-09', '004R', 1000, 'done'),
(9, '2021-07-10', '001B-B', 400, 'done'),
(10, '2021-07-10', '002B', 500, 'done'),
(11, '2021-07-10', '005BL', 500, 'done'),
(12, '2021-07-10', '005R', 1000, 'done'),
(13, '2021-08-05', '004R', 1000, 'done'),
(14, '2021-08-05', '004OR', 1200, 'done'),
(15, '2021-08-05', '006BL', 800, 'waiting');

-- --------------------------------------------------------

--
-- Table structure for table `Payment`
--

CREATE TABLE `Payment` (
  `PCID` varchar(5) CHARACTER SET tis620 NOT NULL,
  `ชำระเงินครั้งที่` varchar(5) CHARACTER SET tis620 NOT NULL,
  `date` date NOT NULL,
  `percentจ่าย` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Payment`
--

INSERT INTO `Payment` (`PCID`, `ชำระเงินครั้งที่`, `date`, `percentจ่าย`) VALUES
('11005', '1', '2021-08-22', 40),
('11005', '2', '2021-08-30', 60),
('11006', '1', '2021-08-25', 40);

-- --------------------------------------------------------

--
-- Table structure for table `Payment_Terms`
--

CREATE TABLE `Payment_Terms` (
  `Terms` varchar(10) CHARACTER SET tis620 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Payment_Terms`
--

INSERT INTO `Payment_Terms` (`Terms`) VALUES
('credit'),
('deposit');

-- --------------------------------------------------------

--
-- Table structure for table `Price_detail`
--

CREATE TABLE `Price_detail` (
  `PriceDetailID` varchar(3) CHARACTER SET tis620 NOT NULL,
  `PRID` varchar(5) CHARACTER SET tis620 NOT NULL,
  `ColorID` varchar(3) CHARACTER SET tis620 NOT NULL,
  `จำนวนเริ่มต้น` int(5) NOT NULL,
  `จำนวนสุดท้าย` int(5) NOT NULL,
  `price` float NOT NULL,
  `สกรีนเพิ่มสีละ` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Price_detail`
--

INSERT INTO `Price_detail` (`PriceDetailID`, `PRID`, `ColorID`, `จำนวนเริ่มต้น`, `จำนวนสุดท้าย`, `price`, `สกรีนเพิ่มสีละ`) VALUES
('001', 'PR001', '001', 0, 50, 150, 18),
('002', 'PR001', '001', 51, 100, 120, 15),
('003', 'PR001', '001', 101, 200, 98, 12),
('004', 'PR001', '001', 201, 400, 90, 10),
('005', 'PR001', '001', 401, 600, 86, 9),
('006', 'PR001', '001', 601, 800, 83, 8),
('007', 'PR001', '001', 801, 10000, 81, 7),
('008', 'PR001', '001', 0, 50, 150, 18),
('009', 'PR001', '002', 51, 100, 120, 15),
('010', 'PR001', '002', 101, 200, 98, 12),
('011', 'PR001', '002', 201, 400, 90, 10),
('012', 'PR001', '002', 401, 600, 86, 9),
('013', 'PR001', '002', 601, 800, 83, 8),
('014', 'PR001', '002', 801, 1000, 81, 7),
('201', 'PR002', '003', 0, 100, 69, 9),
('202', 'PR002', '003', 101, 200, 63, 7),
('203', 'PR002', '003', 201, 300, 56, 6),
('204', 'PR002', '003', 301, 500, 50, 5.5),
('205', 'PR002', '003', 501, 800, 49, 5),
('206', 'PR002', '003', 801, 10000, 48, 4.5),
('301', 'PR003', '008', 0, 100, 57, 9),
('302', 'PR003', '008', 101, 200, 50, 8),
('303', 'PR003', '008', 201, 300, 45, 7.5),
('304', 'PR003', '008', 301, 500, 39, 6),
('305', 'PR003', '008', 501, 800, 37, 5),
('306', 'PR003', '008', 801, 10000, 34, 4.5),
('401', 'PR004', '005', 0, 50, 30, 9),
('402', 'PR004', '005', 51, 100, 20, 8),
('403', 'PR004', '005', 101, 200, 18, 7),
('404', 'PR004', '005', 201, 300, 15, 7.5),
('405', 'PR004', '005', 301, 500, 12, 6),
('406', 'PR004', '005', 501, 800, 10, 5),
('407', 'PR004', '005', 801, 10000, 8, 4),
('408', 'PR004', '007', 0, 50, 30, 9),
('409', 'PR004', '007', 51, 100, 20, 8),
('410', 'PR004', '007', 101, 200, 18, 7),
('411', 'PR004', '007', 201, 300, 15, 7.5),
('412', 'PR004', '007', 301, 500, 12, 6),
('413', 'PR004', '007', 501, 800, 10, 5),
('414', 'PR004', '007', 801, 1000, 8, 4),
('415', 'PR004', '006', 0, 50, 30, 9),
('416', 'PR004', '006', 51, 100, 20, 8),
('417', 'PR004', '006', 101, 200, 18, 7),
('418', 'PR004', '006', 201, 300, 15, 7.5),
('419', 'PR004', '006', 301, 500, 12, 6),
('420', 'PR004', '006', 501, 800, 10, 5),
('421', 'PR004', '006', 801, 10000, 8, 4),
('501', 'PR005', '004', 0, 50, 80, 20),
('502', 'PR005', '004', 51, 100, 75, 18),
('503', 'PR005', '004', 101, 200, 68, 14),
('504', 'PR005', '004', 201, 500, 64, 12),
('505', 'PR005', '004', 501, 800, 60, 10),
('506', 'PR005', '004', 801, 10000, 58, 9),
('507', 'PR005', '005', 0, 50, 80, 20),
('508', 'PR005', '005', 51, 100, 75, 18),
('509', 'PR005', '005', 101, 200, 68, 14),
('510', 'PR005', '005', 201, 500, 64, 12),
('511', 'PR005', '005', 501, 800, 60, 10),
('512', 'PR005', '005', 801, 10000, 58, 9),
('601', 'PR006', '004', 0, 100, 75, 25),
('602', 'PR006', '004', 101, 300, 70, 22),
('603', 'PR006', '004', 301, 500, 64, 20),
('604', 'PR006', '004', 501, 700, 62, 16),
('605', 'PR006', '004', 701, 800, 55, 15),
('606', 'PR006', '004', 801, 10000, 52, 12),
('607', 'PR006', '006', 0, 100, 75, 25),
('608', 'PR006', '006', 101, 300, 70, 22),
('609', 'PR006', '006', 301, 500, 64, 20),
('610', 'PR006', '006', 501, 700, 62, 16),
('611', 'PR006', '006', 701, 800, 55, 15),
('612', 'PR006', '006', 801, 10000, 52, 12);

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE `Product` (
  `PRID` varchar(5) CHARACTER SET tis620 NOT NULL,
  `Name` varchar(20) CHARACTER SET tis620 NOT NULL,
  `Detail` varchar(100) CHARACTER SET tis620 NOT NULL,
  `CategoryID` varchar(3) CHARACTER SET tis620 NOT NULL,
  `จำนวนขั้นต่ำ` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`PRID`, `Name`, `Detail`, `CategoryID`, `จำนวนขั้นต่ำ`) VALUES
('PR001', 'stationery set', 'Pencil, Pen, Paper, Eraser, Bamboo Ruler, Highlight, Sharpener, Eco Bag', '01', 800),
('PR002', 'memo box', '150 sheets of note paper, 3.5 inch pencil', '01', 600),
('PR003', 'Natural Post it', 'Post it 3x3" and 1x3" 50 sheets', '01', 400),
('PR004', 'Recycle pen', 'Push-pull pen made from recycled paper rolls into rolls. blue ink', '01', 300),
('PR005', 'พัดลมมือถือเด็กอ้วน', 'พัดลมมือถือรูปเด็กอ้วน ขนาดกะทัดรัด', '02', 200),
('PR006', 'พัดลมมือถือcool', 'พัดลมมือถือสีใส ปุ่มเปิดด้านข้าง ', '02', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Production`
--

CREATE TABLE `Production` (
  `PCID` varchar(5) CHARACTER SET tis620 NOT NULL,
  `PID` varchar(3) CHARACTER SET tis620 NOT NULL,
  `Status` varchar(20) CHARACTER SET tis620 NOT NULL,
  `finish date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Production`
--

INSERT INTO `Production` (`PCID`, `PID`, `Status`, `finish date`) VALUES
('11005', '1', 'finish', '2021-08-20'),
('11006', '1', 'finish', '2021-08-22'),
('11009', '1', 'finish', '2021-08-23');

-- --------------------------------------------------------

--
-- Table structure for table `Product_Color`
--

CREATE TABLE `Product_Color` (
  `ColorID` varchar(3) CHARACTER SET tis620 NOT NULL,
  `Color_Name` varchar(11) CHARACTER SET tis620 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Product_Color`
--

INSERT INTO `Product_Color` (`ColorID`, `Color_Name`) VALUES
('001', 'Gray-Brown'),
('002', 'Brown-Brown'),
('003', 'Brown'),
('004', 'Blue'),
('005', 'Red'),
('006', 'Green'),
('007', 'Orange'),
('008', 'Gray');

-- --------------------------------------------------------

--
-- Table structure for table `Purchase_Order`
--

CREATE TABLE `Purchase_Order` (
  `PCID` varchar(5) CHARACTER SET tis620 NOT NULL,
  `deliveryStatus` varchar(10) CHARACTER SET tis620 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Purchase_Order`
--

INSERT INTO `Purchase_Order` (`PCID`, `deliveryStatus`) VALUES
('11005', 'done'),
('11006', 'done'),
('11009', 'no'),
('11010', NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `Q1`
--
CREATE TABLE `Q1` (
`SID` varchar(3)
,`Name` varchar(50)
,`Position` varchar(20)
,`Username` varchar(3)
,`Password` varchar(7)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `Q2`
--
CREATE TABLE `Q2` (
`Position` varchar(20)
,`COUNT(*)` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `Q3`
--
CREATE TABLE `Q3` (
`CID` varchar(3)
,`CName` varchar(20)
,`Address` varchar(20)
,`Tel` varchar(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `Q4`
--
CREATE TABLE `Q4` (
`PRID` varchar(5)
,`Name` varchar(20)
,`PricePerUnit` double
,`TotalPrice` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `Q5`
--
CREATE TABLE `Q5` (
`PRID` varchar(5)
,`Name` varchar(20)
,`PricePerUnit` double
,`TotalPrice` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `Q6`
--
CREATE TABLE `Q6` (
`PRID` varchar(5)
,`Name` varchar(20)
,`CategoryName` varchar(20)
,`Color_Name` varchar(11)
,`จำนวนขั้นต่ำ` int(3)
,`จำนวนครั้งที่สั่ง` bigint(21)
,`จำนวนที่มีรวม` decimal(33,0)
,`จำนวนที่ต้องสั่งเพิ่ม` decimal(34,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `Q7`
--
CREATE TABLE `Q7` (
`PRID` varchar(5)
,`Name` varchar(20)
,`Category` varchar(20)
,`Color` bigint(21)
,`จำนวนรวม` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `Q8`
--
CREATE TABLE `Q8` (
`PRID` varchar(5)
,`Name` varchar(20)
,`Color_Name` varchar(11)
,`จำนวนขั้นต่ำ` int(3)
,`จำนวนที่มีรวม` decimal(33,0)
,`จำนวนที่ต้องสั่งเพิ่ม` decimal(34,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `Q9`
--
CREATE TABLE `Q9` (
`QID` varchar(5)
,`PRID` varchar(5)
,`Color_Name` varchar(11)
,`qty` int(3)
,`PricePerUnit` double
,`TotalPrice` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `Q10`
--
CREATE TABLE `Q10` (
`PRID` varchar(5)
,`Name` varchar(20)
,`Color_Name` varchar(11)
,`จำนวนที่มีในสต็อค` decimal(33,0)
,`จำนวนที่ออกใบเสนอราคา` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `Q11`
--
CREATE TABLE `Q11` (
`QID` varchar(5)
,`date` date
,`CName` varchar(20)
,`totalprice` double
,`totalprice_vat` double
,`จำนวนเงินมัดจำ` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `Q12`
--
CREATE TABLE `Q12` (
`Name` varchar(50)
,`จำนวนใบเสนอราคา` bigint(21)
,`ยอดรวม` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `Q13`
--
CREATE TABLE `Q13` (
`status` varchar(20)
,`COUNT(*)` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `Q14`
--
CREATE TABLE `Q14` (
`QID` varchar(5)
,`date` date
,`status` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `Q15`
--
CREATE TABLE `Q15` (
`QID` varchar(5)
,`lastDate` date
,`status` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `Q16`
--
CREATE TABLE `Q16` (
`QID` varchar(5)
,`ยอดชำระ` double
,`ยอดค้างชำระ` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `Q17`
--
CREATE TABLE `Q17` (
`QID` varchar(5)
,`PRID` varchar(5)
,`Name` varchar(20)
,`Color_Name` varchar(11)
,`จำนวนที่สั่งซื้อ` int(3)
,`จำนวนที่ผลิต` double(17,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `Q18`
--
CREATE TABLE `Q18` (
`PRID` varchar(5)
,`Color_Name` varchar(11)
,`จำนวนคงเหลือ` decimal(33,0)
,`จำนวนที่อยู่ระหว่างการซื้อ` int(5)
,`จำนวนที่รอผลิต` double(17,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `Q19`
--
CREATE TABLE `Q19` (
`PRID` varchar(5)
,`Name` varchar(20)
,`Color_Name` varchar(11)
,`จำนวนที่สั่งเพิ่ม` double(17,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `Q20`
--
CREATE TABLE `Q20` (
`QID` varchar(5)
,`ยอดชำระ` double
,`ยอดค้างชำระ` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `Q21`
--
CREATE TABLE `Q21` (
`PRID` varchar(5)
,`Name` varchar(20)
,`จำนวนที่ผลิต` double(17,0)
,`จำนวนที่จัดส่ง` double(17,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `Q22`
--
CREATE TABLE `Q22` (
`QID` varchar(5)
,`pricevat` double
,`ชำระแล้ว` double
,`ยอดค้างจ่าย` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `Q23`
--
CREATE TABLE `Q23` (
`PRID` varchar(5)
,`Name` varchar(20)
,`SUM( AB.qty)` decimal(32,0)
,`SUM(AB.เผื่อ)` double(17,0)
,`SUM(AB.price)` double
);

-- --------------------------------------------------------

--
-- Table structure for table `Quotation`
--

CREATE TABLE `Quotation` (
  `QID` varchar(5) NOT NULL,
  `date` date NOT NULL,
  `Staff` varchar(3) NOT NULL,
  `customer` varchar(3) NOT NULL,
  `Payment_Type` varchar(10) NOT NULL,
  `detail` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=tis620;

--
-- Dumping data for table `Quotation`
--

INSERT INTO `Quotation` (`QID`, `date`, `Staff`, `customer`, `Payment_Type`, `detail`) VALUES
('11001', '2021-07-11', 'S11', 'C01', 'deposit', 40),
('11002', '2021-07-12', 'S12', 'C02', 'credit', 30),
('11003', '2021-07-13', 'S13', 'C03', 'deposit', 30),
('11004', '2021-07-14', 'S11', 'C04', 'credit', 30),
('11005', '2021-07-15', 'S12', 'C01', 'credit', 30),
('11006', '2021-07-16', 'S13', 'C02', 'deposit', 40),
('11007', '2021-07-17', 'S11', 'C03', 'deposit', 30),
('11008', '2021-07-18', 'S12', 'C04', 'deposit', 40),
('11009', '2021-07-19', 'S13', 'C01', 'credit', 30),
('11010', '2021-07-20', 'S11', 'C02', 'deposit', 50);

-- --------------------------------------------------------

--
-- Table structure for table `Quotation_Detail`
--

CREATE TABLE `Quotation_Detail` (
  `QID` varchar(5) CHARACTER SET tis620 NOT NULL,
  `DetailID` varchar(3) CHARACTER SET tis620 NOT NULL,
  `PRID` varchar(5) CHARACTER SET tis620 NOT NULL,
  `Product_Color` varchar(3) CHARACTER SET tis620 NOT NULL,
  `qty` int(3) NOT NULL,
  `extra_color` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Quotation_Detail`
--

INSERT INTO `Quotation_Detail` (`QID`, `DetailID`, `PRID`, `Product_Color`, `qty`, `extra_color`) VALUES
('11001', '001', 'PR004', '005', 450, 2),
('11002', '001', 'PR004', '007', 580, 1),
('11003', '001', 'PR005', '004', 1200, 2),
('11004', '001', 'PR006', '004', 1500, 1),
('11005', '001', 'PR004', '005', 500, 2),
('11006', '001', 'PR004', '005', 180, 2),
('11007', '001', 'PR002', '003', 200, 3),
('11008', '001', 'PR003', '008', 600, 1),
('11009', '001', 'PR004', '006', 440, 1),
('11010', '001', 'PR004', '006', 200, 2),
('11005', '002', 'PR004', '007', 800, 2),
('11006', '002', 'PR004', '007', 400, 2),
('11009', '002', 'PR005', '004', 850, 1),
('11010', '002', 'PR004', '005', 670, 1),
('11005', '003', 'PR005', '004', 200, 2),
('11006', '003', 'PR005', '004', 600, 2),
('11010', '003', 'PR006', '004', 900, 2),
('11005', '004', 'PR006', '006', 1500, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Staff`
--

CREATE TABLE `Staff` (
  `SID` varchar(3) CHARACTER SET tis620 NOT NULL,
  `Name` varchar(50) CHARACTER SET tis620 NOT NULL,
  `Position` varchar(20) CHARACTER SET tis620 NOT NULL,
  `Username` varchar(3) CHARACTER SET tis620 NOT NULL,
  `Password` varchar(7) CHARACTER SET tis620 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Staff`
--

INSERT INTO `Staff` (`SID`, `Name`, `Position`, `Username`, `Password`) VALUES
('S11', 'นายสมชาย ', 'ฝ่ายขาย', 'S11', 'S111111'),
('S12', 'นายสมศักดิ์', 'ฝ่ายขาย', 'S12', 'S121111'),
('S13', 'นางสมสมร', 'ฝ่ายขาย', 'S13', 'S131111'),
('S21', 'นางสาวพรศรี', 'ฝ่ายจัดซื้อ', 'S21', 'S211111'),
('S22', 'นางพรพรรณ', 'ฝ่ายจัดซื้อ', 'S22', 'S221111'),
('S23', 'นายยิ่งยง', 'ฝ่ายผลิต', 'S23', 'S231111'),
('S32', 'นายบัวขาว', 'ฝ่ายผลิต', 'S32', 'S321111'),
('S41', 'นายนิมิตร', 'ผู้จัดการ', 'S41', 'S411111'),
('S42', 'นางประนอม', 'ผู้จัดการ', 'S42', 'S421111');

-- --------------------------------------------------------

--
-- Table structure for table `Stock`
--

CREATE TABLE `Stock` (
  `stockID` varchar(10) CHARACTER SET tis620 NOT NULL,
  `PRID` varchar(5) CHARACTER SET tis620 NOT NULL,
  `Product_Color` varchar(3) CHARACTER SET tis620 NOT NULL,
  `remain` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Stock`
--

INSERT INTO `Stock` (`stockID`, `PRID`, `Product_Color`, `remain`) VALUES
('001B-B', 'PR001', '002', 0),
('001GR-B', 'PR001', '001', 0),
('002B', 'PR002', '003', 0),
('003GR', 'PR003', '008', 0),
('004G', 'PR004', '006', 0),
('004OR', 'PR004', '007', 0),
('004R', 'PR004', '005', 0),
('005BL', 'PR005', '004', 0),
('005R', 'PR005', '005', 0),
('006BL', 'PR006', '004', 0),
('006G', 'PR006', '006', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Tracking`
--

CREATE TABLE `Tracking` (
  `TrackingID` varchar(3) CHARACTER SET tis620 NOT NULL,
  `date` date NOT NULL,
  `QID` varchar(5) CHARACTER SET tis620 NOT NULL,
  `status` varchar(20) CHARACTER SET tis620 NOT NULL,
  `cacel_reason` varchar(20) CHARACTER SET tis620 DEFAULT NULL,
  `payment_status` varchar(20) CHARACTER SET tis620 DEFAULT NULL,
  `approved_status` varchar(7) CHARACTER SET tis620 DEFAULT NULL,
  `staff_approved` varchar(3) CHARACTER SET tis620 DEFAULT NULL,
  `date_approved` date DEFAULT NULL,
  `percent` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Tracking`
--

INSERT INTO `Tracking` (`TrackingID`, `date`, `QID`, `status`, `cacel_reason`, `payment_status`, `approved_status`, `staff_approved`, `date_approved`, `percent`) VALUES
('001', '2021-07-27', '11001', 'waiting', NULL, NULL, NULL, NULL, NULL, NULL),
('001', '2021-07-30', '11001', 'cancel', 'ราคาสูง', NULL, NULL, NULL, NULL, NULL),
('001', '2021-07-31', '11010', 'donedeal', NULL, 'done', '', 'S41', '2021-08-03', 0.02),
('002', '2021-07-27', '11002', 'cancel', 'ใช้เวลาผลิตนาน', NULL, NULL, NULL, NULL, NULL),
('002', '2021-07-30', '11003', 'waiting', NULL, NULL, NULL, NULL, NULL, NULL),
('003', '2021-07-27', '11003', 'waiting', NULL, NULL, NULL, NULL, NULL, NULL),
('003', '2021-07-30', '11004', 'donedeal', NULL, 'credit 30 days', 'waiting', NULL, NULL, NULL),
('004', '2021-07-27', '11004', 'waiting', NULL, NULL, NULL, NULL, NULL, NULL),
('004', '2021-07-30', '11010', 'waiting', NULL, NULL, NULL, NULL, NULL, NULL),
('005', '2021-07-27', '11005', 'donedeal', NULL, NULL, 'yes', 'S41', '2021-08-03', 0.01),
('006', '2021-07-27', '11006', 'donedeal', NULL, 'done', 'yes', 'S42', '2021-08-03', 0.01),
('007', '2021-07-27', '11007', 'donedeal', NULL, 'done', 'waiting', NULL, NULL, NULL),
('008', '2021-07-27', '11008', 'donedeal', NULL, 'waiting', NULL, NULL, NULL, NULL),
('009', '2021-07-27', '11009', 'donedeal', NULL, NULL, 'yes', 'S41', '2021-08-03', 0.02),
('010', '2021-07-27', '11010', 'waiting', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure for view `Q1`
--
DROP TABLE IF EXISTS `Q1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`db21_009`@`%` SQL SECURITY DEFINER VIEW `Q1`  AS  select `Staff`.`SID` AS `SID`,`Staff`.`Name` AS `Name`,`Staff`.`Position` AS `Position`,`Staff`.`Username` AS `Username`,`Staff`.`Password` AS `Password` from `Staff` ;

-- --------------------------------------------------------

--
-- Structure for view `Q2`
--
DROP TABLE IF EXISTS `Q2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`db21_009`@`%` SQL SECURITY DEFINER VIEW `Q2`  AS  select `Staff`.`Position` AS `Position`,count(0) AS `COUNT(*)` from `Staff` group by `Staff`.`Position` ;

-- --------------------------------------------------------

--
-- Structure for view `Q3`
--
DROP TABLE IF EXISTS `Q3`;

CREATE ALGORITHM=UNDEFINED DEFINER=`db21_009`@`%` SQL SECURITY DEFINER VIEW `Q3`  AS  select `Customer`.`CID` AS `CID`,`Customer`.`CName` AS `CName`,`Customer`.`Address` AS `Address`,`Customer`.`Tel` AS `Tel` from `Customer` ;

-- --------------------------------------------------------

--
-- Structure for view `Q4`
--
DROP TABLE IF EXISTS `Q4`;

CREATE ALGORITHM=UNDEFINED DEFINER=`db21_009`@`%` SQL SECURITY DEFINER VIEW `Q4`  AS  select distinct `P`.`PRID` AS `PRID`,`P`.`Name` AS `Name`,(`PD`.`price` + (`PD`.`สกรีนเพิ่มสีละ` * 1)) AS `PricePerUnit`,((`PD`.`price` + (`PD`.`สกรีนเพิ่มสีละ` * 1)) * 150) AS `TotalPrice` from (`Price_detail` `PD` join `Product` `P` on((`PD`.`PRID` = `P`.`PRID`))) where ((`P`.`PRID` = 'PR001') and (`PD`.`จำนวนเริ่มต้น` < 150) and (`PD`.`จำนวนสุดท้าย` > 150)) ;

-- --------------------------------------------------------

--
-- Structure for view `Q5`
--
DROP TABLE IF EXISTS `Q5`;

CREATE ALGORITHM=UNDEFINED DEFINER=`db21_009`@`%` SQL SECURITY DEFINER VIEW `Q5`  AS  select distinct `P`.`PRID` AS `PRID`,`P`.`Name` AS `Name`,(`PD`.`price` + (`PD`.`สกรีนเพิ่มสีละ` * 3)) AS `PricePerUnit`,((`PD`.`price` + (`PD`.`สกรีนเพิ่มสีละ` * 3)) * 50) AS `TotalPrice` from (`Price_detail` `PD` join `Product` `P` on((`PD`.`PRID` = `P`.`PRID`))) where ((`PD`.`จำนวนเริ่มต้น` < 50) and (`PD`.`จำนวนสุดท้าย` >= 50)) ;

-- --------------------------------------------------------

--
-- Structure for view `Q6`
--
DROP TABLE IF EXISTS `Q6`;
-- in use(#1046 - No database selected)

-- --------------------------------------------------------

--
-- Structure for view `Q7`
--
DROP TABLE IF EXISTS `Q7`;
-- in use(#1046 - No database selected)

-- --------------------------------------------------------

--
-- Structure for view `Q8`
--
DROP TABLE IF EXISTS `Q8`;
-- in use(#1046 - No database selected)

-- --------------------------------------------------------

--
-- Structure for view `Q9`
--
DROP TABLE IF EXISTS `Q9`;

CREATE ALGORITHM=UNDEFINED DEFINER=`db21_009`@`%` SQL SECURITY DEFINER VIEW `Q9`  AS  select `Quotation_Detail`.`QID` AS `QID`,`Quotation_Detail`.`PRID` AS `PRID`,`Product_Color`.`Color_Name` AS `Color_Name`,`Quotation_Detail`.`qty` AS `qty`,(`Price_detail`.`price` + ((`Price_detail`.`สกรีนเพิ่มสีละ` * `Quotation_Detail`.`extra_color`) - 1)) AS `PricePerUnit`,(`Price_detail`.`price` + (((`Price_detail`.`สกรีนเพิ่มสีละ` * `Quotation_Detail`.`extra_color`) - 1) * `Quotation_Detail`.`qty`)) AS `TotalPrice` from ((`Quotation_Detail` join `Price_detail` on(((`Quotation_Detail`.`PRID` = `Price_detail`.`PRID`) and (`Quotation_Detail`.`Product_Color` = `Price_detail`.`ColorID`)))) join `Product_Color` on((`Product_Color`.`ColorID` = `Price_detail`.`ColorID`))) where (`Quotation_Detail`.`qty` between `Price_detail`.`จำนวนเริ่มต้น` and `Price_detail`.`จำนวนสุดท้าย`) ;

-- --------------------------------------------------------

--
-- Structure for view `Q10`
--
DROP TABLE IF EXISTS `Q10`;
-- in use(#1046 - No database selected)

-- --------------------------------------------------------

--
-- Structure for view `Q11`
--
DROP TABLE IF EXISTS `Q11`;
-- in use(#1046 - No database selected)

-- --------------------------------------------------------

--
-- Structure for view `Q12`
--
DROP TABLE IF EXISTS `Q12`;
-- in use(#1046 - No database selected)

-- --------------------------------------------------------

--
-- Structure for view `Q13`
--
DROP TABLE IF EXISTS `Q13`;

CREATE ALGORITHM=UNDEFINED DEFINER=`db21_009`@`%` SQL SECURITY DEFINER VIEW `Q13`  AS  select `Tracking`.`status` AS `status`,count(0) AS `COUNT(*)` from `Tracking` group by `Tracking`.`status` ;

-- --------------------------------------------------------

--
-- Structure for view `Q14`
--
DROP TABLE IF EXISTS `Q14`;

CREATE ALGORITHM=UNDEFINED DEFINER=`db21_009`@`%` SQL SECURITY DEFINER VIEW `Q14`  AS  select `Quotation`.`QID` AS `QID`,`Tracking`.`date` AS `date`,`Tracking`.`status` AS `status` from (`Quotation` join `Tracking` on((`Quotation`.`QID` = `Tracking`.`QID`))) order by `Quotation`.`QID` ;

-- --------------------------------------------------------

--
-- Structure for view `Q15`
--
DROP TABLE IF EXISTS `Q15`;

CREATE ALGORITHM=UNDEFINED DEFINER=`db21_009`@`%` SQL SECURITY DEFINER VIEW `Q15`  AS  select `QD`.`QID` AS `QID`,`QD`.`d` AS `lastDate`,`QDS`.`status` AS `status` from (((select `Quotation`.`QID` AS `QID`,max(`Tracking`.`date`) AS `d` from (`Quotation` join `Tracking` on((`Quotation`.`QID` = `Tracking`.`QID`))) group by `Quotation`.`QID`)) `QD` join (select `Quotation`.`QID` AS `QID`,`Tracking`.`status` AS `status`,`Tracking`.`date` AS `date` from (`Quotation` join `Tracking` on((`Quotation`.`QID` = `Tracking`.`QID`)))) `QDS` on(((`QD`.`QID` = `QDS`.`QID`) and (`QD`.`d` = `QDS`.`date`)))) ;

-- --------------------------------------------------------

--
-- Structure for view `Q16`
--
DROP TABLE IF EXISTS `Q16`;
-- in use(#1046 - No database selected)

-- --------------------------------------------------------

--
-- Structure for view `Q17`
--
DROP TABLE IF EXISTS `Q17`;
-- in use(#1046 - No database selected)

-- --------------------------------------------------------

--
-- Structure for view `Q18`
--
DROP TABLE IF EXISTS `Q18`;
-- in use(#1046 - No database selected)

-- --------------------------------------------------------

--
-- Structure for view `Q19`
--
DROP TABLE IF EXISTS `Q19`;
-- in use(#1046 - No database selected)

-- --------------------------------------------------------

--
-- Structure for view `Q20`
--
DROP TABLE IF EXISTS `Q20`;
-- in use(#1046 - No database selected)

-- --------------------------------------------------------

--
-- Structure for view `Q21`
--
DROP TABLE IF EXISTS `Q21`;
-- in use(#1046 - No database selected)

-- --------------------------------------------------------

--
-- Structure for view `Q22`
--
DROP TABLE IF EXISTS `Q22`;
-- in use(#1046 - No database selected)

-- --------------------------------------------------------

--
-- Structure for view `Q23`
--
DROP TABLE IF EXISTS `Q23`;
-- in use(#1046 - No database selected)

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `Delivery`
--
ALTER TABLE `Delivery`
  ADD PRIMARY KEY (`PCID`),
  ADD KEY `PCID` (`PCID`);

--
-- Indexes for table `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`OID`),
  ADD KEY `StockID` (`StockID`),
  ADD KEY `จำนวนที่สั่ง` (`จำนวนที่สั่ง`);

--
-- Indexes for table `Payment`
--
ALTER TABLE `Payment`
  ADD PRIMARY KEY (`PCID`,`ชำระเงินครั้งที่`),
  ADD KEY `QID` (`PCID`);

--
-- Indexes for table `Payment_Terms`
--
ALTER TABLE `Payment_Terms`
  ADD PRIMARY KEY (`Terms`);

--
-- Indexes for table `Price_detail`
--
ALTER TABLE `Price_detail`
  ADD PRIMARY KEY (`PriceDetailID`),
  ADD KEY `PRID` (`PRID`),
  ADD KEY `ColorID` (`ColorID`);

--
-- Indexes for table `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`PRID`),
  ADD KEY `CategoryID` (`CategoryID`);

--
-- Indexes for table `Production`
--
ALTER TABLE `Production`
  ADD PRIMARY KEY (`PCID`,`PID`),
  ADD KEY `QID` (`PCID`);

--
-- Indexes for table `Product_Color`
--
ALTER TABLE `Product_Color`
  ADD PRIMARY KEY (`ColorID`);

--
-- Indexes for table `Purchase_Order`
--
ALTER TABLE `Purchase_Order`
  ADD PRIMARY KEY (`PCID`),
  ADD KEY `QID` (`PCID`);

--
-- Indexes for table `Quotation`
--
ALTER TABLE `Quotation`
  ADD PRIMARY KEY (`QID`),
  ADD KEY `Staff` (`Staff`),
  ADD KEY `customer` (`customer`),
  ADD KEY `Payment_Type` (`Payment_Type`);

--
-- Indexes for table `Quotation_Detail`
--
ALTER TABLE `Quotation_Detail`
  ADD PRIMARY KEY (`DetailID`,`QID`),
  ADD KEY `PRID` (`PRID`),
  ADD KEY `QID` (`QID`),
  ADD KEY `Product_Color` (`Product_Color`);

--
-- Indexes for table `Staff`
--
ALTER TABLE `Staff`
  ADD PRIMARY KEY (`SID`);

--
-- Indexes for table `Stock`
--
ALTER TABLE `Stock`
  ADD PRIMARY KEY (`stockID`),
  ADD KEY `PRID` (`PRID`),
  ADD KEY `remain` (`remain`),
  ADD KEY `Product_Color` (`Product_Color`);

--
-- Indexes for table `Tracking`
--
ALTER TABLE `Tracking`
  ADD PRIMARY KEY (`TrackingID`,`date`),
  ADD KEY `QID` (`QID`),
  ADD KEY `staff_approved` (`staff_approved`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Delivery`
--
ALTER TABLE `Delivery`
  ADD CONSTRAINT `Delivery_ibfk_1` FOREIGN KEY (`PCID`) REFERENCES `Purchase_Order` (`PCID`);

--
-- Constraints for table `Orders`
--
ALTER TABLE `Orders`
  ADD CONSTRAINT `Orders_ibfk_3` FOREIGN KEY (`StockID`) REFERENCES `Stock` (`stockID`);

--
-- Constraints for table `Payment`
--
ALTER TABLE `Payment`
  ADD CONSTRAINT `Payment_ibfk_1` FOREIGN KEY (`PCID`) REFERENCES `Purchase_Order` (`PCID`);

--
-- Constraints for table `Price_detail`
--
ALTER TABLE `Price_detail`
  ADD CONSTRAINT `Price_detail_ibfk_1` FOREIGN KEY (`PRID`) REFERENCES `Product` (`PRID`),
  ADD CONSTRAINT `Price_detail_ibfk_2` FOREIGN KEY (`ColorID`) REFERENCES `Product_Color` (`ColorID`);

--
-- Constraints for table `Product`
--
ALTER TABLE `Product`
  ADD CONSTRAINT `Product_ibfk_1` FOREIGN KEY (`CategoryID`) REFERENCES `Category` (`CategoryID`);

--
-- Constraints for table `Production`
--
ALTER TABLE `Production`
  ADD CONSTRAINT `Production_ibfk_1` FOREIGN KEY (`PCID`) REFERENCES `Purchase_Order` (`PCID`);

--
-- Constraints for table `Purchase_Order`
--
ALTER TABLE `Purchase_Order`
  ADD CONSTRAINT `Purchase_Order_ibfk_1` FOREIGN KEY (`PCID`) REFERENCES `Quotation` (`QID`);

--
-- Constraints for table `Quotation`
--
ALTER TABLE `Quotation`
  ADD CONSTRAINT `Quotation_ibfk_1` FOREIGN KEY (`Staff`) REFERENCES `Staff` (`SID`),
  ADD CONSTRAINT `Quotation_ibfk_2` FOREIGN KEY (`customer`) REFERENCES `Customer` (`CID`),
  ADD CONSTRAINT `Quotation_ibfk_3` FOREIGN KEY (`Payment_Type`) REFERENCES `Payment_Terms` (`Terms`);

--
-- Constraints for table `Quotation_Detail`
--
ALTER TABLE `Quotation_Detail`
  ADD CONSTRAINT `Quotation_Detail_ibfk_1` FOREIGN KEY (`PRID`) REFERENCES `Product` (`PRID`),
  ADD CONSTRAINT `Quotation_Detail_ibfk_2` FOREIGN KEY (`QID`) REFERENCES `Quotation` (`QID`),
  ADD CONSTRAINT `Quotation_Detail_ibfk_3` FOREIGN KEY (`Product_Color`) REFERENCES `Product_Color` (`ColorID`);

--
-- Constraints for table `Stock`
--
ALTER TABLE `Stock`
  ADD CONSTRAINT `Stock_ibfk_1` FOREIGN KEY (`PRID`) REFERENCES `Product` (`PRID`),
  ADD CONSTRAINT `Stock_ibfk_2` FOREIGN KEY (`Product_Color`) REFERENCES `Product_Color` (`ColorID`);

--
-- Constraints for table `Tracking`
--
ALTER TABLE `Tracking`
  ADD CONSTRAINT `Tracking_ibfk_1` FOREIGN KEY (`QID`) REFERENCES `Quotation` (`QID`),
  ADD CONSTRAINT `Tracking_ibfk_2` FOREIGN KEY (`staff_approved`) REFERENCES `Staff` (`SID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

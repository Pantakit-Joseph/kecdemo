
--
-- Database: `itc_kecdemo`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `edit_grades`
--

CREATE TABLE `edit_grades` (
  `id` int(11) NOT NULL,
  `std_id` int(11) NOT NULL,
  `id_subject` int(11) DEFAULT NULL COMMENT 'รหัสวิชา',
  `subject` varchar(255) DEFAULT NULL COMMENT 'วิชา',
  `term` int(11) DEFAULT NULL COMMENT 'ภาคเรียน',
  `year0` int(11) DEFAULT NULL COMMENT 'ปีการศึกษา',
  `unit` int(11) DEFAULT NULL COMMENT 'หน่วยกิต',
  `title_te` enum('นาย','นาง') DEFAULT NULL COMMENT 'คำนำหน้า',
  `name_te` varchar(255) DEFAULT NULL COMMENT 'ชื่อครู',
  `lastname` varchar(255) DEFAULT NULL COMMENT 'นามสกุล',
  `img_teacher` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL COMMENT 'รหัสอ้างอิง',
  `group_code` int(11) DEFAULT NULL COMMENT 'รหัสกลุ่ม',
  `group_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `std_id` int(11) NOT NULL COMMENT 'รหัสนักศึกษา',
  `status` enum('1','2') DEFAULT NULL COMMENT 'หาสถานที่ฝึกอาชีพเองที่',
  `location_name` varchar(255) DEFAULT NULL COMMENT 'ชื่อสถานประกอบการ',
  `contact_position` varchar(255) DEFAULT NULL COMMENT 'โปรดระบุตำแหน่งผู้ที่ติดต่อ',
  `number` int(11) DEFAULT NULL COMMENT 'บ้านเลขที่',
  `road` varchar(255) DEFAULT NULL COMMENT 'ถนน',
  `Sub_area` varchar(255) DEFAULT NULL COMMENT 'ตำบล',
  `area` varchar(255) DEFAULT NULL COMMENT 'อำเภอ',
  `province` varchar(255) DEFAULT NULL COMMENT 'จังหวัด',
  `zip_code` int(11) DEFAULT NULL COMMENT 'รหัสไปรษณีย์',
  `tel` int(11) DEFAULT NULL COMMENT 'โทร'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `majors`
--

CREATE TABLE `majors` (
  `id` int(11) NOT NULL COMMENT 'รหัสอ้างอิง',
  `college_id` int(11) NOT NULL COMMENT 'รหัสสถานศึกษา',
  `major_code` varchar(10) NOT NULL COMMENT 'รหัสสาขาวิชา',
  `major_name` varchar(100) NOT NULL COMMENT 'ชื่อสาขาวิชา',
  `major_eng` varchar(100) NOT NULL COMMENT 'ชื่อสาขาวิชาภาษาอังกฤษ',
  `created_at` datetime NOT NULL COMMENT 'บันทึกข้อมูลเมื่อไหร่',
  `updated_at` datetime NOT NULL COMMENT 'แก้ไขข้อมูลล่าสุดเมื่อไหร่',
  `status` int(1) NOT NULL DEFAULT '1' COMMENT 'สถานะ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `majors`
--

INSERT INTO `majors` (`id`, `college_id`, `major_code`, `major_name`, `major_eng`, `created_at`, `updated_at`, `status`) VALUES
(6, 1, '30101', 'เทคนิคเครื่องกล', 'Mechanical Technology', '2021-06-06 13:30:35', '2021-06-06 13:30:35', 1),
(7, 1, '30102', 'เทคนิคการผลิต', 'Production Technology ', '2021-06-06 13:30:35', '2021-06-06 13:30:35', 1),
(8, 1, '30103', 'เทคนิคโลหะ', 'Metal Fabrication Technology', '2021-06-06 13:30:35', '2021-06-06 13:30:35', 1),
(9, 1, '30104', 'ไฟฟ้า', 'Electrical Engineering', '2021-06-06 13:30:35', '2021-06-06 13:30:35', 1),
(10, 1, '30105', 'อิเล็กทรอนิกส์', 'Electronics', '2021-06-06 13:30:35', '2021-06-06 13:30:35', 1),
(11, 1, '30106', 'ช่างก่อสร้าง', 'Building Construction', '2021-06-06 13:30:35', '2021-06-06 13:30:35', 1),
(13, 1, '30108', 'เทคนิคสถาปัตยกรรม', 'Architectural Technology', '2021-06-06 13:30:35', '2021-06-06 13:30:35', 1),
(17, 1, '30111', 'เทคนิคอุตสาหกรรม', 'Industrial Technology', '2021-06-06 13:30:35', '2021-06-06 13:30:35', 1),
(19, 1, '30113', 'เทคนิคพลังงาน', 'Energy Technology', '2021-06-06 13:30:35', '2021-06-06 13:30:35', 1),
(26, 1, '30121', 'โยธา', 'Civil Technology', '2021-06-06 13:30:35', '2021-06-06 13:30:35', 1),
(31, 1, '30127', 'เมคคาทรอนิกส์และหุ่นยนต์', 'Mechatronics and Robotics', '2021-06-06 13:30:35', '2021-06-06 13:30:35', 1),
(34, 1, '30134', 'เทคนิคเครื่องทำความเย็นและปรับอากาศ', 'Refrigerators and Air-Conditioners Technology', '2021-06-06 13:30:35', '2021-06-06 13:30:35', 1),
(47, 1, '30201', 'การบัญชี', 'Accounting', '2021-06-06 13:30:35', '2021-06-06 13:30:35', 1),
(48, 1, '30202', 'การตลาด', 'Marketing', '2021-06-06 13:30:35', '2021-06-06 13:30:35', 1),
(49, 1, '30203', 'การเลขานุการ', 'Secretarial Studies', '2021-06-17 05:05:22', '2021-06-17 05:05:22', 1),
(50, 1, '30204', 'เทคโนโลยีธุรกิจดิจิตอล', 'Business Digital Technology', '2021-06-06 13:30:35', '2021-06-06 13:30:35', 1),
(57, 1, '30215', 'การจัดการ', 'Management', '2021-06-06 13:30:35', '2021-06-06 13:30:35', 0),
(58, 1, '30216', 'การจัดการสำนักงาน', 'Office Management', '2021-06-06 13:30:35', '2021-06-06 13:30:35', 0),
(98, 1, '30901', 'เทคโนโลยีสารสนเทศ', 'Information Technology', '2021-06-06 13:30:35', '2021-06-06 13:30:35', 1),
(101, 1, '20101', 'ช่างยนต์', 'Automotive', '2021-06-06 13:30:35', '2021-06-06 13:30:35', 0),
(102, 1, '20102', 'ช่างกลโรงงาน', 'Machine Shop', '2021-06-06 13:30:35', '2021-06-06 13:30:35', 0),
(103, 1, '20103', 'ช่างเชื่อมโลหะ', 'Welding', '2021-06-06 13:30:35', '2021-06-06 13:30:35', 0),
(104, 1, '20104', 'ช่างไฟฟ้ากำลัง', 'Electrical Power', '2021-06-06 13:30:35', '2021-06-06 13:30:35', 0),
(105, 1, '20105', 'ช่างอิเล็กทรอนิกส์', 'Electronics', '2021-06-06 13:30:35', '2021-06-06 13:30:35', 0),
(106, 1, '20106', 'ช่างก่อสร้าง', 'Building Construction ', '2021-06-06 13:30:35', '2021-06-06 13:30:35', 0),
(108, 1, '20108', 'สถาปัตยกรรม', 'Architecture', '2021-06-06 13:30:35', '2021-06-06 13:30:35', 0),
(111, 1, '20111', 'ช่างซ่อมบำรุง', 'Machine Maintenance', '2021-06-06 13:30:35', '2021-06-06 13:30:35', 0),
(117, 1, '20121', 'โยธา', 'Civil Construction', '2021-06-06 13:30:35', '2021-06-06 13:30:35', 0),
(119, 1, '20127', 'เมคคาทรอนิกส์', 'Mechatronics', '2021-06-06 13:30:35', '2021-06-06 13:30:35', 0),
(122, 1, '20134', 'ช่างเครื่องทำความเย็นและปรับอากาศ', 'Refrigerators and Air-conditioners', '2021-06-06 13:30:35', '2021-06-06 13:30:35', 0),
(129, 1, '20201', 'การบัญชี', 'Accounting', '2021-06-06 13:30:35', '2021-06-06 13:30:35', 0),
(130, 1, '20202', 'การตลาด', 'Marketing', '2021-06-06 13:30:35', '2021-06-06 13:30:35', 0),
(131, 1, '20203', 'การเลขานุการ ', 'Secretarial Studies', '2021-06-06 13:30:35', '2021-06-06 13:30:35', -1),
(132, 1, '20204', 'คอมพิวเตอร์ธุรกิจ', 'Business Computer Studies', '2021-06-06 13:30:35', '2021-06-06 13:30:35', 0),
(138, 1, '20216', 'การจัดการสำนักงาน', 'Office Management', '2021-06-06 13:30:35', '2021-06-06 13:30:35', -1),
(170, 1, '20901', 'เทคโนโลยีสารสนเทศ', 'Information Technology', '2021-06-06 13:30:35', '2021-06-06 13:30:35', 0),
(172, 1, '10000', 'สามัญสัมพันธ์', '', '2021-06-16 00:32:43', '2021-06-16 00:32:43', 1),
(173, 1, '20000', 'เทคนิคพื้นฐาน', '', '2021-06-16 00:35:33', '2021-06-16 00:35:33', 1);

-- --------------------------------------------------------

--
-- Table structure for table `minors`
--

CREATE TABLE `minors` (
  `id` int(11) NOT NULL COMMENT 'รหัสอ้างอิง',
  `minor_code` varchar(10) NOT NULL COMMENT 'รหัสสาขางาน',
  `minor_name` varchar(100) NOT NULL COMMENT 'ชื่อสาขางาน',
  `minor_eng` varchar(100) NOT NULL COMMENT 'ชื่อสาขางานภาษาอังกฤษ',
  `college_id` int(11) NOT NULL COMMENT 'รหัสสถานศึกษา',
  `major_id` int(11) NOT NULL COMMENT 'รหัสสาขาวิชา',
  `created_at` datetime NOT NULL COMMENT 'บันทึกข้อมูลเมื่อไหร่',
  `updated_at` datetime NOT NULL COMMENT 'แก้ไขข้อมูลล่าสุดเมื่อไหร่',
  `status` int(1) NOT NULL DEFAULT '1' COMMENT 'สถานะ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `minors`
--

INSERT INTO `minors` (`id`, `minor_code`, `minor_name`, `minor_eng`, `college_id`, `major_id`, `created_at`, `updated_at`, `status`) VALUES
(3, '3010101', 'เทคนิคยานยนต์', 'Automotive Technology', 1, 6, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 1),
(4, '3010102', 'เทคนิคเครื่องกลอุตสาหกรรม', 'Industrial Machinery Technology', 1, 6, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 0),
(10, '3010201', 'เครื่องมือกล', 'Machine Tools', 1, 7, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 1),
(19, '3010303', 'เทคโนโลยีงานเชื่อมโครงสร้างโลหะ', 'Metal Structural Welding Technology', 1, 8, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 1),
(23, '3010402', 'ไฟฟ้ากำลัง', 'Electrical Power', 1, 9, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 1),
(27, '3010501', 'อิเล็กทรอนิกส์อุตสาหกรรม', 'Industrial Electronics', 1, 10, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 1),
(30, '3010601', 'ก่อสร้าง', 'Building Construction', 1, 11, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 1),
(32, '3010801', 'เทคนิคสถาปัตยกรรม', 'Architectural Technology', 1, 13, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 1),
(36, '3011102', 'เทคโนโลยีวิศวกรรมอุตสาหกรรมการผลิต', 'Production Engineering Technology', 1, 8, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 1),
(38, '3011301', 'เทคนิคการควบคุมการผลิตพลังงาน', 'Energy Production Control Technology', 1, 19, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 1),
(40, '3011303', 'เทคนิคการจัดการพลังงาน', 'Energy Management Technology', 1, 19, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 1),
(51, '3012101', 'โยธา', 'Civil Technology', 1, 26, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 1),
(56, '3012701', 'เมคคาทรอนิกส์และหุ่นยนต์ (ปวช.)', 'Mechatronics and Robotics', 1, 31, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 1),
(64, '3013401', 'เทคนิคเครื่องทำความเย็นและปรับอากาศ', 'Refrigerators and Air-Conditioners Technology', 1, 34, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 1),
(84, '3020101', 'การบัญชี', 'Accounting', 1, 47, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 1),
(85, '3020201', 'การตลาด', 'Marketing', 1, 48, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 1),
(87, '3020301', 'การเลขานุการ', 'Secretarial Studies', 1, 49, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 1),
(88, '3020401', 'ธุรกิจดิจิทัล', 'Digital Business', 1, 50, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 0),
(90, '3020403', 'โมบายแอพพลิเคชั่นทางธุรกิจ', 'Business Mobile Applications', 1, 50, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 1),
(102, '3021501', 'การจัดการ', 'Management', 1, 57, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 1),
(104, '3021601', 'การจัดการสำนักงาน', 'Office Management', 1, 58, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 1),
(175, '3090101', 'นักพัฒนาซอฟต์แวร์คอมพิวเตอร์', 'Computer Software Development', 1, 98, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 1),
(179, '3090301', 'คอมพิวเตอร์โปรแกรมเมอร์', 'Computer Programmer', 1, 99, '2021-05-28 00:00:00', '2021-05-28 00:00:00', -1),
(182, '2010101', 'ยานยนต์', 'Automotive', 1, 6, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 1),
(183, '2010102', 'เครื่องกลอุตสาหกรรม', 'Industial Mechanical', 1, 6, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 0),
(187, '2010201', 'เครื่องมือกล', 'Machine Tools', 1, 7, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 1),
(192, '2010302', 'โครงสร้าง', 'Structues', 1, 8, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 1),
(194, '2010401', 'ไฟฟ้ากำลัง', 'Electrical Power', 1, 9, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 1),
(195, '2010501', 'อิเล็กทรอนิกส์', 'Electronics', 1, 10, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 1),
(196, '2010601', 'ก่อสร้าง', 'Building Construction', 1, 11, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 1),
(198, '2010801', 'สถาปัตยกรรม', 'Architecture', 1, 13, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 1),
(201, '2011101', 'สาขาวิชาเทคนิคอุตสาหกรรม สาขางานซ่อมบำรุงอุตสาหกรรม', 'Industrial Machine Maintenance', 1, 8, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 1),
(210, '2012101', 'โยธา', 'Civil Construction', 1, 26, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 1),
(212, '2012701', 'เมคคาทรอนิกส์และหุ่นยนต์ (ปวส.)', 'Mechatronics', 1, 31, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 1),
(215, '2013401', 'เครื่องทำความเย็นและปรับอากาศ', 'Refrigerators and Air-Conditioners', 1, 34, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 1),
(227, '2020101', 'การบัญชี', 'Accounting', 1, 47, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 1),
(228, '2020201', 'การตลาด', 'Marketing', 1, 48, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 1),
(229, '2020301', 'การเลขานุการ ', 'Secretarial Studies', 1, 49, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 1),
(230, '2020401', 'คอมพิวเตอร์ธุรกิจ', 'Business Computer', 1, 50, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 1),
(237, '2021601', 'การจัดการสำนักงาน', 'Office Management', 1, 58, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 1),
(292, '2090102', 'การโปรแกรมคอมพิวเตอร์ เว็บ และอุปกรณ์เคลื่อนที่', 'Computer Programming, Web and Mobile Devices', 1, 98, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 1),
(295, '2090105', 'คอมพิวเตอร์กราฟิก เกม และแอนิเมชัน', 'Computer Graphics, Game and Animation', 1, 98, '2021-05-28 00:00:00', '2021-05-28 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `id` int(11) NOT NULL,
  `std_id` int(11) NOT NULL COMMENT 'รหัสนักศึกษา',
  `parent_comment` varchar(255) DEFAULT NULL COMMENT 'ความเห็นผู้ปกครอง',
  `parent_img` varchar(255) DEFAULT NULL,
  `department_comment` enum('1','2') DEFAULT NULL COMMENT 'ความเห็นหัวหน้าแผนก',
  `department_img` varchar(255) DEFAULT NULL,
  `Counselor_comment` enum('1','2') DEFAULT NULL,
  `Counselor_img` varchar(255) DEFAULT NULL,
  `during_day` date DEFAULT NULL COMMENT 'ระหว่างวันที่',
  `up_day` date DEFAULT NULL COMMENT 'ถึงวันที่'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `std_id` varchar(11) NOT NULL COMMENT 'รหัสนักศึกษา',
  `id_card` varchar(100) DEFAULT NULL,
  `prefix` enum('นาย','นาง','นางสาว') DEFAULT NULL COMMENT 'คำนำหน้า',
  `firstname` varchar(255) DEFAULT NULL COMMENT 'ชิ่อ',
  `lastname` varchar(255) DEFAULT NULL COMMENT 'นามสกุล',
  `std_class` enum('ปวช','ปวส','ป.ตรี') DEFAULT NULL COMMENT 'ระดับ',
  `year` int(11) DEFAULT NULL COMMENT 'ชั้นปี',
  `std_group` varchar(255) DEFAULT NULL COMMENT 'กลุ่ม',
  `majors` int(11) DEFAULT NULL COMMENT 'รหัสสาขางาน',
  `minors` int(11) DEFAULT NULL COMMENT 'รหัสสาขาวิชา',
  `grade` float DEFAULT NULL COMMENT 'เกรต',
  `semester` int(11) DEFAULT NULL COMMENT 'ภาคเรียน',
  `std_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`,`ip_address`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `edit_grades`
--
ALTER TABLE `edit_grades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `std_id` (`std_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `edit_grades`
--
ALTER TABLE `edit_grades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสอ้างอิง';

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `train`
--
ALTER TABLE `train`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

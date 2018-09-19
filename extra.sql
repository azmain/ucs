--
-- Database: `extra`
--

-- --------------------------------------------------------

--
-- Table structure for table `balance`
--

CREATE TABLE `balance` (
  `id` int(11) NOT NULL,
  `col_id` int(11) NOT NULL,
  `actual_pay` int(11) NOT NULL,
  `paid` int(11) NOT NULL,
  `due` int(11) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `balance`
--

INSERT INTO `balance` (`id`, `col_id`, `actual_pay`, `paid`, `due`, `year`) VALUES
(10, 9, 55500, 33300, 22200, 2017),
(11, 9, 94350, 94350, 0, 2017),
(12, 9, 122100, 122100, 0, 2017),
(13, 9, 127650, 0, 127650, 2017),
(14, 9, 290450, 200000, 90450, 2017);

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `id` int(11) NOT NULL,
  `col_code` char(2) NOT NULL,
  `col_name` varchar(80) NOT NULL,
  `col_district` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`id`, `col_code`, `col_name`, `col_district`) VALUES
(1, '00', 'JNTUA College of Engineering,Anantapur 515002', 'ATP'),
(2, '74', 'Intell Engineering College,Anantapur 515004', 'ATP'),
(3, '2G', 'Anantha  Lakshmi  Institute of  Technology  & Sciences Anantapur', 'ATP'),
(4, '3N', 'P.V.K.K institute of Technology Anantapur', 'ATP'),
(5, '4G', 'Srinivasa Ramanujan Institute of Technology, Rotarypuram (V), Anantapur', 'ATP'),
(6, '4H', 'Sri Sai College of Engineering & Technology,Loluru (V), Anantapur', 'ATP'),
(7, '9A', 'Shri Shirdi Sai Institute of Science & Engineering, Podaralla, Anantapur.', 'ATP'),
(8, '9F', 'Sri Venkateswara Institute of Technology,Hampapuram (V), Anantapur', 'ATP'),
(9, 'F2', 'Gates Institute  of Technology,Gooty,Anantapur Dist', 'ATP'),
(10, 'F3', 'BIT  Institute of Technology,Hindupur,Anantapur Dist.', 'ATP'),
(11, 'F5', 'Intellectual Institute of Tech.(Moula Ali ),Bellary Road,Anantapur', 'ATP'),
(12, 'G8', 'Sri Krishna Devaraya Engineering College,Gooty,Anantapur Dist', 'ATP'),
(13, '9B', 'Sir C.V.Raman Institute of Technology & Sciences, Anantapur Road, Tadipatri ', 'ATP'),
(14, 'HU', 'Tadipatri Engineering College, Veerapuram (V), Tadipatri', 'ATP'),
(15, '2R', 'Chiranjeevi Reddy Institute of Engineering & Technology, Ananthapuramu.', 'ATP'),
(16, '4D', 'Shri Sai Institute of Engineering & Technology, Ananthapuramu.', 'ATP'),
(17, '9U', 'Sri Srinivasa Institute of Management,Ravivenkatam Palli (V), \r\nTadipatri-515 41', 'ATP'),
(18, 'HX', 'Sanskrithi School of Business,Behind Super Speciality Hospital, \r\nBeedupalli Roa', 'ATP'),
(19, 'HY', 'Sree Vyshnavi MBA College,Near Kalwa Gadda Anjaneya Swamy Temple, \r\nGooty, Anant', 'ATP'),
(20, 'JX', 'Sri Balaji P.G. College (MCA),Rudrampeta, Alamuru (P),  Ananthapuramu Dist.-515 ', 'ATP'),
(21, 'JY', 'Sri Balaji P.G. College (MBA),Rudrampeta, Alamuru (P), Ananthapuramu Dist.-515 0', 'ATP'),
(22, 'JF', 'St.Mark Educational Institution Society Group of Institution,Anantapur', 'ATP'),
(23, '12', 'Sree Vidyaniketan Engineering College,A.Rangampet, Tirupati. ', 'CTR'),
(24, '38', 'Sri Kalahastheeswara Institute of Technology,Srikalahasthi.', 'CTR'),
(25, '69', 'Madanapalli Inst. of Technology & Science,Madanapalli. ', 'CTR'),
(26, '75', 'Sreenivasa Inst. of Technology & Mgmt Studies,Chittoor Dist ', 'CTR'),
(27, '78', 'Sri Venkateswara College of Engg & Technology,RVS Nagar,Chittoor.', 'CTR'),
(28, '2Q', 'Chadalawada Venkata Subbaiah College of Engineering, Chadalawada Nagar,Tirupati.', 'CTR'),
(29, '3D', 'J.B.Women’s Engineering College,Daminedu (V), Tirupati.', 'CTR'),
(30, '3F', 'K.K.C.Institute of Tech & Engineering for Women,Parameswaramangalam(V),Puttur (M', 'CTR'),
(31, '3G', 'KMM Institute of Technology & Science,Ramireddypally, Tirupati .', 'CTR'),
(32, '3P', 'Priyadarshini Institute of Technology,C.Ramachadrapuram, Tirupati.', 'CTR'),
(33, '3U', 'Seshachala Institute of Technology,Kakampalem (V),Puttur.', 'CTR'),
(34, '4A', 'Shree Institute of Technical Education,Krishnapuram (V), Chittoor.', 'CTR'),
(35, '4C', 'Sree Rama Engineering College,Karakambaadi Road,Tirupati.', 'CTR'),
(36, '4E', 'Siddhartha Institute of Science & Technology,Narayanavanam Road,Puttur.', 'CTR'),
(37, '4J', 'Swetha Institute of Technology & Science for Women, Tirupathi.', 'CTR'),
(38, '4M', 'Vemu Institute of Technology,P.Kothakota Post,Chittoor.', 'CTR'),
(39, '4P', 'Yogananda Institute of Technology & Science,Elamandyam (V), Tirupati.', 'CTR'),
(40, '8P', 'Aditya College of Engg, Valasapalli Post,Chittoor Dist', 'CTR'),
(41, '8X', 'M.J.R College of Engg. & Tech.,Diguvapokulavaripalli (V), Pulicherla (M),Chittoo', 'CTR'),
(42, '9E', 'Sri Venkateswara Engineering College for Women,Karakambadi Road,Tirupati.', 'CTR'),
(43, '9L', 'Siddartha Educational Academy Group of Instituions,Chinthagunta (V), Tirupati.', 'CTR'),
(44, '9M', 'Bharath Educational Society Group of Institutions,Angallu,Kurabalakota(M) ,Chitt', 'CTR'),
(45, 'AK', 'Annamacharya Institute of Technology & Sciences,Mangalam Road,Tirupathi.', 'CTR'),
(46, 'BF', 'Sri Venkateswara College of Engineering,Thimminaidu Palem, Tirupati.', 'CTR'),
(47, 'BP', 'Vaishnavi Institute of Technology,Thanapalle (V),Tirupati.', 'CTR'),
(48, 'F4', 'Kuppam Engineering College,Peddabanganatham Village,Kuppam.', 'CTR'),
(49, 'F6', 'Siddharth Institute of Engg & Technology,Narayanavanam Road,Puttur.', 'CTR'),
(50, 'G0', 'Sri Venkatesa  Perumal College of Engg. & Technology,RVS Nagar,Puttur.', 'CTR'),
(51, 'HR', 'Mother Theresa Institute of Engg & Technology,Melmoi (V&Post), Palamaner,Chittoo', 'CTR'),
(52, 'JE', 'Shree Rama Educational Society Group of Institutions,Karakambadi Road, Tirupati ', 'CTR'),
(53, 'P1', 'Chadalawada Ramanamma Engg College,Renigunta Road,Tirupati', 'CTR'),
(54, 'W5', 'Sir Vishveshwaraiah Inst. of Science & Technology,Angallu, Madanapalli.', 'CTR'),
(55, '9J', 'Vaishnavi Institute of Technology for women, Kuntrapakam (P & V), Tirupati', 'CTR'),
(56, 'HT', 'Sai Sakthi Engineering College,  Chittoor Dist.', 'CTR'),
(57, 'KA', 'JNTUA College of Engineering, Kalikiri, Chitoor Dist.', 'CTR'),
(58, 'JA', 'Seshachala Venkata Subbaiah PG College,Nagari Road, Puttur-517 583, Chittoor Dis', 'CTR'),
(59, 'JG', 'Sri Venkateswara College of Computer  Sciences, RVS Nagar, Tirupathi Road, Chitt', 'CTR'),
(60, 'KC', 'MJR Institute of Business Management,Diguvapokulavari Palli (V), Pulicherla (M),', 'CTR'),
(61, 'JB', 'Vignanasudha Institute of Management & Technology, \r\n# 22-977/3, Muruganipalli R', 'CTR'),
(62, '19', 'JNTUA College of Engineering,Pulivendula 516390 ', 'KDP'),
(63, '70', 'Annamacharya Inst. of Technology & Sciences,Rajampet.', 'KDP'),
(64, '72', 'Madina Engineering College,Kamalapuram Road,Kadapa.', 'KDP'),
(65, '2F', 'Akshaya Bharathi Institute of Technology,R.S.Nagar, Siddavatam,Kadapa -516237.', 'KDP'),
(66, '2P', 'Chaitanya Bharathi Institute of Technology,Pallavolu (V), Kadapa.', 'KDP'),
(67, '3A', 'Global College of Engineering & Technology,Chinnamachupalli (V),Kadapa.', 'KDP'),
(68, '3H', 'Kandula Lakshumma Memorial College of Engineering for Women,Thadigotla (V), Kada', 'KDP'),
(69, '3M', 'Modugula Kalavathamma Institute of Technology for Women,New Boyanapalli, Rajampe', 'KDP'),
(70, '3Q', 'Rajoli Veera Reddy Padmaja Engineering College for Women,Tadigotla(V), Kadapa', 'KDP'),
(71, '5K', 'Bharath College of Engineering & Technology for Women,Buggletipally (V&P), Kadap', 'KDP'),
(72, '5M', 'Fathima Institute of Technology & Management,Ramarajupally,Kadapa', 'KDP'),
(73, '8Q', 'Acharya College of Engineering,Badvel, Kadapa', 'KDP'),
(74, '8R', 'Balaji Institute of Technology & Science,Balaji Nagar,Proddatur.', 'KDP'),
(75, '9H', 'Srinivasa Institute of Technology & Science,Ukkayapalli (V), Kadapa', 'KDP'),
(76, '9K', 'Vignana Bharathi Institute of Technology,Pallavolu (V), Kadapa', 'KDP'),
(77, '9Y', 'K.S.R.M. College of Engineering,Yerramasupalli (V), Kadapa', 'KDP'),
(78, 'BC', 'Kandula Obul Reddy Memorial College of Engineering,Tadigotla (V), Kadapa', 'KDP'),
(79, 'BG', 'Sri Venkateswara Institute of Science & Technology,Tadigotla (V), Kadapa', 'KDP'),
(80, 'F7', 'Sri Sai Inst. of Technology & Science,Rayachoti,Kadapa', 'KDP'),
(81, 'HM', 'Annamacharya Inst. of Technology & Sciences,Chintakomma Dinne (V&M),Kadapa', 'KDP'),
(82, 'L2', 'Vaagdevi Inst. of Technology & Science,Peddasettipally,Kadapa', 'KDP'),
(83, 'HQ', 'Dr.Y.S.Rajasekhar Reddy Institute of Engineering & Technology, Chinnamachupalli ', 'KDP'),
(84, '8U', 'Goutami Institute of Technology & Management for Women,  Kadapa Dist.-516 360.', 'KDP'),
(85, '8Y', 'Narayanadri Institute of Science & Technology, Rajampet-516 115, Kadapa District', 'KDP'),
(86, '9R', 'Balaji Institute of I.T & Management, Opp . to Old Bypass Road, Chinnachowk, \r\nK', 'KDP'),
(87, '9T', 'Madhura Sai Institute of IT & Management,  Peddasettii (V), Proddatur (M),\r\nKada', 'KDP'),
(88, '9W', 'Vasavi Institute of Management & Computer Sciences,\r\nVasavi Nagar, Near Bhakarap', 'KDP'),
(89, 'HD', 'Sri Sai College of IT & Management, Buddayapalli, Kadapa-516 002.', 'KDP'),
(90, 'HE', 'Sharada Post-Graduate Institute of Research & Technological Sciences,\r\nD.No. 95/', 'KDP'),
(91, 'HJ', 'Sri Rama Krishna Institute of Technology,# 7/321-A, Mochampet, Kadapa-516 001.', 'KDP'),
(92, 'HK', 'K.S.R.M College of Management Studies, (Formerly K.S.R. M College of Engineering', 'KDP'),
(93, '5N', 'Annamacharya P.G.College of Computer Studies,\r\nNew Boyanapalli, Rajampet (M), Y.', 'KDP'),
(94, '5P', 'Annamacharya P.G. College of Management Studies, \r\nNew Boyanapalli,  Rajampet (M', 'KDP'),
(95, 'JK', 'Global Institute of Technology & Management Sciences,  \r\nRayachoti Road, Kadapa-', 'KDP'),
(96, 'JR', 'SSK Institute of Business Management, Sai Vihar,Vontimitta (V&M)- 516 213, Y.S.R', 'KDP'),
(97, 'JZ', 'Sri Datta Sai School of Business,Prakasamapalli (V), Kopparthi (P), C.K. Dinne (', 'KDP'),
(98, 'JL', 'S.V. PG College, # 45/150-15, Balaji Nagar, Kadapa-516 003.', 'KDP'),
(99, 'HH', 'Sri Datta Sai College of MCA, Kadapa, ', 'KDP'),
(100, 'HL', 'KSRMCE MCA ', 'KDP'),
(101, '09', 'Rajeev Gandhi Memorial College of Engineering  & Technology,Nandyal.', 'KNL'),
(102, '2J', 'Geethanjali College of Engineering, Kurnool', 'KNL'),
(103, '2K', 'Bheema Institute of Technology & Science,Mandigiri (V),Adoni(M),Kurnool', 'KNL'),
(104, '2N', 'Brindavan Institute of Technology & Science,Peddatekur,Kurnool', 'KNL'),
(105, '2T', 'Dr.K.V.Subba Reddy College of Engineering for Women, Opp.Dupadu ,Kurnool', 'KNL'),
(106, '3C', 'Indira Priyadarshini College of Engg & Tech for Women,Nannur (V), Kurnool', 'KNL'),
(107, '3J', 'Kottam Karunakara Reddy Institute of Technology, Chinna Tekuru (V), Kurnool', 'KNL'),
(108, '3T', 'Ravindra College of Engineering for Women,Pasupula (V), Kurnool', 'KNL'),
(109, '4K', 'Syamaladevi Institute of Technology for Women,Nandyal', 'KNL'),
(110, 'AM', 'AVR & SVR College of Engineering & Technology,Ayyaluru (V), Kurnool', 'KNL'),
(111, 'AT', 'G.Pullaiah College of Engineering & Technology,Pasupala (V), Kurnool', 'KNL'),
(112, 'BM', 'Stanley Stephen College of Engineering & Technology,Panchalingala (V), Kurnool', 'KNL'),
(113, 'E8', 'Alfa College of Engineering & Technology,Allagadda,Kurnool', 'KNL'),
(114, 'FH', 'Dr.K.V.Subba Reddy Institute of Technology,Opp.Dupadu,Kurnool', 'KNL'),
(115, 'G3', 'St.John’s College of Engg & Technology,Yemmiganur,Kurnool', 'KNL'),
(116, 'K5', 'Safa College of Engineering & Technology,Panchalingala(V),Kurnool', 'KNL'),
(117, 'X5', 'Santhiram Engineering College,Nandyal', 'KNL'),
(118, '9X', 'G.Pulla Reddy Engineering College (Autonomous), Pulla Reddy Nagar, Kurnool', 'KNL'),
(119, 'EH', 'Kottam College of Engineering, Chinnatekuru (V), Kalluru (M), Kurnool', 'KNL'),
(120, '9G', 'Sreenivasa College of Engineering & Technology, Lakshmi Puram, Kurnool Dist.- 51', 'KNL'),
(121, 'HZ', 'Sumourya Institute of Management,B.Thandrapadu, Nandyal Road,Kurnool Dist. -518 ', 'KNL'),
(122, 'JH', 'Dr. K. V. Subba Reddy Institute of Management,Opp: Dupadu Railway Station, NH-44', 'KNL'),
(123, 'JW', 'Dr. Jyothiramayi Degree College (MBA),  Ramajala Road,Adoni-518 302, Kurnool Dis', 'KNL'),
(124, 'JQ', 'AVR & SVR School of Business Management,Ayyalur (V), Nandyal-518 503, Kurnool Di', 'KNL'),
(125, 'JC', 'Bheemi Reddy Institute  of Management Science,\r\nMandigiri (V), Alur Road, Adoni-', 'KNL'),
(126, 'JJ', 'Dr.K.V.Subba Reddy Institute of MCA,\r\nOpp: Dupadu Railway Station,   NH-44, Laks', 'KNL'),
(127, 'JT', 'Prabath Institute of Business Management,Paranapalli(V) ,Nandyal-518501, Kurnool', 'KNL'),
(128, 'JU', 'Prabhath Institute of Computer Sciences Paranapalli (V), Nandyal-518501, Kurnool', 'KNL'),
(129, '71', 'Narayana Engineering College,A.K.Nagar,Nellore', 'NLR'),
(130, '73', 'Parvatha Reddy Babul Reddy Visvodaya Inst. of Technology & Science, Kavali,Nello', 'NLR'),
(131, '2H', 'Audisankara Institute of Technology,Gudur,Nellore', 'NLR'),
(132, '2M', 'Brahmaiah College of Engineering,North Rajupalem,Nellore', 'NLR'),
(133, '2U', 'Geethanjali Institute of Science & Technology,Gangavaram (V), Nellore', 'NLR'),
(134, '3E', 'Jagan’s College of Engineering & Technology,Chavatapalem Road,Nellore', 'NLR'),
(135, '3R', 'Rami Reddy Subbarami Reddy Engineering College, Kadanuthala (V),Nellore', 'NLR'),
(136, '4F', 'Sri Raghavendra Institute of Science & Technology,Kavali,Nellore', 'NLR'),
(137, '4N', 'Visvodaya Engineering College,Kavali,Nellore', 'NLR'),
(138, '8T', 'Damisetty Bala Suresh Institute of Technology,Maddurupadu(V),Nellore', 'NLR'),
(139, 'F1', 'Narayana Engineering College,Durjati Nagar, Gudur,Nellore Dist', 'NLR'),
(140, 'F8', 'Gokula Krishna  College of Engineering,Sullurpet,Nellore', 'NLR'),
(141, 'G1', 'Priyadarshini College of Engineering,Sullurpet,Nellore', 'NLR'),
(142, 'G2', 'Audishankara College of Engg &Technology,Aravinda Nagar, Gudur (M), Nellore  ', 'NLR'),
(143, 'H0', 'AVS College of Engineering & Technology, Verannakanupur (V), Nellore', 'NLR'),
(144, 'K2', 'Quba College of Engineering & Technology,Venkatachalam,Nellore', 'NLR'),
(145, 'L4', 'Mekapati Rajamohan Reddy Inst. of Tech & Science,Udayagiri,Nellore', 'NLR'),
(146, 'R6', 'Priyadarshini College of Engineering Technology, Kanuparthipadu,Nellore', 'NLR'),
(147, '3K', 'Brahmas Institute of Engineering & Technology,North Raju Palem (V & P), Kodavalu', 'NLR'),
(148, '8Z', 'Priyadarshini Institute of Technology, Kanuparthipadu, Nellore-524 004.', 'NLR'),
(149, '9C', 'SKR College of Engineering & Technology, , Konduru Satram (V), \r\nManubolu (M), N', 'NLR'),
(150, 'HP', 'Audisankara College of Engineering for Women, Gudur (M), Nellore', 'NLR'),
(151, '8W', 'KSN Institute of Technology, Kovur (V & M), SPSR Nellore Dist-524 137.', 'NLR'),
(152, 'HN', 'Atmakur Engineering College, Nellorepalem (V), Atmakur (M), SPSR Nellore Dist-52', 'NLR'),
(153, 'JN', 'Sree Venkateswara College of Engineering, Kodavalur (V&M)-524 316, SPSR Nellore ', 'NLR'),
(154, 'KB', 'N.B.K.R. Institute of Science & Technology (Autonomous),Vidyanagar, Kota (M),\r\nS', 'NLR'),
(155, '9Q', 'Audisankara College of P.G. Studies, NH-5 Bypass Road, Aravinda Nagar,  \r\nGudur ', 'NLR'),
(156, 'HF', 'Noble College of Computer Science - MBA\r\nMusunur,  KAVALI – 524 202,  SPSR Nello', 'NLR'),
(157, 'T1', 'Balaji College of Pharmacy,', 'ATP'),
(158, 'L8', 'Raghavendra Institute of  Pharmaceutical  Education & Research', 'ATP'),
(159, 'KD', 'Arpitha Srinivas College of Pharmacy', 'CTR'),
(160, 'AF', 'Krishna Teja Pharmacy College', 'CTR'),
(161, 'HW', 'Mahathi College of Pharmacy', 'CTR'),
(162, 'CP', 'Seshachala College of Pharmacy', 'CTR'),
(163, 'CQ', 'Seven Hills College of Pharmacy', 'CTR'),
(164, 'P9', 'Sree Vidyaniketan College of Pharmacy', 'CTR'),
(165, 'Q0', 'Sri Krishna Chaithanya College of  Pharmacy', 'CTR'),
(166, 'Q1', 'Sri Lakshmi Narasimha College of Pharmacy', 'CTR'),
(167, '42', 'Sri Padmavathi School of Pharmacy', 'CTR'),
(168, 'GT', 'Sri Venkateswara College of Pharmacy', 'CTR'),
(169, 'M7', 'Annamacharya College of Pharmacy', 'KDP'),
(170, 'FN', 'Fathima Institute of Pharmacy', 'KDP'),
(171, 'G9', 'Nirmala College of Pharmacy', 'KDP'),
(172, '44', 'P.Rami Reddy Memorial College of Pharmacy', 'KDP'),
(173, '4T', 'Sri Lakshmi Venkateswara Institute of Pharmaceutical Sciences', 'KDP'),
(174, 'DC', 'Srinivasa Institute of Pharmaceutical Sciences', 'KDP'),
(175, '4U', 'Vasavi Institute of Pharmaceutical Sciences', 'KDP'),
(176, 'Y0', 'Creative Educational Society’s College of Pharmacy', 'KNL'),
(177, 'ER', 'Dr.K.V.Subba Reddy Institute of Pharmacy', 'KNL'),
(178, '4R', 'Prabhath Institute of Pharmacy', 'KNL'),
(179, 'Q2', 'Safa College of Pharmacy', 'KNL'),
(180, 'HC', 'Santhiram College of Pharmacy', 'KNL'),
(181, 'EA', 'St. John’s College of Pharmaceutical Sciences', 'KNL'),
(182, 'Z7', 'Gokula Krishna College of Pharmacy', 'NLR'),
(183, 'Y1', 'Jagan’s College of Pharmacy', 'NLR'),
(184, '4Q', 'Narayana Pharmacy College', 'NLR'),
(185, 'P2', 'Rao’s College of Pharmacy', 'NLR'),
(186, 'DM', 'Ratnam Institute of Pharmacy', 'NLR'),
(187, 'CN', 'S.Chaavan College of Pharmacy', 'NLR'),
(188, 'DK', 'Saastra College of Pharmaceutical Educational & Research', 'NLR'),
(189, '9P', 'Sun Institute of Pharmaceutical Education and Research', 'NLR'),
(190, '9N', 'Swathi College of Pharmacy', 'NLR'),
(191, 'Q3', 'Vagdevi College of Pharmacy and Research Centre', 'NLR'),
(192, 'DJ', 'Sasikanthreddy College of Pharmacy', 'NLR'),
(193, '9D', 'Sri Padmavathi Engineering College,Kavali,Nellore.', 'NLR'),
(194, 'KE', 'SIR C.V RAMAN INSTITUTE OF MANAGEMENT STUDIES', 'ATP'),
(195, 'KF', 'Sanskrithi School of Engineering, puttaparthi, Anantapuramu Dist', 'ATP'),
(196, 'KG', 'Riper Institute of Management Studies, Anantapur', 'ATP');

-- --------------------------------------------------------

--
-- Table structure for table `col_login`
--

CREATE TABLE `col_login` (
  `id` int(11) NOT NULL,
  `col_code` char(2) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `col_login`
--

INSERT INTO `col_login` (`id`, `col_code`, `username`, `password`) VALUES
(1, '09', '09', 'PRINCIPAL_09'),
(2, '12', '12', 'PRINCIPAL_12'),
(3, '19', '19', 'PRINCIPAL_19'),
(4, '2F', '2F', 'PRINCIPAL_2F'),
(5, '2G', '2G', 'PRINCIPAL_2G'),
(6, '2H', '2H', 'PRINCIPAL_2H'),
(7, '2J', '2J', 'PRINCIPAL_2J'),
(8, '2K', '2K', 'PRINCIPAL_2K'),
(9, '2M', '2M', 'PRINCIPAL_2M'),
(10, '2N', '2N', 'PRINCIPAL_2N'),
(11, '2P', '2P', 'PRINCIPAL_2P'),
(12, '2Q', '2Q', 'PRINCIPAL_2Q'),
(13, '2R', '2R', 'PRINCIPAL_2R'),
(14, '2T', '2T', 'PRINCIPAL_2T'),
(15, '2U', '2U', 'PRINCIPAL_2U'),
(16, '38', '38', 'PRINCIPAL_38'),
(17, '3A', '3A', 'PRINCIPAL_3A'),
(18, '3C', '3C', 'PRINCIPAL_3C'),
(19, '3D', '3D', 'PRINCIPAL_3D'),
(20, '3E', '3E', 'PRINCIPAL_3E'),
(21, '3F', '3F', 'PRINCIPAL_3F'),
(22, '3G', '3G', 'PRINCIPAL_3G'),
(23, '3H', '3H', 'PRINCIPAL_3H'),
(24, '3J', '3J', 'PRINCIPAL_3J'),
(25, '3K', '3K', 'PRINCIPAL_3K'),
(26, '3M', '3M', 'PRINCIPAL_3M'),
(27, '3N', '3N', 'PRINCIPAL_3N'),
(28, '3P', '3P', 'PRINCIPAL_3P'),
(29, '3Q', '3Q', 'PRINCIPAL_3Q'),
(30, '3R', '3R', 'PRINCIPAL_3R'),
(31, '3T', '3T', 'PRINCIPAL_3T'),
(32, '3U', '3U', 'PRINCIPAL_3U'),
(33, '4A', '4A', 'PRINCIPAL_4A'),
(34, '4C', '4C', 'PRINCIPAL_4C'),
(35, '4D', '4D', 'PRINCIPAL_4D'),
(36, '4E', '4E', 'PRINCIPAL_4E'),
(37, '4F', '4F', 'PRINCIPAL_4F'),
(38, '4G', '4G', 'PRINCIPAL_4G'),
(39, '4H', '4H', 'PRINCIPAL_4H'),
(40, '4J', '4J', 'PRINCIPAL_4J'),
(41, '4K', '4K', 'PRINCIPAL_4K'),
(42, '4M', '4M', 'PRINCIPAL_4M'),
(43, '4N', '4N', 'PRINCIPAL_4N'),
(44, '4P', '4P', 'PRINCIPAL_4P'),
(45, '5K', '5K', 'PRINCIPAL_5K'),
(46, '5M', '5M', 'PRINCIPAL_5M'),
(47, '5N', '5N', 'PRINCIPAL_5N'),
(48, '5P', '5P', 'PRINCIPAL_5P'),
(49, '69', '69', 'PRINCIPAL_69'),
(50, '70', '70', 'PRINCIPAL_70'),
(51, '71', '71', 'PRINCIPAL_71'),
(52, '72', '72', 'PRINCIPAL_72'),
(53, '73', '73', 'PRINCIPAL_73'),
(54, '74', '74', 'PRINCIPAL_74'),
(55, '75', '75', 'PRINCIPAL_75'),
(56, '78', '78', 'PRINCIPAL_78'),
(57, '8P', '8P', 'PRINCIPAL_8P'),
(58, '8Q', '8Q', 'PRINCIPAL_8Q'),
(59, '8R', '8R', 'PRINCIPAL_8R'),
(60, '8T', '8T', 'PRINCIPAL_8T'),
(61, '8U', '8U', 'PRINCIPAL_8U'),
(62, '8W', '8W', 'PRINCIPAL_8W'),
(63, '8X', '8X', 'PRINCIPAL_8X'),
(64, '8Y', '8Y', 'PRINCIPAL_8Y'),
(65, '8Z', '8Z', 'PRINCIPAL_8Z'),
(66, '9A', '9A', 'PRINCIPAL_9A'),
(67, '9B', '9B', 'PRINCIPAL_9B'),
(68, '9C', '9C', 'PRINCIPAL_9C'),
(69, '9D', '9D', 'PRINCIPAL_9D'),
(70, '9E', '9E', 'PRINCIPAL_9E'),
(71, '9F', '9F', 'PRINCIPAL_9F'),
(72, '9G', '9G', 'PRINCIPAL_9G'),
(73, '9H', '9H', 'PRINCIPAL_9H'),
(74, '9J', '9J', 'PRINCIPAL_9J'),
(75, '9K', '9K', 'PRINCIPAL_9K'),
(76, '9L', '9L', 'PRINCIPAL_9L'),
(77, '9M', '9M', 'PRINCIPAL_9M'),
(78, '9Q', '9Q', 'PRINCIPAL_9Q'),
(79, '9R', '9R', 'PRINCIPAL_9R'),
(80, '9T', '9T', 'PRINCIPAL_9T'),
(81, '9U', '9U', 'PRINCIPAL_9U'),
(82, '9W', '9W', 'PRINCIPAL_9W'),
(83, '9X', '9X', 'PRINCIPAL_9X'),
(84, '9Y', '9Y', 'PRINCIPAL_9Y'),
(85, 'AK', 'AK', 'PRINCIPAL_AK'),
(86, 'AM', 'AM', 'PRINCIPAL_AM'),
(87, 'AT', 'AT', 'PRINCIPAL_AT'),
(88, 'BC', 'BC', 'PRINCIPAL_BC'),
(89, 'BF', 'BF', 'PRINCIPAL_BF'),
(90, 'BG', 'BG', 'PRINCIPAL_BG'),
(91, 'BM', 'BM', 'PRINCIPAL_BM'),
(92, 'BP', 'BP', 'PRINCIPAL_BP'),
(93, 'E8', 'E8', 'PRINCIPAL_E8'),
(94, 'EH', 'EH', 'PRINCIPAL_EH'),
(95, 'F1', 'F1', 'PRINCIPAL_F1'),
(96, 'F2', 'F2', 'PRINCIPAL_F2'),
(97, 'F3', 'F3', 'PRINCIPAL_F3'),
(98, 'F4', 'F4', 'PRINCIPAL_F4'),
(99, 'F5', 'F5', 'PRINCIPAL_F5'),
(100, 'F6', 'F6', 'PRINCIPAL_F6'),
(101, 'F7', 'F7', 'PRINCIPAL_F7'),
(102, 'F8', 'F8', 'PRINCIPAL_F8'),
(103, 'FH', 'FH', 'PRINCIPAL_FH'),
(104, 'G0', 'G0', 'PRINCIPAL_G0'),
(105, 'G1', 'G1', 'PRINCIPAL_G1'),
(106, 'G2', 'G2', 'PRINCIPAL_G2'),
(107, 'G3', 'G3', 'PRINCIPAL_G3'),
(108, 'G8', 'G8', 'PRINCIPAL_G8'),
(109, 'H0', 'H0', 'PRINCIPAL_H0'),
(110, 'HD', 'HD', 'PRINCIPAL_HD'),
(111, 'HE', 'HE', 'PRINCIPAL_HE'),
(112, 'HF', 'HF', 'PRINCIPAL_HF'),
(113, 'HG', 'HG', 'PRINCIPAL_HG'),
(114, 'HH', 'HH', 'PRINCIPAL_HH'),
(115, 'HJ', 'HJ', 'PRINCIPAL_HJ'),
(116, 'HK', 'HK', 'PRINCIPAL_HK'),
(117, 'HL', 'HL', 'PRINCIPAL_HL'),
(118, 'HM', 'HM', 'PRINCIPAL_HM'),
(119, 'HN', 'HN', 'PRINCIPAL_HN'),
(120, 'HP', 'HP', 'PRINCIPAL_HP'),
(121, 'HQ', 'HQ', 'PRINCIPAL_HQ'),
(122, 'HR', 'HR', 'PRINCIPAL_HR'),
(123, 'HT', 'HT', 'PRINCIPAL_HT'),
(124, 'HU', 'HU', 'PRINCIPAL_HU'),
(125, 'HW', 'HW', 'PRINCIPAL_HW'),
(126, 'HX', 'HX', 'PRINCIPAL_HX'),
(127, 'HY', 'HY', 'PRINCIPAL_HY'),
(128, 'HZ', 'HZ', 'PRINCIPAL_HZ'),
(129, 'JA', 'JA', 'PRINCIPAL_JA'),
(130, 'JB', 'JB', 'PRINCIPAL_JB'),
(131, 'JC', 'JC', 'PRINCIPAL_JC'),
(132, 'JD', 'JD', 'PRINCIPAL_JD'),
(133, 'JE', 'JE', 'PRINCIPAL_JE'),
(134, 'JF', 'JF', 'PRINCIPAL_JF'),
(135, 'JG', 'JG', 'PRINCIPAL_JG'),
(136, 'JH', 'JH', 'PRINCIPAL_JH'),
(137, 'JJ', 'JJ', 'PRINCIPAL_JJ'),
(138, 'JK', 'JK', 'PRINCIPAL_JK'),
(139, 'JL', 'JL', 'PRINCIPAL_JL'),
(140, 'JM', 'JM', 'PRINCIPAL_JM'),
(141, 'JN', 'JN', 'PRINCIPAL_JN'),
(142, 'JQ', 'JQ', 'PRINCIPAL_JQ'),
(143, 'JR', 'JR', 'PRINCIPAL_JR'),
(144, 'JT', 'JT', 'PRINCIPAL_JT'),
(145, 'JU', 'JU', 'PRINCIPAL_JU'),
(146, 'JW', 'JW', 'PRINCIPAL_JW'),
(147, 'JX', 'JX', 'PRINCIPAL_JX'),
(148, 'JY', 'JY', 'PRINCIPAL_JY'),
(149, 'JZ', 'JZ', 'PRINCIPAL_JZ'),
(150, 'K2', 'K2', 'PRINCIPAL_K2'),
(151, 'K5', 'K5', 'PRINCIPAL_K5'),
(152, 'KA', 'KA', 'PRINCIPAL_KA'),
(153, 'KB', 'KB', 'PRINCIPAL_KB'),
(154, 'KC', 'KC', 'PRINCIPAL_KC'),
(155, 'KE', 'KE', 'PRINCIPAL_KE'),
(156, 'L2', 'L2', 'PRINCIPAL_L2'),
(157, 'L4', 'L4', 'PRINCIPAL_L4'),
(158, 'P1', 'P1', 'PRINCIPAL_P1'),
(159, 'R6', 'R6', 'PRINCIPAL_R6'),
(160, 'W5', 'W5', 'PRINCIPAL_W5'),
(161, 'X5', 'X5', 'PRINCIPAL_X5');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(10) NOT NULL,
  `cou_code` char(2) NOT NULL,
  `cou_name` varchar(30) NOT NULL,
  `cou_fullname` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `cou_code`, `cou_name`, `cou_fullname`) VALUES
(1, 'A', 'B.Tech', 'Bachler of Technology'),
(2, 'R', 'B.Pharm', 'Bachler of Pharmacy'),
(3, '1T', 'Pharm D', 'Doctor of Pharmacy'),
(4, 'E', 'MBA', 'Masters in Business administration'),
(7, 'D', 'M.Tech', 'Master of Technology'),
(8, 'F', 'MCA', 'Master of Computer applications'),
(9, 'S', 'M.Pharm', 'Master of Pharmacy'),
(13, '1G', 'M.Sc', 'Master of Science'),
(14, '5T', 'Pharm D(PB)', 'Doctor of Pharmacy(PB)');

-- --------------------------------------------------------

--
-- Table structure for table `first_year`
--

CREATE TABLE `first_year` (
  `id` int(11) NOT NULL,
  `col_code` char(2) NOT NULL,
  `cou_code` char(2) NOT NULL,
  `year` varchar(11) NOT NULL,
  `convener` int(11) NOT NULL,
  `spot` int(11) NOT NULL,
  `management` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `actual_pay` int(11) NOT NULL,
  `paid` int(11) NOT NULL,
  `due` int(11) NOT NULL,
  `eng_year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `first_year`
--

INSERT INTO `first_year` (`id`, `col_code`, `cou_code`, `year`, `convener`, `spot`, `management`, `total`, `actual_pay`, `paid`, `due`, `eng_year`) VALUES
(14, '09', 'A', 'II Year', 2, 2, 2, 6, 11100, 10000, 1100, 2017),
(15, '09', '5T', 'II Year', 2, 2, 2, 6, 6000, 6000, 0, 2017),
(16, '09', 'R', 'III Year', 2, 2, 2, 6, 6600, 6000, 600, 2017),
(17, '09', 'S', 'III Year', 2, 2, 2, 6, 5400, 5000, 400, 2017);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `balance`
--
ALTER TABLE `balance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `col_code` (`col_code`);

--
-- Indexes for table `col_login`
--
ALTER TABLE `col_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `col_code` (`col_code`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `course_code` (`cou_code`);

--
-- Indexes for table `first_year`
--
ALTER TABLE `first_year`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `balance`
--
ALTER TABLE `balance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `col_login`
--
ALTER TABLE `col_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `first_year`
--
ALTER TABLE `first_year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

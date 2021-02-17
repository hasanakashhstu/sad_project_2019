-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2021 at 02:41 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lets_travel_bangladesh`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Md.Kamrul Hasan', 'hasanakash0215@gmail.com', '01773303096'),
(2, 'Asraf Jahan Tamanna', 'asrafjahantamanna@gmail.com', '01720689393'),
(3, 'Shawon Shariff', 'shawon@gmail.com', 'shawon123');

-- --------------------------------------------------------

--
-- Table structure for table `agencies`
--

CREATE TABLE `agencies` (
  `agency_id` int(11) NOT NULL,
  `agency_name` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agencies`
--

INSERT INTO `agencies` (`agency_id`, `agency_name`, `contact`, `email`, `link`) VALUES
(1, 'ToiToi', '\r\n01770-080880', 'toitoi.travels@gmail.com', 'https://www.facebook.com/toitoitoursandtravels/'),
(2, 'TimTim', '01790-106620', 'sabihasharna20@gmail.com', 'https://www.facebook.com/TimTim.bd/?eid=ARAsX3H1vEyGOG9GFAZlT3An_NlJvBJhD2ASqiqGMDmtsWN3CZbusDlUEWfIMPyiuGv4-L3HFLPUwhqP');

-- --------------------------------------------------------

--
-- Table structure for table `event_group`
--

CREATE TABLE `event_group` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(255) DEFAULT NULL,
  `event_info` text NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_group`
--

INSERT INTO `event_group` (`event_id`, `event_name`, `event_info`, `link`, `contact`, `email`) VALUES
(1, 'Corporate Event(2020)', 'On this February 2020, We are going to visit Bandarban .We are planning to stay there for 4 days.Every information is provided at the event link given below.You can check it out.', 'www.facebook.com/Corporate-Event-2020/posts/20987363', '01734546576', 'toitoi_event@gmail.com'),
(2, 'Megher desh Sajek besh ', 'On this January 2020, We are going to visit Sajek,Khagrachori .We are planning to stay there for 3 days.Every information is provided at the event link given below.You can check it out.\r\nCome and travel our beautiful country with us.', 'www.facebook.com/Event39/posts/7453756475', '01400756453', 'travelandtour@gmail.com'),
(3, 'cholo jai Monpura Dip', 'On this March 2020, We are going to visit Monpura dip(Hatia) .We are planning to stay there for 2 days.Every information is provided at the event link given below.You can check it out.', 'www.facebook.com/event25/posts/876587', '01923546576', 'ghuraghuri@gmail.com'),
(4, 'Let\'s wander into the falls', 'We are going to have a visit to the Nafakhum(Bandarban), a place of beauty and wonders in Bangladesh.We provided all the details in the group event.Follow us.', 'www.facebook.com/event89/posts/4653746543', '01770464545', 'wanders.23@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `place_id` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `place_name` varchar(255) DEFAULT NULL,
  `full_description` text DEFAULT NULL,
  `region` varchar(255) NOT NULL,
  `route` text DEFAULT NULL,
  `hotel1` varchar(255) DEFAULT NULL,
  `hotel2` varchar(255) DEFAULT NULL,
  `police` varchar(255) DEFAULT NULL,
  `hospital` varchar(255) DEFAULT NULL,
  `fire_service` varchar(255) DEFAULT NULL,
  `guide` varchar(255) DEFAULT NULL,
  `rating` int(10) NOT NULL,
  `image` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`place_id`, `cate_id`, `place_name`, `full_description`, `region`, `route`, `hotel1`, `hotel2`, `police`, `hospital`, `fire_service`, `guide`, `rating`, `image`) VALUES
(16, 1, 'St. Martin\'s Island ', 'St. Martin\'s Island (Bengali: à¦¸à§‡à¦¨à§à¦Ÿ à¦®à¦¾à¦°à§à¦Ÿà¦¿à¦¨à§à¦¸ à¦¦à§à¦¬à§€à¦ª) is a small island (area only 36 km2) in the northeastern part of the Bay of Bengal, about 9 km south of the tip of the Cox\'s Bazar-Teknaf peninsula, and forming the southernmost part of Bangladesh. There is a small adjoining island that is separated at high tide, called Chera Dwip. It is about 8 kilometres (5 miles) west of the northwest coast of Myanmar, at the mouth of the Naf River.', 'Chittagong', 'Dhaka->Cox\'s bazar->Teknaf->St. Martin\'s Island ', 'Hotel Marmaid(017720380659)', 'Hotel Seaview(015478380650)', 'St. Martin\'s Police Station(01892305781)', 'St. Martin\'s Genaral Hospital(01456786981)', 'Teknaf Fire Service(019456824585)', 'Saplu da(01739757975)', 5, 0x646f776e6c6f61642e6a7067),
(17, 1, 'Cox\'s Bazar', 'Cox\'s Bazar (Bengali: à¦•à¦•à§à¦¸à¦¬à¦¾à¦œà¦¾à¦°) is a city, fishing port, tourism centre and district headquarters in southeastern Bangladesh. The beach in Cox\'s Bazar is sandy and has a gentle slope and with an unbroken length of 155 km (96 mi) it is often termed the \"longest natural unbroken sea beach\" in the world.', 'Chittagong', 'Dhaka->Cox\'s bazar', 'Hotel Paradise (+8801676789888)', 'Hotel sea king (+8806786789888)', 'Cox\'s Bazar Thana (+8801675678868)', 'Cox\'s Bazar Genaral Hospital(01456786981)', 'Cox\'s Bazar Fire Service(019456824585)', 'Md.Salam (01739757975)', 5, 0x363637343531373136335f613861653962396636345f622e6a7067),
(18, 1, 'kuakata', 'Kuakata (Bengali: à¦•à§à¦¯à¦¼à¦¾à¦•à¦¾à¦Ÿà¦¾) is a beach town known for its panoramic sea beach.It is in southeastern Bangladesh and is the number sizeable tourist destination in the country. Kuakata beach is a sandy expanse 18 kilometres (11 mi) long and 3 kilometres (1.9 mi) wide. From the beach one can have an unobstructed view of both sunrise and sunset over the Bay of Bengal.', 'Khulna', 'Dhaka->	Patuakhali->kuakata', 'Hotel AustarEco(017720380659)', 'Hotel Sealand(015478380650)', 'kuakataThana (+8801675678868)', 'kuakata Genaral Hospital(01456786981)', 'kuakata Fire Service(019456824585)', 'Md.Hasan(01679357965)', 4, 0x38303070782d53756e7365745f61745f4b75616b6174615f62656163685f2831292e6a7067),
(19, 2, 'Keokradong', 'Keokradong is a peak located in Bandarban, Bangladesh, with an elevation of 986 metres (3,235 ft).Some sources claim it as the highest point of Bangladesh.  On the top of Keokradong there is a small shelter and a signboard put up by Bangladesh Army proclaiming the elevation to be 967 metres (3,173 ft).', 'Chittagong', 'Dhaka->Bandarban->Ruma->Keokradong', 'Lodge Keokradong (01844662233)', 'Hotel Mountain(015478380650)', 'Ruma Thana (+8801675678868)', 'Ruma Genaral Hospital(01456786981)', 'Ruma Fire Service(019456824585)', 'Saful Boruya(01739757975)', 5, 0x31353533323831373833395f356134343837333262645f622e6a7067),
(20, 2, 'Chandranath Hill', 'Chandranath Hills is the eastern part of the Himalayas separated from the Himalayas. This hill goes south and south-east of the Himalayas and crosses the Feni River through Assam and Tripura states of India and joins Chittagong. From the Feni river to the Chittagong city, it is about 70 kilometers long. Sitakunda Eco Park is built on the foothills of this hill', 'Chittagong', 'Dhaka->Chittagong>Chandranath', 'Hotel Paharika (017720380659)', 'Hotel Hill Mountain (015478380650)', 'sitakunda Thana (+8801675678868)', 'sitakunda Genaral Hospital(01456786981)', 'sitakundaFire Service(019456824585)', 'Md.Hasan (01679357965)', 4, 0x38303070782d566965775f66726f6d5f7468655f4368616e6472616e6174685f48696c6c5f283433343933363630353832292e6a7067),
(21, 2, 'Sajek Valley ', 'Sajek Valley - à¦¸à¦¾à¦œà§‡à¦• à¦­à§à¦¯à¦¾à¦²à¦¿ / à¦®à§‡à¦˜à§‡à¦° à¦‰à¦ªà¦¤à§à¦¯à¦•à¦¾à¦¯à¦¼ à¦œà§€à¦¬à¦¨ is an emerging tourist spot in Bangladesh situated among the hills of Kasalong range of mountains in Sajek union, Baghaichhari Upazila in Rangamati District.The valley is 1,800 feet (550 m) above sea level. Sajek valley is known as the Queen of Hills & Roof of Rangamati.', 'Chittagong', 'Dhaka->khagrachari>Sajek Valley ', 'Hotel Paharika (+8801676789888)', 'Hotel Hillview(015478380650)', 'Baghaichhari Thana (+8801675678868)', 'Baghaichhari Genaral Hospital(01456786981)', 'Baghaichhari Fire Service(019456824585)', 'Saplu da(01739757975)', 5, 0x446973636f7665722d73616a656b2d76616c6c65792d31303234783730312e6a7067),
(22, 3, 'Lalbagh Fort', 'Lalbagh Fort (also Fort Aurangabad) is an incomplete 17th century Mughal fort complex that stands before the Buriganga River in the southwestern part of Dhaka, Bangladesh.The construction was started in 1678 AD by Mughal Subahdar Muhammad Azam Shah who was son of Emperor Aurangzeb and later emperor himself. His successor, Shaista Khan, did not continue the work, though he stayed in Dhaka up to 1688.  The fort was never completed, and unoccupied for a long period of time. Much of the complex was built over and now sits across from modern buildings.', 'Dhaka', 'Dhaka->Lalbagh Fort', 'Hotel Sheraton (017720380659)', 'Hotel Sonargong (015478380650)', 'Dhaka DMP (+8801675678868)', 'Dhaka Genaral Hospital(01456786981)', 'Dhaka Fire Service(019456824585)', 'Md.Salam (01739757975)', 4, 0x7261696e792d6461792d6c616c6261672d666f6e742d6f6c642d6468616b612e6a7067),
(23, 3, 'Kantanagar Temple', 'Kantanagar Temple, commonly known as Kantaji Temple or Kantajew Temple (Bengali: à¦•à¦¾à¦¨à§à¦¤à¦œà§€à¦° à¦®à¦¨à§à¦¦à¦¿à¦°) at Kantanagar, is a late-medieval Hindu temple in Dinajpur, Bangladesh. The Kantajew Temple is one of the most magnificent religious edifices belonging to the 18th century. The temple belongs to the popular Hindu Kanta or Krishna and this is most popular with the Radha-Krishna cult (assemble of memorable love) in Bengal.', 'Rangpur', 'Dhaka->Dinajpur->Kantanagar', 'Hotel Dimond (017720380659)', 'Hotel Afia Int. (015478380650)', 'Kaharol Thana (+8801675678868)', 'Kaharol Genaral Hospital(01456786981)', 'Kaharol Fire Service(019456824585)', 'Akash 1521469280', 3, 0x4b616e74616a695f54656d706c655f44696e616a7075725f42616e676c61646573685f283132292e6a7067),
(24, 4, 'Hum Hum Waterfall', 'Hum Hum is a waterfall in Moulvibazar, Bangladesh. It was discovered in 2010. It is situated in Razkandi reserve forest, Sreemangal,Maulvibazar district, Sylhet.  The height of the fall is about 147 to 160 feet.', 'Sylhet', 'Dhaka->Shreemangal->Teknaf->Hum Hum Waterfall', 'Hotel Shreemangal (+8801676789888)', 'Hotel Viewin (015478380650)', 'Shreemangal Thana (+8801675678868) ', 'Shreemangal Genaral Hospital(01456786981)', 'Shreemangal Fire Service(019456824585)', 'Md.Rabbani (01679357965)', 5, 0x6d617872657364656661756c742e6a7067),
(25, 4, 'Nafa-khum', 'NgafaKhong à¦™à¦¾à¦«à¦¾à¦–à§‹à¦‚ (Native Marma term) o - to non nasal sound people (Bengali: à¦¨à¦¾à¦«à¦¾à¦–à§à¦®) is a waterfall in Bangladesh on the Remaikree River, a tributory of Regrekhyong/Sangu river. It is among the largest waterfalls in the country by volume of water falling.The wild hilly Remaikree river suddenly falls down here about 25â€“30 feet.', 'Sylhet', 'Dhaka->Bandarban->Thanchi>Nafa-khum', 'Hotel Hillview (017720380659)', 'Hotel Hillton (015478380650)', 'Thanchi Thana (+8801675678868)', 'Thanchi Genaral Hospital(01456786981)', 'Thanchi Fire Service(019456824585)', 'Saplu da(01739757975)', 5, 0x6d617872657364656661756c74202831292e6a7067),
(26, 4, 'Khoiyachora Waterfall', 'Khoiyachora Waterfall is a hilly waterfall which is situated on the hills of Mirsharai, Chittagong, Bangladesh . Among many other waterfalls in Mirsarai upazila, such as Komoldoho Waterfall, Napittachora Waterfall, Napittachora Waterfall, Sahasradhara Waterfall, Jharjhari Waterfall etc., Khoiyachora waterfall and its corridor is one of the largest in this hilly belt. The Khoiyachora waterfall has a total of seven major waterfalls (cascade) and many isolated steps.', 'Chittagong', 'Dhaka->Mirsharai->Khoiyachora Waterfall', 'Hotel Mirsharai (+8801676789888)', 'Hotel Sitakunda (015478380650)', 'Mirsharai Thana (+8801675678868)', 'Mirsharai Genaral Hospital(01456786981)', 'Mirsharai Fire Service(019456824585)', 'Md.Salam khan (01739757975)', 4, 0x6b686169796163686172612d66616c6c732e6a7067),
(27, 5, 'Tanguar haor ', 'Tanguar haor (Bengali: à¦Ÿà¦¾à¦™à§à¦—à§à¦¯à¦¼à¦¾à¦° à¦¹à¦¾à¦“à¦°,also called Tangua haor), located in the Dharmapasha and Tahirpur upazilas of Sunamganj District in Bangladesh, is a unique wetland ecosystem of national importance and has come into international focus. The area of Tanguar haor including 46 villages within the haor is about 100 square kilometres (39 sq mi) of which 2,802.36 ha2 is wetland. It is the source of livelihood for more than 40,000 people.', 'Sylhet', 'Dhaka-> Sunamganj->Tanguar haor ', 'Hotel Sunamganj(017720380659)', 'Hotel Haor (015478380650)', 'Sunamganj Thana (+8801675678868)', 'Sunamganj Genaral Hospital(01456786981)', 'Sunamganj Fire Service(019456824585)', 'Md.Islam 01739757975)', 4, 0x746563686e6f6c6f67795f61745f74616e677561725f68616f72312e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `place_cate`
--

CREATE TABLE `place_cate` (
  `cate_id` int(11) NOT NULL,
  `place_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place_cate`
--

INSERT INTO `place_cate` (`cate_id`, `place_type`) VALUES
(1, 'Sea Beaches'),
(2, 'Hills & Mountains'),
(3, 'Historical Places'),
(4, 'Waterfalls'),
(5, 'Rivers & Lakes'),
(6, 'Theme Parks'),
(7, 'Museums'),
(8, 'Eco Parks'),
(9, 'Islands'),
(10, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `place_review`
--

CREATE TABLE `place_review` (
  `review_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `visited_place` varchar(255) DEFAULT NULL,
  `date_of_visit` date DEFAULT NULL,
  `experience` text DEFAULT NULL,
  `review` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place_review`
--

INSERT INTO `place_review` (`review_id`, `name`, `email`, `visited_place`, `date_of_visit`, `experience`, `review`) VALUES
(1, 'fghjk', 'shahadshadman9@gmail.com', 'dgfghjkjlk', '2020-01-01', 'zdxcvbiugv bjhnzdxtcryguihoidxgfchjbkj', 4),
(2, 'fghjkl', 'hasanakash0215@gmail.com', 'ghjkl;', '2020-01-13', 'fghvjbknlm,;ghjknlm;', 4),
(3, 'akash', 'hasanakash0215@gmail.com', 'saint martin', '2019-11-23', 'It was very beautiful . The colour of the water is ocsan blue', 5),
(4, 'fghjbknlm;', 'ghhjknlm@dxfghjkl', 'bghjkl;', '2020-01-01', 'zexrctvuybinomp,[].', 2),
(5, 'fghjbknlm;', 'ghhjknlm@dxfghjkl', 'bghjkl;', '2020-01-01', 'zexrctvuybinomp,[].', 2),
(6, 'fdfcgvhbjnk', 'xcgvhbnjkm@rxctvbhjnkml', 'rtyuiojkpl;', '2020-01-08', 'fghjbkml;,', 2),
(7, 'fdfcgvhbjnk', 'xcgvhbnjkm@rxctvbhjnkml', 'rtyuiojkpl;', '2020-01-08', 'fghjbkml;,', 2),
(8, 'akash', 'hasanakash0215@gmail.com', 'saint martin', '2019-11-23', 'It was very beautiful . The colour of the water is ocsan blue', 5),
(9, 'akash', 'hasanakash0215@gmail.com', 'saint martin', '2019-11-23', 'It was very beautiful . The colour of the water is ocsan blue', 5),
(10, 'akash', 'hasanakash0215@gmail.com', 'saint martin', '2019-11-23', 'It was very beautiful . The colour of the water is ocsan blue', 5),
(11, 'akash', 'hasanakash0215@gmail.com', 'saint martin', '2019-11-23', 'It was very beautiful . The colour of the water is ocsan blue', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agencies`
--
ALTER TABLE `agencies`
  ADD PRIMARY KEY (`agency_id`);

--
-- Indexes for table `event_group`
--
ALTER TABLE `event_group`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`place_id`),
  ADD KEY `cate_id` (`cate_id`);

--
-- Indexes for table `place_cate`
--
ALTER TABLE `place_cate`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `place_review`
--
ALTER TABLE `place_review`
  ADD PRIMARY KEY (`review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `agencies`
--
ALTER TABLE `agencies`
  MODIFY `agency_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event_group`
--
ALTER TABLE `event_group`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `place_cate`
--
ALTER TABLE `place_cate`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `place_review`
--
ALTER TABLE `place_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `place`
--
ALTER TABLE `place`
  ADD CONSTRAINT `place_ibfk_1` FOREIGN KEY (`cate_id`) REFERENCES `place_cate` (`cate_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

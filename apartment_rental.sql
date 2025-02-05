-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 29, 2024 at 09:16 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apartment_rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_username`, `admin_password`, `role`) VALUES
(1, 'admin@gmail.com', 'admin1234', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ameneties`
--

CREATE TABLE `ameneties` (
  `ameneties_id` int NOT NULL,
  `ameneties_name` varchar(255) NOT NULL,
  `ameneties_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ameneties`
--

INSERT INTO `ameneties` (`ameneties_id`, `ameneties_name`, `ameneties_img`) VALUES
(1, 'internet', 'internet.png'),
(2, 'washing machine', 'washingMachine.png'),
(3, 'Fridge', 'fridge.png'),
(4, 'Stove', 'stove.png'),
(5, 'Working desk', 'desk.png'),
(6, 'Microwave', 'microwave.png');

-- --------------------------------------------------------

--
-- Table structure for table `apartments`
--

CREATE TABLE `apartments` (
  `apartment_id` int NOT NULL,
  `apartment_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `price` decimal(50,0) DEFAULT NULL,
  `info` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `map` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `apartment_img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `bedroom` int DEFAULT NULL,
  `bathroom` int DEFAULT NULL,
  `city_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `apartments`
--

INSERT INTO `apartments` (`apartment_id`, `apartment_name`, `price`, `info`, `map`, `address`, `title`, `apartment_img`, `bedroom`, `bathroom`, `city_id`) VALUES
(1, 'Cosy Private Room in London', '1300', 'Delight in this stylish and welcoming space!\r\n\r\nThis private room in London offers a spacious and comfortable stay, ideal for couples or solo travelers ready to discover the city.\r\n\r\nConveniently situated near the Tottenham Hotspur Stadium, with a shopping mall and train station just a short distance away.\r\n\r\nThe property includes six private rooms, three shared bathrooms, and a fully-equipped communal kitchen, allowing you to prepare meals at your convenience.', 'https://maps.google.com/maps?q=London,Tottenham&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed', '79 The Roundway, London, United Kingdom, N17 7HE', '2 beds   •   2 bathrooms   •   4 guests   •   90 ft²   •   1. floor', 'apartment.jpg', 2, 2, 1),
(2, 'The Hive, Private Room, Barking', '1500', 'The Hive is a clean large double bedroom, that sleeps 2 comfortably, it has an extended balcony with great views.  The bedroom comes with beddings, towels, wardrobe, desk, bedside table, large bathroom (shared).  For your stay, the house is fully equipped with a microwave, dishwasher, washing machine, kitchen utensils, and other items. The Hive offers free WIFI, a free car park, and a private garden.\r\n', 'https://maps.google.com/maps?q=93%20Galleons%20Drive,%20Barking,\r\n%20United%20Kingdom,%20IG11%200JR&amp;\r\nt=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;\r\noutput=embed\"', '93 Galleons Drive, Barking,London, IG11 0JR', '1 bed   •  1 bathroom   •  2 guests   •  110 ft²   •  1. floor\r\n', 'apartment3.jpg', 1, 1, 1),
(3, 'The Roundway Styles Private Room', '1450', 'Private Room in London offers a spacious and comfortable living space ideal for couple  or solo traveler looking to explore the city.\r\n\r\nThe property is close to Tottenham Hotspur Stadium. Shopping mall and train station.\r\nThe entire house is composed of 6 bedrooms.  This is a private room only. \r\n\r\nIts composed of 3 bathrooms and fully equipped kitchen that shared to the other guest.', 'https://maps.google.com/maps?q=79%20The%20Roundway,%20London,%20United%20Kingdom,%20N17%207HE&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed', '79 The Roundway, London, United Kingdom, N17 7HE', '1 bed   •   3 bathrooms   •   2 guests   •   90 ft²   •   1. floor', 'apartment8.jpg', 1, 3, 1),
(4, 'Wembley Stadium 1.5 bedroom apartment', '4500', 'If you\'re searching for an apartment within walking distance of Wembley Stadium, your search ends here. These elegantly designed one- and two-bedroom apartments are situated in an excellent location, just a short 3-minute walk to the Wembley Stadium overland train station and under 10 minutes to both Wembley Central and Wembley Park underground stations. You\'ll enjoy a comprehensive transportation network that provides easy and quick access to the rest of the city.\r\nThe apartments are perfectly situated in one of London’s most vibrant neighborhoods, near the famous Wembley Stadium, the popular London Designer Outlet, and the London Arena, which hosts major concerts and sporting events. Wembley is a lively and dynamic area, known for its excellent dining and nightlife options, ensuring you have plenty of entertainment during your stay.', 'https://maps.google.com/maps?q=356%20High%20Road,%20Wembley,%20United%20Kingdom,%20HA9%206EJ&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed\"', '356 High Road, Wembley, United Kingdom, HA9 6EJ', '2 bedrooms   •  \r\n2 beds   •  \r\n \r\n1 bathroom   •  \r\n \r\n3 guests   •  \r\n \r\n538 ft²   •  \r\n \r\n5. floor', 'apartment7.jpg', 2, 1, 1),
(5, 'The Cozy Corner', '4000', 'A remarkable Georgian\r\napartment located in the heart of Edinburgh?s prestigious West End. This\r\nexquisite property combines historic charm with modern comforts, offering an\r\nunparalleled living experience in one of the city\'s most sought-after\r\nlocations. The spacious\r\nliving area is elegant and grand boasting high ceilings, intricate cornicing, and expansive sash windows, bathing the room in natural light. The kitchen is contemporary, fitted with\r\ntop-of-the-line appliances, sleek cabinetry, and ample counter space. The master\r\nbedroom suite is generously proportioned with fitted wardrobes and a\r\nbeautifully finished en-suite bathroom.', 'https://maps.google.com/maps?q=Edinburgh%20old%20town&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed\" ', 'Edinburgh', '1 bedroom   •  \r\n1 bed   •  \r\n \r\n1 bathroom   •  \r\n \r\n2 guests   •  \r\n \r\n650 ft²   •  \r\n \r\n3. floor', 'apartment9.jpg', 1, 1, 2),
(6, 'Enchanting Oasis Private Balcony', '5200', 'Experience luxury in our 1BR Chelsea apartment—a stylish and contemporary space located in one of London’s most esteemed neighborhoods. Designed for those seeking a refined experience, this bright apartment blends comfort with sophistication, featuring a plush double bed, a comfortable sofa bed, and beautiful balcony views.\r\n\r\nImmerse yourself in elegance with a living area crafted for both relaxation and style. Enjoy a smart TV, a chic coffee table for cozy get-togethers, and a fully-equipped kitchen complete with modern appliances and a dining space for four—ideal for sharing memorable meals.', 'https://maps.google.com/maps?q=Chelsea%20livevpool&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed\" ', 'Liverpool,chelsea', '1 bedroom   •  \r\n1 bed   •  \r\n \r\n1 bathroom   •  \r\n \r\n2 guests   •  \r\n \r\n650 ft²   •  \r\n \r\n3. floor', 'apartment6.jpg', 1, 1, 4),
(7, 'Marvellous 2 bed apartment Edinburgh', '2900', 'This charming 2-bedroom apartment in Edinburgh features a stylish interior with warm tones, creating a cozy and inviting atmosphere—perfect for hosting guests, whether for business or leisure. It offers one single and one double bed, making it a comfortable stay. Situated in a fantastic location, the apartment is surrounded by cafés, shops, and other amenities ideal for traveling families.', 'https://maps.google.com/maps?q=Edinburgh,%20&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed\"', '15/1 Dalgety Avenue, Edinburgh, United Kingdom, EH7 5UQ', '2 bedrooms   •  \r\n2 beds   •  \r\n \r\n1 bathroom   •  \r\n \r\n3 guests   •  \r\n \r\n300 ft²   •  \r\n \r\n1. floor', 'apartment10.png', 2, 1, 2),
(8, '2 bedroom in Liverpool', '2000', 'Welcome to our delightful 2-bedroom boutique apartment, an intimate and private retreat crafted to give you a true home-away-from-home experience. Set in a peaceful location, our hotel combines comfort, elegance, and personalized service to make your stay unforgettable.', 'https://maps.google.com/maps?q=101%20Latimer%20Street,%20Liverpool,%20United%20Kingdom,%20L5%202RF&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed\" ', '101 Latimer Street, Liverpool, United Kingdom, L5 2RF', '2 bedroom   •  \r\n1 bed   •  \r\n \r\n1 bathroom   •  \r\n \r\n2 guests   •  \r\n \r\n270 ft²   •  \r\n \r\n1. floor', 'apartment10.jpeg', 2, 1, 4),
(9, 'Swan House Apartment', '1800', '**Ideal Location:**\r\n\r\nBedroom 1 boasts a snug double bed, and the living room features a sofa bed for additional guests.\r\n\r\n**Comfortable Bedroom Arrangement:**\r\n\r\n- Bedroom 1: 1 x Double Bed\r\n\r\n**Modern Amenities:**\r\n\r\n- Enjoy complimentary WiFi throughout the apartment to stay connected.\r\n- Take advantage of free parking available on-site.\r\n- The apartment is fully furnished and equipped to meet all your needs.\r\n\r\n**Welcoming Living Area:**\r\n\r\n- Relax in the cozy living space, where you can lounge on the sofas and watch your favorite shows on the large TV.\r\n- The dining table is perfect for enjoying meals or working on various projects.', 'https://maps.google.com/maps?q=516A%20Prescot%20Road,%20Liverpool,%20United%20Kingdom,%20L13%203DB&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed\" ', '516A Prescot Road, Liverpool, United Kingdom, L13 3DB', '1 bedroom   •  \r\n1 bed   •  \r\n \r\n1 bathroom   •  \r\n \r\n1 guest   •  \r\n \r\n35 ft²   •  \r\n \r\n1. floor', 'apartment11.jpg', 1, 1, 4),
(10, 'Sunny 2-bedroom apartment', '2500', 'Welcome to Liverpool! We have a genuine love for our lively city. A multitude of experiences and discoveries awaits you, and we aim to make your stay in our delightful apartments truly memorable. The apartment features 2 bedrooms, a flat-screen TV with satellite channels, a fully equipped kitchen with a dishwasher and microwave, a washing machine, and 2 bathrooms with showers. For your convenience, towels and bed linens are available for an extra charge. This property also includes access to a balcony, free private parking, and complimentary WiFi.', 'https://maps.google.com/maps?q=76%20Henry%20Street%20,%20Liverpool,%20United%20Kingdom,%20L1%205BU&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed\"', '76 Henry Street , Liverpool, United Kingdom, L1 5BU', '2 bedrooms   •  \r\n2 beds   •  \r\n \r\n1 bathroom   •  \r\n \r\n6 guests   •  \r\n \r\n807 ft²   •  \r\n \r\n2. floor', 'apartment12.jpeg', 2, 1, 4),
(11, 'Double bed in heart of Cambridge ', '4500', 'All rooms are completely furnished. Guests will enjoy a contemporary property that includes an en-suite room with a shower and a desk for working. \r\n\r\nAdditionally, there is access to a shared kitchen.\r\n\r\nThe property is tidy, well-equipped, and features enhanced security measures, including CCTV and key storage systems for convenient access.', 'https://maps.google.com/maps?q=97A%20Mill%20Road,%20Cambridge,%20United%20Kingdom,%20CB1%202AW&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed\" ', '97A Mill Road, Cambridge, United Kingdom, CB1 2AW', '1 bed   •  \r\n \r\n1 bathroom   •  \r\n \r\n1 guest   •  \r\n \r\n100 ft²   •  \r\n \r\n3. floor', 'cambridge.png', 1, 1, 3),
(12, 'North Cambridge Guesthouse • Twin Room ', '2800', 'A perfect self-catering accommodation located in Chesterton, Cambridge.  \r\n- The property features 12 en-suite rooms, each equipped with a wardrobe, flat-screen TV, private bathroom, bed linen, and towels.  \r\n- There is also a shared kitchen, dining area, laptop-friendly workspace, and a living area with a smart TV.  \r\n- The kitchen includes fridge freezers for food storage, ovens for cooking, and washing machines for laundry.  \r\n- This accommodation is ideal for those working or enjoying leisure time in North Cambridge, as it is conveniently close to North Cambridge Academy and CATS International School, with easy access to public transport.  \r\n- It comfortably accommodates 2 guests with 2 single beds.', 'https://maps.google.com/maps?q=82%20Arbury%20Road,%20Cambridge,%20United%20Kingdom,%20CB4%202JE&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed', '82 Arbury Road, Cambridge, United Kingdom, CB4 2JE', '2 beds   •   1 bathroom   •   2 guests   •   170 ft²   •   1. floor', 'northCambridge.jpg', 2, 1, 3),
(13, 'Liberty Suite experience the true city apartment', '2850', 'A true home away from home, featuring a separate bedroom from the spacious open-plan living area with a modern fitted kitchen.  \r\n\r\nThe apartment boasts a studio layout that is partially divided, offering a bed for ultimate comfort alongside a generous semi-open living space.  \r\n\r\nThe kitchenette is fully equipped with a dishwasher, fridge freezer, microwave, and hob.', 'https://maps.google.com/maps?q=36%20Princess%20St,%20Manchester%20M1,%20Vereinigtes%20K%C3%B6nigreich&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed\"', '36 Princess St, Manchester M1, Vereinigtes Königreich', '1 bedroom   •  \r\n1 bed   •  \r\n \r\n1 bathroom   •  \r\n \r\n3 guests   •  \r\n \r\n240 ft²   •  \r\n \r\nGround floor\r\n', 'manchester.png', 1, 1, 5),
(14, 'Alabaster Suite', '4200', 'Welcome to the Alabaster Suite, a luxurious apartment located in the heart of central Manchester.\r\n\r\nEnhance your lifestyle and experience the pinnacle of city living in our Alabaster Suite, situated within one of Manchester\'s most stylish and contemporary buildings.\r\n\r\nEnjoy the ultimate luxury in a 740 sq ft space designed for sleek elegance, offering breathtaking views of the stunning Manchester skyline. Immerse yourself in the vibrant high life of the city.\r\n\r\n**Bedrooms:**  \r\nIndulge in the spacious and lavish bedrooms, featuring king-size beds dressed in exquisite bedding. A large double wardrobe, complete with a mirror and lighting, provides the perfect space for your daily preparations.\r\n\r\n**Bathrooms:**  \r\nRelax in the immaculate bathrooms adorned with marble tiles, featuring a combined bath and rainfall shower. Fresh premium linens and a selection of toiletries are provided complimentary during your stay.\r\n\r\n**Kitchen & Dining Area:**  \r\nEnter the open-plan kitchen, a culinary paradise where gourmet meals are effortlessly created. Its seamless flow into the dining area radiates warmth and invites unforgettable moments. Plus, enjoy a selection of Nespresso coffee to elevate your daily rituals. This is a home where culinary magic unfolds.\r\n\r\n**Living Area:**  \r\nUnwind on the incredibly comfortable sofa and armchair. The living room features a state-of-the-art 55\" Smart TV, with standard access to Netflix and Amazon Prime TV.', 'https://maps.google.com/maps?q=21%20Derwent%20Street,%20Salford,%20United%20Kingdom,%20M5%204EP&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed\"', '21 Derwent Street, Salford, United Kingdom, M5 4EP', '2 bedrooms   •  \r\n2 beds   •  \r\n \r\n2 bathrooms   •  \r\n \r\n4 guests   •  \r\n \r\n740 ft²   •  \r\n \r\n8. floor', 'manchester_1.jpg', 2, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int NOT NULL,
  `city_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city_name`) VALUES
(1, 'London'),
(2, 'Edinburgh'),
(3, 'Cambridge'),
(4, 'Liverpool'),
(5, 'Manchester'),
(6, 'Plymouth');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`) VALUES
(1, 'Julia', 'julia@gmail.com', '78065128'),
(2, 'Kai', 'kai89@gmail.com', '78056321'),
(3, 'John', 'winchester@gmail.com', '889888776'),
(4, 'Lisa', 'lisa@gmail.com', '776654322'),
(5, 'Dean', 'winchester@gmail.com', '33445678');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_id` int NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `apartment_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `image_name`, `apartment_id`) VALUES
(1, 'cozyPrivateRoom_1.png', 1),
(2, 'cozyPrivateRoom_2.png', 1),
(3, 'apartment.jpg', 1),
(4, 'hive_1.png', 2),
(5, 'hive_2.png', 2),
(6, 'hive_3.png', 2),
(7, 'apartment3.jpg', 2),
(8, 'roundway.png', 3),
(9, 'roundway_1.png', 3),
(10, 'apartment8.jpg', 3),
(11, 'wembeley_1.png', 4),
(12, 'wembeley_1.png', 4),
(13, 'apartment7.jpg', 4),
(14, 'marvellousbedroom_1.png', 7),
(15, 'marvellous_3.png', 7),
(16, 'marvellousbedroom_2.png', 7),
(17, 'cozyCorner.png', 5),
(18, 'cozyCorner_1.png', 5),
(19, 'cozyCorner_3.png', 5),
(20, '2bedroom_liverpool.png', 8),
(21, 'apartment10.jpeg', 8),
(22, '2bedroom_liverpool_1.png', 8),
(23, 'oasisPrivate_3.png', 6),
(24, 'oasisPrivate.png', 6),
(25, 'oasisPrivate_1.png', 6),
(26, 'apartment11.jpg', 9),
(27, 'swanHouse_1.png', 9),
(28, 'swanHouse_2.png', 9),
(29, 'sunny_1.png', 10),
(30, 'sunny_2.png', 10),
(31, 'apartment12.jpeg', 10),
(32, 'cambridge_1.png', 11),
(33, 'cambridge.png', 11),
(34, 'cambridge_2.jpg', 11),
(35, 'northCambridge.jpg', 12),
(36, 'northCambridge_1.jpeg', 12),
(38, 'northCambridge_3.png', 12),
(39, 'libertySuite.png', 13),
(40, 'libertySuite_1.png', 13),
(41, 'manchester.png', 13),
(42, 'manchester_1.jpg', 14),
(43, 'manchester_2.jpg', 14),
(44, 'manchester_3.jpg', 14);

-- --------------------------------------------------------

--
-- Table structure for table `rental_records`
--

CREATE TABLE `rental_records` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `cus_id` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `moveIn_date` date NOT NULL,
  `moveOut_date` date NOT NULL,
  `adult` int NOT NULL,
  `apartment_name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rental_records`
--

INSERT INTO `rental_records` (`id`, `name`, `cus_id`, `email`, `moveIn_date`, `moveOut_date`, `adult`, `apartment_name`, `phone`) VALUES
(29, 'Kevin', 'FN99861', 'Kevin@gmail.com', '2024-11-01', '2024-12-01', 2, 'Cosy Private Room in London', '45678988'),
(31, 'Liam ', 'FN1209867', 'liam@gmail.com', '2024-11-01', '2024-12-01', 1, '2 bedroom in Liverpool', '78932122'),
(32, 'Sally ', 'FN667123', 'sally@gamil.com', '2024-12-04', '2025-01-04', 2, 'The Hive, Private Room, Barking', '78543210'),
(34, 'Lydia Martin', 'FN666678', 'lydia@gmail.com', '2024-10-04', '2024-11-04', 1, 'Wembley Stadium 1.5 bedroom apartment', '445231988'),
(35, 'Harry Styles', 'FN234577', 'harry@gmail.com', '2024-12-01', '2025-01-01', 2, 'Emerald Oasis in Edinburgh', '76512345'),
(39, 'Ann', 'FN667770', 'ann@gmail.com', '2024-11-29', '2024-12-29', 2, 'Alabaster Suite', '89078997');

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE `rules` (
  `rules_id` int NOT NULL,
  `rule_name` varchar(255) NOT NULL,
  `rule_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`rules_id`, `rule_name`, `rule_img`) VALUES
(1, 'no pet', 'noPet.png'),
(2, 'no smoking', 'noSmoking.png'),
(3, 'Suitable for children and toddlers', 'toddler.png'),
(4, 'Certificate of residence provided', 'certificate.png');

-- --------------------------------------------------------

--
-- Table structure for table `rules_apartment`
--

CREATE TABLE `rules_apartment` (
  `rules_apartment_id` int NOT NULL,
  `rules_id` int NOT NULL,
  `apartment_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rules_apartment`
--

INSERT INTO `rules_apartment` (`rules_apartment_id`, `rules_id`, `apartment_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 2, 3),
(4, 2, 2),
(5, 3, 2),
(6, 4, 1),
(7, 4, 3),
(8, 4, 2),
(9, 4, 4),
(10, 1, 2),
(11, 2, 4),
(12, 3, 4),
(13, 2, 5),
(14, 1, 5),
(15, 1, 6),
(16, 2, 6),
(17, 4, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tenants`
--

CREATE TABLE `tenants` (
  `id` int NOT NULL,
  `cus_id` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `moveIn_date` date NOT NULL,
  `moveOut_date` date NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tenants`
--

INSERT INTO `tenants` (`id`, `cus_id`, `name`, `email`, `moveIn_date`, `moveOut_date`, `phone`) VALUES
(12, 'FN1209867', 'Liam ', 'liam@gmail.com', '2024-11-01', '2024-12-01', '78932122'),
(16, 'FN234577', 'Harry Styles', 'harry@gmail.com', '2024-12-01', '2025-01-01', '76512345'),
(15, 'FN666678', 'Lydia Martin', 'lydia@gmail.com', '2024-10-04', '2024-11-04', '445231988'),
(13, 'FN667123', 'Sally ', 'sally@gamil.com', '2024-12-04', '2025-01-04', '78543210'),
(20, 'FN667770', 'Ann', 'ann@gmail.com', '2024-11-29', '2024-12-29', '89078997'),
(14, 'FN787878', 'Kai', 'kai89@gmail.com', '2024-12-01', '2025-01-01', '884231980');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'Julia', 'julia@gmail.com', '123456?', 'user'),
(2, 'Iris', 'iris@gmail.com', '909090', 'user'),
(3, 'John', 'garry@gmail.com', 'garry78', 'user'),
(4, 'Emily', 'smith@gmail.com', '12345678', 'user'),
(5, 'Sam', 'sam@gmail.com', '123456789', 'user'),
(6, 'Eugene', 'eugene@gmail.com', '12345678', 'user'),
(7, 'Anne', 'ann@gmail.com', '123ann', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ameneties`
--
ALTER TABLE `ameneties`
  ADD PRIMARY KEY (`ameneties_id`);

--
-- Indexes for table `apartments`
--
ALTER TABLE `apartments`
  ADD PRIMARY KEY (`apartment_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `rental_records`
--
ALTER TABLE `rental_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`rules_id`);

--
-- Indexes for table `rules_apartment`
--
ALTER TABLE `rules_apartment`
  ADD PRIMARY KEY (`rules_apartment_id`);

--
-- Indexes for table `tenants`
--
ALTER TABLE `tenants`
  ADD PRIMARY KEY (`cus_id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ameneties`
--
ALTER TABLE `ameneties`
  MODIFY `ameneties_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `apartments`
--
ALTER TABLE `apartments`
  MODIFY `apartment_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `rental_records`
--
ALTER TABLE `rental_records`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `rules`
--
ALTER TABLE `rules`
  MODIFY `rules_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rules_apartment`
--
ALTER TABLE `rules_apartment`
  MODIFY `rules_apartment_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tenants`
--
ALTER TABLE `tenants`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

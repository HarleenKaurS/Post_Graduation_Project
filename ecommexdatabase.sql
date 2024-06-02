-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2024 at 05:09 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommexdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `brandtable`
--

CREATE TABLE `brandtable` (
  `Brand_id` int(11) NOT NULL,
  `Brandname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brandtable`
--

INSERT INTO `brandtable` (`Brand_id`, `Brandname`) VALUES
(1, 'Nike'),
(2, 'Adidas'),
(3, 'Fila'),
(4, 'Bottega Venta'),
(5, 'Celine'),
(6, 'Calvin Klein'),
(7, 'Dior'),
(8, 'Louis Vuitton'),
(9, 'Valentino'),
(10, 'Gucci'),
(11, 'Loreal'),
(12, 'Article'),
(13, 'Parachute'),
(14, 'Floyd'),
(15, 'Maiden Home'),
(16, 'Samsung'),
(17, 'Apple'),
(18, 'GE'),
(19, 'Philips'),
(20, 'HP'),
(21, 'Asus'),
(22, 'Nvidia'),
(23, 'Sony'),
(24, 'LG'),
(25, 'Bosch'),
(26, 'Whirlpool'),
(27, 'Prestige'),
(28, 'Amul'),
(29, 'Kissan'),
(30, 'Britannia'),
(31, 'MDH'),
(32, 'Fortune'),
(33, 'Saffola Oats'),
(34, 'Nutraj'),
(35, 'Haldirams'),
(36, 'H & M'),
(37, 'Appaman'),
(38, 'Zara'),
(39, 'Mee Mee'),
(40, 'Kitkat'),
(41, 'Cadbury'),
(42, 'Kidley'),
(43, 'Lego'),
(44, 'Firstcry'),
(45, 'Himalaya'),
(46, 'Johnson & Johnson'),
(47, 'Nescafe'),
(48, 'Taj Mahal'),
(49, 'Parker'),
(50, 'Horlicks'),
(51, 'Canon'),
(52, 'Pilot'),
(53, 'Zebra'),
(54, 'Classmate'),
(55, 'Camlin'),
(56, 'Reynolds'),
(57, 'Penguin Random House India'),
(58, 'Harper Collins Publishers'),
(59, 'S. Chand Publishing'),
(60, 'Rupa Publications'),
(61, 'Taiyo'),
(62, 'Boltz'),
(63, 'Royal Canin'),
(64, 'Pedigree'),
(65, 'Kennel Kitchen'),
(66, 'Vitapol');

-- --------------------------------------------------------

--
-- Table structure for table `categorytable`
--

CREATE TABLE `categorytable` (
  `Category_id` int(11) NOT NULL,
  `Categoryname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categorytable`
--

INSERT INTO `categorytable` (`Category_id`, `Categoryname`) VALUES
(1, 'Electronics'),
(2, 'Groceries'),
(3, 'Fashion & Beauty'),
(4, 'Household & Decor'),
(5, 'Kids'),
(6, 'Sports & Fitness'),
(7, 'Books & Education'),
(8, 'Pet Supplies');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacktable`
--

CREATE TABLE `feedbacktable` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Mobile_No` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Feedback` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedbacktable`
--

INSERT INTO `feedbacktable` (`id`, `Name`, `Mobile_No`, `Email`, `Feedback`) VALUES
(1, 'abc', '1234567890', 'fehs@gmail.com', 'good, perfect.');

-- --------------------------------------------------------

--
-- Table structure for table `ordertable`
--

CREATE TABLE `ordertable` (
  `Order_id` int(11) NOT NULL,
  `Person_name` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Mobile_no` varchar(50) NOT NULL,
  `Total_amount` decimal(18,2) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ordertable`
--

INSERT INTO `ordertable` (`Order_id`, `Person_name`, `Address`, `Mobile_no`, `Total_amount`, `Status`) VALUES
(10, 'Harleen', 'new park avenue', '9988776689', '7298.00', ''),
(11, 'Mile', 'green park', '9888855674', '398.00', ''),
(12, 'Ken', 'mall road', '9879879874', '1597.00', ''),
(13, 'Mehak', 'Central Park', '8977756789', '1199.00', ''),
(14, 'Lovely', 'Ranjit Avenue', '7779864356', '67899.00', ''),
(15, 'Gurpreet', 'mall road', '9898987654', '68898.00', ''),
(16, 'Harleen', 'mall road', '9876876547', '199.00', '');

-- --------------------------------------------------------

--
-- Table structure for table `paymenttable`
--

CREATE TABLE `paymenttable` (
  `Payment_id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Card_Number` int(50) NOT NULL,
  `Card_type` varchar(50) NOT NULL,
  `Exp_date` varchar(50) NOT NULL,
  `CVV` int(11) NOT NULL,
  `Total_Amount` decimal(18,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paymenttable`
--

INSERT INTO `paymenttable` (`Payment_id`, `Name`, `Card_Number`, `Card_type`, `Exp_date`, `CVV`, `Total_Amount`) VALUES
(10, 'Harleen', 2147483647, 'Credit Card', '2024-05-18', 111, '7298.00'),
(11, 'Mile', 2147483647, 'Debit Card', '2026-05-27', 333, '398.00'),
(12, 'Ken', 2147483647, 'Credit Card', '2024-05-30', 999, '1597.00'),
(13, 'Mehak', 2147483647, 'Debit Card', '2024-06-08', 443, '1199.00'),
(14, 'Lovely', 2147483647, 'Master Card', '2024-06-30', 554, '67899.00'),
(15, 'Gurpreet', 2147483647, 'Debit Card', '2024-05-23', 655, '68898.00'),
(16, 'Harleen', 2147483647, 'Choose...', '', 0, '199.00');

-- --------------------------------------------------------

--
-- Table structure for table `producttable`
--

CREATE TABLE `producttable` (
  `Product_id` int(11) NOT NULL,
  `Productname` varchar(50) NOT NULL,
  `Subcategory_id` int(11) NOT NULL,
  `Category_id` int(11) NOT NULL,
  `Price` decimal(18,2) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `producttable`
--

INSERT INTO `producttable` (`Product_id`, `Productname`, `Subcategory_id`, `Category_id`, `Price`, `Image`, `Description`) VALUES
(2, 'Men Shoes', 1, 6, '1999.00', 'Nike3.jpg', 'Nike white sports shoes. High ankle and comfortabl'),
(3, 'Women Shoes', 1, 6, '1999.00', 'Nike2.jpg', 'White sports shoes, comfortable and runner shoes.'),
(5, 'Sweatshirt', 1, 6, '899.00', 'Nike1.jpg', 'Off-white nike sweatshirt. Sweatshirt and lower. G'),
(6, 'Men Sweatshirt', 2, 6, '1699.00', 'Adidas1.jpg', 'Black lower and white sweatshirt. Warm and comfort'),
(7, 'Women Sweatshirt', 2, 6, '1799.00', 'Adidas2.jpg', 'Black women hoodie and lower.'),
(8, 'Shoes', 3, 6, '1399.00', 'Fila3.jpg', 'White fila sports shoes, unisex and for runner.'),
(9, 'Sports Sweatshirt', 3, 6, '799.00', 'Fila2.jpg', 'Blue fila sweatshirt. Gym wear.'),
(10, 'Sports Jacket', 3, 6, '999.00', 'Fila1.jpg', 'Blue zipper with white strip. Winter wear. Warm.'),
(11, 'Handbag', 4, 3, '1199.00', 'Dior8.jpg', 'Black handbag with dior logo. Elegant bag.'),
(12, 'Dior Bracelet', 4, 3, '199.00', 'Dior7.jpg', 'Beautiful bracelet with logo of dior.'),
(13, 'Dior Earing', 4, 3, '1199.00', 'Dior1.jpg', 'The refined and elegant dior tribales earrings off'),
(14, 'Black Skirt', 4, 3, '799.00', 'Dior2.jpg', 'The mid-length pleated skirt is an emblematic styl'),
(15, 'Cardigan', 4, 3, '1999.00', 'Dior3.jpg', 'Black and white checked gardigan. Soft and elegant'),
(16, 'Heel', 4, 3, '899.00', 'Dior4.jpg', 'Dior skin color hell. Comfortable and gives classy'),
(17, 'Dior Scarf', 4, 3, '1099.00', 'Dior5.jpg', 'Woolen scarf crafted by dior for women to style it'),
(18, 'Pearl Jewelry', 4, 3, '1799.00', 'Dior6.jpg', 'Dior pearl set gives elegant and classy look.'),
(19, 'Belt', 5, 3, '599.00', 'CK7.jpg', 'Black belt for men crafted by calvin klein. Light '),
(20, 'Men Watch', 5, 3, '1099.00', 'CK6.jpg', 'Black chain watch by calvin klein.'),
(21, 'Women Watch', 5, 3, '1099.00', 'CK5.jpg', 'Off-white women Calvin Klein watch with metal fram'),
(22, 'Silver Bracelet', 5, 3, '899.00', 'CK4.jpg', 'Silver bracelet with Calvin Klein written on it, a'),
(23, 'Male Necklace', 5, 3, '999.00', 'CK2.jpg', 'Men self-made necklace by calvin klein.'),
(24, 'Hoop Earing', 5, 3, '899.00', 'CK3.jpg', 'Silver hoop earing, classy and simple.'),
(25, 'Grey Sweatshirt', 5, 3, '799.00', 'CK1.jpg', 'Calvin Klein grey sweatshirt and can style it with'),
(26, 'Blazer', 6, 3, '2599.00', 'BV1.jpg', ' BOTTEGA VENETA Double-Breasted brown Textured-Lea'),
(27, 'Black Pant', 6, 3, '599.00', 'BV2.jpg', 'Bottega Venta black platted pant, gives elegant lo'),
(28, 'Sweater', 6, 3, '999.00', 'BV4.jpg', 'Bottega Venta blue sweater. Warm and comfortable t'),
(29, 'Illusione Perfome', 6, 3, '1199.00', 'BV3.jpg', 'Fragrance Name Bottega Veneta Illusione by Bottega'),
(30, 'Wallet', 6, 3, '899.00', 'BV5.jpg', 'Bottega Venta men wallet, black and overlapped.'),
(31, 'Shirt', 6, 3, '699.00', 'BV6.jpg', 'Bottega Venta cream, lined shirt and can be style '),
(32, 'Staple Shoes', 6, 3, '999.00', 'BV7.jpg', 'Bottega venta black overlap staple shoes for men.'),
(33, 'Diamond set', 7, 3, '1299.00', 'Celine9.jpg', 'Celine diamond set includes earings, necklace and '),
(34, 'White Pearl Necklace', 7, 3, '1199.00', 'Celine8.jpg', 'Celine white pearl set with C.E.L.I.N.E written in'),
(35, 'Knot Ring', 7, 3, '899.00', 'Celine7.jpg', 'Celine silver knot ring, beautiful and elegant.'),
(36, 'Star Bracelet', 7, 3, '599.00', 'Celine6.jpg', 'Celine 10 star silver bracelet, classy and beatifu'),
(37, 'Star Earings', 7, 3, '499.00', 'Celine5.jpg', 'Celine silver star earings gives classy and beauti'),
(38, 'Gold earings', 7, 3, '499.00', 'Celine4.jpg', 'Celine gold earing gives elegant look.'),
(39, 'Diamond Necklace', 7, 3, '999.00', 'Celine3.jpg', 'celine gold chain and diamond logo necklace.'),
(40, 'Bangles', 7, 3, '1199.00', 'Celine2.jpg', 'Celine gold, platinum and silver bangles.'),
(41, 'Vintage Bracelet', 7, 3, '899.00', 'Celine1.jpg', 'Celine vintage bracelet and logo of celine.'),
(42, 'Weekend bag', 8, 3, '2199.00', 'Gucci1.jpg', 'Gucci weekend bag auitable for small trips.'),
(43, 'Tote Bag', 8, 3, '1499.00', 'Gucci2.jpg', 'Open hand bag, spacious and easy to carry around.'),
(44, 'Belt Bag', 8, 3, '299.00', 'Gucci3.jpg', 'Belt bag to carry small items like passport or mak'),
(45, 'Shoulder Bag', 8, 3, '899.00', 'Gucci4.jpg', 'Shoulder bag, designer and easy to carry.'),
(46, 'Pouch', 8, 3, '399.00', 'Gucci5.jpg', 'Pouches are small bag easy to carry makeup for lad'),
(47, 'Mini Bag', 8, 3, '599.00', 'Gucci6.jpg', 'Mini Bag with flap and carry at anywhere.'),
(49, 'Purse', 8, 3, '999.00', 'Gucci7.jpg', 'Purse with chain sling and buckle made of gems.'),
(50, 'Red Bag', 8, 3, '799.00', 'Gucci8.jpg', 'Red hand bag design by gucci given classy vibe.'),
(51, 'Derby', 9, 3, '1099.00', 'Valentino1.jpg', 'Men male shoes called deberries which is quite con'),
(52, 'Sneakers', 9, 3, '899.00', 'Valentino2.jpg', 'Valentino male white sneakers, comfortable to wear'),
(53, 'Open Back Shoes', 9, 3, '599.00', 'Valentino3.jpg', 'Valentino open back shoes, confortable to wear and'),
(54, 'Ankle Boot', 9, 3, '1099.00', 'Valentino5.jpg', 'Valentino ankle length boots, can wear at cold sea'),
(55, 'Loafers', 9, 3, '299.00', 'Valentino4.jpg', 'Valentino stylish loafers for men to style it with the wide pants.'),
(56, 'Office Heel', 10, 3, '899.00', 'LV1.jpg', 'Louis Vuitton pink heels can be wear at office.'),
(57, 'High Ankle Boot', 10, 3, '799.00', 'LV2.jpg', 'Louis Vuitton high ankle boot for casual wear.'),
(58, 'Ankle Heel', 10, 3, '999.00', 'LV3.jpg', 'Louis Vuitton high ankle heel which gives elegant '),
(59, 'Platform Sandals', 10, 3, '1099.00', 'LV4.jpg', 'Louis Vuitton platforn sandals with heel.'),
(60, 'Sandals', 10, 3, '899.00', 'LV5.jpg', 'Louis Vuitton black sandals, comfy and elegant.'),
(61, 'Belly', 10, 3, '599.00', 'LV6.jpg', 'Louis Vuitton black belly and classy.'),
(62, 'Pumps', 10, 3, '799.00', 'LV7.jpg', 'Louis Vuitton black pumps which is comfy, elegant '),
(63, 'Golden Slipper', 10, 3, '799.00', 'LV8.jpg', 'Louis Vuitton golden slippers which is comfy and c'),
(64, 'Slippers', 10, 3, '399.00', 'LV9.jpg', 'Louis Vuitton bathroom silver slippers, comfy and '),
(65, 'Ballerina Flat', 10, 3, '699.00', 'LV10.jpg', 'Louis Vuitton brown ballerina flat gives classy lo'),
(66, 'Casual Sneakers', 10, 3, '499.00', 'LV11.jpg', 'Louis Vuitton brown casual women sneakers.'),
(70, 'Foundation', 11, 3, '399.00', 'loreal1.jpg', 'Loreal skin shade foundation for makeup.'),
(71, 'Pre-Makeup Serum', 11, 3, '499.00', 'loreal2.jpg', 'Loreal pre-makeup serum for clean surface to apply'),
(72, 'Glow Enchancer', 11, 3, '499.00', 'loreal3.jpg', 'Loreal natural glow enchancer.'),
(73, 'Lipstick', 11, 3, '299.00', 'loreal4.jpg', 'Loreal red lipstick gives classy and elegant look.'),
(75, 'Mascara', 11, 3, '199.00', 'loreal5.jpg', 'Loreal black mascara.'),
(77, 'Video Camera', 12, 1, '1099.00', 'canon1.jpg', 'Canon 57X advanced zoom hd video camera.'),
(79, 'Photography Camera', 12, 1, '1299.00', 'canon2.jpg', 'Canon EOS 80D camera with microphone for Advance p'),
(80, 'G7X Camera', 12, 1, '999.00', 'canon3.jpg', 'Canon G7X camera with ram and charging pin.'),
(83, 'DSLR Camera', 12, 1, '1299.00', 'canon4.jpg', 'Canon dslr camera of EOS REBEL T100 with 58 mm len'),
(85, 'Marvel Hand Lego', 13, 5, '499.00', 'lego1.jpg', 'Lego block to make marvel hand for marvel lovers.'),
(86, 'Iron Man Lego', 13, 5, '499.00', 'lego2.jpg', 'Lego blocks to make iron man.'),
(87, 'Bear Lego Set', 13, 5, '499.00', 'lego3.jpg', 'Lego block to make bear as soft toys.'),
(89, 'Baby Lotion', 15, 5, '299.00', 'johnson1.jpg', 'Johnson & Johnson baby lotion, hydrate skin.'),
(91, 'Baby Bar', 15, 5, '199.00', 'johnson2.jpg', 'Johnson & Johnson baby bar, soft skin.'),
(92, 'Baby Powder', 15, 5, '399.00', 'johnson3.jpg', 'Johnson & Johnson baby powder to keep the baby dry'),
(93, 'Double Wet Tissues', 15, 5, '499.00', 'johnson4.jpg', 'Johnson & Johnson double wet tissues.'),
(94, 'Baby Shampoo', 15, 5, '399.00', 'johnson5.jpg', 'Johnson & Johnson baby shampoo.'),
(95, 'Baby Oil', 15, 5, '299.00', 'johnson6.jpg', 'Johnson & Johnson baby oil.'),
(96, 'Red Check Frock', 14, 5, '599.00', 'Firstcry1.jpg', 'Firstcry red check frock for baby girls.'),
(97, 'Nightsuit', 14, 5, '499.00', 'Firstcry2.jpg', 'Firstcry black night for babies.'),
(98, 'Frock', 14, 5, '699.00', 'Firstcry3.jpg', 'Firstcry light blue baby girl frock. Soft and comf'),
(99, 'Onesies Set', 14, 5, '1099.00', 'firstcry.jpg', 'Firstcry baby onesies set, comfortable and soft.'),
(100, 'Baby Jumpsuit', 16, 5, '799.00', 'H&M.jpg', 'H & M launch check baby jumpsuit. Comfortable to w'),
(101, 'Hair Clips', 16, 5, '199.00', 'H&M2.jpg', 'H & M black bow-like hair clips for baby girl, mad'),
(102, 'Beanie', 16, 5, '299.00', 'H&M3.jpg', 'H & M brown beabie for winter season'),
(103, 'Bracelet', 16, 5, '199.00', 'H&M4.jpg', 'H & M black bracelet for girls to wear.'),
(105, 'Nightsuit', 17, 5, '899.00', 'Zara1.jpg', 'Zara warm brown nightsuit with upper and lower for'),
(106, 'Skirt', 17, 5, '499.00', 'Zara2.jpg', 'Zara black skirt for baby girls to wear with t-shi'),
(107, 'Pant', 17, 5, '499.00', 'Zara3.jpg', 'Zara red pants for baby girls to style with.'),
(108, 'Sweatshirt', 17, 5, '599.00', 'Zara4.jpg', 'Zara cream seatshirt for girls to wear with barbie'),
(109, 'Summer Frock', 17, 5, '699.00', 'Zara5.jpg', 'Zara blue frock for girls to wear in summer.'),
(110, 'Jacket', 17, 5, '999.00', 'Zara6.jpg', 'Zara cream winter jacket for girls, soft and keep '),
(111, 'Nightsuit', 17, 5, '499.00', 'Zara7.jpg', 'Zara launch summer nightsuit in pink for girls.'),
(112, 'T-shirt Set', 18, 5, '699.00', 'Appaman5.webp', 'Appaman summer t-shirt for boys, comfortable and s'),
(113, 'Denim Shorts', 18, 5, '599.00', 'Appaman6.webp', 'Appaman light blue denim shorts for boys.'),
(114, 'Camp Shorts', 18, 5, '499.00', 'Appaman7.webp', 'Appaman camp shorts for boys for picnic.'),
(115, 'Hoodie', 18, 5, '699.00', 'Appaman8.webp', 'Appaman dark green hoddie for boys.'),
(116, 'Pattern Suit', 18, 5, '799.00', 'Appaman4.jpg', 'Appaman pattern suit set for boys.'),
(117, 'Lower', 18, 5, '799.00', 'Appaman2.jpg', 'Appaman blue lower for boys.'),
(118, 'Pants', 18, 5, '699.00', 'appaman1.webp', 'Appaman stretchy grey pants for boys.'),
(119, 'Shirt', 18, 5, '599.00', 'appaman3.webp', 'Appaman line standard shirt for boys.'),
(120, 'Kid High Ankle', 19, 5, '899.00', 'mee1.jpg', 'Mee Mee kids (unisex) high ankle shoes, comfy to w'),
(121, 'Girl Belly', 19, 5, '699.00', 'mee2.jpg', 'Mee Mee baby pink belly for girls.'),
(122, 'Kids Walker', 19, 5, '699.00', 'mee3.jpg', 'Mee Mee baby walker, comfortable and soft.'),
(123, 'Girl Sandal', 19, 5, '699.00', 'mee4.jpg', 'Mee Mee black girl sandals, comfy and soft.'),
(124, 'Kids Sneakers', 19, 5, '699.00', 'mee5.jpg', 'Mee Mee white uni sneakers for kids.'),
(125, 'Puppy Food', 20, 8, '999.00', 'Pedigree1.jpg', 'Pedigree dog food for puppy.'),
(126, 'Dog Biscuits', 20, 8, '799.00', 'Pedigree2.jpg', 'Pedigree- dog biscuits for snacks of dogs.'),
(127, 'Dog Stix', 20, 8, '599.00', 'Pedigree3.jpg', 'Pedigree- dog strix, chewable and 3 stix in a pack'),
(128, 'Pedigree Pack', 20, 8, '699.00', 'Pedigree4.jpg', 'Pedigree dog food in packets. 6 pack of puppy food'),
(129, 'Adult', 20, 8, '999.00', 'Pedigree5.jpg', 'Pedigree dog food for adult dogs.'),
(130, 'Junior', 20, 8, '999.00', 'Pedigree6.jpg', 'Pedigree dog ffod for junior dogs.'),
(131, 'Cat Food Pack', 21, 8, '699.00', 'Royal1.jpg', 'Royal Canin cat food in packs. Wet food for cats.'),
(132, 'Adult Cat', 21, 8, '899.00', 'Royal2.jpg', 'Royal Canin cat food for adult cats.'),
(133, 'Cat Can Food', 21, 8, '799.00', 'Royal3.jpg', 'Royl Canin cat food in cans.'),
(134, 'Kitten', 21, 8, '799.00', 'Royal4.jpg', 'Royal Canin cat food specially for kiteens only.'),
(135, 'Dog Leash', 22, 8, '299.00', 'kennel1.jpg', 'Kennel kitchen- dog leash in rainbow color.'),
(136, 'Pet Wheeler', 22, 8, '699.00', 'kennnel.jpeg', 'Kennel Kitchen- pet wheeler which can use to carry'),
(137, 'Cat Leash', 22, 8, '299.00', 'kennel2.png', 'Kennel Kitchen- cat leash in pink color.'),
(138, 'Pet Carrier', 22, 8, '899.00', 'kennel3.jpg', 'Kennel Kitchen- pet carriercan take you pet with y'),
(139, 'Pet Bowl', 22, 8, '499.00', 'kennel4.jpg', 'Kennel Kitchen- pet bowl for food with stand. One '),
(140, 'Dog Kennel', 22, 8, '999.00', 'kennel5.jpg', 'Kennel Kitchen- dog home or kennel for big dogs.'),
(141, 'Bird Food', 23, 8, '699.00', 'Vitapol.jpg', 'Vitapol bird food called smakers.'),
(142, 'Bird Cage', 23, 8, '799.00', 'Vitapol3.jpg', 'Vitapol bird cage, any type of bird can stay.'),
(143, 'Bird Play-area', 23, 8, '699.00', 'Vitapol2.jpg', 'Vitapol- bird play area with bowls at home.'),
(144, 'Bird Grains', 23, 8, '699.00', 'Vitapol1.webp', 'Vitapol- pack of grains specially for birds.'),
(145, 'Fish Food', 24, 8, '499.00', 'boltz2.jpg', 'Boltz fish food, eatable and only for fishes.'),
(146, 'Turtle Food', 24, 8, '499.00', 'boltz1.jpg', 'Boltz food for aquatic species like turtle.'),
(147, 'Sofa', 26, 4, '5499.00', 'Maiden7.jpg', 'The Varick is a contemporary statement fit for everyday luxury.'),
(148, 'Sectional Sofa', 26, 4, '6399.00', 'Maiden6.jpg', 'Most laid-back silhouette, The Jones Modular is relaxed modernism at its finest. '),
(149, 'Vanity', 26, 4, '2299.00', 'maiden1.jpg', 'The vintage vanity by maiden home is homemade and beautifully design to get ready.'),
(150, 'Chair', 26, 4, '1299.00', 'Maiden5.jpg', 'The Kenmare’s playful contours display artisanal craftsmanship.'),
(151, 'Ottoman', 26, 4, '1199.00', 'Maiden4.jpg', 'Modern lines meet plush comfort in this beautifully tailored coffee table ottoman.'),
(152, 'Coffee Table', 26, 4, '1499.00', 'Maiden3.jpg', 'The Vestry’s organic shape and soft curvature display an expansive statement of natural materiality.'),
(153, 'Oak Desk', 26, 4, '1099.00', 'Maiden2.webp', 'Handcrafted from richly grained oak, The Beekman has the presence of modern sculpture.'),
(154, 'Round Dining Table', 27, 4, '1099.00', 'Article3.webp', 'Luxurious and versatile make up the characteristics of the Conan dining table. '),
(155, 'Trestle Dining Table', 27, 4, '1299.00', 'Article4.jpg', 'Articles, the Madera is made of heavy solid oak wood.'),
(156, 'Cafe Table', 27, 4, '1099.00', 'Article2.webp', 'Our Vena Cafe Table provides that cozy fine dining feel without the fine dining corkage fee.'),
(157, 'Glass Dining Table', 27, 4, '2699.00', 'Article1.webp', 'The Emmer Dining Table combines major design impact with a light and airy feel.'),
(159, 'Eco Mattress', 28, 4, '2299.00', 'Parachute3.avif', 'The Eco Mattress was thoughtfully designed and masterfully crafted to be supportive, comfortable and'),
(160, 'Cotton Mattress Protector', 28, 4, '799.00', 'Parachute2.avif', 'Protect your mattress with this naturally breathable, 100% cotton layer.'),
(161, 'Down Mattress Topper', 28, 4, '899.00', 'Parachute1.avif', 'Like sinking into a marshmallow-stuffed cloud each night. Our 750 fill power feather bed adds three '),
(162, 'Saucepan', 30, 4, '699.00', 'Prestige5.jpg', '3-Quart Saucepan- You can cook most animal proteins without adding oil or fat.'),
(163, 'Dutch Oven', 30, 4, '699.00', 'Prestige4.jpg', '6-Quart Dutch Oven- Handles are heat resistant up to 400 °F / 204 °C.'),
(164, 'Skillet', 30, 4, '699.00', 'Prestige3.jpg', '10.5” Skillet- Manufactured with T-304 surgical-grade stainless steel, the best material for cooking'),
(165, 'Saucepan cover', 30, 4, '499.00', 'prestige1.jpg', 'Fits the 3-Quart Saucepan- medium cover-- The ergonomic handles do not get hot when cooking on the s'),
(166, 'Large Cover', 30, 4, '499.00', 'prestige2.jpg', 'Fits the 6-Quart Dutch Oven & the 10.5” Skillet- t lets you know when it is time to take the next.'),
(167, 'Harry Potter and The Socerer\'s Stone', 31, 7, '199.00', 'Penguin.jpg', 'By J.K. Rowling is the one of the bestseller in fiction genre and children favorite.'),
(168, 'Jane Eyre', 31, 7, '199.00', 'Penguin1.jpg', 'Jane Eyre, novel by Charlotte Bronte releases on 1847 is classical fiction based on women struggles '),
(169, 'The Great Gatsby', 31, 7, '199.00', 'Penguin2.jpg', 'By F. Scott Fitzgerald published in 1925 is a story of self made millionaire.'),
(170, 'Pride & Prejudice', 31, 7, '199.00', 'Penguin3.jpg', 'By Jane Austen published in 1813 based on the character development of Elizabeth Bennet, the protaon'),
(171, 'Wabi Sabi', 32, 7, '199.00', 'harper.webp', 'By Beth Kempton, introduces to a japanese concept that offers a whole new way of looking at the worl'),
(172, 'The Ship Beneath The Ice', 32, 7, '199.00', 'harper1.jpg', 'By Mensun Bound, the novel is the journey of marine archeologist and his team to explore the the shi'),
(173, 'We Were Dreamers', 32, 7, '199.00', 'harper2.jpg', 'Simu Liu chronicles his family\'s journey from China to bright lights of Hollywood.'),
(174, 'A.P.J. Abdul Kalam : A Life', 32, 7, '199.00', 'harper3.jpg', 'By Arun Tiwari is the life journey of Dr. Abdul Kalam.'),
(175, 'Entrance Exam- NDA/NA', 33, 7, '299.00', 'chand.jpg', 'Entrance exam solved papers to clear for defence exams.'),
(176, 'Quantitative Aptitude', 33, 7, '299.00', 'chand1.jpg', 'Book to clear for competitive examinations.'),
(177, 'SSC Exams', 33, 7, '299.00', 'chand2.jpg', 'In the realm of competitive examinations including SSC Exams, Reasoning holds an important role. Asp'),
(178, 'UPSSSC PET', 33, 7, '299.00', 'chand3.jpg', 'For the stuidents who want to clear UPSSSC first stage.'),
(179, 'A MIDSUMMER NIGHT’S DREAM', 34, 7, '199.00', 'rupa.jpg', 'Infused with the magical world of fairies, A Midsummer Night’s Dream is one of the early comedies of'),
(180, 'THE CHRONICLES OF NARNIA: THE LION, THE WITCH AND ', 34, 7, '199.00', 'rupa1.jpg', 'As World War II intensifies, Lucy Pevensie and her siblings are sent to live in an enormous countrys'),
(181, 'Siddharta', 34, 7, '199.00', 'rupa2.jpg', 'Siddhartha (first published in 1922) is a novel based on the early life of Buddha, inspired by the a'),
(182, 'Galaxy Tab S9', 35, 1, '24999.00', 'samsung.avif', 'Galaxy S9 series- front camera (12MP), back(8mp,13mp), battery with boosts to share.'),
(183, 'Galaxy Z Flip5', 35, 1, '76599.00', 'samsung1.jpg', 'All day battery life, storage with 256 GB, most powerful processor.'),
(184, 'iPhone 15 Pro', 36, 1, '87899.00', 'apple.jpg', 'iPhone 15 pro is first to have aerospace feature, A17 pro chip, pro camera system & upto 29 hours vi'),
(185, 'iPhone 14', 36, 1, '67899.00', 'apple1.jpg', 'iPhone 14 has A15 bionic chip, upto 26 hours vidoeo playback.'),
(186, 'Airfryer', 37, 1, '7699.00', 'philip.jpg', 'Philips advance low fat and as crispy as deep fried airfryer for the kitchens.'),
(187, 'Indoor Smokeless Grill', 37, 1, '5699.00', 'Philips1.webp', 'Philips indoor smokeless grill which makes delicious grilled food.'),
(188, 'Dishwasher', 38, 1, '3299.00', 'GE.jpg', 'Deep clean washing 3rd rank, ultra fresh system with bluetooth'),
(189, 'Microwave', 38, 1, '2299.00', 'GE1.jpg', 'Scan-to-cook, smart microwave, 0.9 cu.ft capacity.'),
(190, 'Touchscreen Laptop', 39, 1, '57699.00', 'HP.jpg', 'HP touchscreen laptop with high funtionality.'),
(191, 'Laptop TUF', 40, 1, '77499.00', 'Asus.jpg', 'High power, maximum cooling. steller visuals, stealth capability, productivity on the go & rugged an'),
(192, 'x77I LED', 42, 1, '55599.00', 'Sony1.jpg', 'Sony LED with high quality visuals and smart.'),
(193, 'OLED', 42, 1, '66799.00', 'Sony2.jpg', 'OLED with 4K HDR, x1 ultimate, pixel contrast booster, triluminds display.'),
(194, 'Refrigerator', 43, 1, '44499.00', 'Lg1.jpg', '24 cu. ft top freezer, large enough to store enough food for youself.'),
(195, 'Smart Refrigerator', 43, 1, '67899.00', 'lg.jpg', 'LG - 28 Cu. Ft. 4 Door French Door Smart Refrigerator with Dual Ice with Craft Ice and Double Freeze'),
(196, 'Front Load', 45, 1, '3499.00', 'whirlpool.avif', '1.9-5.0 Cu. Ft. capacity, gentle wash action smart model.'),
(197, 'Laundry Sets', 45, 1, '5299.00', 'whirlpool1.avif', 'Top load or front load washers, electric or gas dryers.'),
(198, 'Notebook', 46, 2, '99.00', 'classmate.jpg', 'Classmate 6 pages notebook for students to have 6 subjects in one.'),
(199, 'Pen Set', 46, 2, '199.00', 'classmate1.jpg', 'Different pen set of classmate with smooth writing.'),
(200, 'Saffola', 47, 2, '199.00', 'saffola.jpg', 'Saffola masala oats with veggie twist, healthy food.'),
(201, 'Deggi Mirch', 48, 2, '299.00', 'MDH.jpg', 'LG - 28 Cu. Ft. 4 Door French Door Smart Refrigerator with Dual Ice with Craft Ice and Double Freeze'),
(202, 'White Pepper', 48, 2, '299.00', 'MDH1.jpg', 'MDH white pepper to flavour the dishes in its unique way.'),
(203, 'Biryani Masala', 48, 2, '299.00', 'MDH2.jpg', ' Direction : Heat cooking medium, add Biryani masala, water and pre-soaked rice. Add mutton/ chicken'),
(204, 'Chana Masala', 48, 2, '299.00', 'MDH3.jpg', 'Ingredients : Coriander seeds, Red Chillies, Turmeric, Cumin, Iodised Salt, Black Pepper, Fenugreek '),
(205, 'Chat Masala', 48, 2, '299.00', 'MDH4.jpg', 'Spice blend for Salads & Savouries. Recipe : Aloo Chat : Take 1½ potato per person. Peel and cut int'),
(206, 'Kitchen King', 48, 2, '299.00', 'MDH5.jpg', 'Ingredients :  Coriander seeds, Cumin, Red Chillies, Turmeric, Black Pepper, Iodised Salt, Dried Gin');

-- --------------------------------------------------------

--
-- Table structure for table `subcategorytable`
--

CREATE TABLE `subcategorytable` (
  `Subcategory_id` int(11) NOT NULL,
  `Brandname` varchar(50) NOT NULL,
  `Subcategoryname` varchar(50) NOT NULL,
  `Categoryname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcategorytable`
--

INSERT INTO `subcategorytable` (`Subcategory_id`, `Brandname`, `Subcategoryname`, `Categoryname`) VALUES
(1, 'Nike', 'Sports', 'Sports & Fitness'),
(2, 'Adidas', 'Sports Clothing', 'Sports & Fitness'),
(3, 'Fila', 'Sports Items', 'Sports & Fitness'),
(4, 'Dior', 'Women Fashion', 'Fashion & Beauty'),
(5, 'Calvin Klein', 'Wearables', 'Fashion & Beauty'),
(6, 'Bottega Venta', 'Men Fashion', 'Fashion & Beauty'),
(7, 'Celine', 'Jewelry', 'Fashion & Beauty'),
(8, 'Gucci', 'Handbags', 'Fashion & Beauty'),
(9, 'Valentino', 'Men Footwear', 'Fashion & Beauty'),
(10, 'Louis Vuitton', 'Women Footwear', 'Fashion & Beauty'),
(11, 'Loreal', 'Personal Care', 'Fashion & Beauty'),
(12, 'Canon', 'Camera & Acessories', 'Electronics'),
(13, 'Lego', 'Toys', 'Kids'),
(14, 'Firstcry', 'Baby Fashion', 'Kids'),
(15, 'Johnson & Johnson', 'Baby Products', 'Kids'),
(16, 'H & M', 'Accessories', 'Kids'),
(17, 'Zara', 'Girls Clothes', 'Kids'),
(18, 'Appaman', 'Boys Clothes', 'Kids'),
(19, 'Mee Mee', 'Kids Footwear', 'Kids'),
(20, 'Pedigree', 'Dog Food', 'Pet Supplies'),
(21, 'Royal Canin', 'Cat Food', 'Pet Supplies'),
(22, 'Kennel Kitchen', 'Pet Accessories', 'Pet Supplies'),
(23, 'Vitapol', 'Bird Food & Acessories', 'Pet Supplies'),
(24, 'Boltz', 'Aquatic Food', 'Pet Supplies'),
(25, 'Taiyo', 'Aquatic Accessories', 'Pet Supplies'),
(26, 'Maiden Home', 'Furniture', 'Household & Decor'),
(27, 'Article', 'Dining', 'Household & Decor'),
(28, 'Parachute', 'Mattress', 'Household & Decor'),
(29, 'Floyd', 'Outdoor', 'Household & Decor'),
(30, 'Prestige', 'Cookware', 'Household & Decor'),
(31, 'Penguin Random House India', 'Fiction', 'Books & Education'),
(32, 'Harper Collins Publishers', 'Non-Fiction', 'Books & Education'),
(33, 'S. Chand Publishing', 'Academics', 'Books & Education'),
(34, 'Rupa Publications', 'Literature', 'Books & Education'),
(35, 'Samsung', 'Tablets & Mobile', 'Electronics'),
(36, 'Apple', 'IPhones', 'Electronics'),
(37, 'Philips', 'Kitchen Appliances', 'Electronics'),
(38, 'GE', 'Smart Devices', 'Electronics'),
(39, 'HP', 'Laptop', 'Electronics'),
(40, 'Asus', 'Gaming Laptop', 'Electronics'),
(41, 'Nvidia', 'Gaming Acessories', 'Electronics'),
(42, 'Sony', 'Television', 'Electronics'),
(43, 'LG', 'Refrigerator', 'Electronics'),
(44, 'Bosch', 'Electronic Tools', 'Electronics'),
(45, 'Whirlpool', 'Washing Machine', 'Electronics'),
(46, 'Classmate', 'Stationery', 'Books & Education'),
(47, 'Saffola Oats', 'Breakfast Needs', 'Groceries'),
(48, 'MDH', 'Spices & Seasoning', 'Groceries'),
(49, 'Cadbury', 'Chocolate', 'Groceries'),
(50, 'Haldirams', 'Sweets', 'Groceries'),
(51, 'Britannia', 'Snacks', 'Groceries'),
(52, 'Amul', 'Butter', 'Groceries'),
(53, 'Fortune', 'Cooking Ingredients', 'Groceries'),
(54, 'Kissan', 'Jams', 'Groceries'),
(55, 'Nutraj', 'Dry Fruits', 'Groceries'),
(56, 'Nescafe', 'Coffee', 'Groceries'),
(57, 'Brooke Bonds', 'Tea', 'Groceries'),
(61, 'SELECT FROM BRANDS', '', 'SELECT FROM CATEGORY');

-- --------------------------------------------------------

--
-- Table structure for table `systemlogtable`
--

CREATE TABLE `systemlogtable` (
  `ID` int(11) NOT NULL,
  `Cart_id` int(11) NOT NULL,
  `Image_id` int(11) NOT NULL,
  `Order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userlogintable`
--

CREATE TABLE `userlogintable` (
  `ID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userlogintable`
--

INSERT INTO `userlogintable` (`ID`, `Username`, `Password`) VALUES
(6, 'Harleen', '12345'),
(7, 'tina', 'tina123');

-- --------------------------------------------------------

--
-- Table structure for table `userregistrationtable`
--

CREATE TABLE `userregistrationtable` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Mobile_Number` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userregistrationtable`
--

INSERT INTO `userregistrationtable` (`ID`, `Name`, `Password`, `Mobile_Number`, `Email`) VALUES
(8, 'Harleen', '12345', '9876887766', 'harleen@gmail.com'),
(9, 'tina', 'tina123', '9899982213', 'tina@yahoo.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brandtable`
--
ALTER TABLE `brandtable`
  ADD PRIMARY KEY (`Brand_id`);

--
-- Indexes for table `categorytable`
--
ALTER TABLE `categorytable`
  ADD PRIMARY KEY (`Category_id`);

--
-- Indexes for table `feedbacktable`
--
ALTER TABLE `feedbacktable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordertable`
--
ALTER TABLE `ordertable`
  ADD PRIMARY KEY (`Order_id`);

--
-- Indexes for table `paymenttable`
--
ALTER TABLE `paymenttable`
  ADD PRIMARY KEY (`Payment_id`);

--
-- Indexes for table `producttable`
--
ALTER TABLE `producttable`
  ADD PRIMARY KEY (`Product_id`);

--
-- Indexes for table `subcategorytable`
--
ALTER TABLE `subcategorytable`
  ADD PRIMARY KEY (`Subcategory_id`);

--
-- Indexes for table `systemlogtable`
--
ALTER TABLE `systemlogtable`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `userlogintable`
--
ALTER TABLE `userlogintable`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `userregistrationtable`
--
ALTER TABLE `userregistrationtable`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brandtable`
--
ALTER TABLE `brandtable`
  MODIFY `Brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `categorytable`
--
ALTER TABLE `categorytable`
  MODIFY `Category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedbacktable`
--
ALTER TABLE `feedbacktable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ordertable`
--
ALTER TABLE `ordertable`
  MODIFY `Order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `paymenttable`
--
ALTER TABLE `paymenttable`
  MODIFY `Payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `producttable`
--
ALTER TABLE `producttable`
  MODIFY `Product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;

--
-- AUTO_INCREMENT for table `subcategorytable`
--
ALTER TABLE `subcategorytable`
  MODIFY `Subcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `systemlogtable`
--
ALTER TABLE `systemlogtable`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userlogintable`
--
ALTER TABLE `userlogintable`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `userregistrationtable`
--
ALTER TABLE `userregistrationtable`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

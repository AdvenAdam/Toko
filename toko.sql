/*
Navicat MySQL Data Transfer

Source Server         : konek
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : toko

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2021-01-11 20:53:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tbl_casing`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_casing`;
CREATE TABLE `tbl_casing` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `merk` varchar(225) NOT NULL DEFAULT '',
  `nama` varchar(225) NOT NULL DEFAULT '',
  `slug` varchar(225) NOT NULL DEFAULT '',
  `harga` int(11) NOT NULL,
  `stok` varchar(225) NOT NULL DEFAULT '',
  `faktor_bentuk` varchar(225) NOT NULL DEFAULT '',
  `gambar` varchar(225) NOT NULL DEFAULT '',
  `rincian` text NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `diskon` int(11) DEFAULT 0,
  `harga_new` int(11) DEFAULT 0,
  `berlaku` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_casing
-- ----------------------------
INSERT INTO `tbl_casing` VALUES ('20', 'corsair', 'CORSAIR Carbide 330R Titanium Edition', 'corsair-carbide-330r-titanium-edition', '1625000', '10', 'Mini-ITX,Micro-ATX,Standard-ATX', '1609645221_98d0adbf61a3ae44b598.jpg', ' -	Kesesuaian Motherboard	-	Mini ITX, Micro ATX and ATX\r\n-	Internal Bays	-	Case Drive Bays (x3) 5.25in (x4) Combo 3.5in/2.5in\r\n-	Material / Bahan	-	Steel\r\n-	External Bays	-	(x2) USB 3.0 , (x1) Headphone Port, (x1) Microphone Port\r\n-	Power Supply	-	ATX (not included)\r\n-	Garansi	-	12 Bulan dari Distributor Resmi di Indonesia\r\n-	Lain-lain	-	Cooling : (x1) 120mm fan, (x1)140mm fan\r\n-	Radiator Compatibility 120mm; 240mm; 280mm\r\n-	Compatible Case Corsair Liquid Coolers H55, H60, H75, H80i, H100i\r\n-	Case Expansion Slots 7\r\n', '2021-01-03', '2021-01-03', '0', '0', null);
INSERT INTO `tbl_casing` VALUES ('21', 'corsair', 'CORSAIR Carbide Series SPEC-ALPHA ', 'corsair-carbide-series-spec-alpha', '1250000', '10', 'Mini-ITX,Micro-ATX,Standard-ATX', '1609645459_f714d9d409eb835c332b.jpg', ' -	Power Supply	        -	ATX (not included)\r\n-	Model	                -	Middle Tower\r\n-	Material / Bahan	-	Steel\r\n-	Kesesuaian       	-	Mini-ITX, Micro-ATX, ATX\r\n', '2021-01-03', '2021-01-10', '5', '1187500', '2021-02-10');
INSERT INTO `tbl_casing` VALUES ('22', 'fantech', 'FANTECH Pulse CG-71 RGB Middle Tower Case ', 'fantech-pulse-cg-71-rgb-middle-tower-case', '481500', '10', 'Mini-ITX,Micro-ATX,Standard-ATX', '1609645668_3a232fa95a1f795285e9.jpg', ' -	PC case\r\n-	15 RGB Spectrum Mode\r\n-	Supports up to 8 RGB fans\r\n-	Extreme heat transfer and light\r\n-	Case Cable\r\n-	Tempered Glass\r\n-	2*SSD\r\n-	2*HDD Internal Driver Bays\r\n-	Supports ATX; Mini ITX; Micro ITX motherboards\r\n-	280mm VGA Card Length\r\n-	1 3.0 USB\r\n-	2 2.0 USB Front Port\r\n-	165 mm CPU Height\r\n', '2021-01-03', '2021-01-03', '0', '0', null);
INSERT INTO `tbl_casing` VALUES ('23', 'corsair', 'CORSAIR Middle Tower Carbide SPEC-02', 'corsair-middle-tower-carbide-spec-02', '985000', '10', 'Mini-ITX,Micro-ATX,Standard-ATX', '1609645825_c12b26cac78686d65184.jpg', ' -	Model	                                -	Middle Tower\r\n-	Material / Bahan	                -	Steel\r\n-	Power Supply	                        -	ATX (not included)\r\n-	Kesesuaian Motherboard	-	Mini-ITX, Micro-ATX, ATX\r\n-	Dimensi Produk	                -	493mm x 215mm x 426mm\r\n', '2021-01-03', '2021-01-03', '0', '0', null);
INSERT INTO `tbl_casing` VALUES ('24', 'ThermalTake', 'THERMALTAKE Core P1 TG Mini ITX Wall-Mount Chassis', 'thermaltake-core-p1-tg-mini-itx-wall-mount-chassis', '1755000', '10', 'Mini-ITX', '1609645912_6ca5f575f8a2bf5e51fc.jpg', ' •	Drive Bays : 2 x 2.5\" (Outside the chassis); 1 x 3.5’’ or 2.5’’ (Inside the chassis); 1 x 2.5’’ (Inside the chassis)\r\n•	I/O Port : USB 3.0 x 2; HD Audio x 1\r\n•	Fan Support : 2 x 120mm\r\n•	Motherboard Support : mini ITX\r\n', '2021-01-03', '2021-01-03', '0', '0', null);
INSERT INTO `tbl_casing` VALUES ('25', 'corsair', 'CORSAIR Obsidian Series 500D RGB SE Premium Mid-Tower Case', 'corsair-obsidian-series-500d-rgb-se-premium-mid-tower-case', '3995000', '10', 'Mini-ITX,Micro-ATX,Standard-ATX,E-ATX', '1609646086_983c8fbb2cb2f88e926b.jpg', ' •	Middle Tower\r\n•	Material : Steel; Aluminum; Tempered Glass\r\n•	Case drive bays : (x3) 2.5 Inch; (x2) 3.5 Inch\r\n•	Maximum GPU Length : 370mm\r\n•	Support ATX Power Supply\r\n•	No PSU\r\n', '2021-01-03', '2021-01-03', '0', '0', null);
INSERT INTO `tbl_casing` VALUES ('26', 'MSI', 'MSI MAG Bunker', 'msi-mag-bunker', '901500', '10', 'Mini-ITX,Micro-ATX,Standard-ATX', '1609646217_fa1d27bc843ab5c8a7c3.jpg', ' -	Kesesuaian Motherboard	-	Mini-ITX, Micro-ATX, ATX\r\n-	Internal Bays	-	2 x 3.5”, compatible with 2.5”; 4 x 2.5”\r\n-	Dimensi Produk	-	440(D) x 218(W) x 470(H) mm\r\n-	Berat Produk	-	7.15 Kg\r\n-	Fitur	-	Double Tempered Glasses\r\n-	Strong Structure\r\n-	Magnetic Dust Filters\r\n-	Cable Management\r\n-	Sistem Pendinginan	-	Up to 6x system fans\r\n-	Power Supply	-	Bottom mount, ATX\r\n-	Lain-lain	-	Interface : 2 x USB 3.0; 2 x USB 2.0; HD Audio / Mic\r\n-	Max. GPU Length : Max. 370mm / 14.57 in\r\n-	Max. CPU Cooler Length : Max. 165mm / 6.50 in\r\n-	0.6mm SPCC\r\n-	4mm tinted tempered glass side panel\r\n', '2021-01-03', '2021-01-03', '0', '0', null);
INSERT INTO `tbl_casing` VALUES ('27', 'ThermalTake', 'THERMALTAKE Commander C34 Dual 200MM ARGB Fans TG ATX Mid-Tower', 'thermaltake-commander-c34-dual-200mm-argb-fans-tg-atx-mid-tower', '1735000', '10', 'Mini-ITX,Micro-ATX,Standard-ATX', '1610288426_8b7056e3a80fc3be84d1.jpg', '•	Middle Tower\r\n•	Motherboard : Mini ITX; Micro ATX; ATX\r\n•	Drive Bays : 3 x 3.5 Inch or 2.5 Inch (HDD Bracket); 2 x 2.5 Inch (HDD Bracket)\r\n•	Side Panel : 1 x 4mm Tempered Glass\r\n•	Material : SPCC\r\n•	I/O Port : USB 3.0 x 2; HD Audio x 1; RGB Switch x 1\r\n•	PSU : Standard PS2 PSU (optional)\r\n', '2021-01-10', '2021-01-10', '0', '0', null);
INSERT INTO `tbl_casing` VALUES ('28', 'ThermalTake', 'THERMALTAKE V200 Tempered Glass RGB Edition Mid Tower ', 'thermaltake-v200-tempered-glass-rgb-edition-mid-tower', '1250000', '10', 'Mini-ITX,Micro-ATX,Standard-ATX', '1610288526_686973e4bc8ec585535b.jpg', '•	Mini-ITX, Micro-ATX, ATX\r\n•	I/O Port: USB 3.0 x 1, USB 2.0 x 2, HD Audio x 1, RGB Button x 1, Drive Bays -Accessible: 3 x 2.5\", Hidden: 2 x 3.5\"\r\n•	7.1 kg / 15.65 lb\r\n•	Expansion Slots: 7\r\n•	446 x 204 x 439 mm\r\n•	Rear (exhaust) : 120 x 120 x 25 mm fan (1000rpm, 16dBA)\r\n•	Front (intake) : 120 x 120 x 25 mm RGB fan (1000rpm, 16dBA) x3\r\n•	Front Fan: 3 x 120mm, 2 x 140mm\r\n•	Top Fan: 2 x 120mm, 2 x 140mm\r\n•	Rear Fan: 1 x 120mm\r\n', '2021-01-10', '2021-01-10', '0', '0', null);
INSERT INTO `tbl_casing` VALUES ('29', 'MSI', 'MSI – MPG GUNGNIR 110R - Premium Mid-Tower PC Gaming Case', 'msi-mpg-gungnir-110r-premium-mid-tower-pc-gaming-case', '1335000', '10', 'Mini-ITX,Micro-ATX,Standard-ATX', '1610288734_31f15c37854ab0398660.jpg', ' 4 x 120mm addressable RGB fans support MSI Mystic Light for the unlimited customization options \r\nBundled with a 1 to 8 ARGB LED HUB to help you have more attractive ways to decorate your gaming rig by the LED strips \r\n4mm tinted tempered glass side panel, making it ideal for showcasing your build with (RGB) lighting \r\nMSI Mystic light offers multiple colors and effects for you to set up your rig with your own style', '2021-01-10', '2021-01-10', '0', '0', null);

-- ----------------------------
-- Table structure for `tbl_kas`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_kas`;
CREATE TABLE `tbl_kas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_kas` varchar(225) NOT NULL,
  `jenis_kas` varchar(225) NOT NULL,
  `uraian` text NOT NULL,
  `pemasukan` varchar(255) NOT NULL,
  `pengeluaran` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_kas
-- ----------------------------
INSERT INTO `tbl_kas` VALUES ('1', 'KAS-1', 'Pemasukan', 'HASIL TRX ', '8000000', '0', '2020-11-23', '2020-11-23');
INSERT INTO `tbl_kas` VALUES ('2', 'KAS-2', 'Pengeluaran', ' Gaji', '0', '700000', '2020-11-23', '2020-11-24');
INSERT INTO `tbl_kas` VALUES ('3', 'KAS-3', 'Pemasukan', ' TRX Servicesadasd', '900000', '0', '2020-11-23', '2020-11-24');
INSERT INTO `tbl_kas` VALUES ('5', 'KAS-4', 'Pemasukan', ' asda', '50000', '0', '2020-11-23', '2020-11-23');
INSERT INTO `tbl_kas` VALUES ('6', 'KAS-6', 'Pemasukan', ' belanja', '0', '500000', '2020-11-23', '2020-11-23');
INSERT INTO `tbl_kas` VALUES ('8', 'KAS-8', 'Pengeluaran', '  babay', '0', '1000000', '2020-11-23', '2020-11-23');
INSERT INTO `tbl_kas` VALUES ('10', 'KAS-9', 'Pemasukan', 'Hasil jual hari 212 ', '500000', '0', '2020-11-24', '2020-11-24');
INSERT INTO `tbl_kas` VALUES ('11', 'KAS-11', 'Pemasukan', ' Coba Chart', '500000', '0', '2020-11-25', '2020-11-25');
INSERT INTO `tbl_kas` VALUES ('12', 'KAS-12', 'Pengeluaran', ' Coba Chart', '0', '700000', '2020-11-25', '2020-11-25');
INSERT INTO `tbl_kas` VALUES ('13', 'KAS-13', 'Pengeluaran', ' coba chart', '0', '1000000', '2020-11-25', '2020-11-25');
INSERT INTO `tbl_kas` VALUES ('14', 'KAS-14', 'Pemasukan', 'Penjualan ', '2000000', '0', '2020-12-01', '2020-12-01');
INSERT INTO `tbl_kas` VALUES ('15', 'KAS-15', 'Pengeluaran', 'coba ', '0', '2000000', '2020-12-01', '2020-12-01');

-- ----------------------------
-- Table structure for `tbl_memori`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_memori`;
CREATE TABLE `tbl_memori` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `merk` varchar(225) NOT NULL DEFAULT '',
  `nama` varchar(225) NOT NULL DEFAULT '',
  `slug` varchar(225) NOT NULL DEFAULT '',
  `harga` int(11) NOT NULL,
  `stok` varchar(225) NOT NULL DEFAULT '',
  `ukuran_memori` varchar(225) NOT NULL DEFAULT '',
  `jenis_memori` varchar(225) NOT NULL DEFAULT '',
  `gambar` varchar(225) NOT NULL DEFAULT '',
  `rincian` text NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `diskon` int(11) DEFAULT 0,
  `harga_new` int(11) DEFAULT 0,
  `berlaku` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_memori
-- ----------------------------
INSERT INTO `tbl_memori` VALUES ('22', 'WD', 'WD Purple 8TB - CCTV HDD', 'wd-purple-8tb-cctv-hdd', '3219000', '10', '8 TB', 'HARDISK', '1610293351_6554135fbbd197bb9e76.jpg', ' ', '2021-01-10', '2021-01-10', '0', '0', null);
INSERT INTO `tbl_memori` VALUES ('23', 'WD', 'Hdd Hardisk WD 1TB Caviar Blue', 'hdd-hardisk-wd-1tb-caviar-blue', '500000', '10', '1 TB', 'HARDISK', '1610293490_4d8b741833af7be9e6f9.jpg', ' ', '2021-01-10', '2021-01-10', '0', '0', null);
INSERT INTO `tbl_memori` VALUES ('24', 'SAMSUNG', 'Samsung 1TB 860 EVO SATA III 2.5\"', 'samsung-1tb-860-evo-sata-iii-25', '1200000', '10', '1 TB', 'SSD SATA', '1610293614_9c2fea1732d90d3b07cd.jpg', ' ', '2021-01-10', '2021-01-10', '0', '0', null);
INSERT INTO `tbl_memori` VALUES ('25', 'SAMSUNG', 'SAMSUNG SSD 860EVO 250GB / 2.5\" SATA / 860 EVO SSD ', 'samsung-ssd-860evo-250gb-25-sata-860-evo-ssd', '650000', '10', '250 GB', 'SSD SATA', '1610293733_752d6ac05c422f97df73.jpg', ' ', '2021-01-10', '2021-01-10', '0', '0', null);
INSERT INTO `tbl_memori` VALUES ('26', 'WD', 'SSD WD Green 240GB SATA III - SSD Internal', 'ssd-wd-green-240gb-sata-iii-ssd-internal', '450000', '10', '240 GB', 'SSD SATA', '1610293987_815b141d2d1e873d47c3.jpg', ' ', '2021-01-10', '2021-01-10', '0', '0', null);
INSERT INTO `tbl_memori` VALUES ('27', 'ADATA', 'ADATA SU650 960GB SSD2.5\"', 'adata-su650-960gb-ssd25', '1500000', '10', '960 GB', 'SSD SATA', '1610294089_ac4d718781f564e234db.png', ' ', '2021-01-10', '2021-01-10', '0', '0', null);
INSERT INTO `tbl_memori` VALUES ('28', 'SAMSUNG', 'Samsung 1TB 970 EVO NVMe M.2', 'samsung-1tb-970-evo-nvme-m2', '2100000', '10', '1 TB', 'SSD M.2 NVMe', '1610294229_d780a8ec4d90545f70b5.jpg', ' ', '2021-01-10', '2021-01-10', '0', '0', null);
INSERT INTO `tbl_memori` VALUES ('29', 'SAMSUNG', ' SAMSUNG 500GB 960 EVO M.2 NVMe', 'samsung-500gb-960-evo-m2-nvme', '1500000', '10', '500 GB', 'SSD M.2 NVMe', '1610294295_0bf52ec680cb29578a6e.jpg', ' ', '2021-01-10', '2021-01-10', '0', '0', null);
INSERT INTO `tbl_memori` VALUES ('30', 'ADATA', 'ADATA SWORDFISH 500GB M.2 NVMe SSD Gen3 ', 'adata-swordfish-500gb-m2-nvme-ssd-gen3', '1100000', '10', '500 GB', 'SSD M.2 NVMe', '1610294410_78345aa155cff30fea80.png', ' ', '2021-01-10', '2021-01-10', '0', '0', null);
INSERT INTO `tbl_memori` VALUES ('31', 'ADATA', 'ADATA XPG SX8200 Pro 1TB NVMe SSD', 'adata-xpg-sx8200-pro-1tb-nvme-ssd', '1800000', '10', '1 TB', 'SSD M.2 NVMe', '1610294495_fe061e5248a225bb569b.jpg', ' ', '2021-01-10', '2021-01-10', '0', '0', null);

-- ----------------------------
-- Table structure for `tbl_merk`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_merk`;
CREATE TABLE `tbl_merk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT '',
  `gambar` varchar(255) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_merk
-- ----------------------------
INSERT INTO `tbl_merk` VALUES ('4', 'Asrock', 'www.asrock.com', '1609644325_ccfea31b2e3783cc27e5.jpg', '2021-01-03', '2021-01-03');
INSERT INTO `tbl_merk` VALUES ('5', 'corsair', 'www.corsair.com', '1609644532_e2a61d0dcb6ecd162f28.png', '2021-01-03', '2021-01-03');
INSERT INTO `tbl_merk` VALUES ('6', 'fantech', 'www.fantechworld.com', '1609644647_9652505ab8a988662022.jpg', '2021-01-03', '2021-01-03');
INSERT INTO `tbl_merk` VALUES ('7', 'MSI', 'www.MSI.com', '1609644731_ef33ddb2da09a7d44eb4.jpg', '2021-01-03', '2021-01-03');
INSERT INTO `tbl_merk` VALUES ('8', 'ThermalTake', 'www.thermaltake', '1609644840_d71b46010101c39f77f1.jpg', '2021-01-03', '2021-01-03');
INSERT INTO `tbl_merk` VALUES ('9', 'Asus', 'www.asus.com', '1609647375_eb45df771ef1e2eeaed8.png', '2021-01-03', '2021-01-03');
INSERT INTO `tbl_merk` VALUES ('10', 'GIGABYTE', 'www.gigabyte.com', '1610293114_329be554449c82198f3b.jpg', '2021-01-03', '2021-01-10');
INSERT INTO `tbl_merk` VALUES ('11', 'ADATA', 'www.ADATA.com', '1610293040_cd66737ef01e994bf18d.png', '2021-01-03', '2021-01-10');
INSERT INTO `tbl_merk` VALUES ('12', 'TEAM ELITE', 'www.teamgroupinc.com', '1610290669_8bace51f69e758028257.png', '2021-01-10', '2021-01-10');
INSERT INTO `tbl_merk` VALUES ('13', 'INTEL ', 'www.intel.com', '1610290770_70b696d4fcc74f8246dc.png', '2021-01-10', '2021-01-10');
INSERT INTO `tbl_merk` VALUES ('14', 'AMD', 'www.AMD.com', '1610290837_adef47402318f08c4b4b.png', '2021-01-10', '2021-01-10');
INSERT INTO `tbl_merk` VALUES ('15', 'SAMSUNG', 'www.samsung.com', '1610293000_daefbc421d867ef2aabd.jpg', '2021-01-10', '2021-01-10');
INSERT INTO `tbl_merk` VALUES ('16', 'WD', 'www.wd.com', '1610293165_59986ecc930cca2ed5d1.jpg', '2021-01-10', '2021-01-10');
INSERT INTO `tbl_merk` VALUES ('17', 'AEROCOOL', 'www.aerocool.io', '1610294785_8a53a3f00919bdddce55.png', '2021-01-10', '2021-01-10');

-- ----------------------------
-- Table structure for `tbl_motherboard`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_motherboard`;
CREATE TABLE `tbl_motherboard` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `merk` varchar(225) NOT NULL DEFAULT '',
  `nama` varchar(225) NOT NULL DEFAULT '',
  `slug` varchar(225) NOT NULL DEFAULT '',
  `harga` int(11) NOT NULL,
  `stok` varchar(225) NOT NULL DEFAULT '',
  `socket` varchar(50) NOT NULL DEFAULT '',
  `faktor_bentuk` varchar(225) NOT NULL DEFAULT '',
  `jenis_ram` varchar(225) NOT NULL DEFAULT '',
  `ukuran_ram_maks` varchar(225) NOT NULL DEFAULT '',
  `jml_slot_pcie` int(5) DEFAULT NULL,
  `kekuatan_cpu` varchar(50) NOT NULL DEFAULT '',
  `chipset` varchar(50) NOT NULL DEFAULT '',
  `jml_slot_ram` int(5) DEFAULT NULL,
  `jml_slot_sata` int(5) DEFAULT NULL,
  `jml_slot_m2` int(5) DEFAULT NULL,
  `frekuensi_maks_ram` varchar(50) NOT NULL DEFAULT '',
  `gambar` varchar(225) NOT NULL DEFAULT '',
  `rincian` text NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `diskon` int(11) DEFAULT 0,
  `harga_new` int(11) DEFAULT 0,
  `berlaku` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_motherboard
-- ----------------------------
INSERT INTO `tbl_motherboard` VALUES ('10', 'Asrock', 'Asrock Fatal1ty B250 Gaming K4', 'asrock-fatal1ty-b250-gaming-k4', '1495000', '10', 'LGA1151', 'Standard-ATX', 'DDR4', '32', '6', '8', 'INTEL B250', '2', '4', '1', '2400', '1609647055_d11bf20c387b8482fed5.png', ' ASRock Super Alloy\r\nSupports 7th and 6th Generation Intel® Core™ i7 / i5 / i3 / Pentium® / Celeron® Processors (Socket 1151)\r\nGraphics Output Options: HDMI, DVI-D, D-Sub\r\nSupports Triple Monitor\r\n7.1 CH HD Audio (Realtek ALC1220 Audio Codec), Supports Creative Sound Blaster™ Cinema 3', '2021-01-03', '2021-01-10', '10', '1345500', '2021-02-10');
INSERT INTO `tbl_motherboard` VALUES ('11', 'Asrock', 'Asrock B250M Pro4', 'asrock-b250m-pro4', '1450000', '10', 'LGA1151', 'Micro-ATX', 'DDR4', '32', '6', '8', 'INTEL B250', '2', '4', '1', '2400', '1609647582_ba1c6fc7abad5d90ac87.png', ' •	B250M Pro4\r\n•	Micro ATX\r\n•	ASRock Super Alloy\r\n•	Supports 7th and 6th Generation Intel® Core™ i7 / i5 / i3 / Pentium® / Celeron® Processors (Socket 1151)\r\n•	*8th Gen Intel® Core™ desktop processors are supported with Intel® 300 Series chipset motherboards only\r\n•	Supports DDR4 2400 (Intel® 7th Gen CPUs) / 2133 (Intel® 6th Gen CPUs)\r\n•	2 PCIe 3.0 x16, 1 PCIe 3.0 x1, 1 PCI\r\n•	AMD Quad CrossFireX™\r\n•	Graphics Output Options: HDMI, DVI-D, D-Sub\r\n•	Supports Triple Monitor\r\n•	7.1 CH HD Audio (Realtek ALC892 Audio Codec), ELNA Audio Caps\r\n•	6 SATA3, 2 Ultra M.2 (One supports PCIe Gen3 x4 & SATA3, the other one supports PCIe Gen3 x4 only)\r\n•	6 USB 3.1 Gen1 (1 Type-C, 2 Front, 3 Rear)\r\n•	Intel® Gigabit LAN\r\n•	Intel® Optane™ Memory Ready', '2021-01-03', '2021-01-03', '0', '0', null);
INSERT INTO `tbl_motherboard` VALUES ('12', 'Asrock', 'AB350M Pro4/DASH', 'ab350m-pro4dash', '1995000', '10', 'AM4', 'Micro-ATX', 'DDR4', '64', '4', '8', 'AMD Promontory B350', '4', '4', '1', '2400', '1609647958_e4a0db461a686e479dd9.png', '  Micro ATX\r\nASRock Super Alloy\r\nSupports AMD Socket AM4 A-Series APUs (Bristol Ridge) and Ryzen Series CPUs (Summit Ridge)\r\nSupports DDR4 3200+ (OC) (Ryzen CPU) / 2400 (A-series APU)\r\n1 PCIe 3.0 x16, 1 PCIe 2.0 x16, 2 PCIe 2.0 x1\r\nAMD Quad CrossFireX™\r\nGraphics Output: HDMI, DVI-D, D-Sub\r\nSupports Triple Monitor\r\n7.1 CH HD Audio (Realtek ALC892 Audio Codec), ELNA Audio Caps\r\n4 SATA3\r\n6 USB 3.1 Gen1 (2 Front, 4 Rear)\r\nRealtek Gigabit LAN, supports DASH function', '2021-01-03', '2021-01-03', '0', '0', null);
INSERT INTO `tbl_motherboard` VALUES ('13', 'Asus', 'Asus Strix Z270E Gaming ', 'asus-strix-z270e-gaming', '2990000', '10', 'LGA1151', 'Standard-ATX', 'DDR4', '64', '6', '8', 'INTEL Z270', '4', '4', '2', '2800', '1609648449_c4975c0802dc5ec17c1e.png', ' ', '2021-01-03', '2021-01-03', '0', '0', null);
INSERT INTO `tbl_motherboard` VALUES ('14', 'Asus', 'Asus ROG Maximus IX Code*', 'asus-rog-maximus-ix-code', '5995000', '10', 'LGA1151', 'E-ATX', 'DDR4', '128', '6', '8', 'INTEL Z270', '8', '6', '4', '4133', '1609648632_642b058962dbf30ccaf3.png', ' •	LGA1151 socket for 7th/6th Gen Intel® Core™ desktop processors\r\n•	ROG Water Cooling Zone: Dominate your cooling system\r\n•	Aura Sync RGB LED: Stunning synchronized effects and two Aura 4-pin RGB-strip headers\r\n•	SupremeFX: Exclusive new codec plus intuitive Sonic Radar III and Sonic Studio III\r\n•	5-Way Optimization: One-click system-wide overclocking.\r\n•	Best gaming networking: Intel Gigabit Ethernet, 2x2 802.11ac MU-MIMO Wi-Fi , LANGuard and GameFirst technologies\r\n•	Best gaming durability: ROG Armor and premium components\r\n•	Best gaming connectivity: Front-panel USB 3.1, dual M.2 and both USB 3.1 Type-A and Type-C\r\n', '2021-01-03', '2021-01-03', '0', '0', null);
INSERT INTO `tbl_motherboard` VALUES ('15', 'GIGABYTE', 'GIGABYTE X570 AORUS XTREME', 'gigabyte-x570-aorus-xtreme', '3100000', '10', 'AM4', 'E-ATX', 'DDR4', '128', '6', '8', 'AMD X570', '8', '6', '4', '4133', '1609648912_aaca84206149636c87a5.png', ' Supports AMD Ryzen™ 5000 Series / 3rd Gen Ryzen™/ 2nd Gen Ryzen™/ 3rd Gen Ryzen™ with Radeon™ Graphics/ 2nd Gen Ryzen™ with Radeon™ Vega Graphics/ 1st Gen Ryzen™ with Radeon™ Vega Graphics Processors\r\nDual Channel ECC/ Non-ECC Unbuffered DDR4, 4 DIMMs\r\nDirect 16 Phases Infineon Digital VRM Solution with 70A Power Stage\r\nThermal Reactive Armor Design with Fins-Array Heatsink, Direct Touch Heatpipe and NanoCarbon Baseplate\r\nTriple Ultra-Fast NVMe PCIe 4.0/3.0 x4 M.2 with Triple Thermal Guards\r\nOnboard Intel® WiFi 6 802.11ax 2T2R & BT 5 with 2X AORUS Antenna\r\nRear 130dB SNR AMP-UP Audio with ALC1220-VB & ESS SABRE 9218 DAC with WIMA Audio Capacitors\r\nAQUANTIA® 10GbE BASE-T LAN + Intel® Gigabit LAN with cFosSpeed\r\nExclusive RGB FAN COMMANDER for Professional Casemoders\r\nUSB TurboCharger for Mobile Device Fast Charge Support\r\nRGB FUSION with Multi-Zone Addressable LED Light Show Design, Support Addressable LED & RGB LED Strips\r\nSmart Fan 5 Features Multiple Temperature Sensors , Hybrid Fan Headers with FAN STOP and Noise Detection\r\nFront & Rear USB 3.2 Gen 2 Type-C™ Headers\r\nQ-Flash Plus Update BIOS Without Installing CPU, Memory and Graphics Card', '2021-01-03', '2021-01-03', '0', '0', null);
INSERT INTO `tbl_motherboard` VALUES ('16', 'GIGABYTE', 'GIGABYTE  Z490 GAMING X', 'gigabyte-z490-gaming-x', '6500000', '10', 'LGA1151', 'Standard-ATX', 'DDR4', '128', '6', '8', 'INTEL Z290', '4', '6', '2', '4133', '1610289395_191e82176d8ecb1ade3c.jpg', '  ', '2021-01-10', '2021-01-10', '0', '0', null);
INSERT INTO `tbl_motherboard` VALUES ('17', 'Asus', 'ASUS - ROG Strix X570-I Gaming', 'asus-rog-strix-x570-i-gaming', '3500000', '10', 'AM4', 'Standard-ATX', 'DDR4', '64', '4', '8', 'AMD X570', '4', '6', '2', '2800', '1610289672_4564e63f6c7e7279e72b.jpg', '  ', '2021-01-10', '2021-01-10', '0', '0', null);
INSERT INTO `tbl_motherboard` VALUES ('18', 'GIGABYTE', 'GIGABYTE B550M AORUS PRO-P', 'gigabyte-b550m-aorus-pro-p', '1650000', '10', 'AM4', 'Standard-ATX', 'DDR4', '64', '2', '8', 'INTEL B550', '4', '6', '2', '4133', '1610289895_1ddab6c6314608fa4f1a.png', ' AMD Ryzen™ 5000 Series/ 3rd Gen Ryzen™ and 3rd Gen Ryzen™ with Radeon™ Graphics Processors\r\nDual Channel ECC/ Non-ECC Unbuffered DDR4, 4 DIMMs\r\n10+2 Phases Digital Twin Power Design with 50A DrMOS\r\nAdvanced Thermal Design with Enlarged VRM Heatsinks\r\nUltra Durable™ PCIe 4.0 Ready x16 Slot\r\nDual Ultra-Fast NVMe PCIe 4.0/3.0 x4 M.2 with One Thermal Guard\r\nAMP-UP Audio with ALC1200 and premium capacitor\r\nBlazing Fast 2.5GbE LAN with Bandwidth Management\r\nDisplayPort & HDMI for Multiple Display\r\nRGB FUSION 2.0 Supports Addressable LED & RGB LED Strips\r\nSmart Fan 5 Features Multiple Temperature Sensors , Hybrid Fan Headers with FAN STOP\r\nQ-Flash Plus Update BIOS without Installing the CPU, Memory and Graphics Card\r\nPre-installed IO Shield for Easy and Quick Installation', '2021-01-10', '2021-01-10', '0', '0', null);
INSERT INTO `tbl_motherboard` VALUES ('19', 'Asus', 'ASUS ROG Maximus IX Extreme', 'asus-rog-maximus-ix-extreme', '8100000', '10', 'LGA1151', 'E-ATX', 'DDR4', '128', '6', '8', 'INTEL Z270', '4', '6', '2', '4133', '1610290108_2e00087f45d65b390d20.png', ' •	ROG MAXIMUS IX EXTREME\r\n•	Intel Z270 EATX gaming motherboard with water-cooling monoblock, dual M.2, Aura Sync RGB LEDs, DDR4 4133MHz, Thunderbolt 3, 802.11ac Wi-Fi, and USB 3.1 Type-A/C\r\n•	LGA1151 socket for 7th Gen and 6th Gen Intel® Core™ desktop processors.\r\n•	Integrated ROG-built monoblock detects water flow, temperature and leakage, and integrates the M.2 heatsink for improved reliability and performance.\r\n•	Best gaming lighting: Aura Sync RGB LEDs, Aura 4-pin RGB-strip headers and color-coded LED audio jacks.\r\n•	SupremeFX: Exclusive new codec plus intuitive Sonic Studio III and Sonic Radar III.\r\n•	5-Way Optimization: One-click system-wide overclocking.\r\n•	Best gaming networking: Intel® Gigabit Ethernet, 2x2 802.11ac MU-MIMO Wi-', '2021-01-10', '2021-01-10', '0', '0', null);

-- ----------------------------
-- Table structure for `tbl_pegawai`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_pegawai`;
CREATE TABLE `tbl_pegawai` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `no_pegawai` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gaji_pokok` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_pegawai
-- ----------------------------
INSERT INTO `tbl_pegawai` VALUES ('1', 'P0001', 'Adven Adam', 'adven-adam', 'Jatisari bla bla', '0888591005', 'a@b.c', '15000000', 'warehouse', 'default.jpg', null, null);
INSERT INTO `tbl_pegawai` VALUES ('2', 'PG-2', 'adan', 'pg-2', 'jatisari', '088981600236', '', '1500000', 'WareHouse', '1604148240_6e65c12a9012c4329890.jpg', '2020-10-31', '2020-10-31');
INSERT INTO `tbl_pegawai` VALUES ('4', 'PG-3', 'Adven', 'pg-3', 'Jatisari', '(+62)89-518-373-714', '', 'Rp.5.000.000', 'WareHouse', 'default.jpg', '2020-11-27', '2020-11-27');
INSERT INTO `tbl_pegawai` VALUES ('5', 'PG-5', 'Adam', 'pg-5', 'Sobokerto', '(+62)8-591-200-050', '', 'Rp.4.000.000', 'ekselon 1', 'default.jpg', '2020-11-27', '2020-11-27');
INSERT INTO `tbl_pegawai` VALUES ('6', 'PG-6', 'Khasbialoh', 'pg-6', 'ngemplak', '(+62)8-591-475-515', '', 'Rp.5.000.000', 'ada', 'default.jpg', '2020-11-27', '2020-11-27');
INSERT INTO `tbl_pegawai` VALUES ('7', 'PG-7', 'adan', 'pg-7', 'jatisari 2/1', '(+62)859-160-081', '', 'Rp.4.500.000', 'ada', 'default.jpg', '2020-11-27', '2020-11-27');
INSERT INTO `tbl_pegawai` VALUES ('8', 'PG-8', 'nur anisah', 'pg-8', 'boyolali', '(+62)85-647-083-589', '', 'Rp.10.000.000', 'Manager', '1610023056_e456d5dbe006edd6bac8.jpg', '2021-01-07', '2021-01-07');
INSERT INTO `tbl_pegawai` VALUES ('9', 'PG-9', 'Khasbialloh', 'pg-9', 'MIDDLE WORLD', '(+62)89-518-373-714', '', 'Rp.3.500.000', 'Warehouse', '1610296994_241d13a9e7f3381a80ec.png', '2021-01-10', '2021-01-10');

-- ----------------------------
-- Table structure for `tbl_pendingin`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_pendingin`;
CREATE TABLE `tbl_pendingin` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `merk` varchar(225) NOT NULL DEFAULT '',
  `nama` varchar(225) NOT NULL DEFAULT '',
  `slug` varchar(225) NOT NULL DEFAULT '',
  `harga` int(11) NOT NULL,
  `stok` varchar(225) NOT NULL DEFAULT '',
  `jenis_pendingin` varchar(225) NOT NULL DEFAULT '',
  `gambar` varchar(225) NOT NULL DEFAULT '',
  `rincian` text NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `diskon` int(11) DEFAULT 0,
  `harga_new` int(11) DEFAULT 0,
  `berlaku` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_pendingin
-- ----------------------------
INSERT INTO `tbl_pendingin` VALUES ('6', 'ThermalTake', 'Fan Thermaltake Ring Quad 12 RGB Radiator Premium Edition 3 Pack', 'fan-thermaltake-ring-quad-12-rgb-radiator-premium-edition-3-pack', '1735000', '10', 'Air Cooling', '1610295981_052eedceb3763cccbd21.jpg', 'FAN DIMENSION\r\n120 x 120 x 25 mm\r\nINTERFACE\r\nUSB 2.0 connectors (9 Pin)\r\nSYSTEM COMPATIBILITY\r\nWindows 7 / 8 / 8.1 / 10\r\nFAN STARTED VOLTAGE\r\n9.0 V\r\nFAN RATED VOLTAGE\r\n12 V & 5V\r\nRATED CURRENT\r\n12V- 0.09 A , 5v – 0.9A (Fan*1)\r\nPOWER INPUT\r\n12V – 3.24 W . 5V – 13.5 W (Fan*3)\r\nFAN SPEED\r\n500 ~ 1500 R.P.M\r\nMAX. AIR PRESSURE\r\n1.4 mm-H2O\r\nMAX AIR FLOW\r\n40.9 CFM\r\nNOISE\r\n25 dB-A\r\nBEARING TYPE\r\nHydraulic Bearing\r\nLIFE EXPECTATION\r\n40,000 hrs,25℃\r\nWEIGHT\r\n189 g (Fan*1)', '2021-01-10', '2021-01-10', '0', '0', null);
INSERT INTO `tbl_pendingin` VALUES ('7', 'ThermalTake', 'Thermaltake AIO Watercooling TH 120', 'thermaltake-aio-watercooling-th-120', '1000000', '10', 'Water Cooling', '1610296073_17a3447d7fbff18348b9.png', ' Thermaltake TH120 120mm ARGB | CL-W285-PL12SW-A\r\nSpesifikasi\r\n\r\nWeight : 1430 g\r\n\r\nPUMP\r\nRated Voltage: 12 V / 5V\r\nRated Current : 0.37 A / 0.12A\r\nMotor Speed : 3300 R.P.M\r\n\r\nWATERBLOCK MATERIAL : Cooper\r\n\r\nFAN\r\nDimension: 120 x 120 x 25 mm\r\nSpeed: 1500 RPM\r\nNoise Level: 28.2 dB-A\r\nRated Voltage: 12 V & 5 V\r\nMax. Air Flow: 59.28 CFM\r\nMax. Pressure: 1.31 mm-H2O\r\nConnector: 2510–4 Pin , 5 V ARGB header–3 Pin\r\n\r\nTUBE\r\nLength: 400 mm\r\nMaterial: Rubber\r\n\r\nRADIATOR\r\nDimension: 153x 120 x 27 mm\r\n\r\nCOMPATIBILITY\r\nIntel LGA 1156/1155/1151/1150\r\nAMD FM2/FM1/AM4/AM3+/AM3/AM2+/AM2', '2021-01-10', '2021-01-10', '0', '0', null);
INSERT INTO `tbl_pendingin` VALUES ('8', 'ThermalTake', 'THERMALTAKE Pure Duo 14 ARGB Sync Radiator Fan (2-Fan Pack)-Black', 'thermaltake-pure-duo-14-argb-sync-radiator-fan-2-fan-pack-black', '650000', '10', 'Air Cooling', '1610296154_61fe78960f7caa825035.jpg', ' FAN DIMENSION\r\n140 x 140 x 25 mm\r\nINTERFACE\r\nFan 2510-4P , LED 5V RGB Header\r\nSTARTED VOLTAGE\r\n9.0 V\r\nRATED CURRENT\r\nFan 0.17 A , LED 0.28 A (Fan*1)\r\nRATED VOLTAGE\r\n12 V & 5V\r\nPOWER INPUT\r\n12V – 5.76 W , 5V – 2.8 W (Fan*2)\r\nFAN SPEED\r\nPWM 500~1500 R.P.M\r\nMAX. AIR PRESSURE\r\n2.24 mm-H2O\r\nMAX AIR FLOW\r\n82.23 CFM\r\nNOISE LEVEL\r\n33.5 dB-A\r\n\r\nBEARING TYPE\r\nHydraulic Bearing\r\nLIFE EXPECTATION\r\n40,000 hrs, 25℃\r\n\r\nWEIGHT\r\n209 g (Fan*1)', '2021-01-10', '2021-01-10', '0', '0', null);
INSERT INTO `tbl_pendingin` VALUES ('9', 'ThermalTake', 'Thermaltake Pacific M360 Plus D5 Hard Tube Water Cooling Kit', 'thermaltake-pacific-m360-plus-d5-hard-tube-water-cooling-kit', '7100000', '10', 'Water Cooling', '1610296277_4339f38f0f02fefc999a.jpg', ' Pacific M360 Plus D5 Hard Tube Water Cooling Kit\r\n\r\nP/N\r\nCL-W218-CU00SW-A\r\nDIMENSION\r\n523 (L) x 221 (W) x 280 (H)\r\nCOMPATIBILITY\r\nIntel LGA 2066/2011/1366/1156/1155/1151/1150/775\r\nAMD AM4/FM2/FM1/AM3+/AM3/AM2+/AM2\r\n(CPU Socket)\r\nCOMPONENTS DIMENSION\r\nPump & Reservoir:309.7H) x 87.4(W) x 94.1(L) mm\r\nRadiator : 64 (H) x 129 (W) x 402.5 (L)\r\nTUBE DIMENSION\r\nOD : 16mm , ID : 12mm , L : 500mm\r\nFAN SPEC\r\n1500 RPM (1000RPM with LNC)\r\nCOOLANT\r\nPure Clear Coolant\r\nKIT CONTENTS\r\nCPU Water Block\r\n- Pacific Pacific W4 Plus x1\r\n\r\nPump/Reservoir\r\n- Pacific PR22-D5 Plus Pump/Reservoir Combo x1\r\n\r\nRadiator\r\n- Pacific RL360 Plus Radiator 64 (H) x 129 (W) x 402.5 (L) mm x1\r\n\r\nFittings\r\n- Pacific C-Pro G1/4 PETG 16mm OD Compression – Chrome x8\r\n- Pacific G1/4 90 Degree Adapter - Chrome x2\r\n\r\nFan\r\n-Riing 12 RGB Plus Radiator Fan TT Premium Edition 3 Pack x1\r\n\r\nCoolant\r\n- Thermaltake C1000 Pure Clear Coolant x1\r\n\r\nTube\r\n- V-Tubler PETG Tube 16mm OD 500mm 4Pack x1\r\n\r\nAccessory\r\n- Silicone Insert 900mm Tt Premium Edition\r\n- Intel and AMD Universal Backplated & Mounting Kit\r\n- 24pin ATX Bridge Tool x1\r\n- Thermaltake Thermal Grease x1', '2021-01-10', '2021-01-10', '5', '6745000', '2021-02-10');
INSERT INTO `tbl_pendingin` VALUES ('10', 'ThermalTake', ' THERMALTAKE RL140 DS Water cooling kit', 'thermaltake-rl140-ds-water-cooling-kit', '3500000', '10', 'Water Cooling', '1610296381_e9e5bcfdca5426dbe30f.jpg', ' ', '2021-01-10', '2021-01-10', '0', '0', null);
INSERT INTO `tbl_pendingin` VALUES ('11', 'AEROCOOL', 'AeroCool FROST 12 Fan RGB 12cm', 'aerocool-frost-12-fan-rgb-12cm', '55000', '10', 'Air Cooling', '1610296524_349ad299aecf76577f52.jpg', ' Model Frost 12\r\n120mm fan with Molex 3-Pin connector featuring a stylish Fixed RGB LED Lighting design to add extra flair to your rig. Comes equipped with curved fan blades for increased air pressure, maximizing cooling performance and minimizing air resistance and noise.\r\n\r\nComes equipped with Molex 3-Pin connector\r\nFixed RGB LED Lighting adds extra flair to your rig\r\nCurved fan blades for maximum cooling performance\r\nFan speed of 1000 M\r\nBuilt with a sleeve bearing\r\n\r\nFan Dimension (L x W x H) : 120 x 120 x 25mm\r\nFan Speed : 1000 m\r\nFan Starting Voltage : 6V\r\nRated Voltage : 12 V\r\nRated Current : .3A\r\nPower Consumption : 3.24 W\r\nConnector Type : Molex 3pin\r\nAir Pressure : 1.08mmH2O\r\nAir Flow : 24.8CFM\r\nFan Noise Level : 23.7dBA\r\nBearing Type : Sleeve Bearing\r\nMTBF (Mean Time Before Failure) 40000 hrs.', '2021-01-10', '2021-01-10', '0', '0', null);
INSERT INTO `tbl_pendingin` VALUES ('12', 'AEROCOOL', 'Aerocool Cylon 4 - CPU Cooler RGB', 'aerocool-cylon-4-cpu-cooler-rgb', '377000', '10', 'Air Cooling', '1610296622_93d593df09575b202487.jpg', ' • RGB LED design on the top and side of the air cooler adds a stylish flair to your rig\r\n• Comes with built-in RGB lighting effects and compatibility with Addressable RGB motherboards or hubs\r\n• Heat Core Touch Technology with 4 ultra-efficient thermal heat pipes\r\n• Cover on the top of the air cooler achieves a unidirectional air flow, improving heat dissipation\r\n• Upgraded high efficiency fins for optimal thermal performance\r\n• Black coating on fins improves cooling efficiency\r\n• TDP (Thermal Design Power) up to 145W', '2021-01-10', '2021-01-10', '0', '0', null);
INSERT INTO `tbl_pendingin` VALUES ('13', 'AEROCOOL', 'AeroCool PULSE L240F AIO Water Cooling System 2x Fan RGB 120mm', 'aerocool-pulse-l240f-aio-water-cooling-system-2x-fan-rgb-120mm', '1100000', '10', 'Water Cooling', '1610296696_7cd770878a8b7de7d06b.jpg', ' Comes with 8 LED lighting effects that can be controlled via LED control button\r\nComes equipped with two 12cm Addressable RGB fans\r\nCompatible with Addressable RGB motherboards\r\nPure copper water block with micro channel design\r\nPump coupled together with radiator instead of the block\r\nBalanced impeller and high-quality bearings allow for silent performance\r\nLow-density fins per inch radiator (LFPI) provide more air flow\r\nHigh-quality, teflon coated tubing allows for ultra-low water loss\r\nUnique flower-shaped fan delivers unbeatable cooling performance\r\n\r\nSocket Intel LGA 2066/2011-V3/115X/1366/775 AMD : FM1/FM2/AM4/AM3+/AM3/AM2+/AM2\r\nBlock : Copper \r\nRadiator : Almunium 240mm \r\nPump : Ceramic Bearing 2800RPM \r\nFan : 2x Addressable RGB 120mm PWM 600-1800 RPM Hydraulic Bearing \r\nTDP : 400W \r\n8 unique RGB lighting modes \r\nAddressable RGB \r\n', '2021-01-10', '2021-01-10', '0', '0', null);
INSERT INTO `tbl_pendingin` VALUES ('14', 'AEROCOOL', 'AeroCool PULSE L120F AIO Water Cooling System 1x Fan RGB 120mm', 'aerocool-pulse-l120f-aio-water-cooling-system-1x-fan-rgb-120mm', '950000', '10', 'Water Cooling', '1610296840_665857e0c6655a09ee1b.jpg', ' Comes with 8 LED lighting effects that can be controlled via LED control button\r\nComes equipped with two 12cm Addressable RGB fans\r\nCompatible with Addressable RGB motherboards\r\nPure copper water block with micro channel design\r\nPump coupled together with radiator instead of the block\r\nBalanced impeller and high-quality bearings allow for silent performance\r\nLow-density fins per inch radiator (LFPI) provide more air flow\r\nHigh-quality, teflon coated tubing allows for ultra-low water loss\r\nUnique flower-shaped fan delivers unbeatable cooling performance\r\n\r\nSocket Intel LGA 2066/2011-V3/115X/1366/775 AMD : FM1/FM2/AM4/AM3+/AM3/AM2+/AM2\r\nBlock : Copper \r\nRadiator : Almunium 120mm \r\nPump : Ceramic Bearing 2800RPM \r\nFan : 1x Addressable RGB 120mm PWM 600-1800 RPM Hydraulic Bearing \r\nTDP : 400W \r\n8 unique RGB lighting modes \r\nAddressable RGB ', '2021-01-10', '2021-01-10', '0', '0', null);

-- ----------------------------
-- Table structure for `tbl_procesor`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_procesor`;
CREATE TABLE `tbl_procesor` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `merk` varchar(50) NOT NULL DEFAULT '',
  `nama` varchar(225) NOT NULL DEFAULT '',
  `slug` varchar(225) NOT NULL DEFAULT '',
  `harga` int(11) NOT NULL,
  `stok` varchar(225) NOT NULL DEFAULT '',
  `jml_core` int(5) DEFAULT NULL,
  `jml_threads` int(5) DEFAULT NULL,
  `socket` varchar(50) NOT NULL DEFAULT '',
  `frekuensi` varchar(50) NOT NULL DEFAULT '',
  `iGPU` varchar(225) DEFAULT '',
  `cache` varchar(50) NOT NULL DEFAULT '',
  `rincian` text NOT NULL,
  `gambar` varchar(225) NOT NULL DEFAULT '',
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `diskon` int(11) DEFAULT 0,
  `harga_new` int(11) DEFAULT 0,
  `berlaku` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_procesor
-- ----------------------------
INSERT INTO `tbl_procesor` VALUES ('7', 'AMD', 'AMD - Ryzen 5 3500', 'amd-ryzen-5-3500', '2380000', '10', '4', '8', 'AM4', '3,6 GHz', 'None', '8', '  Market Segment	Desktop\r\nFamily	AMD Ryzen 5\r\nModel Number	3500X\r\nPart Number	-\r\nFrequency	3600 MHz\r\nTurbo Frequency	4100 MHz\r\nSocket	Socket AM4\r\nIntroduction Date	-\r\n', '1609649205_f387c73d3c83108d02f1.jpg', '2021-01-03', '2021-01-10', '0', '0', null);
INSERT INTO `tbl_procesor` VALUES ('8', 'AMD', 'AMD - Ryzen 7 3700X', 'amd-ryzen-7-3700x', '5035000', '10', '8', '16', 'AM4', '3,6 GHz', 'None', '8', ' Market Segment	Desktop\r\nFamily	AMD Ryzen 7\r\nModel Number	3700X\r\nPart Number	100-100000071BOX\r\nFrequency	3600 MHz\r\nTurbo Frequency	4400 MHz\r\nSocket	Socket AM4\r\nIntroduction Date	-\r\n', '1609649320_15a88ef707e9d0697521.jpg', '2021-01-03', '2021-01-10', '5', '4783250', '2021-02-10');
INSERT INTO `tbl_procesor` VALUES ('9', 'AMD', 'AMD - Ryzen 9 3900X', 'amd-ryzen-9-3900x', '7250000', '10', '12', '24', 'AM4', '3,8GHz', 'None', '64', ' Market Segment	Desktop\r\nFamily	AMD Ryzen 9\r\nModel Number	3900X\r\nPart Number	100-100000023BOX\r\nFrequency	3800 MHz\r\nTurbo Frequency	4600 MHz\r\nSocket	Socket AM4\r\nIntroduction Date	-\r\n', '1609649465_2bc953ede2474ca6ebe0.jpg', '2021-01-03', '2021-01-03', '0', '0', null);
INSERT INTO `tbl_procesor` VALUES ('10', 'INTEL', 'Intel - Core i3 9100', 'intel-core-i3-9100', '1752000', '10', '4', '4', 'LGA1151', '3,6 GHz', 'Intel® UHD Graphics 630', '6', ' Market Segment	Desktop\r\nFamily	Intel Core i3\r\nModel Number	i3 9100\r\nPart Number	BX80684I39100\r\nFrequency	3600 MHz\r\nTurbo Frequency	4200 MHz\r\nSocket	LGA 1151\r\n', '1609649605_221b53e13f41b55b7eae.jpg', '2021-01-03', '2021-01-03', '0', '0', null);
INSERT INTO `tbl_procesor` VALUES ('11', 'INTEL', 'Intel - Core i5 9400F', 'intel-core-i5-9400f', '2030000', '10', '6', '6', 'LGA1151', '2,90 GHz', 'None', '9', ' Market Segment	Desktop\r\nFamily	Intel Core i5\r\nModel Number	i5 9400F\r\nPart Number	BX80684I59400F\r\nFrequency	2900 MHz\r\nTurbo Frequency	4100 MHz\r\nSocket	LGA 1151\r\nIntroduction Date	Q1 2019\r\n', '1609649756_1d396cee279ffc5f0356.jpg', '2021-01-03', '2021-01-03', '0', '0', null);
INSERT INTO `tbl_procesor` VALUES ('12', 'INTEL', 'Intel - Core i7 9700KF', 'intel-core-i7-9700kf', '4900000', '10', '8', '8', 'LGA1151', '3,6 GHz', 'None', '12', ' Market Segment	Desktop\r\nFamily	Intel Core i7\r\nModel Number	i7 9700KF\r\nPart Number	BX80684I79700KF\r\nFrequency	3600 MHz\r\nTurbo Frequency	4900 MHz\r\nSocket	LGA 1151\r\nIntroduction Date	Q1 2019\r\n', '1609649886_e48b76d7f319b146d1c0.jpg', '2021-01-03', '2021-01-03', '0', '0', null);
INSERT INTO `tbl_procesor` VALUES ('13', 'AMD', 'AMD - Ryzen 7 3800XT', 'amd-ryzen-7-3800xt', '6190000', '10', '8', '16', 'AM4', '3,9 GHz', 'None', '32', '  # of CPU Cores\r\n8\r\n# of Threads\r\n16\r\nBase Clock\r\n3.9GHz\r\nMax Boost Clock \r\nUp to 4.7GHz\r\nTotal L2 Cache\r\n4MB\r\nTotal L3 Cache\r\n32MB\r\nUnlocked \r\nYes\r\nCMOS\r\nTSMC 7nm FinFET\r\nPackage\r\nAM4\r\nPCI Express® Version\r\nPCIe 4.0\r\nThermal Solution (PIB)\r\nNot included\r\nDefault TDP / TDP\r\n105W\r\nMax Temps\r\n95°C', '1610290333_6f1026584173e8e73bc1.jpg', '2021-01-10', '2021-01-10', '0', '0', null);
INSERT INTO `tbl_procesor` VALUES ('14', 'INTEL', 'Intel - Core i9 9900K', 'intel-core-i9-9900k', '6900000', '10', '8', '16', 'LGA1151', '3,6 GHz', 'Intel® UHD Graphics 630', '64', ' Market Segment	Desktop\r\nFamily	Intel Core i9\r\nModel Number	i9 9900K\r\nPart Number	BX80684I99900K\r\nFrequency	3600 MHz\r\nTurbo Frequency	5000 MHz\r\nSocket	LGA 1151\r\nIntroduction Date	Q4 2017\r\n', '1610290497_71a1d69490a0c728b3be.jpg', '2021-01-10', '2021-01-10', '0', '0', null);

-- ----------------------------
-- Table structure for `tbl_psu`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_psu`;
CREATE TABLE `tbl_psu` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `merk` varchar(225) NOT NULL DEFAULT '',
  `nama` varchar(225) NOT NULL DEFAULT '',
  `slug` varchar(225) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` varchar(225) NOT NULL DEFAULT '',
  `sertifikat` varchar(225) NOT NULL DEFAULT '',
  `jenis_kabel` varchar(225) NOT NULL,
  `mb_power` varchar(225) NOT NULL DEFAULT '',
  `gambar` varchar(225) NOT NULL DEFAULT '',
  `rincian` text NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `diskon` int(11) DEFAULT 0,
  `harga_new` int(11) DEFAULT 0,
  `berlaku` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_psu
-- ----------------------------
INSERT INTO `tbl_psu` VALUES ('4', 'AEROCOOL', 'Aerocool LUX RGB 550W 80 Plus Bronze', 'aerocool-lux-rgb-550w-80-plus-bronze', '545000', '10', '80+BRONZE', 'Non Modular', '550', '1610295035_9ee866acbc21182ef84a.jpg', ' Product Name : Aerocool LUX RGB 550W 80 Plus Bronze - 2 Years Warranty\r\nBrand : Aerocool\r\nSeries : LUX RGB\r\nWattage : 550W\r\n80 PLUS Certification : 80 Plus Bronze\r\nMax. Efficiency : Up to 88%+ efficiency\r\nCooling : Fan\r\nModular : No\r\nModularity : No\r\nMotherboard Connector : 20+4-Pin\r\nConnectors : 1x (8/4+4) pin CPU +12V\r\n2x 4Pin Molex \r\n1x (6+2 pins) PCI-E Power \r\n4x SATA Power\r\n\r\nForm Factor : ATX\r\nWarranty : 2 Years', '2021-01-10', '2021-01-10', '0', '0', null);
INSERT INTO `tbl_psu` VALUES ('5', 'AEROCOOL', 'Aerocool LUX RGB 650M Modular Power supply - PSU 650W 80+', 'aerocool-lux-rgb-650m-modular-power-supply-psu-650w-80', '650000', '10', '80+', 'Modular', '650', '1610295205_dd5dc5f02a29b2f20ed6.jpg', '  TECH SPECS\r\nModel: LUX RGB 650M\r\nAC Input: 200-240VAC 4A 50-60Hz\r\nMax. Combined Power: 650W\r\n\r\nConnectors & Cable length\r\nMotherboard Connector: 1 x 20+4pin (500mm)\r\nCPU Connector: 1 x 12V 4+4Pin (550mm)\r\nVGA Connector: 1 x PCI-E 6+2Pin + PCI-E 6+2Pin (450mm+150mm)\r\nPeripherals Connector: 2 x SATA + SATA + PATA (550mm+150mm+150mm)\r\n+5V RGB Connector: 1 x RGB + VDG (700mm+100mm)', '2021-01-10', '2021-01-10', '0', '0', null);
INSERT INTO `tbl_psu` VALUES ('6', 'ThermalTake', 'Thermaltake Smart BX1 RGB 550W 80+ Bronze', 'thermaltake-smart-bx1-rgb-550w-80-bronze', '1000000', '10', '80+BRONZE', 'Modular', '550', '1610295314_a5221251d0df2f73d1ff.jpg', ' ', '2021-01-10', '2021-01-10', '0', '0', null);
INSERT INTO `tbl_psu` VALUES ('7', 'ThermalTake', 'Thermaltake Toughpower GX1 RGB 600W 80+ GOLD RGB SYNC PSU', 'thermaltake-toughpower-gx1-rgb-600w-80-gold-rgb-sync-psu', '1200000', '10', '80+GOLD', 'Modular', '600', '1610295428_ba146a17e2d9fd943bd0.jpg', ' PS-TPD-0600NHFAGx-1\r\nWATTS\r\n600W\r\nRGB FAN\r\nYes\r\nFORM FACTOR\r\nATX\r\nMODEL\r\nTP-600AH2NKG\r\nMAX. OUTPUT CAPACITY\r\n600W\r\nPEAK OUTPUT CAPACITY\r\n720W\r\nBlack\r\nDIMENSION ( W / H / D )\r\n150mm(W) x 86mm(H) x 140mm(D)\r\nPFC (POWER FACTOR CORRECTION)\r\nActive PFC\r\nPOWER GOOD SIGNAL\r\n100-500 msec\r\nHOLD UP TIME\r\n> 12msec at 80% of full load\r\nINPUT CURRENT\r\n10A max.\r\nINPUT FREQUENCY RANGE\r\n50Hz - 60Hz\r\nINPUT VOLTAGE\r\n100V - 240V~\r\nOPERATING TEMPERATURE\r\n+ 5°C to + 40°C\r\nOPERATING HUMIDITY\r\n20% to 85%, non-condensing\r\nSTORAGE TEMPERATURE\r\n-40°C to + 55°C\r\nSTORAGE HUMIDITY\r\n10% to 95%, non-condensing\r\nCOOLING SYSTEM\r\n12cm hydraulic bearing fan\r\nEFFICIENCY\r\nMeet 80 PLUS®Gold at 115Vac input.\r\nMTBF\r\n100,000 hrs minimum\r\nSAFETY APPROVAL\r\nCE/TÜV SUD/FCC/UL/BSMI/S-mark\r\nPCI-E 6+2PIN\r\n2', '2021-01-10', '2021-01-10', '0', '0', null);
INSERT INTO `tbl_psu` VALUES ('8', 'ThermalTake', 'Thermaltake Toughpower GF1 850W PSU 80+ Gold- power supply', 'thermaltake-toughpower-gf1-850w-psu-80-gold-power-supply', '2100000', '10', '80+GOLD', 'Non Modular', '850', '1610295539_0d5eb2e701e60c65b570.png', ' Model TTP-850AH3FCG\r\nMax. Output Capacity 850W\r\nPeak Output Capacity 1020W\r\nColor Black\r\nDimension （ W / H / D ） 150mm(W) x 86mm(H) x 160mm(D)\r\nPFC （Power Factor Correction） Active PFC\r\nPower Good Signal 100-500 msec\r\nHold Up Time > 16msec at 100% of full load\r\nInput current 12A\r\nInput Frequency Range 50Hz - 60Hz\r\nInput Voltage 100V – 240V~\r\nOperating Temperature 0°C to + 50°C\r\nOperating Humidity 20% to 90%,non-condensing\r\nStorage Temperature -20°C to + 70°C\r\nStorage Humidity 5% to 95%, non-condensing\r\nCooling System 14cm hydraulic bearing fan\r\nEfficiency Meet 80 PLUS®Gold at 115Vac input.\r\nMTBF 120,000 hrs minimum\r\nSafety Approval CE/cTUVus/TÜV SÜD/FCC/BSMI/EAC\r\nPCI-E 6+2pin 6\r\nProtection OCP, OVP, UVP, OPP, SCP, OTP', '2021-01-10', '2021-01-10', '0', '0', null);
INSERT INTO `tbl_psu` VALUES ('9', 'Asus', 'Power Supply ASUS ROG STRIX 650G - 650W 80+ GOLD FULLY MODULAR', 'power-supply-asus-rog-strix-650g-650w-80-gold-fully-modular', '2100000', '10', '80+GOLD', 'Modular', '650', '1610295822_4574c9c766f745746926.jpg', ' Intel Specification\r\nATX12V\r\nDimensions\r\n16 x 15 x8.6 Centimeter\r\nEfficiency\r\n80Plus Gold\r\nProtection Features\r\nOPP/OVP/SCP/OCP/OTP\r\nHazardous Materials\r\nROHS\r\nAC Input Range\r\n100-240Vac\r\nThermal Features\r\nROG Thermal Solution\r\nFan Size\r\n135mm\r\nDC Output Voltage\r\n+3.3V +5V +12V -12V +5Vsb\r\nMaximum Load\r\n20A 20A 62A 0.3A 3A\r\nTotal Output\r\n650W\r\nConnectors\r\nMB 24/20-pin x 1\r\nCPU 4+4-pin x 2\r\nPCI-E 6+2-pin x 4\r\nSATA x 8\r\nPeripheral x 3\r\nPackage Contents\r\nPower Cord x 1\r\nMotherboard Power cable x 1 (610mm)\r\nCPU Cable x 2 (1000mm)\r\nPCI-E Cable x 2 (675mm)\r\nSATA Cable x 2 (810mm/860mm)\r\nPeripheral x 1 (450mm)\r\nJoin the ROG badge x 2\r\nROG logo magnet x 1\r\nROG label x 3', '2021-01-10', '2021-01-10', '0', '0', null);

-- ----------------------------
-- Table structure for `tbl_ram`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_ram`;
CREATE TABLE `tbl_ram` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `merk` varchar(225) NOT NULL DEFAULT '',
  `nama` varchar(225) NOT NULL,
  `slug` varchar(225) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` varchar(225) NOT NULL DEFAULT '',
  `jenis_ram` varchar(225) NOT NULL DEFAULT '',
  `ukuran_ram` varchar(225) NOT NULL DEFAULT '',
  `frekuensi` varchar(225) NOT NULL DEFAULT '',
  `gambar` varchar(225) NOT NULL DEFAULT '',
  `rincian` text NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `diskon` int(11) DEFAULT 0,
  `harga_new` int(11) DEFAULT 0,
  `berlaku` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_ram
-- ----------------------------
INSERT INTO `tbl_ram` VALUES ('4', 'corsair', 'CORSAIR Memory PC 8GB DDR4 PC-19200 Vengeance LPX ', 'corsair-memory-pc-8gb-ddr4-pc-19200-vengeance-lpx', '1515000', '10', 'DDR4', '8', '2400', '1609649991_6ce5733e74793c10140b.jpg', ' •	1 x 8GB kit\r\n•	DDR4\r\n•	2400MHz\r\n•	Single Channel\r\n•	PC4-19200\r\n', '2021-01-03', '2021-01-03', '0', '0', null);
INSERT INTO `tbl_ram` VALUES ('5', 'ADATA', 'ADATA XPG Flame 16GB DDR4', 'adata-xpg-flame-16gb-ddr4', '3450000', '10', 'DDR4', '16', '2400', '1609650295_f3c355bc9953bf4ae9df.jpg', ' Low Voltage	1.2V\r\nKapasitas	16GB\r\nTipe Memori	DDR4 SODIMM\r\nClock Speed	2400 MHz\r\n', '2021-01-03', '2021-01-03', '0', '0', null);
INSERT INTO `tbl_ram` VALUES ('6', 'ADATA', 'ADATA Memory DDR4 4GB 2400 U-DIMM', 'adata-memory-ddr4-4gb-2400-u-dimm', '556000', '10', 'DDR4', '4', '2400', '1609650368_105588fad10492fc9fcd.jpg', '•	Kapasitas : 4GB\r\n•	Memory Type : DDR4\r\n•	Module Type : U-DIMM\r\n•	Speed : 2400MHz\r\n•	Interface : 288-pin\r\n•	Standard : JEDEC\r\n', '2021-01-03', '2021-01-03', '0', '0', null);
INSERT INTO `tbl_ram` VALUES ('7', 'ADATA', 'ADATA XPG GAMMIX D10 8GB DDR4 ', 'adata-xpg-gammix-d10-8gb-ddr4', '2810000', '10', 'DDR4', '8', '2400', '1609650434_dc363762d39d6cd90dcf.jpg', 'Low Voltage	1.2V\r\nKapasitas	2 x 8GB\r\nMemori Channel	CL16\r\nTipe Memori	DDR4\r\nClock Speed	2400 MHz\r\n', '2021-01-03', '2021-01-03', '0', '0', null);
INSERT INTO `tbl_ram` VALUES ('8', 'corsair', 'CORSAIR Memory PC 8GB DDR4 ', 'corsair-memory-pc-8gb-ddr4', '846000', '10', 'DDR4', '8', '2400', '1609650549_f80b8a1da70f8d8c51df.jpg', ' •  1 x 8GB kit\r\n•  DDR4\r\n•  2400MHz\r\n•  PC4-19200\r\n•  Single Channel\r\n', '2021-01-03', '2021-01-03', '0', '0', null);
INSERT INTO `tbl_ram` VALUES ('9', 'TEAM ELITE', 'TEAM Elite Sodimm 4GB DDR3 ', 'team-elite-sodimm-4gb-ddr3', '300000', '10', 'DDR4', '4', '1600', '1610291062_e7fb355f29c7c3a9f3a4.jpg', ' •	4GB\r\n•	SODIMM DDR3\r\n•	1600MHz\r\n•	PC3-12800\r\n', '2021-01-10', '2021-01-10', '0', '0', null);
INSERT INTO `tbl_ram` VALUES ('10', 'TEAM ELITE', 'Team Elite Plus Black 16GB ( 2x8GB) PC 2666 DDR4', 'team-elite-plus-black-16gb-2x8gb-pc-2666-ddr4', '1000000', '10', 'DDR4', '8', '2400', '1610291150_79b01342adfb7e180b79.jpg', ' Team Elite Plus Black DDR4 2666Mhz Dual Channel 16GB (2X8GB) CL19-19-19-43', '2021-01-10', '2021-01-10', '0', '0', null);

-- ----------------------------
-- Table structure for `tbl_rating`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_rating`;
CREATE TABLE `tbl_rating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `pekerjaan` varchar(255) DEFAULT NULL,
  `pesan` text NOT NULL,
  `rating` int(11) DEFAULT 0,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_rating
-- ----------------------------
INSERT INTO `tbl_rating` VALUES ('1', 'asdas2@dsv.f', 'asdas', '(0)89-518-373-714', 'Pengangguran', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore esse consectetur totam commodi! Totam repellendus sunt facilis? Pariatur in placeat, nesciunt reiciendis dignissimos quas iste saepe. Blanditiis iure quibusdam eaque sed fuga et aperiam culpa tempore magnam quia modi, tenetur ad distinctio quaerat iste at ratione? Iusto et aut deserunt.\r\n', '4', '2020-12-05', '2020-12-05');
INSERT INTO `tbl_rating` VALUES ('2', 'advenadam@student.uns.ac.id', 'Adven Adam Khasbi Alloh', '(0)89-518-373-714', 'Mahasiswa, Uns', 'Sangat Bagus Karena yang bikin saya', '5', '2020-12-05', '2020-12-05');
INSERT INTO `tbl_rating` VALUES ('3', 'Adven@gamteng.com', 'Adven Ganteng', '(0)857-771-008-055', 'Ultra Student at YUENES', ' Bagus banget yang bikin gamtenk soalnya tapi boong :v', '5', '2020-12-05', '2020-12-05');
INSERT INTO `tbl_rating` VALUES ('4', 'asads@ada.com', 'asdas', '-(0)857-771-008-055', 'Nganggur :(', 'ASDASDSADASDASA', '4', '2020-12-06', '2020-12-06');
INSERT INTO `tbl_rating` VALUES ('5', 'a@b.c', 'Hamba Tuhan', '(0)80-505-651-505', 'Gatau', ' Balabalaasdasdasdasde', null, '2020-12-08', '2020-12-08');
INSERT INTO `tbl_rating` VALUES ('6', 'asdas2@dsv.fsd', 'edward', '(0)80-505-651-505', 'Gatau', ' asdasdad', null, '2020-12-08', '2020-12-08');
INSERT INTO `tbl_rating` VALUES ('7', 'email@gmail.com', 'anonim ', '(0)8-765-433-221', '-', ' sangat memuaskan ', '5', '2020-12-20', '2020-12-20');
INSERT INTO `tbl_rating` VALUES ('8', '22nuranisah@gmail.com', 'Journal of Educational Science and Technology', '(0)87-654-321-989', 'bussines women', ' Pelayanan ramah , dan Barang dijamin ORI', '5', '2021-01-07', '2021-01-07');

-- ----------------------------
-- Table structure for `tbl_service`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_service`;
CREATE TABLE `tbl_service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `kerusakan` varchar(255) NOT NULL,
  `antrian_pc` varchar(255) NOT NULL,
  `no_hp` varchar(255) DEFAULT '-',
  `email` varchar(255) DEFAULT '-',
  `status` varchar(255) NOT NULL,
  `teknisi` varchar(255) DEFAULT NULL,
  `biaya` int(11) NOT NULL,
  `rincian_service` varchar(255) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_service
-- ----------------------------
INSERT INTO `tbl_service` VALUES ('1', 'Adven', 'Install Ulang', 'A-01', '-', '-', 'diproses', 'teknisi', '0', '', '2020-12-12', '2020-12-12');
INSERT INTO `tbl_service` VALUES ('2', 'Adevn', 'Install Ulang', 'A-02', '-', '-', 'diambil', '', '0', '', '2020-12-12', '2020-12-19');
INSERT INTO `tbl_service` VALUES ('3', 'Adam', 'Remote Rusak', 'A-03', '-', '-', 'diterima', null, '0', '', '2020-12-12', '2020-12-12');
INSERT INTO `tbl_service` VALUES ('6', 'Adam', 'Remote Rusak', 'A-05', '-', '-', 'diproses', 'teknisi', '0', '', '2020-12-12', null);
INSERT INTO `tbl_service` VALUES ('7', 'Adam', 'Remote Rusak', 'A-06', '-', '-', 'diambil', 'teknisi', '50000', 'Mengganti Kipas yang rusak ', '2020-12-12', '2020-12-18');
INSERT INTO `tbl_service` VALUES ('8', 'Mamang Kesbor', '   Upgred PC', 'A-08', '085948200', 'asdas2@dsv.f', 'diproses', 'umaya', '0', '', '2020-12-12', '2020-12-12');
INSERT INTO `tbl_service` VALUES ('9', 'udin', ' gak ada cuma test', 'A-9', '(0)8-592-200-050', '', 'diterima', null, '0', '', '2020-12-18', '2020-12-18');

-- ----------------------------
-- Table structure for `tbl_slider`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_slider`;
CREATE TABLE `tbl_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baris_satu` varchar(255) NOT NULL,
  `baris_dua` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_slider
-- ----------------------------
INSERT INTO `tbl_slider` VALUES ('1', 'Mantap Jiwa ', 'Diskon Gede loh', 'www.tokopedia.com', '1609934437_5ce8d35c9ba2a6ef6b4f.png');
INSERT INTO `tbl_slider` VALUES ('2', 'Dijamin bikin Ketagihan ', 'Gass Borong !!', 'www.shopee.com', '1609934523_b141a935227ceed90462.jpg');
INSERT INTO `tbl_slider` VALUES ('3', 'Buruan Order Sekarang juga ', 'Sebelum Kehabisan', 'www.bukalapak.com', '1609934593_a489fd2d162532e5c607.jpg');
INSERT INTO `tbl_slider` VALUES ('4', 'Diskon Up to 50%', 'KLIK SEKARANG JUGA !!', '', '1609934672_1152c3148bd4d5560bc9.jpg');

-- ----------------------------
-- Table structure for `tbl_subscribe`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_subscribe`;
CREATE TABLE `tbl_subscribe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emailsub` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_subscribe
-- ----------------------------
INSERT INTO `tbl_subscribe` VALUES ('1', 'adven@gmail.vom');
INSERT INTO `tbl_subscribe` VALUES ('5', 'advenadam@student.uns.ac.id');
INSERT INTO `tbl_subscribe` VALUES ('8', 'robert@mail.com');
INSERT INTO `tbl_subscribe` VALUES ('9', 'asda@asda.asca');

-- ----------------------------
-- Table structure for `tbl_toko`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_toko`;
CREATE TABLE `tbl_toko` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `platform` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tampil` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_toko
-- ----------------------------
INSERT INTO `tbl_toko` VALUES ('2', '', 'Space-Com', 'Tokopedia', 'www.tokopedia.com', '1609935048_f36cccb1b3fd8336f3fc.png', 'True', '2020-12-07', '2021-01-06');
INSERT INTO `tbl_toko` VALUES ('3', '', 'Space-Com', 'BukaLapak', 'www.Bukalapakk.com', '1609935064_f4c6133456b1b01a75a9.png', 'True', '2020-12-08', '2021-01-06');
INSERT INTO `tbl_toko` VALUES ('4', '', 'Space-Com', 'Shopee', 'www.shopee.com', '1609935080_ddb70423cbd0bdde4813.jpg', 'True', '2020-12-08', '2021-01-06');
INSERT INTO `tbl_toko` VALUES ('5', '', 'Space-Com', 'BLI BLI', 'www.blibli.co.ic', '1609935173_22bdf4f46d76521cc468.jpg', 'True', '2020-12-11', '2021-01-06');

-- ----------------------------
-- Table structure for `tbl_transaksi`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_transaksi`;
CREATE TABLE `tbl_transaksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_transaksi
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_trx`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_trx`;
CREATE TABLE `tbl_trx` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis` varchar(255) DEFAULT NULL,
  `pelanggan` varchar(255) DEFAULT '',
  `customer_service` varchar(255) DEFAULT '',
  `nilai` int(11) DEFAULT NULL,
  `rincian` text DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_trx
-- ----------------------------
INSERT INTO `tbl_trx` VALUES ('1', 'Transaksi Penjualan', 'stiv wonders', 'Customer', '4000000', '                                    Barang :Razer Blade Series X                                    Qty    :2                                    Harga  :Rp. 2,000,000                                ', '2020-12-17 00:51:14', '2020-12-17 00:51:14');
INSERT INTO `tbl_trx` VALUES ('2', 'Transaksi Penjualan', 'stiv wonders', 'Customer', '3000000', '                                    Barang :Razeer Green Pro X10                                    Qty    :2                                    Harga  :Rp. 1,500,000                                ', '2020-12-17 00:51:14', '2020-12-17 00:51:14');
INSERT INTO `tbl_trx` VALUES ('3', 'Transaksi Penjualan', 'Adven asu', 'Customer', '2000000', '                                    Barang :Razer Blade Series X                                    Qty    :1                                    Harga  :Rp. 2,000,000                                ', '2020-12-17 01:02:20', '2020-12-17 01:02:20');
INSERT INTO `tbl_trx` VALUES ('4', 'Transaksi Penjualan', 'Adven asu', 'Customer', '1500000', '                                    Barang :Razeer Green Pro X10                                    Qty    :1                                    Harga  :Rp. 1,500,000                                ', '2020-12-17 01:02:20', '2020-12-17 01:02:20');
INSERT INTO `tbl_trx` VALUES ('5', 'Service PC/Laptop', 'Adam', 'Customer', '50000', 'Kerusakan :Remote Rusak\r\nTeknisi   :teknisi\r\nService   :Mengganti Kipas yang rusak                                                     ', '2020-12-18 16:21:30', '2020-12-18 16:21:30');
INSERT INTO `tbl_trx` VALUES ('6', 'Service PC/Laptop', 'Adam', 'Customer', '50000', 'Kerusakan :Remote Rusak\r\nTeknisi   :teknisi\r\nService   :Mengganti Kipas yang rusak                                                     ', '2020-12-18 16:22:12', '2020-12-18 16:22:12');
INSERT INTO `tbl_trx` VALUES ('7', 'Service PC/Laptop', 'Adam', 'Customer', '50000', 'Kerusakan :Remote Rusak\r\nTeknisi   :teknisi\r\nService   :Mengganti Kipas yang rusak                                                     ', '2020-12-18 16:22:24', '2020-12-18 16:22:24');
INSERT INTO `tbl_trx` VALUES ('8', 'Service PC/Laptop', 'Adam', 'Customer', '50000', 'Kerusakan :Remote Rusak\r\nTeknisi   :teknisi\r\nService   :Mengganti Kipas yang rusak                                                     ', '2020-12-18 16:23:10', '2020-12-18 16:23:10');
INSERT INTO `tbl_trx` VALUES ('9', 'Service PC/Laptop', 'Adam', 'Customer', '50000', 'Kerusakan :Remote Rusak\r\nTeknisi   :teknisi\r\nService   :Mengganti Kipas yang rusak                                                     ', '2020-12-18 16:23:44', '2020-12-18 16:23:44');
INSERT INTO `tbl_trx` VALUES ('10', 'Service PC/Laptop', 'Adam', 'Customer', '50000', 'Kerusakan :Remote Rusak\r\nTeknisi   :teknisi\r\nService   :Mengganti Kipas yang rusak                                                     ', '2020-12-18 16:24:13', '2020-12-18 16:24:13');
INSERT INTO `tbl_trx` VALUES ('11', 'Service PC/Laptop', 'Adam', 'Customer', '50000', 'Kerusakan :Remote Rusak\r\nTeknisi   :teknisi\r\nService   :Mengganti Kipas yang rusak                                                     ', '2020-12-18 16:25:40', '2020-12-18 16:25:40');
INSERT INTO `tbl_trx` VALUES ('12', 'Service PC/Laptop', 'Adam', 'Customer', '50000', 'Kerusakan :Remote Rusak\r\nTeknisi   :teknisi\r\nService   :Mengganti Kipas yang rusak                                                     ', '2020-12-18 16:26:23', '2020-12-18 16:26:23');
INSERT INTO `tbl_trx` VALUES ('13', 'Service PC/Laptop', 'Adam', 'Customer', '50000', 'Kerusakan :Remote Rusak\r\nTeknisi   :teknisi\r\nService   :Mengganti Kipas yang rusak                                                     ', '2020-12-18 16:26:49', '2020-12-18 16:26:49');
INSERT INTO `tbl_trx` VALUES ('14', 'Service PC/Laptop', 'Adam', 'Customer', '50000', 'Kerusakan :Remote Rusak\r\nTeknisi   :teknisi\r\nService   :Mengganti Kipas yang rusak                                                     ', '2020-12-18 16:27:13', '2020-12-18 16:27:13');
INSERT INTO `tbl_trx` VALUES ('15', 'Service PC/Laptop', 'Adam', 'Customer', '50000', 'Kerusakan :Remote Rusak\r\nTeknisi   :teknisi\r\nService   :Mengganti Kipas yang rusak                                                     ', '2020-12-18 16:29:13', '2020-12-18 16:29:13');
INSERT INTO `tbl_trx` VALUES ('16', 'Service PC/Laptop', 'Adam', 'Customer', '50000', 'Kerusakan :Remote Rusak\r\nTeknisi   :teknisi\r\nService   :Mengganti Kipas yang rusak                                                     ', '2020-12-18 16:29:27', '2020-12-18 16:29:27');
INSERT INTO `tbl_trx` VALUES ('17', 'Service PC/Laptop', 'Adam', 'Customer', '50000', 'Kerusakan :Remote Rusak\r\nTeknisi   :teknisi\r\nService   :Mengganti Kipas yang rusak                                                     ', '2020-12-18 16:29:48', '2020-12-18 16:29:48');
INSERT INTO `tbl_trx` VALUES ('18', 'Service PC/Laptop', 'Adam', 'Customer', '50000', 'Kerusakan :Remote Rusak\r\nTeknisi   :teknisi\r\nService   :Mengganti Kipas yang rusak                                                     ', '2020-12-18 16:30:01', '2020-12-18 16:30:01');
INSERT INTO `tbl_trx` VALUES ('19', 'Service PC/Laptop', 'Adam', 'Customer', '50000', 'Kerusakan :Remote Rusak\r\nTeknisi   :teknisi\r\nService   :Mengganti Kipas yang rusak                                                     ', '2020-12-18 16:30:12', '2020-12-18 16:30:12');
INSERT INTO `tbl_trx` VALUES ('20', 'Service PC/Laptop', 'Adam', 'Customer', '50000', 'Kerusakan :Remote Rusak\r\nTeknisi   :teknisi\r\nService   :Mengganti Kipas yang rusak                                                     ', '2020-12-18 16:30:25', '2020-12-18 16:30:25');
INSERT INTO `tbl_trx` VALUES ('21', 'Service PC/Laptop', 'Adam', 'Customer', '50000', 'Kerusakan :Remote Rusak\r\nTeknisi   :teknisi\r\nService   :Mengganti Kipas yang rusak                                                     ', '2020-12-18 16:31:02', '2020-12-18 16:31:02');
INSERT INTO `tbl_trx` VALUES ('22', 'Service PC/Laptop', 'Adam', 'Customer', '50000', 'Kerusakan :Remote Rusak\r\nTeknisi   :teknisi\r\nService   :Mengganti Kipas yang rusak                                                     ', '2020-12-18 16:31:37', '2020-12-18 16:31:37');
INSERT INTO `tbl_trx` VALUES ('23', 'Service PC/Laptop', 'Adam', 'Customer', '50000', 'Kerusakan :Remote Rusak\r\nTeknisi   :teknisi\r\nService   :Mengganti Kipas yang rusak                                                     ', '2020-12-18 16:32:00', '2020-12-18 16:32:00');
INSERT INTO `tbl_trx` VALUES ('24', 'Transaksi Penjualan', 'itung', 'Customer', '5000000', 'Barang :GIGABYTE PHANTOM 2\r\nQty    :2\r\nHarga  :Rp. 2,500,000                                ', '2020-12-18 16:43:07', '2020-12-18 16:43:07');
INSERT INTO `tbl_trx` VALUES ('25', 'Transaksi Penjualan', 'itung', 'Customer', '5000000', 'Barang :TOMAHAWK MK110\r\nQty    :1\r\nHarga  :Rp. 5,000,000                                ', '2020-12-18 16:43:07', '2020-12-18 16:43:07');
INSERT INTO `tbl_trx` VALUES ('26', 'Transaksi Penjualan', 'itung', 'Customer', '5000000', 'Barang :GIGABYTE PHANTOM 2\r\nQty    :2\r\nHarga  :Rp. 2,500,000                                ', '2020-12-18 16:45:41', '2020-12-18 16:45:41');
INSERT INTO `tbl_trx` VALUES ('27', 'Transaksi Penjualan', 'itung', 'Customer', '5000000', 'Barang :TOMAHAWK MK110\r\nQty    :1\r\nHarga  :Rp. 5,000,000                                ', '2020-12-18 16:45:42', '2020-12-18 16:45:42');
INSERT INTO `tbl_trx` VALUES ('28', 'Transaksi Penjualan', 'itung', 'Customer', '5000000', 'Barang :GIGABYTE PHANTOM 2\r\nQty    :2\r\nHarga  :Rp. 2,500,000                                ', '2020-12-18 16:46:28', '2020-12-18 16:46:28');
INSERT INTO `tbl_trx` VALUES ('29', 'Transaksi Penjualan', 'itung', 'Customer', '5000000', 'Barang :TOMAHAWK MK110\r\nQty    :1\r\nHarga  :Rp. 5,000,000                                ', '2020-12-18 16:46:28', '2020-12-18 16:46:28');
INSERT INTO `tbl_trx` VALUES ('30', 'Transaksi Penjualan', 'itung', 'Customer', '5000000', 'Barang :GIGABYTE PHANTOM 2\r\nQty    :2\r\nHarga  :Rp. 2,500,000                                ', '2020-12-18 16:46:56', '2020-12-18 16:46:56');
INSERT INTO `tbl_trx` VALUES ('31', 'Transaksi Penjualan', 'itung', 'Customer', '5000000', 'Barang :TOMAHAWK MK110\r\nQty    :1\r\nHarga  :Rp. 5,000,000                                ', '2020-12-18 16:46:56', '2020-12-18 16:46:56');
INSERT INTO `tbl_trx` VALUES ('32', 'Transaksi Penjualan', 'itung', 'Customer', '5000000', 'Barang :GIGABYTE PHANTOM 2\r\nQty    :2\r\nHarga  :Rp. 2,500,000                                ', '2020-12-18 16:47:52', '2020-12-18 16:47:52');
INSERT INTO `tbl_trx` VALUES ('33', 'Transaksi Penjualan', 'itung', 'Customer', '5000000', 'Barang :TOMAHAWK MK110\r\nQty    :1\r\nHarga  :Rp. 5,000,000                                ', '2020-12-18 16:47:52', '2020-12-18 16:47:52');
INSERT INTO `tbl_trx` VALUES ('34', 'Transaksi Penjualan', 'itung', 'Customer', '5000000', 'Barang :GIGABYTE PHANTOM 2\r\nQty    :2\r\nHarga  :Rp. 2,500,000                                ', '2020-12-18 16:48:14', '2020-12-18 16:48:14');
INSERT INTO `tbl_trx` VALUES ('35', 'Transaksi Penjualan', 'itung', 'Customer', '5000000', 'Barang :TOMAHAWK MK110\r\nQty    :1\r\nHarga  :Rp. 5,000,000                                ', '2020-12-18 16:48:14', '2020-12-18 16:48:14');
INSERT INTO `tbl_trx` VALUES ('36', 'Transaksi Penjualan', 'itung', 'Customer', '5000000', 'Barang :GIGABYTE PHANTOM 2\r\nQty    :2\r\nHarga  :Rp. 2,500,000                                ', '2020-12-18 16:48:38', '2020-12-18 16:48:38');
INSERT INTO `tbl_trx` VALUES ('37', 'Transaksi Penjualan', 'itung', 'Customer', '5000000', 'Barang :TOMAHAWK MK110\r\nQty    :1\r\nHarga  :Rp. 5,000,000                                ', '2020-12-18 16:48:38', '2020-12-18 16:48:38');
INSERT INTO `tbl_trx` VALUES ('38', 'Transaksi Penjualan', 'itung', 'Customer', '5000000', 'Barang :GIGABYTE PHANTOM 2\r\nQty    :2\r\nHarga  :Rp. 2,500,000                                ', '2020-12-18 16:49:20', '2020-12-18 16:49:20');
INSERT INTO `tbl_trx` VALUES ('39', 'Transaksi Penjualan', 'itung', 'Customer', '5000000', 'Barang :TOMAHAWK MK110\r\nQty    :1\r\nHarga  :Rp. 5,000,000                                ', '2020-12-18 16:49:21', '2020-12-18 16:49:21');
INSERT INTO `tbl_trx` VALUES ('40', 'Transaksi Penjualan', 'itung', 'Customer', '5000000', 'Barang :GIGABYTE PHANTOM 2\r\nQty    :2\r\nHarga  :Rp. 2,500,000                                ', '2020-12-18 16:49:49', '2020-12-18 16:49:49');
INSERT INTO `tbl_trx` VALUES ('41', 'Transaksi Penjualan', 'itung', 'Customer', '5000000', 'Barang :TOMAHAWK MK110\r\nQty    :1\r\nHarga  :Rp. 5,000,000                                ', '2020-12-18 16:49:49', '2020-12-18 16:49:49');
INSERT INTO `tbl_trx` VALUES ('42', 'Transaksi Penjualan', 'itung', 'Customer', '5000000', 'Barang :GIGABYTE PHANTOM 2\r\nQty    :2\r\nHarga  :Rp. 2,500,000                                ', '2020-12-18 16:50:57', '2020-12-18 16:50:57');
INSERT INTO `tbl_trx` VALUES ('43', 'Transaksi Penjualan', 'itung', 'Customer', '5000000', 'Barang :TOMAHAWK MK110\r\nQty    :1\r\nHarga  :Rp. 5,000,000                                ', '2020-12-18 16:50:57', '2020-12-18 16:50:57');
INSERT INTO `tbl_trx` VALUES ('44', 'Transaksi Penjualan', 'itung', 'Customer', '5000000', 'Barang :GIGABYTE PHANTOM 2\r\nQty    :2\r\nHarga  :Rp. 2,500,000                                ', '2020-12-18 16:51:22', '2020-12-18 16:51:22');
INSERT INTO `tbl_trx` VALUES ('45', 'Transaksi Penjualan', 'itung', 'Customer', '5000000', 'Barang :TOMAHAWK MK110\r\nQty    :1\r\nHarga  :Rp. 5,000,000                                ', '2020-12-18 16:51:22', '2020-12-18 16:51:22');
INSERT INTO `tbl_trx` VALUES ('46', 'Transaksi Penjualan', 'rasjiman', 'Customer', '5000000', 'Barang :GIGABYTE PHANTOM 2\r\nQty    :2\r\nHarga  :Rp. 2,500,000                                ', '2020-12-18 16:55:12', '2020-12-18 16:55:12');
INSERT INTO `tbl_trx` VALUES ('47', 'Transaksi Penjualan', 'rasjiman', 'Customer', '5000000', 'Barang :TOMAHAWK MK110\r\nQty    :1\r\nHarga  :Rp. 5,000,000                                ', '2020-12-18 16:55:12', '2020-12-18 16:55:12');
INSERT INTO `tbl_trx` VALUES ('48', 'Service PC/Laptop', 'Adevn', 'Customer', '0', 'Kerusakan :Install Ulang\r\nTeknisi   :\r\nService   :                                                    ', '2020-12-19 17:55:27', '2020-12-19 17:55:27');
INSERT INTO `tbl_trx` VALUES ('49', 'Transaksi Penjualan', 'nama', 'Customer', '5200000', 'Barang :W10\r\nQty    :1\r\nHarga  :Rp. 5,200,000                                ', '2020-12-20 15:31:49', '2020-12-20 15:31:49');
INSERT INTO `tbl_trx` VALUES ('50', 'Transaksi Penjualan', 'nama', 'Customer', '2000000', 'Barang :Razer Blade Series X\r\nQty    :1\r\nHarga  :Rp. 2,000,000                                ', '2020-12-20 15:31:50', '2020-12-20 15:31:50');

-- ----------------------------
-- Table structure for `tbl_user`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `no_pegawai` varchar(225) NOT NULL,
  `level` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES ('10', 'customer', 'Customer', '$2y$10$t0tGF6EwpFLRnJAb.n9sl.xyVwtYd4/jwo.1yEK3QJK8vYqX5Kwvq', 'PG-5', 'Customer_service', 'default.jpg', null, null, null);
INSERT INTO `tbl_user` VALUES ('11', 'teknisi', 'teknisi', '$2y$10$Mzc/ydU302BAJMwK93jvmeRUa8yZDZUdoynq.uL1UIuyktAOXy4da', 'PG-6', 'Teknisi', 'default.jpg', null, null, null);
INSERT INTO `tbl_user` VALUES ('12', 'accountan', 'accountan', '$2y$10$Y/tpAjY3GWB4ORnysbxlM.wF79AZSCI4Wrv3N/59X.agm824ZXkVS', 'PG-7', 'Accountant', 'default.jpg', null, null, null);
INSERT INTO `tbl_user` VALUES ('13', 'warehouse', 'warehouse', '$2y$10$WB9K9l/HOffwk4HmuV7rwe2vnlM6.pMJz3HPRch.45/VjhUOoNbOS', 'PG-2', 'Warehouse', 'default.jpg', null, null, null);
INSERT INTO `tbl_user` VALUES ('14', 'adven', 'adven', '$2y$10$Gn7DyQFq9Y6WFDC/WUZS1eRWgNe9A9WzcrGhPpxnrYLMcXpvAEYoC', 'P0001', 'Admin', '1606803014_01b1edd0bac5ea1d0dae.jpg', null, null, null);
INSERT INTO `tbl_user` VALUES ('17', 'guest', 'Guest', '$2y$10$fRkpaIzGF411pxb6znSMGORt898/a6jlPFj0GK5MZadd80Rn08YQa', '', 'Guest', 'default.jpg', null, null, null);
INSERT INTO `tbl_user` VALUES ('19', 'cobadong', 'CobaDong', '$2y$10$0vP59avkTYXsvi3gjTQ4ZO78o3sDhdrrWWgCuHdhO6UbIbol9eKzK', 'PG-7', 'Admin', 'default.jpg', '-', '2020-12-10', '2020-12-10');
INSERT INTO `tbl_user` VALUES ('20', 'wawan-tek', 'wawan tek', '$2y$10$C77mkn9FbWkplFgHB2jPlObAt77urPH3YsvM5K6EC/N8cHm3PP9hi', 'PG-5', 'Teknisi', '1607783353_0e116ce134b2f3e697d7.jpg', '-', '2020-12-12', '2020-12-12');
INSERT INTO `tbl_user` VALUES ('21', 'ahmad-tek', 'ahmad tek', '$2y$10$NJpzR1sA7OOIV2OaYZSWwODIC/vyaLeCIr0r9/u9TFGhenZN9aWt2', 'PG-7', 'Teknisi', '1607783390_6f2595145fd89f02d48e.jpg', '-', '2020-12-12', '2020-12-12');
INSERT INTO `tbl_user` VALUES ('22', 'anisah', 'anisah', '$2y$10$KWLTn33P5CxXj70JmOkN.OwBhtzQqZs7kqYZ2K0/euru.aLEpcQam', 'PG-8', 'Accountant', '1610023187_45d14cdbdf83a98a2066.jpeg', '-', '2021-01-07', '2021-01-07');
INSERT INTO `tbl_user` VALUES ('23', 'dimas', 'Dimas', '$2y$10$jGqzJAlLtcygxrYVXHZGheypH956ejOjNy669Q0kh6SEP/wtm3k6.', '', 'Guest', '', 'A@B.C', '2021-01-10', '2021-01-10');
INSERT INTO `tbl_user` VALUES ('24', 'khasbi', 'khasbi', '$2y$10$NE2EGvnG/AUZS0kHdNJJR.NyfSYMe2PxpGAwMPssTQZ/fJzmafdRK', 'PG-9', 'Warehouse', '1610297038_153eee06bf830ba838da.png', '-', '2021-01-10', '2021-01-10');

-- ----------------------------
-- Table structure for `tbl_vga`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_vga`;
CREATE TABLE `tbl_vga` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `merk` varchar(225) NOT NULL DEFAULT '',
  `nama` varchar(225) NOT NULL DEFAULT '',
  `slug` varchar(225) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` varchar(225) NOT NULL DEFAULT '',
  `base_clock` varchar(225) NOT NULL DEFAULT '',
  `boost_clock` varchar(225) NOT NULL DEFAULT '',
  `ukuran_memori` varchar(225) NOT NULL,
  `tipe_memori` varchar(225) NOT NULL DEFAULT '',
  `lebar_memori` varchar(225) NOT NULL DEFAULT '',
  `konektor_daya` varchar(225) NOT NULL DEFAULT '',
  `gambar` varchar(225) NOT NULL DEFAULT '',
  `rincian` text NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `diskon` int(11) DEFAULT 0,
  `harga_new` int(11) DEFAULT 0,
  `berlaku` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_vga
-- ----------------------------
INSERT INTO `tbl_vga` VALUES ('4', 'MSI', 'MSI NVIDIA GeForce GTX 1050 GTX1050 GAMING X 2G', 'msi-nvidia-geforce-gtx-1050-gtx1050-gaming-x-2g', '2699000', '10', '1518', '1400', '2', 'GDDR5', '128', '8', '1609651303_0c9df5050cce07d3ed92.jpg', '  •	NVIDIA GeForce GT 1050\r\n•	Memory provided: 2GB GDDR5\r\n•	Memory bus: 128 bit\r\n•	DisplayPort / HDMI / DL-DVI-D\r\n•	PCI Express x16 3.0\r\n', '2021-01-03', '2021-01-03', '0', '0', null);
INSERT INTO `tbl_vga` VALUES ('5', 'MSI', 'MSI NVidia GeForce N770 TF 2GD5/OC GAMING', 'msi-nvidia-geforce-n770-tf-2gd5oc-gaming', '5500000', '10', '1518', '1400', '2', 'GDDR5', '256', '8', '1609651459_db22d01c030aa40ac5ea.jpg', ' •	NVidia GeForce GTX 770 Gaming\r\n•	2GB DDR5\r\n•	256-bits\r\n•	Dual-link DVI-I x 1\r\n•	Dual-link DVI-D x 1\r\n•	HDMI\r\n•	PCI e x16 3.0\r\n', '2021-01-03', '2021-01-03', '0', '0', null);
INSERT INTO `tbl_vga` VALUES ('6', 'MSI', 'MSI Video Card GT 710 2GB DDR3 ', 'msi-video-card-gt-710-2gb-ddr3', '900000', '10', '954', '954', '2', 'DDR3', '64', '8', '1610291484_c0fb13d123952ca87162.jpg', ' •	Chipset : NVIDIA GeForce GT 710\r\n•	Core Clock : 954 MHz\r\n•	Video Memory : 2GB DDR3\r\n', '2021-01-10', '2021-01-10', '0', '0', null);
INSERT INTO `tbl_vga` VALUES ('7', 'MSI', 'MSI NVIDIA GeForce GTX 1060 GTX1060 ARMOR 6G OCV1', 'msi-nvidia-geforce-gtx-1060-gtx1060-armor-6g-ocv1', '3799000', '10', '1518', '1754', '6', 'GDDR5', '192', '8', '1610291615_88e1dac01b0b7a6e7edf.jpg', ' ', '2021-01-10', '2021-01-10', '0', '0', null);
INSERT INTO `tbl_vga` VALUES ('8', 'MSI', 'MSI NVIDIA GeForce RTX 2070 Armor 8G', 'msi-nvidia-geforce-rtx-2070-armor-8g', '7979000', '10', '1620', '1620', '8', 'GDDR6', '256', '8', '1610291721_8f968be279d4fb2f888f.jpg', ' ', '2021-01-10', '2021-01-10', '0', '0', null);
INSERT INTO `tbl_vga` VALUES ('9', 'GIGABYTE', 'Gigabyte GeForce GTX 1080 8GB DDR5 AORUS', 'gigabyte-geforce-gtx-1080-8gb-ddr5-aorus', '11049000', '10', '1733', '1873', '8', 'GDDR5X', '256', '8', '1610291880_04fc512872924d0a850d.jpg', ' Features\r\nPowered by GeForce® GTX 1080\r\nEquipped with 11Gbps high speed memory \r\nWINDFORCE Stack 3x 100mm fan cooling system\r\nAORUS VR Link provides the best VR experience \r\nAdvanced Copper Back Plate Cooling\r\nRGB fusion – 16.7M customizable color lighting\r\nStylish Metal Back Plate \r\nTitan X-grade Chokes and Capacitors for Extreme Durability \r\nIntuitive AORUS Graphics Engine\r\nCore Clock\r\nBoost:1873 MHz/ Base:1733 MHz in OC Mode\r\nBoost:1847 MHz/ Base:1708 MHz in Gaming Mode', '2021-01-10', '2021-01-10', '0', '0', null);
INSERT INTO `tbl_vga` VALUES ('10', 'GIGABYTE', 'Gigabyte VGA GeForce RTX 2070 SUPER WINDFORCE OC', 'gigabyte-vga-geforce-rtx-2070-super-windforce-oc', '9100000', '10', '1785', '1785', '8', 'GDDR6', '256', '8', '1610292049_062984609dd85967322d.jpg', ' Features\r\nPowered by GeForce® RTX 2070 SUPER™\r\nIntegrated with 8GB GDDR6 256-bit memory interface\r\nWINDFORCE 3X Cooling System with alternate spinning fans\r\nExtreme Durability and Overclocking\r\nProtection Metal Back Plate\r\n\r\nCore Clock\r\n1785 MHz (Reference Card: 1770 MHz)', '2021-01-10', '2021-01-10', '0', '0', null);
INSERT INTO `tbl_vga` VALUES ('11', 'GIGABYTE', 'GIGABYTE GeForce RTX 3060 TI OC 8G', 'gigabyte-geforce-rtx-3060-ti-oc-8g', '9800000', '10', '1740', '1740', '8', 'GDDR6', '256', '12', '1610292480_843946da791cb4f95828.jpg', ' Graphics Processing: GeForce RTX™ 3060 Ti\r\nCore Clock: 1‎740 MHz (Reference Card: 1665 MHz)\r\nCUDA® Cores: 4‎864\r\nMemory Clock: 1‎4000 MHz\r\nMemory Size: 8‎ GB\r\nMemory Type: GDDR6\r\nMemory Bus: 2‎56 bit\r\nMemory Bandwidth (GB/sec): 4‎48 GB/s\r\nCard Bus: PCI-E 4.0 x 16\r\nDigital max resolution: 7‎680x4320@60Hz\r\nMulti-view: 4‎\r\nCard size: L=282 W=117 H=41 mm\r\nPCB Form: ATX\r\nDirectX: 1‎2 Ultimate\r\nOpenGL: 4‎.6\r\nRecommended PSU: 6‎00W\r\nPower Connectors: 8‎ pin*1\r\nOutput: DisplayPort 1.4a *2 | HDMI 2.1 *2\r\nSLI Support: N/A\r\nAccessories: Quick guide', '2021-01-10', '2021-01-10', '0', '0', null);
INSERT INTO `tbl_vga` VALUES ('12', 'Asus', 'ASUS GeForce RTX 3080 OC 10GB GDDR6X TUF Gaming', 'asus-geforce-rtx-3080-oc-10gb-gddr6x-tuf-gaming', '21000000', '10', '1840', '1840', '10', 'GDDR6X', '256', '12', '1610292800_a7a767c23b572cbadbd4.jpg', ' ', '2021-01-10', '2021-01-10', '0', '0', null);

-- ----------------------------
-- Table structure for `tbl_wishlist`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_wishlist`;
CREATE TABLE `tbl_wishlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `user` varchar(255) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT '',
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_wishlist
-- ----------------------------
INSERT INTO `tbl_wishlist` VALUES ('28', 'SEGERBETW10', 'asusegerbetw10', 'Guest', null, null, '2020-12-11', '2020-12-11');
INSERT INTO `tbl_wishlist` VALUES ('29', 'ARMAGEDON RXY29019', 'asuarmagedon-rxy29019', 'asu', 'casing', 'default.jpg', '2020-12-11', '2020-12-11');
INSERT INTO `tbl_wishlist` VALUES ('30', 'CAssing Joss', 'asucassing-joss', 'asu', 'casing', '1605508933_ebc29a24d603eda62228.jpg', '2020-12-15', '2020-12-15');
INSERT INTO `tbl_wishlist` VALUES ('31', 'Razer Blade Series X', 'asurazer-blade-series-x', 'asu', 'casing', '1607615894_afb8de72078e26c500a7.jpg', '2020-12-15', '2020-12-15');
INSERT INTO `tbl_wishlist` VALUES ('32', 'GIGABYTE PHANTOM 2', 'asugigabyte-phantom-2', 'asu', 'casing', '1605860635_b8f7dd92dd643bf9da1d.jpg', '2020-12-20', '2020-12-20');
INSERT INTO `tbl_wishlist` VALUES ('33', 'MSI Advence RX 10', 'asumsi-advence-rx-10', 'asu', 'casing', 'default.jpg', '2020-12-20', '2020-12-20');
INSERT INTO `tbl_wishlist` VALUES ('34', 'Razer Blade Series X', 'asuRazer1Blade1Series1X', 'asu', 'casing', '1607615894_afb8de72078e26c500a7.jpg', '2020-12-20', '2020-12-20');
INSERT INTO `tbl_wishlist` VALUES ('35', 'Razeer Green Pro X10', 'asurazeer-green-pro-x10', 'asu', 'casing', '1608428493_3269fc2bd033c07704cc.jpg', '2020-12-20', '2020-12-20');
INSERT INTO `tbl_wishlist` VALUES ('36', 'Maximus IX', 'asumaximus-ix', 'asu', 'motherboard', 'default.jpg', '2021-01-02', '2021-01-02');
INSERT INTO `tbl_wishlist` VALUES ('37', 'FANTECH Pulse CG-71 RGB Middle Tower Case ', 'dimasfantech-pulse-cg-71-rgb-middle-tower-case', 'Dimas', 'casing', '1609645668_3a232fa95a1f795285e9.jpg', '2021-01-10', '2021-01-10');

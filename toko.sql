/*
Navicat MySQL Data Transfer

Source Server         : koneksi
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : toko

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-12-20 16:22:03
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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_casing
-- ----------------------------
INSERT INTO `tbl_casing` VALUES ('2', 'Nvidia', 'ARMAGEDON RXY2901', 'armagedon-rxy2901', '1500000', '75', 'Micro-ATX,E-ATX', '1602990613_40e77c754044c4213080.jpg', '    rincian  ', '2020-10-17', '2020-12-10', '5', '1900000', '2020-12-26');
INSERT INTO `tbl_casing` VALUES ('3', 'seger', 'adven', 'adven', '150000', '117', 'Standard-ATX,E-ATX', '1603525314_d4757f7b986886a05c2d.png', '  asfasfsa', '2020-10-24', '2020-12-13', '10', '135000', '2020-12-14');
INSERT INTO `tbl_casing` VALUES ('5', 'MSI', 'CAssing Joss', 'cassing-joss', '1500000', '10', 'Mini-ITX,Micro-ATX,Standard-ATX,E-ATX', '1605508933_ebc29a24d603eda62228.jpg', ' asdasd', '2020-11-16', '2020-12-13', '50', '750000', '2020-12-15');
INSERT INTO `tbl_casing` VALUES ('6', 'ARMAGEDON', 'ARMAGEDON RXY29019', 'armagedon-rxy29019', '1600000', '25', 'MINI ITX, MICRO ATX, ATX, EATX', 'default.jpg', ' asfasf', '2020-11-16', '2020-12-16', null, null, null);
INSERT INTO `tbl_casing` VALUES ('7', 'SEGERBET', 'SEGERBETW10', 'segerbetw10', '1500000', '10', 'Mini-ITX,Micro-ATX,Standard-ATX', 'default.jpg', ' ', '2020-11-16', '2020-12-16', null, null, null);
INSERT INTO `tbl_casing` VALUES ('8', 'COba', 'nama cassing', 'nama-cassing', '800000', '12', 'Mini-ITX,Micro-ATX,ATX,E-ATX', '1605773531_907bc3f72b5de6a79099.jpg', ' cek', '2020-11-19', '2020-11-19', null, null, null);
INSERT INTO `tbl_casing` VALUES ('9', 'GIGABYTE', 'GIGABYTE PHANTOM 2', 'gigabyte-phantom-2', '2500000', '10', 'Mini-ITX,Standard-ATX,E-ATX', '1605860635_b8f7dd92dd643bf9da1d.jpg', '  ', '2020-11-20', '2020-12-18', null, null, null);
INSERT INTO `tbl_casing` VALUES ('10', 'TRIDENT', 'MSI BARACUSA RX 1as', 'msi-baracusa-rx-1as', '0', '20', 'Micro-ATX', 'default.jpg', 'sadas', '2020-11-25', '2020-11-25', null, null, null);
INSERT INTO `tbl_casing` VALUES ('11', 'MSI', 'MSI Advence RX 10', 'msi-advence-rx-10', '2000000', '9', 'Standard-ATX', 'default.jpg', '   gud', '2020-12-08', '2020-12-16', null, null, null);
INSERT INTO `tbl_casing` VALUES ('12', 'Razer', 'Razeer Green Pro X10', 'razeer-green-pro-x10', '1500000', '21', 'Micro-ATX,Standard-ATX,E-ATX', '1608428493_3269fc2bd033c07704cc.jpg', '    Guds', '2020-12-09', '2020-12-20', null, null, null);
INSERT INTO `tbl_casing` VALUES ('13', 'Razer', 'Razer Blade Series X', 'razer-blade-series-x', '2000000', '20', 'Standard-ATX', '1607615894_afb8de72078e26c500a7.jpg', ' Gud sih', '2020-12-10', '2020-12-20', '0', '0', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_memori
-- ----------------------------
INSERT INTO `tbl_memori` VALUES ('2', 'TRIDENT', 'TRIDENT Z KILL 2X16', 'trident-z-kill-2x16', '2000000', '15', '16 GB', 'DDR4', '1602493107_398f47b4849d67f99ab0.jpg', 'YUASANA OHDUSHHDS UUDUFUFDAU \r\n ', '2020-10-12', '2020-10-12', null, null, null);
INSERT INTO `tbl_memori` VALUES ('3', 'SAMSUNG', 'SAMSUNG EVDO M.2 500GB', 'samsung-evdo-m2-500gb', '2000000', '10', '500GB', 'SSD SATA', '1608428335_6219619d6d8d1919e71d.png', '    asdubiausxziubdh', '2020-10-12', '2020-12-20', '10', '1800000', '2020-12-26');
INSERT INTO `tbl_memori` VALUES ('4', 'TRIDENT', 'TRIDENT Z KILL SSD 500', 'trident-z-kill-ssd-500', '1500000', '10', '500GB', 'SSD TLC', 'default.jpg', ' gud sihheh', '2020-10-12', '2020-10-12', null, null, null);
INSERT INTO `tbl_memori` VALUES ('5', 'TRIDENT', 'TRIDENT Z KILL SSD 1000', 'trident-z-kill-ssd-1000', '2000000', '10', '1TB', 'SSD TLC', 'default.jpg', 'vz', '2020-10-12', '2020-10-12', null, null, null);
INSERT INTO `tbl_memori` VALUES ('18', 'a', 'aa', 'aa', '0', '10', '16 GB', 'HARDISK', 'default.jpg', '   ', '2020-11-20', '2020-12-03', null, null, null);
INSERT INTO `tbl_memori` VALUES ('19', 'Razer', 'Razer Blade Series X123', 'razer-blade-series-x123', '1500000', '10', '500', 'SSD M.2 NVMe', '1608038652_6982eebee5f345c6ab6c.jpg', ' BAMABAM', '2020-12-15', '2020-12-15', '0', '0', null);
INSERT INTO `tbl_memori` VALUES ('20', 'Razer', 'Adven', 'adven', '500000', '10', '250', 'SSD SATA', '1608038854_2f1d0150e202d40428ae.jpg', ' gud', '2020-12-15', '2020-12-15', '0', '0', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_merk
-- ----------------------------
INSERT INTO `tbl_merk` VALUES ('1', 'Razer', 'razer.co.id', '1607442249_ab34245bbdc08be01ec1.jpg', '2020-12-08', '2020-12-08');
INSERT INTO `tbl_merk` VALUES ('2', 'MSI', 'MSI.co.id', '1607442266_007a1ac8ed4ad4e99ee8.jpg', '2020-12-08', '2020-12-08');
INSERT INTO `tbl_merk` VALUES ('3', 'Nvidia', 'Nvidia.co.id', '1607442288_eebae35bca049e0ba2e5.jpg', '2020-12-08', '2020-12-08');

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_motherboard
-- ----------------------------
INSERT INTO `tbl_motherboard` VALUES ('1', 'ASUS', 'Maximus IX', 'maximus-ix', '4500000', '45', 'LGA1151V2', 'E-ATX', 'DDR4', '64GB', '3', '4,7GHz', 'INTEL Z490', '2', '6', '2', '4700MHz', 'default.jpg', '  BLA BLA', null, '2020-12-20', '7', '4185000', '2020-12-19');
INSERT INTO `tbl_motherboard` VALUES ('6', 'GIGABYTE', 'GIGABYTE AURUS B450 RGBA', 'gigabyte-aurus-b450-rgba', '2000000', '15', 'LGA1151V2', 'Standard-ATX,E-ATX', 'DDR4', '64', '3', '24', 'B450', '4', '2', '1', '1999', '1608430449_662dcc20e7b2973afa4d.png', '  asfdg', '2020-11-20', '2020-12-20', '0', '0', null);
INSERT INTO `tbl_motherboard` VALUES ('7', 'ASUS', 'ASROCK GT-10', 'asrock-gt-10', '5000000', '5', 'LGA1151 ', 'Micro-ATX,Standard-ATX', 'DDR4', '16', '2', '12', 'B450', '2', '4', '0', '3012 MHz', 'default.jpg', '    Produk Bagus', '2020-11-25', '2020-11-25', '0', '0', null);
INSERT INTO `tbl_motherboard` VALUES ('8', 'MSI', 'TOMAHAWK MK110', 'tomahawk-mk110', '5000000', '19', 'LGA1151V2', 'Micro-ATX', 'DDR4', '32', '2', '8+8 ', 'B450', '4', '4', '0', '1999', 'default.jpg', '  COKES', '2020-11-25', '2020-12-18', '0', '0', null);
INSERT INTO `tbl_motherboard` VALUES ('9', 'MSI', 'W10', 'w10', '5200000', '14', 'AM4', 'Micro-ATX,Standard-ATX,E-ATX', 'DDR 4', '64', '2', '8+8', 'AM4 AMD', '4', '4', '2', '3555', '1608430361_72edf58b0a724749ba2c.png', ' ', '2020-12-20', '2020-12-20', '0', '0', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_pegawai
-- ----------------------------
INSERT INTO `tbl_pegawai` VALUES ('1', 'P0001', 'Adven Adam', 'adven-adam', 'Jatisari bla bla', '0888591005', 'a@b.c', '15000000', 'warehouse', 'default.jpg', null, null);
INSERT INTO `tbl_pegawai` VALUES ('2', 'PG-2', 'adan', 'pg-2', 'jatisari', '088981600236', '', '1500000', 'WareHouse', '1604148240_6e65c12a9012c4329890.jpg', '2020-10-31', '2020-10-31');
INSERT INTO `tbl_pegawai` VALUES ('4', 'PG-3', 'Adven', 'pg-3', 'Jatisari', '(+62)89-518-373-714', '', 'Rp.5.000.000', 'WareHouse', 'default.jpg', '2020-11-27', '2020-11-27');
INSERT INTO `tbl_pegawai` VALUES ('5', 'PG-5', 'Adam', 'pg-5', 'Sobokerto', '(+62)8-591-200-050', '', 'Rp.4.000.000', 'ekselon 1', 'default.jpg', '2020-11-27', '2020-11-27');
INSERT INTO `tbl_pegawai` VALUES ('6', 'PG-6', 'Khasbialoh', 'pg-6', 'ngemplak', '(+62)8-591-475-515', '', 'Rp.5.000.000', 'ada', 'default.jpg', '2020-11-27', '2020-11-27');
INSERT INTO `tbl_pegawai` VALUES ('7', 'PG-7', 'adan', 'pg-7', 'jatisari 2/1', '(+62)859-160-081', '', 'Rp.4.500.000', 'ada', 'default.jpg', '2020-11-27', '2020-11-27');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_pendingin
-- ----------------------------
INSERT INTO `tbl_pendingin` VALUES ('1', 'coolerMaster', 'FM0x', 'cmFmox', '1500000', '15', 'water cooler', 'default.jpg', 'BLA Bla', null, '2020-12-10', '2', '1470000', '2020-12-11');
INSERT INTO `tbl_pendingin` VALUES ('3', 'COOLER MASTER', 'COOLER MASTER WTER PUMP 150', 'cooler-master-wter-pump-150', '1100000', '10', 'WATER COOLING', '1602521481_5cef0fcef0bb2ce722d5.jpg', ' rinciand', '2020-10-12', '2020-10-12', '0', '0', null);
INSERT INTO `tbl_pendingin` VALUES ('4', 'a', 'a2', 'a2', '0', 'a', 'a', 'default.jpg', 'a ', '2020-10-18', '2020-10-18', '0', '0', null);
INSERT INTO `tbl_pendingin` VALUES ('5', 'a21', 'a21', 'a21', '0', 'a21', 'a21', '1603006747_95b7af765a4fb2904de6.jpg', ' a 2', '2020-10-18', '2020-10-18', '0', '0', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_procesor
-- ----------------------------
INSERT INTO `tbl_procesor` VALUES ('1', 'INTEL', 'INTEL RADEON R7', 'intel-radeon-r7', '1500000', '10', '4', '8', 'AM4', '2,9GHz', 'None', '8mb', 'safa', '1603009235_e94b83109c0a85266fe3.jpg', '2020-10-18', '2020-10-18', '0', '0', null);
INSERT INTO `tbl_procesor` VALUES ('2', 'AMD', 'a', 'a', '0', 'a', '0', '0', 'a', 'a', 'a', 'a', 'a ', 'default.jpg', '2020-10-18', '2020-10-18', '0', '0', null);
INSERT INTO `tbl_procesor` VALUES ('3', 'AMD', 'b', 'b', '0', 'b', '0', '0', 'b', 'b', 'b', 'b', ' b a ', 'default.jpg', '2020-10-18', '2020-10-18', '0', '0', null);
INSERT INTO `tbl_procesor` VALUES ('5', 'INTEL', 'INTEL CORE I7 9600K', 'intel-core-i7-9600k', '5000000', '10', '4', '8', 'LGA1151V2', '2,9GHz', 'None', '8', ' ', 'default.jpg', '2020-11-20', '2020-11-20', '0', '0', null);
INSERT INTO `tbl_procesor` VALUES ('6', 'INTEL', 'INTEL CORE i10 10100K', 'intel-core-i10-10100k', '5000000', '10', '64', '128', 'LGA1151V2', '4.5Ghz', 'None', '800', 'Bagus mAis ', 'default.jpg', '2020-12-13', '2020-12-13', '0', '0', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_psu
-- ----------------------------
INSERT INTO `tbl_psu` VALUES ('2', 'soft sonic', 'softsonicAF550', 'softsonicaf550', '1600000', '15', '80+platinum', 'Non Modular', '550Watt', '1603009933_49757d6b78dabadee091.jpg', '   blablas', '2020-11-20', '2020-11-20', '0', '0', null);
INSERT INTO `tbl_psu` VALUES ('3', 'be quiet', 'be quiet! SYSTEM POWER 9 600W CM', 'be-quiet-system-power-9-600w-cm', '1080000', '10', '80 + bronze', 'Modular', '600W', '1602559890_afd4475d9b34883b2842.jpg', ' Rincian', '2020-10-12', '2020-10-12', '0', '0', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_ram
-- ----------------------------
INSERT INTO `tbl_ram` VALUES ('1', 'samsung', 'DHo3', 'samsang3DHO', '500000', '16', 'DDR4', '4GB', '1333MHz', 'default.jpg', 'Bla', null, null, '0', '0', null);
INSERT INTO `tbl_ram` VALUES ('3', 'KINGSTONES', 'Kingston F50', 'kingston-f50', '1600000', '11', 'DDR4', '8GB', '3120MHz', '1603010799_4bbd47fbce2a49e8f77d.jpg', ' afasfasads', '2020-10-18', '2020-10-18', '0', '0', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

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
INSERT INTO `tbl_slider` VALUES ('1', 'Mantap Jiwa ', 'Diskon Gede loh', 'www.tokopedia.com', '1608433034_dc1fbfcd013c454af11a.jpg');
INSERT INTO `tbl_slider` VALUES ('2', 'Nyobain Slider Guys', 'Gimana ???', 'www.wkwk.com', '1608433166_1a79c556ce82598b0a1c.jpg');
INSERT INTO `tbl_slider` VALUES ('3', 'Slider ke 3', 'harusnya ga tampil', 'www.wkwk.com', '1608433110_476fb9b948eea164427d.jpg');
INSERT INTO `tbl_slider` VALUES ('4', 'COba', 'SLIDER', '', '1608432980_3e075c1a0ae633f93474.jpg');

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
INSERT INTO `tbl_toko` VALUES ('2', '', 'Space-Com', 'Tokopedia', 'www.tokopedia.com', '1607348859_d5ee84b8e282f64615b9.jpg', 'True', '2020-12-07', '2020-12-07');
INSERT INTO `tbl_toko` VALUES ('3', '', 'Space-Com', 'BukaLapak', 'www.Bukalapakk.com', '1607415745_fddfe31ef37b75688f24.jpg', 'True', '2020-12-08', '2020-12-08');
INSERT INTO `tbl_toko` VALUES ('4', '', 'Space-Com', 'Shopee', 'www.shopee.com', '1607415829_e1973b0c0e21199ea341.jpg', 'True', '2020-12-08', '2020-12-08');
INSERT INTO `tbl_toko` VALUES ('5', '', 'Space-Com', 'BLI BLI', 'www.blibli.co.ic', '1608432109_3e818c5d8f0472012d92.png', 'True', '2020-12-11', '2020-12-20');

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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES ('10', 'customer', 'Customer', '$2y$10$t0tGF6EwpFLRnJAb.n9sl.xyVwtYd4/jwo.1yEK3QJK8vYqX5Kwvq', 'PG-5', 'Customer_service', 'default.jpg', null, null, null);
INSERT INTO `tbl_user` VALUES ('11', 'teknisi', 'teknisi', '$2y$10$Mzc/ydU302BAJMwK93jvmeRUa8yZDZUdoynq.uL1UIuyktAOXy4da', 'PG-6', 'Teknisi', 'default.jpg', null, null, null);
INSERT INTO `tbl_user` VALUES ('12', 'accountan', 'accountan', '$2y$10$Y/tpAjY3GWB4ORnysbxlM.wF79AZSCI4Wrv3N/59X.agm824ZXkVS', 'PG-7', 'Accountant', 'default.jpg', null, null, null);
INSERT INTO `tbl_user` VALUES ('13', 'warehouse', 'warehouse', '$2y$10$WB9K9l/HOffwk4HmuV7rwe2vnlM6.pMJz3HPRch.45/VjhUOoNbOS', 'PG-2', 'Warehouse', 'default.jpg', null, null, null);
INSERT INTO `tbl_user` VALUES ('14', 'adven', 'adven', '$2y$10$Gn7DyQFq9Y6WFDC/WUZS1eRWgNe9A9WzcrGhPpxnrYLMcXpvAEYoC', 'P0001', 'Admin', '1606803014_01b1edd0bac5ea1d0dae.jpg', null, null, null);
INSERT INTO `tbl_user` VALUES ('15', 'coba', 'Coba', '$2y$10$FmpRrhb6DWaRd/54qnEmNOWHdwJVeiSItGDhpxx6l11bfKq31biTy', '', 'Guest', 'default.jpg', null, null, null);
INSERT INTO `tbl_user` VALUES ('16', 'atongs', 'atongs', '$2y$10$oQnPTTYD3swLaSFBfP/Xx.HJeWtgoSeFVvIYteWdHdopxN69YHVr.', '', 'Guest', '', null, null, null);
INSERT INTO `tbl_user` VALUES ('17', 'guest', 'Guest', '$2y$10$fRkpaIzGF411pxb6znSMGORt898/a6jlPFj0GK5MZadd80Rn08YQa', '', 'Guest', '', null, null, null);
INSERT INTO `tbl_user` VALUES ('18', 'asu', 'asu', '$2y$10$eR2fF7r5C1G1UegcFhZ9Ieb8XtHQHoFyV9TE5WEpP0NWfLNlY5Xma', '', 'Guest', '', null, null, null);
INSERT INTO `tbl_user` VALUES ('19', 'cobadong', 'CobaDong', '$2y$10$0vP59avkTYXsvi3gjTQ4ZO78o3sDhdrrWWgCuHdhO6UbIbol9eKzK', 'PG-7', 'Admin', 'default.jpg', '-', '2020-12-10', '2020-12-10');
INSERT INTO `tbl_user` VALUES ('20', 'wawan-tek', 'wawan tek', '$2y$10$C77mkn9FbWkplFgHB2jPlObAt77urPH3YsvM5K6EC/N8cHm3PP9hi', 'PG-5', 'Teknisi', '1607783353_0e116ce134b2f3e697d7.jpg', '-', '2020-12-12', '2020-12-12');
INSERT INTO `tbl_user` VALUES ('21', 'ahmad-tek', 'ahmad tek', '$2y$10$NJpzR1sA7OOIV2OaYZSWwODIC/vyaLeCIr0r9/u9TFGhenZN9aWt2', 'PG-7', 'Teknisi', '1607783390_6f2595145fd89f02d48e.jpg', '-', '2020-12-12', '2020-12-12');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_vga
-- ----------------------------
INSERT INTO `tbl_vga` VALUES ('1', 'Zotac', 'RTX3080TI', 'rtx3080ti', '25000000', '25', '   3100', '   190000', '   10', '   DDR6', '   3096', '   8+8', 'default.jpg', '   blabbla', null, '2020-11-20', '0', '0', null);
INSERT INTO `tbl_vga` VALUES ('3', 'MSI GUN', 'MSI GTX 1650 TI', 'msi-gtx-1650-ti', '2400000', '10', '  3101', '  120001', '  10', '  GDDR5', '  256', '  6+6 ', '1603011419_fcc9d5409a12ba8dac73.jpg', '   coba 2', '2020-10-18', '2020-11-20', '0', '0', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4;

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

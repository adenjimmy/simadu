-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2017 at 02:26 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `persediaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `dien001`
--

CREATE TABLE `dien001` (
  `dien001_01` smallint(2) NOT NULL COMMENT 'Tahun anggaran',
  `dien001_02` varchar(100) NOT NULL COMMENT 'Nanama Pemda Terenkrip',
  `dien001_03` varchar(50) DEFAULT NULL COMMENT 'Ibukota ',
  `dien001_04` varchar(255) DEFAULT NULL COMMENT 'Alamat',
  `dien001_05` tinyint(1) NOT NULL COMMENT 'Kode Provinsi',
  `dien001_06` tinyint(1) NOT NULL COMMENT 'Kode Kab/Kota',
  `dien001_07` varchar(16) DEFAULT NULL COMMENT 'Logo',
  `dien001_08` varchar(200) DEFAULT NULL COMMENT 'Nama Unit Terenkrip',
  `dien001_09` varchar(100) DEFAULT NULL COMMENT 'Nama Pemda Tidak Terenkrip',
  `dien001_10` varchar(2) NOT NULL COMMENT 'Kode Aktifasi',
  `dien001_11` varchar(4) NOT NULL COMMENT 'Kode Pemda'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dien002`
--

CREATE TABLE `dien002` (
  `dien002_01` tinyint(1) NOT NULL COMMENT 'Kode urusan',
  `dien002_02` varchar(50) NOT NULL COMMENT 'Nama urusan'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dien003`
--

CREATE TABLE `dien003` (
  `dien002_01` tinyint(1) NOT NULL COMMENT 'Kode urusan',
  `dien003_01` tinyint(1) NOT NULL COMMENT 'Kode bidang',
  `dien003_02` varchar(255) NOT NULL COMMENT 'Nama bidang',
  `dien003_03` tinyint(1) DEFAULT NULL COMMENT 'Kode fungsi'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dien004`
--

CREATE TABLE `dien004` (
  `dien002_01` tinyint(1) NOT NULL COMMENT 'Kode urusan',
  `dien003_01` tinyint(1) NOT NULL COMMENT 'Kode Bidang',
  `dien004_01` tinyint(1) NOT NULL COMMENT 'Kode Unit',
  `dien004_02` varchar(255) NOT NULL COMMENT 'Nama Unit Organisasi'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dien005`
--

CREATE TABLE `dien005` (
  `dien002_01` tinyint(1) NOT NULL COMMENT 'Kode urusan',
  `dien003_01` tinyint(1) NOT NULL COMMENT 'Kode bidang',
  `dien004_01` tinyint(1) NOT NULL COMMENT 'kode unit',
  `dien005_01` smallint(2) NOT NULL COMMENT 'kode sub unit',
  `dien005_02` int(255) NOT NULL COMMENT 'nama sub unit'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dien006`
--

CREATE TABLE `dien006` (
  `dien006_01` tinyint(1) NOT NULL COMMENT 'Kode rekening 1',
  `dien006_02` varchar(100) NOT NULL COMMENT 'Nama rekening level 1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dien007`
--

CREATE TABLE `dien007` (
  `dien006_01` tinyint(1) NOT NULL COMMENT 'Kode rekening level 1',
  `dien007_01` tinyint(1) NOT NULL COMMENT 'Kode rekening level 2',
  `dien007_02` varchar(100) NOT NULL COMMENT 'Nama rekening level 2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dien008`
--

CREATE TABLE `dien008` (
  `dien006_01` tinyint(1) NOT NULL COMMENT 'Kode rekening level 1',
  `dien007_01` tinyint(1) NOT NULL COMMENT 'Kode rekening level 2',
  `dien008_01` tinyint(1) NOT NULL COMMENT 'Kode rekening level 3',
  `dien008_02` varchar(100) NOT NULL COMMENT 'Nama rekening level 3',
  `dien008_03` varchar(1) NOT NULL COMMENT 'Saldo Normal'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dien009`
--

CREATE TABLE `dien009` (
  `dien006_01` tinyint(1) NOT NULL COMMENT 'Kode rekening level 1',
  `dien007_01` tinyint(1) NOT NULL COMMENT 'Kode rekening level 2',
  `dien008_01` tinyint(1) NOT NULL COMMENT 'Kode rekening level 2',
  `dien009_01` tinyint(1) NOT NULL COMMENT 'Kode rekening level 3',
  `dien009_02` varchar(100) NOT NULL COMMENT 'Kode rekening level 4'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dien010`
--

CREATE TABLE `dien010` (
  `dien006_01` tinyint(1) NOT NULL COMMENT 'Kode rekening level 1',
  `dien007_01` tinyint(1) NOT NULL COMMENT 'Kode rekening level 2',
  `dien008_01` tinyint(1) NOT NULL COMMENT 'Kode rekening level 3',
  `dien009_01` tinyint(1) NOT NULL COMMENT 'Kode rekening level 4',
  `dien010_01` tinyint(1) NOT NULL COMMENT 'Kode rekening level 5',
  `dien010_02` varchar(100) NOT NULL COMMENT 'Nama rekening level 5'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dien011`
--

CREATE TABLE `dien011` (
  `dien006_01` int(1) NOT NULL COMMENT 'Kode rekening level 1',
  `dien007_01` int(1) NOT NULL COMMENT 'Kode rekening level 2',
  `dien008_01` tinyint(1) NOT NULL COMMENT 'Kode rekening level 3',
  `dien009_01` tinyint(1) NOT NULL COMMENT 'Kode rekening level 4',
  `dien010_01` tinyint(1) NOT NULL COMMENT 'Kode rekening level 5',
  `dien011_01` tinyint(1) NOT NULL COMMENT 'Kode rekening level 6',
  `dien011_02` varchar(100) NOT NULL COMMENT 'Nama rekening level 6',
  `dien011_03` varchar(255) DEFAULT NULL COMMENT 'Deskripsi/ uraian rekening level 6'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dien012`
--

CREATE TABLE `dien012` (
  `dien006_01` tinyint(1) NOT NULL COMMENT 'Kode rekening level 1',
  `dien007_01` tinyint(1) NOT NULL COMMENT 'Kode rekening level 2',
  `dien008_01` tinyint(1) NOT NULL COMMENT 'Kode rekening level 3',
  `dien009_01` tinyint(1) NOT NULL COMMENT 'Kode rekening level 4',
  `dien010_01` tinyint(1) NOT NULL COMMENT 'Kode rekening level 5',
  `dien011_01` tinyint(1) NOT NULL COMMENT 'Kode rekening level 6',
  `dien012_01` tinyint(1) NOT NULL COMMENT 'Kode rekening level 7',
  `dien012_02` varchar(100) NOT NULL COMMENT 'Nama rekening level 7',
  `dien012_03` varchar(255) DEFAULT NULL COMMENT 'Deskripsi/ uraian rekening level 7'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dien013`
--

CREATE TABLE `dien013` (
  `dien006_01` tinyint(1) NOT NULL COMMENT 'Kode rekening level 1',
  `dien007_01` tinyint(1) NOT NULL COMMENT 'Kode rekening level 2',
  `dien008_01` tinyint(1) NOT NULL COMMENT 'Kode rekening level 3',
  `dien009_01` tinyint(1) NOT NULL COMMENT 'Kode rekening level 4',
  `dien010_01` tinyint(1) NOT NULL COMMENT 'Kode rekening level 5',
  `dien011_01` tinyint(1) NOT NULL COMMENT 'Kode rekening level 6',
  `dien012_01` tinyint(1) NOT NULL COMMENT 'Kode rekening level 7',
  `dien013_01` tinyint(1) NOT NULL COMMENT 'Kode rekening level 8',
  `dien013_02` varchar(100) NOT NULL COMMENT 'Nama rekening level 8',
  `dien013_03` varchar(255) DEFAULT NULL COMMENT 'Deskripsi/ uraian rekening level 8',
  `dien013_04` varchar(25) DEFAULT NULL COMMENT 'Merk',
  `dien013_05` varchar(25) DEFAULT NULL COMMENT 'Tipe',
  `dien013_06` varchar(25) DEFAULT NULL COMMENT 'ukuran',
  `dien013_07` datetime DEFAULT NULL COMMENT 'Tanggal Kadaluwarsa',
  `dien013_08` varchar(25) DEFAULT NULL COMMENT 'kondisi'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dien014`
--

CREATE TABLE `dien014` (
  `dien014_01` tinyint(1) NOT NULL COMMENT 'Kode satuan',
  `dien014_02` varchar(25) NOT NULL COMMENT 'Nama satuan/ uraian'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dien015`
--

CREATE TABLE `dien015` (
  `dien002_01` tinyint(1) NOT NULL COMMENT 'Kode urusan',
  `dien003_01` tinyint(1) NOT NULL COMMENT 'Kode Bidang',
  `dien015_01` smallint(2) NOT NULL COMMENT 'Kode program',
  `dien015_02` varchar(255) NOT NULL COMMENT 'nama program'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dien016`
--

CREATE TABLE `dien016` (
  `dien002_01` tinyint(1) NOT NULL COMMENT 'Kode urusan',
  `dien003_01` tinyint(1) NOT NULL COMMENT 'Kode bidang',
  `dien015_01` smallint(2) NOT NULL COMMENT 'Kode program',
  `dien016_01` smallint(2) NOT NULL COMMENT 'kode kegiatan',
  `dien016_02` varchar(255) NOT NULL COMMENT 'Nama Kegiatan'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dien017`
--

CREATE TABLE `dien017` (
  `dien001_01` smallint(2) NOT NULL COMMENT 'Tahun anggaran',
  `dien002_01` tinyint(1) NOT NULL COMMENT 'kode urusan',
  `dien003_01` tinyint(1) NOT NULL COMMENT 'kode bidang',
  `dien004_01` tinyint(1) NOT NULL COMMENT 'Kode Unit',
  `dien005_01` tinyint(2) NOT NULL COMMENT 'Kode sub Unit',
  `dien017_01` varchar(50) DEFAULT NULL COMMENT 'Nama Pimpinan',
  `dien017_02` varchar(21) DEFAULT NULL COMMENT 'Nip Pimpinan',
  `dien017_03` varchar(75) DEFAULT NULL COMMENT 'Jabatan Pimpinan',
  `dien017_04` varchar(255) DEFAULT NULL COMMENT 'Alamat Unit Organisasi'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dien018`
--

CREATE TABLE `dien018` (
  `dien001_01` smallint(2) NOT NULL COMMENT 'Tahun anggaran',
  `dien002_01` tinyint(1) NOT NULL COMMENT 'Kode urusan',
  `dien003_01` tinyint(1) NOT NULL COMMENT 'Kode Bidang',
  `dien004_01` tinyint(1) NOT NULL COMMENT 'Kode Unit',
  `dien005_01` smallint(2) NOT NULL COMMENT 'Kode Sub Unit',
  `dien018_01` tinyint(1) NOT NULL COMMENT 'Kode bidang',
  `dien018_02` varchar(75) DEFAULT NULL COMMENT 'Nama Bidang',
  `dien018_03` varchar(50) DEFAULT NULL COMMENT 'Nama kepala Bidang',
  `dien018_04` varchar(21) DEFAULT NULL COMMENT 'NIP kepala bidang',
  `dien018_05` varchar(75) DEFAULT NULL COMMENT 'jabatan kepala bidang'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dien019`
--

CREATE TABLE `dien019` (
  `dien001_01` smallint(2) NOT NULL COMMENT 'Tahun anggaran',
  `dien002_01` tinyint(1) NOT NULL COMMENT 'Kode urusan',
  `dien003_01` tinyint(1) NOT NULL COMMENT 'Kode Bidang',
  `dien004_01` tinyint(1) NOT NULL COMMENT 'Kode Unit',
  `dien005_01` smallint(2) NOT NULL COMMENT 'Kode Sub Unit',
  `dien019_01` tinyint(1) NOT NULL COMMENT 'Kode bidang',
  `dien019_02` varchar(75) DEFAULT NULL COMMENT 'Nama gudang',
  `dien019_03` varchar(255) DEFAULT NULL COMMENT 'Alamat gudang'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dien020`
--

CREATE TABLE `dien020` (
  `dien001_01` smallint(2) NOT NULL COMMENT 'Tahun anggaran',
  `dien002_01` tinyint(1) NOT NULL COMMENT 'Kode urusan',
  `dien003_01` tinyint(1) NOT NULL COMMENT 'Kode Bidang',
  `dien004_01` tinyint(1) NOT NULL COMMENT 'Kode Unit',
  `dien005_01` smallint(2) NOT NULL COMMENT 'Kode Sub Unit',
  `dien019_01` tinyint(1) NOT NULL COMMENT 'Kode bidang',
  `dien020_01` tinyint(1) NOT NULL COMMENT 'Kode Petugas',
  `dien020_02` varchar(50) DEFAULT NULL COMMENT 'Nama petugas gudang',
  `dien020_03` varchar(21) DEFAULT NULL COMMENT 'NIP petugas gudang',
  `dien020_04` varchar(75) DEFAULT NULL COMMENT 'Jabatan petugas gudang'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dien021`
--

CREATE TABLE `dien021` (
  `dien001_01` smallint(2) NOT NULL COMMENT 'Tahun anggaran',
  `dien002_01` tinyint(1) NOT NULL COMMENT 'Kode urusan',
  `dien003_01` tinyint(1) NOT NULL COMMENT 'Kode Bidang',
  `dien004_01` tinyint(1) NOT NULL COMMENT 'Kode Unit',
  `dien005_01` smallint(2) NOT NULL COMMENT 'Kode Sub Unit',
  `dien015_01` smallint(2) NOT NULL COMMENT 'Kode program',
  `dien021_01` smallint(2) NOT NULL COMMENT 'Id_Program',
  `dien015_02` varchar(255) NOT NULL COMMENT 'Keterangan program',
  `dien002_01_a` tinyint(1) NOT NULL COMMENT 'Kode urusan 1',
  `dien003_01_a` tinyint(1) NOT NULL COMMENT 'Kode Bidang 1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dien022`
--

CREATE TABLE `dien022` (
  `dien001_01` smallint(2) NOT NULL COMMENT 'Tahun anggaran',
  `dien002_01` tinyint(1) NOT NULL COMMENT 'Kode urusan',
  `dien003_01` tinyint(1) NOT NULL COMMENT 'Kode Bidang',
  `dien004_01` tinyint(1) NOT NULL COMMENT 'Kode Unit',
  `dien005_01` smallint(2) NOT NULL COMMENT 'Kode Sub Unit',
  `dien015_01` smallint(2) NOT NULL COMMENT 'Kode program',
  `dien021_01` smallint(2) NOT NULL COMMENT 'Id_Program',
  `dien016_01` smallint(2) NOT NULL COMMENT 'Kode kegiatan',
  `dien016_02` varchar(255) NOT NULL COMMENT 'Keterangan kegiatan',
  `dien018_01` tinyint(1) NOT NULL COMMENT 'Kode bidang'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dien023`
--

CREATE TABLE `dien023` (
  `dien023_01` tinyint(1) NOT NULL COMMENT 'Kode perhitungan',
  `dien023_02` varchar(10) NOT NULL COMMENT 'uraian perhitungan'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dien024`
--

CREATE TABLE `dien024` (
  `dien024_01` datetime(6) NOT NULL COMMENT 'Tanggal Login',
  `dien024_02` varchar(50) NOT NULL COMMENT 'Nama Komputer',
  `dien024_03` varchar(30) NOT NULL COMMENT 'User ID',
  `dien024_04` smallint(2) NOT NULL COMMENT 'Tahun Login',
  `dien024_05` varchar(25) NOT NULL COMMENT 'App Version',
  `dien024_06` varchar(25) NOT NULL COMMENT 'DB Version'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dien025`
--

CREATE TABLE `dien025` (
  `dien025_01` varchar(30) NOT NULL COMMENT 'User ID',
  `dien025_02` varchar(25) NOT NULL COMMENT 'Level User',
  `dien025_03` varchar(50) NOT NULL COMMENT 'Nama Lengkap',
  `dien025_04` varchar(50) NOT NULL COMMENT 'Keterangan',
  `dien025_05` varchar(30) NOT NULL COMMENT 'Password',
  `dien025_06` varchar(30) NOT NULL COMMENT 'Nama Group',
  `dien025_07` varchar(30) NOT NULL COMMENT 'Dibuat Oleh',
  `dien025_08` datetime(6) NOT NULL COMMENT 'Tanggal Dibuat'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dien026`
--

CREATE TABLE `dien026` (
  `dien026_01` varchar(30) NOT NULL COMMENT 'ID Group User',
  `dien026_02` varchar(50) NOT NULL COMMENT 'Nama Group',
  `dien026_03` varchar(25) NOT NULL COMMENT 'Level Group'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dien027`
--

CREATE TABLE `dien027` (
  `dien027_01` smallint(2) NOT NULL COMMENT 'Tahun Anggaran',
  `dien027_02` varchar(30) NOT NULL COMMENT 'ID Group User',
  `dien027_03` varchar(4) NOT NULL COMMENT 'ID Menu',
  `dien027_04` varchar(1) NOT NULL COMMENT 'Otoritas'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dien028`
--

CREATE TABLE `dien028` (
  `dien028_01` smallint(2) NOT NULL COMMENT 'Tahun Anggaran',
  `dien028_02` varchar(20) NOT NULL COMMENT 'User ID',
  `dien028_03` varchar(4) NOT NULL COMMENT 'ID Menu',
  `dien028_04` varchar(1) NOT NULL COMMENT 'Otoritas'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dien029`
--

CREATE TABLE `dien029` (
  `dien029_01` smallint(4) NOT NULL COMMENT 'Tahun Anggaran',
  `dien029_02` varchar(30) NOT NULL COMMENT 'User ID',
  `dien029_03` tinyint(1) NOT NULL COMMENT 'Kode Urusan',
  `dien029_04` tinyint(1) NOT NULL COMMENT 'Kode Bidang',
  `dien029_05` smallint(2) NOT NULL COMMENT 'Kode Unit',
  `dien029_06` smallint(2) NOT NULL COMMENT 'Kode Sub Unit',
  `dien029_07` varchar(50) NOT NULL COMMENT 'Keterangan'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dien030`
--

CREATE TABLE `dien030` (
  `dien030_01` tinyint(1) NOT NULL COMMENT 'Kode Koreksi',
  `dien030_02` varchar(25) NOT NULL COMMENT 'Uraian umum koreksi'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dien031`
--

CREATE TABLE `dien031` (
  `dien030_01` tinyint(1) NOT NULL COMMENT 'Kode Koreksi',
  `dien031_01` tinyint(1) NOT NULL COMMENT 'Kode Koreksi rinci',
  `dien031_02` tinyint(1) NOT NULL COMMENT 'Kode Gabungan koreksi',
  `dien031_03` varchar(50) NOT NULL COMMENT 'Uraian Koreksi Rinci'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dien032`
--

CREATE TABLE `dien032` (
  `dien031_01` varchar(100) NOT NULL COMMENT 'Nomor MB ',
  `dien032_01` varchar(200) NOT NULL COMMENT 'Nama Pemda',
  `dien032_02` varchar(100) NOT NULL COMMENT 'Nomor Registrasi',
  `dien032_03` varchar(100) NOT NULL COMMENT 'Nomor PIN Aktifasi',
  `dien032_04` varchar(200) NOT NULL COMMENT 'Nama Unit',
  `dien032_05` datetime(6) NOT NULL COMMENT 'Tanggal Terdaftar',
  `dien032_06` datetime(6) NOT NULL COMMENT 'Tanggal Aktifasi',
  `dien032_07` varchar(2) NOT NULL COMMENT 'Kode'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dien033`
--

CREATE TABLE `dien033` (
  `dien033_01` tinyint(1) NOT NULL COMMENT 'Kode',
  `dien033_02` tinyint(1) NOT NULL COMMENT 'Jumlah Satuan',
  `dien014_01` tinyint(1) NOT NULL COMMENT 'Satuan',
  `dien033_03` tinyint(1) NOT NULL COMMENT 'Jumlah Per Satuan',
  `dien014_01_1` tinyint(1) NOT NULL COMMENT 'Satuan',
  `dien033_04` tinyint(1) NOT NULL COMMENT 'Status Default',
  `dien033_05` varchar(50) DEFAULT NULL COMMENT 'Keterangan'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dien001`
--
ALTER TABLE `dien001`
  ADD PRIMARY KEY (`dien001_01`);

--
-- Indexes for table `dien002`
--
ALTER TABLE `dien002`
  ADD PRIMARY KEY (`dien002_01`);

--
-- Indexes for table `dien003`
--
ALTER TABLE `dien003`
  ADD PRIMARY KEY (`dien002_01`,`dien003_01`);

--
-- Indexes for table `dien004`
--
ALTER TABLE `dien004`
  ADD PRIMARY KEY (`dien002_01`,`dien003_01`,`dien004_01`);

--
-- Indexes for table `dien005`
--
ALTER TABLE `dien005`
  ADD PRIMARY KEY (`dien002_01`,`dien003_01`,`dien004_01`,`dien005_01`);

--
-- Indexes for table `dien006`
--
ALTER TABLE `dien006`
  ADD PRIMARY KEY (`dien006_01`);

--
-- Indexes for table `dien007`
--
ALTER TABLE `dien007`
  ADD PRIMARY KEY (`dien006_01`,`dien007_01`);

--
-- Indexes for table `dien008`
--
ALTER TABLE `dien008`
  ADD PRIMARY KEY (`dien006_01`,`dien007_01`,`dien008_01`);

--
-- Indexes for table `dien009`
--
ALTER TABLE `dien009`
  ADD PRIMARY KEY (`dien006_01`,`dien007_01`,`dien008_01`,`dien009_01`);

--
-- Indexes for table `dien010`
--
ALTER TABLE `dien010`
  ADD PRIMARY KEY (`dien006_01`,`dien007_01`,`dien008_01`,`dien009_01`,`dien010_01`);

--
-- Indexes for table `dien011`
--
ALTER TABLE `dien011`
  ADD PRIMARY KEY (`dien008_01`,`dien009_01`,`dien010_01`,`dien011_01`,`dien007_01`,`dien006_01`);

--
-- Indexes for table `dien012`
--
ALTER TABLE `dien012`
  ADD PRIMARY KEY (`dien006_01`,`dien007_01`,`dien008_01`,`dien009_01`,`dien010_01`,`dien011_01`,`dien012_01`);

--
-- Indexes for table `dien013`
--
ALTER TABLE `dien013`
  ADD PRIMARY KEY (`dien006_01`,`dien007_01`,`dien008_01`,`dien009_01`,`dien010_01`,`dien011_01`,`dien012_01`,`dien013_01`);

--
-- Indexes for table `dien014`
--
ALTER TABLE `dien014`
  ADD PRIMARY KEY (`dien014_01`);

--
-- Indexes for table `dien015`
--
ALTER TABLE `dien015`
  ADD PRIMARY KEY (`dien003_01`,`dien015_01`);

--
-- Indexes for table `dien016`
--
ALTER TABLE `dien016`
  ADD PRIMARY KEY (`dien002_01`,`dien003_01`,`dien015_01`,`dien016_01`);

--
-- Indexes for table `dien017`
--
ALTER TABLE `dien017`
  ADD PRIMARY KEY (`dien001_01`,`dien002_01`,`dien003_01`,`dien004_01`,`dien005_01`);

--
-- Indexes for table `dien018`
--
ALTER TABLE `dien018`
  ADD PRIMARY KEY (`dien001_01`,`dien002_01`,`dien003_01`,`dien004_01`,`dien005_01`,`dien018_01`);

--
-- Indexes for table `dien019`
--
ALTER TABLE `dien019`
  ADD PRIMARY KEY (`dien001_01`,`dien002_01`,`dien003_01`,`dien004_01`,`dien005_01`,`dien019_01`);

--
-- Indexes for table `dien020`
--
ALTER TABLE `dien020`
  ADD PRIMARY KEY (`dien001_01`,`dien002_01`,`dien003_01`,`dien004_01`,`dien005_01`,`dien019_01`,`dien020_01`);

--
-- Indexes for table `dien021`
--
ALTER TABLE `dien021`
  ADD PRIMARY KEY (`dien001_01`,`dien002_01`,`dien003_01`,`dien004_01`,`dien005_01`,`dien021_01`);

--
-- Indexes for table `dien022`
--
ALTER TABLE `dien022`
  ADD PRIMARY KEY (`dien001_01`,`dien002_01`,`dien003_01`,`dien004_01`,`dien005_01`,`dien015_01`,`dien021_01`,`dien016_01`);

--
-- Indexes for table `dien023`
--
ALTER TABLE `dien023`
  ADD PRIMARY KEY (`dien023_01`);

--
-- Indexes for table `dien025`
--
ALTER TABLE `dien025`
  ADD PRIMARY KEY (`dien025_01`);

--
-- Indexes for table `dien026`
--
ALTER TABLE `dien026`
  ADD PRIMARY KEY (`dien026_01`);

--
-- Indexes for table `dien027`
--
ALTER TABLE `dien027`
  ADD PRIMARY KEY (`dien027_03`);

--
-- Indexes for table `dien028`
--
ALTER TABLE `dien028`
  ADD PRIMARY KEY (`dien028_03`);

--
-- Indexes for table `dien029`
--
ALTER TABLE `dien029`
  ADD PRIMARY KEY (`dien029_01`,`dien029_02`,`dien029_03`,`dien029_04`,`dien029_05`,`dien029_06`);

--
-- Indexes for table `dien030`
--
ALTER TABLE `dien030`
  ADD PRIMARY KEY (`dien030_01`);

--
-- Indexes for table `dien031`
--
ALTER TABLE `dien031`
  ADD PRIMARY KEY (`dien030_01`,`dien031_01`);

--
-- Indexes for table `dien032`
--
ALTER TABLE `dien032`
  ADD PRIMARY KEY (`dien031_01`,`dien032_02`);

--
-- Indexes for table `dien033`
--
ALTER TABLE `dien033`
  ADD PRIMARY KEY (`dien033_01`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dien001`
--
ALTER TABLE `dien001`
  MODIFY `dien001_01` smallint(2) NOT NULL AUTO_INCREMENT COMMENT 'Tahun anggaran';
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

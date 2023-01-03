-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jan 2023 pada 04.26
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jfcipmhg_schoolyte2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen_ekskuls`
--

CREATE TABLE `absen_ekskuls` (
  `ID_ABSENSI_EKSKUL` int(11) NOT NULL,
  `ID_ANGGOTA` bigint(11) UNSIGNED NOT NULL,
  `STATUS_KEHADIRAN_EKSKUL` varchar(15) DEFAULT NULL,
  `FOTO_KEHADIRAN_EKSKUL` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen_pegawais`
--

CREATE TABLE `absen_pegawais` (
  `ID_ABSENSI_PEGAWAI` bigint(11) UNSIGNED NOT NULL,
  `ID_PS` bigint(11) UNSIGNED NOT NULL,
  `ID_PERPUS` bigint(11) UNSIGNED NOT NULL,
  `ID_TU` bigint(11) UNSIGNED NOT NULL,
  `ID_KEPALA_SEKOLAH` bigint(11) UNSIGNED NOT NULL,
  `ID_PEGAWAI_KOPERASI` bigint(11) UNSIGNED NOT NULL,
  `FOTO_CHECKIN` longblob DEFAULT NULL,
  `FOTO_CHECKOUT` longblob DEFAULT NULL,
  `KEHADIRAN` varchar(15) DEFAULT NULL,
  `HARI` varchar(7) DEFAULT NULL,
  `TANGGAL` date DEFAULT NULL,
  `WAKTU_CHECKIN` time DEFAULT NULL,
  `WAKTU_CHECKOUT` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen_siswas`
--

CREATE TABLE `absen_siswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `siswa_id` bigint(20) UNSIGNED NOT NULL,
  `kelas_id` bigint(20) UNSIGNED NOT NULL,
  `status_absen` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `tgl_absen` varchar(255) NOT NULL,
  `wkt_absen` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `absen_siswas`
--

INSERT INTO `absen_siswas` (`id`, `siswa_id`, `kelas_id`, `status_absen`, `image`, `tgl_absen`, `wkt_absen`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Hadir', 'AbsenSiswa/1672301822.png', '2022-12-26', '06:00', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `ID_ADMIN` int(11) NOT NULL,
  `ID_AKUN` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tlpn` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `jenis_kelamin` char(2) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` varchar(255) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status` char(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id`, `email`, `pass`, `nama`, `alamat`, `tlpn`, `nik`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `agama`, `status`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(4, 'azizibrahim@admin.schoolyte.sch.id', 'azizihaha', 'Muhammad Aziz Ibrahim, S.Kom', 'Jl Wonokromo Gg 8 no.29', '1234567890', '12345434567', 'L', 'Surabaya', '13 Mei 1994', 'Islam', 'Admin', 'admin/1672291725.png', NULL, NULL, NULL),
(5, 'admin@example.com', 'password', 'Admin 1', 'Jl. Admin', '0895337123123', '12312312312312312', 'L', 'Jakarta', '1999-12-12', 'Islam', 'A', 'default.png', NULL, '2023-01-01 23:12:53', '2023-01-01 23:12:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `ID_AKUN` int(11) NOT NULL,
  `ID_GURU_MAPEL` int(11) DEFAULT NULL,
  `ID_TU` int(11) DEFAULT NULL,
  `ID_GURU2` int(11) DEFAULT NULL,
  `ID_PS` int(11) DEFAULT NULL,
  `ID_PEMBINA_OSIS` int(11) DEFAULT NULL,
  `ID_PKA` int(11) DEFAULT NULL,
  `ID_KEPALA_SEKOLAH` int(11) DEFAULT NULL,
  `ID_SISWA` int(11) DEFAULT NULL,
  `ID_WALI_MURID` int(11) DEFAULT NULL,
  `ID_PERPUS` int(11) DEFAULT NULL,
  `ID_ADMIN` int(11) DEFAULT NULL,
  `ID_OSIS` int(11) DEFAULT NULL,
  `ID_GURU_EKSTRA` int(11) DEFAULT NULL,
  `ID_PEGAWAI_KOPERASI` int(11) DEFAULT NULL,
  `EMAIL_AKUN` varchar(30) DEFAULT NULL,
  `PASS_AKUN` varchar(15) DEFAULT NULL,
  `STATUS_AKUN` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota_ekskuls`
--

CREATE TABLE `anggota_ekskuls` (
  `ID_ANGGOTA` bigint(11) UNSIGNED NOT NULL,
  `ID_SISWA` bigint(11) UNSIGNED NOT NULL,
  `ID_EKSTRAKULIKULER` int(11) DEFAULT NULL,
  `ALASAN_MENGIKUTI` text DEFAULT NULL,
  `JABATAN_ANGGOTA` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `siswa_id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `beritas`
--

INSERT INTO `beritas` (`id`, `siswa_id`, `judul`, `isi`, `tanggal`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Waspada Bullying di Sekolah, Ini Dampaknya bagi Korban dan Pelaku.', 'Bullying merupakan perilaku tidak menyenangkan baik baik secara verbal, fisik, ataupun sosial di dunia nyata maupun dunia maya. Peristiwa ini tentu menjadi hal yang memprihatinkan di dunia pendidikan. Padahal pemerintah dan berbagai pihak terkait juga telah mengupayakan berbagai program untuk menciptakan sekolah yang aman dan bebas bullying. Menurut dosen Jurusan Filsafat dan Sosiologi Pendidikan Universitas Negeri Yogyakarta (UNY) Riana Nurhayati, sebenarnya kasus bully sudah terjadi sejak lama. Hal ini dapat dilihat dengan semakin meningkatnya jumlah kekerasan maupun konflik di sekolah.\n\nKasus bullying sering terjadi di sekolah\n\nDia mengungkapkan, fenomena kekerasan maupun penindasan ini harus mendapatkan perhatian dan penanganan yang komprehensif. Baik dari pemerintah sekolah maupun orang tua, serta siswa itu sendiri.\n\"Berkaitan dengan hal tersebut pendidikan memiliki peranan penting karena sebagai institusi yang memiliki peran untuk melakukan control social,\".\n\"Berkaitan dengan hal tersebut pendidikan memiliki peranan penting karena sebagai institusi yang memiliki peran untuk melakukan control social,\"\nDampak bullying bagi korban\nPerilaku bullying ini tentu akan membawa dampak buruk bagi korban. Riana menjelaskan, ada beberapa dampak negatif bagi korban bullying. Antara lain:\n1. Mengalami gangguan kesehatan mental. Bahkan dampak yang lebih buruk bisa terjadi seperti stres hingga depresi.\n2. Keinginan untuk mengakhiri hidupnya. Dampak ini mungkin yang paling parah. Ketika sudah terkena secara psikis maka akan sulit bagi korban bully untuk melupakan masa lalu yang berkaitan dengan pengalaman buruknya.', '2022-12-22', 'Berita/1672238980.jpg', NULL, NULL, NULL),
(2, 1, 'Waspada Bullying di Sekolah, Ini Dampaknya bagi Korban dan Pelaku.', 'Bullying merupakan perilaku tidak menyenangkan baik baik secara verbal, fisik, ataupun sosial di dunia nyata maupun dunia maya. Peristiwa ini tentu menjadi hal yang memprihatinkan di dunia pendidikan. Padahal pemerintah dan berbagai pihak terkait juga telah mengupayakan berbagai program untuk menciptakan sekolah yang aman dan bebas bullying. Menurut dosen Jurusan Filsafat dan Sosiologi Pendidikan Universitas Negeri Yogyakarta (UNY) Riana Nurhayati, sebenarnya kasus bully sudah terjadi sejak lama. Hal ini dapat dilihat dengan semakin meningkatnya jumlah kekerasan maupun konflik di sekolah.\n\nKasus bullying sering terjadi di sekolah\n\nDia mengungkapkan, fenomena kekerasan maupun penindasan ini harus mendapatkan perhatian dan penanganan yang komprehensif. Baik dari pemerintah sekolah maupun orang tua, serta siswa itu sendiri.\n\"Berkaitan dengan hal tersebut pendidikan memiliki peranan penting karena sebagai institusi yang memiliki peran untuk melakukan control social,\".\n\"Berkaitan dengan hal tersebut pendidikan memiliki peranan penting karena sebagai institusi yang memiliki peran untuk melakukan control social,\"\nDampak bullying bagi korban\nPerilaku bullying ini tentu akan membawa dampak buruk bagi korban. Riana menjelaskan, ada beberapa dampak negatif bagi korban bullying. Antara lain:\n1. Mengalami gangguan kesehatan mental. Bahkan dampak yang lebih buruk bisa terjadi seperti stres hingga depresi.\n2. Keinginan untuk mengakhiri hidupnya. Dampak ini mungkin yang paling parah. Ketika sudah terkena secara psikis maka akan sulit bagi korban bully untuk melupakan masa lalu yang berkaitan dengan pengalaman buruknya.', '2022-12-22', 'Berita/1672245006.jpg', NULL, NULL, NULL),
(3, 1, 'Walkot Mojokerto Ajak Semua Pihak Berperan Atasi Kenakalan Remaja', 'Wali Kota Mojokerto mengajak masyarakat dan pihak terkait untuk berperan mengatasi masalah kenakalan remaja dan pernikahan dini. Ia menegaskan penyelesaian masalah tersebut tidak hanya menjadi tugas orang tua atau guru di sekolah.\nHal itu disampaikan Wali Kota yang akrab disapa Ning Ita dalam acara sosialisasi di pendopo Sabha Kridhatama Rumah Rakyat Kota Mojokerto, Jumat (20/5).\n\n\"Kita harus menyadari bahwa ini tugas bersama. Baik pemerintah, warga atau pun stakeholder lainnya, harus memiliki komitmen untuk bersinergi dalam upaya mencegah makin maraknya kenakalan remaja dan pernikahan di bawah umur,\" kata Ning Ita dikutip dalam keterangan tertulis, Senin.', '2022-12-23', 'Berita/1672283618.jpg', NULL, NULL, NULL),
(4, 1, 'Walkot Mojokerto Ajak Semua Pihak Berperan Atasi Kenakalan Remaja', 'Wali Kota Mojokerto mengajak masyarakat dan pihak terkait untuk berperan mengatasi masalah kenakalan remaja dan pernikahan dini. Ia menegaskan penyelesaian masalah tersebut tidak hanya menjadi tugas orang tua atau guru di sekolah.\nHal itu disampaikan Wali Kota yang akrab disapa Ning Ita dalam acara sosialisasi di pendopo Sabha Kridhatama Rumah Rakyat Kota Mojokerto, Jumat (20/5).\n\n\"Kita harus menyadari bahwa ini tugas bersama. Baik pemerintah, warga atau pun stakeholder lainnya, harus memiliki komitmen untuk bersinergi dalam upaya mencegah makin maraknya kenakalan remaja dan pernikahan di bawah umur,\" kata Ning Ita dikutip dalam keterangan tertulis, Senin.', '2022-12-23', 'Berita/1672287530.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita_sekolah`
--

CREATE TABLE `berita_sekolah` (
  `ID_BERITA_SEKOLAH` int(11) NOT NULL,
  `ID_SISWA` int(11) DEFAULT NULL,
  `JUDUL_BERITA` varchar(50) DEFAULT NULL,
  `ISI_BERITA` text DEFAULT NULL,
  `WAKTU_DISIARKAN` datetime DEFAULT NULL,
  `THUMBNAIL_BERITA` longblob DEFAULT NULL,
  `STATUS_BERITA` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `berita_sekolah`
--

INSERT INTO `berita_sekolah` (`ID_BERITA_SEKOLAH`, `ID_SISWA`, `JUDUL_BERITA`, `ISI_BERITA`, `WAKTU_DISIARKAN`, `THUMBNAIL_BERITA`, `STATUS_BERITA`) VALUES
(1, NULL, 'asdasdasdasdasdasdasd', 'sadasdasdasdasdasd', NULL, 0x53637265656e73686f742028323535292e706e67, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `ID_BUKU` int(11) NOT NULL,
  `ID_SUMBANG_BUKU` int(11) DEFAULT NULL,
  `NAMA_BUKU` varchar(20) DEFAULT NULL,
  `TAHUN_TERBIT` date DEFAULT NULL,
  `NAMA_PENULIS` varchar(30) DEFAULT NULL,
  `RINCIAN_BUKU` longtext DEFAULT NULL,
  `JUMLAH_BUKU` int(11) DEFAULT NULL,
  `TAMBAH_FOTO` longblob DEFAULT NULL,
  `KATEGORI_BUKU` varchar(10) DEFAULT NULL,
  `STATUS_SUMBANG` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukus`
--

CREATE TABLE `bukus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_buku` varchar(255) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `nama_penulis` varchar(255) NOT NULL,
  `rincian_buku` text NOT NULL,
  `jumlah_buku` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `kategori_buku` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bukus`
--

INSERT INTO `bukus` (`id`, `nama_buku`, `tahun_terbit`, `nama_penulis`, `rincian_buku`, `jumlah_buku`, `image`, `kategori_buku`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Rudy: Kisah Muda Sang Visioner', 2015, 'Gina S. Noer', 'Dalam buku ini diungkapan mengenai alasan kenapa Rudy jengah bila dipanggil jenius, tapi lebih senang bila disebut sebagai pekerja keras yang setia. Setia pada cita-citanya. Setia pada cintanya. Melalui buku ini pula kita akan mengetahui perjalanan B.J. Habibie yang datang dari bentukan visi besar orang tuanya, pengorbanan dan dukungan orang terdekat serta inspirasi terbesarnya : Indonesia. (Doni Fitra)', 99, 'buku/1672239139.jpg', 'Sejarah', NULL, NULL, NULL),
(8, 'Aliando', 1987, 'Rafi Diaz', 'Sejarah yabg tidak oernah terlupakan', 10, 'buku/1672289301.jpg', 'Sejarah', NULL, NULL, NULL),
(9, 'KucingKu', 2022, 'Anonim', 'Kucing telah berbaur dengan kehidupan manusia paling tidak sejak 5.000 tahun SM, dengan ditemukannya kerangka kucing di Pulau Siprus.[7] Sejak zaman 3.500 SM, orang Mesir Kuno telah menggunakan kucing untuk menjauhkan tikus atau hewan pengerat lain dari lumbung yang menyimpan hasil panen.[8]\n\nSaat ini, kucing adalah salah satu hewan peliharaan terpopuler di dunia.[9] Kucing yang garis keturunannya tercatat secara resmi sebagai kucing trah atau galur murni (pure breed), seperti persia, siam, manx, dan sphinx. Kucing seperti ini biasanya dibiakkan di tempat pemeliharaan hewan resmi. Jumlah kucing ras hanyalah 1% dari seluruh kucing di dunia, sisanya adalah kucing dengan keturunan campuran seperti kucing liar atau kucing kampung. Kucing juga merupakan jenis hewan priharaan yang banyak diminati karena tingkah lakunya yang lucu.', 1, 'buku/1672290849.jpg', 'Novel', NULL, NULL, NULL),
(10, 'Testing', 2022, 'Arya', 'ini ada lah buku testing', 1, 'buku/1672381514.jpg', 'Coding', NULL, NULL, NULL),
(11, 'Buku Ku', 1990, 'Bambang suseno', 'Rincian', 1, 'Screenshot 2021-03-14 135710.png', 'Fiksi', NULL, '2023-01-02 17:08:02', '2023-01-02 17:08:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_kunjungan`
--

CREATE TABLE `daftar_kunjungan` (
  `ID_DAFTAR_KUNJUNGAN` int(11) NOT NULL,
  `ID_PERPUS` int(11) DEFAULT NULL,
  `NAMA` longtext DEFAULT NULL,
  `KEGIATAN` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `divisi_osis`
--

CREATE TABLE `divisi_osis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `divisi_osis`
--

INSERT INTO `divisi_osis` (`id`, `nama`, `keterangan`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'BPH', 'Badan Pengurus Harian atau disingkat BPH, sangatlah penting dalam suatu organisasi, yang bertugas untuk mengawasi dan mengkoordinasikan Divisi-divisi dan divisi dalam kepengurusanOsis. Dalam Osis sendiri, BPH terdiri dari Ketua, Wakil Ketua, Sekretaris , Bendahara', 'divisiosis/1672244269.jpg', NULL, NULL, NULL),
(2, 'Humas', 'Membangun citra positif OSIS baik di dalam maupun luar lingkungan OSIS dan sekolah. Menjalin hubungan baik dengan OSIS sekolah lain. Mengelola media sosial OSIS untuk media informasi ke seluruh pelajar. Memberikan saran, feedback atau kritik kepada kinerja OSIS', 'divisiosis/1672244859.png', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumentasi_osis`
--

CREATE TABLE `dokumentasi_osis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `divisi_osis_id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekskuls`
--

CREATE TABLE `ekskuls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `guru_id` bigint(20) UNSIGNED NOT NULL,
  `nama_ekskul` varchar(255) NOT NULL,
  `jadwal` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ekskuls`
--

INSERT INTO `ekskuls` (`id`, `guru_id`, `nama_ekskul`, `jadwal`, `keterangan`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 6, 'Pramuka', 'Senin, 14.00 - 17.00', 'melatih percaya diri', 'Ekskul/1672293267.png', NULL, NULL, NULL),
(2, 6, 'Pramuka', 'Senin, 14.00 - 17.00', 'melatih percaya diri', 'Ekskul/1672293317.jpg', '2022-12-28 22:59:21', NULL, '2022-12-28 22:59:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `eksternals`
--

CREATE TABLE `eksternals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tlpn` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `jenis_kelamin` char(2) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` varchar(255) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status` char(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `eksternals`
--

INSERT INTO `eksternals` (`id`, `email`, `pass`, `nama`, `alamat`, `tlpn`, `nik`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `agama`, `status`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'asmiyati.0019@gmail.com', 'asmiyati0019', 'Asmiyati', 'JL Gresik an Gg 5 no 9', '9876543115', '09876554312', 'P', 'Mojokerto', '20 Agustus 1992', 'Islam', 'Wali Murid', 'eksternal/1672230594.png', NULL, NULL, NULL),
(2, 'husnul.00@gmail.com', 'husnul00', 'Husnul Mubaroq', 'JL Gresik an Gg 9 no 9', '9876543115', '09876554312', 'P', 'Jakarta', '20 Agustus 1991', 'Islam', 'Dinas Pendidikan', 'eksternal/1672233066.png', NULL, NULL, NULL),
(3, 'nimas.1420@gmail.com', 'nimas1420', 'Nimas Ayu Ning Tyas', 'JL Bulukan no.192', '9876543115', '09876554312', 'P', 'rumah sakit', '20 Agustus 1991', 'Islam', 'Wali Murid', 'eksternal/1672233185.png', NULL, NULL, NULL),
(4, 'mengtiktok.1420@gmail.com', 'mengkeren', 'Imroatus', 'JL Kebraon no.192', '9876543555', '09876554312', 'P', 'Bandung', '09 Juli 1990', 'Islam', 'Pengawas Sekolah', 'eksternal/1672233717.png', NULL, NULL, NULL),
(5, 'johan.001212@schoolyte.ac.id', 'johans', 'Johan', 'Porong, Sidoarjo', '08326523920', '358923980745', 'L', 'Porong', '1 Januari 1972', 'Islam', 'Wali Murid', 'eksternal/1672469601.jpg', NULL, NULL, NULL),
(6, 'rezafakhri.002@schoolyte.ac.id', 'rezafa', 'Reza Fakhri', 'Mulyorejo, Surabaya', '08155555735', '357823980755', 'L', 'Madinah', '09 Juni 1981', 'Islam', 'Wali Murid', 'eksternal/1672470970.jpg', NULL, NULL, NULL),
(7, 'lidiarm01@schoolyte.ac.id', 'lidiaa9', 'Lidia Ridho', 'Gununganyar', '081556789091', '35782555678', 'P', 'Qatar', '08 Juni 1981', 'Islam', 'Wali Murid', 'eksternal/1672471377.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekstrakulikulers`
--

CREATE TABLE `ekstrakulikulers` (
  `ID_EKSTRAKULIKULER` int(11) NOT NULL,
  `ID_SISWA` int(11) DEFAULT NULL,
  `ID_GURU_EKSTRA` int(11) DEFAULT NULL,
  `NAMA_EKSKUL` varchar(20) DEFAULT NULL,
  `DESKRIPSI_EKSKUL` text DEFAULT NULL,
  `JADWAL_EKSKUL` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_fasilitas` varchar(255) NOT NULL,
  `jenis_fasilitas` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `nama_fasilitas`, `jenis_fasilitas`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Lapangan Futsal', 'outdoor', 'fasilitas/1672239422.png', NULL, NULL, NULL),
(2, 'Lapangan Futsal', 'outdoor', 'fasilitas/1672245940.png', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gurus`
--

CREATE TABLE `gurus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `tlpn` varchar(15) NOT NULL,
  `nip` int(11) NOT NULL,
  `jenis_kelamin` char(2) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` varchar(255) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `saldo` int(11) NOT NULL,
  `status` char(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gurus`
--

INSERT INTO `gurus` (`id`, `email`, `pass`, `nama`, `alamat`, `tlpn`, `nip`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `agama`, `saldo`, `status`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Masfufah.001201@schoolyte.ac.id', 'masfufah', 'Masfufah, S.Pd.', 'Bulak Banterng no. 5', '987654333', 1201, 'P', 'Sidoarjo', '14 Agustus 1968', 'Islam', 9999999, 'Kepala Sekolah', 'guru/1672230647.png', NULL, NULL, '2023-01-02 07:41:04'),
(2, 'Suryono.001202@schoolyte.ac.id', 'suryono', 'Suryono, S.Pd.', 'Bulak rukem  no. 9', '987654321', 1202, 'L', 'Kendari', '12 Desember 1970', 'Islam', 9999999, 'Wali Kelas', 'guru/1672230808.png', NULL, NULL, NULL),
(3, 'dhurrotun.001203@schoolyte.ac.id', 'dhurrotun', 'Dhurrotun Khasanah, S.Pd.', 'Kenjeran Baru  no. 20', '987654321', 1203, 'L', 'Gresik', '11 Januari 1973', 'Islam', 9999999, 'Guru Mapel', 'guru/1672231056.png', NULL, NULL, NULL),
(4, 'masfufah.001204@schoolyte.ac.id', 'masfufah', 'Masfufah, S.Pd..', 'candi selatan  no. 195', '987654345', 1204, 'P', 'Sidoarjo', '14 Agustus 1968', 'Islam', 9999999, 'Guru Mapel', 'guru/1672231181.png', '2023-01-02 07:29:39', NULL, '2023-01-02 07:29:39'),
(5, 'endang.001205@schoolyte.ac.id', 'endang', 'Endang Surya Ningsih, S.Pd.', 'driorejo no. 195', '987654444', 1205, 'P', 'Bojonegoro', '06 Juli 1965', 'Islam', 9999999, 'Guru Mapel', 'guru/1672231356.png', NULL, NULL, NULL),
(6, 'abduls.001206@schoolyte.ac.id', 'abduls', 'Abdul Salam, S.Pd.', 'ketintang lama no 45', '1234567800', 1206, 'L', 'Banyuwangi', '28 Juli 1969', 'Islam', 9999999, 'Pembina Ekstrakulikuler', 'guru/1672232646.png', NULL, NULL, NULL),
(7, 'abdulk.001207@schoolyte.ac.id', 'abdulk', 'Abdul Khozim, S.Pd', 'ketintang baru no 45', '1234567899', 1207, 'L', 'Bojonegoro', '06 Juli 1965', 'Islam', 9999999, 'Pembina Osis', 'guru/1672232785.png', NULL, NULL, NULL),
(8, 'anang.001208@schoolyte.ac.id', 'anangs', 'Anang Arianto, S.Pd.', 'Jambangan Timur, Surabaya', '87963124', 1208, 'L', 'Madiun', '20 Agustus 1983', 'Kristen', 150000, 'Guru Mapel', 'guru/1672459287.jpg', NULL, NULL, NULL),
(9, 'yani.001209@schoolyte.ac.id', 'ayanis', 'Yani Arlinda Ningrum', 'Rungkut Kali Sari, Surabaya', '879635454', 1209, 'P', 'Surabaya', '21 Maret 1992', 'Hindu', 15000, 'Guru Mapel', 'guru/1672460247.jpg', NULL, NULL, NULL),
(10, 'samantha.001210@schoolyte.ac.id', 'samanthas', 'Samantha', 'Sememi, Surabaya', '081732665239', 1210, 'P', 'Jakarta', '11 April 1971', 'Hindu', 90000, 'Guru Mapel', 'guru/1672466987.jpg', NULL, NULL, NULL),
(11, 'tobing.001211@schoolyte.ac.id', 'tobings', 'Tobing', 'Manyar, Gresik', '08173743580', 1211, 'L', 'NTT', '11 April 1975', 'Kristen', 60000, 'Wali Kelas', 'guru/1672468690.jpg', NULL, NULL, NULL),
(12, 'putra.001212@schoolyte.ac.id', 'putras', 'Putra', 'Porong, Sidoarjo', '08326523920', 1212, 'L', 'Porong', '1 Januari 1972', 'Islam', 60000, 'Wali Kelas', 'guru/1672468816.jpg', NULL, NULL, NULL),
(13, 'guru@example.com', 'password', 'Guru 1', 'Jl. Aweawe No. 1', '12312313', 12312313, 'L', 'Jakarta', '2000-01-01', 'Islam', 90000, '1', 'guru1.jpg', NULL, '2023-01-01 23:12:53', '2023-01-02 12:14:24'),
(14, 'Bambangs.001220@schoolyte.ac.id', 'bambangs', 'Bambang Setiadi', 'Jalan Pemudi No 111', '087334462383', 1220, 'L', 'Mojokerto', '1976-01-01', 'Islam', 0, '1', 'guru1.jpg', NULL, '2023-01-02 09:29:53', '2023-01-02 09:29:53'),
(15, 'Mira.00202@schoolyte.ac.id', 'mira002', 'Mira', 'Jalan Halo No 123', '08766554588', 20222, 'P', 'Malang', '1980-01-01', 'Islam', 0, '1', 'guru1.jpg', NULL, '2023-01-02 13:00:07', '2023-01-02 13:01:30'),
(16, 'Gading.002013@schoolyte.ac.id', 'gading002', 'Gading', 'Jalan Kucing No 5', '085712111213', 2013, 'L', 'Malang', '1977-01-09', 'Islam', 0, '1', 'guru1.jpg', NULL, '2023-01-02 15:54:28', '2023-01-02 15:54:28'),
(17, 'Sri.00301@schoolyte.ac.id', 'sri003', 'Sri Asih', 'Bulak Banterng no. 190', '085721312213', 301, 'P', 'Kediri', '1967-04-09', 'Islam', 0, '1', 'guru1.jpg', NULL, '2023-01-02 15:59:41', '2023-01-02 15:59:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru_ekstrakulikuler`
--

CREATE TABLE `guru_ekstrakulikuler` (
  `ID_GURU_EKSTRA` int(11) NOT NULL,
  `ID_GURU_MAPEL` int(11) DEFAULT NULL,
  `ID_AKUN` int(11) DEFAULT NULL,
  `AKU_ID_AKUN` int(11) DEFAULT NULL,
  `BIDANG` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru_mapel`
--

CREATE TABLE `guru_mapel` (
  `ID_GURU_MAPEL` int(11) NOT NULL,
  `ID_AKUN` int(11) DEFAULT NULL,
  `TELP_GURU` varchar(15) DEFAULT NULL,
  `MATA_PELAJARAN` varchar(20) DEFAULT NULL,
  `NAMA_GURU` varchar(50) DEFAULT NULL,
  `NIP_GURU` varchar(15) DEFAULT NULL,
  `STATUS_GURU` varchar(15) DEFAULT NULL,
  `ALAMAT_GURU` text DEFAULT NULL,
  `JENIS_KELAMIN_GURU` varchar(15) DEFAULT NULL,
  `TEMPAT_LAHIR_GURU` varchar(30) DEFAULT NULL,
  `TGTL_LAHIR_GURU` date DEFAULT NULL,
  `FOTO_GURU` longblob DEFAULT NULL,
  `AGAMA_GURU` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_kelas`
--

CREATE TABLE `jadwal_kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kelas_id` bigint(20) UNSIGNED NOT NULL,
  `mapel_id` bigint(20) UNSIGNED NOT NULL,
  `guru_id` bigint(20) UNSIGNED NOT NULL,
  `hari` varchar(255) NOT NULL,
  `jam` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jadwal_kelas`
--

INSERT INTO `jadwal_kelas` (`id`, `kelas_id`, `mapel_id`, `guru_id`, `hari`, `jam`, `deleted_at`, `created_at`, `updated_at`) VALUES
(4, 12, 7, 14, 'Senin', '07.00 - 08.30', '2023-01-02 15:55:18', '2023-01-02 10:50:28', '2023-01-02 15:55:18'),
(5, 11, 8, 13, 'Senin', '8.30 - 10.00', '2023-01-02 15:55:16', '2023-01-02 12:42:21', '2023-01-02 15:55:16'),
(6, 12, 9, 15, 'Senin', '10.30 - 11.30', '2023-01-02 15:55:14', '2023-01-02 13:03:28', '2023-01-02 15:55:14'),
(7, 12, 7, 14, 'selasa', '07:00', NULL, '2023-01-02 15:44:35', '2023-01-02 15:44:35'),
(8, 12, 7, 14, 'senin', '09:00', NULL, '2023-01-02 15:44:35', '2023-01-02 15:44:35'),
(10, 12, 7, 14, 'Rabu', '10.30 - 11.30', '2023-01-02 15:51:30', '2023-01-02 15:48:52', '2023-01-02 15:51:30'),
(11, 12, 9, 15, 'Senin', '12:00 - 13:30', '2023-01-02 15:51:28', '2023-01-02 15:50:06', '2023-01-02 15:51:28'),
(12, 12, 9, 15, 'Jumat', '07:00', NULL, '2023-01-02 15:52:02', '2023-01-02 15:57:56'),
(13, 11, 10, 16, 'Senin', '09:00', '2023-01-02 15:57:38', '2023-01-02 15:55:05', '2023-01-02 15:57:38'),
(14, 12, 10, 16, 'kamis', '07:00', NULL, '2023-01-02 15:56:52', '2023-01-02 15:56:52'),
(15, 12, 11, 17, 'Senin', '11:00', NULL, '2023-01-02 16:00:26', '2023-01-02 16:00:39'),
(16, 12, 11, 17, 'Jumat', '07:00', NULL, '2023-01-02 16:01:00', '2023-01-02 16:01:00'),
(17, 12, 9, 15, 'Rabu', '07:00', NULL, '2023-01-02 16:02:08', '2023-01-02 16:03:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_kelas_guru`
--

CREATE TABLE `jadwal_kelas_guru` (
  `ID_JADWAL_GURU` int(11) NOT NULL,
  `ID_GURU_MAPEL` int(11) DEFAULT NULL,
  `JADWAL_GURU` varchar(15) DEFAULT NULL,
  `HARI_JADWAL_GURU` varchar(15) DEFAULT NULL,
  `WAKTU_AWAL_GURU` time DEFAULT NULL,
  `WAKTU_AKHIR_GURU` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_kelas_siswa`
--

CREATE TABLE `jadwal_kelas_siswa` (
  `ID_JADWAL_KELAS_SISWA` int(11) NOT NULL,
  `ID_GURU_MAPEL` int(11) DEFAULT NULL,
  `WAKTU_MULAI` time DEFAULT NULL,
  `WAKTU_BERAKHIR` time DEFAULT NULL,
  `HARI_PELAJARAN` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_mapels`
--

CREATE TABLE `jadwal_mapels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `guru_id` bigint(20) UNSIGNED NOT NULL,
  `kelas_id` bigint(20) UNSIGNED NOT NULL,
  `hari` varchar(255) NOT NULL,
  `jam` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jadwal_mapels`
--

INSERT INTO `jadwal_mapels` (`id`, `guru_id`, `kelas_id`, `hari`, `jam`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Senin', '07.00-8.20', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kartus`
--

CREATE TABLE `kartus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `siswa_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan_osis`
--

CREATE TABLE `kegiatan_osis` (
  `ID_KEGIATAN_OSIS` int(11) NOT NULL,
  `ID_OSIS` int(11) DEFAULT NULL,
  `ID_PEMBINA_OSIS` int(11) DEFAULT NULL,
  `NAMA_KEGIATAN` varchar(50) DEFAULT NULL,
  `DESKRIPSI_KEGIATAN` text DEFAULT NULL,
  `FOTO_KEGIATAN` longblob DEFAULT NULL,
  `TGL_PELAKSANAAN` date DEFAULT NULL,
  `TGL_AKHIR` date DEFAULT NULL,
  `STATUS_KEGIATAN` varchar(20) DEFAULT NULL,
  `DIVISI_PELAKSANA` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `guru_id` bigint(20) UNSIGNED NOT NULL,
  `nama_kelas` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `guru_id`, `nama_kelas`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, 'X IPA 1', '2023-01-02 10:21:42', NULL, '2023-01-02 10:21:42'),
(2, 3, 'XII-IPA 3', '2023-01-02 10:21:41', NULL, '2023-01-02 10:21:41'),
(3, 1, 'X IPA 2', '2023-01-02 10:21:40', NULL, '2023-01-02 10:21:40'),
(4, 4, 'X IPA 3', '2023-01-02 10:21:38', NULL, '2023-01-02 10:21:38'),
(5, 5, 'X IPS 1', '2023-01-02 10:21:36', NULL, '2023-01-02 10:21:36'),
(6, 6, 'X IPS 2', '2023-01-02 10:21:34', NULL, '2023-01-02 10:21:34'),
(7, 7, 'X IPS 3', '2023-01-02 10:21:32', NULL, '2023-01-02 10:21:32'),
(11, 8, 'X IPS 4', NULL, '2023-01-02 09:51:36', '2023-01-02 10:28:36'),
(12, 14, 'X IPA 4', NULL, '2023-01-02 10:27:45', '2023-01-02 10:31:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kepala_sekolah`
--

CREATE TABLE `kepala_sekolah` (
  `ID_KEPALA_SEKOLAH` int(11) NOT NULL,
  `ID_AKUN` int(11) DEFAULT NULL,
  `NAMA_KEPSEK` varchar(50) DEFAULT NULL,
  `TELP_KEPSEK` varchar(15) DEFAULT NULL,
  `NIP_KEPSEK` varchar(15) DEFAULT NULL,
  `ALAMAT_KEPSEK` text DEFAULT NULL,
  `TEMPAT_LAHIR_KEPSEK` varchar(30) DEFAULT NULL,
  `TGL_LAHIR_KEPSEK` date DEFAULT NULL,
  `FOTO_KEPSEK` longblob DEFAULT NULL,
  `STATUS_KEPSEK` varchar(15) DEFAULT NULL,
  `JENIS_KELAMIN_KEPSEK` varchar(10) DEFAULT NULL,
  `AGAMA_KEPSEK` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `koperasi`
--

CREATE TABLE `koperasi` (
  `ID_BARANG` int(11) NOT NULL,
  `ID_SISWA` int(11) DEFAULT NULL,
  `ID_PEMESANAN_KOPRASI` int(11) DEFAULT NULL,
  `NAMA_BARANG` varchar(100) DEFAULT NULL,
  `HARGA_BARANG` int(11) DEFAULT NULL,
  `FOTO_BARANG` longblob DEFAULT NULL,
  `KUANTITAS_BARANG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `koperasis`
--

CREATE TABLE `koperasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `koperasis`
--

INSERT INTO `koperasis` (`id`, `nama`, `stok`, `harga`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'bulpoin standart', 100, 2000, 'koperasi/item01.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_saldo`
--

CREATE TABLE `laporan_saldo` (
  `ID_LAPORAN_SALDO` int(11) NOT NULL,
  `ID_SALDO` int(11) DEFAULT NULL,
  `TRANSAKSI` int(11) DEFAULT NULL,
  `KETERANGAN_TRANSAKSI` varchar(15) DEFAULT NULL,
  `TUJUAN_TRANSAKSI` varchar(15) DEFAULT NULL,
  `TGL_TRANSAKSI` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapels`
--

CREATE TABLE `mapels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `guru_id` bigint(20) UNSIGNED NOT NULL,
  `mapel` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mapels`
--

INSERT INTO `mapels` (`id`, `guru_id`, `mapel`, `deleted_at`, `created_at`, `updated_at`) VALUES
(7, 2, 'Matematika Wajib', NULL, '2023-01-02 10:35:27', '2023-01-02 10:35:27'),
(8, 14, 'B. Inggris', NULL, '2023-01-02 10:35:49', '2023-01-02 10:35:49'),
(9, 15, 'Biologi', NULL, '2023-01-02 13:00:37', '2023-01-02 13:00:37'),
(10, 16, 'Kimia', NULL, '2023-01-02 15:54:44', '2023-01-02 15:54:44'),
(11, 17, 'B. Indonesia', NULL, '2023-01-02 16:00:02', '2023-01-02 16:00:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `ID_MENU` int(11) NOT NULL,
  `ID_PKA` int(11) DEFAULT NULL,
  `ID_STAND` int(11) DEFAULT NULL,
  `FOTO_MENU` longblob DEFAULT NULL,
  `NAMA_MAKANAN` varchar(20) DEFAULT NULL,
  `HARGA` int(11) DEFAULT NULL,
  `KATEGORI` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stand_id` bigint(20) UNSIGNED NOT NULL,
  `nama_menu` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `image` varchar(10000) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `menus`
--

INSERT INTO `menus` (`id`, `stand_id`, `nama_menu`, `harga`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(11, 6, 'Pecel 02 (Ayam)', 12000, 'pecel123.jpg', NULL, '2023-01-02 00:18:13', '2023-01-02 11:43:40'),
(12, 6, 'Pecel 01 (Telur)', 10000, 'peceltelur.jpg', NULL, '2023-01-02 12:00:20', '2023-01-02 12:01:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_12_20_191415_create_siswas_table', 1),
(652, '2022_12_27_152701_create_ekternals_table', 1),
(727, '2022_12_27_153353_create_administrasis_table', 2),
(1187, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(1188, '2022_12_20_191415_create_siswas_table', 3),
(1189, '2022_12_20_191644_create_fasilitas_table', 3),
(1190, '2022_12_20_191739_create_bukus_table', 3),
(1191, '2022_12_20_192521_create_absen_siswas_table', 3),
(1192, '2022_12_20_192719_create_stands_table', 3),
(1193, '2022_12_20_192855_create_menus_table', 3),
(1194, '2022_12_20_193044_create_beritas_table', 3),
(1195, '2022_12_20_193200_create_ekskuls_table', 3),
(1196, '2022_12_21_091707_create_kelas_table', 3),
(1197, '2022_12_21_184751_create_nilais_table', 3),
(1198, '2022_12_21_185720_create_mapels_table', 3),
(1199, '2022_12_21_194320_create_osis_table', 3),
(1200, '2022_12_21_194455_create_divisi_osis_table', 3),
(1201, '2022_12_21_194619_create_dokumentasi_osis_table', 3),
(1202, '2022_12_21_200133_create_siswa_barus_table', 3),
(1203, '2022_12_21_200247_create_prestasi_ekskuls_table', 3),
(1204, '2022_12_21_200312_create_gurus_table', 3),
(1205, '2022_12_21_201020_create_anggota_ekskuls_table', 3),
(1206, '2022_12_22_212117_create_proker_osis_table', 3),
(1208, '2022_12_22_222045_create_peminjaman_fasilitas_table', 3),
(1209, '2022_12_22_231958_create_kartus_table', 3),
(1210, '2022_12_27_153015_create_admins_table', 3),
(1211, '2022_12_27_153117_create_mutasikeluars_table', 3),
(1212, '2022_12_27_153148_create_jadwal_kelas_table', 3),
(1213, '2022_12_27_153208_create_jadwal_mapels_table', 3),
(1214, '2022_12_27_153228_create_absen_pegawais_table', 3),
(1215, '2022_12_27_153249_create_nilai_keterampilans_table', 3),
(1216, '2022_12_27_153316_create_koperasis_table', 3),
(1217, '2022_12_27_153335_create_pegawais_table', 3),
(1218, '2022_12_27_193514_create_eksternals_table', 3),
(1228, '2023_01_01_102135_create_topups_table', 4),
(1229, '2023_01_01_085017_create_pegawai_kantins_table', 5),
(1230, '2022_12_31_181432_create_pesanan_menus_table', 6),
(1231, '2022_12_31_123909_create_pesanans_table', 7),
(1232, '2022_12_29_203652_create_wali_siswas_table', 8),
(1233, '2022_12_27_211439_create_pembayaran_spps_table', 9),
(1234, '2022_12_27_211900_create_pembayaran_bukus_table', 9),
(1235, '2022_12_27_211938_create_pembayaran_seragams_table', 9),
(1236, '2022_12_29_011216_all', 9),
(1237, '2022_12_31_184655_create_pegawai_perpustakaans_table', 10),
(1238, '2023_01_01_043700_create_sumbang_bukus_table', 11),
(1239, '2022_12_22_220135_create_peminjaman_bukus_table', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mutasikeluar`
--

CREATE TABLE `mutasikeluar` (
  `ID_WALI_MURID` int(11) DEFAULT NULL,
  `ID_SISWA` int(12) DEFAULT NULL,
  `NAMA_MUTASI` varchar(50) DEFAULT NULL,
  `NISN_MUTASI` text DEFAULT NULL,
  `JENIS_KELAMIN_MUTASI` char(1) DEFAULT NULL,
  `TEMPAT_LAHIR_MUTASI` text DEFAULT NULL,
  `TANGGAL_LAHIR_MUTASI` date DEFAULT NULL,
  `AGAMA_MUTASI` text DEFAULT NULL,
  `NAMA_ORTU_MUTASI` varchar(50) DEFAULT NULL,
  `ALAMAT_LENGKAP_MUTASI` text DEFAULT NULL,
  `SEKOLAH_TUJUAN` varchar(50) DEFAULT NULL,
  `KELAS_MUTASI` text DEFAULT NULL,
  `EMAIL_MUTASI` varchar(30) DEFAULT NULL,
  `SUKET_PINDAH_MUTASI` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mutasikeluar`
--

INSERT INTO `mutasikeluar` (`ID_WALI_MURID`, `ID_SISWA`, `NAMA_MUTASI`, `NISN_MUTASI`, `JENIS_KELAMIN_MUTASI`, `TEMPAT_LAHIR_MUTASI`, `TANGGAL_LAHIR_MUTASI`, `AGAMA_MUTASI`, `NAMA_ORTU_MUTASI`, `ALAMAT_LENGKAP_MUTASI`, `SEKOLAH_TUJUAN`, `KELAS_MUTASI`, `EMAIL_MUTASI`, `SUKET_PINDAH_MUTASI`) VALUES
(NULL, NULL, 'asdasdas', '213123123', '1', '3333-03-12', NULL, 'dasdas', 'asdasd', 'asdas', 'dasd', 'asdas', 'asdasd@gmail.com', 0x4c41594f555420474544554e47205432204642532e706466),
(NULL, NULL, 'asdasda', '12312312', '1', '1233-03-12', NULL, 'aasdasd', 'asdasda', 'asdasdasd', 'asdasd', 'asdasd', 'asdasd@gmail.com', 0x4c41594f555420474544554e47205432204642532e706466);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mutasikeluars`
--

CREATE TABLE `mutasikeluars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `siswa_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nisn` int(11) NOT NULL,
  `jenis_kelamin` char(2) NOT NULL,
  `ttl` varchar(255) NOT NULL,
  `orangtua` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `sekolah_tujuan` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mutasimasuk`
--

CREATE TABLE `mutasimasuk` (
  `ID_MUTASI` int(11) DEFAULT NULL,
  `ID_WALI_MURID` int(11) DEFAULT NULL,
  `ID_SISWA` int(11) DEFAULT NULL,
  `NAMA_MUTASI` varchar(50) DEFAULT NULL,
  `NISN_MUTASI` int(10) DEFAULT NULL,
  `JENIS_KELAMIN_MUTASI` char(10) DEFAULT NULL,
  `TEMPAT_LAHIR_MUTASI` varchar(20) DEFAULT NULL,
  `TANGGAL_LAHIR_MUTASI` date DEFAULT NULL,
  `NAMA_ORANGTUA_MUTASI` varchar(50) DEFAULT NULL,
  `ALAMAT_LENGKAP_MUTASI` text DEFAULT NULL,
  `ASAL_SEKOLAH_MUTASI` varchar(50) DEFAULT NULL,
  `EMAIL_MUTASI` varchar(30) DEFAULT NULL,
  `SUKETP_MUTASI` longblob DEFAULT NULL,
  `SUREKP_MUTASI` longblob NOT NULL,
  `RAPOR_MUTASI` longblob NOT NULL,
  `IJAZAH_MUTASI` longblob NOT NULL,
  `AKTE_MUTASI` longblob NOT NULL,
  `KK_MUTASI` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mutasimasuk`
--

INSERT INTO `mutasimasuk` (`ID_MUTASI`, `ID_WALI_MURID`, `ID_SISWA`, `NAMA_MUTASI`, `NISN_MUTASI`, `JENIS_KELAMIN_MUTASI`, `TEMPAT_LAHIR_MUTASI`, `TANGGAL_LAHIR_MUTASI`, `NAMA_ORANGTUA_MUTASI`, `ALAMAT_LENGKAP_MUTASI`, `ASAL_SEKOLAH_MUTASI`, `EMAIL_MUTASI`, `SUKETP_MUTASI`, `SUREKP_MUTASI`, `RAPOR_MUTASI`, `IJAZAH_MUTASI`, `AKTE_MUTASI`, `KK_MUTASI`) VALUES
(30, NULL, NULL, 'Halo', 1234567891, '1', 'asdasdasd', '2022-12-21', 'Halo', 'asdasd', 'asdasdasdasd', 'asdasdasd', 0x4e4f54554c454e53492052415041542050455253494150414e204e4154414c20283135204445532032303232292e706466, 0x4e4f54554c454e53492052415041542050455253494150414e204e4154414c20283135204445532032303232292e706466, 0x446972696b752c205065726b756c696168616e6b752c2064616e2050656c6179616e616e6b75202d20476f6f676c6520466f726d732e706466, 0x424148414e205041204245535354202d204d454d42414e47554e2053495354454d204e494c41492059414e47204b454b414c202831292e706466, 0x4b656c6f6d706f6b2031325f54756761732050656d62756174616e20554d4c202831292e706466, 0x4b656c6f6d706f6b2031325f54756761732050656d62756174616e20554d4c2e706466),
(31, NULL, NULL, 'Bambang Setiadi', 11308, '1', 'Surabaya', '2002-01-01', 'Sari', 'Jalan Kol Sugiono 20, Salatiga', 'SMAN 99 Madiun', 'Halo@gmail.com', 0x4c41594f555420474544554e47205432204642532e706466, 0x4c41594f555420474544554e47205432204642532e706466, 0x4c41594f555420474544554e47205432204642532e706466, 0x4c41594f555420474544554e47205432204642532e706466, 0x4c41594f555420474544554e47205432204642532e706466, 0x4c41594f555420474544554e47205432204642532e706466),
(NULL, NULL, NULL, 'asdasdasd', 21312312, '1', 'asdasdasd', '1231-03-12', 'asdsadasd', 'asdasdasd', 'asdasda', 'asdasd@gmail.com', 0x5350544a4d5f446172656c6c2054696d6f74697573205375686172746f6e6f5f5331205349203230412e706466, 0x5349414b41445f205472616e736b726970204d616861736973776120446172656c6c283129202831292e706466, 0x4b656c6f6d706f6b20345f4c61706f72616e2050656e6a75616c616e2020424f4241494e2e706466, 0x5349414b41445f205472616e736b726970204d616861736973776120446172656c6c2831292e706466, 0x5349414b41445f205472616e736b726970204d616861736973776120446172656c6c283129202831292e706466, 0x5349414b41445f205472616e736b726970204d616861736973776120446172656c6c2831292e706466);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilais`
--

CREATE TABLE `nilais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `siswa_id` bigint(20) UNSIGNED DEFAULT NULL,
  `mapel_id` bigint(20) UNSIGNED NOT NULL,
  `kelas_id` bigint(20) UNSIGNED NOT NULL,
  `tugas1` int(11) NOT NULL,
  `tugas2` int(11) NOT NULL,
  `tugas3` int(11) NOT NULL,
  `uts` int(11) NOT NULL,
  `uas` int(11) NOT NULL,
  `rata2` int(11) NOT NULL,
  `semester` int(10) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `nilais`
--

INSERT INTO `nilais` (`id`, `siswa_id`, `mapel_id`, `kelas_id`, `tugas1`, `tugas2`, `tugas3`, `uts`, `uas`, `rata2`, `semester`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 13, 7, 12, 90, 89, 88, 78, 99, 0, 1, NULL, '2023-01-02 13:12:21', '2023-01-02 13:13:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_keterampilan`
--

CREATE TABLE `nilai_keterampilan` (
  `ID_KETERAMPILAN` int(11) NOT NULL,
  `ID_SISWA` int(11) DEFAULT NULL,
  `ID_GURU_MAPEL` int(11) DEFAULT NULL,
  `TUGAS_KETERAMPILAN_1` int(11) DEFAULT NULL,
  `TUGAS_KETERAMPILAN_2` int(11) DEFAULT NULL,
  `TUGAS_KETERAMPILAN_3` int(11) DEFAULT NULL,
  `PRAKTIKUM_1` int(11) DEFAULT NULL,
  `PRAKTIKUM_2` int(11) DEFAULT NULL,
  `RATA_KETERAMPILAN` int(11) DEFAULT NULL,
  `MATA_PELAJARAN_KETERAMPILAN` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_keterampilans`
--

CREATE TABLE `nilai_keterampilans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `siswa_id` bigint(20) UNSIGNED NOT NULL,
  `mapel_id` bigint(20) UNSIGNED NOT NULL,
  `kelas_id` bigint(20) UNSIGNED NOT NULL,
  `tugas1` int(11) NOT NULL,
  `tugas2` int(11) NOT NULL,
  `tugas3` int(11) NOT NULL,
  `praktikum1` int(11) NOT NULL,
  `praktikum2` int(11) NOT NULL,
  `rata2` int(11) NOT NULL,
  `semester` int(5) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `nilai_keterampilans`
--

INSERT INTO `nilai_keterampilans` (`id`, `siswa_id`, `mapel_id`, `kelas_id`, `tugas1`, `tugas2`, `tugas3`, `praktikum1`, `praktikum2`, `rata2`, `semester`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 13, 7, 12, 88, 87, 89, 89, 97, 0, 1, NULL, '2023-01-02 13:12:21', '2023-01-02 13:13:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_pengetahuan`
--

CREATE TABLE `nilai_pengetahuan` (
  `ID_NILAI_BELAJAR` int(11) NOT NULL,
  `ID_GURU_MAPEL` int(11) DEFAULT NULL,
  `ID_SISWA` int(11) DEFAULT NULL,
  `MATA_PELAJARAN` varchar(20) DEFAULT NULL,
  `TUGAS_1` int(11) DEFAULT NULL,
  `TUGAS_2` int(11) DEFAULT NULL,
  `TUGAS_3` int(11) DEFAULT NULL,
  `UTS` int(11) DEFAULT NULL,
  `UAS` int(11) DEFAULT NULL,
  `RATA_RATA` int(11) DEFAULT NULL,
  `INDEKS_PENILAIAN` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `osis`
--

CREATE TABLE `osis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `siswa_id` bigint(20) UNSIGNED NOT NULL,
  `divisi_osis_id` bigint(20) UNSIGNED NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `osis`
--

INSERT INTO `osis` (`id`, `siswa_id`, `divisi_osis_id`, `jabatan`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Ketua Osis', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawais`
--

CREATE TABLE `pegawais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `tlpn` varchar(15) NOT NULL,
  `jenis_kelamin` char(2) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `tgl_lahir` varchar(255) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `saldo` int(11) NOT NULL,
  `status` char(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pegawais`
--

INSERT INTO `pegawais` (`id`, `email`, `pass`, `nama`, `alamat`, `tlpn`, `jenis_kelamin`, `tempat_lahir`, `nik`, `tgl_lahir`, `agama`, `saldo`, `status`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'burhanuddin.001301@schoolyte.ac.id', 'burhans', 'Burhanuddin Asrori', 'Kemantren, Tulangan, Sidoarjo', '78956543', 'L', 'Ngawi', '3515041407910001', '14 Juli 1991', 'ISLAM', 20000, 'Pegawai Perpustakaan', 'pegawai/1672184028.png', NULL, NULL, NULL),
(2, 'ansori.001302@schoolyte.ac.id', 'ansors', 'Ansori', 'Driyorejo Selatan, Gresik', '87896254', 'L', 'Surabaya', '3415611908860002', '19 Agustus 1986', 'Islam', 90000, 'Pegawai Koperasi', 'pegawai/1672184040.png', NULL, NULL, NULL),
(3, 'suprapti.001303@schoolyte.ac.id', 'supraps', 'Suprapti', 'Ketintang Timur, Surabaya', '89745456', 'P', 'Pamekasan', '3652411006750005', '10 Juni 1975', 'Islam', 150000, 'Pegawai Kantin', 'pegawai/1672462797.jpg', NULL, NULL, NULL),
(4, 'sunyono.001304@schoolyte.ac.id', 'sunyos', 'Sunyono Tejo', 'Waru, Sidoarjo', '089745987451', 'L', 'Solo', '3854121101720002', '11 Januari 1972', 'Islam', 300000, 'Pegawai Kantin', 'pegawai/1672464307.jpg', NULL, NULL, NULL),
(5, 'faila.001204@schoolyte.ac.id', 'failas', 'Faila', 'Surabaya, Jawa Timur', '08948723460', 'P', 'Batu', '353281018304', '19 April 1972', 'Islam', 30000, 'Pegawai Kantin', 'pegawai/1672464813.png', NULL, NULL, NULL),
(6, 'pegawai@example.com', 'password', 'Pegawai 1', 'Jl. pegawai', '123123123', 'L', 'Jakarta', '123123123', '2000-01-01', 'Islam', 0, 'aktif', '', NULL, '2023-01-01 23:54:12', '2023-01-01 23:54:12'),
(9, 'Sriasih@schoolyte.ac.id', 'sriasih', 'TU - Sri Asih', 'Jalan Halo No 123', '08637263738', 'P', 'Jakarta', NULL, '05 September 2001', 'Islam', 0, 'aktif', '', NULL, '2023-01-02 08:48:46', '2023-01-02 08:48:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai_kantin`
--

CREATE TABLE `pegawai_kantin` (
  `ID_PKA` int(11) NOT NULL,
  `ID_AKUN` int(11) DEFAULT NULL,
  `ID_MENU` int(11) DEFAULT NULL,
  `NAMA_PKA` varchar(50) DEFAULT NULL,
  `ALAMAT_PKA` text DEFAULT NULL,
  `TELP_PKA` varchar(15) DEFAULT NULL,
  `TEMPAT_LAHIR_PKA` varchar(30) DEFAULT NULL,
  `TGL_LAHIR_PKA` date DEFAULT NULL,
  `FOTO_PKA` longblob DEFAULT NULL,
  `STATUS_PKA` varchar(15) DEFAULT NULL,
  `AGAMA_PKA` varchar(10) DEFAULT NULL,
  `JENIS_KELAMIN_PKA` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai_kantins`
--

CREATE TABLE `pegawai_kantins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `tlpn` varchar(255) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` varchar(255) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `saldo` int(11) NOT NULL,
  `status` char(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pegawai_kantins`
--

INSERT INTO `pegawai_kantins` (`id`, `email`, `pass`, `nama`, `alamat`, `tlpn`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `agama`, `saldo`, `status`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Pegawaipecel@schoolyte.ac.id', 'pecel01', 'Pegawai Pecel 01', 'Jalan Kucing No 5', '083776654321', 'L', 'Surabaya', '03 September 1997', 'Islam', 0, 'aktif', '', NULL, '2023-01-02 08:31:55', '2023-01-02 08:32:09'),
(3, 'pegawaiayambakar@schoolyte.ac.id', 'ayambakar', 'Pegawai Ayam Bakar', 'Jalan Asia Amerika No 67', '089776653728', 'L', 'Sidoarjo', '02 Agustus 2000', 'Islam', 0, 'aktif', '', NULL, '2023-01-02 08:36:46', '2023-01-02 08:36:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai_koperasi`
--

CREATE TABLE `pegawai_koperasi` (
  `ID_PEGAWAI_KOPERASI` int(11) NOT NULL,
  `ID_BARANG` int(11) DEFAULT NULL,
  `ID_AKUN` int(11) DEFAULT NULL,
  `NAMA_PEGAWAI_KOPERASI` varchar(50) DEFAULT NULL,
  `ALAMAT_PEGAWAI_KOPERASI` text DEFAULT NULL,
  `TELP_PEGAWAI_KOPERASI` varchar(15) DEFAULT NULL,
  `JENIS_KELAMIN_PEGAWAI_KOPERASI` varchar(15) DEFAULT NULL,
  `STATUS_PEGAWAI_KOPERASI` varchar(15) DEFAULT NULL,
  `FOTO_PEGAWAI_KOPERASI` longblob DEFAULT NULL,
  `AGAMA_PEGAWAI_KOPERASI` varchar(10) DEFAULT NULL,
  `TEMPAT_LAHIR_PKO` varchar(30) DEFAULT NULL,
  `TGL_LAHIR_PKO` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai_perpustakaan`
--

CREATE TABLE `pegawai_perpustakaan` (
  `ID_PERPUS` int(11) NOT NULL,
  `ID_AKUN` int(11) DEFAULT NULL,
  `NAMA_PERPUS` varchar(50) DEFAULT NULL,
  `ALAMAT_PERPUS` varchar(200) DEFAULT NULL,
  `TELP_PERPUS` varchar(15) DEFAULT NULL,
  `FOTO` longblob DEFAULT NULL,
  `TEMPAT_LAHIR` varchar(20) DEFAULT NULL,
  `TGL_LAHIR` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai_perpustakaans`
--

CREATE TABLE `pegawai_perpustakaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `tlpn` int(11) NOT NULL,
  `jenis_kelamin` char(2) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` varchar(255) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `saldo` int(11) NOT NULL,
  `status` char(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pegawai_perpustakaans`
--

INSERT INTO `pegawai_perpustakaans` (`id`, `created_at`, `updated_at`, `email`, `pass`, `nama`, `alamat`, `tlpn`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `agama`, `saldo`, `status`, `image`) VALUES
(1, '2023-01-02 16:44:21', '2023-01-02 16:44:21', 'perpus@example.com', 'password', 'Pegawai Perpustakaan 1', 'Jl. Aweawe No. 1', 12312313, 'L', 'Jakarta', '2000-01-01', 'Islam', 0, '1', 'guru1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai_tu`
--

CREATE TABLE `pegawai_tu` (
  `ID_TU` int(11) NOT NULL,
  `ID_AKUN` int(11) DEFAULT NULL,
  `ID_PEMINJAMAN_FASILITAS` int(11) DEFAULT NULL,
  `NAMA_TU` varchar(50) DEFAULT NULL,
  `ALAMAT_TU` text DEFAULT NULL,
  `TELP_TU` varchar(15) DEFAULT NULL,
  `NIP_TU` varchar(20) DEFAULT NULL,
  `TEMPAT_LAHIR_TU` varchar(20) DEFAULT NULL,
  `TGL_LAHIR_TU` date DEFAULT NULL,
  `FOTO_TU` longblob DEFAULT NULL,
  `STATUS_TU` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `ID_PEMBAYARAN` int(11) NOT NULL,
  `ID_SALDO` int(11) DEFAULT NULL,
  `TGL_PEMBAYARAN` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran_buku`
--

CREATE TABLE `pembayaran_buku` (
  `ID_PEMBAYARANBUKU` int(11) NOT NULL,
  `ID_SALDO` int(11) DEFAULT NULL,
  `BULAN_BAYARBUKU` varchar(10) DEFAULT NULL,
  `NOMINAL_BAYARBUKU` int(11) DEFAULT NULL,
  `STATUS_BAYAR_BUKU` varchar(15) DEFAULT NULL,
  `TGL_BAYARBUKU` date DEFAULT NULL,
  `SEMESTER_BAYARBUKU` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran_bukus`
--

CREATE TABLE `pembayaran_bukus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `siswa_id` bigint(20) UNSIGNED NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `nominal` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `tgl_pembayaran` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran_seragam`
--

CREATE TABLE `pembayaran_seragam` (
  `ID_SERAGAM` int(11) NOT NULL,
  `ID_SALDO` int(11) DEFAULT NULL,
  `BULAN_SERAGAM` varchar(10) DEFAULT NULL,
  `NOMINAL_SERAGAM` int(11) DEFAULT NULL,
  `STATUS_SERAGAM` varchar(15) DEFAULT NULL,
  `TGL_SERAGAM` date DEFAULT NULL,
  `SEMESTER_SERAGAM` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran_seragams`
--

CREATE TABLE `pembayaran_seragams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `siswa_id` bigint(20) UNSIGNED NOT NULL,
  `nominal` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `tgl_pembayaran` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran_spp`
--

CREATE TABLE `pembayaran_spp` (
  `ID_PEMBAYARANSPP` int(11) NOT NULL,
  `ID_SALDO` int(11) DEFAULT NULL,
  `BULAN_SPP` varchar(10) DEFAULT NULL,
  `NOMINAL_SPP` int(11) DEFAULT NULL,
  `STATUS_SPP` varchar(15) DEFAULT NULL,
  `TGL_BAYARSPP` date DEFAULT NULL,
  `SEMESTER_SPP` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran_spps`
--

CREATE TABLE `pembayaran_spps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `siswa_id` bigint(20) UNSIGNED NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `nominal` int(11) NOT NULL,
  `bulan` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `tgl_pembayaran` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembina_osis`
--

CREATE TABLE `pembina_osis` (
  `ID_PEMBINA_OSIS` int(11) NOT NULL,
  `ID_GURU_MAPEL` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan_kantin`
--

CREATE TABLE `pemesanan_kantin` (
  `id_pemesanankantin` int(11) NOT NULL,
  `siswa_id` bigint(11) UNSIGNED NOT NULL,
  `menu_id` bigint(11) UNSIGNED NOT NULL,
  `saldo_id` bigint(20) UNSIGNED NOT NULL,
  `nomor_pesanan` varchar(255) NOT NULL,
  `waktu_pesan` varchar(255) NOT NULL,
  `item_pesanan` text NOT NULL,
  `catatan_pesanan` text NOT NULL,
  `total_pesanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan_koprasi`
--

CREATE TABLE `pemesanan_koprasi` (
  `ID_PEMESANAN_KOPRASI` int(11) NOT NULL,
  `ID_SISWA` int(11) DEFAULT NULL,
  `ID_BARANG` int(11) DEFAULT NULL,
  `ID_SALDO` int(11) DEFAULT NULL,
  `NO_PESANAN` int(11) DEFAULT NULL,
  `WAKTU_PESAN` date DEFAULT NULL,
  `ITEM_PESANAN` text DEFAULT NULL,
  `TOTAL_PEMBAYARAN` int(11) DEFAULT NULL,
  `CATATAN_PESANAN` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman_buku`
--

CREATE TABLE `peminjaman_buku` (
  `ID_PEMINJAMAN_` int(11) NOT NULL,
  `ID_SISWA` int(11) DEFAULT NULL,
  `ID_SANKSI` int(11) DEFAULT NULL,
  `ID_PERPUS` int(11) DEFAULT NULL,
  `TGL_PINJAM` date DEFAULT NULL,
  `WAKTU_PINJAM` time DEFAULT NULL,
  `TGL_PENGEMBALIAN` date DEFAULT NULL,
  `WAKTU_PENGEMBALIAN` time DEFAULT NULL,
  `JUMLAH` int(11) DEFAULT NULL,
  `STATUS_PINJAM` varchar(20) DEFAULT NULL,
  `DENDA` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman_bukus`
--

CREATE TABLE `peminjaman_bukus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `siswa_id` bigint(20) UNSIGNED NOT NULL,
  `buku_id` bigint(20) UNSIGNED NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `telat` int(11) NOT NULL DEFAULT 0,
  `sanksi` int(11) NOT NULL DEFAULT 0,
  `pengembalian` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman_fasilitas`
--

CREATE TABLE `peminjaman_fasilitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `siswa_id` bigint(20) UNSIGNED NOT NULL,
  `fasilitas_id` bigint(20) UNSIGNED NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `mulai` time NOT NULL,
  `berakhir` time NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `ID_WALI_MURID` int(11) DEFAULT NULL,
  `ID_SISWA` int(11) DEFAULT NULL,
  `NAMA_PENDAFTAR` varchar(50) DEFAULT NULL,
  `NISN_PENDAFTAR` int(11) DEFAULT NULL,
  `JENIS_KELAMIN_PENDAFTAR` char(10) DEFAULT NULL,
  `TEMPAT_LAHIR_PENDAFTAR` varchar(20) DEFAULT NULL,
  `TANGGAL_LAHIR_PENDAFTAR` date DEFAULT NULL,
  `AGAMA_PENDAFTAR` varchar(20) DEFAULT NULL,
  `NAMA_ORTU_PENDAFTAR` varchar(50) DEFAULT NULL,
  `ALAMAT_LENGKAP_PENDAFTAR` text DEFAULT NULL,
  `EMAIL_PENDAFTAR` varchar(30) DEFAULT NULL,
  `IJAZAH_SMP_PENDAFTAR` longblob DEFAULT NULL,
  `AKTE_PENDAFTAR` longblob DEFAULT NULL,
  `KK_PENDAFTAR` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`ID_WALI_MURID`, `ID_SISWA`, `NAMA_PENDAFTAR`, `NISN_PENDAFTAR`, `JENIS_KELAMIN_PENDAFTAR`, `TEMPAT_LAHIR_PENDAFTAR`, `TANGGAL_LAHIR_PENDAFTAR`, `AGAMA_PENDAFTAR`, `NAMA_ORTU_PENDAFTAR`, `ALAMAT_LENGKAP_PENDAFTAR`, `EMAIL_PENDAFTAR`, `IJAZAH_SMP_PENDAFTAR`, `AKTE_PENDAFTAR`, `KK_PENDAFTAR`) VALUES
(NULL, NULL, 'qweqwe', 123123123, '1', 'asdasdasd', '2333-03-12', 'asdasdasd', 'asdasdasdasd', 'asdasdas', 'asdasd@gmail.com', 0x4c41594f555420474544554e47205432204642532e706466, 0x4c41594f555420474544554e47205432204642532e706466, 0x4c41594f555420474544554e47205432204642532e706466);

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanans`
--

CREATE TABLE `pesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `siswa_id` bigint(20) UNSIGNED DEFAULT NULL,
  `guru_id` bigint(20) UNSIGNED DEFAULT NULL,
  `total_harga` int(11) NOT NULL,
  `catatan` text DEFAULT NULL,
  `status` enum('pending','dikonfirmasi','selesai') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pesanans`
--

INSERT INTO `pesanans` (`id`, `stand_id`, `siswa_id`, `guru_id`, `total_harga`, `catatan`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, 13, NULL, 10, NULL, 'selesai', '2023-01-02 11:36:04', '2023-01-02 11:49:56'),
(2, 6, 13, NULL, 12000, NULL, 'selesai', '2023-01-02 11:44:37', '2023-01-02 11:50:02'),
(3, 6, NULL, 13, 10000, NULL, 'pending', '2023-01-02 12:14:24', '2023-01-02 12:14:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan_menus`
--

CREATE TABLE `pesanan_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pesanan_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pesanan_menus`
--

INSERT INTO `pesanan_menus` (`id`, `pesanan_id`, `menu_id`, `qty`, `harga`, `created_at`, `updated_at`) VALUES
(1, 1, 11, 1, 10, '2023-01-02 11:36:04', '2023-01-02 11:36:04'),
(2, 2, 11, 1, 12000, '2023-01-02 11:44:37', '2023-01-02 11:44:37'),
(3, 3, 12, 1, 10000, '2023-01-02 12:14:24', '2023-01-02 12:14:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan_kantins`
--

CREATE TABLE `pesan_kantins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `stand_id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `no_pemesanan` varchar(255) NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `total` int(11) NOT NULL,
  `nama_pemesanan` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan_koprasis`
--

CREATE TABLE `pesan_koprasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `koprasi_id` bigint(20) UNSIGNED NOT NULL,
  `no_pemesanan` varchar(255) NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `total` int(11) NOT NULL,
  `nama_pemesanan` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pesan_koprasis`
--

INSERT INTO `pesan_koprasis` (`id`, `user_id`, `koprasi_id`, `no_pemesanan`, `tgl_pemesanan`, `jumlah`, `status`, `total`, `nama_pemesanan`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'sd221', '2022-12-09', 0, 'sadsa', 50000, 'asdasd', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi_ekskuls`
--

CREATE TABLE `prestasi_ekskuls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ekskul_id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `proker_osis`
--

CREATE TABLE `proker_osis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `divisi_osis_id` bigint(20) UNSIGNED NOT NULL,
  `proker` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `selesai_kantins`
--

CREATE TABLE `selesai_kantins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `stand_id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `no_pemesanan` varchar(255) NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `total` int(11) NOT NULL,
  `nama_pemesanan` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswas`
--

CREATE TABLE `siswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kelas_id` bigint(20) UNSIGNED NOT NULL,
  `eksternal_id` bigint(20) UNSIGNED DEFAULT 4,
  `email` varchar(50) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_absen` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tlpn` varchar(255) NOT NULL,
  `nis` int(11) NOT NULL,
  `jenis_kelamin` char(2) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` varchar(255) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `saldo` int(11) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `status` char(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `siswas`
--

INSERT INTO `siswas` (`id`, `kelas_id`, `eksternal_id`, `email`, `pass`, `nama`, `no_absen`, `alamat`, `tlpn`, `nis`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `agama`, `saldo`, `semester`, `status`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'julian.220101@schoolyte.ac.id', 'julian01', 'Julian Hartono', 1, 'ketintang jaya 19 A', '081234567809', 220102, 'L', 'Surabaya', '20 Agustus 2001', 'Islam', 76000, 'Ganjil 2022/2023', 'Osis', 'siswa/1672230833.png', '2023-01-02 10:39:06', NULL, '2023-01-02 10:39:06'),
(2, 1, 3, 'leo.220102@schoolyte.ac.id', 'leonardo02', 'Leonardo de Caprio', 2, 'ketintang baru 19 C', '081234567812', 220102, 'L', 'Surabaya', '20 Agustus 2001', 'Islam', 100000000, 'Ganjil 2022/2023', 'Siswa', 'siswa/1672233222.png', '2023-01-02 10:39:08', NULL, '2023-01-02 10:39:08'),
(3, 1, 1, 'sadewa.220103@schoolyte.ac.id', 'sadewaa', 'Ahmad Sadewa', 3, 'Nginden mejoyo 03', '08155055835', 220103, 'L', 'Makkah', '09 Juni 2001', 'Islam', 15000, 'Ganjil 2022/2023', 'Osis', 'siswa/1672432597.jpg', '2023-01-02 10:39:10', NULL, '2023-01-02 10:39:10'),
(5, 1, 3, 'leos.220102@schoolyte.ac.id', 'leo02', 'Leonardo de Caprio', 2, 'ketintang baru 19 C', '081234567812', 220102, 'L', 'Surabaya', '20 Agustus 2001', 'Islam', 100000000, 'Ganjil 2022/2023', 'Siswa', 'siswa/1672433614.png', '2023-01-02 10:39:12', NULL, '2023-01-02 10:39:12'),
(8, 12, 4, 'siswa@example.com', 'password', 'Siswa 1', 10, 'Jl. Siswa', '123123123', 123123123, 'L', 'Jakarta', '2000-01-01', 'Islam', 0, '1', 'aktif', '', NULL, '2023-01-01 23:46:13', '2023-01-02 09:21:22'),
(13, 12, 4, 'joy220401@schoolyte.ac.id', 'password', 'Joy', 1, 'Jl. Siswa 2', '0823776663532', 220401, 'P', 'Jakarta', '2005-01-01', 'Islam', 187990, '1', 'aktif', '', NULL, '2023-01-02 10:45:50', '2023-01-02 11:44:37'),
(22, 12, 4, 'Beni.220403', 'beni220', 'Beni', 3, 'Jalan Pemuda No 111', '08637263738', 220403, 'L', 'Lamongan', '05 September 2005', 'Islam', 0, '1', 'aktif', '', NULL, '2023-01-02 16:31:16', '2023-01-02 16:31:16'),
(23, 11, 4, 'Manda.220201', 'manda2202', 'Manda', 2, 'Jalan Kucing merah No 5', '08765563722', 220201, 'P', 'Sidoarjo', '03 September 2005', 'Islam', 0, '1', 'aktif', '', NULL, '2023-01-02 16:33:09', '2023-01-02 16:33:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa_absens`
--

CREATE TABLE `siswa_absens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `siswa_id` bigint(20) UNSIGNED NOT NULL,
  `kelas_id` bigint(20) UNSIGNED NOT NULL,
  `status_absen` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `tgl_absen` date NOT NULL,
  `wkt_absen` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `siswa_absens`
--

INSERT INTO `siswa_absens` (`id`, `siswa_id`, `kelas_id`, `status_absen`, `image`, `tgl_absen`, `wkt_absen`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '1', 'SiswaAbsen/1672342396.png', '2023-01-02', '1672331693', NULL, NULL, NULL),
(2, 1, 1, 'Izin', 'SiswaAbsen/1672374904.png', '2022-12-30', '11:30', NULL, NULL, NULL),
(3, 1, 1, '1', 'SiswaAbsen/1672375172.png', '2023-01-02', '1672331693', NULL, NULL, NULL),
(4, 1, 1, 'Sakit', 'SiswaAbsen/1672374904.png', '2022-12-30', '14:53', NULL, NULL, NULL),
(5, 1, 1, 'Izin', 'SiswaAbsen/1672374904.png', '2022-12-30', '14:57', NULL, NULL, NULL),
(6, 1, 1, 'Sakit', 'SiswaAbsen/1672374904.png', '2022-12-30', '19:28', NULL, NULL, NULL),
(7, 1, 1, 'Hadir', 'SiswaAbsen/1672404362.png', '2022-12-26', '06:00', NULL, NULL, NULL),
(8, 5, 2, 'Hadir', 'SiswaAbsen/1672463689.jpg', '2022-12-30', '06:47', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa_barus`
--

CREATE TABLE `siswa_barus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stands`
--

CREATE TABLE `stands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_stand` varchar(255) NOT NULL,
  `jenis_stand` varchar(255) NOT NULL,
  `kode_stand` int(11) NOT NULL,
  `barcode_stand` varchar(255) NOT NULL,
  `p_kantin_id` varchar(10) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `saldo` int(20) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `stands`
--

INSERT INTO `stands` (`id`, `nama_stand`, `jenis_stand`, `kode_stand`, `barcode_stand`, `p_kantin_id`, `image`, `saldo`, `deleted_at`, `created_at`, `updated_at`) VALUES
(6, 'Pecel 01', 'Makanan', 1, 'abc', '1', 'https://rasabunda.com/wp-content/uploads/2021/05/Pecel-Sayur.jpg', 0, NULL, '2023-01-02 00:15:11', '2023-01-02 12:04:41'),
(8, 'Ayam Bakar Ku', 'Makanan', 2, '', '3', 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fi0.wp.com%2Frasabunda.com%2Fwp-content%2Fuploads%2F2021%2F12%2FAyam-Bakar-Madu.jpg%3Ffit%3D400%252C535%26ssl%3D1&imgrefurl=https%3A%2F%2Frasabunda.com%2Fresep%2Fresep-ayam-bakar-madu%2F&tbnid=8R6_BUPRmuGWKM&vet=12ahUKEwjjoPHTm6n8AhX-g2MGHQgpB74QMygDegUIARDgAQ..i&docid=qkuJGlPdflUP2M&w=400&h=535&q=ayam%20bakar&ved=2ahUKEwjjoPHTm6n8AhX-g2MGHQgpB74QMygDegUIARDgAQ', 0, NULL, '2023-01-02 08:39:05', '2023-01-02 08:39:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sumbang_buku`
--

CREATE TABLE `sumbang_buku` (
  `sumbangbuku_id` bigint(20) UNSIGNED NOT NULL,
  `siswa_id` bigint(20) UNSIGNED NOT NULL,
  `nama_buku` varchar(255) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `penulis_buku` varchar(255) NOT NULL,
  `kategori_buku` varchar(255) NOT NULL,
  `rincian_buku` text NOT NULL,
  `jumlah_buku` int(11) NOT NULL,
  `foto_buku` varchar(255) NOT NULL,
  `status_buku` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `sumbang_buku`
--

INSERT INTO `sumbang_buku` (`sumbangbuku_id`, `siswa_id`, `nama_buku`, `tahun_terbit`, `penulis_buku`, `kategori_buku`, `rincian_buku`, `jumlah_buku`, `foto_buku`, `status_buku`) VALUES
(1, 1, 'ILMU ALAM MATEMATIKA', 2013, 'Drs. Sujatmiko', 'non-fiksi', 'menjelaskan tentang mtk', 3, 'fotobuku.jpeg', 'ada');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sumbang_bukus`
--

CREATE TABLE `sumbang_bukus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `siswa_id` bigint(20) UNSIGNED NOT NULL,
  `nama_buku` varchar(255) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `nama_penulis` varchar(255) NOT NULL,
  `rincian_buku` text NOT NULL,
  `jumlah_buku` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `kategori_buku` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sumbang_bukus`
--

INSERT INTO `sumbang_bukus` (`id`, `created_at`, `updated_at`, `siswa_id`, `nama_buku`, `tahun_terbit`, `nama_penulis`, `rincian_buku`, `jumlah_buku`, `image`, `kategori_buku`, `status`) VALUES
(1, '2023-01-02 17:49:58', '2023-01-02 17:49:58', 13, 'Buku mu', 1991, 'Aku', 'Halo', 1, 'chip_circuit_processor_140251_1920x1080.jpg', 'Fiksi', 'Menunggu Konfirmasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `topups`
--

CREATE TABLE `topups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `role` enum('siswa','guru','pegawaikantin') NOT NULL,
  `status` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `type` enum('topup','tarik') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `topups`
--

INSERT INTO `topups` (`id`, `user_id`, `role`, `status`, `amount`, `type`, `created_at`, `updated_at`) VALUES
(3, '13', 'siswa', 'dikonfirmasi', 100000, 'topup', '2023-01-02 11:14:50', '2023-01-02 11:15:32'),
(4, '13', 'siswa', 'dikonfirmasi', 50000, 'topup', '2023-01-02 11:19:19', '2023-01-02 11:19:26'),
(5, '13', 'siswa', 'dikonfirmasi', 50000, 'tarik', '2023-01-02 11:24:31', '2023-01-02 11:24:58'),
(6, '1', 'pegawaikantin', 'belum konfirmasi', 12010, 'topup', '2023-01-02 12:04:41', '2023-01-02 12:04:41'),
(7, '13', 'guru', 'belum konfirmasi', 50000, 'topup', '2023-01-02 12:14:42', '2023-01-02 12:14:42'),
(8, '13', 'guru', 'belum konfirmasi', 40000, 'tarik', '2023-01-02 12:15:33', '2023-01-02 12:15:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wali_siswas`
--

CREATE TABLE `wali_siswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `siswa_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(10) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `tlpn` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `wali_siswas`
--

INSERT INTO `wali_siswas` (`id`, `siswa_id`, `email`, `pass`, `nama`, `tlpn`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 13, 'BudiSetiadi@schoolyte.my.id', 'Budi01', 'Budi Setiadi', '08766736252', NULL, '2023-01-02 10:52:45', '2023-01-02 10:54:48');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absen_ekskuls`
--
ALTER TABLE `absen_ekskuls`
  ADD PRIMARY KEY (`ID_ABSENSI_EKSKUL`),
  ADD KEY `ABSEKS_ANGEKS` (`ID_ANGGOTA`);

--
-- Indeks untuk tabel `absen_pegawais`
--
ALTER TABLE `absen_pegawais`
  ADD PRIMARY KEY (`ID_ABSENSI_PEGAWAI`);

--
-- Indeks untuk tabel `absen_siswas`
--
ALTER TABLE `absen_siswas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`ID_AKUN`);

--
-- Indeks untuk tabel `anggota_ekskuls`
--
ALTER TABLE `anggota_ekskuls`
  ADD PRIMARY KEY (`ID_ANGGOTA`),
  ADD KEY `ANGEKS_SISWA` (`ID_SISWA`);

--
-- Indeks untuk tabel `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `BERITA_SISWA` (`siswa_id`);

--
-- Indeks untuk tabel `berita_sekolah`
--
ALTER TABLE `berita_sekolah`
  ADD PRIMARY KEY (`ID_BERITA_SEKOLAH`);

--
-- Indeks untuk tabel `bukus`
--
ALTER TABLE `bukus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `daftar_kunjungan`
--
ALTER TABLE `daftar_kunjungan`
  ADD PRIMARY KEY (`ID_DAFTAR_KUNJUNGAN`);

--
-- Indeks untuk tabel `divisi_osis`
--
ALTER TABLE `divisi_osis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dokumentasi_osis`
--
ALTER TABLE `dokumentasi_osis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `DOKUMENTASIOSIS_DIVISIOSIS` (`divisi_osis_id`);

--
-- Indeks untuk tabel `ekskuls`
--
ALTER TABLE `ekskuls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `EKSKUL_GURU` (`guru_id`);

--
-- Indeks untuk tabel `eksternals`
--
ALTER TABLE `eksternals`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `eksternals_email_unique` (`email`);

--
-- Indeks untuk tabel `ekstrakulikulers`
--
ALTER TABLE `ekstrakulikulers`
  ADD PRIMARY KEY (`ID_EKSTRAKULIKULER`);

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gurus`
--
ALTER TABLE `gurus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gurus_email_unique` (`email`);

--
-- Indeks untuk tabel `guru_ekstrakulikuler`
--
ALTER TABLE `guru_ekstrakulikuler`
  ADD PRIMARY KEY (`ID_GURU_EKSTRA`);

--
-- Indeks untuk tabel `guru_mapel`
--
ALTER TABLE `guru_mapel`
  ADD PRIMARY KEY (`ID_GURU_MAPEL`);

--
-- Indeks untuk tabel `jadwal_kelas`
--
ALTER TABLE `jadwal_kelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `JADKEL_KELAS` (`kelas_id`),
  ADD KEY `JADKEL_MAPEL` (`mapel_id`),
  ADD KEY `JADKEL_GURU` (`guru_id`);

--
-- Indeks untuk tabel `jadwal_kelas_guru`
--
ALTER TABLE `jadwal_kelas_guru`
  ADD PRIMARY KEY (`ID_JADWAL_GURU`);

--
-- Indeks untuk tabel `jadwal_kelas_siswa`
--
ALTER TABLE `jadwal_kelas_siswa`
  ADD PRIMARY KEY (`ID_JADWAL_KELAS_SISWA`);

--
-- Indeks untuk tabel `jadwal_mapels`
--
ALTER TABLE `jadwal_mapels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `JADMAP_GURU` (`guru_id`),
  ADD KEY `JADMAP_KELAS` (`kelas_id`);

--
-- Indeks untuk tabel `kartus`
--
ALTER TABLE `kartus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `KARTU_SISWA` (`siswa_id`);

--
-- Indeks untuk tabel `kegiatan_osis`
--
ALTER TABLE `kegiatan_osis`
  ADD PRIMARY KEY (`ID_KEGIATAN_OSIS`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kelas_guru_id_unique` (`guru_id`),
  ADD UNIQUE KEY `kelas_nama_kelas_unique` (`nama_kelas`);

--
-- Indeks untuk tabel `kepala_sekolah`
--
ALTER TABLE `kepala_sekolah`
  ADD PRIMARY KEY (`ID_KEPALA_SEKOLAH`);

--
-- Indeks untuk tabel `koperasi`
--
ALTER TABLE `koperasi`
  ADD PRIMARY KEY (`ID_BARANG`);

--
-- Indeks untuk tabel `koperasis`
--
ALTER TABLE `koperasis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporan_saldo`
--
ALTER TABLE `laporan_saldo`
  ADD PRIMARY KEY (`ID_LAPORAN_SALDO`);

--
-- Indeks untuk tabel `mapels`
--
ALTER TABLE `mapels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `MAPEL_GURU` (`guru_id`);

--
-- Indeks untuk tabel `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `MENUS_STAND` (`stand_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mutasikeluars`
--
ALTER TABLE `mutasikeluars`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mutasikeluars_email_unique` (`email`),
  ADD KEY `MUKEL_SISWA` (`siswa_id`);

--
-- Indeks untuk tabel `nilais`
--
ALTER TABLE `nilais`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nilais_siswa_id_unique` (`siswa_id`),
  ADD UNIQUE KEY `nilais_mapel_id_unique` (`mapel_id`),
  ADD UNIQUE KEY `nilais_kelas_id_unique` (`kelas_id`);

--
-- Indeks untuk tabel `nilai_keterampilans`
--
ALTER TABLE `nilai_keterampilans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nilai_keterampilans_siswa_id_unique` (`siswa_id`),
  ADD UNIQUE KEY `nilai_keterampilans_mapel_id_unique` (`mapel_id`),
  ADD UNIQUE KEY `nilai_keterampilans_kelas_id_unique` (`kelas_id`);

--
-- Indeks untuk tabel `nilai_pengetahuan`
--
ALTER TABLE `nilai_pengetahuan`
  ADD PRIMARY KEY (`ID_NILAI_BELAJAR`);

--
-- Indeks untuk tabel `osis`
--
ALTER TABLE `osis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `osis_siswa_id_unique` (`siswa_id`),
  ADD UNIQUE KEY `osis_divisi_osis_id_unique` (`divisi_osis_id`);

--
-- Indeks untuk tabel `pegawais`
--
ALTER TABLE `pegawais`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pegawais_email_unique` (`email`);

--
-- Indeks untuk tabel `pegawai_kantins`
--
ALTER TABLE `pegawai_kantins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pegawai_kantins_email_unique` (`email`);

--
-- Indeks untuk tabel `pegawai_perpustakaan`
--
ALTER TABLE `pegawai_perpustakaan`
  ADD PRIMARY KEY (`ID_PERPUS`);

--
-- Indeks untuk tabel `pegawai_perpustakaans`
--
ALTER TABLE `pegawai_perpustakaans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pegawai_perpustakaans_email_unique` (`email`);

--
-- Indeks untuk tabel `pembayaran_bukus`
--
ALTER TABLE `pembayaran_bukus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembayaran_seragams`
--
ALTER TABLE `pembayaran_seragams`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembayaran_spps`
--
ALTER TABLE `pembayaran_spps`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemesanan_kantin`
--
ALTER TABLE `pemesanan_kantin`
  ADD PRIMARY KEY (`id_pemesanankantin`),
  ADD KEY `pesankan_siswa` (`siswa_id`),
  ADD KEY `pesankan_menu` (`menu_id`);

--
-- Indeks untuk tabel `pemesanan_koprasi`
--
ALTER TABLE `pemesanan_koprasi`
  ADD PRIMARY KEY (`ID_PEMESANAN_KOPRASI`);

--
-- Indeks untuk tabel `peminjaman_bukus`
--
ALTER TABLE `peminjaman_bukus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peminjaman_fasilitas`
--
ALTER TABLE `peminjaman_fasilitas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PEMIFASI_SISWA` (`siswa_id`),
  ADD KEY `PEMIFASI_FASILI` (`fasilitas_id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `pesanans`
--
ALTER TABLE `pesanans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan_menus`
--
ALTER TABLE `pesanan_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesan_kantins`
--
ALTER TABLE `pesan_kantins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peskan_siswa` (`user_id`),
  ADD KEY `peskan_menu` (`menu_id`),
  ADD KEY `peskan_stand` (`stand_id`);

--
-- Indeks untuk tabel `pesan_koprasis`
--
ALTER TABLE `pesan_koprasis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prestasi_ekskuls`
--
ALTER TABLE `prestasi_ekskuls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PRESEKS_EKSKUL` (`ekskul_id`);

--
-- Indeks untuk tabel `proker_osis`
--
ALTER TABLE `proker_osis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PROKER_DIVISI` (`divisi_osis_id`);

--
-- Indeks untuk tabel `selesai_kantins`
--
ALTER TABLE `selesai_kantins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `selkan_siswa` (`user_id`),
  ADD KEY `selkan_menu` (`menu_id`),
  ADD KEY `selkan_stand` (`stand_id`);

--
-- Indeks untuk tabel `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `siswas_email_unique` (`email`),
  ADD KEY `SISWA_EKSTERNAL` (`eksternal_id`),
  ADD KEY `SISWA_KELAS` (`kelas_id`);

--
-- Indeks untuk tabel `siswa_absens`
--
ALTER TABLE `siswa_absens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ABSIS_SISWA` (`siswa_id`),
  ADD KEY `ABSIS_KELAS` (`kelas_id`);

--
-- Indeks untuk tabel `siswa_barus`
--
ALTER TABLE `siswa_barus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `stands`
--
ALTER TABLE `stands`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sumbang_buku`
--
ALTER TABLE `sumbang_buku`
  ADD PRIMARY KEY (`sumbangbuku_id`),
  ADD KEY `SUMBUK_SISWA` (`siswa_id`);

--
-- Indeks untuk tabel `sumbang_bukus`
--
ALTER TABLE `sumbang_bukus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `topups`
--
ALTER TABLE `topups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `wali_siswas`
--
ALTER TABLE `wali_siswas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `wali_siswas_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absen_ekskuls`
--
ALTER TABLE `absen_ekskuls`
  MODIFY `ID_ABSENSI_EKSKUL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `absen_pegawais`
--
ALTER TABLE `absen_pegawais`
  MODIFY `ID_ABSENSI_PEGAWAI` bigint(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `absen_siswas`
--
ALTER TABLE `absen_siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `ID_AKUN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `anggota_ekskuls`
--
ALTER TABLE `anggota_ekskuls`
  MODIFY `ID_ANGGOTA` bigint(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `berita_sekolah`
--
ALTER TABLE `berita_sekolah`
  MODIFY `ID_BERITA_SEKOLAH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `bukus`
--
ALTER TABLE `bukus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `daftar_kunjungan`
--
ALTER TABLE `daftar_kunjungan`
  MODIFY `ID_DAFTAR_KUNJUNGAN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `divisi_osis`
--
ALTER TABLE `divisi_osis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `dokumentasi_osis`
--
ALTER TABLE `dokumentasi_osis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ekskuls`
--
ALTER TABLE `ekskuls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `eksternals`
--
ALTER TABLE `eksternals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `gurus`
--
ALTER TABLE `gurus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `guru_ekstrakulikuler`
--
ALTER TABLE `guru_ekstrakulikuler`
  MODIFY `ID_GURU_EKSTRA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `guru_mapel`
--
ALTER TABLE `guru_mapel`
  MODIFY `ID_GURU_MAPEL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jadwal_kelas`
--
ALTER TABLE `jadwal_kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `jadwal_kelas_guru`
--
ALTER TABLE `jadwal_kelas_guru`
  MODIFY `ID_JADWAL_GURU` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jadwal_kelas_siswa`
--
ALTER TABLE `jadwal_kelas_siswa`
  MODIFY `ID_JADWAL_KELAS_SISWA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jadwal_mapels`
--
ALTER TABLE `jadwal_mapels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kartus`
--
ALTER TABLE `kartus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `koperasis`
--
ALTER TABLE `koperasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `mapels`
--
ALTER TABLE `mapels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1240;

--
-- AUTO_INCREMENT untuk tabel `mutasikeluars`
--
ALTER TABLE `mutasikeluars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `nilais`
--
ALTER TABLE `nilais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `nilai_keterampilans`
--
ALTER TABLE `nilai_keterampilans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `osis`
--
ALTER TABLE `osis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pegawais`
--
ALTER TABLE `pegawais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pegawai_kantins`
--
ALTER TABLE `pegawai_kantins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pegawai_perpustakaan`
--
ALTER TABLE `pegawai_perpustakaan`
  MODIFY `ID_PERPUS` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pegawai_perpustakaans`
--
ALTER TABLE `pegawai_perpustakaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pembayaran_bukus`
--
ALTER TABLE `pembayaran_bukus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pembayaran_seragams`
--
ALTER TABLE `pembayaran_seragams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pembayaran_spps`
--
ALTER TABLE `pembayaran_spps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pemesanan_kantin`
--
ALTER TABLE `pemesanan_kantin`
  MODIFY `id_pemesanankantin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `peminjaman_bukus`
--
ALTER TABLE `peminjaman_bukus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `peminjaman_fasilitas`
--
ALTER TABLE `peminjaman_fasilitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesanans`
--
ALTER TABLE `pesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pesanan_menus`
--
ALTER TABLE `pesanan_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pesan_kantins`
--
ALTER TABLE `pesan_kantins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pesan_koprasis`
--
ALTER TABLE `pesan_koprasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `prestasi_ekskuls`
--
ALTER TABLE `prestasi_ekskuls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `proker_osis`
--
ALTER TABLE `proker_osis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `selesai_kantins`
--
ALTER TABLE `selesai_kantins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `siswa_absens`
--
ALTER TABLE `siswa_absens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `siswa_barus`
--
ALTER TABLE `siswa_barus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `stands`
--
ALTER TABLE `stands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `sumbang_buku`
--
ALTER TABLE `sumbang_buku`
  MODIFY `sumbangbuku_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sumbang_bukus`
--
ALTER TABLE `sumbang_bukus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `topups`
--
ALTER TABLE `topups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `wali_siswas`
--
ALTER TABLE `wali_siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `absen_ekskuls`
--
ALTER TABLE `absen_ekskuls`
  ADD CONSTRAINT `ABSEKS_ANGEKS` FOREIGN KEY (`ID_ANGGOTA`) REFERENCES `anggota_ekskuls` (`ID_ANGGOTA`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `anggota_ekskuls`
--
ALTER TABLE `anggota_ekskuls`
  ADD CONSTRAINT `ANGEKS_SISWA` FOREIGN KEY (`ID_SISWA`) REFERENCES `siswas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `beritas`
--
ALTER TABLE `beritas`
  ADD CONSTRAINT `BERITA_SISWA` FOREIGN KEY (`siswa_id`) REFERENCES `siswas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `dokumentasi_osis`
--
ALTER TABLE `dokumentasi_osis`
  ADD CONSTRAINT `DOKUMENTASIOSIS_DIVISIOSIS` FOREIGN KEY (`divisi_osis_id`) REFERENCES `divisi_osis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ekskuls`
--
ALTER TABLE `ekskuls`
  ADD CONSTRAINT `EKSKUL_GURU` FOREIGN KEY (`guru_id`) REFERENCES `gurus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jadwal_kelas`
--
ALTER TABLE `jadwal_kelas`
  ADD CONSTRAINT `JADKEL_GURU` FOREIGN KEY (`guru_id`) REFERENCES `gurus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `JADKEL_KELAS` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `JADKEL_MAPEL` FOREIGN KEY (`mapel_id`) REFERENCES `mapels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jadwal_mapels`
--
ALTER TABLE `jadwal_mapels`
  ADD CONSTRAINT `JADMAP_GURU` FOREIGN KEY (`guru_id`) REFERENCES `gurus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `JADMAP_KELAS` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kartus`
--
ALTER TABLE `kartus`
  ADD CONSTRAINT `KARTU_SISWA` FOREIGN KEY (`siswa_id`) REFERENCES `siswas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `KELAS_GURU` FOREIGN KEY (`guru_id`) REFERENCES `gurus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `mapels`
--
ALTER TABLE `mapels`
  ADD CONSTRAINT `MAPEL_GURU` FOREIGN KEY (`guru_id`) REFERENCES `gurus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `MENUS_STAND` FOREIGN KEY (`stand_id`) REFERENCES `stands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `mutasikeluars`
--
ALTER TABLE `mutasikeluars`
  ADD CONSTRAINT `MUKEL_SISWA` FOREIGN KEY (`siswa_id`) REFERENCES `siswas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `nilais`
--
ALTER TABLE `nilais`
  ADD CONSTRAINT `NILAI_KELAS` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `NILAI_MAPEL` FOREIGN KEY (`mapel_id`) REFERENCES `mapels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `NILAI_SISWA` FOREIGN KEY (`siswa_id`) REFERENCES `siswas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `nilai_keterampilans`
--
ALTER TABLE `nilai_keterampilans`
  ADD CONSTRAINT `NIKET_KELAS` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `NIKET_MAPEL` FOREIGN KEY (`mapel_id`) REFERENCES `mapels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `NIKET_SISWA` FOREIGN KEY (`siswa_id`) REFERENCES `siswas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `osis`
--
ALTER TABLE `osis`
  ADD CONSTRAINT `OSIS_DIVOSIS` FOREIGN KEY (`divisi_osis_id`) REFERENCES `divisi_osis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `OSIS_SISWA` FOREIGN KEY (`siswa_id`) REFERENCES `siswas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pemesanan_kantin`
--
ALTER TABLE `pemesanan_kantin`
  ADD CONSTRAINT `pesankan_menu` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesankan_siswa` FOREIGN KEY (`siswa_id`) REFERENCES `siswas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `peminjaman_fasilitas`
--
ALTER TABLE `peminjaman_fasilitas`
  ADD CONSTRAINT `PEMIFASI_FASILI` FOREIGN KEY (`fasilitas_id`) REFERENCES `fasilitas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `PEMIFASI_SISWA` FOREIGN KEY (`siswa_id`) REFERENCES `siswas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pesan_kantins`
--
ALTER TABLE `pesan_kantins`
  ADD CONSTRAINT `peskan_menu` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `peskan_siswa` FOREIGN KEY (`user_id`) REFERENCES `siswas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `peskan_stand` FOREIGN KEY (`stand_id`) REFERENCES `stands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `prestasi_ekskuls`
--
ALTER TABLE `prestasi_ekskuls`
  ADD CONSTRAINT `PRESEKS_EKSKUL` FOREIGN KEY (`ekskul_id`) REFERENCES `ekskuls` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `proker_osis`
--
ALTER TABLE `proker_osis`
  ADD CONSTRAINT `PROKER_DIVISI` FOREIGN KEY (`divisi_osis_id`) REFERENCES `divisi_osis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `selesai_kantins`
--
ALTER TABLE `selesai_kantins`
  ADD CONSTRAINT `selkan_menu` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `selkan_siswa` FOREIGN KEY (`user_id`) REFERENCES `siswas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `selkan_stand` FOREIGN KEY (`stand_id`) REFERENCES `stands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `siswas`
--
ALTER TABLE `siswas`
  ADD CONSTRAINT `SISWA_EKSTERNAL` FOREIGN KEY (`eksternal_id`) REFERENCES `eksternals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `SISWA_KELAS` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `siswa_absens`
--
ALTER TABLE `siswa_absens`
  ADD CONSTRAINT `ABSIS_KELAS` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`),
  ADD CONSTRAINT `ABSIS_SISWA` FOREIGN KEY (`siswa_id`) REFERENCES `siswas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `sumbang_buku`
--
ALTER TABLE `sumbang_buku`
  ADD CONSTRAINT `SUMBUK_SISWA` FOREIGN KEY (`siswa_id`) REFERENCES `siswas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

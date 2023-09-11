-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Des 2022 pada 04.14
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
-- Database: `khailabs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_agenda`
--

CREATE TABLE `tb_agenda` (
  `id_agenda` int(12) NOT NULL,
  `judul_agenda` varchar(50) NOT NULL,
  `konten_agenda` text NOT NULL,
  `tanggal_agenda` date NOT NULL,
  `id_user` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_agenda`
--

INSERT INTO `tb_agenda` (`id_agenda`, `judul_agenda`, `konten_agenda`, `tanggal_agenda`, `id_user`) VALUES
(5, 'Morning Glory', 'Melaporkan hasil sprint selama 2 minggu sekali ke Investor atau publisher', '2022-12-09', 1),
(6, 'Sprint Review', 'Melaporkan hasil sprint setiap minggu ke CEO', '2022-12-11', 0),
(7, 'Sprint Planing', 'Untuk Merencanakan apa yang akan dikerjakan selama sprint', '2022-12-11', 1),
(8, 'Mentoring Teknikal', 'Mentoring bersama teknisi game profesional setiap satu bulan sekali', '2022-12-25', 1),
(9, 'Mentoring ART', 'Mentoring bersama  game artrist profesional setiap satu bulan sekali', '2022-12-18', 1),
(10, 'Mentoring Game Design', 'Mentoring bersama game designer profesional setiap satu bulan sekali', '2022-12-20', 1),
(11, 'Mentoring Wali', 'Mentoring bersama mentor wali setiap satu bulan sekali, untuk melaporkan kendala-kendala selama pembuatan game', '2022-12-30', 1),
(12, 'contoh', 'Permainan flappy legendaris kembali dengan nuansa tantangan baru dalam Edisi Suara Habis. Gunakan suara Anda untuk bermain game Scream Hero Flappy ini. Anda dapat berbisik, meniup, bicara, menyanyi, berteriak, atau bahkan berteriak lantang untuk bermain scream go flappy game ini. Jangan malu-malu saat bermain game suara ini! Masih berani cobain? Ini adalah salah satu game dengan kendali suara yang terbaik. Cukup menggunakan suara Anda untuk bermain Scream Hero Flappy, berteriak atau menjerit gila bisa membuat burung terbang. Setiap kali Anda membuat suara berisik, burung akan mengepakkan sayapnya. Semakin keras Anda berteriak, semakin tinggi kepakan burungnya. Ini benar-benar sulit, tapi benar-benar nagih. Kontrol sederhana, tapi sulit untuk dikuasai. Scream Hero Flappy menggunakan mikrofon untuk mengontrol gerak burung untuk mengepakkan dan terbang, jadi pastikan untuk membolehkan permintaan akses rekam suara. Untuk pengalaman terbaik, gunakan headphone atau kecilkan volume telepon Anda.', '2022-12-19', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_biodata`
--

CREATE TABLE `tb_biodata` (
  `id_biodata` int(12) NOT NULL,
  `nama_perusahaan` varchar(40) NOT NULL,
  `telepon` varchar(14) NOT NULL,
  `alamat_perusahaan` varchar(255) NOT NULL,
  `nama_pimpinan` varchar(255) NOT NULL,
  `logo_perusahaan` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_biodata`
--

INSERT INTO `tb_biodata` (`id_biodata`, `nama_perusahaan`, `telepon`, `alamat_perusahaan`, `nama_pimpinan`, `logo_perusahaan`, `visi`, `misi`) VALUES
(8, 'PT. Khailabs Kreatif Media', '081255200040', 'Paiton, Probolinggo, Indonesia', 'Gulpi Qorik Oktagalu Pratamasunu', 'k2.png', 'Memberikan pengalaman kompetisi sosial yang positif, unik, dan menyenangkan melalui media game', 'Menggumpulkan orang - orang berbakat dan memiliki passion di bidang game developmen. Melakukan manajemen tim agar dapat bekerja sama dengan baik dan dapat menghasilkan game yang berkualitas.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id_galeri` int(12) NOT NULL,
  `judul_galeri` text NOT NULL,
  `gambar` text NOT NULL,
  `tanggal_gambar` date NOT NULL,
  `id_user` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_galeri`
--

INSERT INTO `tb_galeri` (`id_galeri`, `judul_galeri`, `gambar`, `tanggal_gambar`, `id_user`) VALUES
(5, 'Meeting Bersama Publisher', 'photo_2022-04-26_20-06-51.jpg', '2022-12-08', 1),
(6, 'Meeting Bersama Publisher', 'photo_2022-11-08_16-04-42.jpg', '2022-12-08', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_pegawai` int(12) NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `telp` varchar(30) NOT NULL,
  `alamat_pegawai` text NOT NULL,
  `foto_pegawai` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jabatan_pegawai` varchar(50) NOT NULL,
  `email_pegawai` varchar(50) NOT NULL,
  `tentang_jabatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_pegawai`, `nama_pegawai`, `telp`, `alamat_pegawai`, `foto_pegawai`, `tanggal_lahir`, `jabatan_pegawai`, `email_pegawai`, `tentang_jabatan`) VALUES
(2, 'Gulpi Qorik Oktagalu Pratamasunu', '081255200040', 'Paiton, Probolinggo, Indonesia', '1.png', '2022-12-11', 'Team Lead & Game Designer', 'gulpi.qorik@gmail.com', 'Seseorang yang  memegang saham atau pemilik perusahaan untuk memimpin dan mengelola perusahaan.'),
(3, 'Olief Ilmandira Ratu Farisi', '081255200040', 'Paiton, Probolinggo, Indonesia', '2.png', '2022-12-06', 'Project Maneger', 'olief.ilmandira@gmail.com', 'Seseorang yang bertanggung jawab untuk mengarahkan usaha yang bertujuan membantu organisasi dalam mencapai sasarannya.'),
(4, 'Maulana Isman', '082139050151', 'Paiton, Probolinggo, Indonesia', '3.png', '2022-12-06', 'Game Artist', 'maulana.isman00@gmail.com', 'Seseorang yang bertugas menciptakan gambar 2D dan 3D untuk kemudian digunakan sebagai grafik di dalam game.'),
(5, 'Suhadi', '085230829301', 'Paiton, Probolinggo, Indonesia', '4.png', '2022-12-07', 'Programmer Back End', 'jesterthejokester@gmail.com', 'seorang game developer yang fokus pada pengelolaan server (server side).'),
(6, 'Muhammad Fadil Hasan', '085771758545', 'Paiton, Probolinggo, Indonesia', '5.png', '2022-12-06', 'Programmer Front End', 'adingnj2001@gmail.com', 'Seorang Front End Developer bertanggung jawab atas komposisi tampilan sebuah website dan aplikasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id_pesan` int(12) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_pesan`
--

INSERT INTO `tb_pesan` (`id_pesan`, `nama`, `email`, `pesan`, `tanggal`) VALUES
(11, 'Nandito Maulana Y', 'nanditomaulana@gmail.com', 'gamenya keren-keren', '2022-12-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_portfolio`
--

CREATE TABLE `tb_portfolio` (
  `id_portfolio` int(12) NOT NULL,
  `judul_portfolio` varchar(50) NOT NULL,
  `gambar_portfolio` text NOT NULL,
  `konten_portfolio` text NOT NULL,
  `tanggal_rilis` date NOT NULL,
  `download` text NOT NULL,
  `id_user` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_portfolio`
--

INSERT INTO `tb_portfolio` (`id_portfolio`, `judul_portfolio`, `gambar_portfolio`, `konten_portfolio`, `tanggal_rilis`, `download`, `id_user`) VALUES
(1, 'Flappy Scream Chicken', '801.jpg', 'Permainan flappy legendaris kembali dengan nuansa tantangan baru dalam Edisi Suara Habis. Gunakan suara Anda untuk bermain game Scream Hero Flappy ini. Anda dapat berbisik, meniup, bicara, menyanyi, berteriak, atau bahkan berteriak lantang untuk bermain scream go flappy game ini. Jangan malu-malu saat bermain game suara ini! Masih berani cobain?  Ini adalah salah satu game dengan kendali suara yang terbaik. Cukup menggunakan suara Anda untuk bermain Scream Hero Flappy, berteriak atau menjerit gila bisa membuat burung terbang. Setiap kali Anda membuat suara berisik, burung akan mengepakkan sayapnya. Semakin keras Anda berteriak, semakin tinggi kepakan burungnya. Ini benar-benar sulit, tapi benar-benar nagih. Kontrol sederhana, tapi sulit untuk dikuasai.  Scream Hero Flappy menggunakan mikrofon untuk mengontrol gerak burung untuk mengepakkan dan terbang, jadi pastikan untuk membolehkan permintaan akses rekam suara. Untuk pengalaman terbaik, gunakan headphone atau kecilkan volume telepon Anda.', '2017-03-05', 'https://play.google.com/store/apps/details?id=com.afkarstudios.flappyscreamgo', 0),
(2, 'Boneka Arwah - Idle Game', '804.jpg', 'Boneka Arwah - Idle Game adalah gim idle di mana Anda dapat mengadopsi berbagai boneka arwah, merawatnya, dan membiarkan mereka mendapatkan koin untuk Anda saat Anda pergi atau menganggur.  Anda dapat mendekorasi rumah mereka untuk menjadi rumah paling penuh kasih di bumi.  Di rilis mendatang, Anda juga dapat menyesuaikan boneka Anda sendiri dengan banyak kosmetik yang dapat Anda beli dengan koin yang diperoleh dengan susah payah.', '2022-01-09', 'https://play.google.com/store/apps/details?id=com.KhaiLabs.SpiritDollIdle&hl=id&gl=US', 0),
(3, 'Epic Radgoll Fighting', '803.jpg', 'Game pertarungan berbasis fisika ragdoll paling epik di mana Anda mengontrol petarung ragdoll melawan petarung lain. Anda dapat memblokir serangan ragdoll, pukulan ragdoll, dan menendang ragdoll dalam game pertarungan ragdoll fisika ini. Tetapi Anda tidak dapat menebas dan mengiris, direncanakan untuk pembaruan di masa mendatang di mana Anda dapat memakai berbagai senjata menyenangkan dalam pertarungan.  Game ini adalah simulasi pertempuran ragdoll yang benar-benar akurat dari pertempuran di jalanan. Ini seperti pertarungan jalanan ragdoll atau sim tinju ragdoll, tetapi di jalanan.  Fitur: - Kulit - Lebih banyak level - Pertarungan bos  Segera akan datang: - Keterampilan - Senjata', '2021-04-16', 'https://play.google.com/store/apps/details?id=com.KhaiLabs.EpicRagdollFighting&hl=id&gl=US', 0),
(4, 'Lions Puzzle: Animal Hunting', '807.jpg', 'Ikuti mangsamu. Temukan target Anda. Berburu yang terlemah. Bagilah dari kemasannya. Jebak yang terkuat. Iris semuanya!  Bisakah kamu memburu mereka semua?', '2021-03-04', 'https://play.google.com/store/apps/details?id=com.KhaiLabs.AnimalHunt&hl=id&gl=US', 0),
(5, 'Snowman 3D', '800.jpg', 'Bangun manusia salju dalam 3D dan hiasi. Jadilah kreatif! Tapi hati-hati, jangan membuat bola salju terlalu kecil atau terlalu besar, atau Anda akan gagal.  Ayo bangun manusia salju di game manusia salju yang memuaskan ini!', '2020-12-05', 'https://play.google.com/store/apps/details?id=com.KhaiLabs.Snowman3D&hl=id&gl=US', 0),
(6, 'Hole Cutting Soap', 'sabun.jpg', 'ASMR yang paling memuaskan permainan memotong ukiran sabun simulator pada tahun 2020. Potong beberapa sabun dengan lubang luar biasa dan rasakan sendiri.  Telan berbagai bentuk sabun ukiran warna-warni dan potong semuanya dengan lubang. Rasakan kepuasan luar biasa.  Hindari sabun hitam atau lubang akan meledak! Makan sabun ukiran sebanyak mungkin dan potong semua sabun yang menakjubkan dengan simulator lubang.  ', '2019-08-13', 'https://play.google.com/store/apps/details?id=com.sticky.block.hole&hl=id&gl=US', 1),
(7, 'Snake Shift', '805.jpg', 'Anda adalah pergantian warna yang terjebak dalam permainan warna ini yang penuh dengan rintangan. Geser, geser, geser, dan naik ular warna Anda melalui, perangkap mematikan, blok warna, hambatan warna, dan menyelinap ke dalam lubang berwarna-warni yang cocok. Setelah Anda memainkan permainan warna ini, Anda harus fokus, Anda perlu berkonsentrasi, dan Anda akan ketagihan. Anda harus fokus untuk menghindari masalah dan menjadi Master Ular.  Dalam permainan adiktif gratis terbaik ini, warna dapat menjadi teman dan musuh Anda. Warna adalah masalahnya. Anda seret jari Anda ke kiri atau ke kanan untuk menghindari jebakan dan rintangan seperti orang gila. Berpikirlah seperti ular dan cepatlah mengikuti warna dan balok dalam permainan.  Jadilah Tuan Ular!', '2018-09-23', 'https://play.google.com/store/apps/details?id=com.khailabs.snakecolors&hl=id&gl=US', 0),
(8, 'Penguin Rescue! Rope', '99990.jpg', 'Saudara kembar penguin lucu mencoba menyelamatkan satu sama lain hanya menggunakan satu tali. Saudara penguin kecil yang lapar tidak bisa berenang atau mendaki bukit es. Kakak laki-laki mengikat adik penguin kecilnya dengan tali es, jadi dia tidak tenggelam di laut jika sesuatu yang buruk terjadi. Sementara mereka melemparkan, berselancar dan melangkah es mengapung dan kutub es di laut beku, mereka mengumpulkan kue ikan di sepanjang jalan mereka.  Control Penguins - Bouncemaster dan membantu mereka bertahan hidup, melompat dan berjalan langkah untuk menginjak floes es, mengumpulkan banyak kue ikan, topi, aksesoris, dan celana, dan akhirnya bertemu surfer orang tua mereka dengan bantuan dari tali es.  Cara bermain: Dalam game Penguins - The Bouncemaster, Anda bermain sebagai dua penguin lapar yang lucu yang diikat bersama oleh tali es. Ketuk untuk melemparkan penguin kedua (penguin di belakang yang lain) dan melangkah floe. Ketuk dan tahan untuk melemparkan lebih lama dan lebih jauh ke kutub es berikutnya. Awasi penguin Anda yang lain saat Anda melompat, dan jangan tarik yang lain ke laut di dekat tali es. Penguin bisa berenang dan berselancar, tetapi tidak untuk waktu yang lama, hati-hati terhadap hiu yang lapar. Anda dapat menyimpan penguin yang tenggelam dengan melemparkan penguin lainnya. Ketika semua penguin tenggelam, permainannya berakhir. Watch out for the wind and snow storm sambil melompat. Dan berhati-hatilah dengan platform floes and pole, karena semuanya akan menjadi spiral ketika angin dan platform bergerak menyatu.  Anda dapat mengumpulkan sebanyak mungkin kue ikan sambil melompat dan melintasi gumpalan es dan es di laut beku. Cookies Ikan dapat diperdagangkan dengan topi, aksesoris, dan celana. Sesuaikan surfer penguin Anda untuk menjadi yang paling imut dengan mengenakan topi dan celana lucu!  Selamat memantul dan jadilah Penguin - The Bouncemasters!', '2016-12-10', 'https://play.google.com/store/apps/details?id=com.afkarstudios.icyfloes&hl=id&gl=US', 0),
(9, 'Happy Class', '806.jpg', 'Happy Class adalah gim untuk Anda dan menempatkan lubang blok warna di tengah dan bermain saat Anda membosankan dan ingin melakukan sesuatu yang tidak hanya menyenangkan dan santai, tetapi juga menantang. Dengan berbagai mode permainan tentang kertas, pisau, lubang selamat dan blok, game ini akan menghibur Anda cukup lama dan membuat Anda bahagia.', '2018-08-27', 'https://play.google.com/store/apps/details?id=com.khailabs.happyclass&hl=id&gl=US', 0),
(10, 'Hybrid Clash ', '802.jpg', 'Hybrid Clash adalah gim PVP auto battler yang kacau-lucu di mana Anda membangun petarung hybrid Anda sendiri dan bersaing di turnamen dengan pemain lain. Pilih petarung, baju besi, senjata, dan gadget hybrid Anda, lalu biarkan mereka bertarung di arena pertarungan otomatis 3-vs-3 yang gila-gilaan ini.', '2022-10-20', 'https://play.google.com/store/apps/details?id=com.KhaiLabs.HybridClash&hl=id&gl=US', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(12) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `telepon_user` varchar(14) NOT NULL,
  `alamat_user` varchar(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `telepon_user`, `alamat_user`, `username`, `password`) VALUES
(3, 'Admin Khailabs ', '081255200040', 'Paiton, Probolinggo, Indonesia', 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_agenda`
--
ALTER TABLE `tb_agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indeks untuk tabel `tb_biodata`
--
ALTER TABLE `tb_biodata`
  ADD PRIMARY KEY (`id_biodata`);

--
-- Indeks untuk tabel `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `tb_portfolio`
--
ALTER TABLE `tb_portfolio`
  ADD PRIMARY KEY (`id_portfolio`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_agenda`
--
ALTER TABLE `tb_agenda`
  MODIFY `id_agenda` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_biodata`
--
ALTER TABLE `tb_biodata`
  MODIFY `id_biodata` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id_galeri` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id_pegawai` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `id_pesan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_portfolio`
--
ALTER TABLE `tb_portfolio`
  MODIFY `id_portfolio` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

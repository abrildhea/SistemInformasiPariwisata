-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2021 pada 08.09
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `batu_kotaku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `profil` text NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `email`, `username`, `profil`, `password`) VALUES
(1, 'Aqshal Rizqullah', 'aksol@gmail.com', 'Cinta Indomie', 'Anak polos , baik hati, tidak sombong, dan suka membantu', 'f84d4db66a1719d456b72819f60a336f'),
(2, 'admin', 'admin@gmail.com', 'admin', 'baik', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `kecamatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `kecamatan`) VALUES
(1, 'Batu'),
(2, 'Bumiaji'),
(3, 'Junrejo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_wisata` int(11) DEFAULT NULL,
  `komentar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_user`, `id_wisata`, `komentar`) VALUES
(25, 9, 9, 'good'),
(33, 9, 5, 'coba komen coban talun');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating`
--

CREATE TABLE `rating` (
  `id_rating` int(11) NOT NULL,
  `id_wisata` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `rating_wisata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `rating`
--

INSERT INTO `rating` (`id_rating`, `id_wisata`, `id_user`, `rating_wisata`) VALUES
(10, 5, 9, 4),
(18, 6, 9, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_wisata`
--

CREATE TABLE `tipe_wisata` (
  `id_tipe_wisata` int(11) NOT NULL,
  `tipe_wisata` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tipe_wisata`
--

INSERT INTO `tipe_wisata` (`id_tipe_wisata`, `tipe_wisata`) VALUES
(1, 'Wisata Alam'),
(2, 'Wisata Buatan'),
(3, 'Wisata Kuliner'),
(4, 'Wisata Hotel');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image_user` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `email`, `username`, `password`, `image_user`) VALUES
(9, 'abrl', 'abrl@gmail.com', 'coba', 'dccefc9affe37ba60b49d0a4789ce042', 'a.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `id_tipe_wisata` int(11) NOT NULL,
  `nama_wisata` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kuliner_khas` varchar(50) NOT NULL,
  `deskripsi_wisata` text NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `image_wisata` varchar(255) DEFAULT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `id_admin`, `id_kecamatan`, `id_tipe_wisata`, `nama_wisata`, `alamat`, `kuliner_khas`, `deskripsi_wisata`, `latitude`, `longitude`, `image_wisata`, `tgl`) VALUES
(1, 1, 1, 2, 'Cafe Oemah Koempoel', 'Jln. Arjuno Kav.Baru', 'Tahu Kress, Mie Indomie', 'bagus dan menarik', -7.8716114, 112.5321189, 'omah_kumpul.jpg', '2021-02-08'),
(2, 1, 2, 1, 'Sumber Cinde', 'Jl. Nangka No.27, Bumiaji, Kec. Bumiaji, Kota Batu, Jawa Timur 65331', 'Mie Indomie, Teh Tarik, Kopi Areng', 'Wisata alam yang sangat dijaga kelestarian nya oleh masyarakat. Ditambah air yang dingin dan menyejukkan membuat wisatawan yang datang senang dan betah berkunjung di Sumber Cinde ini.', -7.8581033, 112.5414428, 'sumber_cinde.jpeg', '0000-00-00'),
(3, 1, 3, 3, 'Niki Kopitiam Cafe & Resto Cafe', 'Jl. Raya Beji No.125, Beji, Kec. Junrejo, Kota Batu, Jawa Timur 65236', 'Dimsum, Hot Plate, Capuccino Ice', 'Bagus dan harga yang terjangkau.', -7.8952651, 112.5533243, 'niki_kopitiam.jpg', '2021-03-13'),
(4, 1, 3, 4, 'The Singhasari Resort & Convention Batu', 'Jl. Ir. Soekarno No.120, Beji, Kec. Batu, Kota Batu, Jawa Timur 65236', 'Bakso, Nasi Goreng, Minuman Jahe Madu', 'Hotel yang murah dan berkelas. Selalu berbekas di hati para wisatawan yang beristirahat di Hotel Singhasari ini.', -7.8931257, 112.5480253, 'singhasari.jpg', '0000-00-00'),
(5, 1, 2, 1, 'Coban Talun', 'Dusun Wonorejo,Tulungrejo, Kec. Bumiaji, Kota Batu, Jawa Timur 65336', 'Jagung Bakar, Mie Kuah Pedas, Kopi Pait', 'Salah satu tempat untuk menikmati semua pesona ini adalah Coban Talun. Dimana, sobat native akan disuguhkan dengan air terjun yang sangat indah. Seperti air yang turun dari surga dan tidak akan pernah habis walau terus diambil. Airnya sangat jernih sehingga bisa diminum dan terasa sangat menyegarkan. \r\n<br></br>\r\nPerlu diketahui bahwa hutan lindung di kawasan Coban Talun adalah hutan campuran antara pinus dengan kawasan hutan rimba. Coban Talun adalah hulu dari Sungai Brantas yang tidak akan pernah surut walau musim kemarau datang. Debit air yang dihasilkan pun cukup deras pada saat musim kemarau. Saat musim penghujan, debit airnya akan semakin deras sehingga menambah pesona Coban Talun sendiri.', -7.8050504, 112.5148696, 'cobantalun.jpg', '2021-02-10'),
(6, 1, 2, 1, 'Selecta', 'Jl. Raya Selecta No.1, Kec. Bumiaji, Kota Batu, Jawa Timur 65336', 'Nasi Goreng, Snack, Kopi', 'Objek wisata Malang ini benar-benar menyuguhkan konsep taman yang berbeda. Taman Selecta Malang memiliki luas keseluruhan sekitar 18 hektar. Namun yang digunakan sebagai taman bunga atau kebun bunga hanya sekitar 10 hektar.\r\n<br></br>\r\nTaman yang ada, dikonsep dengan petak-petak berbentuk persegi. Susunannya pun sangat rapi dan teratur. Tiap persegi dengan ukuran yang berbeda-beda pun diberi tanaman bunga yang berbeda. Bunga-bunganya pun bermekaran sesuai dengan musim mekarnya masing-masing.\r\n<br></br>', -7.8177686, 112.5232281, 'selecta.jpg', '0000-00-00'),
(7, 1, 2, 1, 'Omah Kayu', 'Jl. Gn. Banyak, Gunungsari, Kec. Bumiaji, Kota Batu, Jawa Timur 65312', 'Ice Capuccino, Mie Kuah Nyemek, Wedang Jahe', 'Selain ada kursi kayu, terdapat pula tempat perapian serta ‘hammock‘ yang semakin membuat tempat ini mengesankan dan menarik sebagai tempat peristirahatan saat berwisata di Taman Wisata Gunung Banyak yang tenang dan damai pada saat musim liburan. Anak tangga disusun sangat rapi mendekati rumah kayu meskipun hanya terbuat dari perpaduan tanah dan kayu. Selain itu juga terdapat pegangan yang juga terbuat dari kayu, hal ini mencerminkan bahwa pengelolanya juga sangat memperhatikan keamanan dan kenyamanan para pengunjung Omah Kayu.\r\n<br></br>\r\nDi Omah Kayu ini menghadirkan suasana yang sangat alami, sejuk, dan dingin khas Batu. Tak hanya itu, pada siang hari terdengar suara kicauan berbagai burung. Pesona yang luar biasa ini membuat banyak orang tertarik untuk menginap dan memesan kamar hotel tersebut jauh hari. Keunikan dari Omah Kayu atau Rumah Pohon ini adalah didesain full dengan bagan baku dari kayu, dimana terdapat 6 unit , masing masing unit mempunyai luas 3 x 2 x 2 meter\r\n<br></br>', -7.8549439, 112.4956164, 'omahkayu.jpg', '0000-00-00'),
(8, 1, 1, 1, 'Torong Park', 'Jl. Welirang, Sisir, Kec. Batu, Kota Batu, Jawa Timur 65313', 'Masakan Mie, Kopi Sachet, Snack', 'Objek wisata ini merupakan mata air yang dimanfaatkan oleh warga sekitar yakni warga Desa Sisir, kecamatan Batu. Sama seperti sumber air kebanyakan, Sumber air ini memiliki pemandangan indah yakni dikelilingi dengan hamparan sawah yang oleh warga sekitar kebanyakan ditanami dengan selada air. Untuk menunjang objek wisata ini sebagai destinasi wisata, warga telah membangun pemandian. Dinding pemandian bahkan dihias dengan menggunakan lukisan untuk menambah keindahan wisata alam Sumber air ini. Tidak hanya itu Sumber air ini bahkan sudah memiliki fasilitas mushola. Menandai keseriusan warga sekitar agar objek wisata ini dapat menjadi wisata alam Batu baru, terdapat patung sosok perempuan cantik di tengah lokasi sebagai pemanis.\r\n<br></br>', -7.8728677, 112.5294033, 'torongpark.jpeg', '0000-00-00'),
(9, 1, 1, 2, 'Batu Night Spectacular', 'Jalan Hayam Wuruk No.1, Kec. Batu, Kota Batu, Jawa Timur 65316', 'Jagung Serut, Sosis Bakar', 'Batu Night Spectacular atau dikenal juga dengan sebutan BNS Malang adalah salah satu obyek wisata taman bermain bersanding pasar malam yang bisa Anda kunjungi saat berlibur di Malang.\r\n<br></br>\r\nBNS Batu Night Spectacular dirancang dengan konsep memadukan keindahan dataran tinggi kota Batu dengan aneka macam atraksi dan wahana permainan yang sangat menghibur.\r\n<br></br>\r\nKarena dibuka pada malam hari, di tempat ini Anda akan disuguhi keindahan panorama alam kota Batu yang terlihat sangat eksotis ditambah gemerlapnya lampu-lampu wahana dan pertunjukan yang digelar pengelola.\r\n<br></br>\r\nSelain menikmati indahnya malam, di sini Anda juga akan menemui dan bisa mencoba berbagai macam wahana permainan mulai dari permainan yang menghibur sampai permainan yang menguji adrenaline.', -7.8965239, 112.533652, 'bns.jpg', '0000-00-00'),
(10, 1, 1, 2, 'Jawa Timur Park 3', 'Jl. Ir. Soekarno, Kec. Batu, Kota Batu, Jawa Timur 65236', 'Teh Poci, Sosis Mayo, Mie Nyemek', 'Fasilitas yang tersedia di Jatim Park 3 cukup lengkap. Di sini tersedia layanan Information Center alias Pusat Informasi, yang menjadi fasilitas pendukung untuk bertanya seputar kegiatan di lokasi ini. Kemudian bagi pengunjung yang kelelahan berjalan kaki di wahana luas ini, tersedia E-Bike Station. E-Bike Station menyediakan kendaraan elektrik roda 3 untuk mengangkut penumpang dan barang bawaan Anda selama berekreasi.\r\n<br></br>\r\nToilet di JTP 3 pun lengkap dan cukup bersih. Luar biasanya di objek wisata ini ada toilet khusus difabel yang memudahkan para penyandang disabilitas. Ada juga fasilitas Baby Care, sebuah ruangan privat yang memberikan privasi bagi para ibu untuk menyusui bayi. Tersedia juga jalur khusus kursi roda dan e-bike.\r\n<br></br>\r\nUntuk keperluan makan, tersedia food Court dan Cafe untuk mengisi perut Anda setelah kelelahan menyusuri Dino Park. Musala juga tersedia bagi Pengunjung yang tak ingin ketinggalan melaksanakan ibadah salat 5 waktu selama berwisata.', -7.8962368, 112.5525773, 'jatimparktiga.jpg', '0000-00-00'),
(11, 1, 1, 2, 'Museum Angkut Kota Batu', 'Jl. Terusan Sultan Agung No.2, Kec. Batu, Kota Batu, Jawa Timur 65314', 'Burger King, McDonald, AW', 'Museum Angkut Malang dibuka pada 9 Maret 2014 dan langsung menjadi salah satu rujukan para wisatawan di Jawa Timur. Bisa dibilang Museum Angkut Malang ini menjadi dahaga bagaimana kebutuhan edukasi mengenai transportasi yang ada di Jawa Timur. Ditambah lagi museum yang dikembangkan oleh Jawa Timur Park Group ini juga mengombinasikan antara edukasi dan juga entertainment. Jadi, wajar lo akan melihat banyak sekali keluarga yang mengunjungi museum ini, nggak hanya anak-anak atau orang tua saja.\r\n<br></br>\r\nBerada di lereng gunung, lo akan merasakan hawa dingin dan sejuk yang sangat segar. Dari Alun-Alun Kota Batu yang berjarak sekitar 30-45 menit dari Malang, lo bisa langsung menuju ke Museum Angkut yang jaraknya sekitar 10 menit. Di Museum Angkut ini terdapat parkir yang luas, wisata kuliner, dan juga pusat oleh-oleh.', -7.878608, 112.5175892, 'museum_angkut.jpg', '0000-00-00'),
(12, 1, 1, 2, 'Eco Green Park', 'Jl. Oro-Oro Ombo No.9A, Kec. Batu, Kota Batu, Jawa Timur 65314', 'Sego Burger, Nastar Ijo, Bubur Ayam', 'Di tempat wisata ini kalian bisa puas mengelilingi banyak wahana yang ada sekaligus belajar banyak tentang alam. Tentunya semua wahana yang ada di Eco Green Park bisa dinikmati oleh semua anggota keluarga.\r\n<br></br>\r\nPengunjung bisa mengunjungi banyak wahana dan melakukan berbagai aktivitas di Eco Green Park. Tapi ada tujuh atraksi utama yang wajib dikunjungi yaitu World of Parrot, Recycle, Rumah Terbalik, Eco Journey, Water Outbond, Bird Show dan Eco Science Center.\r\n<br></br>\r\nFasilitas mendasar di Eco Green Park terbilang cukup lengkap, sebut saja food court, minimarket, mushola, area merokok dan akses ramah kursi roda. Selain itu, ada juga pasar hewan jika kalian ingin mencari hewan peliharaan. Selain itu ada juga fasilitas tambahan lainnya yang memudahkan kalian mengelilingi area Eco Green Park seperti mobil atau kereta shuttle dan penyewaan E-bike. E-bike ini bisa disewa dengan biaya sebesar Rp 150.000 untuk durasi penggunaan selama 3 jam.', -7.8886606, 112.5255111, 'ecogreenpark.jpg', '0000-00-00'),
(13, 1, 1, 4, 'Batu Paradise Resort Hotel', 'Jalan Diponegoro No.6, Kec. Batu, Kota Batu, Jawa Timur 65314', 'Ikan Gurame Saos Pedas, Ice Capuccino', 'Batu Paradise Resort Hotel merupakan sebuah akomodasi yang beralamat di Jl. Diponegoro, No. 06, Sisir, Kecamatan Batu, Kota Batu, Jawa Timur. Lokasinya berada di seberang jalan depan Apple Green Hotel Batu. Untuk menjangkaunya, dari Kota Malang, cukup ditempuh dengan berkendara selama sekitar 25 menit. Anda bisa naik angkot jurusan Batu dari Terminal Landungsari.\r\n<br></br>\r\nMenurut penuturan beberapa pengunjung, Batu Paradise Resort Hotel memberikan servis yang baik dengan fasilitas yang cukup nyaman. Fasilitas umum yang ditawarkan di penginapan ini mencakup swimming pool, family room, akses Wi-Fi 24 jam, dan free hot water. Selain itu, hotel ini juga menyediakan rooftop deck yang cocok dijadikan sebagai tempat pesta barbeque.\r\n<br></br>\r\nBatu Paradise Resort Hotel memiliki enam tipe kamar, antara lain Junior Suite Room, Superior Suite Room, Deluxe Suite Room, Executive Suite Room, Super Executive Suite Room, dan Royal Suite Room. Tiap kamar juga sudah dilengkapi dengan fasilitas yang cukup memadai seperti LED TV, kamar mandi dalam dengan shower panas & dingin, sofa, ketel listrik, pendingin ruangan (AC), toiletries, dan meja kerja. ', -7.8773899, 112.5316384, 'paradise.jpeg', '0000-00-00'),
(14, 1, 3, 4, 'Senyum World Hotel', 'Jl. Ir. Soekarno No.144, Kec. Junrejo, Kota Batu, Jawa Timur 65236', 'Food Court, Japanese Bento', 'Salah satu tempat penginapan (hotel) yang bagus sekali. Ditambah dengan pelayanan yang di atas rata rata, semakin banyak pengunjung yang semakin tertarik ke Senyum World Hotel ini.', -7.8965347, 112.5505296, 'senyum.png', '0000-00-00'),
(15, 1, 1, 3, 'Warunk WOW Batu', 'Jl. Panglima Sudirman No.39, Kec. Batu, Kota Batu, Jawa Timur 65311', 'Mie Indomie, Roti Bakar', 'Warunk WOW Batu ini terletak di tengah kota tepatnya di Jl. Panglima Sudirman No.39, Ngaglik, Kota Batu. Café ini memiliki konsep industrial yang modern. Sebelum berpindah tempat, café ini hanya memiliki 1 lantai. Namun setelah  berpindah di sebelah tempat lama, café ini memiliki 3 lantai. Untuk lantai yang ketiga masih dalam proses renovasi. Café ini juga memiliki dua area yang bisa anda gunakan untuk nongkrong. Ada area indoor yang menerapkan konsep industrialnya dan area indoor yang cocok untuk menikmati sore bersama teman atau keluarga. Kami merekomendasikan untuk mengunjungi café ini pada pukul 16.00  sampai 17.00, karena anda dapat menikmati sore di Kota Batu sambil menyantap menu-menu yang ada.\r\n<br></br>\r\nMenu yang disajikan di Warunk WOW Batu ini sangat beragam. Mulai dari snack, minuman, ice cream, hingga makanan berat ada disini. Seperti beef, ayam, mie, ikan dory, roti bakar, tahu cabe garam, frappe, latte, dll. Sehingga anda tidak perlu bingung mau memesan apa ketika mengunjungi café ini. Menu unggulan di Warunk WOW Batu ini adalah berbagai macam ice creamnya. Ice creamnya sendiri sangat enak, hingga membuat para pengunjung ketagihan. Untuk harganya, café ini mematok harga menu yang disajikan sekitar Rp 15.000,- sampai Rp 35.000,-.', -7.8693059, 112.5188385, 'wow.jpg', '0000-00-00'),
(16, 1, 3, 3, 'De Kleine Batu', 'jalibar, Kec. Batu, Kota Batu, Jawa Timur 65311', 'Roti Bakar Manis, Kopi Item, Ice Capuccino', 'Kota Batu Malang dari dulu hingga sekarang terkenal memiliki pesona alam tak terbantahkan. Dimana hampir seluruh area disana memiliki tanah subur dan memiliki kekayaan alam begitu melimpah. Berada di Provinsi Jawa Timur, 90 kilometer dari barat daya kota Surabaya atau berada 15 kilometer barat daya dari pusat kota Malang. Menurut informasi berhasil dihimpun bawah kota Batu memiliki ketinggian mencapai 700 sampai 1.700 meter dari atas permukaan laut, suhu disana pun terbilang adem yakni 12 hingga 18 derajat celcius. Hal itu lah membuat Belanda pun menyebutnya sebagai little Swiss. Disana pun terdapat sebuah kafe sekaligus penginapan modern yang mengusung ala Swiss diberi nama De Kleine Batu Malang. Panorama hamparan pegunungan di kawasan wisata Batu menjadi background sempurna banget.\r\n<br></br>\r\nKafe de Kleine di Batu Malang berada di lahan milik perhutani yang digunakan sebagai area peternakan kuda Mega Star Indonesia, dimana peternakan tersebut sudah terkenal sejak dulu. Luas lahan kafe mencapai kurang lebih 3.000 meter persegi, dari ketinggian begitu nampak jelas panorama gunung Panderman begitu gagah eksotis, sehingga menyejukkan sejauh mata memandang. Buat sobat menyukai suasana asri alami, maka wisata kuliner di Malang ini menjadi liburan cocok buat sobat.\r\n<br></br>\r\nLantaran lokasi kafe berada di dataran tinggi, tentu udara disana cukup dingin, nah bagi wisatawan tak begitu menyukai hawa dingin, telah tersedia spot ruang kaca berbentuk bangunan prisma sebanyak 7 tempat. Dengan begitu pengunjung pun tetap bisa menikmati keindahan alam tanpa harus takut merasakan udara dingin, alternatif lain ada juga spot tungku pembakaran. Lantaran lokasi kafe mengusung konsep outdoor.', -7.9048243, 112.5188949, 'dekleine.jpg', '0000-00-00'),
(29, 2, 1, 3, 'Kopi Letek Alun Alun', 'Jln. Diponegoro No. 23, Sisir, Kecamatan Batu', 'Kopi Hitam, RotKar, Mie Nyemek , Cappucino Coffee', 'bagus', -7.8713221, 112.5254887, 'kopi_letek.jpg', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `komen_ibfk_1` (`id_user`),
  ADD KEY `komen_ibfk_2` (`id_wisata`);

--
-- Indeks untuk tabel `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id_rating`),
  ADD KEY `rating_ibfk_1` (`id_wisata`),
  ADD KEY `rating_ibfk_2` (`id_user`);

--
-- Indeks untuk tabel `tipe_wisata`
--
ALTER TABLE `tipe_wisata`
  ADD PRIMARY KEY (`id_tipe_wisata`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`),
  ADD KEY `wisata_ibfk_1` (`id_admin`),
  ADD KEY `wisata_ibfk_2` (`id_kecamatan`),
  ADD KEY `wisata_ibfk_3` (`id_tipe_wisata`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tipe_wisata`
--
ALTER TABLE `tipe_wisata`
  MODIFY `id_tipe_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`id_wisata`) REFERENCES `wisata` (`id_wisata`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`id_wisata`) REFERENCES `wisata` (`id_wisata`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `wisata`
--
ALTER TABLE `wisata`
  ADD CONSTRAINT `wisata_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wisata_ibfk_2` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatan` (`id_kecamatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wisata_ibfk_3` FOREIGN KEY (`id_tipe_wisata`) REFERENCES `tipe_wisata` (`id_tipe_wisata`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

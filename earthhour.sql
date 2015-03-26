-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2015 at 12:48 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `earthhour`
--

-- --------------------------------------------------------

--
-- Table structure for table `disponsori`
--

CREATE TABLE IF NOT EXISTS `disponsori` (
  `IDEvent` int(11) NOT NULL,
  `IDSponsor` int(11) NOT NULL,
  KEY `IDEvent` (`IDEvent`),
  KEY `IDSponsor` (`IDSponsor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `IDEvent` int(11) NOT NULL,
  `NamaEvent` varchar(100) NOT NULL,
  `TglMulai` date NOT NULL,
  `TglSelesai` date NOT NULL,
  `DeskripsiEvent` text NOT NULL,
  PRIMARY KEY (`IDEvent`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`IDEvent`, `NamaEvent`, `TglMulai`, `TglSelesai`, `DeskripsiEvent`) VALUES
(0, 'No Rubbish, Yes Creativity', '2015-03-11', '2015-03-11', '<p>SURABAYA-Earth Hour Surabaya kembali menggelar aksi pada hari Minggu pagi (1/3). Aksi bertajuk &ldquo;No Rubbish, Yes Creativity&rdquo; yang diselenggarakan di Car Free Day (CFD) Darmo ini cukup menarik minat para pengunjung CFD Darmo untuk bergabung. Hal itu dilihat dari antusiasme para pengunjung yang mampir ke booth EH Surabaya.</p>\r\n\r\n<p>Aksi &ldquo;No Rubbish, Yes Creativity&rdquo; adalah membuat kerajinan tangan dari barang-barang bekas. EH Surabaya mengedukasi masyarakat secara langsung bahwa barang-barang bekas seperti, koran bekas, majalah bekas, kalender bekas, dan botol plastik bekas bisa berubah fungsi menjadi barang-barang kreatif seperti tempat alat-alat tulis, tempat handphone, vas bunga, dll.</p>\r\n\r\n<p>Pengunjung yang rata-rata anak muda tersebut, sangat serius mengikuti instruksi dari kakak-kakak EH Surabaya untuk membuat kerajinan tangan dari barang-barang bekas tersebut, dan tersenyum puas ketika kerajinan tangan mereka selesai. Setidaknya mereka pulang dari CFD bukannya membuat sampah tetapi membawa sesuatu yang berguna yang dapat digunakan kembali.</p>\r\n\r\n<p>Sampah yang bertumpuk setelah CFD cukup banyak di trotoar-trotoar maupun di jalanan. Banyak penjual maupun pengguna CFD membuang sampah tidak pada tempatnya. Padahal Dinas Kebersihan dan Pertamanan (DKP) kota Surabaya sudah menambah jumlah tempat sampah di sepanjang area CFD.</p>\r\n\r\n<p>Dengan diadakannya aksi ini, diharap masyarakat Surabaya lebih kreatif dan bijak dalam mengolah kembali barang-barang bekas yang sudah tidak terpakai. Daripada membuat sampah di CFD, lebih baik mengurangi sampah dengan mengubahnya menjadi barang daur ulang yang dapat digunakan kembali. -mona-</p>\r\n'),
(1, 'Penanaman Mangrove di Surabaya', '2015-03-08', '2015-03-08', '<p>#IniAksiku Kali ini Earth Hour Surabaya mengadakan Penanaman&nbsp;Mangrove di Surabaya, tepatnya di daerah Wonorejo. Menanam 300 bibit tanaman Mangrove&nbsp;jenis Rhizopora Stylosa Griff bersama para komunitas komunitas yang ada di&nbsp;Surabaya, mulai dari Kendos Runner, HGC Surabaya, Earth Hour Sidoarjo ,Earth&nbsp;Hour Kota Wisata Batu , Earth Hour Kediri , SPE ITS, Nol Sampah Surabaya,&nbsp;dan Scape Parkour.</p>\r\n\r\n<p>Kita melakukan briefing terlebih dahulu sebelum melakukan penanaman&nbsp;dan juga ditambah penjelasan dari pihak lokasi Ekowisata Mangrove Wonorejo&nbsp;bahwa lokasi ini sangat penting bagi habitat burung dan berbagai macam hewan yang ada di dalamnya, bahkan burung burung migrasi pun hinggap di lokasi&nbsp;Mangrove ini. Diketahui jumlah populasi burung dan berbagai jenis hewan di&nbsp;lokasi ini sudah mencapai ribuan.</p>\r\n\r\n<p>Masing masing undangan membawa beberapa bibit dan menuju lokasi&nbsp;yang sudah ditentukan dan disiapkan. Setelah bibt mangrove tertanam, bagian&nbsp;atas batang bibit mangrove diikat ke Ajir / batang penyangga yang tertanam&nbsp;persis disampingnya, berguna supaya bibit mangrove itu tumbuh tegak. Namun&nbsp;karena lahannya yang agak berlumpur, sehingga acara&nbsp;penanaman mangrove di Surabaya ini disarankan untuk&nbsp;menggunakan sandal atau telanjang kaki.</p>\r\n\r\n<p>Setelah selesai semua, mereka semua kembali ke basecamp untuk&nbsp;membersihkan diri dan beristirahat sambil mengambil snack yang sudah kami&nbsp;sediakan. Disamping itu kita juga menyediakan merchandise seperti baju&nbsp;Conserve / Earth On yang bisa mereka beli langsung di lokasi.</p>\r\n\r\n<p>Sebelum acara diakhiri, kami bersama para undangan melakukan sesi&nbsp;foto terlebih dahulu sekaligus mengabadikan tagline #IniAksikuManaAksimu.</p>\r\n\r\n<p>Kegiatan ini tak hanya melakukan penanaman mangrove di Surabaya&nbsp;saja, namun setelah ini&nbsp;kami akan selalu mengontrol kondisi bibit mangrove yang sudah ditanam. Karena&nbsp;tanaman mangrove sendiri pada awal penanaman ada masa kritis, setelah&nbsp;melewati masa kritis, jadwal pengontrolan pun bisa dikurangi.</p>\r\n\r\n<p>Buat info kamu nih, tanaman mangrove itu banyak manfaatnya loh, misal&nbsp;bisa digunakan untuk kayu, bahan pangan dan minuman seperti dodol dan sirup,&nbsp;beberapa jenis mangrove ada yang bisa menghasilkan buah salah satunya buah&nbsp;pidada, dan juga bisa digunakan sebagai bahan kosmetik loh.</p>\r\n\r\n<p>Use #YourPower to planting mangrove!</p>\r\n'),
(2, 'Surabaya Earth Hour Campaign', '2015-03-16', '2015-03-16', '<p>Memilih taman Bungkul segai tempat kampanye kreatif. Team Earth Hour Surabaya memulai serentak dengan 4 kota. Antara lain Jakarta, Semarang, Yogyakarta, dan Bali. Minggu (13/3)&nbsp;Memanfaatkan Car free day sebagai moment berkumpulnya masyarakat menghabiskan waktu luang saat weekend. &nbsp;Kampanya kreatif ini bertujuan untuk memberi penyuluhan tentang pentingnya menghemat energi, selain itu juga mengajak warga Surabaya untuk mematikan lampu selama 1 jam pada tanggal 26 maret 2011 pukul 20.30 &ndash; 21.30 wib.</p>\r\n\r\n<p>Team Earth Hour Indonesia ini melakukan hal seperti :</p>\r\n\r\n<ul>\r\n	<li>Mengedukasi masyarakat mengenai ancaman pemanasan global dan apa yang bisa di lakukan setiap individu untuk membuat suatu perubahan dalam mengurangi emisi di kehidupan sehari-hari.</li>\r\n	<li>Mengajak masyarakan untuk ikut berpartisipasi mematikan lampu dan alat-alat elektronik.</li>\r\n	<li>Mengajak mayarakan untuk melakukan perubahan gaya hidup yang ramah lingkungan.</li>\r\n</ul>\r\n\r\n<p>Terhitung sudah 30 orang yang mau ikut berpartisipasi untuk mematikan lampu. Dengan menggunakan aplikasi buatan sendiri, Surabaya mempunyai database kecil mengenai data siapa saja yang mau berparatisipasi untuk mengikuti kegiatan Earth Hour. Kemarin memang diakui team EH Surabaya kurang persiapan untuk melakukan kampanye ini. Tapi besok minggu di car free day mereka bernjanji akan lebih baik dari sebelumnya.</p>\r\n\r\n<p>Minggu besok akan ada lagi kampanye Earth Hoour di Taman bungkul. Bagi warga Surabaya. yuk, rame-rame dateng ke taman bungkul buat ikut meramaikan kampanye Earth Hour ini.&nbsp;Silahkan follow&nbsp;<a href="http://twitter.com/EHindonesia" target="_blank">@EHindonesia</a> di Twitter dan gabung di&nbsp;<a href="http://www.facebook.com/pages/Earth-Hour-Indonesia-2011-60/121017344633203" target="_blank">Facebook</a>untuk informasi lebih lanjut. Jadwal-jadwal kampanye di berbagai kota dan jadwal kegiatan-kegiatan pendukung Earth Hour di sana.</p>\r\n'),
(3, 'Serunya workshop Earth Hour Surabaya', '2015-03-06', '2015-03-06', '<p>6 Maret 2011, acara workshop Earth hour Surabaya diadakan di gedung Stikom Surabaya. Acara yang di jadwalkan jam 8 ini sedikit molor dari perkiraan. Tapi itu semua tidak mengurangi antusias peserta yang akan mengikuti workshop. Mereka berbondong-bondong datang dari berbagai komunitas di Surabaya yang ingin meramaikan kegiatan Earth Hour.</p>\r\n\r\n<p>Acara awal adalah registrasi peserta. Terkumpul sekitar 17 orang pertama yang datang pada hari itu dan disusul peserta yang datang setelah acara dimulai. Sebelum acara di mulai peserta di perbolehkan foto dengan membawa logo 60+ dengan slogan Earth Hour.</p>\r\n\r\n<p>Wajah-wajah ceria tersirat dari para peserta yang antusias untuk berfoto dan bernarsis ria. Acara berikutnya di buka oleh Verena dari perwakilan Earth Hour Jakarta. Perkenalan dan pembentukan team kerja dilakukan setelahnya. Maksut dan tujuan pembuatan team ini untuk mempermudah kordinasi dan mempercepat pekerjaan yang sudah dikelompok-kelompokkan. Dibawakan oleh Bu Ditha dengan perkenalan diri dan apa itu gerakan Earth Hour. Dalam workshop ini peserta ditantang untuk menciptakan daya ungkit yang besar. Dilanjutkan dengan sesi perkenalan antar peserta lewat pertukaran hobi dan nomor HP,</p>\r\n\r\n<p>Setelah itu masing-masing peserta membentuk kelompok yang terbagi dari team jejaring, kampanye kreatif, Dokumentasi dan video, media masa &amp; kampanye online. Masing-masing 5 orang untuk sharing dan menuliskan apa itu EH Champion dan karakter apa yang dibutuhkan untuk menjadi seorang EH Champion.&nbsp; Dipilih ketua kelompok masing-masing dari grup tersebut serta dibentuk lagi kelompok yang sesuai dengan minat masing-masing dan pengisian &ldquo;Why Mastery&rdquo; serta saling membacakan dan sharing kepada rekan 1 tim. Disambung dengan menyanyikan lagu Indonesia Tanah Air Beta bersama-sama lalu dilakukan<strong><em> afirmasi</em></strong>. <em>Afirmasi</em> adalah suatu hal yang penting karena akan memotivasi kita untuk berubah dari riak-riak kecil menjadi ombak besar yang dapat berpengaruh.</p>\r\n\r\n<p>Sesi berikutnya adalah (Video Presentation &amp; EH Presentation) yang di bawakan oleh verena. Video EH tahun lalu di putar untuk memberikan kesan yang mendalam dan menimbulkan semangat para peserta untuk menciptakan Earth Hour 2011 ini lebih meriah dari tahun-tahun sebelumnya. Dari presentasi verena menghasilkan beberapa pengetahuan baru untuk peserta, seperti :</p>\r\n\r\n<ul>\r\n	<li>Kampanye EH di seluruh dunia tidak ada yang murni dimulai dari WWF namun oleh sekelompok anak muda, lalu dikumpulkan anak-anak muda dari Negara-negara di dunia dan membicarakan mengenai kampanye yang dapat dilakukan dengan tools yang mudah namun bisa melibatkan seluruh dunia dan dapat berpartisipasi menyelamatkan dunia.</li>\r\n	<li>Pertama kali kampanye EH dimulai pada tahun 2007 di Australia telah diikuti oleh 2,2 juta orang.</li>\r\n	<li>Yang membuat kegiatan EH mengglobal adalah dokumentasi dan video yang baik dan dipublikasikan.</li>\r\n	<li>Peserta WS yang ada bukan dipaksa untuk mendukung kampanye EH, namun lebih kepada apakah peserta da teman-teman WS mempunyai spirit yang sama.</li>\r\n	<li>Dalam EH ini adalah bagaimana menggabungkan harapan yang sama dari setiap kita menuju sebuah action.</li>\r\n</ul>\r\n\r\n<p>Setelah sesi video dan presentasi peserta di persilahkan untuk menyantap santap siang. Yang membuat sedikit beda dari makan siang acara workshop adalah tersedianya syrup <em>mangrove</em> yang asli buatan warga bosem-wonorejo Surabaya. Syrup ini segar dan pas dinikmati saat siang hari.</p>\r\n\r\n<p>Setelah kesempatan ishoma selesai. Sesi ketiga adalah&nbsp; Creative Campaign oleh G. Aji &amp; G. Aristo. Disini mas G.aji mengajak peserta untuk melakukan games dengan cara membuat gambar kotak atau bujur sangkar, lalu kita disuruh membuat sebuah titik disembarang tempat. Entah itu di dalam kotak atau di luar kotak. Beberapa peserta membuat titik di dalam dan di tengah kotak yang mereka bikin. Dan beberapa lagi membuat titik di luar kotak. Setelah itu 2 orang yang membuat titik didalam dan diluar dan tiap peserta di suruh memberi alasan kenapa meraka membuat titik itu. &lsquo;</p>\r\n\r\n<ol>\r\n	<li>Pembuatan titik didalam kotak &ldquo;Karena suka-suka aja&rdquo;, &ldquo;karena sudah terbiasa membuat titik ditengah kotak&rdquo; dll</li>\r\n	<li>Pembuatan titik diluar kotak &ldquo;Karena suka-suka&rdquo;</li>\r\n</ol>\r\n\r\n<p>Banyak jawaban suka-suka yang di lontarkan oleh peserta. Sebenarnya mas aji ingin memberi tahu bawasannya Creative campaign adalah cara berfikir<em><strong> Thinking outside the box. </strong></em>Tidak ada terori yang valid tentang Creative Campaign. Semua orang di tuntut berfikir kreatif agar dapat menarik banyak peminat. Selain itu kampanye kreatif harus <em>fun</em> dan membuat orang termotivasi untuk mengikuti kegiatan yang sedang kita kampanyekan.</p>\r\n\r\n<p>Setelah acara presentadi dari panitia Earth Hour jakarta selesai. Team EH Surabaya diwajibkan membuat sebuah rencana kerja untuk menyukseskan acara Earth Hour yang diadakan tgl 26 maret nanti. Dengan seru dan semangat semua peserta melakukan sharing pendapat dan rencana yang akan mereka lakukan pada hari H. Kelompok media massa dan kampanye online selesai terlebih dahulu. Dan yang paling terahir adalah team kampanye kreatif yang harus banyak menyusun rangkaian kegiatan untuk mendukung suksesnya acara EH Surabaya.</p>\r\n\r\n<p>Tiap Team mempresentasikan <em>planing</em> kedepan dengan atraktif dan menarik. Di ikuti sesi tanya jawab dari para peserta dan panitia. Banyak masukan dan sanggahan yang lebih membangun dan memantapkan Team Surabaya untuk lebih bersemangat dalam menjalankan kampanye Earth Hour ini. Akhir acara adalah sesi foto, bergaya dan bernarsis ria dengan semua peserta dan panitia Earth Hour.</p>\r\n\r\n<h2><strong>Surabaya !! You Rock!! </strong></h2>\r\n'),
(4, 'Street Campaign EH Surabaya hadir di CFD Tunjungan', '2015-03-05', '2015-03-05', '<p>Streetchampaign tim EHSurabaya kali ini sedikit berbeda dari sebelumnya,kami berkolaborasi dengan salah satu saluran televisi lokal yaitu SBO TV. Disini kami tampil dalam acara Sunday Morning,yg mengambil lokasi syuting didepan Rumah Makan Yu&rsquo;Limbuk mulai dari jam 06.00-08.00. Tema acara Sunday Morning minggu ini adalah tentang Earth Hour,acara SunMor ini diawali dengan tampilnya band Indie Surabaya dan dilanjutkan dengan obrolan membahas EarthHour antara MC dengan mas Alvin salah satu volunteer EHSurabaya, Di CFD kali ini tetap ada both untuk SignUp dengan signup girl yaitu Mifta (KOPHI) ,ada both untuk berfoto dengan papan statement dengan fotografer EH Sendy (Stikom) ,both untuk foto levitasi oleh Bagus fotografer dari Airlangga Photography Society,ada rampok kresek,selain itu tim EHSurabaya juga berkolaborAksi dengan &ldquo;MUSTIKA&rdquo; music limbah asal SMANDRY (SMAN 1 Driyorejo) yang akan menyanyikan beberapa lagu mengenai sampah.</p>\r\n\r\n<p>Kurang lebih ada 100 orang warga Surabaya yang sudah signup di both kami kali ini, ada anak2 dari SMKN 1,ada dari komunitas roller blade,bahkan bapak ibu yg lagi asik gowes juga ikutan signup &nbsp;dan berfoto dengan papan statement di both foto kami.</p>\r\n\r\n<p>MUSTIKA adalah grup music limbah asal SMANDRY yang beranggotakan 25orang siswa kelas XI Ipa 2 SMAN 1 Driyorejo. Mereka tampil dengan kostum daur ulang mereka,yg cewek pakai rok rumbai2&amp; bando dari tali raffia,yang cowok pakai rompi&amp;topi dari karung beras,mereka membawa alat music limbah mereka berupa botol plastic,botol kaca,kaleng,bak plastic,dll. MUSTIKA menyanyikan kurang lebih ada 6buah lagu. Lagu yang berjudul &ldquo;sampah&rdquo; dan &ldquo;ninja sampah&rdquo; mereka sukses menimbulkan decak kagum dan sorak sorai pengunjung CFD jl. Tunjungan. Lagu-lagu yang mereka bawakan menceritakan ajakan untuk memilah-milah sampah,hidup &ldquo;hijau&rdquo; dan hemat energy.</p>\r\n\r\n<p>Usai tampil di acara Sunday Morning SBO TV, kami tim EHSurabaya bergeser ke acara CFD JawaPos dan Polygon yg juga bertempatkan di jl.Tunjungan,disini kami bertemu dengan seorang volunteer EHWashington DC,kami ngobrol singkat seputar EH,berbagi pengalaman tentang EH di Washington DC,tak lupa juga kami dan MUSTIKA foto-foto bareng dgn papan statement,dan membuat video testimonial mengucapkan kata-kata &ldquo;INI AKSIKU&rdquo; secara barengan dengan si Bule J</p>\r\n\r\n<p>Terik matahari semakin terasa menyengat,namun itu tidak menyurutkan semangat kami tim EHSurabaya dan MUSTIKA untuk tampil beraksi kembali di panggung jawapos&amp;polygon. Upit dan Alvin kembali berkoar-koar mengajak warga Surabaya agar lebih cinta lingkungan dan hemat energy &amp; turut serta berpartisipasi dalam puncak acara EarthHourSurabaya pada tanggal 31 Maret 2012 pkl. 20.30-21.30 di GrandCity,setelah itu MUSTIKA kembali berhasil memukau warga Suroboyo dengan aksi panggung mereka.</p>\r\n\r\n<p>Aksi kami di CFD jl.Tunjungan berakhir pada pkl.10.00 WIB dan dilanjutkan dengan sarapan bareng sambil evaluasi streetchampaign kali ini. Hasilnya cukup memuaskan dan minggu depan kami Tim EHSurabaya akan mengadakan streetchampaign yg lebih seru dan kreatif utk mengajak warga Suroboyo untuk lebih cinta lingkungan dan hemat energi.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE IF NOT EXISTS `gambar` (
  `IDGambar` int(11) NOT NULL,
  `DataGambar` mediumblob NOT NULL,
  `JudulGambar` varchar(100) NOT NULL,
  `WaktuGambar` date NOT NULL,
  `DeskripsiGambar` text NOT NULL,
  PRIMARY KEY (`IDGambar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `listgambar`
--

CREATE TABLE IF NOT EXISTS `listgambar` (
  `IDEvent` int(11) NOT NULL,
  `IDGambar` int(11) NOT NULL,
  KEY `IDEvent` (`IDEvent`),
  KEY `IDGambar` (`IDGambar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `listvideo`
--

CREATE TABLE IF NOT EXISTS `listvideo` (
  `IDEvent` int(11) NOT NULL,
  `IDVideo` int(11) NOT NULL,
  KEY `IDEvent` (`IDEvent`),
  KEY `IDVideo` (`IDVideo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `organisasi`
--

CREATE TABLE IF NOT EXISTS `organisasi` (
  `IDOrganisasi` int(11) NOT NULL,
  `NamaOrganisasi` varchar(50) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Deskripsi` text NOT NULL,
  `Email` varchar(50) NOT NULL,
  `NoTlp` varchar(20) NOT NULL,
  `Facebook` varchar(50) NOT NULL,
  `Twitter` varchar(50) NOT NULL,
  `Pinterest` varchar(50) NOT NULL,
  `Gplus` varchar(50) NOT NULL,
  `Linkedin` varchar(50) NOT NULL,
  `Instagram` varchar(50) NOT NULL,
  PRIMARY KEY (`IDOrganisasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organisasi`
--

INSERT INTO `organisasi` (`IDOrganisasi`, `NamaOrganisasi`, `Alamat`, `Deskripsi`, `Email`, `NoTlp`, `Facebook`, `Twitter`, `Pinterest`, `Gplus`, `Linkedin`, `Instagram`) VALUES
(1, '', 'sebelah aiola', '<p><strong>EARTH HOUR adalah salah satu kampanye WWF, organisasi konservasi terbesar di dunia, yang berupa inisiatif global untuk mengajak individu, komunitas, praktisi bisnis, dan pemerintahan di seluruh dunia untuk turut serta mematikan lampu dan peralatan elektronik yang sedang tidak dipakai selama 1 jam, pada setiap hari Sabtu di minggu ke-3 bulan Maret setiap tahunnya. Tahun ini, Earth Hour dilaksanakan pada tanggal 26 Maret 2011 pukul 20.30 &ndash; 21.30 (waktu setempat).</strong></p>\r\n\r\n<p>EARTH HOUR berawal dari kampanye kolaborasi antara WWF-Australia, Fairfax Media, dan Leo Burnett untuk kota Sydney, Australia, dengan tujuan mengurangi gas rumah kaca di kota tersebut sebanyak 5% pada tahun 2007. Keberhasilan kampanye ini diharapkan dapat diadopsi oleh masyarakat, komunitas, bisnis, serta pemerintah lain di seluruh dunia sehingga seluruh warga dunia dapat menunjukkan bahwa sebuah aksi individu yang sederhana sekalipun bila dilakukan secara massal akan membuat kehidupan kita di Bumi menjadi lebih baik.</p>\r\n', 'earthhoursurabaya@gmail.com', '081811111', 'https://facebook.com/earthhour', 'https://twitter.com/earthhour', 'https://pinterest.com/earthhour', 'https://plus.google.com/+EarthHour/about', 'Earth Hour', 'https://instagram.com/earthhourofficial');

-- --------------------------------------------------------

--
-- Table structure for table `sponsor`
--

CREATE TABLE IF NOT EXISTS `sponsor` (
  `IDSponsor` int(11) NOT NULL,
  `NamaSponsor` varchar(50) NOT NULL,
  `LinkSponsor` varchar(200) NOT NULL,
  `Logo` blob NOT NULL,
  PRIMARY KEY (`IDSponsor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'administrator', '33030396a73a00f4ed47910e0e274975');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `IDVideo` int(11) NOT NULL,
  `Link` varchar(300) NOT NULL,
  `JudulVideo` varchar(100) NOT NULL,
  `WaktuVideo` date NOT NULL,
  PRIMARY KEY (`IDVideo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `disponsori`
--
ALTER TABLE `disponsori`
  ADD CONSTRAINT `disponsori_ibfk_1` FOREIGN KEY (`IDEvent`) REFERENCES `event` (`IDEvent`),
  ADD CONSTRAINT `disponsori_ibfk_2` FOREIGN KEY (`IDSponsor`) REFERENCES `sponsor` (`IDSponsor`);

--
-- Constraints for table `listvideo`
--
ALTER TABLE `listvideo`
  ADD CONSTRAINT `listvideo_ibfk_1` FOREIGN KEY (`IDVideo`) REFERENCES `video` (`IDVideo`),
  ADD CONSTRAINT `listvideo_ibfk_2` FOREIGN KEY (`IDEvent`) REFERENCES `event` (`IDEvent`),
  ADD CONSTRAINT `listvideo_ibfk_3` FOREIGN KEY (`IDVideo`) REFERENCES `video` (`IDVideo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

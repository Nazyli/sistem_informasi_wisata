-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 11 Jul 2021 pada 17.51
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsiwikode`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery_wisata`
--

CREATE TABLE `gallery_wisata` (
  `id` int(11) NOT NULL,
  `foto_wisata` varchar(255) DEFAULT NULL,
  `wisata_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gallery_wisata`
--

INSERT INTO `gallery_wisata` (`id`, `foto_wisata`, `wisata_id`) VALUES
(20, '013fac9a36ef5c8d28f32547822f69ac.jpg', 9),
(21, '5133789ed57bb95ff63542712ae19345.PNG', 14),
(22, 'd827f5e5e26b86d2379375657ab3e2f5.PNG', 31),
(23, '1b74a7d5f9aa12cbd96b8e600bd2cf9c.PNG', 31),
(24, 'c6e253ca7ab3a88ca03274dec46cf84a.PNG', 31),
(25, '3b47431c7dc1e71199925cc00b3cce41.PNG', 31),
(26, '34079cba9599705b5ed110650340481a.PNG', 31),
(27, '63e703cf08210164621173edc0dcc290.PNG', 31),
(29, '3d066f99733179523f6d46dad4281490.jpg', 1),
(30, 'a0f1f7273ec81739ca23fb584a5160af.jpg', 1),
(31, '04555413c9bc4a168eee78c1679c2ce1.jpg', 1),
(32, 'e5ee2e93a596ffa3368283a9aea0ef95.jpg', 1),
(33, '8eabab6207ef2b94ec7bd1dc31082ad0.jpeg', 1),
(34, 'd2800bc3968f82bb11a6e2d88cc2d0a9.jpg', 1),
(37, 'e21d687887c7762d1f8e1bd8bc432a37.jpg', 32);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_kuliner`
--

CREATE TABLE `jenis_kuliner` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jenis_kuliner`
--

INSERT INTO `jenis_kuliner` (`id`, `nama`) VALUES
(1, 'Kedai/Cafe'),
(2, 'Restaurant'),
(3, 'Pasar Kaget');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_wisata`
--

CREATE TABLE `jenis_wisata` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jenis_wisata`
--

INSERT INTO `jenis_wisata` (`id`, `nama`) VALUES
(1, 'Argo Wisata'),
(2, 'Taman Wisata'),
(3, 'Religius'),
(4, 'Museum'),
(5, 'Water Park');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profesi`
--

CREATE TABLE `profesi` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `profesi`
--

INSERT INTO `profesi` (`id`, `nama`) VALUES
(1, 'Artist'),
(2, 'Pejabat'),
(3, 'Mahasiswa'),
(4, 'Pegawai Swasta'),
(5, 'Umum'),
(7, 'Software Development');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL,
  `wisata_id` int(11) NOT NULL,
  `profesi_id` int(11) NOT NULL,
  `rating` smallint(6) DEFAULT NULL,
  `komentar` text DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `testimoni`
--

INSERT INTO `testimoni` (`id`, `nama`, `email`, `wisata_id`, `profesi_id`, `rating`, `komentar`, `user_id`, `created_at`, `foto`) VALUES
(3, 'Evry Nazyli Ciptanto', 'member@gmail.com', 15, 3, 2, 'Haloo id enim. Curabitur massa. Vestibulum accumsan neque et nunc. Quisque ornare tortor at risus. Nunc ac sem ut dolor dapibus gravida. Aliquam', 2, '2021-07-05 21:58:57', '16d33eef41b9d5a32459e322ae83d1ab.png'),
(4, 'Evry Nazyli Ciptanto', 'member@gmail.com', 9, 3, 3, 'Nullam vitae diam. Proin dolor. Nulla semper tellus id nunc interdum feugiat. Sed nec metus facilisis lorem tristique aliquet. Phasellus fermentum convallis', 2, '2021-07-05 21:58:57', '16d33eef41b9d5a32459e322ae83d1ab.png'),
(5, 'Deacon Shellie', 'quam.a.felis@adipiscingenim.com', 6, 5, 5, 'malesuada augue ut lacus. Nulla tincidunt, neque vitae semper egestas, urna justo faucibus lectus, a sollicitudin orci sem eget massa. Suspendisse eleifend.', NULL, '2021-07-05 21:58:57', NULL),
(6, 'Yolanda Grace', 'libero.at.auctor@dui.ca', 10, 4, 1, 'dolor dapibus gravida. Aliquam tincidunt, nunc ac mattis ornare, lectus ante dictum mi, ac mattis velit justo nec ante. Maecenas mi felis,', NULL, '2021-07-05 21:58:57', NULL),
(7, 'Jada Jacob', 'Nunc@Sed.org', 5, 1, 1, 'odio a purus. Duis elementum, dui quis accumsan convallis, ante lectus convallis est, vitae sodales nisi magna sed dui. Fusce aliquam, enim', NULL, '2021-07-05 21:58:57', NULL),
(8, 'Daniel Kenyon', 'tristique.senectus.et@consectetuer.net', 16, 1, 1, 'rutrum, justo. Praesent luctus. Curabitur egestas nunc sed libero. Proin sed turpis nec mauris blandit mattis. Cras eget nisi dictum augue malesuada', NULL, '2021-07-05 21:58:57', NULL),
(9, 'Vanna Clayton', 'Integer.aliquam.adipiscing@hymenaeosMauris.edu', 21, 2, 5, 'cursus luctus, ipsum leo elementum sem, vitae aliquam eros turpis non enim. Mauris quis turpis vitae purus gravida sagittis. Duis gravida. Praesent', NULL, '2021-07-05 21:58:57', NULL),
(10, 'Chaney Kelsie', 'mus.Donec@Suspendisse.net', 13, 5, 3, 'mollis dui, in sodales elit erat vitae risus. Duis a mi fringilla mi lacinia mattis. Integer eu lacus. Quisque imperdiet, erat nonummy', NULL, '2021-07-05 21:58:57', NULL),
(11, 'Yael Barbara', 'feugiat.Lorem.ipsum@nonbibendum.net', 1, 2, 3, 'ac libero nec ligula consectetuer rhoncus. Nullam velit dui, semper et, lacinia vitae, sodales at, velit. Pellentesque ultricies dignissim lacus. Aliquam rutrum', NULL, '2021-07-05 21:58:57', NULL),
(12, 'Jesse Tyrone', 'Nam.ligula.elit@tempus.ca', 7, 5, 5, 'et magnis dis parturient montes, nascetur ridiculus mus. Proin vel nisl. Quisque fringilla euismod enim. Etiam gravida molestie arcu. Sed eu nibh', NULL, '2021-07-05 21:58:57', NULL),
(13, 'Nayda Dora', 'eget.volutpat@cursusluctusipsum.edu', 2, 5, 5, 'velit eu sem. Pellentesque ut ipsum ac mi eleifend egestas. Sed pharetra, felis eget varius ultrices, mauris ipsum porta elit, a feugiat', NULL, '2021-07-05 21:58:57', NULL),
(14, 'MacKenzie Aquila', 'nisl@facilisis.co.uk', 5, 2, 4, 'adipiscing ligula. Aenean gravida nunc sed pede. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel arcu', NULL, '2021-07-05 21:58:57', NULL),
(15, 'Kim Maxine', 'magna.Ut.tincidunt@vitaepurus.co.uk', 3, 2, 1, 'eleifend egestas. Sed pharetra, felis eget varius ultrices, mauris ipsum porta elit, a feugiat tellus lorem eu metus. In lorem. Donec elementum,', NULL, '2021-07-05 21:58:57', NULL),
(16, 'Jasmine Kirby', 'Donec.felis.orci@Nunc.ca', 15, 2, 4, 'tellus. Aenean egestas hendrerit neque. In ornare sagittis felis. Donec tempor, est ac mattis semper, dui lectus rutrum urna, nec luctus felis', NULL, '2021-07-05 21:58:57', NULL),
(17, 'Cherokee Jolene', 'non.justo@utodio.net', 18, 1, 3, 'dolor. Donec fringilla. Donec feugiat metus sit amet ante. Vivamus non lorem vitae odio sagittis semper. Nam tempor diam dictum sapien. Aenean', NULL, '2021-07-05 21:58:57', NULL),
(18, 'Demetrius Herrod', 'est@Curabiturdictum.ca', 12, 3, 4, 'dictum eu, eleifend nec, malesuada ut, sem. Nulla interdum. Curabitur dictum. Phasellus in felis. Nulla tempor augue ac ipsum. Phasellus vitae mauris', NULL, '2021-07-05 21:58:57', NULL),
(19, 'Ashton Quail', 'nunc.In.at@lectusjustoeu.com', 5, 1, 3, 'tellus. Phasellus elit pede, malesuada vel, venenatis vel, faucibus id, libero. Donec consectetuer mauris id sapien. Cras dolor dolor, tempus non, lacinia', NULL, '2021-07-05 21:58:57', NULL),
(20, 'Jade Nolan', 'a.magna@diam.co.uk', 3, 1, 4, 'non leo. Vivamus nibh dolor, nonummy ac, feugiat non, lobortis quis, pede. Suspendisse dui. Fusce diam nunc, ullamcorper eu, euismod ac, fermentum', NULL, '2021-07-05 21:58:57', NULL),
(21, 'Ifeoma Destiny', 'eu.erat.semper@lectusquismassa.co.uk', 21, 4, 3, 'sed, facilisis vitae, orci. Phasellus dapibus quam quis diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', NULL, '2021-07-05 21:58:57', NULL),
(22, 'Sade Lael', 'mi.fringilla@facilisismagnatellus.co.uk', 4, 1, 2, 'est, congue a, aliquet vel, vulputate eu, odio. Phasellus at augue id ante dictum cursus. Nunc mauris elit, dictum eu, eleifend nec,', NULL, '2021-07-05 21:58:57', NULL),
(23, 'Judah Cameran', 'nec@Seddictum.org', 19, 5, 1, 'Morbi quis urna. Nunc quis arcu vel quam dignissim pharetra. Nam ac nulla. In tincidunt congue turpis. In condimentum. Donec at arcu.', NULL, '2021-07-05 21:58:57', NULL),
(24, 'Griffith Reuben', 'eu.metus@DonecegestasDuis.edu', 14, 4, 5, 'et risus. Quisque libero lacus, varius et, euismod et, commodo at, libero. Morbi accumsan laoreet ipsum. Curabitur consequat, lectus sit amet luctus', NULL, '2021-07-05 21:58:57', NULL),
(25, 'Fritz Ramona', 'turpis.Nulla.aliquet@ultrices.edu', 18, 2, 3, 'ut mi. Duis risus odio, auctor vitae, aliquet nec, imperdiet nec, leo. Morbi neque tellus, imperdiet non, vestibulum nec, euismod in, dolor.', NULL, '2021-07-05 21:58:57', NULL),
(26, 'Beverly Ruth', 'nec@quamCurabitur.org', 5, 1, 4, 'amet, faucibus ut, nulla. Cras eu tellus eu augue porttitor interdum. Sed auctor odio a purus. Duis elementum, dui quis accumsan convallis,', NULL, '2021-07-05 21:58:57', NULL),
(27, 'Noble Isabelle', 'sem@elitEtiamlaoreet.com', 1, 2, 2, 'In scelerisque scelerisque dui. Suspendisse ac metus vitae velit egestas lacinia. Sed congue, elit sed consequat auctor, nunc nulla vulputate dui, nec', NULL, '2021-07-05 21:58:57', NULL),
(28, 'Linda Kieran', 'Aliquam.tincidunt@Maurisquisturpis.co.uk', 20, 2, 1, 'Nulla aliquet. Proin velit. Sed malesuada augue ut lacus. Nulla tincidunt, neque vitae semper egestas, urna justo faucibus lectus, a sollicitudin orci', NULL, '2021-07-05 21:58:57', NULL),
(30, 'Bianca Orli', 'euismod.enim@convallis.org', 5, 2, 2, 'Fusce fermentum fermentum arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus ornare. Fusce mollis. Duis', NULL, '2021-07-05 21:58:57', NULL),
(31, 'Branden Merrill', 'luctus.et.ultrices@primisinfaucibus.edu', 2, 4, 4, 'metus. Vivamus euismod urna. Nullam lobortis quam a felis ullamcorper viverra. Maecenas iaculis aliquet diam. Sed diam lorem, auctor quis, tristique ac,', NULL, '2021-07-05 21:58:57', NULL),
(32, 'Lana Faith', 'Praesent.luctus.Curabitur@et.com', 13, 2, 2, 'Fusce mollis. Duis sit amet diam eu dolor egestas rhoncus. Proin nisl sem, consequat nec, mollis vitae, posuere at, velit. Cras lorem', NULL, '2021-07-05 21:58:57', NULL),
(33, 'Francesca Abel', 'imperdiet.ullamcorper@elementumduiquis.org', 17, 2, 4, 'sagittis semper. Nam tempor diam dictum sapien. Aenean massa. Integer vitae nibh. Donec est mauris, rhoncus id, mollis nec, cursus a, enim.', NULL, '2021-07-05 21:58:57', NULL),
(34, 'Fleur Melvin', 'amet@vulputate.co.uk', 20, 1, 3, 'primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec tincidunt. Donec vitae erat vel pede blandit congue. In scelerisque scelerisque', NULL, '2021-07-05 21:58:57', NULL),
(35, 'Maile Cecilia', 'libero.Proin@Nullaaliquet.edu', 22, 3, 3, 'eget magna. Suspendisse tristique neque venenatis lacus. Etiam bibendum fermentum metus. Aenean sed pede nec ante blandit viverra. Donec tempus, lorem fringilla', NULL, '2021-07-05 21:58:57', NULL),
(36, 'Isaac Serena', 'at.lacus@auctor.org', 12, 3, 2, 'turpis. Aliquam adipiscing lobortis risus. In mi pede, nonummy ut, molestie in, tempus eu, ligula. Aenean euismod mauris eu elit. Nulla facilisi.', NULL, '2021-07-05 21:58:57', NULL),
(37, 'Logan Lareina', 'Aenean.euismod@lobortisnisi.net', 8, 4, 3, 'malesuada fames ac turpis egestas. Fusce aliquet magna a neque. Nullam ut nisi a odio semper cursus. Integer mollis. Integer tincidunt aliquam', NULL, '2021-07-05 21:58:57', NULL),
(38, 'Dante Yen', 'ornare.In@Craseget.edu', 13, 4, 1, 'tempor bibendum. Donec felis orci, adipiscing non, luctus sit amet, faucibus ut, nulla. Cras eu tellus eu augue porttitor interdum. Sed auctor', NULL, '2021-07-05 21:58:57', NULL),
(39, 'Rigel Regan', 'semper.tellus.id@dolorquamelementum.com', 17, 2, 1, 'aliquet libero. Integer in magna. Phasellus dolor elit, pellentesque a, facilisis non, bibendum sed, est. Nunc laoreet lectus quis massa. Mauris vestibulum,', NULL, '2021-07-05 21:58:57', NULL),
(40, 'Abraham Latifah', 'velit@enimnectempus.ca', 12, 3, 3, 'ultrices posuere cubilia Curae; Phasellus ornare. Fusce mollis. Duis sit amet diam eu dolor egestas rhoncus. Proin nisl sem, consequat nec, mollis', NULL, '2021-07-05 21:58:57', NULL),
(41, 'Shad Nola', 'ultricies.ligula.Nullam@erat.co.uk', 20, 1, 5, 'molestie arcu. Sed eu nibh vulputate mauris sagittis placerat. Cras dictum ultricies ligula. Nullam enim. Sed nulla ante, iaculis nec, eleifend non,', NULL, '2021-07-05 21:58:57', NULL),
(42, 'Craig Noelani', 'in@dapibus.org', 10, 3, 4, 'nulla. Cras eu tellus eu augue porttitor interdum. Sed auctor odio a purus. Duis elementum, dui quis accumsan convallis, ante lectus convallis', NULL, '2021-07-05 21:58:57', NULL),
(43, 'Rhoda Burke', 'egestas.Duis.ac@Nullamnisl.co.uk', 4, 1, 1, 'sed, hendrerit a, arcu. Sed et libero. Proin mi. Aliquam gravida mauris ut mi. Duis risus odio, auctor vitae, aliquet nec, imperdiet', NULL, '2021-07-05 21:58:57', NULL),
(44, 'Stone Barbara', 'quis@consectetuerrhoncusNullam.edu', 21, 5, 1, 'amet nulla. Donec non justo. Proin non massa non ante bibendum ullamcorper. Duis cursus, diam at pretium aliquet, metus urna convallis erat,', NULL, '2021-07-05 21:58:57', NULL),
(45, 'Hilary Chaim', 'amet.diam@perinceptoshymenaeos.net', 19, 1, 4, 'sem ut dolor dapibus gravida. Aliquam tincidunt, nunc ac mattis ornare, lectus ante dictum mi, ac mattis velit justo nec ante. Maecenas', NULL, '2021-07-05 21:58:57', NULL),
(46, 'Peter Dacey', 'primis.in@sed.net', 13, 3, 1, 'metus sit amet ante. Vivamus non lorem vitae odio sagittis semper. Nam tempor diam dictum sapien. Aenean massa. Integer vitae nibh. Donec', NULL, '2021-07-05 21:58:57', NULL),
(47, 'Kylee Eliana', 'laoreet@enimgravida.co.uk', 21, 4, 5, 'Maecenas iaculis aliquet diam. Sed diam lorem, auctor quis, tristique ac, eleifend vitae, erat. Vivamus nisi. Mauris nulla. Integer urna. Vivamus molestie', NULL, '2021-07-05 21:58:57', NULL),
(48, 'Yoko Ciaran', 'sed.pede@Crasloremlorem.ca', 21, 1, 5, 'blandit enim consequat purus. Maecenas libero est, congue a, aliquet vel, vulputate eu, odio. Phasellus at augue id ante dictum cursus. Nunc', NULL, '2021-07-05 21:58:57', NULL),
(49, 'Nissim Raja', 'nisi@sit.org', 6, 2, 5, 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus ornare. Fusce mollis. Duis sit amet diam eu', NULL, '2021-07-05 21:58:57', NULL),
(50, 'Hayes Katell', 'auctor.ullamcorper.nisl@pharetrasedhendrerit.ca', 19, 3, 2, 'neque vitae semper egestas, urna justo faucibus lectus, a sollicitudin orci sem eget massa. Suspendisse eleifend. Cras sed leo. Cras vehicula aliquet', NULL, '2021-07-05 21:58:57', NULL),
(51, 'Castor Jakeem', 'mattis@varius.org', 10, 4, 4, 'Phasellus ornare. Fusce mollis. Duis sit amet diam eu dolor egestas rhoncus. Proin nisl sem, consequat nec, mollis vitae, posuere at, velit.', NULL, '2021-07-05 21:58:57', NULL),
(52, 'Kiayada Martena', 'mus@liberoIntegerin.net', 19, 2, 5, 'id sapien. Cras dolor dolor, tempus non, lacinia at, iaculis quis, pede. Praesent eu dui. Cum sociis natoque penatibus et magnis dis', NULL, '2021-07-05 21:58:57', NULL),
(53, 'Keely Wyatt', 'Phasellus@eunibhvulputate.ca', 12, 2, 5, 'odio. Etiam ligula tortor, dictum eu, placerat eget, venenatis a, magna. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam laoreet, libero', NULL, '2021-07-05 21:58:57', NULL),
(54, 'Phillip Sasha', 'in@necante.org', 12, 4, 4, 'Proin sed turpis nec mauris blandit mattis. Cras eget nisi dictum augue malesuada malesuada. Integer id magna et ipsum cursus vestibulum. Mauris', NULL, '2021-07-05 21:58:57', NULL),
(55, 'Kelly Nathaniel', 'libero.est@sodaleselit.net', 5, 4, 2, 'Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non,', NULL, '2021-07-05 21:58:57', NULL),
(56, 'Wynne Eleanor', 'inceptos.hymenaeos@orci.co.uk', 15, 1, 2, 'Etiam gravida molestie arcu. Sed eu nibh vulputate mauris sagittis placerat. Cras dictum ultricies ligula. Nullam enim. Sed nulla ante, iaculis nec,', NULL, '2021-07-05 21:58:57', NULL),
(57, 'Claire Brittany', 'pharetra.sed.hendrerit@ullamcorpermagnaSed.co.uk', 8, 2, 2, 'a, dui. Cras pellentesque. Sed dictum. Proin eget odio. Aliquam vulputate ullamcorper magna. Sed eu eros. Nam consequat dolor vitae dolor. Donec', NULL, '2021-07-05 21:58:57', NULL),
(58, 'Lars Zena', 'mauris.Integer.sem@magnamalesuadavel.edu', 19, 5, 4, 'Vivamus nibh dolor, nonummy ac, feugiat non, lobortis quis, pede. Suspendisse dui. Fusce diam nunc, ullamcorper eu, euismod ac, fermentum vel, mauris.', NULL, '2021-07-05 21:58:57', NULL),
(59, 'Justin Jordan', 'sit.amet@iaculis.ca', 14, 4, 5, 'cursus et, eros. Proin ultrices. Duis volutpat nunc sit amet metus. Aliquam erat volutpat. Nulla facilisis. Suspendisse commodo tincidunt nibh. Phasellus nulla.', NULL, '2021-07-05 21:58:57', NULL),
(60, 'Briar Brian', 'fermentum.risus.at@placerategetvenenatis.ca', 1, 5, 4, 'enim, gravida sit amet, dapibus id, blandit at, nisi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin', NULL, '2021-07-05 21:58:57', NULL),
(61, 'Jasper Serina', 'purus.in.molestie@ultricies.org', 12, 3, 3, 'auctor velit. Aliquam nisl. Nulla eu neque pellentesque massa lobortis ultrices. Vivamus rhoncus. Donec est. Nunc ullamcorper, velit in aliquet lobortis, nisi', NULL, '2021-07-05 21:58:57', NULL),
(62, 'Judith Jamal', 'Suspendisse.tristique@pedeCras.edu', 8, 5, 2, 'semper pretium neque. Morbi quis urna. Nunc quis arcu vel quam dignissim pharetra. Nam ac nulla. In tincidunt congue turpis. In condimentum.', NULL, '2021-07-05 21:58:57', NULL),
(63, 'Callum Talon', 'sem@orcilobortis.ca', 6, 3, 3, 'ut aliquam iaculis, lacus pede sagittis augue, eu tempor erat neque non quam. Pellentesque habitant morbi tristique senectus et netus et malesuada', NULL, '2021-07-05 21:58:57', NULL),
(64, 'Rose Samuel', 'ac@dictumeu.org', 18, 4, 2, 'eu elit. Nulla facilisi. Sed neque. Sed eget lacus. Mauris non dui nec urna suscipit nonummy. Fusce fermentum fermentum arcu. Vestibulum ante', NULL, '2021-07-05 21:58:57', NULL),
(65, 'Olympia Orlando', 'augue.scelerisque@maurissitamet.edu', 11, 3, 2, 'Praesent luctus. Curabitur egestas nunc sed libero. Proin sed turpis nec mauris blandit mattis. Cras eget nisi dictum augue malesuada malesuada. Integer', NULL, '2021-07-05 21:58:57', NULL),
(66, 'Oscar Dorothy', 'Nullam.vitae.diam@In.net', 12, 4, 2, 'elit sed consequat auctor, nunc nulla vulputate dui, nec tempus mauris erat eget ipsum. Suspendisse sagittis. Nullam vitae diam. Proin dolor. Nulla', NULL, '2021-07-05 21:58:57', NULL),
(67, 'Illiana Chaney', 'ac.mattis.ornare@amalesuadaid.co.uk', 12, 4, 3, 'Suspendisse eleifend. Cras sed leo. Cras vehicula aliquet libero. Integer in magna. Phasellus dolor elit, pellentesque a, facilisis non, bibendum sed, est.', NULL, '2021-07-05 21:58:57', NULL),
(69, 'Nyssa Kamal', 'non.sapien.molestie@justonec.org', 19, 3, 4, 'enim. Etiam imperdiet dictum magna. Ut tincidunt orci quis lectus. Nullam suscipit, est ac facilisis facilisis, magna tellus faucibus leo, in lobortis', NULL, '2021-07-05 21:58:57', NULL),
(70, 'Merritt Elijah', 'et@ultricesposuere.co.uk', 19, 2, 2, 'Aliquam erat volutpat. Nulla facilisis. Suspendisse commodo tincidunt nibh. Phasellus nulla. Integer vulputate, risus a ultricies adipiscing, enim mi tempor lorem, eget', NULL, '2021-07-05 21:58:57', NULL),
(71, 'Vance Boris', 'vestibulum@Donec.edu', 2, 4, 4, 'In faucibus. Morbi vehicula. Pellentesque tincidunt tempus risus. Donec egestas. Duis ac arcu. Nunc mauris. Morbi non sapien molestie orci tincidunt adipiscing.', NULL, '2021-07-05 21:58:57', NULL),
(72, 'Ocean Perry', 'ultrices.sit@pellentesquetellussem.net', 11, 2, 5, 'amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque', NULL, '2021-07-05 21:58:57', NULL),
(73, 'Fuller Austin', 'eu@Phasellus.ca', 2, 1, 5, 'dis parturient montes, nascetur ridiculus mus. Proin vel nisl. Quisque fringilla euismod enim. Etiam gravida molestie arcu. Sed eu nibh vulputate mauris', NULL, '2021-07-05 21:58:57', NULL),
(74, 'Natalie Bernard', 'Fusce.aliquam.enim@nuncnullavulputate.ca', 9, 1, 2, 'purus. Duis elementum, dui quis accumsan convallis, ante lectus convallis est, vitae sodales nisi magna sed dui. Fusce aliquam, enim nec tempus', NULL, '2021-07-05 21:58:57', NULL),
(75, 'Vivien Sophia', 'Suspendisse.sed@ipsum.ca', 18, 2, 5, 'nec, cursus a, enim. Suspendisse aliquet, sem ut cursus luctus, ipsum leo elementum sem, vitae aliquam eros turpis non enim. Mauris quis', NULL, '2021-07-05 21:58:57', NULL),
(76, 'Irene Jordan', 'fames@quisturpis.net', 1, 3, 1, 'malesuada augue ut lacus. Nulla tincidunt, neque vitae semper egestas, urna justo faucibus lectus, a sollicitudin orci sem eget massa. Suspendisse eleifend.', NULL, '2021-07-05 21:58:57', NULL),
(77, 'Salvador Quentin', 'bibendum.fermentum.metus@ultriciessem.com', 4, 2, 3, 'Fusce aliquet magna a neque. Nullam ut nisi a odio semper cursus. Integer mollis. Integer tincidunt aliquam arcu. Aliquam ultrices iaculis odio.', NULL, '2021-07-05 21:58:57', NULL),
(78, 'Lyle Mia', 'montes@idrisus.com', 3, 2, 5, 'et netus et malesuada fames ac turpis egestas. Aliquam fringilla cursus purus. Nullam scelerisque neque sed sem egestas blandit. Nam nulla magna,', NULL, '2021-07-05 21:58:57', NULL),
(79, 'Miranda Sarah', 'mauris.ut@nuncnullavulputate.net', 2, 3, 3, 'velit eu sem. Pellentesque ut ipsum ac mi eleifend egestas. Sed pharetra, felis eget varius ultrices, mauris ipsum porta elit, a feugiat', NULL, '2021-07-05 21:58:57', NULL),
(80, 'Virginia Victor', 'aliquet.vel.vulputate@Vivamusnibh.edu', 10, 1, 2, 'a felis ullamcorper viverra. Maecenas iaculis aliquet diam. Sed diam lorem, auctor quis, tristique ac, eleifend vitae, erat. Vivamus nisi. Mauris nulla.', NULL, '2021-07-05 21:58:57', NULL),
(81, 'Shaine Jael', 'amet.risus@magnisdisparturient.co.uk', 5, 4, 4, 'tempus scelerisque, lorem ipsum sodales purus, in molestie tortor nibh sit amet orci. Ut sagittis lobortis mauris. Suspendisse aliquet molestie tellus. Aenean', NULL, '2021-07-05 21:58:57', NULL),
(82, 'Tanisha Kyla', 'tristique.ac@senectusetnetus.ca', 11, 1, 4, 'sollicitudin orci sem eget massa. Suspendisse eleifend. Cras sed leo. Cras vehicula aliquet libero. Integer in magna. Phasellus dolor elit, pellentesque a,', NULL, '2021-07-05 21:58:57', NULL),
(83, 'Hector Harriet', 'risus.varius.orci@AliquamnislNulla.co.uk', 6, 5, 5, 'sit amet ante. Vivamus non lorem vitae odio sagittis semper. Nam tempor diam dictum sapien. Aenean massa. Integer vitae nibh. Donec est', NULL, '2021-07-05 21:58:57', NULL),
(84, 'Irene Kaseem', 'elit.Aliquam@uteros.com', 19, 4, 1, 'Curabitur consequat, lectus sit amet luctus vulputate, nisi sem semper erat, in consectetuer ipsum nunc id enim. Curabitur massa. Vestibulum accumsan neque', NULL, '2021-07-05 21:58:57', NULL),
(85, 'James Gil', 'arcu.imperdiet.ullamcorper@amagna.net', 22, 5, 3, 'In lorem. Donec elementum, lorem ut aliquam iaculis, lacus pede sagittis augue, eu tempor erat neque non quam. Pellentesque habitant morbi tristique', NULL, '2021-07-05 21:58:57', NULL),
(86, 'Dawn Colt', 'magnis@Duiscursusdiam.com', 17, 2, 1, 'interdum. Sed auctor odio a purus. Duis elementum, dui quis accumsan convallis, ante lectus convallis est, vitae sodales nisi magna sed dui.', NULL, '2021-07-05 21:58:57', NULL),
(87, 'Lareina Roth', 'Nulla.interdum@ante.org', 20, 5, 1, 'fringilla mi lacinia mattis. Integer eu lacus. Quisque imperdiet, erat nonummy ultricies ornare, elit elit fermentum risus, at fringilla purus mauris a', NULL, '2021-07-05 21:58:57', NULL),
(88, 'Vernon Stone', 'Sed.auctor.odio@in.net', 3, 2, 2, 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce aliquet magna a neque. Nullam ut nisi a', NULL, '2021-07-05 21:58:57', NULL),
(89, 'Brandon Rina', 'Nulla.facilisi.Sed@adipiscing.ca', 15, 4, 5, 'sed pede nec ante blandit viverra. Donec tempus, lorem fringilla ornare placerat, orci lacus vestibulum lorem, sit amet ultricies sem magna nec', NULL, '2021-07-05 21:58:57', NULL),
(90, 'Mechelle Lana', 'ultrices@pedeacurna.co.uk', 2, 4, 1, 'ultricies adipiscing, enim mi tempor lorem, eget mollis lectus pede et risus. Quisque libero lacus, varius et, euismod et, commodo at, libero.', NULL, '2021-07-05 21:58:57', NULL),
(92, 'Karleigh Wyatt', 'dictum.eu@neceuismod.org', 14, 4, 5, 'ut odio vel est tempor bibendum. Donec felis orci, adipiscing non, luctus sit amet, faucibus ut, nulla. Cras eu tellus eu augue', NULL, '2021-07-05 21:58:57', NULL),
(93, 'Kameko Kirby', 'quam@enimconsequatpurus.com', 4, 3, 4, 'Cras dolor dolor, tempus non, lacinia at, iaculis quis, pede. Praesent eu dui. Cum sociis natoque penatibus et magnis dis parturient montes,', NULL, '2021-07-05 21:58:57', NULL),
(94, 'Orlando Tobias', 'felis.eget@lacusAliquamrutrum.edu', 17, 3, 5, 'Nunc lectus pede, ultrices a, auctor non, feugiat nec, diam. Duis mi enim, condimentum eget, volutpat ornare, facilisis eget, ipsum. Donec sollicitudin', NULL, '2021-07-05 21:58:57', NULL),
(95, 'Joel Fulton', 'tempor.diam@fringillaeuismod.org', 14, 1, 1, 'nec orci. Donec nibh. Quisque nonummy ipsum non arcu. Vivamus sit amet risus. Donec egestas. Aliquam nec enim. Nunc ut erat. Sed', NULL, '2021-07-05 21:58:57', NULL),
(96, 'Jack Armando', 'Sed.nunc.est@tempordiam.net', 4, 5, 2, 'ut, nulla. Cras eu tellus eu augue porttitor interdum. Sed auctor odio a purus. Duis elementum, dui quis accumsan convallis, ante lectus', NULL, '2021-07-05 21:58:57', NULL),
(97, 'Damian Fay', 'ipsum@Nam.org', 1, 3, 3, 'euismod in, dolor. Fusce feugiat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam auctor, velit eget laoreet posuere, enim nisl elementum', NULL, '2021-07-05 21:58:57', NULL),
(98, 'Cora Keefe', 'feugiat.placerat.velit@tortorInteger.edu', 21, 5, 1, 'ultricies sem magna nec quam. Curabitur vel lectus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec dignissim', NULL, '2021-07-05 21:58:57', NULL),
(99, 'Caldwell Odessa', 'massa@Proinnonmassa.co.uk', 10, 4, 4, 'nec, malesuada ut, sem. Nulla interdum. Curabitur dictum. Phasellus in felis. Nulla tempor augue ac ipsum. Phasellus vitae mauris sit amet lorem', NULL, '2021-07-05 21:58:57', NULL),
(100, 'Giselle Bryar', 'blandit.viverra@Donecfelis.net', 20, 4, 5, 'dolor dapibus gravida. Aliquam tincidunt, nunc ac mattis ornare, lectus ante dictum mi, ac mattis velit justo nec ante. Maecenas mi felis,', NULL, '2021-07-05 21:58:57', NULL),
(104, 'Evry Nazyli Ciptanto', 'member@gmail.com', 7, 3, 5, 'eeu metus. In lorem. Donec elementum, lorem ut aliquam iaculis, lacus pede sagittis augue, eu tempor erat neque non quam. Pellentesque habitant', 2, '2021-07-10 13:42:15', '16d33eef41b9d5a32459e322ae83d1ab.png'),
(110, 'Evry Nazyli Ciptanto', 'member@gmail.com', 20, 3, 4, 'lummayannnn pokoknya puasss  donggg. . . ', 2, '2021-07-10 16:19:45', '16d33eef41b9d5a32459e322ae83d1ab.png'),
(113, 'Muhammad Zulfikarr', 'zulfikar@gmail.com', 31, 4, 5, 'Ini contoh komentar', 10, '2021-07-10 20:30:17', '326ac9dadc4de4263aa70670b92fda7b.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(60) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `profesi_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `last_login` datetime DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `email`, `password`, `role`, `profesi_id`, `created_at`, `last_login`, `foto`) VALUES
(1, 'Administrator', 'Administrator', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', 7, '2021-07-05 21:59:47', '2021-07-11 17:46:37', 'a642b4e6b1c005a9b8191959973538fd.png'),
(2, 'Evry Nazyli Ciptanto', 'evrynazyli', 'member@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'member', 3, '2021-07-05 21:59:47', '2021-07-11 17:46:20', '16d33eef41b9d5a32459e322ae83d1ab.png'),
(8, 'Nazyli', 'nazyli', 'nazyli@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'admin', 4, '2021-07-08 00:00:02', NULL, NULL),
(10, 'Muhammad Zulfikarr', 'zulfikarr', 'zulfikar@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'member', 4, '2021-07-10 20:25:44', '2021-07-10 15:25:56', '326ac9dadc4de4263aa70670b92fda7b.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--

CREATE TABLE `wisata` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `jenis_wisata_id` int(11) DEFAULT NULL,
  `fasilitas` text DEFAULT NULL,
  `bintang` smallint(6) DEFAULT NULL,
  `kontak` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `latlong` varchar(50) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `web` varchar(45) DEFAULT NULL,
  `jenis_kuliner_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `wisata`
--

INSERT INTO `wisata` (`id`, `nama`, `deskripsi`, `jenis_wisata_id`, `fasilitas`, `bintang`, `kontak`, `alamat`, `latlong`, `email`, `web`, `jenis_kuliner_id`) VALUES
(1, 'Pasir Putih Depok', 'at, velit. Pellentesque ultricies dignissim lacus. Aliquam rutrum lorem ac risus. Morbi metus. Vivamus euismod urna. Nullam lobortis quam a felis ullamcorper viverra. Maecenas iaculis aliquet diam. Sed diam lorem, auctor quis, tristique ac, eleifend vitae, erat. Vivamus nisi. Mauris nulla. Integer urna. Vivamus molestie dapibus ligula. Aliquam erat volutpat. Nulla dignissim. Maecenas ornare egestas ligula. Nullam feugiat placerat velit. Quisque varius. Nam porttitor scelerisque neque. Nullam nisl. Maecenas malesuada', 5, 'Travel Agent', 3, '+6281995589188', '359-978 Aliquam Av.', '-6.42288,106.782156', 'nibh@Morbiaccumsan.com', 'https://test.com', NULL),
(2, 'Wisata Alam Kampung 99 Pepohonan', 'gravida sit amet, dapibus id, blandit at, nisi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel nisl. Quisque fringilla euismod enim. Etiam gravida molestie arcu. Sed eu nibh vulputate mauris sagittis placerat. Cras dictum ultricies ligula. Nullam enim. Sed nulla ante, iaculis nec, eleifend non, dapibus rutrum, justo. Praesent luctus. Curabitur egestas nunc sed libero. Proin sed turpis nec mauris blandit mattis. Cras eget', 2, 'Taman Bermain', 5, '+6288792934039', 'Ap #544-1499 Nec St.', '-6.42288,106.782156', 'tortor.Nunc@duinectempus.com', 'https://test.com', NULL),
(3, 'Gema Pesona Depok', 'ac turpis egestas. Fusce aliquet magna a neque. Nullam ut nisi a odio semper cursus. Integer mollis. Integer tincidunt aliquam arcu. Aliquam ultrices iaculis odio. Nam interdum enim non nisi. Aenean eget metus. In nec orci. Donec nibh. Quisque nonummy ipsum non arcu. Vivamus sit amet risus. Donec egestas. Aliquam nec enim. Nunc ut erat. Sed nunc est, mollis non, cursus non, egestas a, dui. Cras pellentesque. Sed dictum. Proin', 2, 'Taman', 4, '+6285036938393', 'Ap #394-7871 A, Rd.', '-6.42288,106.782156', 'vehicula.aliquet@euenim.co.uk', 'https://test.com', NULL),
(4, 'Aladin Water Boom', 'auctor odio a purus. Duis elementum, dui quis accumsan convallis, ante lectus convallis est, vitae sodales nisi magna sed dui. Fusce aliquam, enim nec tempus scelerisque, lorem ipsum sodales purus, in molestie tortor nibh sit amet orci. Ut sagittis lobortis mauris. Suspendisse aliquet molestie tellus. Aenean egestas hendrerit neque. In ornare sagittis felis. Donec tempor, est ac mattis semper, dui lectus rutrum urna, nec luctus felis purus ac tellus. Suspendisse', 1, 'Taman Bermain', 2, '+6289846580637', '4223 Lacus. Street', '-6.42288,106.782156', 'ac@Sed.net', 'https://test.com', NULL),
(5, 'GodongIjo Depok', 'consectetuer ipsum nunc id enim. Curabitur massa. Vestibulum accumsan neque et nunc. Quisque ornare tortor at risus. Nunc ac sem ut dolor dapibus gravida. Aliquam tincidunt, nunc ac mattis ornare, lectus ante dictum mi, ac mattis velit justo nec ante. Maecenas mi felis, adipiscing fringilla, porttitor vulputate, posuere vulputate, lacus. Cras interdum. Nunc sollicitudin commodo ipsum. Suspendisse non leo. Vivamus nibh dolor, nonummy ac, feugiat non, lobortis quis, pede. Suspendisse', 1, 'Taman Bermain', 4, '+6285538368589', 'P.O. Box 344, 7629 Dui. Rd.', '-6.42288,106.782156', 'at.arcu@sedtortor.edu', 'https://test.com', NULL),
(6, 'Masjid Kubah Emas', 'enim diam vel arcu. Curabitur ut odio vel est tempor bibendum. Donec felis orci, adipiscing non, luctus sit amet, faucibus ut, nulla. Cras eu tellus eu augue porttitor interdum. Sed auctor odio a purus. Duis elementum, dui quis accumsan convallis, ante lectus convallis est, vitae sodales nisi magna sed dui. Fusce aliquam, enim nec tempus scelerisque, lorem ipsum sodales purus, in molestie tortor nibh sit amet orci. Ut sagittis lobortis', 3, 'Taman Bermain', 3, '+6282138338191', '4119 Et Rd.', '-6.42288,106.782156', 'Nunc@litora.org', 'https://test.com', NULL),
(7, 'Belimbing Dewa Depok', 'neque pellentesque massa lobortis ultrices. Vivamus rhoncus. Donec est. Nunc ullamcorper, velit in aliquet lobortis, nisi nibh lacinia orci, consectetuer euismod est arcu ac orci. Ut semper pretium neque. Morbi quis urna. Nunc quis arcu vel quam dignissim pharetra. Nam ac nulla. In tincidunt congue turpis. In condimentum. Donec at arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec tincidunt. Donec vitae erat vel', 2, 'Tour Operator', 5, '+6282825703514', 'Ap #615-7680 Luctus Av.', '-6.42288,106.782156', 'dui.Cum.sociis@dictumPhasellus.co.uk', 'https://test.com', NULL),
(8, 'Hutan Kota Depok', 'euismod enim. Etiam gravida molestie arcu. Sed eu nibh vulputate mauris sagittis placerat. Cras dictum ultricies ligula. Nullam enim. Sed nulla ante, iaculis nec, eleifend non, dapibus rutrum, justo. Praesent luctus. Curabitur egestas nunc sed libero. Proin sed turpis nec mauris blandit mattis. Cras eget nisi dictum augue malesuada malesuada. Integer id magna et ipsum cursus vestibulum. Mauris magna. Duis dignissim tempor arcu. Vestibulum ut eros non enim commodo hendrerit.', 2, 'Tempat Makan', 5, '+6285622873250', 'P.O. Box 647, 1623 Varius Ave', '-6.42288,106.782156', 'Morbi@venenatis.net', 'https://test.com', NULL),
(9, 'D’Kandang Amazing Farm Depok', 'est. Nunc ullamcorper, velit in aliquet lobortis, nisi nibh lacinia orci, consectetuer euismod est arcu ac orci. Ut semper pretium neque. Morbi quis urna. Nunc quis arcu vel quam dignissim pharetra. Nam ac nulla. In tincidunt congue turpis. In condimentum. Donec at arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec tincidunt. Donec vitae erat vel pede blandit congue. In scelerisque scelerisque dui. Suspendisse', 2, 'Taman Bermain', 3, '+6283322294096', '7784 Urna Rd.', '-6.42288,106.782156', 'nonummy.ac.feugiat@sit.co.uk', 'https://test.com', NULL),
(10, 'Setu Pengasinan Depok', 'vitae sodales nisi magna sed dui. Fusce aliquam, enim nec tempus scelerisque, lorem ipsum sodales purus, in molestie tortor nibh sit amet orci. Ut sagittis lobortis mauris. Suspendisse aliquet molestie tellus. Aenean egestas hendrerit neque. In ornare sagittis felis. Donec tempor, est ac mattis semper, dui lectus rutrum urna, nec luctus felis purus ac tellus. Suspendisse sed dolor. Fusce mi lorem, vehicula et, rutrum eu, ultrices sit amet, risus. Donec', 2, 'Tour Operator', 4, '+6285585685415', '2144 Pellentesque Street', '-6.42288,106.782156', 'auctor.vitae.aliquet@congue.co.uk', 'https://test.com', NULL),
(11, 'Arina Waterpark', 'sed, est. Nunc laoreet lectus quis massa. Mauris vestibulum, neque sed dictum eleifend, nunc risus varius orci, in consequat enim diam vel arcu. Curabitur ut odio vel est tempor bibendum. Donec felis orci, adipiscing non, luctus sit amet, faucibus ut, nulla. Cras eu tellus eu augue porttitor interdum. Sed auctor odio a purus. Duis elementum, dui quis accumsan convallis, ante lectus convallis est, vitae sodales nisi magna sed dui. Fusce', 1, 'Taman Bermain', 5, '+6281960492255', '787-3752 Neque Av.', '-6.42288,106.782156', 'Mauris@vulputate.ca', 'https://test.com', NULL),
(12, 'Cafe Hello Bingsu\n', 'Quisque nonummy ipsum non arcu. Vivamus sit amet risus. Donec egestas. Aliquam nec enim. Nunc ut erat. Sed nunc est, mollis non, cursus non, egestas a, dui. Cras pellentesque. Sed dictum. Proin eget odio. Aliquam vulputate ullamcorper magna. Sed eu eros. Nam consequat dolor vitae dolor. Donec fringilla. Donec feugiat metus sit amet ante. Vivamus non lorem vitae odio sagittis semper. Nam tempor diam dictum sapien. Aenean massa. Integer vitae', NULL, 'Tour Operator', 4, '+6280391529762', '757-9124 Sollicitudin Rd.', '-6.42288,106.782156', 'consequat@cursus.com', 'https://test.com', 2),
(13, 'Kopi Store', 'egestas hendrerit neque. In ornare sagittis felis. Donec tempor, est ac mattis semper, dui lectus rutrum urna, nec luctus felis purus ac tellus. Suspendisse sed dolor. Fusce mi lorem, vehicula et, rutrum eu, ultrices sit amet, risus. Donec nibh enim, gravida sit amet, dapibus id, blandit at, nisi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel nisl. Quisque fringilla euismod enim. Etiam gravida molestie', NULL, 'Taman', 2, '+6285668825188', '129-2832 Nec, St.', '-6.42288,106.782156', 'vulputate.ullamcorper.magna@eros.com', 'https://test.com', 1),
(14, 'Mang Fikri', 'nulla. Donec non justo. Proin non massa non ante bibendum ullamcorper. Duis cursus, diam at pretium aliquet, metus urna convallis erat, eget tincidunt dui augue eu tellus. Phasellus elit pede, malesuada vel, venenatis vel, faucibus id, libero. Donec consectetuer mauris id sapien. Cras dolor dolor, tempus non, lacinia at, iaculis quis, pede. Praesent eu dui. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eget magna.', NULL, 'Taman bermain', 4, '+6287390779233', '364-6146 Blandit Street', '-6.42288,106.782156', 'fermentum.arcu@dui.co.uk', 'https://test.com', 1),
(15, 'Whats Up', 'sed leo. Cras vehicula aliquet libero. Integer in magna. Phasellus dolor elit, pellentesque a, facilisis non, bibendum sed, est. Nunc laoreet lectus quis massa. Mauris vestibulum, neque sed dictum eleifend, nunc risus varius orci, in consequat enim diam vel arcu. Curabitur ut odio vel est tempor bibendum. Donec felis orci, adipiscing non, luctus sit amet, faucibus ut, nulla. Cras eu tellus eu augue porttitor interdum. Sed auctor odio a purus.', NULL, 'Taman', 3, '+6283480406592', '9510 Est St.', '-6.42288,106.782156', 'velit@quis.co.uk', 'https://test.com', 1),
(16, 'Pondok Laras', 'mollis nec, cursus a, enim. Suspendisse aliquet, sem ut cursus luctus, ipsum leo elementum sem, vitae aliquam eros turpis non enim. Mauris quis turpis vitae purus gravida sagittis. Duis gravida. Praesent eu nulla at sem molestie sodales. Mauris blandit enim consequat purus. Maecenas libero est, congue a, aliquet vel, vulputate eu, odio. Phasellus at augue id ante dictum cursus. Nunc mauris elit, dictum eu, eleifend nec, malesuada ut, sem. Nulla', NULL, 'Taman Bermain', 3, '+6284628349180', 'P.O. Box 510, 3911 Aliquam Av.', '-6.42288,106.782156', 'Fusce.feugiat.Lorem@ridiculus.ca', 'https://test.com', 1),
(17, 'Perang Kerang', 'auctor odio a purus. Duis elementum, dui quis accumsan convallis, ante lectus convallis est, vitae sodales nisi magna sed dui. Fusce aliquam, enim nec tempus scelerisque, lorem ipsum sodales purus, in molestie tortor nibh sit amet orci. Ut sagittis lobortis mauris. Suspendisse aliquet molestie tellus. Aenean egestas hendrerit neque. In ornare sagittis felis. Donec tempor, est ac mattis semper, dui lectus rutrum urna, nec luctus felis purus ac tellus. Suspendisse', NULL, 'Taman bermain', 5, '+6280724686651', 'P.O. Box 972, 4926 Mauris Road', '-6.42288,106.782156', 'vel.arcu.eu@at.ca', 'https://test.com', 1),
(18, 'Soto Bu Tjndro', 'magna. Suspendisse tristique neque venenatis lacus. Etiam bibendum fermentum metus. Aenean sed pede nec ante blandit viverra. Donec tempus, lorem fringilla ornare placerat, orci lacus vestibulum lorem, sit amet ultricies sem magna nec quam. Curabitur vel lectus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec dignissim magna a tortor. Nunc commodo auctor velit. Aliquam nisl. Nulla eu neque pellentesque massa lobortis ultrices. Vivamus rhoncus. Donec', NULL, 'Taman Bermain', 4, '+6285844737342', 'Ap #119-310 Phasellus St.', '-6.42288,106.782156', 'tortor.dictum@Maurisblandit.ca', 'https://test.com', 2),
(19, 'Milan Pizzeria Cafe', 'purus ac tellus. Suspendisse sed dolor. Fusce mi lorem, vehicula et, rutrum eu, ultrices sit amet, risus. Donec nibh enim, gravida sit amet, dapibus id, blandit at, nisi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel nisl. Quisque fringilla euismod enim. Etiam gravida molestie arcu. Sed eu nibh vulputate mauris sagittis placerat. Cras dictum ultricies ligula. Nullam enim. Sed nulla ante, iaculis nec, eleifend', NULL, 'Taman', 3, '+6288363317532', 'P.O. Box 926, 9114 Vitae, Av.', '-6.42288,106.782156', 'varius.orci@cubilia.edu', 'https://test.com', 1),
(20, 'Saung Talaga', 'id ante dictum cursus. Nunc mauris elit, dictum eu, eleifend nec, malesuada ut, sem. Nulla interdum. Curabitur dictum. Phasellus in felis. Nulla tempor augue ac ipsum. Phasellus vitae mauris sit amet lorem semper auctor. Mauris vel turpis. Aliquam adipiscing lobortis risus. In mi pede, nonummy ut, molestie in, tempus eu, ligula. Aenean euismod mauris eu elit. Nulla facilisi. Sed neque. Sed eget lacus. Mauris non dui nec urna suscipit nonummy.', NULL, 'Taman Bermain', 3, '+6282314452712', 'P.O. Box 614, 5586 Duis Rd.', '-6.42288,106.782156', 'nunc.sed@Nulla.edu', 'https://test.com', 2),
(21, 'Takarajima', 'ornare sagittis felis. Donec tempor, est ac mattis semper, dui lectus rutrum urna, nec luctus felis purus ac tellus. Suspendisse sed dolor. Fusce mi lorem, vehicula et, rutrum eu, ultrices sit amet, risus. Donec nibh enim, gravida sit amet, dapibus id, blandit at, nisi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel nisl. Quisque fringilla euismod enim. Etiam gravida molestie arcu. Sed eu nibh', NULL, 'Taman Bermain', 4, '+6283429988107', 'P.O. Box 868, 6824 At, Street', '-6.42288,106.782156', 'auctor.Mauris.vel@tempusrisusDonec.org', 'https://test.com', 1),
(22, 'Roti Bakar Eddy', 'Ut tincidunt orci quis lectus. Nullam suscipit, est ac facilisis facilisis, magna tellus faucibus leo, in lobortis tellus justo sit amet nulla. Donec non justo. Proin non massa non ante bibendum ullamcorper. Duis cursus, diam at pretium aliquet, metus urna convallis erat, eget tincidunt dui augue eu tellus. Phasellus elit pede, malesuada vel, venenatis vel, faucibus id, libero. Donec consectetuer mauris id sapien. Cras dolor dolor, tempus non, lacinia at,', NULL, 'Taman', 4, '+6285085827300', 'P.O. Box 690, 2384 Lobortis Ave', '-6.42288,106.782156', 'mauris@vulputateveliteu.org', 'https://test.com', 2),
(31, 'Mujigae', 'Mujigae Resto merupakan restoran Korea pertama di Indonesia yang mendapatkan sertifikasi halal MUI pada 13 Februari 2017.', NULL, 'Self-servic', 5, '085735999111', 'Desa', '-6.42288,106.782156', 'evrynazyli@gmail.com', 'https://pasirputihdepok.com', 2),
(32, 'Pantai Pasir Putih Edit', 'Deskripsi wisata ini', 5, 'Taman bermain', 0, '085735906111', 'Jl. Bhayangkara', '6.42288,106.782156', 'pasirputih@gmail.com', 'https://pasirputihdepok.com', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gallery_wisata`
--
ALTER TABLE `gallery_wisata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_GALLERY_FOTO REF_WISATA` (`wisata_id`);

--
-- Indeks untuk tabel `jenis_kuliner`
--
ALTER TABLE `jenis_kuliner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis_wisata`
--
ALTER TABLE `jenis_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profesi`
--
ALTER TABLE `profesi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_testimoni_profesi1` (`profesi_id`),
  ADD KEY `fk_testimoni_wisata1` (`wisata_id`),
  ADD KEY `fk_testimoni_user_id` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_PROFESI_ID_REF_PROFESI` (`profesi_id`);

--
-- Indeks untuk tabel `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_wisata_jenis_wisata_idx` (`jenis_wisata_id`),
  ADD KEY `fk_wisata_jenis_kuliner1_idx` (`jenis_kuliner_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gallery_wisata`
--
ALTER TABLE `gallery_wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `jenis_kuliner`
--
ALTER TABLE `jenis_kuliner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `jenis_wisata`
--
ALTER TABLE `jenis_wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `profesi`
--
ALTER TABLE `profesi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `gallery_wisata`
--
ALTER TABLE `gallery_wisata`
  ADD CONSTRAINT `FK_GALLERY_FOTO REF_WISATA` FOREIGN KEY (`wisata_id`) REFERENCES `wisata` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  ADD CONSTRAINT `fk_testimoni_profesi1` FOREIGN KEY (`profesi_id`) REFERENCES `profesi` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_testimoni_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_testimoni_wisata1` FOREIGN KEY (`wisata_id`) REFERENCES `wisata` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_PROFESI_ID_REF_PROFESI` FOREIGN KEY (`profesi_id`) REFERENCES `profesi` (`id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `wisata`
--
ALTER TABLE `wisata`
  ADD CONSTRAINT `fk_wisata_jenis_kuliner1` FOREIGN KEY (`jenis_kuliner_id`) REFERENCES `jenis_kuliner` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_wisata_jenis_wisata` FOREIGN KEY (`jenis_wisata_id`) REFERENCES `jenis_wisata` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

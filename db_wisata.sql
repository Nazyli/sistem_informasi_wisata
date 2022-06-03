/*
 Navicat Premium Data Transfer

 Source Server         : Local MYSQL DB
 Source Server Type    : MySQL
 Source Server Version : 100418
 Source Host           : 127.0.0.1:3306
 Source Schema         : db_wisata

 Target Server Type    : MySQL
 Target Server Version : 100418
 File Encoding         : 65001

 Date: 03/06/2022 22:24:41
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for gallery_wisata
-- ----------------------------
DROP TABLE IF EXISTS `gallery_wisata`;
CREATE TABLE `gallery_wisata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foto_wisata` varchar(255) DEFAULT NULL,
  `wisata_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_GALLERY_FOTO REF_WISATA` (`wisata_id`),
  CONSTRAINT `FK_GALLERY_FOTO REF_WISATA` FOREIGN KEY (`wisata_id`) REFERENCES `wisata` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of gallery_wisata
-- ----------------------------
BEGIN;
INSERT INTO `gallery_wisata` VALUES (41, 'f98fc4036ee93eceeed7cbaa4ccd6ac4.jpg', 4);
INSERT INTO `gallery_wisata` VALUES (43, '6c8f152d572af8cd86c88d64a992ab5e.jpg', 9);
INSERT INTO `gallery_wisata` VALUES (44, '7b5b1b9afb8d8f9bc0bc3543f7a9ae85.jpg', 11);
INSERT INTO `gallery_wisata` VALUES (45, '353f04a2a730c5527c907aa30a375c79.jpg', 7);
INSERT INTO `gallery_wisata` VALUES (46, '414b546e15151c79848e8f3a188740d5.jpg', 3);
INSERT INTO `gallery_wisata` VALUES (47, 'a11e7dcf88c7e65b5e68f81cee0afc70.jpg', 5);
INSERT INTO `gallery_wisata` VALUES (48, 'e252ad852086cf83d524309e47abaec4.jpg', 8);
INSERT INTO `gallery_wisata` VALUES (49, 'f5cd658c9eed1d8f934e8eaa490a73ed.jpg', 6);
INSERT INTO `gallery_wisata` VALUES (50, 'eb3ed14c278995581d4d167ec7bd9216.jpg', 1);
INSERT INTO `gallery_wisata` VALUES (51, '61b12b95e4d7580685344887ff6ec0ba.jpg', 10);
INSERT INTO `gallery_wisata` VALUES (52, 'f06120abd6995e562d570ac7c9e83a14.jpg', 10);
INSERT INTO `gallery_wisata` VALUES (53, '61adf5dd845bdd63396aac7439ef07c2.jpg', 2);
INSERT INTO `gallery_wisata` VALUES (54, 'bcdc13af60532a6a3428511adf7a1b5f.jpg', 22);
INSERT INTO `gallery_wisata` VALUES (55, '8a0ab637516ceb25b94764297e5d1e69.jpg', 17);
INSERT INTO `gallery_wisata` VALUES (56, 'ffcd3f95df27d005179eb33cd17a766d.jpg', 18);
INSERT INTO `gallery_wisata` VALUES (57, '133303878f1f110f08d39dd48dc74df9.jpg', 14);
INSERT INTO `gallery_wisata` VALUES (58, 'ff23efab6811fee1290be88cd598efed.jpg', 19);
INSERT INTO `gallery_wisata` VALUES (59, '1363d15197b75936e195396883f6a6e5.jpg', 16);
INSERT INTO `gallery_wisata` VALUES (60, 'a5754cc2ec76c80a27dd4afcb8019f4d.jpg', 21);
INSERT INTO `gallery_wisata` VALUES (61, '3afc51b41984f7f2fcde941c43d13173.jpg', 20);
INSERT INTO `gallery_wisata` VALUES (62, '279738c89ed59b69cfa83844e8ab9ef7.jpg', 15);
INSERT INTO `gallery_wisata` VALUES (64, '1a8b948cc5691048608c084d9b283853.jpg', 12);
INSERT INTO `gallery_wisata` VALUES (65, 'bcae56077baaf05a93e3abdb47fb9fbd.jpg', 13);
INSERT INTO `gallery_wisata` VALUES (66, 'bd451eb848b9d8ad5cc663c5306e7329.jpeg', 31);
COMMIT;

-- ----------------------------
-- Table structure for jenis_kuliner
-- ----------------------------
DROP TABLE IF EXISTS `jenis_kuliner`;
CREATE TABLE `jenis_kuliner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jenis_kuliner
-- ----------------------------
BEGIN;
INSERT INTO `jenis_kuliner` VALUES (1, 'Kedai/Cafe');
INSERT INTO `jenis_kuliner` VALUES (2, 'Restaurant');
INSERT INTO `jenis_kuliner` VALUES (3, 'Pasar Kaget');
COMMIT;

-- ----------------------------
-- Table structure for jenis_wisata
-- ----------------------------
DROP TABLE IF EXISTS `jenis_wisata`;
CREATE TABLE `jenis_wisata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jenis_wisata
-- ----------------------------
BEGIN;
INSERT INTO `jenis_wisata` VALUES (1, 'Argo Wisata');
INSERT INTO `jenis_wisata` VALUES (2, 'Taman Wisata');
INSERT INTO `jenis_wisata` VALUES (3, 'Religius');
INSERT INTO `jenis_wisata` VALUES (4, 'Museum');
INSERT INTO `jenis_wisata` VALUES (5, 'Water Park');
COMMIT;

-- ----------------------------
-- Table structure for profesi
-- ----------------------------
DROP TABLE IF EXISTS `profesi`;
CREATE TABLE `profesi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of profesi
-- ----------------------------
BEGIN;
INSERT INTO `profesi` VALUES (1, 'Artist');
INSERT INTO `profesi` VALUES (2, 'Pejabat');
INSERT INTO `profesi` VALUES (3, 'Mahasiswa');
INSERT INTO `profesi` VALUES (4, 'Pegawai Swasta');
INSERT INTO `profesi` VALUES (5, 'Umum');
INSERT INTO `profesi` VALUES (7, 'Software Development');
COMMIT;

-- ----------------------------
-- Table structure for testimoni
-- ----------------------------
DROP TABLE IF EXISTS `testimoni`;
CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL,
  `wisata_id` int(11) NOT NULL,
  `profesi_id` int(11) NOT NULL,
  `rating` smallint(6) DEFAULT NULL,
  `komentar` text DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_testimoni_profesi1` (`profesi_id`),
  KEY `fk_testimoni_wisata1` (`wisata_id`),
  KEY `fk_testimoni_user_id` (`user_id`),
  CONSTRAINT `fk_testimoni_profesi1` FOREIGN KEY (`profesi_id`) REFERENCES `profesi` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_testimoni_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_testimoni_wisata1` FOREIGN KEY (`wisata_id`) REFERENCES `wisata` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of testimoni
-- ----------------------------
BEGIN;
INSERT INTO `testimoni` VALUES (3, 'Evry Nazyli Ciptanto', 'member@gmail.com', 15, 3, 2, 'Haloo id enim. Curabitur massa. Vestibulum accumsan neque et nunc. Quisque ornare tortor at risus. Nunc ac sem ut dolor dapibus gravida. Aliquam', 2, '2021-07-05 21:58:57', '16d33eef41b9d5a32459e322ae83d1ab.png');
INSERT INTO `testimoni` VALUES (4, 'Evry Nazyli Ciptanto', 'member@gmail.com', 9, 3, 3, 'Nullam vitae diam. Proin dolor. Nulla semper tellus id nunc interdum feugiat. Sed nec metus facilisis lorem tristique aliquet. Phasellus fermentum convallis', 2, '2021-07-05 21:58:57', '16d33eef41b9d5a32459e322ae83d1ab.png');
INSERT INTO `testimoni` VALUES (5, 'Deacon Shellie', 'quam.a.felis@adipiscingenim.com', 6, 5, 5, 'malesuada augue ut lacus. Nulla tincidunt, neque vitae semper egestas, urna justo faucibus lectus, a sollicitudin orci sem eget massa. Suspendisse eleifend.', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (6, 'Yolanda Grace', 'libero.at.auctor@dui.ca', 10, 4, 1, 'dolor dapibus gravida. Aliquam tincidunt, nunc ac mattis ornare, lectus ante dictum mi, ac mattis velit justo nec ante. Maecenas mi felis,', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (7, 'Jada Jacob', 'Nunc@Sed.org', 5, 1, 1, 'odio a purus. Duis elementum, dui quis accumsan convallis, ante lectus convallis est, vitae sodales nisi magna sed dui. Fusce aliquam, enim', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (8, 'Daniel Kenyon', 'tristique.senectus.et@consectetuer.net', 16, 1, 1, 'rutrum, justo. Praesent luctus. Curabitur egestas nunc sed libero. Proin sed turpis nec mauris blandit mattis. Cras eget nisi dictum augue malesuada', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (9, 'Vanna Clayton', 'Integer.aliquam.adipiscing@hymenaeosMauris.edu', 21, 2, 5, 'cursus luctus, ipsum leo elementum sem, vitae aliquam eros turpis non enim. Mauris quis turpis vitae purus gravida sagittis. Duis gravida. Praesent', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (10, 'Chaney Kelsie', 'mus.Donec@Suspendisse.net', 13, 5, 3, 'mollis dui, in sodales elit erat vitae risus. Duis a mi fringilla mi lacinia mattis. Integer eu lacus. Quisque imperdiet, erat nonummy', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (11, 'Yael Barbara', 'feugiat.Lorem.ipsum@nonbibendum.net', 1, 2, 3, 'ac libero nec ligula consectetuer rhoncus. Nullam velit dui, semper et, lacinia vitae, sodales at, velit. Pellentesque ultricies dignissim lacus. Aliquam rutrum', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (12, 'Jesse Tyrone', 'Nam.ligula.elit@tempus.ca', 7, 5, 5, 'et magnis dis parturient montes, nascetur ridiculus mus. Proin vel nisl. Quisque fringilla euismod enim. Etiam gravida molestie arcu. Sed eu nibh', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (13, 'Nayda Dora', 'eget.volutpat@cursusluctusipsum.edu', 2, 5, 5, 'velit eu sem. Pellentesque ut ipsum ac mi eleifend egestas. Sed pharetra, felis eget varius ultrices, mauris ipsum porta elit, a feugiat', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (14, 'MacKenzie Aquila', 'nisl@facilisis.co.uk', 5, 2, 4, 'adipiscing ligula. Aenean gravida nunc sed pede. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel arcu', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (15, 'Kim Maxine', 'magna.Ut.tincidunt@vitaepurus.co.uk', 3, 2, 1, 'eleifend egestas. Sed pharetra, felis eget varius ultrices, mauris ipsum porta elit, a feugiat tellus lorem eu metus. In lorem. Donec elementum,', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (16, 'Jasmine Kirby', 'Donec.felis.orci@Nunc.ca', 15, 2, 4, 'tellus. Aenean egestas hendrerit neque. In ornare sagittis felis. Donec tempor, est ac mattis semper, dui lectus rutrum urna, nec luctus felis', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (17, 'Cherokee Jolene', 'non.justo@utodio.net', 18, 1, 3, 'dolor. Donec fringilla. Donec feugiat metus sit amet ante. Vivamus non lorem vitae odio sagittis semper. Nam tempor diam dictum sapien. Aenean', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (18, 'Demetrius Herrod', 'est@Curabiturdictum.ca', 12, 3, 4, 'dictum eu, eleifend nec, malesuada ut, sem. Nulla interdum. Curabitur dictum. Phasellus in felis. Nulla tempor augue ac ipsum. Phasellus vitae mauris', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (19, 'Ashton Quail', 'nunc.In.at@lectusjustoeu.com', 5, 1, 3, 'tellus. Phasellus elit pede, malesuada vel, venenatis vel, faucibus id, libero. Donec consectetuer mauris id sapien. Cras dolor dolor, tempus non, lacinia', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (20, 'Jade Nolan', 'a.magna@diam.co.uk', 3, 1, 4, 'non leo. Vivamus nibh dolor, nonummy ac, feugiat non, lobortis quis, pede. Suspendisse dui. Fusce diam nunc, ullamcorper eu, euismod ac, fermentum', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (21, 'Ifeoma Destiny', 'eu.erat.semper@lectusquismassa.co.uk', 21, 4, 3, 'sed, facilisis vitae, orci. Phasellus dapibus quam quis diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (22, 'Sade Lael', 'mi.fringilla@facilisismagnatellus.co.uk', 4, 1, 2, 'est, congue a, aliquet vel, vulputate eu, odio. Phasellus at augue id ante dictum cursus. Nunc mauris elit, dictum eu, eleifend nec,', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (23, 'Judah Cameran', 'nec@Seddictum.org', 19, 5, 1, 'Morbi quis urna. Nunc quis arcu vel quam dignissim pharetra. Nam ac nulla. In tincidunt congue turpis. In condimentum. Donec at arcu.', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (24, 'Griffith Reuben', 'eu.metus@DonecegestasDuis.edu', 14, 4, 5, 'et risus. Quisque libero lacus, varius et, euismod et, commodo at, libero. Morbi accumsan laoreet ipsum. Curabitur consequat, lectus sit amet luctus', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (25, 'Fritz Ramona', 'turpis.Nulla.aliquet@ultrices.edu', 18, 2, 3, 'ut mi. Duis risus odio, auctor vitae, aliquet nec, imperdiet nec, leo. Morbi neque tellus, imperdiet non, vestibulum nec, euismod in, dolor.', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (26, 'Beverly Ruth', 'nec@quamCurabitur.org', 5, 1, 4, 'amet, faucibus ut, nulla. Cras eu tellus eu augue porttitor interdum. Sed auctor odio a purus. Duis elementum, dui quis accumsan convallis,', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (27, 'Noble Isabelle', 'sem@elitEtiamlaoreet.com', 1, 2, 2, 'In scelerisque scelerisque dui. Suspendisse ac metus vitae velit egestas lacinia. Sed congue, elit sed consequat auctor, nunc nulla vulputate dui, nec', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (28, 'Linda Kieran', 'Aliquam.tincidunt@Maurisquisturpis.co.uk', 20, 2, 1, 'Nulla aliquet. Proin velit. Sed malesuada augue ut lacus. Nulla tincidunt, neque vitae semper egestas, urna justo faucibus lectus, a sollicitudin orci', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (30, 'Bianca Orli', 'euismod.enim@convallis.org', 5, 2, 2, 'Fusce fermentum fermentum arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus ornare. Fusce mollis. Duis', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (31, 'Branden Merrill', 'luctus.et.ultrices@primisinfaucibus.edu', 2, 4, 4, 'metus. Vivamus euismod urna. Nullam lobortis quam a felis ullamcorper viverra. Maecenas iaculis aliquet diam. Sed diam lorem, auctor quis, tristique ac,', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (32, 'Lana Faith', 'Praesent.luctus.Curabitur@et.com', 13, 2, 2, 'Fusce mollis. Duis sit amet diam eu dolor egestas rhoncus. Proin nisl sem, consequat nec, mollis vitae, posuere at, velit. Cras lorem', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (33, 'Francesca Abel', 'imperdiet.ullamcorper@elementumduiquis.org', 17, 2, 4, 'sagittis semper. Nam tempor diam dictum sapien. Aenean massa. Integer vitae nibh. Donec est mauris, rhoncus id, mollis nec, cursus a, enim.', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (34, 'Fleur Melvin', 'amet@vulputate.co.uk', 20, 1, 3, 'primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec tincidunt. Donec vitae erat vel pede blandit congue. In scelerisque scelerisque', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (35, 'Maile Cecilia', 'libero.Proin@Nullaaliquet.edu', 22, 3, 3, 'eget magna. Suspendisse tristique neque venenatis lacus. Etiam bibendum fermentum metus. Aenean sed pede nec ante blandit viverra. Donec tempus, lorem fringilla', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (36, 'Isaac Serena', 'at.lacus@auctor.org', 12, 3, 2, 'turpis. Aliquam adipiscing lobortis risus. In mi pede, nonummy ut, molestie in, tempus eu, ligula. Aenean euismod mauris eu elit. Nulla facilisi.', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (37, 'Logan Lareina', 'Aenean.euismod@lobortisnisi.net', 8, 4, 3, 'malesuada fames ac turpis egestas. Fusce aliquet magna a neque. Nullam ut nisi a odio semper cursus. Integer mollis. Integer tincidunt aliquam', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (38, 'Dante Yen', 'ornare.In@Craseget.edu', 13, 4, 1, 'tempor bibendum. Donec felis orci, adipiscing non, luctus sit amet, faucibus ut, nulla. Cras eu tellus eu augue porttitor interdum. Sed auctor', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (39, 'Rigel Regan', 'semper.tellus.id@dolorquamelementum.com', 17, 2, 1, 'aliquet libero. Integer in magna. Phasellus dolor elit, pellentesque a, facilisis non, bibendum sed, est. Nunc laoreet lectus quis massa. Mauris vestibulum,', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (40, 'Abraham Latifah', 'velit@enimnectempus.ca', 12, 3, 3, 'ultrices posuere cubilia Curae; Phasellus ornare. Fusce mollis. Duis sit amet diam eu dolor egestas rhoncus. Proin nisl sem, consequat nec, mollis', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (41, 'Shad Nola', 'ultricies.ligula.Nullam@erat.co.uk', 20, 1, 5, 'molestie arcu. Sed eu nibh vulputate mauris sagittis placerat. Cras dictum ultricies ligula. Nullam enim. Sed nulla ante, iaculis nec, eleifend non,', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (42, 'Craig Noelani', 'in@dapibus.org', 10, 3, 4, 'nulla. Cras eu tellus eu augue porttitor interdum. Sed auctor odio a purus. Duis elementum, dui quis accumsan convallis, ante lectus convallis', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (43, 'Rhoda Burke', 'egestas.Duis.ac@Nullamnisl.co.uk', 4, 1, 1, 'sed, hendrerit a, arcu. Sed et libero. Proin mi. Aliquam gravida mauris ut mi. Duis risus odio, auctor vitae, aliquet nec, imperdiet', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (44, 'Stone Barbara', 'quis@consectetuerrhoncusNullam.edu', 21, 5, 1, 'amet nulla. Donec non justo. Proin non massa non ante bibendum ullamcorper. Duis cursus, diam at pretium aliquet, metus urna convallis erat,', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (45, 'Hilary Chaim', 'amet.diam@perinceptoshymenaeos.net', 19, 1, 4, 'sem ut dolor dapibus gravida. Aliquam tincidunt, nunc ac mattis ornare, lectus ante dictum mi, ac mattis velit justo nec ante. Maecenas', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (46, 'Peter Dacey', 'primis.in@sed.net', 13, 3, 1, 'metus sit amet ante. Vivamus non lorem vitae odio sagittis semper. Nam tempor diam dictum sapien. Aenean massa. Integer vitae nibh. Donec', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (47, 'Kylee Eliana', 'laoreet@enimgravida.co.uk', 21, 4, 5, 'Maecenas iaculis aliquet diam. Sed diam lorem, auctor quis, tristique ac, eleifend vitae, erat. Vivamus nisi. Mauris nulla. Integer urna. Vivamus molestie', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (48, 'Yoko Ciaran', 'sed.pede@Crasloremlorem.ca', 21, 1, 5, 'blandit enim consequat purus. Maecenas libero est, congue a, aliquet vel, vulputate eu, odio. Phasellus at augue id ante dictum cursus. Nunc', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (49, 'Nissim Raja', 'nisi@sit.org', 6, 2, 5, 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus ornare. Fusce mollis. Duis sit amet diam eu', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (50, 'Hayes Katell', 'auctor.ullamcorper.nisl@pharetrasedhendrerit.ca', 19, 3, 2, 'neque vitae semper egestas, urna justo faucibus lectus, a sollicitudin orci sem eget massa. Suspendisse eleifend. Cras sed leo. Cras vehicula aliquet', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (51, 'Castor Jakeem', 'mattis@varius.org', 10, 4, 4, 'Phasellus ornare. Fusce mollis. Duis sit amet diam eu dolor egestas rhoncus. Proin nisl sem, consequat nec, mollis vitae, posuere at, velit.', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (52, 'Kiayada Martena', 'mus@liberoIntegerin.net', 19, 2, 5, 'id sapien. Cras dolor dolor, tempus non, lacinia at, iaculis quis, pede. Praesent eu dui. Cum sociis natoque penatibus et magnis dis', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (53, 'Keely Wyatt', 'Phasellus@eunibhvulputate.ca', 12, 2, 5, 'odio. Etiam ligula tortor, dictum eu, placerat eget, venenatis a, magna. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam laoreet, libero', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (54, 'Phillip Sasha', 'in@necante.org', 12, 4, 4, 'Proin sed turpis nec mauris blandit mattis. Cras eget nisi dictum augue malesuada malesuada. Integer id magna et ipsum cursus vestibulum. Mauris', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (55, 'Kelly Nathaniel', 'libero.est@sodaleselit.net', 5, 4, 2, 'Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non,', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (56, 'Wynne Eleanor', 'inceptos.hymenaeos@orci.co.uk', 15, 1, 2, 'Etiam gravida molestie arcu. Sed eu nibh vulputate mauris sagittis placerat. Cras dictum ultricies ligula. Nullam enim. Sed nulla ante, iaculis nec,', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (57, 'Claire Brittany', 'pharetra.sed.hendrerit@ullamcorpermagnaSed.co.uk', 8, 2, 2, 'a, dui. Cras pellentesque. Sed dictum. Proin eget odio. Aliquam vulputate ullamcorper magna. Sed eu eros. Nam consequat dolor vitae dolor. Donec', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (58, 'Lars Zena', 'mauris.Integer.sem@magnamalesuadavel.edu', 19, 5, 4, 'Vivamus nibh dolor, nonummy ac, feugiat non, lobortis quis, pede. Suspendisse dui. Fusce diam nunc, ullamcorper eu, euismod ac, fermentum vel, mauris.', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (59, 'Justin Jordan', 'sit.amet@iaculis.ca', 14, 4, 5, 'cursus et, eros. Proin ultrices. Duis volutpat nunc sit amet metus. Aliquam erat volutpat. Nulla facilisis. Suspendisse commodo tincidunt nibh. Phasellus nulla.', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (60, 'Briar Brian', 'fermentum.risus.at@placerategetvenenatis.ca', 1, 5, 4, 'enim, gravida sit amet, dapibus id, blandit at, nisi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (61, 'Jasper Serina', 'purus.in.molestie@ultricies.org', 12, 3, 3, 'auctor velit. Aliquam nisl. Nulla eu neque pellentesque massa lobortis ultrices. Vivamus rhoncus. Donec est. Nunc ullamcorper, velit in aliquet lobortis, nisi', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (62, 'Judith Jamal', 'Suspendisse.tristique@pedeCras.edu', 8, 5, 2, 'semper pretium neque. Morbi quis urna. Nunc quis arcu vel quam dignissim pharetra. Nam ac nulla. In tincidunt congue turpis. In condimentum.', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (63, 'Callum Talon', 'sem@orcilobortis.ca', 6, 3, 3, 'ut aliquam iaculis, lacus pede sagittis augue, eu tempor erat neque non quam. Pellentesque habitant morbi tristique senectus et netus et malesuada', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (64, 'Rose Samuel', 'ac@dictumeu.org', 18, 4, 2, 'eu elit. Nulla facilisi. Sed neque. Sed eget lacus. Mauris non dui nec urna suscipit nonummy. Fusce fermentum fermentum arcu. Vestibulum ante', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (65, 'Olympia Orlando', 'augue.scelerisque@maurissitamet.edu', 11, 3, 5, 'Praesent luctus. Curabitur egestas nunc sed libero. Proin sed turpis nec mauris blandit mattis. Cras eget nisi dictum augue malesuada malesuada. Integer', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (66, 'Oscar Dorothy', 'Nullam.vitae.diam@In.net', 12, 4, 2, 'elit sed consequat auctor, nunc nulla vulputate dui, nec tempus mauris erat eget ipsum. Suspendisse sagittis. Nullam vitae diam. Proin dolor. Nulla', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (67, 'Illiana Chaney', 'ac.mattis.ornare@amalesuadaid.co.uk', 12, 4, 3, 'Suspendisse eleifend. Cras sed leo. Cras vehicula aliquet libero. Integer in magna. Phasellus dolor elit, pellentesque a, facilisis non, bibendum sed, est.', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (69, 'Nyssa Kamal', 'non.sapien.molestie@justonec.org', 19, 3, 4, 'enim. Etiam imperdiet dictum magna. Ut tincidunt orci quis lectus. Nullam suscipit, est ac facilisis facilisis, magna tellus faucibus leo, in lobortis', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (70, 'Merritt Elijah', 'et@ultricesposuere.co.uk', 19, 2, 2, 'Aliquam erat volutpat. Nulla facilisis. Suspendisse commodo tincidunt nibh. Phasellus nulla. Integer vulputate, risus a ultricies adipiscing, enim mi tempor lorem, eget', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (71, 'Vance Boris', 'vestibulum@Donec.edu', 2, 4, 4, 'In faucibus. Morbi vehicula. Pellentesque tincidunt tempus risus. Donec egestas. Duis ac arcu. Nunc mauris. Morbi non sapien molestie orci tincidunt adipiscing.', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (72, 'Ocean Perry', 'ultrices.sit@pellentesquetellussem.net', 11, 2, 5, 'amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (73, 'Fuller Austin', 'eu@Phasellus.ca', 2, 1, 5, 'dis parturient montes, nascetur ridiculus mus. Proin vel nisl. Quisque fringilla euismod enim. Etiam gravida molestie arcu. Sed eu nibh vulputate mauris', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (74, 'Natalie Bernard', 'Fusce.aliquam.enim@nuncnullavulputate.ca', 9, 1, 2, 'purus. Duis elementum, dui quis accumsan convallis, ante lectus convallis est, vitae sodales nisi magna sed dui. Fusce aliquam, enim nec tempus', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (75, 'Vivien Sophia', 'Suspendisse.sed@ipsum.ca', 18, 2, 5, 'nec, cursus a, enim. Suspendisse aliquet, sem ut cursus luctus, ipsum leo elementum sem, vitae aliquam eros turpis non enim. Mauris quis', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (76, 'Irene Jordan', 'fames@quisturpis.net', 1, 3, 1, 'malesuada augue ut lacus. Nulla tincidunt, neque vitae semper egestas, urna justo faucibus lectus, a sollicitudin orci sem eget massa. Suspendisse eleifend.', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (77, 'Salvador Quentin', 'bibendum.fermentum.metus@ultriciessem.com', 4, 2, 3, 'Fusce aliquet magna a neque. Nullam ut nisi a odio semper cursus. Integer mollis. Integer tincidunt aliquam arcu. Aliquam ultrices iaculis odio.', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (78, 'Lyle Mia', 'montes@idrisus.com', 3, 2, 5, 'et netus et malesuada fames ac turpis egestas. Aliquam fringilla cursus purus. Nullam scelerisque neque sed sem egestas blandit. Nam nulla magna,', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (79, 'Miranda Sarah', 'mauris.ut@nuncnullavulputate.net', 2, 3, 3, 'velit eu sem. Pellentesque ut ipsum ac mi eleifend egestas. Sed pharetra, felis eget varius ultrices, mauris ipsum porta elit, a feugiat', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (80, 'Virginia Victor', 'aliquet.vel.vulputate@Vivamusnibh.edu', 10, 1, 2, 'a felis ullamcorper viverra. Maecenas iaculis aliquet diam. Sed diam lorem, auctor quis, tristique ac, eleifend vitae, erat. Vivamus nisi. Mauris nulla.', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (81, 'Shaine Jael', 'amet.risus@magnisdisparturient.co.uk', 5, 4, 4, 'tempus scelerisque, lorem ipsum sodales purus, in molestie tortor nibh sit amet orci. Ut sagittis lobortis mauris. Suspendisse aliquet molestie tellus. Aenean', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (82, 'Tanisha Kyla', 'tristique.ac@senectusetnetus.ca', 11, 1, 5, 'sollicitudin orci sem eget massa. Suspendisse eleifend. Cras sed leo. Cras vehicula aliquet libero. Integer in magna. Phasellus dolor elit, pellentesque a,', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (83, 'Hector Harriet', 'risus.varius.orci@AliquamnislNulla.co.uk', 6, 5, 5, 'sit amet ante. Vivamus non lorem vitae odio sagittis semper. Nam tempor diam dictum sapien. Aenean massa. Integer vitae nibh. Donec est', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (84, 'Irene Kaseem', 'elit.Aliquam@uteros.com', 19, 4, 1, 'Curabitur consequat, lectus sit amet luctus vulputate, nisi sem semper erat, in consectetuer ipsum nunc id enim. Curabitur massa. Vestibulum accumsan neque', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (85, 'James Gil', 'arcu.imperdiet.ullamcorper@amagna.net', 22, 5, 3, 'In lorem. Donec elementum, lorem ut aliquam iaculis, lacus pede sagittis augue, eu tempor erat neque non quam. Pellentesque habitant morbi tristique', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (86, 'Dawn Colt', 'magnis@Duiscursusdiam.com', 17, 2, 1, 'interdum. Sed auctor odio a purus. Duis elementum, dui quis accumsan convallis, ante lectus convallis est, vitae sodales nisi magna sed dui.', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (87, 'Lareina Roth', 'Nulla.interdum@ante.org', 20, 5, 1, 'fringilla mi lacinia mattis. Integer eu lacus. Quisque imperdiet, erat nonummy ultricies ornare, elit elit fermentum risus, at fringilla purus mauris a', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (88, 'Vernon Stone', 'Sed.auctor.odio@in.net', 3, 2, 2, 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce aliquet magna a neque. Nullam ut nisi a', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (89, 'Brandon Rina', 'Nulla.facilisi.Sed@adipiscing.ca', 15, 4, 5, 'sed pede nec ante blandit viverra. Donec tempus, lorem fringilla ornare placerat, orci lacus vestibulum lorem, sit amet ultricies sem magna nec', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (90, 'Mechelle Lana', 'ultrices@pedeacurna.co.uk', 2, 4, 1, 'ultricies adipiscing, enim mi tempor lorem, eget mollis lectus pede et risus. Quisque libero lacus, varius et, euismod et, commodo at, libero.', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (92, 'Karleigh Wyatt', 'dictum.eu@neceuismod.org', 14, 4, 5, 'ut odio vel est tempor bibendum. Donec felis orci, adipiscing non, luctus sit amet, faucibus ut, nulla. Cras eu tellus eu augue', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (93, 'Kameko Kirby', 'quam@enimconsequatpurus.com', 4, 3, 4, 'Cras dolor dolor, tempus non, lacinia at, iaculis quis, pede. Praesent eu dui. Cum sociis natoque penatibus et magnis dis parturient montes,', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (94, 'Orlando Tobias', 'felis.eget@lacusAliquamrutrum.edu', 17, 3, 5, 'Nunc lectus pede, ultrices a, auctor non, feugiat nec, diam. Duis mi enim, condimentum eget, volutpat ornare, facilisis eget, ipsum. Donec sollicitudin', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (95, 'Joel Fulton', 'tempor.diam@fringillaeuismod.org', 14, 1, 5, 'nec orci. Donec nibh. Quisque nonummy ipsum non arcu. Vivamus sit amet risus. Donec egestas. Aliquam nec enim. Nunc ut erat. Sed', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (96, 'Jack Armando', 'Sed.nunc.est@tempordiam.net', 4, 5, 2, 'ut, nulla. Cras eu tellus eu augue porttitor interdum. Sed auctor odio a purus. Duis elementum, dui quis accumsan convallis, ante lectus', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (97, 'Damian Fay', 'ipsum@Nam.org', 1, 3, 3, 'euismod in, dolor. Fusce feugiat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam auctor, velit eget laoreet posuere, enim nisl elementum', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (98, 'Cora Keefe', 'feugiat.placerat.velit@tortorInteger.edu', 21, 5, 1, 'ultricies sem magna nec quam. Curabitur vel lectus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec dignissim', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (99, 'Caldwell Odessa', 'massa@Proinnonmassa.co.uk', 10, 4, 4, 'nec, malesuada ut, sem. Nulla interdum. Curabitur dictum. Phasellus in felis. Nulla tempor augue ac ipsum. Phasellus vitae mauris sit amet lorem', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (100, 'Giselle Bryar', 'blandit.viverra@Donecfelis.net', 20, 4, 5, 'dolor dapibus gravida. Aliquam tincidunt, nunc ac mattis ornare, lectus ante dictum mi, ac mattis velit justo nec ante. Maecenas mi felis,', NULL, '2021-07-05 21:58:57', NULL);
INSERT INTO `testimoni` VALUES (104, 'Evry Nazyli Ciptanto', 'member@gmail.com', 7, 3, 5, 'eeu metus. In lorem. Donec elementum, lorem ut aliquam iaculis, lacus pede sagittis augue, eu tempor erat neque non quam. Pellentesque habitant', 2, '2021-07-10 13:42:15', '16d33eef41b9d5a32459e322ae83d1ab.png');
INSERT INTO `testimoni` VALUES (110, 'Evry Nazyli Ciptanto', 'member@gmail.com', 20, 3, 4, 'lummayannnn pokoknya puasss  donggg. . . ', 2, '2021-07-10 16:19:45', '16d33eef41b9d5a32459e322ae83d1ab.png');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(60) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `profesi_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `last_login` datetime DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_PROFESI_ID_REF_PROFESI` (`profesi_id`),
  CONSTRAINT `FK_PROFESI_ID_REF_PROFESI` FOREIGN KEY (`profesi_id`) REFERENCES `profesi` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES (1, 'Administrator', 'Administrator', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', 7, '2021-07-05 21:59:47', '2022-06-03 13:26:45', 'a642b4e6b1c005a9b8191959973538fd.png');
INSERT INTO `users` VALUES (2, 'Evry Nazyli Ciptanto', 'evrynazyli', 'member@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'member', 3, '2021-07-05 21:59:47', '2022-06-03 12:39:50', '16d33eef41b9d5a32459e322ae83d1ab.png');
INSERT INTO `users` VALUES (8, 'Nazyli', 'nazyli', 'nazyli@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'admin', 4, '2021-07-08 00:00:02', NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for wisata
-- ----------------------------
DROP TABLE IF EXISTS `wisata`;
CREATE TABLE `wisata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `jenis_wisata_id` int(11) DEFAULT NULL,
  `fasilitas` text DEFAULT NULL,
  `bintang` smallint(6) DEFAULT NULL,
  `kontak` varchar(45) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `latlong` varchar(50) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `web` varchar(45) DEFAULT NULL,
  `jenis_kuliner_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_wisata_jenis_wisata_idx` (`jenis_wisata_id`),
  KEY `fk_wisata_jenis_kuliner1_idx` (`jenis_kuliner_id`),
  CONSTRAINT `fk_wisata_jenis_kuliner1` FOREIGN KEY (`jenis_kuliner_id`) REFERENCES `jenis_kuliner` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_wisata_jenis_wisata` FOREIGN KEY (`jenis_wisata_id`) REFERENCES `jenis_wisata` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wisata
-- ----------------------------
BEGIN;
INSERT INTO `wisata` VALUES (1, 'The Great Asia Africa Lembang', 'Terletak di Jalan Raya Lembang, tepat berseberangan dengan Farmhouse Lembang yang lebih dahulu populer, The Great Asia Africa adalah salah satu tempat wisata di Lembang yang tengah naik daun saat ini.\r\nDi sini, kamu bisa berfoto-foto menggunakan hanbok dengan latar belakang ala rumah-rumah Korea di masa lalu, kimono di Kyoto mini, menikmati warna-warni dinding di Maroko, atau bahkan berpose ala film India, lengkap dengan sari.', 1, 'Travel Agent', 3, '+6281995589188', 'Jl. Raya Lembang - Bandung No.71, Gudangkahuripan, Kec. Lembang, Kabupaten Bandung Barat, Jawa Barat 40391', '-6.8329402,107.6019028', 'nibh@Morbiaccumsan.com', 'https://test.com', NULL);
INSERT INTO `wisata` VALUES (2, 'Dusun Bambu Lembang', 'Keindahan alam yang dikemas dengan suasana tradisional ala Sunda. Kombinasi yang pas untuk menghasilkan sebuah tempat wisata di Bandung yang menyenangkan.\r\nSulit untuk enggak merasa tertarik datang dan makan di pinggir danau kecil yang jadi ikon Dusun Bambu Lembang , yang bisa kamu lihat di foto-foto tempat wisata populer ini. Menginap di Dusun Bambu pun bisa, mau di villa ataupun glamping.', 2, 'Taman Bermain', 4, '+6288792934039', 'Jl. Kolonel Masturi No.KM. 11, Kertawangi, Kec. Cisarua, Kabupaten Bandung Barat, Jawa Barat 40551', '-6.7904996,107.5756456', 'tortor.Nunc@duinectempus.com', 'https://test.com', NULL);
INSERT INTO `wisata` VALUES (3, 'Lembang Park & Zoo', 'Lembang memang enggak pernah kehabisan tempat wisata yang seru, dan salah satu tempat wisata di Lembang Bandung yang terbaru adalah Lembang Park & Zoo!\r\nTerletak di Jl. Kolonel Masturi No. 171, Sukajaya, Lembang, Kabupaten Bandung Barat, Jawa Barat, Lembang Park & Zoo enggak hanya merupakan kebun binatang di mana para pengunjung bisa bertemu dan mengenal berbagai satwa, tapi juga menjadi tempat wisata rekreasi yang menyenangkan.\r\n', 2, 'Taman', 3, '+6285036938393', 'Jl. Kolonel Masturi No.171, Sukajaya, Kec. Lembang, Kabupaten Bandung Barat, Jawa Barat 40391', '-6.8059154,107.5897839', 'vehicula.aliquet@euenim.co.uk', 'https://test.com', NULL);
INSERT INTO `wisata` VALUES (4, 'Braga Bandung', 'Braga adalah ikon kota Bandung, dan enggak mungkin liburan ke Bandung kalau enggak menyempatkan diri sekadar lewat atau bahkan singgah untuk menikmati hypenya Braga. Dari restoran, bar, sampai coffee shop kekinian yang berdiri di dalam gedung tua yang terjaga, semuanya ada di Braga', 1, 'Taman Bermain', 2, '+6289846580637', '3JJ5+WQV, Jalan, Braga, Sumurbandung, Bandung City, West Java', '-6.9178283,107.6094341', 'ac@Sed.net', 'https://test.com', NULL);
INSERT INTO `wisata` VALUES (5, 'Orchid Forest Cikole', 'Terletak di Cikole, Lembang, Kabupaten Bandung Barat, Jawa Barat,  Orchid Forest Cikole adalah hutan anggrek terbesar di Indonesia. Enggak main-main, jumlah anggrek di sini mencapai 20.000 tanaman! Selain anggrek, barisan pohon pinus yang ada di sana juga membuat pemandangan Orchid Forest Cikole menjadi sangat indah.', 1, 'Taman Bermain', 3, '+6285538368589', 'Genteng, Cikole, Kec. Lembang, Kabupaten Bandung Barat, Jawa Barat 40391', '-6.7804877,107.6352863', 'at.arcu@sedtortor.edu', 'https://test.com', NULL);
INSERT INTO `wisata` VALUES (6, 'Tebing Keraton', 'Tebing Keraton adalah sebuah tebing dengan pemandangan luar biasa di area Taman Hutan Raya Ir. H. Djuanda. Kalau ingin merasakan pengalaman melihat lautan pohon yang hijau dari atas tebing, di sinilah tempatnya.\r\nBanyak orang juga yang datang sekitar subuh untuk melihat matahari terbit di sini.', 2, 'Taman Bermain', 5, '+6282138338191', 'Ciburial, Kec. Cimenyan, Kabupaten Bandung Barat, Jawa Barat 40198', '-6.8340683,107.6614264', 'Nunc@litora.org', 'https://test.com', NULL);
INSERT INTO `wisata` VALUES (7, 'Kawah Putih Ciwidey', 'Sering melihat Kawah Putih Ciwidey  menjadi latar untuk foto-foto yang Instagramable? Well, memang sepopuler itu tempat wisata di Bandung ini. Buat yang belum pernah ke sini, wajib banget setidaknya sekali seumur hidup lihat .', 2, 'Tour Operator', 5, '+6282825703514', 'Sugihmukti, Kec. Pasirjambu, Kabupaten Bandung, Jawa Barat', '-7.166154,107.4010453', 'dui.Cum.sociis@dictumPhasellus.co.uk', 'https://test.com', NULL);
INSERT INTO `wisata` VALUES (8, 'Taman Hutan Raya Ir. H. Djuanda', 'Sesuai namanya Taman Hutan Raya Ir. H. Djuanda,  memang bukan sekadar taman - ini adalah hutan kota yang terletak di area Dago Pakar. Taman yang kerap disebut Tahura oleh warga Bandung ini juga jadi salah satu tempat wisata di Bandung favorit - termasuk bagi masyarakat kota Bandung sekalipun.', 2, 'Tempat Makan', 2, '+6285622873250', 'Kompleks Tahura, Jl. Ir. H. Juanda No.99, Ciburial, Kec. Cimenyan, Kabupaten Bandung, Jawa Barat 40198', '-6.8585841,107.6284202', 'Morbi@venenatis.net', 'https://test.com', NULL);
INSERT INTO `wisata` VALUES (9, 'Chinatown Bandung', 'Tempat yang satu ini cukup unik. Di Chinatown Bandung, anda bisa menemukan suasana zaman dulu di Bandung disini.', 2, 'Taman Bermain', 3, '+6283322294096', 'Jl. Kelenteng No.41, Ciroyom, Kec. Andir, Kota Bandung, Jawa Barat 40182', '-6.9172663,107.5927563', 'nonummy.ac.feugiat@sit.co.uk', 'https://test.com', NULL);
INSERT INTO `wisata` VALUES (10, 'Branchsto Ganesha Lembang', ' Ini adalah tempat wisata di Lembang yang menawarkan pengalaman berkuda, pengalaman yang mungkin enggak bisa kamu dapatkan setiap hari. Kamu bisa mengenal kuda, cara merawat kuda, hingga belajar mengendarai kuda di sana.\r\nEnggak cuma orang dewasa yang bisa belajar naik kuda di sini. Anak-anak pun bisa belajar naik kuda poni di sini!', 2, 'Tour Operator', 3, '+6285585685415', 'Jl. Padasuka Atas No.KM 4, RW.006, Cimenyan, Kec. Cimenyan, Kota Bandung, Jawa Barat 40391', '-6.8673974,107.6631188', 'auctor.vitae.aliquet@congue.co.uk', 'https://test.com', NULL);
INSERT INTO `wisata` VALUES (11, 'Kampung Cai Ranca Upas', 'Kampung Cai Ranca Upas adalah salah satu tempat wisata paling menarik di Ciwidey! Selain punya area perkemahan yang cantik, Kampung Cai Ranca Upas juga punya  yang menyenangkan untuk dikunjungi. Selain itu juga ada berbagai permainan outbound yang bisa kamu coba di sana bersama keluarga.', 1, 'Taman Bermain', 5, '+6281960492255', 'Jl. Raya Ciwidey - Patengan No.KM. 11, Patengan, Kec. Rancabali, Kabupaten Bandung, Jawa Barat 40973', '-7.1411849,107.3954696', 'Mauris@vulputate.ca', 'https://test.com', NULL);
INSERT INTO `wisata` VALUES (12, 'Warung Kopi Purnama', 'Sebelum banyak coffee shop menjamur di Kota Bandung, Warung Kopi Purnama telah lebih dulu membaca bisnis kopi yang potensial.\n\nWarung kopi yang hampir berusia seabad ini kini dijalankan oleh keturunan dari generasi ke-4 dan masih tetap mempertahankan cita rasa aslinya.\n\nBerbeda dengan coffee shop kekinian, Warung Kopi Purnama masih tetap menawarkan menu andalannya seperti kopi hitam, kopi susu, dan roti selai srikaya.', NULL, 'Tour Operator', 4, '+6280391529762', 'Jl. Alkateri No.22, Braga, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40111', '-6.9200122,107.605256', 'consequat@cursus.com', 'https://test.com', 2);
INSERT INTO `wisata` VALUES (13, 'Yamie Toko You Bandung', 'Tempat wisata kuliner Bandung berikutnya yang tak boleh dilewatkan adalah Yamie Toko You Bandung yang sangat legendaris. Toko You sudah berdiri sejak tahun 1947 dan terkenal akan cita rasanya makanan khas Indonesia dan China yang sangat unik. Selain itu, Toko You yang terletak di Jalan Hasanuddin No.12 Bandung ini juga menyajikan berbagai kuliner penuh nostalgia khas tahun 1990-an.', NULL, 'Taman', 2, '+6285668825188', 'Jl. Hasanudin No.12, Lebakgede, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132', '-6.8950077,107.5982942', 'vulputate.ullamcorper.magna@eros.com', 'https://test.com', 1);
INSERT INTO `wisata` VALUES (14, 'Iga Bakar si Jangkung', 'Kalau kamu mencari tempat wisata kuliner Bandung yang menyajikan menu-menu beriga, maka pilihan terbaiknya adalah restoran Iga Bakar si Jangkung. Iga Bakar si Jangkung menyajikan menu makanan yang lengkap mulai dari olahan ayam, kambing, dan sapi lewat berbagai masakannya yang variatif. Namun, andalan utama dari restoran ini adalah menu iga bakarnya yang disajikan dalam mangkuk tanah liat dengan bumbu yang meresap, lembut, dan nikmat', NULL, 'Taman bermain', 5, '+6287390779233', 'Jl. Cipaganti No.75G, Pasteur, Kec. Sukajadi, Kota Bandung, Jawa Barat 40161', '-6.8950906,107.6000285', 'fermentum.arcu@dui.co.uk', 'https://test.com', 1);
INSERT INTO `wisata` VALUES (15, 'Roti Bakar Cari Rasa Kosambi', 'Wisata kuliner Bandung lainnya yang tak kalah hits dan legendaris di seantero Bandung adalah Roti Bakar Cari Rasa yang terletak di daerah Kosambi. Toko roti bakar yang telah berdiri sejak 1950-an ini disebut-sebut sebagai penjual roti bakar pertama yang buka di Kota Bandung. Saking terkenalnya roti bakar Cari Rasa ini, banyak juga penjual roti bakar gerobak keliling yang mengambil rotinya dari toko ini.', NULL, 'Taman', 3, '+6283480406592', 'Jl. A. Yani No.149, Kb. Pisang, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40112', '-6.8949988,107.5671975', 'velit@quis.co.uk', 'https://test.com', 1);
INSERT INTO `wisata` VALUES (16, 'Lotek Kalipah Apo', 'Lotek adalah salah satu sajian wisata kuliner Bandung tradisional yang sangat khas dan sulit ditemukan di tempat lainnya di luar Jawa Barat. Salah satu penjual lotek paling tersohor dan paling laris di Kota Bandung adalah Lotek Kalipah Apo yang berjualan di Jl. Kalipah Apo No.42. Resep turun temurun dan proses olahan secara tradisional menjadi dua rahasia utama untuk mempertahankan cita rasa lotek Kalipah Apo yang legit.', NULL, 'Taman Bermain', 3, '+6284628349180', 'Jl. Kalipah Apo No.42, Karanganyar, Kec. Astanaanyar, Kota Bandung, Jawa Barat 40241', '-6.9234424,107.5993366', 'Fusce.feugiat.Lorem@ridiculus.ca', 'https://test.com', 1);
INSERT INTO `wisata` VALUES (17, 'Bolu Bakar Tunggal', 'Kalau kamu penasaran akan wisata kuliner Bandung berbentuk kue yang paling nikmat, maka tak ada jawaban lain selain Bolu Bakar Tunggal.\n\nBolu Bakar Tunggal adalah sejenis kue bolu berbentuk persegi panjang yang dipotong tengahnya dan diisi berbagai rasa di tengahnya mirip roti bakar.\n\nRasanya benar-benar nikmat dan berbeda dengan roti bakar. Pokoknya kamu wajib cicipi sendiri ketika nanti wisata kuliner ke Bandung!', NULL, 'Taman bermain', 5, '+6280724686651', 'Paskal Hyper Square, Jl. Pasir Kaliki No.25, Arjuna, Kec. Cicendo, Kota Bandung, Jawa Barat 40172', '-6.9143823,107.5599329', 'vel.arcu.eu@at.ca', 'https://test.com', 1);
INSERT INTO `wisata` VALUES (18, 'Cuanki Serayu', 'Bagi penyuka makanan pedas menyegarkan, maka wajib coba sensasi kenikmatan Cuanki Serayu yang terletak di Jalan Serayu No. 2, Cihapit. Meskipun namanya cuanki, namun apa yang ditawarkan oleh Cuanki Serayu sangat berbeda dengan cuanki yang dijual di tempat lainnya. Saking terkenalnya wisata kuliner Bandung ini, setiap hari antrian pembelinya selalu luber hingga ke tepi jalan di depan tokonya.', NULL, 'Taman Bermain', 4, '+6285844737342', 'Jl. Serayu No.2, Cihapit, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40114', '-6.9091261,107.6216182', 'tortor.dictum@Maurisblandit.ca', 'https://test.com', 2);
INSERT INTO `wisata` VALUES (19, 'Kue Balok Kang Ade', 'Tak ada yang spesial dari tempat berjualan Kue Balok Kang Ade yang terletak di kios kecil tepat di sebelah rel kereta di Jalan Garuda, Maleber, Kota Bandung ini. Namun, kue balok yang dijual di tempat ini sangat istimewa dan berbeda dari kue balok di tempat lainnya meskipun hanya dijual dalam rasa original saja. Variannya kue balok yang dijual hanya tersedia dalam pilihan matang dan setengah matang, namun, banyak menu pelengkap lainnya yang dijual di tempat ini.', NULL, 'Taman', 3, '+6288363317532', 'Jl. Garuda No.107, Dungus Cariang, Kec. Andir, Kota Bandung, Jawa Barat 40184', '-6.9083668,107.5768853', 'varius.orci@cubilia.edu', 'https://test.com', 1);
INSERT INTO `wisata` VALUES (20, 'Ronde Alkateri', 'Wisata kuliner Bandung berikutnya yang sangat cocok untuk mengusir hawa dingin Bandung di malam hari adalah ronde Alkateri. Berdiri sejak 1984, ronde Alkateri sudah sangat terkenal dan hingga kini selalu ramai diserbu oleh para pelanggannya yang datang dari berbagai daerah. Jika ingin mencicipinya, datanglah ke Jl. Alkateri No.1, biasanya ronde Alkateri buka sejak pukul 6 sore hingga pukul 10 malam.', NULL, 'Taman Bermain', 3, '+6282314452712', 'Jl. Alkateri No.01, Braga, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40111', '-6.9193309,107.6000005', 'nunc.sed@Nulla.edu', 'https://test.com', 2);
INSERT INTO `wisata` VALUES (21, 'Mie Rica Kejaksaan', 'Bagi penyuka kuliner berbahan dasar mie seperti bakmi, maka kamu perlu mencoba wisata kuliner Bandung yang satu ini.\n\nMie Rica Kejaksaan menjual menu bakmie dengan berbagai pilihan topping yang dijamin dapat membuatmu kenyang dan puas setelah menyantapnya.\n\nMie Rica Kejaksaan menjual menu-menu yang didominasi oleh campuran daging babi, sehingga pastikan agar hal tersebut sesuai dengan dirimu.', NULL, 'Taman Bermain', 4, '+6283429988107', 'Jl. Kejaksaan No.7, Braga, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40111', '-6.9168868,107.5990915', 'auctor.Mauris.vel@tempusrisusDonec.org', 'https://test.com', 1);
INSERT INTO `wisata` VALUES (22, 'Bacang Panas Braga', 'Bacang Panas Braga merupakan salah satu tujuan wisata kuliner Bandung yang tak hanya hits di kalangan penduduk Bandung, tapi juga legendaris. Tak berlebihan jika kita menyebut bacang yang dijual ini sebagai bacang paling nikmat di seantero Bandung Raya karena memang begitulah adanya. Selain itu, penjual bacang yang selalu mangkal di samping Apotik Kimia Farma dan Gedung Museum Konferensi Asia Afrika ini telah berjualan selama 30 tahun!', NULL, 'Taman', 4, '+6285085827300', 'Jl. Braga No.1-7, Braga, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40111', '-6.9209935,107.6077667', 'mauris@vulputateveliteu.org', 'https://test.com', 2);
INSERT INTO `wisata` VALUES (31, 'Toko Roti Sumber Hidangan', 'Toko Roti Sumber Hidangan telah berdiri sejak 1929 dan terkenal karena menjual aneka jenis kue khas Belanda dengan citarasa otentiknya. Untuk menemukan toko roti ini pun cukup mudah karena terletak di jalan paling terkenal di Bandung yaitu di Jalan Braga No. 22. Beberapa produk favorit toko roti ini yaitu moorkoppen, bokkepootjes, tompoesjes, aneka penganan manis lainnya, dan juga eskrim khas Toko Roti Sumber Hidangan.', NULL, 'Self-servic', 0, '+6285735999111', 'Jl. Braga No.20-22, Braga, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40111', '-6.9190377,107.6076367', 'helloword@gmail.com', 'https://test.com', 2);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;

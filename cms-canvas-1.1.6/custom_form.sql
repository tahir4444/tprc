-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 19, 2015 at 08:56 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `custom_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lk_genders_id` int(11) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `remarks` text,
  `date_updated` varchar(14) DEFAULT NULL,
  `date_of_birth` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `lastname`, `firstname`, `lk_genders_id`, `email`, `remarks`, `date_updated`, `date_of_birth`) VALUES
(1, 'Mullins', 'Elton', 1, 'nec@quamPellentesque.org', 'dictum sapien. Aenean massa. Integer vitae nibh. Donec est mauris,', '19910323212508', '19720528'),
(2, 'Trujillo', 'Isaiah', 1, 'eget.nisi.dictum@SuspendissesagittisNullam.com', 'erat, in consectetuer ipsum nunc id enim. Curabitur massa. Vestibulum', '20120701200949', '19760704'),
(3, 'Bailey', 'Benjamin', 1, NULL, 'gravida. Aliquam tincidunt, nunc ac mattis ornare, lectus ante dictum', '20120617031719', '19840704'),
(4, 'Holland', 'Daniel', 1, 'auctor.quis.tristique@Crasdolor.org', 'malesuada fames ac turpis egestas. Fusce aliquet magna a neque.', '19981212043654', '19520221'),
(5, 'Whitehead', 'Oliver', 1, 'enim.Etiam.imperdiet@posuereat.org', 'ornare sagittis felis. Donec tempor, est ac mattis semper, dui', '19970718175726', NULL),
(6, 'Pope', 'Jacob', 1, 'lobortis@volutpat.org', 'non sapien molestie orci tincidunt adipiscing. Mauris molestie pharetra nibh.', '20080327214503', '19680328'),
(7, 'Johnson', 'Murphy', 1, 'lorem.ac.risus@magnaPhasellusdolor.com', 'in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus', '20091226173412', '19520930'),
(8, 'Obrien', 'Zane', 1, 'orci.Donec@nonlorem.edu', 'ligula eu enim. Etiam imperdiet dictum magna. Ut tincidunt orci', NULL, '19661113'),
(9, 'Stafford', 'Thor', 1, 'ut@Vestibulum.ca', 'erat volutpat. Nulla facilisis. Suspendisse commodo tincidunt nibh. Phasellus nulla.', '19931114101751', '19710129'),
(10, 'Hendrix', 'Zachary', 1, 'Donec.tempus@ataugue.ca', 'iaculis, lacus pede sagittis augue, eu tempor erat neque non', '20050206122216', '19830621'),
(11, 'Stephens', 'Oliver', 1, 'lacus@purus.ca', 'a feugiat tellus lorem eu metus. In lorem. Donec elementum,', '19931118143657', '19670907'),
(12, 'Jacobs', 'Ivor', 1, 'amet.risus.Donec@Naminterdum.org', 'egestas hendrerit neque. In ornare sagittis felis. Donec tempor, est', '20061009110122', '19690606'),
(13, 'Wong', 'Stuart', 1, 'lorem.vitae.odio@Suspendissecommodotincidunt.edu', 'Phasellus vitae mauris sit amet lorem semper auctor. Mauris vel', '20030830220705', '19840110'),
(14, 'Spears', 'Kennan', 1, 'primis.in.faucibus@nonummyultriciesornare.edu', 'pede, malesuada vel, venenatis vel, faucibus id, libero. Donec consectetuer', '19911109203301', '19530620'),
(15, 'Lott', 'David', 1, 'ullamcorper@acipsumPhasellus.org', 'ligula. Aenean euismod mauris eu elit. Nulla facilisi. Sed neque.', '20000203065949', '19840502'),
(16, 'Olson', 'Hiram', 1, 'Nunc@liberodui.ca', NULL, '20040613024958', '19800127'),
(17, 'Stevens', 'Octavius', 1, 'nec.ante@placeratorci.ca', 'Fusce aliquam, enim nec tempus scelerisque, lorem ipsum sodales purus,', '19971013052110', '19760316'),
(18, 'Donovan', 'Neville', 1, 'adipiscing.elit.Curabitur@aliquetPhasellus.org', 'senectus et netus et malesuada fames ac turpis egestas. Fusce', '19951217061529', '19840307'),
(19, 'Barker', 'Uriel', 1, 'dictum.eu.placerat@enim.ca', 'ornare, elit elit fermentum risus, at fringilla purus mauris a', '19990630094811', '19710506'),
(20, 'Raymond', 'Donovan', 1, 'justo@neque.ca', NULL, '20041215172256', '19780316'),
(21, 'Morin', 'Isaiah', 1, 'pellentesque.eget.dictum@commodo.org', 'malesuada augue ut lacus. Nulla tincidunt, neque vitae semper egestas,', '19910220101139', '19860713'),
(22, 'Hays', 'Hakeem', 1, 'tincidunt.nunc@rutrum.ca', 'primis in faucibus orci luctus et ultrices posuere cubilia Curae;', '20130511091634', '19520404'),
(23, 'Wilder', 'Owen', 1, 'ipsum@enim.ca', 'risus. Duis a mi fringilla mi lacinia mattis. Integer eu', '20021105231435', '19760618'),
(24, 'Fitzpatrick', 'Akeem', 1, 'et@antedictummi.ca', 'Nam ligula elit, pretium et, rutrum non, hendrerit id, ante.', '20080613154615', '19760524'),
(25, 'Herrera', 'Kevin', 1, 'arcu.Vestibulum.ut@nec.ca', 'lectus. Cum sociis natoque penatibus et magnis dis parturient montes,', '19920814043254', '19600701'),
(26, 'Wilkinson', 'Fulton', 1, 'molestie.sodales@interdumligula.com', 'Nulla dignissim. Maecenas ornare egestas ligula. Nullam feugiat placerat velit.', '20130802081056', '19521203'),
(27, 'Gill', 'Giacomo', 1, 'velit.Quisque@egestasligula.edu', 'nascetur ridiculus mus. Donec dignissim magna a tortor. Nunc commodo', '19911009164755', '19740102'),
(28, 'Hebert', 'Devin', 1, 'consectetuer@ac.ca', 'tellus. Phasellus elit pede, malesuada vel, venenatis vel, faucibus id,', '19930217095004', '19631114'),
(29, 'Merrill', 'Otto', 1, 'laoreet@molestie.org', 'Morbi vehicula. Pellentesque tincidunt tempus risus. Donec egestas. Duis ac', '19990822160029', '19610927'),
(30, 'Livingston', 'Carson', 1, 'lobortis.quis@eumetusIn.com', 'non, egestas a, dui. Cras pellentesque. Sed dictum. Proin eget', '19961122081138', '19900712'),
(31, 'Delacruz', 'Raymond', 1, 'elit.pede@magnis.com', 'eu enim. Etiam imperdiet dictum magna. Ut tincidunt orci quis', '20060730085718', '19900527'),
(32, 'Whitfield', 'Kenneth', 1, 'augue.id.ante@egestasAliquam.ca', NULL, '20050101213900', '19880714'),
(33, 'Mcknight', 'Aaron', 1, 'semper@semper.edu', 'aliquet lobortis, nisi nibh lacinia orci, consectetuer euismod est arcu', '19940203231006', '19651114'),
(34, 'Swanson', 'Leonard', 1, 'lacus.Etiam@dolorFusce.ca', 'ridiculus mus. Donec dignissim magna a tortor. Nunc commodo auctor', '20090721133503', NULL),
(35, 'Roman', 'Dane', 1, 'tellus@duiaugueeu.org', 'at, libero. Morbi accumsan laoreet ipsum. Curabitur consequat, lectus sit', '19970125054529', '19711218'),
(36, 'Craft', 'Jameson', 1, 'egestas@adipiscingenim.edu', 'mauris. Integer sem elit, pharetra ut, pharetra sed, hendrerit a,', '20000214020112', '19730408'),
(37, 'Sullivan', 'Chancellor', 1, 'augue.scelerisque.mollis@Nuncsedorci.ca', 'ipsum dolor sit amet, consectetuer adipiscing elit. Etiam laoreet, libero', '20070423214423', '19561205'),
(38, 'Nielsen', 'Grant', 1, 'dolor.Donec@mipede.ca', 'nec, malesuada ut, sem. Nulla interdum. Curabitur dictum. Phasellus in', '19990728202326', '19570210'),
(39, 'Hurley', 'Branden', 1, 'velit@vitaeeratvel.com', 'ac, feugiat non, lobortis quis, pede. Suspendisse dui. Fusce diam', '19931220063312', '19890131'),
(40, 'Dixon', 'Gabriel', 1, 'faucibus.leo.in@metus.org', 'mollis nec, cursus a, enim. Suspendisse aliquet, sem ut cursus', '20130128093831', '19660215'),
(41, 'Austin', 'Harper', 1, 'Aliquam@feugiatnon.org', 'aliquam eros turpis non enim. Mauris quis turpis vitae purus', '20081230223555', '19630315'),
(42, 'Grant', 'Byron', 1, NULL, 'nunc. In at pede. Cras vulputate velit eu sem. Pellentesque', '19950821220025', '19840214'),
(43, 'Cotton', 'Benedict', 1, 'pede@gravidasitamet.ca', 'cursus. Integer mollis. Integer tincidunt aliquam arcu. Aliquam ultrices iaculis', '19910428203751', '19710620'),
(44, 'Sutton', 'Matthew', 1, 'cursus.a.enim@velitCras.com', 'Sed eu nibh vulputate mauris sagittis placerat. Cras dictum ultricies', '20130501070231', '19730316'),
(45, 'Odonnell', 'Ignatius', 1, 'Mauris.blandit@semmolestie.com', 'magna. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam', '19971205051109', '19600219'),
(46, 'Frost', 'Kirk', 1, 'amet.ultricies@nectempusscelerisque.com', 'Integer vulputate, risus a ultricies adipiscing, enim mi tempor lorem,', '20000224141555', '19610413'),
(47, 'Mathis', 'Nasim', 1, 'egestas.urna.justo@pede.com', 'ut erat. Sed nunc est, mollis non, cursus non, egestas', '20100617093800', '19600427'),
(48, 'Herrera', 'Caldwell', 1, 'ornare@nibhvulputate.com', 'Quisque nonummy ipsum non arcu. Vivamus sit amet risus. Donec', '20090616182749', '19630522'),
(49, 'Allison', 'Trevor', 1, 'arcu@non.edu', 'fringilla est. Mauris eu turpis. Nulla aliquet. Proin velit. Sed', '20081219175343', '19821130'),
(50, 'Church', 'Perry', 1, 'egestas@mauris.org', 'Duis a mi fringilla mi lacinia mattis. Integer eu lacus.', '19910312092657', '19590125'),
(51, 'Duncan', 'Keefe', 1, 'scelerisque@auctor.org', 'In tincidunt congue turpis. In condimentum. Donec at arcu. Vestibulum', '19910502220229', '19701008'),
(52, 'Skinner', 'Rogan', 1, 'Class.aptent@noncursus.com', 'diam. Sed diam lorem, auctor quis, tristique ac, eleifend vitae,', '19921213163947', '19871130'),
(53, 'Atkins', 'Lawrence', 1, 'egestas.Aliquam.nec@convallis.com', 'diam lorem, auctor quis, tristique ac, eleifend vitae, erat. Vivamus', '19950725091437', '19550117'),
(54, 'Rogers', 'Kareem', 1, 'gravida@fermentum.ca', 'lorem, auctor quis, tristique ac, eleifend vitae, erat. Vivamus nisi.', '19910328111341', '19621012'),
(55, 'Lee', 'Alan', 1, NULL, 'ipsum cursus vestibulum. Mauris magna. Duis dignissim tempor arcu. Vestibulum', '19961128025712', '19640625'),
(56, 'Delgado', 'Ciaran', 1, 'Praesent.interdum.ligula@dictum.ca', 'odio tristique pharetra. Quisque ac libero nec ligula consectetuer rhoncus.', '19970531050327', '19730530'),
(57, 'Rosa', 'Paul', 1, 'Fusce.feugiat@velitjustonec.com', 'enim commodo hendrerit. Donec porttitor tellus non magna. Nam ligula', '20070622134919', '19520410'),
(58, 'Kaufman', 'Keefe', 1, 'ac.facilisis@Suspendisseeleifend.ca', 'sed, facilisis vitae, orci. Phasellus dapibus quam quis diam. Pellentesque', '20000707165108', '19560908'),
(59, 'Holt', 'Raymond', 1, 'sem.vitae.aliquam@augue.org', 'porttitor interdum. Sed auctor odio a purus. Duis elementum, dui', '20040706083728', '19571222'),
(60, 'Neal', 'Joshua', 1, 'nec@liberoduinec.com', 'enim, gravida sit amet, dapibus id, blandit at, nisi. Cum', '20080131013602', '19630911'),
(61, 'Reid', 'Owen', 1, 'dapibus.rutrum@etnetuset.edu', 'libero est, congue a, aliquet vel, vulputate eu, odio. Phasellus', '20020225151301', '19511125'),
(62, 'Hicks', 'Nehru', 1, 'feugiat.non.lobortis@vel.edu', 'nisi dictum augue malesuada malesuada. Integer id magna et ipsum', '19920712234155', '19690423'),
(63, 'Lopez', 'Thomas', 1, 'tellus.id.nunc@lectusquis.edu', 'ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin', '20130908032345', '19610824'),
(64, 'Wilcox', 'Darius', 1, 'velit.Aliquam.nisl@massa.edu', 'rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac', '19930314050526', '19631215'),
(65, 'Bean', 'Nash', 1, 'tincidunt.Donec@magnaa.ca', 'Sed et libero. Proin mi. Aliquam gravida mauris ut mi.', '19920531205457', '19850620'),
(66, 'Hartman', 'Marvin', 1, NULL, 'feugiat non, lobortis quis, pede. Suspendisse dui. Fusce diam nunc,', '20021130233830', NULL),
(67, 'Schmidt', 'Quinn', 1, 'vel.vulputate.eu@vulputate.edu', 'eu, eleifend nec, malesuada ut, sem. Nulla interdum. Curabitur dictum.', '19940309094555', '19771128'),
(68, 'Cooper', 'Carlos', 1, 'sodales.nisi.magna@utnisi.com', 'gravida molestie arcu. Sed eu nibh vulputate mauris sagittis placerat.', '20110209145147', '19810105'),
(69, 'Rivers', 'Arden', 1, 'Cum@estconguea.com', 'nibh. Donec est mauris, rhoncus id, mollis nec, cursus a,', '19931008212809', '19590511'),
(70, 'Silva', 'Clinton', 1, 'Sed.molestie@posuere.edu', 'fermentum vel, mauris. Integer sem elit, pharetra ut, pharetra sed,', '20041017032439', '19540306'),
(71, 'Lang', 'Ulric', 1, 'Curae;@ligulaAeneangravida.ca', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames', '19910511045441', '19780520'),
(72, 'Key', 'Rafael', 1, 'nec.imperdiet@sapiengravidanon.org', 'dolor dolor, tempus non, lacinia at, iaculis quis, pede. Praesent', '20011104030153', '19770526'),
(73, 'Blair', 'Prescott', 1, 'sem.Pellentesque.ut@lobortisClassaptent.ca', 'consectetuer adipiscing elit. Etiam laoreet, libero et tristique pellentesque, tellus', '20030822045051', '19900322'),
(74, 'Jensen', 'Lawrence', 1, 'Duis@egetdictum.org', 'neque sed sem egestas blandit. Nam nulla magna, malesuada vel,', '20031202024929', '19700826'),
(75, 'Clay', 'Nero', 1, 'erat.semper@enim.edu', 'Etiam gravida molestie arcu. Sed eu nibh vulputate mauris sagittis', '19931126051406', '19850815'),
(76, 'Foley', 'Lev', 1, 'Praesent.eu@ullamcorperDuis.ca', 'pharetra. Nam ac nulla. In tincidunt congue turpis. In condimentum.', '20091021220203', '19831110'),
(77, 'Rogers', 'Phelan', 1, 'posuere.cubilia@luctus.org', 'purus ac tellus. Suspendisse sed dolor. Fusce mi lorem, vehicula', '20070122114453', '19510424'),
(78, 'Bryant', 'Kato', 1, 'interdum@Nullaeuneque.com', 'amet, consectetuer adipiscing elit. Aliquam auctor, velit eget laoreet posuere,', '20081203192506', '19661229'),
(79, 'Heath', 'Travis', 1, 'vel@nonlorem.ca', 'Nam ac nulla. In tincidunt congue turpis. In condimentum. Donec', '20040501164920', NULL),
(80, 'Reese', 'Ian', 1, 'lacus.Nulla.tincidunt@dignissimmagna.edu', 'tempus risus. Donec egestas. Duis ac arcu. Nunc mauris. Morbi', '20131214033746', '19670610'),
(81, 'Howe', 'Malik', 1, 'in@Sed.ca', 'hymenaeos. Mauris ut quam vel sapien imperdiet ornare. In faucibus.', '20080804021505', '19600623'),
(82, 'Branch', 'Basil', 1, 'et.nunc.Quisque@quamelementumat.ca', 'Nulla interdum. Curabitur dictum. Phasellus in felis. Nulla tempor augue', '20020219150837', '19850715'),
(83, 'Weaver', 'Vernon', 1, 'urna.Vivamus@Ut.edu', 'ut ipsum ac mi eleifend egestas. Sed pharetra, felis eget', '20080930234311', '19760723'),
(84, 'Bird', 'Yardley', 1, 'magna@sodalesat.ca', 'Proin eget odio. Aliquam vulputate ullamcorper magna. Sed eu eros.', '19960201005849', '19820925'),
(85, 'Albert', 'Sean', 1, 'Mauris.blandit@vestibulumMauris.com', 'purus, in molestie tortor nibh sit amet orci. Ut sagittis', '20070703100151', '19570919'),
(86, 'Mullins', 'Cain', 1, 'enim.diam@justo.org', 'leo elementum sem, vitae aliquam eros turpis non enim. Mauris', '20130426212828', '19711005'),
(87, 'Diaz', 'Cyrus', 1, 'eros.nec@urnaconvalliserat.edu', 'id enim. Curabitur massa. Vestibulum accumsan neque et nunc. Quisque', '19931031232132', '19600322'),
(88, 'Mckay', 'Ferdinand', 1, 'sociosqu.ad@Duismienim.com', 'consectetuer euismod est arcu ac orci. Ut semper pretium neque.', '19931210092521', '19540420'),
(89, 'Chandler', 'William', 1, 'nec.eleifend.non@aauctor.edu', 'dictum eu, eleifend nec, malesuada ut, sem. Nulla interdum. Curabitur', '20020422014350', '19790309'),
(90, 'Jackson', 'Gray', 1, 'fringilla.ornare@nislsemconsequat.ca', 'sollicitudin commodo ipsum. Suspendisse non leo. Vivamus nibh dolor, nonummy', '20050226031244', '19690408'),
(91, 'Kelley', 'Erich', 1, 'vel@NulladignissimMaecenas.edu', 'dictum augue malesuada malesuada. Integer id magna et ipsum cursus', '20110312172410', '19620525'),
(92, 'Porter', 'Noah', 1, 'risus.varius.orci@semper.edu', 'amet lorem semper auctor. Mauris vel turpis. Aliquam adipiscing lobortis', '19990328084618', '19700220'),
(93, 'Chandler', 'Adrian', 1, 'Aliquam.nisl.Nulla@Proin.ca', 'et tristique pellentesque, tellus sem mollis dui, in sodales elit', '20121002203743', '19600313'),
(94, 'Chen', 'Ivor', 1, 'nibh.Phasellus@MorbivehiculaPellentesque.ca', 'arcu. Vestibulum ante ipsum primis in faucibus orci luctus et', '20050426155420', '19540305'),
(95, 'Melton', 'August', 1, 'Nam.ligula@ultriciesornare.edu', 'interdum. Curabitur dictum. Phasellus in felis. Nulla tempor augue ac', '20060627132409', '19750911'),
(96, 'Lee', 'Warren', 1, 'vestibulum.Mauris@interdum.ca', 'facilisis eget, ipsum. Donec sollicitudin adipiscing ligula. Aenean gravida nunc', '19990731171952', '19581204'),
(97, 'Robertson', 'Jamal', 1, 'est@a.ca', 'Mauris vestibulum, neque sed dictum eleifend, nunc risus varius orci,', '20020331051421', '19661027'),
(98, 'Guzman', 'Finn', 1, 'non@Namtempor.com', 'posuere at, velit. Cras lorem lorem, luctus ut, pellentesque eget,', '19970826061149', '19740717'),
(99, 'Craft', 'Thaddeus', 1, 'ante.blandit.viverra@fermentumvelmauris.ca', 'primis in faucibus orci luctus et ultrices posuere cubilia Curae;', '20061115091849', '19681023'),
(100, 'Valenzuela', 'Hunter', 1, 'magna.a.neque@mauris.com', 'purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam', '20070902065641', '19540203'),
(101, 'Neal', 'Quemby', 2, 'Fusce@Integer.edu', 'ridiculus mus. Aenean eget magna. Suspendisse tristique neque venenatis lacus.', '20060709000931', '19610517'),
(102, 'Holland', 'Kessie', 2, 'semper.tellus.id@egestasDuisac.edu', 'blandit enim consequat purus. Maecenas libero est, congue a, aliquet', '19970330113534', '19870323'),
(103, 'Prince', 'Kylan', 2, 'molestie.arcu@eu.edu', 'dictum eleifend, nunc risus varius orci, in consequat enim diam', '19981103225824', '19650504'),
(104, 'Mayer', 'Zephr', 2, 'sit@malesuadafamesac.org', 'Cras eu tellus eu augue porttitor interdum. Sed auctor odio', '20071227150030', '19790723'),
(105, 'Mclean', 'Tanya', 2, 'justo.Proin.non@acfeugiatnon.com', 'ligula consectetuer rhoncus. Nullam velit dui, semper et, lacinia vitae,', '19990720051124', '19821014'),
(106, 'Huff', 'Aimee', 2, 'velit@Proin.org', 'erat semper rutrum. Fusce dolor quam, elementum at, egestas a,', '19950425111600', '19570721'),
(107, 'Moreno', 'Bethany', 2, 'Suspendisse.ac@Duiscursusdiam.edu', 'nulla. Cras eu tellus eu augue porttitor interdum. Sed auctor', '19930119030419', '19530618'),
(108, 'Mcmillan', 'Deanna', 2, NULL, 'Donec dignissim magna a tortor. Nunc commodo auctor velit. Aliquam', '20031227161315', '19770310'),
(109, 'Mckee', 'Raya', 2, 'amet@magnaetipsum.ca', 'Phasellus at augue id ante dictum cursus. Nunc mauris elit,', '20011105075342', '19550725'),
(110, 'Mayo', 'Willow', 2, 'nunc.sit@Integer.ca', 'orci, consectetuer euismod est arcu ac orci. Ut semper pretium', '20071124090219', '19821027'),
(111, 'Diaz', 'Kai', 2, 'odio.Aliquam@Phasellus.org', 'massa lobortis ultrices. Vivamus rhoncus. Donec est. Nunc ullamcorper, velit', '19970524082509', '19840804'),
(112, 'Snider', 'Nelle', 2, 'vulputate@nonlobortis.org', 'dolor. Fusce feugiat. Lorem ipsum dolor sit amet, consectetuer adipiscing', '19950504043915', '19611108'),
(113, 'Peterson', 'Uta', 2, 'felis.orci@laciniavitae.org', 'quam quis diam. Pellentesque habitant morbi tristique senectus et netus', '19930817185758', '19520708'),
(114, 'Foley', 'Claire', 2, 'diam.Sed.diam@lorem.edu', 'tempor arcu. Vestibulum ut eros non enim commodo hendrerit. Donec', '20010523205845', '19520403'),
(115, 'Franks', 'Kirsten', 2, 'Proin.velit.Sed@ut.edu', NULL, '20010620035751', '19561222'),
(116, 'Walter', 'Christine', 2, 'penatibus.et.magnis@magna.com', 'sed sem egestas blandit. Nam nulla magna, malesuada vel, convallis', '20011006202333', '19831103'),
(117, 'Justice', 'Rylee', 2, 'mi@ac.edu', 'Sed auctor odio a purus. Duis elementum, dui quis accumsan', '20060906212721', '19570519'),
(118, 'Burris', 'Wyoming', 2, 'augue.porttitor.interdum@euismodetcommodo.edu', 'non, cursus non, egestas a, dui. Cras pellentesque. Sed dictum.', '20011030160440', '19540703'),
(119, 'Herring', 'Nora', 2, 'ipsum.cursus@suscipitestac.org', 'euismod et, commodo at, libero. Morbi accumsan laoreet ipsum. Curabitur', '20021014223737', '19561231'),
(120, 'Rollins', 'Kerry', 2, 'justo@nec.ca', 'blandit mattis. Cras eget nisi dictum augue malesuada malesuada. Integer', '20120812174548', '19600229'),
(121, 'Graham', 'Bethany', 2, NULL, 'elementum sem, vitae aliquam eros turpis non enim. Mauris quis', '19910422083703', '19530308'),
(122, 'Lang', 'Riley', 2, 'volutpat.ornare@malesuadavelvenenatis.com', 'Sed nunc est, mollis non, cursus non, egestas a, dui.', '19951219212559', '19650513'),
(123, 'Gibson', 'Velma', 2, 'arcu.iaculis.enim@posuerecubilia.edu', 'condimentum eget, volutpat ornare, facilisis eget, ipsum. Donec sollicitudin adipiscing', '19941208183642', '19740214'),
(124, 'Powers', 'Jada', 2, 'elit@Fuscedolorquam.com', 'volutpat ornare, facilisis eget, ipsum. Donec sollicitudin adipiscing ligula. Aenean', '20030712145347', '19680704'),
(125, 'Campos', 'TaShya', 2, 'blandit.enim.consequat@eratnonummy.com', NULL, '20100109193826', '19600105'),
(126, 'Mckee', 'Ursula', 2, 'pharetra@arcuac.com', 'a ultricies adipiscing, enim mi tempor lorem, eget mollis lectus', '19930903142207', '19801026'),
(127, 'Montoya', 'Ann', 2, 'sagittis@urna.com', NULL, '19980702080203', '19850610'),
(128, 'Rosa', 'Oprah', 2, 'nec.tempus.mauris@auctorMaurisvel.edu', 'commodo at, libero. Morbi accumsan laoreet ipsum. Curabitur consequat, lectus', '20121008034342', '19890804'),
(129, 'Boyer', 'Tasha', 2, 'Nullam@Nullamfeugiatplacerat.org', 'lectus pede, ultrices a, auctor non, feugiat nec, diam. Duis', '20010712135348', '19730312'),
(130, 'Francis', 'Rhoda', 2, 'purus.Nullam@consectetueradipiscing.org', NULL, '19980209113017', '19820518'),
(131, 'Bates', 'Uta', 2, 'consectetuer@nec.com', 'In nec orci. Donec nibh. Quisque nonummy ipsum non arcu.', '19980827005849', '19800129'),
(132, 'Kane', 'Constance', 2, 'velit.Cras.lorem@etnunc.edu', 'semper, dui lectus rutrum urna, nec luctus felis purus ac', '20040621171116', '19620915'),
(133, 'Santiago', 'Dahlia', 2, 'vel@Sednulla.ca', 'laoreet ipsum. Curabitur consequat, lectus sit amet luctus vulputate, nisi', '20090304133651', '19650706'),
(134, 'Garrison', 'Janna', 2, 'pharetra.felis.eget@Suspendissesed.ca', NULL, '19970607052849', '19530727'),
(135, 'Hines', 'Diana', 2, NULL, 'nec luctus felis purus ac tellus. Suspendisse sed dolor. Fusce', '20011119081724', '19750627'),
(136, 'Hanson', 'Melyssa', 2, 'et.tristique.pellentesque@etcommodo.com', 'ornare egestas ligula. Nullam feugiat placerat velit. Quisque varius. Nam', '20000403114315', '19510322'),
(137, 'Browning', 'Gisela', 2, 'orci.consectetuer.euismod@Inscelerisquescelerisque.org', 'interdum. Curabitur dictum. Phasellus in felis. Nulla tempor augue ac', '19920121172326', '19530204'),
(138, 'Chen', 'Hollee', 2, 'Praesent@ProinmiAliquam.edu', 'nibh. Aliquam ornare, libero at auctor ullamcorper, nisl arcu iaculis', '20110707210118', '19531107'),
(139, 'Cruz', 'Skyler', 2, 'Vestibulum@ac.org', 'Nunc laoreet lectus quis massa. Mauris vestibulum, neque sed dictum', '19931127124138', '19880801'),
(140, 'Jennings', 'Justine', 2, 'elementum@seddolor.com', 'enim nec tempus scelerisque, lorem ipsum sodales purus, in molestie', '19980416064730', '19610818'),
(141, 'Savage', 'Hadassah', 2, 'magnis@amet.ca', 'egestas rhoncus. Proin nisl sem, consequat nec, mollis vitae, posuere', '20060724143646', '19801130'),
(142, 'Carroll', 'Summer', 2, 'lacus.Quisque.purus@loremegetmollis.com', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames', '20050914194131', '19570918'),
(143, 'Rasmussen', 'Gillian', 2, 'elit@et.edu', 'Donec non justo. Proin non massa non ante bibendum ullamcorper.', '20110202061103', '19550421'),
(144, 'Joseph', 'Jemima', 2, 'senectus.et@nisiaodio.com', 'Suspendisse sagittis. Nullam vitae diam. Proin dolor. Nulla semper tellus', '19941031112826', '19851116'),
(145, 'Henderson', 'Keiko', 2, 'nibh.sit@tellus.org', 'Mauris vestibulum, neque sed dictum eleifend, nunc risus varius orci,', '19990202031838', '19600704'),
(146, 'Cole', 'Larissa', 2, 'Nulla.eget@duinec.edu', 'malesuada ut, sem. Nulla interdum. Curabitur dictum. Phasellus in felis.', '20101023143900', '19680227'),
(147, 'Berry', 'Ima', 2, 'pede.nonummy.ut@turpisAliquam.ca', 'volutpat. Nulla facilisis. Suspendisse commodo tincidunt nibh. Phasellus nulla. Integer', '19980516020932', '19830903'),
(148, 'Morales', 'Justina', 2, 'et.rutrum.non@arcuet.com', 'dolor, nonummy ac, feugiat non, lobortis quis, pede. Suspendisse dui.', '20040408002117', '19770810'),
(149, 'Love', 'Rebekah', 2, 'eget.varius@sem.com', 'vel sapien imperdiet ornare. In faucibus. Morbi vehicula. Pellentesque tincidunt', '20020103092730', '19880725'),
(150, 'Owen', 'Noelle', 2, 'non@Nullatincidunt.com', 'nascetur ridiculus mus. Proin vel nisl. Quisque fringilla euismod enim.', '20040813232012', '19760321'),
(151, 'Rodriguez', 'Fleur', 2, 'Nunc.mauris.elit@luctusCurabitur.edu', 'tempor diam dictum sapien. Aenean massa. Integer vitae nibh. Donec', '20050323192010', '19750609'),
(152, 'Andrews', 'Rhea', 2, 'id.magna.et@scelerisquemollisPhasellus.org', 'molestie dapibus ligula. Aliquam erat volutpat. Nulla dignissim. Maecenas ornare', '19910316045313', '19740815'),
(153, 'Serrano', 'Vivien', 2, NULL, 'eget, venenatis a, magna. Lorem ipsum dolor sit amet, consectetuer', '19930304032405', '19870904'),
(154, 'Chandler', 'Kaye', 2, 'pretium.aliquet.metus@Vestibulumanteipsum.edu', 'lectus. Cum sociis natoque penatibus et magnis dis parturient montes,', '20100922113306', '19700407'),
(155, 'Lang', 'Stacey', 2, 'arcu.imperdiet.ullamcorper@semut.edu', 'orci, in consequat enim diam vel arcu. Curabitur ut odio', '20100620174746', '19750507'),
(156, 'Parrish', 'Shoshana', 2, 'ultricies.ligula.Nullam@Donecnibhenim.ca', 'vel pede blandit congue. In scelerisque scelerisque dui. Suspendisse ac', '20080609060620', '19630120'),
(157, 'Hubbard', 'Brielle', 2, 'enim.Sed@temporerat.com', 'erat vel pede blandit congue. In scelerisque scelerisque dui. Suspendisse', '20130608030600', '19610614'),
(158, 'Gentry', 'Debra', 2, 'ipsum.primis@tellusSuspendisse.ca', 'odio, auctor vitae, aliquet nec, imperdiet nec, leo. Morbi neque', '20111107080508', '19550921'),
(159, 'Guy', 'Rachel', 2, 'mollis.dui.in@massaIntegervitae.edu', 'porttitor scelerisque neque. Nullam nisl. Maecenas malesuada fringilla est. Mauris', '20130131104752', '19600622'),
(160, 'Yates', 'Daryl', 2, 'sem.semper.erat@augueeutempor.org', 'Curabitur dictum. Phasellus in felis. Nulla tempor augue ac ipsum.', '20051030013624', '19611110'),
(161, 'West', 'Freya', 2, 'Cras.dictum.ultricies@lobortis.com', 'in molestie tortor nibh sit amet orci. Ut sagittis lobortis', '20110915140138', '19810802'),
(162, 'Fields', 'Maryam', 2, 'vitae.velit.egestas@non.org', 'vehicula et, rutrum eu, ultrices sit amet, risus. Donec nibh', '20040222162925', '19601207'),
(163, 'Haley', 'Odessa', 2, 'quam@Etiamgravidamolestie.com', 'eu tempor erat neque non quam. Pellentesque habitant morbi tristique', '20040322205148', '19660506'),
(164, 'Reese', 'Ignacia', 2, 'mattis.semper.dui@Proin.org', 'ante dictum cursus. Nunc mauris elit, dictum eu, eleifend nec,', '20071019131300', '19530224'),
(165, 'Pacheco', 'Isabelle', 2, 'augue.eu.tempor@elitAliquam.com', 'scelerisque dui. Suspendisse ac metus vitae velit egestas lacinia. Sed', '20111119020423', '19591120'),
(166, 'Michael', 'Alexis', 2, 'Nullam.vitae@mauriseu.com', 'et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien,', '19910413161042', '19881227'),
(167, 'Velazquez', 'Lenore', 2, 'dictum@montes.org', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames', '19930323082503', '19650326'),
(168, 'Thompson', 'Ifeoma', 2, 'Sed.eu@rutrummagnaCras.com', 'magna sed dui. Fusce aliquam, enim nec tempus scelerisque, lorem', '20030304120649', '19800414'),
(169, 'Holloway', 'Aiko', 2, 'commodo@faucibus.org', 'augue eu tellus. Phasellus elit pede, malesuada vel, venenatis vel,', '20040306064647', '19510519'),
(170, 'Mullen', 'Brynn', 2, 'molestie.pharetra@ridiculusmus.com', 'conubia nostra, per inceptos hymenaeos. Mauris ut quam vel sapien', '20091229123552', '19581216'),
(171, 'Cummings', 'Hyacinth', 2, 'pede@fringillaornareplacerat.edu', 'laoreet, libero et tristique pellentesque, tellus sem mollis dui, in', '20010616070223', '19690119'),
(172, 'Barr', 'Kelly', 2, 'fringilla.purus.mauris@pedenonummy.com', 'ullamcorper eu, euismod ac, fermentum vel, mauris. Integer sem elit,', '20131223033501', '19580429'),
(173, 'Curtis', 'MacKenzie', 2, 'non.dui.nec@mattis.ca', 'sit amet metus. Aliquam erat volutpat. Nulla facilisis. Suspendisse commodo', '19991215003216', '19541010'),
(174, 'Merrill', 'Deanna', 2, 'pharetra@antelectusconvallis.edu', 'non arcu. Vivamus sit amet risus. Donec egestas. Aliquam nec', '20030903175742', '19860204'),
(175, 'Shannon', 'Emily', 2, 'ipsum.primis@Integeridmagna.org', 'ut mi. Duis risus odio, auctor vitae, aliquet nec, imperdiet', '20070928064017', '19541229'),
(176, 'Benjamin', 'Jana', 2, 'hendrerit.consectetuer.cursus@famesac.org', 'habitant morbi tristique senectus et netus et malesuada fames ac', '19910605221545', '19891120'),
(177, 'Navarro', 'Ingrid', 2, 'ultricies@ornaretortorat.ca', 'nibh enim, gravida sit amet, dapibus id, blandit at, nisi.', '20100528233642', '19750930'),
(178, 'Carpenter', 'Ursula', 2, 'convallis.dolor@ullamcorpervelit.edu', 'eget lacus. Mauris non dui nec urna suscipit nonummy. Fusce', '19970121203347', '19820811'),
(179, 'Wiggins', 'Kyla', 2, 'luctus.vulputate.nisi@ante.ca', 'sem ut cursus luctus, ipsum leo elementum sem, vitae aliquam', '20030404021123', '19550605'),
(180, 'Sykes', 'Miranda', 2, 'ridiculus.mus.Proin@DonecegestasDuis.com', 'eu turpis. Nulla aliquet. Proin velit. Sed malesuada augue ut', '19971227020721', '19900728'),
(181, 'Obrien', 'Jennifer', 2, 'enim@egetmetus.edu', 'et, rutrum eu, ultrices sit amet, risus. Donec nibh enim,', '20060621043222', '19640715'),
(182, 'Weiss', 'Leah', 2, 'nec.ligula@fermentum.org', 'suscipit nonummy. Fusce fermentum fermentum arcu. Vestibulum ante ipsum primis', '20070215235506', '19831110'),
(183, 'Cobb', 'Kelsey', 2, 'hymenaeos@consectetueradipiscingelit.com', 'netus et malesuada fames ac turpis egestas. Aliquam fringilla cursus', '20050603103420', '19810605'),
(184, 'Nixon', 'Cara', 2, 'urna.justo@vulputatedui.ca', 'Sed nunc est, mollis non, cursus non, egestas a, dui.', '20070505122501', '19710614'),
(185, 'Contreras', 'Audrey', 2, 'nisi.dictum.augue@sagittis.edu', 'Fusce aliquet magna a neque. Nullam ut nisi a odio', '19910303235829', '19690826'),
(186, 'Frederick', 'Madeson', 2, 'Duis.dignissim@mi.ca', 'enim diam vel arcu. Curabitur ut odio vel est tempor', '20041014184413', '19900224'),
(187, 'Jacobson', 'Teegan', 2, 'nunc.risus.varius@dolorvitaedolor.com', 'mauris sapien, cursus in, hendrerit consectetuer, cursus et, magna. Praesent', '19970128174645', '19510306'),
(188, 'England', 'Miranda', 2, 'lobortis.ultrices.Vivamus@mollisdui.ca', 'Proin non massa non ante bibendum ullamcorper. Duis cursus, diam', '19940915001646', '19771012'),
(189, 'Stein', 'Kai', 2, 'feugiat@ornare.edu', 'enim. Sed nulla ante, iaculis nec, eleifend non, dapibus rutrum,', '19950125031037', '19620719'),
(190, 'Shannon', 'Judith', 2, 'eget@atlibero.org', 'accumsan laoreet ipsum. Curabitur consequat, lectus sit amet luctus vulputate,', '19990105175245', '19650617'),
(191, 'Salas', 'Deirdre', 2, 'Donec.at@tinciduntdui.com', 'tincidunt dui augue eu tellus. Phasellus elit pede, malesuada vel,', '19970706220222', '19890227'),
(192, 'Finley', 'Freya', 2, 'euismod@eu.com', 'mauris. Integer sem elit, pharetra ut, pharetra sed, hendrerit a,', '20070113085303', '19640515'),
(193, 'Mcfadden', 'Kathleen', 2, 'ac.mi.eleifend@consectetueradipiscingelit.com', 'blandit mattis. Cras eget nisi dictum augue malesuada malesuada. Integer', '19970619045250', '19851224'),
(194, 'Jacobs', 'Justine', 2, 'sit.amet@velvulputate.ca', 'vulputate eu, odio. Phasellus at augue id ante dictum cursus.', '19960411193537', '19850827'),
(195, 'Hendrix', 'Cameran', 2, 'nunc.interdum.feugiat@nonummyutmolestie.com', 'sed orci lobortis augue scelerisque mollis. Phasellus libero mauris, aliquam', '19960115155050', '19640907'),
(196, 'Kline', 'Nyssa', 2, 'est.ac.facilisis@aliquetmagnaa.org', 'Phasellus dolor elit, pellentesque a, facilisis non, bibendum sed, est.', '19930309205032', '19601130'),
(197, 'Manning', 'Kiayada', 2, 'sapien@justosit.ca', 'Morbi neque tellus, imperdiet non, vestibulum nec, euismod in, dolor.', '20121203124547', '19851214'),
(198, 'Blanchard', 'Karyn', 2, 'Donec.felis.orci@Nunccommodo.org', 'malesuada fames ac turpis egestas. Fusce aliquet magna a neque.', '20000511104453', NULL),
(199, 'Schultz', 'Kimberly', 2, 'in.hendrerit.consectetuer@urnasuscipitnonummy.org', 'in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus', '19950605190943', '19620106'),
(200, 'Wade', 'Imelda', 2, 'Proin.dolor.Nulla@nislMaecenas.edu', 'malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis', '20100106083127', '19860223');

-- --------------------------------------------------------

--
-- Table structure for table `lk_countries`
--

CREATE TABLE `lk_countries` (
  `iso_code` varchar(20) NOT NULL,
  `country` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lk_countries`
--

INSERT INTO `lk_countries` (`iso_code`, `country`) VALUES
('AF', 'Afghanistan'),
('AX', 'Aland Islands'),
('AL', 'Albania'),
('DZ', 'Algeria'),
('AS', 'American Samoa'),
('AD', 'Andorra'),
('AO', 'Angola'),
('AI', 'Anguilla'),
('AQ', 'Antarctica'),
('AG', 'Antigua and Barbuda'),
('AR', 'Argentina'),
('AM', 'Armenia'),
('AW', 'Aruba'),
('AC', 'Ascension Island'),
('AU', 'Australia'),
('AT', 'Austria'),
('AZ', 'Azerbaijan'),
('BS', 'Bahamas'),
('BH', 'Bahrain'),
('BB', 'Barbados'),
('BD', 'Bangladesh'),
('BY', 'Belarus'),
('BE', 'Belgium'),
('BZ', 'Belize'),
('BJ', 'Benin'),
('BM', 'Bermuda'),
('BT', 'Bhutan'),
('BW', 'Botswana'),
('BO', 'Bolivia'),
('BA', 'Bosnia and Herzegovina'),
('BV', 'Bouvet Island'),
('BR', 'Brazil'),
('IO', 'British Indian Ocean Territory'),
('BN', 'Brunei Darussalam'),
('BG', 'Bulgaria'),
('BF', 'Burkina Faso'),
('BI', 'Burundi'),
('KH', 'Cambodia'),
('CM', 'Cameroon'),
('CA', 'Canada'),
('CV', 'Cape Verde'),
('KY', 'Cayman Islands'),
('CF', 'Central African Republic'),
('TD', 'Chad'),
('CL', 'Chile'),
('CN', 'China'),
('CX', 'Christmas Island'),
('CC', 'Cocos (Keeling) Islands'),
('CO', 'Colombia'),
('KM', 'Comoros'),
('CG', 'Congo'),
('CD', 'Congo, Democratic Republic'),
('CK', 'Cook Islands'),
('CR', 'Costa Rica'),
('CI', 'Cote D''Ivoire (Ivory Coast)'),
('HR', 'Croatia (Hrvatska)'),
('CU', 'Cuba'),
('CY', 'Cyprus'),
('CZ', 'Czech Republic'),
('CS', 'Czechoslovakia (former)'),
('DK', 'Denmark'),
('DJ', 'Djibouti'),
('DM', 'Dominica'),
('DO', 'Dominican Republic'),
('TP', 'East Timor'),
('EC', 'Ecuador'),
('EG', 'Egypt'),
('SV', 'El Salvador'),
('GQ', 'Equatorial Guinea'),
('ER', 'Eritrea'),
('EE', 'Estonia'),
('ET', 'Ethiopia'),
('EU', 'European Union'),
('FK', 'Falkland Islands (Malvinas)'),
('FO', 'Faroe Islands'),
('FJ', 'Fiji'),
('FI', 'Finland'),
('FR', 'France'),
('FX', 'France, Metropolitan'),
('GF', 'French Guiana'),
('PF', 'French Polynesia'),
('TF', 'French Southern Territories'),
('MK', 'F.Y.R.O.M. (Macedonia)'),
('GA', 'Gabon'),
('GM', 'Gambia'),
('GE', 'Georgia'),
('DE', 'Germany'),
('GH', 'Ghana'),
('GI', 'Gibraltar'),
('GB', 'Great Britain (UK)'),
('GR', 'Greece'),
('GL', 'Greenland'),
('GD', 'Grenada'),
('GP', 'Guadeloupe'),
('GU', 'Guam'),
('GT', 'Guatemala'),
('GG', 'Guernsey'),
('GN', 'Guinea'),
('GW', 'Guinea-Bissau'),
('GY', 'Guyana'),
('HT', 'Haiti'),
('HM', 'Heard and McDonald Islands'),
('HN', 'Honduras'),
('HK', 'Hong Kong'),
('HU', 'Hungary'),
('IS', 'Iceland'),
('IN', 'India'),
('ID', 'Indonesia'),
('IR', 'Iran'),
('IQ', 'Iraq'),
('IE', 'Ireland'),
('IL', 'Israel'),
('IM', 'Isle of Man'),
('IT', 'Italy'),
('JE', 'Jersey'),
('JM', 'Jamaica'),
('JP', 'Japan'),
('JO', 'Jordan'),
('KZ', 'Kazakhstan'),
('KE', 'Kenya'),
('KI', 'Kiribati'),
('KP', 'Korea (North)'),
('KR', 'Korea (South)'),
('XK', 'Kosovo*'),
('KW', 'Kuwait'),
('KG', 'Kyrgyzstan'),
('LA', 'Laos'),
('LV', 'Latvia'),
('LB', 'Lebanon'),
('LI', 'Liechtenstein'),
('LR', 'Liberia'),
('LY', 'Libya'),
('LS', 'Lesotho'),
('LT', 'Lithuania'),
('LU', 'Luxembourg'),
('MO', 'Macau'),
('MG', 'Madagascar'),
('MW', 'Malawi'),
('MY', 'Malaysia'),
('MV', 'Maldives'),
('ML', 'Mali'),
('MT', 'Malta'),
('MH', 'Marshall Islands'),
('MQ', 'Martinique'),
('MR', 'Mauritania'),
('MU', 'Mauritius'),
('YT', 'Mayotte'),
('MX', 'Mexico'),
('FM', 'Micronesia'),
('MC', 'Monaco'),
('MD', 'Moldova'),
('MN', 'Mongolia'),
('ME', 'Montenegro'),
('MS', 'Montserrat'),
('MA', 'Morocco'),
('MZ', 'Mozambique'),
('MM', 'Myanmar'),
('NA', 'Namibia'),
('NR', 'Nauru'),
('NP', 'Nepal'),
('NL', 'Netherlands'),
('AN', 'Netherlands Antilles'),
('NT', 'Neutral Zone'),
('NC', 'New Caledonia'),
('NZ', 'New Zealand (Aotearoa)'),
('NI', 'Nicaragua'),
('NE', 'Niger'),
('NG', 'Nigeria'),
('NU', 'Niue'),
('NF', 'Norfolk Island'),
('MP', 'Northern Mariana Islands'),
('NO', 'Norway'),
('OM', 'Oman'),
('PK', 'Pakistan'),
('PW', 'Palau'),
('PS', 'Palestinian Territory, Occupied'),
('PA', 'Panama'),
('PG', 'Papua New Guinea'),
('PY', 'Paraguay'),
('PE', 'Peru'),
('PH', 'Philippines'),
('PN', 'Pitcairn'),
('PL', 'Poland'),
('PT', 'Portugal'),
('PR', 'Puerto Rico'),
('QA', 'Qatar'),
('RE', 'Reunion'),
('RO', 'Romania'),
('RU', 'Russian Federation'),
('RW', 'Rwanda'),
('GS', 'S. Georgia and S. Sandwich Isls.'),
('SH', 'Saint Helena'),
('KN', 'Saint Kitts and Nevis'),
('LC', 'Saint Lucia'),
('MF', 'Saint Martin'),
('VC', 'Saint Vincent & the Grenadines'),
('WS', 'Samoa'),
('SM', 'San Marino'),
('ST', 'Sao Tome and Principe'),
('SA', 'Saudi Arabia'),
('SN', 'Senegal'),
('RS', 'Serbia'),
('YU', 'Serbia and Montenegro (former)'),
('SC', 'Seychelles'),
('SL', 'Sierra Leone'),
('SG', 'Singapore'),
('SI', 'Slovenia'),
('SK', 'Slovak Republic'),
('SB', 'Solomon Islands'),
('SO', 'Somalia'),
('ZA', 'South Africa'),
('SS', 'South Sudan'),
('ES', 'Spain'),
('LK', 'Sri Lanka'),
('SD', 'Sudan'),
('SR', 'Suriname'),
('SJ', 'Svalbard & Jan Mayen Islands'),
('SZ', 'Swaziland'),
('SE', 'Sweden'),
('CH', 'Switzerland'),
('SY', 'Syria'),
('TW', 'Taiwan'),
('TJ', 'Tajikistan'),
('TZ', 'Tanzania'),
('TH', 'Thailand'),
('TG', 'Togo'),
('TK', 'Tokelau'),
('TO', 'Tonga'),
('TT', 'Trinidad and Tobago'),
('TN', 'Tunisia'),
('TR', 'Turkey'),
('TM', 'Turkmenistan'),
('TC', 'Turks and Caicos Islands'),
('TV', 'Tuvalu'),
('UG', 'Uganda'),
('UA', 'Ukraine'),
('AE', 'United Arab Emirates'),
('UK', 'United Kingdom'),
('US', 'United States'),
('UM', 'US Minor Outlying Islands'),
('UY', 'Uruguay'),
('SU', 'USSR (former)'),
('UZ', 'Uzbekistan'),
('VU', 'Vanuatu'),
('VA', 'Vatican City State (Holy See)'),
('VE', 'Venezuela'),
('VN', 'Viet Nam'),
('VG', 'British Virgin Islands'),
('VI', 'Virgin Islands (U.S.)'),
('WF', 'Wallis and Futuna Islands'),
('EH', 'Western Sahara'),
('YE', 'Yemen'),
('ZM', 'Zambia'),
('ZR', 'Zaire'),
('ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `lk_genders`
--

CREATE TABLE `lk_genders` (
  `id` int(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `display_order` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lk_genders`
--

INSERT INTO `lk_genders` (`id`, `gender`, `display_order`) VALUES
(1, 'male', 1),
(2, 'female', 2);

-- --------------------------------------------------------

--
-- Table structure for table `new_customers`
--

CREATE TABLE `new_customers` (
  `id` int(11) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(11) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '0',
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `message` varchar(50) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `created_on` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `sort`, `fname`, `lname`, `email`, `mobile`, `message`, `color`, `created_on`) VALUES
(2, 0, 'MOHD', 'sdfss', 'ss', '9818880670', 'sssfsgdfsdggf', '#ff8040', '2015-06-23 14:30:15'),
(5, 0, 'MOHD', 'fsdfsdfsdf', 'sdfssdf', 'sdf', 'message', '#ff80ff', '2015-06-23 15:24:23'),
(6, 0, 'vrd', 'vishwa', 'vrd@gmail.com', '9212142645', 'new delhli', '#ffff00', '2015-06-24 13:07:26'),
(7, 0, 'MOHD', 'TAHIR', 'tahir4444@gmail.com', '9818880670', 'test message', '#ff0000', '2015-06-25 14:18:22'),
(8, 0, 'MOHD', 'TAHIR', 'tahir4444@gmail.com', '9818880670', 'test message', '#ff8040', '2015-06-25 14:31:13'),
(13, 0, 'sfdsfsfsdfstgwsf', 'sfdf sdfsfsfsfd', 'email id', 'mobile number ', 'your message', '#ff8000', '2015-07-01 16:42:52'),
(14, 0, '234234', '234234', 'sdfssdf', '9818880670', 'sdw33324543gsef', '#008040', '2015-07-01 16:44:16'),
(15, 0, 'Vishal', 'Chan', 'vrd@gmail.com', '8806467956496', 'some kind of message\r\n', '#0000ff', '2015-07-01 16:46:01'),
(16, 0, '343', 'ss33f', 's33f', 'dsd', 'fghfwwsfsdf', '#804040', '2015-07-01 16:46:29'),
(17, 0, 'tahir', 'dd', 'dsdf', 'fd', 'sdfsdfsafdsafd', '#80ff80', '2015-07-01 17:54:37'),
(18, 0, 'raju', 'kumar', 'sdfswf', 'sdfsdf', 'raju', '#ff8000', '2015-07-01 17:57:00'),
(19, 0, '', '', '', '', '', '#000000', '2015-07-03 10:24:48');

-- --------------------------------------------------------

--
-- Table structure for table `store_locator`
--

CREATE TABLE `store_locator` (
  `id` int(11) NOT NULL,
  `state` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_on` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store_locator`
--

INSERT INTO `store_locator` (`id`, `state`, `city`, `location`, `address`, `phone`, `is_active`, `created_on`) VALUES
(1, 'Karnataka ', 'Bengaluru', 'Mantri Mall', 'New U Store, No.LG-35, Lower Ground Floor, Mantri Mall, Malleshwaram, Bangalore-560003 ', '080-30160035', 1, '2015-08-06 17:49:25'),
(2, 'Karnataka ', 'Bengaluru', 'Gopalan Arcade', 'New U Store, Shop G-13, Ground Floor, Arch Mall, Rajarajeshwari nagar, Mysore Road, Bangalore-560098', '080-28605568', 1, '2015-08-06 17:49:25'),
(3, 'Karnataka ', 'Bengaluru', 'Gopalan Innovation', 'New U Store, G2, Ground Floor,#22, JP Nagar, 3rd Phase,Bannerghatta Road,Bangalore-560 076', '080-41570075', 1, '2015-08-06 17:49:25'),
(4, 'Karnataka ', 'Bengaluru', 'Commercial Street', 'New U Store, #11, Lower Ground Floor, Commercial Street, Bangalore-560001', '080-41495944', 1, '2015-08-06 17:49:25'),
(5, 'Karnataka ', 'Bengaluru', 'Banashankari(SIS-megamart)', 'New U Store, No.1, Opp Devegowda Petrol Bunk, C G Chinnappa Naidu Layout, Banashankari 2nd Stage, Bangalore-560070', '080-65703327', 1, '2015-08-06 17:49:25'),
(6, 'Karnataka ', 'Bengaluru', 'Forum Value Mall(SIS-megamart)', 'New U Store, No.62, Forum Value Mall, Whitefield, Near Varthurkhodi, Bangalore-560056', '080-41264879', 1, '2015-08-06 17:49:25'),
(7, 'Karnataka ', 'Mangaluru', 'City Centre Mall-Mangalore', 'New U Store, #TF 10,City Centre Mall,KS Rao Road, Mangalore-575001', '0824-4282721', 1, '2015-08-06 17:49:25'),
(8, 'Karnataka ', 'Bengaluru', 'Park Square-Ascendes Mall', 'New U Store, Shop no 31 & 32, 1st floor, Park Square mall, Whitefield, Bangalore', '080-28026521', 1, '2015-08-06 17:49:25'),
(9, 'Karnataka ', 'Mysuru', 'Habitat Mall', 'New U Store, B.M. Habitat Mall (Easy day), Shop 3 Ist Floor22/B, Vinoba Road, Jayalakshimpuram, Mysore-570012', '0821-2411888', 1, '2015-08-06 17:49:25'),
(10, 'Karnataka ', 'Mysuru', 'Garuda Mall', 'New U Store, Shop No.08, Ground Floor,Garuda  Mall,Makkaji Chowk,Mysore-570001', '0821-2440338', 1, '2015-08-06 17:49:25'),
(11, 'Karnataka ', 'Bengaluru', 'Royal Menakshi Mall', 'New U Store, Shop No-04, Ground Floor, Royal Meenakshi Mall, No-63, Bannerghatta Road,Hulimavu, Ward, Bangalore-560076', '080-67080124', 1, '2015-08-06 17:49:25'),
(12, 'Karnataka ', 'Mangaluru', 'Forum Fiza Mall', 'New U Store, No-216, Second floor, T S No-10, Forum Fiza Mall,Attavara Village, Mangaldevi, Temple Road, Pandeshwara, Mangalore-575001', '0824 -2498089', 1, '2015-08-06 17:49:25'),
(13, 'Andhra Pradesh ', 'Hyderabad ', 'Inorbit Mall', 'New U Store, Unit no. G-32, Inorbit Mall, Trion Properties Pvt Ltd, Survey no:64(part), Apiic Software Layout, Hi-tech city, Madhapur, Hyderabad-500081', '040-40266782', 1, '2015-08-06 17:49:25'),
(14, 'Andhra Pradesh ', 'Hyderabad ', 'GVK Mall', 'New U Store, Shop No.C2B, 3rd Floor,GVK Mall, Banjara Hills,Hyderabad-500034', '040-67463388/67463389', 1, '2015-08-06 17:49:25'),
(15, 'Tamilnadu', 'Chennai ', 'MM-Valasarawakkam-Chennai', 'New U Store, No.1, Alwarthirunagar Junction, Near La Chatelaing Residential School, Arcot Road, Valasarawakkam, Chennai-600087', '044-42721224', 1, '2015-08-06 17:49:25'),
(16, 'Tamilnadu', 'Trichy', 'MM-Trichy', 'New U Store, C/o Big megamart, Cantonment, Trichy, Tamilnadu-620020', '0431-4200882', 1, '2015-08-06 17:49:25'),
(17, 'Tamilnadu', 'Coimbatore ', 'Fun Republic Mall', 'New U Store, Shop No-6, UG floor, Unit No-474, Fun Republic mall, Sowripalam Village,  Avinash Road, Peelamedu, Coimbatore-641004', '0422-4212263', 1, '2015-08-06 17:49:25'),
(18, 'Tamilnadu', 'Madurai ', 'Vishaal De Mall', 'New U Store, Shop No:3A on Ground Floor,Vishaal de Mal, No-31, Gokhale Road, Chokkikulam, Madurai ? 625 002', '045-24365886', 1, '2015-08-06 17:49:25'),
(19, 'Tamilnadu', 'Chennai ', 'Phoenix Market Mall', 'New U Store, Phoenix Market City, F-27A, First Floor,#142, Velachery Main Road, Velachery,  Chennai -6000042', '044-42114784', 1, '2015-08-06 17:49:25'),
(20, 'Maharashtra ', 'Pune', 'Megamart-Dapodi', 'New U Store, Old Bombay Pune Highway, Near  C M E, Fugewadi, Dapodi, Pune-411012', '020-27145056', 1, '2015-08-06 17:49:25'),
(21, 'Maharashtra ', 'Thane', 'Korum Mall', 'New U Store, Korum Mall, No. S-4 2nd Floor,No.25, Korum Mall,Mangal Pandey Road, (Village Panchpakadi)Thane,Mumbai-400606', '022-66730715', 1, '2015-08-06 17:49:25'),
(22, 'Maharashtra ', 'Pune', 'Phoenix Mall', 'New U Store, Shop No. S- 42,2nd Floor,Phoenix Marketcity, Pune,Survey No. 207, Behind Baker Gauage,Viman Nagar Road, Pune - 411014', '020-30950645/66890645', 1, '2015-08-06 17:49:25'),
(23, 'Maharashtra ', 'Mumbai ', 'R-City Mall', 'New U Store, Shop No-T-8, 3rd Floor, Phase one, R-City Mall,LBS Marg, Ghatkopar(W), Mumbai-400086', '022-67252503', 1, '2015-08-06 17:49:25'),
(24, 'Haryana', 'Gurgaon', 'Ambience Mall ', 'New U Store, Ambience Mall, GF-56, Near Toll Gate No. 3, Nathpur Village NH-8, Gurgaon ', '0124-4029166', 1, '2015-08-06 17:49:25'),
(25, 'Haryana', 'Faridabad', 'Crown Mall ', 'New U Store, Crown Interiorz Mall, Shop No. G14, 12/7 Main Mathura Road, Sector 35, NH2, Faridabad, Haryana', '0129-4161016', 1, '2015-08-06 17:49:25'),
(26, 'Delhi', 'Delhi', 'DLF Promenade Mall ', 'New U Store, DLF Promenade Mall, Shop No. 321, Nelson Mandela Marg, New Delhi-70', '011-46075432', 1, '2015-08-06 17:49:25'),
(27, 'Delhi', 'Delhi', 'V3S Mall ', 'New U Store, V3S Mall, 131-132, Ground Floor, Vikas Marg, Laxmi Nagar, Delhi-92', '011-47529794', 1, '2015-08-06 17:49:25'),
(28, 'Haryana', 'Gurgaon', 'DLF City Center Mall', 'New U Store, DLF City Center Mall, Store No. CS0117, Sector 28, M G Road, Gurgaon 122002', '0124-4477795', 1, '2015-08-06 17:49:25'),
(29, 'Haryana', 'Gurgaon', 'DLF Galleria ', 'New U Store, DLF Galleria Market, Store No. SG 53, GF, Phase-4, Near Apollo Pharmacy, Gurgaon 122002', '0124-4110021/24', 1, '2015-08-06 17:49:25'),
(30, 'Delhi', 'Delhi', 'Pacific Mall', 'New U Store, Pacific Mall, Shop No. LGF 21-22, Tagore Garden, Khayala, Najafgarh Road, New Delhi-18', '011-45733480', 1, '2015-08-06 17:49:25'),
(31, 'Delhi', 'Delhi', 'Defence Colony ', 'New U Store, Shop No. 23, Defence Colony Market, New Delhi-24', '011-41070400', 0, '2015-08-06 17:49:25'),
(32, 'Delhi', 'Delhi', 'Khan Market ', 'New U Store, Shop No. 55A, Back Lane, Khan Market, New Delhi - 3', '011-41523482', 1, '2015-08-06 17:49:25'),
(33, 'Delhi', 'Delhi', 'DLF Place Mall ', 'New U Store, DLF Place Mall, Store No. 123-124, GF, Saket District Center, Saket, New Delhi-17', '011-47473315', 1, '2015-08-06 17:49:25'),
(34, 'Haryana', 'Gurgaon', 'MGF Mall ', 'New U Store, MGF Metropolitan Mall, Shop No. 8, First Floor, MG Road, Gurgaon 122002', '0124-4227461/62', 1, '2015-08-06 17:49:25'),
(35, 'Punjab', 'Amritsar', 'Trilium Mall ', 'New U Store, Trilium Mall, Shop No. 4, Upper Ground Floor (Wing A), C4, Circular Road, Basant Avenue, Amritsar-143001', '0183-5094740', 1, '2015-08-06 17:49:25'),
(36, 'Chandigarh', 'Chandigarh', 'DLF City Center Chandigarh', 'New U Store, DLF City Center, Shop No. KF1 & KF2, Rajiv Gandhi IT Park, Manimajra, Chandigarh-161101', '0172-4010406', 1, '2015-08-06 17:49:25'),
(37, 'Uttar Pradesh ', 'Noida', 'CSM, Noida', 'New U Store, Center Stage Mall, Pocket Kiosk 1, Upper Atrium,  Ground Flor, Sector 18, Noida - 201301', '0120-4280795', 1, '2015-08-06 17:49:25'),
(38, 'Uttar Pradesh ', 'Ghaziabad', 'Opulent Mall ', 'New U Store, Opulent Mall, G-01, GF, GT Road, Near Chaudhary Mode, Gandhi Nagar, Ghaziabad', '0120-4202621', 1, '2015-08-06 17:49:25'),
(39, 'Uttar Pradesh ', 'Ghaziabad', 'Mahagun Mall', 'New U Store, Mahagun Metro Mall, G-18, Ground Floor, VC-3, Sector-3, Vaishali, Ghaziabad-201010', '0120-4243195', 1, '2015-08-06 17:49:25'),
(40, 'Uttar Pradesh ', 'Noida', 'Shopprix Mall ', 'New U Store, Shopprix Mall, Shop No. 112, Ground Floor, Sector 61, Noida ', '0120-4120514', 1, '2015-08-06 17:49:25'),
(41, 'Uttar Pradesh ', 'Ghaziabad', 'Shipra Mall ', 'New U Store, Shipra Mall, 32 LG, Plot No. 9, Vaibhav Khand, Indirapuram, Ghaziabad-201014', '0120-4254564', 1, '2015-08-06 17:49:25'),
(42, 'Uttar Pradesh ', 'Noida', 'Spice Mall ', 'New U Store, Spice Mall, GF-115, Ground Floor, Sector-25, Noida-201301', '0120-4250177', 1, '2015-08-06 17:49:25'),
(43, 'Uttar Pradesh ', 'Noida', 'GIP, Noida', 'New U Store, Great India Place Mall, Shop No. 161, 1st Floor, Sector-38A, Noida-201301', '0120-4289185', 1, '2015-08-06 17:49:25'),
(44, 'Uttar Pradesh ', 'Lucknow', 'Phoenix Mall, Lucknow ', 'New U Store, Phoenix Mall, Ground Floor-09, Pocket CP-8, Sector-B, LDA Colony, Kanpur Road, Alambagh, Lucknow-226005', '0522-6500116/7', 1, '2015-08-06 17:49:25'),
(45, 'Uttar Pradesh ', 'Ghaziabad', 'Gaur Central Mall', 'New U Store, Gaur Central Mall, Shop No. GF4, Ground Floor, A1-A4, Rajnagar District Centre, Ghaziabad-201002', '0120-2828286', 1, '2015-08-06 17:49:25'),
(46, 'Uttar Pradesh ', 'Bareilly', 'Phoenix Mall, Bareilly ', 'New U Store, Phoenix Mall, Shop No. G-17, Pilibhit Bypass, Ujjwal Phase-1, Mahanagar Colony, Bareilly-243006', '0581-2583098', 1, '2015-08-06 17:49:25'),
(47, 'Uttar Pradesh ', 'Ghaziabad', 'World Square Mall ', 'New U Store, World Square Mall, Shop No. 1A, Ground Floor, GDA Nos.-160, Katori Mill, Mohan Nagar, GT Road, Ghaziabad-201007', '0120-4830174', 1, '2015-08-06 17:49:25'),
(48, 'Madhya Pradesh ', 'Bhopal ', 'DB Mall ', 'New U Store, DB Mall, T-19, 3rd Floor, Dwarka Sadan, 6, Press Complex Zone-1, MP Nagar, Bhopal', '0755-6644088', 1, '2015-08-06 17:49:25'),
(49, 'Madhya Pradesh ', 'Indore ', 'Malhar Mall ', 'New U Store, Malhar Mall, GF-19, Plot No. 299, 299-A, 304, PU-4, Scheme 54, AB Road, Indore-452010', '0731-4293032', 1, '2015-08-06 17:49:25'),
(50, 'Delhi', 'Delhi', 'Green Park ', 'New U Store, Shop No. G 52, Green Park Market, New Delhi-110016', '011-4608511', 1, '2015-08-06 17:49:25'),
(51, 'Haryana', 'Gurgaon', 'Nirvana Courtyard', 'New U Store, Nirvana Courtyard, Nirvana Country, Shop No. 6, Ground Floor, Block B, South City-II, Gurgaon-122018', '0124-4057889', 1, '2015-08-06 17:49:25'),
(52, 'Haryana', 'Gurgaon', 'Good Earth City Centre ', 'New U Store, Shop No. 72 ,Good Earth City Centre, Malibu Towne, Sector-50, Gurgaon-120018', '0124-4570336', 1, '2015-08-06 17:49:25'),
(53, 'Delhi', 'Delhi', 'Kalkaji', 'New U Store, F14, Main Road, Kalkaji, New Delhi - 110 019', '011-41315521', 1, '2015-08-06 17:49:25'),
(54, 'West Bengal ', 'Kolkata', 'Forum Mall, Kolkata ', 'New U Store, Forum Mall, Shop No-312, 3rd Floor,10/3, Elgin Road, Kolkata-700020', '033-40062030', 1, '2015-08-06 17:49:25'),
(55, 'West Bengal ', 'Howrah', 'Avani Riverside Mall, Kolkata ', 'New U Store, Avani Riverside Mall, Shop No. 12, Jagat Banerjee Ghat Road, Howrah-711102', '033-26780168', 1, '2015-08-06 17:49:25'),
(56, 'West Bengal ', 'Kolkata', 'Diamond City Mall, Kolkata', 'New U Store, Diamond City Mall, Shop No. 2A, Ground Floor, 68, Jessore Road, Kolkata-700055', '033-66373411', 1, '2015-08-06 17:49:25'),
(57, 'West Bengal ', 'Kolkata', 'Mani Square Mall, Kolkata', 'New U Store, Mani Square Mall, Shop No. 119, 1st Floor, 164/1, Manicktala Main Road, EM Bypass, Kolkata-700054', '033-40078617', 1, '2015-08-06 17:49:25'),
(58, 'Orissa', 'Bhubaneswar', 'Janpath, Bhubaneswar', 'New U Store, Shop No. 2, Ground Floor, 108/B, Master Canteen, Janpath, Bhubaneswar-751001', '0674-2533329', 1, '2015-08-06 17:49:25'),
(59, 'West Bengal ', 'Siliguri ', 'Cosmos Mall, Siliguri', 'New U Store, Shop No. 4A,First Floor, Cosmos Mall,2nd Milestone,Sevak Road, Silliguri-734001', '0353-2540784', 1, '2015-08-06 17:49:25'),
(60, 'Sikkim', 'Gangtok', 'New U', 'New U, First Floor, \r\nHotel Bayul, 09, Upper M.G. Marg,\r\nGangtok-737101', '9999335557', 1, '2015-08-06 17:49:25'),
(61, 'Faridabad', 'Faridabad', 'NewU', 'U Shop No. 14, Ground Floor Sector 14, Faridabad - 1210007', '0129-4014321', 1, '2015-08-06 17:49:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customers_ix1` (`lastname`),
  ADD KEY `customers_ix2` (`firstname`),
  ADD KEY `customers_ix3` (`lk_genders_id`);

--
-- Indexes for table `lk_genders`
--
ALTER TABLE `lk_genders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lk_genders_ix1` (`gender`),
  ADD KEY `lk_genders_ix2` (`display_order`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_locator`
--
ALTER TABLE `store_locator`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;
--
-- AUTO_INCREMENT for table `lk_genders`
--
ALTER TABLE `lk_genders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `store_locator`
--
ALTER TABLE `store_locator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_fk1` FOREIGN KEY (`lk_genders_id`) REFERENCES `lk_genders` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

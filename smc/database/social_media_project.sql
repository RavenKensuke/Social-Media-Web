-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 02, 2024 at 08:03 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social_media_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `username` text NOT NULL,
  `contact_msg` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `email`, `phone`, `username`, `contact_msg`, `user_id`) VALUES
(5, 'minthwaykhant04@gmail.com', 2147483647, 'Minn Thway Khant', 'In the conversation history, touch and hold the conversation you want to mark as unread.', 21),
(6, 'mayphue@gmail.com', 2147483647, 'Super SIS', 'In the conversation history, touch and hold the conversation you want to mark as unread.', 21),
(7, 'heinhtet254@gmail.com', 2147483647, 'Hein Htet', 'In the conversation history, touch and hold the conversation you want to mark as unread.', 21);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `author` text DEFAULT NULL,
  `post_title` text DEFAULT NULL,
  `post_desc` text DEFAULT NULL,
  `post_url` text NOT NULL,
  `post_image_name` text DEFAULT NULL,
  `post_publish_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `author`, `post_title`, `post_desc`, `post_url`, `post_image_name`, `post_publish_date`) VALUES
(9, 'Engadget', 'Amazon Big Spring Sale: Save up to 50 percent on tech from Apple, Anker, Sony and others', 'The Amazon Big Spring Sale is in full swing, and among the slew of clothing, outdoor and home products on discount, there are a few good tech deals to be had. Unlike regular Prime Day, the Big Spring Sale is not exclusive to Prime members, which is great for …', 'https://consent.yahoo.com/v2/collectConsent?sessionId=1_cc-session_2a3c3a4a-46da-4cac-a315-4c31bf082736', '', '2024-03-24T16:55:36Z'),
(10, 'Joe Rossignol', 'Sources: iOS 18 Lets Users Customize Layout of Home Screen App Icons', 'iOS 18 will give iPhone users greater control over Home Screen app icon arrangement, according to sources familiar with the matter.\n\n\n\nHome Screen on iOS 17\n\nWhile app icons will likely remain locked to an invisible grid system on the Home Screen, to ensure t…', 'https://www.macrumors.com/2024/03/24/ios-18-home-screen-app-icon-customization/', 'https://images.macrumors.com/t/O0nmSo2A-3SxfPOF12ZH29Wb6jU=/1600x/article-new/2024/03/iPhone-Home-Screen-Gradient.jpg', '2024-03-24T20:33:15Z'),
(11, 'Engadget', 'Amazon Big Spring Sale: Save up to 50 percent on tech from Apple, Anker, Sony and others', 'The Amazon Big Spring Sale is in full swing, and among the slew of clothing, outdoor and home products on discount, there are a few good tech deals to be had. Unlike regular Prime Day, the Big Spring Sale is not exclusive to Prime members, which is great for …', 'https://consent.yahoo.com/v2/collectConsent?sessionId=1_cc-session_2a3c3a4a-46da-4cac-a315-4c31bf082736', '', '2024-03-24T16:55:36Z'),
(12, 'Joe Rossignol', 'Sources: iOS 18 Lets Users Customize Layout of Home Screen App Icons', 'iOS 18 will give iPhone users greater control over Home Screen app icon arrangement, according to sources familiar with the matter.\n\n\n\nHome Screen on iOS 17\n\nWhile app icons will likely remain locked to an invisible grid system on the Home Screen, to ensure t…', 'https://www.macrumors.com/2024/03/24/ios-18-home-screen-app-icon-customization/', 'https://images.macrumors.com/t/O0nmSo2A-3SxfPOF12ZH29Wb6jU=/1600x/article-new/2024/03/iPhone-Home-Screen-Gradient.jpg', '2024-03-24T20:33:15Z'),
(13, 'Engadget', 'Amazon Big Spring Sale: Save up to 50 percent on tech from Apple, Anker, Sony and others', 'The Amazon Big Spring Sale is in full swing, and among the slew of clothing, outdoor and home products on discount, there are a few good tech deals to be had. Unlike regular Prime Day, the Big Spring Sale is not exclusive to Prime members, which is great for …', 'https://consent.yahoo.com/v2/collectConsent?sessionId=1_cc-session_2a3c3a4a-46da-4cac-a315-4c31bf082736', '', '2024-03-24T16:55:36Z'),
(14, 'Joe Rossignol', 'Sources: iOS 18 Lets Users Customize Layout of Home Screen App Icons', 'iOS 18 will give iPhone users greater control over Home Screen app icon arrangement, according to sources familiar with the matter.\n\n\n\nHome Screen on iOS 17\n\nWhile app icons will likely remain locked to an invisible grid system on the Home Screen, to ensure t…', 'https://www.macrumors.com/2024/03/24/ios-18-home-screen-app-icon-customization/', 'https://images.macrumors.com/t/O0nmSo2A-3SxfPOF12ZH29Wb6jU=/1600x/article-new/2024/03/iPhone-Home-Screen-Gradient.jpg', '2024-03-24T20:33:15Z'),
(15, 'NPR', 'How Two Recent Cases Of Violence Illustrate The Lives of LGBTQ People', 'Suicide rates for queer and trans people are disproportionately high. They\'re also routinely targets of violence and hate crimes.<br/><br/>While some states have protections for queer and trans people, many other states have passed laws that restrict the righ…', 'https://www.npr.org/2024/03/24/1198910892/how-two-recent-cases-of-violence-illustrate-the-lives-of-lgbtq-people', 'https://media.npr.org/assets/img/2024/03/21/gettyimages-2031358669_wide-e970bd70f22c7eedeb88b36fb8caaffeb240c6e0-s1400-c100.jpg', '2024-03-24T12:59:14Z'),
(16, 'Ana Altchek', 'The man trying to take down Apple', 'DOJ antitrust chief Jonathan Kanter is leading the DOJ\'s charge against Apple, accusing it of anti-competitive tactics.', 'https://www.businessinsider.com/justice-department-antitrust-jonathan-kanter-apple-lawsuit-2024-3', 'https://i.insider.com/65fdcf392417f97b87ce8488?width=1200&format=jpeg', '2024-03-24T09:51:01Z'),
(17, 'Matt Turner,Jordan Parker Erb', 'Apple\'s having a rough year', 'Apple is in the DOJ\'s crosshairs. Here\'s a breakdown in less than a minute.', 'https://www.businessinsider.com/insider-today-apple-doj-lawsuit-google-search-goldman-sachs-2024-3', 'https://i.insider.com/65fd8ada2417f97b87ce5878?width=1200&format=jpeg', '2024-03-24T12:07:39Z'),
(18, 'Aaron Mok', 'These are the 3 Apple patents analysts say could hit the production line', 'Analysts predict patents for an Apple Watch with a camera, a hand wearable for the Vision Pro, and an offline Siri are likely to become products.', 'https://www.businessinsider.com/3-apple-patents-that-could-turn-into-products-2024-3', 'https://i.insider.com/65fdd8032417f97b87ce8e67?width=1200&format=jpeg', '2024-03-24T12:11:01Z'),
(19, 'Rebecca Rommen', 'iPhone\'s SOS satellite feature helped rescue a family of hikers lost in a freezing Oregon forest, says report', 'Family of six, including two children, activated iPhone\'s SOS via satellite feature after they became lost hiking on Mt. Hood, Oregon.', 'https://www.businessinsider.com/family-6-rescued-oregon-mountain-after-using-iphones-sos-feature-2024-3', 'https://i.insider.com/660011713f923f7dab009ab0?width=1200&format=jpeg', '2024-03-24T13:13:39Z'),
(20, 'Rachael Davies', 'iPhone 16 Pro: release date and rumors', 'It will come as no surprise that Apple is expected to be continuing its trend of releasing a Pro version… Continue reading iPhone 16 Pro: release date and rumors\nThe post iPhone 16 Pro: release date and rumors appeared first on ReadWrite.', 'https://readwrite.com/iphone-16-pro-release-date-and-rumors/', 'https://readwrite.com/wp-content/uploads/2024/03/iPhone-flatlay.jpg', '2024-03-24T00:01:50Z'),
(21, 'James Jones', 'Samsung Galaxy S25: release date, specs and price', 'We may still be getting used to the Samsung Galaxy S24 line after it was released in January this year,… Continue reading Samsung Galaxy S25: release date, specs and price\nThe post Samsung Galaxy S25: release date, specs and price appeared first on ReadWrite.', 'https://readwrite.com/samsung-galaxy-s25-release-date-specs-and-price/', 'https://readwrite.com/wp-content/uploads/2024/03/anh-nhat-yqcloMb3Abw-unsplash-scaled.jpg', '2024-03-24T20:31:10Z'),
(22, 'Yúbal Fernández', 'He perdido el móvil: guía con pasos para comprobar si lo has perdido o te lo han robado, y qué hacer si te ha pasado', 'Vamos a explicarte qué hacer si crees que has perdido o te han robado el móvil, de forma que primero puedas comprobar qué ha pasado y luego puedas actuar en consecuencia. El móvil es el dispositivo donde hoy en día tenemos todos nuestros datos y conversacione…', 'https://www.xataka.com/basics/he-perdido-movil-guia-pasos-para-comprobar-has-perdido-te-han-robado-que-hacer-te-ha-pasado', 'https://i.blogs.es/f53113/perdido/840_560.jpeg', '2024-03-24T13:01:37Z'),
(23, 'Manu García (Visnuh)', 'Soy fotógrafo aficionado, y te cuento cuáles son los mejores móviles para hacer fotos casi profesionales sin dejarte una fortuna', 'Aunque no me dedico profesionalmente a la fotografía, lo cierto es que no se puede decir que mi equipo no sea profesional. Por eso, cuando me toca echar un vistazo a lo que ofrecen los smartphones hoy día, me cuesta mucho pensar que el mercado esté ya en un n…', 'https://www.xataka.com/seleccion/soy-fotografo-aficionado-te-cuento-cuales-mejores-moviles-para-hacer-fotos-casi-profesionales-dejarte-fortuna', 'https://i.blogs.es/87a039/camara_vs_iphone/840_560.jpeg', '2024-03-24T13:31:37Z'),
(24, 'Kurt Knutsson, CyberGuy Report', 'Identity theft scammers target innocent children', 'Identity thieves are now targeting children and are making large sums of money by exploiting children\'s identities, possibly hurting their financial future.', 'https://www.foxnews.com/tech/identity-theft-scammers-target-innocent-children', 'https://static.foxnews.com/foxnews.com/content/uploads/2024/03/1-Identity-theft-scammers-target-innocent-children-1.jpg', '2024-03-24T14:00:06Z'),
(25, 'John Gruber', '‘Harrison Bergeron’', '', 'https://daringfireball.net/misc/2024/03/Harrison_Bergeron.pdf', '', '2024-03-24T00:41:12Z'),
(26, 'Chance Miller', 'Tim Cook confirms Apple Vision Pro will launch in China this year', 'Apple Vision Pro is currently only available in the United States, but Apple has promised that it will come to other markets before the end of the year. During a visit to China this week, Apple CEO Tim Cook offered confirmation that China is one of the countr…', 'https://9to5mac.com/2024/03/24/vision-pro-china/', 'https://i0.wp.com/9to5mac.com/wp-content/uploads/sites/6/2024/02/Vision-Pro-demand.jpg?resize=1200%2C628&quality=82&strip=all&ssl=1', '2024-03-24T23:40:50Z'),
(27, 'Benjamin Mayo', 'Gurman: iOS 18 to feature new home screen that is ‘more customizable’, as part of biggest iPhone update ever', 'In today’s edition of Bloomberg’s Power On newsletter, Mark Gurman writes that users should expect updates to the iPhone home screen as part of iOS 18. Although light on details, he says iOS 18 will make the home screen “more customizable”.\n\n\n\nApple apparentl…', 'https://9to5mac.com/2024/03/24/gurman-ios-18-to-new-home-screen-iphone-update/', 'https://i0.wp.com/9to5mac.com/wp-content/uploads/sites/6/2023/12/ios18-concept.webp?resize=1200%2C628&quality=82&strip=all&ssl=1', '2024-03-24T12:31:08Z'),
(28, 'Eva Rodriguez de Luis', 'Soy usuaria convencida de Mac desde hace una década, pero hay cinco cosas que no soporto y siguen sin solución', 'Allá por 2014 cambié definitivamente de Linux y Windows por macOS. Primero con un MacBook Pro y después pasando por un iMac, dos mac mini y otro MacBook Pro. No los cambié porque funcionaran mal, sino por renovar equipo y poder recuperar parte de la inversión…', 'https://www.genbeta.com/a-fondo/soy-usuaria-convencida-mac-hace-decada-hay-cinco-cosas-que-no-soporto-siguen-solucion', 'https://i.blogs.es/31b297/macos/840_560.jpeg', '2024-03-24T11:01:35Z'),
(29, 'Antonio Sabán', 'Así es como ahorro en mis suscripciones a Netflix, HBO Max, Disney+ y otros para verlo todo gastando menos', 'La llegada de plataformas como SkyShowtime el año pasado, unida a la de las que llegaron hace cuatro de años, como Disney+, suele generar una reacción de rechazo. Lo siguiente suele ser sumar el coste mensual o anual de todas las plataformas y sorprenderse de…', 'https://www.genbeta.com/a-fondo/asi-como-ahorro-mis-suscripciones-a-netflix-hbo-max-disney-otros-para-verlo-todo-gastando-1', 'https://i.blogs.es/388938/plataformas/840_560.jpeg', '2024-03-24T17:01:37Z'),
(30, 'news@appleinsider.com (Charles Martin)', 'Cook confirms China to get Apple Vision Pro later this year', 'Apple CEO Tim Cook, currently in China for talks with suppliers, told state media there that the Apple Vision Pro will come to mainland China later this year.Cook was responding to a question from reporters at the China Development Forum in Beijing. He added …', 'https://appleinsider.com/articles/24/03/24/cook-confirms-china-to-get-apple-vision-pro-later-this-year', 'https://photos5.appleinsider.com/gallery/59066-120588-58932-120210-shanghaipexelswolframk-xl-xl.jpg', '2024-03-24T12:33:20Z'),
(31, 'news@appleinsider.com (Charles Martin)', 'Upcoming iOS 18 to offer more customizable home screen', 'Among a slew of new features reported to be coming to iOS 18 later this year, the home screen is said to be more customizable for users.Bloomberg\'s Mark Gurman reports that Apple will make it easier for users to customize the home screen in iOS 18, but doesn\'…', 'https://appleinsider.com/articles/24/03/24/upcoming-ios-18-to-offer-more-customizable-home-screen', 'https://photos5.appleinsider.com/gallery/59067-120589-57176-116269-55036-111702-iPhone-14-Plus-xl-xl-xl.jpg', '2024-03-24T13:51:23Z'),
(32, 'claudia', 'PowerOutage.us/One Tab/Poetry Notebook', 'Recomendo - issue #402', 'https://kk.org/cooltools/poweroutage-us-one-tab-poetry-notebook/', '', '2024-03-24T15:00:00Z'),
(33, 'Thomas Estimbre', 'Monopole de l’iPhone : les États-Unis attaquent Apple en justice', 'Le département de la Justice des États-Unis a décidé d\'attaquer Apple pour pratiques anticoncurrentielles et monopolistiques liées à l\'iPhone. Le géant américain pourrait être contraint d\'effectuer de nombreux changements si la procédure aboutit.', 'https://www.journaldugeek.com/2024/03/24/monopole-de-liphone-les-etats-unis-attaquent-apple-en-justice/', 'https://www.journaldugeek.com/app/uploads/2022/11/apple-store-fifth-avenue-new-york-exterieur.jpg', '2024-03-24T17:02:35Z'),
(34, 'Journal du Geek', 'Avant de vous séparer de votre vieux Mac, essayez cet outil qui lui promet une seconde jeunesse', 'Tous les appareils high-tech, qu\'il s\'agisse de smartphone, tablette, TV ont a un moment ou un autre une date d\'obsolescence. Cela vaut aussi pour les ordinateurs, qu\'il soient sous Windows ou MacOS. Cela dit, des outils permettent de repousser l\'échéance pou…', 'https://www.journaldugeek.com/bon-plan/avant-de-vous-separer-de-votre-vieux-mac-essayez-cet-outil-qui-lui-promet-une-seconde-jeunesse/', 'https://www.journaldugeek.com/app/uploads/2024/03/MacBook-2.jpg', '2024-03-24T07:43:01Z'),
(35, 'Jesús Quesada', 'Convierte tu iPad en tu centro de trabajo: estos son los gadgets que necesitas', 'El iPad no sólo es un buen dispositivo para entretenimiento, sino que con los accesorios adecuados se puede convertir en una buena herramientas de productividad. Con un teclado, ratón y stylus se puede trabajar en ofimática o realizar ilustraciones totalmente…', 'https://www.applesfera.com/seleccion/convierte-tu-ipad-tu-centro-trabajo-estos-gadgets-que-necesitas', 'https://i.blogs.es/266819/ipad-pro-2022/840_560.jpeg', '2024-03-24T08:01:35Z'),
(36, 'Guille Lomener', 'Historia de macOS: Cómo nació el sistema operativo de Apple y cuáles son sus novedades de cara a macOS 15', 'macOS es lo que hace que el Mac sea el Mac. Seguridad, potencia, diseño, simplicidad... Hay cientos de adjetivos y razones por las que millones de personas cada día escogen utilizar un Mac. Yo particularmente recuerdo con mucha ilusión cuando usé por primera …', 'https://www.applesfera.com/os-x/historia-macos-como-nacio-sistema-operativo-apple-cuales-sus-novedades-cara-a-macos-15', 'https://i.blogs.es/58fbf7/historia-macos/840_560.jpeg', '2024-03-24T09:01:37Z'),
(37, 'Álvaro García M.', 'Steve Jobs, Einstein o Zuckerberg: la razón científica por la que muchos grandes creativos visten siempre la misma ropa', 'Barack Obama, Mark Zuckerberg, Albert Einstein y por supuesto Steve Jobs no son sólo representaciones de grandes nombres por su huella en la historia, sino también representantes de un estilo único. Literalmente. Y no porque otros no puedan vestir igual que e…', 'https://www.applesfera.com/curiosidades/steve-jobs-einstein-zuckerberg-razon-cientifica-que-muchos-grandes-creativos-visten-siempre-ropa', 'https://i.blogs.es/df5234/ropa-steve-jobs-1/840_560.jpeg', '2024-03-24T16:01:36Z'),
(38, 'Brady Snyder', 'On this day in 2001, Mac OS X debuted as Apple\'s operating system of the future', 'The newest versions of macOS can still be traced back to the first version of Mac OS X, which was released 23 years ago on this day.', 'https://www.xda-developers.com/on-this-day-macosx-debuted/', 'https://static1.xdaimages.com/wordpress/wp-content/uploads/2024/03/macos-x-disc.jpg', '2024-03-24T15:00:14Z'),
(39, 'Saloni Gajjar', 'What\'s on TV this week—We Were The Lucky Ones and American Rust', 'Welcome to What’s On, our weekly picks of must-watch shows. Here’s what you need to watch from Sunday, March 24 to Thursday, March 28. All times are Eastern. [Note: The weekend edition of What’s On drops on Fridays.]Read more...', 'https://www.avclub.com/whats-on-tv-march-24-to-28-we-were-the-lucky-ones-1851350945', 'https://i.kinja-img.com/image/upload/c_fill,h_675,pg_1,q_80,w_1200/7817b5b46b3a0127a12856526da698c7.png', '2024-03-24T12:00:00Z'),
(40, 'Presse-citron', 'Si vous trouvez que l’iPhone 15 est hors de prix, voici l’astuce pour l’obtenir à -35% ⚡️', 'Les iPhone 15 sont le graal pour des millions de Français. Malheureusement, c\'est souvent le prix qui est un frein à l\'achat de ce smartphone de luxe signé Apple. Pour l\'anniversaire AliExpress, le premier marchand au monde s\'engage à offrir 35% de réduction …', 'https://www.presse-citron.net/si-vous-trouvez-que-liphone-15-est-hors-de-prix-voici-lastuce-pour-lobtenir-a-35-⚡️/', 'https://www.presse-citron.net/app/uploads/2024/03/iphone-15-mobile.jpg', '2024-03-24T16:12:01Z'),
(41, 'Eli Yudin', '12 Hunks of Trivia We Knocked Off a Vein of Knowledge', 'By Eli Yudin Published: March 24th, 2024', 'https://trivia.cracked.com/article_41549_12-hunks-of-trivia-we-knocked-off-a-vein-of-knowledge.html', 'https://s3.crackedcdn.com/phpimages/article/9/3/5/1047935.jpg', '2024-03-24T23:00:00Z'),
(42, 'Hartley Charlton', 'Apple Vision Pro to Launch in China Later This Year', 'Apple CEO Tim Cook today confirmed that the Vision Pro headset will go on sale in China later this year (via Reuters).\n\n\n\n\n\nResponding to a question from the press at the China Development Forum in Beijing, Cook confirmed that Apple\'s first spatial computer w…', 'https://www.macrumors.com/2024/03/24/vision-pro-to-launch-in-china-this-year/', 'https://images.macrumors.com/t/YKtAsJO8NDYr3D05sfn-vc73xx4=/1920x/article-new/2023/09/Vision-Pro-Person.jpg', '2024-03-24T11:46:13Z'),
(43, 'Alexandre Scotti', 'Actualité : Pourquoi Apple a échoué à rendre l’Apple Watch compatible avec Android', 'Dans le cadre d\'un procès pour monopole intenté par les États-Unis, Apple a réagi en déclarant avoir essayé de porter l’Apple Watch sur Android pendant trois ans, avant de jeter l’éponge.', 'https://www.lesnumeriques.com/montre-connectee/pourquoi-apple-a-echoue-a-rendre-l-apple-watch-compatible-avec-android-n219895.html', 'https://cdn.lesnumeriques.com/optim/news/21/219895/fb4aa527-apple-explique-avoir-essaye-de-rendre-l-apple-watch-compatible-avec-android__1200_630__overflow.jpg', '2024-03-24T10:00:00Z'),
(44, 'Rick', 'Actualité : Ventes Flash Amazon – L\'enceinte sans-fil & intelligente Sonos Era 100 Noir \"5 étoiles\" à 229,00 € (-16%)', 'L\'enceinte sans-fil & intelligente Sonos Era 100 Noir passe sous les 250 € chez Son-Video.com, Sonos et Ubaldi soit une baisse d\'environ 16% sur le prix habituellement constaté.', 'https://www.lesnumeriques.com/enceintes-sans-fil/ventes-flash-amazon-l-enceinte-sans-fil-intelligente-sonos-era-100-noir-5-etoiles-a-229-00-16-n220052.html', 'https://cdn.lesnumeriques.com/optim/test/20/208197/e5154ac4-enceinte-sans-fil-sonos-era-100-une-digne-heritiere-de-la-sonos-one__1200_630__555-464-2444-1455_wtmk.jpg', '2024-03-24T23:00:05Z'),
(45, 'Alexandre Nardo', 'Test Aqara Smart Plug : une prise connectée ZigBee à la puissance limitée', 'L’Aqara Smart Plug est une prise connectée conçue pour fonctionner avec une passerelle ZigBee telle que celle de la marque Hub M2. Ce produit abouti est doté d’une application complète et bénéficie d’une excellente qualité de fabrication.', 'https://www.lesnumeriques.com/prise-connectee/aqara-smart-plug-p74705/test.html', 'https://cdn.lesnumeriques.com/optim/test/21/219383/722506a6-aqara-smart-plug-une-prise-connectee-zigbee-a-la-puissance-limitee__1200_630__overflow.jpg', '2024-03-24T11:00:00Z'),
(46, 'Sergio Asenjo', 'Las 7 mejores aplicaciones para Apple Watch: desata todo el potencial de tu reloj', 'Como usuario de Apple Watch desde el lanzamiento del Apple Watch Series 1 he podido experimentar la evolución de este dispositivo a lo largo de los años. En todo este tiempo han ido surgiendo multitud de aplicaciones distintas orientadas a diferentes usos, de…', 'https://www.xatakamovil.com/listas/mejores-aplicaciones-para-apple-watch-desata-todo-potencial-tu-reloj', 'https://i.blogs.es/b754e0/mejores-aplicaciones-apple-watch/840_560.jpeg', '2024-03-24T15:01:37Z'),
(47, 'Esor Huang', '3個 ChatGPT 輸入到輸出實驗，第二大腦筆記用 AI 煉成文章報告', '能夠有效使用 ChatGPT 這類內容生成 AI 的人，大致分為兩類。第一類是深刻理解任務專業邏輯的人，能夠設計出有效的提示語，引導擅長文字接龍的 AI 根據專業邏輯生成符合需求的內容。第二類則是擁有第二大腦的知識管理工作者， 我們在第二大腦系統中儲存的筆記，可以通過 AI 進...', 'https://www.playpcesor.com/2024/03/3-chatgpt-ai.html', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgcWSW2_OFwzXIa2SIiJTEsVIyg2y2qaUQsfMpH_nfFbkuOerQ9TyWPiJVbKMtdyskKRCqNoixWISgrT8tqfIrC4R1M9UGxnAB8WM5QCj90Cv87aC0nMfrvoHHDKzezHexE56ySCSuc9teVQp2DKcEvQYUs95QUERUOD2QAHN-ikq91sRdeG6sC9w/w1200-h630-p-k-no-nu/3%E5%80%8B%20ChatGPT%20%E8%BC%B8%E5%85%A5%E5%88%B0%E8%BC%B8%E5%87%BA%E5%AF%A6%E9%A9%97%EF%BC%8C%E7%AC%AC%E4%BA%8C%E5%A4%A7%E8%85%A6%E7%AD%86%E8%A8%98%E7%94%A8%20AI%20%E7%85%89%E6%88%90%E6%96%87%E7%AB%A0%E5%A0%B1%E5%91%8A.png', '2024-03-24T09:12:00Z'),
(48, 'André Westphal', '„Assassin’s Creed Jade“ erscheint erst 2025, neue Schwerpunkte bei Tencent', 'Tencent ist ein chinesisches Unternehmen, das auch im Gaming-Bereich ein Gigant ist. Der Anbieter hält sich allerdings oft eher im Hintergrund und investiert stattdessen fleißig. Beispielsweise hat man auch seine Finger bei Epic Games und Ubisoft drin. Doch i…', 'https://stadt-bremerhaven.de/assassins-creed-jade-erscheint-erst-2025-neue-schwerpunkte-bei-tencent/', 'https://stadt-bremerhaven.de/wp-content/uploads/2021/12/Tencent-Logo.jpg', '2024-03-24T17:30:46Z'),
(49, 'André Westphal', 'Immer wieder sonntags KW 12', 'Inzwischen steht Ostern vor der Tür und diejenigen unter den Lesern, die kleine Kinder im Haus haben, bereiten sich sicherlich schon auf das verlängerte Wochenende und die Eiersuche vor. Doch bevor ich schon eine Woche vorausblicke, schauen wir doch einmal...…', 'https://stadt-bremerhaven.de/immer-wieder-sonntags-kw-12-11/', 'https://stadt-bremerhaven.de/wp-content/uploads/2022/07/Kaffee-Sonntags.jpg', '2024-03-24T05:30:37Z'),
(50, 'Mark Peikert', 'The Old Hollywood Connection Between ‘Chinatown,’ ‘Mad Men,’ ‘New Girl,’ and ‘Palm Royale’', 'L.A. bar and restaurant The Prince has been used as a filming location for everything from New Girl and Mad Men to Chinatown and now Palm Royale.', 'https://www.indiewire.com/features/craft/the-prince-la-bar-filming-location-palm-royale-new-girl-1234966797/', 'https://www.indiewire.com/wp-content/uploads/2024/03/TCDMAM2_EC012.jpg?w=650', '2024-03-24T14:00:00Z'),
(51, 'Mélanie Capelli', 'La station météo connectée de Netatmo est à -42 % lors des ventes flash d’Amazon', 'La station météo connectée de chez Netatmo donne un éventail de mesures permettant à la fois de connaître et de prévoir la météo et d’améliorer notre bien-être intérieur. Si vous êtes intéressés, la voilà en promotion à 109 euros au lieu de 189 euros.', 'https://www.frandroid.com/bons-plans/1975620_la-station-meteo-connectee-de-netatmo-est-a-42-lors-des-ventes-flash-damazon', 'https://images.frandroid.com/wp-content/uploads/2024/03/netatmo-station-meteo-amazon-ventes-flash.jpg', '2024-03-24T08:12:10Z'),
(52, 'Yann Lethuillier', 'On a testé le nouveau système Android des voitures électriques Mini : un vrai argument d’achat face à Tesla, Renault et Volvo', 'À l\'occasion du lancement du nouveau Mini Countryman électrique, le constructeur britannique a présenté par la même occasion son nouveau système d\'infodivertissement qui repose sur un grand écran circulaire OLED de 24 cm de diamètre. Nous avons pu l\'utiliser …', 'https://www.frandroid.com/marques/mini/1963156_on-a-teste-le-nouveau-systeme-android-des-voitures-electriques-mini-un-vrai-argument-dachat-face-a-tesla-renault-et-volvo', 'https://images.frandroid.com/wp-content/uploads/2024/03/essai-mini-countryman-se-7.jpg', '2024-03-24T13:01:12Z'),
(53, 'Андрей Ставицкий', 'В компьютерах Apple обнаружили неисправимую уязвимость', 'Специалисты по безопасности обнаружили в компьютерах Apple неисправимую уязвимость. Атака под названием GoFetch нацелена на функцию аппаратной оптимизации с предварительным выбором данных (DPM). Проблема была обнаружена в компьютерах Apple Silicon. Причем исп…', 'https://lenta.ru/news/2024/03/24/gofetch/', 'https://icdn.lenta.ru/images/2024/03/22/12/20240322120533425/share_41199786d47647551a88fc5ea8527ff1.jpg', '2024-03-24T01:39:00Z'),
(54, 'Андрей Ставицкий', 'В Apple предостерегли от «превращения» iPhone в Android', 'В корпорации Apple отреагировали на антимонопольный иск Министерства юстиции США. Представители компании резко отреагировали на обвинения Минюста США в том, что Apple создала монополию на рынке смартфонов. В компании предостерегли власти США от попыток застав…', 'https://lenta.ru/news/2024/03/24/iphone/', 'https://icdn.lenta.ru/images/2024/03/22/12/20240322122041589/share_f35ea05c8915a9da236bd6a74e8ab1d6.jpg', '2024-03-24T03:30:16Z'),
(55, 'Nakimo', '【29%OFF】Wi-Fi対応で毎回アプリの起動不要「Anker Eufy Smart Scale P2 Pro」がクーポンセール中', '楽天お買い物マラソンで、アプリ対応体組成計「Anker Eufy Smart Scale P2 Pro」が2,000円OFF(29%OFF)+ポイントで販売されています。 この体組成計の主な特徴は次のとおり： 16項目の […]©2019 \"Touch Lab - タッチ ラボ\".', 'https://touchlab.jp/2024/03/anker-eufy-smart-scale-p2pro-sale/', 'https://touchlab.jp/wp-content/uploads/2023/10/anker_eufy_smartscale_p2pro_29w-1.jpg', '2024-03-24T00:01:08Z'),
(56, 'Vinamrata Chaturvedi', 'AI stocks might be buzzy this week — but don\'t ignore GameStop', 'Last week was the stock market’s best week of the year — thanks to the Fed giving investors hope for interest rate cuts still to come.Read more...', 'https://qz.com/ai-stock-buzz-gamestop-earnings-markets-1851360010', 'https://i.kinja-img.com/image/upload/c_fill,h_675,pg_1,q_80,w_1200/1f5971ceb1c69d947bf27ca2135e9d16.jpg', '2024-03-24T15:00:00Z'),
(57, 'Dua Rashid / Gizmodo', 'The best wireless earbuds right now', 'The best pair of wireless earbuds do more than sound great. They’re supposed to be comfortable, offer intuitive controls that are easy to navigate, sport an efficient mic, and have a battery that lasts sufficiently long. This is just the bare minimum. Feature…', 'https://qz.com/best-wireless-earbuds-2024-1851358424', 'https://i.kinja-img.com/image/upload/c_fill,h_675,pg_1,q_80,w_1200/b39feb5733667432cc552b6d6b957777.jpg', '2024-03-24T11:00:00Z'),
(58, 'Dua Rashid / Gizmodo', 'How to make your iPhone go faster', 'It’s hard to be patient with a slow iPhone, especially when using it for everything, from the calculator to getting directions on Maps. No one likes dealing with lag, buffering, or app freezing. Fortunately, there are a few ways you could speed up your iPhone…', 'https://qz.com/iphone-slow-speed-faster-1851359970', 'https://i.kinja-img.com/image/upload/c_fill,h_675,pg_1,q_80,w_1200/450f87f78318169fb9906031634128fe.jpg', '2024-03-24T09:00:00Z'),
(59, 'Peter', 'Deals: Amazon reduces prices of iPhone 15/15 Plus and iPhone 14/14 Plus by up to £150', 'Even Amazon’s Spring Deal Days couldn’t budge the iPhone Pro prices, but the vanilla models from the iPhone 14 and 15 generation are up to £150 off.\n\nThe iPhone 15 is smaller than most smartphones, but the Apple A16 chipset and the company’s long term softwar…', 'https://www.gsmarena.com/deal_amazon_reduces_prices_of_iphone_15_15_plus_and_iphone_14_14_plus_by_up_to_150-news-62125.php', 'https://fdn.gsmarena.com/imgroot/news/24/03/weekly-deals-22/-952x498w6/gsmarena_999.jpg', '2024-03-24T13:51:01Z'),
(60, 'Ivan', 'Snapdragon 8s Gen 3 official will power Motorola Edge 50 Pro , Week 12 in review', 'The Snapdragon 8s Gen 3 is official and will power the flagship killers of 2024. The 8s Gen 3 offers a selection of premium Snapdragon features without costing as much as the premier 8 Gen 2 and 8 Gen 3 chips. The 8s Gen 3 is a 4nm chip with a Cortex-X4 prime…', 'https://www.gsmarena.com/snapdragon_8s_gen_3_official_will_power_motorola_edge_50_pro__week_12_in_review-news-62123.php', 'https://fdn.gsmarena.com/imgroot/news/24/03/week-12-in-review/-952x498w6/gsmarena_000.jpg', '2024-03-24T18:32:01Z'),
(61, 'Peter', 'Weekly poll: will you buy the Asus Zenfone 11 Ultra?', 'In a recent poll, the Asus ROG Phone 8/8 Pro proved to be a potentially very popular model if it could clear one hurdle – the $1,100/€1,100 price was too high (it was even worse for the Pro, $1,200/€1,200/₹95,000).\n\nWhat if the ROG Phone 8 was cheaper? Wish g…', 'https://www.gsmarena.com/weekly_poll_will_you_buy_the_asus_zenfone_11_ultra-news-62114.php', 'https://fdn.gsmarena.com/imgroot/news/24/03/weekly-poll-asus-zenfone-11-ultra/-952x498w6/gsmarena_000.jpg', '2024-03-24T11:09:01Z'),
(62, 'Michail', 'Xiaomi Watch S3 review', 'Xiaomi’s smartwatch game has steadily evolved since the first Mi Watch came on the scene in 2019. We’ve seen various Xiaomi wearables since - some with simple proprietary operating systems that\'s changed more name than features and some with Google’s more cap…', 'https://www.gsmarena.com/xiaomi_watch_s3_review-news-62055.php', 'https://fdn.gsmarena.com/imgroot/news/24/03/xiaomi-watch-s3-review/-952x498w6/gsmarena_00.jpg', '2024-03-24T19:32:01Z'),
(63, 'Jacob Cass', '8 Female Graphic Designers That’ll Rock Your Socks Off', 'In this blog we will introduce you to 8 of the best female graphic designers while showing off their best work!', 'https://justcreative.com/7-female-graphic-designers-thatll-rock-your-socks-off/', 'https://justcreative.com/wp-content/uploads/2008/07/female-graphic-designers-1024x576.png', '2024-03-24T04:00:00Z'),
(64, 'Kelly', '10 Sci-Fi and Fantasy Shows With Stellar Freshman Seasons to Watch in 2024', 'There are so many shows on this list from Reactor Mag that I’ve been meaning to watch (Severance, Silo/Beacon 23). Unfortunately for my bank account, I just might have to resubscribe to Apple TV…In a time when television shows are renewed and then suddenly ca…', 'https://blog.adafruit.com/2024/03/24/10-sci-fi-and-fantasy-shows-with-stellar-freshman-seasons-to-watch-in-2024/', 'https://cdn-blog.adafruit.com/uploads/2024/03/TV-To-Catch-Up-On-1536x768-1.png', '2024-03-24T12:00:31Z'),
(65, 'Vincenzo Ronca', 'Indovinate? iOS 18 sarà il più grande aggiornamento di sempre', 'Apple sta preparando quello che avrebbe definito il più grande aggiornamento di sempre su iPhone: tanta intelligenza artificiale, e personalizzazione.\r\nL\'articolo Indovinate? iOS 18 sarà il più grande aggiornamento di sempre sembra essere il primo su Smartwor…', 'https://www.smartworld.it/news/ios-18-rumor-aggiornamento.html', 'https://www.smartworld.it/images/2023/10/09/iphone-15-pro-max-def-046_1200x675.jpg', '2024-03-24T22:53:00Z'),
(66, 'James Clarke', 'Creating a whole world with Jellyfish Pictures', 'New creative director Archie Donato discusses the VFX and animation studio’s philosophy, leading a team, and the joy of creativity.', 'https://www.creativebloq.com/features/creating-a-whole-world-jellyfish-studios', 'https://cdn.mos.cms.futurecdn.net/REgBDbFYD5rFRsHrtBynL6-1200-80.jpg', '2024-03-24T13:00:28Z'),
(67, 'Fran Besora', 'Estas son las 4 novedades \"confirmadas\" de los nuevos iPad Pro', 'Los nuevos iPad Pro están a punto de ser lanzados y ya conocemos casi todos los detalles sobre los dispositivos que Apple presentará próximamente. Estos nuevos dispositivos llegarán con pantallas nuevas, un procesador nuevo, una nueva ubicación para la cámara…', 'https://www.lavanguardia.com/andro4all/apple/estas-son-las-4-novedades-confirmadas-de-los-nuevos-ipad-pro', 'https://www.lavanguardia.com/andro4all/hero/2024/03/nuevos-ipad-pro-2024.jpg?width=1200', '2024-03-24T11:31:05Z'),
(68, 'Fran Besora', 'Este es el secreto para que la música suene según nuestras preferencias en el iPhone', 'A todos nos gusta la música. De alguna forma u otra, escuchamos música a diario con nuestros auriculares. Todos tenemos nuestros gustos personales, y no solo hablo de gérenos musicales que hay para aburrir sino que también me refiero a los matices de dicha mú…', 'https://www.lavanguardia.com/andro4all/apple/este-es-el-secreto-para-que-la-musica-suene-segun-nuestras-preferencias-en-el-iphone', 'https://www.lavanguardia.com/andro4all/hero/2024/03/ecualizar-la-musica-de-apple-music.jpeg?width=1200', '2024-03-24T17:31:20Z'),
(69, 'Fran Besora', 'Estas son las cuatro aplicaciones favoritas para Mac de Fran Besora', 'Los Mac son una gran herramienta de productividad con un extenso catálogo de aplicaciones que mejoran mucho la experiencia. Desde siempre, se han podido instalar aplicaciones fuera de la Mac App Store, lo que permite que existan muchas aplicaciones. Aplicacio…', 'https://www.lavanguardia.com/andro4all/aplicaciones/estas-son-las-cuatro-aplicaciones-favortias-para-mac-de-fran-besora', 'https://www.lavanguardia.com/andro4all/hero/2024/03/mis-apps-favoritas-mac.jpg?width=1200', '2024-03-24T08:01:04Z'),
(70, '', '[スタパ齋藤の「スタパトロニクスMobile」]久々にヘンなディスプレイ買ったゼ!!!　OFIYAAブランドの細長ディスプレイを試す！', '2023年11月17日に発売されたJAPANNEXT（ジャパンネクスト）の「JN-MD-IPS784」というモバイルモニター。アスペクト比16:5という細長いディスプレイで、解像度は1280×400ピクセル。Amazonでは1万2709円で売られている。↓こんなの（画像はJAPANNEXTWebサイトより）。', 'https://k-tai.watch.impress.co.jp/docs/column/stapa/1577002.html', 'https://k-tai.watch.impress.co.jp/img/ktw/list/1577/002/stptncs2024-03-18thumbnail.jpg', '2024-03-24T15:00:00Z'),
(71, 'Mérouan Goumiri', 'VLC : bientôt une version Apple Vision Pro et la possibilité de regarder gratuitement certaines chaînes de TV en streaming', 'Après plusieurs mois de silence, VLC compte visiblement bien entamer sa révolution. Le plus célèbre des lecteurs multimédia devrait prochainement permettre aux utilisateurs de regarder des chaînes TV en streaming. De plus, une version de l\'application pour l\'…', 'https://www.clubic.com/actualite-522366-vlc-bientot-une-version-apple-vision-pro-et-la-possibilite-de-regarder-gratuitement-certaines-chaines-de-tv-en-streaming.html', 'https://pic.clubic.com/v1/images/1861702/raw', '2024-03-24T14:43:00Z'),
(72, 'Mia Ogouchi', 'Spotify, Deezer et Cie : quelle influence ont les algorithmes de recommandation sur nos choix musicaux ?', 'Notre rapport à la musique a drastiquement évolué ces 20 dernières années. En mettant les morceaux à portée de clic, en laissant aux algorithmes le soin de nous recommander des titres, les plateformes de streaming audio ont révolutionné notre façon de consomm…', 'https://www.clubic.com/dossier-521985-spotify-deezer-et-cie-quelle-influence-ont-les-algorithmes-de-recommandation-musicale-sur-nos-choix-musicaux.html', 'https://pic.clubic.com/v1/images/2199321/raw', '2024-03-24T14:19:00Z'),
(73, 'Antoine Engels', 'Sennheiser Accentum Plus Wireless Test: Zu viel gewollt, zu wenig bekommen', 'Die Sennheiser Accentum Plus Wireless sind kabellose Kopfhörer mit aktiver Geräuschunterdrückung, die für 230 Euro verkauft werden. Lest jetzt den Test!', 'https://www.nextpit.de/sennheiser-accentum-plus-wireless-test', 'https://fscl01.fonpit.de/userfiles/7446224/image/sennheiser-accentum-plus/nextpit-sennheiser-accentum-plus-hero.jpg', '2024-03-24T11:00:00Z'),
(74, 'Christian Zibreg', 'Apple confirms Vision Pro is set to launch in China this year', 'CEO Tim Cook has confirmed that the Apple Vision Pro headset will soon launch in China, Apple\'s second biggest market by revenue.', 'https://www.idownloadblog.com/2024/03/24/apple-vision-pro-china-launch-confirmation/', 'https://media.idownloadblog.com/wp-content/uploads/2024/03/Apple-Store-Fifth-Avenue-New-York-City-Vision-Pro-customer-selfie-Tim-Cook.jpg', '2024-03-24T19:15:56Z'),
(75, 'Jens', 'Pixel Watch & Wear OS: Google setzt auf runde Displays – nur ein Kompromiss oder gab es keine andere Wahl?', 'Google geht mit der Pixel Watch in das dritte Jahr und mit dem Neustart von Wear OS gar schon in das vierte - daher könnte womöglich bald die Zeit für größere Anpassungen gekommen sein. Jetzt gibt es Anzeichen darauf, dass die Displays schon bald von kreisrun…', 'https://www.googlewatchblog.de/2024/03/pixel-watch-wear-os/', 'https://www.googlewatchblog.de/wp-content/uploads/wear-os-by-google.jpg', '2024-03-24T09:45:39Z'),
(76, 'Jens', 'Ein echter Google-Campus: Das ist Googles vollständig neu errichter Campus – mit Problemdach (Galerie)', 'Google besitzt rund um die Welt mehrere Dutzend Niederlassungen, die je nach Bedeutung der Region oder Schwerpunkt der Entwicklung mal größer und mal kleiner ausfallen können. Vor knapp zwei Jahren hat das Unternehmen einen neuen Campus in Mountain View eröff…', 'https://www.googlewatchblog.de/2024/03/ein-google-campus-das/', 'https://www.googlewatchblog.de/wp-content/uploads/Google-Bay-View-Cover.jpg', '2024-03-24T14:00:16Z'),
(77, 'P. GARCÍA', 'Ofertas de Primavera de Amazon, último día de chollos: las Nike Air Max al 50%, 2x1 en camisetas Levi\'s...', 'Hoy, lunes 25 de marzo, es el último día para aprovechar la Fiesta de Ofertas de Primavera de Amazon, una oportunidad para comprar a precio de ganga cientos de productos de moda, b', 'https://www.marca.com/regalos-promociones/2024/03/25/6600289a268e3e2d748b458e.html', 'https://phantom-marca.unidadeditorial.es/8bc813bc7969c9d0a82e8e6318c5f091/resize/1200/f/webp/assets/multimedia/imagenes/2024/03/24/17112875181764.png', '2024-03-24T23:48:19Z'),
(78, 'KKJ', '蘋果新專利將多個鏡頭裝在 Apple Watch 的錶帶或 MacBook 螢幕的不同角落上，實現拍攝出 3D 全景圖像', '蘋果獲得適用於摺疊裝置和 MacBook 的鏡頭系統專利，可實現 3D 圖像拍攝和手勢識別據 PatentlyApple 報導，美國專利商標局今日正式授予蘋果一項專利，該專利涉及一套新型鏡頭系統，主要用於內建到可摺疊電子裝置中。此外，該專利還展示了一種包含七個鏡頭的新型系統，可以內建到 MacBook 中，從而能夠拍攝 3D 圖像和捕捉 3D 手勢動作。\n\n該專利描述了一種電子裝置，其部分可以彎曲或以其他方式重新組合，使得裝置的不同部分可以移動並相互改變方向。鏡頭可以分佈在裝置的不同位置，用於拍攝場景的多個圖像。…', 'https://www.techbang.com/posts/113791-apple-patents-a-lens-system-for-foldable-devices-and-macbooks', 'https://cdn1.techbang.com/system/excerpt_images/113791/original/aa63005faf8f052290f8b2a15d2b8d48.jpg?1710843629', '2024-03-24T06:00:00Z'),
(79, 'cnBeta', 'M3 MacBook Air 256 GB 版本固態硬碟改為 2 個 128 GB，外媒實測讀寫速度更快', 'M3 MacBook Air 入門款的固態硬碟速度更快 之前的型號曾引起爭議\n根據 YouTube 頻道 Max Tech 分享的基準測試結果，配備 M3 晶片、256GB 儲存空間和 8GB 記憶體的基本型號 13 英吋 MacBook Air 的固態硬碟速度明顯快於配備 M2 晶片的同類機型。\nMax Tech 的拆解視訊證實，蘋果公司在新款 13 英吋 MacBook Air 上重新使用了兩個 128GB 儲存晶片，儲存容量為 256GB，而在採用 M2 晶片的同類機型上只使用了一個 256GB 晶片。這一…', 'https://www.techbang.com/posts/113711-the-m3-macbook-air-incoming-model-has-a-faster-solid-hard', 'https://cdn2.techbang.com/system/excerpt_images/113711/original/ecfe05e1c177bfe14f8ec40c4e9509b8.jpg?1711106862', '2024-03-24T07:30:00Z'),
(80, '', 'Love behind a paywall, a foiled scam attempt: CBC\'s Marketplace cheat sheet', 'CBC\'s Marketplace rounds up the consumer and health news you need from the week.', 'https://www.cbc.ca/news/business/marketplace-cheat-sheet-march24-1.7152587', 'https://i.cbc.ca/1.7144839.1710537120!/fileImage/httpImage/image.jpg_gen/derivatives/16x9_620/dating-app.jpg', '2024-03-24T12:00:00Z'),
(81, 'Lambert Strether', 'Links 3/24/2024', 'Our sizzling hot daily links', 'https://www.nakedcapitalism.com/2024/03/links-3-24-2024.html', 'https://www.nakedcapitalism.com/wp-content/uploads/2024/03/tern_ballast.png', '2024-03-24T10:58:07Z'),
(82, '', 'Guerra ultime notizie. Attacco russo in Ucraina con 14 bombardieri. Varsavia: «Missile ha violato lo spazio aereo polacco». Strage a Mosca, giornata di lutto nazionale', 'Kiev: è chiaro che insistere sulla cosiddetta pista ucraina serve a Putin per spiegare ai suoi cittadini perché d’ora in avanti parlerà esplicitamente di guerra e non più di operazione militare speciale', 'https://www.ilsole24ore.com/art/guerra-ultime-notizie-attacco-russo-ucraina-14-bombardieri-varsavia-missile-ha-violato-spazio-aereo-polacco-strage-mosca-giornata-lutto-nazionale-AFI3WcBD', 'https://i2.res.24o.it/images2010/S24/Documenti/2024/03/25/Immagini/Ritagli/LP_22028529-U50130511332QhP-1440x752@IlSole24Ore-Web.jpg?r=1170x507', '2024-03-24T07:22:00Z'),
(83, 'Ben Schoon', 'Even if Apple doesn’t have a monopoly over Android, it clearly wants one', 'This week the United States Department of Justice filed a lawsuit against Apple, alleging that the company has built and maintains an illegal monopoly. Whether or not Apple actually has a monopoly over Android in the smartphone market is up for the courts to …', 'http://9to5google.com/2024/03/24/apple-monopoly-lawsuit/', 'https://i0.wp.com/9to5google.com/wp-content/uploads/sites/4/2023/10/iphone-15-pro-google-pixel-8-pro-1-1.jpg?resize=1200%2C628&quality=82&strip=all&ssl=1', '2024-03-24T16:00:00Z'),
(84, 'David Nield', 'The big Apple lawsuit explained: why Apple\'s getting sued and what it means for the iPhone', 'Is Apple unfairly keeping consumers locked into the iPhone and its services? Or is it protecting its users and its business?', 'https://www.techradar.com/phones/iphone/the-big-apple-lawsuit-explained-why-apples-getting-sued-and-what-it-means-for-the-iphone', 'https://cdn.mos.cms.futurecdn.net/zAzHSjzSeksCFg2Q3XZCmV-1200-80.jpg', '2024-03-24T12:31:48Z'),
(85, 'David Nield', 'The iPhone 16 could come with extra RAM and storage – just for AI', 'We might be getting some hardware upgrades to match the new software features coming in iOS 18.', 'https://www.techradar.com/phones/iphone/the-iphone-16-could-come-with-extra-ram-and-storage-just-for-ai', 'https://cdn.mos.cms.futurecdn.net/7tLF78dqRPZstGLULgjBaE-1200-80.jpg', '2024-03-24T17:30:54Z'),
(86, 'waynewilliams@onmail.com (Wayne Williams)', 'Obscure Chinese tablet maker quietly unveiled a tablet with a sought-after feature no other tablet vendor dare launch — a 4K display that not even Apple, Google or Samsung can match', 'Android 14 powered Doogee T30 Max has a 4K IPS screen and retails for under $300.', 'https://www.techradar.com/pro/obscure-chinese-tablet-maker-quietly-unveiled-a-tablet-with-a-sought-after-feature-no-other-tablet-vendor-dare-launch-a-4k-display-that-not-even-apple-google-or-samsung-can-match', 'https://cdn.mos.cms.futurecdn.net/8q2kbjR29CWfbNzGdXv2cV-1200-80.jpg', '2024-03-24T07:16:05Z'),
(87, 'christian.guyton@futurenet.com (Christian Guyton)', 'Now is the perfect time for Microsoft to resurrect Windows 8 - for one simple reason', 'Windows 8 - or the spirit of it, at least - could be the perfect thing for the current generation of portable PCs.', 'https://www.techradar.com/computing/windows/now-is-the-perfect-time-for-microsoft-to-resurrect-windows-8-for-one-simple-reason', 'https://cdn.mos.cms.futurecdn.net/BZZgvSkS5TeLe5PLEhPDVT-1200-80.jpg', '2024-03-24T12:00:36Z'),
(88, '', 'Rio Tinto says it\'s a green mining giant. Investigation shows environmental gaps from Quebec to the Amazon', 'According to Radio-Canada’s Enquête program, Rio Tinto’s brand as an eco-friendly business is contradicted by its environmental record in Quebec as well as its footprint in the Amazon region of Brazil.', 'https://www.cbc.ca/news/canada/montreal/rio-tinto-quebec-amazon-bauxite-aluminum-1.7153444', 'https://i.cbc.ca/1.7153499.1711227564!/fileImage/httpImage/image.jpg_gen/derivatives/16x9_620/rio-tinto.jpg', '2024-03-24T08:00:00Z'),
(89, 'Peter Cohan, Senior Contributor, \n Peter Cohan, Senior Contributor\n https://www.forbes.com/sites/petercohan/', 'As Apple Stock Drops, Antitrust Suit Highlights Lost Innovation Mojo', 'Apple revenue fell in 2023 as hardware — 78% of sales — fell 3%. Services was the one bright spot — growing 9%. The DOJ\'s antitrust suit could brake that growth.', 'https://www.forbes.com/sites/petercohan/2024/03/24/as-apple-stock-drops-antitrust-suit-highlights-lost-innovation-mojo/', 'https://imageio.forbes.com/specials-images/imageserve/65fd9ab5e150f145830045b2/0x0.jpg?format=jpg&height=900&width=1600&fit=bounds', '2024-03-24T18:10:40Z'),
(90, 'David Phelan, Senior Contributor, \n David Phelan, Senior Contributor\n https://www.forbes.com/sites/davidphelan/', 'Apple iOS 18 Biggest-Ever iPhone Update: More Details Emerge', 'The next iPhone software will be announced in just a few weeks and it’s going to be the biggest ever, it’s reported.', 'https://www.forbes.com/sites/davidphelan/2024/03/24/apple-ios-18-biggest-ever-iphone-update-more-details-emerge/', 'https://imageio.forbes.com/specials-images/imageserve/65e217bee36cf08eab202281/0x0.jpg?format=jpg&crop=2492,1662,x0,y102,safe&height=900&width=1600&fit=bounds', '2024-03-24T17:00:50Z'),
(91, 'David Phelan, Senior Contributor, \n David Phelan, Senior Contributor\n https://www.forbes.com/sites/davidphelan/', 'WWDC 2024 Date: Exactly When Apple Will Reveal iPhone, Mac And iPad Software', 'Apple has yet to announce exactly when this year’s World Wide Developers Conference will be. Here’s when it’s going to take place.', 'https://www.forbes.com/sites/davidphelan/2024/03/24/wwdc-2024-date-exactly-when-apple-will-reveal-iphone-mac-and-ipad-software/', 'https://imageio.forbes.com/specials-images/imageserve/6600830c22fb840e0281afe2/0x0.jpg?format=jpg&height=900&width=1600&fit=bounds', '2024-03-24T20:00:15Z'),
(92, 'David Phelan, Senior Contributor, \n David Phelan, Senior Contributor\n https://www.forbes.com/sites/davidphelan/', 'Samsung Has New Price Offer Promotion For Galaxy S24 Phone Buyers', 'Samsung has a new offer that means it’s worth checking to see if you’ve got an old phone lying around.', 'https://www.forbes.com/sites/davidphelan/2024/03/24/samsung-has-new-price-offer-promotion-for-galaxy-s24-phone-buyers/', 'https://imageio.forbes.com/specials-images/imageserve/6600943ad1dab534d4dfdb70/0x0.jpg?format=jpg&crop=720,479,x0,y0,safe&height=900&width=1600&fit=bounds', '2024-03-24T21:08:19Z'),
(93, 'Bill Stone, Contributor, \n Bill Stone, Contributor\n https://www.forbes.com/sites/bill_stone/', 'Powell Provides Rocket Fuel For Markets', 'Stocks rose as the Fed is likely to be more sensitive to economic softness than inflation. Odds of recession have fallen as the hurdle for Fed rate cuts is now lower.', 'https://www.forbes.com/sites/bill_stone/2024/03/24/powell-provides-rocket-fuel-for-markets/', 'https://imageio.forbes.com/specials-images/imageserve/65feeb28a07fa0bd79da3ddb/0x0.jpg?format=jpg&height=900&width=1600&fit=bounds', '2024-03-24T10:51:14Z'),
(94, 'Jamie Carter, Senior Contributor, \n Jamie Carter, Senior Contributor\n https://www.forbes.com/sites/jamiecartereurope/', 'Meet The Apps That Tell You When To Take Your Eclipse Glasses Off', 'Meet the apps that tell you where it’s cloudy and when to take your eclipse glasses off A total solar eclipse can be a confusingly dynamic event.', 'https://www.forbes.com/sites/jamiecartereurope/2024/03/24/meet-the-apps-that-tell-you-when-to-take-your-eclipse-glasses-off/', 'https://imageio.forbes.com/specials-images/imageserve/65e701ccb41a29b8a2fd120f/0x0.jpg?format=jpg&crop=3094,1451,x0,y304,safe&height=900&width=1600&fit=bounds', '2024-03-24T23:00:00Z'),
(95, 'Russell Flannery, Forbes Staff, \n Russell Flannery, Forbes Staff\n https://www.forbes.com/sites/russellflannery/', 'China To Lead World In Equipment Spending For Mainstream Chip Plants', 'Taiwan, South Korea follow Asia-led ranking, according to SEMI', 'https://www.forbes.com/sites/russellflannery/2024/03/24/china-to-lead-world-in-equipment-spending-for-mainstream-chip-plants/', 'https://imageio.forbes.com/specials-images/imageserve/66002e488c9830707bcdc2f7/0x0.jpg?format=jpg&height=900&width=1600&fit=bounds', '2024-03-24T13:59:32Z'),
(96, 'Mark Tyson', 'Steve Jobs signed Apple Computer business card achieves over $180,000 at auction — about 14X more expensive than an unsigned card', 'A Steve Jobs signed Apple Computer business card has achieved an astonishing $181,183 at auction. Boston-based RR Auctions sold this \'highly coveted\' computer history artifact which was listed as an \'extremely rare, perfectly graded Steve Jobs-signed Apple Co…', 'https://www.tomshardware.com/tech-industry/big-tech/steve-jobs-signed-apple-computer-business-card-achieves-over-dollar180000-at-auction-about-14x-more-expensive-than-an-unsigned-card', 'https://cdn.mos.cms.futurecdn.net/S7vYMjUbp4NHUMU7XV2JW7-1200-80.jpg', '2024-03-24T13:57:48Z'),
(97, 'Kacper Cembrowski', 'Apple Music za darmo. Z takiej okazji trzeba skorzystać!', 'Z takiej promocji aż grzech nie skorzystać. Apple Music jest dostępne za darmo dla wszystkich — na 2 lub 3 miesiące.\n \n The post Apple Music za darmo. Z takiej okazji trzeba skorzystać! appeared first on AntyWeb.', 'https://antyweb.pl/apple-music-za-darmo-shazam', 'https://antyweb.pl/img/1250/550/fit/wp-content/uploads/2021/12/dxpxkj6kcd/apple-music.jpeg', '2024-03-24T15:30:02Z'),
(98, 'Kacper Cembrowski', 'Xiaomi Smart Band 8 Pro – recenzja. To Apple Watch za ułamek ceny', 'Xiaomi Smart Band 8 Pro to wręcz śmiesznie tani produkt, który naprawdę potrafi zaskoczyć. Czy warto się nim zainteresować?\n \n The post Xiaomi Smart Band 8 Pro – recenzja. To Apple Watch za ułamek ceny appeared first on AntyWeb.', 'https://antyweb.pl/xiaomi-smart-band-8-pro-recenzja', 'https://antyweb.pl/img/1250/550/fit/wp-content/uploads/2024/03/fu4gqapk27/photo_2024-03-24-15.26.08.jpeg', '2024-03-24T16:00:42Z'),
(99, 'Daniel Wójcik', 'Obowiązkowe USB-C: Jakich sprzętów to dotyczy?', 'Wraz z wprowadzeniem iPhone\'a 15, Apple dostosowuje się do regulacji Unii Europejskiej, wprowadzając port USB-C. Wszystko za sprawą normy zatwierdzonej przez Parlament Europejski. Jakich sprzętów dotyczy nowe rozporządzenie? Sprawdzamy.\n \n The post Obowiązkow…', 'https://antyweb.pl/obowiazkowe-usb-c-jakich-sprzetow-dotyczy', 'https://antyweb.pl/img/1250/550/fit/wp-content/uploads/2022/04/68upog2uoq/Depositphotos_247569844_L.jpg', '2024-03-24T15:00:42Z'),
(100, 'Piotr Kurek', 'Masz ten zegarek? Wkrótce stracisz dostęp do części jego funkcji', 'Korzystacie z zegarków Fitbit? Google ma dla was smutną informację. Już wkrótce stracicie dostęp do aplikacji i tarcz firm zewnętrznych. Firma obwinia regulacje Unii Europejskiej i dotyczy tylko użytkowników z Europy.\n \n The post Masz ten zegarek? Wkrótce str…', 'https://antyweb.pl/masz-ten-zegarek-wkrotce-stracisz-dostep-do-czesci-jego-funkcji', 'https://antyweb.pl/img/1250/550/fit/wp-content/uploads/2022/08/io8hxibzpb/fitbit-versa-4.jpg', '2024-03-24T11:00:01Z');
INSERT INTO `post` (`post_id`, `author`, `post_title`, `post_desc`, `post_url`, `post_image_name`, `post_publish_date`) VALUES
(101, 'Bartek Luzak', 'Najlepsze tablety 2024 [RANKING] – Wybraliśmy najciekawsze modele', 'Tablet to urządzenie, które znajduje zastosowanie zarówno w pracy, jak i w domu. Może być doskonałą alternatywą dla laptopa, jeśli nie korzystamy zbyt często z klawiatury, świetnym narzędziem do rysowania lub prezentowania treści, a także mobilnym centrum roz…', 'https://antyweb.pl/najlepsze-tablety-2024-ranking', 'https://antyweb.pl/img/1250/550/fit/wp-content/uploads/2023/04/2ygeduom8e/Depositphotos_39473449_L.jpg', '2024-03-24T09:00:26Z'),
(102, 'Giuseppe Migliorino', 'Venduto all’asta un raro biglietto da visita Apple Computer firmato da Steve Jobs', 'Quanto paghereste per un biglietto da visita di Apple Computer firmato da Steve Jobs? \nLink all\'articolo originale: Venduto all’asta un raro biglietto da visita Apple Computer firmato da Steve Jobs', 'https://www.iphoneitalia.com/823901/biglietto-da-visita-steve-jobs-venduto', 'https://static.iphoneitalia.com/wp-content/uploads/2024/03/biglietto-da-visita-steve-jobs.jpg', '2024-03-24T09:11:25Z'),
(103, 'Samantha Wiley', 'New MLS Season Pass promotion now live', 'Apple’s newest Apple TV promotion is a free one-month subscription to the MLS Season Pass. The Major League Soccer Season Pass is currently free for a month for Apple TV+ subscribers in the US. MLS Season Pass normally costs $12.99 or $14.99 for Apple TV+ and…', 'https://www.ilounge.com/news/apple/new-mls-season-pass-promotion-now-live', 'https://www.ilounge.com/wp-content/uploads/2024/03/New-MLS-Season.png', '2024-03-24T19:26:11Z'),
(104, 'Samantha Wiley', 'Hackers can exploit silicon vulnerability for encryption keys', 'A new vulnerability within the M-series Apple chips allows hackers to obtain encryption keys, as per an ArsTechnica-submitted academic research paper. The cyber attack, titled ‘GoFetch’ is a threat involving Data Memory-Dependent Prefetchers to predict data f…', 'https://www.ilounge.com/news/hackers-can-exploit-silicon-vulnerability-for-encryption-keys', 'https://www.ilounge.com/wp-content/uploads/2024/03/M-series-Apple-chips.png', '2024-03-24T19:31:40Z'),
(105, 'Samantha Wiley', 'iPadOS 17.4.1 and iOS 17.4.1 launches', 'Apple has released iPadOS 17.4.1 and iOS 17.4.1 with minor updates to the iOS 17 operating system. iPadOS 17.4.1 and iOS 17.4.1 launched a few weeks after iOS 17.4 became available to the public, bringing new emoji, EU app changes, and more. The software can …', 'https://www.ilounge.com/news/apple/ipados-17-4-1-and-ios-17-4-1-launches', 'https://www.ilounge.com/wp-content/uploads/2024/03/17.4.1.png', '2024-03-24T19:29:14Z'),
(106, 'Lucas Soares', 'Apple Vision Pro será lançado no Brasil ainda este ano?', 'O Apple Vision Pro está à venda nos Estados Unidos desde fevereiro. Até o momento, existem poucos detalhes sobre o lançamento do produto fora do país, mas o CEO da marca, Tim Cook, revelou algumas informações sobre a saída dos óculos de realidade aumentada do…', 'https://olhardigital.com.br/2024/03/24/reviews/apple-vision-pro-sera-lancado-no-brasil-ainda-este-ano/', 'https://olhardigital.com.br/wp-content/uploads/2023/08/apple-vision-pro-1-e1705078716702-695x500.jpg', '2024-03-24T18:30:57Z'),
(107, 'Kelvin Leão Nunes da Costa', 'Quem são os dubladores brasileiros de Shrek 2?', 'Muitas pessoas tiveram contato com os filmes de Shrek pela versão brasileira do longa. Confira os dubladores que constituíram o elenco.\nO post Quem são os dubladores brasileiros de Shrek 2? apareceu primeiro em Olhar Digital.', 'https://olhardigital.com.br/2024/03/24/cinema-e-streaming/quem-sao-os-dubladores-brasileiros-de-shrek-2/', 'https://olhardigital.com.br/wp-content/uploads/2024/03/Shrek-2-esta-retornando-aos-cinemas-para-seu-20-an0075235300-3-695x500.webp', '2024-03-24T08:20:00Z'),
(108, 'Kelvin Leão Nunes da Costa', 'Os 10 melhores filmes com Julia Roberts', 'De comédias românticas a dramas intensos, reviva os melhores filmes estrelados por Julia Roberts. Confira agora!\nO post Os 10 melhores filmes com Julia Roberts apareceu primeiro em Olhar Digital.', 'https://olhardigital.com.br/2024/03/24/cinema-e-streaming/os-10-melhores-filmes-com-julia-roberts/', 'https://olhardigital.com.br/wp-content/uploads/2024/01/CAPA-Leave-the-World-Behind-695x500.jpg', '2024-03-24T22:20:00Z'),
(109, 'finance.yahoo.com', 'Meet the 4 Worst-Performing Dow Stocks in 2024 (and It Could Get Worse Before It Gets Better)', 'The broader stock market continues to roar higher. But 11 of the 30 components of the Dow Jones Industrial Average are down this year. The worst performers, in order, are Boeing (NYSE: BA), Intel (NASDAQ: INTC), Nike (NYSE: NKE), and Apple (NASDAQ: AAPL) -- w…', 'https://biztoc.com/x/d2652600197836b0', 'https://c.biztoc.com/p/d2652600197836b0/s.webp', '2024-03-24T12:58:07Z'),
(110, 'nypost.com', 'Ex-New Yorkers reveal why they joined thousands of others leaving Big Apple last year', 'New Yorkers who joined in an exodus from the city last year say they were driven out by a palpable change that has overtaken the streets — with many blaming crime and soaring prices for it. “I think everybody’s noticed a little bit of a shift in the city over…', 'https://biztoc.com/x/fd341817cef74c4c', 'https://c.biztoc.com/p/fd341817cef74c4c/og.webp', '2024-03-24T23:04:16Z'),
(111, 'investors.com', 'China Aims To Phase Out AMD, Intel From Government Computers', 'China has begun implementing guidelines that will keep Intel (INTC) and Advanced Micro Devices (AMD) microprocessors out of government PCs and servers, the Financial Times reported Sunday, part of a growing technological decoupling with the U.S. The new guida…', 'https://biztoc.com/x/37b25dc87fc7466f', 'https://c.biztoc.com/p/37b25dc87fc7466f/s.webp', '2024-03-24T18:10:11Z'),
(112, 'Thom Holwerda', 'Digital wallets and the “only Apple Pay does this” mythology', 'I hope what you take away from this post is that while Apple Pay is a great way to pay for things and that Apple did a great job mainstreaming digital wallets like this, what they do is not unique in the industry. DPANs are great for making it harder to track…', 'https://www.osnews.com/story/138941/digital-wallets-and-the-only-apple-pay-does-this-mythology/', '', '2024-03-24T19:54:50Z');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `search_id` int(11) NOT NULL,
  `search_msg` text NOT NULL,
  `user_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`search_id`, `search_msg`, `user_id`) VALUES
(81, 'dcadc', 20),
(82, 'dcadc', 20),
(83, 'dcadc', 20),
(84, 'dcadc', 20),
(85, 'dcadc', 20),
(86, 'dcadc', 20),
(87, 'ios', 20),
(88, 'a', 20),
(89, 'cdascd', 20),
(90, 'cdascd', 20),
(91, 'cdascd', 20),
(92, 'cdascd', 20),
(93, 'cdascd', 20),
(94, 'sc', 20),
(95, 'sc', 20),
(96, 'sc', 20),
(97, 'sc', 20),
(98, 'ios', 21),
(99, 'efwa', 21),
(100, 'few', 21),
(101, 'fe', 21),
(102, 'gg', 21);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(20) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` int(20) NOT NULL,
  `password` text NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `email`, `phone_no`, `password`, `created_at`) VALUES
(20, 'Min Thway', 'Khant', 'minthwaykhant04@gmail.com', 979983067, 'Minthway254@', '2024-04-28'),
(21, 'May', 'Phue', 'mayphue@gmail.com', 979983067, 'May2504!', '2024-05-01'),
(22, 'Hein', 'Htet', 'heinhtet@gmail.com', 932616372, 'Heinhtet254@', '2024-05-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`),
  ADD KEY `userid` (`user_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`search_id`),
  ADD KEY `search_user` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `search_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `userid` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `search`
--
ALTER TABLE `search`
  ADD CONSTRAINT `search_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

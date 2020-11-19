-- MySQL dump 10.13  Distrib 5.7.31, for Linux (x86_64)
--
-- Host: localhost    Database: homestead
-- ------------------------------------------------------
-- Server version	5.7.31-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Veniam beatae repellendus distinctio.','Чичикову; Чичиков заметил, что Чичиков, хотя мужик давно уже унесся и пропал из виду и много бы можно сделать разных запросов. Зачем, например, глупо и без улучшений, нельзя приобресть такого.','2020-11-09 10:34:09','2020-11-09 10:34:09',NULL),(2,'Aut voluptas maiores excepturi provident.','Бейте его! — кричал он исступленно, обратившись к Чичикову, — вы не будете есть в мире. Но герой наш.','2020-11-09 10:34:09','2020-11-09 10:34:09',NULL),(3,'Quisquam et dolor tenetur a excepturi.','Ах, братец, какой премилый человек! вот уж, — можно сказать, во всех чертах лица своего и сжатых губах такое глубокое выражение, какого, может.','2020-11-09 10:34:09','2020-11-09 10:34:09',NULL),(4,'Et natus delectus.','В это время вожжи всегда как-то лениво держались в руках у него — особенной, какую-нибудь бутылочку — ну.','2020-11-09 10:34:09','2020-11-09 10:34:09',NULL),(5,'Autem aliquid odio ut repellendus ab asperiores omnis dignissimos et quia nobis itaque.','Это уж мое дело. — Да зачем же приобретать — вещь, решительно для меня большего — блаженства, как жить с другом на берегу.','2020-11-09 10:34:09','2020-11-09 10:34:09',NULL),(6,'Eos nihil enim incidunt sit.','Да зачем же мне писать расписку? прежде нужно видеть — деньги. — Да зачем же среди недумающих, веселых.','2020-11-09 10:34:09','2020-11-09 10:34:09',NULL),(7,'Optio saepe ratione perferendis quo tempore error.','Когда он таким образом перебрали почти всех наизусть; он заставил слугу, или полового, рассказывать всякий вздор — о том, как бы за живой предмет, и что он, чувствуя уважение.','2020-11-09 10:34:09','2020-11-09 10:34:09',NULL),(8,'Fuga rerum aut laboriosam.','Он чувствовал, что — заседателя вам подмасливать больше не осталось показывать. Прежде всего пошли они обсматривать конюшню, где видели двух кобыл, одну серую в яблоках, другую каурую, потом.','2020-11-09 10:34:09','2020-11-09 10:34:09',NULL),(9,'Est sit consectetur quod illum sed et dolorem est.','Послушай, любезный! сколько у каждого из них видна была манишка, застегнутая тульскою булавкою с бронзовым пистолетом.','2020-11-09 10:34:09','2020-11-09 10:34:09',NULL),(10,'Non deserunt repudiandae est totam nulla.','Ежели бы я был пьян! Я знаю, что выиграю, да мне хочется, чтобы он занимался, он даже покраснел, — напряжение что-то выразить, не совсем безгрешно и.','2020-11-09 10:34:09','2020-11-09 10:34:09',NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories_has_news`
--

DROP TABLE IF EXISTS `categories_has_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories_has_news` (
  `category_id` bigint(20) unsigned NOT NULL,
  `news_id` bigint(20) unsigned NOT NULL,
  KEY `categories_has_news_category_id_foreign` (`category_id`),
  KEY `categories_has_news_news_id_foreign` (`news_id`),
  CONSTRAINT `categories_has_news_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `categories_has_news_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories_has_news`
--

LOCK TABLES `categories_has_news` WRITE;
/*!40000 ALTER TABLE `categories_has_news` DISABLE KEYS */;
INSERT INTO `categories_has_news` VALUES (5,6),(4,2),(3,2),(1,3),(5,9),(5,1),(1,10),(5,3),(3,1),(2,7),(5,1),(5,11),(4,2),(5,13),(3,13),(2,2),(5,8),(3,18),(2,20),(4,1);
/*!40000 ALTER TABLE `categories_has_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedbacks`
--

DROP TABLE IF EXISTS `feedbacks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feedbacks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedbacks`
--

LOCK TABLES `feedbacks` WRITE;
/*!40000 ALTER TABLE `feedbacks` DISABLE KEYS */;
/*!40000 ALTER TABLE `feedbacks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2020_11_06_041558_create_categories_table',1),(5,'2020_11_06_041748_create_news_table',1),(6,'2020_11_06_042316_categories_has_news',1),(7,'2020_11_09_055443_add_inage_in_category_table',1),(8,'2020_11_09_095458_create_source_for_news',1),(9,'2020_11_12_090843_create_orders_table',2),(10,'2020_11_12_091333_create_feedbacks_table',2),(11,'2020_11_18_094350_add_last_login_at_is_admin_fields_users',3),(12,'2020_11_19_092724_add_soft_delete',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Admin',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'Architecto beatae eligendi consectetur praesentium tempore illum maxime labore.','architecto-beatae-eligendi-consectetur-praesentium-tempore-illum-maxime-labore',NULL,'Ничтожный человек, и какую взял жену, с большим ли приданым, или нет, и доволен ли был тесть, и не — то.',1,'Admin','2020-11-09 10:34:09','2020-11-09 10:34:09'),(2,'Eum aliquam consequatur quam qui odio ipsum perspiciatis omnis eligendi ut autem.','eum-aliquam-consequatur-quam-qui-odio-ipsum-perspiciatis-omnis-eligendi-ut-autem',NULL,'Прощайте, мои крошки. Вы — давайте настоящую цену! «Ну, уж черт его знает. Кончил он наконец присоединился к толстым, где встретил почти все знакомые лица.',1,'Admin','2020-11-09 10:34:09','2020-11-09 10:34:09'),(3,'Quam beatae corrupti rem aliquid.','quam-beatae-corrupti-rem-aliquid',NULL,'В следующую за тем показалась гостям шарманка. Ноздрев тут же столько благодарностей, что тот отступил шага два назад.',1,'Admin','2020-11-09 10:34:09','2020-11-09 10:34:09'),(4,'Aut ratione dolor ut mollitia et culpa voluptatem.','aut-ratione-dolor-ut-mollitia-et-culpa-voluptatem',NULL,'Селифан. — Трактир, — сказала старуха — А, — давай его сюда! — Он пробежал ее глазами и подивился — аккуратности.',1,'Admin','2020-11-09 10:34:09','2020-11-09 10:34:09'),(5,'Nostrum itaque.','nostrum-itaque',NULL,'Везде поперек каким бы ни случилось с ним; но судьбам угодно было спасти бока, — плеча и все время игры. Выходя с фигуры, он ударял по.',1,'Admin','2020-11-09 10:34:09','2020-11-09 10:34:09'),(6,'Vel a facilis dolores ad perferendis vel id sit reiciendis earum.','vel-a-facilis-dolores-ad-perferendis-vel-id-sit-reiciendis-earum',NULL,'Отчего? — сказал Манилов с улыбкою и от почесывания пяток. Хозяйка вышла, с тем «чтобы привести в исполнение мысль насчет.',1,'Admin','2020-11-09 10:34:09','2020-11-09 10:34:09'),(7,'Est quas quia aspernatur voluptatem similique molestiae neque.','est-quas-quia-aspernatur-voluptatem-similique-molestiae-neque',NULL,'Вон как потащился! конек пристяжной недурен, я — тебе прямо в верх его кузова; брызги наконец стали долетать ему в род и потомство, утащит он его с удовольствием поговорю, коли.',1,'Admin','2020-11-09 10:34:09','2020-11-09 10:34:09'),(8,'Quae enim et molestiae voluptas error quibusdam iure.','quae-enim-et-molestiae-voluptas-error-quibusdam-iure',NULL,'Фу! какую ты неприятность говоришь, — сказала старуха. — Ничего. Эх, брат, как покутили! Впрочем, давай.',1,'Admin','2020-11-09 10:34:09','2020-11-09 10:34:09'),(9,'Enim at est numquam et qui eos iste et repellat.','enim-at-est-numquam-et-qui-eos-iste-et-repellat',NULL,'Здесь он опять обратил речь к чубарому: «Ты думаешь, что отроду еще не готовы“. В иной комнате и вовсе не с чего, так с бубен!» Или.',1,'Admin','2020-11-09 10:34:09','2020-11-09 10:34:09'),(10,'Ut exercitationem laudantium eos maxime rem et.','ut-exercitationem-laudantium-eos-maxime-rem-et',NULL,'Ну, нечего с вами делать, извольте! Убыток, да нрав такой собачий: — не выпускал изо рта оставшийся дым очень тонкой струею. — Итак, я бы.',1,'Admin','2020-11-09 10:34:09','2020-11-09 10:34:09'),(11,'Ut quas voluptas qui veritatis aliquam tenetur.','ut-quas-voluptas-qui-veritatis-aliquam-tenetur',NULL,'Чай, — в вашем огороде, что ли? — говорил Ноздрев, прижавши бока колоды пальцами и — наконец выворотил ее.',1,'Admin','2020-11-12 10:05:20','2020-11-12 10:05:20'),(12,'Qui ex dolorem et quibusdam omnis et nobis.','qui-ex-dolorem-et-quibusdam-omnis-et-nobis',NULL,'На ней были разбросаны по-английски две-три клумбы с кустами сиреней и желтых акаций; пять-шесть берез небольшими купами кое-где возносили свои мелколистные.',1,'Admin','2020-11-12 10:05:20','2020-11-12 10:05:20'),(13,'Soluta sed.','soluta-sed',NULL,'Чичикову, — я тоже здесь живу… А — сколько было, брат, карет, и все время игры. Выходя с фигуры, он ударял по столу крепко рукою, приговаривая, если была дама: «Пошла.',1,'Admin','2020-11-12 10:05:20','2020-11-12 10:05:20'),(14,'Reiciendis itaque in error repellat accusamus enim.','reiciendis-itaque-in-error-repellat-accusamus-enim',NULL,'Как несметное множество церквей, монастырей с куполами, главами, крестами, рассыпано на святой, благочестивой Руси, так несметное.',1,'Admin','2020-11-12 10:05:20','2020-11-12 10:05:20'),(15,'Aperiam illum assumenda possimus.','aperiam-illum-assumenda-possimus',NULL,'У губернатора, однако ж, показавшаяся деревня Собакевича рассеяла его мысли и заставила их обратиться к своему постоянному предмету. Деревня показалась ему довольно.',1,'Admin','2020-11-12 10:05:20','2020-11-12 10:05:20'),(16,'Ut est cumque iste qui deleniti qui est.','ut-est-cumque-iste-qui-deleniti-qui-est',NULL,'Потом Ноздрев велел еще принесть какую-то особенную бутылку, которая, по словам Ноздрева, совершенный вкус сливок, но в толк самого дела он.',1,'Admin','2020-11-12 10:05:20','2020-11-12 10:05:20'),(17,'Non cumque non rem id aspernatur corporis sapiente.','non-cumque-non-rem-id-aspernatur-corporis-sapiente',NULL,'Я не плутовал, а ты отказаться не можешь, ты должен непременно теперь ехать ко мне, пять — верст всего, духом домчимся, а там, пожалуй, можешь и к Собакевичу. «А.',1,'Admin','2020-11-12 10:05:20','2020-11-12 10:05:20'),(18,'Est itaque quasi ratione qui sequi ut facilis rerum perspiciatis.','est-itaque-quasi-ratione-qui-sequi-ut-facilis-rerum-perspiciatis',NULL,'Агашке-ключнице, барыниной фаворитке, сделался сам ключником, а там уже фортепьяно. Разные бывают мето\'ды. Не мешает сделать еще замечание, что Манилова….',1,'Admin','2020-11-12 10:05:20','2020-11-12 10:05:20'),(19,'Perspiciatis sit ut perferendis est.','perspiciatis-sit-ut-perferendis-est',NULL,'Эх, если бы вы в другом месте нашли такую мечту! Последние слова он уже налил гостям по большому стакану.',1,'Admin','2020-11-12 10:05:20','2020-11-12 10:05:20'),(20,'Autem quis possimus culpa.','autem-quis-possimus-culpa',NULL,'Покорнейше благодарю. А имя и фамилию для сообщения куда следует, в полицию. На бумажке половой, спускаясь с.',1,'Admin','2020-11-12 10:05:20','2020-11-12 10:05:20');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,'W5f8AkhtE5','b3db6fe9-c3e2-492f-9872-13d3bcc9f402','M0KLqd2o7k@gmail.com','Этим обед и вечер к полицеймейстеру, где с трех часов после обеда засели в вист и играли до двух часов ночи. Там, между прочим, он.','2020-11-12 09:40:01','2020-11-12 09:40:01'),(2,'y8uA2OVydl','6980d294-f581-44f4-ab22-59cab05a7c9b','yPexHRORfc@gmail.com','Бонапарт ты проклятый!» Потом прикрикнул на всех: «Эй вы, любезные!» — и больше ничего. — Поросенок есть?.','2020-11-12 09:40:01','2020-11-12 09:40:01'),(3,'JPNFGDjSHY','b3545333-0f81-498d-839a-aefbe7941e9b','asQAPDAXgg@gmail.com','Потом пошли осматривать водяную мельницу, где недоставало порхлицы, в которую попал непредвиденными судьбами, и, положивши свою.','2020-11-12 09:40:01','2020-11-12 09:40:01'),(4,'QI8zqSyZte','7fe97a0f-61b2-4490-80b5-67309c795a4f','5VLEXJlMn6@gmail.com','Но все это en gros[[1 - В большом — количестве (франц.)]]. В фортунку крутнул: выиграл две банки помады.','2020-11-12 09:40:01','2020-11-12 09:40:01'),(5,'J5FiZgMRml','da3472b1-25a7-4ffc-b2ae-853f4ab7d281','6aUDqGzgY1@gmail.com','Гости слышали, как он это делал, но я — давно уже пропал из виду и много бы можно сделать разных запросов. Зачем, например, глупо и.','2020-11-12 09:40:01','2020-11-12 09:40:01'),(6,'ry43QN1wGd','771f21e5-d4c1-43b9-a594-22203d9b349c','X0xlliYYbI@gmail.com','Пока он его рассматривал, белокурый успел уже нащупать дверь и отворить ее. Это был среднего роста, очень недурно сложенный молодец с полными румяными щеками, с белыми, как снег, зубами и.','2020-11-12 09:40:01','2020-11-12 09:40:01'),(7,'AEBacy3zBx','8536f933-a4d0-4e45-a894-0462ea77e5d8','QewSiaDeAC@gmail.com','В это самое время подвинул обшлагом рукава и другую — шашку. — Знаем мы вас, как вы нашли нашего губернатора?.','2020-11-12 09:40:01','2020-11-12 09:40:01'),(8,'5pPYCAna1B','e8ec6a60-2fd5-43f7-a45f-4c5ac5c93105','Q3bK7vRCYN@gmail.com','Петрушке. Кучер Селифан был совершенно медвежьего цвета, рукава длинны, панталоны длинны, ступнями ступал он и от нее бы мог сорвать весь банк. — Однако ж согласитесь.','2020-11-12 09:40:01','2020-11-12 09:40:01'),(9,'zE5RZKAjXE','75573e83-d5d0-43f7-a0aa-320403829cc2','mf8bIJz35d@gmail.com','Выдумали диету, лечить голодом! Что у них помещики, и узнал, что афиша была напечатана в типографии губернского.','2020-11-12 09:40:01','2020-11-12 09:40:01'),(10,'mFMTSaPFaJ','791ade25-25ab-4b81-969b-bb8ccadcfe03','2axsef35fS@gmail.com','Селифан, не видя так долго заниматься Коробочкой? Коробочка ли, Манилова ли, хозяйственная ли жизнь, или нехозяйственная — мимо их! Не то на свете не как предмет, а как.','2020-11-12 09:40:01','2020-11-12 09:40:01'),(11,'oQfoVwV6x8','(812) 738-97-26','703Ma8DfwW@gmail.com','Весь следующий день посвящен был визитам; приезжий отправился делать визиты всем городским сановникам. Был с почтением у губернатора.','2020-11-12 09:43:17','2020-11-12 09:43:17'),(12,'Ek5Fstpl75','(35222) 40-1485','6C7okJnGSk@gmail.com','А, нет! — сказал он, поправившись, — только, — пожалуйста, не проговорись никому. Я задумал жениться; но нужно тебе.','2020-11-12 09:43:17','2020-11-12 09:43:17'),(13,'OwZHV0Cq4b','+7 (922) 606-7847','GcKxnPQnFw@gmail.com','В приемах своих господин имел что-то солидное и высмаркивался чрезвычайно громко. Неизвестно, как он уже налил гостям по большому стакану портвейна и по другому госотерна.','2020-11-12 09:43:17','2020-11-12 09:43:17'),(14,'zxSzRvrarL','+7 (922) 709-1926','TunpOvkNoe@gmail.com','Помилуй, брат, что ж затеял? из этакого пустяка и затеять ничего нельзя. — Ведь я на обывательских приехал! — Вот еще варенье, — сказала девчонка. — Ну, теперь ясно? — Право, отец.','2020-11-12 09:43:17','2020-11-12 09:43:17'),(15,'bR8NKJ3Ivl','(812) 464-03-26','SlXxH7BN5E@gmail.com','Аршавского портного; где магазин с картузами, фуражками и надписью: «Иностранец Василий Федоров»; где нарисован был бильярд с двумя круглыми окошечками.','2020-11-12 09:43:17','2020-11-12 09:43:17'),(16,'jMDIc7mHKO','8-800-413-1940','GIHUeh1uoh@gmail.com','Несмотря на то воля господская. Оно нужно посечь, — потому что блеск от свечей, ламп и дамских платьев был страшный. Все было.','2020-11-12 09:43:17','2020-11-12 09:43:17'),(17,'FOHR9kKiuG','(35222) 88-2902','YM5sBLXv8K@gmail.com','У меня к Филиппову посту — будут и птичьи перья. — Хорошо, дайте же сюда деньги! — На что Чичиков отвечал всякий раз: «Покорнейше благодарю, я сыт, приятный разговор лучше всякого блюда». Уже.','2020-11-12 09:43:17','2020-11-12 09:43:17'),(18,'5ccZrC9big','(35222) 57-5259','X1EmtKJ7uV@gmail.com','Манилов, — у меня к тебе просьба. — Какая? — Дай прежде слово, что исполнишь. — Да ведь ты большой мошенник, позволь мне это — значит.','2020-11-12 09:43:17','2020-11-12 09:43:17'),(19,'ODHjzUYaMB','(812) 262-41-69','eSFkxXFwGe@gmail.com','Агашке-ключнице, барыниной фаворитке, сделался сам ключником, а там уже стоял на крыльце и, как только замечал, что они не твои же крепостные, или грабил бы ты сильно пощелкивал, смекнувши.','2020-11-12 09:43:17','2020-11-12 09:43:17'),(20,'n4ZcTamUzo','+7 (922) 791-9939','ViE0B1LSt3@gmail.com','Прометей, решительный Прометей! Высматривает орлом, выступает плавно, мерно. Тот же самый крепкий и на службу, и в его бричку. Настасья Петровна тут же.','2020-11-12 09:43:17','2020-11-12 09:43:17');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `source_for_news`
--

DROP TABLE IF EXISTS `source_for_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `source_for_news` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `source_for_news`
--

LOCK TABLES `source_for_news` WRITE;
/*!40000 ALTER TABLE `source_for_news` DISABLE KEYS */;
INSERT INTO `source_for_news` VALUES (1,'YrXwzeVYtl','https://www.fadeeva.ru/voluptatem-repudiandae-quas-eum-et-laudantium-dignissimos','2020-11-09 10:34:09','2020-11-09 10:34:09'),(2,'oO9clhNN9i','http://www.fedotova.org/totam-error-cum-neque-commodi-et-natus','2020-11-09 10:34:09','2020-11-09 10:34:09'),(3,'TlPqecaRnY','http://www.bragina.com/nisi-modi-aut-earum-atque','2020-11-09 10:34:09','2020-11-09 10:34:09'),(4,'0ykuMNwZGb','https://www.titov.com/consequatur-corrupti-sunt-nobis','2020-11-09 10:34:09','2020-11-09 10:34:09'),(5,'TqgdTiedPa','http://www.zueva.ru/','2020-11-09 10:34:09','2020-11-09 10:34:09'),(6,'68ezTYguXC','http://www.fomicev.com/doloribus-cum-dolore-repellat-sunt-asperiores-corporis','2020-11-09 10:34:09','2020-11-09 10:34:09'),(7,'DB0JzA4mrw','https://www.hohlova.com/illum-molestias-dolores-autem-ullam-placeat-sapiente-sit','2020-11-09 10:34:09','2020-11-09 10:34:09'),(8,'Mzrdyo9A7t','https://silova.ru/minus-voluptatem-a-omnis-qui-aut.html','2020-11-09 10:34:09','2020-11-09 10:34:09'),(9,'pF7MyTX0m3','https://www.belousov.ru/et-modi-optio-voluptatem-consequuntur-velit-et','2020-11-09 10:34:09','2020-11-09 10:34:09'),(10,'6M8o3fUcTN','http://sukina.ru/ex-debitis-libero-alias-porro-voluptates','2020-11-09 10:34:09','2020-11-09 10:34:09');
/*!40000 ALTER TABLE `source_for_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_login_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Станислав','mail@mail.com',NULL,'$2y$10$R5qKnP6PzxNPZSh5kgUC6OafLSCxr72hqT1V/Lbc2o7jq/9TcAP/C',NULL,'2020-11-18 09:26:05','2020-11-19 15:31:26','2020-11-19 15:31:26',1,NULL),(2,'wordpress','mail2@mail.com',NULL,'$2y$10$I2zClGrMB9oPI3lmG6TR9.QzZ2mTDvrEqZ0Y77l8sZprEpjuhcQBK',NULL,'2020-11-19 04:17:52','2020-11-19 09:38:04',NULL,1,'2020-11-19 09:38:04'),(3,'Полина','polina@mail.com',NULL,'$2y$10$okpDbQllloixEcGaz/6FKu1JG.gruBxObOgAIvdXADmXbTYGk0UVy',NULL,'2020-11-19 08:53:54','2020-11-19 09:20:38',NULL,0,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-19 16:53:43

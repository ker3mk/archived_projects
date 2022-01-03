-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2014 at 08:30 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `teknoportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `text` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `writer` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `header`, `text`, `writer`, `date`) VALUES
(10, 'Dizüstü Bilgisayar Ekranları ile Ilgili Gerçekler', 'LCD ekranlara kısaca bir göz atalım. LCD nin kelime anlamı Likit(sıvı) Kristal Görüntüdür, 1,500,000 pikselin oluşumu ile görüntü sağlar. Herbir pikselin kendine ait likit/transistör kombinasyonu bulunmaktadır.\r\n\r\nKüçük bir kısmı zarar görmüş olduğunu bileekranda bir kalıcı siyah görüntü olmasının nedeni  tüm piksellerin birbirlerine bağlı çalışmaları sonuçu tüm pikselleri etkilemiş olmasıdır. Gelmeyen görüntü kırılan ekranlar gibi tamir edilemez ve değiştirilmesi gerekmektedir.\r\n\r\nLaptop Ekran Bakıp Bilgileri : -\r\n\r\nDizüstü Bilgisayar Ekranı Temizleme - dizüstü bilgisayar ekranı temizlemek içingözlük bezleri veya amerikan bezi dediğimiz parlak micro kumaşlar yeterli olacaktır.Yağ veya kir işaretleri olsa biledizüstü bilgisayarınızı rahatça temizleyebilirsiniz.\r\n\r\nEkranda Fiziksel Hasar– Ekranınızın üzerine baskı yapmakta ekranda hasar oluşturacaktır. Sadece parmak ile değiş, kalem veya herhangi bir sivri bir alet ile ekranınınızda hasar oluşturabilirsiniz.\r\n\r\nEklemeliyiz ki,dizüstü bilgisayarınızın ekranını değiştirme hakkında emin değilseniz, bir dizüstü bilgisayar LCD Ekran Değiştirmek için gereken temel adımları gösteren bir video eğitimini muhakkak izleyiniz.', 'Cenk Sadik', '2014-05-08 21:15:37'),
(11, ' Teknoloji nedir ? Faydaları ve zararları nelerdir ?', 'TEKNOLOJİ NEDİR ''\r\n\r\nTeknoloji . insanoğlunun gereklerine uygun yardımcı alet ve araçların yapılması ya da üretilmesi için gerekli bilgi ve yetenektir. Teknoloji ayrıca, bir sanayi dalıyla ilgili üretim yöntemlerini, kullanılan araç, gereç ve aletleri kapsayan bilgidir.\r\n\r\nBir insan etkinliği olarak teknoloji, insanlık tarihinde bilim ve mühendislikten önce ortaya çıkmıştır. Teknolojinin, bilimin uygulamacı yönü olduğu görüşleri de vardır.\r\n\r\nTeknoloji, günümüzde veri paylaşımının en etkin bir biçimde kullanılarak keşiflere yön vermesinin etkin bir parçası olarak da tanımlanabilmektedir.\r\n\r\nTEKNOLOJİNİN ÖNEMİ NEDİR ''\r\n\r\nGünümüzde insanların ihtiyaçları ve çeşitli konularda sorunları vardır. Bu sorunları çözebilmek ve ihtiyaçları gidermek için teknolojiye ihtiyaç duyulur. Şuan 2012 yılı değil de daha eski zamanda teknoloji öncesi bir dönemde yaşıyor olduğumuzu bir düşünün. Temel ihtiyaçlarımızdan elektrikten yoksunuz aslında bu bile büyük bir eksik. Elinizin altındaki internet olmasaydı temel ev aletleri (çamaşır makinası, buzdolabı, fırın vb.) olmasaydı hayat ne kadar zor olurdu. Örnek olarak eski zamanlar da insanlar beslenme ihtiyacını karşılamak için ellerinde bulanan aletleri (ağaçları, çalıları) kullanarak mızraklar yaptılar. (Dikkat edersek mızrak yapımı gördüğünüz gibi ihtiyaçtan doğdu) Hayvanları izleyerek avlandılar. Düşünün o zamanlarda insanların beslenme ihtiyacını karşılaması bile günümüzdekine göre ne kadar zor ve farklı. Şimdi ise insanların beslenme ihtiyacını karşılaması çok kolay. Bundan da teknolojinin bir yerde insanları hazıra alıştırdığını ve tembelleştirdiğini söyleyebiliriz.\r\n\r\nAyrıca teknoloji bir ülkenin kalkınması ve gelişmesi içinde önemli rol oynar.\r\n\r\nTEKNOLOJİNİN FAYDALARI NELERDİR ''\r\n\r\nTeknoloji sayesinde bilgi alışverişi kolaylaşmıştır. Dünyanın öteki ucunda gerçekleşen bir olaydan anında haberimiz olabilir .\r\n\r\nİnsanların hayatı kolaylaşmıştır. Örneğin internetten alışveriş yapılabilir.\r\n\r\nİnsanlar duygu ve düşüncelerini yazılı olarak hızlı bir şekilde ifade edebilirler.\r\n\r\nSağlık alanında hastalıkların erken teşhisini sağlarken aynı zamanda daha kolay çözüm bulunabilir.\r\n\r\nTeknoloji sayesinde insanların ulaşım da atlarla veya yürüyerek gidilen yollar çok uzun zaman almaktaydı haftalar hatta aylar alabilmekteydi. Şimdi ise çok kısa sürelerde isteğimiz yerlere ulaşabiliyoruz.\r\n\r\nTEKNOLOJİNİN ZARARLARI NELERDİR ''\r\n\r\nİnsanları tembelleştirmiştir. Hazıra alıştırmıştır. İnsanlar tam bir tüketici olmuştur.\r\n\r\nKüresel ısınmaya sebebiyet vermiştir. Çevre kirliliği artmıştır.\r\n\r\nTeknoloji ile birlikte çeşitli ve yeni hastalıklar ortaya çıkmıştır ama yine teknoloji sayesinde de çözüm bulunabilmektedir.\r\n\r\nTeknoloji ürünlerinin neredeyse tamamı elektrikle çalışmaktadır. Elektrikle çalışan her alet bir elektromanyetik alan oluşturur. İnsan beyninin de kendine ait bir elektromanyetik alanı vardır. Çünkü sinirler nöronlar aracılığıyla elektriksel uyarıları beynin çeşitli yerlerine ulaştırarak çalışırlar. Bu nedenle günlük hayatta kullandığımız her elektrikli cihaz mutlaka bizi olumsuz etkilerler.\r\n\r\nİnsanlar arasındaki yüz yüze iletişimi azaltmıştır.\r\n', 'Taha Yüksel', '2014-05-08 21:17:24'),
(12, 'Şarj Edilebilir Pillerin Arkasındaki Bilim', 'Şarj edilebilir pil başka anlamda saklama pili olarak da bilinir ve bu pilin içinde iki veya daha fazla küçük hücre bulunur, bu da bu pillerin elektrik enerjisi uygulandığında tam kinetik ve elektriksel potansiyellerine ulaşmak için kendilerine şarj etmesini sağlar. Bilim diliyle, pilde serbest bırakılan elektromanyetik ve elektrokimyasal reaksiyon tamamen tersinebilirdir, bu yüzden bu pillerin bir tür akümülatör olduğunu söyleyebiliriz.\r\n\r\nBu hücreleri meydana getiren birçok ve çeşitli kimyasal var ve bunda kullanılan kimyasallar oldukça farklıdır ve kurşun, sülfürik asit, alkalin, nikel kadmiyum ve tabi ki lityuma ''bundan önce birçok şeyi yerine getiren ve bu ailenin en yeni üyesi- kadar değişebilir. Şarj edilebilir pillerin faydaları atmosfere çevresel fayda sağladığını düşündüğümüzde çok önemli ve sayıca fazladır. Şarj edilebilir piller sayesinde onlardan daha azı atılır ve ama onları atmak da biraz atılabilir bir fikir olmakta. Ayrıca, onları doğru şekilde ve çevreye hasarsız şekilde toplamanın ekonomik faydaları da vardır fakat onları bu şekilde elden çıkarmanın bedeli biraz yüksek olabilir, bu ikisi birbirine sıkı sıkıya bağlıdır ve şirketler bazen bunları elden çıkarmanın daha ucuz ve tehlikeli yollarını seçmektedirler.\r\n\r\nBu pillerden bazılarının 3 bin şarja kadar yaşam süreleri vardır ve bireysel bir kullanıcının elektronik aygıtlarında kullanmak üzere alkalin veya tek başına pil hücreleri satın almaktansa bunları alarak ne kadar tasarruf sağlayacağını görebilirsiniz. Bu pillerin uygulamaları çok fazladır ve bunların içinde otomobil marşları, tüketici aygıtları, büyük piller tarafından enerji verilen bazı hafif araçlar, cep telefonları, müzik çalarlar ve dijital kameralar vardır. Bunlar şarj edilebilir pillerle birlikte kullanılan ürünlerden bazıları. Şebeke enerji saklaması, bazı uygulamalardaki yeni bir teknoloji ve bu da yük seviyelendirmesi için şarj edilebilir piller kullanır, bu teknolojide günün elektrik enerjisinin bir kısmı voltajın düşük geleceği periyotlar için depolanır ve enerji taleplerinin, şarj edilebilir enerji kullanımları gibi güneş tepedeyken enerjinin depolanması da buna benzer, arttığı zamanlar için saklanır.\r\n\r\nPillerin enerji talebinin düşük olduğu dönemlerde depolayıp elektrik ihtiyacının fazla olduğu dönemde şebekeye vererek pahalı güç santralleri kurmayı elimine eder ve jeneratörlerin değerini daha fazla ve uzatılmış operasyon saatlerine yükseltir. Bunlar şarj edilebilir pillerin teknik boyutlarından ve kullanım alanlarından bazıları ve gördüğünüz gibi normal uygulamaların alanına rahatlıkla ulaşıp endüstriyel ve bilimsel alanlara girmişlerdir.', 'Mehmet Köse', '2014-05-08 21:18:36');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE IF NOT EXISTS `education` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` text COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `educationtype` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `educationimage` text COLLATE utf8_unicode_ci NOT NULL,
  `educationmedia` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=35 ;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `header`, `content`, `educationtype`, `date`, `educationimage`, `educationmedia`) VALUES
(32, 'JavaWeb Ders1: Temel CSS (Ortogon)', 'Java ile Web Uygulamaları Geliştirme\r\n\r\nBu ders, Java EE kullanarak Web uygulamaları geliştirmek üzere gereken teknik ve yöntemlerin derlendiği orta-ileri düzey bir eğitim programıdır.\r\n\r\nEğitmen: Altuğ Tanaltay', 1, '2014-05-08 21:22:47', 'css/images/education/139957696728848.jpeg', '<iframe width="560" height="315" src="//www.youtube.com/embed/XgFfBdwhvzc?list=PLB59C6BBACE1001BB" frameborder="0" allowfullscreen></iframe>'),
(33, 'JavaWeb Ders2: Temel HTML (Ortogon)', 'Java ile Web Uygulamaları Geliştirme\r\n\r\nBu ders, Java EE kullanarak Web uygulamaları geliştirmek üzere gereken teknik ve yöntemlerin derlendiği orta-ileri düzey bir eğitim programıdır.\r\n\r\nEğitmen: Altuğ Tanaltay\r\n\r\nEğitim içeriği:\r\n01. Temel CSS\r\n02. Temel HTML', 1, '2014-05-08 21:26:00', 'css/images/education/139957716092250.jpeg', '<iframe width="560" height="315" src="//www.youtube.com/embed/wnrGBcWrPIs?list=PLB59C6BBACE1001BB" frameborder="0" allowfullscreen></iframe>'),
(34, 'HTML Eğitim', 'HTML Dosyası Nedir?\r\n\r\nHTML, Hyper Text Markup Language''in kısaltmasıdır.\r\nHTML çeşitli anlamlara gelen kodlamalar (tag) ve düz metinden oluşur.\r\nBu kodlar ancak bir Web Browser (Internet Explorer, Firefox) tarafından anlamlı hale getirilebilir.\r\nBu kodla yazılmış dosyaların uzantıları genellikle html ya da htm''dir.\r\nHTML, en basit yolla bir not defteri ile yazılabilir.', 2, '2014-05-08 21:41:36', 'css/images/education/139957809678551.jpeg', '<iframe width="420" height="315" src="//www.youtube.com/embed/pwy0cYLf9ps" frameborder="0" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `educationtype`
--

CREATE TABLE IF NOT EXISTS `educationtype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `educationtype`
--

INSERT INTO `educationtype` (`id`, `name`, `img`) VALUES
(1, 'Java', 'css/images/egitimtur/java.jpg'),
(2, 'HTML', 'css/images/egitimtur/139957793974933.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `favoritenews`
--

CREATE TABLE IF NOT EXISTS `favoritenews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `newsid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `favoritenews`
--

INSERT INTO `favoritenews` (`id`, `userid`, `newsid`) VALUES
(4, 2, 22),
(5, 2, 21),
(6, 2, 20);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `newstype` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `newsimage` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=23 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `header`, `content`, `newstype`, `date`, `newsimage`) VALUES
(18, 'iPhone için akıllı kılıf üretildi', 'Lunacase adlı ‘akıllı kılıf’ iPhone’a gelen çağrı ve mesajlardan yayılan elektromanyetik dalgaları algılayarak bildirim ışığı yayıyor.\r\n\r\nUkraynalı bir grup genç girişimci tarafından üretilen Lunacase adlı ‘akıllı kılıf’ iPhone’a gelen çağrı ve mesajlardan yayılan elektromanyetik dalgaları algılayarak bildirim ışığı yayıyor.\r\nelefondan gelen elektromanyetiği algılayan akıllı kılıf, bu sayede çağrı ya da mesaja göre kılıfın arkasında yer alan simge aracılığıyla bildirim ışığı yayıyor. Kılıfın bir başka özelliğiyse verdiği bildirim ışığını telefonunuzun şarjından almıyor oluşu. Kılıf kendi elektromanyetik enerjisini oluşturuyor ve böylece telefonun enerjisine ihtiyaç duymuyor. Lunecase adlı iPhone kılıfı telefonun arkasına takılıyor ve şık tasarımı ile neredeyse kılıf olduğu hiç anlaşılmıyor.\r\n\r\nKılıfı satışa çıkarmak için finansman desteği arayan Lunacase’in bu ürünü Ağustos ayında 29 dolardan satışa çıkarması bekleniyor.\r\nKaynak:Mynet', 2, '2014-05-08 21:02:49', 'css/images/news/139957576946583.jpeg'),
(20, '3D yazıcı ile spor otomobil yaptılar', '3D yazıcılar yakın gelecekte tüketicilerin tüm alışkanlıklarını değistirecek. Hayal ettiğiniz spor otomobili evinizde üretmek ister misiniz?\r\nGünümüzdeki tüketici alışkanlığı, ürünleri gidip seçmek saatlerce mağaza dolaşmak üzerine kurulu. Firmalar bu alışkanlıkları artırmak için mağaza dekorasyonlarına ve çalışan sayısına yatırımlarını artırıyor. Teknoloji yakın gelecekte satıcının ayağına giden alışveriş alışkanlığını değiştirecek. 3D yazıcılar, teknoloji şovu gibi dursa da yavaş yavaş, hayatımıza giriş yapıyor.\r\n\r\nSon zamanlarda 3D yazıcıların yapabileceklerini gösteren yeni haberler ve videolar artmaya başladı. Evinizde, kendi dekorasyon eşyanızı, yemeğinizi hatta engelliyseniz yeni protezinizi yapabiliyorsunuz. Spor otomobilleriyle ünlü olan Koenigsegg firması, otomotiv sektörünü değiştirecek bir adım attı. Yeni otomobili, One:1’in bazı parçalarını 3D yazıcı sayesinde hazırlayan firma çıkan sonuçlardan oldukça memnun. Firma yöneticisi Christian Von Koenigsegg 3D yazıcıların, parça geliştirme ve tasarlama sürecini hızlandırdığını söylüyor. Üstelik, yedek parça sıkıntısı da bu teknolojiyle ortadan kalkıyor. Koenigsegg bundan sonraki tüm araçların 3D yazıcıları kullanacağını söyledi.', 2, '2014-05-08 21:10:13', 'css/images/news/139957621348774.png'),
(21, 'WhatsApp’ın 500 milyon aktif kullanıcısı var', 'ısa bir süre önce Facebook tarafından satın alınan WhatsApp, 500 milyon aktif kullanıcı rakamına ulaştı.\r\n\r\nMobil cihazların en çok kullanılan bedava uygulamalarından olan WhatsApp, 5 yıldan az bir sürede 500 milyon kullanıcıya ulaştığını açıkladı.\r\n\r\nSon birkaç ayda özellikle Brezilya, Hindistan, Meksika ve Rusya’daki kullancılarının arttığını belirten WhatsApp, her gün 700 milyon fotoğraf ve 100 milyon video paylaşıldığını vurguladı.\r\nFacebook, Şubat ayında Whatsapp’i 16+3 milyon dolara satın aldığında uygulamanın 450 milyon kullanıcısı vardı. Facebook, kuruluşunun 6. yılı 2010’da 500 milyon kullanıcı rakamına ulaşmıştı. WhatsApp’in bu hızla giderse çok daha kısa sürede 1 milyar kullanıcıya ulaşması bekleniyor.\r\n\r\nKaynak:Gerçek Gündem', 1, '2014-05-08 21:12:06', 'css/images/news/139957632672467.jpeg'),
(22, 'Tweetler suçların önlenmesi için kullanılabilir', 'irginia Üniversitesi tarafından yürütülen araştırma gösteriyor ki, tweetler suçların tespit edilmesi ve önlenmesi için kullanılabilir.\r\n\r\nTeknolojik gelişmelerden faydalanılması sonucu henüz işlenmeden suçları tespit etmek ve önlemek, bugüne kadar sadece bilim-kurgu filmlerinde görülebilen ve yakın gelecekte gerçeğe dönüşmesi imkansız görülen bir fikirdi. Ancak Virginia Üniversitesi’nde görev alan araştırmacılar tarafından yürütülen yeni bir çalışma gösteriyor ki, bu fikir çok da uzak olmayan bir gelecekte gerçeğe dönüşebilir. Üstelik bu önemli gelişmeye imkan sağlayan platform, artık günlük hayatımızın bir parçası olan Twitter olacak.\r\n\r\n\r\n\r\nKullanıcıların sosyal medya geçmişleri ve özellikle attıkları tweetler, davranış biçimleri ve karakterleri hakkında birçok detayın analiz edilmesine olanak sağlıyor. Virginia Üniversitesi’nin araştırmasına göre tweetlerin, o bölgedeki suç geçmişiyle birlikte değerlendirilmesi sonucu 25′e yakın suç türü önceden tespit edilebilir. Bahsi geçen bu suç türleri arasında hırsızlık ve önceden planlanmış saldırılar gibi önemli suçlar da yer alıyor. Bu araştırma kapsamında Chicago şehrinde bir deneme yürüten ekip, belirli bölgelerde işlenecek belirli suçları önceden belirleyebildi.', 3, '2014-05-08 21:36:07', 'css/images/news/139957776727402.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `newstype`
--

CREATE TABLE IF NOT EXISTS `newstype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `newstype`
--

INSERT INTO `newstype` (`id`, `name`, `image`) VALUES
(1, 'Yazılım', 'css/images/yazilim.gif'),
(2, 'Donanım', 'css/images/donanim.gif'),
(3, 'İnternet', 'css/images/139957769823914.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE IF NOT EXISTS `notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `note` longtext COLLATE utf8_unicode_ci NOT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `note`, `userid`) VALUES
(5, 'fasgasgasgag', 2),
(6, 'Financial Times’a göre Apple ses ve müzik ürünleri devi Beats’i 3,2 milyar dolara satın almaya hazırlanıyor.\r\n\r\nHenüz resmi bir açıklama olmasa da Bloomberg, New York Times ve Wall Street Journal da bu satın almayı doğruluyor. Anlaşmanın önümüzdeki hafta imzalanması planlanıyor.\r\n\r\nÜnlü rapçi Dr Dre ve yapımcı Jimmy Iovine tarafından 2008’de kurulan Beats, müzik piyasasında ‘b’ logolu kulaklıklarıyla -her ne kadar audiophil''ler kulaklıkların kalitesini beğenmese de- adından söz ettirmişti.', 2),
(8, 'deneme', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `header`, `content`, `img`) VALUES
(2, 'OS X için Java 2013-002', 'Son zamanlarda eklentilerden kaynaklı kötü yazılımlara karşı sıkı bir uğraş içine giren Apple, bu kapsamda, Java SE 6''nın yeni bir güncellemesini yayınladı.', 'css/images/slider/139966786986350.jpeg'),
(3, 'Tekno Portal', 'Teknoloji haber ve eğitim portalı sitesi yayında.', 'css/images/slider/139966740554096.jpeg'),
(4, 'Yeni Surface Mini', 'Microsoft''un pek çok uzmana göre hayal kırıklığı yaratan ve hatta Steve Ballmer''ın istifasında da önemli rol oynayan tablet - hibrit PC modelleri Surface''ler, bir kez daha şanslarını deniyorlar.', 'css/images/slider/139966728779725.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tutorials`
--

CREATE TABLE IF NOT EXISTS `tutorials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tutorialtype` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tutorialstype`
--

CREATE TABLE IF NOT EXISTS `tutorialstype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `usertype` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `name`, `surname`, `usertype`) VALUES
(2, 'user', '1234567', 'aaa@gmail.com', 'test', 'soyadtest', 1),
(3, 'admin', '1234567', 'aaa@gmail.com', 'Admin', 'Administrator', 2);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE IF NOT EXISTS `usertype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`id`, `name`) VALUES
(1, 'user'),
(2, 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

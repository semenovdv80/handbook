-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: handbook
-- ------------------------------------------------------
-- Server version	5.7.24-0ubuntu0.16.04.1

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
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `section_id` int(11) NOT NULL,
  `content` text,
  `title` tinytext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,1,'<h3 style=\"font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(51, 51, 51);\">1. Ð£ÑÑ‚Ð°Ð½Ð¾Ð²ÐºÐ° PHP5.6 Ð² Ubuntu 16.04</h3><p>Ð”Ð»Ñ Ñ‚Ð¾Ð³Ð¾, Ñ‡Ñ‚Ð¾Ð±Ñ‹ ÑƒÑÑ‚Ð°Ð½Ð¾Ð²Ð¸Ñ‚ÑŒ php Ð²ÐµÑ€ÑÐ¸Ð¸ 5.6 Ð½ÐµÐ¾Ð±Ñ…Ð¾Ð´Ð¸Ð¼Ð¾ Ð¿Ð¾Ð´ÐºÐ»ÑŽÑ‡Ð¸Ñ‚ÑŒ Ñ€ÐµÐ¿Ð¾Ð·Ð¸Ñ‚Ð¾Ñ€Ð¸Ð¹ ÑÐ¾Ð´ÐµÑ€Ð¶Ð°Ñ‰Ð¸Ð¹ Ð¿Ð°ÐºÐµÑ‚:</p><pre class=\"terminal\" style=\"line-height: 1.42857;\">sudo add-apt-repository ppa:ondrej/php\r\nsudo apt-get update</pre><p>Ð”Ð°Ð»ÐµÐµ Ð¿Ñ€Ð¾Ð¸Ð·Ð²Ð¾Ð´Ð¸Ð¼ ÑƒÑÑ‚Ð°Ð½Ð¾Ð²ÐºÑƒ:</p><pre class=\"terminal\" style=\"line-height: 1.42857;\">sudo apt-get install php5.6</pre><p>ÐŸÐ¾ ÑƒÐ¼Ð¾Ð»Ñ‡Ð°Ð½Ð¸ÑŽ PHP Ð¿Ð¾Ð´ÐºÐ»ÑŽÑ‡Ð°ÐµÑ‚ÑÑ ÐºÐ°Ðº Ð¼Ð¾Ð´ÑƒÐ»ÑŒ Ðº ÑƒÑÑ‚Ð°Ð½Ð¾Ð²Ð»ÐµÐ½Ð½Ð¾Ð¼Ñƒ Ð²ÐµÐ±-ÑÐµÑ€Ð²ÐµÑ€Ñƒ Apache. ÐŸÑ€Ð¸ ÑÑ‚Ð¾Ð¼ Ð½Ð°ÑÑ‚Ñ€Ð¾Ð¹ÐºÐ¸ php Ð½Ð°Ñ…Ð¾Ð´ÑÑ‚ÑÑ Ð² Ñ„Ð°Ð¹Ð»Ðµ:</p><pre style=\"line-height: 1.42857;\">/etc/php/5.6/apache2/php.ini</pre><p>Ð˜Ð½Ñ‚ÐµÑ€Ð¿Ñ€ÐµÑ‚Ð°Ñ‚Ð¾Ñ€ PHP Ð¼Ð¾Ð¶ÐµÑ‚ Ð±Ñ‹Ñ‚ÑŒ ÑƒÑÑ‚Ð°Ð½Ð¾Ð²Ð»ÐµÐ½ Ð² Ð½ÐµÑÐºÐ¾Ð»ÑŒÐºÐ¸Ñ… Ð²Ð°Ñ€Ð¸Ð°Ð½Ñ‚Ð°Ñ… Ð´Ð»Ñ Ñ€Ð°Ð·Ð½Ñ‹Ñ… Ñ€ÐµÐ¶Ð¸Ð¼Ð¾Ð² Ð·Ð°Ð¿ÑƒÑÐºÐ°:</p><p>1. ÐœÐ¾Ð´ÑƒÐ»ÑŒ Ð´Ð»Ñ Apache (Ð² ÑÑ‚Ð¾Ð¼ ÑÐ»ÑƒÑ‡Ð°Ðµ ÐºÐ°Ð¶Ð´Ñ‹Ð¹ Ð¿Ñ€Ð¾Ñ†ÐµÑÑ Ð²ÐµÐ±-ÑÐµÑ€Ð²ÐµÑ€Ð° Ð±ÑƒÐ´ÐµÑ‚ Ð²ÐºÐ»ÑŽÑ‡Ð°Ñ‚ÑŒ Ð² ÑÐµÐ±Ñ ÑÑ‚Ð¾Ñ‚ Ð¼Ð¾Ð´ÑƒÐ»ÑŒ)</p><pre class=\"terminal\" style=\"line-height: 1.42857;\">sudo apt-get install libapache2-mod-php5.6\r\nsudo a2enmod php5.6</pre><pre style=\"line-height: 1.42857;\">Ð¿ÑƒÑ‚ÑŒ Ðº Ð½Ð°ÑÑ‚Ñ€Ð¾Ð¹ÐºÐ°Ð¼ /etc/php/5.6/apache2/php.ini</pre><p>2. Ð¡GI (Ð¸Ð½Ñ‚ÐµÑ€Ð¿Ñ€ÐµÑ‚Ð°Ñ‚Ð¾Ñ€ Ð²Ñ‹Ð·Ñ‹Ð²Ð°ÐµÑ‚ÑÑ Ð² ÑÐ»ÑƒÑ‡Ð°Ðµ Ð½ÐµÐ¾Ð±Ñ…Ð¾Ð´Ð¸Ð¼Ð¾ÑÑ‚Ð¸. Ð—Ð°Ð¼ÐµÐ´Ð»ÑÐµÑ‚ Ð¸ÑÐ¿Ð¾Ð»Ð½ÐµÐ½Ð¸Ðµ, Ñ‚.Ðº. Ð¿Ñ€Ð¸ ÐºÐ°Ð¶Ð´Ð¾Ð¼ Ð·Ð°Ð¿Ñ€Ð¾ÑÐµ Ð¸Ð´ÐµÑ‚ Ð·Ð°Ð³Ñ€ÑƒÐ·ÐºÐ° Ð¸Ð½Ñ‚ÐµÑ€Ð¿Ñ€ÐµÑ‚Ð°Ñ‚Ð¾Ñ€Ð° Ð² Ð¿Ð°Ð¼ÑÑ‚ÑŒ.</p><pre class=\"terminal\" style=\"line-height: 1.42857;\">sudo apt-get install php5.6-cgi\r\nsudo a2enconf php5.6-cgi\r\nsudo a2enmod cgi</pre><pre style=\"line-height: 1.42857;\">Ð¿ÑƒÑ‚ÑŒ Ðº Ð½Ð°ÑÑ‚Ñ€Ð¾Ð¹ÐºÐ°Ð¼ /etc/php/5.6/cgi/php.ini</pre><p>3. FastÐ¡GI (Ð¾Ð¿Ñ‚Ð¸Ð¼Ð°Ð»ÑŒÐ½Ð¾Ðµ Ð±Ñ‹ÑÑ‚Ñ€Ð¾Ð´ÐµÐ¹ÑÑ‚Ð²Ð¸Ðµ, Ð¾Ñ‚Ð´ÐµÐ»ÑŒÐ½Ñ‹Ð¹ Ð¿Ñ€Ð¾Ñ†ÐµÑÑ Ð² Ð¿Ð°Ð¼ÑÑ‚Ð¸, ÐºÐ¾Ñ‚Ð¾Ñ€Ñ‹Ð¹ Ð·Ð°Ð¿ÑƒÑ‰ÐµÐ½ Ð¿Ð¾ÑÑ‚Ð¾ÑÐ½Ð½Ð¾)</p><pre class=\"terminal\" style=\"line-height: 1.42857;\">sudo apt-get install php5.6-fpm\r\nsudo apt install libapache2-mod-fastcgi\r\na2enconf php5.6-fpm\r\nsudo a2enmod fastcgi</pre><pre style=\"line-height: 1.42857;\">Ð¿ÑƒÑ‚ÑŒ Ðº Ð½Ð°ÑÑ‚Ñ€Ð¾Ð¹ÐºÐ°Ð¼ /etc/php/5.6/fpm/php.ini</pre><p>4. CLI (Ð·Ð°Ð¿ÑƒÑÐº ÑÐºÑ€Ð¸Ð¿Ñ‚Ð° Ð¸Ð· ÐºÐ¾Ð¼Ð°Ð½Ð´Ð½Ð¾Ð¹ ÑÑ‚Ñ€Ð¾ÐºÐ¸)</p><pre class=\"terminal\" style=\"line-height: 1.42857;\">sudo apt-get install php5.6-cli</pre><pre style=\"line-height: 1.42857;\">Ð¿ÑƒÑ‚ÑŒ Ðº Ð½Ð°ÑÑ‚Ñ€Ð¾Ð¹ÐºÐ°Ð¼ /etc/php/5.6/cli/php.ini</pre><p>Ð§Ñ‚Ð¾Ð±Ñ‹ Ð¿Ð¾Ð¼ÐµÐ½ÑÑ‚ÑŒ Ð²ÐµÑ€ÑÐ¸ÑŽ php Ð´Ð»Ñ ÐºÐ¾Ð¼Ð°Ð½Ð´Ð½Ð¾Ð¹ ÑÑ‚Ñ€Ð¾ÐºÐ¸ Ð² Ubuntu Ð²Ð²Ð¾Ð´Ð¸Ð¼:</p><pre class=\"terminal\" style=\"line-height: 1.42857;\">sudo update-alternatives --set php /usr/bin/php5.6</pre><p>Ð¢ÐµÐºÑƒÑ‰Ð¸Ð¹ Ñ€ÐµÐ¶Ð¸Ð¼ Ñ€Ð°Ð±Ð¾Ñ‚Ñ‹ Ð¸Ð½Ñ‚ÐµÑ€Ð¿Ñ€ÐµÑ‚Ð°Ñ‚Ð¾Ñ€Ð° Ð½Ð° ÑÐµÑ€Ð²ÐµÑ€Ðµ Ð¼Ð¾Ð¶Ð½Ð¾ ÑƒÐ²Ð¸Ð´ÐµÑ‚ÑŒ ÑÐ¾Ð·Ð´Ð°Ð² Ñ„Ð°Ð¹Ð» .php Ñ Ñ„ÑƒÐ½ÐºÑ†Ð¸ÐµÐ¹ phpinfo()</p><p>Ð£ÑÑ‚Ð°Ð½Ð¾Ð²ÐºÐ° Ð´Ð¾Ð¿Ð¾Ð»Ð½Ð¸Ñ‚ÐµÐ»ÑŒÐ½Ñ‹Ñ… Ð¼Ð¾Ð´ÑƒÐ»ÐµÐ¹ Ñ€Ð°ÑÑˆÐ¸Ñ€ÐµÐ½Ð¸Ð¹ Ð´Ð»Ñ Ð¸Ð½Ñ‚ÐµÑ€Ð¿Ñ€ÐµÑ‚Ð°Ñ‚Ð¾Ñ€Ð° Ð¾ÑÑƒÑ‰ÐµÑÑ‚Ð²Ð»ÑÐµÑ‚ÑÑ Ñ Ð¿Ð¾Ð¼Ð¾Ñ‰ÑŒÑŽ ÐºÐ¾Ð¼Ð°Ð½Ð´:</p><pre class=\"terminal\" style=\"line-height: 1.42857;\">sudo apt-get install php5.6-mysql\r\nsudo apt-get install php5.6-mbstring\r\nsudo apt-get install php5.6-imap\r\nsudo apt-get install php5.6-zip\r\nsudo apt-get install php5.6-xml\r\nsudo apt-get install php5.6-dev</pre><pre style=\"line-height: 1.42857;\">Ð¿ÑƒÑ‚ÑŒ Ðº ÑƒÑÑ‚Ð°Ð½Ð¾Ð²Ð»ÐµÐ½Ð½Ñ‹Ð¼ Ð¼Ð¾Ð´ÑƒÐ»ÑÐ¼   /etc/php/5.6/mods-available\r\nÐ¿ÑƒÑ‚ÑŒ Ðº Ð°ÐºÑ‚Ð¸Ð²Ð¸Ñ€Ð¾Ð²Ð°Ð½Ð½Ñ‹Ð¼ Ð¼Ð¾Ð´ÑƒÐ»ÑÐ¼  /etc/php/5.6/.../conf.d</pre><p>Ð•ÑÐ»Ð¸ Ð¼Ð¾Ð´ÑƒÐ»ÑŒ Ð°Ð²Ñ‚Ð¾Ð¼Ð°Ñ‚Ð¸Ñ‡ÐµÑÐºÐ¸ Ð½Ðµ Ð°ÐºÑ‚Ð¸Ð²Ð¸Ñ€Ð¾Ð²Ð°Ð½ Ð¿Ñ€Ð¸ ÑƒÑÑ‚Ð°Ð½Ð¾Ð²ÐºÐµ, ÑÑ‚Ð¾ Ð¼Ð¾Ð¶Ð½Ð¾ ÑÐ´ÐµÐ»Ð°Ñ‚ÑŒ Ð²Ñ€ÑƒÑ‡Ð½ÑƒÑŽ ÑÐ¾Ð·Ð´Ð°Ð² ÑÑÑ‹Ð»ÐºÑƒ Ð² Ð´Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€Ð¸Ð¸ conf.d, Ð½Ð°Ð¿Ñ€Ð¸Ð¼ÐµÑ€:</p><pre style=\"line-height: 1.42857;\">sudo ln -s /etc/php/5.6/mods-available/mcrypt.ini /etc/php/5.6/apache2/conf.d/20-mcrypt.ini</pre><p>Ð˜Ð½Ñ„Ð¾Ñ€Ð¼Ð°Ñ†Ð¸ÑŽ Ð¾Ð± ÑƒÑÑ‚Ð°Ð½Ð¾Ð²Ð»ÐµÐ½Ð½Ñ‹Ñ… Ñ€Ð°ÑÑˆÐ¸Ñ€ÐµÐ½Ð¸ÑÑ… php Ð¼Ð¾Ð¶Ð½Ð¾ Ð¿Ð¾Ð»ÑƒÑ‡Ð¸Ñ‚ÑŒ Ð²Ð²ÐµÐ´Ñ ÐºÐ¾Ð¼Ð°Ð½Ð´Ñƒ:</p><pre class=\"terminal\" style=\"line-height: 1.42857;\">dpkg --list | grep php</pre>','Ð£ÑÑ‚Ð°Ð½Ð¾Ð²ÐºÐ° PHP'),(2,1,'&lt;p&gt;PEAR (PHP Extension and Application Repository) - Ñ€ÐµÐ¿Ð¾Ð·Ð¸Ñ‚Ð¾Ñ€Ð¸Ð¹, ÑÐ¾Ð´ÐµÑ€Ð¶Ð°Ñ‰Ð¸Ð¹ Ñ€Ð°ÑÑˆÐ¸Ñ€ÐµÐ½Ð¸Ñ Ð¸ Ð¿Ñ€Ð¸Ð»Ð¾Ð¶ÐµÐ½Ð¸Ñ Ð´Ð»Ñ PHP.&lt;/p&gt;&lt;h3 style=&quot;font-family: &amp;quot;Helvetica Neue&amp;quot;, Helvetica, Arial, sans-serif; color: rgb(51, 51, 51);&quot;&gt;1. Ð£ÑÑ‚Ð°Ð½Ð¾Ð²ÐºÐ° PEAR Ð² Ubuntu 16.04&lt;/h3&gt;&lt;p&gt;Ð”Ð»Ñ Ñ‚Ð¾Ð³Ð¾, Ñ‡Ñ‚Ð¾Ð±Ñ‹ ÑƒÑÑ‚Ð°Ð½Ð¾Ð²Ð¸Ñ‚ÑŒ PEAR Ð½ÐµÐ¾Ð±Ñ…Ð¾Ð´Ð¸Ð¼Ð¾ Ð²Ð²ÐµÑÑ‚Ð¸ ÐºÐ¾Ð¼Ð°Ð½Ð´Ñƒ:&lt;/p&gt;&lt;pre class=&quot;terminal&quot; style=&quot;line-height: 1.42857;&quot;&gt;sudo apt install php-pear&lt;/pre&gt;&lt;p&gt;Ð”Ð»Ñ Ñ€Ð°Ð±Ð¾Ñ‚Ñ‹ Ñ Ð¼Ð¾Ð´ÑƒÐ»ÑÐ¼Ð¸ Ð½ÐµÐ¾Ð±Ñ…Ð¾Ð´Ð¸Ð¼Ð¾, Ñ‡Ñ‚Ð¾Ð±Ñ‹ Ð² ÑÐ¸ÑÑ‚ÐµÐ¼Ðµ Ð±Ñ‹Ð» ÑƒÑÑ‚Ð°Ð½Ð¾Ð²Ð»ÐµÐ½ Ð¿Ð°ÐºÐµÑ‚ php5.6-dev:&lt;/p&gt;&lt;pre class=&quot;terminal&quot; style=&quot;line-height: 1.42857;&quot;&gt;sudo apt install php5.6-dev&lt;/pre&gt;&lt;p&gt;Ð’Ð¼ÐµÑÑ‚Ðµ Ñ Ð¿Ð°ÐºÐµÑ‚Ð¾Ð¼&amp;nbsp;&lt;span style=&quot;font-weight: 700;&quot;&gt;PEAR&lt;/span&gt;&amp;nbsp;Ð² ÑÐ¸ÑÑ‚ÐµÐ¼Ñƒ Ñ‚Ð°ÐºÐ¶Ðµ ÑƒÑÑ‚Ð°Ð½Ð°Ð²Ð»Ð¸Ð²Ð°ÐµÑ‚ÑÑ&amp;nbsp;&lt;span style=&quot;font-weight: 700;&quot;&gt;PECL (PHP Extension Community Library)&lt;/span&gt;&amp;nbsp;- Ñ€ÐµÐ¿Ð¾Ð·Ð¸Ñ‚Ð¾Ñ€Ð¸Ð¹ Ð¼Ð¾Ð´ÑƒÐ»ÐµÐ¹ Ð´Ð»Ñ PHP. ÐŸÑ€Ð¾ÑÐ¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð¸Ð½Ñ„Ð¾Ñ€Ð¼Ð°Ñ†Ð¸ÑŽ Ð¾ Ð¿Ð°ÐºÐµÑ‚Ð°Ñ…, ÑƒÑÑ‚Ð°Ð½Ð¾Ð²Ð»ÐµÐ½Ð½Ñ‹Ñ… Ñ‡ÐµÑ€ÐµÐ· PEAR Ð¸ PECL Ð¼Ð¾Ð¶Ð½Ð¾ ÐºÐ¾Ð¼Ð°Ð½Ð´Ð°Ð¼Ð¸:&lt;/p&gt;&lt;pre class=&quot;terminal&quot; style=&quot;line-height: 1.42857;&quot;&gt;pear list\r\npecl list&lt;/pre&gt;&lt;p&gt;Ð£ÑÑ‚Ð°Ð½Ð¾Ð²ÐºÐ° Ð¿Ð°ÐºÐµÑ‚Ð° Ð¸Ð· Ñ€ÐµÐ¿Ð¾Ð·Ð¸Ñ‚Ð¾Ñ€Ð¸Ñ Ð¾ÑÑƒÑ‰ÐµÑÑ‚Ð²Ð»ÑÐµÑ‚ÑÑ ÑÐ»ÐµÐ´ÑƒÑŽÑ‰ÐµÐ¹ ÐºÐ¾Ð¼Ð°Ð½Ð´Ð¾Ð¹:&lt;/p&gt;&lt;pre class=&quot;terminal&quot; style=&quot;line-height: 1.42857;&quot;&gt;sudo pecl install amqp&lt;/pre&gt;&lt;p&gt;Ð§Ñ‚Ð¾Ð±Ñ‹ ÑƒÐ´Ð°Ð»Ð¸Ñ‚ÑŒ Ð¿Ð°ÐºÐµÑ‚:&lt;/p&gt;&lt;pre class=&quot;terminal&quot; style=&quot;line-height: 1.42857;&quot;&gt;sudo pecl uninstall amqp&lt;/pre&gt;','PEAR'),(3,1,'&lt;div class=&quot;well well-sm&quot;&gt;Ð’ ÑÐ·Ñ‹ÐºÐµ PHP ÐµÑÑ‚ÑŒ&amp;nbsp;&lt;span style=&quot;font-weight: 700;&quot;&gt;Ð²Ð¾ÑÐµÐ¼ÑŒ&lt;/span&gt;&amp;nbsp;Ð¾ÑÐ½Ð¾Ð²Ð½Ñ‹Ñ… Ñ‚Ð¸Ð¿Ð¾Ð² Ð´Ð°Ð½Ð½Ñ‹Ñ…&lt;/div&gt;&lt;h3 style=&quot;font-family: &amp;quot;Helvetica Neue&amp;quot;, Helvetica, Arial, sans-serif; color: rgb(51, 51, 51);&quot;&gt;Ð¡ÐºÐ°Ð»ÑÑ€Ð½Ñ‹Ðµ Ñ‚Ð¸Ð¿Ñ‹ Ð´Ð°Ð½Ð½Ñ‹Ñ…&lt;/h3&gt;&lt;div class=&quot;table-responsive&quot;&gt;&lt;table class=&quot;table&quot; style=&quot;width: 928px;&quot;&gt;&lt;tbody&gt;&lt;tr&gt;&lt;td style=&quot;line-height: 1.42857;&quot;&gt;1. Ð”Ð²Ð¾Ð¸Ñ‡Ð½Ñ‹Ð¹ (Boolean)&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td style=&quot;line-height: 1.42857;&quot;&gt;2. Ð¦ÐµÐ»Ð¾Ðµ Ñ‡Ð¸ÑÐ»Ð¾ (Integer)&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td style=&quot;line-height: 1.42857;&quot;&gt;3. Ð§Ð¸ÑÐ»Ð¾ Ñ Ð¿Ð»Ð°Ð²Ð°ÑŽÑ‰ÐµÐ¹ Ñ‚Ð¾Ñ‡ÐºÐ¾Ð¹ (Float)&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td style=&quot;line-height: 1.42857;&quot;&gt;4. Ð¡Ñ‚Ñ€Ð¾ÐºÐ° (String)&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;/div&gt;&lt;h3 style=&quot;font-family: &amp;quot;Helvetica Neue&amp;quot;, Helvetica, Arial, sans-serif; color: rgb(51, 51, 51);&quot;&gt;Ð¡Ð¼ÐµÑˆÐ°Ð½Ð½Ñ‹Ðµ Ñ‚Ð¸Ð¿Ñ‹ Ð´Ð°Ð½Ð½Ñ‹Ñ…&lt;/h3&gt;&lt;div class=&quot;table-responsive&quot;&gt;&lt;table class=&quot;table&quot; style=&quot;width: 928px;&quot;&gt;&lt;tbody&gt;&lt;tr&gt;&lt;td style=&quot;line-height: 1.42857;&quot;&gt;5. ÐœÐ°ÑÑÐ¸Ð² (Array)&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td style=&quot;line-height: 1.42857;&quot;&gt;6. ÐžÐ±ÑŠÐµÐºÑ‚ (Object)&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;/div&gt;&lt;h3 style=&quot;font-family: &amp;quot;Helvetica Neue&amp;quot;, Helvetica, Arial, sans-serif; color: rgb(51, 51, 51);&quot;&gt;Ð¡Ð¿ÐµÑ†Ð¸Ð°Ð»ÑŒÐ½Ñ‹Ðµ Ñ‚Ð¸Ð¿Ñ‹ Ð´Ð°Ð½Ð½Ñ‹Ñ…&lt;/h3&gt;&lt;div class=&quot;table-responsive&quot;&gt;&lt;table class=&quot;table&quot; style=&quot;width: 928px;&quot;&gt;&lt;tbody&gt;&lt;tr&gt;&lt;td style=&quot;line-height: 1.42857;&quot;&gt;7. Ð ÐµÑÑƒÑ€Ñ (Resource)&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td style=&quot;line-height: 1.42857;&quot;&gt;8. ÐŸÑƒÑÑ‚Ð¾Ð¹ Ñ‚Ð¸Ð¿ (Null)&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;/div&gt;','Ð¢Ð¸Ð¿Ñ‹ Ð´Ð°Ð½Ð½Ñ‹Ñ…');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-03 16:34:04

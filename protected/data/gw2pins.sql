-- phpMyAdmin SQL Dump
-- version 4.2.3
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2014 年 10 月 23 日 12:03
-- 伺服器版本: 5.6.10
-- PHP 版本： 5.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `gw2pins`
--

-- --------------------------------------------------------

--
-- 資料表結構 `pins_post`
--

DROP TABLE IF EXISTS `pins_post`;
CREATE TABLE IF NOT EXISTS `pins_post` (
`row_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_date` date NOT NULL,
  `category` tinyint(2) unsigned NOT NULL,
  `show` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- 資料表的匯出資料 `pins_post`
--

INSERT INTO `pins_post` (`row_id`, `user_id`, `title`, `content`, `created_date`, `category`, `show`) VALUES
(1, 4, 'TeamSpeak 3 使用教學', '<p dir="ltr"><strong><span style="background-color:transparent; color:#000000; font-family:arial; font-size:15px">1. 下載 Teamspeak 3</span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir="ltr"><strong><u>打開瀏覽器連到 </u><a href="http://www.teamspeak.com/?page=downloads" style="text-decoration:none;"><u>http://www.teamspeak.com/?page=downloads</u></a><span style="background-color:transparent; color:#000000; font-family:arial; font-size:15px"> ，可以根據自己的作業系統選擇版本和位元</span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir="ltr"><strong><span style="background-color:transparent; color:#000000; font-family:arial; font-size:15px">2. 安裝 Teamspeak 3</span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir="ltr"><strong><span style="background-color:transparent; color:#000000; font-family:arial; font-size:15px">雙擊下載好的檔案就會開始安裝，安裝的過程可以選擇是否要安裝 Overwolf ，這是 Teamspeak 內建的 Overlay UI</span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir="ltr"><strong><span style="background-color:transparent; color:#000000; font-family:arial; font-size:15px">3. 把 Teamspeak 3 中文化</span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir="ltr"><strong><span style="background-color:transparent; color:#000000; font-family:arial; font-size:15px">如果對英文苦惱的話，可以到這個網頁 </span><a href="https://sites.google.com/site/ts3taiwan/top/ts3-traditional" style="text-decoration:none;"><u>https://sites.google.com/site/ts3taiwan/top/ts3-traditional</u></a><span style="background-color:transparent; color:#000000; font-family:arial; font-size:15px"> 下載 Teamspeak 3 中文化的語言包，</span></strong></p>\r\n\r\n<p dir="ltr"><strong><span style="background-color:transparent; color:#000000; font-family:arial; font-size:15px">下載完成點兩下，應該就會出現 Teamspeak 安裝語言包的畫面。</span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir="ltr"><strong><span style="background-color:transparent; color:#000000; font-family:arial; font-size:15px">安裝好後開啟 Teamspeak 3 依照上面的選單 Settings -&gt; Options 開啟設定面板</span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir="ltr"><strong><span style="background-color:transparent; color:#000000; font-family:arial; font-size:15px"><img src="https://lh6.googleusercontent.com/6Wc2p-BVz9hDMQkaVA9dSSMUzaTXccfEWfw2DtSi4PUoC-oZVFzCYWNgC0tr9TF9j9MYBnKgSZ8n4TxYdL1vGsaMyKvfj6dgHGB5Rr-oD_kYirQSac6ruPy5JbHgiBJJxQ" style="border:medium none; height:260px; transform:rotate(0rad); width:624px" /></span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir="ltr"><strong><span style="background-color:transparent; color:#000000; font-family:arial; font-size:15px">左邊第一個頁籤 Applications 點下去後可以看到右邊的 Language 下拉選單，選擇 Chinese 以後按下 Ok &nbsp;重新啟動 Teamspeak 3 就會變成中文的囉。</span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir="ltr"><strong><span style="background-color:transparent; color:#000000; font-family:arial; font-size:15px"><img src="https://lh3.googleusercontent.com/8Xdqh4ZPzjzo6o58x2nW2KB4Dd7ClVoUsTqnRSEgC-UfJSYZ1qwYtHeVfHdjUKB5KsTFviGjU0fvxcO-_LKk8Lwv8uFHg8SrDlUg0RhcDAa1iR5mbRaaQEHZZ953zq_Evw" style="-webkit-transform:rotate(0.00rad); border:none; height:460px; transform:rotate(0.00rad); width:624px" /></span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir="ltr"><strong><span style="background-color:transparent; color:#000000; font-family:arial; font-size:15px"><img src="https://lh3.googleusercontent.com/j8VfTN8RZDP1ZajpBU1oEpbzursDTH4NPYENQk0gpvbiikKQ47eWnpiO8kmyVHaw1I8fd4dLvp-phNt29a_nazTWt57Fj4GpFM70PCR2BpEo9LAU0ipRbDWFQL8ejDv-MA" style="-webkit-transform:rotate(0.00rad); border:none; height:484px; transform:rotate(0.00rad); width:624px" /></span></strong></p>\r\n\r\n<p><br />\r\n<br />\r\n<br />\r\n&nbsp;</p>\r\n\r\n<p dir="ltr"><strong><span style="background-color:transparent; color:#000000; font-family:arial; font-size:15px">連線到 PiNS</span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir="ltr"><strong><span style="background-color:transparent; color:#000000; font-family:arial; font-size:15px">啟動 TS 後，上方選單 連線 -&gt; 連線至 會開啟一個對話框，輸入您的暱稱和 PiNs 的 IP : xxxxxxxxxxxxxxxxxxxx ，按下連線就可以連到 PiNs 囉！</span></strong></p>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n\r\n<p dir="ltr"><strong><span style="background-color:transparent; color:#000000; font-family:arial; font-size:15px"><img src="https://lh4.googleusercontent.com/pi-mAE27g-PCmDdfOE-IM7Vm0FA3ImJPdr15YBU_LDaTMFSh_gLTa6qLXAzeZmJO3lQoBEj4Wb9vM2PeKdFv3w5jtCgkwXt7maakXFXYT61vXjcodRmiMVYA--5uqZcNFA" style="-webkit-transform:rotate(0.00rad); border:none; height:400px; transform:rotate(0.00rad); width:536px" /></span><span style="background-color:transparent; color:#000000; font-family:arial; font-size:15px"><img src="https://lh5.googleusercontent.com/GqVAy3-C20-GN0kLfndO0x39WKuNqBKWknR0_t-g56pTWkEDakq6bRCtjSWrGUDF3HOWITDK9u2UWdzFqOT2_JhPrMuAlyk8k6Std-e4mdEiLHRULU_uTy2_ZLM1lQvNIg" style="-webkit-transform:rotate(0.00rad); border:none; height:180px; transform:rotate(0.00rad); width:415px" /></span></strong></p>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n\r\n<p dir="ltr"><strong><span style="background-color:transparent; color:#000000; font-family:arial; font-size:15px">Teamspeak 相關設定</span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir="ltr"><strong><span style="background-color:transparent; color:#000000; font-family:arial; font-size:15px">Teamspeak 比較常見的設定就是選項內的播放和錄音兩大類別，播放主要是設定其他人講話的聲音，以及 Teamspeak 語音提示的音量。這裡的選項可以設定多組設定檔使用。</span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir="ltr"><strong><span style="background-color:transparent; color:#000000; font-family:arial; font-size:15px"><img src="https://lh6.googleusercontent.com/oMVEBTiDnorM_N2Yp8DtofIDnvc2i_wSXKE8FNB1jJI3ZLsTkl4bevS6N2a0a4cBNJjhBQODJqPal0s3Nt7ZnFYQ5d4oV5cSZkLmyiReql-63jUi2Ykw8VzE5yiwGmTkqQ" style="-webkit-transform:rotate(0.00rad); border:none; height:460px; transform:rotate(0.00rad); width:624px" /></span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir="ltr"><strong><span style="background-color:transparent; color:#000000; font-family:arial; font-size:15px">另一部分則是錄音的設定，也就是用 MIC 說話的音量，通常我們建議大家設定成 &quot;按鍵發話&quot; 避免不小心讓不該被聽到的東西流出來給大家聽，其他回音過濾和取消回音，可以看自己的狀況調整。記得按下開始測試要像下圖一樣有綠色長條圖出來才算有接收到聲音喔。</span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir="ltr"><strong><span style="background-color:transparent; color:#000000; font-family:arial; font-size:15px"><img src="https://lh5.googleusercontent.com/sJ9mhIB3tlw7_nUeQyAQB2vcQDK9dPxazKufiO4DfcTqYPtjuIlxM9HIi446nF_2P8sHO0YMh5O_032X3GfsTPkhKGyIFCKtWMbinIwCP1uOWK8Y2vJrJ-jKhSrpldG1kQ" style="-webkit-transform:rotate(0.00rad); border:none; height:460px; transform:rotate(0.00rad); width:624px" /></span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', '2014-10-23', 0, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `pins_user`
--

DROP TABLE IF EXISTS `pins_user`;
CREATE TABLE IF NOT EXISTS `pins_user` (
`row_id` int(11) NOT NULL,
  `account` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nickname` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `intro` text COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `game_id` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- 資料表的匯出資料 `pins_user`
--

INSERT INTO `pins_user` (`row_id`, `account`, `first_name`, `last_name`, `nickname`, `email`, `intro`, `password`, `created_date`, `game_id`) VALUES
(1, 'cyril', 'Cyril', 'Chiu', 'Cyril', 'cyril0108@gmail.com', 'PiNs. 公會校長兼撞鐘', 'cb08e8ab1883144a02e5049079c2e039', '2014-10-11 13:25:28', 'Cyril.7692'),
(2, 'pandia', 'Chih-Hung', 'Liu', '胖達', 'e1788hl@gmail.com', 'hello world', 'b3fc3c67c6c3ec7fc2631bd87d90a5ce', '2014-10-13 00:27:35', 'pandia.7946'),
(3, '喵寶', '', '', '喵寶', 'nightswatmeow@gmail.com', '喵寶好可愛~~', 'f6cbb174d51f7f459a7e09dd2a31a8ed', '2014-10-13 01:07:31', 'sabrina.9246'),
(4, 'pins', '', '', 'PiNs', 'master@gw2pins.is-best.net', 'PiNs. Web Master', 'cb08e8ab1883144a02e5049079c2e039', '2014-10-13 10:18:15', 'pins.0000');

-- --------------------------------------------------------

--
-- 資料表結構 `pins_user_level`
--

DROP TABLE IF EXISTS `pins_user_level`;
CREATE TABLE IF NOT EXISTS `pins_user_level` (
`row_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL COMMENT '會員帳號',
  `level` tinyint(3) unsigned NOT NULL COMMENT '等級',
  `title` varchar(60) COLLATE utf8_unicode_ci NOT NULL COMMENT '稱號',
  `status` tinyint(3) unsigned NOT NULL COMMENT '申請狀態',
  `modify` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '操作帳號',
  `modify_date` datetime DEFAULT NULL COMMENT '更新時間'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- 資料表的匯出資料 `pins_user_level`
--

INSERT INTO `pins_user_level` (`row_id`, `account_id`, `level`, `title`, `status`, `modify`, `modify_date`) VALUES
(1, 1, 99, '影子大師 ／ Master Of Shadow', 4, 'system', '2014-10-11 13:25:28'),
(2, 2, 99, '風元素大師 ／ Master Of Air', 4, 'system', '2014-10-13 00:27:36'),
(3, 3, 99, '水元素大師 ／ Master Of Water', 4, 'system', '2014-10-13 01:07:31'),
(4, 4, 99, '網站管理員', 4, 'Cyril', '2014-10-22 17:15:49');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `pins_post`
--
ALTER TABLE `pins_post`
 ADD PRIMARY KEY (`row_id`);

--
-- 資料表索引 `pins_user`
--
ALTER TABLE `pins_user`
 ADD PRIMARY KEY (`row_id`), ADD UNIQUE KEY `account` (`account`);

--
-- 資料表索引 `pins_user_level`
--
ALTER TABLE `pins_user_level`
 ADD PRIMARY KEY (`row_id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `pins_post`
--
ALTER TABLE `pins_post`
MODIFY `row_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- 使用資料表 AUTO_INCREMENT `pins_user`
--
ALTER TABLE `pins_user`
MODIFY `row_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- 使用資料表 AUTO_INCREMENT `pins_user_level`
--
ALTER TABLE `pins_user_level`
MODIFY `row_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

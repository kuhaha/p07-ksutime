-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- ホスト: localhost
-- 生成時間: 2016 年 12 月 07 日 05:59
-- サーバのバージョン: 5.5.8
-- PHP のバージョン: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- データベース: `timerdb`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `tb_event`
--

CREATE TABLE IF NOT EXISTS `tb_event` (
  `eid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ename` varchar(64) NOT NULL,
  `detail` text NOT NULL,
  `host` text NOT NULL,
  `place` varchar(64) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  PRIMARY KEY (`eid`),
  UNIQUE KEY `eid` (`eid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- テーブルのデータをダンプしています `tb_event`
--

INSERT INTO `tb_event` (`eid`, `ename`, `detail`, `host`, `place`, `start`, `end`) VALUES
(1, '平成27年度情報科学部卒業研究発表会', '', '情報科学部', '九州産業大学12号館', '2016-01-28', '2016-01-28'),
(2, '平成28年度情報科学部卒業研究発表会', '', '情報科学部', '九州産業大学12号館', '2017-01-30', '2017-01-30'),
(3, 'DEIM2016 第8回データ工学と情報マネジメントに関するフォーラム', 'データ工学と情報マネジメントに関するフォーラム(DEIM)は，データ工学と情報マネジメントに関する 様々な研究テーマの討論・意見交換を目的とした合宿形式のワークショップです． 合宿形式とすることに より深い議論や活発な研究交流を促進する事を狙いとしております． 大学・企業の若手教員・研究者・技術者 および学生からの発表の他に，一般からの発表も広く受け付けています', '日本データベース学会', 'ヒルトン福岡シーホーク（福岡県福岡市中央区地行浜2-2-3）', '2016-02-29', '2016-03-02');

-- --------------------------------------------------------

--
-- テーブルの構造 `tb_present`
--

CREATE TABLE IF NOT EXISTS `tb_present` (
  `pid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `p_uid` varchar(32) NOT NULL,
  `presenter` varchar(64) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `sid` int(11) NOT NULL,
  UNIQUE KEY `pid` (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- テーブルのデータをダンプしています `tb_present`
--

INSERT INTO `tb_present` (`pid`, `title`, `p_uid`, `presenter`, `start_time`, `end_time`, `sid`) VALUES
(1, 'スマートフォンを用いた屋内位置情報を把握可能なアプリケーションの設計と実装', 'k12jk109', '藤野　慶汰 (12JK109)', '2016-01-28 09:10:00', '2016-01-28 09:20:00', 1),
(2, '地域と家族の絆を深めるための家庭向けSNSの設計と開発', 'k12jk082', '檀浦　博喜 (12JK082)', '2016-01-28 09:20:00', '2016-01-28 09:30:00', 1),
(3, 'DNAコンピュータ疑似体験プログラムの改良', '12JK014', '稲富　祐斗(12JK014)', '2016-01-28 09:10:00', '2016-01-28 09:20:00', 2),
(4, 'Trike型走行体によるETロボコンの難所フィギュアLと環状線エリアの攻略', '12JK059', '塩井　隆明(12JK059)', '2016-01-28 09:20:00', '2016-01-28 09:30:00', 2);

-- --------------------------------------------------------

--
-- テーブルの構造 `tb_session`
--

CREATE TABLE IF NOT EXISTS `tb_session` (
  `sid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sname` varchar(64) NOT NULL,
  `sdetail` text NOT NULL,
  `chair` varchar(64) NOT NULL,
  `room` varchar(64) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `time_limit` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  UNIQUE KEY `sid` (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- テーブルのデータをダンプしています `tb_session`
--

INSERT INTO `tb_session` (`sid`, `sname`, `sdetail`, `chair`, `room`, `start_time`, `end_time`, `time_limit`, `eid`) VALUES
(1, 'グループ１', '安部研・石田研・朝廣研・古井研', '安部先生', '12108', '2016-01-28 09:00:00', '2016-01-28 16:30:00', 7, 1),
(2, 'グループ２', '田中研・仲研・安武研・米元研', '安武先生', '12109', '2016-01-28 09:00:00', '2016-01-28 16:30:00', 7, 1),
(3, 'グループ３', '稲永研・ＢＯＢ研・下川研・澤田研', '稲永先生', '12105', '2016-01-28 09:00:00', '2016-01-28 16:30:00', 7, 1),
(4, 'グループ４', '合志研・成研・高野研・大坪研', '高野先生', '12106', '2016-01-28 09:00:00', '2016-01-28 16:30:00', 7, 1);

-- --------------------------------------------------------

--
-- テーブルの構造 `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `uid` varchar(16) NOT NULL,
  `uname` varchar(32) NOT NULL,
  `upass` varchar(16) NOT NULL,
  `email` varchar(32) NOT NULL,
  `urole` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータをダンプしています `tb_user`
--

INSERT INTO `tb_user` (`uid`, `uname`, `upass`, `email`, `urole`) VALUES
('takano', '高野 真弘', 'abcd', 'tekitou@pmail.com', 1),
('ohtsubo', '大坪', 'abcd', 'k1234@qmail.com', 1),
('admin', '管理者', '1234', 'admin@qmail.co.jp', 9),
('k12jk082', '檀浦　博喜', 'abcd', 'k12jk082@st.kyusan-u.ac.jp', 1),
('k12jk109', '藤野　慶汰', 'abcd', 'k12jk109@st.kyusan-u.ac.jp', 1);

-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Abr-2018 às 01:57
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manitoramos`
--
CREATE DATABASE IF NOT EXISTS `manitoramos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `manitoramos`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `linguagem`
--

DROP TABLE IF EXISTS `linguagem`;
CREATE TABLE `linguagem` (
  `id` int(11) NOT NULL,
  `ling` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sub` int(11) NOT NULL DEFAULT '0',
  `cat_id` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncate table before insert `linguagem`
--

TRUNCATE TABLE `linguagem`;
--
-- Extraindo dados da tabela `linguagem`
--

INSERT INTO `linguagem` (`id`, `ling`, `sub`, `cat_id`, `created_at`, `updated_at`) VALUES
(1, 'ASP.NET', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'JavaScript', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'PHP', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Csharp', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Python 3.4.3', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Lazarus', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'CSS', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'HTACESS', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'GIT', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'DataTable', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'AngularJS', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Bootstrap 3', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'JS LoadE', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Jquery', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `programacao`
--

DROP TABLE IF EXISTS `programacao`;
CREATE TABLE `programacao` (
  `id` int(11) NOT NULL,
  `user` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cat_id` int(11) NOT NULL,
  `mensagem` longtext COLLATE utf8_unicode_ci NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci NOT NULL,
  `Featured` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `Hits` int(11) NOT NULL DEFAULT '0',
  `noti` int(11) NOT NULL DEFAULT '1',
  `tags` text COLLATE utf8_unicode_ci NOT NULL,
  `published` int(11) NOT NULL DEFAULT '0',
  `updated_by` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncate table before insert `programacao`
--

TRUNCATE TABLE `programacao`;
--
-- Extraindo dados da tabela `programacao`
--

INSERT INTO `programacao` (`id`, `user`, `tipo`, `cat_id`, `mensagem`, `titulo`, `Featured`, `Hits`, `noti`, `tags`, `published`, `updated_by`, `created_at`, `updated_at`) VALUES
(77, 'manito', 'Python 3.4.3', 0, '7096935211664', 'Substring', 'No', 3, 0, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 'manito', 'PHP', 0, '97451381322158', 'Uso de Sessões', 'No', 2, 0, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 'manito', 'PHP', 0, '7936233008239', 'MySQL - Ligação Base dados', 'No', 4, 0, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 'manito', 'PHP', 0, '160282640325666', 'Gerenciar Permições', 'No', 2, 0, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 'manito', 'PHP', 0, '9118224936360', 'Como Verificar CheckBox', 'No', 4, 0, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 'manito', 'ASP.NET', 0, '150961282716675', 'Substring ASP.NET', 'No', 4, 0, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 'manito', 'PHP', 0, '226441207216773', 'Menu automático', 'No', 5, 0, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 'manito', 'PHP', 0, '258512263321999', 'Parâmetros entre Paginas', 'No', 5, 0, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 'manito', 'PHP', 0, '17784106699827', 'Login com Sessões', 'Yes', 3, 0, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 'manito', 'ASP.NET', 0, '291632145515404', 'ODBC mysql', 'No', 6, 0, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 'manito', 'JavaScript', 0, '130272536114341', 'Alertify JS', 'No', 4, 0, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 'manito', 'JavaScript', 0, '20987225383256', 'Upload File Progress Envent', 'No', 12, 0, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 'manito', 'JavaScript', 0, '290991505429387', 'Alertify.org Show After return with Ajax', 'No', 14, 0, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 'manito', 'JavaScript', 0, '1459246591572', 'Push mensage over internet', 'No', 4, 0, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 'manito', 'JavaScript', 0, '9142001629785', 'erro $ is not defined', 'No', 10, 0, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 'manito', 'HTACESS', 0, '292602000513815', 'friendly urls overflow', 'No', 7, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 'ricardo', 'JavaScript', 0, '102182267811135', 'Load a div no server', 'No', 20, 0, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 'manito', 'JavaScript', 0, '879215136799', 'Verificar se um ficheiro existe', 'No', 9, 0, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 'manito', 'HTACESS', 0, '8172158322965', 'Friendly Urls PHP', 'No', 6, 0, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 'manito', 'Python 3.4.3', 0, '13812707322200', 'Como usar MySQL com Python', 'Yes', 3, 0, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 'manito', 'GIT', 0, '3955204323007', 'GitKraken', 'No', 4, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 'manito', 'JavaScript', 0, '350138357153', 'Notification with ajax', 'No', 18, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 'ricardo', 'DataTable', 0, '1071130036089', 'insert checkbox when selected', 'No', 3, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 'manito', 'JavaScript', 0, '158082969726783', 'Select Interactive', 'No', 11, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 'manito', 'CSS', 0, '212583227957', 'BootSnip', 'No', 5, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 'manito', 'CSS', 0, '77632193212254', 'Manegement User Bootstrap', 'No', 8, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 'manito', 'JavaScript', 0, '160112326212423', 'Visible or Disable id', 'No', 7, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 'manito', 'Lazarus', 0, '147012720525027', 'BroteroNews', 'No', 9, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 'manito', 'Lazarus', 0, '60741252016005', 'Admin', 'No', 8, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 'manito', 'Lazarus', 0, '167711727312365', 'Comentarios', 'No', 6, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 'manito', 'Lazarus', 0, '1626025586853', 'notifica', 'No', 2, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 'manito', 'Lazarus', 0, '213801869023473', 'Report bug', 'No', 2, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 'manito', 'Lazarus', 0, '290892213320396', 'chat', 'No', 3, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 'manito', 'CSS', 0, '147172385826828', 'Balloon text', 'No', 5, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, 'manito', 'Lazarus', 0, '231082626725372', 'Users / Grid / userhome', 'No', 4, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, 'manito', 'PHP', 0, '8436257028657', 'Email Automatico', 'No', 3, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, 'manito', 'PHP', 0, '108981628123213', 'criptografar dados', 'No', 2, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 'manito', 'JavaScript', 0, '164482639511116', 'Search on table', 'No', 5, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, 'ricardo', 'Bootstrap 3', 0, '18469115871666', 'X-editable', 'No', 4, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, 'manito', 'JavaScript', 0, '11889198428786', 'Events JS', 'No', 7, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, 'manito', 'PHP', 0, '186371278825691', 'Gerar senha aleatoria', 'No', 2, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(117, 'manito', 'JavaScript', 0, '3918159306809', 'load on scroll', 'No', 8, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, 'manito', 'PHP', 0, '16013110695379', 'String seleccionar só os primeiros 40 caracters', 'No', 7, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(119, 'manito', 'JavaScript', 0, '8296903020515', 'X-editable', 'No', 4, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, 'manito', 'CSS', 0, '262161188724246', 'Scrollbar Webkit', 'No', 3, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(121, 'manito', 'JavaScript', 0, '24433981221122', 'Iframe change src with jquery', 'No', 11, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(122, 'manito', 'JavaScript', 0, '29381953318601', 'focus style to other div', 'No', 6, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(123, 'manito', 'CSS', 0, '155971041724805', 'Footer fixed', 'No', 2, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(124, 'manito', 'PHP', 0, '615780074206', 'Escape especias caracters', 'No', 3, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(125, 'manito', 'CSS', 0, '213252853815330', '2 funções ao mesmo tempo', 'No', 2, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(126, 'manito', 'PHP', 0, '27020272901974', 'Decode html especias caracters', 'No', 2, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(129, 'manito', 'PHP', 0, '298922591620040', 'Return from include file', 'No', 2, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(128, 'manito', 'JavaScript', 0, '7836716828608', 'remove vários ids com a mesma class', 'No', 2, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(130, 'manito', 'PHP', 0, '46572511829548', '$_POST fica sem acentos utf8', 'No', 2, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(131, 'manito', 'JS Load Events', 0, '24346214028613', 'JavaScript: Browser - Load Events', 'No', 6, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(134, 'manito', 'Jquery', 0, '12246200683764', 'File upload', 'No', 4, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(133, 'manito', 'JavaScript', 0, '26968163409002', 'ajaxSubmit is not a function', 'No', 8, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(135, 'manito', 'JS Load Events', 0, '29246445721521', 'Upload Multiple files 1 after 1', 'No', 3, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(138, 'manito', 'PHP', 0, '17570173010529', 'Upload de Arquivos', 'No', 1, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(137, 'manito', 'Jquery', 0, '18270543019679', 'Alterar a cor de uma certa row', 'No', 4, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(139, 'manito', 'PHP', 0, '55422262126495', 'Gerar hash de letras e numeros', 'No', 1, 1, '', 1, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(144, 'manito', 'teste', 2, 'Como Instalar a livraria:<br>\n\nVÃ¡ no disco onde instalou<br>\n\nAbra a pasta <b>Python34</b> de seguida a <b>Scripts</b><br>\n\nEx:: <b>C:\\Python34\\Scripts</b><br>\n\nDepois dentro da pasta mantanha o Shift Pressionado e clique no BotÃ£o direito do rato<br>\n\n<img src=\"/assets/img/shift.png\"><br>\n\nDepois digite o seguinte comando na consola:<br>\n\n<i><b>pip install pyMYSQL</b></i><br>\n\nSe aparecer o seguinte foi instaldo com sucesso<br>\n\n<img src=\"/assets/img/pymysql.png\"><br><br>\n\n<h4><b>Agora como utilizar o mysql no python</b></h4>\n\nLigar a Base Dados e Eliminar um campo<br>\n\n<pre class=\"prettyprint linenums:1\">import pymysql\n\nconn = pymysql.connect(host=\'localhost\', port=3306, user=\'root\', passwd=\'\', db=\'produtos\')\n\ncur = conn.cursor()\n\ncur.execute(\'DELETE FROM table WHERE id=exemplo\')\n\nconn.commit\n\ncur.close()\n\nconn.close()\n\n</pre>\n\nPara Inserir Produtos Basta:\n\n<pre class=\"prettyprint linenums:1\">cur.execute(\'\'\'INSERT into scrap (link, sku,preco,nosso_preco,difere,descricao)\n\n                                  values (%s,%s,%s,%s,%s,%s)\'\'\',\n\n                                  (link,sku,preco_net,preco,difere,descricao))                        \n\nconn.commit();\n\n</pre>\n\nPara Fazer Update na Base Dados:\n\n<pre class=\"prettyprint linenums:1\">import urllib.request\n\nimport re\n\nimport pymysql\n\nfrom bs4 import BeautifulSoup\n\nconn = pymysql.connect(host=\'localhost\', port=3306, user=\'root\', passwd=\'\', db=\'produtos\')\n\ncur = conn.cursor()\n\n \n\ncur.execute(\'\'\'UPDATE scrap SET link=%s, sku=%s,anomalia=%s,descricao=%s where id=%s \'\'\',\n\n                              (\"link 45\", \"sku 9999\",\"Fica igual\",\"descricao alterada\",\"1\"))\n\nconn.commit();\n\n</pre>', 'asdas', 'No', 0, 1, '#asdas,#lil', 0, 'manito', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(147, 'manito', 'teste', 4, '<p>asdasdadsada</p>', 'testing', 'No', 0, 1, '', 0, '', '2018-04-04 01:31:41', '2018-04-04 01:31:41');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `idade` date NOT NULL,
  `user` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `acess` int(11) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncate table before insert `users`
--

TRUNCATE TABLE `users`;
--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `senha`, `idade`, `user`, `acess`, `created_at`, `updated_at`) VALUES
(1, 'manito', 'lindo', '1998-05-25', 'manito', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'ricardo', 'china', '2017-03-14', 'ricardo', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `linguagem`
--
ALTER TABLE `linguagem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programacao`
--
ALTER TABLE `programacao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `linguagem`
--
ALTER TABLE `linguagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `programacao`
--
ALTER TABLE `programacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

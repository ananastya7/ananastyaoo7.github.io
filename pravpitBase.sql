-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 19 2018 г., 21:47
-- Версия сервера: 5.5.50
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pravpitBase`
--

-- --------------------------------------------------------

--
-- Структура таблицы `analizatory`
--

CREATE TABLE IF NOT EXISTS `analizatory` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(150) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `analizatory`
--

INSERT INTO `analizatory` (`id`, `name`, `text`) VALUES
(1, '', '\n№	Продукт	Вес, гр	Бел, гр	Жир, гр	Угл, гр	Кал, ккал\n 	Итого:	0.00	0.00	0.00	0.00	0.00\n 	Итого на 100 грамм:	100.00	 	 	 	 ');

-- --------------------------------------------------------

--
-- Структура таблицы `glavnaya`
--

CREATE TABLE IF NOT EXISTS `glavnaya` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(100) CHARACTER SET cp1251 NOT NULL,
  `text` text CHARACTER SET cp1251 NOT NULL,
  `text2` text CHARACTER SET cp1251 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `glavnaya`
--

INSERT INTO `glavnaya` (`id`, `name`, `text`, `text2`) VALUES
(1, 'Основы правильного питания', 'Совершенно не важно, хотите ли вы похудеть или просто нормализовать свой рацион, режим питания должен строиться на основе определенных правил. \n', '<div id="bigArticl"> <img src="/images/01.jpg" alt="Основы" title="Основы правильного питания"> <div class="clear"><br> </div> <p>Совершенно не важно, хотите ли вы похудеть или просто нормализовать свой рацион, режим питания должен строиться на основе определенных правил.  Перед тем, как вы решите кардинально изменить свое питание, примите во внимание следующие принципы:</p> <p> <ul type="square">   <li><strong>не мучайте</strong> себя изнурительными <strong>диетами</strong> и не приучайте организм к перманентному <strong>чувству голода</strong>.  При недостатке пищи и питательных веществ, организм не оздоравливается, а воспринимает данную ситуацию как сложный период,  запасаясь питательными веществами. Таким образом, похудение не наступает, вы можете наоборот набрать вес, так как энергия  будет «резервироваться», а не расходоваться;</li>    <li><strong>соблюдайте режим питания</strong>: ешьте несколько раз в день в одно и то же время,  не пропуская приемы пищи. Однако следите и за объемом порций он должен быть не большим, чтобы не возникло переедания;</li>  <li><strong>рацион</strong> должен быть <strong>сбалансированным и разнообразным</strong> – в вашем меню в обязательном порядке должны присутствовать сырые фрукты,  богатые микроэлементами и витаминами. Такие продукты не просто насыщают организм питательными веществами, но и способствуют нормализации  обменных процессов. Количественно овощи и фрукты должны преобладать в вашем рационе над мясными продуктами;</li>    <li><strong>соблюдайте питьевой режим</strong> – при отсутствии противопоказаний (заболевания почек и т.д.) выпивать следует не менее двух литров жидкости в сутки,  причем желательно чтобы это была негазированная минеральная вода или другие несладкие напитки;</li>    <li>старайтесь отдавать <strong>предпочтение легкой пище</strong>, но даже если вам очень захочется чего-то калорийного, не отказывайте себе в этом.  Помните, что калорийные блюда рекомендуется употреблять в первой половине дня, а вот после обеда стоит ограничиться минимальным количеством  жиров и углеводов;</li>    <li>отдавайте <strong>предпочтение блюдам вареным</strong> или приготовленным на пару, нежели жареной пище. В готовке используйте растительное масло; </li> <li>никогда <strong>не пропускайте завтрак</strong> – даже если вы встаете рано и не имеете никакого аппетита, ограничьтесь чем-то легким, ведь завтрак помогает организму  восстановиться после сна и нормализовать обменные процессы;</li>    <li><strong>правильно сочетайте продукты</strong> – при употреблении в пищу несочетаемых блюд в кишечнике  происходят процессы гниения и брожения, что всегда негативным образом сказывается на вашем самочувствии.  Постарайтесь сделать собственный рацион как можно проще. В нем должны преобладать натуральные,  несмешанные продукты, и пусть их будет не более пяти за прием пищи;</li>    <li><strong>следите</strong> не только за количеством порций, но и <strong>качеством потребляемых продуктов</strong>.  О правильном питании может идти речь лишь тогда, когда вы употребляете только свежие продукты.  Старайтесь не хранить долго приготовленные блюда, ведь даже в холодильнике в них неизбежно происходят процессы брожения, которые неблагоприятно  сказываются на полезных свойствах пищи;</li> <li>	и наконец, последнее правило здорового питания – <strong>от пищи необходимо получать удовольствие</strong>.  Это значит, что есть нужно то, что нравится, не торопясь, тщательно все пережевывая.  Желательно воздержаться во время еды от разговоров и чтения.</li></p> <p> Подытожив все вышесказанное, можно сделать простой вывод, что <strong>правильноe питание</strong> – это всегда <strong>свежая и разнообразная пища</strong>,  употребляемая <strong>регулярно в умеренных количествах</strong> и обязательно в удовольствие.</p> <div class="clear"><br> </div> <img src="/images/02.jpg" alt="Основы" title="Основы правильного питания">  </div>'),
(2, 'Регулярность питания', 'Говоря о правильном питании, особое внимание необходимо уделить его регулярности. Очень важно составить режим питания и не нарушать его. \n									По мнению большинства диетологов оптимальным считается четырехразовое питание..', ''),
(7, 'Вредные продукты для ПП', 'Конечно, полностью отказаться от употребления вредной, но часто вкусной пищи вряд ли возможно, однако ограничить ее все же необходимо. \n									Мы рекомендуем свести к минимуму употребление...', '');

-- --------------------------------------------------------

--
-- Структура таблицы `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `id_history` int(10) unsigned NOT NULL,
  `name` varchar(150) NOT NULL,
  `text` varchar(255) NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id_category` tinyint(3) unsigned NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id_category`, `name`) VALUES
(1, 'Главная1'),
(2, 'Анализаторы1'),
(3, 'Статьи1'),
(4, 'Истории_похудения'),
(5, 'Витамины_и_добавки'),
(6, 'Диеты1'),
(7, 'Отзывы1');

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(10) NOT NULL,
  `author` varchar(30) CHARACTER SET cp1251 NOT NULL,
  `message` text CHARACTER SET cp1251 NOT NULL,
  `date` varchar(25) CHARACTER SET cp1251 NOT NULL,
  `image` varchar(255) CHARACTER SET cp1251 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `author`, `message`, `date`, `image`) VALUES
(39, 'Снежана Петрова', 'Анализатор предназначен для анализа калорийности рецептов. В нем удобное окно ввода сразу всех ингридиентов рецепта, а также имеется возможность ввода отдельных продуктов.', '19-05-2018 в 14:53:02', 'images/1.jpg'),
(40, 'вапарпр', 'рполь', '19-05-2018 в 14:59:47', ''),
(41, 'Снежана Петрова', 'Анализатор предназначен для анализа калорийности рецептов. В нем удобное окно ввода сразу всех ингридиентов рецепта, а также имеется возможность ввода отдельных продуктов', '19-05-2018 в 16:24:41', ''),
(42, 'Снежана Петрова', 'Анализатор предназначен для анализа калорийности рецептов. В нем удобное окно ввода сразу всех ингридиентов рецепта, а также имеется возможность ввода отдельных продуктов', '19-05-2018 в 16:24:41', ''),
(43, 'sfgs', 'sgtd', '19-05-2018 в 16:26:10', ''),
(44, 'sfgs', 'sgtd', '19-05-2018 в 16:26:13', ''),
(45, 'sfrs', 'fsgf', '19-05-2018 в 16:26:35', ''),
(46, 'redfed', 'dteet', '19-05-2018 в 16:27:21', ''),
(47, 'redfed', 'dteet', '19-05-2018 в 16:27:21', ''),
(48, 'esrty', 'erty', '19-05-2018 в 16:28:37', ''),
(49, 'esrty', 'erty', '19-05-2018 в 16:28:37', ''),
(50, 'dasfe', 'sdfgh', '19-05-2018 в 16:29:14', ''),
(51, 'dasfe', 'sdfgh', '19-05-2018 в 16:29:14', ''),
(52, 'sdfgr', 'fegrht', '19-05-2018 в 16:30:19', ''),
(53, 'dwfegbhn', 'dfrgn', '19-05-2018 в 16:31:11', ''),
(54, 'sadffd', 'dasf', '19-05-2018 в 16:32:56', ''),
(55, 'sadffd', 'dasf', '19-05-2018 в 16:32:56', ''),
(56, 'asdfvb', 'sadf', '19-05-2018 в 16:33:18', ''),
(57, 'tryghj', 'tghj', '19-05-2018 в 16:34:22', ''),
(58, 'fgh', 'ghj', '19-05-2018 в 16:37:21', ''),
(59, 'xc ', 'xc v', '19-05-2018 в 16:38:39', ''),
(60, 'xzc v', 'xc', '19-05-2018 в 16:38:46', ''),
(61, 'sxdc', 'sdcv', '19-05-2018 в 16:39:16', ''),
(62, 'rftght', 'rftgyhj', '19-05-2018 в 16:41:03', ''),
(63, 'ghj', 'tgyhjk', '19-05-2018 в 16:41:10', ''),
(64, 'tyjk', 'tyujk', '19-05-2018 в 16:41:43', ''),
(65, 'fghjk', 'ghjkl', '19-05-2018 в 16:44:19', ''),
(66, 'dfgrhj', 'dfg', '19-05-2018 в 16:44:35', ''),
(67, 'erftg', 'sdrftgh', '19-05-2018 в 16:44:57', ''),
(68, 'dfghj', 'dfghj', '19-05-2018 в 16:49:45', ''),
(69, 'dfghj', 'dfghj', '19-05-2018 в 16:49:48', ''),
(70, 'dfghj', 'fvghjk', '19-05-2018 в 16:49:57', ''),
(71, 'zxdfgh', 'dfghj', '19-05-2018 в 16:50:44', ''),
(72, 'JHGJB', 'KUJGHFGJBDFEGEHTR\nFGHUJIKFEGHJHGFDFGH\nDFGHYUJIRTYUIKOL', '19-05-2018 в 17:06:54', ''),
(73, 'IJUHGKJHG', 'HJK', '19-05-2018 в 17:08:12', ''),
(74, 'SWDFTGYHUJIERW', 'WERTYUI', '19-05-2018 в 17:08:58', ''),
(75, 'SDRFTGYU', 'ERTYU', '19-05-2018 в 17:09:21', ''),
(76, 'ERTYU', 'ERTY', '19-05-2018 в 17:10:21', ''),
(77, 'ASDFTY', 'WERTYU', '19-05-2018 в 17:10:38', ''),
(78, 'ASDFTY', 'WERTYU', '19-05-2018 в 17:11:01', ''),
(79, 'ERTY', 'RTYU', '19-05-2018 в 17:11:13', ''),
(80, 'WERTYU', 'ERTYU', '19-05-2018 в 17:12:04', ''),
(81, 'SERTY', 'WERTY', '19-05-2018 в 17:12:54', ''),
(82, 'Снежана Петрова', 'Анализатор предназначен для анализа калорийности рецептов. В нем удобное окно ввода сразу всех ингридиентов рецепта, а также имеется возможность ввода отдельных продуктов', '19-05-2018 в 17:13:38', '');

-- --------------------------------------------------------

--
-- Структура таблицы `podvid_deyat`
--

CREATE TABLE IF NOT EXISTS `podvid_deyat` (
  `id_podvid` int(10) unsigned NOT NULL,
  `name` varchar(150) NOT NULL,
  `id_vid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id_prod` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `kkal100` int(11) NOT NULL,
  `belki` int(11) NOT NULL,
  `jiry` int(11) NOT NULL,
  `yglevody` int(11) NOT NULL,
  `id_analiz` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `staty`
--

CREATE TABLE IF NOT EXISTS `staty` (
  `id_staty` int(10) unsigned NOT NULL,
  `name` varchar(150) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `password`) VALUES
(2, 'Vlad025', 'qwerty'),
(4, 'Dima@bk.ru', '5897456'),
(7, 'qwerty', 'qwerty');

-- --------------------------------------------------------

--
-- Структура таблицы `vid_deyat`
--

CREATE TABLE IF NOT EXISTS `vid_deyat` (
  `id_vid` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `id_analiz` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `vitaminy`
--

CREATE TABLE IF NOT EXISTS `vitaminy` (
  `id_vitamin` int(10) unsigned NOT NULL,
  `name` varchar(150) NOT NULL,
  `text` varchar(255) NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `analizatory`
--
ALTER TABLE `analizatory`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `glavnaya`
--
ALTER TABLE `glavnaya`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_category`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `podvid_deyat`
--
ALTER TABLE `podvid_deyat`
  ADD PRIMARY KEY (`id_podvid`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_prod`);

--
-- Индексы таблицы `staty`
--
ALTER TABLE `staty`
  ADD PRIMARY KEY (`id_staty`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Индексы таблицы `vid_deyat`
--
ALTER TABLE `vid_deyat`
  ADD PRIMARY KEY (`id_vid`);

--
-- Индексы таблицы `vitaminy`
--
ALTER TABLE `vitaminy`
  ADD PRIMARY KEY (`id_vitamin`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `analizatory`
--
ALTER TABLE `analizatory`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `glavnaya`
--
ALTER TABLE `glavnaya`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `history`
--
ALTER TABLE `history`
  MODIFY `id_history` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id_category` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT для таблицы `podvid_deyat`
--
ALTER TABLE `podvid_deyat`
  MODIFY `id_podvid` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id_prod` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `staty`
--
ALTER TABLE `staty`
  MODIFY `id_staty` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `vid_deyat`
--
ALTER TABLE `vid_deyat`
  MODIFY `id_vid` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `vitaminy`
--
ALTER TABLE `vitaminy`
  MODIFY `id_vitamin` int(10) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

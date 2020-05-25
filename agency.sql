-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 08 2020 г., 09:09
-- Версия сервера: 10.1.38-MariaDB
-- Версия PHP: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `agency`
--

-- --------------------------------------------------------

--
-- Структура таблицы `arenda_kom`
--

CREATE TABLE `arenda_kom` (
  `id` int(11) NOT NULL,
  `uid` varchar(1500) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `photo1` varchar(400) NOT NULL,
  `photo2` varchar(400) NOT NULL,
  `photo3` varchar(500) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` varchar(200) NOT NULL,
  `del` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `arenda_kom`
--

INSERT INTO `arenda_kom` (`id`, `uid`, `name`, `photo`, `photo1`, `photo2`, `photo3`, `description`, `price`, `del`) VALUES
(8, '323fe74b3e84b9928611053719626cb9', 'as23', 'images/person_3.jpg', 'images/image_4.jpg', 'images/author-1.jpg', 'images/image_7.jpg', '345t', '45678', 1),
(9, 'f3ebf05ae92b412c9499d66ed78e79c9', 'test', 'images/image_2.jpg', 'images/image_3.jpg', 'images/image_4.jpg', 'images/image_5.jpg', 'test', '23456', 1),
(10, 'e94d411b285cd2106f33b5c267f92091', 'Современный апартаменты класса люкс 1 + 1, 2 + 1, 3 + 1 на выбор.', 'images/23.jpg', 'images/28.jpg', 'images/37.jpg', 'images/39.jpg', 'Это великолепный объект для отдыха, жизни и инвестиций.  Все апартаменты построены из высококачественных материалов и хорошо спланированы.  Проект состоит из 2 блоков, А и В два отдельностоящих здания.  A Блок 2 магазина, 11 квартир 1 + 1- 65 м2 и 2 +1 — 75 м2 квартиры на выбор.  B Блок 2 магазина 11 квартир 2 + 1 — 79 м2 и 3 + 1 — 98 м2 квартиры на выбор.  В проекте также есть зона отдыха с видом на море и горы, бассейн на территории, площадка для отдыха вокруг бассейна, мини-маркет, кафе, место для барбекю, фитнес-центр.  Титул: обменный.  Готовность: декабрь 2020.   Электрический водонагреватель  Парковка  Стеклянные перила  Двойное стекло ПВХ / Алюминиевые окна  Подоконники из натурального мрамора  Различные варианты цвета в керамике и дереве  Инфраструктура кондиционирования воздуха  Шкаф-гардероб  Центральный Интернет и Центральные Спутниковые Системы  Лифт  Видеодомофон и центральная камера  Кухня High Gloss  Бассейн', '1000', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `kom_predl`
--

CREATE TABLE `kom_predl` (
  `id` int(11) NOT NULL,
  `uid` varchar(1500) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `photo1` varchar(500) NOT NULL,
  `photo2` varchar(500) NOT NULL,
  `photo3` varchar(500) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` varchar(50) NOT NULL,
  `del` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `kom_predl`
--

INSERT INTO `kom_predl` (`id`, `uid`, `name`, `photo`, `photo1`, `photo2`, `photo3`, `description`, `price`, `del`) VALUES
(26, 'a049a229280d699fa5af6c1e15f4e0d1', 'yugqw', 'images/person_2.jpg', 'images/person_3.jpg', 'images/image_5.jpg', 'images/image_8.jpg', 'yugyu', '234', 1),
(27, 'cc2b05211485172df01b72e21566b2ec', 'Северный Кипр', 'images/28.jpg', 'images/25.jpg', 'images/3.jpg', 'images/35.jpg', 'Представляем Вашему вниманию новый комплекс класса люкс, где представлены 68 объектов: квартиры 1+1, 2+1, 3+1, а также 3 спальные виллы, которые прекрасно подойдут для постоянного проживания, а так же как инвестиция!  Инфраструктура:  Кафе   Охрана   Открытый и крытый бассейны  Детский бассейн  Тренажерный зал  Йога центр  Большая терраса на крыше для общего пользования с баром ', '120', 1),
(28, '3b42cdf236eff5fa55b87f5129ee04f5', 'Северный Кипр', 'images/28.jpg', 'images/25.jpg', 'images/3.jpg', 'images/35.jpg', 'Представляем Вашему вниманию новый комплекс класса люкс, где представлены 68 объектов: квартиры 1+1, 2+1, 3+1, а также 3 спальные виллы, которые прекрасно подойдут для постоянного проживания, а так же как инвестиция!  Инфраструктура:  Кафе   Охрана   Открытый и крытый бассейны  Детский бассейн  Тренажерный зал  Йога центр  Большая терраса на крыше для общего пользования с баром ', '120', 1),
(29, '704b0cf2a13ff19dac8fd3900bc15df1', 'Просторные апартаменты 3+1', 'images/25.jpg', 'images/28.jpg', 'images/27.jpg', 'images/35.jpg', 'Современный апартаменты класса люкс 1 + 1, 2 + 1, 3 + 1 на выбор.  Это великолепный объект для отдыха, жизни и инвестиций.  Все апартаменты построены из высококачественных материалов и хорошо спланированы.  Проект состоит из 2 блоков, А и В два отдельностоящих здания.  A Блок 2 магазина, 11 квартир 1 + 1- 65 м2 и 2 +1 — 75 м2 квартиры на выбор.  B Блок 2 магазина 11 квартир 2 + 1 — 79 м2 и 3 + 1 — 98 м2 квартиры на выбор.  В проекте также есть зона отдыха с видом на море и горы, бассейн на территории, площадка для отдыха вокруг бассейна, мини-маркет, кафе, место для барбекю, фитнес-центр.  Титул: обменный.  Готовность: декабрь 2020.   Электрический водонагреватель  Парковка  Стеклянные перила  Двойное стекло ПВХ / Алюминиевые окна  Подоконники из натурального мрамора  Различные варианты цвета в керамике и дереве  Инфраструктура кондиционирования воздуха  Шкаф-гардероб  Центральный Интернет и Центральные Спутниковые Системы  Лифт  Видеодомофон и центральная камера  Кухня High Gloss  Бас', '5000', 1),
(30, 'a2137961a3343b821a2b9ef15dc2c742', 'test', 'images/gsixth.jpg', 'images/gsecond.jpg', '0', '0', 'testim', '50', 1),
(31, '14832143520eb509dc45bd8e9fff5c59', 'asd', 'images/26.jpg', '0', '0', '0', 'asd', '333', 1),
(32, '448df7145c27cdf51e8f45f5d6b4c7b2', 'new', 'images/27.jpg', '0', '0', '0', 'description\r\n', '150000', 0),
(33, 'a885730d9b8b7cd093bd36bcf39ef964', 'asdasdasd', 'images/41.jpg', '0', '0', '0', 'asdasdasdasiudjnaskjdnkasjdnkajsndkjasdnaksdnkasn akjsnd askj nasd\' nas\'d n\'\'\'\'', '324', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `sale_jil`
--

CREATE TABLE `sale_jil` (
  `id` int(11) NOT NULL,
  `uid` varchar(1500) NOT NULL,
  `name` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `photo1` varchar(500) NOT NULL,
  `photo2` varchar(500) NOT NULL,
  `photo3` varchar(500) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` varchar(200) NOT NULL,
  `del` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sale_jil`
--

INSERT INTO `sale_jil` (`id`, `uid`, `name`, `photo`, `photo1`, `photo2`, `photo3`, `description`, `price`, `del`) VALUES
(10, '5b40fd80f535304a154ca3f9e9b55405', 'asd', 'images/person_2.jpg', 'images/be.jpg', 'images/image_7.jpg', 'images/image_5.jpg', 'jkasnd', '23456', 1),
(11, '847a606130f171d85c50606139e42e21', 'Дом', 'images/17.jpg', 'images/20.jpg', 'images/10.jpg', 'images/38.jpg', '5 кв/м тртртртрт', '50350', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `pwd`, `admin`) VALUES
(1, 'iig.kz', 'admin', 1),
(2, '1', '1', 1),
(3, 'newnew', 'asdfghj', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `arenda_kom`
--
ALTER TABLE `arenda_kom`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `kom_predl`
--
ALTER TABLE `kom_predl`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sale_jil`
--
ALTER TABLE `sale_jil`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `arenda_kom`
--
ALTER TABLE `arenda_kom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `kom_predl`
--
ALTER TABLE `kom_predl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT для таблицы `sale_jil`
--
ALTER TABLE `sale_jil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

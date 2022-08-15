CREATE TABLE IF NOT EXISTS `project` (
  `id_project` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `photo` varchar(100) NOT NULL  
);

INSERT INTO `project` (`id_project`, `name`, `description`, `photo`) VALUES
(1, '«Французька весна»', 'З 18 травня до 19 липня залу мистецтва Франції доповнять щойно відреставровані пейзажі французьких художників Жана Уеля, Луї Еме Жапі, Жана-Батіста Пільмана та Франсуа Фламенгом.','Програма.jpeg'),
(2, 'Спокуси Ієронімуса Босха ІІ', '<p>Проєкт буде представлено з 5 березня по 30 квітня 2021 року. Тривалий проєкт з дослідження і реставрації триптиха «Спокуса Святого Антонія» завершено! Твір повертається після п’ятирічної паузи у відновленому вигляді.</p>','boskh-kaver.jpg'),
(3, 'Музейні квести "Шукачі в музеї"', '<p>Що таке квест «Шукачі»? Це кілька нескладних запитань, які зроблять ваше знайомство з творами мистецтва активним та навіть азартним. Це гра на уважність і спостережливість, вміння помічати деталі та впізнавати символи.</p>','квест.jpg'),
(4, 'Тимчасова виставка (гостьова)','',''),
(5, 'Тимчасова виставка (з фондів музею)','',''),
(6, 'Одна постійна експозиція (Західноєвропейська або Азійська експозиції)','',''),
(7, 'Обидві постійні експозиції (Європейська + Азійська експозиції)','','');

CREATE TABLE IF NOT EXISTS `collection` (
  `id_exhibit` int(11) NOT NULL,
  `id_collection` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL  
);

INSERT INTO `collection` (`id_exhibit`, `id_collection`, `name`, `photo`) VALUES
(1, 0, 'Таріль', 'Таріль.jpg'),
(2, 0, 'Фрагмент шовкової тканини','тканина.jpg'),
(3, 0, 'Станемо за чоловіків!','плакат.jpg'),
(4, 0, 'Фігурна посудина. Культура мочіка','посудина.jpg'),
(5, 1, 'Акваріум', 'Акваріум.jpg'),
(6, 1, 'Море біля Міура в провінції Сагамі','sagami.jpg'),
(7, 1, 'Аркуш з Фармакології Діоскорида','paper.jpg'),
(8, 1, 'Ґваньїнь подателька дітей','podelka.jpg'),
(9, 0, 'Свята Маргарита','Маргарита.jpg'),
(10, 1, 'Річка Іде-но Тамагава у провінції Ямасіро','river.jpg'),
(11, 0, 'Гобелен-мільфльор із зображенням замку','Гобелен.jpg'),
(12, 1, 'Ваза хулу','ваза.jpg'),
(13, 1, 'Лев та левиця','лев.jpg'),
(14, 0, 'Натюрморт із млинком для шоколаду','Натюрморт.jpg'),
(15, 1, 'Гнівне втілення бодхісатви','wisdom.jpg'),
(16, 0, 'Серія «Різноманітні сюжети смерті»','серия.jpg');

CREATE TABLE IF NOT EXISTS `collection_name` (
  `id_collection` int(11) NOT NULL,
  `name_collection` varchar(100) NOT NULL
);

INSERT INTO `collection_name` (`id_collection`, `name_collection`) VALUES
(0, 'Дім Ханенків'),
(1, 'Дім Сахновських');

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (id_user)
);

CREATE TABLE IF NOT EXISTS `coments` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `coment` varchar(100) NOT NULL,
  PRIMARY KEY (id_user)
);


CREATE TABLE IF NOT EXISTS `benefits` (
  `id_benefits` int(11) NOT NULL,
  `name_benefits` varchar(100) NOT NULL
);

INSERT INTO `benefits` (`id_benefits`, `name_benefits`) VALUES
(0, 'особи з інвалідністю 1 групи'),
(1, 'ветерани війни (учасники бойових дій, особи з інвалідністю внаслідок війни, учасники війни)'),
(2, 'особи, які отримали статус постраждалого учасника Революції Гідності'),
(3, 'особи, звільнені з військової служби, які стали особами з інвалідністю під час проходження військової служби'),
(4, 'члени сім ї загиблого (померлого) ветерана війни'),
(5, 'реабілітовані особи, які стали особами з інвалідністю внаслідок репресій або є пенсіонерами'),
(6, 'особи, які постраждали внаслідок Чорнобильської катастрофи 1 та 2 категорій'),
(7, 'діти-сироти та діти, позбавлені батьківського піклування'),
(8, 'діти дошкільного віку'),
(9, 'здобувачі вищої освіти відповідно фахового напряму');

CREATE TABLE IF NOT EXISTS `status` (
  `id_status` int(11) NOT NULL,
  `age` varchar(100) NOT NULL
);

INSERT INTO `status` (`id_status`, `age`) VALUES
(0, 'дорослий'),
(1, 'студент'),
(2, 'пенсіонер чи школяр');



CREATE TABLE IF NOT EXISTS `orders` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `names` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_project` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `id_status` varchar(100) NOT NULL,
  `id_benefits` varchar(100) NOT NULL,
  `coments` varchar(100) NOT NULL,
  PRIMARY KEY (id_user)
);
CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL UNIQUE,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY ('id')
);
CREATE TABLE `persoon` (
  `id` int(11) NOT NULL,
  `voornaam` varchar(255) NOT NULL,
  `tussenvoegsel` varchar(255) NOT NULL,
  `achternaam` int(11) NOT NULL,
  `gebruikersnaam` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  PRIMARY KEY ('id')
  FOREIGN KEY ('account_id') REFERENCES account('id')
);

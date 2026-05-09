CREATE TABLE IF NOT EXISTS `felhasznalok` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `csaladi_nev` varchar(45) NOT NULL,
  `uto_nev` varchar(45) NOT NULL,
  `bejelentkezes` varchar(12) NOT NULL,
  `jelszo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `bejelentkezes_UNIQUE` (`bejelentkezes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Minta adat (a jelszó a 'teszt' szó titkosítva)
INSERT INTO `felhasznalok` (`csaladi_nev`, `uto_nev`, `bejelentkezes`, `jelszo`) VALUES
('Teszt', 'Elek', 'admin', '$2y$10$O6vL1Kk8eD9Kz9vLz8eD9O6vL1Kk8eD9Kz9vLz8eD9O6vL1Kk8eD9');

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `idPersonne` int(5) PRIMARY KEY AUTO_INCREMENT,
  `nom` varchar(45) ,
  `prenom` varchar(45) ,
  `dtn` date, 
  `sexe` int(1)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` VALUES
(1, 'RAKOTO', 'Jean', '1999-02-02', 0),
(2, 'ANDRIA', 'Malala', '2000-03-15', 1),
(3, 'MBOLA', 'Tiana', '2000-12-23', 1);

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE `login` (
  `idLogin` int(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `idPersonne` int(5) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mdp` varchar(45) DEFAULT NULL,
  FOREIGN KEY(idPersonne) REFERENCES personne(idPersonne)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` VALUES
(1, 1, 'jean@gmail.com', '0000'),
(2, 2, 'malala@gmail.com', '0000'),
(3, 3, 'tiana@gmail.com', '0000');

-- --------------------------------------------------------

--
-- Structure de la table `objet`
--

CREATE TABLE `categorie` (
  `idCategorie` int(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` VALUES
(1, 'electronique'),
(2, 'vehicule'),
(3, 'fourniture'),
(4, 'vetement'),
(5, 'accessoire');

-- --------------------------------------------------------

--
-- Structure de la table `objet`
--

CREATE TABLE `objet` (
  `idObjet` int(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `idPersonne` int(5) NOT NULL,
  `idCategorie` int(5) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `prix` int(4) DEFAULT NULL,
  `description` text DEFAULT NULL,
  FOREIGN KEY(idPersonne) REFERENCES personne(idPersonne),
  FOREIGN KEY(idCategorie) REFERENCES categorie(idCategorie)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `objet`
--

INSERT INTO `objet` VALUES
(1, 2, 1, 'Shoes', 'item1.jpg', 10, 'Stan smith'),
(2, 3, 2, 'Gourd', 'item2.jpg', 15, 'New item'),
(3, 1, 2, 'Lamp', 'item3.jpg', 5, 'Very economic'),
(4, 2, 3, 'Cap', 'item4.jpg', 8, 'Foreign Cap'),
(5, 3, 3, 'Watch', 'item5.jpg', 20, 'Great condition'),
(6, 1, 4, 'Shoes', 'item6.jpg', 15, 'New Converse'),
(7, 2, 4, 'Headphone', 'item7.jpg', 25, 'Great sound'),
(8, 1, 4, 'Shoes', 'item8.jpg', 10, 'Second-hand'),
(9, 2, 4, 'Sweat', 'item9.jpg', 13, 'Dark theme'),
(10, 3, 4, 'Sweat', 'item10.jpg', 5, 'New tended'),
(11, 1, 5, 'Chair', 'item11.jpg', 5, 'Snug Chair'),
(12, 2, 5, 'Chair', 'item12.jpg', 5, 'Good item'),
(13, 3, 1, 'Vaporizer', 'item13.jpg', 15, 'Firsthand'),
(14, 3, 1, 'Glasses', 'item14.jpg', 5, 'Actual Fashion');
-- --------------------------------------------------------

--
-- Structure de la table `echange`
--

CREATE TABLE `echange` (
  `idEchange` int(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `idPersonne1` int(5) NOT NULL,
  `idPersonne2` int(5) NOT NULL,
  `idObjet1` int(5) NOT NULL,
  `idObjet2` int(5) NOT NULL,
  `dateEchange` datetime,
  `dateAcceptation` datetime default null,
  FOREIGN KEY(idPersonne1) REFERENCES personne(idPersonne),
  FOREIGN KEY(idPersonne2) REFERENCES personne(idPersonne),
  FOREIGN KEY(idObjet1) REFERENCES objet(idObjet),
  FOREIGN KEY(idObjet2) REFERENCES objet(idObjet)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `echange`
--

delete from echange;
insert into echange values (default, 2, 1, 1, 3, '2023-1-24 12:02:00', default);
insert into echange values (default, 3, 1, 2, 3, '2023-1-24 12:02:00', default);
insert into echange values (default, 2, 1, 4, 3, '2023-1-24 12:02:00', default);
insert into echange values (default, 2, 1, 7, 3, '2023-1-24 12:02:00', default);


select echange.*, objet1.photo as photo1, objet2.photo  as photo2
    from echange 
    join objet as objet1 on echange.idObjet1 = objet1.idObjet 
    join objet as objet2 on echange.idObjet2 = objet2.idObjet
    where echange.dateAcceptation is null
;
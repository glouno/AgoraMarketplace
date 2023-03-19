-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le : mar. 14 mars 2023 à 12:48
-- Version du serveur : 8.0.31
-- Version de PHP : 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ag`
--

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `prix` float NOT NULL,
  start_price DECIMAL(10,2) NOT NULL,
  current_bid DECIMAL(10,2) NOT NULL,
  end_time DATETIME NOT NULL,
  `types` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `descriptions` varchar(10000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `type_prix` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `image` varchar(1000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `prix`, `types`, `descriptions`, `type_prix`, `image`) VALUES
(1, 'bmw x1', 40000, 'voitures', 'The versatile BMW X1 Sports Activity Vehicle® packs a lot of power and personality in a compact body – including these features, new for 2023.', 'Article haut de gamm', 'https://www.gannett-cdn.com/-mm-/95a32d9234aee4e2afccf4605879f27172e8c589/c=860-987-4083-2808/local/-/media/2016/10/06/USATODAY/USATODAY/636113601408319970-x3.jpg?width=3200&height=1809&fit=crop&format=pjpg&auto=webp'),
(2, 'benz c', 50000, 'voitures', 'benz', 'Article haut de gamm', 'https://th.bing.com/th/id/OIP.ojLS3epQ4kT0Pb6VXuPMOAHaE8?w=228&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7'),
(3, 'Table Basse Plateau relevable ELEA avec Coffre Bois Noir et façon hêtre', 84.99, 'ameublement', '60P x 110l x 45H centimètres,Noir,Rectangulaire,Bois', 'Article régulier', 'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/41RwX0kKRAL._AC_SX679_.jpg'),
(4, 'Armoire bateau vintage rare, asiatique coromandel, décoration maritime', 2778.55, 'ameublement', 'Marque:Générique,Matériau:Bois, Caractéristique spéciale:Solide,Type de fixation:Montage au sol, Style:Asiatique,Type de chambre:Salon,Type de finition: Pein,Nombre de portes:1,Nombre étagères: 3', 'Article rare', 'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/71Ndflh0vsL._AC_SL1500_.jpg'),
(5, 'Meuble TV ELI Blanc Portes Effet béton ', 56.99, 'ameublement', 'Marque:IDMarket, Couleur:Blanc,Matériau:Bois ingénierie,Usages recommandés pour le produit 	Outils,Livres, Appareils multimédias, Télévision,Dimensions du produit:40P x 113l x 31.5H centimètres, Caractéristique spéciale:Stable,Type de fixation:Montage au sol', 'Article régulier', 'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/415UI10lKML._AC_SX679_.jpg'),
(6, ' Meuble de Rangement Suspendu pour Salle de Bains', 62.99, 'ameublement', 'VASAGLE Meuble Mural pour Salle de Bains, Armoire à Pharmacie avec Étagère Réglable, Double Porte et Étagère Ouverte, 20 x 60 x 70 cm, Blanc BBC27WT ', 'Article régulier', 'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/612US-JyYaL._AC_SL1500_.jpg'),
(7, 'ENVERGURE grand canapé 3 places - base bois', 5620, 'ameublement', 'L. 240 x H. 82 x P. 101 cm,Avec ses coloris raffinés de miel et de brun, la silhouette basse et flottante du canapé Envergure s_appuie sur une plateforme en bois couleur châtaigne.Son cuir fin et lisse ajoute à son élégance tout comme ses lignes pures qui en font un modèle sobre et chaleureux', 'Article haut de gamm', 'https://media.roche-bobois.com/is/image/rochebobois/Envergure_C3p_base_bois_pers1?wid=2000&fmt=pjpeg&resMode=sharp2&qlt=80'),
(8, 'TWINGOequilibre SCe 65', 17050, 'voitures', 'Bleu Dragée, Sellerie textile Noir / bandeau Gris,Nombre de portes:5,Nombre de places:4,Réservoir à carburant (litres):35,Puissance maxi kW (ch):48(65)', 'Article régulier', 'https://www.girost-autos.fr/storage/cars/40166/LF30.qop.jpg'),
(9, 'CITOËN C3 Berline', 20170, 'voitures', ' 5 portes, Shine,essence, Manuelle , 61 KW,Rétroviseurs extérieurs rabattables électriquement,Toit bi-ton Noir Perla Nera,Vitres et lunette arrière surteintées,Jantes alliage 16\" MATRIX Diamantées', 'Article régulier', 'https://visuel3d-secure.citroen.com/V3DImage.ashx?client=SOLVCG&ratio=1&format=png&quality=85&width=1043&height=472&back=0&view=001&version=1CB6A5NM9JB0A060&color=0MM00NEU&trim=0P230RFR&mkt=FR'),
(10, 'PHANTOM CORSAIR (1938)', 300000, 'voitures', 'Elle est équipée d’un moteur V8 Cord d’origine et développe 192 ch. Présentée à l’occasion du New York World’s Fair de 1939', 'Article rare', 'https://www.classicexpert.fr/uploads/images/fb3-1.png'),
(11, 'Les plantes insectivores', 2000, 'livres', 'Auteur:Charles DARWIN,C. Reinwald & Cie , Paris 1877, 14,5x23,5cm, reliure de l_éditeur', 'Article rare', 'https://i.ebayimg.com/images/g/DHAAAOSw2Xpj2~2~/s-l1600.jpg'),
(12, 'rue des rebuts', 2480, 'livres', ' Auteurs:jacques tardi,Format: Cuir ', 'Article haut de gamm', 'https://fr.shopping.rakuten.com/photo/rue-des-rebuts-edition-de-luxe-relie-plein-cuir-tire-a-100-exemplaires-accompagne-d-un-dessin-original-de-tardi-specialement-realise-a-l-intention-du-souscripteur-de-jacques-tardi-1074746726_L.jpg'),
(13, 'Introduction to Robotics, Global Edition (English Edition)', 49.1, 'livres', 'de John J. Craig (Auteur) Format : Format Kindle', 'Article régulier', 'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/41oTKGmFAhS.jpg'),
(14, 'Big Data et Machine Learning - 3e éd. - Les concepts et les outils de la data science: Les concepts ', 29.9, 'livres', ' Broché – Livre grand format, 14 août 2019, de Pirmin Lemberger (Auteur), Marc Batty (Auteur), Médéric Morel (Auteur), Jean-Luc Raffaëlli (Auteur) ', 'Article régulier', 'https://d1b14unh5d6w7g.cloudfront.net/2100790374.01.S001.LXXXXXXX.jpg?Expires=1678713023&Signature=DqeejiBmh4CxN1aHWM0i37PvxrFqiRYe~0NKE4zirxzsUkZ86C7X457JVd6h3toOsQlymGQreb8Uw5flMXn8BhdSLduFmJRoUeO9jHPT4jpUp-NJ7sWujEyRxay2ttMY3aWeVjwRfrUEOiXN8MFmE57nDR6R28~7Owj0BZUSRJ0_&Key-Pair-Id=APKAIUO27P366FGALUMQ'),
(15, 'Python pour le data scientist - 2e éd.: Des bases du langage au machine learning', 29.9, 'livres', 'Broché – Livre grand format, 3 mars 2021 de Emmanuel Jakobowicz (Auteur)', 'Article régulier', 'https://d1b14unh5d6w7g.cloudfront.net/2100770756.01.S001.LXXXXXXX.jpg?Expires=1678713267&Signature=HzwJ2HovYeJ~2R2AFuSGrO5GM9d1p7Le-5M8OY4T4tvTEWMJBbtooVOOrixYHDJv1bfkTTtKTVenFLC1-sg7rXM~KFaNgNoCceuJccrp~qlq9KtEYfKHjdlcjJKlRJ4tRMm8Y9XtnXTwIbWEJtMnJm-t8fEw5VhXwEcSqYMTWXQ_&Key-Pair-Id=APKAIUO27P366FGALUMQ'),
(16, 'Apple iPhone 14 Pro Max', 1327, 'informatique', 'Système d_exploitation: IOS 16, Technologie cellulaire: 5G, Capacité de stockage de la mémoire 	128 Go, Couleur: Or,Taille de l_écran: 6.7 Pouces, Technologie réseau sans fil:GSM, CDMA, LTE, Type de connecteur:Lightning', 'Article haut de gamm', 'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/71T5NVOgbpL._AC_SL1500_.jpg'),
(17, 'Apple 2023 MacBook Pro', 2984, 'informatique', 'avec Puce M2 Pro avec CPU 12 cœurs et GPU 19 cœurs : Écran Liquid Retina XDR 14 Pouces, 16 Go de Mémoire unifiée, SSD de 1 to ; Gris sidéral', 'Article haut de gamm', 'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/61lYIKPieDL._AC_SL1500_.jpg'),
(18, 'Logitech G PRO X Casque Gamer Over-Ear', 92.9, 'informatique', 'avec Micro BLUE VO!CE, DTS Headphone:X 7.1, Transducteurs PRO-G 50mm, Son Surround 7.1 pour Gaming Esport, PC/PS/Xbox/Nintendo Switch - Noir ', 'Article régulier', 'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/51y9o94EWkL._AC_SL1000_.jpg'),
(19, 'Microsoft – Modern Mobile Mouse ', 24.64, 'informatique', 'Souris Bluetooth pour PC, ordinateurs portables, tablettes compatible Windows, macOS, Chrome OS (fine, légère, transportable) – Noire (KTF-00002) ', 'Article régulier', 'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/41nHNuja6AL._AC_SL1500_.jpg'),
(20, 'Imprimante 4 en 1', 184.99, 'informatique', 'Impression, copie, numérisation et fax,A4,Connectivité: USB 2.0 + WIFI,Mobiles compatible: Apple & Android,Cartouches d_encres fournies:500 pages noir et blanc 500 pages couleur, Vitesse d_impression: jusqu’à 20 ppm en noir et 19 ppm en couleur', 'Article régulier', 'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/416SuIQbW+L._AC_.jpg'),
(21, 'Bosch SMI4HAB48E - Série 4, Lave-vaisselle', 609, 'electromenager', 'encastrable - 60cm - Home Connect - 13 couverts - Moteur EcoSilence - Noir', 'Article régulier', 'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/617+6MoPNrL._AC_SL1500_.jpg'),
(22, 'Bestron Appareil à Donuts', 23.99, 'electromenager', 'Design Rétro, Sweet Dreams, Revêtement Anti-Adhésif, 700 Watts, Couleur: Jaune', 'Article régulier', 'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/714qiVk2fWL._AC_SL1500_.jpg'),
(23, 'Ariete 568 Blender Vintage', 57.14, 'electromenager', 'Bol en plastique, 1,5 L, 500 W, 6 lames en acier inoxydable, Fonction broyer, Vert [Classe énergétique A+]', 'Article régulier', 'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/61mNp8nPObL._AC_SL1500_.jpg'),
(24, 'Bouilloire électrique programmable', 98.88, 'electromenager', 'Bosch Electroménager TWK7203,2200 W, 1.7 liters, Noir/INOX ', 'Article haut de gamm', 'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/61gJtVar9KS._AC_SL1500_.jpg'),
(25, 'CHIQ FSS559NEI32D Réfrigérateur latéral', 2215.8, 'electromenager', 'avec onduleur et technologie No Frost 559L | Réfrigérateur-congélateur côté avec réservoir d_eau | Distributeur d_eau | Très silencieux 39 dB | Écran LED [Classe énergétique E]', 'Article haut de gamm', 'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/41DGIq6dX9S._AC_SL1000_.jpg'),
(26, 'Subliminal Mode - Pull Over Homme Col Arrondi', 29.99, 'vetements', 'avec Cordon de Serrage Chic et Tendance Tricot Hiver en Maille Chiner Idée Cadeau Noel BX52132, 80% Acrylique, 20% Coton, Lavage en machine, Manche longue, Taille XXL', 'Article régulier', 'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/91kzAFNw5pL._AC_UX569_.jpg'),
(27, 'ORANDESIGNE Robe De Soirée Femme Chic Et Glamour', 16.99, 'vetements', 'Courte Elegant Mode Robe Moulante Mini Manche Longue Vintage Sequin Disco Fête Cocktail Robe Bal de Promo, taille M, Polyester, Cotton ,Lavage en machine, Manche longue', 'Article régulier', 'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/512McoXNXpL._AC_UY741_.jpg'),
(28, 'FANGJIN Femmes Tee Shirt 1/4 Fermeture Sweatshirt éclair Manches Longues Col Rond Sweat', 34.99, 'vetements', 'Polyester,Lavage en machine,Régulière, Décontractée, Lâche, Manche longue, taile S', 'Article régulier', 'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/616XVEKoy-L._AC_UY741_.jpg'),
(29, 'Simple Joys by Carter_s Combinaison en coton qui couvre les pieds, pour jour et nuit Mixte Bébé, Lot', 33.3, 'vetements', '100% Coton, Lavage en machine, Fermeture: Fermeture éclair, Fermeture éclair, Manche longue,taille 3-6 Mois', 'Article régulier', 'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/91HuntPlNGL._AC_UX679_.jpg'),
(30, 'Doudoune polaire hiver pour homme', 109.9, 'vetements', '[Une veste de tous les jours] Les parkas Geographical Norway vous accompagneront au quotidien ! Une parka légère, confortable, qui résistera aux gouttes de pluie. Une veste polaire impermeable penser pour affronter toutes les situations !,[Très confortable] Les manteaux Geographical Norway sont très confortables avec un bon rapport qualité/prix, vetement fabriqué avec des matériaux de qualité. Cette veste longue, légère, chaude et matelassée offre une souplesse dans vos mouvements, Fermeture: [Garder la chaleur] Le manteau/doudoune ce ferme avec une fermeture éclair, cela permet de rester au chaud l’hiver pendant longtemps. Blouson agréable avec une fourrure synthétique confortable, [Un cadeau idéal] Que ce soit pour vous ou pour un proche, les blousons Geographical Norway font toujours sensation, une marque avec des vêtements de qualité et pour toutes les saisons. Caractéristiques techniques : 100% Polyester, Manche longue, taille M', 'Article régulier', 'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/71128CDxDzL._AC_UX679_.jpg'),
(31, 'Coussin de Voyage, Plaid Polaire, Masque de Nuit, Bouchons d_Oreilles. Confort du sommeil. Cou Oreil', 19.99, 'vacances', 'Marque: Générique, Caractéristique spéciale: Lavable,Réutilisable, Couleur: Gris, Taille: Compact, Forme: U, Tranche d_âge (description): Adulte, Usages recommandés pour le produit: Canapé,Cou,Extérieur,Sommeil,Voiture, Utiliser pour: Cou, Matériau: Polyester, Description de la fermeté de l_article: douce', 'Article régulier', 'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/71E3uHyYw8L._AC_SL1500_.jpg'),
(32, 'Trousse de Premiers Secours Composée de 90 Articles avec Packs de Froid Instantané, Sérum Physiologi', 24.99, 'vacances', 'Marque: The body source, Caractéristique spéciale: Portable, Nombre de pièces: 90, Usages recommandés pour le produit: Outdoors, Couleur: Rouge, Tranche d_âge (description): Adult, Composants inclus: Gants, Informations sur l_emballage: Bag, Poids de l_article: 620 Grammes, Caractéristique du matériau: Léger', 'Article régulier', 'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/71n2DoW+T8L._AC_SL1500_.jpg'),
(33, 'Trousse de Toilette Hommes, Trousse de Maquillage Grande Sac de Toilette Voyage Kit de Rasage Dopp O', 15.99, 'vacances', ' Matériau de qualité supérieure: la trousse de toilette pour hommes est fabriquée dans un tissu oxford de haute qualité soigneusement sélectionné, léger, durable et facile à tenir. Conception de séparation humide et sèche: le sac de rangement pour le rasage de voyage comprend une poche de séparation humide, parfaite pour séparer une serviette ou des vêtements mouillés d_autres articles. Ne vous inquiétez plus du fait que des vêtements mouillés dégouttent votre sac. Grande capacité: 25,5 x 15,5 x 11 cm / 10 x 6,1 x 4,3 pouces, plusieurs poches à l_intérieur, suffisamment spacieuses pour contenir tous vos essentiels de voyage comme des brosses à dents, des déodorants, des shampooings de voyage, du dentifrice, du maquillage et de la crème à raser. Conception portable: il est facile à transporter par la poignée latérale. La structure compacte et simple économise votre précieux espace de bagages et de bagage à main. Parfait pour les emballeurs légers qui aiment voyager, road trip, voyage d_affaires, vacances, gym et sports, etc', 'Article régulier', 'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/81K9f84bqIL._AC_SL1500_.jpg'),
(34, 'SHU-SHI - Sarong/paréo - pour Femme - Look de Plage', 21.29, 'vacances', 'à Porter au-Dessus du Maillot de Bain - dégradé de Couleurs, couleur: Rose', 'Article régulier', 'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/71H9+cOxi4L._AC_UY741_.jpg'),
(35, 'Chaîne hawaïenne', 8.86, 'vacances', '1 pièce, longueur 105 cm, collier été, plage, fleurs, mer, vacances, accessoire, déguisement, carnaval, fête à thème ', 'Article régulier', 'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/41oD+P2HNWS._AC_UY695_.jpg'),
(36, 'BONNYCO Miroir Murale 3 Pièces Miroir Rond pour Decoration', 16.99, 'decoration', 'Marque: BONNYCO, Forme: Rond, Dimensions du produit: 5.5L x 25l centimètres, Matériau du cadre 	Résine, Style: Shabby chic, Type de fixation: 	Montage mural, Type de finition: Peinte, Recommandation de surface:Murale', 'Article régulier', 'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/910g1KqescL._AC_SL1500_.jpg'),
(37, 'Chende Grand Miroir Mural', 225.97, 'decoration', 'Taille: 90 x 60 cm, Marque: Chende, Forme: Rectangulaire, Matériau du cadre 	Verre, Style: Moderne, Type de fixation: Montage mural, Type de finition: Polie', 'Article haut de gamm', 'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/71cKltREKnL._AC_SL1500_.jpg'),
(38, 'Tête de taureau - Décoration murale moderne en polyrésine doré', 169.95, 'decoration', 'Matériau: Résine, Couleur:Doré, Style: Moderne, Taille: 71x21x72 cm, Type de fixation: Montage mural', 'Article haut de gamm', 'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/81MTQKJcWuL._AC_SL1500_.jpg'),
(39, 'Créatives Décoration Murale Feuille de Ginkgo en Métal à La Main, Moderne Luxe Sculpture Murale en M', 149.99, 'decoration', 'Matériau: Métal, Couleur: Coloré, Style: Moderne, Thème: Abstrait, Dimensions du produit: 110L x 68l centimètres', 'Article haut de gamm', 'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/71hCDvI6IgL._AC_SL1500_.jpg'),
(40, '3D Stickers Fleurs Miroir Muraux Rose Flower Vine Sticker DIY Élégant Écologiques Décoration Autocol', 23.99, 'decoration', 'taille: 90cm x 120 cm, Marque: Guangmu, Couleur: argent À Droite, Usages recommandés pour le produit 	Diy,Intérieur, Matériau: Acrylique,Thème: Floral,Moderne, Caractéristique spéciale: Imperméable', 'Article régulier', 'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/61na3VJFykS._AC_SL1000_.jpg'),
(41, 'Appartement à vendre', 999000, 'ventes immo', '97 m², 4 pièce, Paris 14 - Rue Cabanis - Deux chambres - A rénover Au 1er étage d_une petite copropriété construite en 1890, bien entretenue, avec gardienne', 'Article régulier', 'https://mmf.logic-immo.com/mmf/ads/photo-prop-640x480/03a/1/1e63e012-dd41-4135-8146-7249d6c802aa.jpg'),
(42, 'Appartement à vendre', 2950000, 'ventes immo', '196 m²,6 pièces, 3 chambres, Chauffage : Individuel, au gaz Terrasse/Balcon : Balcon, Nombre d_étages du bâtiment : 7, Etage du bien : 4e, Cave, Ascenseur, Gardien, Nombre de salle de bain : 1 Salle de bain, Nombre de salle d_eau : 2 Salles d_eau, Paris 16e', 'Article régulier', 'https://mmf.logic-immo.com/mmf/ads/photo-prop-640x480/c39/8/8caace53-6b7d-42c4-98ff-280fa3ff45fc.jpg'),
(43, 'Maison neuve', 1390000, 'ventes immo', '108 m², 5 pièces, 3 chambres, Paris 20e', 'Article régulier', 'https://v.seloger.com/s/width/1146/visuels/0/h/a/y/0hayu8chcdrodhcp9zlyg54vn7389wi0sacbtyedc.jpg'),
(44, 'Maison de ville 3 étages', 6900000, 'ventes immo', '11 pièces, 5 chambres, 332 m², Paris 17e', 'Article haut de gamm', 'https://v.seloger.com/s/width/800/visuels/1/c/8/m/1c8mbjz6z1d184z8thq5wo7gd3rdczfj5p119u29s.jpg'),
(45, 'Chateau', 38000000, 'ventes immo', '2000 m², 30 pièces, 11 chambres, meublé,chauffage individuel, parking: 1', 'Article haut de gamm', 'https://www.sothebysrealty-france.com/datas/biens/images/27328/27328_00-2022-09-29-1501.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

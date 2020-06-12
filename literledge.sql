-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Jun-2020 às 00:37
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `literledge`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `books`
--

CREATE TABLE `books` (
  `id` char(6) NOT NULL,
  `auctor` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `year` varchar(4) NOT NULL DEFAULT '0000',
  `genre` varchar(30) NOT NULL DEFAULT 'Drama',
  `country` char(3) CHARACTER SET utf8mb4 DEFAULT 'USA',
  `litschool` tinytext DEFAULT NULL,
  `series` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `volume` int(2) NOT NULL DEFAULT 0,
  `license` varchar(30) NOT NULL DEFAULT 'Public Domain',
  `tags` text DEFAULT NULL,
  `visualizations` bigint(20) NOT NULL DEFAULT 0,
  `readings` bigint(20) NOT NULL DEFAULT 0,
  `warning` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `books`
--

INSERT INTO `books` (`id`, `auctor`, `year`, `genre`, `country`, `litschool`, `series`, `volume`, `license`, `tags`, `visualizations`, `readings`, `warning`) VALUES
('000000', 'MACHADOassis', '1881', 'Romance', 'BRA', 'Realism', 'Realism Trilogy', 1, 'Public Domain', '#machado#machado-de-assis#assis#memorias-postumas#bras-cubas#realismo#realismo-brasileiro#literatura-brasileira', 0, 3, 0),
('000001', 'BARRETOlima', '1915', 'Comedy', 'BRA', 'Pre-Modernism', NULL, 0, 'Public Domain', '#limabarreto#barreto#lima#modernismo#premodernismo#policarpo-quaresma#patriota#patrotismo#literatura-brasileira#classicos', 0, 0, 0),
('000002', 'MACHADOassis', '1891', 'Romance', 'BRA', 'Realism', 'Realism Trilogy', 2, 'Public Domain', '#machado#machado-de-assis#assis#realismo#literatura-brasileira#realismo-brasileiro#quincas-borba#quincas#borba', 0, 0, 0),
('000003', 'MACHADOassis', '1899', 'Romance', 'BRA', 'Realism', 'Realism Trilogy', 3, 'Public Domain', '#machado#machado-de-assis#assis#realismo#literatura-brasileira#realismo-brasileiro#dom-casmurro#dom#casmurro', 0, 0, 0),
('000004', 'BARRETOlima', '1948', 'Romance', 'BRA', 'Pre-Modernism', NULL, 0, 'Public Domain', '#lima-barreto#lima#barreto#pre-modernismo#literatura-brasileira#pre-modernismo-brasileiro#clara-dos-anjos#clara#dos#anjos', 0, 0, 0),
('000005', 'AZEVEDOaluisio', '1890', 'Romance', 'BRA', 'Naturalism', NULL, 0, 'Public Domain', '#naturalismo#aluisio#azevedo#aluisio-azevedo#corti?o#brazileiro#literatura-brasileira#o-cortiço', 0, 0, 1),
('000006', 'BARRETOlima', '1911', 'Comedy', 'BRA', 'Pre-Modernism', NULL, 0, 'Public Domain', '#premodernism#premodernismo#modernismo#lima#barreto#lima-barreto#javanês#homem#sabia#o-homem-que-sabia-javanês', 0, 0, 0),
('000007', 'BARRETOlima', '1922', 'Chronicle', 'BRA', 'Pre-Modernism', NULL, 0, 'Public Domain', '#premodernism#premodernismo#modernismo#lima#barreto#lima-barreto#bruzundangas#bruzudangas#bruzundagas#bruzu', 0, 3, 0),
('000008', 'BARRETOlima', '1920', 'Romance', 'BRA', 'Pre-Modernism', NULL, 0, 'Public Domain', '#premodernism#premodernismo#modernismo#lima#barreto#lima-barreto#cemiterio-dos-vivos#cemiterio#vivos', 0, 0, 0),
('000009', 'MACHADOassis', '1882', 'Comedy', 'BRA', NULL, NULL, 0, 'Public Domain', '#machado#assis#machado-de-assis#alienista#loucura#casa-verde#itaguai#literatura#brasileira', 0, 0, 0),
('00000A', 'ALENCARjose', '1865', 'Romance', 'BRA', 'Indianism', 'Triologia Indianista', 1, 'Public Domain', '#jose#alencar#jose-alencar#iracema#indianista#ceara', 0, 10, 0),
('00000B', 'ALENCARjose', '1857', 'Romance', 'BRA', 'Indianism', 'Triologia Indianista', 2, 'Public Domain', '#jose#alencar#jose-alencar#guarani#indianista#ceara', 0, 0, 0),
('00000C', 'ALENCARjose', '1862', 'Romance', 'BRA', NULL, 'Perfis de Mulher', 1, 'Public Domain', '#jose#alencar#jose-alencar#luciola#ceara', 0, 0, 0),
('00000D', 'BASILIOgama', '1769', 'Epic', 'BRA', 'Arcadism', NULL, 0, 'Public Domain', '#basilio-da-gama#basilio#gama#jesuitas#uraguai#guarani#colonos#indigenas', 0, 0, 0),
('00000E', 'POMPEIAraul', '1888', 'Romance', 'BRA', 'Impressionism', NULL, 0, 'Public Domain', '#raul#pompeia#raul-pompeia#ateneu#colegio#impressionismo', 0, 0, 0),
('00000F', 'CUNHAeuclides', '1902', 'Journalism', 'BRA', 'Naturalism', NULL, 0, 'Public Domain', '#euclides#cunha#euclides-da-cunha#os-sertoes#sertoes#canudos#guerra#nordeste', 0, 0, 1),
('00000G', 'ALIGHIERIdante', '1321', 'Epic', 'ITA', NULL, NULL, 0, 'Public Domain', '#dante-alighieri#dante#alighieri#inferno#divina#comedia#divina-comedia#purgatorio', 0, 0, 0),
('00000H', 'ANDRADEmario', '1928', 'Rhapsody', 'BRA', 'Modernism', NULL, 0, 'Public Domain', '#macunaima#muiraquita#mario#andrade#mario-andrade#modernismo', 0, 21, 0),
('00000I', 'HOMERUS', '0000', 'Epic', 'GRE', NULL, NULL, 0, 'Public Domain', '#grecia#homero#homerus#iliada#odisseia#troia#aquiles#agamenon', 0, 0, 0),
('00000J', 'SHAKESPEAREwilliam', '1595', 'Tragedy', 'ENG', NULL, NULL, 0, 'Public Domain', '#william#shakespeare#william-shakespeare#romeu#julieta#teatro#romance', 0, 0, 0),
('00000K', 'SHAKESPEAREwilliam', '1601', 'Tragedy', 'ENG', NULL, NULL, 0, 'Public Domain', '#william#shakespeare#william-shakespeare#hamlet#fantasma#teatro#tragedia', 0, 0, 0),
('00000L', 'HOBBESthomas', '1651', 'Philosophy', 'ENG', 'Iluminism', NULL, 0, 'Public Domain', '#thomas#hobbes#thomas-hobbes#leviata#leviathan#contratualista#estado', 0, 0, 0),
('00000M', 'HOMERUS', '0000', 'Epic', 'GRE', NULL, NULL, 0, 'Public Domain', '#odisseia#homero#homerus#ulisses#poseidon#grecia#greek', 0, 0, 0),
('00000N', 'HUGOvictor', '1862', 'Romance', 'FRA', NULL, NULL, 0, 'Public Domain', '#victor#hugo#victor-hugo#os#miseraveis#frança#france#miserable', 0, 0, 0),
('00000O', 'CERVANTESmiguel', '1605', 'Parody', 'ESP', 'Mannerism', NULL, 0, 'Public Domain', '#dom#quixote#dom-quixote#cervantes#miguel#comedia', 0, 0, 0),
('00000P', 'SAINTexupery', '1943', 'Fantasy', 'FRA', NULL, NULL, 0, 'Public Domain', '#pequeno#principe#pequeno-principe#petit#prince#saint#exupery#antonie#saint-exupery', 0, 0, 0),
('00000Q', 'HPLOVECRAFT', '1926', 'Horror', 'USA', NULL, NULL, 0, 'Public Domain', '#horror#terror#lovecraft#hplovecraft#cthulhu#call#chamado', 0, 0, 0),
('00000R', 'MARXkarl', '1867', 'Sociology', 'USA', NULL, NULL, 0, 'Public Domain', '#karl#marx#engels#capital#kapital#comunism#sociologia', 0, 0, 0),
('00000S', 'CAMOESluis', '1575', 'Epic', 'POR', 'Troubadorism', NULL, 0, 'Public Domain', '#lusíadas#lusiadas#camões#camoes#luis#trovadorismo#epico#navegações', 0, 0, 0),
('00000T', 'MACHIAVELLIniccolo', '1532', 'Philosophy', 'ITA', NULL, NULL, 0, 'Public Domain', '#machiavelli#maquiavel#nicolau#niccolo#principe#prince#republica', 0, 0, 0),
('00000U', 'CARROLLlewis', '1865', 'Fantasy', 'ENG', NULL, NULL, 0, 'Public Domain', '#alice#país#maravilhas#wonderland#lewis#carroll#magic#child#infantil', 0, 0, 0),
('00000V', 'CARROLLlewis', '1871', 'Fantasy', 'ENG', NULL, NULL, 0, 'Public Domain', '#alice#país#maravilhas#wonderland#lewis#carroll#magic#child#infantil#espelho#atraves#through#glass', 0, 0, 0),
('00000W', 'GRACILIANOramos', '1938', 'Romance', 'BRA', NULL, NULL, 0, 'Public Domain', '#graciliano#ramos#vidas#secas#baleia', 0, 0, 0),
('00000X', 'GUIMARAESbernardo', '1875', 'Romance', 'BRA', NULL, NULL, 0, 'Public Domain', '#isaura#escrava#literatura#guimaraes#bernardo', 0, 0, 0),
('00000Y', 'ANTONIOalmeida', '1854', 'Romance', 'BRA', NULL, NULL, 0, 'Public Domain', '#memorias#sargento#milicias#manuel#antonio#almeida', 0, 0, 0),
('00000Z', 'BARRETOlima', '1909', 'Romance', 'BRA', NULL, NULL, 0, 'Public Domain', '#barreto#lima#recordacoes#memorias#romance#modernismo#racismo#critica#social#isaias#caminha', 0, 0, 0),
('000010', 'CABRALmelo', '1955', 'Poetry', 'BRA', 'Modernism', NULL, 0, 'Public Domain', '#retirantes#imigrantes#sertanejos#morte#vida#severina#sertoes#vidas#secas#nordeste#joao#cabral#neto#melo', 0, 0, 0),
('000011', 'VERNEjules', '1864', 'Fantasy', 'FRA', NULL, NULL, 0, 'Public Domain', '#viagem#centro#terra#julio#verne#submarinas#terra#lua#ilha#misteriosa#volta#mundo', 0, 0, 0),
('000012', 'VERNEjules', '1873', 'Fantasy', 'FRA', NULL, NULL, 0, 'Public Domain', '#viagem#centro#terra#julio#verne#submarinas#terra#lua#ilha#misteriosa#volta#mundo', 0, 0, 0),
('000013', 'VERNEjules', '1878', 'Fantasy', 'FRA', NULL, NULL, 0, 'Public Domain', '#viagem#centro#terra#julio#verne#submarinas#terra#lua#ilha#misteriosa#volta#mundo', 0, 0, 0),
('000014', 'ANTONIOgonzaga', '1789', 'Poetry', 'BRA', 'Arcadism', NULL, 0, 'Public Domain', '#cartas#chilenas#poesia#gonzaga#antonio#tomas#inconfidencia#mineira#minas#gerais#vila#rica#arcadismo', 0, 0, 0),
('000015', 'GRACAaranha', '1902', 'Romance', 'BRA', 'Pre-Modernism', NULL, 0, 'Public Domain', '#canaa#graca#aranha#premodernismo#modernismo#imigracao#immigrant', 0, 0, 0),
('000016', 'DUMASalexandre', '1844', 'Romance', 'FRA', NULL, NULL, 0, 'Public Domain', '#monte#cristo#dumas#alexandre#tres#mosqueteiros#conde', 0, 0, 0),
('000017', 'HUGOvictor', '1831', 'Romance', 'FRA', NULL, NULL, 0, 'Public Domain', '#corcunda#notre#dame#de#victor#hugo#os#miseraveis', 0, 0, 0),
('000018', 'KAFKAfranz', '1915', 'Romance', 'GER', NULL, NULL, 0, 'Public Domain', '#franz#kafka#metamorfose#filosofia#metamorphosis', 0, 0, 0),
('000019', 'DURKHEIMemile', '1897', 'Sociology', 'FRA', NULL, NULL, 0, 'Public Domain', '#emile#durkheim#karl#marx#weber#suicide#sociology#sociologia', 0, 0, 0),
('00001A', 'DURKHEIMemile', '', 'Sociology', 'FRA', NULL, NULL, 0, 'Public Domain', '#emile#durkheim#karl#marx#weber#suicide#sociology#sociologia#montesquieu#rousseau', 0, 0, 0),
('00001B', 'DURKHEIMemile', '1893', 'Sociology', 'FRA', NULL, NULL, 0, 'Public Domain', '#emile#durkheim#trabalho#social#sociologia#marx#weber#karl', 0, 0, 0),
('00001C', 'DURKHEIMemile', '1895', 'Sociology', 'FRA', NULL, NULL, 0, 'Public Domain', '#emile#durkheim#trabalho#sociologico#regras#metodo#sociologia#marx#weber#karl', 0, 0, 0),
('00001D', 'ALENCARjose', '1874', 'Romance', 'BRA', 'Indianism', 'Triologia Indianista', 3, 'Public Domain', '#jose#de#alencar#ubirajara#romance#indianista#literatura', 0, 0, 0),
('00001E', 'FREIREpaulo', '1974', 'Philosophy', 'BRA', NULL, NULL, 0, 'Public Domain', '', 0, 0, 0),
('00001F', 'RIBEIROdarcy', '1995', 'Sociology', 'BRA', NULL, NULL, 0, 'Public Domain', '#povo#brasileiro#darcy#ribeiro#', 0, 0, 0),
('00001G', 'ECOumberto', '1980', 'Romance', 'ITA', NULL, NULL, 0, 'Public Domain', '#nome#rosa#umberto#eco#della#ll#romance', 0, 0, 0),
('00001H', 'FRANKbaum', '1900', 'Fantasy', 'USA', NULL, NULL, 0, 'Public Domain', '#oz#alice#wonderful#wizard#wonderland#frank#baum', 0, 0, 0),
('00001I', 'ORWELLgeorge', '1945', 'Romance', 'ENG', NULL, NULL, 0, 'Public Domain', '#george#orwell#animal#farm#communism#marx#revolucao#revolution#bichos#animals', 0, 0, 0),
('00001J', 'ORWELLgeorge', '1949', 'Romance', 'ENG', NULL, NULL, 0, 'Public Domain', '#george#orwell#1984#animal#farm#marx#fascism#nazism#government', 0, 0, 0),
('00001K', 'LOBATOmonteiro', '1918', 'Chronicle', 'BRA', 'Pre-Modernism', NULL, 0, 'Public Domain', '#lobato#monteiro#urupes#premodernismo#jecatatu', 0, 0, 1),
('00001L', 'LOBATOmonteiro', '1926', 'Romance', 'BRA', NULL, NULL, 0, 'Public Domain', '#lobato#monteiro#presidente#negro#choque#racas', 0, 0, 1),
('00001M', 'LOBATOmonteiro', '1931', 'Fantasy', 'BRA', NULL, 'Sítio do Picapau Amarelo', 1, 'Public Domain', '#lobato#monteiro#narizinho#emilia#reinacoes#sitio#picapau#amarelo', 0, 0, 0),
('00001N', 'FIRMINAreis', '1859', 'Romance', 'BRA', NULL, NULL, 0, 'Public Domain', '#maria#firmina#dos#reis#ursula#romance#mulher#escritora#negra', 0, 0, 0),
('00001O', 'NIETZSCHEfriedrich', '1885', 'Philosophy', 'GER', NULL, NULL, 0, 'Public Domain', '#nietzsche#friedrich#zarathustra#zaratustra#thus#spoke#assim#falou#filosofia#niilismo', 0, 0, 0),
('00001P', 'TWAINmark', '1876', 'Fantasy', 'USA', NULL, NULL, 0, 'Public Domain', '#mark#twain#tom#sawyer#adventures#aventuras', 0, 0, 0),
('00001Q', 'ALLANpoe', '1841', 'Tale', 'USA', NULL, NULL, 0, 'Public Domain', '#edgar#allan#poe#tale#assassinatos#morgue#street#rua', 0, 0, 0),
('00001R', 'ANDERSENhans', '1843', 'Tale', 'DEN', NULL, NULL, 0, 'Public Domain', '#hans#christian#andersen#patinho#feio#duck#ugly#duckling', 0, 0, 0),
('00001S', 'SUASSUNAariano', '1955', 'Play', 'BRA', NULL, NULL, 0, 'Public Domain', '#teatro#theater#auto#compadecida#ariano#suassuna#grilo#chico#peca', 0, 0, 0),
('00001T', 'VICENTEgil', '1517', 'Play', 'POR', NULL, 'Triologia das Barcas', 1, 'Public Domain', '#teatro#theater#auto#peca#barca#inferno#gil#vicente#drama', 0, 0, 0),
('00001U', 'AZEVEDOaluisio', '1881', 'Romance', 'BRA', 'Naturalism', NULL, 0, 'Public Domain', '#naturalismo#mulato#o#aluisio#azevedo#cortico#brasileiro#racismo#preconceito#maranhao', 0, 0, 0),
('00001V', 'ANTONIOgonzaga', '1792', 'Poetry', 'BRA', 'Arcadism', NULL, 0, 'Public Domain', '#arcadismo#marilia#de#dirceu#poema#poesia#vila#rica#lisboa#tomas#antonio#gonzaga', 0, 0, 0),
('00001W', 'JKROWLING', '1997', 'Fantasy', 'ENG', '', 'Harry Potter', 1, 'Copyright', '#harry#potter#filosofal#sorcerer#wizard#hogwarts#stone#pedra#hermione#rony#grifinoria#gryffindor#dumbledore', 0, 0, 0),
('00001X', 'JKROWLING', '1998', 'Fantasy', 'ENG', '', 'Harry Potter', 2, 'Copyright', '#harry#potter#wizard#hogwarts#hermione#rony#grifinoria#gryffindor#dumbledore#camara#secreta#secrets#chamber', 0, 0, 0),
('00001Y', 'JKROWLING', '2000', 'Fantasy', 'ENG', '', 'Harry Potter', 3, 'Copyright', '#harry#potter#r#wizard#hogwarts#hermione#rony#grifinoria#gryffindor#dumbledore#azkaban#prisioneiro#prisioner', 0, 0, 0),
('00001Z', 'JKROWLING', '2000', 'Fantasy', 'ENG', '', 'Harry Potter', 4, 'Copyright', '#harry#potter#wizard#hogwarts#hermione#rony#grifinoria#gryffindor#dumbledore#calice#fogo#fire#goblet', 0, 0, 0),
('000020', 'JKROWLING', '2003', 'Fantasy', 'ENG', '', 'Harry Potter', 5, 'Copyright', '#harry#potter#wizard#hogwarts#hermione#rony#grifinoria#gryffindor#dumbledore#fenix#ordem#order#phoenix', 0, 0, 0),
('000021', 'JKROWLING', '2005', 'Fantasy', 'ENG', '', 'Harry Potter', 6, 'Copyright', '#harry#potter#wizard#hogwarts#hermione#rony#grifinoria#gryffindor#dumbledore#enigma#prince#principe#half#blood', 0, 0, 0),
('000022', 'JKROWLING', '2007', 'Fantasy', 'ENG', '', 'Harry Potter', 7, 'Copyright', '#harry#potter#wizard#hogwarts#hermione#rony#grifinoria#gryffindor#dumbledore#deathly#hallows#reliquias#morte', 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `editions`
--

CREATE TABLE `editions` (
  `title` char(6) NOT NULL,
  `language` char(2) NOT NULL DEFAULT 'EN',
  `credit` tinytext DEFAULT NULL,
  `filtyp` set('epub','rtf','pdf','mp3','odt') NOT NULL DEFAULT 'epub',
  `price` decimal(4,2) DEFAULT NULL,
  `id` char(2) NOT NULL,
  `ked` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `editions`
--

INSERT INTO `editions` (`title`, `language`, `credit`, `filtyp`, `price`, `id`, `ked`) VALUES
('000000', 'PT', 'Project Gutenberg', 'epub', '0.00', '00', 1),
('000001', 'PT', 'Fundação Biblioteca Nacional', 'epub', '0.00', '00', 2),
('000001', 'PT', 'Fundação Biblioteca Nacional', 'pdf', '0.00', '01', 3),
('000002', 'PT', 'Project Gutenberg', 'epub', '0.00', '00', 4),
('000003', 'PT', 'Project Gutenberg', 'epub', '0.00', '00', 5),
('000004', 'PT', 'Fundação Biblioteca Nacional', 'epub', '0.00', '00', 6),
('000004', 'PT', 'Fundação Biblioteca Nacional', 'pdf', '0.00', '01', 7),
('000005', 'PT', 'Fundação Biblioteca Nacional', 'epub', '0.00', '00', 8),
('000005', 'PT', 'Fundação Biblioteca Nacional', 'pdf', '0.00', '01', 9),
('000006', 'PT', 'Biblioteca Virtual do Estudante Brasileiro', 'epub', '0.00', '00', 10),
('000006', 'PT', 'Biblioteca Virtual do Estudante Brasileiro', 'pdf', '0.00', '01', 11),
('000007', 'PT', 'Fundação Biblioteca Nacional', 'epub', '0.00', '00', 12),
('000007', 'PT', 'Fundação Biblioteca Nacional', 'pdf', '0.00', '01', 13),
('000008', 'PT', 'Fundação Biblioteca Nacional', 'epub', '0.00', '00', 14),
('000008', 'PT', 'Fundação Biblioteca Nacional', 'pdf', '0.00', '01', 15),
('000009', 'PT', 'Fundação Biblioteca Nacional', 'epub', '0.00', '00', 16),
('000009', 'PT', 'Fundação Biblioteca Nacional', 'pdf', '0.00', '01', 17),
('00000A', 'PT', 'Fundação Biblioteca Nacional', 'epub', '0.00', '00', 18),
('00000A', 'PT', 'Fundação Biblioteca Nacional', 'pdf', '0.00', '01', 19),
('00000B', 'PT', 'Biblioteca Virtual do Estudante Brasileiro', 'epub', '0.00', '00', 20),
('00000B', 'PT', 'Biblioteca Virtual do Estudante Brasileiro', 'pdf', '0.00', '01', 21),
('00000C', 'PT', 'Fundação Biblioteca Nacional', 'epub', '0.00', '00', 22),
('00000C', 'PT', 'Fundação Biblioteca Nacional', 'pdf', '0.00', '01', 23),
('00000D', 'PT', 'Fundação Biblioteca Nacional', 'epub', '0.00', '00', 24),
('00000D', 'PT', 'Fundação Biblioteca Nacional', 'pdf', '0.00', '01', 25),
('00000E', 'PT', 'Fundação Biblioteca Nacional', 'epub', '0.00', '00', 26),
('00000E', 'PT', 'Fundação Biblioteca Nacional', 'pdf', '0.00', '01', 27),
('00000F', 'PT', 'Fundação Biblioteca Nacional', 'epub', '0.00', '00', 28),
('00000F', 'PT', 'Fundação Biblioteca Nacional', 'pdf', '0.00', '01', 29),
('00000G', 'PT', 'eBooksBrasil', 'epub', '0.00', '00', 30),
('00000G', 'PT', 'eBooksBrasil', 'pdf', '0.00', '01', 31),
('00000H', 'PT', 'Instituto Federal Fluminense', 'epub', '0.00', '00', 32),
('00000H', 'PT', 'Instituto Federal Fluminense', 'pdf', '0.00', '01', 33),
('00000I', 'PT', 'eBooksBrasil', 'epub', '0.00', '00', 34),
('00000I', 'PT', 'eBooksBrasil', 'pdf', '0.00', '01', 35),
('00000J', 'PT', 'eBooksBrasil', 'epub', '0.00', '00', 36),
('00000J', 'PT', 'eBooksBrasil', 'pdf', '0.00', '01', 37),
('00000K', 'PT', 'eLivros', 'epub', '0.00', '00', 38),
('00000K', 'PT', 'eLivros', 'pdf', '0.00', '01', 39),
('00000L', 'PT', 'dhnet.org', 'epub', '0.00', '00', 40),
('00000L', 'PT', 'dhnet.org', 'pdf', '0.00', '01', 41),
('00000M', 'PT', 'eBooksBrasil', 'epub', '0.00', '00', 42),
('00000M', 'PT', 'eBooksBrasil', 'pdf', '0.00', '01', 43),
('00000N', 'PT', 'LeLivros', 'epub', '0.00', '00', 44),
('00000N', 'PT', 'LeLivros', 'pdf', '0.00', '01', 45),
('00000O', 'PT', 'eLivros', 'epub', '0.00', '00', 46),
('00000O', 'PT', 'eLivros', 'pdf', '0.00', '01', 47),
('00000P', 'PT', 'eLivros', 'epub', '0.00', '00', 48),
('00000P', 'PT', 'eLivros', 'pdf', '0.00', '01', 49),
('00000Q', 'PT', 'Filosofia Nerd', 'epub', '0.00', '00', 50),
('00000Q', 'PT', 'Filosofia Nerd', 'pdf', '0.00', '01', 51),
('00000R', 'PT', 'Coletivo Contra Corrente', 'epub', '0.00', '00', 52),
('00000R', 'PT', 'Coletivo Contra Corrente', 'pdf', '0.00', '01', 53),
('00000S', 'PT', 'Biblioteca Virtual do Estudante Brasileiro', 'epub', '0.00', '00', 54),
('00000S', 'PT', 'Biblioteca Virtual do Estudante Brasileiro', 'pdf', '0.00', '01', 55),
('00000T', 'PT', 'Baixe.net', 'epub', '0.00', '00', 56),
('00000T', 'PT', 'Baixe.net', 'pdf', '0.00', '01', 57),
('00000U', 'PT', 'eBooksBrasil', 'epub', '0.00', '00', 58),
('00000U', 'PT', 'eBooksBrasil', 'pdf', '0.00', '01', 59),
('00000V', 'PT', 'Sweetdreamside.wordpress', 'epub', '0.00', '00', 60),
('00000V', 'PT', 'Sweetdreamside.wordpress', 'pdf', '0.00', '01', 61),
('00000W', 'PT', 'eLivros', 'epub', '0.00', '00', 62),
('00000W', 'PT', 'eLivros', 'pdf', '0.00', '01', 63),
('00000X', 'PT', 'Biblioteca Virtual do Estudante Brasileiro', 'epub', '0.00', '00', 64),
('00000X', 'PT', 'Biblioteca Virtual do Estudante Brasileiro', 'pdf', '0.00', '01', 65),
('00000Y', 'PT', 'Biblioteca Virtual do Estudante Brasileiro', 'epub', '0.00', '00', 66),
('00000Y', 'PT', 'Biblioteca Virtual do Estudante Brasileiro', 'pdf', '0.00', '01', 67),
('00000Z', 'PT', 'Biblioteca Virtual do Estudante Brasileiro', 'epub', '0.00', '00', 68),
('00000Z', 'PT', 'Biblioteca Virtual do Estudante Brasileiro', 'pdf', '0.00', '01', 69),
('000010', 'PT', 'Universidade da Amazônia', 'epub', '0.00', '00', 70),
('000010', 'PT', 'Universidade da Amazônia', 'pdf', '0.00', '01', 71),
('000011', 'PT', 'EBC.com.br', 'epub', '0.00', '00', 72),
('000011', 'PT', 'EBC.com.br', 'pdf', '0.00', '01', 73),
('000012', 'PT', 'EBC.com.br', 'epub', '0.00', '00', 74),
('000012', 'PT', 'EBC.com.br', 'pdf', '0.00', '01', 75),
('000013', 'PT', 'EBC.com.br', 'epub', '0.00', '00', 76),
('000013', 'PT', 'EBC.com.br', 'pdf', '0.00', '01', 77),
('000000', 'EN', 'EPDF.pub', 'epub', '0.00', '01', 78),
('000000', 'EN', 'EPDF.pub', 'pdf', '0.00', '02', 79),
('000000', 'ES', 'Hola Ebook', 'epub', '0.00', '03', 80),
('000000', 'ES', 'Hola Ebook', 'pdf', '0.00', '04', 81),
('000002', 'ES', 'Hola Ebook', 'epub', '0.00', '03', 82),
('000002', 'ES', 'Hola Ebook', 'pdf', '0.00', '04', 83),
('000003', 'ES', 'Hola Ebook', 'epub', '0.00', '03', 84),
('000003', 'ES', 'Hola Ebook', 'pdf', '0.00', '04', 85),
('000009', 'ES', 'Hola Ebook', 'epub', '0.00', '04', 86),
('000009', 'ES', 'Hola Ebook', 'pdf', '0.00', '05', 87),
('000014', 'PT', 'Biblioteca Virtual do Estudante Brasileiro', 'epub', '0.00', '00', 88),
('000014', 'PT', 'Biblioteca Virtual do Estudante Brasileiro', 'pdf', '0.00', '01', 89),
('000015', 'PT', 'Link Livros', 'epub', '0.00', '00', 90),
('000015', 'PT', 'Link Livros', 'pdf', '0.00', '01', 91),
('000016', 'PT', 'Baixe Livros', 'epub', '0.00', '00', 92),
('000016', 'PT', 'Baixe Livros', 'pdf', '0.00', '01', 93),
('000017', 'PT', 'elivros.love', 'epub', '0.00', '00', 94),
('000017', 'PT', 'elivros.love', 'pdf', '0.00', '01', 95),
('000018', 'PT', 'Universidade da Amazônia', 'epub', '0.00', '00', 96),
('000018', 'PT', 'Universidade da Amazônia', 'pdf', '0.00', '01', 97),
('000019', 'PT', 'Farofa Filosófica', 'epub', '0.00', '00', 98),
('000019', 'PT', 'Farofa Filosófica', 'pdf', '0.00', '01', 99),
('00001A', 'PT', 'Farofa Filosófica', 'epub', '0.00', '00', 100),
('00001A', 'PT', 'Farofa Filosófica', 'pdf', '0.00', '01', 101),
('00001B', 'PT', 'Farofa Filosófica', 'epub', '0.00', '00', 102),
('00001B', 'PT', 'Farofa Filosófica', 'pdf', '0.00', '01', 103),
('00001C', 'PT', 'Farofa Filosófica', 'epub', '0.00', '00', 104),
('00001C', 'PT', 'Farofa Filosófica', 'pdf', '0.00', '01', 105),
('00001D', 'PT', 'Universidade da Amazônia', 'epub', '0.00', '00', 107),
('00001D', 'PT', 'Universidade da Amazônia', 'pdf', '0.00', '01', 108),
('00001E', 'PT', 'Paz e Terra', 'epub', '0.00', '00', 109),
('00001E', 'PT', 'Paz e Terra', 'pdf', '0.00', '01', 110),
('00001F', 'PT', 'Companhia das Letras', 'epub', '0.00', '00', 111),
('00001F', 'PT', 'Companhia das Letras', 'pdf', '0.00', '01', 112),
('00001G', 'PT', 'eLivros', 'epub', '0.00', '00', 113),
('00001G', 'PT', 'eLivros', 'pdf', '0.00', '01', 114),
('00001H', 'PT', 'Editora Zahar', 'epub', '0.00', '00', 115),
('00001H', 'PT', 'Editora Zahar', 'pdf', '0.00', '01', 116),
('00001I', 'PT', 'LeLivros', 'epub', '0.00', '00', 117),
('00001J', 'PT', 'LeLivros', 'epub', '0.00', '00', 118),
('00001K', 'PT', 'UTFPR', 'epub', '0.00', '00', 119),
('00001K', 'PT', 'UTFPR', 'pdf', '0.00', '01', 120),
('00001L', 'PT', 'Digital Source', 'epub', '0.00', '00', 121),
('00001L', 'PT', 'Digital Source', 'pdf', '0.00', '01', 122),
('00001M', 'PT', 'Recicla Leitores', 'epub', '0.00', '00', 123),
('00001M', 'PT', 'Recicla Leitores', 'pdf', '0.00', '01', 124),
('00001N', 'PT', 'Academia Brasileira de Letras', 'epub', '0.00', '00', 125),
('00001N', 'PT', 'Academia Brasileira de Letras', 'pdf', '0.00', '01', 126),
('00001O', 'PT', 'ebooksbrasil', 'epub', '0.00', '00', 127),
('00001O', 'PT', 'ebooksbrasil', 'pdf', '0.00', '01', 128),
('00001P', 'PT', 'Ediora Rideel', 'epub', '0.00', '00', 129),
('00001P', 'PT', 'Ediora Rideel', 'pdf', '0.00', '01', 130),
('00001Q', 'PT', 'Estante Digital', 'epub', '0.00', '00', 131),
('00001Q', 'PT', 'Estante Digital', 'pdf', '0.00', '01', 132),
('00001R', 'PT', 'Secretaria de Eduação e do Esporte do Paraná', 'epub', '0.00', '00', 133),
('00001R', 'PT', 'Secretaria de Eduação e do Esporte do Paraná', 'pdf', '0.00', '01', 134),
('00001S', 'PT', 'LeLivros', 'epub', '0.00', '00', 135),
('00001S', 'PT', 'LeLivros', 'pdf', '0.00', '01', 136),
('00001T', 'PT', 'Luso Livros', 'epub', '0.00', '00', 137),
('00001T', 'PT', 'Luso Livros', 'pdf', '0.00', '01', 138),
('00001U', 'PT', 'Fundação Biblioteca Nacional', 'epub', '0.00', '00', 139),
('00001U', 'PT', 'Fundação Biblioteca Nacional', 'pdf', '0.00', '01', 140),
('00001V', 'PT', 'Fundação Biblioteca Nacional', 'epub', '0.00', '00', 141),
('00001V', 'PT', 'Fundação Biblioteca Nacional', 'pdf', '0.00', '01', 142);

-- --------------------------------------------------------

--
-- Estrutura da tabela `poems`
--

CREATE TABLE `poems` (
  `id` int(11) NOT NULL,
  `pid` char(9) DEFAULT NULL,
  `auctor` varchar(30) DEFAULT NULL,
  `language` char(2) NOT NULL DEFAULT 'PT'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `poems`
--

INSERT INTO `poems` (`id`, `pid`, `auctor`, `language`) VALUES
(1, '000000', 'BYSSHEshelley', 'PT'),
(2, '000000', 'BOPPraul', 'PT'),
(3, '000001', 'BOPPraul', 'PT'),
(4, '000002', 'BOPPraul', 'PT'),
(5, '000000', 'DRUMMONDandrade', 'PT'),
(6, '000001', 'DRUMMONDandrade', 'PT'),
(7, '000002', 'DRUMMONDandrade', 'PT'),
(8, '000003', 'DRUMMONDandrade', 'PT'),
(9, '000004', 'DRUMMONDandrade', 'PT'),
(10, '000005', 'DRUMMONDandrade', 'PT'),
(11, '000006', 'DRUMMONDandrade', 'PT'),
(12, '000007', 'DRUMMONDandrade', 'PT'),
(13, '000008', 'DRUMMONDandrade', 'PT'),
(14, '000009', 'DRUMMONDandrade', 'PT'),
(15, '00000A', 'DRUMMONDandrade', 'PT'),
(16, '000000', 'CAMOESluis', 'PT'),
(17, '000001', 'CAMOESluis', 'PT'),
(18, '000002', 'CAMOESluis', 'PT'),
(19, '000003', 'CAMOESluis', 'PT'),
(20, '000004', 'CAMOESluis', 'PT'),
(21, '000005', 'CAMOESluis', 'PT'),
(22, '000006', 'CAMOESluis', 'PT'),
(23, '000007', 'CAMOESluis', 'PT'),
(24, '000008', 'CAMOESluis', 'PT'),
(25, '000009', 'CAMOESluis', 'PT'),
(26, '00000A', 'CAMOESluis', 'PT'),
(27, '00000B', 'CAMOESluis', 'PT'),
(29, '000000', 'AESOP', 'PT'),
(30, '000001', 'AESOP', 'PT'),
(31, '000002', 'AESOP', 'PT'),
(32, '000003', 'AESOP', 'PT'),
(33, '000004', 'AESOP', 'PT'),
(34, '000005', 'AESOP', 'PT'),
(35, '000006', 'AESOP', 'PT'),
(36, '000007', 'AESOP', 'PT'),
(37, '000000', 'ANDRADEmario', 'PT'),
(38, '000001', 'ANDRADEmario', 'PT'),
(39, '000002', 'ANDRADEmario', 'PT'),
(40, '000003', 'ANDRADEmario', 'PT'),
(41, '000004', 'ANDRADEmario', 'PT'),
(42, '000005', 'ANDRADEmario', 'PT'),
(43, '000006', 'ANDRADEmario', 'PT'),
(44, '000007', 'ANDRADEmario', 'PT'),
(45, '000008', 'ANDRADEmario', 'PT'),
(46, '000009', 'ANDRADEmario', 'PT'),
(47, '00000A', 'ANDRADEmario', 'PT'),
(48, '00000B', 'ANDRADEmario', 'PT'),
(49, '000000', 'MEIRELEScecilia', 'PT'),
(50, '000001', 'MEIRELEScecilia', 'PT'),
(51, '000002', 'MEIRELEScecilia', 'PT'),
(52, '000003', 'MEIRELEScecilia', 'PT'),
(53, '000004', 'MEIRELEScecilia', 'PT'),
(54, '000005', 'MEIRELEScecilia', 'PT'),
(55, '000006', 'MEIRELEScecilia', 'PT'),
(56, '000007', 'MEIRELEScecilia', 'PT'),
(57, '000008', 'MEIRELEScecilia', 'PT'),
(58, '000009', 'MEIRELEScecilia', 'PT'),
(59, '000000', 'PESSOAfernando', 'PT'),
(60, '000001', 'PESSOAfernando', 'PT'),
(61, '000002', 'PESSOAfernando', 'PT'),
(62, '000003', 'PESSOAfernando', 'PT'),
(63, '000004', 'PESSOAfernando', 'PT'),
(64, '000005', 'PESSOAfernando', 'PT'),
(65, '000006', 'PESSOAfernando', 'PT'),
(66, '000007', 'PESSOAfernando', 'PT'),
(67, '000008', 'PESSOAfernando', 'PT'),
(68, '000009', 'PESSOAfernando', 'PT');

-- --------------------------------------------------------

--
-- Estrutura da tabela `requests`
--

CREATE TABLE `requests` (
  `rid` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `req` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `requests`
--

INSERT INTO `requests` (`rid`, `user`, `req`) VALUES
(1, 'KaiXtr', 'auctor=jkrowling;'),
(2, 'KaiXtr', 'pname=teste;pcontent=isso vai ser removido;pauctor=PESSOAfernando;');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `book` char(6) NOT NULL,
  `comment` text DEFAULT NULL,
  `datime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `shelves`
--

CREATE TABLE `shelves` (
  `user` varchar(30) NOT NULL,
  `book` char(6) NOT NULL,
  `state` int(1) NOT NULL DEFAULT 0,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `shelves`
--

INSERT INTO `shelves` (`user`, `book`, `state`, `id`) VALUES
('KaiXtr', '000003', 3, 2),
('KaiXtr', '000002', 1, 3),
('KaiXtr', '000007', 3, 12),
('KaiXtr', '00000O', 1, 13),
('KaiXtr', '000000', 3, 24),
('KaiXtr', '000009', 1, 25),
('KaiXtr', '000008', 3, 26),
('KaiXtr', '00000H', 3, 27);

-- --------------------------------------------------------

--
-- Estrutura da tabela `translations`
--

CREATE TABLE `translations` (
  `fkey` char(6) NOT NULL,
  `pt` tinytext NOT NULL,
  `en` tinytext NOT NULL,
  `es` tinytext NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `translations`
--

INSERT INTO `translations` (`fkey`, `pt`, `en`, `es`, `id`) VALUES
('000000', 'Memórias Póstumas de Brás Cubas', 'The Posthumous Memoirs of Bras Cubas', 'Memorias Póstumas de Blas Cubas', 1),
('000001', 'O Triste Fim de Policarpo Quaresma', 'The Patriot', 'El Triste final de Policarpo Cuaresma', 2),
('000002', 'Quincas Borba', 'Quincas Borba', 'Quincas Borba', 3),
('000003', 'Dom Casmurro', 'Don Casmurro', 'Don Casmurro', 4),
('000004', 'Clara dos Anjos', 'Clara dos Anjos', 'Clara dos Anjos', 5),
('000005', 'O Cortiço', 'The Slum', 'La Vivienda', 6),
('000006', 'O Homem que Sabia Javanês e outros contos', 'The Man Who spoke Javanese and other tales', 'El Hombre que hablava Javanés y otros cuentos', 7),
('000007', 'Os Bruzundangas', 'The Bruzundangas', 'Los Bruzundangas', 8),
('000008', 'Cemitério dos Vivos', 'Cemetery of the living', 'Cementerio de los vivos', 9),
('000009', 'O Alienista', 'The Alienist', 'El Alienista', 10),
('00000A', 'Iracema', 'Iracema', 'Iracema', 11),
('00000B', 'O Guarani', 'The Guarani', 'El Guaraní', 12),
('00000C', 'Lucíola', 'Lucíola', 'Lucíola', 13),
('00000D', 'O Uraguai', 'The Uraguai', 'El Uraguay', 14),
('00000E', 'O Ateneu', 'The Academy', 'El Ateneo', 15),
('00000F', 'Os Sertões', 'Rebellion in the Backlands', 'Los Sertones', 16),
('00000G', 'A Divina Comédia', 'The Divine Comedy', 'La Divina Comedia', 17),
('00000H', 'Macunaíma', 'Macunayeema', 'Macunaíma', 18),
('00000I', 'Ilíada', 'Iliad', 'Ilíada', 19),
('00000J', 'Romeu e Julieta', 'Romeo and Juliet', 'Romeo y Julieta', 20),
('00000K', 'Hamlet', 'Hamlet', 'Hamlet', 21),
('00000L', 'Leviatã', 'Leviathan', 'Leviatán', 22),
('00000M', 'Odisséia', 'Odyssey', 'Odisea', 23),
('00000N', 'Os Miseráveis', 'Les Misérables', 'Los Miserables', 24),
('00000O', 'Dom Quixote', 'Don Quixote', 'Don Quijote', 25),
('00000P', 'O Pequeno Príncipe', 'The Little Prince', 'El Principito', 26),
('00000Q', 'O Chamado de Cthulhu', 'The Call of Cthulhu', 'La Llamada de Cthulhu', 27),
('00000R', 'O Capital', 'The Capital', 'El Capital', 28),
('00000S', 'Os Lusíadas', 'The Lusiads', 'Los Lusiadas', 29),
('00000T', 'O Príncipe', 'The Prince', 'El Príncipe', 30),
('00000U', 'Alice no País das Maravilhas', 'Alice in Wonderland', 'Alicia en el País de las Maravillas', 31),
('00000V', 'Alice através do Espelho', 'Alice through the Looking Glass', 'Alicia a través del Espejo', 32),
('00000W', 'Vidas Secas', 'Barren Lives', 'Vidas Secas', 33),
('00000X', 'Escrava Isaura', 'Isaura Slave', 'La Esclava Isaura', 34),
('00000Y', 'Memórias de um Sargento de Milícias', 'Memoirs of a Police Sergeant', 'Memorias de un Sargento de Milicias', 35),
('00000Z', 'Recordações do Escrivão Isaías Caminha', 'Memoirs of the writer Isaías Caminha', 'Recordaciónes del registrador Isaías Caminha', 36),
('000010', 'Morte e Vida Severina', 'The Death and Life of Severino', 'Muerte y Vida Severina', 37),
('000011', 'Viagem ao Centro da Terra', 'Journey to the Center of the Earth', 'Viaje al centro de la Tierra', 38),
('000012', 'Volta ao Mundo em 80 dias', 'Around the World in 80 days', 'La Vuelta al mundo en 80 días', 39),
('000013', 'Da Terra a Lua', 'From the Earth to the Moon', 'De la Tierra a la Luna', 40),
('000014', 'Cartas Chilenas', 'Chilean Letters', 'Letras Chilenas', 41),
('000015', 'Canaã', 'Canaan', 'Canaán', 42),
('000016', 'O Conde de Monte Cristo', 'The Count of Monte Cristo', 'El Conde de Montecristo', 43),
('000017', 'O Corcunda de Notre Dame', 'The Hunchback of Notre-Dame', 'Nuestra Señora de París', 44),
('000018', 'A Metamorfose', 'The Metamorphosis', 'La Metamorfosis', 45),
('000019', 'O Suicídio', 'The Suicide', 'El suicidio', 46),
('00001A', 'Montesquieu e Rousseau - Pioneiros da sociologia', 'Montesquieu and Rousseau - Pioneers of sociology', 'Montesquieu y Rousseau - Pioneros de la sociología', 47),
('00001B', 'Da Divisão do trabalho social', 'The Division of Labour in society', 'La División del trabajo social', 48),
('00001C', 'As Regras do método sociológico', 'The Rules of Sociological Method', 'Las Reglas del método sociológico', 49),
('00001D', 'Ubirajara', 'Ubirajara', 'Ubirajara', 50),
('00001E', 'Pedagogia do Oprimido', 'Pedagogy of the oppressed', 'Pedagogía de los oprimidos', 51),
('00001F', 'O Povo Brasileiro', 'The Brazilian People', 'El Pueblo Brasileño', 52),
('00001G', 'O Nome da Rosa', 'The Name of the Rose', 'El Nombre de la Rosa', 53),
('00001H', 'O Mágico de Oz', 'The Wonderful Wizard of Oz', 'El Maravilloso mago de Oz', 54),
('00001I', 'A Revolução dos Bichos', 'Animal Farm', 'Rebelión en la Granja', 55),
('00001J', '1984', '1984', '1984', 56),
('00001K', 'Urupês', 'Urupês', 'Urupês', 57),
('00001L', 'O Presidente Negro', 'The Black President', 'El Presidente Negro', 58),
('00001M', 'Reinações de Narizinho', 'Narizinho\'s Reigns', 'Reina de Naricita', 59),
('00001N', 'Úrsula e outras obras', 'Úrsula and other works', 'Úrsula y otras obras', 60),
('00001O', 'Assim Falou Zaratustra', 'Thus Spoke Zarathustra', 'Así habló Zaratustra', 61),
('00001P', 'As Aventuras de Tom Sawyer', 'The Adventures of Tom Sawyer', 'Las Aventuras de Tom Sawyer', 62),
('00001Q', 'Os Assassinatos da Rua Morgue', 'The Murders in the Rue Morgue', 'Los Crímenes de la Calle Morgue', 63),
('00001R', 'O Patinho Feio', 'The Ugly Duckling', 'El Patito Feo', 64),
('00001S', 'Auto da Compadecida', 'Act of the Compassionated', 'Auto da Compadecida', 65),
('00001T', 'Auto da Barca do Inferno', 'Act of the Ship of Hell', 'Auto da Barca do Inferno', 66),
('00001U', 'O Mulato', 'The Mulatto', 'El Mulato', 67),
('00001V', 'Marília de Dirceu', 'Marília de Dirceu', 'Marília de Dirceu', 68),
('00001W', 'Harry Potter e a Pedra Filosofal', 'Harry Potter and the Philosopher\'s Stone', 'Harry Potter y la Piedra Filosofal', 69),
('00001X', 'Harry Potter e a Câmara Secreta', 'Harry Potter and the Chamber of Secrets', 'Harry Potter y la Cámara Secreta', 70),
('00001Y', 'Harry Potter e o Prisioneiro de Azkaban', 'Harry Potter and the Prisoner of Azkaban', 'Harry Potter y el Prisionero de Azkaban', 71),
('00001Z', 'Harry Potter e o Cálice de Fogo', 'Harry Potter and the Goblet of Fire', 'Harry Potter y el Cáliz de Fuego', 72),
('000020', 'Harry Potter e a Ordem da Fênix', 'Harry Potter and the Order of the Phoenix', 'Harry Potter y la Orden del Fénix', 73),
('000021', 'Harry Potter e o Enigma do Príncipe', 'Harry Potter and the Half-Blood Prince', 'Harry Potter y el Misterio del Príncipe', 74),
('000022', 'Harry Potter e as Relíquias da Morte', 'Harry Potter and the Deathly Hallows', 'Harry Potter y las Reliquias de la Muerte', 75);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `pt` tinytext NOT NULL,
  `en` tinytext DEFAULT NULL,
  `es` tinytext DEFAULT NULL,
  `nick` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `birth` varchar(21) DEFAULT NULL,
  `death` varchar(21) DEFAULT NULL,
  `country` char(3) NOT NULL,
  `hometown` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `gender` set('M','F','A','N','O') CHARACTER SET utf8mb4 DEFAULT NULL,
  `auctor` tinyint(1) DEFAULT NULL,
  `email` tinytext NOT NULL,
  `password` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `links` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`pt`, `en`, `es`, `nick`, `birth`, `death`, `country`, `hometown`, `gender`, `auctor`, `email`, `password`, `links`) VALUES
('Esopo', 'Aesop', 'Esopo', 'AESOP', '620 a.c', '1877-12-12', 'GRE', 'Trácia', 'M', 1, 'aesop@literledge.com', 'Gu@n@b@r@', ''),
('José de Alencar', NULL, NULL, 'ALENCARjose', '1829-05-01', '1877-12-12', 'BRA', 'Messejana - CE', 'M', 1, 'alencar.jose@literledge.com', 'Gu@n@b@r@', ''),
('Dante Alighieri', NULL, NULL, 'ALIGHIERIdante', '1265-06-20', '1875-09-04', 'ITA', 'Florença', 'M', 1, 'alighieri.dante@literledge.com', 'Gu@n@b@r@', ''),
('Edgar Allan Poe', NULL, NULL, 'ALLANpoe', '1809-01-19', '1849-10-07', 'USA', 'Boston - Massachusetts', 'M', 1, 'edgar.allan.poe@literledge.com', 'Gu@n@b@r@', ''),
('Hans Christian Andersen', NULL, NULL, 'ANDERSENhans', '1805-04-02', '1875-08-04', 'DEN', 'Odense', 'M', 1, 'andersen.hans@literledge.com', 'Gu@n@b@r@', ''),
('Mário de Andrade', NULL, NULL, 'ANDRADEmario', '1893-12-09', '1945-02-25', 'BRA', 'São Paulo - SP', 'M', 1, 'andrade.mario@literledge.com', 'Gu@n@b@r@', ''),
('Manuel Antônio de Almeida', NULL, NULL, 'ANTONIOalmeida', '1830-11-17', '1861-11-28', 'BRA', 'Rio de Janeiro - RJ', 'M', 1, 'manuel.antonio.almeida@literledge.com', 'Gu@n@b@r@', ''),
('Tomás Antônio Gonzaga', NULL, NULL, 'ANTONIOgonzaga', '1744-08-11', '1810', 'BRA', 'Miragaia - Portugal', 'M', 1, 'tomas.antonio.gonzaga@literledge.com', 'Gu@n@b@r@', ''),
('Aristóteles', 'Aristotle', 'Aristóteles', 'ARISTOTLE', '384 a.c', '322 a.c', 'GRE', 'Estalgira - Calcídica', 'M', 1, 'aristotle@literledge.com', 'Gu@n@b@r@', ''),
('Jane Austen', NULL, NULL, 'AUSTENjane', '1775-12-16', '1817-07-18', 'ENG', 'Hampshire', 'F', 1, 'austen.jane@literledge.com', 'Gu@n@b@r@', ''),
('Aluísio Azevedo', NULL, NULL, 'AZEVEDOaluisio', '1857-04-14', '1913-01-21', 'BRA', 'São Luís - MA', 'M', 1, 'azevedo.aluisio@literledge.com', 'Gu@n@b@r@', ''),
('Manuel Bandeira', NULL, NULL, 'BANDEIRAmanuel', '1886-04-19', '1968-10-13', 'BRA', 'Recife - PE', 'M', 1, 'bandeira.manuel@literledge.com', 'Gu@n@b@r@', ''),
('Lima Barreto', NULL, NULL, 'BARRETOlima', '1881-05-13', '1922-11-01', 'BRA', 'Rio de Janeiro', 'M', 1, 'barreto.lima@literledge.com', 'Gu@n@b@r@', 'twitter.com/KaiXtr'),
('Basílio da Gama', NULL, NULL, 'BASILIOgama', '1741-04-08', '1740-04-10', 'BRA', 'São José do Rio das Mortes - M', 'M', 1, 'basilio.gama@literledge.com', 'Gu@n@b@r@', ''),
('Simone de Beauvoir', NULL, NULL, 'BEAUVOIRsimone', '1908-01-09', '1986-04-14', 'FRA', 'Paris', 'M', 1, 'simone.beauvoir@literledge.com', 'Gu@n@b@r@', ''),
('Olavo Bilac', NULL, NULL, 'BILAColavo', '1865-12-16', '1918-12-28', 'BRA', 'Rio de Janeiro - RJ', 'M', 1, 'bilac.olavo@literledge.com', 'Gu@n@b@r@', ''),
('Maria Barbosa du Bocage', NULL, NULL, 'BOCAGEbarbosa', '1765-09-15', '1805-12-21', 'POR', 'Setúbal', 'M', 1, 'bocage.barbosa@literledge.com', 'Gu@n@b@r@', ''),
('Raul Bopp', NULL, NULL, 'BOPPraul', '1898-08-04', '1984-06-02', 'BRA', 'Itaara - RS', 'M', 1, 'bopp.raul@literledge.com', 'Gu@n@b@r@', ''),
('Percy Bysshe Shelley', NULL, NULL, 'BYSSHEshelley', '1792-08-04', '1822-07-08', 'ENG', 'Field Place - Horsham', 'M', 1, 'bysshe.shelley@literledge.com', 'Gu@n@b@r@', ''),
('João Cabral de Melo Neto', NULL, NULL, 'CABRALmelo', '1920-01-09', '1999-10-09', 'BRA', 'Recife - PE', 'M', 1, 'cabral.melo.neto@literledge.com', 'Gu@n@b@r@', ''),
('Luís de Camões', NULL, NULL, 'CAMOESluis', '1524', '1580-06-10', 'POR', 'Lisboa', 'M', 1, 'camoes.luis@literledge.com', 'Gu@n@b@r@', ''),
('Lewis Carroll', NULL, NULL, 'CARROLLlewis', '1832-01-27', '1898-01-14', 'ENG', 'Chesire', 'M', 1, 'carroll.lewis@literledge.com', 'Gu@n@b@r@', ''),
('Miguel de Cervantes', NULL, NULL, 'CERVANTESmiguel', '1547-07-29', '1616-04-22', 'ESP', 'Alcalá de Henares - Castela', 'M', 1, 'cervantes.miguel@literledge.com', 'Gu@n@b@r@', ''),
('Agatha Christie', NULL, NULL, 'CHRISTIEagatha', '1890-07-15', '1976-01-12', 'ENG', 'Devon', 'M', 1, 'christie.agatha@literledge.com', 'Gu@n@b@r@', ''),
('Sir Arthur Conan Doyle', NULL, NULL, 'CONANdoyle', '1859-05-2w', '1930-07-07', 'SCO', 'Edimburg', 'M', 1, 'conan.doyle@literledge.com', 'Gu@n@b@r@', ''),
('C. S. Lewis', NULL, NULL, 'CSLEWIS', '1898-11-29', '1963-11-22', 'IRL', 'Belfast', 'M', 1, 'c.s.lewis@literledge.com', 'Gu@n@b@r@', ''),
('Euclides de Cunha', NULL, NULL, 'CUNHAeuclides', '1886-01-20', '1909', 'BRA', 'Cantagalo - RJ', 'M', 1, 'cunha.euclides@literledge.com', 'Gu@n@b@r@', ''),
('Angela Davis', NULL, NULL, 'DAVISangela', '1944-01-26', '', 'USA', 'Birmingham - Alabama', 'F', 1, 'davis.angela@literledge.com', 'Gu@n@b@r@', ''),
('René Descartes', NULL, NULL, 'DESCARTESrene', '1596-03-31', '1650-02-11', 'FRA', 'Descartes - Indre-et-Loire', 'M', 1, 'descartes.rene@literledge.com', 'Gu@n@b@r@', ''),
('Carlos Drummond de Andrade', NULL, NULL, 'DRUMMONDandrade', '1902-02-30', '1987-08-17', 'BRA', 'Itabira - MG', 'M', 1, 'drummond.andrade@literledge.com', 'Gu@n@b@r@', ''),
('Alexandre Dumas', NULL, NULL, 'DUMASalexandre', '1802-06-24', '1870-12-05', 'FRA', 'Villers-Cotterêts - Aisne', 'M', 1, 'dumas.alexandre@literledge.com', 'Gu@n@b@r@', ''),
('Émile Durkheim', NULL, NULL, 'DURKHEIMemile', '1858-04-15', '1917-11-15', 'FRA', 'Épinal - Lorena', 'M', 1, 'durkheim.emile@literledge.com', 'Gu@n@b@r@', ''),
('Umberto Eco', NULL, NULL, 'ECOumberto', '1932-01-05', '2016-02-19', 'ITA', 'Alessandria - Piedmont', 'M', 1, 'umberto.eco@literledge.com', 'Gu@n@b@r@', ''),
('Boris Fausto', NULL, NULL, 'FAUSTOboris', '1930-12-08', NULL, 'BRA', 'São Paulo - SP', 'M', 1, 'fausto.boris@literledge.com', 'Gu@n@b@r@', ''),
('Maria Firmina dos Reis', NULL, NULL, 'FIRMINAreis', '1822-03-11', '1917-11-11', 'BRA', 'S?o Lu?s - MA', 'F', 1, 'maria.firmina.reis@literledge.com', 'Gu@n@b@r@', ''),
('Jean de La Fontaine', NULL, NULL, 'FONTAINEjean', '1621-07-08', '1695-04-13', 'FRA', 'Château-Thierry - Champagne', 'M', 1, 'lafontaine.jean@literledge.com', 'Gu@n@b@r@', ''),
('Michel Foucault', NULL, NULL, 'FOUCAULTmichel', '1926-10-15', '1984-06-25', 'FRA', 'Poitiers', 'M', 1, 'foucault.michel@literledge.com', 'Gu@n@b@r@', ''),
('Anne Frank', NULL, NULL, 'FRANKanne', '1929-06-12', '1945-02-XX', 'GER', 'Frankfurt am Main', 'F', 1, 'frank.anne@literledge.com', 'Gu@n@b@r@', ''),
('L. Frank Baum', NULL, NULL, 'FRANKbaum', '1856-05-15', '1919-05-06', 'USA', 'Chittenango - NY', 'M', 1, 'frank.baum@literledge.com', 'Gu@n@b@r@', ''),
('Paulo Freire', NULL, NULL, 'FREIREpaulo', '1921-09-19', '1997-02-05', 'BRA', 'Recife - PE', 'M', 1, 'paulo.freire@literledge.com', 'Gu@n@b@r@', ''),
('Sigmund Freud', NULL, NULL, 'FREUDsigmund', '1856-05-06', '1939-09-23', 'CZE', 'Freiberg in M?hren - Moravia', 'M', 1, 'sigmund.freud@literledge.com', 'Gu@n@b@r@', ''),
('Graça Aranha', NULL, NULL, 'GRACAaranha', '1868-06-21', '1931-01-26', 'BRA', 'São Luís - MA', 'M', 1, 'graca.aranha@literledge.com', 'Gu@n@b@r@', ''),
('Graciliano Ramos', NULL, NULL, 'GRACILIANOramos', '1892-10-27', '1953-03-20', 'BRA', 'Quebrângulo - AL', 'M', 1, 'graciliano.ramos@literledge.com', 'Gu@n@b@r@', ''),
('Irmãos Grimm', 'Grimm Brothers', 'Hermanos Grimm', 'GRIMMbros', '1785-01-04-1786-02-24', '1863-09-20 1859-12-16', 'GER', 'Hanau - Hesse-Darmstadt', 'M', 1, 'grimm.bros@literledge.com', 'Gu@n@b@r@', ''),
('Bernardo Guimarães', NULL, NULL, 'GUIMARAESbernardo', '1825-08-15', '1884-03-10', 'BRA', 'Ouro Preto - MG', 'M', 1, 'bernardo.guimaraes@literledge.com', 'Gu@n@b@r@', ''),
('Thomas Hobbes', NULL, NULL, 'HOBBESthomas', '1588-04-05', '1679-12-04', 'ENG', 'Malmesbury - Wiltshire', 'M', 1, 'hobbes.thomas@literledge.com', 'Gu@n@b@r@', ''),
('Homero', 'Homer', 'Homero', 'HOMERUS', '928 a.c', '898 a.c', 'GRE', 'Esmirna', 'M', 1, 'homerus@literledge.com', 'Gu@n@b@r@', ''),
('Max Horkheimer', NULL, NULL, 'HORKHEIMERmax', '1895-02-14', '1973-07-07', 'GER', 'Esturgada', 'M', 1, 'horkheimer.max@literledge.com', 'Gu@n@b@r@', ''),
('H.P. Lovecraft', NULL, NULL, 'HPLOVECRAFT', '1890-08-20', '1937-03-15', 'USA', 'Providence - Rhode Island', 'M', 1, 'h.p.lovecraft@literledge.com', 'Gu@n@b@r@', ''),
('Victor Hugo', NULL, NULL, 'HUGOvictor', '1802-02-26', '1885-05-22', 'FRA', 'Besançon - Doubs', 'M', 1, 'hugo.victor@literledge.com', 'Gu@n@b@r@', ''),
('David Hume', NULL, NULL, 'HUMEdavid', '1711-05-07', '1776-08-25', 'SCO', 'Edimburgo', 'M', 1, 'hume.david@literledge.com', 'Gu@n@b@r@', ''),
('J. K. Rowling', NULL, NULL, 'JKROWLING', '1965-07-31', NULL, 'ENG', 'Yate - Gloucestershire', 'F', 1, 'jkrowling@literledge.com', 'Gu@n@b@r@', ''),
('J. R. R. Tolkien', NULL, NULL, 'JRRTOLKIEN', '1892-01-03', '1973-09-02', 'ENG', 'Bloemfontain', 'M', 1, 'j.r.r.tolkien@literledge.com', 'Gu@n@b@r@', ''),
('Carl Gustav Jung', NULL, NULL, 'JUNGgustav', '1875-07-26', '1961-06-06', 'SUI', 'Kesswil - Turg?via', 'M', 1, 'carl.gustav.jung@literledge.com', 'Gu@n@b@r@', ''),
('Franz Kafka', NULL, NULL, 'KAFKAfranz', '1883-06-03', '1924-06-03', 'CZE', 'Praga - Boémia', 'M', 1, 'kafka.franz@literledge.com', 'Gu@n@b@r@', ''),
('Matt Kai', NULL, NULL, 'KaiXtr', '2003-03-15', NULL, 'BRA', 'Belém - PA', 'M', 0, 'ewertonmatheus2113@gmail.com', 'M@ch@d0B@rret0', 'twitter.com/KaiXtr'),
('Immanuel Kant', NULL, NULL, 'KANTimmanuel', '1724-04-22', '1804-02-12', 'GER', 'Könisberg - Prússia', 'M', 1, 'kant.immanuel@literledge.com', 'Gu@n@b@r@', ''),
('Paulo Leminski', NULL, NULL, 'LEMINSKIpaulo', '1944-08-24', '1989-06-07', 'BRA', 'Curitiba - PR', 'M', 1, 'leminski.paulo@literledge.com', 'Gu@n@b@r@', ''),
('Clarice Lispector', NULL, NULL, 'LISPECTORclarice', '1920-12-10', '1977-12-09', 'BRA', 'Chechelnyk', 'F', 1, 'lispector.clarice@literledge.com', 'Gu@n@b@r@', ''),
('Monteiro Lobato', NULL, NULL, 'LOBATOmonteiro', '1882-04-18', '1948-06-04', 'BRA', 'Taubaté - SP', 'M', 1, 'lobato.monteiro@literledge.com', 'Gu@n@b@r@', ''),
('John Locke', NULL, NULL, 'LOCKEjohn', '1632-08-29', '1704-10-28', 'ENG', 'Wrington - Somerset', 'M', 1, 'locke.john@literledge.com', 'Gu@n@b@r@', ''),
('Machado de Assis', NULL, NULL, 'MACHADOassis', '1839-06-21', '1908-09-29', 'BRA', 'Rio de Janeiro', 'M', 1, 'machado.assis@literledge.com', 'Gu@n@b@r@', 'twitter.com/KaiXtr'),
('Nicolau Maquiavel', 'Niccolò Machiavelli', 'Nicolau Maquiavel', 'MACHIAVELLIniccolo', '1469-05-03', '1527-06-21', 'ITA', 'Florença', 'M', 1, 'machiavelli.niccolo@literledge', 'Gu@n@b@r@', ''),
('Karl Marx', NULL, NULL, 'MARXkarl', '1818-05-05', '1883-03-14', 'GER', 'Tréveris - Prússia', 'M', 1, 'marx.karl@literledge.com', 'Gu@n@b@r@', ''),
('Cecília Meirelles', NULL, NULL, 'MEIRELEScecilia', '1901-11-07', '1964-11-09', 'BRA', 'Rio de Janeiro - RJ', 'F', 1, 'meireles.cecilia@literledge.com', 'Gu@n@b@r@', ''),
('Vladimir Nabokov', NULL, NULL, 'NABOKOVvladimir', '1899-04-22', '1977-06-02', 'RUS', 'S?o Petesburgo', 'M', 1, 'nabokov.vladimir@literledge.com', 'Gu@n@b@r@', ''),
('Friedrich Nietzsche', NULL, NULL, 'NIETZSCHEfriedrich', '1844-10-15', '1900-08-25', 'GER', 'Saxônia - Prússia', 'M', 1, 'nietzsche.friedrich@literledge.com', 'Gu@n@b@r@', ''),
('George Orwell', NULL, NULL, 'ORWELLgeorge', '1903-06-25', '1950-01-21', 'ENG', 'Motihari - Bihar', 'M', 1, 'orwell.george@literledge.com', 'Gu@n@b@r@', ''),
('Oswald de Andrade', NULL, NULL, 'OSWALDandrade', '1890-01-11', '1954-10-22', 'BRA', 'São Paulo - SP', 'M', 1, 'oswald.andrade@literledge.com', 'Gu@n@b@r@', ''),
('Fernando Pessoa', NULL, NULL, 'PESSOAfernando', '1888-06-13', '1935-11-30', 'POR', 'Lisboa - POR', 'M', 1, 'pessoa.fernando@literledge.com', 'Gu@n@b@r@', ''),
('Platão', 'Plato', 'Platón', 'PLATO', '428 a.c', '348 a.c', 'GRE', 'Atenas', 'M', 1, 'plato@literledge.com', 'Gu@n@b@r@', ''),
('Raul Pompéia', NULL, NULL, 'POMPEIAraul', '1863-04-12', '1895-12-25', 'BRA', 'Angra dos Reis - RJ', 'M', 1, 'pompeia.raul@literledge.com', 'Gu@n@b@r@', ''),
('Darcy Ribeiro', NULL, NULL, 'RIBEIROdarcy', '1922-10-26', '1997-02-17', 'BRA', 'Monte Claros - MG', 'M', 1, 'ribeiro.darcy@literledge.com', 'Gu@n@b@r@', ''),
('Antoine de Saint-Exupéry', NULL, NULL, 'SAINTexupery', '1900-06-29', '1944-07-31', 'FRA', 'Lyon', 'M', 1, 'saint.exupery@literledge.com', 'Gu@n@b@r@', ''),
('Jean-Paul Sartre', NULL, NULL, 'SARTREjeanpaul', '1905-06-21', '1980-04-15', 'FRA', 'Paris', 'M', 1, 'jean.paul.sartre@literledge.com', 'Gu@n@b@r@', ''),
('Arthur Schopenhauer', NULL, NULL, 'SCHOPENHAUERarthur', '1788-02-22', '1860-09-21', 'POL', 'Danzig', 'M', 1, 'arthur.schopenhauer@literledge.com', 'Gu@n@b@r@', ''),
('William Shakespeare', NULL, NULL, 'SHAKESPEAREwilliam', '1564-04-23', '1616-04-23', 'ENG', 'Stratford-Upon-Avon', 'M', 1, 'shakespeare.william@literledge.com', 'Gu@n@b@r@', ''),
('Mary Shelley', NULL, NULL, 'SHELLEYmary', '1797-08-30', '1851-02-01', 'ENG', 'Londres', 'F', 1, 'shelley.mary@literledge.com', 'Gu@n@b@r@', ''),
('Ariano Suassuna', NULL, NULL, 'SUASSUNAariano', '1927-06-16', '2014-06-23', 'BRA', 'Cidade da Parahyba - PB', 'M', 1, 'suassuna.ariano@literledge.com', 'Gu@n@b@r@', ''),
('Mark Twain', NULL, NULL, 'TWAINmark', '1835-11-30', '1910-04-21', 'USA', 'Florida - Missouri', 'M', 1, 'twain.mark@literledge.com', 'Gu@n@b@r@', ''),
('Júlio Verne', 'Jules Verne', 'Júlio Verne', 'VERNEjules', '1878-02-08', '1905-03-24', 'FRA', 'Nantes - Pays de La Loire', 'M', 1, 'verne.jules@literledge.com', 'Gu@n@b@r@', ''),
('Gil Vicente', NULL, NULL, 'VICENTEgil', '1465', '1536', 'POR', 'Sem consenso', 'M', 1, 'vicente.gil@literledge.com', 'Gu@n@b@r@', ''),
('Max Weber', NULL, NULL, 'WEBERmax', '1864-04-21', '1920-06-14', 'GER', 'Erfurt - Prússia', 'M', 1, 'weber.max@literledge.com', 'Gu@n@b@r@', ''),
('Virginia Woolf', NULL, NULL, 'WOOLFvirginia', '1882-01-25', '1941-03-28', 'ENG', 'Kensington - Middlesex', 'F', 1, 'woolf.virginia@literledge.com', 'Gu@n@b@r@', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `auctor` (`auctor`);

--
-- Índices para tabela `editions`
--
ALTER TABLE `editions`
  ADD PRIMARY KEY (`ked`),
  ADD KEY `title` (`title`) USING BTREE;

--
-- Índices para tabela `poems`
--
ALTER TABLE `poems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auctor` (`auctor`);

--
-- Índices para tabela `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `user` (`user`);

--
-- Índices para tabela `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`),
  ADD KEY `book` (`book`);

--
-- Índices para tabela `shelves`
--
ALTER TABLE `shelves`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`,`book`),
  ADD KEY `book` (`book`);

--
-- Índices para tabela `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkey` (`fkey`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `nick` (`nick`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `editions`
--
ALTER TABLE `editions`
  MODIFY `ked` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT de tabela `poems`
--
ALTER TABLE `poems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT de tabela `requests`
--
ALTER TABLE `requests`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `shelves`
--
ALTER TABLE `shelves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`auctor`) REFERENCES `users` (`nick`);

--
-- Limitadores para a tabela `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`nick`);

--
-- Limitadores para a tabela `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`nick`);

--
-- Limitadores para a tabela `shelves`
--
ALTER TABLE `shelves`
  ADD CONSTRAINT `shelves_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`nick`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Jul-2020 às 00:12
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
  `year` varchar(7) NOT NULL DEFAULT '0000',
  `genre` char(3) NOT NULL DEFAULT 'NRM',
  `country` char(3) CHARACTER SET utf8mb4 NOT NULL DEFAULT 'BRA',
  `litschool` varchar(20) DEFAULT NULL,
  `series` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `volume` int(2) NOT NULL DEFAULT 0,
  `license` varchar(2) NOT NULL DEFAULT 'PD',
  `cdd` varchar(12) NOT NULL,
  `tags` tinytext NOT NULL,
  `visualizations` bigint(20) NOT NULL DEFAULT 0,
  `readings` bigint(20) NOT NULL DEFAULT 0,
  `warning` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `books`
--

INSERT INTO `books` (`id`, `auctor`, `year`, `genre`, `country`, `litschool`, `series`, `volume`, `license`, `cdd`, `tags`, `visualizations`, `readings`, `warning`) VALUES
('000000', 'MACHADOassis', '1881', 'NRM', 'BRA', 'Realism', 'Triologia Realista', 1, 'PD', 'B869.93', '#machado#machado-de-assis#assis#memorias-postumas#bras-cubas#realismo#realismo-brasileiro#literatura-brasileira', 0, 3, 0),
('000001', 'BARRETOlima', '1915', 'NRM', 'BRA', 'Pre-Modernism', NULL, 0, 'PD', 'B869.93', '#limabarreto#barreto#lima#modernismo#premodernismo#policarpo-quaresma#patriota#patrotismo#literatura-brasileira#classicos', 0, 0, 0),
('000002', 'MACHADOassis', '1891', 'NRM', 'BRA', 'Realism', 'Triologia Realista', 2, 'PD', 'B869.93', '#machado#machado-de-assis#assis#realismo#literatura-brasileira#realismo-brasileiro#quincas-borba#quincas#borba', 0, 0, 0),
('000003', 'MACHADOassis', '1899', 'NRM', 'BRA', 'Realism', 'Triologia Realista', 3, 'PD', 'B869.93', '#machado#machado-de-assis#assis#realismo#literatura-brasileira#realismo-brasileiro#dom-casmurro#dom#casmurro', 0, 0, 0),
('000004', 'BARRETOlima', '1948', 'NRM', 'BRA', 'Pre-Modernism', NULL, 0, 'PD', 'B869.93', '#lima-barreto#lima#barreto#pre-modernismo#literatura-brasileira#pre-modernismo-brasileiro#clara-dos-anjos#clara#dos#anjos', 0, 0, 0),
('000005', 'AZEVEDOaluisio', '1890', 'NRM', 'BRA', 'Naturalism', NULL, 0, 'PD', 'B869.93', '#naturalismo#aluisio#azevedo#aluisio-azevedo#corti?o#brazileiro#literatura-brasileira#o-cortiço', 0, 0, 1),
('000006', 'BARRETOlima', '1911', 'NTL', 'BRA', 'Pre-Modernism', NULL, 0, 'PD', '808.888', '#premodernism#premodernismo#modernismo#lima#barreto#lima-barreto#javanês#homem#sabia#o-homem-que-sabia-javanês', 0, 0, 0),
('000007', 'BARRETOlima', '1922', 'NCC', 'BRA', 'Pre-Modernism', NULL, 0, 'PD', 'B869.93', '#premodernism#premodernismo#modernismo#lima#barreto#lima-barreto#bruzundangas#bruzudangas#bruzundagas#bruzu', 0, 3, 0),
('000008', 'BARRETOlima', '1920', 'NRM', 'BRA', 'Pre-Modernism', NULL, 0, 'PD', 'B869.93', '#premodernism#premodernismo#modernismo#lima#barreto#lima-barreto#cemiterio-dos-vivos#cemiterio#vivos', 0, 0, 0),
('000009', 'MACHADOassis', '1882', 'NCC', 'BRA', NULL, NULL, 0, 'PD', 'B869.93', '#machado#assis#machado-de-assis#alienista#loucura#casa-verde#itaguai#literatura#brasileira', 0, 0, 0),
('00000A', 'ALENCARjose', '1865', 'NRM', 'BRA', 'Indianism', 'Triologia Indianista', 1, 'PD', 'B869.93', '#jose#alencar#jose-alencar#iracema#indianista#ceara', 0, 10, 0),
('00000B', 'ALENCARjose', '1857', 'NRM', 'BRA', 'Indianism', 'Triologia Indianista', 2, 'PD', 'B869.93', '#jose#alencar#jose-alencar#guarani#indianista#ceara', 0, 0, 0),
('00000C', 'ALENCARjose', '1862', 'NRM', 'BRA', NULL, 'Perfis de Mulher', 1, 'PD', 'B869.93', '#jose#alencar#jose-alencar#luciola#ceara', 0, 0, 0),
('00000D', 'BASILIOgama', '1769', 'NEC', 'BRA', 'Arcadism', NULL, 0, 'PD', 'B869.91', '#basilio-da-gama#basilio#gama#jesuitas#uraguai#guarani#colonos#indigenas', 0, 0, 0),
('00000E', 'POMPEIAraul', '1888', 'NRM', 'BRA', 'Impressionism', NULL, 0, 'PD', 'B869.93', '#raul#pompeia#raul-pompeia#ateneu#colegio#impressionismo', 0, 0, 0),
('00000F', 'CUNHAeuclides', '1902', 'NES', 'BRA', 'Naturalism', NULL, 0, 'PD', '801.95', '#euclides#cunha#euclides-da-cunha#os-sertoes#sertoes#canudos#guerra#nordeste', 0, 0, 1),
('00000G', 'ALIGHIERIdante', '1321', 'NEC', 'ITA', NULL, NULL, 0, 'PD', '851', '#dante-alighieri#dante#alighieri#inferno#divina#comedia#divina-comedia#purgatorio', 0, 0, 0),
('00000H', 'ANDRADEmario', '1928', 'NEC', 'BRA', 'Modernism', NULL, 0, 'PD', 'B869.93', '#macunaima#muiraquita#mario#andrade#mario-andrade#modernismo', 0, 21, 0),
('00000I', 'HOMERUS', '8XX a.c', 'NEC', 'GRE', NULL, NULL, 0, 'PD', '881', '#grecia#homero#homerus#iliada#odisseia#troia#aquiles#agamenon', 0, 0, 0),
('00000J', 'SHAKESPEAREwilliam', '1595', 'DTG', 'ENG', NULL, NULL, 0, 'PD', '822', '#william#shakespeare#william-shakespeare#romeu#julieta#teatro#romance', 0, 0, 0),
('00000K', 'SHAKESPEAREwilliam', '1601', 'DTG', 'ENG', NULL, NULL, 0, 'PD', '822', '#william#shakespeare#william-shakespeare#hamlet#fantasma#teatro#tragedia', 0, 0, 0),
('00000L', 'HOBBESthomas', '1651', 'NOL', 'ENG', 'Enlightment', NULL, 0, 'PD', '320.1', '#thomas#hobbes#thomas-hobbes#leviata#leviathan#contratualista#estado', 0, 0, 0),
('00000M', 'HOMERUS', '8XX a.c', 'NEC', 'GRE', NULL, NULL, 0, 'PD', '881', '#odisseia#homero#homerus#ulisses#poseidon#grecia#greek', 0, 0, 0),
('00000N', 'HUGOvictor', '1862', 'NRM', 'FRA', NULL, NULL, 0, 'PD', '843', '#victor#hugo#victor-hugo#os#miseraveis#frança#france#miserable', 0, 0, 0),
('00000O', 'CERVANTESmiguel', '1605', 'NRM', 'ESP', 'Mannerism', NULL, 0, 'PD', '860.3', '#dom#quixote#dom-quixote#cervantes#miguel#comedia', 0, 0, 0),
('00000P', 'SAINTexupery', '1943', 'NRM', 'FRA', NULL, NULL, 0, 'PD', '843', '#pequeno#principe#pequeno-principe#petit#prince#saint#exupery#antonie#saint-exupery', 0, 0, 0),
('00000Q', 'HPLOVECRAFT', '1926', 'NTL', 'USA', NULL, NULL, 0, 'PD', '813', '#horror#terror#lovecraft#hplovecraft#cthulhu#call#chamado', 0, 0, 0),
('00000R', 'MARXkarl', '1867', 'NOL', 'GER', NULL, NULL, 0, 'PD', '320.532', '#karl#marx#engels#capital#kapital#comunism#sociologia', 0, 0, 0),
('00000S', 'CAMOESluis', '1575', 'NEC', 'POR', 'Troubadorism', NULL, 0, 'PD', '869.1', '#lusíadas#lusiadas#camões#camoes#luis#trovadorismo#epico#navegações', 0, 0, 0),
('00000T', 'MACHIAVELLIniccolo', '1532', 'NOL', 'ITA', NULL, NULL, 0, 'PD', '320.4', '#machiavelli#maquiavel#nicolau#niccolo#principe#prince#republica', 0, 0, 0),
('00000U', 'CARROLLlewis', '1865', 'NRM', 'ENG', NULL, NULL, 0, 'PD', '823', '#alice#país#maravilhas#wonderland#lewis#carroll#magic#child#infantil', 0, 0, 0),
('00000V', 'CARROLLlewis', '1871', 'NRM', 'ENG', NULL, NULL, 0, 'PD', '823', '#alice#país#maravilhas#wonderland#lewis#carroll#magic#child#infantil#espelho#atraves#through#glass', 0, 0, 0),
('00000W', 'GRACILIANOramos', '1938', 'NRM', 'BRA', NULL, NULL, 0, 'PD', 'B869.93', '#graciliano#ramos#vidas#secas#baleia', 0, 0, 0),
('00000X', 'GUIMARAESbernardo', '1875', 'NRM', 'BRA', NULL, NULL, 0, 'PD', 'B869.93', '#isaura#escrava#literatura#guimaraes#bernardo', 0, 3, 0),
('00000Y', 'ANTONIOalmeida', '1854', 'NRM', 'BRA', NULL, NULL, 0, 'PD', 'B869.93', '#memorias#sargento#milicias#manuel#antonio#almeida', 0, 0, 0),
('00000Z', 'BARRETOlima', '1909', 'NRM', 'BRA', NULL, NULL, 0, 'PD', 'B869.93', '#barreto#lima#recordacoes#memorias#romance#modernismo#racismo#critica#social#isaias#caminha', 0, 0, 0),
('000010', 'CABRALmelo', '1955', 'DTG', 'BRA', 'Modernism', NULL, 0, 'PD', 'B869.91', '#retirantes#imigrantes#sertanejos#morte#vida#severina#sertoes#vidas#secas#nordeste#joao#cabral#neto#melo', 0, 0, 0),
('000011', 'VERNEjules', '1864', 'NRM', 'FRA', NULL, NULL, 0, 'PD', '843', '#viagem#centro#terra#julio#verne#submarinas#terra#lua#ilha#misteriosa#volta#mundo', 0, 0, 0),
('000012', 'VERNEjules', '1873', 'NRM', 'FRA', NULL, NULL, 0, 'PD', '843', '#viagem#centro#terra#julio#verne#submarinas#terra#lua#ilha#misteriosa#volta#mundo', 0, 0, 0),
('000013', 'VERNEjules', '1878', 'NRM', 'FRA', NULL, NULL, 0, 'PD', '843', '#viagem#centro#terra#julio#verne#submarinas#terra#lua#ilha#misteriosa#volta#mundo', 0, 0, 0),
('000014', 'ANTONIOgonzaga', '1789', 'LST', 'BRA', 'Arcadism', NULL, 0, 'PD', 'B869.91', '#cartas#chilenas#poesia#gonzaga#antonio#tomas#inconfidencia#mineira#minas#gerais#vila#rica#arcadismo', 0, 0, 0),
('000015', 'GRACAaranha', '1902', 'NRM', 'BRA', 'Pre-Modernism', NULL, 0, 'PD', 'B869.93', '#canaa#graca#aranha#premodernismo#modernismo#imigracao#immigrant', 0, 0, 0),
('000016', 'DUMASalexandre', '1844', 'NRM', 'FRA', NULL, NULL, 0, 'PD', '843', '#monte#cristo#dumas#alexandre#tres#mosqueteiros#conde', 0, 0, 0),
('000017', 'HUGOvictor', '1831', 'NRM', 'FRA', NULL, NULL, 0, 'PD', '843', '#corcunda#notre#dame#de#victor#hugo#os#miseraveis', 0, 0, 0),
('000018', 'KAFKAfranz', '1915', 'NRM', 'GER', NULL, NULL, 0, 'PD', '833', '#franz#kafka#metamorfose#filosofia#metamorphosis', 0, 0, 0),
('000019', 'DURKHEIMemile', '1897', 'NOL', 'FRA', NULL, NULL, 0, 'PD', '302.5', '#emile#durkheim#karl#marx#weber#suicide#sociology#sociologia', 0, 0, 0),
('00001A', 'DURKHEIMemile', '18XX', 'NOL', 'FRA', NULL, NULL, 0, 'PD', '300.7', '#emile#durkheim#karl#marx#weber#suicide#sociology#sociologia#montesquieu#rousseau', 0, 0, 0),
('00001B', 'DURKHEIMemile', '1893', 'NOL', 'FRA', NULL, NULL, 0, 'PD', '302.3', '#emile#durkheim#trabalho#social#sociologia#marx#weber#karl', 0, 0, 0),
('00001C', 'DURKHEIMemile', '1895', 'NOL', 'FRA', NULL, NULL, 0, 'PD', '301', '#emile#durkheim#trabalho#sociologico#regras#metodo#sociologia#marx#weber#karl', 0, 0, 0),
('00001D', 'ALENCARjose', '1874', 'NRM', 'BRA', 'Indianism', 'Triologia Indianista', 3, 'PD', 'B869.93', '#jose#de#alencar#ubirajara#romance#indianista#literatura', 0, 0, 0),
('00001E', 'FREIREpaulo', '1974', 'NOL', 'BRA', NULL, NULL, 0, 'PD', '370.111', '#pedagogo#pedagogia#educação#education#freire#paulo#ditadura#militar#alfabetização#letras', 0, 0, 0),
('00001F', 'RIBEIROdarcy', '1995', 'NOL', 'BRA', NULL, NULL, 0, 'PD', '301', '#povo#brasileiro#darcy#ribeiro', 0, 0, 0),
('00001G', 'ECOumberto', '1980', 'NRM', 'ITA', NULL, NULL, 0, 'PD', '853', '#nome#rosa#umberto#eco#della#ll#romance', 0, 0, 0),
('00001H', 'FRANKbaum', '1900', 'NRM', 'USA', NULL, NULL, 0, 'PD', '813', '#oz#alice#wonderful#wizard#wonderland#frank#baum', 0, 0, 0),
('00001I', 'ORWELLgeorge', '1945', 'NRM', 'ENG', NULL, NULL, 0, 'PD', '823', '#george#orwell#animal#farm#communism#marx#revolucao#revolution#bichos#animals', 0, 0, 0),
('00001J', 'ORWELLgeorge', '1949', 'NRM', 'ENG', NULL, NULL, 0, 'PD', '823', '#george#orwell#1984#animal#farm#marx#fascism#nazism#government', 0, 0, 0),
('00001K', 'LOBATOmonteiro', '1918', 'NTL', 'BRA', 'Pre-Modernism', NULL, 0, 'PD', '808.83', '#lobato#monteiro#urupes#premodernismo#jecatatu', 0, 0, 1),
('00001L', 'LOBATOmonteiro', '1926', 'NRM', 'BRA', NULL, NULL, 0, 'PD', 'B869.93', '#lobato#monteiro#presidente#negro#choque#racas', 0, 0, 1),
('00001M', 'LOBATOmonteiro', '1931', 'NRM', 'BRA', NULL, 'Sítio do Picapau Amarelo', 1, 'PD', 'B869.93', '#lobato#monteiro#narizinho#emilia#reinacoes#sitio#picapau#amarelo', 0, 0, 0),
('00001N', 'FIRMINAreis', '1859', 'NRM', 'BRA', NULL, NULL, 0, 'PD', 'B869.93', '#maria#firmina#dos#reis#ursula#romance#mulher#escritora#negra', 0, 0, 0),
('00001O', 'NIETZSCHEfriedrich', '1885', 'NOL', 'GER', NULL, NULL, 0, 'PD', '149.8', '#nietzsche#friedrich#zarathustra#zaratustra#thus#spoke#assim#falou#filosofia#niilismo', 0, 0, 0),
('00001P', 'TWAINmark', '1876', 'NRM', 'USA', NULL, NULL, 0, 'PD', '813', '#mark#twain#tom#sawyer#adventures#aventuras', 0, 0, 0),
('00001Q', 'ALLANpoe', '1841', 'NTL', 'USA', NULL, NULL, 0, 'PD', '813', '#edgar#allan#poe#tale#assassinatos#morgue#street#rua', 0, 0, 0),
('00001R', 'ANDERSENhans', '1843', 'NTL', 'DEN', NULL, NULL, 0, 'PD', '839.81', '#hans#christian#andersen#patinho#feio#duck#ugly#duckling', 0, 0, 0),
('00001S', 'SUASSUNAariano', '1955', 'DAC', 'BRA', NULL, NULL, 0, 'PD', 'B869.92', '#teatro#theater#auto#compadecida#ariano#suassuna#grilo#chico#peca', 0, 0, 0),
('00001T', 'VICENTEgil', '1517', 'DAC', 'POR', NULL, 'Triologia das Barcas', 1, 'PD', '869.2', '#teatro#theater#auto#peca#barca#inferno#gil#vicente#drama', 0, 0, 0),
('00001U', 'AZEVEDOaluisio', '1881', 'NRM', 'BRA', 'Naturalism', NULL, 0, 'PD', 'B869.93', '#naturalismo#mulato#o#aluisio#azevedo#cortico#brasileiro#racismo#preconceito#maranhao', 0, 0, 0),
('00001V', 'ANTONIOgonzaga', '1792', 'LOD', 'BRA', 'Arcadism', NULL, 0, 'PD', 'B869.91', '#arcadismo#marilia#de#dirceu#poema#poesia#vila#rica#lisboa#tomas#antonio#gonzaga', 0, 0, 0),
('00001W', 'JKROWLING', '1997', 'NRM', 'ENG', NULL, 'Harry Potter', 1, 'CR', '823', '#harry#potter#filosofal#sorcerer#wizard#hogwarts#stone#pedra#hermione#rony#grifinoria#gryffindor#dumbledore', 0, 0, 0),
('00001X', 'JKROWLING', '1998', 'NRM', 'ENG', NULL, 'Harry Potter', 2, 'CR', '823', '#harry#potter#wizard#hogwarts#hermione#rony#grifinoria#gryffindor#dumbledore#camara#secreta#secrets#chamber', 0, 0, 0),
('00001Y', 'JKROWLING', '2000', 'NRM', 'ENG', NULL, 'Harry Potter', 3, 'CR', '823', '#harry#potter#r#wizard#hogwarts#hermione#rony#grifinoria#gryffindor#dumbledore#azkaban#prisioneiro#prisioner', 0, 0, 0),
('00001Z', 'JKROWLING', '2000', 'NRM', 'ENG', NULL, 'Harry Potter', 4, 'CR', '823', '#harry#potter#wizard#hogwarts#hermione#rony#grifinoria#gryffindor#dumbledore#calice#fogo#fire#goblet', 0, 0, 0),
('000020', 'JKROWLING', '2003', 'NRM', 'ENG', NULL, 'Harry Potter', 5, 'CR', '823', '#harry#potter#wizard#hogwarts#hermione#rony#grifinoria#gryffindor#dumbledore#fenix#ordem#order#phoenix', 0, 0, 0),
('000021', 'JKROWLING', '2005', 'NRM', 'ENG', NULL, 'Harry Potter', 6, 'CR', '823', '#harry#potter#wizard#hogwarts#hermione#rony#grifinoria#gryffindor#dumbledore#enigma#prince#principe#half#blood', 0, 0, 0),
('000022', 'JKROWLING', '2007', 'NRM', 'ENG', NULL, 'Harry Potter', 7, 'CR', '823', '#harry#potter#wizard#hogwarts#hermione#rony#grifinoria#gryffindor#dumbledore#deathly#hallows#reliquias#morte', 0, 0, 0),
('000023', 'FRANKanne', '1947', 'NCC', 'NED', NULL, NULL, 0, 'PD', '849.2', '#anne#frank#nazism#nazismo#netherlands#paises#baixo#diary#diario#guerra', 0, 0, 0),
('000024', 'JRRTOLKIEN', '1954', 'NRM', 'ENG', NULL, 'O Senhor dos Anéis', 1, 'PD', '823', '#jrrtolkien#tolkien#lord#of#the#rings#anel#aneis#sociedade#mordor#hobbit#gandalf#legolas', 0, 0, 0),
('000025', 'JRRTOLKIEN', '1954', 'NRM', 'ENG', NULL, 'O Senhor dos Anéis', 2, 'PD', '823', '#jrrtolkien#tolkien#lord#of#the#rings#anel#aneis#sociedade#mordor#hobbit#gandalf#legolas#duas#torres', 0, 0, 0),
('000026', 'JRRTOLKIEN', '1955', 'NRM', 'ENG', NULL, 'O Senhor dos Anéis', 3, 'PD', '823', '#jrrtolkien#tolkien#lord#of#the#rings#anel#aneis#sociedade#mordor#hobbit#gandalf#legolas#retorno#do#rei#return#king', 0, 0, 0),
('000027', 'CONANdoyle', '1888', 'NRM', 'ENG', NULL, 'Sherlock Holmes', 1, 'PD', '823', '#sherlock#holmes#estudo#vermelho#scarlet#study#arthur#conan#doyle#detective#watson#police', 0, 0, 0),
('000028', 'CONANdoyle', '1890', 'NRM', 'ENG', NULL, 'Sherlock Holmes', 2, 'PD', '823', '#sherlock#holmes#arthur#conan#doyle#watson#detective#police#sign#four#signo#quatro', 0, 0, 0),
('000029', 'CONANdoyle', '1902', 'NRM', 'ENG', NULL, 'Sherlock Holmes', 3, 'PD', '823', '#sherlock#holmes#arthur#conan#doyle#watson#detective#police#baskervilles#dogs#cao#hound', 0, 0, 0),
('00002A', 'CONANdoyle', '1902', 'NRM', 'ENG', NULL, 'Sherlock Holmes', 4, 'PD', '823', '#sherlock#holmes#arthur#conan#doyle#watson#detective#police#vale#medo#fear#valley#terror#valle', 0, 0, 0),
('00002B', 'DAHLroald', '1964', 'NRM', 'ENG', NULL, NULL, 0, 'PD', '823', '#charlie#chocolate#factory#fabrica#fantasitca#fantastic#dahl#roald#willy#wonka#oompa#loompa', 0, 0, 0),
('00002C', 'AUSTENjane', '1813', 'NRM', 'ENG', NULL, NULL, 0, 'PD', '823', '#jane#austen#feminism#pride#prejudice#woman#girl#orgulho#preconceito', 0, 0, 0),
('00002D', 'SHELLEYmary', '1818', 'NRM', 'ENG', NULL, NULL, 0, 'PD', '823', '#mary#shelley#frank#stein#frankstein#frankeinstein#horror#monsters#terror', 0, 0, 0),
('00002E', 'SUNtzu', '4XX a.c', 'NOL', 'CHN', NULL, NULL, 0, 'PD', '181', '#china#war#art#arte#guerra#sun#tzu#militar#estrategia#strategy', 0, 0, 0),
('00002F', 'ZUSAKmarkus', '2005', 'NRM', 'AUS', NULL, NULL, 0, 'CR', '823', '#book#thief#garota#roubava#livros#rapariga#filme#movie#zusak#nazism#alemanha#hitler#morte#death#menina#ladrona#ladra', 0, 0, 0),
('00002G', 'BOYNEjohn', '2006', 'NRM', 'IRL', NULL, NULL, 0, 'CR', '823', '#nazismo#holocausto#pijama#riscas#listrado#striped#boy#garoto#menino#judeus#juvenil', 0, 0, 0),
('00002H', 'HEMINGWAYernest', '1940', 'NRM', 'USA', NULL, NULL, 0, 'PD', '813', '#hemin#ernest#emingway#sinos#dobram#por#quem#porquem#se#os#whom#bells#tholls#war#spain#civil#espanhola', 0, 0, 0),
('00002I', 'MANNthomas', '1924', 'NRM', 'GER', NULL, NULL, 0, 'PD', '833', '#mont#mountain#magic#encantada#magica#thomas#mann', 0, 0, 0),
('00002J', 'STRITAdurao', '1781', 'NEC', 'BRA', 'Arcadism', NULL, 0, 'PD', 'B869.93', '#arcadism#indio#indigena#bahia#colonia#colonizador#padre#santo#rita#durao#luso#lusitano#epico', 0, 0, 0),
('00002K', 'KIPLINGrudyard', '1894', 'NTL', 'ENG', NULL, NULL, 0, 'PD', '823', '#mogli#selva#jungle#forest#india#disney#menino', 0, 0, 0),
('00002L', 'DEFOEdaniel', '1719', 'NRM', 'ENG', 'Romanticism', NULL, 0, 'PD', '823', '#robinson#crusoe#survival#island#lost#friday#sea#beach', 0, 0, 0),
('00002M', 'PYLEhoward', '1883', 'NNV', 'USA', NULL, NULL, 0, 'PD', '813', '#robin#hood#bow#arrow#disney#tuck#john#lion#king#forest', 0, 0, 0),
('00002N', 'SCOTTwalter', '1820', 'NRM', 'ENG', NULL, NULL, 0, 'PD', '823', '#ivanhoe#king#lion#heart#ricardo#coracao#leao#historico', 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `editions`
--

CREATE TABLE `editions` (
  `title` char(6) NOT NULL,
  `language` char(2) NOT NULL DEFAULT 'EN',
  `credit` tinytext DEFAULT NULL,
  `link` varchar(70) NOT NULL DEFAULT 'https://www.dropbox.com/s/',
  `filtyp` set('epub','rtf','pdf','mp3','odt') NOT NULL DEFAULT 'epub',
  `price` decimal(4,2) DEFAULT NULL,
  `id` char(2) NOT NULL,
  `ked` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `editions`
--

INSERT INTO `editions` (`title`, `language`, `credit`, `link`, `filtyp`, `price`, `id`, `ked`) VALUES
('000000', 'PT', 'Project Gutenberg', 's/7r2a20ikwdyk7me/000000-00.epub?dl=0', 'epub', '0.00', '00', 1),
('000001', 'PT', 'Fundação Biblioteca Nacional', 's/i8i6nz8tjer8f90/000001-00.epub?dl=0', 'epub', '0.00', '00', 2),
('000001', 'PT', 'Fundação Biblioteca Nacional', 's/j1mf1gqsjapds94/000001-01.pdf?dl=0', 'pdf', '0.00', '01', 3),
('000002', 'PT', 'Project Gutenberg', 's/jhhpazejtvz5h2h/000002-00.epub?dl=0', 'epub', '0.00', '00', 4),
('000003', 'PT', 'Project Gutenberg', 's/r45hv5366j2hlvu/000003-00.epub?dl=0', 'epub', '0.00', '00', 5),
('000004', 'PT', 'Fundação Biblioteca Nacional', 's/cr2nlm948x21il2/000004-00.epub?dl=0', 'epub', '0.00', '00', 6),
('000004', 'PT', 'Fundação Biblioteca Nacional', 's/3kxq7m46vcryool/000004-01.pdf?dl=0', 'pdf', '0.00', '01', 7),
('000005', 'PT', 'Fundação Biblioteca Nacional', 's/u5c1pmp9k3ybfez/000005-00.epub?dl=0', 'epub', '0.00', '00', 8),
('000005', 'PT', 'Fundação Biblioteca Nacional', 's/x0b6fy3ey1oa8rm/000005-01.pdf?dl=0', 'pdf', '0.00', '01', 9),
('000006', 'PT', 'Biblioteca Virtual do Estudante Brasileiro', 's/r4eoyml1u53m4iz/000006-00.epub?dl=0', 'epub', '0.00', '00', 10),
('000006', 'PT', 'Biblioteca Virtual do Estudante Brasileiro', 's/k1n5l2n70wlu05r/000006-01.pdf?dl=0', 'pdf', '0.00', '01', 11),
('000007', 'PT', 'Fundação Biblioteca Nacional', 's/tdyihkodeaa8vka/000007-00.epub?dl=0', 'epub', '0.00', '00', 12),
('000007', 'PT', 'Fundação Biblioteca Nacional', 's/svx98d32psx9w8g/000007-01.pdf?dl=0', 'pdf', '0.00', '01', 13),
('000008', 'PT', 'Fundação Biblioteca Nacional', 's/9sfoqoxp3j12z43/000008-00.epub?dl=0', 'epub', '0.00', '00', 14),
('000008', 'PT', 'Fundação Biblioteca Nacional', 's/2hwbohi18g9lchv/000008-01.pdf?dl=0', 'pdf', '0.00', '01', 15),
('000009', 'PT', 'Fundação Biblioteca Nacional', 's/wvsrqgicsqvv2u7/000009-00.epub?dl=0', 'epub', '0.00', '00', 16),
('000009', 'PT', 'Fundação Biblioteca Nacional', 's/wscwa70b5feztno/000009-01.pdf?dl=0', 'pdf', '0.00', '01', 17),
('00000A', 'PT', 'Fundação Biblioteca Nacional', 's/a24ruycwt5ig1qe/00000A-00.epub?dl=0', 'epub', '0.00', '00', 18),
('00000A', 'PT', 'Fundação Biblioteca Nacional', 's/s9i3tqgs032oe8q/00000A-01.pdf?dl=0', 'pdf', '0.00', '01', 19),
('00000B', 'PT', 'Biblioteca Virtual do Estudante Brasileiro', 's/d9a4j8yzynz2ijn/00000B-00.epub?dl=0', 'epub', '0.00', '00', 20),
('00000B', 'PT', 'Biblioteca Virtual do Estudante Brasileiro', 's/gf8ma6fu5i9n0sz/00000B-01.pdf?dl=0', 'pdf', '0.00', '01', 21),
('00000C', 'PT', 'Fundação Biblioteca Nacional', 's/7gca02qglj75ugf/00000C-00.epub?dl=0', 'epub', '0.00', '00', 22),
('00000C', 'PT', 'Fundação Biblioteca Nacional', 's/i132yqqcbn88hwo/00000C-01.pdf?dl=0', 'pdf', '0.00', '01', 23),
('00000D', 'PT', 'Fundação Biblioteca Nacional', 's/14mirnij8g4vc31/00000D-00.epub?dl=0', 'epub', '0.00', '00', 24),
('00000D', 'PT', 'Fundação Biblioteca Nacional', 's/hfkbxg9nd1qehm8/00000D-01.pdf?dl=0', 'pdf', '0.00', '01', 25),
('00000E', 'PT', 'Fundação Biblioteca Nacional', 's/tcgua422rrfg243/00000E-00.epub?dl=0', 'epub', '0.00', '00', 26),
('00000E', 'PT', 'Fundação Biblioteca Nacional', 's/xi6wlpzmbwhexsi/00000E-01.pdf?dl=0', 'pdf', '0.00', '01', 27),
('00000F', 'PT', 'Fundação Biblioteca Nacional', 's/j07w4dta8mqqc07/00000F-00.epub?dl=0', 'epub', '0.00', '00', 28),
('00000F', 'PT', 'Fundação Biblioteca Nacional', 's/vgyutyqius281il/00000F-01.pdf?dl=0', 'pdf', '0.00', '01', 29),
('00000G', 'PT', 'eBooksBrasil', 's/d28krda1q3by47e/00000G-00.epub?dl=0', 'epub', '0.00', '00', 30),
('00000G', 'PT', 'eBooksBrasil', 's/jg7yqa4dukuq1kp/00000G-01.pdf?dl=0', 'pdf', '0.00', '01', 31),
('00000H', 'PT', 'Instituto Federal Fluminense', 's/zvkeqz6a519n5gg/00000H-00.epub?dl=0', 'epub', '0.00', '00', 32),
('00000H', 'PT', 'Instituto Federal Fluminense', 's/ahy4shkh1mk9mch/00000H-01.pdf?dl=0', 'pdf', '0.00', '01', 33),
('00000I', 'PT', 'eBooksBrasil', 's/fl5fexzrzfblea2/00000I-00.epub?dl=0', 'epub', '0.00', '00', 34),
('00000J', 'PT', 'eBooksBrasil', 's/m587zej89l4u6rj/00000J-00.epub?dl=0', 'epub', '0.00', '00', 36),
('00000K', 'PT', 'eLivros', 's/93c32d7etjz58eh/00000K-00.epub?dl=0', 'epub', '0.00', '00', 38),
('00000K', 'PT', 'eLivros', 's/nega024179ea0li/00000K-01.pdf?dl=0', 'pdf', '0.00', '01', 39),
('00000L', 'PT', 'dhnet.org', 's/eosuq2jraften0d/00000L-00.epub?dl=0', 'epub', '0.00', '00', 40),
('00000L', 'PT', 'dhnet.org', 's/d89qmnhu3d4xyhw/00000L-01.pdf?dl=0', 'pdf', '0.00', '01', 41),
('00000M', 'PT', 'eBooksBrasil', 's/4z6pn04uxh0pfny/00000M-00.epub?dl=0', 'epub', '0.00', '00', 42),
('00000M', 'PT', 'eBooksBrasil', 's/isldi9lhs9iqmrd/00000M-01.pdf?dl=0', 'pdf', '0.00', '01', 43),
('00000N', 'PT', 'LeLivros', 's/c3ocy1wj5inv8sm/00000N-00.epub?dl=0', 'epub', '0.00', '00', 44),
('00000N', 'PT', 'LeLivros', 's/d1dijnrkitmf5gi/00000N-01.pdf?dl=0', 'pdf', '0.00', '01', 45),
('00000O', 'PT', 'eLivros', 's/xssztw8w0cgyeqh/00000O-00.epub?dl=0', 'epub', '0.00', '00', 46),
('00000O', 'PT', 'eLivros', 's/5xxgbe67ldtjuu3/00000O-01.pdf?dl=0', 'pdf', '0.00', '01', 47),
('00000P', 'PT', 'eLivros', 's/66kqa7r7pyr5zmc/00000P-00.epub?dl=0', 'epub', '0.00', '00', 48),
('00000P', 'PT', 'eLivros', 's/x7m0ol2yqevnqrf/00000P-01.pdf?dl=0', 'pdf', '0.00', '01', 49),
('00000Q', 'PT', 'Filosofia Nerd', 's/unuxcl3wx0xktkk/00000Q-00.epub?dl=0', 'epub', '0.00', '00', 50),
('00000Q', 'PT', 'Filosofia Nerd', 's/xm5r71yyybjdeuq/00000Q-01.pdf?dl=0', 'pdf', '0.00', '01', 51),
('00000R', 'PT', 'Coletivo Contra Corrente', 's/chhtavqq5lc8010/00000R-00.epub?dl=0', 'epub', '0.00', '00', 52),
('00000R', 'PT', 'Coletivo Contra Corrente', 's/39p22aizn58eu9u/00000R-01.pdf?dl=0', 'pdf', '0.00', '01', 53),
('00000S', 'PT', 'Biblioteca Virtual do Estudante Brasileiro', 's/oxud4551e69w4eq/00000S-00.epub?dl=0', 'epub', '0.00', '00', 54),
('00000S', 'PT', 'Biblioteca Virtual do Estudante Brasileiro', 's/jdymjy0qy6bzgf5/00000S-01.pdf?dl=0', 'pdf', '0.00', '01', 55),
('00000T', 'PT', 'Baixe.net', 's/90e6dcrcun02m7c/00000T-00.epub?dl=0', 'epub', '0.00', '00', 56),
('00000T', 'PT', 'Baixe.net', 's/89k20cnoy77r676/00000T-01.pdf?dl=0', 'pdf', '0.00', '01', 57),
('00000U', 'PT', 'eBooksBrasil', 's/31yvgyqa5a2mw6y/00000U-00.epub?dl=0', 'epub', '0.00', '00', 58),
('00000U', 'PT', 'eBooksBrasil', 's/hhcme49iwr5vfar/00000U-01.pdf?dl=0', 'pdf', '0.00', '01', 59),
('00000V', 'PT', 'Sweetdreamside.wordpress', 's/hl4preyfrhkrmc7/00000V-00.epub?dl=0', 'epub', '0.00', '00', 60),
('00000V', 'PT', 'Sweetdreamside.wordpress', 's/ucaq1mz33x7lkxj/00000V-01.pdf?dl=0', 'pdf', '0.00', '01', 61),
('00000W', 'PT', 'eLivros', 's/4lw6lt5ifdvvwz2/00000W-00.epub?dl=0', 'epub', '0.00', '00', 62),
('00000W', 'PT', 'eLivros', 's/i7lrec43hc0o884/00000W-01.pdf?dl=0', 'pdf', '0.00', '01', 63),
('00000X', 'PT', 'Biblioteca Virtual do Estudante Brasileiro', 's/n3cglriu4u8p69c/00000X-00.epub?dl=0', 'epub', '0.00', '00', 64),
('00000X', 'PT', 'Biblioteca Virtual do Estudante Brasileiro', 's/d8b9gy4z52xzo3h/00000X-01.pdf?dl=0', 'pdf', '0.00', '01', 65),
('00000Y', 'PT', 'Biblioteca Virtual do Estudante Brasileiro', 's/9gf6u8mh0g16iyz/00000Y-00.epub?dl=0', 'epub', '0.00', '00', 66),
('00000Y', 'PT', 'Biblioteca Virtual do Estudante Brasileiro', 's/s6kbvyoztcvgudy/00000Y-01.pdf?dl=0', 'pdf', '0.00', '01', 67),
('00000Z', 'PT', 'Biblioteca Virtual do Estudante Brasileiro', 's/ysxq9ut4q95hnzy/00000Z-00.epub?dl=0', 'epub', '0.00', '00', 68),
('00000Z', 'PT', 'Biblioteca Virtual do Estudante Brasileiro', 's/t3p36e6uqpjn6aa/00000Z-01.pdf?dl=0', 'pdf', '0.00', '01', 69),
('000010', 'PT', 'Universidade da Amazônia', 's/xyi1a4ea8lruj9u/000010-00.epub?dl=0', 'epub', '0.00', '00', 70),
('000010', 'PT', 'Universidade da Amazônia', 's/lflcfr18qjyq4fm/000010-01.PDF?dl=0', 'pdf', '0.00', '01', 71),
('000011', 'PT', 'EBC.com.br', 's/n97swmhl8fkjstw/000011-00.epub?dl=0', 'epub', '0.00', '00', 72),
('000011', 'PT', 'EBC.com.br', 's/nrf1spozmb9zf3g/000011-01.pdf?dl=0', 'pdf', '0.00', '01', 73),
('000012', 'PT', 'EBC.com.br', 's/0433zsbx4lkla7c/000012-00.epub?dl=0', 'epub', '0.00', '00', 74),
('000012', 'PT', 'EBC.com.br', 's/di6v1rxibbw2qej/000012-01.pdf?dl=0', 'pdf', '0.00', '01', 75),
('000013', 'PT', 'EBC.com.br', 's/66zm5cmotvprz6z/000013-00.epub?dl=0', 'epub', '0.00', '00', 76),
('000013', 'PT', 'EBC.com.br', 's/s786tcwv5b1mo5t/000013-01.pdf?dl=0', 'pdf', '0.00', '01', 77),
('000000', 'EN', 'EPDF.pub', 's/fm3eytadsbqqta0/000000-01.epub?dl=0', 'epub', '0.00', '01', 78),
('000000', 'EN', 'EPDF.pub', 's/9n8rpjrlsvcy3zl/000000-02.pdf?dl=0', 'pdf', '0.00', '02', 79),
('000000', 'ES', 'Hola Ebook', 's/t8lejjxkd1o8vxe/000000-03.epub?dl=0', 'epub', '0.00', '03', 80),
('000000', 'ES', 'Hola Ebook', 's/nimluf29r7trk4s/000000-04.pdf?dl=0', 'pdf', '0.00', '04', 81),
('000002', 'ES', 'Hola Ebook', 's/1rmrgzh1oea8upj/000002-03.epub?dl=0', 'epub', '0.00', '03', 82),
('000002', 'ES', 'Hola Ebook', 's/hq9m8erwmsn284e/000002-04.pdf?dl=0', 'pdf', '0.00', '04', 83),
('000003', 'ES', 'Hola Ebook', 's/e1j4qthd1r1nav1/000003-03.epub?dl=0', 'epub', '0.00', '03', 84),
('000003', 'ES', 'Hola Ebook', 's/onpiykta47t7c67/000003-04.pdf?dl=0', 'pdf', '0.00', '04', 85),
('000009', 'ES', 'Hola Ebook', 's/pe0fz83qx0s6ybt/000009-04.epub?dl=0', 'epub', '0.00', '04', 86),
('000009', 'ES', 'Hola Ebook', 's/6rofh1hyt85geaa/000009-05.pdf?dl=0', 'pdf', '0.00', '05', 87),
('000014', 'PT', 'Biblioteca Virtual do Estudante Brasileiro', 's/4whkr3uj5wrl16k/000014-00.epub?dl=0', 'epub', '0.00', '00', 88),
('000014', 'PT', 'Biblioteca Virtual do Estudante Brasileiro', 's/s9sic5c2c5p37br/000014-01.pdf?dl=0', 'pdf', '0.00', '01', 89),
('000015', 'PT', 'Link Livros', 's/0y5p7v0h1p6ll4o/000015-00.epub?dl=0', 'epub', '0.00', '00', 90),
('000015', 'PT', 'Link Livros', 's/91z5b3yhdroz6zk/000015-01.pdf?dl=0', 'pdf', '0.00', '01', 91),
('000016', 'PT', 'Baixe Livros', 's/0yxanrcznwfoyeu/000016-00.epub?dl=0', 'epub', '0.00', '00', 92),
('000016', 'PT', 'Baixe Livros', 's/4s9ykioud98o89x/000016-01.pdf?dl=0', 'pdf', '0.00', '01', 93),
('000017', 'PT', 'elivros.love', 's/pt6zxslyy3rjn69/000017-00.epub?dl=0', 'epub', '0.00', '00', 94),
('000017', 'PT', 'elivros.love', 's/9y4wrv0cu5cc33l/000017-01.pdf?dl=0', 'pdf', '0.00', '01', 95),
('000018', 'PT', 'Universidade da Amazônia', 's/dn6n69zktfatrhv/000018-00.epub?dl=0', 'epub', '0.00', '00', 96),
('000018', 'PT', 'Universidade da Amazônia', 's/yp6uuhy1dkvp2n2/000018-01.pdf?dl=0', 'pdf', '0.00', '01', 97),
('000019', 'PT', 'Farofa Filosófica', 's/lvqixja6431h35g/000019-00.epub?dl=0', 'epub', '0.00', '00', 98),
('000019', 'PT', 'Farofa Filosófica', 's/j7oowdhzpfvaqrb/000019-01.pdf?dl=0', 'pdf', '0.00', '01', 99),
('00001A', 'PT', 'Farofa Filosófica', 's/b9zcbgonztj8yxu/00001A-00.epub?dl=0', 'epub', '0.00', '00', 100),
('00001A', 'PT', 'Farofa Filosófica', 's/b9zcbgonztj8yxu/00001A-00.epub?dl=0', 'pdf', '0.00', '01', 101),
('00001B', 'PT', 'Farofa Filosófica', 's/u594yvldcwwyzsl/00001B-00.epub?dl=0', 'epub', '0.00', '00', 102),
('00001B', 'PT', 'Farofa Filosófica', 's/fq9llkjlyrrr5rj/00001B-01.pdf?dl=0', 'pdf', '0.00', '01', 103),
('00001C', 'PT', 'Farofa Filosófica', 's/mdn74pxl58nvfdf/00001C-00.epub?dl=0', 'epub', '0.00', '00', 104),
('00001C', 'PT', 'Farofa Filosófica', 's/hhw7go5mgbxd8z0/00001C-01.pdf?dl=0', 'pdf', '0.00', '01', 105),
('00001D', 'PT', 'Universidade da Amazônia', 's/0z2sstkutrra0yj/00001D-00.epub?dl=0', 'epub', '0.00', '00', 107),
('00001D', 'PT', 'Universidade da Amazônia', 's/puuj2798s4o5o6z/00001D-01.pdf?dl=0', 'pdf', '0.00', '01', 108),
('00001E', 'PT', 'Paz e Terra', 's/09ep16l1n3s0ep0/00001E-00.epub?dl=0', 'epub', '0.00', '00', 109),
('00001E', 'PT', 'Paz e Terra', 's/efwqk7pj432ancj/00001E-01.pdf?dl=0', 'pdf', '0.00', '01', 110),
('00001F', 'PT', 'Companhia das Letras', 's/o98qgu1jjoae746/00001F-00.epub?dl=0', 'epub', '0.00', '00', 111),
('00001F', 'PT', 'Companhia das Letras', 's/txbk80zscrowu3q/00001F-01.pdf?dl=0', 'pdf', '0.00', '01', 112),
('00001G', 'PT', 'eLivros', 's/mg4i12ohb8tcpho/00001G-00.epub?dl=0', 'epub', '0.00', '00', 113),
('00001G', 'PT', 'eLivros', 's/w6hivuuue5fyi4g/00001G-01.pdf?dl=0', 'pdf', '0.00', '01', 114),
('00001H', 'PT', 'Editora Zahar', 's/o4p9c6fsxz24hg6/00001H-00.epub?dl=0', 'epub', '0.00', '00', 115),
('00001H', 'PT', 'Editora Zahar', 's/xonsxkznzz4q69r/00001H-01.pdf?dl=0', 'pdf', '0.00', '01', 116),
('00001I', 'PT', 'LeLivros', 's/vfzdusy90w9m6it/00001I-00.epub?dl=0', 'epub', '0.00', '00', 117),
('00001J', 'PT', 'LeLivros', 's/qzj3ggktxrktly6/00001J-00.epub?dl=0', 'epub', '0.00', '00', 118),
('00001K', 'PT', 'UTFPR', 's/hxy1jpb11t7a5cp/00001K-00.epub?dl=0', 'epub', '0.00', '00', 119),
('00001K', 'PT', 'UTFPR', 's/u5or6erw5236xtr/00001K-01.pdf?dl=0', 'pdf', '0.00', '01', 120),
('00001L', 'PT', 'Digital Source', 's/cfhxgw83wrx6yhu/00001L-00.epub?dl=0', 'epub', '0.00', '00', 121),
('00001L', 'PT', 'Digital Source', 's/br0y7qerwbdm3r2/00001L-01.pdf?dl=0', 'pdf', '0.00', '01', 122),
('00001M', 'PT', 'Recicla Leitores', 's/xwyrq6iow2cxls0/00001M-00.epub?dl=0', 'epub', '0.00', '00', 123),
('00001M', 'PT', 'Recicla Leitores', 's/bkqr4k8dglxdzny/00001M-01.pdf?dl=0', 'pdf', '0.00', '01', 124),
('00001N', 'PT', 'Academia Brasileira de Letras', 's/8h58k68bxkchadp/00001N-00.epub?dl=0', 'epub', '0.00', '00', 125),
('00001N', 'PT', 'Academia Brasileira de Letras', 's/i1zm8mwmhtk374f/00001N-01.pdf?dl=0', 'pdf', '0.00', '01', 126),
('', 'PT', 'ebooksbrasil', 's/xssztw8w0cgyeqh/00000O-00.epub?dl=0', 'epub', '0.00', '00', 127),
('00001O', 'PT', 'ebooksbrasil', 's/rm0w3yygiw01lm3/00001O-01.pdf?dl=0', 'pdf', '0.00', '01', 128),
('00001P', 'PT', 'Ediora Rideel', 's/iax3sbmyd3y2n7y/00001P-00.epub?dl=0', 'epub', '0.00', '00', 129),
('00001P', 'PT', 'Ediora Rideel', 's/zxzuhaj7arffwl6/00001P-01.pdf?dl=0', 'pdf', '0.00', '01', 130),
('00001Q', 'PT', 'Estante Digital', 's/bgbrd0naqpdax9q/00001Q-00.epub?dl=0', 'epub', '0.00', '00', 131),
('00001Q', 'PT', 'Estante Digital', 's/4tfbueozhqifzjo/00001Q-01.pdf?dl=0', 'pdf', '0.00', '01', 132),
('00001R', 'PT', 'Secretaria de Eduação e do Esporte do Paraná', 's/pf1n6ot36m8da94/00001R-00.epub?dl=0', 'epub', '0.00', '00', 133),
('00001R', 'PT', 'Secretaria de Eduação e do Esporte do Paraná', 's/3iz6du77t831q17/00001R-01.pdf?dl=0', 'pdf', '0.00', '01', 134),
('00001S', 'PT', 'LeLivros', 's/dup6f1ejpk1s04d/00001S-00.epub?dl=0', 'epub', '0.00', '00', 135),
('00001S', 'PT', 'LeLivros', 's/77vavan1xqydsd6/00001S-01.pdf?dl=0', 'pdf', '0.00', '01', 136),
('00001T', 'PT', 'Luso Livros', 's/1wte34nhwuz2rak/00001T-00.epub?dl=0', 'epub', '0.00', '00', 137),
('00001T', 'PT', 'Luso Livros', 's/63ma2qrb8ucwtcz/00001T-01.pdf?dl=0', 'pdf', '0.00', '01', 138),
('00001U', 'PT', 'Fundação Biblioteca Nacional', 's/lxyg6owp5stlxn5/00001U-00.epub?dl=0', 'epub', '0.00', '00', 139),
('00001U', 'PT', 'Fundação Biblioteca Nacional', 's/a74g5tn0v18f668/00001U-01.pdf?dl=0', 'pdf', '0.00', '01', 140),
('00001V', 'PT', 'Fundação Biblioteca Nacional', 's/2thfncqj2d2s6zb/00001V-00.epub?dl=0', 'epub', '0.00', '00', 141),
('00001V', 'PT', 'Fundação Biblioteca Nacional', 's/ffiwu4twp2gpo8y/00001V-01.pdf?dl=0', 'pdf', '0.00', '01', 142),
('000023', 'PT', 'leLivros', 's/p5i4udq65vi8hog/000023-00.epub?dl=0', 'epub', '0.00', '00', 143),
('000023', 'PT', 'leLivros', 's/t0my9w8vmbhayck/000023-01.pdf?dl=0', 'pdf', '0.00', '01', 144),
('000024', 'PT', 'eLivros', 's/93qs2rm6zdcoikd/000024-00.epub?dl=0', 'epub', '0.00', '00', 145),
('000024', 'PT', 'eLivros', 's/lnnqa0uev9btalt/000024-01.pdf?dl=0', 'pdf', '0.00', '01', 146),
('000025', 'PT', 'eLivros', 's/jicdjvh3d4flx3q/000025-00.epub?dl=0', 'epub', '0.00', '00', 147),
('000025', 'PT', 'eLivros', 's/7gof47rgrs388t7/000025-01.pdf?dl=0', 'pdf', '0.00', '01', 148),
('000026', 'PT', 'eLivros', 's/ech1xgilqpi4fkf/000026-00.epub?dl=0', 'epub', '0.00', '00', 149),
('000026', 'PT', 'eLivros', 's/3yi90p0j5c1wmvj/000026-01.pdf?dl=0', 'pdf', '0.00', '01', 150),
('000027', 'PT', 'Kbook', 's/dxy2ab3l6ms525o/000027-00.epub?dl=0', 'epub', '0.00', '00', 151),
('000027', 'PT', 'Kbook', 's/86qur7wzdwo20bu/000027-01.pdf?dl=0', 'pdf', '0.00', '01', 152),
('000028', 'PT', 'cabana-on', 's/764hzlhoo0c7zyp/000028-00.epub?dl=0', 'epub', '0.00', '00', 153),
('000028', 'PT', 'cabana-on', 's/3c0arx67uvcwf3q/000028-01.pdf?dl=0', 'pdf', '0.00', '01', 154),
('000029', 'PT', 'leLivros', 's/qb7a0ftf20qk7r3/000029-00.epub?dl=0', 'epub', '0.00', '00', 155),
('000029', 'PT', 'leLivros', 's/m8c23wyr9uemfkr/000029-01.pdf?dl=0', 'pdf', '0.00', '01', 156),
('00002A', 'PT', 'eLivros', 's/6qgr5oo5l7io128/00002A-00.epub?dl=0', 'epub', '0.00', '00', 157),
('00002A', 'PT', 'eLivros', 's/aw2lkv0um8iy9q4/00002A-01.pdf?dl=0', 'pdf', '0.00', '01', 158),
('00002B', 'PT', 'Kbook', 's/bwrndxkzynx6p7z/00002B-00.epub?dl=0', 'epub', '0.00', '00', 159),
('00002B', 'PT', 'Kbook', 's/0zml6ncxv95aq5o/00002B-01.pdf?dl=0', 'pdf', '0.00', '01', 160),
('00002C', 'PT', 'eLivros', 's/psbs4mylhog2v9e/00002C-00.epub?dl=0', 'epub', '0.00', '00', 161),
('00002C', 'PT', 'eLivros', 's/bflebutlfqhkz63/00002C-01.pdf?dl=0', 'pdf', '0.00', '01', 162),
('00002D', 'PT', 'Livraria Pública', 's/0wllhl92sq0hclp/00002D-00.epub?dl=0', 'epub', '0.00', '00', 163),
('00002D', 'PT', 'Livraria Pública', 's/izm44nzxvgruha1/00002D-01.pdf?dl=0', 'pdf', '0.00', '01', 164),
('00002E', 'PT', 'Baixe Livros', 's/mls0avma9n7ikve/00002E-00.epub?dl=0', 'epub', '0.00', '00', 165),
('00002E', 'PT', 'Baixe Livros', 's/viux5eqt7tj5e7t/00002E-01.pdf?dl=0', 'pdf', '0.00', '01', 166),
('00002H', 'PT', 'LeLivros', 's/akp3ubhug2keor4/00002H-00.epub?dl=0', 'epub', '0.00', '00', 167),
('00002H', 'PT', 'LeLivros', 's/bsjkmzelnjdl4bl/00002H-01.pdf?dl=0', 'pdf', '0.00', '01', 168),
('00002I', 'PT', 'Digital Source', 's/yq5glokyrt2tr67/00002I-00.epub?dl=0', 'epub', '0.00', '00', 169),
('00002I', 'PT', 'Digital Source', 's/xuzrkasqqll1gi5/00002I-01.pdf?dl=0', 'pdf', '0.00', '01', 170),
('00002J', 'PT', 'Fundação Biblioteca Nacional', 's/jxlz8nlfig2tq8h/00002J-00.epub?dl=0', 'epub', '0.00', '00', 171),
('00002J', 'PT', 'Fundação Biblioteca Nacional', 's/tnl6jvrssy6ncom/00002J-01.pdf?dl=0', 'pdf', '0.00', '01', 172),
('00001O', 'PT', 'ebooksbrasil', 's/9gn4biqdik8w3wi/00001O-00.epub?dl=0', 'epub', '0.00', '00', 175),
('00000I', 'PT', 'eBooksBrasil', 's/h2ab0arggebwy38/00000I-01.pdf?dl=0', 'pdf', '0.00', '01', 176),
('00000J', 'PT', 'eBooksBrasil', 's/q7pgwm8l25iomfj/00000J-01.pdf?dl=0', 'pdf', '0.00', '01', 177),
('00002K', 'PT', 'Baixe Livros', 's/flh2ugc58ky5ll2/00002K-00.epub?dl=0', 'epub', '0.00', '00', 178),
('00002K', 'PT', 'Baixe Livros', 's/wbqzah439lzkdky/00002K-01.pdf?dl=0', 'pdf', '0.00', '01', 179),
('00002L', 'PT', 'Biblioteca Digital Soares Basto', 's/1c3ubqkcnio68pj/00002L-00.epub?dl=0', 'epub', '0.00', '00', 180),
('00002L', 'PT', 'Biblioteca Digital Soares Basto', 's/2xwej2d0udawjvj/00002L-01.pdf?dl=0', 'pdf', '0.00', '01', 181),
('00002M', 'PT', 'baixarsoftware.com', 's/15frfirorxrykia/00002M-00.epub?dl=0', 'epub', '0.00', '00', 182),
('00002M', 'PT', 'baixarsoftware.com', 's/pcjuki80unmoqbr/00002M-01.pdf?dl=0', 'pdf', '0.00', '01', 183),
('00002N', 'PT', 'cabana-on', 's/9uvtnthwv0l3zfg/00002N-00.epub?dl=0', 'epub', '0.00', '00', 184),
('00002N', 'PT', 'cabana-on', 's/8m2joe9bmcgrzva/00002N-01.pdf?dl=0', 'pdf', '0.00', '01', 185);

-- --------------------------------------------------------

--
-- Estrutura da tabela `poems`
--

CREATE TABLE `poems` (
  `auctor` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `id` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `country` char(3) COLLATE utf8_unicode_ci NOT NULL,
  `genre` char(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `litschool` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ind` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `poems`
--

INSERT INTO `poems` (`auctor`, `id`, `country`, `genre`, `litschool`, `ind`) VALUES
('BILAColavo', '000000', 'BRA', 'LSN', NULL, 1),
('AESOP', '000000', 'GRE', 'NFB', NULL, 2),
('BANDEIRAmanuel', '000000', 'BRA', 'LSN', NULL, 3),
('CAMOESluis', '000000', 'POR', 'LSN', NULL, 4),
('DRUMMONDandrade', '000000', 'BRA', 'LSN', NULL, 5),
('BOPPraul', '000000', 'BRA', 'LSN', NULL, 6),
('BOPPraul', '000001', 'BRA', 'LSN', NULL, 7),
('BOPPraul', '000002', 'BRA', 'LSN', NULL, 8),
('BOPPraul', '000003', 'BRA', 'LSN', NULL, 9),
('AESOP', '000001', 'GRE', 'NFB', NULL, 10),
('AESOP', '000002', 'GRE', 'NFB', NULL, 11),
('AESOP', '000003', 'GRE', 'NFB', NULL, 12),
('AESOP', '000004', 'GRE', 'NFB', NULL, 13),
('AESOP', '000005', 'GRE', 'NFB', NULL, 14),
('AESOP', '000006', 'GRE', 'NFB', NULL, 15),
('AESOP', '000007', 'GRE', 'NFB', NULL, 16),
('AESOP', '000008', 'GRE', 'NFB', NULL, 17),
('AESOP', '000009', 'GRE', 'NFB', NULL, 18),
('AESOP', '00000A', 'GRE', 'NFB', NULL, 19),
('AESOP', '00000B', 'GRE', 'NFB', NULL, 20),
('AESOP', '00000C', 'GRE', 'NFB', NULL, 21),
('ANDRADEmario', '000000', 'BRA', 'LSN', NULL, 22),
('ANDRADEmario', '000001', 'BRA', 'LSN', NULL, 23),
('ANDRADEmario', '000002', 'BRA', 'LSN', NULL, 24),
('ANDRADEmario', '000003', 'BRA', 'LSN', NULL, 25),
('ANDRADEmario', '000004', 'BRA', 'LSN', NULL, 26),
('ANDRADEmario', '000005', 'BRA', 'LSN', NULL, 27),
('ANDRADEmario', '000006', 'BRA', 'LSN', NULL, 28),
('ANDRADEmario', '000007', 'BRA', 'LSN', NULL, 29),
('ANDRADEmario', '000008', 'BRA', 'LSN', NULL, 30),
('ANDRADEmario', '000009', 'BRA', 'LSN', NULL, 31),
('ANDRADEmario', '00000A', 'BRA', 'LSN', NULL, 32),
('ANDRADEmario', '00000B', 'BRA', 'LSN', NULL, 33),
('BANDEIRAmanuel', '000001', 'BRA', 'LSN', NULL, 34),
('BANDEIRAmanuel', '000002', 'BRA', 'LSN', NULL, 35),
('BYSSHEshelley', '000000', 'ENG', 'LSN', NULL, 36),
('CAMOESluis', '000001', 'POR', 'LSN', NULL, 37),
('CAMOESluis', '000002', 'POR', 'LSN', NULL, 38),
('CAMOESluis', '000003', 'POR', 'LSN', NULL, 39),
('CAMOESluis', '000004', 'POR', 'LSN', NULL, 40),
('CAMOESluis', '000005', 'POR', 'LSN', NULL, 41),
('CAMOESluis', '000006', 'POR', 'LSN', NULL, 42),
('CAMOESluis', '000007', 'POR', 'LSN', NULL, 43),
('CAMOESluis', '000008', 'POR', 'LSN', NULL, 44),
('CAMOESluis', '000009', 'POR', 'LSN', NULL, 45),
('CAMOESluis', '00000A', 'POR', 'LSN', NULL, 46),
('CAMOESluis', '00000B', 'POR', 'LSN', NULL, 47),
('DRUMMONDandrade', '000001', 'BRA', 'LSN', NULL, 48),
('DRUMMONDandrade', '000002', 'BRA', 'LSN', NULL, 49),
('DRUMMONDandrade', '000003', 'BRA', 'LSN', NULL, 50),
('DRUMMONDandrade', '000004', 'BRA', 'LSN', NULL, 51),
('DRUMMONDandrade', '000005', 'BRA', 'LSN', NULL, 52),
('DRUMMONDandrade', '000006', 'BRA', 'LSN', NULL, 53),
('DRUMMONDandrade', '000007', 'BRA', 'LSN', NULL, 54),
('DRUMMONDandrade', '000008', 'BRA', 'LSN', NULL, 55),
('DRUMMONDandrade', '000009', 'BRA', 'LSN', NULL, 56),
('DRUMMONDandrade', '00000A', 'BRA', 'LSN', NULL, 57),
('MEIRELEScecilia', '000000', 'BRA', 'LSN', NULL, 58),
('MEIRELEScecilia', '000001', 'BRA', 'LSN', NULL, 59),
('MEIRELEScecilia', '000002', 'BRA', 'LSN', NULL, 60),
('MEIRELEScecilia', '000003', 'BRA', 'LSN', NULL, 61),
('MEIRELEScecilia', '000004', 'BRA', 'LSN', NULL, 62),
('MEIRELEScecilia', '000005', 'BRA', 'LSN', NULL, 63),
('MEIRELEScecilia', '000006', 'BRA', 'LSN', NULL, 64),
('MEIRELEScecilia', '000007', 'BRA', 'LSN', NULL, 65),
('MEIRELEScecilia', '000008', 'BRA', 'LSN', NULL, 66),
('MEIRELEScecilia', '000009', 'BRA', 'LSN', NULL, 67),
('PESSOAfernando', '000000', 'POR', 'LSN', NULL, 68),
('PESSOAfernando', '000001', 'POR', 'LSN', NULL, 69),
('PESSOAfernando', '000002', 'POR', 'LSN', NULL, 70),
('PESSOAfernando', '000003', 'POR', 'LSN', NULL, 71),
('PESSOAfernando', '000004', 'POR', 'LSN', NULL, 72),
('PESSOAfernando', '000005', 'POR', 'LSN', NULL, 73),
('PESSOAfernando', '000006', 'POR', 'LSN', NULL, 74),
('PESSOAfernando', '000007', 'POR', 'LSN', NULL, 75),
('PESSOAfernando', '000008', 'POR', 'LSN', NULL, 76),
('PESSOAfernando', '000009', 'POR', 'LSN', NULL, 77),
('BILAColavo', '000001', 'BRA', 'LSN', NULL, 79),
('BILAColavo', '000002', 'BRA', 'LSN', NULL, 80);

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
(14, 'KaiXtr', 'pname=Teste;pcontent=asfffffffff;pauctor=AUSTENjane;');

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

--
-- Extraindo dados da tabela `reviews`
--

INSERT INTO `reviews` (`id`, `user`, `book`, `comment`, `datime`) VALUES
(4, 'KaiXtr', '000003', 'Eu vejo muito as pessoas falando sobre esse livro, mas nunca tinha parado pra ler ele de verdade, agora que eu conheço eu não quero saber de outra coisa. É muito diferente de qualquer coisa que já vi. ', '2020-07-11 01:07:15');

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
('KaiXtr', '00000N', 3, 43),
('KaiXtr', '00002C', 3, 46),
('KaiXtr', '00000C', 1, 48),
('KaiXtr', '00000B', 1, 51),
('KaiXtr', '00002D', 0, 90),
('KaiXtr', '00001S', 0, 93),
('KaiXtr', '000001', 0, 95),
('KaiXtr', '00000O', 0, 96),
('KaiXtr', '00000L', 0, 97),
('KaiXtr', '000024', 0, 98),
('KaiXtr', '00001V', 0, 100),
('KaiXtr', '00002O', 0, 120),
('KaiXtr', '00000C', 0, 136),
('KaiXtr', '00001U', 0, 149),
('KaiXtr', '00000B', 0, 154),
('KaiXtr', '00000N', 0, 156),
('KaiXtr', '000017', 0, 158),
('KaiXtr', '00000A', 0, 161),
('KaiXtr', '000000', 0, 163),
('KaiXtr', '00001B', 0, 164),
('KaiXtr', '000002', 0, 168),
('KaiXtr', '000015', 0, 169),
('KaiXtr', '000005', 0, 182),
('KaiXtr', '00001K', 0, 189);

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
('000022', 'Harry Potter e as Relíquias da Morte', 'Harry Potter and the Deathly Hallows', 'Harry Potter y las Reliquias de la Muerte', 75),
('000023', 'Diário de Anne Frank', 'The Diary of a Young Girl', 'Diario de Ana Frank', 76),
('000024', 'A Sociedade do Anel', 'The Fellowship of the Ring', 'La Comunidad del Anillo', 77),
('000025', 'Duas Torres', 'The Two Towers', 'Las Dos Torres', 78),
('000026', 'O Retorno do Rei', 'The Return of the King', 'El Retorno del Rey', 79),
('000027', 'Um Estudo em Vermelho', 'A Study in Scarlet', 'Estudio en Escarlata', 80),
('000028', 'O Signo dos Quatro', 'The Sign of the Four', 'El Signo de los Cuatro', 81),
('000029', 'O Cão dos Baskervilles', 'The Hound of the Baskervilles', 'El Sabueso de los Baskerville', 82),
('00002A', 'O Vale do Medo', 'The Valley of Fear', 'El Valle del Terror', 83),
('00002B', 'A Fantástica Fábrica de Chocolate', 'Charlie and the Chocolate Factory', 'Charlie y la fábrica de chocolate', 84),
('00002C', 'Orgulho e Preconceito', 'Pride and Prejudice', 'Orgullo y prejuicio', 85),
('00002D', 'Frankenstein', 'Frankenstein', 'Frankenstein', 86),
('00002E', 'A Arte da Guerra', 'The Art of War', 'El Arte de la Guerra', 87),
('00002F', 'A Menina que roubava livros', 'The Book Thief', 'La Ladrona de libros', 88),
('00002G', 'O Menino do pijama listrado', 'The Boy in the Striped Pyjamas', 'El Niño con el pijama de rayas', 89),
('00002H', 'Por Quem os Sinos se Dobram', 'For Whom the Bells Tolls', 'Por Quién Doblan las Campanas', 90),
('00002I', 'A Montanha Mágica', 'The Magic Mountain', 'La Montaña Mágica', 91),
('00002J', 'Caramuru', 'Caramuru', 'Caramuru', 92),
('00002K', 'O Livro da Selva', 'The Jungle Book', 'El Libro de la Selva', 94),
('00002L', 'Robinson Crusoe', 'Robinson Crusoe', 'Robinson Crusoe', 95),
('00002M', 'As Aventuras de Robin Hood', 'The Merry Adventures of Robin Hood', 'Las Alegres Aventuras de Robin Hood', 96),
('00002N', 'Ivanhoé', 'Ivanhoe', 'Ivanhoe', 97);

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
  `academy` varchar(10) DEFAULT NULL,
  `email` tinytext NOT NULL,
  `password` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `code` varchar(32) DEFAULT NULL,
  `bonds` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`pt`, `en`, `es`, `nick`, `birth`, `death`, `country`, `hometown`, `gender`, `auctor`, `academy`, `email`, `password`, `code`, `bonds`) VALUES
('Esopo', 'Aesop', 'Esopo', 'AESOP', '620 a.c', '1877-12-12', 'GRE', 'Trácia', 'M', 1, NULL, 'aesop@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('José de Alencar', NULL, NULL, 'ALENCARjose', '1829-05-01', '1877-12-12', 'BRA', 'Messejana - CE', 'M', 1, 'ABL-23-00', 'alencar.jose@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Dante Alighieri', NULL, NULL, 'ALIGHIERIdante', '1265-06-20', '1875-09-04', 'ITA', 'Florença', 'M', 1, NULL, 'alighieri.dante@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Edgar Allan Poe', NULL, NULL, 'ALLANpoe', '1809-01-19', '1849-10-07', 'USA', 'Boston - Massachusetts', 'M', 1, NULL, 'edgar.allan.poe@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Jorge Amado', NULL, NULL, 'AMADOjorge', '1912-08-10', '2001-08-01', 'BRA', 'Itabuna - BA', 'M', 1, 'ABL-23-05', 'amado.jorge@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Anaximandro de Mileto', 'Anaximander of Miletus', 'Anaximandro de Mileto', 'ANAXIMANDER', '610 a.c', '546 a.c', 'GRE', 'Mileto', 'M', 1, NULL, 'anaximander.@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Anaxímenes de Mileto', 'Anaximenes of Miletus', 'Anaxímenes de Mileto', 'ANAXIMENES', '588 a.c', '524 a.c', 'GRE', 'Mileto', 'M', 1, NULL, 'anaximenes.@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Hans Christian Andersen', NULL, NULL, 'ANDERSENhans', '1805-04-02', '1875-08-04', 'DEN', 'Odense', 'M', 1, NULL, 'andersen.hans@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Mário de Andrade', NULL, NULL, 'ANDRADEmario', '1893-12-09', '1945-02-25', 'BRA', 'São Paulo - SP', 'M', 1, NULL, 'andrade.mario@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Augusto dos Anjos', NULL, NULL, 'ANJOSaugusto', '1884-04-20', '1914-11-12', 'BRA', 'Sapé - PB', 'M', 1, 'APL-01-00', 'anjos.augusto@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Manuel Antônio de Almeida', NULL, NULL, 'ANTONIOalmeida', '1830-11-17', '1861-11-28', 'BRA', 'Rio de Janeiro - RJ', 'M', 1, 'ABL-28-00', 'manuel.antonio.almeida@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Tomás Antônio Gonzaga', NULL, NULL, 'ANTONIOgonzaga', '1744-08-11', '1810', 'BRA', 'Miragaia - Portugal', 'M', 1, 'ABL-37-00', 'tomas.antonio.gonzaga@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Aristóteles', 'Aristotle', 'Aristóteles', 'ARISTOTLE', '384 a.c', '322 a.c', 'GRE', 'Estalgira - Calcídica', 'M', 1, NULL, 'aristotle@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Jane Austen', NULL, NULL, 'AUSTENjane', '1775-12-16', '1817-07-18', 'ENG', 'Hampshire', 'F', 1, NULL, 'austen.jane@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Aluísio Azevedo', NULL, NULL, 'AZEVEDOaluisio', '1857-04-14', '1913-01-21', 'BRA', 'São Luís - MA', 'M', 1, 'ABL-04-01', 'azevedo.aluisio@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Manuel Bandeira', NULL, NULL, 'BANDEIRAmanuel', '1886-04-19', '1968-10-13', 'BRA', 'Recife - PE', 'M', 1, 'ABL-24-03', 'bandeira.manuel@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Lima Barreto', NULL, NULL, 'BARRETOlima', '1881-05-13', '1922-11-01', 'BRA', 'Rio de Janeiro', 'M', 1, NULL, 'barreto.lima@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Basílio da Gama', NULL, NULL, 'BASILIOgama', '1741-04-08', '1740-04-10', 'BRA', 'São José do Rio das Mortes - M', 'M', 1, 'ABL-04-00', 'basilio.gama@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Charles Baudelaire', NULL, NULL, 'BAUDELAIREcharles', '1821-04-09', '1867-08-31', 'FRA', 'Paris', 'M', 1, NULL, 'baudelaire.charles@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Simone de Beauvoir', NULL, NULL, 'BEAUVOIRsimone', '1908-01-09', '1986-04-14', 'FRA', 'Paris', 'M', 1, NULL, 'simone.beauvoir@literledge.com', 'Gu@n@b@r@', NULL, 'SARTREjeanpaul[H];'),
('Olavo Bilac', NULL, NULL, 'BILAColavo', '1865-12-16', '1918-12-28', 'BRA', 'Rio de Janeiro - RJ', 'M', 1, 'ABL-15-01', 'bilac.olavo@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Maria Barbosa du Bocage', NULL, NULL, 'BOCAGEbarbosa', '1765-09-15', '1805-12-21', 'POR', 'Setúbal', 'M', 1, NULL, 'bocage.barbosa@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Raul Bopp', NULL, NULL, 'BOPPraul', '1898-08-04', '1984-06-02', 'BRA', 'Itaara - RS', 'M', 1, NULL, '', 'Gu@n@b@r@', NULL, NULL),
('Manuel Botelho de Oliveira', NULL, NULL, 'BOTELHOoliveira', '1636', '1711-01-05', 'BRA', 'Salvador - BA', 'M', 1, NULL, 'manuel.botelho.oliveira@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('John Boyne', NULL, NULL, 'BOYNEjohn', '1971-04-30', NULL, 'IRL', 'Dublin - Leinster', 'M', 1, NULL, 'boyne.john@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Charlotte Brontë', NULL, NULL, 'BRONTEcharlotte', '1816-04-21', '1855-03-31', 'ENG', 'Thornton - York', 'F', 1, NULL, 'bronte.charlotte@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Percy Bysshe Shelley', NULL, NULL, 'BYSSHEshelley', '1792-08-04', '1822-07-08', 'ENG', 'Field Place - Horsham', 'M', 1, NULL, 'bysshe.shelley@literledge.com', 'Gu@n@b@r@', NULL, 'SHELLEYmary[W];'),
('João Cabral de Melo Neto', NULL, NULL, 'CABRALmelo', '1920-01-09', '1999-10-09', 'BRA', 'Recife - PE', 'M', 1, 'ABL-37-05', 'cabral.melo.neto@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Luís de Camões', NULL, NULL, 'CAMOESluis', '1524', '1580-06-10', 'POR', 'Lisboa', 'M', 1, NULL, 'camoes.luis@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Lewis Carroll', NULL, NULL, 'CARROLLlewis', '1832-01-27', '1898-01-14', 'ENG', 'Chesire', 'M', 1, NULL, 'carroll.lewis@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Miguel de Cervantes', NULL, NULL, 'CERVANTESmiguel', '1547-07-29', '1616-04-22', 'ESP', 'Alcalá de Henares - Castela', 'M', 1, NULL, 'cervantes.miguel@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Agatha Christie', NULL, NULL, 'CHRISTIEagatha', '1890-07-15', '1976-01-12', 'ENG', 'Devon', 'M', 1, NULL, 'christie.agatha@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Sir Arthur Conan Doyle', NULL, NULL, 'CONANdoyle', '1859-05-2w', '1930-07-07', 'SCO', 'Edimburg', 'M', 1, NULL, 'conan.doyle@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Raimundo Correia', NULL, NULL, 'CORREIAraimundo', '1859-05-13', '1911-09-13', 'BRA', 'São Luís - MA', 'M', 1, 'ABL-05-01', 'correia.raimundo@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Cruz e Sousa', NULL, NULL, 'CRUZsousa', '1861-11-24', '1898-03-19', 'BRA', 'Florianópolis - SC', 'M', 1, NULL, 'cruz.sousa@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('C. S. Lewis', NULL, NULL, 'CSLEWIS', '1898-11-29', '1963-11-22', 'IRL', 'Belfast', 'M', 1, NULL, 'c.s.lewis@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Euclides de Cunha', NULL, NULL, 'CUNHAeuclides', '1886-01-20', '1909', 'BRA', 'Cantagalo - RJ', 'M', 1, 'ABL-07-02', 'cunha.euclides@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Roald Dahl', NULL, NULL, 'DAHLroald', '1916-09-13', '1990-11-23', 'WAL', 'Llandaff - South Glamorgan', 'M', 1, NULL, 'dahl.roald@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Angela Davis', NULL, NULL, 'DAVISangela', '1944-01-26', '', 'USA', 'Birmingham - Alabama', 'F', 1, NULL, 'davis.angela@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Daniel Defoe', NULL, NULL, 'DEFOEdaniel', '1660', '1731-04-21', 'ENG', 'Londres', 'M', 1, NULL, 'defoe.daniel@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('René Descartes', NULL, NULL, 'DESCARTESrene', '1596-03-31', '1650-02-11', 'FRA', 'Descartes - Indre-et-Loire', 'M', 1, NULL, 'descartes.rene@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Gonçalves Dias', NULL, NULL, 'DIASgoncalves', '1823-08-10', '1864-11-03', 'BRA', 'Caxias - MA', 'M', 1, 'ABL-15-00', 'dias.goncalves@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Charles Dickens', NULL, NULL, 'DICKENScharles', '1812-02-07', '1870-06-09', 'ENG', 'Landport - Hampshire', 'M', 1, NULL, 'dickens.charles@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Emily Dickinson', NULL, NULL, 'DICKINSONemily', '1830-12-10', '1886-03-15', 'USA', 'Amherst - Massachusetts', 'F', 1, NULL, 'dickinson.emily@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('António Dinis da Cruz e Silva', NULL, NULL, 'DINIScruzesilva', '1731-07-04', '1799-10-05', 'POR', 'Lisboa', 'M', 1, NULL, 'dinis.cruz.silva@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Carlos Drummond de Andrade', NULL, NULL, 'DRUMMONDandrade', '1902-02-30', '1987-08-17', 'BRA', 'Itabira - MG', 'M', 1, NULL, 'drummond.andrade@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Alexandre Dumas', NULL, NULL, 'DUMASalexandre', '1802-06-24', '1870-12-05', 'FRA', 'Villers-Cotterêts - Aisne', 'M', 1, NULL, 'dumas.alexandre@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Émile Durkheim', NULL, NULL, 'DURKHEIMemile', '1858-04-15', '1917-11-15', 'FRA', 'Épinal - Lorena', 'M', 1, NULL, 'durkheim.emile@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Umberto Eco', NULL, NULL, 'ECOumberto', '1932-01-05', '2016-02-19', 'ITA', 'Alessandria - Piedmont', 'M', 1, NULL, 'umberto.eco@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('George Eliot', NULL, NULL, 'ELIOTgeorge', '1819-11-22', '1880-12-22', 'ENG', 'Nuneaton - Warwickshire', 'F', 1, NULL, 'eliot.george@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Friedrich Engels', NULL, NULL, 'ENGELSfriedrich', '1820-11-28', '1895-08-05', 'GER', 'Wuppertal - Renânia do Norte-V', 'M', 1, NULL, 'engels.friedrich@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Boris Fausto', NULL, NULL, 'FAUSTOboris', '1930-12-08', NULL, 'BRA', 'São Paulo - SP', 'M', 1, NULL, 'fausto.boris@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Maria Firmina dos Reis', NULL, NULL, 'FIRMINAreis', '1822-03-11', '1917-11-11', 'BRA', 'São Luís - MA', 'F', 1, NULL, 'maria.firmina.reis@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Gustave Flaubert', NULL, NULL, 'FLAUBERTgustave', '1821-12-12', '1880-05-08', 'FRA', 'Rouen - Normandia', 'M', 1, NULL, 'flaubert.gustave@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Jean de La Fontaine', NULL, NULL, 'FONTAINEjean', '1621-07-08', '1695-04-13', 'FRA', 'Château-Thierry - Champagne', 'M', 1, 'AFR-24-02', 'lafontaine.jean@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Michel Foucault', NULL, NULL, 'FOUCAULTmichel', '1926-10-15', '1984-06-25', 'FRA', 'Poitiers', 'M', 1, NULL, 'foucault.michel@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Anne Frank', NULL, NULL, 'FRANKanne', '1929-06-12', '1945-02-XX', 'GER', 'Frankfurt am Main', 'F', 1, NULL, 'frank.anne@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('L. Frank Baum', NULL, NULL, 'FRANKbaum', '1856-05-15', '1919-05-06', 'USA', 'Chittenango - NY', 'M', 1, NULL, 'frank.baum@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Paulo Freire', NULL, NULL, 'FREIREpaulo', '1921-09-19', '1997-02-05', 'BRA', 'Recife - PE', 'M', 1, NULL, 'paulo.freire@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Sigmund Freud', NULL, NULL, 'FREUDsigmund', '1856-05-06', '1939-09-23', 'CZE', 'Freiberg in M?hren - Moravia', 'M', 1, NULL, 'sigmund.freud@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Gilka Machado', NULL, NULL, 'GILKAmachado', '1893', '1980', 'BRA', 'Rio de Janeiro - RJ', 'F', 1, NULL, 'gilka.machado@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Graça Aranha', NULL, NULL, 'GRACAaranha', '1868-06-21', '1931-01-26', 'BRA', 'São Luís - MA', 'M', 1, 'ABL-38-01', 'graca.aranha@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Graciliano Ramos', NULL, NULL, 'GRACILIANOramos', '1892-10-27', '1953-03-20', 'BRA', 'Quebrângulo - AL', 'M', 1, NULL, 'graciliano.ramos@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Irmãos Grimm', 'Grimm Brothers', 'Hermanos Grimm', 'GRIMMbros', '1785-01-04-1786-02-24', '1863-09-20 1859-12-16', 'GER', 'Hanau - Hesse-Darmstadt', 'M', 1, NULL, 'grimm.bros@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Bernardo Guimarães', NULL, NULL, 'GUIMARAESbernardo', '1825-08-15', '1884-03-10', 'BRA', 'Ouro Preto - MG', 'M', 1, 'ABL-05-00', 'bernardo.guimaraes@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Guimarães Rosa', NULL, NULL, 'GUIMARAESrosa', '1908-06-27', '1967-11-19', 'BRA', 'Rio de Janeiro - RJ', 'M', 1, 'ABL-02-03', 'guimaraes.rosa@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Thomas Hardy', NULL, NULL, 'HARDYthomas', '1840-06-02', '1928-01-11', 'ENG', 'Max Gate', 'M', 1, NULL, 'hardy.thomas@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Friedrich Hegel', NULL, NULL, 'HEGELfriedrich', '1770-08-27', '1831-11-14', 'GER', 'Estungarda - Württemberg', 'M', 1, NULL, 'hegel.friedrich@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Ernest Hemingway', NULL, NULL, 'HEMINGWAYernest', '1899-06-21', '1961-06-02', 'USA', 'Oak Park - Illinois', 'M', 1, NULL, 'hemingway.ernest@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Heráclito de Éfeso', 'Heraclitus of Ephesus', 'Heráclito de Éfeso', 'HERACLITUSephesus', '540 a.c', '470 a.c', 'GRE', 'Éfeso', 'M', 1, NULL, 'heraclitus.ephesus@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Thomas Hobbes', NULL, NULL, 'HOBBESthomas', '1588-04-05', '1679-12-04', 'ENG', 'Malmesbury - Wiltshire', 'M', 1, NULL, 'hobbes.thomas@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Homero', 'Homer', 'Homero', 'HOMERUS', '928 a.c', '898 a.c', 'GRE', 'Esmirna', 'M', 1, NULL, 'homerus@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Max Horkheimer', NULL, NULL, 'HORKHEIMERmax', '1895-02-14', '1973-07-07', 'GER', 'Esturgada', 'M', 1, NULL, 'horkheimer.max@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('H.P. Lovecraft', NULL, NULL, 'HPLOVECRAFT', '1890-08-20', '1937-03-15', 'USA', 'Providence - Rhode Island', 'M', 1, NULL, 'h.p.lovecraft@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Victor Hugo', NULL, NULL, 'HUGOvictor', '1802-02-26', '1885-05-22', 'FRA', 'Besançon - Doubs', 'M', 1, 'AFR-14-09', 'hugo.victor@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('David Hume', NULL, NULL, 'HUMEdavid', '1711-05-07', '1776-08-25', 'SCO', 'Edimburgo', 'M', 1, NULL, 'hume.david@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Manuel de Santa Maria', NULL, NULL, 'ITAPARICAfrei', '1704', '1768', 'BRA', 'Itaparica - BA', 'M', 1, NULL, 'frei.itaparica@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Henry James', NULL, NULL, 'JAMEShenry', '1843-04-15', '1916-02-28', 'USA', 'New York', 'M', 1, NULL, 'james.henry@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('J. K. Rowling', NULL, NULL, 'JKROWLING', '1965-07-31', NULL, 'ENG', 'Yate - Gloucestershire', 'F', 1, NULL, 'jkrowling@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('J. M. Barie', NULL, NULL, 'JMBARIE', '1860-05-09', '1937-06-19', 'SCO', 'Kirriemuir - Forfarshire', 'M', 1, NULL, 'j.m.barie.@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('J. R. R. Tolkien', NULL, NULL, 'JRRTOLKIEN', '1892-01-03', '1973-09-02', 'ENG', 'Bloemfontain', 'M', 1, NULL, 'j.r.r.tolkien@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Carl Gustav Jung', NULL, NULL, 'JUNGgustav', '1875-07-26', '1961-06-06', 'SUI', 'Kesswil - Turg?via', 'M', 1, NULL, 'carl.gustav.jung@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Franz Kafka', NULL, NULL, 'KAFKAfranz', '1883-06-03', '1924-06-03', 'CZE', 'Praga - Boémia', 'M', 1, NULL, 'kafka.franz@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Matt Kai', NULL, NULL, 'KaiXtr', '2003-03-15', NULL, 'BRA', 'Belém - PA', 'M', 2, NULL, 'ewertonmatheus2113@gmail.com', 'M@ch@d0B@rret0', 'b0b183c207f46f0cca7dc63b2604f5cc', NULL),
('Immanuel Kant', NULL, NULL, 'KANTimmanuel', '1724-04-22', '1804-02-12', 'GER', 'Könisberg - Prússia', 'M', 1, NULL, 'kant.immanuel@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Sören Kierkegaard', NULL, NULL, 'KIERKEGAARDsoren', '1813-05-05', '1855-11-11', 'DEN', 'Copenhague', 'M', 1, NULL, 'kierkegaard.soren@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Rudyard Kipling', NULL, NULL, 'KIPLINGrudyard', '1865-12-30', '1936-01-18', 'ENG', 'Bombaim - Maharashtra', 'M', 1, NULL, 'kipling.rudyard@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Paulo Leminski', NULL, NULL, 'LEMINSKIpaulo', '1944-08-24', '1989-06-07', 'BRA', 'Curitiba - PR', 'M', 1, NULL, 'leminski.paulo@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Clarice Lispector', NULL, NULL, 'LISPECTORclarice', '1920-12-10', '1977-12-09', 'BRA', 'Chechelnyk', 'F', 1, NULL, 'lispector.clarice@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Monteiro Lobato', NULL, NULL, 'LOBATOmonteiro', '1882-04-18', '1948-06-04', 'BRA', 'Taubaté - SP', 'M', 1, NULL, 'lobato.monteiro@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('John Locke', NULL, NULL, 'LOCKEjohn', '1632-08-29', '1704-10-28', 'ENG', 'Wrington - Somerset', 'M', 1, NULL, 'locke.john@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Machado de Assis', NULL, NULL, 'MACHADOassis', '1839-06-21', '1908-09-29', 'BRA', 'Rio de Janeiro', 'M', 1, 'ABL-23-01', 'machado.assis@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Nicolau Maquiavel', 'Niccolò Machiavelli', 'Nicolau Maquiavel', 'MACHIAVELLIniccolo', '1469-05-03', '1527-06-21', 'ITA', 'Florença', 'M', 1, NULL, 'machiavelli.niccolo@literledge', 'Gu@n@b@r@', NULL, NULL),
('Thomas Mann', NULL, NULL, 'MANNthomas', '1875-06-06', '1955-08-12', 'GER', ' Lübeck - Schleswig-Holstein', 'M', 1, NULL, 'mann.thomas@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Cláudio Manuel da Costa', NULL, NULL, 'MANUELcosta', '1729-06-05', '1789-07-04', 'BRA', 'Mariana - MG', 'M', 1, NULL, 'claudio.manuel.costa@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Karl Marx', NULL, NULL, 'MARXkarl', '1818-05-05', '1883-03-14', 'GER', 'Tréveris - Prússia', 'M', 1, NULL, 'marx.karl@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Gregório de Matos', NULL, NULL, 'MATOSgregorio', '1636-12-23', '1696-11-26', 'BRA', 'Salvador - BA', 'M', 1, 'ABL-16-00', 'matos.gregorio@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Cecília Meirelles', NULL, NULL, 'MEIRELEScecilia', '1901-11-07', '1964-11-09', 'BRA', 'Rio de Janeiro - RJ', 'F', 1, NULL, 'meireles.cecilia@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Herman Melville', NULL, NULL, 'MELVILLEherman', '1819-08-01', '1891-09-28', 'USA', 'New York', 'M', 1, NULL, 'melville.herman@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Montesquieu', NULL, NULL, 'MONTESQUIEU', '1689-01-18', '1755-02-10', 'FRA', 'Brède - Gironde', 'M', 1, 'AFR-02-03', 'montesquieu@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Vladimir Nabokov', NULL, NULL, 'NABOKOVvladimir', '1899-04-22', '1977-06-02', 'RUS', 'S?o Petesburgo', 'M', 1, NULL, 'nabokov.vladimir@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Friedrich Nietzsche', NULL, NULL, 'NIETZSCHEfriedrich', '1844-10-15', '1900-08-25', 'GER', 'Saxônia - Prússia', 'M', 1, NULL, 'nietzsche.friedrich@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Alberto de Oliveira', NULL, NULL, 'OLIVEIRAalberto', '1857-04-28', '1937-01-19', 'BRA', 'Saquarema - RJ', 'M', 1, NULL, 'oliveira.alberto@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('George Orwell', NULL, NULL, 'ORWELLgeorge', '1903-06-25', '1950-01-21', 'ENG', 'Motihari - Bihar', 'M', 1, NULL, 'orwell.george@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Oswald de Andrade', NULL, NULL, 'OSWALDandrade', '1890-01-11', '1954-10-22', 'BRA', 'São Paulo - SP', 'M', 1, NULL, 'oswald.andrade@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Parmênides de Eléia', 'Parmenides of Elea', 'Parménides de Elea', 'PARMENIDESelea', '530 a.c', '460 a.c', 'GRE', 'Eléia', 'M', 1, NULL, 'parmenides.elea@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Fernando Pessoa', NULL, NULL, 'PESSOAfernando', '1888-06-13', '1935-11-30', 'POR', 'Lisboa - POR', 'M', 1, NULL, 'pessoa.fernando@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Platão', 'Plato', 'Platón', 'PLATO', '428 a.c', '348 a.c', 'GRE', 'Atenas', 'M', 1, NULL, 'plato@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Raul Pompéia', NULL, NULL, 'POMPEIAraul', '1863-04-12', '1895-12-25', 'BRA', 'Angra dos Reis - RJ', 'M', 1, 'ABL-03-00', 'pompeia.raul@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Howard Pyle', NULL, NULL, 'PYLEhoward', '1853-05-03', '1911-09-11', 'USA', 'Wilmington - Delaware', 'M', 1, NULL, 'pyle.howardd@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Pitágoras de Samos', 'Pythagoras of Samos', 'Pitágoras de Samos', 'PYTHAGORASsamos', '569 a.c', '475 a.c', 'GRE', 'Samos', 'M', 1, NULL, 'pythagoras.samos@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Eça de Queiroz', NULL, NULL, 'QUEIROZeca', '1845-1125', '1900-08-16', 'POR', 'Póvoa de Varzim', 'M', 1, NULL, 'queiroz.eca@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Rachel de Queiroz', NULL, NULL, 'QUEIROZrachel', '1910-11-17', '2003-11-04', 'BRA', 'Rio de Janeiro - RJ', 'F', 1, 'ABL-05-05', 'dias.goncalves@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Darcy Ribeiro', NULL, NULL, 'RIBEIROdarcy', '1922-10-26', '1997-02-17', 'BRA', 'Monte Claros - MG', 'M', 1, 'ABL-11-07', 'ribeiro.darcy@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Jean-Jacques Rousseau', NULL, NULL, 'ROUSSEAUjeanjacques', '1712-06-28', '1778-07-02', 'SUI', 'Genebra', 'M', 1, NULL, 'rousseau.jeanjacques@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Antoine de Saint-Exupéry', NULL, NULL, 'SAINTexupery', '1900-06-29', '1944-07-31', 'FRA', 'Lyon', 'M', 1, NULL, 'saint.exupery@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Vicente do Salvador', NULL, NULL, 'SALVADORfrei', '1564', '1636-1639', 'BRA', 'Salvador - BA', 'M', 1, NULL, 'vicente.salvador@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Jean-Paul Sartre', NULL, NULL, 'SARTREjeanpaul', '1905-06-21', '1980-04-15', 'FRA', 'Paris', 'M', 1, NULL, 'jean.paul.sartre@literledge.com', 'Gu@n@b@r@', NULL, 'BEAUVOIRsimone[W];'),
('Arthur Schopenhauer', NULL, NULL, 'SCHOPENHAUERarthur', '1788-02-22', '1860-09-21', 'POL', 'Danzig', 'M', 1, NULL, 'arthur.schopenhauer@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Walter Scott', NULL, NULL, 'SCOTTwalter', '1771-08-15', '1832-09-21', 'SCO', 'Edimburgo', 'M', 1, NULL, 'scott.walter@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('William Shakespeare', NULL, NULL, 'SHAKESPEAREwilliam', '1564-04-23', '1616-04-23', 'ENG', 'Stratford-Upon-Avon', 'M', 1, NULL, 'shakespeare.william@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Mary Shelley', NULL, NULL, 'SHELLEYmary', '1797-08-30', '1851-02-01', 'ENG', 'Londres', 'F', 1, NULL, 'shelley.mary@literledge.com', 'Gu@n@b@r@', NULL, 'BYSSHEshelley[H];'),
('Sócrates', 'Socrates', 'Sócrates', 'SOCRATES', '469 a.c', '399 a.c', 'GRE', 'Atenas', 'M', 1, NULL, 'socrates.@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Santa Rita Durão', NULL, NULL, 'STRITAdurao', '1722', '1784', 'POR', 'Lisboa', 'M', 1, NULL, 'st.rita.durao@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Ariano Suassuna', NULL, NULL, 'SUASSUNAariano', '1927-06-16', '2014-06-23', 'BRA', 'Cidade da Parahyba - PB', 'M', 1, 'ABL-32-06', 'suassuna.ariano@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Sun Tzu', NULL, NULL, 'SUNtzu', '544 a.c', '496 a.c', 'CHN', 'Qi', 'M', 1, NULL, 'sun.tzu@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Bento Teixeira', NULL, NULL, 'TEIXEIRAbento', '1561', '1600', 'BRA', 'Pernambuco', 'M', 1, NULL, 'teixeira.bento@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Tales de Mileto', 'Thales of Miletus', 'Tales de Mileto', 'THALESmiletus', '624 a.c', '548 a.c', 'GRE', 'Mileto', 'M', 1, NULL, 'thales.miletus@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Mark Twain', NULL, NULL, 'TWAINmark', '1835-11-30', '1910-04-21', 'USA', 'Florida - Missouri', 'M', 1, NULL, 'twain.mark@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Érico Veríssimo', NULL, NULL, 'VERISSIMOerico', '1905-12-17', '1975-11-28', 'BRA', 'Porto Alegre - RS', 'M', 1, NULL, 'verissimo.erico@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Júlio Verne', 'Jules Verne', 'Júlio Verne', 'VERNEjules', '1878-02-08', '1905-03-24', 'FRA', 'Nantes - Pays de La Loire', 'M', 1, NULL, 'verne.jules@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Gil Vicente', NULL, NULL, 'VICENTEgil', '1465', '1536', 'POR', 'Sem consenso', 'M', 1, NULL, 'vicente.gil@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Max Weber', NULL, NULL, 'WEBERmax', '1864-04-21', '1920-06-14', 'GER', 'Erfurt - Prússia', 'M', 1, NULL, 'weber.max@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Virginia Woolf', NULL, NULL, 'WOOLFvirginia', '1882-01-25', '1941-03-28', 'ENG', 'Kensington - Middlesex', 'F', 1, NULL, 'woolf.virginia@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Émile Zola', NULL, NULL, 'ZOLAemile', '1840-04-02', '1902-09-29', 'FRA', 'Paris - Île de France', 'M', 1, NULL, 'zola.emile@literledge.com', 'Gu@n@b@r@', NULL, NULL),
('Markus Zusak', NULL, NULL, 'ZUSAKmarkus', '1975-06-23', NULL, 'AUS', 'Sydney', 'M', 1, NULL, 'zusak.markus@literledge.com', 'Gu@n@b@r@', NULL, NULL);

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
  ADD PRIMARY KEY (`ind`);

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
  MODIFY `ked` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT de tabela `poems`
--
ALTER TABLE `poems`
  MODIFY `ind` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de tabela `requests`
--
ALTER TABLE `requests`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `shelves`
--
ALTER TABLE `shelves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT de tabela `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

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

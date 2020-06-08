<?php

#AUCTOR NAMES
if ($_COOKIE['lang'] == 'pt') {
	$namlst = array('AESOP'=>'Esopo','ALENCARjose'=>'José de Alencar','ALIGHIERIdante'=>'Dante Alighieri','ALLANpoe'=>'Edgar Allan Poe','ANDERSENhans','Hans Christian Andersen',
	'ANDRADEmario'=>'Mário de Andrade','ANTONIOalmeida'=>'Manuel Antônio de Almeida','ANTONIOgonzaga'=>'Tomás António Gonzaga','ARISTOTLE'=>'Aristóteles',
	'AZEVEDOaluisio'=>'Aluísio de Azevedo','BANDEIRAmanuel'=>'Manuel Banderia','BARRETOlima'=>'Lima Barreto','BASILIOgama'=>'Basílio da Gama',
	'BEAUVOIRsimone'=>'Simone de Beauvoir','BILAColavo'=>'Olavo Bilac','BOPPraul'=>'Raul Bopp','BYSSHEshelley'=>'Percy Bysshe Shelley','CABRALmelo'=>'João Cabral de Melo Neto',
	'CAMOESluis'=>'Luís de Camões','CARROLLlewis'=>'Lewis Carroll','CERVANTESmiguel'=>'Miguel de Cervantes','CHRISTIEagatha'=>'Agatha Christie',
	'CONANdoyle'=>'Arthur Conan Doyle','CSLEWIS'=>'C. S. Lewis','CUNHAeuclides'=>'Euclides da Cunha','DESCARTESrene'=>'René Descartes',
	'DRUMMONDandrade'=>'Carlos Drummond de Andrade','DUMASalexandre'=>'Alexandre Dumas','DURKHEIMemile'=>'Émile Durkheim','ECOumberto'=>'Umberto Eco',
	'FRANKbaum'=>'Frank Baum','FREIREpaulo'=>'Paulo Freire','FREUDsigmund'=>'Sigmund Freud','GRACAaranha'=>'Graça Aranha','GRACILIANOramos'=>'Graciliano Ramos',
	'GRIMMbros'=>'Irmãos Grimm','GUIMARAESbernardo'=>'Bernardo Guimarães','HOBBESthomas'=>'Thomas Hobbes','HOMERUS'=>'Homero','HPLOVECRAFT'=>'H. P. Lovecraft',
	'HUGOvictor'=>'Victor Hugo','JRRTOLKIEN'=>'J. R. R. Tolkien','KAFKAfranz'=>'Franz Kafka','LISPECTORclarice'=>'Clarice Lispector','LOBATOmonteiro'=>'Monteiro Lobato',
	'MACHADOassis'=>'Machado de Assis','MACHIAVELLIniccolo'=>'Nicolau Maquiavel','MARXkarl'=>'Karl Marx','MEIRELEScecilia'=>'Cecília Meireles',
	'NABOKOVvladimir'=>'Vladimir Nabokov','NIETZSCHEfriedrich'=>'Friedrich Nietzsche','ORWELLgeorge'=>'George Orwell','OSWALDandrade'=>'Oswald de Andrade',
	'PESSOAfernando'=>'Fernando Pessoa','PLATO'=>'Platão','POMPEIAraul'=>'Raul Pompéia','SAINTexupery'=>'Antoine de Saint-Exupéry','SARTREjeanpaul'=>'Jean-Paul Sartre',
	'SCHOPENHAUERarthur'=>'Arthur Schopenhauer','SHAKESPEAREwilliam'=>'William Shakespeare','VERNEjules'=>'Júlio Verne','WEBERmax'=>'Max Weber');
	}
else if ($_COOKIE['lang'] == 'en') {
	$namlst = array('AESOP'=>'Aesop','ALENCARjose'=>'José de Alencar','ALIGHIERIdante'=>'Dante Alighieri','ALLANpoe'=>'Edgar Allan Poe','ANDERSENhans','Hans Christian Andersen',
	'ANDRADEmario'=>'Mário de Andrade','ANTONIOalmeida'=>'Manuel Antônio de Almeida','ANTONIOgonzaga'=>'Tomás António Gonzaga','ARISTOTLE'=>'Aristotle',
	'AZEVEDOaluisio'=>'Aluísio de Azevedo',
	'BANDEIRAmanuel'=>'Manuel Banderia','BARRETOlima'=>'Lima Barreto','BASILIOgama'=>'Basílio da Gama','BEAUVOIRsimone'=>'Simone de Beauvoir','BILAColavo'=>'Olavo Bilac',
	'BOPPraul'=>'Raul Bopp','BYSSHEshelley'=>'Percy Bysshe Shelley','CABRALmelo'=>'João Cabral de Melo Neto','CAMOESluis'=>'Luís de Camões','CARROLLlewis'=>'Lewis Carroll',
	'CERVANTESmiguel'=>'Miguel de Cervantes','CHRISTIEagatha'=>'Agatha Christie','CONANdoyle'=>'Arthur Conan Doyle','CSLEWIS'=>'C. S. Lewis',
	'CUNHAeuclides'=>'Euclides da Cunha','DESCARTESrene'=>'René Descartes','DRUMMONDandrade'=>'Carlos Drummond de Andrade','DUMASalexandre'=>'Alexandre Dumas',
	'DURKHEIMemile'=>'Émile Durkheim','ECOumberto'=>'Umberto Eco','FRANKbaum'=>'Frank Baum','FREIREpaulo'=>'Paulo Freire','FREUDsigmund'=>'Sigmund Freud',
	'GRACAaranha'=>'Graça Aranha',
	'GRACILIANOramos'=>'Graciliano Ramos','GRIMMbros'=>'Grimm Brothers','GUIMARAESbernardo'=>'Bernardo Guimarães','HOBBESthomas'=>'Thomas Hobbes','HOMERUS'=>'Homer',
	'HPLOVECRAFT'=>'H. P. Lovecraft','HUGOvictor'=>'Victor Hugo','JRRTOLKIEN'=>'J. R. R. Tolkien','KAFKAfranz'=>'Franz Kafka','LISPECTORclarice'=>'Clarice Lispector',
	'LOBATOmonteiro'=>'Monteiro Lobato','MACHADOassis'=>'Machado de Assis','MACHIAVELLIniccolo'=>'Niccolò Machiavelli','MARXkarl'=>'Karl Marx',
	'MEIRELEScecilia'=>'Cecília Meireles','NABOKOVvladimir'=>'Vladimir Nabokov','NIETZSCHEfriedrich'=>'Friedrich Nietzsche','ORWELLgeorge'=>'George Orwell',
	'OSWALDandrade'=>'Oswald de Andrade','PESSOAfernando'=>'Fernando Pessoa','PLATO'=>'Plato','POMPEIAraul'=>'Raul Pompéia','SAINTexupery'=>'Antoine de Saint-Exupéry',
	'SARTREjeanpaul'=>'Jean-Paul Sartre','SCHOPENHAUERarthur'=>'Arthur Schopenhauer','SHAKESPEAREwilliam'=>'William Shakespeare','VERNEjules'=>'Jules Verne',
	'WEBERmax'=>'Max Weber');
	}
if ($_COOKIE['lang'] == 'es') {
	$namlst = array('AESOP'=>'Esopo','ALENCARjose'=>'José de Alencar','ALIGHIERIdante'=>'Dante Alighieri','ALLANpoe'=>'Edgar Allan Poe','ANDERSENhans','Hans Christian Andersen',
	'ANDRADEmario'=>'Mário de Andrade','ANTONIOalmeida'=>'Manuel Antônio de Almeida','ANTONIOgonzaga'=>'Tomás António Gonzaga','ARISTOTLE'=>'Aristóteles',
	'AZEVEDOaluisio'=>'Aluísio de Azevedo','BANDEIRAmanuel'=>'Manuel Banderia','BARRETOlima'=>'Lima Barreto','BASILIOgama'=>'Basílio da Gama',
	'BEAUVOIRsimone'=>'Simone de Beauvoir','BILAColavo'=>'Olavo Bilac','BOPPraul'=>'Raul Bopp','BYSSHEshelley'=>'Percy Bysshe Shelley',
	'CABRALmelo'=>'João Cabral de Melo Neto','CAMOESluis'=>'Luís de Camões','CARROLLlewis'=>'Lewis Carroll','CERVANTESmiguel'=>'Miguel de Cervantes',
	'CHRISTIEagatha'=>'Agatha Christie','CONANdoyle'=>'Arthur Conan Doyle','CSLEWIS'=>'C. S. Lewis','CUNHAeuclides'=>'Euclides da Cunha','DESCARTESrene'=>'René Descartes',
	'DRUMMONDandrade'=>'Carlos Drummond de Andrade','DUMASalexandre'=>'Alexandre Dumas','DURKHEIMemile'=>'Émile Durkheim','ECOumberto'=>'Umberto Eco','FRANKbaum'=>'Frank Baum',
	'FREIREpaulo'=>'Paulo Freire','FREUDsigmund'=>'Sigmund Freud','GRACAaranha'=>'Graça Aranha','GRACILIANOramos'=>'Graciliano Ramos','GRIMMbros'=>'Irmãos Grimm',
	'GUIMARAESbernardo'=>'Bernardo Guimarães','HOBBESthomas'=>'Thomas Hobbes','HOMERUS'=>'Homero','HPLOVECRAFT'=>'H. P. Lovecraft','HUGOvictor'=>'Victor Hugo',
	'JRRTOLKIEN'=>'J. R. R. Tolkien','KAFKAfranz'=>'Franz Kafka','LISPECTORclarice'=>'Clarice Lispector',
	'LOBATOmonteiro'=>'Monteiro Lobato','MACHADOassis'=>'Machado de Assis','MACHIAVELLIniccolo'=>'Nicolau Maquiavel','MARXkarl'=>'Karl Marx',
	'MEIRELEScecilia'=>'Cecília Meireles','NABOKOVvladimir'=>'Vladimir Nabokov','NIETZSCHEfriedrich'=>'Friedrich Nietzsche','ORWELLgeorge'=>'George Orwell',
	'OSWALDandrade'=>'Oswald de Andrade','PESSOAfernando'=>'Fernando Pessoa','PLATO'=>'Platão','POMPEIAraul'=>'Raul Pompéia','SAINTexupery'=>'Antoine de Saint-Exupéry',
	'SARTREjeanpaul'=>'Jean-Paul Sartre','SCHOPENHAUERarthur'=>'Arthur Schopenhauer','SHAKESPEAREwilliam'=>'William Shakespeare','VERNEjules'=>'Júlio Verne',
	'WEBERmax'=>'Max Weber');
	}

#GENRES
if ($_COOKIE['lang'] == 'pt') {
	$gnrlst = array('Chronicle'=>'Crônica','Comedy'=>'Comédia','Epic'=>'Épico','Fantasy'=>'Fantasia','Horror'=>'Terror','Journalism'=>'Jornalismo',
	'Parody'=>'Paródia','Philosophy'=>'Filosofia','Rhapsody'=>'Rapsódia','Romance'=>'Romance','Sociology'=>'Sociologia','Tale'=>'Conto','Tragedy'=>'Tragédia',
	'Poetry'=>'Poesia');
	}
else if ($_COOKIE['lang'] == 'en') {
	$gnrlst = array('Chronicle'=>'Chronicle','Comedy'=>'Comedy','Epic'=>'Epic','Fantasy'=>'Fantasy','Horror'=>'Horror','Journalism'=>'Journalism',
	'Parody'=>'Parody','Philosophy'=>'Philosophy','Rhapsody'=>'Rhapsody','Romance'=>'Romance','Sociology'=>'Sociology','Tale'=>'Tale',
	'Tragedy'=>'Tragedy','Poetry'=>'Poetry');
	}
else if ($_COOKIE['lang'] == 'es') {
	$gnrlst = array('Chronicle'=>'Crônica','Comedy'=>'Comedia','Epic'=>'Épico','Fantasy'=>'Fantasia','Horror'=>'Horror','Journalism'=>'Jornalismo',
	'Parody'=>'Parodia','Philosophy'=>'Filosofía','Rhapsody'=>'Rapsodia','Romance'=>'Romance','Sociology'=>'Sociología','Tale'=>'Conto',
	'Tragedy'=>'Tragédia','Poetry'=>'Poesía');
	}

#LITERARY SCHOOLS
if ($_COOKIE['lang'] == 'pt') {
	$ltslst = array('Arcadism'=>'Arcadismo','Iluminism'=>'Iluminismo','Impressionism'=>'Impressionismo','Indianism'=>'Indianismo','Mannerism'=>'Maneirismo',
	'Modernism'=>'Modernismo','Naturalism'=>'Naturalismo','Pre-Modernism'=>'Pré-Modernismo','Realism'=>'Realismo','Troubadorism'=>'Trovadorismo');
	}
else if ($_COOKIE['lang'] == 'en') {
	$ltslst = array('Arcadism'=>'Arcadism','Iluminism'=>'Iluminism','Impressionism'=>'Impressionism','Indianism'=>'Indianism','Mannerism'=>'Mannerism',
	'Modernism'=>'Modernism','Naturalism'=>'Naturalism','Pre-Modernism'=>'Pre-Modernism','Realism'=>'Realism','Troubadorism'=>'Troubadorism');
	}
else if ($_COOKIE['lang'] == 'es') {
	$ltslst = array('Arcadism'=>'Arcadismo','Iluminism'=>'Iluminismo','Impressionism'=>'Impresionismo','Indianism'=>'Indianismo','Mannerism'=>'Manierismo',
	'Modernism'=>'Modernismo','Naturalism'=>'Naturalismo','Pre-Modernism'=>'Pré-Modernismo','Realism'=>'Realismo','Troubadorism'=>'Trovadorismo');
	}

#LICENSES
if ($_COOKIE['lang'] == 'pt') {
	$liclst = array('Public Domain'=>'Domínio Público');
	}
else if ($_COOKIE['lang'] == 'en') {
	$liclst = array('Public Domain'=>'Public Domain');
	}
else if ($_COOKIE['lang'] == 'es') {
	$liclst = array('Public Domain'=>'Dominio Publico');
	}
?>
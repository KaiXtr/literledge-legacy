<?php

#GENDERS
if ($_COOKIE['lang'] == 'pt') {
	$gndlst = array('M'=>'Masculino','F'=>'Feminino','A'=>'Agênero','O'=>'Outro');
	}
else if ($_COOKIE['lang'] == 'en') {
	$gndlst = array('M'=>'Male','F'=>'Female','A'=>'Agender','O'=>'Other');
	}
else if ($_COOKIE['lang'] == 'es') {
	$gndlst = array('M'=>'Masculino','F'=>'Feminino','A'=>'Agénero','O'=>'Otro');
	}

#SIGNS
if ($_COOKIE['lang'] == 'pt') {
	$zdclst = array('01'=>'Sagitário','02'=>'Capricórnio','03'=>'Aquário','04'=>'Peixes','05'=>'Áries','06'=>'Touro','07'=>'Gêmeos','08'=>'Câncer',
		'09'=>'Leão','10'=>'Virgem','11'=>'Libra','12'=>'Escorpião');
	}
else if ($_COOKIE['lang'] == 'en') {
	$zdclst = array('01'=>'Sagittarius','02'=>'Capricorn','03'=>'Aquarius','04'=>'Pisces','05'=>'Aries','06'=>'Taurus','07'=>'Gemini','08'=>'Cancer',
		'09'=>'Leo','10'=>'Virgo','11'=>'Libra','12'=>'Scorpio');
	}
else if ($_COOKIE['lang'] == 'es') {
	$zdclst = array('01'=>'Sagitario','02'=>'Capricornio','03'=>'Acuario','04'=>'Piscis','05'=>'Aries','06'=>'Tauro','07'=>'Géminis','08'=>'Cáncer',
		'09'=>'Leo','10'=>'Virgo','11'=>'Libra','12'=>'Escorpio');
	}

#CENTURIES
$cenlst = array('9'=>'X','10'=>'XI','11'=>'XII','12'=>'XIII','13'=>'XIV','14'=>'XV','15'=>'XVI','16'=>'XVII','17'=>'XVIII','18'=>'XIX','19'=>'XX','20'=>'XXI',
	'1BD'=>'1th','2BD'=>'2th','3BD'=>'3th','4BD'=>'4th','5BD'=>'5th','6BD'=>'6th','7BD'=>'7th','8BD'=>'8th','9BD'=>'9th',);

#FILTERS
if ($_COOKIE['lang'] == 'pt') {
	$fltlst = array('New'=>'Novo','Popular'=>'Popular','Unknown'=>'Desconhecidos');
	}
else if ($_COOKIE['lang'] == 'en') {
	$fltlst = array('New'=>'New','Popular'=>'Popular','Unknown'=>'Unknown');
	}
else if ($_COOKIE['lang'] == 'es') {
	$fltlst = array('New'=>'Nuevo','Popular'=>'Popular','Unknown'=>'Desconocidos');
	}

#COUNTRIES
if ($_COOKIE['lang'] == 'pt') {
	$coulst = array('ARG'=>'Argentina','AUS'=>'Austrália','BOL'=>'Bolívia','BRA'=>'Brasil','CAN'=>'Canadá','CHI'=>'Chile','CHN'=>'China','CZE'=>'Tchéquia','COL'=>'Colômbia','DEN'=>'Dinamarca','ECU'=>'Equador','ENG'=>'Inglaterra','ESP'=>'Espanha','FRA'=>'França','GER'=>'Alemanha','GRE'=>'Grécia','GUY'=>'Guiana',
	'IRL'=>'Irlanda','ITA'=>'Itália','MEX'=>'México','NED'=>'Países Baixos','PER'=>'Peru','POL'=>'Polônia','POR'=>'Portugal','RUS'=>'Rússia','SCO'=>'Escócia','SUI'=>'Suíça','SUR'=>'Suriname','VEN'=>'Venezuela','URU'=>'Uruguai','USA'=>'Estados Unidos','WAL'=>'País de Gales');
	}
else if ($_COOKIE['lang'] == 'en') {
	$coulst = array('ARG'=>'Argentina','AUS'=>'Australia','BOL'=>'Bolivia','BRA'=>'Brazil','CAN'=>'Canada','CHI'=>'Chile','CHN'=>'China','CZE'=>'Czechia','COL'=>'Colombia','DEN'=>'Denmak','ECU'=>'Ecuador','ENG'=>'England','ESP'=>'Spain','FRA'=>'France','GER'=>'Germany','GRE'=>'Greece','GUY'=>'Guyana',
	'IRL'=>'Ireland','ITA'=>'Italy','MEX'=>'Mexico','NED'=>'Netherlands','PER'=>'Perú','POL'=>'Poland','POR'=>'Portugal','RUS'=>'Russia','SCO'=>'Scotland','SUI'=>'Switzerland','SUR'=>'Suriname','VEN'=>'Venezuela','URU'=>'Uruguay','USA'=>'United States','WAL'=>'Wales');
	}
else if ($_COOKIE['lang'] == 'es') {
	$coulst = array('ARG'=>'Argentina','AUS'=>'Australia','BOL'=>'Bolivia','BRA'=>'Brasil','CAN'=>'Canadá','CHI'=>'Chile','CHN'=>'China','CZE'=>'Chequia','COL'=>'Colombia','DEN'=>'Dinamarca','ECU'=>'Ecuador','ENG'=>'Inglaterra','ESP'=>'España','FRA'=>'Francia','GER'=>'Alemania','GRE'=>'Grecia','GUY'=>'Guayana',
	'IRL'=>'Irlanda','ITA'=>'Italia','MEX'=>'Mexico','NED'=>'Países Bajos','PER'=>'Peru','POL'=>'Polonia','POR'=>'Portugal','RUS'=>'Rusia','SCO'=>'Escocia','SUI'=>'Suiza','SUR'=>'Surinam','VEN'=>'Venezuela','URU'=>'Uruguay','USA'=>'Estados Unidos','WAL'=>'Gales');
	}

#GENRES
if ($_COOKIE['lang'] == 'pt') {
	$gnrlst = array('Chronicle'=>'Crônica','Comedy'=>'Comédia','Detective'=>'Investigação','Document'=>'Documento','Drama'=>'Drama','Epic'=>'Épico','Fantasy'=>'Fantasia','Horror'=>'Terror','Journalism'=>'Jornalismo','Novel'=>'Novela',
	'Parody'=>'Paródia','Philosophy'=>'Filosofia','Play'=>'Peça','Rhapsody'=>'Rapsódia','Romance'=>'Romance','Sociology'=>'Sociologia','Tale'=>'Conto','Tragedy'=>'Tragédia',
	'Poetry'=>'Poesia');
	}
else if ($_COOKIE['lang'] == 'en') {
	$gnrlst = array('Chronicle'=>'Chronicle','Comedy'=>'Comedy','Detective'=>'Detective','Document'=>'Document','Drama'=>'Drama','Epic'=>'Epic','Fantasy'=>'Fantasy','Horror'=>'Horror','Journalism'=>'Journalism','Novel'=>'Novel',
	'Parody'=>'Parody','Philosophy'=>'Philosophy','Play'=>'Play','Rhapsody'=>'Rhapsody','Romance'=>'Romance','Sociology'=>'Sociology','Tale'=>'Tale',
	'Tragedy'=>'Tragedy','Poetry'=>'Poetry');
	}
else if ($_COOKIE['lang'] == 'es') {
	$gnrlst = array('Chronicle'=>'Crônica','Comedy'=>'Comedia','Detective'=>'Investigación','Document'=>'Documento','Drama'=>'Drama','Epic'=>'Épico','Fantasy'=>'Fantasia','Horror'=>'Horror','Journalism'=>'Jornalismo','Novel'=>'Novela',
	'Parody'=>'Parodia','Philosophy'=>'Filosofía','Play'=>'Pieza','Rhapsody'=>'Rapsodia','Romance'=>'Romance','Sociology'=>'Sociología','Tale'=>'Conto',
	'Tragedy'=>'Tragédia','Poetry'=>'Poesía');
	}

#LITERARY SCHOOLS
if ($_COOKIE['lang'] == 'pt') {
	$ltslst = array('Arcadism'=>'Arcadismo','Baroque'=>'Barroco','Futurism'=>'Futurismo','Iluminism'=>'Iluminismo','Impressionism'=>'Impressionismo','Indianism'=>'Indianismo',
	'Mannerism'=>'Maneirismo','Modernism'=>'Modernismo','Naturalism'=>'Naturalismo','Parnassianism'=>'Parnasianismo','Pre-Modernism'=>'Pré-Modernismo',
	'Romanticism'=>'Romantismo','Realism'=>'Realismo','Symbolism'=>'Simbolismo','Troubadorism'=>'Trovadorismo');
	}
else if ($_COOKIE['lang'] == 'en') {
	$ltslst = array('Arcadism'=>'Arcadism','Baroque'=>'Baroque','Futurism'=>'Futurism','Iluminism'=>'Enlightment','Impressionism'=>'Impressionism','Indianism'=>'Indianism',
	'Mannerism'=>'Mannerism','Modernism'=>'Modernism','Naturalism'=>'Naturalism','Parnassianism'=>'Parnassianism','Pre-Modernism'=>'Pre-Modernism','Romanticism'=>'Romanticism',
	'Realism'=>'Realism','Symbolism'=>'Symbolism','Troubadorism'=>'Troubadorism');
	}
else if ($_COOKIE['lang'] == 'es') {
	$ltslst = array('Arcadism'=>'Arcadismo','Baroque'=>'Barroco','Futurism'=>'Futurismo','Iluminism'=>'Iluminismo','Impressionism'=>'Impresionismo','Indianism'=>'Indianismo',
	'Mannerism'=>'Manierismo','Modernism'=>'Modernismo','Naturalism'=>'Naturalismo','Parnassianism'=>'Parnasianismo','Pre-Modernism'=>'Pré-Modernismo',
	'Romanticism'=>'Romantismo','Realism'=>'Realismo','Symbolism'=>'Simbolismo','Troubadorism'=>'Trovadorismo');
	}

#ACADEMIES
if ($_COOKIE['lang'] == 'pt') {
	$acalst = array('ABL'=>'Academia Brasileira de Letras','APL'=>'Academia Paraibana de Letras');
	}
else if ($_COOKIE['lang'] == 'en') {
	$acalst = array('ABL'=>'Brazilian Academy of Letters','APL'=>'Paraíba Academy of Letters');
	}
else if ($_COOKIE['lang'] == 'es') {
	$acalst = array('ABL'=>'Academia Brasileña de Letras','APL'=>'Academia Paraibana de Letras');
	}

#BONDS
if ($_COOKIE['lang'] == 'pt') {
	$bndlst = array('H'=>'Marido','W'=>'Esposa','S'=>'Filho','D'=>'Filha','F'=>'Amigo');
	}
else if ($_COOKIE['lang'] == 'en') {
	$bndlst = array('H'=>'Husband','W'=>'Wife','S'=>'Son','D'=>'Daughter','F'=>'Friend');
	}
else if ($_COOKIE['lang'] == 'es') {
	$bndlst = array('H'=>'Marido','W'=>'Esposa','S'=>'Hijo','D'=>'Hija','F'=>'Amigo');
	}

#LICENSES
if ($_COOKIE['lang'] == 'pt') {
	$liclst = array('PD'=>'Domínio Público','CR'=>'Todos os direitos reservados');
	}
else if ($_COOKIE['lang'] == 'en') {
	$liclst = array('PD'=>'Public Domain','CR'=>'All rights reserved');
	}
else if ($_COOKIE['lang'] == 'es') {
	$liclst = array('PD'=>'Dominio Publico','CR'=>'Todos los derechos reservados');
	}
?>
<?php

#CENTURIES
$cenlst = array('10'=>'X','11'=>'XI','12'=>'XII','13'=>'XIII','14'=>'XIV','15'=>'XV','16'=>'XVI','17'=>'XVII','18'=>'XVIII','19'=>'XIX','20'=>'XX');

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
	$coulst = array('BRA'=>'Brasil','CZE'=>'Tchéquia','DEN'=>'Dinamarca','ENG'=>'Inglaterra','ESP'=>'Espanha','FRA'=>'França','GER'=>'Alemanha','GRE'=>'Grécia',
	'IRL'=>'Irlanda','ITA'=>'Itália','POL'=>'Polônia','POR'=>'Portugal','RUS'=>'Rússia','SCO'=>'Escócia','SUI'=>'Suíça','USA'=>'Estados Unidos');
	}
else if ($_COOKIE['lang'] == 'en') {
	$coulst = array('BRA'=>'Brazil','CZE'=>'Czechia','DEN'=>'Denmak','ENG'=>'England','ESP'=>'Spain','FRA'=>'France','GER'=>'Germany','GRE'=>'Greece',
	'IRL'=>'Ireland','ITA'=>'Italy','POL'=>'Poland','POR'=>'Portugal','RUS'=>'Russia','SCO'=>'Scotland','SUI'=>'Switzerland','USA'=>'United States');
	}
else if ($_COOKIE['lang'] == 'es') {
	$coulst = array('BRA'=>'Brasil','CZE'=>'Chequia','DEN'=>'Dinamarca','ENG'=>'Inglaterra','ESP'=>'España','FRA'=>'Francia','GER'=>'Alemania','GRE'=>'Grecia',
	'IRL'=>'Irlanda','ITA'=>'Italia','POL'=>'Polonia','POR'=>'Portugal','RUS'=>'Rusia','SCO'=>'Escocia','SUI'=>'Suiza','USA'=>'Estados Unidos');
	}

#GENRES
if ($_COOKIE['lang'] == 'pt') {
	$gnrlst = array('Chronicle'=>'Crônica','Comedy'=>'Comédia','Epic'=>'Épico','Fantasy'=>'Fantasia','Horror'=>'Terror','Journalism'=>'Jornalismo',
	'Parody'=>'Paródia','Philosophy'=>'Filosofia','Play'=>'Peça','Rhapsody'=>'Rapsódia','Romance'=>'Romance','Sociology'=>'Sociologia','Tale'=>'Conto','Tragedy'=>'Tragédia',
	'Poetry'=>'Poesia');
	}
else if ($_COOKIE['lang'] == 'en') {
	$gnrlst = array('Chronicle'=>'Chronicle','Comedy'=>'Comedy','Epic'=>'Epic','Fantasy'=>'Fantasy','Horror'=>'Horror','Journalism'=>'Journalism',
	'Parody'=>'Parody','Philosophy'=>'Philosophy','Play'=>'Play','Rhapsody'=>'Rhapsody','Romance'=>'Romance','Sociology'=>'Sociology','Tale'=>'Tale',
	'Tragedy'=>'Tragedy','Poetry'=>'Poetry');
	}
else if ($_COOKIE['lang'] == 'es') {
	$gnrlst = array('Chronicle'=>'Crônica','Comedy'=>'Comedia','Epic'=>'Épico','Fantasy'=>'Fantasia','Horror'=>'Horror','Journalism'=>'Jornalismo',
	'Parody'=>'Parodia','Philosophy'=>'Filosofía','Play'=>'Pieza','Rhapsody'=>'Rapsodia','Romance'=>'Romance','Sociology'=>'Sociología','Tale'=>'Conto',
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
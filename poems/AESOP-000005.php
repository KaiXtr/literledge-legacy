<?php
	if ($_COOKIE['lang'] == 'pt') {
		$shwpm = '<h1> A Gansa que Punha Ovos de Ouro </h1>
		Um homem possuía uma gansa que, toda manhã, punha um ovo de ouro. <br />
		Vendendo estes ovos preciosos, ele estava acumulando uma grande fortuna. <br />
		Quanto mais rico ficava, porém, mais avarento se tornava. <br />
		Começou a achar que um ovo só, por dia, era pouco. <br />
		"Porque não põe dois ovos, quatro ou cinco?" pensava ele. <br />
		"Provavelmente, se eu abrir a barriga desta ave, encontrarei uma <br />
		centena de ovos e viverei como um nababo". Assim pensando, matou <br />
		a gansa abriu-lhe a barriga e, naturalmente, nada encontrou. <br />
		<br />
		Moral: Quem tudo quer, tudo perde. <br />';
	}
	if ($_COOKIE['lang'] == 'en') {
		$shwpm = '<h1> The Goose with the Golden Eggs </h1>
		A certain man had the good fortune to possess a goose that <br />
		laid him a Golden Egg every day. But dissatisfied with so <br />
		slow an income, and thinking to seize the whole treasure <br />
		at once, he killed the Goose; and cutting her open, found her <br />
		just what any other goose would be! <br />';
	}
	if ($_COOKIE['lang'] == 'es') {
		$shwpm = '<h1> El Ganso de los Huevos de Oro </h1>
		Un granjero y su esposa tenían un ganso que ponía un huevo <br />
		de oro cada día. <br />
		<br />
		Supusieron que el ganso debería contener un gran terrón del <br />
		oro en su interior, y para tratar de conseguirlo de una sola vez, <br />
		lo mataron. <br />
		<br />
		Haciéndolo así pues, encontraron para su sorpresa que el ganso se <br />
		diferenciaba en nada de sus otros gansos. <br />
		<br />
		El par de ingenuos, esperando llegar a ser ricos de una sola vez, <br />
		se privaron en adelante del ingreso del cual se habían asegurado <br />
		día por día. <br />
		<br />
		Moraleja: Nunca destruyas, por ninguna razón, lo que buenamente <br />
		haz adquirido y te está proveyendo de bienestar. <br />';
	}
	$shwpm .= "<br />
	<span> ".$pnm." </span>
	<br />";
?>
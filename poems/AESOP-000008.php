<?php
	if ($_COOKIE['lang'] == 'pt') {
		$shwpm = '<h1> Os Rios e o Mar </h1>
		Os Rios se uniram para reclamar do Mar, dizendo, <br />
		"Por que quando fluímos em suas marés com águas doces <br />
		e potáveis, você trabalha para provocar mudanças e nos <br />
		faz salgados e impróprios para beber?". O Mar, percebendo <br />
		que eles pretenderam lançar a culpa nele, disse, <br />
		"Por favor, deixem de fluir em mim e então vocês <br />
		não serão salgados <br />
		<br />
		Moral: Quem pode mais, chora menos<br />';
	}
	if ($_COOKIE['lang'] == 'en') {
		$shwpm = '<h1> The Rivers and the Sea </h1>
		Once upon a time the rivers combined against the sea and, <br />
		going in a body, accused her, saying; "Why is it that when <br />
		we rivers pour our waters into you so fresh and sweet, you <br />
		straightway render them salty and unpalatable?" The sea, <br />
		observing the temper in which they came, merely answered; <br />
		"If you do not wish to become salty, please to keep away <br />
		from me altogether." <br />
		<br />
		Moral: Those who are most benefited are often <br />
		the first to complain.<br />';
	}
	if ($_COOKIE['lang'] == 'es') {
		$shwpm = '<h1> Los Ríos y el Mar </h1>
		Se juntaron los ríos para quejarse ante el mar diciéndole: <br />
		<br />
		-¿Por qué si nosotros te entregamos agua dulce y potable, <br />
		haces tal trabajo, que conviertes nuestras aguas en <br />
		saladas e imposibles de beber? <br />
		<br />
		El mar, percibiendo que querían echarle la culpa <br />
		del asunto, dijo: <br />
		<br />
		- Por favor, dejen de darme agua y entonces ya <br />
		no volverán a salarse sus aguas. <br />
		<br />
		Moraleja: Antes de culpar a otros, fíjate primero <br />
		si no eres el verdadero culpable.<br />';
	}
	$shwpm .= "<br />
	<span> ".$pnm." </span>
	<br />";
?>
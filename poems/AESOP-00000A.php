<?php
	if ($_COOKIE['lang'] == 'pt') {
		$shwpm = '<h1> O Casamento do Sol </h1>
		Dizem que em certo tempo desejou o Sol de se casar, <br />
		e todas as gentes, agravadas disso, se foram <br />
		queixar a Júpiter, dizendo: <br />
		<br />
		- Que no Estio trabalhosamente sofriam um Sol, que com <br />
		seus raios os abrasava, donde inferiam e provavam, que se <br />
		o Sol casasse e viesse a ter filhos, queimaria o mundo todo; <br />
		porque um Sol faria Verão calmoso na Índia, outro em Grécia, <br />
		outro na Noruega e terras setentrionais; pelo que sendo todas <br />
		as três zonas tórridas, não teriam as gentes onde viver. <br />
		<br />
		Visto isto por Júpiter, mandou que não casasse.<br />';
	}
	if ($_COOKIE['lang'] == 'en') {
		$shwpm = '<h1> The Marriage of the Sun </h1>
		Once upon a time, in a very warm summer, it was <br />
		reported that the sun was going to be married. <br />
		All the birds and beasts were delighted at the thought. <br />
		The frogs, above all others, were determined to have <br />
		a good holiday. But an old toad put a stop to their <br />
		festivities by observing that it was an occasion for <br />
		sorrow rather than for joy. "For if," said he, <br />
		"the sun of himself now parches up the marshes <br />
		so that we can hardly bear it, what will become <br />
		of us if he should have half a dozen little <br />
		suns in addition?"<br />';
	}
	if ($_COOKIE['lang'] == 'es') {
		$shwpm = '<h1> El Sol y las Ranas </h1>
		Llegó el verano y se celebraban las bodas del Sol. <br />
		Regocijábanse todos los animales del acontecimiento, <br />
		faltando poco para que también las ranas fueran de <br />
		la partida; pero una de ellas exclamó: <br />
		<br />
		-¡Insensatas! ¿Qué motivo tenéis para regocijaros? <br />
		Ahora que es él solo, seca todos los pantanos; <br />
		si toma mujer y tiene un hijo como él ¿qué nos <br />
		quedará por sufrir? <br />
		<br />
		Moraleja: Antes de celebrar un acontecimiento, <br />
		primero ve sus futuras consecuencias.<br />';
	}
	$shwpm .= "<br />
	<span> ".$pnm." </span>
	<br />";
?>
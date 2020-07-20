<?php
	if ($_COOKIE['lang'] == 'pt') {
		$shwpm = '<h1> A Lua e sua Mãe </h1>
		Lua uma vez pediu à sua Mãe para que lhe fizesse <br />
		um vestido. – Como eu posso? – Respondeu ela. <br />
		– Não há nenhum que se ajuste a sua figura. <br />
		Uma hora você é uma Lua Nova, e na outra é uma <br />
		Lua Cheia. E entre esses momentos você não é <br />
		nem uma nem outra. –<br />
		<br />
		Moral: Tudo muda constantemente. Não se pode <br />
		adapta-se sem mudanças.<br />';
	}
	if ($_COOKIE['lang'] == 'en') {
		$shwpm = '<h1> The Moon and Her Mother </h1>
		The moon once asked her mother to make her a little cloak <br />
		that would fit her well. "How," replied she, <br />
		"can I make you a cloak to fit you, who are now <br />
		a new moon, and then a full moon, and then again <br />
		neither one nor the other?"<br />';
	}
	if ($_COOKIE['lang'] == 'es') {
		$shwpm = '<h1> La Luna y su Madre </h1>
		La luna le pidió a su madre que le hiciera un vestido.<br />
		¿Cómo voy a hacértelo? -le respondió la madre- si es <br />
		imposible tomarte las medidas? Un día eres luna nueva, <br />
		otra luna llena; y entre las dos, ni una cosa ni otra. <br />
		<br />
		Moraleja: Las personas volubles no encuentran nunca <br />
		nada que les convenga.<br />';
	}
	$shwpm .= "<br />
	<span> ".$pnm." </span>
	<br />";
?>
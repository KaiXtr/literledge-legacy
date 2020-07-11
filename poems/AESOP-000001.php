<?php
	if ($_COOKIE['lang'] == 'pt') {
		$shwpm = '<h1> A Raposa e as Uvas </h1>
		Morta de fome, uma raposa foi até um vinhedo sabendo que ia encontrar muita uva. <br />
		A safra tinha sido excelente. Ao ver a parreira carregada de cachos enormes, <br />
		a raposa lambeu os beiços. Só que sua alegria durou pouco: por mais que tentasse, <br />
		não conseguia alcançar as uvas. Por fim, cansada de tantos esforços inúteis, <br />
		resolveu ir embora, dizendo: <br />
		<br />
		- Por mim, quem quiser essas uvas pode levar. Estão verdes, estão azedas, <br />
		não me servem. Se alguém me desse essas uvas eu não comeria. <br />
		<br />
		Moral: Desprezar o que não se consegue conquistar é fácil. <br />';
	}
	if ($_COOKIE['lang'] == 'en') {
		$shwpm = '<h1> The Fox and The Grapes </h1>
		One afternoon a fox was walking through the forest and spotted a bunch of grapes <br />
		hanging from over a lofty branch. "Just the thing to quench my thirst," said he. <br />
		<br />
		Taking a few steps back, the fox jumped and just missed the hanging grapes. <br />
		Again the fox took a few steps back, ran, jumped, and tried to reach them but <br />
		still failed.
		<br />
		Finally giving up, the fox turned up his nose and said, "They'."'".'re probably sour anyway," <br />
		and proceeded to walk away. <br />
		<br />
		Moral: It is easy to despise what you cannot have. <br />';
	}
	if ($_COOKIE['lang'] == 'es') {
		$shwpm = '<h1> La Zorra y las Uvas </h1>
		Una zorra que paseaba por el campo vio unos hermosos racimos de uvas que ya <br />
		estaban maduras, la zorra entonces deseosa de comérselos buscaba cualquier modo <br />
		para alcanzar las uvas y poder comérselas, pero no podía hacerlo y viendo que <br />
		por mas que lo intentaba no podía asumió su fracaso se dijo así misma para consolarse: <br />
		estas uvas no están todavía maduras ya que tienen un color muy feo. <br />
		<br />
		Moraleja: no debemos culpar de nuestro fracaso a los demás. <br />';
	}
	$shwpm .= "<br />
	<span> ".$pnm." </span>
	<br />";
?>
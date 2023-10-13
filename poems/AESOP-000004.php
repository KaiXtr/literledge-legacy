<?php
	if ($_COOKIE['lang'] == 'pt') {
		$shwpm = '<h1> O Cão e o Nacho de Carne </h1>
		Um dia, um cão, carregando um naco de carne na boca, ia atravessando uma ponte. <br />
		Olhando para baixo, viu sua própria imagem refletida na água. <br />
		Pensando ver outro cão, cobiçou-lhe logo o naco de carne que este tinha na boca, <br />
		e pôs-se a latir. Mal, porém, abriu a boca, seu próprio o naco de carne caiu <br />
		na água e perdeu-se para sempre." <br />
		<br />
		Moral: Mais vale um pássaro na mão do que dois voando. <br />';
	}
	if ($_COOKIE['lang'] == 'en') {
		$shwpm = '<h1> The Dog and The Shadow </h1>
		A dog had stolen a piece of meat out of a butcher'."'".'s shop and was <br />
		crossing a river on his way home, when he saw his own shadow reflected <br />
		in the stream below. Thinking that it was another dog with another <br />
		piece of meat, he resolved to make himself master of that also. <br />
		But in snapping at the supposed treasure, he dropped the bit he was <br />
		carrying, and so lost all. <br />';
	}
	if ($_COOKIE['lang'] == 'es') {
		$shwpm = '<h1> El Perro y el Pedazo de Carne </h1>
		Un perro llevaba en la boca un pedazo de carne, cuando se disponía <br />
		a pasar un rió, vio reflejada la sombra del pedazo de carne que llevaba <br />
		en el hocico, viendo que la carne que se veía en el agua era más <br />
		grande y jugoso que el que llevaba consigo. <br />
		<br />
		El perro se quedó quiero un rato mirando fijamente la imagen, hasta que <br />
		abrió la boca para agarrarlo; al hacer esto, el pedazo de carne que <br />
		llevaba se le cayó al agua, quedándose el pobre perro sin ambos. <br />
		<br />
		Moraleja: siempre perdemos lo que tenemos seguro, por tratar <br />
		de tomar algo que no nos pertenece. <br />';
	}
	$shwpm .= "<br />
	<span> ".$pnm." </span>
	<br />";
?>
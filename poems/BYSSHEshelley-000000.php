<?php
	$shwpm = "<h1> Ozymandias </h1>
	I met a traveller from an antique land, <br />
	Who said—“Two vast and trunkless legs of stone <br />
	Stand in the desert.... Near them, on the sand, <br />
	Half sunk a shattered visage lies, whose frown, <br />
	And wrinkled lip, and sneer of cold command, <br />
	Tell that its sculptor well those passions read <br />
	Which yet survive, stamped on these lifeless things, <br />
	<br />
	The hand that mocked them, and the heart that fed; <br />
	And on the pedestal, these words appear: <br />
	My name is Ozymandias, King of Kings <br />
	Look on my Works, ye Mighty, and despair! <br />
	<br />
	Nothing beside remains. Round the decay <br />
	Of that colossal Wreck, boundless and bare <br />
	The lone and level sands stretch far away. <br />";

	if ($_COOKIE['lang'] == 'pt') {
		$shwpm .= '
		<div id="BYSSHEshelley-000000" class="pomtrans" style="display: none">
		<hr>
		<br />
		Ao vir de antiga terra, disse-me um viajante <br />
		Duas pernas de pedra, enormes e sem corpo, <br />
		Acham-se no deserto. E jáz, pouco distante, <br />
		Afundando na areia, um rosto já quebrado, <br />
		de lábio desdenhoso, olhar frio e arrogante <br />
		Mostra esse aspecto que o escultor bem conhecia <br />
		Quantas paixões lá sobrevivem, nos fragmentos, <br />
		<br />
		À mão que as imitava e ao peito que as nutria <br />
		No pedestal estas palavras notareis: <br />
		"Meu nome é Ozimândias, e sou Rei dos Reis <br />
		Desesperai, ó Grandes, vendo as minhas obras!" <br />
		<br />
		Nada subsiste ali. Em torno à derrocada <br />
		Da ruína colossal, areia ilimitada <br />
		Se estende ao longe, rasa, nua, abandonada. <br />
		<br />
		<span> Tradução de Péricles Eugênio da Silva Ramos </span>
		</div>';
	}
	if ($_COOKIE['lang'] == 'es') {
		$shwpm .= '
		<div id="BYSSHEshelley-000000" class="pomtrans" style="display: none">
		<hr>
		<br />
		A un viajero vi, de tierras remotas. <br />
		Me dijo: hay dos piernas en el desierto, <br />
		De piedra y sin tronco. A su lado cierto <br />
		Rostro en la arena yace: la faz rota, <br />
		<br />
		Sus labios, su frío gesto tirano, <br />
		Nos dicen que el escultor ha podido <br />
		Salvar la pasión, que ha sobrevivido <br />
		Al que pudo tallarlo con su mano. <br />
		<br />
		Algo ha sido escrito en el pedestal: <br />
		"Soy Ozymandias, el gran rey. ¡Mirad <br />
		Mi obra, poderosos! ¡Desesperad!" <br />
		<br />
		La ruina es de un naufragio colosal. <br />
		A su lado, infinita y legendaria <br />
		Sólo queda la arena solitaria. <br />
		<br />
		<span> Traducción de Fernando G.Toledo </span>
		</div>';
	}
	$shwpm .= "<br />
	<span> ".$pnm." </span>
	<br />";
	if ($_COOKIE['lang'] == 'pt') {
		$shwpm .= '<br />
		<a onclick="set_display('."'BYSSHEshelley-000000'".')" style="float: right">Mostrar Tradução</a>';
	}
	if ($_COOKIE['lang'] == 'es') {
		$shwpm .= '<br />
		<a onclick="set_display('."'BYSSHEshelley-000000'".')" style="float: right">Mostrar Traducción</a>';
	}
?>
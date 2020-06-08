<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00000X'");
				$i = $find->fetch_assoc();
				$v = $i[$_COOKIE['lang']].' - ';
			}
			include '../design/metadata.php'; 
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<div id='bookinfo'>
			<?php $book = '00000X'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<div class='manlan' lang='pt'>
					<a name='goto1'></a>
					<h1> Resenha </h1>
					A Escrava Isaura é um romance escrito por Bernardo Guimarães em 1875 e publicado no mesmo ano pela B.L. Garnier, Rio de Janeiro. Com o romance, Bernardo Guimarães obteve fama, sendo reconhecido até pelo imperador do Brasil, Dom Pedro II.[1]

					Escrito em plena campanha abolicionista (1875), o livro conta as desventuras de Isaura, escrava branca e educada, de caráter nobre, vítima de um senhor devasso.

					O romance foi um grande sucesso editorial e permitiu que Bernardo Guimarães se tornasse um dos mais populares romancistas de sua época. O autor pretende, nesta obra, fazer um libelo antiescravagista e libertário e, talvez, por isso, o romance exceda em idealização romântica, a fim de conquistar a imaginação popular perante as situações intoleráveis do cativeiro. O estudioso Manuel Cavalcanti Proença observa que:

					Numa literatura não muito abundante em manifestação abolicionistas, é obra de muita importância, pelo modo sentimental como focalizou o problema, atingindo principalmente o público feminino, que encontrava na literatura de ficção derivativo e caminho de fuga, numa sociedade em que a mulher só saía à rua acompanhada e em dias pré-estabelecidos; o mais do tempo ficava retida em casa, sem trabalho obrigatório, bordando, cosendo, ouvindo e falando mexericos, isto é, enredos e intrigas, como se dizia no tempo e ainda se diz neste romance.

					Bernardo Guimarães faz questão de ressaltar exaustivamente a beleza branca e pura de Isaura, que não denunciava a sua condição de escrava porque não portava nenhum traço africano, era educada e nada havia nela que "denunciasse a abjeção do escravo". O que parece uma escolha preconceituosa e contraditória — contar as agruras da escravidão criando uma escrava branca — talvez seja melhor compreendido se levar em conta que a maior parte do público que consumia romances na época era composto por mulheres da sociedade, que apreciavam as histórias de amor.

					Somem-se a isso o modelo de beleza feminino de então, caracterizado pela pele nívea e maçãs rosadas do rosto e, principalmente, o objetivo do autor de conquistar a solidariedade do leitor pela escrava, mostrando a que ponto extremo poderia chegar o regime escravocrata: "fisicamente, Isaura não é diferente das damas da sociedade, mas, por ser escrava, é obrigada a viver como os de sua classe, como objeto útil nas mãos de seu senhor", conforme afirma a crítica Maria Nazareth Soares Fonseca.

					O autor claramente conseguiu o que queria. A sociedade brasileira do século XIX, que tanto se apiedou das desventuras de Isaura, aceitou-a porque ela era branca e educada. O autor pôde, assim, demonstrar, através do seu sofrimento, o quanto "é vã e ridícula toda a distinção que provém do nascimento e da riqueza". E é claro, a cor de Isaura serve, como afirma o crítico Antônio Cândido, "para facilitar a ação de Álvaro, compreensivelmente apaixonado e decidido a desposá-la, como fez."

					Se houve influência, portanto, do romance A cabana do Pai Tomás, talvez tenha sido apenas no que o crítico Alfredo Bosi aponta como referência: a cena da fuga de Campos para Recife, "talvez sugerida pela fuga de Elisa através dos gelos flutuantes de Ohio para a liberdade no Norte e por fim no Canadá". Entretanto, o fato é que, como aponta o crítico, só depois do lançamento de A cabana do Pai Tomás "a literatura brasileira começou a ser povoada de feitores cruéis e de escravos virtuosos".
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					<li>Isaura, a heroína escrava, é branca, linda, pura, virginal e possui um caráter nobre e demonstra "conhecer o seu lugar": do princípio ao fim, suporta conformada a perseguição de Leôncio, as propostas de Henrique, as desconfianças de Malvina, sem jamais se revoltar. Permanece emocionalmente escrava, mesmo tendo sido educada como uma dama da sociedade. Tem escrúpulos de passar por branca livre, acha-se indigna do amor de Álvaro e termina como a própria imagem da "virtude recompensada".</li>
					<li>Leôncio é o vilão leviano, devasso e insensível que, de "criança incorrigível e insubordinada" á adolescente que sangra a carteira do pai com suas aventuras, acaba por tornar-se um homem cruel e inescrupuloso, casando-se com Malvina, linda, ingênua e rica, por ser "um meio mais suave e natural de adquirir fortuna". Persegue Isaura e se recusa a cumprir a vontade de sua mãe, já falecida, que queria dar a ela a liberdade e alguma renda para viver com dignidade. O personagem possui características de um psicopata.</li>
					<li>Tomásia é a condessa de Campos, rica e bonita, uma das maiores inimigas de Leôncio, devido as maldades que este praticou contra ela. Antes de se tornar condessa ela era uma camponesa simples, mas depois de rica, se torna uma mulher poderosa que faz de tudo para se vingar de Leôncio.</li>
					<li>Álvaro é um rico herdeiro, cavalheiro nobre e de caráter impecável, que "tinha ódio a todos os privilégios e distinções sociais, e é escusado dizer que era liberal, republicano e quase socialista"; um jovem de idéias igualitárias, idealista e corajoso para lutar contra os valores da sociedade a que pertence. Sua conduta moral é assim descrita pelo autor: "Original e excêntrico como um rico lorde inglês, professava em seus costumes a pureza e severidade de um quaker. Todavia, como homem de imaginação viva e coração impressionável, não deixava de amar os prazeres, o luxo, a elegância, e sobretudo as mulheres, mas com certo platonismo delicado, certa pureza ideal, próprios das almas elevadas e dos corações bem formados."</li>
					<li>Apaixonado por Isaura, o grande obstáculo que Álvaro precisa vencer é o fato de Isaura ser propriedade legítima de Leôncio. Para isso, vai à corte, descobre a falência de Leôncio, adquire seus bens e desmascara o vilão. Liberta Isaura e casa-se com ela, desafiando, assim, os preconceitos da sociedade escravagista.</li>
					<li>Miguel, pai de Isaura, foge do conceito tradicional do mau feitor. Quando feitor da fazenda de Leôncio, tratara bem aos escravos e amparara Juliana, mãe de Isaura, nas suas desditas com o pai de Leôncio. Pai extremoso, deseja libertar a filha do jugo da escravidão e não mede esforços para isso</li>
					<li>Juliana, mãe de Isaura. Foi escrava e mucama de Dona Ester. Poucas vezes é citada no livro. Mestiça, bela e valente, despertou no Comendador Almeida o mais insano desejo obsessivo de possui-la. Ela nunca cedeu as suas investidas, chegando assim a ser castigada diversas vezes (tronco, quartinho dos escravos fujões, etc...).Na fazenda conheceu o então capataz Miguel, por quem se apaixonou e engravidou de Isaura. O Comendador Almeida sabendo de tal ato, expulsa o então capataz. Ficando a mercê de seu dono, Juliana foi obrigada a trabalhar pesado nos serviços da casa até dar a luz a Isaura. Veio a falecer logo em seguida devido ter um parto muito complicado.</li>
					<li>Martinho é o estereótipo do ganancioso: cabeça grande, cara larga, feições grosseiras e "no fundo de seus olhos pardos e pequeninos reluz constantemente um raio de velhacaria". Por querer ganhar muito dinheiro entregando Isaura ao seu senhor, acaba por não ganhar nada.</li>
					<li>Belchior é o símbolo da estupidez submissa e também sua descrição física se presta a demonstrar sua conduta: feio, cabeludo, atarracado e corcunda. O crítico Manuel Cavalcanti Proença aponta "o parentesco entre o disforme e grotesco, Belchior é o Quasímodo de O Corcunda de Notre Dame, de Víctor Hugo, romance de extraordinária voga, ainda não de todo perdida, no Brasil."</li>
					<li>Dr. Geraldo é um advogado conceituado, que serve como fiel da balança para Álvaro, já que procura equilibrar os arroubos do amigo, mostrando-lhe a realidade dos fatos. Quando Álvaro, revoltado com a condição de Isaura e indignado com os horrores da escravidão, dispõe-se a unir-se a ela, mesmo sabendo que escandalizaria a sociedade, Geraldo retruca lucidamente que a fortuna de Álvaro lhe dá independência para "satisfazer os seus sonhos filantrópicos e os caprichos de tua imaginação romanesca". O que não é, na verdade, característica restrita apenas à sociedade escravocrata do século XIX.</li>
					<li>Malvina, esposa de Leôncio, jovem rica e ingênua, que fica com o tempo barbarizada com o comportamento do marido, com o tempo vai tendo ódio de seu comportamento, depois da misteriosa morte de Leôncio se casa com dr. Geraldo.</li>
					<li>Branca, uma jovem rica, ela é irmã de Geraldo, gosta muito de Álvaro mas não se conforma em Álvaro se apaixonar por um escrava. Mas com sua chegada à Campos, ela e Leôncio se tornam cumplices, e fazem planos para separar Isaura de Álvaro.</li>
					<li>Rosa, bonita e ousada, nascida na senzala de Leôncio, descobre que é filha de um Coronel que, por coincidência, é pai de Malvina, se engraçou com sua mãe antes dela nascer. Sabendo disso, sua esposa manda quebrar todos os dentes da escrava e matar Rosa, mas a escrava grávida foge para a Fazenda de Leôncio.</li>
					<li>Poucos anos depois de Rosa nascer, sua mãe morre, mas Rosa cresce até se tornar uma mocinha. Logo depois que o coronel descobre que Rosa está viva e na fazenda de Leôncio, ele a compra por muito dinheiro, e então a assume como filha.</li>
					</ul>
					<hr>
					</div>
			</div>
			<?php $book = '00000X'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'GUIMARAESbernardo'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>
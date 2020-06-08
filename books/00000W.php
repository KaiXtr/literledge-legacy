<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00000W'");
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
			<?php $book = '00000W'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<div class='manlan' lang='pt'>
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Vidas secas é o título do romance do escritor brasileiro Graciliano Ramos, publicado em 1938, considerado por muitos como a maior obra do autor.
					No que diz respeito à estrutura, o livro apresenta treze capítulos, dentre os quais alguns podem até ser lidos em outra ordem (romance desmontável), que não a impressa no livro. Entretanto, alguns capítulos, como o primeiro, "mudança", e o último, "fuga", devem ser lidos nesta ordem. Esses dois capítulos reforçam a ideia de que toda a miséria que circunda os personagens de "Vidas Secas" representa um ciclo, em que, quando menos se espera, a situação se agrava e a família é obrigada a se retirar, repetidas e repetidas vezes.

					A obra de Graciliano pode ser considerada um marco para a literatura brasileira, visto que há a implícita (e, em alguns casos, até explícita) crítica social a toda pobreza no sertão nordestino, que atinge uma boa parcela da população, e que, de fato, acaba por prejudicar todo o país, impedindo maiores desenvolvimentos. Há a tentativa, portanto, de se mostrar a desarticulação dessa região com o resto do país (um Brasil pobre dentro de todo o Brasil).

					O próprio título da obra, se analisado corretamente, nos dará pistas importantes da mensagem que Graciliano quer passar: "Vidas" se opõe a "Secas" pois a primeira tem sentido de abundância, enquanto, a segunda, de vazio, de falta, configurando um paradoxo (ou "oxímoro", oposição de ideias resultando em uma construção de sentido ilógico). Além disso, denotativamente, o adjetivo "secas" se refere a "vidas", e, dessa forma, teria o sentido de que a família sofre com a seca. Por outro lado, conotativamente, pode-se relacionar aquele adjetivo a uma vida privada, miserável.
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					Fabiano, Sinha Vitória, o menino mais velho, o menino mais novo e a cachorra Baleia são os protagonistas do romance Vidas Secas – narrativa dos sertanejos retirantes da seca e seus dramas sociais, publicado por Graciliano Ramos em 1938.

					O casal, Fabiano e Sinha Vitória, representa o núcleo da trama: Fabiano mantém-se fiel a seus hábitos de Vaqueiro - é uma extensão do animal, totalmente adaptado ao cavalo e à roupa de couro. No lado oposto, Sinha Vitória – que também guarda o poder de adaptação às piores condições materiais, mas vive enaltecendo uma figura, para ela exemplar, o seu Tomás da bolandeira, um homem que sabia ler e tinha uma cama de couro.

					Fabiano é uma pessoa que se ligou de maneira visceral ao meio. Ele se orgulha de sobreviver à Seca e de fazer parte de uma paisagem que só admite os mais resistentes: ora exalta-se com secreta satisfação: ”Fabiano, você é um homem”; ora, se reconhece como a um animal: “Você é um bicho, Fabiano”, e o orgulho logo passa para a dúvida - quando pensa ser uma coisa da fazenda, um traste que possui apenas as perneiras, o gibão, o guarda-peito e o sapato de couro cru que, ao ser demitido, seria do vaqueiro que o substituísse.

					Vaqueiro, rude, curto das ideias, sem instrução e sem capacidade de entendimento, Fabiano não tem planos e vive a procura de trabalho. Bebe muito e perde dinheiro no jogo. Sua auto-imagem varia de acordo com a situação e seu ânimo diante da dificuldade: quando se reconhece um homem e sente orgulho, Fabiano é a afirmação do indivíduo que se sobrepõe às dificuldades. Quando se reconhece um animal, ganha relevância o ser impessoal de existência desumana. Ao avistar Baleia – num momento de comunhão, envolvido na tragédia de pertencer à mesma realidade do animal, Fabiano conclui: “Você é um bicho, Baleia”.

					Fabiano tenta, mas não consegue se comunicar. Como os animais, a família de Fabiano praticamente não tinha linguagem. Contando apenas com o instinto de sobrevivência, ele – um cabra vermelho, curtido pelo sol, é vencido por um soldado raquítico que desafia-o para uma partida de baralho. Humilhado, Fabiano chega a ser preso e não consegue se defender: a fragilidade de linguagem impede a possibilidade de divulgar a injustiça que sofrera e ele lamenta viver como um bicho, sem ter frequentado a escola.

					Sinha Vitória, mulher de Fabiano, vive sua sina, sempre atenta aos sinais, estremece lembrando-se da seca, mas logo afasta a recordação, temendo que ela se realize, e reza baixinho. Esperta, sabe fazer conta, previne o marido sobre os trapaceiros e enganadores. Tem consciência da condição em que vivem, mas também tem planos e sonha. O maior dos seus sonhos é ter uma cama de couro, igual àquela de seu Tomás da bolandeira. Para o marido, um sonho impossível. "Cambembes podiam ter luxo?"

					Além de cuidar dos filhos e da tapera, Sinha Vitória ajuda o marido nas tarefas. Trabalha duro e, às vezes fica brava e briga com o marido, reclamando daquela vida embrutecida, sem ter sequer uma cama para dormir. "Pensou de novo na cama de varas e mentalmente xingou Fabiano. Dormiam naquilo, tinham-se acostumado, mas seria mais agradável dormirem numa cama de lastro de couro, como outras pessoas." Briga com o marido, reclama que ele gasta muito com jogo e cachaça. Ressentido, Fabiano condena os sapatos de verniz que ela usava nas festas, "caros e inúteis" que a deixavam trôpega.

					Por fim, quando nova seca se anuncia, Sinha Vitória impele Fabiano a pensar no destino da família e, fazendo uma leitura da realidade, diz que os pássaros de arribação vão matar o gado. O marido fica intrigado. Como criaturas pequenas podem destruir animais como os bois, tão fortes quanto ele? Tentando impor o seu mundo até o fim, diz que os meninos iriam vaquejar como ele. Sinha Vitória explode: "Nossa Senhora os livrasse de semelhante desgraça. Vaquejar, que ideia! Chegariam a uma terra distante, (...) adorariam costumes diferentes".

					No final, o desejo "vitorioso" de Sinha Vitória: rumo à cidade grande, Fabiano imagina as dificuldades pelas quais passarão, mas também pensa os "meninos na escola, aprendendo coisas difíceis e necessárias".

					Fabiano acha que eles devem assumir a forma de tatu – animal integrado à terra, com casco duro, protetor. Sinha Vitória sonha com uma vida melhor para os filhos – possibilidade distante da identidade animal do marido, e pensa no homem que sabia ler e tinha uma cama de couro, mas que foi vencido pela seca. Queria para os filhos uma terra distante, um outro jeito de ser, outros costumes.

					O menino mais novo admira os hábitos do pai quando ele cavalga totalmente adaptado ao cavalo - qual uma figura lendária, e tenta imitá-lo, absorvendo um pouco daquela grandeza que os tirava da vida resignada que levavam.

					O menino mais velho, ao contrário, a vida de vaqueiro não o fascina. Ele deseja descobrir o sentido das palavras e recorre à mãe – porção mais “intelectual” da família, que frequentemente o afasta, por não ter explicações para dar.

					Os dois meninos, anônimos, vivem a brincar com Baleia em redor da tapera. Raramente procuram os pais, por receio de tomarem cascudos.

					A primeira visita dos meninos à vila foi durante uma festa. Eles se assustaram com a variedade de coisas que existia no comércio bem sortido. Deslumbrados com a possibilidade de tudo aquilo ter um nome, uma existência. A dúvida do menino mais novo é se as coisas tinham nome e se os nomes eram uma criação humana ou divina. Ao serem excluídos da posse de objetos, os meninos são também excluídos da posse das palavras que os representam. Esta a maior pobreza, a falta da linguagem, por limitar as crianças a um mundo sem ultrapassagem pela imaginação.

					Trepado na porteira do curral, o menino mais novo observa o pai tentando dominar uma égua brava. Feliz, planeja fazer algo grandioso um dia, quando crescer. Assim, então, seria admirado pelo irmão e por Baleia.

					O menino mais velho é curioso. Ao ouvir a palavra "inferno", durante uma conversa de Sinhá Terta com a mãe, quis saber o significado. Sinha Vitória referiu-se vagamente a um certo lugar ruim. O menino não compreende como uma palavra tão bonita pode significar "coisa ruim". Pergunta ao pai, que o repele. De novo, insiste com a mãe que, zangada, aplica-lhe um cocorote. O menino mais velho não se conforma. Indignado, se consola com a amiga Baleia: "O pequeno sentou-se, acomodou nas pernas a cabeça da cachorra, pôs-se a contar-lhe baixinho uma história". Melancólico, e apesar do vocabulário limitado, o menino mais velho se abraça à Baleia e fala do mundo, das estrelas, do céu e do inferno.

					A cachorra Baleia é um membro da família. O nome "Baleia" é uma espécie de alusão à morte da cachorra. Pois Graciliano pretendia a morte dela desde o começo (o capítulo de sua morte era um conto): Uma baleia no sertão morreria.

					A cachorra não é humanizada, como é popularmente divulgado. A grande mestria de Graciliano, foi colocar um cão agindo inteiramente como um cão. Em meio àquela família bruta do sertão, o cão parece ser mais sensível. Por isso subvertem uma possível antropomorfização da cachorra.

					No inverno, é quando a família experimenta algum aconchego, reunidos em torno do fogo: Fabiano sentado no pilão, Sinha Vitória acolhe os meninos no colo, e a cachorra Baleia "com o traseiro no chão e o resto do corpo levantado, olhava as brasas que se cobriam de cinzas".

					Ao ser sacrificada, por suspeita de cólera, Baleia vislumbra o "céu dos cachorros, cheio de preás".
					</ul>
					<hr>
					<a name='goto3'></a>
					<h1> Curiosidades </h1>
					<ul>
					<li>O romance originalmente se chamaria "O Mundo Coberto de Penas", título do penúltimo capítulo, em referências às penas negras dos corvos cobrindo o chão seco. O texto original está grafado assim. Porém o próprio Graciliano Ramos riscou o título original e escreveu à mão "Vidas Secas".</li>
					</ul>
					<hr>
					</div>
			</div>
			<?php $book = '00000W'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'GRACILIANOramos'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../design/array_lists.php';
			$lts = 'Pre-Modernism';
			$v = $ltslst[$lts].' - ';
			require '../design/metadata.php';
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<div id='banner' style='background-image: url("media/images/banners/<?php echo strtolower($lts); ?>.jpg")'></div>
		<?php echo "<div id='profile'> <h1 id='litername'> ".$ltslst[$lts]." </h1> </div>"; ?>
		<div id='bio'>
			O Pré-modernismo teve início no começo do século XIX e se estendeu até a Semana de Arte Moderna, em 1922.

			Foi um período que marcou a transição entre o simbolismo e o modernismo, e para muitos estudiosos, não pode ser considerado uma escola literária, isto porque apresenta diversas produções artísticas e literárias distintas.

			Na época, o Brasil passava por intensos acontecimentos. A elite dominante da República Velha (1894-1930) era composta por proprietários rurais de São Paulo e Minas Gerais, isto é, a economia do país centrava-se na lavoura cafeeira e na pecuária.

			Nesse mesmo momento muitas regiões do país se industrializavam, aumentando a classe operária. Além disso, tinha-se o crescimento de imigrantes europeus se estabelecendo no Brasil, dirigindo-se ao Centro-sul. Também tinham os negros, recém-libertados, que estavam migrando para vários pontos do país, compondo a classe marginalizada.

			Outro fato importante é que cultura canavieira do Nordeste entrava em decadência, por conta da ascensão do café de São Paulo.

			Os ex-escravos, imigrantes e o proletariado passaram a integrar a camada menos favorecida da sociedade, ao contrário da classe conservadora que tinha dinheiro e poder.

			Por conta de todos esses acontecimentos, as pessoas passaram a desejar um país com condições sociais mais justas, de igualdade perante à lei e participação política, mas, infelizmente, nada disso ocorreu.

			A partir de então surgiram vários conflitos sociais, de contestação e reprovação das novas políticas republicanas, como:

			Nordeste: fenômeno do cangaço, fanatismo religioso centrado na figura do padre Cícero, Guerra de Canudos;
			Rio de Janeiro: revolta contra a vacina obrigatória contra a febre amarela e Revolta da Chibata;
			São Paulo: greves operárias; e
			Sul: Guerra do Contestado.
			Nesse contexto histórico, os escritores surgem com novas formas de escrever. Eles adotam uma postura mais liberal e passam a fazer criticas sobre os problemas sociais enfrentados pela população. Há uma linguagem formal que veio do arcadismo, deixando no passado a preocupação estética e tomando espaço temas históricos, sociais e políticos.

			Esses escritores deram início às novas tendências que inspiraram os modernistas de 1922.

			Os autores mais importantes do pré-modernismo são:

			Euclides da Cunha (1866-1909)
			Foi jornalista, escritor, poeta, historiador, engenheiro e professor. Autor da obra “Os Sertões”, que retrata a saga do povo sertanejo em sua luta diária contra os abusos da elite.

			Para escrevê-la, Euclides da Cunha presenciou o evento durante três semanas. Ele dividiu a obra em três partes: “A Terra”, onde faz a descrição física dos baianos; “O homem”, apresentando o sertanejo como resultado da mestiçagem, e “A luta”, narrando o desenrolar do conflito e a destruição do arraial de Canudos. Utilizou de vocabulário raro e extenso, com estilo de prosa artística e científica, bem como intensificou e engrandeceu os fatos de sua narrativa.

			Escreveu também, “A Guerra do Sertão”, “As Secas do Norte”, “Civilizações”, “A Margem da História”, entre outras obras.

			Monteiro Lobato (1882-1948)
			Foi escritor, tradutor, ativista político, diretor e produtor. Ficou conhecido pelas suas inúmeras obras para o público infantil.

			Foi autor do Sítio do Pica-Pau Amarelo, sendo responsável pelas criações dos seguintes personagens: Visconde de Sabugosa, Cuca, a boneca Emília, Saci Pererê, Rabicó, entre outros.

			Além disso, também criou o famoso personagem Jeca Tatu, que denunciava as injustiças sociais que aconteciam no interior paulista.

			Contribuiu com a obra “As Cidades Mortas”, na qual também denunciou o dia a dia das cidades cafeeiras, a decadência econômica e o comportamento das pessoas.

			Ainda, é autor de “A Menina do Narizinho Arrebitado”, “Problema Vital”, “O Garimpeiro do Rio das Garças”, entre outros.

			Lima Barreto (1881-1922)
			Foi escritor e jornalista, conhecido por criticar, através de suas obras, as injustiças sociais.

			A maioria de suas obras foram descobertas de publicadas depois de sua morte, sendo a principal “Triste Fim de Policarpo Quaresma”.

			O autor dividiu-a em três partes, retratando a vida do personagem central: Policarpo Quaresma. É um funcionário público patriota e nacionalista, que valoriza o violão, a modinha e o folclore, bem como reconhece o tupi como língua oficial do país.

			Em tom coloquial, o autor narra uma história em que o personagem tece duras críticas ao presidente Marechal Floriano, sendo condenado mais tarde ao fuzilamento.
			<br />
			Fonte: <a href='https://www.infoescola.com/literatura/pre-modernismo/' > Wikipedia </a>
		</div>
		<?php $schl = $lts; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>
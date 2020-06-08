<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00001B'");
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
			<?php $book = '00001B'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<div class='manlan' lang='pt'>
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Da divisão do trabalho social (em francês, De la division du travail social) é um livro escrito pelo sociólogo Émile Durkheim publicado originalmente em 1893. Ele analisa as funções sociais do trabalho e procura mostrar como, na modernidade, tal divisão é a principal fonte de coesão social.
					Nessa pesquisa, Durkheim classificou a sociedade em dois tipos de solidariedade: a mecânica e a orgânica, que associou a dois tipos de lei, por ele denominados de direito repressivo e direito restitutivo. Tal divisão está ancorada nos dois tipos de consciência que têm lugar nos seres sociaisː a consciência coletiva e a individual. Para Durkheim, o desenvolvimento de uma é exclusivo em relação à outra, sendo o processo de predominância da consciência coletiva em relação à individual o processo de evolução das sociedades, ou de sua complexificação, como também denomina o autor.[carece de fontes]

					A complexificação define uma mudança em que os diversos corpos sociais, primitivamente indiferenciados no seu interior, fragmentam-se estabelecendo trocas com outros grupos e definindo diferentes funções no seu interior. As sociedades primitivas seriam aquelas em que a consciência coletiva se encontra desenvolvida de modo absoluto. Todos os indivíduos que compõem uma sociedade neste estágio detêm as mesmas representações coletivas, as mesmas finalidades, comungando dos mesmos valores. O trabalho necessário para atender a suas necessidades encontra-se parcamente diferenciado,apenas entre os sexos. Neste estágio, a consciência individual é nula ou quase nula.[carece de fontes]

					Isto permite, ao autor, sustentar o argumento de que não se trata de sociedades mais ou menos coercitivas, pois, onde não se desenvolveu a consciência individual, não se pode coibi-la. Durkheim ainda argumenta que, nestas sociedades, o indivíduo, e/ou um pequeno séquito dentro delas, mais facilmente rompe e deserda da mesma pois contém, em si, o conjunto das representações que definem o todo social e, por isso, está apto a cumprir todas as funções necessárias a sua sobrevivência.[carece de fontes]

					O que caracteriza o desenvolvimento das sociedades modernas para Durkheim seria a diferenciação social, a complexificação das funções exercidas por um corpo social. A isso, encontra-se, vinculada, a predominância da consciência individual com relação à coletiva. Entretanto, o argumento durkheimiano é contrário ao individualismo do liberalismo econômico, que pressupõe a ação econômica como o fundamento da sociedade e o único substrato possível de uma moral que não tolha o indivíduo.[carece de fontes]

					Durkheim vê, neste argumento, um erro segundo sua lógica funcionalista. Para o autor, mesmo a consciência individual é formada socialmente. A consciência levada a ver o indivíduo como desprovido de influências de seu meio social é somente incapaz de percebê-la, pois esta é profunda e constitui seu próprio processo formativo. Desse modo é que a diferenciação social, a complexificação da sociedade, não trata de romper os laços sociais, mas de transformá-los. A divisão do trabalho social não provoca, segundo o autor, senão em suas formas patológicas, a desintegração da sociedade mas um novo tipo de solidariedade.[carece de fontes]

					Sendo mecânica a solidariedade das sociedades primitivas, nas sociedades evoluídas, a solidariedade é orgânica. O processo de divisão do trabalho forma indivíduos que são cada vez mais capazes de perceber o quanto dependem dos outros. Por isso, a consciência individual, para Durkheim, não é sinônimo de individualismo e/ou egoísmo, mas de uma autoconsciência formada socialmente. É, sim, possível, diferenciar-se, assumir gostos particulares, desempenhar diferentes profissões, mas, na medida em que estas possibilidades proliferam, mais estreita se torna a complementariedade proveniente das diversas atividades exercitadas pelos indivíduos no corpo social pois, quanto mais especializadas as funções, maior o seu número.
					<hr>
				</div>
			</div>
			<?php $book = '00001B'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'DURKHEIMemile'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>
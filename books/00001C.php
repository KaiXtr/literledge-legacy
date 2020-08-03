<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00001C'");
				$i = $find->fetch_assoc();
				$v = $i[$_COOKIE['lang']];
			}
			include '../design/metadata.php'; 
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<div id='bookinfo'>
			<?php $book = '00001C'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					As Regras do Método Sociológico (em francês: Les règles de la méthode sociologique), primeiramente publicado em 1895, é um livro de Émile Durkheim. É reconhecido por ser resultado direto do projeto próprio de Durkheim de estabelecer a sociologia como uma nova ciência social. Assim sugere duas teses principais, sem as quais a sociologia não poderia ser uma ciência, tendo como características:

					Precisa ter um objeto específico de estudo. Diferentemente da filosofia ou da psicologia, o objeto próprio da sociologia é o fato social.
					Precisa respeitar e aplicar um reconhecimento objetivo, um método científico, trazendo-a para perto, dentro do possível, das outras ciências exatas. Este método deve evitar a todo custo preconceitos e julgamentos subjetivos.
					Para Durkheim o indivíduo, de maneira isolada, não pode ser considerado ideal para o estudo da Sociologia, elemento inadequado para o estudo e a compreensão apropriada do conceito de “fato social”. O que interessa à vertente durkheimiana é o enfoque do indivíduo inserido em uma realidade social objetiva que, encontrando-se acima dele, caracteriza-se por ser grupal e, coletivo.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					As Regras do Método Sociológico (em francês: Les règles de la méthode sociologique), primeiramente publicado em 1895, é um livro de Émile Durkheim. É reconhecido por ser resultado direto do projeto próprio de Durkheim de estabelecer a sociologia como uma nova ciência social. Assim sugere duas teses principais, sem as quais a sociologia não poderia ser uma ciência, tendo como características:

					Precisa ter um objeto específico de estudo. Diferentemente da filosofia ou da psicologia, o objeto próprio da sociologia é o fato social.
					Precisa respeitar e aplicar um reconhecimento objetivo, um método científico, trazendo-a para perto, dentro do possível, das outras ciências exatas. Este método deve evitar a todo custo preconceitos e julgamentos subjetivos.
					Para Durkheim o indivíduo, de maneira isolada, não pode ser considerado ideal para o estudo da Sociologia, elemento inadequado para o estudo e a compreensão apropriada do conceito de “fato social”. O que interessa à vertente durkheimiana é o enfoque do indivíduo inserido em uma realidade social objetiva que, encontrando-se acima dele, caracteriza-se por ser grupal e, coletivo.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					As Regras do Método Sociológico (em francês: Les règles de la méthode sociologique), primeiramente publicado em 1895, é um livro de Émile Durkheim. É reconhecido por ser resultado direto do projeto próprio de Durkheim de estabelecer a sociologia como uma nova ciência social. Assim sugere duas teses principais, sem as quais a sociologia não poderia ser uma ciência, tendo como características:

					Precisa ter um objeto específico de estudo. Diferentemente da filosofia ou da psicologia, o objeto próprio da sociologia é o fato social.
					Precisa respeitar e aplicar um reconhecimento objetivo, um método científico, trazendo-a para perto, dentro do possível, das outras ciências exatas. Este método deve evitar a todo custo preconceitos e julgamentos subjetivos.
					Para Durkheim o indivíduo, de maneira isolada, não pode ser considerado ideal para o estudo da Sociologia, elemento inadequado para o estudo e a compreensão apropriada do conceito de “fato social”. O que interessa à vertente durkheimiana é o enfoque do indivíduo inserido em uma realidade social objetiva que, encontrando-se acima dele, caracteriza-se por ser grupal e, coletivo.
					<hr>
						";
					}
				?>
			</div>
			<?php $book = '00001C'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'DURKHEIMemile'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>
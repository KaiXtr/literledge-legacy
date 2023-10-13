<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00001E'");
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
			<?php $book = '00001E'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Pedagogia do Oprimido é um dos mais conhecidos trabalhos do educador e filósofo brasileiro Paulo Freire. O livro propõe uma pedagogia com uma nova forma de relacionamento entre professor, estudante, e sociedade. O livro continua popular entre educadores no mundo inteiro e é um dos fundamentos da pedagogia crítica.

					Dedicado aos que são referidos como \"os esfarrapados do mundo\" é baseado em reflexões realizadas durante seu exílio no Chile, período em que ajudou em experiências de educação popular. Freire inclui uma detalhada análise da relação entre os que ele chama de \"colonizador\" e \"colonizado\", utilizando como base a \"Dialética do Senhor e do Escravo\" extraída da Fenomenologia do Espírito de Hegel.

					Com mais de um milhão de cópias vendidas, é a terceira obra mais citada em trabalhos acadêmicos da área de humanas em todo o mundo, à frente de clássicos como Vigiar e Punir de Michel Foucault e O Capital de Karl Marx.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Pedagogia do Oprimido é um dos mais conhecidos trabalhos do educador e filósofo brasileiro Paulo Freire. O livro propõe uma pedagogia com uma nova forma de relacionamento entre professor, estudante, e sociedade. O livro continua popular entre educadores no mundo inteiro e é um dos fundamentos da pedagogia crítica.

					Dedicado aos que são referidos como \"os esfarrapados do mundo\" é baseado em reflexões realizadas durante seu exílio no Chile, período em que ajudou em experiências de educação popular. Freire inclui uma detalhada análise da relação entre os que ele chama de \"colonizador\" e \"colonizado\", utilizando como base a \"Dialética do Senhor e do Escravo\" extraída da Fenomenologia do Espírito de Hegel.

					Com mais de um milhão de cópias vendidas, é a terceira obra mais citada em trabalhos acadêmicos da área de humanas em todo o mundo, à frente de clássicos como Vigiar e Punir de Michel Foucault e O Capital de Karl Marx.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Pedagogia do Oprimido é um dos mais conhecidos trabalhos do educador e filósofo brasileiro Paulo Freire. O livro propõe uma pedagogia com uma nova forma de relacionamento entre professor, estudante, e sociedade. O livro continua popular entre educadores no mundo inteiro e é um dos fundamentos da pedagogia crítica.

					Dedicado aos que são referidos como \"os esfarrapados do mundo\" é baseado em reflexões realizadas durante seu exílio no Chile, período em que ajudou em experiências de educação popular. Freire inclui uma detalhada análise da relação entre os que ele chama de \"colonizador\" e \"colonizado\", utilizando como base a \"Dialética do Senhor e do Escravo\" extraída da Fenomenologia do Espírito de Hegel.

					Com mais de um milhão de cópias vendidas, é a terceira obra mais citada em trabalhos acadêmicos da área de humanas em todo o mundo, à frente de clássicos como Vigiar e Punir de Michel Foucault e O Capital de Karl Marx.
					<hr>
						";
					}
				?>
			</div>
			<?php $book = '00001E'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'FREIREpaulo'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>
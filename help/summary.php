<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
		if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt'))
			{$v = 'Ajuda - ';}
		else if ($_COOKIE['lang'] == 'en')
			{$v = 'Help - ';}
		else if ($_COOKIE['lang'] == 'es')
			{$v = 'Ayuda - ';}
		include '../design/metadata.php'; ?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/helpbar.php' ?>

		<div class='infocontent help'>
			<div class='manlan' lang='pt'>
				<a name='ptgoto1'></a>
				<h1> Qual é o propósito do Literledge? </h1>
				O grande fim do site é democratizar o acesso ao conhecimento e especialmente, aos livros de domínio público. Através dos livros digitais, os custos de tiragem que um livro físico normalmente teria são completamente reduzidos e assim os livros são disponíveis para todos.
				<hr>

				<a name='ptgoto2'></a>
				<h1> Qual é a origem dos livros? </h1>
				Os livros digitais disponibilizados no site são provenientes de vários sites diferentes, estes livros são creditados devidamente e possuem links para suas páginas de origem.
				<hr>

				<a name='ptgoto3'></a>
				<h1> O site possui informações confiáveis? </h1>
				Todas as informações descritas de autores e livros são escritas pelos próprios desenvolvedores do Literledge com base em pesquisa em vários sites diferentes de vários idiomas.
				<hr>

				<a name='ptgoto4'></a>
				<h1> Posso publicar meus livros no site? </h1>
				O intuito do site é disponibilizar livros gratuitos de domínio público ou cedidos pelo autor ou editora, atualmente o site não é feito para receber livros de terceiros ou protegidos por direitos autorais.
				<hr>

				<a name='ptgoto5'></a>
				<h1> Como contribuir com o site? </h1>
				Há várias maneiras de ajudar a expandir o conteúdo do site, caso o usuário tenha uma conta no Literledge, ele pode publicar um poema, um livro ou um autor na página de <a href='upload.php'>Uploads</a>, o conteúdo informado será verificado e então finalmente publicado, o usuário será creditado por sua contribuição.
				<hr>

				<a name='ptgoto6'></a>
				<h1> Como criar uma conta? </h1>
				Para criar uma conta no Literledge é simples, basta clicar no botão "Cadastre-se" disponível no topo do site. Preencha os dados correspondentes, aceite os Termos e Condições e confirme seu email, e sua conta já estará pronta!
				<hr>

				<a name='ptgoto7'></a>
				<h1> Como são feitas as avaliações de livros? </h1>
				Todos os livros são avaliados segundo os usuários cadastrados no site. Qualquer usuário que queira avaliar uma obra precisa obrigatoriamente escrever uma análise pessoal com mínimo de 100 caracteres. As avaliações se referem á obra em si, por isso não se diferenciam dependendo das edições dos livros. As avaliações não interferem no ranqueamento dos livros na plataforma.
				<hr>

				<a name='ptgoto8'></a>
				<h1> O site possui informações incorretas </h1>
				Caso você veja alguma informação incorreta no site, você pode clicar em "Reportar erro" no fim do artigo para enviar um aviso de erro aos desenvolvedores do Literledge.
				<hr>
			</div>
			<div class='manlan' lang='en'>
				<a name='engoto1'> </a>
				<h1> What is the purpose of Literledge? </h1>
				The great purpose of the site is to democratize access to knowledge and especially to public domain books. Through digital books, the circulation costs that a physical book would normally have are completely reduced and thus books are available to everyone.
				<hr>

				<a name='engoto2'> </a>
				<h1> What is the origin of the books? </h1>
				The digital books available on the site come from several different sites, these books are properly credited and have links to their home pages.
				<hr>

				<a name='engoto3'> </a>
				<h1> Does the site have reliable information? </h1>
				All of the described information from authors and books is written by the Literledge developers themselves based on research on several different websites in several languages.
				<hr>

				<a name='engoto4'> </a>
				<h1> Can I publish my books on the website? </h1>
				The purpose of the site is to make free books available in the public domain or provided by the author or publisher, currently the site is not designed to receive books from third parties or protected by copyright.
				<hr>

				<a name='engoto5'> </a>
				<h1> How to contribute to the site? </h1>
				There are several ways to help expand the content of the site, if the user has a Literledge account, he can publish a poem, a book or an author on the <a href='upload.php'> Uploads </a> page, the informed content will be verified and then finally published, the user will be credited for their contribution.
				<hr>

				<a name='engoto6'> </a>
				<h1> How to create an account? </h1>
				To create a Literledge account is simple, just click on the "Register" button available at the top of the site. Fill in the corresponding data, accept the Terms and Conditions and confirm your email, and your account will be ready!
				<hr>

				<a name='engoto7'> </a>
				<h1> How are book reviews done? </h1>
				All books are evaluated according to the users registered on the site. Any user who wants to evaluate a work must write a personal analysis with a minimum of 100 characters. The evaluations refer to the work itself, so they do not differ depending on the editions of the books. The reviews do not interfere with the ranking of books on the platform.
				<hr>

				<a name='engoto8'> </a>
				<h1> The website has incorrect information </h1>
				If you see any incorrect information on the website, you can click on "Report Error" at the end of the article to send an error notice to Literledge developers.
				<hr>
			</div>

			<div class='manlan' lang='pt'> <button class='btpress' onClick='top_scroll()'> Voltar ao topo </button> </div>
			<div class='manlan' lang='en'> <button class='btpress' onClick='top_scroll()'> Go back to top </button> </div>

		</div>

		<?php include '../design/footer.php' ?>
	</body>
</html>

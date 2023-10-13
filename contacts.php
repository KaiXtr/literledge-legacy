<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
		if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt'))
			{$v = 'Contatos';}
		else if ($_COOKIE['lang'] == 'en')
			{$v = 'Contacts';}
		else if ($_COOKIE['lang'] == 'es')
			{$v = 'Contactos';}
		include 'design/metadata.php'; ?>
	</head>

	<body>
		<?php include 'design/header.php' ?>
		<?php include 'design/lateralbar.php' ?>

		<div class='content'>
			<div class='login'>
				<h1> 
				<?php
					if ($_COOKIE['lang'] == 'pt') {echo 'Contate-nos';}
					if ($_COOKIE['lang'] == 'en') {echo 'Contact us';}
					if ($_COOKIE['lang'] == 'es') {echo 'Contáctenos';}
				?>
				</h1>
				<?php
					if (@$_GET['t'] == true) {
						if ($_GET['t'] == 1) {echo '<div id="thank">Obrigado por nos contatar!</div>';}
						if ($_GET['t'] == 2) {echo '<span class="error">Não foi possível enviar sua mensagem,<br/> tente novamente mais tarde.</span><br /><br />';}
					}
				?>
				<form action='account/send_email.php' method='post'>
					<span id='text'> Nome </span> <br />
					<input type='text' id='user' class='textbox' name='name' /> <br />
					<span id='text'> Email </span> <br />
					<input type='text' id='user' class='textbox' name='email' /> <br />
					<span id='text'> Mensagem </span> <br />
					<textarea id='user' class='textbox long' name='message'></textarea> <br />
					<input type='submit' class='btpress' /> <br />
				</form>
			</div>
		</div>
		<script type='text/javascript'>
			setTimeout(function (){
				document.getElementById('thank').style.opacity = '0%';
			},3000)
		</script>
		<?php include 'design/footer.php' ?>
	</body>
</html>
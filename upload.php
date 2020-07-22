<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php session_start();
		if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt'))
			{$v = 'Contribuir - ';}
		else if ($_COOKIE['lang'] == 'en')
			{$v = 'Contribute - ';}
		include 'design/metadata.php';
		if (isset($_GET['error'])) {$error = $_GET['error'];} else {$error = '';}
		if (!isset($_SESSION['user'])) {header('location: login.php');} ?>
	</head>

	<body>
		<?php include 'design/header.php' ?>
		<?php include 'design/lateralbar.php' ?>

		<div class='content'>
			<div class='login proedit'>
				<form action='account/send_request.php' method='post' enctype='multipart/form-data'>
					<?php
						require 'account/mysql_connect.php';
						if ($notcon == null) {
							$find = $conn->query("SELECT * FROM users WHERE nick='" .$_SESSION['user']. "'");
							if ($find->num_rows > 0) {$i = $find->fetch_assoc();}
						}

						if (@$_GET['t']) {
							if ($_GET['t'] == '1') {echo "<script type='text/javascript'> set_tab('tab1','tab2','tab3'); </script>";}
							if ($_GET['t'] == '2') {echo "<script type='text/javascript'> set_tab('tab2','tab1','tab3'); </script>";}
							if ($_GET['t'] == '3') {echo "<script type='text/javascript'> set_tab('tab3','tab1','tab3'); </script>";}
						}
					?>
					<div id='optlst'>
						<ul>
							<li> <a onclick='set_tab("tab1","tab2","tab3")'> <input id='op1' type='radio' name='request' value='poem' checked='true' />
								<div class='manlan' lang='pt'> <label for='op1'> Poema </label> </div>
								<div class='manlan' lang='en'> <label for='op1'> Poem </label> </div>
							</a> </li>
							<li> <a onclick='set_tab("tab2","tab1","tab3")'> <input id='op2' type='radio' name='request' value='book' />
								<div class='manlan' lang='pt'> <label for='op2'> Livro </label> </div>
								<div class='manlan' lang='en'> <label for='op2'> Book </label> </div>
							</a> </li>
							<li> <a onclick='set_tab("tab3","tab1","tab2")'> <input id='op3' type='radio' name='request' value='auctor' />
								<div class='manlan' lang='pt'> <label for='op3'> Autor </label> </div>
								<div class='manlan' lang='en'> <label for='op3'> Auctor </label> </div>
							</a> </li>
							<li>
								<div class='manlan' lang='pt'> <input type='submit' class='btpress' value='Contribuir' /> </div>
								<div class='manlan' lang='en'> <input type='submit' class='btpress' value='Contribute' /> </div>
							</li>
						</ul>
					</div>
					<div id='tab1' class='optabs' style='display: block;'>
						<span id='text'>
							<div class='manlan' lang='pt'> nome </div>
							<div class='manlan' lang='en'> name </div>
							<div class='manlan' lang='es'> nombre </div>
						</span> <br />
						<input type='text' class='textbox' name='pname' maxLength='30' />
						<br />
						<span id='text'>
							<div class='manlan' lang='pt'> poema </div>
							<div class='manlan' lang='en'> poem </div>
							<div class='manlan' lang='es'> poema </div>
						</span> <br />
						<textarea class='textbox long' name='pcontent'></textarea>
						<br />
						<span id='text'>
							<div class='manlan' lang='pt'> autor </div>
							<div class='manlan' lang='en'> auctor </div>
							<div class='manlan' lang='es'> autor </div>
						</span> <br />
						<input id='auct' class='textbox' list='dtlst' maxLength='30' />
						<datalist id='dtlst'>
						<?php
							require 'account/mysql_connect.php';
							if ($notcon == null) {
								$find = $conn->query("SELECT pt,nick FROM users");
								if ($find->num_rows > 0) {
									while ($i = $find->fetch_assoc()) {
											echo "<option data-value='".$i['nick']."'>".$i['pt']."</option>";
										}
									}
								$conn->close();
								}
						?>
						</datalist>
						<input id='auct-hidden' type='hidden' name='pauctor' />
						<script type='text/javascript'>
							document.querySelector('input[list]').addEventListener('input', function(e) {
								var input = e.target,
									list = input.getAttribute('list'),
									options = document.querySelectorAll('#' + list + ' option'),
									hiddenInput = document.getElementById(input.id + '-hidden'),
									inputValue = input.value;

								hiddenInput.value = inputValue;

								for(var i = 0; i < options.length; i++) {
									var option = options[i];

									if (option.innerText == inputValue) {
										hiddenInput.value = option.getAttribute('data-value');
										break;
									}
								}
							});
						</script>
					</div>
					<div id='tab2' class='optabs' style='display: none;'>
						<span id='text'>
							<div class='manlan' lang='pt'> autor </div>
							<div class='manlan' lang='en'> auctor </div>
							<div class='manlan' lang='es'> autor </div>
						</span> <br />
						<input type='text' class='textbox' name='bauctor' list='auctors' maxLength='30' onchange='search_suggest(this.value)' />
						<datalist id='auctors'>
						<?php
							require 'account/mysql_connect.php';
							if ($notcon == null) {
								$find = $conn->query("SELECT name FROM users");
								if ($find->num_rows > 0) {
									while ($i = $find->fetch_assoc()) {
											echo "<option value='".$i['name']."'>";
										}
									}
								$conn->close();
								}
						?>
						</datalist>
					</div>
					<div id='tab3' class='optabs' style='display: none;'>
						<span id='text'>
							<div class='manlan' lang='pt'> autor </div>
							<div class='manlan' lang='en'> auctor </div>
							<div class='manlan' lang='es'> autor </div>
						</span> <br />
						<input type='text' class='textbox' name='aname' list='auctors' maxLength='30' onchange='search_suggest(this.value)' />
						<datalist id='auctors'>
						<?php
							require 'account/mysql_connect.php';
							if ($notcon == null) {
								$find = $conn->query("SELECT name FROM users");
								if ($find->num_rows > 0) {
									while ($i = $find->fetch_assoc()) {
											echo "<option value='".$i['name']."'>";
										}
									}
								$conn->close();
								}
							if (isset($_GET['seasugg'])) {
								mainInfo($_GET['seasugg']);
							}
						?>
						</datalist>
					</div>
				</form>
			</div>
		</div>
		<?php include 'design/footer.php' ?>
	</body>
</html>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require 'account/mysql_connect.php';
			if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt'))
				{$v = 'Contribuir - ';}
			else if ($_COOKIE['lang'] == 'en')
				{$v = 'Contribute - ';}
			else if ($_COOKIE['lang'] == 'es')
				{$v = 'Contribuir - ';}
			include 'design/metadata.php';
			if (isset($_GET['error'])) {$error = $_GET['error'];} else {$error = '';}
			if (!isset($_SESSION['user'])) {header('location: login.php');}
			else {
				$find = $conn->query("SELECT auctor FROM users WHERE nick='".$_SESSION['user']."'");
				if ($find->num_rows == 0)
					{header('location: '.$_SERVER["HTTP_REFERER"]);}
				else {
					$i = $find->fetch_assoc();
					if ($i['auctor'] != '2') {
						header('location: '.$_SERVER["HTTP_REFERER"]);
					}
				}
			}
		?>
	</head>
	<body>
		<?php
			include 'design/header.php';
			include 'design/lateralbar.php';

			#THANK
			if ((@$_GET['a'])&&($_GET['a'] == '1')) {
				echo "<div id='thank'>";
				if ($_COOKIE['lang'] == 'pt') {echo "Obrigado por contribuir para o acervo!";}
				if ($_COOKIE['lang'] == 'en') {echo "Thank you for contributing to the collection!";}
				if ($_COOKIE['lang'] == 'es') {echo "¡Gracias por contribuir a la colección!";}
				echo "</div>";
			}
		?>

		<div class='content'>
			<div class='login proedit'>
				<form action='account/send_request.php' method='post' enctype='multipart/form-data'>
					<?php
						require 'account/mysql_connect.php';
						require 'design/array_lists.php';
						if ($notcon == null) {
							$find = $conn->query("SELECT * FROM users WHERE nick='" .$_SESSION['user']. "'");
							if ($find->num_rows > 0) {$i = $find->fetch_assoc();}
						}
					?>
					<div id='optlst'>
						<ul>
							<li> <a onclick='set_tab("tab1","tab2","tab3")'> <input id='op1' type='radio' name='request' value='poem' checked='true' />
							<label for='op1'>
							<?php
								if ($_COOKIE['lang'] == 'pt') {echo "Poemas";}
								if ($_COOKIE['lang'] == 'en') {echo "Poems";}
								if ($_COOKIE['lang'] == 'es') {echo "Poémas";}
							?>
							</label>
							</a> </li>
							<li> <a onclick='set_tab("tab2","tab1","tab3")'> <input id='op2' type='radio' name='request' value='book' />
							<label for='op2'>
							<?php
								if ($_COOKIE['lang'] == 'pt') {echo "Livros";}
								if ($_COOKIE['lang'] == 'en') {echo "Books";}
								if ($_COOKIE['lang'] == 'es') {echo "Libros";}
							?>
							</label>
							</a> </li>
							<li> <a onclick='set_tab("tab3","tab1","tab2")'> <input id='op3' type='radio' name='request' value='auctor' />
							<label for='op3'>
							<?php
								if ($_COOKIE['lang'] == 'pt') {echo "Autores";}
								if ($_COOKIE['lang'] == 'en') {echo "Auctors";}
								if ($_COOKIE['lang'] == 'es') {echo "Autores";}
							?>
							</label>
							</a> </li>
							<li>
							<?php
								if ($_COOKIE['lang'] == 'pt') {$lbl = "Contribuir";}
								if ($_COOKIE['lang'] == 'en') {$lbl = "Contribute";}
								if ($_COOKIE['lang'] == 'es') {$lbl = "Contribuir";}
								echo "<input type='submit' class='btpress' value='".$lbl."' />";
							?>
							</li>
						</ul>
					</div>
					<div id='tab1' class='optabs' style='display: block;'>
						<?php
							$errl = "<span class='error'>";
							if (strpos($error, '1') != false) {
								if ($_COOKIE['lang'] == 'pt') {$errl .= "O autor deste poema não está registrado no site.";}
								if ($_COOKIE['lang'] == 'en') {$errl .= "The author of this poem is not registered on the site.";}
								if ($_COOKIE['lang'] == 'es') {$errl .= "El autor de este poema no está registrado en el sitio.";}
							}
							if (strpos($error, '2') != false) {
								if ($_COOKIE['lang'] == 'pt') {$errl .= "Preencha os campos vazios.";}
								if ($_COOKIE['lang'] == 'en') {$errl .= "Fill in the empty fields.";}
								if ($_COOKIE['lang'] == 'es') {$errl .= "Rellene los campos vacíos.";}
							}
							if (strpos($error, '3') != false) {
								if ($_COOKIE['lang'] == 'pt') {$errl .= "Este poema já está registrado.";}
								if ($_COOKIE['lang'] == 'en') {$errl .= "This poem is already registered.";}
								if ($_COOKIE['lang'] == 'es') {$errl .= "Este poema ya está registrado.";}
							}
							if (strpos($error, '4') != false) {
								if ($_COOKIE['lang'] == 'pt') {$errl .= "Um pedido para este poema já foi registrado";}
								if ($_COOKIE['lang'] == 'en') {$errl .= "A request for this poem has already been registered";}
								if ($_COOKIE['lang'] == 'es') {$errl .= "Ya se ha registrado una solicitud para este poema.";}
							}
							echo $errl ."</span>";
						?>
						<span id='text'>
						<?php
							if ($_COOKIE['lang'] == 'pt') {echo "nome";}
							if ($_COOKIE['lang'] == 'en') {echo "name";}
							if ($_COOKIE['lang'] == 'es') {echo "nombre";}
						?>
						</span> <br />
						<input type='text' class='textbox' name='pname' maxLength='30' />
						<br />
						<span id='text'>
						<?php
							if ($_COOKIE['lang'] == 'pt') {echo "poema";}
							if ($_COOKIE['lang'] == 'en') {echo "poem";}
							if ($_COOKIE['lang'] == 'es') {echo "poema";}
						?>
						</span> <br />
						<textarea class='textbox long' name='pcontent'></textarea>
						<br />
						<span id='text'>
						<?php
							if ($_COOKIE['lang'] == 'pt') {echo "autor";}
							if ($_COOKIE['lang'] == 'en') {echo "auctor";}
							if ($_COOKIE['lang'] == 'es') {echo "autor";}
						?>
						</span> <br />
						<input id='auct0' class='textbox' list='dtlst0' maxLength='30' oninput='datalist_value(0,1)' />
						<datalist id='dtlst0'>
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
						<input id='auct0-hidden' type='hidden' name='pauctor' />
					</div>
					<div id='tab2' class='optabs' style='display: none;'>
						<?php
							$errl = "<span class='error'>";
							if (strpos($error, '5') != false) {
								if ($_COOKIE['lang'] == 'pt') {$errl .= "O autor deste livro não está registrado no site.";}
								if ($_COOKIE['lang'] == 'en') {$errl .= "The author of this book is not registered on the site.";}
								if ($_COOKIE['lang'] == 'es') {$errl .= "El autor de este libro no está registrado en el sitio.";}
							}
							if (strpos($error, '6') != false) {
								if ($_COOKIE['lang'] == 'pt') {$errl .= "Preencha os campos vazios.";}
								if ($_COOKIE['lang'] == 'en') {$errl .= "Fill in the empty fields.";}
								if ($_COOKIE['lang'] == 'es') {$errl .= "Rellene los campos vacíos.";}
							}
							if (strpos($error, '7') != false) {
								if ($_COOKIE['lang'] == 'pt') {$errl .= "Um pedido para este poema já foi registrado";}
								if ($_COOKIE['lang'] == 'en') {$errl .= "A request for this poem has already been registered";}
								if ($_COOKIE['lang'] == 'es') {$errl .= "Ya se ha registrado una solicitud para este poema.";}
							}
							echo $errl ."</span>";
						?>
						<span id='text'>
						<?php
							if ($_COOKIE['lang'] == 'pt') {echo "nome";}
							if ($_COOKIE['lang'] == 'en') {echo "name";}
							if ($_COOKIE['lang'] == 'es') {echo "nombre";}
						?>
						</span> <br />
						<input type='text' class='textbox' name='bname' maxLength='30' />
						<br />
						<span id='text'>
						<?php
							if ($_COOKIE['lang'] == 'pt') {echo "ano";}
							if ($_COOKIE['lang'] == 'en') {echo "year";}
							if ($_COOKIE['lang'] == 'es') {echo "año";}
						?>
						</span> <br />
						<input type='text' class='textbox' name='byear' maxLength='10' />
						<br />
						<span id='text'>
						<?php
							if ($_COOKIE['lang'] == 'pt') {echo "país";}
							if ($_COOKIE['lang'] == 'en') {echo "country";}
							if ($_COOKIE['lang'] == 'es') {echo "país";}
						?>
						</span> <br />
						<select class='selectbox' name='bcountry'>
						<?php
							foreach ($coulst as $x => $v) {
								{echo "<option value=".$x.">" .$coulst[$x]. "</option>";}
							}
						?>
						</select>
						<br />
						<span id='text'>
						<?php
							if ($_COOKIE['lang'] == 'pt') {echo "autor";}
							if ($_COOKIE['lang'] == 'en') {echo "auctor";}
							if ($_COOKIE['lang'] == 'es') {echo "autor";}
						?>
						</span> <br />
						<input id='auct1' class='textbox' list='dtlst1' maxLength='30' oninput='datalist_value(1,1)' />
						<datalist id='dtlst1'>
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
						<input id='auct1-hidden' type='hidden' name='bauctor' />
					</div>
					<div id='tab3' class='optabs' style='display: none;'>
						<?php
							$errl = "<span class='error'>";
							if (strpos($error, '8') != false) {
								if ($_COOKIE['lang'] == 'pt') {$errl .= "Preencha os campos vazios.";}
								if ($_COOKIE['lang'] == 'en') {$errl .= "Fill in the empty fields.";}
								if ($_COOKIE['lang'] == 'es') {$errl .= "Rellene los campos vacíos.";}
							}
							if (strpos($error, '9') != false) {
								if ($_COOKIE['lang'] == 'pt') {$errl .= "Um pedido para este poema já foi registrado";}
								if ($_COOKIE['lang'] == 'en') {$errl .= "A request for this poem has already been registered";}
								if ($_COOKIE['lang'] == 'es') {$errl .= "Ya se ha registrado una solicitud para este poema.";}
							}
							echo $errl ."</span>";
						?>
						<span id='text'>
						<?php
							if ($_COOKIE['lang'] == 'pt') {echo "autor";}
							if ($_COOKIE['lang'] == 'en') {echo "auctor";}
							if ($_COOKIE['lang'] == 'es') {echo "autor";}
						?>
						</span> <br />
						<input type='text' class='textbox' name='aname' maxLength='30' />
						<br />
						<span id='text'>
						<?php
							if ($_COOKIE['lang'] == 'pt') {echo "país";}
							if ($_COOKIE['lang'] == 'en') {echo "country";}
							if ($_COOKIE['lang'] == 'es') {echo "país";}
						?>
						</span> <br />
						<select class='selectbox' name='acountry'>
						<?php
							foreach ($coulst as $x => $v) {
								{echo "<option value=".$x.">" .$coulst[$x]. "</option>";}
							}
						?>
						</select>
					</div>
					<?php
						if (@$_GET['t']) {
							if ($_GET['t'] == '1') {echo "<script type='text/javascript'> set_tab('tab1','tab2','tab3'); </script>";}
							if ($_GET['t'] == '2') {echo "<script type='text/javascript'> set_tab('tab2','tab1','tab3'); </script>";}
							if ($_GET['t'] == '3') {echo "<script type='text/javascript'> set_tab('tab3','tab1','tab2'); </script>";}
						}
					?>
				</form>
			</div>
		</div>
		<?php include 'design/footer.php' ?>
	</body>
</html>
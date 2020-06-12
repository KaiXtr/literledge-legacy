<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php session_start();
		if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt'))
			{$v = 'Ajustes - ';}
		else if ($_COOKIE['lang'] == 'en')
			{$v = 'Settings - ';}
		else if ($_COOKIE['lang'] == 'es')
			{$v = 'Definiciones - ';}
		include 'design/metadata.php';
		if (isset($_GET['error'])) {$error = $_GET['error'];} else {$error = '';}
		if (!isset($_SESSION['user'])) {header('location: login.php');} ?>
	</head>

	<body>
		<?php
			include 'design/header.php';
			include 'design/lateralbar.php';
			include 'design/array_lists.php';
		?>

		<div class='content'>
			<div class='login proedit'>
				<form action='account/profile_edit.php' method='post' enctype='multipart/form-data'>
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
							<li> <a onclick='set_tab("tab1","tab2","tab3")'> <input id='op1' type='radio' name='edit' value='account' checked='true' />
								<div class='manlan' lang='pt'> <label for='op1'> Conta </label> </div>
								<div class='manlan' lang='en'> <label for='op1'> Account </label> </div>
								<div class='manlan' lang='es'> <label for='op1'> Cuenta </label> </div>
							</a> </li>
							<li> <a onclick='set_tab("tab2","tab1","tab3")'> <input id='op2' type='radio' name='edit' value='security' />
								<div class='manlan' lang='pt'> <label for='op2'> Segurança </label> </div>
								<div class='manlan' lang='en'> <label for='op2'> Security </label> </div>
								<div class='manlan' lang='es'> <label for='op2'> Seguridad </label> </div>
							</a> </li>
							<li> <a onclick='set_tab("tab3","tab1","tab2")'> <input id='op3' type='radio' name='edit' value='navigation' />
								<div class='manlan' lang='pt'> <label for='op3'> Navegação </label> </div>
								<div class='manlan' lang='en'> <label for='op3'> Navigation </label> </div>
								<div class='manlan' lang='es'> <label for='op3'> Navegación </label> </div>
							</a> </li>
							<li>
								<div class='manlan' lang='pt'> <input type='submit' class='btpress' value='Salvar' /> </div>
								<div class='manlan' lang='en'> <input type='submit' class='btpress' value='Save' /> </div>
								<div class='manlan' lang='es'> <input type='submit' class='btpress' value='Guardar' /> </div>
							</li>
						</ul>
					</div>
					<div id='tab1' class='optabs' style='display: block;'>
						<div class='upimg'>
							<div class='manlan' lang='pt'> Foto de perfil: </div>
							<div class='manlan' lang='en'> Profile pic: </div>
							<div class='manlan' lang='es'> Foto de perfil: </div> <br />
							<?php echo "<img id='prevpic' class='filprev' src='media/images/profilepics/".$_SESSION['user'].".jpg' />"; ?>
							<input id='profilepicupload' accept="image/jpeg" name='propic' type='file' onchange='previmg(event,"prevpic");' />
						</div>
						<div class='upimg'>
							Banner: <br />
							<?php echo "<img id='prevban' class='filprev' src='media/images/banners/".$_SESSION['user'].".jpg' width='384' />"; ?>
							<input id='bannerupload' accept="image/jpeg" name='banner' type='file' onchange='previmg(event,"prevban");'/>
						</div>
						<span id='text'>
							<div class='manlan' lang='pt'> nome </div>
							<div class='manlan' lang='en'> name </div>
							<div class='manlan' lang='es'> nombre </div>
						</span> <br />
						<?php echo "<input type='text' class='textbox' name='name' value='".$i['pt']."' maxLength='30' />"; ?>
						<br />
						<span id='text'> email </span> <br />
						<?php echo "<input type='text' class='textbox' name='email' value='".$i['email']."' maxLength='30' />"; ?>
						<br />
						<div class='selectrow'>
							<span id='text'>
								<div class='manlan' lang='pt'> gênero </div>
								<div class='manlan' lang='en'> gender </div>
								<div class='manlan' lang='es'> género </div>
							</span>
							<select class='selectbox' name='gender'>
								<?php
									$c = array('M','F','A','O');
									for ($x = 0; $x < sizeof($c); $x++) {
										if ($i['gender'] == $c[$x])
											{echo "<option value='".$c[$x]."' selected>".$gndlst[$c[$x]]."</option>";}
										else
											{echo "<option value='".$c[$x]."'>".$gndlst[$c[$x]]."</option>";}
									}
								?>
							</select> <br />
						</div>
						<div class='selectrow'>
							<span id='text'>
								<div class='manlan' lang='pt'> nascimento </div>
								<div class='manlan' lang='en'> birth </div>
								<div class='manlan' lang='es'> nacimiento </div>
							</span>
							<?php
								$errl = "<span class='error'>";
								if (strpos($error, '7') != false) {$errl = $errl."Você é menor de idade";}
								echo $errl ."</span>";
							?>
							<select class='selectbox' name='by'>
								<?php
									for ($x = date('Y') - 7; $x >= date('Y') - 100; $x-=1)
										if (substr($i['birth'],0,4) == $x)
											{echo "<option selected>" .$x. "</option>";}
										else
											{echo "<option>" .$x. "</option>";}
								?>
							</select>
							<select class='selectbox' name='bm'>
								<?php
									for ($x = 1; $x <= 12; $x++)
										if (substr($i['birth'],5,2) == $x)
											{echo "<option selected>" .$x. "</option>";}
										else
											{echo "<option>" .$x. "</option>";}
								?>
							</select>
							<select class='selectbox' name='bd'>
								<?php
									for ($x = 1; $x <= 30; $x++)
										if (substr($i['birth'],8,2) == $x)
											{echo "<option selected>" .$x. "</option>";}
										else
											{echo "<option>" .$x. "</option>";}
								?>
							</select>
						</div>

						<div class='selectrow'>
							<span id='text'>
								<div class='manlan' lang='pt'> país </div>
								<div class='manlan' lang='en'> country </div>
								<div class='manlan' lang='es'> país </div>
							</span>
							<select class='selectbox' name='country'>
								<?php
									$c = array();
									foreach ($coulst as $x => $v) {
										$c[] = $x;
									}
									for ($x = 0; $x < sizeof($c); $x++) {
										if ($i['country'] == $c[$x])
											{echo "<option value='".$c[$x]."' selected>".$coulst[$c[$x]]."</option>";}
										else
											{echo "<option value='".$c[$x]."'>".$coulst[$c[$x]]."</option>";}
									}
								?>
							</select> <br />
						</div>
					</div>
					<div id='tab2' class='optabs' style='display: none;'>
						<div class='passrow'>
							<?php
								$errl = "<span class='error'>";
								if (strpos($error, '1') != false) {
									if ((!isset($_COOKIE['lang'])) || ($_COOKIE['lang'] == 'pt')) {$errl = $errl."Senha incorreta";}
									else if ($_COOKIE['lang'] == 'en') {$errl = $errl."Incorrect password";}
								}
								if (strpos($error, '5') != false) {
									if ((!isset($_COOKIE['lang'])) || ($_COOKIE['lang'] == 'pt')) {$errl = $errl."Preencha os campos vazios";}
									else if ($_COOKIE['lang'] == 'en') {$errl = $errl."Insert the empty fields";}
								}
								echo $errl ."</span>";
							?>
							<span id='text'>
								<div class='manlan' lang='pt'> senha antiga </div>
								<div class='manlan' lang='en'> old password </div>
								<div class='manlan' lang='es'> contraseña anterior </div>
							</span> <br />
							<div class='passbox'>
								<input type='password' id='newp' class='textbox' name='oldpassword' />
								<button type='button' id='shnewp' class='passeye' onclick='showhide("newp","shnewp")'></button>
							</div>
						</div>
						<div class='passrow'>
							<?php
								$errl = "<span class='error'>";
								if (strpos($error, '2') != false) {
									if ((!isset($_COOKIE['lang'])) || ($_COOKIE['lang'] == 'pt')) {$errl = $errl."A senha é igual a antiga";}
									else if ($_COOKIE['lang'] == 'en') {$errl = $errl."Password is the same as the old one";}
								}
								if (strpos($error, '4') != false) {
									if ((!isset($_COOKIE['lang'])) || ($_COOKIE['lang'] == 'pt')) {$errl = $errl."A senha é muito fraca";}
									else if ($_COOKIE['lang'] == 'en') {$errl = $errl."Password is too weak";}
								}
								echo $errl ."</span>";
							?>
							<span id='text'>
								<div class='manlan' lang='pt'> senha nova </div>
								<div class='manlan' lang='en'> new password </div>
								<div class='manlan' lang='es'> nueva contraseña </div>
							</span> <br />
							<div class='passbox'>
								<input type='password' id='pass' class='textbox' name='newpassword' />
								<button type='button' id='shpass' class='passeye' onclick='showhide("pass","shpass")'></button>
							</div>
						</div>
						<div class='passrow'>
							<?php
								$errl = "<span class='error'>";
								if (strpos($error, '3') != false) {
									if ((!isset($_COOKIE['lang'])) || ($_COOKIE['lang'] == 'pt')) {$errl = $errl."As senhas não coincidem";}
									else if ($_COOKIE['lang'] == 'en') {$errl = $errl."Passwords don't match";}
								}
								echo $errl ."</span>";
							?>
							<span id='text'>
								<div class='manlan' lang='pt'> confirme a senha </div>
								<div class='manlan' lang='en'> confirm the password </div>
								<div class='manlan' lang='es'> confirma la contraseña </div>
							</span> <br />
							<div class='passbox'>
								<input type='password' id='conf' class='textbox' name='confirm' />
								<button type='button' id='shconf' class='passeye' onclick='showhide("conf","shconf")'></button>
							</div>
						</div>
						<a href='account/delete_account.php'><button class='btpress' type='button'>Apagar conta</button></a>
					</div>
					<div id='tab3' class='optabs' style='display: none;'>
						<input type='radio' name='theme' value='sepia' style='background-color: #F9E2D9;' <?php if($_COOKIE['theme']=='sepia'){echo 'checked';} ?>></button>
						<input type='radio' name='theme' value='dark' style='background-color: #070707;' <?php if($_COOKIE['theme']=='dark'){echo 'checked';} ?>></button>
					</div>
				</form>
			</div>
		</div>
		<?php $conn->close(); ?>
		<?php include 'design/footer.php' ?>
	</body>
</html>
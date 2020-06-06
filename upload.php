<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php session_start();
		if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt'))
			{$v = 'Ajustes - ';}
		else if ($_COOKIE['lang'] == 'en')
			{$v = 'Settings - ';}
		include 'design/metadata.php';
		if (isset($_GET['error'])) {$error = $_GET['error'];} else {$error = '';}
		if (!isset($_SESSION['user'])) {header('location: login.php');} ?>
	</head>

	<body>
		<?php include 'design/header.php' ?>
		<?php include 'design/lateralbar.php' ?>

		<div class='content'>
			<div class='login proedit'>
				<form action='account/profile_edit.php' method='post' enctype='multipart/form-data'>
					<?php
						$conn = new mysqli('localhost', 'root', 'Gu@n@b@r@', 'literledge');
						if ($conn->connect_error) {echo("Connection failed: " . $conn->connect_error);}
						else{
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
								<div class='manlan' lang='pt'> <label for='op1'> Poema </label> </div>
								<div class='manlan' lang='en'> <label for='op1'> Poem </label> </div>
							</a> </li>
							<li> <a onclick='set_tab("tab2","tab1","tab3")'> <input id='op2' type='radio' name='edit' value='security' />
								<div class='manlan' lang='pt'> <label for='op2'> Livro </label> </div>
								<div class='manlan' lang='en'> <label for='op2'> Book </label> </div>
							</a> </li>
							<li> <a onclick='set_tab("tab3","tab1","tab3")'> <input id='op3' type='radio' name='edit' value='navigation' />
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
						
					</div>
					<div id='tab2' class='optabs' style='display: none;'>
						
					</div>
				</form>
			</div>
		</div>
		<?php $conn->close(); ?>
		<?php include 'design/footer.php' ?>
	</body>
</html>
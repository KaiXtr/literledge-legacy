<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php session_start();
		if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt'))
			{$v = 'Pedidos - ';}
		else if ($_COOKIE['lang'] == 'en')
			{$v = 'Requests - ';}
		include 'design/metadata.php';
		if (isset($_GET['error'])) {$error = $_GET['error'];} else {$error = '';}
		if ((!isset($_SESSION['user']))&&(in_array($_SESSION['user'],$devlprs))) {header('location: '.$_SERVER["HTTP_REFERER"]);} ?>
	</head>

	<body>
		<?php include 'design/header.php' ?>
		<?php include 'design/lateralbar.php' ?>

		<div class='login proedit long'>
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
							<div class='manlan' lang='pt'> <label for='op1'> Poemas </label> </div>
							<div class='manlan' lang='en'> <label for='op1'> Poems </label> </div>
						</a> </li>
						<li> <a onclick='set_tab("tab2","tab1","tab3")'> <input id='op2' type='radio' name='request' value='book' />
							<div class='manlan' lang='pt'> <label for='op2'> Livros </label> </div>
							<div class='manlan' lang='en'> <label for='op2'> Books </label> </div>
						</a> </li>
						<li> <a onclick='set_tab("tab3","tab1","tab2")'> <input id='op3' type='radio' name='request' value='auctor' />
							<div class='manlan' lang='pt'> <label for='op3'> Autors </label> </div>
							<div class='manlan' lang='en'> <label for='op3'> Auctors </label> </div>
						</a> </li>
						<li>
							<div class='manlan' lang='pt'> <input type='submit' class='btpress' value='Publicar' /> </div>
							<div class='manlan' lang='en'> <input type='submit' class='btpress' value='Publish' /> </div>
						</li>
					</ul>
				</div>
				<?php
					require 'account/mysql_connect.php';
					if ($notcon == null) {
						$find = $conn->query("SELECT * FROM requests");
						$tb1 = "<div id='tab1' class='optabs' style='display: block;'><table class='requestable'>
								<tr class='dark'><th>name</th><th>content</th><th>auctor</th></tr>";
						$tb2 = "<div id='tab2' class='optabs' style='display: none;'><table class='requestable'>";
						$tb3 = "<div id='tab3' class='optabs' style='display: none;'><table class='requestable'>";
						if ($find->num_rows > 0) {
							while ($i = $find->fetch_assoc()) {
								preg_match('/pauctor/i',$i['req'],$re);
								if (sizeof($re) > 0) {
									$pname = substr($i['req'], strpos($i['req'], 'pname=')+6);
									$pname = substr($pname, 0, strpos($pname, ';'));
									$pcontent = substr($i['req'], strpos($i['req'], 'pcontent=')+9);
									$pcontent = substr($pcontent, 0, strpos($pcontent, ';'));
									$pauctor = substr($i['req'], strpos($i['req'], 'pauctor=')+8);
									$pauctor = substr($pauctor, 0, strpos($pauctor, ';'));
									$tb1 = $tb1."<tr><th>".$pname."</th><th>".$pcontent."</th><th>".$pauctor."</th></tr>";
									}
								preg_match('/bname/i',$i['req'],$re);
								if (sizeof($re) > 0) {
									$tb2 = $tb2."<tr><th>".$re."</th></tr>";
									}
								preg_match('/aname/i',$i['req'],$re);
								if (sizeof($re) > 0) {
									$tb3 = $tb3."<tr><th>".$re."</th></tr>";
									}
								}
							}
						$conn->close();
						}
						echo $tb1."</table></div>";
						echo $tb2."</table></div>";
						echo $tb3."</table></div>";

					if (isset($_GET['seasugg'])) {
						mainInfo($_GET['seasugg']);
					}
				?>
			</form>
		</div>
		<?php include 'design/footer.php' ?>
	</body>
</html>
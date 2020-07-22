<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
		require 'design/mysql_connect.php';
		if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt'))
			{$v = 'Pedidos - ';}
		else if ($_COOKIE['lang'] == 'en')
			{$v = 'Requests - ';}
		else if ($_COOKIE['lang'] == 'es')
			{$v = 'Pedidos - ';}
		include 'design/metadata.php';
		if (isset($_GET['error'])) {$error = $_GET['error'];} else {$error = '';}
		if (!isset($_SESSION['user']))
			{header('location: '.$_SERVER["HTTP_REFERER"]);}
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
		<?php include 'design/header.php' ?>
		<?php include 'design/lateralbar.php' ?>

		<div class='login proedit long'>
			<form action='account/post_request.php' method='post' enctype='multipart/form-data'>
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
						<label for='op1'>
						<?php
							if ($_COOKIE['lang'] == 'pt') {echo "Poemas";}
							if ($_COOKIE['lang'] == 'en') {echo "Poems";}
							if ($_COOKIE['lang'] == 'es') {echo "Poémas";}
						?>
						</label>
						</a> </li>
						<li> <a onclick='set_tab("tab2","tab1","tab3")'> <input id='op2' type='radio' name='request' value='book' />
						<label for='op1'>
						<?php
							if ($_COOKIE['lang'] == 'pt') {echo "Livros";}
							if ($_COOKIE['lang'] == 'en') {echo "Books";}
							if ($_COOKIE['lang'] == 'es') {echo "Libros";}
						?>
						</label>
						</a> </li>
						<li> <a onclick='set_tab("tab3","tab1","tab2")'> <input id='op3' type='radio' name='request' value='auctor' />
						<label for='op1'>
						<?php
							if ($_COOKIE['lang'] == 'pt') {echo "Autores";}
							if ($_COOKIE['lang'] == 'en') {echo "Auctores";}
							if ($_COOKIE['lang'] == 'es') {echo "Autores";}
						?>
						</label>
						</a> </li>
						<li>
						
						<?php
							if ($_COOKIE['lang'] == 'pt') {$lbl = "Publicar";}
							if ($_COOKIE['lang'] == 'en') {$lbl = "Publish";}
							if ($_COOKIE['lang'] == 'es') {$lbl = "Publíca";}
							echo "<input type='submit' class='btpress' value='".$lbl."' />";
						?>
						</li>
					</ul>
				</div>
				<?php
					require 'account/mysql_connect.php';
					if ($notcon == null) {
						$find = $conn->query("SELECT * FROM requests");
						$tb1 = "<div id='tab1' class='optabs' style='display: block;'><table id='wrpm' class='requestable'>";
						$tb2 = "<div id='tab2' class='optabs' style='display: none;'><table id='wrpbk' class='requestable'>";
						$tb3 = "<div id='tab3' class='optabs' style='display: none;'><table id='wrat' class='requestable'>";

						$lind = $conn->query("SELECT pt,nick FROM users");
						$optlst = '';
						if ($lind->num_rows > 0) {
							while ($dl = $lind->fetch_assoc()) {
									$optlst .= "<option data-value='".$dl['nick']."'>".$dl['pt']."</option>";
								}
							}
						$rowpom = "<tr>
								<th style='width: 100px;'><input id='pblsh%lid%' type='checkbox' name='pblsh[]' /></th>
								<th style='width: 100px;'><input id='ptitl%lid%' type='text' class='textbox' name='pname[]' value='%ptitl%' /><br />
								<input id='auct%lid%' type='text' class='textbox' value='%pname%' list='dtlst' maxLength='30' />
								<datalist id='dtlst'>
									".$optlst."
								</datalist>
								<input id='auct%lid%-hidden' type='hidden' name='pauctor[]' value='%pnick%' />
								<input id='rid%lid%' type='hidden' name='rid[]' value='%rid%' />
								</th>
								<th><textarea id='pcont%lid%' class='textbox long' name='pcontent[]' style='width: 800px;'>%pcont%</textarea></th>
								<th><a href='account/delete_request.php?d=%rid%'><input type='button' class='btpress'
									style='background-image: url(media/images/icons/cridel-".$_COOKIE['theme'].".png);
									background-repeat: no-repeat; background-position: center;' /></a></th>
								</tr>";
						$rowcount = 0;
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
									$rid = $i['rid'];

									$fnms = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='".$pauctor."'");
									$rn = $fnms->fetch_assoc();
									if ($rn[$_COOKIE['lang']] == null) {$nm = $rn['pt'];}
									else {$nm = $rn[$_COOKIE['lang']];}

									$rowcount++;
									$prw = str_replace('%ptitl%', $pname, $rowpom);
									$prw = str_replace('%pnick%', $pauctor, $prw);
									$prw = str_replace('%pname%', $nm, $prw);
									$prw = str_replace('%pcont%', $pcontent, $prw);
									$prw = str_replace('%rid%', $rid, $prw);
									$prw = str_replace('%lid%', $rowcount, $prw);
									$tb1 .= $prw;
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
						$prw = str_replace('%ptitl%', '', $rowpom);
						$prw = str_replace('%pnick%', '', $prw);
						$prw = str_replace('%pname%', '', $prw);
						$prw = str_replace('%pcont%', '', $prw);
						$prw = str_replace('%rid%', '', $prw);
						$prw = str_replace('
							', '"+
							"', $prw);
						echo $tb1."</table>
						<input type='button' class='btpress' value='+' onclick='add_rowpom()' />
						<script type='text/javascript'>
							var rowcount = ".$rowcount.";
							function add_rowpom() {
								var titles = [];
								var nicks = [];
								var names = [];
								var contents = [];
								var rid = [];

								for (var x=0;x<rowcount;x++) {
									titles.push(document.getElementById('ptitl'+x).value);
									nicks.push(document.getElementById('auct'+x).value);
									names.push(document.getElementById('auct'+x+'-hidden').value);
									contents.push(document.getElementById('pcont'+x).value);
									rid.push(document.getElementById('rid'+x).value);
								}

								var text = ".'"'.$prw.'"'.";
								text = text.split('%lid%').join(rowcount);
								document.getElementById('wrpm').innerHTML += text;
								
								for (var x=0;x<titles.length;x++) {
									document.getElementById('ptitl'+x).value = titles[x];
									document.getElementById('auct'+x).value = nicks[x];
									document.getElementById('auct'+x+'-hidden').value = names[x];
									document.getElementById('pcont'+x).value = contents[x];
									document.getElementById('rid'+x).value = rid[x];
									document.querySelector('#auct'+x).addEventListener('input'+x, datalist_value);
								}
								rowcount++;
							};
							add_rowpom();
						</script>
						</div>";
						echo $tb2."</table></div>";
						echo $tb3."</table></div>";
						$conn->close();
						}
				?>
			</form>
			<script type='text/javascript'>
				document.querySelector('#auct0').addEventListener('input0', datalist_value);
			</script>
		</div>
		<?php include 'design/footer.php' ?>
	</body>
</html>
<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require '../scripts/PHPMailer/src/Exception.php';
	require '../scripts/PHPMailer/src/PHPMailer.php';
	require '../scripts/PHPMailer/src/SMTP.php';

	require 'mysql_connect.php';
	if ($notcon == null) {
		$mail = new PHPMailer();
		$mail->isSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'literledge@gmail.com';
		$mail->Password = 'EnfimLanceiABr@b@';
		$mail->SMTPSecure = 'ssl';
		$mail->Port = 587;

		$mail->setFrom($_POST['email'], $_POST['name']);
		$mail->addReplyTo($_POST['email'], $_POST['name']);
		$mail->addAddress($_POST['email'], $_POST['name']);

		$mail->isHTML();
		$mail->Subject = "Um usuário contatou os superiores";
		$mail->Body = "<div style='font-size: 25px;'>
					<h1>Mensagem enviada por ".$_POST['name']."</h1>
					".$_POST['message']."
				</div>";

		$mail->send();
		$mail->clearAddresses();
		$mail->smtpClose();

		header("location: ".$base_url."contacts.php?t=1");
		$conn->close();
	}
	else {header("location: ".$base_url."contacts.php?t=2");}
?>
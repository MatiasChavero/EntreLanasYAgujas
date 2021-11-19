<?php 

if (isset($_POST['enviar'])) {
	if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['mail']) && !empty($_POST['msg']) && !empty($_POST['enviar'])) {
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$mail = $_POST['mail'];
		$msg = $_POST['msg'];
		$enviar = $_POST['enviar'];
		$header = "From: cataldo.rosa1962@gmail.com" . "\r\n";
		$header.= "Reply-To: chavero.matias@gmail.com" . "\r\n";
		$header.= "X-Mailer: PHP/". phpversion();
		$mail = @mail($email,$msg,$header);
	}
}
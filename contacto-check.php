<?php 

if (isset($_POST['enviar'])) {
	if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['email']) && !empty($_POST['msg'])) {
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$email = $_POST['email'];
		$msg = $_POST['msg'];
		$enviar = $_POST['enviar'];
		$header = "From: chavero.matias@gmail.com" . "\r\n";
		$header.= "Reply-To: cataldo.rosa1962@gmail.com" . "\r\n";
		$header.= "X-Mailer: PHP/". phpversion();
		$mail = mail('chavero.matias@gmail.com',$email,$msg,$header);
	}
}

?>
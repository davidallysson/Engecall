<?php
if( isset($_POST['motivo']) ) {
	require_once("phpmailer/class.phpmailer.php");
	require ("phpmailer/class.smtp.php");
	include_once $_SERVER['DOCUMENT_ROOT'] . '/Engecall/securimage/securimage.php';

	$mail = new PHPMailer();
	$mail->IsSMTP(); 
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPAuth = true;
	$mail->Username = 'julia.xavier.campos@gmail.com';
	$mail->Password = '20121164010180';

	$mail->From = $_POST["email"]; 
	$mail->FromName = $_POST["nome"];
	//Email da Engecall que receberá os emails
	$mail->AddAddress('julia.xavier.campos@gmail.com');

	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';

	$mail->Subject  = $_POST["assunto"];
	$mail->Body = "Nome: " . $_POST["nome"] . "<br/>" .
					"Email: " . $_POST["email"] . "<br/>" .
					"Motivo: " . $_POST["motivo"] . "<br/>" .
					"Telefone: " . $_POST["telefone"] . "<br/>" .
					"CPF/CNPJ: " . $_POST["cpf_cnpj"] . "<br/>" .
					"Conteudo: " . $_POST["conteudo"];

	$securimage = new Securimage();
	if ($securimage->check($_POST['captcha_code']) == false) {		
		echo "<div class=\"alert alert-danger\" style=\"margin-top: 50px;\"> O código não foi digitado corretamente. </div>";
	}
	else {

		$enviado = $mail->Send();

		$mail->ClearAllRecipients();
		$mail->ClearAttachments();
		
		if ($enviado) {
			echo "<div class=\"alert alert-success\" style=\"margin-top: 50px;\"> Email enviado com sucesso. </div>";
		} else {
		  	echo "<div class=\"alert alert-danger\" style=\"margin-top: 50px;\"> Não foi possível enviar um email. </div>";
		  	echo "<div class=\"alert alert-danger\" style=\"margin-top: 50px;\"> " . $mail->ErrorInfo . " </div>";
		}
	}

		
}	
?>
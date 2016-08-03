<?php
    $nome = $_POST['nome']; // required
    $email = $_POST['email']; // required
    $mensagem = $_POST['msg']; // not required

    // Create the email and send the message
    $to = 'joaopaulomc14@gmail.com'; 
    $email_subject = "Contato - CV Web";
    $email_message = "Form details below.\n\n";
    $email_message .= "Nome: ". $nome."\n";
    $email_message .= "Email: ". $email."\n";
    $email_message .= "Telefone: ". $telefone."\n";
    $email_message .= "Mensagem: ". $mensagem."\n";

	//$headers = 'From: '.$email."\r\n".'Reply-To: '.$email."\r\n" . 'X-Mailer: PHP/' . phpversion();
	$headers = "MIME-Version: 1.1\r\n";
	$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
	$headers .= "From: ". $to."\r\n"; // remetente
	$headers .= "Return-Path: ". $to."\r\n"; // return-path
	$envia = mail($to,$email_subject,$email_message,$headers);	
    
   header('Location: confirmacaoEmail.php');
	
?>
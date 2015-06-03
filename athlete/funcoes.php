<?php
require_once 'mysql.connectb.php';
session_start();

function sair(){
    session_destroy();
}  

function ligar_base_dados(){    
    $ligacao = mysql_connect(MYSQL_SERVER, MYSQL_USERNAME, MYSQL_PASSWORD) or die('Erro ao ligar ao servidor...');        
    mysql_select_db(MYSQL_DATABASE, $ligacao) or die('Erro ao selecionar a base de dados...');
    mysql_set_charset('utf8');
	return $ligacao;
	
}

function enviarEmail($nome, $email, $password) {
    $mail = new PHPMailer();
    $body = "Ola $nome <br/> A sua password: $password";//Corpo do Email
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->Username = "grupopwbell@gmail.com"; //Mail
    $mail->Password = "palavraquem"; //Pass do Email
    $mail->SetFrom('grupopwbell@gmail.com','SCBraga');
    $mail->AddReplyTo("grupopwbell@gmail.com",'SCBraga');
    $mail->Subject = "SCBraga - Recuperar Password";
    $mail->MsgHTML($body);
    $mail->AddAddress($email, $nome); //Para onde é enviado
    //Envio de Mail
    if(!$mail->Send()) {
        return false;
    } else {
        return true;
    }
}

function enviarEmailAdmin($nome, $email, $password) {
    $mail = new PHPMailer();
    $body = "Ola $nome <br/> A sua password: $password";//Corpo do Email
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->Username = "grupopwbell@gmail.com"; //Mail
    $mail->Password = "palavraquem"; //Pass do Email
    $mail->SetFrom('grupopwbell@gmail.com','SCBraga');
    $mail->AddReplyTo("grupopwbell@gmail.com",'SCBraga');
    $mail->Subject = "SCBraga - Recuperar Password";
    $mail->MsgHTML($body);
    $mail->AddAddress($email, $nome); //Para onde é enviado
    //Envio de Mail
    if(!$mail->Send()) {
        return false;
    } else {
        return true;
    }
}

?>
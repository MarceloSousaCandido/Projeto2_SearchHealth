<?php
    // Using Awesome https://github.com/PHPMailer/PHPMailer

    function enviaEmail ($nome, $email, $mensagem){
        //echo "Teste de envio de e-mail";
        require '../PHPMailer-master/PHPMailerAutoload.php';

        // As 3 linhas abaixo são para o navegador mostrar o erro.
        //ini_set('display_errors',1);
        //ini_set('display_startup_erros',1);
        //error_reporting(E_ALL);
    
        $mail = new PHPMailer;
    
        //echo "$mail";
    
        $mail->isSMTP(); // Set mailer to use SMTP
    
        $mail->Host = 'smtp.mailgun.org'; // Specify main and backup SMTP servers
    
        $mail->SMTPAuth = true; // Enable SMTP authentication
    
        $mail->Username = 'postmaster@sandboxfe37e190a3bf4a53b795cd3570d233d9.mailgun.org'; // SMTP username
    
        $mail->Password = '78c53508176344f99c439ed97bd1a8ed'; // SMTP password
    
        $mail->SMTPSecure = 'tls'; // Enable encryption, only 'tls' is accepted

        $mail->setFrom('postmaster@sandboxfe37e190a3bf4a53b795cd3570d233d9.mailgun.org', 'Mailer');
    
        $mail->addAddress('albordignon@gmail.com'); // Add a recipient
        
        //$mail->addAddress('msc18@terra.com.br'); // Add a recipient

        $mail->WordWrap = 50; // Set word wrap to 50 characters

        $mail->Subject = 'Contato - site Searching Health';
    
        $mail->Body = ' $nome, $email, $mensagem ';

        if(!$mail->send()) {
            echo 'Mensagem não pode ser Enviada! ';
            echo 'Erro no envio da mensagem: ' . $mail->ErrorInfo;
        } else {
            echo 'Sua mensagem foi enviada com sucesso!';
        }
    }
?>
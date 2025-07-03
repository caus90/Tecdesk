<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../../vendor/autoload.php';

function sendResetEmail($toEmail, $token) {
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'localhost';
        $mail->SMTPAuth = false;
        $mail->Port = 25;

        $mail->setFrom('noreply@tecdesk.local', 'TecDesk');
        $mail->addAddress($toEmail);

        $mail->Subject = 'Redefinir sua senha - TecDesk';
        //$resetLink = "http://tecdesk.test/esqueceu-senha?token=$token";
        $mail->Body = "Clique no link para redefinir sua senha:"; //<a href='$resetLink'>$resetLink</a>

        $mail->SMTPDebug = 2;
        $mail->Debugoutput = 'html';
        
        $mail->send();
        return true;

    } catch (Exception $e) {
        return $e->getMessage();;
    }
}

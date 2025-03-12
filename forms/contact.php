<?php
require '../includes/PHPMailer/src/PHPMailer.php';
require '../includes/PHPMailer/src/SMTP.php';
require '../includes/PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../'); 
$dotenv->load();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $cpf = preg_replace('/\D/', '', $_POST['cpf']); 
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $telefone = preg_replace('/\D/', '', $_POST['telefone']);     

    
    if (!$email) {
        die("E-mail inválido!");
    }

    // Configuração do PHPMailer
    $mail = new PHPMailer(true);


    try {
        // Configuração do servidor SMTP
        $mail->isSMTP();
        $mail->Host       = $_ENV['SMTP_HOST'];
        $mail->SMTPAuth   = true;
        $mail->Username   = $_ENV['SMTP_USER'];
        $mail->Password   = $_ENV['SMTP_PASS'];
        $mail->SMTPSecure = $_ENV['SMTP_SECURE'];
        $mail->Port       = $_ENV['SMTP_PORT'];

        // Configuração do e-mail
        $mail->setFrom($_ENV['SMTP_USER'], 'Maktub Promotora'); 
        $mail->addReplyTo($email, $nome); 
        $mail->addAddress($_ENV['SMTP_USER']); 
        $mail->Subject = 'Formulario de Contato - Solicitacao de Informacoes';
        $mail->Body    = "Nome: $nome\nCPF: $cpf\nE-mail: $email\nTelefone: $telefone";

        // Envia o e-mail
        $mail->send();
        echo 'OK';
        //echo 'E-mail enviado com sucesso!';
    } catch (Exception $e) {
        echo "Erro ao enviar o e-mail: {$mail->ErrorInfo}";
    }
}
?>

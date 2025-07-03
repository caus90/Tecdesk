<?php
namespace App\Controllers;

class AuthController {
    public function login() {
        session_start();

        if (isset($_SESSION['user'])) {
            header('Location: /home');
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if ($username === 'admin' && $password === '123') {
                $_SESSION['user'] = $username;
                header('Location: /home');
                exit;
            } else {
                $error = 'Usuário ou senha incorretos.';
                view('auth/Login');
                return;
            }
        }

        view('auth/Login');
    }    

    public function logout() {
        session_start();
        session_destroy();
        header('Location: /login');
        exit;
    }

    public function sendLinkReset() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $token = bin2hex(random_bytes(16));

            // salvar o token no banco com o email, validade e etc.

            require_once __DIR__ . '/../Helpers/Mailer.php';
            
            $sucesso = sendResetEmail($email, $token);

            if($sucesso === true) {
                echo "Foi enviado as intruções de redefinir a senha para o e-mail cadastrado.";
            } else {
                echo "Erro ao enviar e-mail. Tente novamente. ";
            }
        } else {
            http_response_code(405);
            echo "Método não permitido.";
        }
    }
}

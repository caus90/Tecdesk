<?php
namespace App\Controllers;

class SiteController {
    public function home() {
        session_start();
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }

        view('Home');
    }

    public function adicionar() {
        session_start();
        if(!isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }

        view('Adicionar');
    }

    public function avisos() {
        session_start();
        if(!isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }

        view('Avisos');
    }

    public function relatorios() {
        session_start();
        if(!isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }

        view('Relatorios');
    }
    
    public function settings() {
        session_start();
        if(!isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }

        view('Settings');
    }
}

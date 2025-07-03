<?php
require_once '../vendor/autoload.php';
require_once __DIR__ . '/../app/Helpers/View.php';

use App\Controllers\AuthController;
use App\Controllers\SiteController;

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri) {
    case '/':
    case '/home':
        $controller = new SiteController();
        $controller->home();
        break;

    case '/login':
        $controller = new AuthController();
        $controller->login();
        break;

    case '/adicionar':
        $controller = new SiteController();
        $controller->adicionar();
        break;

    case '/avisos':
        $controller = new SiteController();
        $controller->avisos();
        break;

    case '/relatorios':
        $controller = new SiteController();
        $controller->relatorios();
        break;

    case '/logout':
        $controller = new AuthController();
        $controller->logout();
        break;

    case '/settings':
        $controller = new SiteController();
        $controller->settings();
        break;

    case '/esqueceu-senha':
        $controller = new AuthController();
        $controller->sendLinkReset();
        break;
    
    default:
        http_response_code(404);
        echo "Página não encontrada.";
        break;
}

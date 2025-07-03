<?php
function view($path) {
    $viewPath = __DIR__ . '/../Views/' . $path . '.php';
    if (file_exists($viewPath)) {
        include $viewPath;
    } else {
        echo "Erro: view '{$path}' não encontrada.";
        http_response_code(500);
    }
}

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurações - TecDesk</title>
    <link rel="stylesheet" href="assets/css/output.css">
</head>
<body class="font-[Roboto]">
    <div class="flex h-screen">
        <aside class="w-16 bg-azul-escuro flex flex-col items-center py-3">
            <div class="flex items-center">
                <a href="/home" class="w-12 h-10 bg-center bg-no-repeat bg-cover" style="background-image: url('assets/img/logotec.png');"></a>
            </div>
            <nav class="flex flex-col items-center space-y-6">
                <a href="/relatorios" class="mt-6">
                    <img class="w-10 justify-start" src="assets/img/document_search.svg" alt="Search">
                </a>
                <a href="/adicionar">
                    <img class="w-10 h-10" src="assets/img/add_task.svg" alt="Add Task">
                </a>
                <a href="/avisos">
                    <img class="w-10" src="assets/img/notifications_active.svg" alt="Notifications">
                </a>
            </nav>
            <div class="mt-auto">
                <a href="/settings" class="">
                    <img class="w-10" src="assets/img/settings.svg" alt="Settings">
                </a>
            </div>
        </aside>
        <div class="flex flex-col w-full h-full">
            <header class="w-full h-14 border-b-2 border-b-gray-900/30 shadow-sm">
                <div class="h-full flex items-center justify-end pr-3">
                    <p class="pr-2 font-bold">NOME USUARIO</p>
                    <div>
                        <img class="w-12 hover:cursor-pointer" src="assets/img/account_circle.svg" alt="Perfil">
                    </div>
                </div>
            </header>
        </div>
    </div>
</body>
</html>

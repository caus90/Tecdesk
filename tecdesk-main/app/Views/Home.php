<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TecDesk</title>
    <link rel="stylesheet" href="assets/css/output.css">
</head>
<body class="font-[Roboto]">
    <div class="flex w-screen h-screen">
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
            <main class="grid grid-cols-2 grid-rows-2 w-full h-full p-15 flex-1 gap-y-20">
                <div class="flex flex-col w-full">
                    <div class="w-4/5 flex items-center pl-5">
                        <img src="assets/img/headset.svg" alt="Headset" class="w-6 h-6">
                        <h2 class="text-2xl font-bold pl-3">MEUS ÚLTIMOS CHAMADOS REGISTRADOS:</h2>
                    </div>
                    <div class="w-4/5 h-full flex flex-col mt-2 rounded-2xl overflow-auto">
                        <div class="w-full h-full flex flex-col rounded-2xl overflow-auto font-semibold cursor-pointer">
                            <div class="w-full h-1/5 bg-sky-400/25 hover:bg-sky-600/25">
                                <div class="w-full h-full px-5 flex items-center">CHAMADO 1 - CATEGORIA - DATA - SOLICITANTE - SETOR - STATUS</div>
                            </div>
                            <div class="w-full h-1/5 bg-sky-600/40 hover:bg-sky-600/50">
                                <div class="w-full h-full px-5 flex items-center">CHAMADO 1 - CATEGORIA - DATA - SOLICITANTE - SETOR - STATUS</div>
                            </div>
                            <div class="w-full h-1/5 bg-sky-400/25 hover:bg-sky-600/25">
                                <div class="w-full h-full px-5 flex items-center">CHAMADO 1 - CATEGORIA - DATA - SOLICITANTE - SETOR - STATUS</div>
                            </div>
                            <div class="w-full h-1/5 bg-sky-600/40 hover:bg-sky-600/50">
                                <div class="w-full h-full px-5 flex items-center">CHAMADO 1 - CATEGORIA - DATA - SOLICITANTE - SETOR - STATUS</div>
                            </div>
                            <div class="w-full h-1/5 bg-sky-400/25 hover:bg-sky-600/25">
                                <div class="w-full h-full px-5 flex items-center">CHAMADO 1 - CATEGORIA - DATA - SOLICITANTE - SETOR - STATUS</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col row-span-2">
                    <h2 class="text-2xl font-bold text-center">TICKETS POR DEPARTAMENTO:</h2>
                    <p class="text-center my-10 font-semibold text-xl" id="totalPizza">TOTAL: 0</p>
                    <div class="flex w-full h-full justify-center">
                        <div class="w-full h-full" id="graficoPizza"></div>
                    </div>
                </div>
                <div class="flex flex-col w-full">
                    <div class="w-4/5 flex items-center pl-5 mb-2">
                        <img src="assets/img/keep.svg" alt="Keep" class="w-6 h-6">
                        <h2 class="text-2xl font-bold pl-3">MURAL DE AVISOS:</h2>
                    </div>
                    <div class="bg-sky-500/40 w-4/5 h-full flex flex-col justify-start rounded-2xl p-7 gap-5 font-semibold">
                        <div class="bg-gray-50 hover:bg-gray-200 hover:cursor-pointer px-5 rounded-2xl w-full h-2/7 flex items-center justify-center hover:scale-105 hover:shadow-xl transition-transform duration-300 ease-in-out">
                            <div class="border-l-3 border-l-gray-400 pl-3 grid grid-cols-2 grid-rows-2 w-full">
                                <p class="col-span-2 row-span-1 italic">TESTE AVISO - AVISANDO QUE ESTÁ AVISADO</p>
                                <p class="italic text-gray-500">10/10/2025 16:35</p>
                                <p class="flex justify-end italic text-gray-500">Nome Usuario</p>
                            </div>
                        </div>
                        <div class="bg-gray-50 hover:bg-gray-200 hover:cursor-pointer px-5 rounded-2xl w-full h-2/7 flex items-center justify-center hover:scale-105 hover:shadow-xl transition-transform duration-300 ease-in-out">
                            <div class="border-l-3 border-l-gray-400 pl-3 grid grid-cols-2 grid-rows-2 w-full">
                                <p class="col-span-2 row-span-1 italic">TESTE AVISO - AVISANDO QUE ESTÁ AVISADO</p>
                                <p class="italic text-gray-500">10/10/2025 16:35</p>
                                <p class="flex justify-end italic text-gray-500">Nome Usuario</p>
                            </div>
                        </div>
                        <div class="bg-gray-50 hover:bg-gray-200 hover:cursor-pointer px-5 rounded-2xl w-full h-2/7 flex items-center justify-center hover:scale-105 hover:shadow-xl transition-transform duration-300 ease-in-out">
                            <div class="border-l-3 border-l-gray-400 pl-3 grid grid-cols-2 grid-rows-2 w-full">
                                <p class="col-span-2 row-span-1 italic">TESTE AVISO - AVISANDO QUE ESTÁ AVISADO</p>
                                <p class="italic text-gray-500">10/10/2025 16:35</p>
                                <p class="flex justify-end italic text-gray-500">Nome Usuario</p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/echarts@5.5.0/dist/echarts.min.js"></script>
    <script src="assets/js/eChartsPizza.js"></script>
</body>
</html>

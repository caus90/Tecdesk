<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Tarefa - TecDesk</title>
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
            <div class="flex max-w-full max-h-[783px] flex-1 gap-x-20 mx-15 mt-10">
                <div class="w-full h-full">
                    <h2 class="font-semibold text-center text-xl mb-2">CADASTRAR NOVA ORDEM DE SERVIÇO:</h2>
                    <div class="w-full h-full rounded-2xl shadow-xl bg-sky-600/35 overflow-y-auto scrollbar-custom">
                        <div class="w-full h-full justify-center items-center flex flex-col rounded-2xl p-10 gap-5 font-semibold">
                            <form method="" action="" class="w-full h-full flex flex-col">
                                <div class="mb-8">
                                    <label for="titleOSID" class="text-xl font-semibold ml-3">TAREFA:</label><br>
                                    <input type="text" name="titleOS" id="titleOSID" class="bg-white rounded-xl w-full h-10 outline-none pl-3 focus:shadow-xl focus:ring-2 focus:ring-sky-500 focus:border-sky-500 transition">
                                </div>
                                <div class="mb-8">
                                    <label for="titleOSID" class="text-xl font-semibold ml-3">CATEGORIA:</label><br>
                                    <input type="text" name="titleOS" id="titleOSID" class="bg-white rounded-xl w-full h-10 outline-none pl-3 focus:shadow-xl focus:ring-2 focus:ring-sky-500 focus:border-sky-500 transition">
                                </div>
                                <div class="mb-8">
                                    <label for="titleOSID" class="text-xl font-semibold ml-3">DATA:</label><br>
                                    <input type="date" name="titleOS" id="titleOSID" class="bg-white rounded-xl w-full h-10 outline-none pl-3 pr-3 focus:shadow-xl focus:ring-2 focus:ring-sky-500 focus:border-sky-500 transition">
                                </div>
                                <div class="mb-8">
                                    <label for="titleOSID" class="text-xl font-semibold ml-3">SOLICITANTE:</label><br>
                                    <input type="text" name="titleOS" id="titleOSID" class="bg-white rounded-xl w-full h-10 outline-none pl-3 focus:shadow-xl focus:ring-2 focus:ring-sky-500 focus:border-sky-500 transition">
                                </div>
                                <div class="mb-8">
                                    <label for="titleOSID" class="text-xl font-semibold ml-3">SETOR:</label><br>
                                    <input type="text" name="titleOS" id="titleOSID" class="bg-white rounded-xl w-full h-10 outline-none pl-3 focus:shadow-xl focus:ring-2 focus:ring-sky-500 focus:border-sky-500 transition">
                                </div>

                                <div class="w-full flex justify-center mt-auto">
                                    <button type="submit" class="bg-white rounded-xl w-50 h-12 flex justify-center items-center cursor-pointer hover:bg-gray-200 hover:shadow-xl">
                                        <img src="assets/img/add_circle.svg" alt="Add Circle" class="mr-3">
                                        <div class="font-semibold">ADICIONAR O.S</div>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="w-full h-full">
                    <h2 class="font-semibold text-center text-xl mb-2">TODOS AS ORDENS DE SERVIÇO:</h2>
                    <div class="w-full h-full rounded-2xl shadow-xl bg-sky-600/35 overflow-y-auto scrollbar-custom">
                        <div class="w-full flex flex-col rounded-2xl p-10 gap-5 font-semibold">
                            <div class="bg-gray-50 hover:bg-gray-200 hover:cursor-pointer px-5 rounded-2xl w-full h-18 flex items-center justify-center hover:shadow-xl">
                                <div class="border-l-3 border-l-gray-400 pl-3 w-full flex justify-start">
                                     <div class="h-full italic">TESTE AVISO - AVISANDO QUE ESTÁ AVISADO</div>
                                </div>
                            </div>
                            <div class="bg-gray-50 hover:bg-gray-200 hover:cursor-pointer px-5 rounded-2xl w-full h-18 flex items-center justify-center hover:shadow-xl">
                                <div class="border-l-3 border-l-gray-400 pl-3 grid grid-cols-2 grid-rows-2 w-full">
                                    <p class="col-span-2 row-span-1 italic">TESTE AVISO - AVISANDO QUE ESTÁ AVISADO</p>
                                    <p class="italic text-gray-500">10/10/2025 16:35</p>
                                    <p class="flex justify-end italic text-gray-500">Nome Usuario</p>
                                </div>
                            </div>
                            <div class="bg-gray-50 hover:bg-gray-200 hover:cursor-pointer px-5 rounded-2xl w-full h-18 flex items-center justify-center hover:shadow-xl">
                                <div class="border-l-3 border-l-gray-400 pl-3 grid grid-cols-2 grid-rows-2 w-full">
                                    <p class="col-span-2 row-span-1 italic">TESTE AVISO - AVISANDO QUE ESTÁ AVISADO</p>
                                    <p class="italic text-gray-500">10/10/2025 16:35</p>
                                    <p class="flex justify-end italic text-gray-500">Nome Usuario</p>
                                </div>
                            </div>
                            <div class="bg-gray-50 hover:bg-gray-200 hover:cursor-pointer px-5 rounded-2xl w-full h-18 flex items-center justify-center hover:shadow-xl">
                                <div class="border-l-3 border-l-gray-400 pl-3 grid grid-cols-2 grid-rows-2 w-full">
                                    <p class="col-span-2 row-span-1 italic">TESTE AVISO - AVISANDO QUE ESTÁ AVISADO</p>
                                    <p class="italic text-gray-500">10/10/2025 16:35</p>
                                    <p class="flex justify-end italic text-gray-500">Nome Usuario</p>
                                </div>
                            </div>
                            <div class="bg-gray-50 hover:bg-gray-200 hover:cursor-pointer px-5 rounded-2xl w-full h-18 flex items-center justify-center hover:shadow-xl">
                                <div class="border-l-3 border-l-gray-400 pl-3 grid grid-cols-2 grid-rows-2 w-full">
                                    <p class="col-span-2 row-span-1 italic">TESTE AVISO - AVISANDO QUE ESTÁ AVISADO</p>
                                    <p class="italic text-gray-500">10/10/2025 16:35</p>
                                    <p class="flex justify-end italic text-gray-500">Nome Usuario</p>
                                </div>
                            </div>
                            <div class="bg-gray-50 hover:bg-gray-200 hover:cursor-pointer px-5 rounded-2xl w-full h-18 flex items-center justify-center hover:shadow-xl">
                                <div class="border-l-3 border-l-gray-400 pl-3 grid grid-cols-2 grid-rows-2 w-full">
                                    <p class="col-span-2 row-span-1 italic">TESTE AVISO - AVISANDO QUE ESTÁ AVISADO</p>
                                    <p class="italic text-gray-500">10/10/2025 16:35</p>
                                    <p class="flex justify-end italic text-gray-500">Nome Usuario</p>
                                </div>
                            </div>
                            <div class="bg-gray-50 hover:bg-gray-200 hover:cursor-pointer px-5 rounded-2xl w-full h-18 flex items-center justify-center hover:shadow-xl">
                                <div class="border-l-3 border-l-gray-400 pl-3 grid grid-cols-2 grid-rows-2 w-full">
                                    <p class="col-span-2 row-span-1 italic">TESTE AVISO - AVISANDO QUE ESTÁ AVISADO</p>
                                    <p class="italic text-gray-500">10/10/2025 16:35</p>
                                    <p class="flex justify-end italic text-gray-500">Nome Usuario</p>
                                </div>
                            </div>
                            <div class="bg-gray-50 hover:bg-gray-200 hover:cursor-pointer px-5 rounded-2xl w-full h-18 flex items-center justify-center hover:shadow-xl">
                                <div class="border-l-3 border-l-gray-400 pl-3 grid grid-cols-2 grid-rows-2 w-full">
                                    <p class="col-span-2 row-span-1 italic">TESTE AVISO - AVISANDO QUE ESTÁ AVISADO</p>
                                    <p class="italic text-gray-500">10/10/2025 16:35</p>
                                    <p class="flex justify-end italic text-gray-500">Nome Usuario</p>
                                </div>
                            </div>
                    
                            <div class="bg-gray-50 hover:bg-gray-200 hover:cursor-pointer px-5 rounded-2xl w-full h-18 flex items-center justify-center hover:shadow-xl">
                                <div class="border-l-3 border-l-gray-400 pl-3 grid grid-cols-2 grid-rows-2 w-full">
                                    <p class="col-span-2 row-span-1 italic">TESTE AVISO - AVISANDO QUE ESTÁ AVISADO</p>
                                    <p class="italic text-gray-500">10/10/2025 16:35</p>
                                    <p class="flex justify-end italic text-gray-500">Nome Usuario</p>
                                </div>
                            </div>
                            <div class="bg-gray-50 hover:bg-gray-200 hover:cursor-pointer px-5 rounded-2xl w-full h-18 flex items-center justify-center hover:shadow-xl">
                                <div class="border-l-3 border-l-gray-400 pl-3 grid grid-cols-2 grid-rows-2 w-full">
                                    <p class="col-span-2 row-span-1 italic">TESTE AVISO - AVISANDO QUE ESTÁ AVISADO</p>
                                    <p class="italic text-gray-500">10/10/2025 16:35</p>
                                    <p class="flex justify-end italic text-gray-500">Nome Usuario</p>
                                </div>
                            </div>
                            <div class="bg-gray-50 hover:bg-gray-200 hover:cursor-pointer px-5 rounded-2xl w-full h-18 flex items-center justify-center hover:shadow-xl">
                                <div class="border-l-3 border-l-gray-400 pl-3 grid grid-cols-2 grid-rows-2 w-full">
                                    <p class="col-span-2 row-span-1 italic">TESTE AVISO - AVISANDO QUE ESTÁ AVISADO</p>
                                    <p class="italic text-gray-500">10/10/2025 16:35</p>
                                    <p class="flex justify-end italic text-gray-500">Nome Usuario</p>
                                </div>
                            </div>
                            <div class="bg-gray-50 hover:bg-gray-200 hover:cursor-pointer px-5 rounded-2xl w-full h-18 flex items-center justify-center hover:shadow-xl">
                                <div class="border-l-3 border-l-gray-400 pl-3 grid grid-cols-2 grid-rows-2 w-full">
                                    <p class="col-span-2 row-span-1 italic">TESTE AVISO - AVISANDO QUE ESTÁ AVISADO</p>
                                    <p class="italic text-gray-500">10/10/2025 16:35</p>
                                    <p class="flex justify-end italic text-gray-500">Nome Usuario</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
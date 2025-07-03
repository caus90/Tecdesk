<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
    <link rel="stylesheet" href="assets/css/output.css">
</head>
<body class="h-screen font-[Roboto]">
    <div class="flex h-full">
        <div class="w-1/3 bg-azul-escuro flex flex-col justify-center p-15 2xl:p-25">
            <h1 class="text-white text-4xl font-bold text-center pb-15">LOGIN</h1>
            <form method="post" action="/login">
                <div class="mb-8">
                    <label for="userID" class="block text-white/85 font-bold ml-5">USUARIO</label>
                    <input type="text" name="username" id="userID" class="w-full text-white bg-azul-escuro-input p-3 pl-5 rounded-xl outline-none" placeholder="Digite seu usuário" required>
                </div>
                <div class="mb-9">
                    <label for="passID" class="block text-white/85 font-bold ml-5">SENHA</label>
                    <input type="password" name="password" id="passID" class="w-full text-white bg-azul-escuro-input p-3 pl-5 rounded-xl outline-none" placeholder="Digite sua senha" required>
                </div>
                <div class="w-full flex justify-center">
                    <button type="submit" class="w-3/6 p-2 bg-gray-100 font-bold text-xl rounded-xl hover:bg-gray-400 cursor-pointer">ENTRAR</button>
                </div>
            </form>
            <p class="text-white text-center pt-7">Esqueceu a senha? <button class="hover:text-gray-300 cursor-pointer" onclick="openModal()">Clique aqui</button></p>
        </div>
        <div class="w-full h-full flex justify-center">
            <div class="w-2/3 h-full bg-center bg-no-repeat bg-cover" style="background-image: url('assets/img/Logo-TecDesk1500x1500.png');"></div>
        </div>
    </div>

    <div id="resetModal" class="fixed inset-0 bg-black/60 backdrop-blur-sm flex items-center justify-center hidden z-50">
        <div class="bg-white p-6 rounded-xl shadow-xl w-full max-w-sm">
            <h2 class="text-xl font-bold mb-4">Redefinir senha</h2>
            <form action="/esqueceu-senha" method="POST">
                <label for="email" class="block text-sm font-semibold mb-1">Digite seu e-mail</label>
                <input type="email" id="email" name="email" required class="w-full p-2 border rounded mb-4 focus:outline-none focus:ring focus:border-blue-300">
                <div class="flex justify-end space-x-2">
                    <button type="button" onclick="closeModal()" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400 cursor-pointer">Cancelar</button>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 cursor-pointer">Enviar</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openModal() {
            document.getElementById('resetModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('resetModal').classList.add('hidden');
        }
    </script>
</body>
</html>

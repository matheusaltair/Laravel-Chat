<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel-Chat</title>
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
    <div class="app">
        <header>
            <h1>Vamos conversar</h1>
            <input type="text" name="username" id="username" placeholder="escreva seu nome">
        </header>
    <div class="mensagens"></div>
    <form id="form_mensagem">
        <input type="text" name="mensagem" id="mensagem_input" placeholder="escreva uma mensagem...">
        <button type="submit" id="mensagem_send">Enviar
        </button>
    </form>
</div>
<script src="../js/app.js"></script>
</body>
</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO | Terminal Rodoviário de SGA</title>
    <link rel="stylesheet" type="text/css" href="cadastro.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
</head>
<body>
    <main>
        <h1>Criar Conta</h1>

        <form action="../controller/cadastro.php" method="post">
            <label for="name">
                <span>Usuário</span>
                <div>
                <input type="text" id="name" name="usuario" required>
            </div>
            </label>

            <label for="email">
                <span>Email</span>
                <div>
                <input type="email" id="email" name="email" required>
            </div>
            </label>

           <label for="password">
                <span>Senha</span>
                <div>
                <input type="password" id="password" name="senha">
                <span class="lnr lnr-eye"></span>
            </div>
            </label>
<h2>
            <input type="submit" value="Cadastrar" id="button" name="entrar">
        </h2>
        </form>
    </main>
    <section class="images">
        <div class="circle"></div>
    </section>
</body>
<script type="text/javascript">
let btn = document.querySelector('.lnr-eye');
btn.addEventListener('click', function() {
let input = document.querySelector('#password');
if(input.getAttribute('type') == 'password') {
input.setAttribute('type', 'text');
} else {
input.setAttribute('type', 'password');
    }
});
</script>
</html>


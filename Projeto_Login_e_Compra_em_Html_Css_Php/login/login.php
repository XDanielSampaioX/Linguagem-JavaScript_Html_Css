<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Webstore PC</title>
</head>
<body>
    <header class="cabecario">
        <h1>Login Webstore PC</h1>

        <div class="links-cabecario">
            <a href="#" class="link">Saiba-mais</a>
            <a href="#" class="link">Loja</a>
            <a href="#" class="link">Sobre-nós</a>
        </div>
    </header>
    <section class="container">
            <main class="principal">
                <div class="tela-formulario">
                    <form action="validaLogin.php" class="formulario" method="post">
                        <label for="usuario-dado" class="item-cadastro">
                            <span class="dado-preencher">Nome:</span>
                            <input type="text" name="usuario-dado" id="usuario-dado" class="usuario-preencher" placeholder="NOME">
                        </label>

                        <label for="email-dado" class="item-cadastro">
                            <span class="dado-preencher">Email:</span>
                            <input type="text" name="email-dado" id="email-dado" class="usuario-preencher" placeholder="EMAIL">
                        </label>

                        <label for="senha-dado" class="item-cadastro">
                            <span class="dado-preencher">Senha:</span>
                            <input type="password" name="senha-dado" id="senha-dado" class="senha-preencher" placeholder="SENHA">
                        </label>

                        <button class="login-active"> LOGAR </button>                        
                    </form>
                </div>
            </main>
    </section>
</body>
</html>
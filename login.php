<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Autenticação</title>
    <link rel="stylesheet" href="css/cabecalho.css">
    <link rel="stylesheet" href="css/login.css">

    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <main class="form-signin m-auto"> 
        <img class="logo mb-4" src="img/logo-removebg.png" alt="logomarca">
        <h1 class="h3 mb-3 text-center">Autenticação</h1>
            <form action="testLogin.php" method="POST">
                
                <div class="form-floating">
                    <input type="text" name="email" placeholder="Email" class="form-control mb-3 campo-email" required>
                    <label for="floatingInput" class="label-input">E-Mail</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="senha" placeholder="Senha" class="form-control mb-3 campo-senha" required>
                    <label for="floatingInput" class="label-input">Senha</label>
                </div>
                
                <button class="btn w-100 py-2" name="submit" value="Enviar" id="btn-enviar">Enviar</button>
                <a class="btn w-100 py-2" href="cadastro.php" id="btn-cadastrar">Cadastrar-se</a>
                <a href="index.php" id="btn-voltar">Voltar</a>
            </form>
    </main>
    
    <!--bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
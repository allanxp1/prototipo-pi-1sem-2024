<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conect Jovem | Cadastro</title>
    <link rel="stylesheet" href="css/cadastro.css">
</head>
<body>
<section class="form-signin m-auto">
        <div class="container">
            <form action="cadastro.php" method="POST">
                <h1>CADASTRE-SE E FAÇA PARTE DESTA CONEXÃO</h1>
                <P>"Junte-se a nós e faça parte da conexão que impulsiona o seu futuro profissional!"</P>
                <div class="form-floating input-single">
                        <input type="text" name="nome" id="nome-box" class="input" required>
                        <label for="nome-box">Nome completo</label>
                    </div>

                <div class="form-floating input-single">
                        <input type="email" name="email" id="email-box" class="input" required>
                        <label for="email-box">E-mail</label>
                    </div>

                <div class="input-single">
                        <input type="password" name="senha" id="senha-box" class="input" required>
                        <label for="senha-box">Senha</label>
                    </div>

                <div class="btns">
                    <div id="btn-voltar">
                        <a href="index.php"><button type="button" class="btn-saiba-mais">Voltar</button></a>
                    </div>
                    <div id="btn-enviar">
                        <input type="submit" name="submit" id="submit" value="Cadastrar-se">
                    </div>
                </div>
            </form>
        </div>
    </section>

    <script>
//        document.getElementById("btn-enviar").addEventListener("click", myFunction);  
        function redirecionarPagina() {  
            window.open('cadastro-success.html','_blank');
            window.setTimeout(
                    window.close()
                ,2000)

        }
    </script>

<?php

if(isset($_POST['submit']))
{
  //  print_r('Nome: ' . $_POST['nome']);
  //  print_r('<br>');
  //  print_r('E-mail: ' . $_POST['email']);
  // print_r('<br>');
  // print_r('Senha: ' . $_POST['senha']);

  include_once('config.php');

  $nome = $_POST['nome'];
  $usuario = $_POST['usuario'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $result = mysqli_query($conexao, "INSERT INTO cadastro(nome,usuario,email,senha)
  VALUES ('$nome','$usuario','$email','$senha')");

  echo "<script>redirecionarPagina();</script>";
}

?>

</body>
</html>



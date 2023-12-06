<?php
    require_once('classes/Usuario.php');
    require_once('database/conexao.php');

    $database = new Conexao();
    $db = $database->getConnection();
    $usuario = new Usuario($db);

    if(isset($_POST['cadastrar'])){
        $nomeUsuario = $_POST['usuario'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];       

        if($usuario->cadastrar($nomeUsuario, $email, $senha)){
            // Cadastro bem-sucedido, exiba um alerta de sucesso
            echo '<script>alert("Cadastro realizado com sucesso");</script>';
        } else {
            // Erro ao cadastrar, exiba um alerta de erro
            echo '<script>alert("Erro ao cadastrar!");</script>';
        }
    }
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
       @import url('https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500&family=Open+Sans:wght@300;400;500;600&display=swap');
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('img/fundo.jpg'); /* Substitua pelo caminho real da sua imagem */
            background-size: cover; /* Para cobrir todo o elemento body */
            background-repeat: no-repeat; /* Evita a repetição da imagem */
        }

        .container {
            width: 80%;
            height: 80vh;
            display: flex;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.212);
        }

        .form-image {
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #2D5966;
            padding: 1rem;
        }

        .form-image img {
            width: 31rem;
        }

        .form {
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.5); /* Cor branca com transparência (valor alfa de 0.8) */
            padding: 3rem;
            border-radius: 10px; /* Arredondar as bordas */
        }


        .form-header {
            margin-bottom: 3rem;
            display: flex;
            justify-content: space-between;
        }

        .login-button {
            display: flex;
            align-items: center;
        }

        .login-button button {
            border: none;
            background-color: #2D5966; /* Altere a cor do botão para #124c51 */
            padding: 0.4rem 1rem;
            border-radius: 5px;
            cursor: pointer;
        }

        .login-button button:hover {
            background-color: #2D5966; /* Altere a cor do botão hover para #124c51 */
        }

        .login-button button a {
            text-decoration: none;
            font-weight: 500;
            color: #fff; /* Mantenha a cor do texto branca */
        }


        .form-header h1::after {
            content: '';
            display: block;
            width: 5rem;
            height: 0.3rem;
            background-color: #2D5966;
            margin: 0 auto;
            position: absolute;
            border-radius: 10px;
        }

        .input-group {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 1rem 0;
        }

        .input-box {
            display: flex;
            flex-direction: column;
            margin-bottom: 1.1rem;
        }

        .input-box input {
            margin: 0.6rem 0;
            padding: 0.8rem 1.2rem;
            border: none;
            border-radius: 10px;
            box-shadow: 1px 1px 6px #0000001c;
            font-size: 0.8rem;
        }

        .input-box input:hover {
            background-color: #eeeeee75;
        }

        .input-box input:focus-visible {
            outline: 1px solid #6c63ff;
        }

        .input-box label,
        .gender-title h6 {
            font-size: 0.75rem;
            font-weight: 600;
            color: #000000c0;
        }

        .input-box input::placeholder {
            color: #000000be;
        }

        .gender-group {
            display: flex;
            justify-content: space-between;
            margin-top: 0.62rem;
            padding: 0 .5rem;
        }

        .gender-input {
            display: flex;
            align-items: center;
        }

        .gender-input input {
            margin-right: 0.35rem;
        }

        .gender-input label {
            font-size: 0.81rem;
            font-weight: 600;
            color: #000000c0;
        }

        .continue-button button {
            width: 100%;
            margin-top: 2.5rem;
            border: none;
            background-color: #2D5966;
            padding: 0.62rem;
            border-radius: 5px;
            cursor: pointer;
        }

        .continue-button button:hover {
            background-color: #6b63fff1;
        }

        .continue-button button a {
            text-decoration: none;
            font-size: 0.93rem;
            font-weight: 500;
            color: #fff;
        }

        @media screen and (max-width: 1330px) {
            .form-image {
                display: none;
            }
            .container {
                width: 50%;
            }
            .form {
                width: 100%;
            }
        }

        @media screen and (max-width: 1064px) {
            .container {
                width: 90%;
                height: auto;
            }
            .input-group {
                flex-direction: column;
                z-index: 5;
                padding-right: 5rem;
                max-height: 10rem;
                overflow-y: scroll;
                flex-wrap: nowrap;
            }
            .gender-inputs {
                margin-top: 2rem;
            }
            .gender-group {
                flex-direction: column;
            }
            .gender-title h6 {
                margin: 0;
            }
            .gender-input {
                margin-top: 0.5rem;
            }
        }
    </style>
    <title>Formulário</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="../img/cadastro.jpg " alt="">
        </div>
        <div class="form">
            <form action="#" method="POST">

                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                </div>

                <div class="input-group">
                    

                    <div class="input-box">
                        <label for="usuario">Nome de Usuario</label>
                        <input id="usuario" type="text" name="usuario" placeholder="Digite um nome de usuario" required>
                    </div>
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="input-box">
                        <label for="">Celular</label>
                        <input id="number" type="tel" name="number" placeholder="(xx) xxxx-xxxx" required>
                    </div>

                    <div class="input-box">
                        <label for="senha">Senha</label>
                        <input id="senha" type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>

                </div>

                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input id="female" type="radio" name="gender">
                            <label for="female">Feminino</label>
                        </div>

                        <div class="gender-input">
                            <input id="male" type="radio" name="gender">
                            <label for="male">Masculino</label>
                        </div>

                        <div class="gender-input">
                            <input id="others" type="radio" name="gender">
                            <label for="others">Outros</label>
                        </div>

                        <div class="gender-input">
                            <input id="none" type="radio" name="gender">
                            <label for="none">Prefiro não dizer</label>
                        </div>
                    </div>
                </div>

                <div class="continue-button">
                <button type="submit" name="cadastrar">Cadastrar</button>
                </div>
            </form>
        
            <a href="index.php">Voltar para a pagina de Login </a>
        
        </div>
    </div>
</body>



</html>

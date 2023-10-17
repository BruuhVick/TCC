<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Zoo Cwb</title>

    <style>
      * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Outfit', sans-serif;
}

body {
    width: 100%;
    height: 100vh;
    background-image: url(img/fundo.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    display: flex;
    align-items: center;
    justify-content: center;
}

.container {
    max-width: 1280px;
    margin: 0 auto;
    padding: 6%;
}

form {
    background: rgba(255, 255, 255, 0.5);
    max-width: 500px;
    height: 450px;
    padding: 40px;
    border-radius: 20px;
}

form h1 {
    text-align: center;
    margin-bottom: 10px;
    color: #2D5966;
    font-size: 22pt;
}

form p {
    text-align: center;
    margin-bottom: 25px;
}

form .input-single {
    position: relative;
    margin: 30px 0;
    border-radius: 10px; /* Arredonda as bordas dos elementos de entrada */
}

form .input-single label {
    position: absolute;
    left: 0;
    bottom: 5px;
    cursor: text;
    transition: all 0.5s;
    color: #808080;
    border-radius: 10px; /* Arredonda as bordas dos rótulos */
}

form .input-single .input {
    width: 100%;
    border: 5px;
    border-bottom: 2px solid #808080;
    padding: 5px;
    outline: 0;
    font-size: 16px;
    border-radius: 10px; /* Arredonda as bordas dos campos de entrada */
}

form .input-single .input:focus {
    border-bottom: 2px solid #2D5966;
}

form .input-single .input:focus ~ label,
form .input-single .input:valid ~ label {
    transform: translateY(-20px);
    font-size: 12px;
    color: #2D5966;
}

.btn {
    width: 100%;
    text-align: center;
}

form input[type=submit] {
    padding: 10px 40px;
    border: 0;
    border-radius: 10px; /* Arredonda as bordas do botão */
    background-color: #2D5966;
    color: #fff;
    font-size: 14pt;
    cursor: pointer;
}

    </style>
</head>
<body>
    <section class="form-container">
        <div class="container">
            <form method="POST" action="site.php">
                <h1>Acesse nosso site animal</h1>
                <p>Login</p>
                <div class="input-single">
                    <input class="input" type="text" id="usuario" required>
                    <label for="usuario">Seu nome de Usuario</label>
                </div>
                <div class="input-single">
                    <input class="input" type="password" id="senha" required>
                    <label for="senha">Sua Senha</label>
                </div>
              
                <div class="btn"><input type="submit" value="Logar"></div>
            </form>
            <a href="cadastrar.php"> Clique aqui para criar uma conta </a>
        </div>
    </section>
</body>
</html>

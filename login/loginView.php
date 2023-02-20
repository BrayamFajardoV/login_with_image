<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../assets/css/style.css" rel="stylesheet">
    <title>Login</title>
</head>
<body class="body">
<div class="container">
    <div class="blueBg">
        <div class="box signin">
            <h2>Ya tienes cuenta?</h2>
            <button class="signinBtn" id="signinBtn">Iniciar Sesion</button>
        </div>
        <div class="box signup">
            <h2>No tienes cuenta?</h2>
            <button class="signupBtn" id="signupBtn">Registrarse</button>
        </div>
    </div>

    <div class="formBx" id="formBx">
        <div class="form signinForm">
            <form>
                <h3>Iniciar sesion</h3>
                <input type="text" placeholder="Correo Electronico">
                <input type="password" placeholder="contraseña">
                <input type="submit" value="Iniciar Sesion">
                <a href="#" class="forgot">¿Olvido su contraseña?</a>
            </form>
        </div>

        <div class="form signupForm">
            <form>
                <h3>Registrarse</h3>
                <input type="text" placeholder="Nombre Completo">
                <input type="email" placeholder="Correo electronico">
                <input type="password" placeholder="contraseña">
                <input type="password" placeholder="Confirmar contraseña">
                <input type="file" accept="image/png, image/jpeg, image/webp">
                <input type="submit" value="Registrar">
            </form>
        </div>
    </div>
</div>

<script src="../assets/js/main.js"></script>
</body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Accede a tu cuenta | PadelMania.com</title>
        <link rel="stylesheet" href="./public/css/style.css">
        <link rel="stylesheet" href="./public/css/component.css">
    </head>
    <body>
        <div class="form-page">
            <header class="header">
                <a href="/../../index.php" alt="main menu"><img src="./public/images/google.png" alt="logo"></a>
            </header>
    
            <main class="box">
                <section class="left-box">
    
                    <div class="slide">
                        <img src="./public/images/background-login-1.jpg" alt="slide-1">
                    </div>
    
                    <div class="slide">
                      <img src="./public/images/background-login-2.jpg" alt="slide-2">
                    </div>
    
                    <div class="slide">
                      <img src="./public/images/background-login-3.jpg" alt="slide-3">
                    </div>
                    
                </section>
        
                <section class="right-box">
                    <h2>Iniciar sesión</h2>
                    <form action="./controllers/user/controller_user_login.php" method="post" id="login">
                        <input class="form-input" type="mail" name="mail" placeholder="Email*" required><br>
                        <input class="form-input" type="password" name="password" placeholder="Contraseña*" required><br>
    
                        <a href="#" alt="link para recuperar contraseña">He olvidado mi contraseña</a>
    
                        <input id="send" type="submit" value="Iniciar session">
                  </form>
    
                    <div class="separador">
                        <span>¿Aun no tienes una cuenta?</span>
                    </div>
                  
                    <a href="/../../index.php?action=signup" class="button btn-end">Crear Cuenta</a>
                </section>
            </main>
        </div>

        <script src="public/js/login.js"></script>
    </body>
</html>
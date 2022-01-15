<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Accede a tu cuenta | PadelMania.com</title>
        <link rel="shortcut icon" href="./public/images/logo_reduced.png">
        <link rel="stylesheet" href="./public/css/style.css">
        <link rel="stylesheet" href="./public/css/component.css">
        <script src="./public/js/jquery-3.6.0.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="form-page">
            <header class="header">
                <a href="/../../index.php" alt="main menu"><img src="./public/images/logo.png" alt="logo"></a>
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
                    <form id="form-login" action="/../../index.php?action=user_login" method="post" class="form">
                        <div class="form-control">
                            <input id="mail-form" class="form-input" type="text" name="mail" placeholder="Email*" required>
                            <img src="./public/images/correct.png" class="fas fa-check-circle"></img>
                            <img src="./public/images/fail.png" class="fas fa-exclamation-circle"></img>
                            <small>Error message</small>
                        </div>
                        <div class="form-control">
                            <input id="password-form" class="form-input" type="password" name="password" placeholder="Contraseña*" required>
                            <img src="./public/images/correct.png" class="fas fa-check-circle"></img>
                            <img src="./public/images/fail.png" class="fas fa-exclamation-circle"></img>
                            <small>Error message</small>
                        </div>
    
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
        <script src="public/js/validation.js"></script>
        <script src="public/js/login.js"></script>
    </body>
</html>
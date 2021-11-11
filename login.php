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
                <a href="index.php" alt="main menu"><img src="./public/images/google.png" alt="logo"></a>
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
                    <form action="./controllers/controller_user_login.php" method="post" id="login">
                        <input class="form-input" type="mail" name="mail" placeholder="Email*"><br>
                        <input class="form-input" type="password" name="password" placeholder="Contraseña*"><br>
    
                        <a href="#" alt="link para recuperar contraseña">He olvidado mi contraseña</a>
    
                        <input id="send" type="submit" value="Iniciar session">
    
                        <div class="separador">
                            <span>Tambien puedes</span>
                        </div>
                        
                        <div id="method-login">
                            
                            <button id="method-login-google" alt="Login with google">
                                    Iniciar Sesión con <img src="public/images/google.png"> 
                            </button>
                            
                            <button id="method-login-facebook"alt="Login with facebook">
                                Iniciar Sesión con <img src="public/images/facebook.png"> 
                            </button>
                        </div>
                  </form>
    
                    <div class="separador">
                        <span>¿Aun no tienes una cuenta?</span>
                    </div>
                  
                    <a href="./signup.php" class="button btn-end">Crear Cuenta</a>
                </section>
            </main>
        </div>

        <script src="public/js/login.js"></script>
    </body>
</html>
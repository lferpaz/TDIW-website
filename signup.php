<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/> 
        <title>Regístrate | PadelMania.com</title>
        <link rel="stylesheet" href="public/css/style.css">
        <link rel="stylesheet" href="public/css/component.css">
    </head> 
    <body>
        <div class="form-page">
            <header class="header">
                <a href="index.php" alt="main menu"><img src="public/images/google.png" alt="logo"></a>
            </header>
    
            <main class="box">
                <section class="left-box">
    
                    <div class="slide">
                        <img src="public/images/background-login-1.jpg" alt="slide-1">
                    </div>
    
                    <div class="slide">
                      <img src="public/images/background-login-2.jpg" alt="slide-2">
                    </div>
    
                    <div class="slide">
                      <img src="public/images/background-login-3.jpg" alt="slide-3">
                    </div>
                    
                </section>
        
                <section class="right-box">
                    <h2>Crear Cuenta</h2>
                    <form action=./controllers/controller_user_creation.php method="post" id="login">
                        <input class="form-input" type="text" name="dni" placeholder="DNI/NIE*"><br>
                        <input class="form-input" type="text" name="username" placeholder="Usuario"><br>
                        <input class="form-input" type="text" name="name" placeholder="Nombre"><br>
                        <input class="form-input" type="text" name="last_name" placeholder="Apellido"><br>
                        <input class="form-input" type="mail" name="mail" placeholder="E-mail*"><br>
                        <input class="form-input" type="text" name="phone" placeholder="Telefono"><br>
                        <input class="form-input" type="password" name="password" placeholder="Contraseña*"><br>
                        <input class="form-input" type="password" name="password_confirmation" placeholder="Repetir Contraseña*"><br>
    
                        <input type="checkbox" class="form-checkbox" name="conditions" value="condition">
                        <label for="conditions"> He leído y acepto la <a href="#" alt="link politica de privacidad">política de privacidad</a></label><br>
    
                        <input id="send" type="submit" value="Crear Cuenta">
    
                        <div class="separador">
                            <span>Tambien puedes</span>
                        </div>
                        
                        <div id="method-login">
                            
                            <button id="method-login-google" alt="Login with google">
                                    Crear Cuenta con <img src="public/images/google.png"> 
                            </button>
                            
                            <button id="method-login-facebook"alt="Login with facebook">
                                Crear Cuenta con <img src="public/images/facebook.png"> 
                            </button>
                        </div>
                  </form>
    
                    <div class="separador">
                        <span>¿Ya tienes una cuenta?</span>
                    </div>
                  
                    <a href="index.php" class="button btn-end">Iniciar Sesión</a>
                </section>
            </main>
        </div>

        <script src="public/js/login.js"></script>
    
    </body>
</html>
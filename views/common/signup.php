<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/> 
        <title>Regístrate | PadelMania.com</title>
        <link rel="shortcut icon" href="./public/images/logo_reduced.png">
        <link rel="stylesheet" href="public/css/style.css">
        <link rel="stylesheet" href="public/css/component.css">
        <script src="./public/js/jquery-3.6.0.min.js" type="text/javascript"></script>
    </head> 
    <body>
        <div class="form-page">
            <header class="header">
                <a href="/../../index.php" alt="main menu"><img src="public/images/logo.png" alt="logo"></a>
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
                    <form id="form-signup" action="<?php echo htmlspecialchars("/../../index.php?action=create_user");?>" method="post" class="form">
                        <div class="form-control">
                            <input id="dni-form" class="form-input" type="text" name="dni" placeholder="DNI/NIE*" required>
                            <img src="./public/images/correct.png" class="fas fa-check-circle"></img>
                            <img src="./public/images/fail.png" class="fas fa-exclamation-circle"></img>
                            <small>Error message</small>
                        </div>
                        <div class="form-control">
                            <input id="name-form" class="form-input" type="text" name="name" placeholder="Nombre*" required>
                            <img src="./public/images/correct.png" class="fas fa-check-circle"></img>
                            <img src="./public/images/fail.png" class="fas fa-exclamation-circle"></img>
                            <small>Error message</small>
                        </div>
                        <div class="form-control">
                            <input id="last_name-form" class="form-input" type="text" name="last_name" placeholder="Apellido">
                            <img src="./public/images/correct.png" class="fas fa-check-circle"></img>
                            <img src="./public/images/fail.png" class="fas fa-exclamation-circle"></img>
                            <small>Error message</small>
                        </div>
                        <div class="form-control">
                            <input id="mail-form" class="form-input" type="text" name="mail" placeholder="Email*" required>
                            <img src="./public/images/correct.png" class="fas fa-check-circle"></img>
                            <img src="./public/images/fail.png" class="fas fa-exclamation-circle"></img>
                            <small>Error message</small>
                        </div>
                        <div class="form-control">
                            <input id="phone-form" class="form-input" type="text" name="phone" placeholder="Telefono">
                            <img src="./public/images/correct.png" class="fas fa-check-circle"></img>
                            <img src="./public/images/fail.png" class="fas fa-exclamation-circle"></img>
                            <small>Error message</small>
                        </div>
                        <div class="form-control">
                            <input id="direcction-form" class="form-input" type="text" name="direction" placeholder="Direccion*" required>
                            <img src="./public/images/correct.png" class="fas fa-check-circle"></img>
                            <img src="./public/images/fail.png" class="fas fa-exclamation-circle"></img>
                            <small>Error message</small>
                        </div>
                        <div class="form-control">
                            <input id="poblacion-form" class="form-input" type="text" name="poblacion" placeholder="Poblacion*" required>
                            <img src="./public/images/correct.png" class="fas fa-check-circle"></img>
                            <img src="./public/images/fail.png" class="fas fa-exclamation-circle"></img>
                            <small>Error message</small>
                        </div>
                        <div class="form-control">
                            <input id="cp-form" class="form-input" type="text" name="cp" placeholder="Codigo postal*" required>
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
                        <div class="form-control">
                            <input id="password_confirmation-form" class="form-input" type="password" name="password_confirmation" placeholder="Repetir Contraseña*" required>
                            <img src="./public/images/correct.png" class="fas fa-check-circle"></img>
                            <img src="./public/images/fail.png" class="fas fa-exclamation-circle"></img>
                            <small>Error message</small>
                        </div>
        
                        <input type="checkbox" class="form-checkbox" name="conditions" value="condition" required>
                        <label for="conditions"> He leído y acepto la <a href="#" alt="link politica de privacidad">política de privacidad</a></label>
    
                        <input class="button" id="send" type="submit" value="Crear Cuenta">
                  </form>
    
                    <div class="separador">
                        <span>¿Ya tienes una cuenta?</span>
                    </div>
                  
                    <a href="/../../index.php?action=login" class="button btn-end">Iniciar Sesión</a>
                </section>
            </main>
        </div>
        <script src="public/js/validation.js"></script>
        <script src="public/js/login.js"></script>
    </body>
</html>

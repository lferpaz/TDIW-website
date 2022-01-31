<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/> 
        <title>Regístrate | PadelMania.com</title>
        <link rel="shortcut icon" href="/../public/images/logo_reduced.png">
        <link rel="stylesheet" href="/../public/css/style.css">
        <link rel="stylesheet" href="/../public/css/component.css">
        <script src="/../public/js/jquery-3.6.0.min.js" type="text/javascript"></script>
    </head> 
    <body>
        <div class="form-page">
            <header class="header">
                <a href="/../index.php" alt="main menu"><img src="/../public/images/logo.png" alt="logo"></a>
            </header>
    
            <main class="box">
                <section class="left-box">
    
                    <div class="slide">
                        <img src="/../public/images/background-login-1.jpg" alt="slide-1">
                    </div>
    
                    <div class="slide">
                      <img src="/../public/images/background-login-2.jpg" alt="slide-2">
                    </div>
    
                    <div class="slide">
                      <img src="/../public/images/background-login-3.jpg" alt="slide-3">
                    </div>
                    
                </section>
        
                <section class="right-box">
                    <h2>Crear Cuenta</h2>
                    <form id="form-signup" action="<?php echo htmlspecialchars("/../index.php?action=create_user");?>" method="post" class="form">
                        <div class="form-control">
                            <input id="dni-form" class="form-input" type="text" name="dni" pattern="^[0-9]{8,9}[A-Z]$" title="El DNI es incorrecto (8 o 9 dígitos y una letra mayúscula)" placeholder="DNI/NIE*" required>
                            <img src="/../public/images/correct.png" class="fas fa-check-circle"></img>
                            <img src="/../public/images/fail.png" class="fas fa-exclamation-circle"></img>
                            <small>Error message</small>
                        </div>
                        <div class="form-control">
                            <input id="name-form" class="form-input" type="text" name="name" pattern="^[a-zA-Z_]+( [a-zA-Z_]+)*{1,15}$" title="El nombre debe tener como máximo 15 caracteres" placeholder="Nombre*" required>
                            <img src="/../public/images/correct.png" class="fas fa-check-circle"></img>
                            <img src="/../public/images/fail.png" class="fas fa-exclamation-circle"></img>
                            <small>Error message</small>
                        </div>
                        <div class="form-control">
                            <input id="last_name-form" class="form-input" type="text" name="last_name" pattern="^[a-zA-Z_]+( [a-zA-Z_]+)*{0,20}$" title="El Apellido debe tener como máximo 20 caracteres" placeholder="Apellido">
                            <img src="/../public/images/correct.png" class="fas fa-check-circle"></img>
                            <img src="/../public/images/fail.png" class="fas fa-exclamation-circle"></img>
                            <small>Error message</small>
                        </div>
                        <div class="form-control">
                            <input id="mail-form" class="form-input" type="text" name="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Debe de introducir un correo valido" placeholder="Email*" required>
                            <img src="/../public/images/correct.png" class="fas fa-check-circle"></img>
                            <img src="/../public/images/fail.png" class="fas fa-exclamation-circle"></img>
                            <small>Error message</small>
                        </div>
                        <div class="form-control">
                            <input id="phone-form" class="form-input" type="text" name="phone" pattern="[0-9]{9,9}$" title="Introduzca un numero valido" placeholder="Telefono">
                            <img src="/../public/images/correct.png" class="fas fa-check-circle"></img>
                            <img src="/../public/images/fail.png" class="fas fa-exclamation-circle"></img>
                            <small>Error message</small>
                        </div>
                        <div class="form-control">
                            <input id="direcction-form" class="form-input" type="text" name="direction" pattern="^[a-zA-Z_]+( [a-zA-Z_]+)*{10,30}$" title="La direccion debe tener como minimo 10 caracteres y commo máximo 30 caracteres" placeholder="Direccion*" required>
                            <img src="/../public/images/correct.png" class="fas fa-check-circle"></img>
                            <img src="/../public/images/fail.png" class="fas fa-exclamation-circle"></img>
                            <small>Error message</small>
                        </div>
                        <div class="form-control">
                            <input id="poblacion-form" class="form-input" type="text" name="poblacion" pattern="^[a-zA-Z_]+( [a-zA-Z_]+)*{5,30}$" title="La Poblacion debe tener como minimo 5 caracteres y commo máximo 30 caracteres" placeholder="Poblacion*" required>
                            <img src="/../public/images/correct.png" class="fas fa-check-circle"></img>
                            <img src="/../public/images/fail.png" class="fas fa-exclamation-circle"></img>
                            <small>Error message</small>
                        </div>
                        <div class="form-control">
                            <input id="cp-form" class="form-input" type="text" name="cp" pattern="[0-9]{5,5}$" title="Codigo postal debe de tener 5 caracteres numericos" placeholder="Codigo postal*" required>
                            <img src="/../public/images/correct.png" class="fas fa-check-circle"></img>
                            <img src="/../public/images/fail.png" class="fas fa-exclamation-circle"></img>
                            <small>Error message</small>
                        </div>
                        <div class="form-control">
                            <input id="password-form" class="form-input" type="password" name="password" pattern="^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,15}$" 
                            title="La contraseña debe tener al entre 8 y 15 caracteres, al menos un dígito, al menos una minúscula y al menos una mayúscula." placeholder="Contraseña*" required>
                            <img src="/../public/images/correct.png" class="fas fa-check-circle"></img>
                            <img src="/../public/images/fail.png" class="fas fa-exclamation-circle"></img>
                            <small>Error message</small>
                        </div>
                        <div class="form-control">
                            <input id="password_confirmation-form" class="form-input" type="password" name="password_confirmation" pattern="^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,15}$" 
                            title="La contraseña debe tener al entre 8 y 15 caracteres, al menos un dígito, al menos una minúscula y al menos una mayúscula." placeholder="Repetir Contraseña*" required>
                            <img src="/../public/images/correct.png" class="fas fa-check-circle"></img>
                            <img src="/../public/images/fail.png" class="fas fa-exclamation-circle"></img>
                            <small>Error message</small>
                        </div>
        
                        <input type="checkbox" class="form-checkbox" name="conditions" value="condition" required>
                        <label for="conditions"> He leído y acepto la <a href="#" alt="link politica de privacidad">política de privacidad</a></label>
    
                        <input class="button" id="send" type="submit" value="Crear Cuenta">
                  </form>
    
                    <div class="separador">
                        <span>¿Ya tienes una cuenta?</span>
                    </div>
                  
                    <a href="/../index.php?action=login" class="button btn-end">Iniciar Sesión</a>
                </section>
            </main>
        </div>
        <script src="/../public/js/validation.js"></script>
        <script src="/../public/js/login.js"></script>
    </body>
</html>

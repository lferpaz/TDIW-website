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
                        <input class="form-input" type="text" name="dni" placeholder="DNI/NIE*" required><br>
                        <input class="form-input" type="text" name="name" placeholder="Nombre*" required><br>
                        <input class="form-input" type="text" name="last_name" placeholder="Apellido"><br>
                        <input class="form-input" type="mail" name="mail" placeholder="E-mail*" required><br>
                        <input class="form-input" type="text" name="phone" placeholder="Telefono" required><br>
                        <input class="form-input" type="text" name="direction" placeholder="Direccion" required><br>
                        <input class="form-input" type="text" name="poblacion" placeholder="Poblacion" required><br>
                        <input class="form-input" type="text" name="cp" placeholder="Codigo postal" required><br>
                        <input class="form-input" type="password" name="password" placeholder="Contraseña*" required><br>
                        <input class="form-input" type="password" name="password_confirmation" placeholder="Repetir Contraseña*" required><br>
    
                        <input type="checkbox" class="form-checkbox" name="conditions" value="condition">
                        <label for="conditions"> He leído y acepto la <a href="#" alt="link politica de privacidad">política de privacidad</a></label><br>
    
                        <input id="send" type="submit" value="Crear Cuenta">
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

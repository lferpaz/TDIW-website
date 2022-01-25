<?php
foreach($users as $user) {
    $user['foto'] = htmlentities($user['foto'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $user['nombre'] = htmlentities($user['nombre'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $user['email'] = htmlentities($user['email'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $user['direccion'] = htmlentities($user['direccion'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $user['poblacion'] = htmlentities($user['poblacion'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $user['cp'] = htmlentities($user['cp'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    
    if (empty($user['telefono'])) {
        $phone = 'Telefono';
    } else {
        $phone = htmlentities($user['telefono'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    }
    ?>
    <section class="user_page">
        <div class="user_page_image">
            <img id="user-img-form" src="<?php echo $user['foto']; ?>" alt="<?php echo $user['nombre']; ?>">
        </div>
        <form id="form-update" action="<?php echo htmlspecialchars("index.php?action=update_user");?>" method="post" enctype="multipart/form-data">
            <div class="form-control">
                <input id="profile_image" type="file" class="form-input" name="profile_image" pattern="^(.*\.(?(jpg|jpeg|png)$))?[^.]*$" title="El fichero debe de ser jpg, jpeg o png"/>
                <img src="./public/images/correct.png" class="fas fa-check-circle"></img>
                <img src="./public/images/fail.png" class="fas fa-exclamation-circle"></img>
                <small>Error message</small>
            </div>
            <div class="form-control">    
                <input id="name-form" class="form-input" type="text" name="name" pattern="^[a-zA-Z_]+( [a-zA-Z_]+)*{0,40}$" title="El nombre debe tener como máximo 40 caracteres" placeholder="<?php echo $user['nombre']; ?>">
                <img src="./public/images/correct.png" class="fas fa-check-circle"></img>
                <img src="./public/images/fail.png" class="fas fa-exclamation-circle"></img>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <input id="mail-form" class="form-input" type="mail" name="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Debe de introducir un correo valido" placeholder="<?php echo $user['email']; ?>">
                <img src="./public/images/correct.png" class="fas fa-check-circle"></img>
                <img src="./public/images/fail.png" class="fas fa-exclamation-circle"></img>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <input id="phone-form" class="form-input" type="text" name="phone" pattern="[0-9]{9,9}$" title="Introduzca un numero valido" placeholder="<?php echo $phone; ?>">
                <img src="./public/images/correct.png" class="fas fa-check-circle"></img>
                <img src="./public/images/fail.png" class="fas fa-exclamation-circle"></img>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <input id="direction-form" class="form-input" type="text" name="direction" pattern="^[a-zA-Z_]+( [a-zA-Z_]+)*{10,30}$" title="La direccion debe tener como minimo 10 caracteres y commo máximo 30 caracteres" placeholder="<?php echo $user['direccion']; ?>">
                <img src="./public/images/correct.png" class="fas fa-check-circle"></img>
                <img src="./public/images/fail.png" class="fas fa-exclamation-circle"></img>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <input id="poblacion-form" class="form-input" type="text" name="poblacion" pattern="^[a-zA-Z_]+( [a-zA-Z_]+)*{5,30}$" title="La Poblacion debe tener como minimo 5 caracteres y commo máximo 30 caracteres" placeholder="<?php echo $user['poblacion']; ?>">
                <img src="./public/images/correct.png" class="fas fa-check-circle"></img>
                <img src="./public/images/fail.png" class="fas fa-exclamation-circle"></img>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <input id="cp-form" class="form-input" type="text" name="cp" pattern="[0-9]{5,5}$" title="Codigo postal debe de tener 5 caracteres numericos" placeholder="<?php echo $user['cp'];?>">
                <img src="./public/images/correct.png" class="fas fa-check-circle"></img>
                <img src="./public/images/fail.png" class="fas fa-exclamation-circle"></img>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <input id="password-form" class="form-input" type="password" name="password" pattern="^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,15}$" 
                title="La contraseña debe tener al entre 8 y 15 caracteres, al menos un dígito, al menos una minúscula y al menos una mayúscula." placeholder="Contraseña"><br>
                <img src="./public/images/correct.png" class="fas fa-check-circle"></img>
                <img src="./public/images/fail.png" class="fas fa-exclamation-circle"></img>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <input id="password_confirmation-form" class="form-input" type="password" name="password_confirmation" pattern="^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,15}$" 
                title="La contraseña debe tener al entre 8 y 15 caracteres, al menos un dígito, al menos una minúscula y al menos una mayúscula." placeholder="Repetir Contraseña">
                <img src="./public/images/correct.png" class="fas fa-check-circle"></img>
                <img src="./public/images/fail.png" class="fas fa-exclamation-circle"></img>
                <small>Error message</small>
            </div>

            <input class="button btn-modify" type="submit" value="Modificar">
        </form>
    </section>
    <?php
}

?>
<script src="public/js/validation.js"></script>
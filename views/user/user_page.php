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
                <input id="profile_image" type="file" class="form-input" name="profile_image"/>
                <img src="./public/images/correct.png" class="fas fa-check-circle"></img>
                <img src="./public/images/fail.png" class="fas fa-exclamation-circle"></img>
                <small>Error message</small>
            </div>
            <div class="form-control">    
                <input id="name-form" class="form-input" type="text" name="name" placeholder="<?php echo $user['nombre']; ?>">
                <img src="./public/images/correct.png" class="fas fa-check-circle"></img>
                <img src="./public/images/fail.png" class="fas fa-exclamation-circle"></img>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <input id="mail-form" class="form-input" type="mail" name="mail" placeholder="<?php echo $user['email']; ?>">
                <img src="./public/images/correct.png" class="fas fa-check-circle"></img>
                <img src="./public/images/fail.png" class="fas fa-exclamation-circle"></img>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <input id="phone-form" class="form-input" type="text" name="phone" placeholder="<?php echo $phone; ?>">
                <img src="./public/images/correct.png" class="fas fa-check-circle"></img>
                <img src="./public/images/fail.png" class="fas fa-exclamation-circle"></img>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <input id="direction-form" class="form-input" type="text" name="direction" placeholder="<?php echo $user['direccion']; ?>">
                <img src="./public/images/correct.png" class="fas fa-check-circle"></img>
                <img src="./public/images/fail.png" class="fas fa-exclamation-circle"></img>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <input id="poblacion-form" class="form-input" type="text" name="poblacion" placeholder="<?php echo $user['poblacion']; ?>">
                <img src="./public/images/correct.png" class="fas fa-check-circle"></img>
                <img src="./public/images/fail.png" class="fas fa-exclamation-circle"></img>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <input id="cp-form" class="form-input" type="text" name="cp" placeholder="<?php echo $user['cp'];?>">
                <img src="./public/images/correct.png" class="fas fa-check-circle"></img>
                <img src="./public/images/fail.png" class="fas fa-exclamation-circle"></img>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <input id="password-form" class="form-input" type="password" name="password" placeholder="Contraseña"><br>
                <img src="./public/images/correct.png" class="fas fa-check-circle"></img>
                <img src="./public/images/fail.png" class="fas fa-exclamation-circle"></img>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <input id="password_confirmation-form" class="form-input" type="password" name="password_confirmation" placeholder="Repetir Contraseña">
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
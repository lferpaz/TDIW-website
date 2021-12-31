<?php
foreach($users as $user) {
    ?>
    <section class="user_page">
        <div class="user_page_image">
            <img id="user-img-form" src="<?php echo $user['foto']; ?>" alt="<?php echo $user['nombre']; ?>">
        </div>
        <form action="index.php?action=update_user" method="post" enctype="multipart/form-data">
            <input id="profile_image" type="file" class="form-input" name="profile_image"/>
            <input class="form-input" type="text" name="name" placeholder="<?php echo $user['nombre']; ?>"><br>
            <input class="form-input" type="mail" name="mail" placeholder="<?php echo $user['email']; ?>"><br>
            <input class="form-input" type="text" name="phone" placeholder="<?php echo $user['telefono']; ?>"><br>
            <input class="form-input" type="text" name="direction" placeholder="<?php echo $user['direccion']; ?>"><br>
            <input class="form-input" type="text" name="poblacion" placeholder="<?php echo $user['poblacion']; ?>"><br>
            <input class="form-input" type="text" name="cp" placeholder="<?php echo $user['cp'];?>"><br>
            <input class="form-input" type="password" name="password" placeholder="Contraseña"><br>
            <input class="form-input" type="password" name="password_confirmation" placeholder="Repetir Contraseña">

            <input type="submit" value="Modificar">
        </form>
    </section>
    <?php
}

?>
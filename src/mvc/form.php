<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
<?php
/*Coneccion con la Base de datos */
/*----------------------------- */
$servername = "localhost";
$database = "tdiwc10";
$username = "tdiw-c10";
$password = "T8CswzMJ";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("La coneccion ha fallado: " . mysqli_connect_error());
}
echo "Coneccion Exitosa";

/*------Control de errores del formulario----- */
/*------------------------------------------- */
$loginErr = $passwErr = $emailErr  = $nombreErr= $apellidoErr = $tarjetaErr = "";
$login = $passw = $email  = $nombre= $apellido = $tarjeta = "";

//Testing
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
 //Testing the login
 if (empty($_POST["login"])) {
  $loginErr = "Escriba su nombre de usuario";
} else {
  $login = test_input($_POST["login"]);
  if (!preg_match('/^[a-z\d_]{2,20}$/i',$login)) {
    $loginErr = "Nombre de usuario incorrecto";
  }
}
  //Testing the password
  if (empty($_POST["password"])) {
    $passwErr = "Escriba su contraseña";
  } else {
    $passw = test_input($_POST["password"]);
    if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/',$passw)) {
      $passwErr = "Formato de contraseña incorrecta.";
    }
  }

  //Testing the email
  if (empty($_POST["email"])) {
    $emailErr = "El correo es necesario.";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Formato de email invalido.";
    }
  }

  //Testing the name
  if (empty($_POST["nombre"])) {
    $nombreErr = "Ingrese su nombre porfavor";
  } else {
    $nombre = test_input($_POST["nombre"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$nombre)) {
      $nombreErr = "Solo son permitidas letras y espacios en blanco";
    }
  }

  //Testing the surname
  if (empty($_POST["apellidos"])) {
    $apellidoErr = "Ingrese su apellido porfavor";
  } else {
    $apellido = test_input($_POST["apellidos"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$apellido)) {
      $apellidoErr = "Solo son permitidos letras y espacios";
    }
  }

  //Testing the target
  if (empty($_POST["tarjeta"])) {
    $tarjetaErr= "Ingrese su numero de tarjeta";
  } else {
    $tarjeta = test_input($_POST["tarjeta"]);
    if (!preg_match('/^[0-9]*$/',$tarjeta)) {
      $tarjetaErr = "Solo son permitidos valores numericos";
    }
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!-- FORMULARIO DE REGISTRO DE USUARIO  -->
<h2>Alta de nuevo usuario</h2>
<p><span class="error">* Porfavor ingrese los datos</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  login: <input type="text" name="login" value="<?php echo $login;?>">
  <span class="error">* <?php echo $loginErr;?></span>
  <br><br>
  password: <input type="text" name="password" value="<?php echo $passw;?>">
  <span class="error">*<?php echo $passwErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  nombre: <input type="text" name="nombre" value="<?php echo $nombre;?>">
  <span class="error">* <?php echo $nombreErr;?></span>
  <br><br>
  apellidos: <input type="text" name="apellidos" value="<?php echo $apellido;?>">
  <span class="error">* <?php echo $apellidoErr;?></span>
  <br><br>
  Tarjeta de pago: <input type="text" name="tarjeta" value="<?php echo $tarjeta;?>">
  <span class="error">* <?php echo $tarjetaErr;?></span>
  <br><br>

  <input type="submit" name="submit" value="Submit">  
</form>

<?php

echo "<h2>Datos ingresados:</h2>";
echo $login;
echo "<br>";
echo $passw;
echo "<br>";
echo $email;
echo "<br>";
echo $nombre;
echo "<br>";
echo $apellido;
echo "<br>";
echo $tarjeta;

$sql="INSERT INTO `Usuario` (`login`, `password`, `email`,`nombre`,`apellidos`,`num_tarjeta`) 
VALUES ('$login','$passw','$email','$nombre','$apellido','$tarjeta');";

if (mysqli_query($conn, $sql)) { 
  echo "Hemos añadido la informacion a la base de datos"; 
} else { 
  echo "Error, esto es lo que paso: " . $sql . "<br>" . mysqli_error($conn); 
  }

mysqli_close($conn);
?>

</body>
</html>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartPet - Login</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="images/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  </head>

  <body class="registro-body">

    <?php

    require_once 'clases/Validator.php';

    $errorCorreo = "";
    $errorPassword="";
    $correo="";


    if ($_POST) {

      var_dump($_POST);
      $correo = trim($_POST["login-correo"]);
      $password=trim($_POST["login-password"]);

      $validador = new Validator();
      $errorCorreo = $validador->validarMail($correo);
      $errorPassword = $validador->validarPass($password);

    }

    ?>


    <?php  require_once 'header.php'; ?>

    <div class="container-principal">

      <div class="registro-titulos">

        <h1>Ingresa a tu cuenta</h1>
        <h5>No tienes una cuenta? Regístrate en SmartPet <a href="registro.php">aquí</a>!</h5>

      </div>

      <form class="registro-formulario" action="login.php" method="post">

        <div class="registro-container-campos">

          <div class="registro-nombre-y-campo">
            <label for="login-correo" class="registro-nombre">Correo electrónico:</label>
            <div class="registro-campo">
              <input type="text" name="login-correo" <?php if(isset($errorCorreo["errorMail"])){echo 'style="border: solid 2px red"';} ?> value="<?php echo $correo; ?>">
              <?php
                if (isset($errorCorreo["errorMail"])) {
                  echo '<br><span class="registro-error">'.$errorCorreo["errorMail"].'</span>';
                }
              ?>
            </div>
          </div>

          <div class="registro-nombre-y-campo">
            <label for="login-password" class="registro-nombre">Contraseña:</label>
            <div class="registro-campo">
              <input type="password" name="login-password" value="" <?php if(isset($errorPassword["errorPass"])){echo 'style="border: solid 2px red"';} ?> >
              <?php
                if (isset($errorPassword["errorPass"])) {
                  echo '<br><span class="registro-error">'.$errorPassword["errorPass"].'</span>';
                }
              ?>
            </div>
          </div>
          <input type="checkbox" name="" value="">Recordarme


        </div>

        <button class="registro-button" type="submit" name="button">Ingresar</button>

      </form>

    </div>

    <script src="js/header.js"></script>

  </body>
</html>

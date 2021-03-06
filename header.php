<?php

  $usuarioLogueado = false;
  $avatarUsuario = "avatars/avatar-example.png";
  $nombreUsuario = "UserFirstName";

?>

<header>

  <!-- Barra superior DESKTOP // Barra única MOBILE -->

  <nav class="header-superior">

    <a class="link-logo" href="home.php"><img class="logo" src="images/logo-blanco-navbar.png"></a>
    <a class="link-logo-mobile" href="home.php"><img class="logo-mobile" src="images/logo-blanco.png"></a>

    <form class="form-busqueda" action="home.php" method="post">

      <input class="input-busqueda" type="text" name="search" value="" placeholder="¿Qué necesitas?" autofocus>
      <button class="boton-lupa" type="submit" name="button">
        <img class="lupa" src="images/lupa.png" alt="">
      </button>

    </form>

    <p>¿Nuevo en SmartPet? Mira las <a href="preguntasFrecuentes.php">preguntas frecuentes</a></p>

    <!-- Botones de la barra mobile -->

    <div class="area-menu-hamburger">
      <img class="menu-hamburger" src="images/menu-green.png">
      <img class="menu-hamburger-close hidden" src="images/menu-green-close.png">
    </div>

    <!-- Inicio menú mobile -->

    <ul class="menu-mobile hidden">

      <div class="barra-usuario-mobile">
        <?php if ($usuarioLogueado == false) { ?>
          <li class="con-fondo"><a href="login.php">Login</a></li>
          <li class="con-fondo"><a href="registro.php">Registro</a></li>
        <?php } else { ?>
          <li class="usuario-logueado-mobile">
            <img class="avatar-usuario-mobile" src="<?php echo $avatarUsuario ?>" alt="avatar">
            <span class="nombre-usuario"><?php echo $nombreUsuario ?></span>
          </li>
        <?php } ?>
      </div>

      <div class="barra-categorias-mobile">
        <li class="todas-las-categorias-mobile">
          <img class="flecha-izquierda-mobile" src="images/flecha-izquierda-blanca.png" alt="">
          <img class="cruz-mobile hidden" src="images/cruz-blanca.png" alt="">
          <span>Todas las categorías</span>
        </li>
        <ul class="menu-categorias-mobile hidden">
          <li><a href="#">Categoría 1</a></li>
          <li><a href="#">Categoría 2</a></li>
          <li><a href="#">Categoría 3</a></li>
          <li><a href="#">Categoría 4</a></li>
          <li><a href="#">Categoría 5</a></li>
        </ul>

      </div>

      <div class="barra-nav-mobile">
        <li><a href="home.php">Home</a></li>
        <li><a href="#">Mascotas</a></li>
        <li><a href="#">Ofertas</a></li>
        <li><a href="#">Contacto</a></li>
        <li><a href="#">ONG</a></li>
      </div>

      <div class="barra-preguntas-frecuentes-mobile">
        <li><a href="preguntasFrecuentes.php">Preguntas frecuentes</a></li>
      </div>

    </ul>

    <!-- Fin menú mobile -->

    <a class="link-carrito-mobile" href="#"><img class="carrito" src="images/carrito-blanco.png" alt="carrito"></a>

  </nav>

  <!-- Barra inferior DESKTOP // Desaparece en el MOBILE -->

  <nav class="header-inferior">

    <ul class="barra-categorias">
      <li class="todas-las-categorias">
        Todas las categorías
        <img class="flecha-abajo" src="images/flecha-abajo-blanca.png" alt="">
        <img class="cruz hidden" src="images/cruz-blanca.png" alt="">
      </li>
      <ul class="menu-categorias hidden">
        <li><a href="#">Categoría 1</a></li>
        <li><a href="#">Categoría 2</a></li>
        <li><a href="#">Categoría 3</a></li>
        <li><a href="#">Categoría 4</a></li>
        <li><a href="#">Categoría 5</a></li>
      </ul>
    </ul>

    <ul class="barra-nav">
      <li><a href="home.php">Home</a></li>
      <li><a href="#">Mascotas</a></li>
      <li><a href="#">Ofertas</a></li>
      <li><a href="#">Contacto</a></li>
      <li><a href="#">ONG</a></li>
    </ul>

    <ul class="barra-usuario">
      <?php if ($usuarioLogueado == false) { ?>
        <li class="con-fondo"><a href="login.php">Login</a></li>
        <li class="con-fondo"><a href="registro.php">Registro</a></li>
      <?php } else { ?>
        <li class="usuario-logueado">
          <img class="avatar-usuario" src="<?php echo $avatarUsuario ?>" alt="avatar">
          <span class="nombre-usuario"><?php echo $nombreUsuario ?></span>
        </li>
      <?php } ?>

      <a class="link-carrito" href="#"><img class="carrito" src="images/carrito-blanco.png" alt="carrito"></a>

    </ul>

  </nav>

</header>

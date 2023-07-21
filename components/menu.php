<header>
  <div class="container header">
    <!-- Logo -->
    <a class="logo" href="index.php" tabindex="0">
      <img src="assets/images/logo.png" alt="Embanor" class="responsive-image">
    </a>
    <!-- End Logo -->

    <!-- Desktop Menu -->
    <nav>
      <a href="quem-somos.php" tabindex="0">Conheça a Embanor</a>
      <a href="produtos.php" tabindex="0">Produtos</a>
      <a href="servicos.php" tabindex="0">Projetos personalizados</a>
      <a href="contato.php" tabindex="0">Contato</a>
    </nav>
    <!-- End Desktop Menu -->

    <!-- Mobile Menu -->
    <div id="menu-trigger" class="mobile-menu-trigger" onclick="openMobileMenu()">
      <span class="top"></span>
      <span class="middle"></span>
      <span class="bottom"></span>
    </div>

    <div id="mobileMenu" class="mobile-menu">
      <div class="nav-links-wrapper">
        <a href="javascript:void(0)" class="close-menu-button" onclick="closeMobileMenu()">&times;</a>
        <a href="quem-somos.php" onclick="closeMobileMenu()">Conheça a Embanor</a>
        <a href="produtos.php" onclick="closeMobileMenu()">Produtos</a>
        <a href="servicos.php" onclick="closeMobileMenu()">Projetos personalizados</a>
        <a href="contato.php" onclick="closeMobileMenu()">Contato</a>
      </div>
    </div>

    <div class="overlay"></div>
    <!--End Mobile Menu  -->
  </div>
</header>
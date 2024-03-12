<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-NHTBD9J4C1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-NHTBD9J4C1');
  </script>

  <style>
    #page-home #banner {
      background-image: url(<?php the_field('acf_home_banner'); ?>);
    }

    @media (max-width: 768px) {
      #page-home #banner {
        background-image: url(<?php the_field('acf_home_banner_mobile'); ?>);
      }
    }
  </style>



  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
    <div class="container header">
      <!-- Logo -->
      <a class="logo" href="/" tabindex="0">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>" alt="Embanor" class="responsive-image">
      </a>
      <!-- End Logo -->

      <!-- Desktop Menu -->
      <nav>
        <a href="quem-somos" tabindex="0">Conheça a Embanor</a>
        <a href="produtos" tabindex="0">Produtos</a>
        <a href="servicos" tabindex="0">Projetos Personalizados</a>
        <a href="contato" tabindex="0">Contato</a>
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
          <div class="close-menu-button" onclick="closeMobileMenu()">&times;</div>
          <a href="quem-somos" onclick="closeMobileMenu()">Conheça a Embanor</a>
          <a href="produtos" onclick="closeMobileMenu()">Produtos</a>
          <a href="servicos" onclick="closeMobileMenu()">Projetos personalizados</a>
          <a href="contato" onclick="closeMobileMenu()">Contato</a>
        </div>
      </div>

      <div class="overlay"></div>
      <!--End Mobile Menu  -->
    </div>
  </header>
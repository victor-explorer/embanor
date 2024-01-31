<?php

/**
 * Template Name: Quem Somos
 */
?>
<?php get_header(); ?>

<main id="page-whoWeAre">
  <!-- Section - Banner -->
  <?php if (get_field('acf_quemsomos_banner')) : ?>
    <section class="page-banner" style="background-image: url('<?php the_field('acf_quemsomos_banner'); ?>');">
    <?php else : ?>
      <section class="page-banner">
      <?php endif; ?>
      <div class="container">
        <?php if (get_field('acf_quemsomos_h1')) : ?>
          <h1 class="banner-heading">
            <?php the_field('acf_quemsomos_h1'); ?>
          </h1>
        <?php endif; ?>

        <p class="section-heading--after text-white">
          <?php the_field('acf_quemsomos_descricao'); ?>
        </p>
      </div>
      </section>
      <!-- End Section - Banner -->

      <!-- Section - Hero Image Left-->
      <section>
        <div class="container-fluid">
          <div class="row hero-wrapper">
            <div class="col-lg hero-image">
              <img src="<?php the_field('acf_quemsomos_historia_imagem') ?>" alt="Imagem">
            </div>

            <div class="col-lg p-lg-0">
              <div class="wrapper hero-content">
                <h2 class="section-heading"><?php the_field('acf_quemsomos_historia_titulo') ?></h2>
                <p>
                  <?php the_field('acf_quemsomos_historia_texto') ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Section - Hero Image Left-->

      <!-- Section - Hero Image Right-->
      <section>
        <div class="container-fluid">
          <div class="row hero-wrapper">
            <div class="col-lg hero-image order-lg-last">
              <img src="<?php the_field('acf_quemsomos_estrutura_imagem') ?>" alt="Imagem">
            </div>
            <div class="col-lg p-lg-0">
              <div class="wrapper hero-content">
                <h2 class="section-heading"><?php the_field('acf_quemsomos_estrutura_titulo') ?></h2>
                <p>
                  <?php the_field('acf_quemsomos_estrutura_texto') ?>
                </p>
              </div>
            </div>
          </div>
        </div>

      </section>
      <!-- End Section - Hero Image Right-->

      <!-- Section - Hero Image Left-->
      <section class="">
        <div class="container-fluid">
          <div class="row hero-wrapper">
            <div class="col-lg hero-image">
              <img src="<?php the_field('acf_quemsomos_logistica_imagem') ?>" alt="Imagem">
            </div>
            <div class="col-lg p-lg-0">
              <div class="wrapper hero-content">
                <h2 class="section-heading"><?php the_field('acf_quemsomos_logistica_titulo') ?></h2>
                <p>
                  <?php the_field('acf_quemsomos_logistica_texto') ?>
                </p>
              </div>
            </div>

          </div>
        </div>
      </section>
      <!-- End Section - Hero Image Left-->

      <!-- Section - Diferenciais -->
      <section class="wrapper" style="background-image: url('assets/images/section4-whoWeAre.webp');">
        <div class="container">
          <div class="text-center">
            <h3 class="section-heading"><?php the_field('acf_quemsomos_h3'); ?></h3>
          </div>

          <div class="row wrapper gap-3">
            <div class="col-lg">
              <div class="topic--horizontal bg-primary-embanor">
                <div class="topic-icon">
                  <img src="<?php the_field('acf_quemsomos_diferencial1_imagem'); ?>" alt="Icon">
                </div>

                <div class="topic-content">
                  <p><?php the_field('acf_quemsomos_diferencial1_texto'); ?></p>
                </div>
              </div>
            </div>

            <div class="col-lg">
              <div class="topic--horizontal">
                <div class="topic-icon">
                  <img src="<?php the_field('acf_quemsomos_diferencial2_imagem'); ?>" alt="Icon">
                </div>

                <div class="topic-content">
                  <p><?php the_field('acf_quemsomos_diferencial2_texto'); ?></p>
                </div>
              </div>
            </div>
          </div>

          <div class="d-flex justify-content-center">
            <a href="/contato" role="button" class="embanor-button">
              Fale conosco
            </a>
          </div>
      </section>
      <!-- End Section - Diferenciais -->

      <!-- Section - Meio Ambiente -->
      <section class="wrapper">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg px-0 px-lg-3">
              <div>
                <img src="<?php the_field('acf_quemsomos_imagem_meioambiente'); ?>" alt="Imagem" class="responsive-image">
              </div>
            </div>
            <div class="col-lg mt-3 mt-lg-0">
              <div class="">
                <h4 class="section-heading"><?php the_field('acf_quemsomos_titulo_meioambiente'); ?></h4>
                <p>
                  <?php the_field('acf_quemsomos_texto_meioambiente'); ?>
                </p>
              </div>
            </div>
          </div>

        </div>
      </section>
      <!-- End Section - Meio Ambiente -->

      <!-- Section - Contato  -->
      <section class="wrapper contact">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg text-center text-lg-start">
              <h4 class="section-heading--dark text-uppercase"><?php the_field('acf_quemsomos_titulo_contato'); ?></h4>
              <p>
                <?php the_field('acf_quemsomos_apoio_contato'); ?>
              </p>

              <nav class="list-nav mb-5 mb-lg-0">
                <a href="mailto:embanor@embanor.com.br" class="list-nav-item--dark">
                  <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/mail.svg'; ?>" alt="Mail">
                  embanor@embanor.com.br
                </a>

                <a href="https://api.whatsapp.com/send?phone=5511950871883" target="_blank" class="list-nav-item--dark">
                  <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/whatsapp.svg'; ?>" alt="Wpp">
                  +55 11 95087-1883
                </a>

                <a href="tel:+551140288822" class="list-nav-item--dark">
                  <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/tel.svg'; ?>" alt="Tel">
                  11 4028 8822
                </a>
              </nav>
            </div>

            <div class="col-lg">
              <?php echo do_shortcode('[contact-form-7 id="9cce90f" title="Formulário de contato"]') ?>
            </div>
          </div>

        </div>
      </section>
      <!-- End Section - Contato -->
</main>

<?php get_footer(); ?>
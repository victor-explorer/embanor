<?php

/**
 * Template Name: Contato
 */
?>
<?php get_header();
?>

<main id="page-contact">
  <!-- Section - Banner -->
  <?php if (get_field('acf_contato_banner')) : ?>
    <section class="page-banner" style="background-image: url('<?php the_field('acf_contato_banner'); ?>');">
    <?php else : ?>
      <section class="page-banner">
      <?php endif; ?>

      <div class="container">
        <?php if (get_field('acf_contato_h1')) : ?>
          <h1 class="banner-heading">
            <?php the_field('acf_contato_h1'); ?>
          </h1>
        <?php endif; ?>
      </div>
      </section>
      <!-- End Section - Banner -->

      <!-- Section - Introduction -->
      <section class="wrapper d-flex justify-content-center">
        <div class="container text-center">
          <?php if (get_field('acf_contato_h2')) : ?>
            <h2 class="section-heading">
              <span><?php the_field('acf_contato_h2'); ?></span>
            </h2>
          <?php endif; ?>

          <p>
            <?php the_field('acf_contato_apoio'); ?>
          </p>
        </div>
      </section>
      <!-- End Section - Introduction -->

      <!-- Section - Localização  -->
      <section>
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-lg">
              <div class="offset-lg-2 text-center text-lg-start py-5 py-lg-0">
                <?php if (get_field('acf_contato_tituloEndereco')) : ?>
                  <h3 class="section-heading text-uppercase">
                    <span><?php the_field('acf_contato_tituloEndereco'); ?></span>
                  </h3>
                <?php endif; ?>
                <p><?php the_field('acf_contato_endereco'); ?></p>
              </div>
            </div>

            <div class="col-lg maps">
              <iframe src="<?php the_field('acf_contato_urlMaps'); ?>" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </section>
      <!-- End Section - Localização -->

      <!-- Section - Contato  -->
      <section class="wrapper contact">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg text-center text-lg-start mb-3">
              <?php if (get_field('acf_contato_tituloForm')) : ?>
                <h4><?php the_field('acf_contato_tituloForm'); ?></h4>
              <?php endif; ?>
              <p><?php the_field('acf_contato_apoioForm'); ?></p>
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
<?php

/**
 * Template Name: Serviços
 */
?>
<?php get_header(); ?>

<main id="page-services">
  <!-- Section - Banner -->
  <?php if (get_field('acf_servicos_banner')) : ?>
    <section class="page-banner" style="background-image: url('<?php the_field('acf_servicos_banner'); ?>');">
    <?php else : ?>
      <section class="page-banner">
      <?php endif; ?>
      <div class="container">
        <?php if (get_field('acf_servicos_h1')) : ?>
          <h1 class="banner-heading">
            <?php the_field('acf_servicos_h1'); ?>
          </h1>
        <?php endif; ?>

        <p class="section-heading--after text-white">
          <?php the_field('acf_servicos_descricao'); ?>
        </p>
      </div>
      </section>
      <!-- End Section - Banner -->

      <!-- Section - Tópicos -->
      <section class="wrapper">
        <div class="container">

          <div class="text-center">
            <p>
              <?php the_field('acf_servicos_apoio'); ?>
            </p>
          </div>

          <?php if (have_rows('acf_servicos_loop')) : ?>
            <div class="wrapper carousel-topics row">
              <?php while (have_rows('acf_servicos_loop')) : the_row(); ?>
                <!-- Cards 6 -->
                <div class="col">
                  <div class="topic--horizontal-w-bg">
                    <div class="topic-icon">
                      <img src="<?php the_sub_field('acf_servicos_loop_imagem') ?>" alt="Icon">
                    </div>

                    <div class="topic-title">
                      <span>
                        <?php the_sub_field('acf_servicos_loop_titulo'); ?>
                      </span>
                    </div>

                    <div class="topic-content">
                      <p>
                        <?php the_sub_field('acf_servicos_loop_texto'); ?>
                      </p>
                    </div>
                  </div>
                </div>
                <!-- End Cards -->
              <?php endwhile; ?>
            </div>
          <?php endif; ?>

          <div class="d-flex justify-content-center mt-5">
            <a href="/contato" role="button" class="embanor-button">
              SOLICITE UM ORÇAMENTO
            </a>
          </div>
        </div>
      </section>
      <!-- End Section - Tópicos -->

      <!-- Section - Serviços -->
      <section class="bg-primary-embanor">
        <div class="container-fluid">
          <div class="row hero-wrapper">
            <div class="col-lg hero-image">
              <img src="<?php the_field('acf_servicos_imagem'); ?>" alt="Imagem">
            </div>

            <div class="col-lg wrapper">
              <div class="hero-content">

                <?php if (get_field('acf_servicos_h2')) : ?>
                  <h2 class="section-heading">
                    <?php the_field('acf_servicos_h2'); ?>
                  </h2>
                <?php endif; ?>

                <p><?php the_field('acf_servicos_apoioH2'); ?></p>

                <div>
                  <?php if (have_rows('acf_servicos_lista')) : ?>

                    <ul class="embanor-list">
                      <?php while (have_rows('acf_servicos_lista')) : the_row(); ?>
                        <li><?php the_sub_field('acf_servicos_itemLista'); ?></li>
                      <?php endwhile; ?>
                    </ul>

                  <?php endif; ?>
                </div>
              </div>


            </div>
          </div>
        </div>

      </section>
      <!-- End Section - Serviços -->

      <!-- Section - Call to action -->
      <section class="wrapper call-to-action waves">
        <div class="container">
          <div class="d-flex flex-column gap-3">
            <h3 class="section-heading--dark"><?php the_field('acf_servicos_h3'); ?></h3>
            <div>
              <a href="/contato" role="button" class="embanor-button">
                Fale conosco
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- End Section - Call to action -->
</main>

<?php get_footer(); ?>
<?php

/**
 * Template Name: Produtos
 */
?>
<?php get_header(); ?>

<main id="page-products">
  <!-- Section - Banner -->
  <?php if (get_field('acf_produtos_banner')) : ?>
    <section class="page-banner" style="background-image: url('<?php the_field('acf_produtos_banner'); ?>');">
    <?php else : ?>
      <section class="page-banner">
      <?php endif; ?>
      <div class="container">
        <?php if (get_field('acf_produtos_h1')) : ?>
          <h1 class="banner-heading">
            <?php the_field('acf_produtos_h1'); ?>
          </h1>
        <?php endif; ?>

        <p class="section-heading--after text-white">
          <?php the_field('acf_produtos_descricao'); ?>
        </p>
      </div>
      </section>
      <!-- End Section - Banner -->

      <!-- Section - Introduction -->
      <section class="container-fluid">
        <div class="row hero-wrapper">
          <div class="col-lg order-last hero-image">
            <img src="<?php the_field('acf_produtos_imagem'); ?>" alt="Imagem">
          </div>

          <div class="col-lg wrapper">
            <div class="hero-content">
              <div class="section-heading--small">
                <?php the_field('acf_produtos_apoio'); ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Section - Introduction -->

      <!-- Section - Produtos -->
      <section class="wrapper bg-primary-embanor">
        <div class="container">
          <div class="text-center">
            <h2 class="section-heading"><?php the_field('acf_produtos_h2'); ?></h2>
            <p class="text-white">
              <?php the_field('acf_produtos_apoioH2'); ?>
            </p>
          </div>

          <!-- Cards -->
          <?php if (have_rows('acf_produtos_loop')) : ?>
            <div class="carousel-products-slick cards-product row justify-content-center">
              <?php while (have_rows('acf_produtos_loop')) : the_row(); ?>

                <div class="col">
                  <div class="card-product">
                    <div class="card-product-title">
                      <h3>
                        <?php the_sub_field('acf_produtos_loop_titulo'); ?>
                      </h3>
                    </div>
                    <div class="card-product-img">
                      <img src="<?php the_sub_field('acf_produtos_loop_imagem'); ?>" alt="Imagem produto">
                    </div>
                    <div class="card-product-content">
                      <p>
                        <?php the_sub_field('acf_produtos_loop_texto'); ?>
                      </p>
                    </div>
                  </div>
                </div>
              <?php endwhile; ?>
            </div>
          <?php endif; ?>

          <!-- End Cards -->

          <div class="d-flex justify-content-center mt-5">
            <a href="/contato" role="button" class="embanor-button">
              Solicite um orçamento
            </a>
          </div>
        </div>
      </section>
      <!-- End Section - Produtos -->

      <!-- Section - Projetos especiais -->
      <section class="wrapper">
        <div class="container">
          <h3 class="section-heading text-center">
            <?php the_field('acf_servicos_h3'); ?>
          </h3>

          <div class="row gap-lg-3 flex-column flex-lg-row">
            <div class="col bg-primary-embanor card-project">
              <div class="card-project-image">
                <img src="<?php the_field('acf_servicos_projeto01_imagem'); ?>" alt="Imagem">
              </div>
              <div class="card-project-content">
                <p><?php the_field('acf_servicos_projeto01_texto'); ?></p>
              </div>
            </div>

            <div class="col card-project ">
              <div class="card-project-image">
                <img src="<?php the_field('acf_servicos_projeto02_imagem'); ?>" alt="Imagem">
              </div>
              <div class="card-project-content">
                <p><?php the_field('acf_servicos_projeto02_texto'); ?></p>
              </div>
            </div>

            <div class="col bg-primary-embanor card-project">
              <div class="card-project-image">
                <img src="<?php the_field('acf_servicos_projeto03_imagem'); ?>" alt="Imagem">
              </div>
              <div class="card-project-content">
                <p><?php the_field('acf_servicos_projeto03_texto'); ?></p>
              </div>
            </div>
          </div>
        </div>

      </section>
      <!-- End Section - Projetos especiais -->

      <!-- Section - Tópicos -->
      <?php if (get_field('acf_produtos_banner_topicos')) : ?>
        <section class="wrapper" style="background-image: url('<?php the_field('acf_produtos_banner_topicos'); ?>')">
        <?php else : ?>
          <section class="wrapper" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/section4-products.webp'; ?>')">
          <?php endif; ?>

          <div class="container">
            <?php if (have_rows('acf_produtos_loop_topicos')) : ?>

              <div class="carousel-topics row">
                <?php while (have_rows('acf_produtos_loop_topicos')) : the_row(); ?>

                  <div class="col">
                    <div class="topic--horizontal bg-white text-black">
                      <div class="topic-icon">
                        <img src="<?php the_sub_field('acf_produtos_loop_topicos_imagem'); ?>" alt="Icon">
                      </div>
                      <div class="topic-content">
                        <p><?php the_sub_field('acf_produtos_loop_topicos_texto'); ?></p>
                      </div>
                    </div>
                  </div>

                <?php endwhile; ?>

                <!-- <div class="col">
              <div class="topic--horizontal bg-primary-embanor">
                <div class="topic-icon">
                  <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/products/icon-2.svg'; ?>" alt="Icon">
                </div>
                <div class="topic-content">
                  <p>Plotagem de protótipos para ensaios físicos, análise do cliente e análise de projeto.</p>
                </div>
              </div>
            </div> -->
              </div>

            <?php endif; ?>
          </div>
          </section>
          <!-- End Section - Tópicos -->
</main>

<?php get_footer(); ?>
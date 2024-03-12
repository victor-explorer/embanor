<?php get_header(); ?>

<main id="page-home">
  <!-- Section - Banner Home -->
  <section id="banner">
    <div class="container">
      <div class="banner-content">
        <?php if (get_field('acf_home_h1')) : ?>
          <h1 class="home-banner-heading">
            <?php the_field('acf_home_h1'); ?>
          </h1>
        <?php endif; ?>
        <a href="/produtos" role="button" class="embanor-button" class="embanor-button">
          Saiba mais
        </a>
      </div>
    </div>
  </section>
  <!-- End Section - Banner Home -->

  <!-- Section - Quem somos -->
  <section class="container wrapper">
    <div class="row hero-wrapper align-items-lg-center">
      <div class="col-lg order-last hero-image mt-5 mt-lg-0">
        <div class="video-container">
          <iframe class="video" src="<?php the_field('acf_home_video'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope;" allowfullscreen></iframe>
        </div>
      </div>

      <div class="col-lg-6 d-flex align-items-center">
        <div class="hero-content" id="intro">
          <h2 class="section-heading">
            <?php the_field('acf_home_h2'); ?>
          </h2>
          <p>
            <?php the_field('acf_home_apoioH2'); ?>
          </p>
          <div class="d-flex justify-content-center justify-content-lg-start mt-lg-5 mb-3 mb-lg-0">
            <a href="/contato" role="button" class="embanor-button">
              Fale conosco
            </a>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- End Section - Quem somos -->

  <!-- Section - Tópicos  -->
  <section class="container-fluid">
    <div class="row">
      <div class="topic bg-primary-embanor col-lg">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/esquadro.svg'; ?>" alt="Icon">
        <span>Projetos sob medida</span>
      </div>

      <div class="topic col-lg">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/caixas.svg'; ?>" alt="Icon">
        <span>Portfólio variado</span>
      </div>

      <div class="topic bg-primary-embanor col-lg">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/fsc.svg'; ?>" alt="Icon">
        <span>Empresa certificada FSC</span>
      </div>

      <div class="topic col-lg">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/iso.svg'; ?>" alt="Icon">
        <span>Empresa certificada ISO</span>
      </div>
    </div>
  </section>
  <!-- End Section - Tópicos  -->

  <!-- Section - Produtos -->
  <section id="products" class="waves">
    <div class="mb-5 mb-lg-0 px-lg-0 px-3">
      <h3 class="section-heading--center"><?php the_field('acf_home_h3'); ?></h3>
      <p class="text-center text-white">
        <?php the_field('acf_home_apoioH3'); ?>
      </p>
    </div>

    <!-- Carrossel no mobile e lista de cards no desktop  -->
    <div class="container-fluid">
      <?php if (have_rows('acf_home_loop')) : ?>
        <div class="carousel-products cards-product row g-3">

          <?php while (have_rows('acf_home_loop')) : the_row(); ?>

            <div class="col">
              <div class="card-product">
                <div class="card-product-title">
                  <h4><?php the_sub_field('acf_home_loop_titulo'); ?></h4>
                </div>
                <div class="card-product-img">
                  <img src="<?php the_sub_field('acf_home_loop_imagem'); ?>" alt="Imagem produto">
                </div>
                <div class="card-product-cta">
                  <a href="/produtos" role="button" class="embanor-button--black">
                    Saiba mais
                  </a>
                </div>
              </div>
            </div>

          <?php endwhile; ?>

        </div>
      <?php endif; ?>

      <!-- End Carrossel no mobile e lista de cards no desktop  -->

      <div class="d-flex justify-content-center">
        <a href="/contato" role="button" class="embanor-button">
          Solicite um orçamento
        </a>
      </div>
    </div>
  </section>
  <!-- End Section - Produtos -->

  <!-- Section - Serviços -->
  <section class="container-fluid">
    <div class="row hero-wrapper">

      <div class="col-lg-6 order-last order-lg-first hero-image">
        <?php if (have_rows('acf_home_loop_projetos')) : ?>
          <div class="carousel-pictures">

            <?php while (have_rows('acf_home_loop_projetos')) : the_row(); ?>

              <div>
                <img src="<?php the_sub_field('acf_home_loop_projetos_imagem'); ?>" alt="Imagem" class="responsive-image">
              </div>

            <?php endwhile; ?>
          </div>
        <?php endif; ?>
      </div>

      <div class="col-lg d-flex align-items-center">
        <div class="hero-content">
          <h3 class="section-heading ">
            <?php the_field('acf_home_tituloS04'); ?>
          </h3>
          <p>
            <?php the_field('acf_home_apoioS04'); ?>
          </p>

          <div>
            <?php if (have_rows('acf_home_lista_projetos')) : ?>
              <ul class="embanor-list">
                <?php while (have_rows('acf_home_lista_projetos')) : the_row(); ?>
                  <li><?php the_sub_field('acf_home_lista_projetos_item'); ?></li>
                <?php endwhile; ?>
              </ul>
            <?php endif; ?>
          </div>

          <div class="d-flex justify-content-center my-5">
            <a href="/servicos" role="button" class="embanor-button text-center">
              Quero um projeto personalizado
            </a>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- End Section - Serviços -->

  <!-- Section - Responsabilidade ambiental -->
  <section class="wrapper bg-gray">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg text-center text-lg-start">
          <h3 class="section-heading">
            <?php the_field('acf_home_tituloS05'); ?>
          </h3>
          <p>
            <?php the_field('acf_home_apoioS05'); ?>
          </p>

          <div>
            <?php if (have_rows('acf_home_lista_meioAmbiente')) : ?>
              <ul class="embanor-list">
                <?php while (have_rows('acf_home_lista_meioAmbiente')) : the_row(); ?>
                  <li><?php the_sub_field('acf_home_lista_meioAmbiente_item'); ?></li>
                <?php endwhile; ?>
              </ul>
            <?php endif; ?>
          </div>

        </div>

        <div class="col-lg">
          <img src="<?php the_field('acf_home_imagem_meioAmbiente'); ?>" alt="Imagem" class="responsive-image">
        </div>
      </div>
    </div>
  </section>
  <!-- End Section - Responsabilidade ambiental -->

  <!-- Section - Contato  -->
  <section class="wrapper contact">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg text-center text-lg-start">
          <h4 class="section-heading--dark text-uppercase">
            <?php the_field('acf_home_tituloContato'); ?>
          </h4>
          <p>
            <?php the_field('acf_home_apoioContato'); ?>
          </p>

          <nav class="list-nav mb-5 mb-lg-0">
            <a href="mailto:embanor@embanor.com.br" class="list-nav-item--dark">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/mail.svg'; ?>" alt="Mail">
              embanor@embanor.com.br
            </a>

            <a href="https://api.whatsapp.com/send?phone=5511950871883" target="_blank" class="list-nav-item--dark">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/whatsapp.svg'; ?>" alt="WhatsApp">
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

  <!-- Section - Localização -->
  <section class="bg-gray">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-lg">
          <div class="offset-lg-2 text-center text-lg-start py-5 py-lg-0">
            <h4 class="section-heading text-uppercase"><?php the_field('acf_home_tituloEndereco'); ?></h4>
            <p><?php the_field('acf_home_endereco'); ?></p>
          </div>
        </div>

        <div class="col-lg maps">
          <iframe src="<?php the_field('acf_home_urlMaps'); ?>" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </section>
  <!--End Section - Localização -->
</main>

<?php get_footer(); ?>
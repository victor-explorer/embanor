<?php get_header(); ?>

<main id="page-home">
  <!-- Section - Banner Home -->
  <section id="banner">
    <div class="container">
      <div class="banner-content">
        <h1 class="home-banner-heading">
          Certeza de
          qualidade,
          <span>garantia de
            boa entrega.</span>
        </h1>
        <a href="/produtos" role="button" class="embanor-button" class="embanor-button">
          Saiba mais
        </a>
      </div>
    </div>
  </section>
  <!-- End Section - Banner Home -->

  <!-- Section - Quem somos -->
  <section class="container-fluid">
    <div class="row hero-wrapper">
      <div class="col-lg order-last hero-image">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/section1-home.webp'; ?>" alt="Imagem">
      </div>

      <div class="col-lg d-flex align-items-center">
        <div class="hero-content">
          <h2 class="section-heading">
            Há mais de 40 anos <span>entregando qualidade em embalagens de papelão ondulado</span>
          </h2>
          <p>
            Atuamos desde 1979 com a fabricação de caixas e acessórios de papelão ondulado, investindo constantemente no aprimoramento e inovação de processos e materiais. <br><br>
            Contamos com uma estrutura de mais de 6.500 m² em terreno de 30.000 m², em uma região logisticamente privilegiada pelo acesso fácil a diversas rodovias.<br><br>
            Com equipe especializada, projetos personalizados e certificados de qualidade em cada processo, buscamos sempre garantir a integridade dos produtos de nossos clientes e o melhor custo-benefício.
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
      <h3 class="section-heading--center">Conheça nossos produtos</h3>
      <p class="text-center text-white">O melhor em embalagens de papelão ondulado para manter intacta
        a qualidade de seu produto, do transporte à entrega.</p>
    </div>

    <!-- Carrossel no mobile e lista de cards no desktop  -->
    <div class="container-fluid">
      <div class="carousel-products cards-product row g-3">

        <div class="col">
          <div class="card-product">
            <div class="card-product-title">
              <h4>Paletes de papelão</h4>
            </div>
            <div class="card-product-img">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/products/product-1.webp'; ?>" alt="Imagem produto">
            </div>
            <div class="card-product-cta">
              <a href="/produtos" role="button" class="embanor-button--black">
                Saiba mais
              </a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card-product">
            <div class="card-product-title">
              <h4>Caixas oitavadas</h4>
            </div>
            <div class="card-product-img">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/products/product-2.webp'; ?>" alt="Imagem produto">
            </div>
            <div class="card-product-cta">
              <a href="/produtos" role="button" class="embanor-button--black">
                Saiba mais
              </a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card-product">
            <div class="card-product-title">
              <h4>Caixas e acessórios</h4>
            </div>
            <div class="card-product-img">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/products/product-3.webp'; ?>" alt="Imagem produto">
            </div>
            <div class="card-product-cta">
              <a href="/produtos" role="button" class="embanor-button--black">
                Saiba mais
              </a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card-product">
            <div class="card-product-title">
              <h4>Caixas palete</h4>
            </div>
            <div class="card-product-img">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/products/product-4.webp'; ?>" alt="Imagem produto">
            </div>
            <div class="card-product-cta">
              <a href="/produtos" role="button" class="embanor-button--black">
                Saiba mais
              </a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card-product">
            <div class="card-product-title">
              <h4>Caixas para exportação</h4>
            </div>
            <div class="card-product-img">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/products/product-5.webp'; ?>" alt="Imagem produto">
            </div>
            <div class="card-product-cta">
              <a href="/produtos" role="button" class="embanor-button--black">
                Saiba mais
              </a>
            </div>
          </div>
        </div>


      </div>

      <!-- End Carrossel no mobile e lista de cards no desktop  -->

      <div class="d-flex justify-content-center">
        <a href="/contato" role="button" class="embanor-button">
          Solicite um orçamento
        </a>
      </div>
  </section>
  <!-- End Section - Produtos -->

  <!-- Section - Serviços -->
  <section class="container-fluid">
    <div class="row hero-wrapper">

      <div class="col-lg order-last order-lg-first hero-image">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/section4-home.webp'; ?>" alt="Imagem" class="responsive-image">
      </div>

      <div class="col-lg d-flex align-items-center">
        <div class="hero-content">
          <h3 class="section-heading ">
            Do seu jeito, <span>para
              transportar o que quiser</span>
          </h3>
          <p>
            Realizamos projetos personalizados de embalagens em
            papelão ondulado para cada cliente poder embalar, armazenar, transportar ou entregar o que for necessário da melhor forma possível
          </p>

          <div>
            <ul class="embanor-list">
              <li>Projeto elaborado após estudos de especificações</li>
              <li>Visita técnica para avaliação da demanda no detalhe</li>
              <li>Plotagem de protótipos para ensaios físicos e análise</li>
              <li>Estudos de reengenharia e ferramentas para reduzir custo</li>
              <li>Suporte técnico full time com relatórios e auditoria</li>
            </ul>
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
            <span>O respeito ao meio ambiente</span>
            é feito de atenção aos detalhes
          </h3>
          <p>
            Somos uma empresa detentora do selo FSC – Forest Stewardship Council, o que atesta nossa atuação com responsabilidade ambiental em cada detalhe de nossos processos.
          </p>

          <div>
            <ul class="embanor-list">
              <li>Matéria-prima de reflorestamento</li>
              <li>Estação de Tratamento de Efluentes própria na empresa</li>
              <li>Coleta seletiva de lixo em todas as dependências da empresa</li>
            </ul>
          </div>

        </div>

        <div class="col-lg">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/section5-home.webp'; ?>" alt="Imagem" class="responsive-image">
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
          <h4 class="section-heading--dark text-uppercase"><span> Fale com <br> a Embanor</span></h4>
          <p>
            Entre em contato e saiba como levar as melhores embalagens de papelão ondulado ao seu negócio:
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
            <h4 class="section-heading text-uppercase"><span>Onde estamos</span></h4>
            <p>Estrada Jurumirim, 506 <br> Bairro Canjica - Salto-SP</p>
          </div>
        </div>

        <div class="col-lg maps">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14665.92822765914!2d-47.2972175!3d-23.225539!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf51d963310dbb%3A0xe7a5be68899d8a7f!2sEmbanor%20Embalagens!5e0!3m2!1spt-BR!2sbr!4v1689279575362!5m2!1spt-BR!2sbr" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </section>
  <!--End Section - Localização -->
</main>

<?php get_footer(); ?>
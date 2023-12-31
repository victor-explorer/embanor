<?php

/**
 * Template Name: Serviços
 */
?>
<?php get_header(); ?>

<main id="page-services">
  <!-- Section - Banner -->
  <section class="page-banner">
    <div class="container">
      <h1 class="banner-heading">Para transportar melhor o que você precisa</h1>
      <p class="section-heading--after text-white">Conte com projetos personalizados em embalagens de papelão ondulado que atendam exatamente a sua necessidade.</p>
    </div>
  </section>
  <!-- End Section - Banner -->

  <!-- Section - Tópicos -->
  <section class="wrapper">
    <div class="container">

      <div class="text-center">
        <p>Realizamos projetos específicos para cada segmento ou ramo de atuação, para que o cliente possa embalar, armazenar, transportar e entregar o que for necessário, independentemente de qual seja a demanda, e sempre da melhor forma possível.</p>
      </div>

      <div class="wrapper carousel-topics row">
        <!-- Cards 6 -->
        <div class="col">
          <div class="topic--horizontal-w-bg">
            <div class="topic-icon">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/services/topic-1.svg'; ?>" alt="Icon">
            </div>

            <div class="topic-title">
              <span>
                PROJETOS SOB MEDIDA
              </span>
            </div>

            <div class="topic-content">
              <p>Elaborados através de estudos e especificações do produto, para criar soluções inteligentes mediante análise crítica e laboratorial, em prol da melhor logística, movimentação e armazenagem.</p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="topic--horizontal-w-bg">
            <div class="topic-icon">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/services/topic-2.svg'; ?>" alt="Icon">
            </div>

            <div class="topic-title">
              <span>
                ATENDIMENTO IN LOCO
              </span>
            </div>

            <div class="topic-content">
              <p>Elaborados através de estudos e especificações do produto, para criar soluções inteligentes mediante análise crítica e laboratorial, em prol da melhor logística, movimentação e armazenagem.</p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="topic--horizontal-w-bg">
            <div class="topic-icon">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/services/topic-3.svg'; ?>" alt="Icon">
            </div>

            <div class="topic-title">
              <span>
                AMOSTRAS PERSONALIZADAS
              </span>
            </div>

            <div class="topic-content">
              <p>Plotagem de protótipos para ensaios físicos, análise do cliente e análise de projeto.</p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="topic--horizontal-w-bg">
            <div class="topic-icon">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/services/topic-4.svg'; ?>" alt="Icon">
            </div>

            <div class="topic-title">
              <span>
                ESTUDO DE REENGENHARIA
              </span>
            </div>

            <div class="topic-content">
              <p>Análise do processo de produção da embalagem reduzindo Custos através de estudos para reengenharia, definição do ferramental ideal e otimização do processo.</p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="topic--horizontal-w-bg">
            <div class="topic-icon">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/services/topic-5.svg'; ?>" alt="Icon">
            </div>

            <div class="topic-title">
              <span>
                SUPORTE COMPLETO
              </span>
            </div>

            <div class="topic-content">
              <p>Suporte Técnico full time para Clientes, mediante elaboração de Relatórios Técnicos, Procedimentos e Auditorias.</p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="topic--horizontal-w-bg">
            <div class="topic-icon">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/services/topic-6.svg'; ?>" alt="Icon">
            </div>

            <div class="topic-title">
              <span>
                TREINAMENTOS ESPECIAIS
              </span>
            </div>

            <div class="topic-content">
              <p>Elaboração de Treinamentos como Armazenagem e Movimentação de Embalagens, Estufamento de Container e Truck, Manuais de Montagem de Embalagens, entre outros.</p>
            </div>
          </div>
        </div>
        <!-- End Cards -->
      </div>

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
          <img src="<?php echo get_template_directory_uri() . '/assets/images/section2-services.webp'; ?>" alt="Imagem">
        </div>

        <div class="col-lg wrapper">
          <div class="hero-content">
            <h2 class="section-heading">
              <span>Serviços</span>
              <br>
              <span class="text-white">Tudo pensado para te atender melhor</span>
            </h2>

            <p>Oferecemos serviços diversos para cada tipo de cliente, cada demanda e cada solicitação. </p>

            <div>
              <ul class="embanor-list">
                <li>Sistema de fornecimento programado</li>
                <li>Treinamentos de movimentação e armazenagem</li>
                <li>Reengenharia de embalagens</li>
                <li>Estudo para substituição de rack’s metálicos e embalagens de madeira por papelão ondulado</li>
                <li>Suporte técnico ao cliente através de visitas de desenvolvimento, manutenção preventiva e qualidade</li>
              </ul>
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
        <h3 class="section-heading--dark">Estamos sempre a postos para atender sua <span>necessidade, em cada etapa do processo de compra</span></h3>
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
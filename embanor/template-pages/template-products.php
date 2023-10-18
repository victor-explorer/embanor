<?php

/**
 * Template Name: Produtos
 */
?>
<?php get_header(); ?>

<main id="page-products">
  <!-- Section - Banner -->
  <section class="page-banner">
    <div class="container">
      <h1 class="banner-heading">A solução em embalagens de papelão que sua empresa precisa está aqui.</h1>
      <p class="section-heading--after text-white">Trabalhamos com matéria-prima de qualidade, primando pelo custo x benefício e atendendo cada cliente de acordo com sua necessidade.</p>
    </div>
  </section>
  <!-- End Section - Banner -->

  <!-- Section - Introduction -->
  <section class="container-fluid">
    <div class="row hero-wrapper">
      <div class="col-lg order-last hero-image">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/section1-home.webp'; ?>" alt="Imagem">
      </div>

      <div class="col-lg wrapper">
        <div class="hero-content">
          <p>
          <p class="section-heading--small">Contamos com um portfólio variado de produtos, <span>todos adaptáveis à solução de que sua empresa precisa, com diversas opções de formato, gramatura, tamanho e resistência.</span></p>
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Section - Introduction -->

  <!-- Section - Produtos -->
  <section class="wrapper bg-primary-embanor">
    <div class="container">
      <div class="text-center">
        <h2 class="section-heading"><span>Conheça nossos produtos</span></h2>
        <p class="text-white">
          CAIXAS PERSONALIZADAS
        </p>
      </div>

      <!-- Cards -->
      <div class="carousel-products-slick cards-product row justify-content-center">
        <div class="col">
          <div class="card-product">
            <div class="card-product-title">
              <h3>
                CAIXAS E
                ACESSÓRIOS
              </h3>
            </div>
            <div class="card-product-img">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/products/product-1.webp'; ?>" alt="Imagem produto">
            </div>
            <div class="card-product-content">
              <p>
                Resistência para embalar produtos e segurança em seu transporte. É de fácil manuseio e baixo custo, além de ser reciclável e biodegradável.
              </p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card-product">
            <div class="card-product-title">
              <h3>
                PALETES
                DE PAPELÃO
              </h3>
            </div>
            <div class="card-product-img">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/products/product-2.webp'; ?>" alt="Imagem produto">
            </div>
            <div class="card-product-content">
              <p>
                Para manuseio, estocagem e transporte de mercadorias. Personalizados para cada cliente, de acordo com as medidas e capacidades necessárias.
              </p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card-product">
            <div class="card-product-title">
              <h3>
                CAIXAS PARA
                EXPORTAÇÃO
              </h3>
            </div>
            <div class="card-product-img">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/products/product-3.webp'; ?>" alt="Imagem produto">
            </div>
            <div class="card-product-content">
              <p>
                Caixas em vários tamanhos possíveis, de acordo com a necessidade de sua mercadoria. Duráveis e com boa capacidade.
              </p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card-product">
            <div class="card-product-title">
              <h3>
                CAIXAS OITAVADAS
              </h3>
            </div>
            <div class="card-product-img">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/products/product-4.webp'; ?>" alt="Imagem produto">
            </div>
            <div class="card-product-content">
              <p>
                Para armazenamento e estocagem de produtos com formatos específicos. Sua montagem proporciona alta resistência e praticidade.
              </p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card-product">
            <div class="card-product-title">
              <h3>
                CAIXAS PALETE
              </h3>
            </div>
            <div class="card-product-img">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/products/product-5.webp'; ?>" alt="Imagem produto">
            </div>
            <div class="card-product-content">
              <p>
                Modelo de caixa que visa reduzir a utilização de madeira, plástico e isopor no transporte de mercadorias. Assim, possui alta segurança, resistência e higiene.
              </p>
            </div>
          </div>
        </div>
      </div>
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
        <span>Projetos especiais</span>
      </h3>

      <div class="row gap-lg-3 flex-column flex-lg-row">
        <div class="col bg-primary-embanor card-project">
          <div class="card-project-image">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/section3-products-projects1.webp'; ?>" alt="Imagem">
          </div>
          <div class="card-project-content">
            <p>Nosso departamento de projetos atua para assegurar que as especificações do cliente sejam atendidas através de elaboração de desenho técnico e cadastro em banco de dados, criando soluções personalizadas em embalagens para proporcionar um resultado ainda melhor.</p>
          </div>
        </div>

        <div class="col card-project ">
          <div class="card-project-image">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/section3-products-projects2.webp'; ?>" alt="Imagem">
          </div>
          <div class="card-project-content">
            <p>Contamos com profissionais especializados em projetar e replanejar caixas adequadas, com o objetivo de garantir a integridade do produto, otimizar o custo benefício, estabelecer a comunicação com o cliente e inovar conceitos.</p>
          </div>
        </div>

        <div class="col bg-primary-embanor card-project">
          <div class="card-project-image">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/section3-products-projects3.webp'; ?>" alt="Imagem">
          </div>
          <div class="card-project-content">
            <p>Contamos com equipe integrada, treinamento constante e ambiente ideal para execução de testes físicos e prototipagem de amostras através de tecnologia de ponta.</p>
          </div>
        </div>
      </div>



    </div>

  </section>
  <!-- End Section - Projetos especiais -->

  <!-- Section - Tópicos -->
  <section class="wrapper" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/section4-products.webp'; ?>')">
    <div class="container">
      <div class="carousel-topics row">

        <div class="col">
          <div class="topic--horizontal bg-white text-black">
            <div class="topic-icon">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/products/icon-1.svg'; ?>" alt="Icon">
            </div>
            <div class="topic-content">
              <p>Projetos elaborados através de estudos e especificações do produto apresentando soluções inteligentes, mediante análise crítica e laboratorial garantindo integridade durante a logística, a movimentação e a armazenagem.</p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="topic--horizontal bg-primary-embanor">
            <div class="topic-icon">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/products/icon-2.svg'; ?>" alt="Icon">
            </div>
            <div class="topic-content">
              <p>Plotagem de protótipos para ensaios físicos, análise do cliente e análise de projeto.</p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="topic--horizontal bg-white text-black">
            <div class="topic-icon">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/products/icon-3.svg'; ?>" alt="Icon">
            </div>
            <div class="topic-content">
              <p>Análise do processo de produção da embalagem reduzindo Custos através de estudos para reengenharia, definição do ferramental ideal e otimização do processo.</p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="topic--horizontal bg-primary-embanor">
            <div class="topic-icon">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/products/icon-4.svg'; ?>" alt="Icon">
            </div>
            <div class="topic-content">
              <p>Suporte Técnico “FullTime” para Clientes, mediante elaboração de Relatórios Técnicos, Procedimentos e Auditorias.</p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="topic--horizontal bg-white text-black">
            <div class="topic-icon">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/products/icon-5.svg'; ?>" alt="Icon">
            </div>
            <div class="topic-content">
              <p>Visita Técnica a clientes para desenvolvimento e manutenção visando assegurar a qualidade.</p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="topic--horizontal bg-primary-embanor">
            <div class="topic-icon">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/products/icon-6.svg'; ?>" alt="Icon">
            </div>
            <div class="topic-content">
              <p>Elaboração de Treinamentos como Armazenagem e Movimentação de Embalagens, Estufamento de Container e Truck, Manuais de Montagem de Embalagens, entre outros.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Section - Tópicos -->
</main>

<?php get_footer(); ?>
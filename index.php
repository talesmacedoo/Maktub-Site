<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <?php
    include 'head.php';
  ?>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
</head>

<body class="index-page">

  <header id="header" class="header fixed-top">

    <?php
      include 'header.php';
    ?>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section accent-background">

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5 justify-content-between">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h2><span>Transforme suas finanças com a <strong>Maktub!</strong></span></h2>
            <p>Sua parceira financeira desde 2002.</p>
            <div class="d-flex">
              <a href="#about" class="btn-get-started">Saiba Mais</a>
              <!--<a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>-->
            </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2">
            <img src="assets/img/hero-img.svg" class="img-fluid" alt="">
          </div>
        </div>
      </div>


      <section id="servicos" >

      <div class="icon-boxes position-relative" data-aos="fade-up" data-aos-delay="200">
        <div class="container position-relative">
          <div class="row gy-4 mt-5">

            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-piggy-bank-fill"></i></div>
                <h4 class="title"><a href="" class="stretched-link">CRÉDITO COM GARANTIA DO FGTS.</a></h4>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-person-walking"></i></div>
                <h4 class="title"><a href="" class="stretched-link">PORTABILIDADE</a></h4>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-cash-coin"></i></div>
                <h4 class="title"><a href="" class="stretched-link">CRÉDITO CONSIGNADO</a></h4>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-credit-card"></i></div>
                <h4 class="title"><a href="" class="stretched-link">CARTÃO DE CRÉDITO CONSIGNADO</a></h4>
              </div>
            </div><!--End Icon Box -->

          </div>
        </div>
      </div>
      </section>
    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Sobre Nós<br></h2>
        <p>A Maktub desde 2002 é correspondente bancária dos maiores bancos do País</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
            <h3>Com uma equipe treinada e experiente, a Maktub tem como objetivo resolver os problemas financeiros de seus Clientes através da escolha do melhor produto</h3>
            <img src="assets/img/about.jpg" class="img-fluid rounded-4 mb-4" alt="">
            <p><strong> VISÃO:</strong> Consolidar a Maktub como referência em correspondência bancária no mercado de crédito consignado, superando metas e aprimorando a excelência no atendimento aos nossos Clientes, Fornecedores, Parceiros e Colaboradores.</p>
          </div>
          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
              <p><strong> VALORES:</strong></p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> <span><strong>Excelência:</strong> entendimento das reais necessidades de nossos Clientes ao mesmo tempo em que provemos soluções financeiras com dinamismo e competência.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span><strong>Ética:</strong> conduta moral, transparência e responsabilidade no relacionamento com os nossos Clientes.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span><strong>Respeito:</strong> deferência e acolhimento aos nossos Clientes e Colaboradores.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span><strong>Segurança:</strong> reflexo da solidez e experiência acumuladas desde 2002, juntamente com o constante aprimoramento de nossos métodos e processos.</span></li>
              </ul>
              <p>
                <strong> MISSÃO:</strong> Oferecer a melhor solução financeira, com ética, responsabilidade e agilidade, contribuindo para a realização dos sonhos de nossos Clientes.
              </p>
              <!--
              <div class="position-relative mt-4">
                <img src="assets/img/about-2.jpg" class="img-fluid rounded-4" alt="">
                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
              </div>
              -->

            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section">

      <div class="container">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/daycoval.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/safra.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/bb.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/santander.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/bradesco.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/digio.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/bancomaster.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/ole.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/pan.png" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>

    </section><!-- /Clients Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="50">

        <div class="row gy-4 align-items-center">

          <div class="col-lg-5">
            <img src="assets/img/stats-img.svg" alt="" class="img-fluid">
          </div>

          <div class="col-lg-7">

            <div class="row gy-4">

              <div class="col-lg-6">
                <div class="stats-item d-flex">
                  <i class="bi bi-emoji-smile flex-shrink-0"></i>
                  <div>
                    <span data-purecounter-start="0" data-purecounter-end="9347" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Clientes</strong> <span>satisfeitos</span></p>
                  </div>
                </div>
              </div><!-- End Stats Item -->

              <div class="col-lg-6">
                <div class="stats-item d-flex">
                  <i class="bi bi-journal-richtext flex-shrink-0"></i>
                  <div>
                    <span data-purecounter-start="0" data-purecounter-end="857" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Contratos</strong> <span>pagos no último mês</span></p>
                  </div>
                </div>
              </div><!-- End Stats Item -->

              <div class="col-lg-6">
                <div class="stats-item d-flex">
                  <i class="bi bi-cake2 flex-shrink-0"></i>
                  <div>
                    <span data-purecounter-start="0" data-purecounter-end="22" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Anos </strong> <span>de <strong>experiência</strong> no crédito consignado</span></p>
                  </div>
                </div>
              </div><!-- End Stats Item -->

              <div class="col-lg-6">
                <div class="stats-item d-flex">
                  <i class="bi bi-people flex-shrink-0"></i>
                  <div>
                    <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Consultores</strong> <span>a sua disposição</span></p>
                  </div>
                </div>
              </div><!-- End Stats Item -->

            </div>

          </div>

        </div>

      </div>

    </section><!-- /Stats Section ->

    <-- Call To Action Section ->
    <section id="call-to-action" class="call-to-action section dark-background">

      <div class="container">
        <img src="assets/img/cta-bg.jpg" alt="">
        <div class="content row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox play-btn"></a>
              <h3>Call To Action</h3>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <a class="cta-btn" href="#">Call To Action</a>
            </div>
          </div>
        </div>
      </div>

    </section><!- /Call To Action Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Convênios</h2>
        <p>Empréstimo consignado com as melhores taxas!</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="bi bi-activity"></i>
              </div>
              <h3>APOSENTADOS E PENSIONISTAS DO INSS</h3>
              <p>Aproveite as melhores taxas do mercado, faça seu empréstimo com segurança e agilidade.</p>
              <a href="#" class="readmore stretched-link">Saiba mais <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-broadcast"></i>
              </div>
              <h3>SERVIDORES DO GOVERNO FEDERAL</h3>
              <p>Com taxas e prazos diferenciados, o Servidor Civil do Governo Federal na ativa ou aposentado dispõe de agilidade e segurança na hora de adquirir seu Crédito.</p>
              <a href="#" class="readmore stretched-link">Saiba mais <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-easel"></i>
              </div>
              <h3>SERVIDORES PÚBLICOS DO GOVERNO ESTADUAL</h3>
              <p>Venha à MAKTUB e aproveite as melhores oportunidades em crédito consignado para Servidores Públicos Estaduais com total segurança e agilidade.</p>
              <a href="#" class="readmore stretched-link">Saiba mais <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-bounding-box-circles"></i>
              </div>
              <h3>SERVIDORES MUNICIPAIS</h3>
              <p>Venha à MAKTUB e aproveite as melhores oportunidades em crédito consignado para Servidores Públicos Municipais com total segurança e agilidade.</p>
              <a href="#" class="readmore stretched-link">Saiba mais <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-calendar4-week"></i>
              </div>
              <h3>MILITARES NA ATIVA OU REFORMADOS</h3>
              <p>Militares das Forças Armadas (Marinha, Exército e Aeronáutica), da ativa ou reformados, obtenha seu empréstimo pessoal de forma Agil e Segura. Com juros especiais, pré-fixados e parcelamento com prestações fixa</p>
              <a href="#" class="readmore stretched-link">Saiba mais <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-chat-square-text"></i>
              </div>
              <h3>FUNCIONÁRIOS DE EMPRESAS PRIVADAS</h3>
              <p>Sem consulta ao SPC e Serasa, sem preocupações com boletos, faturas ou carnês. O desconto é automático. Segurança e tranquilidade para você!</p>
              <a href="#" class="readmore stretched-link">Saiba mais <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>O que nossos clientes dizem</h2>
        <p>Histórias de quem já confiou em nossos serviços e alcançou seus objetivos com facilidade e segurança</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 10
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Adriana Brito</h3>
                <!--<h4>Ceo &amp; Founder</h4>-->
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Fui muito bem atendida pela consultora Claudia, o processo de contratação do crédito consignado foi bem simples e online. O valor solicitado foi disponibilizado em conta corrente quase que automaticamente. Super recomendo.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Mari Oneide</h3>
                <!--<h4>Designer</h4>-->
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Gostei mto da agilidade do serviço...sem burocracia e está de parabéns em ajudar as pessoas assim como eu que precisa de credibilidade para adquirir conta em um banco novo e também parabenizar a atendente , Beatriz!</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Diego Fernandes</h3>
                <!--<h4>Store Owner</h4>-->
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Muito boa, sempre fui bem atendido e sempre cumpriram o proposto. De parabéns a consultora Claudia e também a consultora Edineide que me atendeu em momentos anteriores.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Marly Florencio</h3>
                <!--<h4>Freelancer</h4>-->
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Achei excelente o atendimento. A consultora deu suporte em todo processo me deixando confiante no resultado. Recomendo.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <!--<h4>Entrepreneur</h4>-->
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Excelente atendimento, atendente muito atencioso, fiquei encantada com o serviço, só elogios , muito muito satisfeita, atendimento diferenciado.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="50">
            <div class="content px-xl-5">
              <h3><span>Perguntas</span><strong> Frequentes</strong></h3>
              <!--<p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>-->
            </div>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

            <div class="faq-container">
              <div class="faq-item faq-active">
                <h3><span class="num">1.</span> <span>O que é crédito consignado?</span></h3>
                <div class="faq-content">
                  <p>O crédito consignado é um tipo de empréstimo em que as parcelas são descontadas diretamente da folha de pagamento ou benefício do cliente, tornando o processo mais seguro e com taxas de juros geralmente mais baixas.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span class="num">2.</span> <span>Quais documentos são necessários para a solicitação?</span></h3>
                <div class="faq-content">
                  <p>Geralmente, você precisará apresentar: Documentos de identificação (RG, CPF), Comprovante de renda, Comprovante de residência, Extrato da conta bancária</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span class="num">3.</span> <span>Qual é o prazo para a liberação do crédito?</span></h3>
                <div class="faq-content">
                  <p>Após a aprovação da análise de crédito e a apresentação de toda a documentação, o prazo para a liberação do crédito pode variar de 24 a 72 horas.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span class="num">4.</span> <span>É possível antecipar as parcelas?</span></h3>
                <div class="faq-content">
                  <p>Sim, você pode solicitar a antecipação de parcelas. Verifique as condições específicas com nossa equipe de atendimento.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span class="num">5.</span> <span>Quem pode solicitar um crédito consignado?</span></h3>
                <div class="faq-content">
                  <p>Podem solicitar crédito consignado trabalhadores com carteira assinada, aposentados, pensionistas e servidores públicos, desde que atendam aos critérios da instituição financeira.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div>
        </div>

      </div>

    </section><!-- /Faq Section -->


    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contato</h2>
        <p>Preencha o formulário e entraremos em contato com você</p>
      </div><!-- End Section Title -->

      <div class="container" >

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-7">
            <div class="info-container d-flex flex-column align-items-center justify-content-center" href="https://govam.consiglog.com.br/LoginSegundaEtapa.aspx">
              
              <div class="info-item d-flex"  >
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Loja Matriz</h3>
                  <p>R. Francisco Gonçalves, 1 - sala 306 - Comercio, Salvador - BA, 40015-070</p>
                </div>
        
              </div><!-- End Info Item -->

              <div class="info-item d-flex"  >
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Loja Cajazeiras</h3>
                  <p> Estr. da Paciência, 1294, Cajazeiras 8</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex"  >
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Telefone</h3>
                  <p>(71) 3021-5455</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex"  >
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email</h3>
                  <p>maktubpromotora@maktubpromotora.com.br</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex"  >
                <i class="bi bi-clock flex-shrink-0"></i>
                <div>
                  <h3>Horário:</h3>
                  <p>Seg-Sex: 08:30 - 17:00</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-5">
            <form action="forms/contact.php" method="post" class="php-email-form needs-validation" novalidate>
              <div class="row gy-4">

                <div class="form-item col-md-12">
                  <label for="validationCustom01" class="form-label">Nome</label>
                  <input type="text" name="name" class="form-control" id="validationCustom01" required>
                  <div class="invalid-feedback">Por favor, insira seu nome.</div>
                </div>

                <div class="form-item col-md-12">
                  <label for="cpf" class="form-label">CPF</label>
                  <input type="text" name="cpf" class="form-control" id="cpf" maxlength="14" required>
                  <div class="invalid-feedback">Por favor, insira um CPF válido.</div>
                </div>

                <div class="form-item col-md-12">
                  <label for="email" class="form-label">E-mail</label>
                  <input type="text" class="form-control" name="email" id="email" required>
                  <div class="invalid-feedback">Por favor, insira um e-mail válido.</div>
                </div>

                <div class="form-item col-md-12">
                  <label for="telefone" class="form-label">Telefone</label>
                  <input type="text" class="form-control" name="telefone" id="telefone" required>
                  <div class="invalid-feedback">Por favor, insira um telefone válido.</div>
                </div>                

                <div class="form-item col-md-12 text-center">
                  <div class="loading">Carregando</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Sua solicitação foi enviada! Em breve retornaremos com mais informações</div>

                  <!-- Modal de Confirmação -->
                  <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="successModalLabel">Solicitação Enviada!</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Seus dados foram enviados com sucesso! Em breve entraremos em contato.
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary" id="reloadPage" data-bs-dismiss="modal">OK</button>
                        </div>
                      </div>
                    </div>
                  </div>


                  <button type="submit" class="btn btn-primary">Solicitar Simulação</button>
                  <p>Ao continuar, você autoriza o tratamento de dados pela Maktub Promotora, a consulta de informações necessárias para a prestação de serviços e declara estar ciente e de acordo com a <a href="/maktub-site/politica-de-privacidade.php" target="_blank">Política de Privacidade</a> da Maktub Promotora.</p>
                </div>

              </div>
            </form>
          </div> <!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer accent-background">
     <?php
            include 'footer.php'
     ?>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="forms/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
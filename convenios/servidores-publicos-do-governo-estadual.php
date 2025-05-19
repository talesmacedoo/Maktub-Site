<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php
    include '../head.php';
    ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
</head>
<body>

    <header id="header" class="header header-convenios ">
        
        <?php
        include 'header-convenios.php';
        ?>
        

    </header>
    <main class="main">


        <!-- Hero Section -->
        <section id="hero" class="hero hero-convenios section accent-background">

            <div class="container position-relative"  data-aos-delay="100">
                <div class="row gy-5 justify-content-between">
                <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-right">
                    <h2>Empréstimo Consignado para Servidores do <span>Governo Estadual</span></h2>
                    <p>Crédito rápido, seguro e com as melhores taxas para quem é servidor do Governo Estadual.</p>
                    <div class="d-flex">
                    <a href="#about" class="btn-get-started">Saiba Mais</a>
                    
                    </div>
                </div>
                <div class="col-lg-7 order-1 order-lg-2" data-aos="fade-left">
                    <img src="<?php echo BASE_URL; ?>assets/img/convenios/governo-estadual.svg" class="img-fluid" alt="">
                </div>
                </div>
            </div>


        </section><!-- /Hero Section -->

        <div class="seta-convenios">
                    <img src="<?php echo BASE_URL; ?>assets/img/convenios/seta-convenios.svg"  alt="">
        </div>
        
        <!-- Sobre-consignado Section -->
        <section id="sobre-consignado" class="sobre-consignado section">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-7 d-flex flex-column align-items-center text-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="sobre-consignado-container d-flex flex-column align-items-center text-start">
                            <img src="<?php echo BASE_URL; ?>assets/img/convenios/servidor-governo-estadual.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                    
                    <div class="col-lg-5" data-aos="fade-up" data-aos-delay="50">
                        <div class="content ">
                            <h3><strong>O que é o crédito consignado?</strong></h3>
                            <h4>O crédito consignado para servidores públicos estaduais é uma modalidade de empréstimo destinada a funcionários ativos, inativos e pensionistas do Governo Federal, em que as parcelas são descontadas diretamente da folha de pagamento ou do benefício recebido mensalmente.</h4>
                        </div>
                    </div>


                </div>

            </div>

        </section><!-- /sobre-consignado Section -->
        

        <!-- Steps Section -->
        <section id="steps" class="steps section">
            <div class="container section-title" data-aos="fade-left">
                <h2>Como solicitar um orçamento?</h2>
            </div><!-- End Section Title -->

            <div class="container container-steps">

                <div class="row gy-4">
                    <!--
                    <div class="col-lg-6 " data-aos="fade-left">
                        <img src="<?php echo BASE_URL; ?>assets/img/convenios/informe-seus-dados.svg" class="img-fluid" alt="">
                    </div>-->

                    <div class="col-lg-6" data-aos="fade-right">
                    <!-- Carrossel de Imagens -->
                    <div id="carouselImages" class="carousel slide" >
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo BASE_URL; ?>assets/img/convenios/steps-1.svg" class="d-block w-100 img-fluid" alt="Imagem 1">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo BASE_URL; ?>assets/img/convenios/steps-2.svg" class="d-block w-100 img-fluid" alt="Imagem 2">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo BASE_URL; ?>assets/img/convenios/steps-3.svg" class="d-block w-100 img-fluid" alt="Imagem 3">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo BASE_URL; ?>assets/img/convenios/steps-4.svg" class="d-block w-100 img-fluid" alt="Imagem 4">
                            </div>
                        </div>
                        <!-- Controle para navegação do carrossel -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselImages" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselImages" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="steps-container d-flex flex-column align-items-center justify-content-center" href="https://govam.consiglog.com.br/LoginSegundaEtapa.aspx">
                        
                            <div class="steps-item d-flex align-items-center">
                                <div class="icon flex-shrink-0"><i class="bi bi-person-fill"></i></div>
                                <div>
                                    <h4 ><a  class="">Informe seus dados</a></h4>
                                    <p class="description">Informe seus dados para iniciarmos a simulação.</p>
                                </div>
                            </div>

                            <div class="steps-item d-flex align-items-center">
                                <div class="icon flex-shrink-0"><i class="bi bi-rocket-takeoff-fill"></i></div>
                                <div>
                                    <h4 class="title"><a href="" class="stretched-link">Escolha a melhor oferta</a></h4>
                                    <p class="description">Receba as melhores opções e escolha a mais vantajosa.</p>
                                </div>
                            </div>

                            <div class="steps-item d-flex align-items-center">
                                <div class="icon flex-shrink-0"><i class="bi bi-clipboard-check-fill"></i></div>
                                <div>
                                    <h4 class="title"><a href="" class="stretched-link">Formalização eletrônica</a></h4>
                                    <p class="description">Receba o contrato e assine de forma 100% online.</p>
                                </div>
                            </div>

                            <div class="steps-item d-flex align-items-center">
                                <div class="icon flex-shrink-0"><i class="bi bi-cash-coin"></i></div>
                                <div>
                                    <h4 class="title"><a href="" class="stretched-link">Dinheiro na conta</a></h4>
                                    <p class="description">O dinheiro cai na sua conta, e as parcelas são descontadas direto do benefício.</p>
                                </div>
                            </div>

                        </div>

                    </div>

            </div>

        </section><!-- /Steps Section -->

        <section class="section-curve-down">
            
        </section>

        <!-- Beneficios Section -->
        <section id="beneficios" class="beneficios section">
            <!-- Section Title -->
        <div class="container section-title" data-aos="fade-left">
            <h2>Por que escolher a Maktub como sua parceira?</h2>
            <!-- <p>A Maktub Promotora é a escolha ideal para quem busca segurança, agilidade e as melhores condições em crédito consignado.</p> -->
        </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="beneficios-item  position-relative">
                    <div class="icon">
                        <i class="bi bi-laptop"></i>
                    </div>
                    <h4>100% Digital</h4>
                    <p>Faça sua solicitação de forma simples e sem burocracia, totalmente online.</p>
        
                    </div>
                </div><!-- End Beneficios Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="beneficios-item position-relative">
                    <div class="icon">
                        <i class="bi bi-percent"></i>
                    </div>
                    <h4>Taxas de Juros Reduzidas</h4>
                    <p>Aproveite condições diferenciadas com juros menores, graças ao desconto direto na folha de pagamento.</p>
        
                    </div>
                </div><!-- End Beneficios Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="beneficios-item position-relative">
                    <div class="icon">
                        <i class="bi bi-calendar3"></i>
                    </div>
                    <h4>Prazos Flexíveis</h4>
                    <p>Escolha o número de parcelas que melhor se encaixa no seu orçamento.</p>
        
                    </div>
                </div><!-- End Beneficios Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="beneficios-item position-relative">
                    <div class="icon">
                        <i class="bi bi-cash-coin"></i>
                    </div>
                    <h4>Dinheiro Rápido na Conta</h4>
                    <p>Receba o crédito de forma ágil – seu dinheiro pode estar disponível em até 48 horas.</p>
        
                    </div>
                </div><!-- End Beneficios Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="beneficios-item position-relative">
                    <div class="icon">
                        <i class="bi bi-calendar4-week"></i>
                    </div>
                    <h4>Atendimento Humanizado</h4>
                    <p>Conte com um suporte dedicado que acompanha você em cada etapa, garantindo segurança e tranquilidade em sua jornada financeira.</p>
        
                    </div>
                </div><!-- End Beneficios Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="beneficios-item position-relative">
                    <div class="icon">
                        <i class="bi bi-person-plus"></i>
                    </div>
                    <h4>Programa Indique e Ganhe</h4>
                    <p>Indique amigos e desfrute de benefícios exclusivos: mais vantagens para você e para quem você indicar.</p>
        
                    </div>
                </div><!-- End Beneficios Item -->

                </div>

            </div>

        </section><!-- /Beneficios Section -->

        <!-- Bancos Section -->
        <section id="bancos" class="bancos section">

        <div class="container">

            <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
                {
                "loop": true,
                "speed": 1000,
                "autoplay": {
                    "delay": 500
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
                <div class="swiper-slide"><img src="<?php echo BASE_URL; ?>assets/img/clients/daycoval.png"  alt=""></div>
                <div class="swiper-slide"><img src="<?php echo BASE_URL; ?>assets/img/clients/safra.png"  alt=""></div>
                <div class="swiper-slide"><img src="<?php echo BASE_URL; ?>assets/img/clients/bb.png"  alt=""></div>
                <div class="swiper-slide"><img src="<?php echo BASE_URL; ?>assets/img/clients/santander.png"  alt=""></div>
                <div class="swiper-slide"><img src="<?php echo BASE_URL; ?>assets/img/clients/bradesco.png"  alt=""></div>
                <div class="swiper-slide"><img src="<?php echo BASE_URL; ?>assets/img/clients/digio.png"  alt=""></div>
                <div class="swiper-slide"><img src="<?php echo BASE_URL; ?>assets/img/clients/bancomaster.png"  alt=""></div>
                <div class="swiper-slide"><img src="<?php echo BASE_URL; ?>assets/img/clients/ole.png"  alt=""></div>
                <div class="swiper-slide"><img src="<?php echo BASE_URL; ?>assets/img/clients/pan.png"  alt=""></div>
            </div>
            </div>

        </div>

        </section><!-- /Bancos Section -->

        <!-- Contato-whatsapp Section -->
        <section id="contato-whatsapp" class="contato-whatsapp section">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-5" data-aos="fade-up" data-aos-delay="50">
                        <div class="content ">
                            <h3><strong>Entre em contato com a Maktub no WhatsApp!</strong></h3>
                        </div>
                    </div>

                    <div class="col-lg-7 d-flex flex-column align-items-center text-center" data-aos="fade-up" data-aos-delay="200">

                    <div class="contato-whatsapp-container d-flex flex-column align-items-center text-start">
                        <p class="w-75">
                            <strong> Pronto para fechar o melhor negócio? Descubra ofertas exclusivas para você! </strong>
                        </p>
                        
                        <a href="https://api.whatsapp.com/send/?phone=7130215454&text=Desejo%20receber%20uma%20simula%C3%A7%C3%A3o!&type=phone_number&app_absent=0" target="_blank" class="btn-contato-whatsapp">
                            <strong>Converse conosco agora pelo WhatsApp</strong> <img src="<?php echo BASE_URL; ?>assets/img/icons/whatsapp-icon.svg" alt="logo maktub"> 
                        </a>
                        
                    </div>


                    </div>
                </div>

            </div>

        </section><!-- /Contato Whatsapp Section -->



        <!-- Faq Section -->
        <section id="faq" class="faq faq-convenios section">

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

                    <div class="faq-item">
                        <h3><span class="num">5.</span> <span>Qual a taxa de juros aplicada?</span></h3>
                        <div class="faq-content">
                        <p>A taxa de juros do consignado para beneficiários do INSS tem um teto regulado pelo governo e pode variar conforme a instituição financeira. Consulte nossa simulação para saber as condições atuais.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    </div>

                </div>
                </div>

            </div>

        </section><!-- /Faq Section -->


        
        <script>
            window.chatwootSettings = {"position":"right","type":"standard","launcherTitle":"Fale conosco no chat"};
            (function(d,t) {
                var BASE_URL="https://app.luzirsoftware.com.br";
                var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
                g.src=BASE_URL+"/packs/js/sdk.js";
                g.defer = true;
                g.async = true;
                s.parentNode.insertBefore(g,s);
                g.onload=function(){
                window.chatwootSDK.run({
                    websiteToken: 'qs7DQDK2BtuL3ekh1X3iH7jm',
                    baseUrl: BASE_URL
                })
                }
            })(document,"script");
        </script>



        <footer id="footer" class="footer accent-background">
            <section class="section-curve-up">
            </section>
            <?php
                include '../footer.php'
            ?>

        </footer>

        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Preloader -->
        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/vendor/php-email-form/validate.js"></script>
        <script src="../assets/vendor/aos/aos.js"></script>
        <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="<?php echo BASE_URL; ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="../assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
        <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

        <!-- Main JS File -->
        <script src="../assets/js/convenios.js"></script>


    </main>

</body>
</html>
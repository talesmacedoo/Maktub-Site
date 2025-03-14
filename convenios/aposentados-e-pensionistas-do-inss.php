<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php
    include '../head.php';
    ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
</head>
<body>

    <header id="header" class="header fixed-top">
        
        <?php
        include 'header-convenios.php';
        ?>
        

    </header>
    <main class="main">


        <!-- Hero Section -->
        <section id="hero" class="hero hero-convenios section accent-background">

            <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-5 justify-content-between">
                <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h2><span>Empréstimo Consignado para Aposentados e Pensionistas do <strong>INSS</strong></span></h2>
                    <p>Crédito rápido, seguro e com as melhores taxas para quem recebe benefício do INSS.</p>
                    <div class="d-flex">
                    <a href="#about" class="btn-get-started">Saiba Mais</a>
                    
                    </div>
                </div>
                <div class="col-lg-7 order-1 order-lg-2">
                    <img src="<?php echo BASE_URL; ?>assets/img/convenios/aposentados-e-pensionistas.svg" class="img-fluid" alt="">
                </div>
                </div>
            </div>



        </section><!-- /Hero Section -->


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


        <footer id="footer" class="footer accent-background">
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
        <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="../assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
        <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

        <!-- Main JS File -->
        <script src="../assets/js/main.js"></script>


    </main>

</body>
</html>
<footer>
        <div class="container">
            <div class="top">   
                <img src="<?php echo get_template_directory_uri(  ) ?>./img/logo.svg" alt="">
                <div class="share">
                    <span><?php the_field('titulo_rede_social', 'options') ?></span>
                    <ul>
                        <?php if( have_rows('cadastrar_redes_sociais', 'options') ): while ( have_rows('cadastrar_redes_sociais', 'options') ) : the_row(); ?>
                            <li>
                                <a href="<?php the_sub_field('url_da_rede_social') ?>">
                                    <img src="<?php the_sub_field('icone_rede_social') ?>" alt="">
                                </a>
                            </li>
                        <?php endwhile; else : endif;?>
                    </ul>
                </div>
            </div>
            <div class="main">
                <nav>
                    <div class="item">
                        <strong>Produtos Neon</strong>
                        <?php
                            $args = array(
                                'menu' => 'Menu Produtos Footer',
                                'theme_location' => 'menu_produtos_footer',
                                'container' => false
                            );
                            wp_nav_menu( $args );
                        ?>
                    </div>
                    <div class="item">
                        <strong>Conta digital PJ</strong>
                        <ul>
                            <li><a href="">Sou MEI</a></li>
                            <li><a href="">Sou ME</a></li>
                        </ul>
                    </div>
                    <div class="item">
                        <strong>Blog</strong>
                        <ul>
                            <li><a href="">#focanodinheiro</a></li>
                            <li><a href="">O poder da comunidade</a></li>
                            <li><a href="">Desafio das 52 semanas</a></li>
                            <li><a href="">Planilha de gastos</a></li>
                        </ul>
                    </div>
                    <div class="item">
                        <strong>Institucional</strong>
                        <ul>
                            <li><a href="">Conheça a Neon</a></li>
                            <li><a href="">Trabalhe conosco</a></li>
                            <li><a href="">Termos de uso</a></li>
                            <li><a href="">Políticas de privacidade</a></li>
                            <li><a href="">Empréstimo</a></li>
                        </ul>
                    </div>
                    <div class="item">
                        <strong>Ajuda</strong>
                        <ul>
                            <li><a href="">Ouvidoria</a></li>
                            <li><a href="">Fale conosco</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="btns">
                    <?php if( have_rows('cadastrar_contatos', 'options') ): while ( have_rows('cadastrar_contatos', 'options') ) : the_row(); ?>

                    <button>
                        <img src="<?php the_sub_field('icone_contato') ?>" alt="">
                        <div class="info">
                            <strong><?php the_sub_field('titulo_contato') ?></strong>
                            <span><?php the_sub_field('email_contato') ?></span>
                        </div>
                    </button>
                    <?php endwhile; else : endif;?>
                </div>
            </div>
            <div class="msg">
                <div class="icon">😀</div>
                <?php the_field('mensagem', 'options') ?>
            </div>
        </div>
    </footer>

    <!-- Javascript -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>

    /* Initialize Swiper */
    var swiper = new Swiper(".slide-depoimentos", {
        slidesPerView: 3,
        spaceBetween: 32,
        pagination: {
        el: ".s-depoimentos .top .swiper-pagination",
        clickable: true,
        },
        breakpoints: {
            /* espace for mobile */
            320: {
            slidesPerView: 1.3,
            spaceBetween: 16,
            },
            600: {
            slidesPerView: 2.3,
            spaceBetween: 15,
            },
            /* espace for desktop */
            1200: {
            slidesPerView: 3,
            spaceBetween: 32,
            }
        }
    });

        /* Initialize AOS Effects */   
        AOS.init({
            duration: 1000,
            once: true
        });

    </script>

    <?php wp_footer( ) ?>    
    
</body>
</html>
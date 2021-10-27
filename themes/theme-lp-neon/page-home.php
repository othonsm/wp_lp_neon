<?php
    // Template name: Home
?>

<?php get_header( ); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="s-hero">
        <div class="container">
            <div class="text" data-aos="fade-right">
                <h3><?php the_field( 'subtitulo_section_hero' ) ?></h3>
                <h1><?php the_field( 'titulo_section_hero' ) ?></h1>
                <button class="btn-primary"><?php the_field( 'texto_do_botao_abra_sua_conta_digital' ) ?></button>
                <ul>
                    <!-- Repetidor WP -->    
                    <?php if( have_rows('cadastrar_itens_da_section') ): while ( have_rows('cadastrar_itens_da_section') ) : the_row(); ?>
                        <li>
                            <div class="icon">
                                <img src="<?php the_sub_field('icone_item') ?>" alt="Icone do cartão sem anuidade">
                            </div>
                            <span><?php the_sub_field('texto_item') ?></span>
                        </li>
                    
                    <?php endwhile; else : endif;?>
                    <!-- / Repetidor WP --> 
                </ul>
            </div>
            <div class="area-image">
                <h2 data-aos="fade-left"><?php the_field( 'texto_banco_100_digital' )?></h2>
                <div class="image" data-aos="zoom-in">
                    <img class="card-front" src=" <?php echo get_template_directory_uri(  ) ?> ./img/card-neon-frnt.png" alt="card-front">
                    <img class="card-back" src="<?php echo get_template_directory_uri(  ) ?> ./img/card-neon-back.png" alt="card-back">
                    <img class="circle" src="<?php echo get_template_directory_uri(  ) ?> ./img/circle-cards-neon.svg" alt="circle">
                </div>
            </div>
        </div>
    </section>

    <section class="s-card-neon">
        <div class="container">
            <div class="left-area">
                <div class="ilustra-mockup">
                    <img src="<?php echo get_template_directory_uri(  ) ?>./img/circle-mockup.svg" class="circle" data-aos="fade-left" alt="circle mockup">
                    <img src="<?php echo get_template_directory_uri(  ) ?>./img/mockup.svg" class="mockup" data-aos="flip-right" alt="mockup">
                </div>
                <div class="text" data-aos="fade-up">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(  ) ?>./img/icon-neon.svg" alt="">
                    </div>
                    <div class="info-txt">
                        <h3><?php the_field('titulo_baixe_nosso_app') ?></h3>
                        <p><?php the_field('descricao_baixe_nosso_app') ?></p>
                        <ul>
                            <li>
                                <a href="<?php the_field('url_google_play') ?>" target="_blanck">
                                    <img src="<?php echo get_template_directory_uri(  ) ?>./img/google-play.svg" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="<?php the_field('url_apple_store') ?>" target="_blanck">
                                    <img src="<?php echo get_template_directory_uri(  ) ?>./img/apple-store.svg" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="right-area">
                <div class="main-text"  data-aos="fade-left">
                    <h2><?php the_field('titulo_section_app_neon') ?></h2>
                    <ul>
                        <?php if( have_rows('cadastrar_beneficio_app_neon') ): while ( have_rows('cadastrar_beneficio_app_neon') ) : the_row(); ?>
                        <li>
                            <div class="info">
                                <img src="<?php the_sub_field('icone_beneficio') ?>" class="icon" alt="">
                                <div class="txt">
                                    <h3></h3><?php the_sub_field('titulo_beneficio') ?></h3>
                                    <p><?php the_sub_field('descricao_beneficio') ?></p>
                                </div>
                            </div>
                            <img src="<?php echo get_template_directory_uri(  ) ?>./img/arrow-right.svg" alt="">
                        </li>
                        
                        <?php endwhile; else : endif;?>
                    </ul>
                    <a href="" class="btn"><?php the_field('texto_botao_conheca_outros_produtos') ?></a>
                </div>
                <div class="box-card"  data-aos="fade-left">
                    <div class="text">
                        <h2><?php the_field('titulo_pj') ?></h2>
                        <h3><?php the_field('subtitulo_pj') ?></h3>
                        <p><?php the_field('descricao_pj') ?></p>
                        <div class="btns">
                            <button class="btn-primary"><?php the_field('texto_botao_mei') ?></button>
                            <button class="btn-primary"><?php the_field('texto_botao_me') ?></button>
                        </div>
                    </div>
                    <img src="<?php echo get_template_directory_uri(  ) ?>./img/card-front-pj.svg" alt="" class="image">
                </div>
            </div>
        </div>
    </section>

    <section class="s-depoimentos">
        <div class="container">

            <div class="top" data-aos="fade-right">
                <h2><span><?php the_field('titulo_principal_depoimentos') ?></span><?php the_field('titulo_secundario_depoimentos') ?></h2>
                <div class="swiper-pagination"></div>
            </div> 

            <!-- Swiper -->
            <div class="slide-depoimentos" data-aos="fade-up">
            <div class="swiper-wrapper">
                <?php if( have_rows('cadastrar_depoimentos') ): while ( have_rows('cadastrar_depoimentos') ) : the_row(); ?> 

                <div class="swiper-slide">
                    <div class="card-depoimento">
                        <div class="user">
                            <strong><?php the_sub_field('usuario_depoimento') ?></strong>
                            <img src="<?php echo get_template_directory_uri(  ) ?>./img/icon-twitter.svg" alt="">
                        </div>
                        <p><?php the_sub_field('texto_depoimento') ?></p>
                    </div>
                </div>

                <?php endwhile; else : endif;?>
            </div>
            <div class="swiper-pagination"></div>
        </div>

        </div>
    </section> 

    <section class="s-conta-digital">
        <div class="container">
            <div class="text" data-aos="fade-right">
                <h2><span><?php the_field('subtitulo_conta_digital') ?></span><?php the_field('titulo_conta_digital') ?></h2>
                <ul>
                <?php if( have_rows('cadastrar_item_conta_digital') ): while ( have_rows('cadastrar_item_conta_digital') ) : the_row(); ?>
                <li>
                        <div class="icon">
                            <img src="<?php the_sub_field('icone_item') ?>" alt="">
                        </div>
                        <div class="info">
                            <h4><?php the_sub_field('titulo_item') ?></h4>
                            <p><?php the_sub_field('descricao_item') ?></p>
                        </div>
                    </li>
                
                <?php endwhile; else : endif;?>
                    
                </ul>
                <button class="btn-primary">Abra sua conta digital</button>
            </div>
            <div class="image">
                <img src="<?php echo get_template_directory_uri(  ) ?>./img/mockup-01.svg" class="mockup-01" data-aos="fade-up" alt="">
                <img src="<?php echo get_template_directory_uri(  ) ?>./img/mockup-02.png" class="mockup-02" data-aos="fade-down" alt="">
                <img src="<?php echo get_template_directory_uri(  ) ?>./img/circle-conta-digital.svg" class="circle" data-aos="zoom-in" alt="">
            </div>
        </div>
</section>

<?php include (TEMPLATEPATH .'/includes/section-uso.php') ?>

    <?php endwhile; else: endif; ?>

<?php get_footer( ); ?>
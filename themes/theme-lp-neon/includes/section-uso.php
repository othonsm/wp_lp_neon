<?php 
    $pagina_home = get_page_by_title( 'Home' );
?>

<section>
    <div class="container">
        <!-- <h2><?php the_field('texto_da_section_extra', $pagina_home) ?> </h2> -->

    	<?= do_shortcode( '[contact-form-7 id="156" title="Formulário de contato 1"]' ) ?>

    </div>
</section>

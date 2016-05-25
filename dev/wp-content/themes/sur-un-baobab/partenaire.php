<?php

/*
Template Name: Partenaire
*/
get_header();?>
<main>
  <section class="diffusion">
    <h2 class="diffusion__title" aria-level="2"><?php _e('Je veux diffuser ce film','b');?></h2>
    <div class="diffusion__form">
      <?php echo do_shortcode( '[contact-form-7 id="201" title="Diffusion"]');?>
    </div>
    <?php if( get_field('diffusion_image') ):
      $diffusion = get_field('diffusion_image');
      $diffusionsize='thumb-diffusion';
      ?>
      <figure class="diffusion__figure">
        <div class="diffusion__image">
          <?php echo wp_get_attachment_image($diffusion['id'],$diffusionsize);?>
        </div>
      </figure>
    <?php endif;?>
  </section>
</main>
<?php get_footer();?>

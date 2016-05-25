<?php

/*
Template Name: Donate
*/

get_header();
?>
<main class="bckg">
  <div class="ariane ariane--static">
    <ul class="ariane__menu">
      <li class="ariane__element">
        <?php _e('Accueil/','b');?>
      </li>
      <li class="ariane__element">
        <?php _e('Faire un Don','b');?>
      </li>
    </ul>
  </div>

  <section class="donate">
    <h2 aria-level="2" class="donate__title">
      <?php _e('Donner','b');?>
    </h2>
    <form class="donate__form" method="post" action="#">
      <label for="don" class="donate__label"><?php _e('Payement via Paypal en $','b');?></label>
      <input class="donate__input" type="number" id="don" min="1" name="don" value="5">
      <input class="donate__submit" type="submit" value="Offrir du bonheur">
    </form>
  </section>
  <?php if( get_field('image_decorative_de_faire_un_don')):
    $donate = get_field('image_decorative_de_faire_un_don');
    $donatesize='thumb-diffusion';
    ?>
    <figure class="donate__figure">
      <div class="donate__image">
        <?php echo wp_get_attachment_image($donate['id'],$donatesize);?>
      </div>
    </figure>
  <?php endif;?>
</main>

<?php get_footer();?>

<?php

/*
Template Name: Anime toi meme
*/
if(is_page()){
  query_posts([
    'post_type' => 'tutoriel'
  ]);
}
get_header();
?>
<main>
  <div class="ariane ariane--static">
    <ul class="ariane__menu">
      <li class="ariane__element">
        Accueil /
      </li>
      <li class="ariane__element">
        Anime toi même
      </li>
    </ul>
  </div>
  <section class="animetoimeme">
    <h2 aria-level="2" class="animetoimeme__title">
      <?php _e('Anime toi même','b');?>
    </h2>
    <div class="animetoimeme__container">
      <div class="animetoimeme__door">
        <a class="door__link" href="<?php echo the_permalink('212');?>" title="Accéder au tutoriel mini Studio">
          <?php _e('Mini Studio','b');?>
          <?php $image_anime = get_field('image_mini_studio');
          $animesize='thumb-anime';?>
          <div class="door__image">
            <?php echo wp_get_attachment_image( $image_anime['id'], $animesize );?>
          </div>
        </a>
      </div>
      <div class="animetoimeme__door animetoimeme__door--right">
        <a class="door__link door__link--dessine" href="<?php echo the_permalink('215');?>" title="Accéder au tutoriel dessine ton histoire">
          <?php _e('Dessine ton histoire','b');?>
          <?php $image_dessine = get_field('image_dessine_histoire');
          $animesize='thumb-anime';?>
          <div class="door__image">
            <?php echo wp_get_attachment_image( $image_dessine['id'], $animesize );?>
          </div>
        </a>
      </div>
    </div>
  </section>
</main>
<?php get_footer();?>

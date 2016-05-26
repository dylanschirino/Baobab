<?php

/*
Template Name: Réalisation
*/
if(is_page()){
  query_posts([
    'posts_per_page' => 3,
    'orderby'=>'date',
    'order' => 'DESC',
    'post_type' => 'project'
  ]);
}
get_header();
?>
<main>
  <div class="ariane">
    <ul class="ariane__menu">
      <li class="ariane__element">
        <?php _e('Accueil /','b');?>
      </li>
      <li class="ariane__element">
        <?php the_title();?>
      </li>
    </ul>
  </div>

  <section class="imagecover">
    <?php if( get_field('header_img') ):
      $headerRéalisation_img = get_field('header_img');
      $size='thumb-mainimage'
      ?>
      <style scoped>
      .imagecover {
        background: url("<?php echo wp_get_attachment_image_url( $headerRéalisation_img['id'], $bigsize );?>") no-repeat center fixed;
        background-size: cover;
      }
      <?php endif;?>
      </style>
      <h2 aria-level="2" class="imagecover__title">
        <?php _e('Court métrages','b');?>
      </h2>
    </section>

    <section class="videolist">
      <h3 aria-level="3" class="videolist__title">
        <?php _e('Liste des vidéo','b');?>
      </h3>
      <a href="<?php echo the_permalink('69');?>" title="Vers la page de don" class="videolist__button">
        <?php echo the_field('label_button');?>
      </a>
      <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
        <article class="cards">
          <ul class="cards__list">
            <li class="cards__element">
              <a href="<?php the_permalink();?>" class="cards__link" title="Voir le projet"><?php _e('Découvrir le projet','b');?></a>
            </li>
            <li class="cards__element">
              <a href="<?php the_permalink();?>" class="cards__link" title="Voir le Makingof"><?php _e('Making of','b');?></a>
            </li>
            <li class="cards__element">
              <a href="viewvideo.html" class="cards__link" title="Vers la Fiche Technique"><?php _e('Fiche technique','b');?></a>
            </li>
          </ul>
          <h3 aria-level="3" class="cards__title"><?php echo the_title();?></h3>
          <div class="cards__icon">
            <ul class="icon__list">
              <li class="icon__element icon__element--lieu">
                <?php echo the_field('country');?>
              </li>
              <li class="icon__element icon__element--duree">
                <?php echo the_field('time');?>
              </li>
              <li class="icon__element icon__element--date">
                <?php echo the_field('date');?>
              </li>
              <li class="icon__element icon__element--theme">
                <?php echo the_field('thème');?>
              </li>
            </ul>
            <ul class="icon__list icon__list--right">
              <li class="icon__element icon__element--langue">
                <?php echo the_field('langue');?>
              </li>
              <li class="icon__element icon__element--soustitre">
                <?php echo the_field('sous_titre');?>
              </li>
              <li class="icon__element icon__element--participant">
                <?php echo the_field('participant');?>
              </li>
            </ul>
          </div>
          <a href="<?php echo the_permalink();?>" title="Voir la vidéo en détails"><span class="visuallyhidden"><?php _e('Vers la fiche de la vidéo','b');?></span>
            <?php if( get_field('image_previsualisation') ):
              $image_previsualisation = get_field('image_previsualisation');
              $sizePrevi='thumb-realisation';
              ?>
              <div class="cards__image">
                <?php echo wp_get_attachment_image($image_previsualisation['id'],$sizePrevi);?>
              </div>
            <?php endif;?>
          </a>
        </article>
      <?php endwhile; endif;?>
    </section>
  </main>
  <?php
  get_footer();?>

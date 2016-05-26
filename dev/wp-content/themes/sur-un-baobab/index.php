<?php

/*
Template Name: Homepage
*/

get_header();
/*Déclaration des custom size des images*/
$image = get_field('image_dessine');
$size='thumb-doityourself';
$image_mini = get_field('image_ministudio');
$image_detourer = get_field('image_detourer');
$detouresize='thumb-decoration';
$mainimage = get_field('mainimage');
$bigsize='thumb-mainimage';
/*WP query global pour charger les 2 derniers post*/
if(is_page()){
  query_posts([
    'posts_per_page' =>2,
    'orderby' => 'date',
    'order' => 'DESC',
    'post_type' => 'post'
  ]);
}

?>
<main>
  <section class="mainimage">
  <style scoped>
  .mainimage{
    background: url("<?php echo wp_get_attachment_image_url( $mainimage['id'], $bigsize );?>") no-repeat center fixed;
    background-size:cover;
  }
  </style>
  <h2 aria-level="2" class="mainimage__title">
    <?php _e('Animation Workshop','b');?>
  </h2>
  <a class="mainimage__button" href="<?php echo the_field('home_url');?>" title="Accéder à la vidéo sur youtube"><?php _e('Voir le projet','b');?></a>
</section>

<section class="whosbaobab">
  <div class="whosbaobab__maincontainer apparition">
    <div class="whosbaobab__container">
      <h3 aria-level="3" class="container__title"><?php _e('Qui sommes nous','b');?></h3>
      <p class="container__text">
        <?php echo the_field('description_baobab');?>
      </p>
      <a href="<?php echo the_permalink('65'); ?>" title="Accéder à la page projet" class="container__link"><?php _e('Nous connaitre','b');?></a>
    </div>

    <article class="whosbaobab__soutien">
      <div class="whosbaobab__container whosbaobab__container--right">
        <h3 aria-level="3" class="container__title container__title--red"><?php _e('Faire un don','b');?></h3>
        <p class="container__text container__text--red">
          <?php echo the_field('pourquoi_donner');?>
        </p>
        <a href="<?php echo the_permalink('69');?>" title="Accéder à la page projet" class="container__link container__link--red"><?php _e('Faire un don','b');?></a>
      </div>
    </article>
  </div>
</section>

<section class="doityourself">
  <h3 aria-level="3" class="doityourself__title apparition">
    <?php echo the_field('tutoriel_title');?>
  </h3>
  <div class="doityourself__container">

    <a href="<?php echo the_permalink('215');?>" class="doityourself__link" title="Accéder au tutoriel Dessine ton histoire">
      <?php echo wp_get_attachment_image( $image['id'], $size );?>
      <?php _e('Dessine ton histoire','b');?>
    </a>
    <a href="<?php echo the_permalink('212');?>" class="doityourself__link">

      <?php echo wp_get_attachment_image( $image_mini['id'], $size );?>
      <?php _e('Cree ton mini studio','b');?>
    </a>
  </div>
</section>

<section class="lastactu">
  <h3 class="lastactu__title" aria-level="3"><?php _e('Actualité','b');?></h3>

  <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
    <article class="actu actu--index">
      <a class="actu__link" href="<?php the_permalink();?>" title="Accéder à la fiche de l'actualité">
        <div class="actu__image">
          <?php the_post_thumbnail('thumb-cards');?>
        </div>
      </a>
      <div class="actu__info">
        <h4 class="actu__title" aria-level="4">
          <?php echo the_title();?></h4>
          <ul class="actu__list">
            <li class="actu__element"><?php echo the_field('time');?> /</li>
            <?php $post=get_post();
            $categorie=get_the_category($post->ID);?>
            <li class="actu__element actu__element--green"><?php echo ($categorie[0]->cat_name);?> /</li>
            <li class="actu__element">auteur&nbsp;:&nbsp;<?php echo the_field('auteur');?></li>
          </ul>
          <p class="actu__text">
            <?php echo the_field('resume');?>
          </p>
          <a class="actu__button" href="<?php the_permalink();?>" title="Accéder à a fiche">
            Lire la suite
          </a>
        </div>
      </article>
    <?php endwhile; endif;?>

  </section>

  <section class="decoration">
    <h3 aria-level="3" class="decoration__title apparition">
      <?php _e('Une creation collective','b');?>
      <small class="decoration__title--small"><?php _e('avec','b');?></small> <strong class="decoration__title--strong"> <?php _e('9 enfants','b');?></strong> <small class="decoration__title--small"><?php _e('et','b');?></small> <strong class="decoration__title--strong">
        <?php _e('adolescent','b');?>
      </strong>
      <?php _e('de tuléar','b');?>&nbsp;, <strong class="decoration__title--strong"><?php _e('Madagascar','b');?></strong>
    </h3>
    <div class="decoration__image apparition">
      <?php echo wp_get_attachment_image( $image_detourer['id'], $detouresize );?>
    </div>
  </section>
</main>
<?php get_footer();?>

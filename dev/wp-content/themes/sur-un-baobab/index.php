<?php

/*
Template Name: Homepage
*/

get_header();
/*Verification du chargement des images*/
$image = get_field('image_dessine');

$image_mini = get_field('image_ministudio');

$image_detourer = get_field('image_detourer');
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
    <h2 aria-level="2" class="mainimage__title">
      <?php echo bloginfo();?>
    </h2>
    <a class="mainimage__button" href="<?php echo the_field('home_url');?>" title="Accéder à la vidéo sur youtube"><?php _e('Voir la vidéo','b');?></a>
  </section>

  <section class="whosbaobab">
    <div class="whosbaobab__maincontainer" id="apparition">
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
    <h3 aria-level="3" class="doityourself__title" id="apparition">
      <?php echo the_field('tutoriel_title');?>
    </h3>
    <div class="doityourself__container">

    <a href="ministudio.html" class="doityourself__link" title="Accéder au tutoriel Dessine ton histoire">
      <img class="doityourself__image" src="<?php echo $image['url'];?>" width="345" height="345" alt="dessine ton histoire image">
      <?php _e('Dessine ton histoire','b');?>
    </a>
    <a href="ministudio.html" class="doityourself__link">

      <img class="doityourself__image" src="<?php echo $image_mini['url'];?>" width="345" height="345" alt="dessine ton histoire image">
      <?php _e('Cree ton mini studio','b');?>
    </a>
  </div>
</section>

  <section class="lastactu">
    <h3 class="lastactu__title" aria-level="3"><?php _e('Actualité','b');?></h3>

    <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
    <article class="actu">
      <a class="actu__link" href="<?php the_permalink();?>" title="Accéder à la fiche de l'actualité"><img class="actu__image" src="<?php the_post_thumbnail_url();?>" width="297" height="240" alt="image actualité">
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
      <h3 aria-level="3" class="decoration__title" id="apparition">
        <?php _e('Une creation collective','b');?>
        <small class="decoration__title--small"><?php _e('avec','b');?></small> <strong class="decoration__title--strong"> <?php _e('9 enfants','b');?></strong> <small class="decoration__title--small"><?php _e('et','b');?></small> <strong class="decoration__title--strong">
        <?php _e('adolescent','b');?>
        </strong>
        <?php _e('de tuléar','b');?>&nbsp;, <strong class="decoration__title--strong"><?php _e('Madagascar','b');?></strong>
      </h3>

      <img class="decoration__image" id="deplacement" src="<?php echo $image_detourer['url'];?>" width="585" height="430" alt="image d'un homme sur une moto en carton">
    </section>
  </main>
  <?php get_footer();?>

<?php

/*
Template Name: Single Project
*/
if(is_page()){
  query_posts([
    'post_type' => 'project'
  ]);
}
get_header();

?>
<main>
  <div class="ariane ariane--static">
    <ul class="ariane__menu">
      <li class="ariane__element">
        <?php _e('Accueil /','b');?>
      </li>
      <li class="ariane__element">
        <?php _e('Court métrages /','b');?>
      </li>
      <li class="ariane__element">
        <?php _e('Projet','b');?>
      </li>
    </ul>
  </div>


  <section class="video">
    <h2 aria-level="2" class="video__title">
      <?php _e('Court métrages','b');?>
    </h2>

    <p class="video__subtitle">
      <?php the_title();?>
    </p>
    <ul class="video__list nav-tabs">
      <li class="video__element active">
        <a href="#" data-tab-target="tab-one" class="video__link"><?php _e('Voir le film','b');?></a>
      </li>
      <li class="video__element">
        <a href="#tab-two" data-tab-target="tab-two" class="video__link"><?php _e('Découvrir le projet','b');?></a>
      </li>
      <li class="video__element">
        <a href="#" data-tab-target="tab-three" class="video__link"> <?php _e('Making of','b');?></a>
      </li>
      <li class="video__element">
        <a href="#" data-tab-target="tab-four" class="video__link"><?php _e('Fiche technique','b');?></a>
      </li>
      <li class="video__elements">
        <a href="<?php echo the_permalink('69');?>" class="video__link video__link--diffusion"><?php _e('Diffuser ce film','b');?></a>
      </li>
    </ul>

    <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
      <article class="video__voirfilm">
        <div class="tab-pane active" id="tab-one">
          <?php echo the_field('youtube_video');?>
          <h3 aria-level="3" class="voirfilm__title">
            <?php _e('Sypnosis','b');?>
          </h3>
          <p class="voirfilm__text">
            <?php echo the_field('sypnosis');?>
          </p>
        </div>
      </article>

      <article class="discover">
        <div class="tab-pane" id="tab-two">
          <h3 class="discover__title"><?php echo the_field('titre_discover');?></h3>
          <?php echo the_field('decouvrir_le_projet_et_image');?>
        </div>
      </article>

      <article class="makingof">
        <div class="tab-pane" id="tab-three">
          <h3 aria-level="3" class="makingof__title">
            Making of
          </h3>
          <?php $imagemakingof=get_field('making_of_image_1');
          $imagemakingof2=get_field('making_of_image_2');
          $imagemakingof3=get_field('making_of_image_3');
          $imagemakingof4=get_field('making_of_image_4');
          $imagemakingof5=get_field('making_of_image_5');
          $imagemakingof6=get_field('making_of_image_6');
          $sizeMakingof='thumb-makingof';
          echo wp_get_attachment_image($imagemakingof['id'],$sizeMakingof);
          echo wp_get_attachment_image($imagemakingof2['id'],$sizeMakingof);
          echo wp_get_attachment_image($imagemakingof3['id'],$sizeMakingof);
          echo wp_get_attachment_image($imagemakingof4['id'],$sizeMakingof);
          echo wp_get_attachment_image($imagemakingof5['id'],$sizeMakingof);
          echo wp_get_attachment_image($imagemakingof6['id'],$sizeMakingof);
          ?>
        </div>
      </article>

      <article class="fichetechnique">
        <div class="tab-pane" id="tab-four">
          <h3 aria-level="3" class="fichetechnique__title">
            <?php _e('Fiche Technique','b');?>
          </h3>
          <img class="fichetechnique__affiche" src="img/affiche.jpg" width="300" height="400" alt="affiche du film">
          <table class="fichetechnique__table">
            <caption class="table__caption">
              <?php _e('Information','b');?>
            </caption>
            <tr class="table__row">
              <th class="table__head"><?php _e('Titre français','b');?></th>
              <td class="table__data"><?php the_field('titre_francais_du_projet');?></td>
            </tr>
            <tr class="table__row">
              <th class="table__head"><?php _e('Durée','b');?></th>
              <td class="table__data"><?php echo the_field('time');?></td>
            </tr>
            <tr class="table__row">
              <th class="table__head"><?php _e('Pays','b');?></th>
              <td class="table__data"><?php echo the_field('country');?></td>
            </tr>
            <tr class="table__row">
              <th class="table__head"><?php _e('Date','b');?></th>
              <td class="table__data"><?php echo the_field('date');?></td>
            </tr>
            <tr class="table__row">
              <th class="table__head"><?php _e('Technique','b');?></th>
              <td class="table__data"><?php echo the_field('technique');?></td>
            </tr>
            <tr class="table__row">
              <th class="table__head"><?php _e('Thème','b');?></th>
              <td class="table__data"><?php echo the_field('thème');?></td>
            </tr>
            <tr class="table__row">
              <th class="table__head"><?php _e('Participants','b');?></th>
              <td class="table__data"><?php echo the_field('participant');?></td>
            </tr>
            <tr class="table__row">
              <th class="table__head"><?php _e('Direction et coordination','b');?></th>
              <td class="table__data"><?php echo the_field('direction_et_coordination');?></td>
            </tr>
            <tr class="table__row">
              <th class="table__head"><?php _e('Assistants','b');?></th>
              <td class="table__data"><?php echo the_field('assistant');?></td>
            </tr>
            <tr class="table__row">
              <th class="table__head"><?php _e('Histoire originale','b');?></th>
              <td class="table__data"><?php echo the_field('histoire_originale');?></td>
            </tr>
            <tr class="table__row">
              <th class="table__head"><?php _e('Musique','b');?></th>
              <td class="table__data"><?php echo the_field('musique');?></td>
            </tr>
            <tr class="table__row">
              <th class="table__head"><?php _e('Montage son','b');?></th>
              <td class="table__data"><?php echo the_field('montage_son');?></td>
            </tr>
            <tr class="table__row">
              <th class="table__head"><?php _e('Montage image','b');?></th>
              <td class="table__data"><?php echo the_field('montage_image');?></td>
            </tr>
            <tr class="table__row">
              <th class="table__head"><?php _e('Production','b');?></th>
              <td class="table__data"><?php echo the_field('production');?></td>
            </tr>
            <tr class="table__row">
              <th class="table__head"><?php _e('Langue','b');?></th>
              <td class="table__data"><?php echo the_field('langue');?></td>
            </tr>
            <tr class="table__row">
              <th class="table__head"><?php _e('Sous-titres disponibles','b');?></th>
              <td class="table__data"><?php echo the_field('sous_titre');?></td>
            </tr>
          </table>
        </div>
      </article>
    <?php endwhile; endif;?>
  </section>
</main>
<?php $easy_options = get_option("easy_page_options");?>

<footer class="footer">

  <div class="footer__container">
    <article class="follow">
      <h3 class="follow__title" aria-level="3"><?php _e('Nous suivre','b');?></h3>
      <ul class="follow__list">
        <li class="follow__element">
          <a class="follow__link follow__link--facebook" href="<?php echo $easy_options['facebook'];?>"><?php _e('Facebook','b');?></a>
        </li>
        <li class="follow__element">
          <a class="follow__link follow__link--vimeo" href="<?php echo $easy_options['vimeo'];?>"><?php _e('Vimeo','b');?></a>
        </li>
        <li class="follow__element">
          <a class="follow__link follow__link--youtube" href="<?php echo $easy_options['youtube'];?>"><?php _e('Youtube','b');?></a>
        </li>
        <li class="follow__element">
          <a class="follow__link follow__link--instagram" href="<?php echo $easy_options['instagram'];?>"><?php _e('Instagram','b');?></a>
        </li>
        <li class="follow__element">
          <a class="follow__link follow__link--twitter" href="<?php echo $easy_options['twitter'];?>"><?php _e('Twitter','b');?></a>
        </li>
      </ul>
    </article>

    <article class="contact">
      <h3 class="contact__title" aria-level="3"><?php _e('Nous contacter','b');?></h3>
      <ul class="contact__list">
        <li class="contact__element"><?php _e('Email','b');?>&nbsp;:&nbsp;
          <a class="contact__link" href="mailto:<?php echo $easy_options['mail'];?>"><?php echo $easy_options['mail'];?></a>
        </li>
        <li class="contact__element">Whatsapp&nbsp;:&nbsp;
          <a class="contact__link" href="tel:<?php echo $easy_options['whatsapp'];?>"><?php echo $easy_options['whatsapp'];?></a>
        </li>
        <li class="contact__element"><?php _e('Téléphone','b');?>&nbsp;:&nbsp;
          <a class="contact__link" href="tel:<?php echo $easy_options['telephone'];?>"><?php echo $easy_options['telephone'];?></a>
        </li>
      </ul>
    </article>
  </div>
</footer>
<noscript>
<style>
/* onglet afficher l'un en dessous des autres */
.tab-pane{

  margin-top:3em;
  display:block;
}
</style>
</noscript>
<script src="<?php echo get_template_directory_uri().'/assets/scripts.js';?>"></script>
</body>
</html>

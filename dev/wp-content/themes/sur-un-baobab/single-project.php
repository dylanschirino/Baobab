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
      <a href="#discover" data-tab-target="tab-two" class="video__link"><?php _e('Découvrir le projet','b');?></a>
    </li>
    <li class="video__element">
      <a href="#" data-tab-target="tab-three" class="video__link"> <?php _e('Making of','b');?></a>
    </li>
    <li class="video__element">
      <a href="#" data-tab-target="tab-four" class="video__link"><?php _e('Fiche technique','b');?></a>
    </li>
    <li class="video__elements">
      <a href="diffusion.html" class="video__link video__link--diffusion"><?php _e('Diffuser ce film','b');?></a>
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
      <img class="makingof__image" src="img/makingof/seq1.jpg" width="200" height="200" alt="image making of">
      <img class="makingof__image" src="img/makingof/seq2.jpg" width="200" height="200" alt="image making of">
      <img class="makingof__image" src="img/makingof/seq3.jpg" width="200" height="200" alt="image making of">
      <img class="makingof__image" src="img/makingof/seq4.jpg" width="200" height="200" alt="image making of">
      <img class="makingof__image" src="img/makingof/seq5.jpg" width="200" height="200" alt="image making of">
      <img class="makingof__image" src="img/makingof/seq6.jpg" width="200" height="200" alt="image making of">
      <img class="makingof__image" src="img/makingof/seq7.jpg" width="200" height="200" alt="image making of">
      <img class="makingof__image" src="img/makingof/seq8.jpg" width="200" height="200" alt="image making of">
      <img class="makingof__image" src="img/makingof/seq9.jpg" width="400" height="200" alt="image making of">
    </div>
  </article>

  <article class="fichetechnique">
    <div class="tab-pane" id="tab-four">
      <h3 aria-level="3" class="fichetechnique__title">
        Fiche Technique
      </h3>
      <img class="fichetechnique__affiche" src="img/affiche.jpg" width="300" height="400" alt="affiche du film">
      <table class="fichetechnique__table">
        <caption class="table__caption">Information</caption>
        <tr class="table__row">
          <th class="table__head">Titre français</th>
          <td class="table__data">Le choix de Pela</td>
        </tr>
        <tr class="table__row">
          <th class="table__head">Durée</th>
          <td class="table__data">6min 17sec</td>
        </tr>
        <tr class="table__row">
          <th class="table__head">Pays</th>
          <td class="table__data">Madagascar</td>
        </tr>
        <tr class="table__row">
          <th class="table__head">Année</th>
          <td class="table__data">2015</td>
        </tr>
        <tr class="table__row">
          <th class="table__head">Technique</th>
          <td class="table__data">2D, papier-découpé, image par image, déchets recyclés</td>
        </tr>
        <tr class="table__row">
          <th class="table__head">Thème</th>
          <td class="table__data">La grossesse précoce</td>
        </tr>
        <tr class="table__row">
          <th class="table__head">Participants</th>
          <td class="table__data">9 enfants et adolescents de Tuléar bénéficiaires du Centre Art et Musique et du Foyer Social de l’ONG Bel Avenir</td>
        </tr>
        <tr class="table__row">
          <th class="table__head">Direction et coordination</th>
          <td class="table__data">Elena CABEDO GARCIA et François CHENOT</td>
        </tr>
        <tr class="table__row">
          <th class="table__head">Direction et coordination</th>
          <td class="table__data">Elena CABEDO GARCIA et François CHENOT</td>
        </tr>
        <tr class="table__row">
          <th class="table__head">Assistants</th>
          <td class="table__data">Henrmine ANDRY, Virginie Olivia ANDRIAMPENOSOA Razandry M. LAFINIARIVO</td>
        </tr>
        <tr class="table__row">
          <th class="table__head">Histoire originale</th>
          <td class="table__data">Emma LIDON et Josué AHIAVAO</td>
        </tr>
        <tr class="table__row">
          <th class="table__head">Musique</th>
          <td class="table__data">MIKEBO</td>
        </tr>
        <tr class="table__row">
          <th class="table__head">Montage son</th>
          <td class="table__data">Elena Cabedo Garcia</td>
        </tr>
        <tr class="table__row">
          <th class="table__head">Montage image</th>
          <td class="table__data">François Chenot</td>
        </tr>
        <tr class="table__row">
          <th class="table__head">Production</th>
          <td class="table__data">Sur un baobab</td>
        </tr>
        <tr class="table__row">
          <th class="table__head">Langue</th>
          <td class="table__data">Vezo(dialecte malgache)</td>
        </tr>
        <tr class="table__row">
          <th class="table__head">Sous-titres disponibles</th>
          <td class="table__data">ES / FR / EN / MG /CAT /IT</td>
        </tr>
      </table>
    </div>
  </article>
  <?php endwhile; endif;?>
</section>
<script src="<?php echo get_template_directory_uri().'/assets/scripts.js';?>"></script>
<?php get_footer();?>

<?php

/*
Template Name: About
*/

get_header();
?>

<main>
  <section class="aboutasbl">
    <h2 aria-level="2" class="aboutasbl__title">
      <?php _e('Description de l\'asbl','b');?>
    </h2>

    <article class="description">
      <h3 aria-level="3" class="description__title description__title--groupe">
        <?php echo the_field('titre_partage');?>
      </h3>
      <p class="description__text">
        <?php echo the_field('texte_partage');?>
      </p>
    </article>
    <article class="description">
      <h3 aria-level="3" class="description__title description__title--resultat">
        <?php echo the_field('titre_resultat');?>
      </h3>
      <p class="description__text">
        <?php echo the_field('texte_resultat');?>
      </p>
    </article>
    <article class="description">
      <h3 aria-level="3" class="description__title description__title--developpement">
        <?php echo the_field('titre_technique');?>
      </h3>
      <p class="description__text">
        <?php echo the_field('texte_technique');?>
      </p>
    </article>
  </section>

  <section class="equipe">
    <h2 aria-level="2" class="equipe__title">
      <?php _e('Notre équipe','b');?>
    </h2>
    <div class="equipe__membre">
      <h3 class="membre__title" aria-level="3">
        <?php _e('Elena Cabedo Garcia','b');?>
      </h3>
      <?php if( get_field('photo_de_elena')):
        $photo_elena = get_field('photo_de_elena');
        $photosize='thumb-description';
        ?>
        <div class="membre__photo">
          <?php echo wp_get_attachment_image($photo_elena['id'],$photosize );?>
        </div>
      <?php endif;?>
      <p class="membre__text">
        <?php echo the_field('description_de_elena');?>
      </p>
    </div>
    <div class="equipe__membre equipe__membre--francois">
      <h3 class="membre__title" aria-level="3">
        <?php _e('François Chenot','b');?>
      </h3>
      <?php if( get_field('photo_de_françois')):
        $photo_francois = get_field('photo_de_françois');
        $photosize='thumb-description';
        ?>
        <div class="membre__photo">
          <?php echo wp_get_attachment_image($photo_francois['id'],$photosize );?>
        </div>
      <?php endif;?>
      <p class="membre__text">
        <?php echo the_field('description_de_françois');?>
      </p>
    </div>
  </section>
</main>
<?php get_footer();?>

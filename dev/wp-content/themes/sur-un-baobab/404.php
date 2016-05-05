
<?php
get_header();
?>

<section class="error">
  <h2 class="error__title">
    Oups
  </h2>
  <p class="error__text">
    La page que vous cherchez n'est pas ou plus disponible.
    Retourner à <a href="<?php echo home_url('/');?>" rel="home">la page d'accueil 
  </p>
</section>

<?php
get_footer();

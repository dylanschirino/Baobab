
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
<script src="<?php echo get_template_directory_uri().'/assets/scrollreveal.min.js';?>"></script>
<script>
window.sr = ScrollReveal();
sr.reveal('#apparition', {delay:300,opacity:0,mobile:true});
sr.reveal('#deplacement', { delay: 300,scale:1,mobile:false});
</script>
<?php wp_footer;?>
</body>
</html>

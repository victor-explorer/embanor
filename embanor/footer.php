<footer>
  <div class="container">
    <div class="row justify-content-center justify-content-lg-start gap-3 gap-lg-0">
      <!-- Logo -->
      <div class="col-lg-5">
        <a class="logo" href="/">
          <img src="<?php the_field('acf_settings_logo', 240); ?>" alt="Embanor" class="responsive-image">
        </a>
      </div>

      <!-- Navegação -->
      <div class="col-lg-5">

        <nav class="list-nav">
          <?php if (get_field('acf_settings_email', 240)) : ?>
            <a href="mailto:<?php the_field('acf_settings_email', 240); ?>" class="list-nav-item">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/mail.svg'; ?>" alt="">
              <?php the_field('acf_settings_email', 240); ?>
            </a>
          <?php endif; ?>

          <?php if (get_field('acf_settings_whatsapp', 240)) : ?>
            <a href="<?php the_field('acf_settings_url_whatsapp', 240); ?>" target="_blank" class="list-nav-item">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/whatsapp.svg'; ?>" alt="">
              <?php the_field('acf_settings_whatsapp', 240); ?>
            </a>
          <?php endif; ?>

          <?php if (get_field('acf_settings_tel', 240)) : ?>
            <a href="tel:+<?php the_field('acf_settings_url_tel', 240); ?>" class="list-nav-item">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/tel.svg'; ?>" alt="">
              <?php the_field('acf_settings_tel', 240); ?>
            </a>
          <?php endif; ?>

          <?php if (get_field('acf_settings_endereco', 240)) : ?>
            <a href="<?php the_field('acf_settings_url_endereco', 240); ?>" target="_blank" class="list-nav-item">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/map.svg'; ?>" alt="">
              <?php the_field('acf_settings_endereco', 240); ?>
            </a>
          <?php endif; ?>

        </nav>
      </div>

      <!-- Social media -->
      <div class="social col-lg-2">
        <?php if (get_field('acf_settings_instagram', 240)) : ?>
          <a href="<?php the_field('acf_settings_instagram', 240); ?>" class="social-item" target="_blank" title="Instagram">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/instagram.svg'; ?>" alt="Instagram">
          </a>
        <?php endif; ?>


        <?php if (get_field('acf_settings_linkedin', 240)) : ?>
          <a href="<?php the_field('acf_settings_linkedin', 240); ?>" class="social-item" target="_blank" title="Linkedin ">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/linkedin.svg'; ?>" alt="Linkedin">
          </a>
        <?php endif; ?>


        <?php if (get_field('acf_settings_facebook', 240)) : ?>
          <a href="<?php the_field('acf_settings_facebook', 240); ?>" class="social-item" target="_blank" title="Facebook">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/facebook.svg'; ?>" alt="Facebook">
          </a>
        <?php endif; ?>

      </div>

      <div class="col-lg-12">
        <div class="d-flex justify-content-center mt-4">

          <a href="http://embanor.com.br/politica-de-privacidade/" class="text-decoration-underline text-white">
            Política de privacidade
          </a>
        </div>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>
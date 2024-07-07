<footer id="footer" class="footer dark-background">

    <div class="container">
      <div class="row gy-3">

      <div class="col-lg-3 col-md-6 d-flex">
        <?php 
          dynamic_sidebar("first-footer-widget-area");
       ?>
        </div>
       

        <div class="col-lg-3 col-md-6 d-flex">
        <?php 
          dynamic_sidebar("second-footer-widget-area");
       ?>
        </div>

        <div class="col-lg-3 col-md-6 d-flex">
        <?php 
          dynamic_sidebar("third-footer-widget-area");
       ?>
        </div>

        <div class="col-lg-3 col-md-6">
        <?php 
          dynamic_sidebar("fourth-footer-widget-area");
        ?>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
    <?php 
          dynamic_sidebar("fivth-footer-widget-area")
        ?>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?php echo get_template_directory_uri() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo get_template_directory_uri() ?>/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo get_template_directory_uri() ?>/assets/vendor/aos/aos.js"></script>
  <script src="<?php echo get_template_directory_uri() ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo get_template_directory_uri() ?>/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?php echo get_template_directory_uri() ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="<?php echo get_template_directory_uri() ?>/assets/js/main.js"></script>

</body>

</html>
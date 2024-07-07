<?php
/** 
 * Template Name:chefs
 * 
 */
get_header();
?>

<!-- Chefs Section -->
<section id="chefs" class="chefs section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>chefs</h2>
  <p><span>Our</span> <span class="description-title">Proffesional Chefs<br></span></p>
</div><!-- End Section Title -->

<div class="container">

  <div class="row gy-4">

<?php
    $blogs_args=array(
      "post_type"=>"post",
      "posts_per_page"=>3
    );

    $blog_posts=new WP_Query($blogs_args);
    while($blog_posts->have_posts()){
      $blog_posts->the_post();



?>

    <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
      <div class="team-member">
        <div class="member-img">
          <a href="<?php the_permalink() ?>">
          <?php the_post_thumbnail() ?>
          </a>
         
          <div class="social">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
        <div class="member-info">
          <?php the_title() ?>
          <span>Master Chef</span>
          <p><?php the_content() ?></p>
        </div>
      </div>
    </div><!-- End Chef Team Member -->

<?php
    }
?>


  </div>

</div>

</section><!-- /Chefs Section -->
<?php

get_footer();
?>
<?php
/**
 * Default page template
 *
 * @package BaySolar
 */

get_header();
?>

<section class="about-section">
  <div class="container">
    <?php
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile;
    ?>
  </div>
</section>

<?php
get_footer();

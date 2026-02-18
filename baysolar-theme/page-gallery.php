<?php
/**
 * Gallery Page Template
 *
 * Template Name: Gallery
 *
 * @package BaySolar
 */

get_header();
?>

  <!-- Gallery Hero -->
  <section class="gallery-hero">
    <div class="container">
      <h1><?php esc_html_e( 'Our Work', 'baysolar' ); ?></h1>
      <p><?php esc_html_e( 'Browse our recent solar installations across Lancaster, Morecambe and Lancashire. We take pride in every project we complete.', 'baysolar' ); ?></p>
    </div>
  </section>

  <!-- Gallery Section -->
  <section class="gallery-section" id="gallery">
    <div class="container">
      <?php
      $gallery_posts = new WP_Query( array(
          'post_type'      => 'gallery',
          'posts_per_page' => -1,
          'orderby'        => 'date',
          'order'          => 'DESC',
      ) );

      if ( $gallery_posts->have_posts() ) : ?>
      <div class="gallery-grid">
        <?php while ( $gallery_posts->have_posts() ) : $gallery_posts->the_post(); ?>
        <div class="gallery-item">
          <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( 'gallery-thumb', array( 'alt' => esc_attr( get_the_title() ), 'loading' => 'lazy' ) ); ?>
          <?php endif; ?>
          <div class="gallery-overlay">
            <?php
            $categories = get_the_terms( get_the_ID(), 'gallery_category' );
            if ( $categories && ! is_wp_error( $categories ) ) :
                $cat = $categories[0];
            ?>
              <span class="gallery-tag"><?php echo esc_html( $cat->name ); ?></span>
            <?php endif; ?>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
      <?php wp_reset_postdata(); ?>

      <?php else : ?>
      <div class="gallery-empty">
        <p><?php esc_html_e( 'Gallery photos coming soon. Check back for our latest installations.', 'baysolar' ); ?></p>
      </div>
      <?php endif; ?>

      <div class="gallery-cta">
        <p><?php esc_html_e( 'Want to see your property powered by solar? Get in touch for a free consultation.', 'baysolar' ); ?></p>
        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>" class="btn btn-primary btn-lg"><?php esc_html_e( 'Get a Free Quote', 'baysolar' ); ?></a>
      </div>
    </div>
  </section>

<?php
get_footer();

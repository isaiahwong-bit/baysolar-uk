  </main>

  <!-- Footer -->
  <footer class="footer">
    <div class="container footer-grid">
      <div class="footer-col">
        <img src="<?php echo baysolar_image( 'logo-white.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="footer-logo">
        <p><?php esc_html_e( 'Professional solar installations across Lancaster, Morecambe and surrounding areas. Over 20 years of experience. Fully MCS credited.', 'baysolar' ); ?></p>
      </div>
      <div class="footer-col">
        <h4><?php esc_html_e( 'Quick Links', 'baysolar' ); ?></h4>
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'baysolar' ); ?></a></li>
          <li><a href="<?php echo esc_url( home_url( '/#about' ) ); ?>"><?php esc_html_e( 'About', 'baysolar' ); ?></a></li>
          <li><a href="<?php echo esc_url( home_url( '/#services' ) ); ?>"><?php esc_html_e( 'Services', 'baysolar' ); ?></a></li>
          <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'gallery' ) ) ); ?>"><?php esc_html_e( 'Gallery', 'baysolar' ); ?></a></li>
          <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>"><?php esc_html_e( 'Contact', 'baysolar' ); ?></a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4><?php esc_html_e( 'Contact Info', 'baysolar' ); ?></h4>
        <ul>
          <li><a href="tel:07920864473"><?php esc_html_e( 'Call Mark - 07920 864473', 'baysolar' ); ?></a></li>
          <li><a href="tel:07727804063"><?php esc_html_e( 'Call Liam - 07727 804063', 'baysolar' ); ?></a></li>
          <li>Woodgate, White Lund Industrial Estate, Morecambe, Lancashire, LA3 3PS</li>
        </ul>
      </div>
      <div class="footer-col">
        <h4><?php esc_html_e( 'Business Hours', 'baysolar' ); ?></h4>
        <ul>
          <li><?php esc_html_e( 'Monday - Friday: 8am - 5pm', 'baysolar' ); ?></li>
          <li><?php esc_html_e( 'Saturday: 8am - 12pm', 'baysolar' ); ?></li>
          <li><?php esc_html_e( 'Sunday: Closed', 'baysolar' ); ?></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container footer-bottom-inner">
        <p>&copy; <?php echo date( 'Y' ); ?> <?php esc_html_e( 'Bay Solar Energy Solutions. All rights reserved.', 'baysolar' ); ?></p>
      </div>
    </div>
  </footer>

  <!-- Scroll to top -->
  <button class="scroll-top" id="scrollTop" aria-label="<?php esc_attr_e( 'Scroll to top', 'baysolar' ); ?>">
    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 15l-6-6-6 6"/></svg>
  </button>

  <?php wp_footer(); ?>
</body>
</html>

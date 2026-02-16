<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="<?php echo baysolar_image( 'logo.png' ); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <!-- Skip to content for accessibility -->
  <a href="#main-content" class="skip-link"><?php esc_html_e( 'Skip to main content', 'baysolar' ); ?></a>

  <!-- Header -->
  <header class="header" id="header">
    <?php if ( is_page( 'contact' ) ) : ?>
    <div class="header-top">
      <div class="container header-top-inner">
        <div class="header-contact-info">
          <a href="tel:07920864473"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg> 07920 864473</a>
          <a href="tel:07727804063"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg> 07727 804063</a>
        </div>
      </div>
    </div>
    <?php endif; ?>
    <nav class="navbar">
      <div class="container nav-inner">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-logo">
          <img src="<?php echo baysolar_image( 'logo.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="logo-dark">
          <img src="<?php echo baysolar_image( 'logo-white.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="logo-white">
        </a>
        <button class="hamburger" id="hamburger" aria-label="<?php esc_attr_e( 'Toggle menu', 'baysolar' ); ?>">
          <span></span><span></span><span></span>
        </button>
        <ul class="nav-links" id="navLinks">
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"<?php if ( is_front_page() ) echo ' class="active"'; ?>><?php esc_html_e( 'Home', 'baysolar' ); ?></a></li>
          <?php if ( is_front_page() ) : ?>
          <li><a href="#about"><?php esc_html_e( 'About', 'baysolar' ); ?></a></li>
          <li><a href="#services"><?php esc_html_e( 'Services', 'baysolar' ); ?></a></li>
          <?php endif; ?>
          <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>"<?php if ( is_page( 'contact' ) ) echo ' class="active"'; ?>><?php esc_html_e( 'Contact', 'baysolar' ); ?></a></li>
          <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>" class="btn btn-primary nav-cta"><?php esc_html_e( 'Get a Quote', 'baysolar' ); ?></a></li>
        </ul>
      </div>
    </nav>
  </header>

  <main id="main-content">

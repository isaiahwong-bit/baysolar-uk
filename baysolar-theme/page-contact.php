<?php
/**
 * Template Name: Contact Page
 * Template for the Contact page.
 *
 * @package BaySolar
 */

get_header();
?>

  <!-- Contact Hero -->
  <section class="contact-hero">
    <div class="container">
      <h1><?php esc_html_e( 'Contact Us', 'baysolar' ); ?></h1>
      <p><?php esc_html_e( 'Need to book an appointment or need emergency help? Get in touch with us now and our representative will help you soon.', 'baysolar' ); ?></p>
    </div>
  </section>

  <!-- Contact Content -->
  <section class="contact-section">
    <div class="container contact-grid">
      <!-- Contact Form -->
      <div class="contact-form-wrapper">
        <h2><?php esc_html_e( 'Send Us A Message', 'baysolar' ); ?></h2>
        <form class="contact-form" id="contactForm" action="https://formspree.io/f/YOUR_FORM_ID" method="POST">
          <div class="form-row">
            <div class="form-group">
              <label for="firstName"><?php esc_html_e( 'First Name', 'baysolar' ); ?></label>
              <input type="text" id="firstName" name="firstName" required>
            </div>
            <div class="form-group">
              <label for="lastName"><?php esc_html_e( 'Last Name', 'baysolar' ); ?></label>
              <input type="text" id="lastName" name="lastName" required>
            </div>
          </div>
          <div class="form-group">
            <label for="email"><?php esc_html_e( 'Email', 'baysolar' ); ?></label>
            <input type="email" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="phone"><?php esc_html_e( 'Phone (optional)', 'baysolar' ); ?></label>
            <input type="tel" id="phone" name="phone">
          </div>
          <div class="form-group">
            <label for="message"><?php esc_html_e( 'Comment or Message', 'baysolar' ); ?></label>
            <textarea id="message" name="message" rows="5" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-lg btn-block"><?php esc_html_e( 'Send Message', 'baysolar' ); ?></button>
        </form>
      </div>

      <!-- Contact Info -->
      <div class="contact-info-wrapper">
        <div class="contact-info-card">
          <h3><?php echo wp_kses_post( __( "We're here to help!<br>Call Us Today!", 'baysolar' ) ); ?></h3>
          <a href="tel:07920864473" class="contact-phone">07920 864473</a>
          <a href="tel:07727804063" class="contact-phone secondary">07727 804063</a>
        </div>

        <div class="contact-details-card">
          <div class="contact-detail">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#96d3ea" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
            <div>
              <h4><?php esc_html_e( 'Address', 'baysolar' ); ?></h4>
              <p>Woodgate, White Lund Industrial Estate,<br>Morecambe, Lancashire, LA3 3PS</p>
            </div>
          </div>
          <div class="contact-detail">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#96d3ea" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            <div>
              <h4><?php esc_html_e( 'Business Hours', 'baysolar' ); ?></h4>
              <p><?php esc_html_e( 'Monday - Friday: 8am - 5pm', 'baysolar' ); ?><br><?php esc_html_e( 'Saturday: 8am - 12pm', 'baysolar' ); ?><br><?php esc_html_e( 'Sunday: Closed', 'baysolar' ); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();

<?php
/**
 * Front Page Template
 *
 * @package BaySolar
 */

get_header();
?>

  <!-- Hero Section - Full Bleed Immersive -->
  <section class="hero">
    <div class="hero-bg">
      <img src="<?php echo baysolar_image( 'hero-main.jpg' ); ?>" alt="<?php esc_attr_e( 'Modern home with solar', 'baysolar' ); ?>" class="hero-bg-img" width="1920" height="1280" fetchpriority="high">
      <div class="hero-overlay"></div>
    </div>
    <div class="container hero-content">
      <div class="hero-text">
        <p class="hero-label"><?php esc_html_e( 'Bay Solar Energy Solutions', 'baysolar' ); ?></p>
        <h1>
          <span class="hero-line"><?php esc_html_e( 'Powering', 'baysolar' ); ?></span>
          <span class="hero-line"><?php esc_html_e( 'Your', 'baysolar' ); ?> <em><?php esc_html_e( 'Future', 'baysolar' ); ?></em></span>
        </h1>
        <p class="hero-desc"><?php esc_html_e( 'Professional solar installations across Lancaster, Morecambe and the surrounding areas. Fully certified with over 20 years of experience.', 'baysolar' ); ?></p>
        <div class="hero-trust">
          <span class="hero-trust-label"><?php esc_html_e( 'Certified & Trusted', 'baysolar' ); ?></span>
          <div class="hero-trust-logos">
            <img src="<?php echo baysolar_image( 'mcs-certified.jpg' ); ?>" alt="<?php esc_attr_e( 'MCS Certified', 'baysolar' ); ?>" width="501" height="501">
            <img src="<?php echo baysolar_image( 'recc-approved.jpg' ); ?>" alt="<?php esc_attr_e( 'RECC Approved', 'baysolar' ); ?>" width="302" height="173">
            <img src="<?php echo baysolar_image( 'yesss-electrical.jpg' ); ?>" alt="<?php esc_attr_e( 'YESSS Electrical Partner', 'baysolar' ); ?>" width="376" height="134">
          </div>
        </div>
        <div class="hero-cta">
          <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>" class="btn btn-primary btn-lg"><?php esc_html_e( 'Get a Free Quote', 'baysolar' ); ?></a>
          <a href="tel:07920864473" class="btn btn-glass btn-lg">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
            <?php esc_html_e( 'Call Mark', 'baysolar' ); ?>
          </a>
        </div>
      </div>
      <!-- Floating stat cards -->
      <div class="hero-cards">
        <div class="hero-card">
          <span class="hero-card-number">20+</span>
          <span class="hero-card-label"><?php esc_html_e( 'Years Experience', 'baysolar' ); ?></span>
        </div>
        <div class="hero-card">
          <span class="hero-card-number">500+</span>
          <span class="hero-card-label"><?php esc_html_e( 'Installations', 'baysolar' ); ?></span>
        </div>
        <div class="hero-card accent">
          <span class="hero-card-number">100%</span>
          <span class="hero-card-label"><?php esc_html_e( 'Certified', 'baysolar' ); ?></span>
        </div>
      </div>
    </div>
    <!-- Scroll indicator -->
    <div class="hero-scroll">
      <span><?php esc_html_e( 'Scroll', 'baysolar' ); ?></span>
      <div class="hero-scroll-line"></div>
    </div>
  </section>

  <!-- Who We Are -->
  <section class="about-section" id="about">
    <div class="container about-grid">
      <div class="about-image">
        <img src="<?php echo baysolar_image( 'about-new.jpg' ); ?>" alt="<?php esc_attr_e( 'Bay Solar team at work', 'baysolar' ); ?>" width="1536" height="2048" loading="lazy">
      </div>
      <div class="about-text">
        <h4 class="section-subtitle"><?php esc_html_e( 'Who Are We?', 'baysolar' ); ?></h4>
        <h2><?php esc_html_e( 'A Team of Professional Solar Experts', 'baysolar' ); ?></h2>
        <p><?php esc_html_e( 'We are a team of full serviced professional solar experts offering high quality Solar PV solutions. With over 20 years of experience and fully MCS credited, we provide reliable and efficient solar installations tailored to your needs.', 'baysolar' ); ?></p>
        <p><?php esc_html_e( 'From initial consultation to final installation, we guide you through every step of the process, ensuring you get the best solar solution for your property.', 'baysolar' ); ?></p>
        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>" class="btn btn-primary"><?php esc_html_e( 'Learn More', 'baysolar' ); ?></a>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="services-section" id="services">
    <div class="container">
      <div class="section-header">
        <h4 class="section-subtitle"><?php esc_html_e( 'What We Do', 'baysolar' ); ?></h4>
        <h2><?php esc_html_e( 'Our Services', 'baysolar' ); ?></h2>
      </div>
      <div class="services-grid">
        <div class="service-card">
          <div class="service-image">
            <img src="<?php echo baysolar_image( 'domestic-new.jpg' ); ?>" alt="<?php esc_attr_e( 'Domestic Solar Installation', 'baysolar' ); ?>" width="1536" height="2048" loading="lazy">
          </div>
          <div class="service-content">
            <span class="service-tag"><?php esc_html_e( 'Residential', 'baysolar' ); ?></span>
            <h3><?php esc_html_e( 'Domestic', 'baysolar' ); ?></h3>
            <p><?php esc_html_e( 'We specialise in all areas of domestic installs, from in-roof to on-roof installation options tailored to each client\'s needs.', 'baysolar' ); ?></p>
            <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>" class="service-link"><?php esc_html_e( 'Get a Quote', 'baysolar' ); ?> <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
          </div>
        </div>
        <div class="service-card">
          <div class="service-image">
            <img src="<?php echo baysolar_image( 'business-new.jpg' ); ?>" alt="<?php esc_attr_e( 'Business Solar Installation', 'baysolar' ); ?>" width="1200" height="900" loading="lazy">
          </div>
          <div class="service-content">
            <span class="service-tag"><?php esc_html_e( 'Commercial', 'baysolar' ); ?></span>
            <h3><?php esc_html_e( 'Business', 'baysolar' ); ?></h3>
            <p><?php esc_html_e( 'Solar solutions to lower your energy costs. We guide businesses through energy cost reduction strategies and equipment selection.', 'baysolar' ); ?></p>
            <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>" class="service-link"><?php esc_html_e( 'Get a Quote', 'baysolar' ); ?> <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
          </div>
        </div>
        <div class="service-card">
          <div class="service-image">
            <img src="<?php echo baysolar_image( 'enterprise-new.jpg' ); ?>" alt="<?php esc_attr_e( 'Solar Panel Evaluation & Safety Checks', 'baysolar' ); ?>" width="1564" height="2048" loading="lazy">
          </div>
          <div class="service-content">
            <span class="service-tag"><?php esc_html_e( 'Maintenance', 'baysolar' ); ?></span>
            <h3><?php esc_html_e( 'Solar Evaluation & Safety', 'baysolar' ); ?></h3>
            <p><?php esc_html_e( 'We evaluate and update older solar systems to ensure they\'re running at peak efficiency. Our comprehensive safety checks and system assessments keep your installation compliant and performing optimally.', 'baysolar' ); ?></p>
            <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>" class="service-link"><?php esc_html_e( 'Book an Inspection', 'baysolar' ); ?> <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="testimonials-section" id="testimonials">
    <div class="container">
      <div class="section-header">
        <h4 class="section-subtitle"><?php esc_html_e( 'What Our Clients Say', 'baysolar' ); ?></h4>
        <h2><?php esc_html_e( 'Testimonials', 'baysolar' ); ?></h2>
      </div>
      <div class="testimonials-grid">
        <?php
        $testimonials = array(
            array(
                'text'    => 'Excellent value for money, customer satisfaction, quality of components and workmanship. The team were always responsive to our inquiries and delivered beyond expectations.',
                'name'    => 'Brian & Caroline Warren',
                'type'    => 'Domestic Installation',
                'image'   => 'testimonial.jpg',
            ),
            array(
                'text'    => 'Fantastic service from start to finish. The team at Bay Solar made the entire process smooth and stress-free. Our energy bills have dropped significantly since installation.',
                'name'    => 'James Thompson',
                'type'    => 'Business Installation',
                'image'   => '',
            ),
            array(
                'text'    => 'Professional, efficient and great value. Bay Solar installed panels on our care home and the savings have been remarkable. Highly recommend their enterprise services.',
                'name'    => 'Sarah Mitchell',
                'type'    => 'Enterprise Installation',
                'image'   => '',
            ),
        );

        foreach ( $testimonials as $testimonial ) :
        ?>
        <div class="testimonial-card">
          <div class="testimonial-stars">
            <?php for ( $i = 0; $i < 5; $i++ ) : ?>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="#f5a623"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <?php endfor; ?>
          </div>
          <p class="testimonial-text">&ldquo;<?php echo esc_html( $testimonial['text'] ); ?>&rdquo;</p>
          <div class="testimonial-author">
            <?php if ( ! empty( $testimonial['image'] ) ) : ?>
            <img src="<?php echo baysolar_image( $testimonial['image'] ); ?>" alt="<?php echo esc_attr( $testimonial['name'] ); ?>" width="160" height="160" loading="lazy">
            <?php endif; ?>
            <div>
              <h4><?php echo esc_html( $testimonial['name'] ); ?></h4>
              <span><?php echo esc_html( $testimonial['type'] ); ?></span>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Certificates & Accreditation Section -->
  <section class="accreditation-section" id="accreditations">
    <div class="container">
      <div class="section-header">
        <h4 class="section-subtitle"><?php esc_html_e( 'Trusted & Certified', 'baysolar' ); ?></h4>
        <h2><?php esc_html_e( 'Certificates & Accreditation', 'baysolar' ); ?></h2>
        <p class="section-desc"><?php esc_html_e( "We're proud to be fully certified and partnered with industry-leading organisations, ensuring the highest standards for every installation.", 'baysolar' ); ?></p>
      </div>
      <div class="accreditation-grid">
        <div class="accreditation-card">
          <div class="accreditation-logo">
            <img src="<?php echo baysolar_image( 'mcs-certified.jpg' ); ?>" alt="<?php esc_attr_e( 'MCS Certified', 'baysolar' ); ?>" width="501" height="501" loading="lazy">
          </div>
          <h3><?php esc_html_e( 'MCS Certified', 'baysolar' ); ?></h3>
          <p><?php esc_html_e( 'Microgeneration Certification Scheme — the mark of quality for renewable energy installations in the UK.', 'baysolar' ); ?></p>
        </div>
        <div class="accreditation-card">
          <div class="accreditation-logo">
            <img src="<?php echo baysolar_image( 'recc-approved.jpg' ); ?>" alt="<?php esc_attr_e( 'RECC Approved', 'baysolar' ); ?>" width="302" height="173" loading="lazy">
          </div>
          <h3><?php esc_html_e( 'RECC Approved', 'baysolar' ); ?></h3>
          <p><?php esc_html_e( 'Renewable Energy Consumer Code member — protecting consumers and ensuring the highest standards of practice.', 'baysolar' ); ?></p>
        </div>
        <div class="accreditation-card">
          <div class="accreditation-logo">
            <img src="<?php echo baysolar_image( 'yesss-electrical.jpg' ); ?>" alt="<?php esc_attr_e( 'YESSS Electrical Partner', 'baysolar' ); ?>" width="376" height="134" loading="lazy">
          </div>
          <h3><?php esc_html_e( 'YESSS Electrical', 'baysolar' ); ?></h3>
          <p><?php esc_html_e( 'Official partner — sourcing premium electrical components and equipment for every installation.', 'baysolar' ); ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="cta-section">
    <div class="container cta-content">
      <h2><?php echo wp_kses_post( __( 'Ready to Switch<br>to <em>Solar</em>?', 'baysolar' ) ); ?></h2>
      <p><?php esc_html_e( 'Get in touch today for a free consultation and quote. Start saving on your energy bills.', 'baysolar' ); ?></p>
      <div class="cta-buttons">
        <a href="tel:07920864473" class="btn btn-white btn-lg"><?php esc_html_e( 'Call Mark', 'baysolar' ); ?></a>
        <a href="tel:07727804063" class="btn btn-white btn-lg"><?php esc_html_e( 'Call Liam', 'baysolar' ); ?></a>
        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>" class="btn btn-outline-white btn-lg"><?php esc_html_e( 'Get a Quote', 'baysolar' ); ?></a>
      </div>
    </div>
  </section>

<?php
get_footer();

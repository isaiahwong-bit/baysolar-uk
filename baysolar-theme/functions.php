<?php
/**
 * Bay Solar Theme Functions
 *
 * @package BaySolar
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'BAYSOLAR_VERSION', '1.0.0' );
define( 'BAYSOLAR_DIR', get_template_directory() );
define( 'BAYSOLAR_URI', get_template_directory_uri() );

/**
 * Theme setup
 */
function baysolar_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'gallery', 'caption' ) );
    add_theme_support( 'custom-logo', array(
        'height'      => 46,
        'width'       => 100,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'baysolar' ),
    ) );
}
add_action( 'after_setup_theme', 'baysolar_setup' );

/**
 * Enqueue styles and scripts
 */
function baysolar_enqueue_assets() {
    // Google Fonts
    wp_enqueue_style(
        'baysolar-google-fonts',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Work+Sans:wght@300;400;500&display=swap',
        array(),
        null
    );

    // Main stylesheet
    wp_enqueue_style(
        'baysolar-main',
        BAYSOLAR_URI . '/assets/css/main.css',
        array( 'baysolar-google-fonts' ),
        BAYSOLAR_VERSION
    );

    // Theme stylesheet (required by WordPress)
    wp_enqueue_style(
        'baysolar-style',
        get_stylesheet_uri(),
        array( 'baysolar-main' ),
        BAYSOLAR_VERSION
    );

    // Main script
    wp_enqueue_script(
        'baysolar-main',
        BAYSOLAR_URI . '/assets/js/main.js',
        array(),
        BAYSOLAR_VERSION,
        true
    );

    // Pass data to JS
    wp_localize_script( 'baysolar-main', 'baysolar', array(
        'ajax_url'  => admin_url( 'admin-ajax.php' ),
        'theme_uri' => BAYSOLAR_URI,
    ) );
}
add_action( 'wp_enqueue_scripts', 'baysolar_enqueue_assets' );

/**
 * Add preconnect for Google Fonts
 */
function baysolar_resource_hints( $urls, $relation_type ) {
    if ( 'preconnect' === $relation_type ) {
        $urls[] = array(
            'href' => 'https://fonts.googleapis.com',
        );
        $urls[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin' => 'anonymous',
        );
    }
    return $urls;
}
add_filter( 'wp_resource_hints', 'baysolar_resource_hints', 10, 2 );

/**
 * Schema.org LocalBusiness structured data
 */
function baysolar_schema_markup() {
    if ( is_front_page() ) {
        ?>
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "Bay Solar Energy Solutions",
            "description": "Professional MCS certified solar panel installations across Lancaster, Morecambe and Lancashire.",
            "url": "<?php echo esc_url( home_url( '/' ) ); ?>",
            "telephone": ["+447920864473", "+447727804063"],
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Woodgate, White Lund Industrial Estate",
                "addressLocality": "Morecambe",
                "addressRegion": "Lancashire",
                "postalCode": "LA3 3PS",
                "addressCountry": "GB"
            },
            "openingHoursSpecification": [
                { "@type": "OpeningHoursSpecification", "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"], "opens": "08:00", "closes": "17:00" },
                { "@type": "OpeningHoursSpecification", "dayOfWeek": "Saturday", "opens": "08:00", "closes": "12:00" }
            ],
            "areaServed": ["Lancaster", "Morecambe", "Lancashire"],
            "hasCredential": { "@type": "EducationalOccupationalCredential", "credentialCategory": "MCS Certification" },
            "image": "<?php echo esc_url( BAYSOLAR_URI . '/assets/images/hero-main.jpg' ); ?>"
        }
        </script>
        <?php
    }
}
add_action( 'wp_head', 'baysolar_schema_markup' );

/**
 * Custom image helper
 */
function baysolar_image( $filename ) {
    return esc_url( BAYSOLAR_URI . '/assets/images/' . $filename );
}

/**
 * Add custom body classes
 */
function baysolar_body_classes( $classes ) {
    if ( is_front_page() ) {
        $classes[] = 'home-page';
    }
    if ( is_page( 'contact' ) ) {
        $classes[] = 'contact-page';
    }
    return $classes;
}
add_filter( 'body_class', 'baysolar_body_classes' );

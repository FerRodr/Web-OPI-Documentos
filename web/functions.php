<?php
/**
 * Astra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define( 'ASTRA_THEME_VERSION', '4.13.4' );
define( 'ASTRA_THEME_SETTINGS', 'astra-settings' );
define( 'ASTRA_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'ASTRA_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );
define( 'ASTRA_THEME_ORG_VERSION', file_exists( ASTRA_THEME_DIR . 'inc/w-org-version.php' ) );

/**
 * Minimum Version requirement of the Astra Pro addon.
 * This constant will be used to display the notice asking user to update the Astra addon to the version defined below.
 */
define( 'ASTRA_EXT_MIN_VER', '4.12.0' );

/**
 * Load in-house compatibility.
 */
if ( ASTRA_THEME_ORG_VERSION ) {
	require_once ASTRA_THEME_DIR . 'inc/w-org-version.php';
}

/**
 * Setup helper functions of Astra.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-theme-options.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-theme-strings.php';
require_once ASTRA_THEME_DIR . 'inc/core/common-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-icons.php';

define( 'ASTRA_WEBSITE_BASE_URL', 'https://wpastra.com' );

/**
 * Update theme
 */
require_once ASTRA_THEME_DIR . 'inc/theme-update/astra-update-functions.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-background-updater.php';

/**
 * Fonts Files
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-font-families.php';
if ( is_admin() ) {
	require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts-data.php';
}

require_once ASTRA_THEME_DIR . 'inc/lib/webfont/class-astra-webfont-loader.php';
require_once ASTRA_THEME_DIR . 'inc/lib/docs/class-astra-docs-loader.php';
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts.php';

require_once ASTRA_THEME_DIR . 'inc/dynamic-css/custom-menu-old-header.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/container-layouts.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/astra-icons.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-walker-page.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-enqueue-scripts.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-gutenberg-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-wp-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-command-palette.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/block-editor-compatibility.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/inline-on-mobile.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/content-background.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/dark-mode.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-dynamic-css.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-global-palette.php';

// Enable NPS Survey only if the starter templates version is < 4.3.7 or > 4.4.4 to prevent fatal error.
if ( ! defined( 'ASTRA_SITES_VER' ) || version_compare( ASTRA_SITES_VER, '4.3.7', '<' ) || version_compare( ASTRA_SITES_VER, '4.4.4', '>' ) ) {
	// NPS Survey Integration
	require_once ASTRA_THEME_DIR . 'inc/lib/class-astra-nps-notice.php';
	require_once ASTRA_THEME_DIR . 'inc/lib/class-astra-nps-survey.php';
}

/**
 * Custom template tags for this theme.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-attr.php';
require_once ASTRA_THEME_DIR . 'inc/template-tags.php';

require_once ASTRA_THEME_DIR . 'inc/widgets.php';
require_once ASTRA_THEME_DIR . 'inc/core/theme-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/admin-functions.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-memory-limit-notice.php';
require_once ASTRA_THEME_DIR . 'inc/core/sidebar-manager.php';

/**
 * Markup Functions
 */
require_once ASTRA_THEME_DIR . 'inc/markup-extras.php';
require_once ASTRA_THEME_DIR . 'inc/extras.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog-config.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog.php';
require_once ASTRA_THEME_DIR . 'inc/blog/single-blog.php';

/**
 * Markup Files
 */
require_once ASTRA_THEME_DIR . 'inc/template-parts.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-loop.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-mobile-header.php';

/**
 * Functions and definitions.
 */
require_once ASTRA_THEME_DIR . 'inc/class-astra-after-setup-theme.php';

// Required files.
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-helper.php';

require_once ASTRA_THEME_DIR . 'inc/schema/class-astra-schema.php';

/* Setup API */
require_once ASTRA_THEME_DIR . 'admin/includes/class-astra-learn.php';
require_once ASTRA_THEME_DIR . 'admin/includes/class-astra-api-init.php';

if ( is_admin() ) {
	/**
	 * Admin Menu Settings
	 */
	require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-settings.php';
	require_once ASTRA_THEME_DIR . 'admin/class-astra-admin-loader.php';
	require_once ASTRA_THEME_DIR . 'inc/lib/astra-notices/class-bsf-admin-notices.php';
}

/**
 * BSF Analytics.
 */
require_once ASTRA_THEME_DIR . 'admin/class-astra-bsf-analytics.php';

/**
 * Metabox additions.
 */
require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-boxes.php';
require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-box-operations.php';
require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-elementor-editor-settings.php';

/**
 * Customizer additions.
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-customizer.php';

/**
 * Astra Modules.
 */
require_once ASTRA_THEME_DIR . 'inc/modules/posts-structures/class-astra-post-structures.php';
require_once ASTRA_THEME_DIR . 'inc/modules/related-posts/class-astra-related-posts.php';

/**
 * Compatibility
 */
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gutenberg.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-jetpack.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/woocommerce/class-astra-woocommerce.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/edd/class-astra-edd.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/lifterlms/class-astra-lifterlms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/learndash/class-astra-learndash.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bb-ultimate-addon.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-contact-form-7.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-visual-composer.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-site-origin.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gravity-forms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bne-flyout.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-ubermeu.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-divi-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-amp.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-yoast-seo.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/surecart/class-astra-surecart.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-starter-content.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-buddypress.php';
require_once ASTRA_THEME_DIR . 'inc/addons/transparent-header/class-astra-ext-transparent-header.php';
require_once ASTRA_THEME_DIR . 'inc/addons/breadcrumbs/class-astra-breadcrumbs.php';
require_once ASTRA_THEME_DIR . 'inc/addons/scroll-to-top/class-astra-scroll-to-top.php';
require_once ASTRA_THEME_DIR . 'inc/addons/heading-colors/class-astra-heading-colors.php';
require_once ASTRA_THEME_DIR . 'inc/builder/class-astra-builder-loader.php';

// Elementor Compatibility requires PHP 5.4 for namespaces.
if ( version_compare( PHP_VERSION, '5.4', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor-pro.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-web-stories.php';
}

// Beaver Themer compatibility requires PHP 5.3 for anonymous functions.
if ( version_compare( PHP_VERSION, '5.3', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-themer.php';
}

require_once ASTRA_THEME_DIR . 'inc/core/markup/class-astra-markup.php';

/**
 * Abilities API integration.
 */
require_once ASTRA_THEME_DIR . 'inc/abilities/bootstrap.php';

/**
 * Load deprecated functions
 */
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-filters.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-functions.php';

// Endpoint personalizado para propiedades con lat/lng
add_action('rest_api_init', function () {
    register_rest_route('catalogo/v1', '/propiedades', array(
        'methods' => 'GET',
        'callback' => 'obtener_propiedades_catalogo',
        'permission_callback' => '__return_true',
    ));
});

function obtener_propiedades_catalogo() {
    $args = array(
        'post_type' => 'property',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
    );

    $propiedades = get_posts($args);
    $resultado = array();

    foreach ($propiedades as $p) {
        $meta = get_post_meta($p->ID);
        $resultado[] = array(
    'id'        => $p->ID,
    'titulo'    => $p->post_title,
    'url'       => get_permalink($p->ID),
    'precio'    => get_post_meta($p->ID, 'real_estate_property_price', true),
    'size'      => get_post_meta($p->ID, 'real_estate_property_size', true),
    'recamaras' => get_post_meta($p->ID, 'real_estate_property_bedrooms', true),
    'banos'     => get_post_meta($p->ID, 'real_estate_property_bathrooms', true),
    'imagen'    => (function() use ($p) {
        $thumb = get_the_post_thumbnail_url($p->ID, 'medium');
        if ($thumb) return $thumb;
        $imgs = get_post_meta($p->ID, 'real_estate_property_images', true);
        if ($imgs) {
            $ids = explode('|', $imgs);
            return wp_get_attachment_image_url($ids[0], 'medium');
        }
        return false;
    })(),
    'lat'       => get_post_meta($p->ID, 'lat', true),
    'lng'       => get_post_meta($p->ID, 'lng', true),
    'direccion' => get_post_meta($p->ID, 'real_estate_property_address', true),
    'tipo'      => (function() use ($p) {
    $terms = wp_get_post_terms($p->ID, 'property-type', array('fields' => 'names'));
    return (!is_wp_error($terms) && !empty($terms)) ? $terms[0] : '';
})(),
'status'    => (function() use ($p) {
    $terms = wp_get_post_terms($p->ID, 'property-status', array('fields' => 'names'));
    return (!is_wp_error($terms) && !empty($terms)) ? $terms[0] : '';
})(),
);
    }

    return rest_ensure_response($resultado);
}



// ── Template override v2: página de propiedad individual ───────────────────
add_action( 'template_redirect', function() {
    if ( ! is_singular( 'property' ) ) return;

    global $post;
    $post_id = $post->ID;

    $titulo      = get_the_title( $post_id );
    $precio      = get_post_meta( $post_id, 'real_estate_property_price', true );
    $size        = get_post_meta( $post_id, 'real_estate_property_size', true );
	$land        = get_post_meta( $post_id, 'real_estate_property_land', true );
	$garage      = get_post_meta( $post_id, 'real_estate_property_garage', true );
    $recamaras   = get_post_meta( $post_id, 'real_estate_property_bedrooms', true );
    $banos       = get_post_meta( $post_id, 'real_estate_property_bathrooms', true );
    $direccion   = get_post_meta( $post_id, 'real_estate_property_address', true );
    $lat         = get_post_meta( $post_id, 'lat', true );
    $lng         = get_post_meta( $post_id, 'lng', true );
    $descripcion = apply_filters( 'the_content', $post->post_content );

    $tipo_terms   = get_the_terms( $post_id, 'property-type' );
    $status_terms = get_the_terms( $post_id, 'property-status' );
    $tipo         = ( $tipo_terms && ! is_wp_error( $tipo_terms ) ) ? $tipo_terms[0]->name : '';
    $status       = ( $status_terms && ! is_wp_error( $status_terms ) ) ? $status_terms[0]->name : '';

    $imagenes    = get_post_meta( $post_id, 'real_estate_property_images', true );
    $imagen_urls = [];
    if ( ! empty( $imagenes ) ) {
        $ids = is_array( $imagenes ) ? $imagenes : preg_split( '/[|,]/', $imagenes );
        foreach ( $ids as $img_id ) {
            $url = wp_get_attachment_image_url( absint( $img_id ), 'large' );
            if ( $url ) $imagen_urls[] = esc_url( $url );
        }
    }
    if ( empty( $imagen_urls ) && has_post_thumbnail( $post_id ) ) {
        $imagen_urls[] = get_the_post_thumbnail_url( $post_id, 'large' );
    }

    $precio_fmt      = $precio ? '$' . number_format( floatval( $precio ), 0, '.', ',' ) : '';
    $telefono_agente = '5214491181185'; 
    $mensaje_wa      = urlencode( 'Hola, me interesa la propiedad: ' . $titulo . ' - ' . get_permalink( $post_id ) );
    $wa_link         = 'https://wa.me/' . $telefono_agente . '?text=' . $mensaje_wa;
    $catalogo_url    = home_url( '/catalogo' );

    ?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo esc_html( $titulo ); ?> | <?php bloginfo('name'); ?></title>
<?php if ( $lat && $lng ) : ?>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
<?php endif; ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;500;600&family=DM+Sans:wght@400;500&display=swap" rel="stylesheet">
<style>
:root{--accent:#5C727B;--accent-light:#e8f0f2;--bg:#F5F5F5;--white:#fff;--text:#2a3e44;--muted:#4a5c61;--border:#d4dde0;--radius:10px}
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
body{font-family:'DM Sans',sans-serif;background:var(--bg);color:var(--text)}
.pp-wrapper{max-width:1140px;margin:0 auto;padding:2rem 1.25rem 4rem}
.pp-back{display:inline-flex;align-items:center;gap:6px;font-size:13px;color:var(--accent);text-decoration:none;margin-bottom:1.25rem;transition:opacity .2s}
.pp-back:hover{opacity:.75}
.pp-back svg{width:16px;height:16px}
.pp-grid{display:grid;grid-template-columns:1fr 360px;gap:1.5rem;align-items:start}
@media(max-width:860px){.pp-grid{grid-template-columns:1fr}}
.pp-gallery{display:flex;flex-direction:column;gap:8px}
.pp-gallery-main{border-radius:var(--radius);overflow:hidden;aspect-ratio:16/10;background:var(--accent-light)}
.pp-gallery-main img{width:100%;height:100%;object-fit:cover;cursor:pointer;transition:transform .3s ease}
.pp-gallery-main img:hover{transform:scale(1.02)}
.pp-gallery-thumbs{display:flex;gap:8px;flex-wrap:wrap}
.pp-gallery-thumbs img{width:80px;height:60px;object-fit:cover;border-radius:6px;cursor:pointer;border:2px solid transparent;transition:border-color .2s}
.pp-gallery-thumbs img.active,.pp-gallery-thumbs img:hover{border-color:var(--accent)}
.pp-card{background:var(--white);border-radius:var(--radius);padding:1.25rem;border:1px solid var(--border);margin-bottom:1rem}
.pp-card:last-child{margin-bottom:0}
.pp-badges{display:flex;gap:8px;flex-wrap:wrap;margin-bottom:.75rem}
.pp-badge{font-size:11px;font-weight:500;padding:3px 12px;border-radius:20px}
.pp-badge-tipo{background:var(--accent-light);color:var(--accent)}
.pp-badge-status{background:var(--accent);color:#fff}
.pp-title{font-family:'Lexend',sans-serif;font-size:clamp(17px,2.5vw,22px);font-weight:600;color:var(--text);line-height:1.3;margin-bottom:.5rem}
.pp-price{font-family:'Lexend',sans-serif;font-size:clamp(22px,3vw,28px);font-weight:600;color:var(--accent);margin-bottom:1rem}
.pp-stats{display:grid;grid-template-columns:repeat(3,1fr);gap:8px}
.pp-stat{background:var(--accent-light);border-radius:8px;padding:10px 6px;text-align:center}
.pp-stat-icon{display:block;margin:0 auto 4px;color:var(--accent)}
.pp-stat-val{display:block;font-size:14px;font-weight:500;color:var(--text)}
.pp-stat-lbl{font-size:11px;color:var(--muted)}
.pp-section-title{font-family:'Lexend',sans-serif;font-size:12px;font-weight:600;color:var(--accent);text-transform:uppercase;letter-spacing:.07em;margin-bottom:.75rem;display:flex;align-items:center;gap:8px}
.pp-section-title::after{content:'';flex:1;height:1px;background:var(--border)}
.pp-desc{font-size:14px;color:var(--muted);line-height:1.75}
.pp-addr{font-size:14px;color:var(--muted);display:flex;align-items:flex-start;gap:8px;line-height:1.5}
.pp-addr svg{width:18px;height:18px;flex-shrink:0;color:var(--accent);margin-top:1px}
#mapa-propiedad{width:100%;height:180px;border-radius:8px;margin-top:12px;z-index:1}
.pp-cta{display:flex;align-items:center;justify-content:center;gap:10px;width:100%;padding:14px 20px;background:var(--accent);color:#fff;border:none;border-radius:8px;font-family:'DM Sans',sans-serif;font-size:15px;font-weight:500;cursor:pointer;text-decoration:none;transition:background .2s,transform .1s}
.pp-cta:hover{background:#4a5f68}
.pp-cta svg{width:20px;height:20px}
.pp-lightbox{display:none;position:fixed;inset:0;background:rgba(0,0,0,.85);z-index:9999;align-items:center;justify-content:center}
.pp-lightbox.active{display:flex}
.pp-lightbox img{max-width:90vw;max-height:88vh;border-radius:8px;object-fit:contain}
.pp-lightbox-close{position:absolute;top:1.5rem;right:1.5rem;background:rgba(255,255,255,.15);border:none;color:#fff;font-size:28px;width:44px;height:44px;border-radius:50%;cursor:pointer;display:flex;align-items:center;justify-content:center}
</style>
</head>
<body>
<div class="pp-wrapper">
    <a href="<?php echo esc_url( $catalogo_url ); ?>" class="pp-back">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
        Volver al Catálogo
    </a>
    <div class="pp-grid">
        <div class="pp-gallery">
            <?php if ( ! empty( $imagen_urls ) ) : ?>
                <div class="pp-gallery-main">
                    <img id="pp-main-img" src="<?php echo $imagen_urls[0]; ?>" alt="<?php echo esc_attr($titulo); ?>">
                </div>
                <?php if ( count($imagen_urls) > 1 ) : ?>
                <div class="pp-gallery-thumbs">
                    <?php foreach ($imagen_urls as $i => $url) : ?>
                        <img src="<?php echo $url; ?>" alt="Foto <?php echo $i+1; ?>"
                             class="<?php echo $i===0?'active':''; ?>"
                             onclick="ppSetMain(this,'<?php echo $url; ?>')">
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            <?php else : ?>
                <div class="pp-gallery-main" style="display:flex;align-items:center;justify-content:center;">
                    <span style="color:var(--accent);font-size:14px;">Sin imagenes disponibles</span>
                </div>
            <?php endif; ?>
        </div>

        <div>
            <div class="pp-card">
                <div class="pp-badges">
                    <?php if($tipo)   echo '<span class="pp-badge pp-badge-tipo">'.esc_html($tipo).'</span>'; ?>
                    <?php if($status) echo '<span class="pp-badge pp-badge-status">'.esc_html($status).'</span>'; ?>
                </div>
                <h1 class="pp-title"><?php echo esc_html($titulo); ?></h1>
                <?php if($precio_fmt): ?><p class="pp-price"><?php echo esc_html($precio_fmt); ?></p><?php endif; ?>
                <div class="pp-stats">
                    <?php if($recamaras): ?>
                    <div class="pp-stat">
                        <svg class="pp-stat-icon" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 7v11M21 7v11M3 13h18M3 7a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2"/><path d="M7 13v-2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v2"/></svg>
                        <span class="pp-stat-val"><?php echo esc_html($recamaras); ?></span>
                        <span class="pp-stat-lbl">Recámaras</span>
                    </div>
                    <?php endif; ?>
                    <?php if($banos): ?>
                    <div class="pp-stat">
                        <svg class="pp-stat-icon" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h16v4a4 4 0 0 1-4 4H8a4 4 0 0 1-4-4v-4Z"/><path d="M4 12V6a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1"/></svg>
                        <span class="pp-stat-val"><?php echo esc_html($banos); ?></span>
                        <span class="pp-stat-lbl">Baños</span>
                    </div>
                    <?php endif; ?>
                    <?php if($size): ?>
<div class="pp-stat">
    <svg class="pp-stat-icon" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 3v18M3 9h18"/></svg>
    <span class="pp-stat-val"><?php echo esc_html($size); ?> m²</span>
    <span class="pp-stat-lbl">Construcción</span>
</div>
<?php endif; ?>

<?php if($land): ?>
<div class="pp-stat">
    <svg class="pp-stat-icon" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M3 21V7l9-4 9 4v14M9 21v-6h6v6"/></svg>
    <span class="pp-stat-val"><?php echo esc_html($land); ?> m²</span>
    <span class="pp-stat-lbl">Terreno</span>
</div>
<?php endif; ?>

<?php if($garage): ?>
<div class="pp-stat">
    <svg class="pp-stat-icon" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="10" width="20" height="11" rx="2"/><path d="M6 10V7a6 6 0 0 1 12 0v3"/><path d="M10 15h4"/></svg>
    <span class="pp-stat-val"><?php echo esc_html($garage); ?></span>
    <span class="pp-stat-lbl">Garage</span>
</div>
<?php endif; ?>
                </div>
            </div>

            <?php if($descripcion): ?>
            <div class="pp-card">
                <p class="pp-section-title">Descripción</p>
                <div class="pp-desc"><?php echo wp_kses_post($descripcion); ?></div>
            </div>
            <?php endif; ?>

            <?php if($direccion || ($lat && $lng)): ?>
            <div class="pp-card">
                <p class="pp-section-title">Ubicación</p>
                <?php if($direccion): ?>
                <div class="pp-addr">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.6" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/></svg>
                    <?php echo esc_html($direccion); ?>
                </div>
                <?php endif; ?>
                <?php if($lat && $lng): ?><div id="mapa-propiedad"></div><?php endif; ?>
            </div>
            <?php endif; ?>

            <a href="<?php echo esc_url($wa_link); ?>" target="_blank" class="pp-cta">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z"/></svg>
                Contactar al agente
            </a>
        </div>
    </div>
</div>

<div class="pp-lightbox" id="pp-lightbox" onclick="ppCloseLightbox()">
    <button class="pp-lightbox-close">X</button>
    <img id="pp-lightbox-img" src="" alt="">
</div>

<?php if($lat && $lng): ?>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
window.addEventListener('load',function(){
    var m=L.map('mapa-propiedad',{zoomControl:true,scrollWheelZoom:false}).setView([<?php echo floatval($lat); ?>,<?php echo floatval($lng); ?>],15);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',{attribution:'OpenStreetMap'}).addTo(m);
    var ic=L.divIcon({className:'',html:'<div style="width:14px;height:14px;background:#5C727B;border:2px solid #fff;border-radius:50%;box-shadow:0 1px 4px rgba(0,0,0,.3)"></div>',iconSize:[14,14],iconAnchor:[7,7]});
    L.marker([<?php echo floatval($lat); ?>,<?php echo floatval($lng); ?>],{icon:ic}).addTo(m);
});
</script>
<?php endif; ?>
<script>
function ppSetMain(t,u){document.getElementById('pp-main-img').src=u;document.querySelectorAll('.pp-gallery-thumbs img').forEach(function(x){x.classList.remove('active')});t.classList.add('active')}
var mi=document.getElementById('pp-main-img');
if(mi)mi.addEventListener('click',function(){document.getElementById('pp-lightbox-img').src=this.src;document.getElementById('pp-lightbox').classList.add('active')});
function ppCloseLightbox(){document.getElementById('pp-lightbox').classList.remove('active')}
document.addEventListener('keydown',function(e){if(e.key==='Escape')ppCloseLightbox()});
</script>
</body></html>
<?php
    exit;
} );
// ── Fin template override v2 ───────────────────────────────────────────────

<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementor
 */

use Elementor\WPNotificationsPackage\V110\Notifications as ThemeNotifications;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'HELLO_ELEMENTOR_VERSION', '3.3.0' );

if ( ! isset( $content_width ) ) {
	$content_width = 800; // Pixels.
}

if ( ! function_exists( 'hello_elementor_setup' ) ) {
	/**
	 * Set up theme support.
	 *
	 * @return void
	 */
	function hello_elementor_setup() {
		if ( is_admin() ) {
			hello_maybe_update_theme_version_in_db();
		}

		if ( apply_filters( 'hello_elementor_register_menus', true ) ) {
			register_nav_menus( [ 'menu-1' => esc_html__( 'Header', 'hello-elementor' ) ] );
			register_nav_menus( [ 'menu-2' => esc_html__( 'Footer', 'hello-elementor' ) ] );
		}

		if ( apply_filters( 'hello_elementor_post_type_support', true ) ) {
			add_post_type_support( 'page', 'excerpt' );
		}

		if ( apply_filters( 'hello_elementor_add_theme_support', true ) ) {
			add_theme_support( 'post-thumbnails' );
			add_theme_support( 'automatic-feed-links' );
			add_theme_support( 'title-tag' );
			add_theme_support(
				'html5',
				[
					'search-form',
					'comment-form',
					'comment-list',
					'gallery',
					'caption',
					'script',
					'style',
				]
			);
			add_theme_support(
				'custom-logo',
				[
					'height'      => 100,
					'width'       => 350,
					'flex-height' => true,
					'flex-width'  => true,
				]
			);
			add_theme_support( 'align-wide' );
			add_theme_support( 'responsive-embeds' );

			/*
			 * Editor Styles
			 */
			add_theme_support( 'editor-styles' );
			add_editor_style( 'editor-styles.css' );

			/*
			 * WooCommerce.
			 */
			if ( apply_filters( 'hello_elementor_add_woocommerce_support', true ) ) {
				// WooCommerce in general.
				add_theme_support( 'woocommerce' );
				// Enabling WooCommerce product gallery features (are off by default since WC 3.0.0).
				// zoom.
				add_theme_support( 'wc-product-gallery-zoom' );
				// lightbox.
				add_theme_support( 'wc-product-gallery-lightbox' );
				// swipe.
				add_theme_support( 'wc-product-gallery-slider' );
			}
		}
	}
}
add_action( 'after_setup_theme', 'hello_elementor_setup' );

function hello_maybe_update_theme_version_in_db() {
	$theme_version_option_name = 'hello_theme_version';
	// The theme version saved in the database.
	$hello_theme_db_version = get_option( $theme_version_option_name );

	// If the 'hello_theme_version' option does not exist in the DB, or the version needs to be updated, do the update.
	if ( ! $hello_theme_db_version || version_compare( $hello_theme_db_version, HELLO_ELEMENTOR_VERSION, '<' ) ) {
		update_option( $theme_version_option_name, HELLO_ELEMENTOR_VERSION );
	}
}

if ( ! function_exists( 'hello_elementor_display_header_footer' ) ) {
	/**
	 * Check whether to display header footer.
	 *
	 * @return bool
	 */
	function hello_elementor_display_header_footer() {
		$hello_elementor_header_footer = true;

		return apply_filters( 'hello_elementor_header_footer', $hello_elementor_header_footer );
	}
}

if ( ! function_exists( 'hello_elementor_scripts_styles' ) ) {
	/**
	 * Theme Scripts & Styles.
	 *
	 * @return void
	 */
	function hello_elementor_scripts_styles() {
		$min_suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

		if ( apply_filters( 'hello_elementor_enqueue_style', true ) ) {
			wp_enqueue_style(
				'hello-elementor',
				get_template_directory_uri() . '/style' . $min_suffix . '.css',
				[],
				HELLO_ELEMENTOR_VERSION
			);
		}

		if ( apply_filters( 'hello_elementor_enqueue_theme_style', true ) ) {
			wp_enqueue_style(
				'hello-elementor-theme-style',
				get_template_directory_uri() . '/theme' . $min_suffix . '.css',
				[],
				HELLO_ELEMENTOR_VERSION
			);
		}

		if ( hello_elementor_display_header_footer() ) {
			wp_enqueue_style(
				'hello-elementor-header-footer',
				get_template_directory_uri() . '/header-footer' . $min_suffix . '.css',
				[],
				HELLO_ELEMENTOR_VERSION
			);
		}
	}
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_scripts_styles' );

if ( ! function_exists( 'hello_elementor_register_elementor_locations' ) ) {
	/**
	 * Register Elementor Locations.
	 *
	 * @param ElementorPro\Modules\ThemeBuilder\Classes\Locations_Manager $elementor_theme_manager theme manager.
	 *
	 * @return void
	 */
	function hello_elementor_register_elementor_locations( $elementor_theme_manager ) {
		if ( apply_filters( 'hello_elementor_register_elementor_locations', true ) ) {
			$elementor_theme_manager->register_all_core_location();
		}
	}
}
add_action( 'elementor/theme/register_locations', 'hello_elementor_register_elementor_locations' );

if ( ! function_exists( 'hello_elementor_content_width' ) ) {
	/**
	 * Set default content width.
	 *
	 * @return void
	 */
	function hello_elementor_content_width() {
		$GLOBALS['content_width'] = apply_filters( 'hello_elementor_content_width', 800 );
	}
}
add_action( 'after_setup_theme', 'hello_elementor_content_width', 0 );

if ( ! function_exists( 'hello_elementor_add_description_meta_tag' ) ) {
	/**
	 * Add description meta tag with excerpt text.
	 *
	 * @return void
	 */
	function hello_elementor_add_description_meta_tag() {
		if ( ! apply_filters( 'hello_elementor_description_meta_tag', true ) ) {
			return;
		}

		if ( ! is_singular() ) {
			return;
		}

		$post = get_queried_object();
		if ( empty( $post->post_excerpt ) ) {
			return;
		}

		echo '<meta name="description" content="' . esc_attr( wp_strip_all_tags( $post->post_excerpt ) ) . '">' . "\n";
	}
}
add_action( 'wp_head', 'hello_elementor_add_description_meta_tag' );

// Admin notice
if ( is_admin() ) {
	require get_template_directory() . '/includes/admin-functions.php';
}

// Settings page
require get_template_directory() . '/includes/settings-functions.php';

// Header & footer styling option, inside Elementor
require get_template_directory() . '/includes/elementor-functions.php';

if ( ! function_exists( 'hello_elementor_customizer' ) ) {
	// Customizer controls
	function hello_elementor_customizer() {
		if ( ! is_customize_preview() ) {
			return;
		}

		if ( ! hello_elementor_display_header_footer() ) {
			return;
		}

		require get_template_directory() . '/includes/customizer-functions.php';
	}
}
add_action( 'init', 'hello_elementor_customizer' );

if ( ! function_exists( 'hello_elementor_check_hide_title' ) ) {
	/**
	 * Check whether to display the page title.
	 *
	 * @param bool $val default value.
	 *
	 * @return bool
	 */
	function hello_elementor_check_hide_title( $val ) {
		if ( defined( 'ELEMENTOR_VERSION' ) ) {
			$current_doc = Elementor\Plugin::instance()->documents->get( get_the_ID() );
			if ( $current_doc && 'yes' === $current_doc->get_settings( 'hide_title' ) ) {
				$val = false;
			}
		}
		return $val;
	}
}
add_filter( 'hello_elementor_page_title', 'hello_elementor_check_hide_title' );

/**
 * BC:
 * In v2.7.0 the theme removed the `hello_elementor_body_open()` from `header.php` replacing it with `wp_body_open()`.
 * The following code prevents fatal errors in child themes that still use this function.
 */
if ( ! function_exists( 'hello_elementor_body_open' ) ) {
	function hello_elementor_body_open() {
		wp_body_open();
	}
}

function hello_elementor_get_theme_notifications(): ThemeNotifications {
	static $notifications = null;

	if ( null === $notifications ) {
		require get_template_directory() . '/vendor/autoload.php';

		$notifications = new ThemeNotifications(
			'hello-elementor',
			HELLO_ELEMENTOR_VERSION,
			'theme'
		);
	}

	return $notifications;
}

hello_elementor_get_theme_notifications();
function soccer_category_posts_shortcode() {
    // Query arguments
    $args = array(
        'category_name' => 'soccer', // Replace with the slug of your "Soccer" category
        'posts_per_page' => 5, // Number of posts to display
    );

    // Query posts
    $query = new WP_Query($args);

    // Start output
    $output = '<div class="soccer-posts">';

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $post_id = get_the_ID();

            // Post content
            $output .= '<div class="soccer-post">';
            $output .= '<div class="soccer-post-image">' . get_the_post_thumbnail($post_id, 'medium') . '</div>';
            $output .= '<div class="soccer-post-content">';
            $output .= '<span class="soccer-category">SOCCER</span>';
            $output .= '<h2><a href="' . get_permalink() . '">' . get_the_title() . '</a></h2>';
            $output .= '<p>' . wp_trim_words(get_the_excerpt(), 20, '...') . '</p>';
            $output .= '<span class="soccer-post-meta">' . get_the_date() . ' | ' . get_the_author() . '</span>';
            $output .= '<a class="read-more" href="' . get_permalink() . '">Read More</a>';
            $output .= '</div>';
            $output .= '</div>';
        }
    } else {
        $output .= '<p>No posts found in the Soccer category.</p>';
    }

    $output .= '</div>';

    // Restore original post data
    wp_reset_postdata();

    return $output;
}
add_shortcode('soccer_posts', 'soccer_category_posts_shortcode');
function custom_marquee_posts_shortcode() {
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => -1, 
        'post_status'    => 'publish',
    );

    $query = new WP_Query($args);
    $output = '<style>
        .marquee-container { 
            white-space: nowrap; 
            overflow: hidden; 
            width: 100%;
        }
        .marquee-content { 
		text-transform: uppercase;
		font-weight: 400 !important;
		font-family: "Roboto Condensed", Arial, Helvetica, "Nimbus Sans L", sans-serif;
            display: flex; 
            align-items: center;
        }
        .marquee-content span { 
		font-family: "Roboto Condensed", Arial, Helvetica, "Nimbus Sans L", sans-serif;
            color: white; 
            font-size: 14px; 
            font-weight: 400; 
            margin: 0 15px;
        }
        .separator {
            border-left: 2px solid white;
            height: 20px;
            margin: 0 15px;
        }
    </style>';
    
    $output .= '<div class="marquee-container">
        <marquee behavior="scroll" direction="left">
            <div class="marquee-content">';
    
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $output .= '<span>' . get_the_title() . '</span><div class="separator"></div>';
        }
    }

    $output .= '</div></marquee></div>';
    
    wp_reset_postdata();
    
    return $output;
}

add_shortcode('marquee_posts', 'custom_marquee_posts_shortcode');
function display_bicycle_posts_with_image_right() {
    $args = array(
        'category_name'  => 'feature', // Category slug
        'posts_per_page' => 3, // 3 posts display karega
    );

    $query = new WP_Query($args);
    $output = '<ul style="list-style-type: none; padding: 0;">';

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $post_image = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); // Image URL
            $output .= '<li style="display: flex; align-items: center; margin-bottom: 15px;">';
            if ($post_image) {
                $output .= '<img src="' . $post_image . '" alt="' . get_the_title() . '" style="width: 100px; height: auto; margin-right: 20px;">';
            }
            $output .= '<div>';
			$output .= '<span style="color: white;">' . get_the_date('d M Y') . '</span>';
            $output .= '<h2 class="hee" style="display: block; color: white; font-size: 16px; font-family: "Roboto Condensed", Arial, Helvetica, "Nimbus Sans L", sans-serif;">' . get_the_title() . '</h2>';
           
            $output .= '</div>';
            $output .= '</li>';
        }
        wp_reset_postdata();
    } else {
        $output .= '<li>No posts found.</li>';
    }

    $output .= '</ul>';
    return $output;
}

add_shortcode('bicycle_posts_with_image_right', 'display_bicycle_posts_with_image_right');
function display_soccer_posts_with_image_right() {
    $args = array(
        'category_name'  => 'soccer', // Category slug (soccer)
        'posts_per_page' => 3, // 3 posts display karega
    );

    $query = new WP_Query($args);
    $output = '<ul style="list-style-type: none; padding: 0;">';

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $post_image = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); // Image URL
            $output .= '<li style="display: flex; align-items: center; margin-bottom: 15px;">';
            if ($post_image) {
                $output .= ' <img src="' . $post_image . '" alt="' . get_the_title() . '" style="width: 100px; height: auto; margin-right: 20px;">';
            }
            $output .= '<div>';
			$output .= '<span style="color: white;">' . get_the_date('d M Y') . '</span>';
            $output .= '<h2 class= "hee" style="display: block; color: white; font-size: 16px; font-family: "Roboto Condensed", Arial, Helvetica, "Nimbus Sans L", sans-serif;">' . get_the_title() . '</h2>';
          
            $output .= '</div>';
            $output .= '</li>';
        }
        wp_reset_postdata();
    } else {
        $output .= '<li>No posts found.</li>';
    }

    $output .= '</ul>';
    return $output;
}

add_shortcode('soccer_posts_with_image_right', 'display_soccer_posts_with_image_right');
function display_all_categories_excluding_uncategorized() {
    $args = array(
        'orderby' => 'name', // Category ko name ke according order kare
        'hide_empty' => false, // Chhupaye bina sabhi categories dikhaye
        'exclude' => get_cat_ID('Uncategorized'), // 'Uncategorized' category ko exclude kare
    );
    
    $categories = get_categories($args);
    $output = '<ul style="list-style-type: none; padding: 0;">';

    foreach ($categories as $category) {
        $category_link = get_category_link($category->term_id);
        $output .= '<li style="margin-bottom: 10px;">';
        $output .= '<a href="' . esc_url($category_link) . '" style="text-decoration: none; text-transform:capitalize; font-weight:300px !important; color:white">' . esc_html($category->name) . '</a>';
        $output .= '</li>';
    }

    $output .= '</ul>';
    return $output;
}

add_shortcode('all_categories_excluding_uncategorized', 'display_all_categories_excluding_uncategorized');

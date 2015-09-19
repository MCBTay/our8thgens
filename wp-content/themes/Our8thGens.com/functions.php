<?php
    /* Enqueue Mobbern CSS */
    function theme_enqueue_styles() {
        wp_enqueue_style( 'font-awesome', '/forum/styles/Mobbern3.1/theme/css/font-awesome.min.css', false, '0.5' );

        wp_enqueue_style( 'mobbern-stylesheet', '/forum/styles/Mobbern3.1/theme/stylesheet.css', array( 'font-awesome' ), '0.5', 'screen, projection' );
        wp_enqueue_style( 'mobbern', '/forum/styles/Mobbern3.1/theme/mobbern.css', array( 'mobbern-stylesheet' ), '0.5', 'screen, projection' );
        wp_enqueue_style( 'mobbern-responsive', '/forum/styles/Mobbern3.1/theme/mobbern-responsive.css', array( 'mobbern' ), '0.5', 'screen, projection' );

        wp_enqueue_style( 'color-theme', '/forum/styles/Mobbern3.1/theme/color-theme.css', array( 'mobbern-responsive' ), '0.5' );
        wp_enqueue_style( 'mobbern-style', '/forum/styles/Mobbern3.1/theme/style.css', array( 'color-theme' ), '0.5' );

        wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'mobbern-style' ), '0.5' );
    }
    add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
    /* End Enqueue Mobbern CSS */

    /* Enqueue Mobbern JS */
    function theme_enqueue_scripts() {
        wp_enqueue_script( 'jquery' );

        wp_enqueue_script( 'bootstrap', '/forum/styles/Mobbern3.1/theme/js/bootstrap.min.js', false, '0.5', true );
        wp_enqueue_script( 'jquery-nicescroll', '/forum/styles/Mobbern3.1/theme/js/jquery.nicescroll.js', array('jquery'), '0.5', true );
        wp_enqueue_script( 'jquery-cookie', '/forum/styles/Mobbern3.1/theme/js/jquery.cookie.js', array('jquery'), '0.5', true );
        wp_enqueue_script( 'mobbern-js', get_stylesheet_directory_uri() . '/mobbern-js.js', array('jquery'), '0.5', true );
    }
    add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );
    /* End Enqueue Mobbern JS */

    /* WooCommerce Hooks */

    /* Remove default WooCommerce Content Wrappers */
    remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
    remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

    add_action('woocommerce_before_main_content', 'our8thgens_wrapper_start', 10);
    add_action('woocommerce_after_main_content', 'our8thgens_wrapper_end', 10);

    function our8thgens_wrapper_start() {
        echo '<div id="left-column"><div id="content" role="main">';
    }

    function our8thgens_wrapper_end() {
        echo '</div></div>';
    }

    function df_woocommerce_single_product_image_html($html) {
        $html = str_replace('data-rel="prettyPhoto[product-gallery]', 'rel="lightbox[gallery-1]', $html);
        return $html;
    }
    add_filter('woocommerce_single_product_image_html', 'df_woocommerce_single_product_image_html', 99, 1); // single image
    add_filter('woocommerce_single_product_image_thumbnail_html', 'df_woocommerce_single_product_image_html', 99, 1); // thumbnails



    function addlightboxrel_replace ($content)
    {	global $post;
        //$pattern = "/<a(.*?)href=('|\")(.*?).(bmp|gif|jpeg|jpg|png)('|\")(.*?)>/i";
        $pattern = "/data-rel=\"lightbox\[gallery-.*\]\"";

        $replacement = '<a$1rel="lightbox[gallery-1]" href=$2$3.$4$5$6</a>';
        $content = preg_replace($pattern, $replacement, $content);
        $content = str_replace("%LIGHTID%", $post->ID, $content);
        return $content;
    }
    //add_filter('the_content', 'addlightboxrel_replace');

    // Disable lightbox on blog page?


    // Remove ordering drop down on Products page
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );


    /* WooCommerce Hooks End */

    /* Remove inline style for gallery shortcode */
    add_filter('use_default_gallery_style', '__return_false' );

    add_action( 'widgets_init', 'child_register_sidebar' );

    function child_register_sidebar(){
        register_sidebar(array(
            'name' => 'Sidebar 2',
            'id' => 'sidebar-2',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widgettitle">',
            'after_title' => '</h4>',
        ));
    }
?>
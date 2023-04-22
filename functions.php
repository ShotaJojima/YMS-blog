<?php
    

    add_action('wp_enqueue_scripts', 'add_styles');

    function add_styles() {
        // reset style
        wp_register_style(
            'reset_style',
            get_template_directory_uri() . '/css/reset.css',
            array(),
            '1.0'
        );

         // main style
        wp_enqueue_style(
            'main_style',
            get_template_directory_uri() . '/css/main.css',
            array('reset_style'),
            '1.0'
        );
    }

    add_action( 'wp_enqueue_scripts', 'add_scripts' );

    function add_scripts() {
        wp_deregister_script('jquery');

        wp_register_script(
            'jquery_script',
            'https://code.jquery.com/jquery-3.6.1.min.js',
            array(),
            '1.0'
        );

        wp_enqueue_script(
            'main_script',
            get_template_directory_uri() . '/js/main.js',
            array('jquery_script'),
            '1.0'
        );

    }


    add_filter('script_loader_tag', 'add_defer', 10, 2);
        
        function add_defer($tag, $handle) {
            // 識別名がmain_script以外はそのまま返却
            if ($handle !== 'main_script') {
                return $tag;
            }

            // deferを追加して返却する
            return str_replace(' src=', ' defer src=', $tag);
        }

        add_theme_support( 'post-thumbnails' );

        add_filter( 'wpcf7_autop_or_not', '__return_false' ); 
    
    
?>
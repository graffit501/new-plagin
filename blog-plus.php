<?php
    /*
    Plugin Name: Blog plus
    Plugin URI: http://vk.com/graffit401
    Description: Use only english for inner texts
    Version:  1.0
    Author: SerG
    Author URI: http://vk.com/graffit401
    License:      GPL2
    License URI:  https://www.gnu.org/licenses/gpl-2.0.html
    Text Domain:  blog-plus
    */
     register_activation_hook(__FILE__,'sga_activate');
    function sga_activate(){
        wp_mail(get_bloginfo('admin_email'),'Активация плагина','Активация прошла успешно');
        }
    add_action('admin_menu', function(){
        add_options_page('Google Analytics', 'Google Analytics', 'manage_options', 'blog_plus_admin_menu_ga', function(){
            ob_start();
            include sprintf("admin_page/google_analytics.php");
            echo ob_get_clean();
        });
    });
?>

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
     register_activation_hook(__FILE__,function(){
        if (version_compare(PHP_VERSION, '5.3.0','<')) {
            header("content-type: text/html; Charset=utf-8");
            exit('Для работы плагина нужна версия php >=5.3.0');
        } 
    add_action('admin_menu', function(){
        add_options_page('Google Analytics', 'Google Analytics', 'manage_options', 'blog_plus_admin_menu_ga', function(){
            ob_start();
            include sprintf("admin_page/google_analytics.php");
            echo ob_get_clean();
        });
    });
        register_deactivation_hook(__FILE__,function(){
         $date="[".  date("Y-n-d H:i:s") ."]";
         error_log($date. " Плагин деактивирован\r\n", 3, dirname(__FILE__) . '/sga_errors_log.log');
     });
?>
